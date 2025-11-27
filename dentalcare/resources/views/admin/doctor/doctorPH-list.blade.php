@extends('layout/admin')
@section('body')
<h1>Quản Lý Bác Sĩ Phục Hồi</h1>
<a class="btn btn-primary" href="{{route('admin.bsPH.create')}}">Thêm Bác Sĩ Mới</a>
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
    @forelse($doctorPH as $objects)
    <tr>
      <th scope="row">{{$objects->id}}</th>
      <td>{{$objects->name}}</td>
      <td>@mark</td>
      <td>@mdo</td>
      <td><a href=""><i class="fa-solid fa-eye"></i></a></td>
      <td><a href="{{route('admin.bsPH.edit',['bsPH'=>$objects->id])}}"><i class="fa-solid fa-pen"></i></a></td>
      <td><a href="{{route('admin.bsPH.destroy',['bsPH'=>$objects->id])}}"
          onclick="event.preventDefault();window.confirm('Bạn đã chắc chắn xóa ' + '{{$objects->name}}' + ' chưa?')
      ?document.getElementById('bsPH-delete-{{$objects->id}}').submit():0;" class="btn btn-danger">
          <i class="fa-solid fa-trash"></i>
          <form action="{{route('admin.bsPH.destroy',['bsPH'=>$objects->id])}}" method="post" id="bsPH-delete-{{$objects->id}}">
            @csrf()
            {{method_field('delete')}}
          </form>
        </a></td>
    </tr>
    @empty
    <h1>Chưa có dữ liệu</h1>
    @endforelse
  </tbody>
</table>

@endsection