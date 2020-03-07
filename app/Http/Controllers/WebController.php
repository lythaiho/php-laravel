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
        $products = Product::take(10)->orderBy('product_name','asc')->get(); // trả lại một collection với mỗi phần tử là 1 object Product
        $Laptops = Product::where("category_id",1)->take(10)->orderBy('product_name','asc')->get();
        $Smartphone = Product::where("category_id",2)->take(10)->orderBy('product_name','asc')->get();
        $Tablet = Product::where("category_id",3)->take(10)->orderBy('product_name','asc')->get();
        return view("home-page",["Category_new"=>$Category_new,"Category_hot"=>$Category_hot,"products"=>$products,"Laptops"=>$Laptops,
            "Smartphone"=>$Smartphone,"Tablet"=>$Tablet]);
    }

    public function product($id){
        $product =Product::find($id);
        $product_cate = Product::where("category_id",$product->category_id)->take(4)->orderBy('product_name','asc')->get();
        $product_brand = Product::where("brand_id",$product->brand_id)->take(4)->orderBy('product_name','asc')->get();
        return view("product",["product"=>$product,"product_cate"=>$product_cate,"product_brand"=>$product_brand]);

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
    public function checkout(Request $resCheck){
        $product_id = $resCheck->get('product_id');
        $product =Product::find($product_id);
        return view("checkout",["product"=>$product]);
    }
}
