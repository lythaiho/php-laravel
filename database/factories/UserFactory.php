<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
//Random Category
//$factory->define(\App\Category::class, function (Faker $faker) {
//
//    return [
//        'category_name' => $faker->unique()->name
//    ];
//});

//Random Brand
//$factory->define(\App\Brand::class, function (Faker $faker) {
//
//    return [
//        'brand_name' => $faker->unique()->name
//    ];
//});

$factory->define(\App\Product::class, function (Faker $faker) {

    return [
        'product_name' => $faker->unique()->name,
        'product_desc' => $faker->text,
        'thumbnail' =>'img/tablet/tablet_ss'.random_int(1,5).'.png',
        'gallery' => 'img/tablet/tablet_ss'.random_int(1,5).'.png' . "," . 'img/tablet/tablet_ss'.random_int(1,5).'.png'. "," . 'img/tablet/tablet_ss'.random_int(1,5).'.png',
        'price' => random_int(1,1000),
        'quantity' => random_int(1,100),
        'category_id' => 3,//vi vua chay random category 100
        'brand_id' => 5,//vi vua chay random brand 100

    ];
});