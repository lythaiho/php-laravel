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

    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb-tree">
                        <li><a href="{{url("/")}}">Home</a></li>
                        <li><a href="{{$category['id']}}">{{$category['category_name']}}</a></li>
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
                <!-- ASIDE -->
                <div id="aside" class="col-md-3">
                    <!-- aside Widget -->
                    <div class="aside">
                        <h3 class="aside-title">Categories</h3>
                        <div class="checkbox-filter">
                            @foreach($Category_name as $c)

                            <div class="input-checkbox">
                                <input type="checkbox" id="{{$c  -> category_name}}">
                                <label for="{{$c  -> category_name}}">
                                    <span></span>
                                    {{$c  -> category_name}}
                                    <small>(123)</small>
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- /aside Widget -->

                    <!-- aside Widget -->
                    <div class="aside">
                        <h3 class="aside-title">Price</h3>
                        <div class="price-filter">
                            <div id="price-slider"></div>
                            <div class="input-number price-min">
                                <input id="price-min" type="number">
                                <span class="qty-up">+</span>
                                <span class="qty-down">-</span>
                            </div>
                            <span>-</span>
                            <div class="input-number price-max">
                                <input id="price-max" type="number">
                                <span class="qty-up">+</span>
                                <span class="qty-down">-</span>
                            </div>
                        </div>
                    </div>
                    <!-- /aside Widget -->

                    <!-- aside Widget -->
                    <div class="aside">
                        <h3 class="aside-title">Brand</h3>
                        <div class="checkbox-filter">
                            @foreach($Brand_name as $b)
                            <div class="input-checkbox">
                                <input type="checkbox" id="{{$b  -> brand_name}}">
                                <label for="{{$b  -> brand_name}}">
                                    <span></span>
                                    {{$b  -> brand_name}}
                                    <small>111</small>
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- /aside Widget -->

                    <!-- aside Widget -->
                    <div class="aside">
                        <h3 class="aside-title">Top selling</h3>
                        @foreach($category->Products()->orderBy('product_name','asc')->take(5)->get() as $p)
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="{{asset("$p->thumbnail")}}" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">{{$p->Brand->brand_name}}</p>
                                <h3 class="product-name"><a href="{{url("/product/{$p->id}")}}">{{$p->product_name}}</a></h3>
                                <h4 class="product-price">{{$p->getPrice()}}<sup>đ</sup></h4>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- /aside Widget -->
                </div>
                <!-- /ASIDE -->

                <!-- STORE -->
                <div id="store" class="col-md-9">
                    <!-- store top filter -->
                    <div class="store-filter clearfix">
                        <div class="store-sort">
                            <label>
                                Sort By:
                                <select class="input-select">
                                    <option value="0">Popular</option>
                                    <option value="1">Position</option>
                                </select>
                            </label>

                            <label>
                                Show:
                                <select class="input-select">
                                    <option value="0">20</option>
                                    <option value="1">50</option>
                                </select>
                            </label>
                        </div>
                        <ul class="store-grid">
                            <li class="active"><i class="fa fa-th"></i></li>
                            <li><a href="#"><i class="fa fa-th-list"></i></a></li>
                        </ul>
                    </div>
                    <!-- /store top filter -->

                    <!-- store products -->
                    <div class="row">
                        <!-- product -->
                        @php
                        $cate = $category->Products()->orderBy('created_at','asc')->take(100)->paginate(9);
                        @endphp

                        @foreach ($cate  as $p)
                        <div class="col-md-4 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="{{asset("$p->thumbnail")}}" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">{{$p->Brand->brand_name}}</p>
                                    <h3 class="product-name"><a href="{{url("/product/{$p->id}")}}">{{$p->product_name}}</a></h3>
                                    <h4 class="product-price">{{$p->getPrice()}}<sup>đ</sup></h4>
                                    <div class="product-btns">
                                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                        <a href="{{url("/product/{$p->id}")}}">
                                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
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
                        <!-- /product -->

                        <div class="clearfix visible-sm visible-xs"></div>
                        @endforeach
                        <!-- product -->
                    </div>
                    <!-- /store products -->

                    <!-- store bottom filter -->
                    <div class="store-filter clearfix text-right">
                        {{ $cate->links() }}
                    </div>
                    <!-- /store bottom filter -->
                </div>
                <!-- /STORE -->
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
