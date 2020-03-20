@extends('layout')
@section('title',"Trang chủ")

@section('content')
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <h3 class="breadcrumb-header">Checkout</h3>
                <ul class="breadcrumb-tree">
                    <li><a href="#">Home</a></li>
                    <li class="active">Checkout</li>
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
    <form class="checkout-form" action="{{url("checkout")}}" method="POST">
        @csrf

        <div class="container">
            <!-- row -->
            <div class="row">

                <div class="col-md-7">
                    <!-- Billing Details -->
                    <div class="billing-details">
                        <div class="section-title">
                            <h3 class="title">Billing address</h3>
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="customer_name" placeholder="Tên khách hàng" required>
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="shipping_address" placeholder="Address" required>
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="telephone" placeholder="Telephone" required>
                        </div>
                        <div class="form-group">
                            <div class="input-checkbox">
                                <input type="checkbox" id="create-account">
                                <label for="create-account">
                                    <span></span>
                                    Create Account?
                                </label>
                                <div class="caption">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                    <input class="input" type="password" name="password" placeholder="Enter Your Password">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Billing Details -->
                </div>

                <!-- Order Details -->
                <div class="col-md-5 order-details">
                    <div class="section-title text-center">
                        <h3 class="title">Your Order</h3>
                    </div>
                    <div class="order-summary">
                        <table class="table table-bordered" id="table-additional-manage">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">PRODUCT</th>
                                <th scope="col">QUANTITY</th>
                                <th scope="col">PRICE</th>
                                <th scope="col">TOTAL</th>

                            </tr>
                            </thead>
                            <tbody>
                            @forelse($cart as $p)
                                <tr>
                                    <td>{{$p->product_name}}</td>
                                    <td class="text-center">{{$p->cart_qty}}</td>
                                    <td>{{$p->getPrice()}}<sup>đ</sup></td>
                                    <td>{{$p->price*$p->cart_qty}}<sup>đ</sup></td>
                                </tr>
                            @empty
                                <p>Khong co danh muc nao</p>
                            @endforelse
                            </tbody>
                        </table>
                        <div class="order-col">
                            <div>Shiping</div>
                            <div><strong>FREE</strong></div>
                        </div>
                        <div class="order-col">
                            <div><strong>TOTAL</strong></div>
                            <div><strong class="order-total">{{$cart_total}}<sup>đ</sup></strong></div>
                        </div>
                    </div>
                    <div class="payment-method">
                        <div class="input-radio">
                            <input type="radio" name="payment_method" id="cod">
                            <label for="cod">
                                <span></span>
                                Cash on delievery
                            </label>
                            <div class="caption">
                                <p>Bạn muốn chuyển khoản trực tiếp qua ngân hàng</p>
                            </div>
                        </div>
                        <div class="input-radio">
                            <input type="radio" name="payment_method" id="credit_card">
                            <label for="credit_card">
                                <span></span>
                                Credit card
                            </label>
                            <div class="caption">
                                <p>Bạn muốn thanh toán trực tiếp bằng Séc.</p>
                            </div>
                        </div>
                        <div class="input-radio">
                            <input type="radio" name="payment_method" id="bank_transfer">
                            <label for="bank_transfer">
                                <span></span>
                                Direct bank transfer
                            </label>
                            <div class="caption">
                                <p>Thanh toán qua hệ thông Paypal</p>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="primary-btn">Place order</button>
                </div>
                <!-- /Order Details -->
            </div>
            <!-- /row -->
        </div>

        <!-- /container -->
    </form>
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