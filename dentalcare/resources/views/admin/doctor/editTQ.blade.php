@extends('layout/admin')
@section('body')
<h1>Chỉnh sửa Bác Sĩ Tổng Quát</h1>
<form action="{{route('admin.bsTQ.update',['bsTQ'=>$bsTQ->id])}}" method="post"> 
    @csrf()
    {{method_field('put')}}
  <div class="form-group">
    <label for="maKhoa">Mã Bác Sĩ</label>
    <input type="text" class="form-control" value="{{$bsTQ->id}}" name="id">
  </div>
  <div class="form-group">
    <label for="tenKhoa">Tên Bác Sĩ</label>
    <input type="text" class="form-control" value="{{$bsTQ->name}}" name="name">
  </div>
  <input type="submit" value="Lưu">
</form>
@endsection