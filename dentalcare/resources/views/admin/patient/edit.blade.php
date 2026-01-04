@extends('layout.admin')
@section('body')
<h1>Chỉnh sửa Bệnh Nhân</h1>
<form action="{{route('admin.patient.update',['patient'=>$patient->id])}}" method="post">
    @csrf()
    {{method_field('put')}}

    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" value="{{ $patient->user->email }}">
    </div>
    <div class="form-group">
        <label>Mật khẩu mới (Để trống nếu không đổi)</label>
        <input type="password" class="form-control" name="password">
    </div>

    <hr>

    <div class="form-group">
        <label>Tên Bệnh Nhân</label>
        <input type="text" class="form-control" value="{{$patient->name}}" name="name">
    </div>
    <div class="form-group">
        <label>Tuổi</label>
        <input type="number" class="form-control" name="age" value="{{$patient->age}}">
    </div>
    <div class="form-group">
        <label>Giới tính</label>
        <select name="gender" class="form-control">
            <option value="0" @if($patient->gender == 0) selected @endif>Nam</option>
            <option value="1" @if($patient->gender == 1) selected @endif>Nữ</option>
        </select>
    </div>
    <div class="form-group">
        <label>Số điện thoại</label>
        <input type="text" class="form-control" name="phone" value="{{$patient->phone}}">
    </div>
    <div class="form-group">
        <label>Địa chỉ</label>
        <textarea name="address" class="form-control">{{$patient->address}}</textarea>
    </div>

    <input type="submit" class="btn btn-primary" value="Lưu">
    <a href="{{route('admin.patient.index')}}" class="btn btn-secondary">Quay lại</a>
</form>
@endsection