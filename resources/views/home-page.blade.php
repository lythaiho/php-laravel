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
                            <img src="{{asset("./img/banner/laptop.png")}}" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Laptop<br>Collection</h3>
                            <a href="{{url("/store/1")}}" class="cta-btn">Shop now <i
                                        class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->

                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="{{asset("./img/banner/smartphone.png")}}" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Smartphone<br>Collection</h3>
                            <a href="{{url("/store/2")}}" class="cta-btn">Shop now <i
                                        class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->

                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="{{asset("./img/banner/tablet.png")}}" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Tablet<br>Collection</h3>
                            <a href="{{url("/store/3")}}" class="cta-btn">Shop now <i
                                        class="fa fa-arrow-circle-right"></i></a>
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
                        <h3 class="title">New Product</h3>
                        <div class="section-nav">
                            <ul class="section-tab-nav tab-nav">
                                @foreach($Category_new as $cate)
                                    @if($loop->first)
                                        <li class="active"><a data-toggle="tab"
                                                              href="#{{$cate->category_name}}">{{$cate->category_name}}</a>
                                        </li>
                                    @else
                                        <li><a data-toggle="tab"
                                               href="#{{$cate->category_name}}">{{$cate->category_name}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                        @foreach($Category_new as $cate)
                            <!-- tab -->
                                @if($loop->first)
                                    <div id="{{$cate->category_name}}" class="tab-pane active">
                                        @else
                                            <div id="{{$cate->category_name}}" class="tab-pane">
                                                @endif
                                                <div class="products-slick" data-nav="#{{$cate->category_name}}">
                                                @foreach (${$cate['category_name']} as $p)
                                                    <!-- product -->
                                                        <div class="product">
                                                            <div class="product-img">
                                                                <img src="{{asset("$p->thumbnail")}}" alt="">
                                                            </div>
                                                            <div class="product-body">
                                                                <p class="product-category">{{$p->Brand->brand_name}}</p>
                                                                <h3 class="product-name"><a
                                                                            href="{{url("/product/{$p->id}")}}">{{$p->product_name}}</a></h3>
                                                                <h4 class="product-price">{{$p->getPrice()}}<sup>đ</sup></h4>
                                                                <div class="product-rating">

                                                                </div>
                                                                <div class="product-btns">
                                                                    <button class="add-to-wishlist"><i
                                                                                class="fa fa-heart-o"></i><span
                                                                                class="tooltipp">add to wishlist</span>
                                                                    </button>
                                                                    <button class="add-to-compare"><i
                                                                                class="fa fa-exchange"></i><span
                                                                                class="tooltipp">add to compare</span>
                                                                    </button>
                                                                    <a href="{{url("/product/{$p->id}")}}">
                                                                        <button class="quick-view"><i
                                                                                    class="fa fa-eye"></i><span
                                                                                    class="tooltipp">quick view</span>
                                                                        </button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <a href="{{url("/shopping/{$p->id}")}}">
                                                                    <button class="add-to-cart-btn"><i
                                                                                class="fa fa-shopping-cart"></i> add to
                                                                        cart
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- /product -->
                                                    @endforeach
                                                </div>
                                                <div id="{{$cate->category_name}}" class="products-slick-nav"></div>
                                            </div>
                                            <!-- /tab -->
                                            @endforeach
                                    </div>
                        </div>
                    </div>
                    <!-- Products tab & slick -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
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
                        <ul class="hot-deal-countdown"  countdown="" data-date="March 20 2020 10:10:10">
                            <li>
                                <div>
                                    <h3 data-days="">00</h3>
                                    <span>Days</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h3 data-hours="">0</h3>
                                    <span>Hours</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h3 data-minutes="">0</h3>
                                    <span>Mins</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h3 data-seconds="">0</h3>
                                    <span>Secs</span>
                                </div>
                            </li>
                        </ul>
                        <h2 class="text-uppercase">hot deal this week</h2>
                        <p>New Collection Up to 50% OFF</p>
                        <a class="primary-btn cta-btn" href="{{url("/store/1")}}">Shop now</a>
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
                        <h3 class="title">Top Selling</h3>
                        <div class="section-nav">
                            <ul class="section-tab-nav tab-nav">
                                @foreach($Category_new as $cate)
                                    @if($loop->first)
                                        <li class="active"><a data-toggle="tab"
                                                              href="#{{$cate->category_name}}_1">{{$cate->category_name}}</a>
                                        </li>
                                    @else
                                        <li><a data-toggle="tab"
                                               href="#{{$cate->category_name}}_1">{{$cate->category_name}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                        @foreach($Category_new as $cate)
                            <!-- tab -->
                                @if($loop->first)
                                    <div id="{{$cate->category_name}}_1" class="tab-pane active">
                                        @else
                                            <div id="{{$cate->category_name}}_1" class="tab-pane">
                                                @endif

                                                <div class="products-slick" data-nav="#{{$cate->category_name}}_1">
                                                @foreach (${$cate['category_name']} as $p)
                                                    <!-- product -->
                                                        <div class="product">
                                                            <div class="product-img">
                                                                <img src="{{asset("$p->thumbnail")}}" alt="">
                                                            </div>
                                                            <div class="product-body">
                                                                <p class="product-category">{{$p->Brand->brand_name}}</p>
                                                                <h3 class="product-name"><a
                                                                            href="{{url("/product/{$p->id}")}}">{{$p->product_name}}</a></h3>
                                                                <h4 class="product-price">{{$p->getPrice()}}<sup>đ</sup>
                                                                </h4>
                                                                <div class="product-rating">

                                                                </div>
                                                                <div class="product-btns">
                                                                    <button class="add-to-wishlist"><i
                                                                                class="fa fa-heart-o"></i><span
                                                                                class="tooltipp">add to wishlist</span>
                                                                    </button>
                                                                    <button class="add-to-compare"><i
                                                                                class="fa fa-exchange"></i><span
                                                                                class="tooltipp">add to compare</span>
                                                                    </button>
                                                                    <a href="{{url("/product/{$p->id}")}}">
                                                                        <button class="quick-view"><i
                                                                                    class="fa fa-eye"></i><span
                                                                                    class="tooltipp">quick view</span>
                                                                        </button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <a href="{{url("/shopping/{$p->id}")}}">
                                                                    <button class="add-to-cart-btn"><i
                                                                                class="fa fa-shopping-cart"></i> add
                                                                        to cart
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- /product -->
                                                    @endforeach
                                                </div>
                                                <div id="{{$cate->category_name}}_1"
                                                     class="products-slick-nav"></div>
                                            </div>
                                            <!-- /tab -->
                                            @endforeach
                                    </div>
                        </div>
                    </div>
                    <!-- Products tab & slick -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
    </div>
    <!-- /SECTION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                @foreach($Category_sell as $cate)
                    <div class="col-md-4 col-xs-6">
                        <div class="section-title">
                            <h4 class="title">{{$cate->category_name}}</h4>
                            <div class="section-nav">
                                <div id="{{$cate->category_name}}_2" class="products-slick-nav"></div>
                            </div>
                        </div>
                        <div class="products-widget-slick" data-nav="#{{$cate->category_name}}_2">
                            <div>
                            @foreach(${$cate['category_name']} as $p)
                                @break($loop->index==3)
                                <!-- product widget -->
                                    <div class="product-widget">
                                        <div class="product-img">
                                            <img src="{{asset("$p->thumbnail")}}" alt="">
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">{{$p->Brand->brand_name}}</p>
                                            <h3 class="product-name"><a
                                                        href="{{url("/product/{$p->id}")}}">{{$p->product_name}}</a>
                                            </h3>
                                            <h4 class="product-price">{{$p->getPrice()}}</h4>
                                        </div>
                                    </div>
                                    <!-- /product widget -->
                                @endforeach
                            </div>

                            <div>
                            @foreach(${$cate['category_name']} as $p)
                                @break($loop->index==6)
                                @continue($loop->index<3)
                                <!-- product widget -->
                                    <div class="product-widget">
                                        <div class="product-img">
                                            <img src="{{asset("$p->thumbnail")}}" alt="">
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">{{$p->Brand->brand_name}}</p>
                                            <h3 class="product-name"><a
                                                        href="{{url("/shopping/{$p->id}")}}">{{$p->product_name}}</a>
                                            </h3>
                                            <h4 class="product-price">{{$p->getPrice()}}</h4>
                                        </div>
                                    </div>
                                    <!-- /product widget -->
                                @endforeach
                            </div>
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /container -->
                @endforeach
            </div>
        </div>
    </div>
    </div>
    <!-- /SECTION -->

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