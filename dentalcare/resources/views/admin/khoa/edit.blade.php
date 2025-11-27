@extends('layout/admin')
@section('body')
<h1>Chỉnh sửa Khoa</h1>
<form action="{{route('admin.khoa.update',['khoa'=>$khoa->id])}}" method="post"> 
    @csrf()
    {{method_field('put')}}
  <div class="form-group">
    <label for="maKhoa">Mã Khoa</label>
    <input type="text" class="form-control" name="id" value="{{$khoa->id}}">
  </div>
  <div class="form-group">
    <label for="tenKhoa">Tên Khoa</label>
    <input type="text" class="form-control" name="name" value="{{$khoa->name}}">
    </div>
    <input type="submit" class="btn btn-primary" value="Sửa">
</form>
@endsection