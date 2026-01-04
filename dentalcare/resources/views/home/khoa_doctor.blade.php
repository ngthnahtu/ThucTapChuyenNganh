@extends('layout.home')
@section('body')

<div class="container mt-5 mb-5">
    <div class="row align-items-center mb-5 border-left border-primary pl-4" style="border-width: 5px !important;">
        @if($doctors[0]->idKhoa==1)
        <div class="col-md-4">
            <h2 class="font-weight-bold text-primary mb-0">KHOA TỔNG QUÁT</h2>
            <span class="text-muted small">General Dentistry Department</span>
        </div>
        <div class="col-md-8">
            <p class="text-secondary mb-0" style="line-height: 1.8; font-size: 1.1rem;">
                Khoa Tổng quát đóng vai trò là "người gác cổng" cho sức khỏe răng miệng của bạn. Chúng tôi tập trung vào việc thăm khám định kỳ, chẩn đoán chính xác và điều trị dứt điểm các vấn đề phổ biến như sâu răng, viêm nướu, và lấy cao răng. Với quy trình vô trùng nghiêm ngặt và sự tận tâm, chúng tôi cam kết mang lại nền tảng sức khỏe vững chắc nhất cho nụ cười của bạn.
            </p>
        </div>
        @else
        <div class="col-md-4">
            <h2 class="font-weight-bold text-info mb-0">KHOA PHỤC HỒI</h2>
            <span class="text-muted small">Restorative & Aesthetic Dentistry</span>
        </div>
        <div class="col-md-8">
            <p class="text-secondary mb-0" style="line-height: 1.8; font-size: 1.1rem;">
                Khoa Phục hồi chuyên sâu về kiến tạo nụ cười thẩm mỹ và phục hồi chức năng ăn nhai thông qua các kỹ thuật tân tiến như Implant, dán sứ Veneer và răng sứ cao cấp. Chúng tôi kết hợp giữa nghệ thuật và y khoa đỉnh cao nhằm mang lại vẻ đẹp tự nhiên, giúp bạn lấy lại sự tự tin rạng rỡ và duy trì sức khỏe răng miệng lâu dài.
            </p>
        </div>
        @endif
    </div>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            @forelse($doctors as $object)
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{$object->image}}" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title text-primary">{{$object->name}}</h5>
                        @if($object->idKhoa == 1)
                        <p class="card-text mb-1">Khoa: Khoa Tổng Quát</p>
                        @else
                        <p class="card-text mb-1">Khoa: Khoa Phục Hồi</p>
                        @endif
                        <p class="card-text mb-1">Trình Độ: {{$object->description}}</p>
                        <p class="card-text mb-3">Kinh nghiệm: {{$object->exp}} năm</p>
                        <a href="{{route('single_doctor',['id'=>$object->id])}}" class="btn btn-sm btn-outline-info">Xem chi tiết</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <h1 class="text-center text-muted">Tạm Thời Chưa Có Dữ Liệu</h1>
            </div>
            @endforelse

        </div>
    </div>
</div>


@endsection