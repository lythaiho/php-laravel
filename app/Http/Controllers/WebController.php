<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Webcontroller extends Controller
{

    public function homePage(){
        $products = [
            [
                "name"=>"iPhone Xs Max 256GB",
                "image"=>"./img/smartphone1.png",
                "sale"=>"-30%",
                "new"=>"NEW",
                "category"=>"Smartphones",
                "price"=>"32.490.000",
                "old-prince"=>"33.990.000",
                "rating"=>"4",
            ],
            [
                "name"=>"iPhone 11 Pro Max 64GB",
                "image"=>"./img/smartphone2.png",
                "sale"=>"",
                "new"=>"NEW",
                "category"=>"Smartphones",
                "price"=>"32.390.000",
                "old-prince"=>"33.990.000",
                "rating"=>"4",
            ],
            [
                "name"=>"iPhone 11 Pro 256GB",
                "image"=>"./img/smartphone3.png",
                "sale"=>"",
                "new"=>"NEW",
                "category"=>"Smartphones",
                "price"=>"34.990.000",
                "old-prince"=>"",
                "rating"=>"3",
            ],
            [
                "name"=>"iPhone 11 64GB",
                "image"=>"./img/smartphone4.png",
                "sale"=>"",
                "new"=>"NEW",
                "category"=>"Smartphones",
                "price"=>"21.990.000",
                "old-prince"=>"",
                "rating"=>"5",
            ],
            [
                "name"=>"Laptop HP 348 G5 i3 7020U",
                "image"=>"./img/laptop1.png",
                "sale"=>"",
                "new"=>"NEW",
                "category"=>"Laptop",
                "price"=>"9.990.000",
                "old-prince"=>"10.690.000",
                "rating"=>"4",
            ],
            [
                "name"=>"Laptop Asus VivoBook X409U i3 7020U",
                "image"=>"./img/laptop2.png",
                "sale"=>"",
                "new"=>"NEW",
                "category"=>"Laptop",
                "price"=>"10.790.000",
                "old-prince"=>"",
                "rating"=>"4",
            ],
            [
                "name"=>"Laptop Lenovo IdeaPad S145 15IIL i3 1005G1",
                "image"=>"./img/laptop3.png",
                "sale"=>"",
                "new"=>"NEW",
                "category"=>"Laptop",
                "price"=>"10.990.000",
                "old-prince"=>"11.490.000",
                "rating"=>"3",
            ],
            [
                "name"=>"Laptop Asus VivoBook X409FA i3 8145U",
                "image"=>"./img/laptop4.png",
                "sale"=>"",
                "new"=>"NEW",
                "category"=>"Laptop",
                "price"=>"12.390.000",
                "old-prince"=>"",
                "rating"=>"5",
            ],
            [
                "name"=>"True Wireless Anker Soundcore Liberty Air",
                "image"=>"./img/accessories1.png",
                "sale"=>"",
                "new"=>"NEW",
                "category"=>"Accessories",
                "price"=>"3.000.000",
                "old-prince"=>"",
                "rating"=>"4",
            ],
            [
                "name"=>"True Wireless Anker Soundcore Life Note A3908",
                "image"=>"./img/accessories2.png",
                "sale"=>"",
                "new"=>"NEW",
                "category"=>"Accessories",
                "price"=>"1.700.000",
                "old-prince"=>"",
                "rating"=>"5",
            ],
            [
                "name"=>"True Wireless Anker Liberty 2 Pro A3909",
                "image"=>"./img/accessories3.png",
                "sale"=>"",
                "new"=>"NEW",
                "category"=>"Accessories",
                "price"=>"3.500.000",
                "old-prince"=>"",
                "rating"=>"4",
            ],
            [
                "name"=>"True Wireless Sony WF-1000XM3BME",
                "image"=>"./img/accessories4.png",
                "sale"=>"",
                "new"=>"NEW",
                "category"=>"Accessories",
                "price"=>"5.490.000",
                "old-prince"=>"",
                "rating"=>"3",
            ],
            [
                "name"=>"Camera IP 1080P Xiaomi Mi Home Basic",
                "image"=>"./img/camera1.png",
                "sale"=>"",
                "new"=>"NEW",
                "category"=>"Camera",
                "price"=>"649.000",
                "old-prince"=>"",
                "rating"=>"3",
            ],
            [
                "name"=>"Camera IP 1080P Ezviz CS-C1HC",
                "image"=>"./img/camera2.png",
                "sale"=>"",
                "new"=>"NEW",
                "category"=>"Camera",
                "price"=>"960.000",
                "old-prince"=>"",
                "rating"=>"5",
            ],
            [
                "name"=>"Camera IP 1080P Kbvision KN-TGH21",
                "image"=>"./img/camera3.png",
                "sale"=>"",
                "new"=>"NEW",
                "category"=>"Camera",
                "price"=>"1.320.000",
                "old-prince"=>"",
                "rating"=>"4",
            ],
            [
                "name"=>"Camera IP 1080P EZVIZ CS-CV246",
                "image"=>"./img/camera4.png",
                "sale"=>"",
                "new"=>"NEW",
                "category"=>"Camera",
                "price"=>"1.190.000",
                "old-prince"=>"",
                "rating"=>"5",
            ],

        ];
        return view("home-page",["products"=>$products]);
    }

    public function product(){

        return view("product");
    }
}
