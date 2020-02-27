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
    //
}
