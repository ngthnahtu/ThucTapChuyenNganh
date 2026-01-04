@extends('layout.admin')
@section('body')
<h1>Chỉnh sửa Lịch Hẹn</h1>

<form action="{{route('admin.appointment.update',['appointment'=>$appointment->id])}}" method="post">
  @csrf()
  {{method_field('put')}}

  <div class="form-group">
    <label for="namePatient">Tên Bệnh Nhân</label>
    <input type="text" class="form-control" value="{{$appointment->patient->name}}" readonly disabled>
  </div>
  <div class="form-group">
    <label for="namePatient">Mã Bệnh Nhân</label>
    <input type="text" class="form-control" value="{{$appointment->patient->id}}" readonly disabled>
  </div>

  <div class="form-group">
    <label for="idDoctor">Bác Sĩ Phụ Trách</label>
    <select name="idDoctor" id="idDoctor" class="form-control">
      @foreach($doctors as $dr)
      <option value="{{$dr->id}}" @if($dr->id == $appointment->idDoctor) selected @endif>
        Bác sĩ: {{$dr->name}}
      </option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="date">Ngày Hẹn</label>
    <input type="date" class="form-control" name="date" value="{{$appointment->date}}">
  </div>

  <div class="form-group">
    <label for="time">Giờ Hẹn</label>
    <input type="time" class="form-control" name="time" value="{{$appointment->time}}">
  </div>

  <div class="form-group">
    <label for="note">Ghi Chú / Tình Trạng</label>
    <textarea class="form-control" name="note" rows="3">{{$appointment->note}}</textarea>
  </div>

  <div class="form-group">
    <label for="status">Trạng Thái Lịch Hẹn</label>
    <select name="status" id="status" class="form-control">
      @if($appointment->status == 1)
        <option value="1" selected>Đã xong</option>
        <option value="0">Chờ khám</option>
      @else
        <option value="1">Đã xong </option>
        <option value="0" selected>Chờ khám</option>
      @endif
    </select>
  </div>

  <input type="submit" class="btn btn-primary" value="Lưu Thay Đổi">
  
  <a href="{{route('admin.appointment.index')}}" class="btn btn-secondary">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5" />
    </svg>
  </a>
</form>
@endsection