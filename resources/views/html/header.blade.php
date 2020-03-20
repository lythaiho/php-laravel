<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                <li><a href="#"><i class="fa fa-phone"></i>0398698695</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i>lythaiho.95.cscd@gmail.com</a></li>
                <li><a href="#"><i class="fa fa-map-marker"></i>Truong Thinh Building, Trang An Complex, 1 Phùng Chí Kiên, Cầu Giấy</a></li>
            </ul>
            <ul class="header-links pull-right">
                <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
                <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
            </ul>
        </div>
    </div>
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="{{url("/")}}" class="logo">
                            <img src="{{asset("./img/logo.png")}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6">
                    <div class="header-search">
                        <form>
                            <select class="input-select">

                                <option value="0">All Categories</option>
                                <option value="1">Laptops</option>
                                <option value="2">Smartphones</option>
                                <option value="3">Tablet</option>
                            </select>
                            <input class="input" placeholder="Search here">
                            <button class="search-btn">Search</button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">
                        <!-- Wishlist -->
                        <div>
                            <a href="#">
                                <i class="fa fa-heart-o"></i>
                                <span>Your Wishlist</span>
                                <div class="qty">2</div>
                            </a>
                        </div>
                        <!-- /Wishlist -->

                        <!-- Cart -->
                        <div class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Your Cart</span>
                                <div class="qty">3</div>
                            </a>
                            <div class="cart-dropdown">
                                <div class="cart-list">
                                    @php
                                    $cart = session("cart");
                                    if($cart==null){
                                        $cart= [];
                                    }
                                    @endphp
                                    @forelse($cart as $p)
                                        <div class="product-widget">
                                            <div class="product-img">
                                                <img src="{{asset("$p->thumbnail")}}" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name"><a href="#">{{$p->product_name}}</a></h3>
                                                <h4 class="product-price"><span class="qty">Qty: </span>{{$p->cart_qty}}  <span class="qty">Price:</span> {{$p->getPrice()}}</h4>
                                            </div>
                                            <button class="delete"><i class="fa fa-close"></i></button>
                                        </div>
                                    @empty
                                        <p>Khong co danh muc nao</p>
                                    @endforelse
                                </div>
                                <div class="cart-summary">
                                    <small>3 Item(s) selected</small>
{{--                                    <h5>SUBTOTAL: {{$cart_total}}</h5>--}}
                                </div>
                                <div class="cart-btns">
                                    <a href="{{url("/cart")}}">View Cart</a>
                                    <a href="{{url("/checkout")}}">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- /Cart -->

                        <!-- Menu Toogle -->
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </div>
                        <!-- /Menu Toogle -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>
