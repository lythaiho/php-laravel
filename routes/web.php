<?php

// route for admin
Route::prefix("admin")->middleware("check_admin")->group(function (){
    include_once ("admin.php");
});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::METHOD(path_string,HANDLE_FUNCTION);
// method: post get put delete .... CRUD

/*
 *Luu ý
 *chạy URL trên trình duyệt -> Method GET
 */

// Route::Method(path_string, Controller@function_in_controller);
Route::get("/","WebController@homePage");
Route::get("/product/{id}","WebController@product");
Route::get("/store/{id}","WebController@store");
Route::get("/shopping/{id}","WebController@shopping")->middleware("auth");
Route::get("/checkout","WebController@checkout")->middleware("auth");
Route::post("checkout",'WebController@placeOrder')->middleware("auth");
Route::get("shopping-success",'WebController@checkoutSuccess')->middleware("auth");
Route::get("/cart","WebController@cart");
Route::get("/clear-cart","WebController@clearCart");
Route::get("/clearCart/{id}","WebController@clearOneCart");
Auth::routes();

Route::get('/logout', function (){
    \Illuminate\Support\Facades\Auth::logout();
    session()->flush();
    return redirect()->to("/login");
});

