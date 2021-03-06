
<?php

Route::get('dashboard',"AdminController@homeAdmin");
//category stat
Route::get('category',"AdminController@category");
Route::get('category/create',"AdminController@categoryCreate");
Route::post('category/store',"AdminController@categoryStore");

Route::get("category/edit/{id}","AdminController@categoryEdit");
Route::post("category/update/{id}","AdminController@categoryUpdate");

Route::get('category/delete/{id}',"AdminController@categoryDestroy");
//category end

//brand stat
Route::get('brand',"AdminController@brand");
Route::get('brand/create',"AdminController@brandCreate");
Route::post('brand/store',"AdminController@brandStore");

Route::get("brand/edit/{id}","AdminController@brandEdit");
Route::post("brand/update/{id}","AdminController@brandUpdate");

Route::get('brand/delete/{id}',"AdminController@brandDestroy");
//brand end
//product stat
Route::get('product',"AdminController@product");
Route::get('product/create',"AdminController@productCreate");
Route::post('product/store',"AdminController@productStore");

Route::get("product/edit/{id}","AdminController@productEdit");
Route::post("product/update/{id}","AdminController@productUpdate");

Route::get('product/delete/{id}',"AdminController@productDestroy");
//product end

//user start
Route::get('list-user',"AdminController@listUser");

Route::get('list-user/create',"AdminController@UserCreate");
Route::post('list-user/post',"AdminController@UserPost");

Route::get('list-user/edit/{id}',"AdminController@UserEdit");
Route::post('list-user/update/{id}',"AdminController@UserUpdate");

Route::get('list-user/delete/{id}',"AdminController@UserDestroy");
//user end

//order start
Route::get('list-order',"AdminController@listOrder");
Route::get('order-detail/{id}',"AdminController@orderDetail");
Route::post("order-detail/update/{id}","AdminController@orderUpdate");

Route::get('list-order/delete/{id}',"AdminController@orderDestroy");
//order end

//student start
Route::get('list-student',"AdminController@listStudent");

Route::get('list-student/create',"AdminController@studentCreate");
Route::post('list-student/post',"AdminController@studentPost");

Route::get('list-student/edit/{id}',"AdminController@studentEdit");
Route::post('list-student/update/{id}',"AdminController@studentUpdate");

Route::get('list-student/delete/{id}',"AdminController@studentDestroy");
//student end
