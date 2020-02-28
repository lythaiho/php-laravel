<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Webcontroller extends Controller
{

    public function homePage(){
        $products = [
            [
                "name"=>"product name goes here",
                "image"=>"./img/product01.png",
                "sale"=>"-30%",
                "new"=>"NEW",
                "category"=>"Category",
                "price"=>"$980.00",
                "old-prince"=>"$990.00",
                "rating"=>"4",
            ],
            [
                "name"=>"product name goes here",
                "image"=>"./img/product02.png",
                "sale"=>"-30%",
                "new"=>"NEW",
                "category"=>"Category",
                "price"=>"$980.00",
                "old-prince"=>"$990.00",
                "rating"=>"4",
            ],
            [
                "name"=>"product name goes here",
                "image"=>"./img/product03.png",
                "sale"=>"-30%",
                "new"=>"NEW",
                "category"=>"Category",
                "price"=>"$980.00",
                "old-prince"=>"$990.00",
                "rating"=>"4",
            ],
            [
                "name"=>"product name goes here",
                "image"=>"./img/product04.png",
                "sale"=>"-30%",
                "new"=>"NEW",
                "category"=>"Category",
                "price"=>"$980.00",
                "old-prince"=>"$990.00",
                "rating"=>"4",
            ],
            [
                "name"=>"product name goes here",
                "image"=>"./img/product05.png",
                "sale"=>"-30%",
                "new"=>"NEW",
                "category"=>"Category",
                "price"=>"$980.00",
                "old-prince"=>"$990.00",
                "rating"=>"4",
            ],
            [
                "name"=>"product name goes here",
                "image"=>"./img/product06.png",
                "sale"=>"-30%",
                "new"=>"NEW",
                "category"=>"Category",
                "price"=>"$980.00",
                "old-prince"=>"$990.00",
                "rating"=>"4",
            ],
            [
                "name"=>"product name goes here",
                "image"=>"./img/product07.png",
                "sale"=>"-30%",
                "new"=>"NEW",
                "category"=>"Category",
                "price"=>"$980.00",
                "old-prince"=>"$990.00",
                "rating"=>"4",
            ],
            [
                "name"=>"product name goes here",
                "image"=>"./img/product08.png",
                "sale"=>"-30%",
                "new"=>"NEW",
                "category"=>"Category",
                "price"=>"$980.00",
                "old-prince"=>"$990.00",
                "rating"=>"4",
            ],
            [
                "name"=>"product name goes here",
                "image"=>"./img/product09.png",
                "sale"=>"-30%",
                "new"=>"NEW",
                "category"=>"Category",
                "price"=>"$980.00",
                "old-prince"=>"$990.00",
                "rating"=>"4",
            ],

        ];
        return view("home-page",["products"=>$products]);
    }

    public function product(){

        return view("product");
    }

}
