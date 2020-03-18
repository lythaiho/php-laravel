@extends("admin.layout")
@section("top_content")
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">List User</h2>
            <a class="au-btn au-btn-icon au-btn--blue" href="{{url('admin/list-user/create')}}">
                <i class="zmdi zmdi-plus"></i>Add User</a>
        </div>
    </div>
@endsection
@section("main_content")
    <div class="table-responsive table-responsive-data2">
        <table class="table table-data2">
            <thead>
            <tr>
                <th>ID</th>
                <th>email</th>
                <th>name</th>
                <th>email_verified_at</th>
                <th>role</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @forelse($listUser as $u)
                <tr class="tr-shadow">
                    <td>{{$u->id}}</td>
                    <td>{{$u->email}}</td>
                    <td>{{$u->name}}</td>
                    <td>{{$u->email_verified_at}}</td>
                    <td>Admin</td>
                    <td>
                        <div class="table-data-feature">
                            <a href="{{url("admin/list-user/edit",['id'=>$u->id])}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                            </a>
                            <a href="{{url("admin/list-user/delete",['id'=>$u->id])}}" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
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