@extends("admin.layout")
@section("top_content")
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Sửa danh tên sinh viên</h2>
        </div>
    </div>
@endsection
@section('main_content')
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">Sửa tên sinh viên</div>
            <div class="card-body">
                <form action="{{url("admin/list-user/update",['id'=>$student->id])}}" method="post">
                    @csrf
                    <div class="form-group has-success">
                        <label for="cc-name1" class="control-label mb-1">Tên sinh viên</label>
                        <input id="cc-name1" name="name" type="text" value="{{$student->name}}"
                               class="form-control cc-name1 @if($errors->has("name"))is-invalid @endif" >
                        <span class="help-block field-validation-valid"></span>
                        @if($errors->has("name"))
                            <p style="color:red">{{$errors->first("brand_name")}}</p>
                        @endif
                    </div>
                    <div class="form-group has-success">
                        <label for="cc-name2" class="control-label mb-1">Age</label>
                        <input id="cc-name2" name="age" type="number" value="{{$student->age}}"
                               class="form-control cc-name2 @if($errors->has("name"))is-invalid @endif" >
                        <span class="help-block field-validation-valid"></span>
                        @if($errors->has("age"))
                            <p style="color:red">{{$errors->first("age")}}</p>
                        @endif
                    </div>
                    <div class="form-group has-success">
                        <label for="cc-name3" class="control-label mb-1">Address</label>
                        <input id="cc-name3" name="address" type="text" value="{{$student->address}}"
                               class="form-control cc-name3 @if($errors->has("address"))is-invalid @endif" >
                        <span class="help-block field-validation-valid"></span>
                        @if($errors->has("address"))
                            <p style="color:red">{{$errors->first("address")}}</p>
                        @endif
                    </div>
                    <div class="form-group has-success">
                        <label for="cc-name4" class="control-label mb-1">Telephone</label>
                        <input id="cc-name4" name="telephone" type="text" value="{{$student->telephone}}"
                               class="form-control cc-name4 @if($errors->has("telephone"))is-invalid @endif" >
                        <span class="help-block field-validation-valid"></span>
                        @if($errors->has("telephone"))
                            <p style="color:red">{{$errors->first("telephone")}}</p>
                        @endif
                    </div>
                    <div>
                        <button id="student-button" type="submit" class="btn btn-lg btn-info btn-block">
                            <i class="fa fa-lock fa-lg"></i>&nbsp;
                            <span id="student-button-amount">Gửi đi</span>
                            <span id="student-button-sending" style="display:none;">Sending…</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection