@extends('layout.admin')
@section('body')
<h1>Quản Lý Dịch Vụ</h1>
<a class="btn btn-primary" href="{{route('admin.service.create')}}">Thêm Dịch Vụ Mới</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Mã</th>
      <th scope="col">Tên</th>
      <th scope="col">Mô Tả</th>
      <th scope="col">Ảnh</th>
      <th scope="col">Trạng Thái</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @forelse($services as $objects)
    <tr>
      <th scope="row">{{$objects->id}}</th>
      <td>{{$objects->name}}</td>
      <td>{{$objects->description}}</td>
      <td><img src="{{$objects->image}}" alt="{{$objects->name}}" width="100"></td>
      <td>
        @if($objects->status==1)
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
      
      <td><a href="{{route('admin.service.edit',['service'=>$objects->id])}}"><i class="fa-solid fa-pen"></i></a></td>
      <td>
        <a href="{{route('admin.service.destroy',['service'=>$objects->id])}}"
          onclick="event.preventDefault();window.confirm('Bạn đã chắc chắn xóa '+ '{{$objects->name}}' +' chưa?') 
      ?document.getElementById('service-delete-{{ $objects->id }}').submit() :0;" class="btn btn-danger">
          <i class="fa-solid fa-trash"></i>
          <form action="{{route('admin.service.destroy',['service'=>$objects->id])}}" method="post" id="service-delete-{{$objects->id}}">
            {{ csrf_field() }}
            {{ method_field('delete')}}
          </form>
        </a>
      </td>
    </tr>
    @empty
    <h1>Chưa có dữ liệu</h1>
    @endforelse
  </tbody>
</table>

@endsection