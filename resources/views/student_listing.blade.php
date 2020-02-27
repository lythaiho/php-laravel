<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--    import css start--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    {{--    import css end--}}
    {{--    import js start--}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    {{--    import js end--}}
    <title>Student Listing</title>
</head>
<body>
<div class="container">
    <h1 class="pt-3">Student Listing</h1>
    <div class="float-right pb-3">
        <!-- Button trigger modal add student -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-student">
            Add Student
        </button>
    </div>
    <table class="table border-bottom border-left border-right" id="student_listing">
        <thead class="thead-light">
        <th scope="col" class="text-center" style="width: 10%">ID</th>
        <th scope="col" style="width: 25%">Name</th>
        <th scope="col" style="width: 25%">Email</th>
        <th scope="col" style="width: 15%">PhoneNumber</th>
        <th scope="col" class="text-center" style="width: 10%">Mark</th>
        <th scope="col" class="text-center" style="width: 15%">Action</th>
        </thead>
        <tbody>
        <?php foreach ($students as $s):?>
        <tr>
            <td class="text-center">#<?php echo $s['id'];?></td>
            <td><?php echo $s['name'];?></td>
            <td><?php echo $s['email'];?></td>
            <td><?php echo $s['phoneNumber'];?></td>
            <td class="text-center"><?php echo $s['mark'];?></td>
            <td class="d-flex justify-content-around">
                <a data-target="#edit-student" data-toggle="modal">Edit</a>
                <a data-target="#delete-student" data-toggle="modal">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- Modal thêm sinh viên -->
<div aria-hidden="true" aria-labelledby="add-student" class="modal fade" id="add-student" role="dialog"
     tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add student</h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label class="col-form-label col-4">Name:</label>
                    <div class="col-8">
                        <input class="form-control" name="nameStudent" type="text" placeholder="Nhập tên">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-4">Email:</label>
                    <div class="col-8">
                        <input class="form-control" name="emailStudent" type="email" placeholder="Nhập email">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-4">PhoneNumber:</label>
                    <div class="col-8">
                        <input class="form-control" name="phoneNumber" type="tel" placeholder="Nhập số điện thoại">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-4">MarkStudent:</label>
                    <div class="col-8">
                        <input class="form-control" name="MarkStudent" type="tel" placeholder="Nhập điểm sinh viên">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal" type="button">Cancel</button>
                <button class="btn btn-primary" type="button">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal thêm sinh viên -->
<!-- Modal sửa sinh viên -->
<div aria-hidden="true" aria-labelledby="edit-student" class="modal fade" id="edit-student" role="dialog"
     tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit student</h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label class="col-form-label col-4">Name:</label>
                    <div class="col-8">
                        <input class="form-control" name="nameStudent" type="text" value="<?php echo $s['name'];?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-4">Email:</label>
                    <div class="col-8">
                        <input class="form-control" name="emailStudent" type="email" value="<?php echo $s['email'];?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-4">PhoneNumber:</label>
                    <div class="col-8">
                        <input class="form-control" name="phoneNumber" type="tel" value="<?php echo $s['phoneNumber'];?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-4">MarkStudent:</label>
                    <div class="col-8">
                        <input class="form-control" name="MarkStudent" type="tel" value="<?php echo $s['mark'];?>">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal" type="button">Cancel</button>
                <button class="btn btn-primary" type="button">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal sửa sinh viên -->
<!-- Modal xóa sinh viên -->
<div aria-hidden="true" aria-labelledby="delete-student" class="modal fade" id="delete-student" role="dialog"
     tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Student</h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Bạn có đồng ý xóa sinh viên không?
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal" type="button">Hủy</button>
                <button class="btn btn-primary" type="button">Lưu thay đổi</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal xóa sinh viên -->

<script>
    $('#student_listing').DataTable();
</script>
</body>
</html>