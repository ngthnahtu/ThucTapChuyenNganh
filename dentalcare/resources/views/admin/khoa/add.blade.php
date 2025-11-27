@extends('layout/admin')
@section('body')
<h1>Thêm Khoa Mới</h1>
<form action="{{route('admin.khoa.store')}}" method="post"> 
    @csrf()
  <div class="form-group">
    <label for="maKhoa">Mã Khoa</label>
    <input type="text" class="form-control" name="id" placeholder="Nhập mã khoa">
  </div>
  <div class="form-group">
    <label for="tenKhoa">Tên Khoa</label>
    <input type="text" class="form-control" name="name" placeholder="Nhập tên khoa">
  </div>
  <input type="submit" class="btn btn-primary" value="Thêm">
</form>
@endsection