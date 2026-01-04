@extends('layout.admin')
@section('body')
<h1>Chỉnh sửa Tài Khoản</h1>

<form action="{{ route('admin.user.update', ['user' => $user->id]) }}" method="post">
    @csrf
    {{ method_field('put') }}

    <div class="form-group">
        <label for="name">Tên người dùng</label>
        <input type="text" class="form-control" value="{{ $user->name }}" name="name">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" value="{{ $user->email }}" name="email">
    </div>

    <div class="form-group">
        <label for="role">Phân quyền (Role)</label>
        <select name="role" id="role" class="form-control">
            <option value="0" {{ $user->role == 0 ? 'selected' : '' }}>Admin (Toàn quyền)</option>
            <option value="1" {{ $user->role == 1 ? 'selected' : '' }}>Bác sĩ (Hạn chế)</option>
            <option value="2" {{ $user->role == 2 ? 'selected' : '' }}>Bệnh nhân (Mặc định)</option>
        </select>
    </div>

    <div class="form-group">
        <label for="status">Trạng Thái</label>
        <select name="status" id="status" class="form-control">
            @if($user->status == 1)
            <option value="1" selected>Đang hoạt động</option>
            <option value="0">Khóa tài khoản</option>
            @else
            <option value="1">Đang hoạt động</option>
            <option value="0" selected>Khóa tài khoản</option>
            @endif
        </select>
    </div>

    <input type="submit" class="btn btn-primary" value="Lưu">
    <a href="{{ route('admin.user.index') }}" class="btn btn-secondary">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5" />
        </svg>
    </a>
</form>
@endsection