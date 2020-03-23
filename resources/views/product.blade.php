@extends('layout')

@section('title',"Sản phẩm")

@section('content')
    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb-tree">
                        <li><a href="#">Home</a></li>
                        <li><a href="{{url("/store/{$product ->category_id}")}}">{{$product ->Category->category_name}}</a></li>
                        <li class="active">{{$product ->product_name}}</li>
                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- Product main img -->
                <div class="col-md-5 col-md-push-2">
                    <div id="product-main-img">
                        @php
                            $gallery = $product->gallery;
                            $gallery = explode(",",$gallery);
                        @endphp
                        @foreach($gallery as $gallery)
                            <div class="product-preview">
                                <img src="{{asset("$gallery")}}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->
                <div class="col-md-2  col-md-pull-5">
                    <div id="product-imgs">
                        @php
                            $gallery = $product->gallery;
                            $gallery = explode(",",$gallery);
                        @endphp
                        @foreach($gallery as $gallery)
                            <div class="product-preview">
                                <img src="{{asset("$gallery")}}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- /Product thumb imgs -->

                <!-- Product details -->
                <div class="col-md-5">
                    <div class="product-details">

                        <h2 class="product-name">{{$product ->product_name}}</h2>
                        <div>
                            <h3 class="product-price">{{$product ->getPrice()}}<sup>đ</sup></h3>
                            <span class="product-available">In Stock: {{$product->quantity}}</span>
                        </div>
                        <p>{{$product ->product_desc}}</p>

                        <div class="product-options">
                            <label>
                                Size
                                <select class="input-select">
                                    <option value="0">X</option>
                                </select>
                            </label>
                            <label>
                                Color
                                <select class="input-select">
                                    <option value="0">Red</option>
                                </select>
                            </label>
                        </div>

                        <div class="add-to-cart">
                            <div class="qty-label">
                                Qty
                                <div class="input-number">
                                    <input name="number" type="number" value="1">
                                    <span class="qty-up">+</span>
                                    <span class="qty-down">-</span>
                                </div>
                            </div>
                                <a href="{{url("shopping/{$product->id}")}}">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </a>
                        </div>

                        <ul class="product-btns">
                            <li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
                            <li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
                        </ul>

                        <ul class="product-links">
                            <li>Category:</li>
                            <li><a href="{{url("store/{$product->Category->id}")}}">{{$product->Category->category_name}}</a></li>
                            <li><a href="#">{{$product->Brand->brand_name}}</a></li>
                        </ul>

                        <ul class="product-links">
                            <li>Share:</li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>

                </div>
                <!-- /Product details -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- Section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3 class="title">Related Products Category</h3>
                    </div>
                </div>

                <!-- product -->
                @foreach ($product_cate as $p)
                <div class="col-md-3 col-xs-6">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{asset("$p->thumbnail")}}" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">{{$product ->Brand->brand_name}}</p>
                            <h3 class="product-name"><a href="#">{{$p->product_name}}</a></h3>
                            <h4 class="product-price">{{$p->getPrice()}}<sup>đ</sup></h4>
                            <div class="product-rating">
                            </div>
                            <div class="product-btns">
                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
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
                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
                <!-- /product -->


                <div class="clearfix visible-sm visible-xs"></div>

            </div>
            <!-- /row -->
            <!-- row -->
            <div class="row">

                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3 class="title">Related Products Brand</h3>
                    </div>
                </div>

                <!-- product -->
                @foreach ($product_brand as $p)
                    <div class="col-md-3 col-xs-6">
                        <div class="product">
                            <div class="product-img">
                                <img src="{{asset("$p->thumbnail")}}" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">{{$product ->Brand->brand_name}}</p>
                                <h3 class="product-name"><a href="#">{{$p->product_name}}</a></h3>
                                <h4 class="product-price">{{$p->getPrice()}}<sup>đ</sup></h4>
                                <div class="product-rating">
                                </div>
                                <div class="product-btns">
                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
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
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </a>
                            </div>
                        </div>
                    </div>
            @endforeach
            <!-- /product -->


                <div class="clearfix visible-sm visible-xs"></div>

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /Section -->

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
