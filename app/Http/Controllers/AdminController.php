<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use App\Category;

class AdminController extends Controller
{
    //category start
    public function category(){
        $categories = Category::all();
        return view('admin.category.index',['categories'=>$categories]);
    }

    public function categoryCreate(){
        return view("admin.category.create");
    }

    public function categoryStore(Request $request){
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
        $category = Category::find($id);
        return view("admin.category.edit",['category'=>$category]);
    }

    public function categoryUpdate($id,Request $request){
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
        $categories = Brand::all();
        return view('admin.brand.index',['categories'=>$categories]);
    }

    public function brandCreate(){
        return view("admin.brand.create");
    }

    public function brandStore(Request $request){
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
        $brand = Brand::find($id);
        return view("admin.brand.edit",['brand'=>$brand]);
    }

    public function brandUpdate($id,Request $request){
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
}