<?php

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
Route::get("/home-page","WebController@homePage");
Route::get("/product","WebController@product");