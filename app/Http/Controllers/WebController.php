<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
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
        $product =Product::find(1400);
        $cate = $product['category_id'];
        $product123 = Product::where("category_id",$cate)->take(4)->orderBy('product_name','asc')->get();
        return view("product",["product"=>$product,"product123"=>$product123]);

    }
    public function store(Request $request) {
        $categoryId = $request->get('categoryId');
        $Category= Category::get();
        $Brand= Brand::get();

        if ($categoryId) {
            $category = Product::where("category_id",$categoryId)->take(6)->orderBy('price','desc')->get();
            $categorys = Product::where("category_id", $categoryId)->take(3)-> orderBy('price')->get();
        }
        else {
            $category = Product::take(6)->orderBy('price','desc')->get();
            $categorys = Product::take(3)-> orderBy('price')->get();
        }



        return view("store",['category'=>$category,'Category'=>$Category,'brand'=>$Brand,'categorys'=>$categorys]);
    }
    public function checkout(){

        return view("checkout");
    }
}
