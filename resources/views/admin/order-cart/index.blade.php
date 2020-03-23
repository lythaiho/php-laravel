@extends("admin.layout")
@section("top_content")
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Danh sách đơn hàng</h2>
        </div>
    </div>
@endsection
@section("main_content")
    <div class="table-responsive table-responsive-data2">
        <table class="table table-data2">
            <thead>
            <tr>
                <th>id</th>
                <th>customer_name</th>
                <th>shipping_address</th>
                <th>telephone</th>
                <th>grand_total</th>
                <th>payment</th>
                <th>status</th>
                <th>action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($listOrder as $p)
                @php
                $status= $p->status;
                @endphp

                <tr class="tr-shadow">
                    <td>{{$p->user_id}}</td>
                    <td>{{$p->customer_name}}</td>
                    <td>{{$p->shipping_address}}</td>
                    <td>{{$p->telephone}}</td>
                    <td>{{$p->grand_total}}</td>
                    <td>{{$p->payment_method}}</td>
                    <td>
                        @if ($status === 0)
                            STATUS_PENDING
                        @elseif ($status === 1)
                            STATUS_PROCESS
                        @elseif ($status === 2)
                            STATUS_SHIPPING
                        @elseif ($status === 3)
                            STATUS_COMPLETE
                        @elseif ($status === 4)
                            STATUS_CANCEL
                        @endif
                    </td>
                    <td>
                        <div class="table-data-feature">
                            <a href="{{url("admin/order-detail",['id'=>$p->id])}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                            </a>
                            <a href="{{url("admin/list-order/delete",['id'=>$p->id])}}" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr class="spacer"></tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection