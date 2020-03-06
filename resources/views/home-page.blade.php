
@extends('layout')
@section('title',"Trang chủ")

@section('content')
    <?php
    function checkString($str, $numberOfLetter)
    {
        if (strlen($str) > $numberOfLetter) {
            return str_replace(substr($str, $numberOfLetter, strlen($str) - $numberOfLetter), '...', $str);
        } else {
            return $str;
        }
    }
    ?>
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="./img/shop01.png" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Laptop<br>Collection</h3>
                            <a href="/store?categoryId=1" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->

                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="./img/shop03.png" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Accessories<br>Collection</h3>
                            <a href="/store?categoryId=4" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->

                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="./img/shop02.png" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Cameras<br>Collection</h3>
                            <a href="/store?categoryId=3" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">New Products</h3>
                        <div class="section-nav">
                            <ul class="section-tab-nav tab-nav">
                                <li class="active"><a data-toggle="tab" href="#Laptops">Laptops</a></li>
                                <li><a data-toggle="tab" href="#Smartphones">Smartphones</a></li>
                                <li><a data-toggle="tab" href="#Cameras">Cameras</a></li>
                                <li><a data-toggle="tab" href="#Accessories">Accessories</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="Laptops" class="tab-pane active">
                                <div class="products-slick" data-nav="#slick-nav-1">
                                @foreach ($laptops as $l)
                                    <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="{{asset("$l->thumbnail")}}" alt="">
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">{{$l->category_name}}</p>
                                                <h3 class="product-name"><a
                                                            href="#">{{$l->product_name}}</a></h3>
                                                <h4 class="product-price">{{$l->price}}<sup>đ</sup></h4>
                                                <div class="product-rating">

                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                                class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                                class="tooltipp">add to compare</span></button>
                                                    <a href="/product/{{$l->id}}">
                                                        <button class="quick-view"><i class="fa fa-eye"></i><span
                                                                    class="tooltipp">quick view</span></button>
                                                    </a>

                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="/checkout?product_id={{$l->id}}">
                                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- /product -->
                                    @endforeach
                                </div>
                                <div id="slick-nav-1" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                            <!-- tab -->
                            <div id="Smartphones" class="tab-pane">
                                <div class="products-slick" data-nav="#slick-nav-2">
                                @foreach ($smartphone as $p)
                                    <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="{{asset("$p->thumbnail")}}" alt="">
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">{{$p->category_name}}</p>
                                                <h3 class="product-name"><a
                                                            href="#">{{$p->product_name}}</a></h3>
                                                <h4 class="product-price">{{$p->price}}<sup>đ</sup></h4>
                                                <div class="product-rating">

                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                                class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                                class="tooltipp">add to compare</span></button>
                                                    <a href="/product?product_id={{$p->id}}">
                                                        <button class="quick-view"><i class="fa fa-eye"></i><span
                                                                    class="tooltipp">quick view</span></button>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="{{$p->id}}">
                                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- /product -->
                                    @endforeach
                                </div>
                                <div id="slick-nav-2" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                            <!-- tab -->
                            <div id="Cameras" class="tab-pane">
                                <div class="products-slick" data-nav="#slick-nav-3">
                                @foreach ($camera as $p)
                                    <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="{{asset("$p->thumbnail")}}" alt="">
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">{{$p->category_name}}</p>
                                                <h3 class="product-name"><a
                                                            href="#">{{$p->product_name}}</a></h3>
                                                <h4 class="product-price">{{$p->price}}<sup>đ</sup></h4>
                                                <div class="product-rating">

                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                                class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                                class="tooltipp">add to compare</span></button>
                                                    <a href="/product?product_id={{$p->id}}">
                                                        <button class="quick-view"><i class="fa fa-eye"></i><span
                                                                    class="tooltipp">quick view</span></button>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="/checkout?product_id={{$p->id}}">
                                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- /product -->
                                    @endforeach
                                </div>
                                <div id="slick-nav-3" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                            <!-- tab -->
                            <div id="Accessories" class="tab-pane">
                                <div class="products-slick" data-nav="#slick-nav-4">
                                @foreach ($accessories as $p)
                                    <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="{{asset("$p->thumbnail")}}" alt="">
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">{{$p->category_name}}</p>
                                                <h3 class="product-name"><a
                                                            href="#">{{$p->product_name}}</a></h3>
                                                <h4 class="product-price">{{$p->price}}<sup>đ</sup></h4>
                                                <div class="product-rating">

                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                                class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                                class="tooltipp">add to compare</span></button>
                                                    <a href="/product?product_id={{$p->id}}">
                                                        <button class="quick-view"><i class="fa fa-eye"></i><span
                                                                    class="tooltipp">quick view</span></button>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="/checkout?product_id={{$p->id}}">
                                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- /product -->
                                    @endforeach
                                </div>
                                <div id="slick-nav-4" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- HOT DEAL SECTION -->
    <div id="hot-deal" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="hot-deal">
                        <ul class="hot-deal-countdown">
                            <li>
                                <div>
                                    <h3>02</h3>
                                    <span>Days</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h3>10</h3>
                                    <span>Hours</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h3>34</h3>
                                    <span>Mins</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h3>60</h3>
                                    <span>Secs</span>
                                </div>
                            </li>
                        </ul>
                        <h2 class="text-uppercase">hot deal this week</h2>
                        <p>New Collection Up to 50% OFF</p>
                        <a class="primary-btn cta-btn" href="#">Shop now</a>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /HOT DEAL SECTION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Top selling</h3>
                        <div class="section-nav">
                            <ul class="section-tab-nav tab-nav">
                                <li class="active"><a data-toggle="tab" href="#Laptop-sell">Laptops</a></li>
                                <li><a data-toggle="tab" href="#Smartphone-sell">Smartphones</a></li>
                                <li><a data-toggle="tab" href="#Camera-sell">Cameras</a></li>
                                <li><a data-toggle="tab" href="#Accessorie-sell">Accessories</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="Laptop-sell" class="tab-pane active">
                                <div class="products-slick" data-nav="#slick-nav-1">
                                @foreach ($laptops as $p)
                                    <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="{{asset("$p->thumbnail")}}" alt="">
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">{{$p->category_name}}</p>
                                                <h3 class="product-name"><a
                                                            href="#">{{$p->product_name}}</a></h3>
                                                <h4 class="product-price">{{$p->price}}<sup>đ</sup></h4>
                                                <div class="product-rating">

                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                                class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                                class="tooltipp">add to compare</span></button>
                                                    <a href="/product?product_id={{$p->id}}">
                                                        <button class="quick-view"><i class="fa fa-eye"></i><span
                                                                    class="tooltipp">quick view</span></button>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="/checkout?product_id={{$p->id}}">
                                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- /product -->
                                    @endforeach
                                </div>
                                <div id="slick-nav-1" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                            <!-- tab -->
                            <div id="Smartphone-sell" class="tab-pane">
                                <div class="products-slick" data-nav="#slick-nav-2">
                                @foreach ($smartphone as $p)
                                    <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="{{asset("$p->thumbnail")}}" alt="">
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">{{$p->category_name}}</p>
                                                <h3 class="product-name"><a
                                                            href="#">{{$p->product_name}}</a></h3>
                                                <h4 class="product-price">{{$p->price}}<sup>đ</sup></h4>
                                                <div class="product-rating">

                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                                class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                                class="tooltipp">add to compare</span></button>
                                                    <a href="/product?product_id={{$p->id}}">
                                                        <button class="quick-view"><i class="fa fa-eye"></i><span
                                                                    class="tooltipp">quick view</span></button>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="/checkout?product_id={{$p->id}}">
                                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- /product -->
                                    @endforeach
                                </div>
                                <div id="slick-nav-2" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                            <!-- tab -->
                            <div id="Camera-sell" class="tab-pane">
                                <div class="products-slick" data-nav="#slick-nav-3">
                                @foreach ($camera as $p)
                                    <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="{{asset("$p->thumbnail")}}" alt="">
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">{{$p->category_name}}</p>
                                                <h3 class="product-name"><a
                                                            href="#">{{$p->product_name}}</a></h3>
                                                <h4 class="product-price">{{$p->price}}<sup>đ</sup></h4>
                                                <div class="product-rating">

                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                                class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                                class="tooltipp">add to compare</span></button>
                                                    <a href="/product?product_id={{$p->id}}">
                                                        <button class="quick-view"><i class="fa fa-eye"></i><span
                                                                    class="tooltipp">quick view</span></button>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="/checkout?product_id={{$p->id}}">
                                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- /product -->
                                    @endforeach
                                </div>
                                <div id="slick-nav-3" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                            <!-- tab -->
                            <div id="Accessorie-sell" class="tab-pane">
                                <div class="products-slick" data-nav="#slick-nav-4">
                                @foreach ($accessories as $p)
                                    <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="{{asset("$p->thumbnail")}}" alt="">
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">{{$p->category_name}}</p>
                                                <h3 class="product-name"><a
                                                            href="#">{{$p->product_name}}</a></h3>
                                                <h4 class="product-price">{{$p->price}}<sup>đ</sup></h4>
                                                <div class="product-rating">

                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                                class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                                class="tooltipp">add to compare</span></button>
                                                    <a href="/product?product_id={{$p->id}}">
                                                        <button class="quick-view"><i class="fa fa-eye"></i><span
                                                                    class="tooltipp">quick view</span></button>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="/checkout?product_id={{$p->id}}">
                                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- /product -->
                                    @endforeach
                                </div>
                                <div id="slick-nav-4" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->


    <!-- NEWSLETTER -->
    <div id="newsletter" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="newsletter">
                        <p>Sign Up for the <strong>NEWSLETTER</strong></p>
                        <form>
                            <input class="input" type="email" placeholder="Enter Your Email">
                            <button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
                        </form>
                        <ul class="newsletter-follow">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /NEWSLETTER -->
@endsection