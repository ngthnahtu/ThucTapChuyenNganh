@extends('layout.admin')
@section('body')
<h1>Thêm Bệnh Nhân Mới</h1>
<form action="{{route('admin.patient.store')}}" method="post">
    @csrf()

    <div class="form-group">
        <label for="email">Email đăng nhập</label>
        <input type="email" class="form-control" name="email" required placeholder="Nhập email cho bệnh nhân">
    </div>
    <div class="form-group">
        <label for="password">Mật khẩu</label>
        <input type="password" class="form-control" name="password" required placeholder="Nhập mật khẩu mặc định">
    </div>

    <hr> <div class="form-group">
        <label for="name">Tên Bệnh Nhân</label>
        <input type="text" class="form-control" name="name" required placeholder="Nhập tên bệnh nhân">
    </div>
    <div class="form-group">
        <label for="age">Tuổi</label>
        <input type="number" class="form-control" name="age">
    </div>
    <div class="form-group">
        <label for="gender">Giới tính</label>
        <select name="gender" class="form-control">
            <option value="0">Nam</option>
            <option value="1">Nữ</option>
        </select>
    </div>
    <div class="form-group">
        <label for="phone">Số điện thoại</label>
        <input type="text" class="form-control" name="phone">
    </div>
    <div class="form-group">
        <label for="address">Địa chỉ</label>
        <textarea name="address" class="form-control" rows="2"></textarea>
    </div>

    <input type="submit" class="btn btn-primary" value="Thêm">
    <a href="{{route('admin.patient.index')}}" class="btn btn-secondary">Quay lại</a>
</form>
@endsection