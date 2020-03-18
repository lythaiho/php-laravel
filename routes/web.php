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
Route::get("/checkout/{id}","WebController@checkout");
Auth::routes();

Route::get('/logout', function (){
    \Illuminate\Support\Facades\Auth::logout();
    return redirect()->to("/login");
});

