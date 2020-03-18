<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use App\Category;

class AdminController extends Controller
{
    //category start
    public function category(){
        //kiem tra co phai admin hay khong
        $categories = Category::all();
        return view('admin.category.index',['categories'=>$categories]);
    }

    public function categoryCreate(){
        //kiem tra co phai admin hay khong
        return view("admin.category.create");
    }

    public function categoryStore(Request $request){
        //kiem tra co phai admin hay khong
        $request->validate([ // truyen vao rules de validate
            "category_name"=> "required|string|unique:category"  // validation laravel
        ]);
        try {
            Category::create([
                "category_name"=> $request->get("category_name")
            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/category");
    }

    public function categoryEdit($id){
        //kiem tra co phai admin hay khong
        $category = Category::find($id);
        return view("admin.category.edit",['category'=>$category]);
    }

    public function categoryUpdate($id,Request $request){
        //kiem tra co phai admin hay khong
        $category = Category::find($id);
        $request->validate([ // truyen vao rules de validate
            "category_name"=> "required|string|unique:category,category_name,".$id
        ]);
        try {
            $category->update([
                "category_name"=> $request->get('category_name')
            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/category");
    }

    public function categoryDestroy($id){
        //kiem tra co phai admin hay khong
        $category = Category::find($id);
        try {
            $category->delete(); // xoa cung // CRUD
            // xoa mem
            // them 1 truong status : 0: Inactive; 1: active
            // chuyen status tu 1 -> 0
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/category");
    }
    //category end

    //brand start
    public function brand(){
        //kiem tra co phai admin hay khong
        $categories = Brand::all();
        return view('admin.brand.index',['categories'=>$categories]);
    }

    public function brandCreate(){
        //kiem tra co phai admin hay khong
        return view("admin.brand.create");
    }

    public function brandStore(Request $request){
        //kiem tra co phai admin hay khong
        $request->validate([ // truyen vao rules de validate
            "brand_name"=> "required|string|unique:brand"  // validation laravel
        ]);
        try {
            Brand::create([
                "brand_name"=> $request->get("brand_name")
            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/brand");
    }

    public function brandEdit($id){
        //kiem tra co phai admin hay khong
        $brand = Brand::find($id);
        return view("admin.brand.edit",['brand'=>$brand]);
    }

    public function brandUpdate($id,Request $request){
        //kiem tra co phai admin hay khong
        $brand = Brand::find($id);
        $request->validate([ // truyen vao rules de validate
            "brand_name"=> "required|string|unique:brand,brand_name,".$id
        ]);
        try {
            $brand->update([
                "brand_name"=> $request->get('brand_name')
            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/brand");
    }

    public function brandDestroy($id){
        //kiem tra co phai admin hay khong
        $brand = Brand::find($id);
        try {
            $brand->delete(); // xoa cung // CRUD
            // xoa mem
            // them 1 truong status : 0: Inactive; 1: active
            // chuyen status tu 1 -> 0
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/brand");
    }
    //brand end
    //product start
    public function product(){
        //kiem tra co phai admin hay khong
        $product = Product::all();
        return view('admin.product.index',['product'=>$product]);
    }

    public function productCreate(){
        //kiem tra co phai admin hay khong
        return view("admin.product.create");
    }

    public function productStore(Request $request){
        //kiem tra co phai admin hay khong
        $request->validate([
            'product_name' => 'required|string|unique:products',
            'product_desc' => 'required',
            'product_thumbnail' => 'required',
            'product_gallery' => 'required',
            'brand_name' => 'required|exists:brands',
            'category_name' => 'required|exists:categories',
            'quantity' => 'required',
            'price' => 'required'
        ]);

        try {
            Product::create([
                'product_name' => $request->get('product_name'),
                'product_desc' => $request->get('product_desc'),
                'product_thumbnail' => $request->get('product_thumbnail'),
                'product_gallery' => $request->get('product_gallery'),
                'brand_id' => $request->get('brand_id'),
                'category_id' => $request->get('category_id'),
                'quantity' => $request->get('quantity'),
                'price' => $request->get('price'),

            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/product");
    }

    public function productEdit($id){
        //kiem tra co phai admin hay khong
        $product = Product::find($id);
        return view("admin.product.edit",['product'=>$product]);
    }

    public function productUpdate($id,Request $request){
        //kiem tra co phai admin hay khong
        $product = Product::find($id);
        $request->validate([
            'product_name' => [
                'required',
                Rule::unique('products')->ignore($request->get('id'))
            ],
            'product_desc' => 'required',
            'product_thumbnail' => 'required',
            'product_gallery' => 'required',
            'brand_name' => 'required|exists:brands',
            'category_name' => 'required|exists:categories',
            'quantity' => 'required',
            'price' => 'required'
        ]);
        try {
            $product->update([
                    'product_name' => $request->get('product_name'),
                    'product_desc' => $request->get('product_desc'),
                    'product_thumbnail' => $request->get('product_thumbnail'),
                    'product_gallery' => $request->get('product_gallery'),
                    'brand_id' => Brand::where('brand_name', $request->get('brand_name'))->get()[0]['id'],
                    'category_id' => Category::where('category_name', $request->get('category_name'))->get()[0]['id'],
                    'quantity' => $request->get('quantity'),
                    'price' => $request->get('price'),
                ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/product");
    }

    public function productDestroy($id){
        //kiem tra co phai admin hay khong
        $product = Product::find($id);
        try {
            $product->delete(); // xoa cung // CRUD
            // xoa mem
            // them 1 truong status : 0: Inactive; 1: active
            // chuyen status tu 1 -> 0
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/product");
    }
    //product end

    //user
    public function listUser(){
        //kiem tra co phai admin hay khong
        $listUser= User::all();
        return view("admin.users.list_user",["listUser"=>$listUser]);
    }
    public function UserCreate(){
        //kiem tra co phai admin hay khong
        return view("admin.users.create");
    }

    public function UserPost(Request $request){
        //kiem tra co phai admin hay khong
        $request->validate([ // truyen vao rules de validate
            "email"=> "required|string|max:255|unique:users",// validation laravel
            "name"=> "required|string",
            "password"=> "required|string",
        ]);
        try {
            User::create([
                "name"=> $request->get("name"),
                "email"=> $request->get("email"),
                "password"=> $request->get("password"),
            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/list-user");
    }
    public function UserEdit($id){
        //kiem tra co phai admin hay khong
        $user = User::find($id);
        return view("admin.users.edit",['user'=>$user]);
    }

    public function UserUpdate($id,Request $request){
        //kiem tra co phai admin hay khong
        $user = User::find($id);
        $request->validate([ // truyen vao rules de validate
            "email"=> "required|string|max:255|unique:users,email,".$id,// validation laravel
            "name"=> "required|string"
        ]);
        try {
            $user->update([
                "name"=> $request->get("name"),
                "email"=> $request->get("email")
            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/list-user");
    }

    public function UserDestroy($id){
        //kiem tra co phai admin hay khong
        $user = User::find($id);
        try {
            $user->delete(); // xoa cung // CRUD
            // xoa mem
            // them 1 truong status : 0: Inactive; 1: active
            // chuyen status tu 1 -> 0
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/list-user");
    }

    //user end
}