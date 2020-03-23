@extends("admin.layout")
@section("top_content")
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Chi tiết đơn hàng</h2>
        </div>
    </div>
@endsection
@section('main_content')
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">Chi tiết đơn hàng</div>
            <div class="card-body">
                <form action="{{url("admin/order-detail/update",['id'=>$orderDetail->id])}}" method="post">

                    @php
                        $status= $orderDetail->status;
                        $payment=$orderDetail->payment_method;
                        $cod ="cod";
                        $credit_card="credit_card";
                        $bank_transfer="bank_transfer";
                    @endphp
                    @csrf
                    <div class="form-group has-success">
                        <label for="customer_name" class="control-label mb-1">Tên khách hàng</label>
                        <input id="customer_name" name="customer_name" type="text" value="{{$orderDetail->customer_name}}"
                               class="form-control cc-name @if($errors->has("customer_name"))is-invalid @endif" required>
                        <span class="help-block field-validation-valid"></span>
                        @if($errors->has("customer_name"))
                            <p style="color:red">{{$errors->first("customer_name")}}</p>
                        @endif
                    </div>
                    <div class="form-group has-success">
                        <label for="shipping_address" class="control-label mb-1">Địa chỉ</label>
                        <textarea id="shipping_address" name="shipping_address" class="form-control"
                                  rows="2" required>{{$orderDetail->shipping_address}}</textarea>
                        <span class="help-block field-validation-valid"></span>
                        @if($errors->has("shipping_address"))
                            <p style="color:red">{{$errors->first("shipping_address")}}</p>
                        @endif
                    </div>
                    <div class="form-group has-success">
                        <label for="telephone" class="control-label mb-1">Số điện thoại</label>
                        <input id="telephone" name="telephone" type="text" value="{{$orderDetail->telephone}}"
                               class="form-control cc-name @if($errors->has("telephone"))is-invalid @endif" required>
                        <span class="help-block field-validation-valid"></span>
                        @if($errors->has("telephone"))
                            <p style="color:red">{{$errors->first("telephone")}}</p>
                        @endif
                    </div>
                    <div class="form-group has-success">
                        <label for="grand_total" class="control-label mb-1">Tổng tiền</label>
                        <input id="grand_total" name="grand_total" type="text" value="{{$orderDetail->grand_total}}"
                               class="form-control cc-name @if($errors->has("grand_total"))is-invalid @endif" required>
                        <span class="help-block field-validation-valid"></span>
                        @if($errors->has("grand_total"))
                            <p style="color:red">{{$errors->first("grand_total")}}</p>
                        @endif
                    </div>
                    <div class="form-group has-success">
                        <label for="payment_method" class="control-label mb-1">Phương thức thanh toán</label>
                        <select class="form-group form-control" name="payment_method" required>
                            <option selected value="{{$orderDetail->payment_method}}">{{$orderDetail->payment_method}}</option>

                            @if($orderDetail->payment_method == $cod )
                                <option value="{{$bank_transfer}}">
                                    Bank transfer
                                </option>
                                <option value="{{$credit_card}}">
                                    Credit card
                                </option>
                            @endif
                            @if($orderDetail->payment_method == $credit_card )

                                <option value="{{$cod}}">
                                    Cash on delievery
                                </option>
                                <option value="{{$bank_transfer}}">
                                    Bank transfer
                                </option>
                            @endif
                            @if($orderDetail->payment_method == $bank_transfer )

                                <option value="{{$cod}}">
                                    Cash on delievery
                                </option>
                                <option value="{{$credit_card}}">
                                    Credit card
                                </option>
                            @endif
                        </select>
                    </div>
                    <div class="form-group has-success">
                        <label class="control-label mb-1">Trạng thái</label>
                        <select class="form-group form-control" name="status" required>
                            <option selected value="{{$orderDetail->status}}">
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
                            </option>

                            @for($i=0;$i<5;$i++){

                            @if($i != $status )
                                <option value="{{$i}}">
                                    @if ($i === 0)
                                        STATUS_PENDING
                                    @elseif ($i === 1)
                                        STATUS_PROCESS
                                    @elseif ($i === 2)
                                        STATUS_SHIPPING
                                    @elseif ($i === 3)
                                        STATUS_COMPLETE
                                    @elseif ($i === 4)
                                        STATUS_CANCEL
                                    @endif
                                </option>
                            @endif
                            }@endfor
                        </select>
                    </div>
                    <div>
                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                            <i class="fa fa-lock fa-lg"></i>&nbsp;
                            <span id="payment-button-amount">Gửi đi</span>
                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection