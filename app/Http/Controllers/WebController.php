<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Mail\OrderCreated;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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


    public function shopping($id, Request $request)
    {
        $product = Product::find($id);
        //session(['key'=>'value']);// truyen mot gia tri vao session theo key
        /*
         * cart => array product (product->cart_qty= so luong mua)
         */
        $cart = $request->session()->get("cart");
        if ($cart == null) {
            $cart = [];
        }

        foreach ($cart as $p) {
            if ($p->id == $product->id) {
                $p->cart_qty = $p->cart_qty + 1;
                session(["cart"=>$cart]);
                return redirect()->to("cart");
            }
        }
        $product->cart_qty =1;
        $cart[]= $product;
        session(["cart"=>$cart]);
        return redirect()->to("cart");

    }
    public function cart(Request $request)
    {
        $cart=$request->session()->get("cart");
        if ($cart == null) {
            $cart = [];
        }
        $cart_total =0;
        foreach ($cart as $p){
            $cart_total +=($p->price*$p->cart_qty);
        }
        return view("cart",["cart"=>$cart,"cart_total"=>$cart_total]);
    }
    public function clearCart(Request $request)
    {
        $request->session()->forget("cart");

        return redirect()->to("/");
    }
    public function checkout(Request $request){
        if(!$request->session()->has("cart")){
            return redirect()->to("/");
        }


        $cart=$request->session()->get("cart");
        $cart_total =0;
        foreach ($cart as $p){
            $cart_total +=($p->price*$p->cart_qty);
        }
        return view("checkout",["cart"=>$cart,"cart_total"=>$cart_total]);
    }

    public function placeOrder(Request $request){
        $request->validate([
           'customer_name'=>'required | string',
           'shipping_address'=>'required',
           'payment_method'=>'required',
           'telephone'=>'required',
        ]);
        $cart =$request->session()->get("cart");
        $grand_total=0;
        foreach ($cart as $p){
            $grand_total+=($p->price * $p->cart_qty);
        }
        $order =Order::create([
           'user_id'=>Auth::id(),
            'customer_name'=>$request->get("customer_name"),
            'shipping_address'=>$request->get("shipping_address"),
            'telephone'=>$request->get("telephone"),
            'grand_total'=>$grand_total,
            'payment_method'=>$request->get("payment_method"),
            'status'=>Order::STATUS_PENDING
        ]);
        foreach ($cart as $p){
            DB::table("orders_product")->insert([
                'order_id'=>$order->id,
                'product_id'=>$order->id,
                'qty'=>$p->cart_qty,
                'price'=>$p->price,

            ]);
        }
        session()->forget('cart');
        Mail::to("lythaiho.95.cscd@gmail.com")->send(new OrderCreated());
        return redirect()->to("shopping-success");
    }
    public function checkoutSuccess(){
        return view("shopping-success");
    }
    public function clearOneCart($id,Request $request)
    {
        $cart=$request->session()->get("cart");
        foreach($cart as $key => $value){
            //dd($cart[$i]->id);
            if($value->id == $id){
               // dd($cart[$i]);
                unset($cart[$key]);
                //$request->session()->forget($id);
            }
        }
        $request->session()->put("cart",$cart);

        return redirect()->to("/cart");
    }

}
