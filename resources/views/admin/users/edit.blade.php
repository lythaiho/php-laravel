@extends("admin.layout")
@section("top_content")
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Sửa danh mục sản phẩm</h2>
        </div>
    </div>
@endsection
@section('main_content')
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">Sửa danh mục</div>
            <div class="card-body">
                <form action="{{url("admin/list-user/update",['id'=>$user->id])}}" method="post">
                    @csrf
                    <div class="form-group has-success">
                        <label  class="control-label mb-1">Email</label>
                        <input  name="email" type="email" value="{{$user->email}}"
                                class="form-control cc-email @if($errors->has("email"))is-invalid @endif" >
                        <span class="help-block field-validation-valid"></span>
                        @if($errors->has("email"))
                            <p style="color:red">{{$errors->first("email")}}</p>
                        @endif
                    </div>
                    <div class="form-group has-success">
                        <label class="control-label mb-1">UserName</label>
                        <input type="text" name="name" value="{{$user->name}}"
                               class="form-control cc-name" required>
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