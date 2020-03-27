@extends("admin.layout")
@section("top_content")
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">List người dùng</h2>
            <a class="au-btn au-btn-icon au-btn--blue" href="{{url('admin/brand/create')}}">
                <i class="zmdi zmdi-plus"></i>Thêm danh mục</a>
        </div>
    </div>
@endsection
@section("main_content")
    <div class="table-responsive table-responsive-data2">
        <table class="table table-data2">
            <thead>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>age</th>
                <th>address</th>
                <th>telephone</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @forelse($liststudent as $c)
                <tr class="tr-shadow">
                    <td>{{$c->id}}</td>
                    <td>{{$c->name}}</td>
                    <td>{{$c->age}}</td>
                    <td>{{$c->address}}</td>
                    <td>{{$c->telephone}}</td>
                    <td>
                        <div class="table-data-feature">
                            <a href="{{url("admin/list-student/edit",['id'=>$c->id])}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                            </a>
                            <a href="{{url("admin/list-student/delete",['id'=>$c->id])}}" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr class="spacer"></tr>
            @empty
                <p>Không có người dùng nào</p>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection