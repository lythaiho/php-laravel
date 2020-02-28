<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Webcontroller extends Controller
{
    public function classRoom(){

        $arr = [
            [
                "id"=>1,
                "name"=>"Hồ Lý Thái",
                "email"=>"lythaiho.95.cscd@gmail.com",
                "phoneNumber"=>"0398698695",
                "mark"=>4.5
            ],
            [
                "id"=>2,
                "name"=>"Ngô Văn Duy",
                "email"=>"duycode@gmail.com",
                "phoneNumber"=>"0123456789",
                "mark"=>9
            ],
            [
                "id"=>3,
                "name"=>"Bùi Nam",
                "email"=>"buiname@gmail.com",
                "phoneNumber"=>"0123123123",
                "mark"=>8
            ],
            [
                "id"=>4,
                "name"=>"Nguyễn Thế Anh",
                "email"=>"nguyentheanh@gmail.com",
                "phoneNumber"=>"0123456456",
                "mark"=>8
            ],

        ];
       return view("student_listing",["students"=>$arr]);
    }

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
