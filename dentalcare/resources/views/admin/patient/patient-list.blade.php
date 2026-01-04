@extends('layout.admin')
@section('body')
<h1>Quản Lý Bệnh Nhân</h1>
<a class="btn btn-primary" href="{{route('admin.patient.create')}}">Thêm Bệnh Nhân Mới</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Mã</th>
      <th scope="col">Tên</th>
      <th scope="col">Tuổi</th>
      <th scope="col">Giới tính</th>
      <th scope="col">SĐT</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">Tài khoản</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @forelse($patients as $objects)
    <tr>
      <th scope="row">{{$objects->id}}</th>
      <td>{{$objects->name}}</td>
      <td>{{$objects->age}}</td>
      <td>{{$objects->gender == 0 ? 'Nam' : 'Nữ'}}</td>
      <td>{{$objects->phone}}</td>
      <td>{{$objects->address}}</td>
      <td>{{$objects->user->email ?? 'N/A'}}</td>
      <td><a href="{{route('admin.patient.edit',['patient'=>$objects->id])}}"><i class="fa-solid fa-pen"></i></a></td>
      <td>
        <a href="{{route('admin.patient.destroy',['patient'=>$objects->id])}}"
           onclick="event.preventDefault();window.confirm('Bạn đã chắc chắn xóa ' + '{{$objects->name}}' + ' chưa?')
           ?document.getElementById('patient-delete-{{$objects->id}}').submit():0;" class="btn btn-danger">
          <i class="fa-solid fa-trash"></i>
          <form action="{{route('admin.patient.destroy',['patient'=>$objects->id])}}" method="post" id="patient-delete-{{$objects->id}}">
            @csrf()
            {{method_field('delete')}}
          </form>
        </a>
      </td>
    </tr>
    @empty
    <tr><td colspan="9" class="text-center"><h1>Chưa có dữ liệu</h1></td></tr>
    @endforelse
  </tbody>
</table>
@endsection