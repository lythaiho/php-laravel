<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class Webcontroller extends Controller
{

    public function homePage(){
        $products = Product::take(10)->orderBy('product_name','asc')->get(); // trả lại một collection với mỗi phần tử là 1 object Product
        $laptops = Product::where("category_id",1)->take(10)->orderBy('product_name','asc')->get();
        $smartphone = Product::where("category_id",2)->take(10)->orderBy('product_name','asc')->get();
        $camera = Product::where("category_id",3)->take(10)->orderBy('product_name','asc')->get();
        $accessories = Product::where("category_id",4)->take(10)->orderBy('product_name','asc')->get();
        return view("home-page",["products"=>$products,"laptops"=>$laptops,
            "smartphone"=>$smartphone,"camera"=>$camera,"accessories"=>$accessories]);
    }

    public function product(){
        $products =Product::find(1);
        return view("product");
    }
    public function store(){
        $products =Product::where("category",5)->take(10)->orderBy('product_name','asc')->get();
        
        return view("store");
    }public function checkout(){

        return view("checkout");
    }
}
