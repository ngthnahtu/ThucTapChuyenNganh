@extends('layout/admin')
@section('body')
<h1>Quản Lý Khoa</h1>
<a class="btn btn-primary" href="{{route('admin.khoa.create')}}">Thêm Khoa Mới</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Mã</th>
      <th scope="col">Tên</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">View</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @forelse($khoas as $objects)
    <tr>
      <th scope="row">{{$objects->id}}</th>
      <td>{{$objects->name}}</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td><a href=""><i class="fa-solid fa-eye"></i></a></td>
      <td><a href="{{route('admin.khoa.edit',['khoa'=>$objects->id])}}"><i class="fa-solid fa-pen"></i></a></td>
      <td>
        <a href="{{route('admin.khoa.destroy',['khoa'=>$objects->id])}}"
          onclick="event.preventDefault();window.confirm('Bạn đã chắc chắn xóa '+ '{{$objects->name}}' +' chưa?') 
      ?document.getElementById('khoa-delete-{{ $objects->id }}').submit() :0;" class="btn btn-danger">
          <i class="fa-solid fa-trash"></i>
          <form action="{{ route('admin.khoa.destroy', ['khoa' => $objects->id]) }}" method="post" 
          id="khoa-delete-{{ $objects->id }}">
            {{ csrf_field() }}
            {{ method_field('delete') }}
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