<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class Webcontroller extends Controller
{

    public function homePage(){
        $Category_new= Category::get();
        $Category_hot= Category::get();
        $Category_sell= Category::get();
        $products = Product::take(10)->orderBy('product_name','asc')->get(); // trả lại một collection với mỗi phần tử là 1 object Product
        $Laptops = Product::where("category_id",1)->take(6)->orderBy('product_name','asc')->get();
        $Smartphone = Product::where("category_id",2)->take(6)->orderBy('product_name','asc')->get();
        $Tablet = Product::where("category_id",3)->take(6)->orderBy('product_name','asc')->get();
        return view("home-page",["Category_new"=>$Category_new,"Category_hot"=>$Category_hot,"products"=>$products,"Laptops"=>$Laptops,
            "Smartphone"=>$Smartphone,"Tablet"=>$Tablet,"Category_sell"=>$Category_sell,]);
    }

    public function product($id){
        $product =Product::find($id);
        $product_cate = Product::where("category_id",$product->category_id)->take(4)->orderBy('product_name','asc')->get();
        $product_brand = Product::where("brand_id",$product->brand_id)->take(4)->orderBy('product_name','asc')->get();
        return view("product",["product"=>$product,"product_cate"=>$product_cate,"product_brand"=>$product_brand]);

    }
    public function store($id) {
        $Category_name = Category::get();
        $Brand_name = Brand::get();
        $category= Category::find($id);
        //$category >Products ; //Lấy tất cả product của category này
       return view("store",['Category_name'=>$Category_name,'Brand_name'=>$Brand_name,'category'=>$category]);
    }
    public function checkout($id){
        $product =Product::find($id);
        return view("checkout",["product"=>$product]);
    }
}
