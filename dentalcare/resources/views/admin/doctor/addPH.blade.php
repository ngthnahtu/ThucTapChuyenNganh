@extends('layout/admin')
@section('body')
<h1>Thêm Bác Sĩ PH Mới</h1>
<form action="{{route('admin.bsPH.store')}}" method="post"> 
    @csrf()
  <div class="form-group">
    <label for="maKhoa">Mã Bác Sĩ</label>
    <input type="text" class="form-control" name="id" placeholder="Nhập mã bác sĩ">
  </div>
  <div class="form-group">
    <label for="tenKhoa">Tên Bác Sĩ</label>
    <input type="text" class="form-control" name="name" placeholder="Nhập tên bác sĩ">
  </div>
  <input type="submit" value="Thêm">
</form>
@endsection