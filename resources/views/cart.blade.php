@extends('layout')
@section('title',"Trang chủ")

@section('content')

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
                        </tr>
                    @empty
                        <p>Khong co danh muc nao</p>
                    @endforelse

                    <tr>
                        <th scope="row" colspan="5"></th>
                        <td class="text-center">Tổng tiền</td>
                        <td class="text-center">{{$cart_total}}</td>
                    </tr>
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