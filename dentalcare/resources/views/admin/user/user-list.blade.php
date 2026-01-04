@extends('layout.admin')
@section('body')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Quản Lý Tài Khoản</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Mã</th>
                <th scope="col">Tên</th>
                <th scope="col">Email</th>
                <th scope="col">Quyền (Role)</th>
                <th scope="col">Trạng Thái</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if($user->role == 0)
                    <span class="badge badge-danger">Admin</span>
                    @elseif($user->role == 1)
                    <span class="badge badge-primary">Bác sĩ</span>
                    @else
                    <span class="badge badge-secondary">Bệnh nhân</span>
                    @endif
                </td>
                <td>
                    @if($user->status == 1)
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle text-success" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                        <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                    </svg>
                    @else
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle text-secondary" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                        <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                    </svg>
                    @endif
                </td>

                <td>
                    <a href="{{ route('admin.user.edit', $user->id) }}">
                        <i class="fa-solid fa-pen"></i>
                    </a>
                </td>
                <td>
                    <!-- Chặn không cho Admin tự xóa chính mình -->
                    @if(Auth::id() != $user->id)
                    <a href="{{ route('admin.user.destroy', $user->id) }}"
                        onclick="event.preventDefault(); window.confirm('Bạn chắc chắn muốn xóa tài khoản {{ $user->email }}?') 
                        ? document.getElementById('user-delete-{{ $user->id }}').submit() : 0;" class="text-danger">
                        <i class="fa-solid fa-trash"></i>
                        <form action="{{ route('admin.user.destroy', $user->id) }}" method="post" id="user-delete-{{ $user->id }}" style="display: none;">
                            @csrf
                            @method('delete')
                        </form>
                    </a>
                    @endif
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center">Chưa có dữ liệu tài khoản</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection