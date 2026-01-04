@extends('layout.admin')
@section('body')
<h1>Quản Lý Lịch Hẹn</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Mã</th>
      <th scope="col">Bệnh Nhân</th>
      <th scope="col">Bác Sĩ</th>
      <th scope="col">Ngày Hẹn</th>
      <th scope="col">Giờ Hẹn</th>
      <th scope="col">Ghi Chú</th>
      <th scope="col">Trạng Thái</th> <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @forelse($appointments as $objects)
    <tr>
      <th scope="row">{{$objects->id}}</th>
      <td>{{$objects->patient->name ?? 'N/A'}}</td>
      <td>{{$objects->doctor->name ?? 'N/A'}}</td>
      <td>{{$objects->date}}</td>
      <td>{{$objects->time}}</td>
      <td>{{$objects->note}}</td>
      <td>
        @if($objects->status == 0)
            <span class="badge badge-warning" style="padding: 8px; color: #fff;">Chờ khám</span>
        @else
            <span class="badge badge-success" style="padding: 8px;">Đã xong</span>
        @endif
      </td>

      <td>
        <a href="{{route('admin.appointment.edit',['appointment'=>$objects->id])}}">
            <i class="fa-solid fa-pen"></i>
        </a>
      </td>
      <td>
        <a href="{{route('admin.appointment.destroy', ['appointment'=>$objects->id])}}"
           onclick="event.preventDefault(); window.confirm('Bạn chắc chắn xóa lịch hẹn mã {{ $objects->id }}?') 
           ? document.getElementById('app-delete-{{$objects->id}}').submit() : 0;" class="btn btn-danger">
          <i class="fa-solid fa-trash"></i>
          <form action="{{route('admin.appointment.destroy', ['appointment'=>$objects->id])}}" method="post" id="app-delete-{{$objects->id}}">
            @csrf()
            {{method_field('delete')}}
          </form>
        </a>
      </td>
    </tr>
    @empty
    <tr>
      <td colspan="9" class="text-center"><h1>Chưa có dữ liệu lịch hẹn</h1></td>
    </tr>
    @endforelse
  </tbody>
</table>
@endsection