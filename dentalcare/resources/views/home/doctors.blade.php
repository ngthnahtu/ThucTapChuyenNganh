@extends('layout.home')
@section('body')

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 text-center heading-section">
                <h2 class="mb-3">Gặp Gỡ Đội Ngũ Bác Sĩ Giàu Kinh nghiệm Của Chúng Tôi</h2>
				<p>Mỗi bác sĩ đều có chuyên môn cao và kinh nghiệm dày dặn trong các lĩnh vực nha khoa khác nhau, cam kết mang lại sự chăm sóc tốt nhất.</p>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-12 border-left border-primary ml-3" style="border-width: 5px !important;">
                <h3 class="mb-0 font-weight-bold text-primary pl-3 text-uppercase" style="letter-spacing: 1px;">
                    Khoa Tổng Quát
                </h3>
                <small class="text-muted pl-3 font-italic">Chăm sóc nha khoa toàn diện cho gia đình bạn</small>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach($doctors as $object)
                @if($object->idKhoa == 1)
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{$object->image}}" class="card-img-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title text-primary">{{$object->name}}</h5>
                            <p class="card-text mb-1 small">Trình Độ: {{$object->description}}</p>
                            <p class="card-text mb-3 small">Kinh nghiệm: {{$object->exp}} năm</p>
                            <a href="{{route('single_doctor',['id'=>$object->id])}}" class="btn btn-sm btn-outline-info">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>

        <hr class="my-5">

        <div class="row mb-4">
            <div class="col-12 border-left border-primary ml-3" style="border-width: 5px !important;">
                <h3 class="mb-0 font-weight-bold text-primary pl-3 text-uppercase" style="letter-spacing: 1px;">
                    Khoa Phục Hồi
                </h3>
                <small class="text-muted pl-3 font-italic">Chăm sóc nha khoa toàn diện cho gia đình bạn</small>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach($doctors as $object)
                @if($object->idKhoa != 1)
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{$object->image}}" class="card-img-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title text-primary">{{$object->name}}</h5>
                            <p class="card-text mb-1 small">Trình Độ: {{$object->description}}</p>
                            <p class="card-text mb-3 small">Kinh nghiệm: {{$object->exp}} năm</p>
                            <a href="{{route('single_doctor',['id'=>$object->id])}}" class="btn btn-sm btn-outline-info">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>

    </div>
</section>

@endsection