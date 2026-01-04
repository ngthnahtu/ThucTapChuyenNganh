@extends('layout.home')
@section('body')

@forelse($doctor as $object)
<div class="container mt-5 mb-5">
    <h2 class="text-center bg-info text-white p-3 rounded shadow mt-3 mb-5">HỒ SƠ BÁC SĨ</h2>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <img src="{{ $object->image }}" class="card-img-top" style="height: 350px; object-fit: cover;">
                <div class="card-body text-center bg-light">
                    <h4>{{ $object->name }}</h4>
                </div>
            </div>
        </div>

        <div class="col-md-8 mb-4">
            <div class="p-4 border rounded shadow-sm">

                <h3 class="text-primary border-bottom pb-2 mb-3">Trình Độ Chuyên Môn</h3>
                <p class="lead">{{ $object->description }}</p>

                <h3 class="text-primary pb-2 mb-3 mt-4">Thông tin chi tiết</h3>
                <ul class="list-group list-group-flush mt-4 shadow-sm">
                <li class="list-group-item">
                    <i class="bi bi-clock-fill me-2 text-primary"></i>
                    Kinh nghiệm: <span class="fw-bold text-danger">{{ $object->exp }} năm</span>
                </li>
                <li class="list-group-item">
                    <i class="bi bi-calendar-check-fill me-2 text-primary"></i>
                    Tuổi: {{ $object->age }}
                </li>
                <li class="list-group-item">
                    <i class="bi bi-award-fill me-2 text-primary"></i>
                    @if($object->idKhoa == 1)
                        Khoa: Khoa Tổng Quát
                    @else
                        Khoa: Khoa Phục Hồi
                    @endif
                </li>
            </ul>
            </div>
        </div>
    </div>
</div>
@empty <h1 class="text-center">Chưa có dữ liệu</h1>
@endforelse

@endsection