@extends('layout.admin')
@section('body')
<h1>Thêm Bác Sĩ Mới</h1>
<form action="{{route('admin.doctor.store')}}" method="post">
  @csrf()
  <div class="form-group">
    <label for="idKhoa">Khoa</label>
    <select name="idKhoa" id="idKhoa" class="form-control">
      @forelse($khoas as $object){
      <option value="{{$object->id}}">{{$object->name}}</option>
      }
      @empty rỗng
      @endforelse
    </select>
  </div>
  <div class="form-group">
    <label for="idUser">Tài khoản User (Dùng để đăng nhập)</label>
    <select name="idUser" id="idUser" class="form-control">
      @foreach($users as $user)
      <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->email }})</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="name">Tên Bác Sĩ</label>
    <input type="text" class="form-control" name="name" placeholder="Nhập tên bác sĩ">
  </div>
  <div class="form-group">
    <label for="image">Ảnh</label>
    <input type="text" class="form-control" name="image" placeholder="Nhập đường dẫn hình ảnh ">
  </div>
  <div class="form-group">
    <label for="description">Mô tả</label>
    <input type="text" class="form-control" name="description" placeholder="Nhập mô tả">
  </div>
  <div class="form-group">
    <label for="age">Tuổi</label>
    <input type="text" class="form-control" name="age" placeholder="Nhập tuổi bác sĩ">
  </div>
  <div class="form-group">
    <label for="exp">Số năm kinh nghiệm</label>
    <input type="text" class="form-control" name="exp" placeholder="Nhập số năm kinh nghiệm">
  </div>
  <div class="form-group">
    <label for="status">Trạng Thái</label>
    <select name="status" id="status" class="form-control">
      <option value="1">Đang hoạt động</option>
      <option value="0">Tạm dừng hoạt động</option>
    </select>
  </div>

  <input type="submit" class="btn btn-primary" value="Thêm">
  <a href="{{route('admin.doctor.index')}}" class="btn btn-secondary">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5" />
    </svg>
  </a>
</form>
@endsection