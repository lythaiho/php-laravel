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
                    <ul class="breadcrumb-tree">
                        <li><a href="#">Home</a></li>
                        <li class="active">cart</li>
                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->

    <section>
        <div class="container">
            <h3 class="pt-4">Quản lý danh sách sản phẩm</h3>

            <!--danh sách sản phẩm start-->

                <table class="table table-bordered" id="table-additional-manage">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Loại sản phẩm</th>
                        <th scope="col">Hãng sản xuất</th>
                        <th class="text-center" scope="col">Số lượng</th>
                        <th class="text-center" scope="col">Đơn giá</th>
                        <th class="text-center" scope="col">Thành tiền</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($cart as $p)
                        <tr>
                            <th scope="row">{{$p->id}}</th>
                            <td>{{$p->product_name}}</td>
                            <td>{{$p->Category->category_name}}</td>
                            <td>{{$p->Brand->brand_name}}</td>
                            <td class="text-center">{{$p->cart_qty}}</td>
                            <td class="text-center">{{$p->getPrice()}}</td>
                            <td class="text-center">{{$p->price*$p->cart_qty}}</td>
                            <td class="text-center">
                                <a href="{{url("/clearCart/{$p ->id}")}}">Xoa</a>
                            </td>
                        </tr>
                    @empty
                        <p>Khong co danh muc nao</p>
                    @endforelse
                    </tbody>
                </table>
            </div>
        <a href="{{url("/checkout")}}">
            <button class="btn btn-primary">Checkout</button>
        </a>
        <a href="{{url("/clear-cart")}}">
            <button class="btn btn-primary">ClearCart</button>
        </a>
            <!--danh sách sản phẩm end-->
        </div>
    </section>

@endsection