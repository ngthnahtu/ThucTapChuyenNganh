@extends('layout.home')
@section('body')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-3">Gặp Gỡ Đội Ngũ Bác Sĩ</h2>
                <p>Mỗi bác sĩ đều có chuyên môn cao và kinh nghiệm dày dặn.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="carousel-doctor owl-carousel ftco-owl">
                    @forelse($doctors as $object)
                    <div class="item">
                        <div class="card h-100 shadow-sm border-0 m-2">
                            <img src="{{ asset($object->image) }}" class="card-img-top" style="height: 250px; object-fit: cover;">
                            <div class="card-body text-center">
                                <h5 class="card-title text-primary mb-1">{{$object->name}}</h5>
                                <p class="small text-muted mb-2">
                                    {{$object->idKhoa == 1 ? 'Khoa Tổng Quát' : 'Khoa Phục Hồi'}}
                                </p>
                                <p class="card-text small mb-3">Kinh nghiệm: {{$object->exp}} năm</p>
                                <a href="{{route('single_doctor',['id'=>$object->id])}}" class="btn btn-sm btn-outline-info">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 text-center text-muted">
                        <h3>Chưa Có Dữ Liệu</h3>
                    </div>
                    @endforelse

                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-md-3 aside-stretch py-5">
                <div class=" heading-section heading-section-white ftco-animate pr-md-4">
                    <h2 class="mb-3">Thành Tựu</h2>
                    <p>Chúng tôi tự hào về những cột mốc đã đạt được trong hành trình chăm sóc sức khỏe răng miệng, khẳng định chất lượng và uy tín dịch vụ.</p>
                </div>
            </div>
            <div class="col-md-9 py-5 pl-md-5">
                <div class="row">
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="2">0</strong>
                                <span>Năm Kinh Nghiệm</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="8">0</strong>
                                <span>Bác Sĩ Chuyên Môn</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="600">0</strong>
                                <span>Khách Hàng Hài Lòng</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="300">0</strong>
                                <span>Bệnh Nhân Mỗi Năm</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-services">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-2">Chúng Tôi Mang Lại Nụ Cười Cho Bạn</h2>
                <p>Chúng tôi cam kết cung cấp các giải pháp nha khoa toàn diện với chất lượng hàng đầu, đảm bảo nụ cười khỏe mạnh và rạng rỡ cho mọi khách hàng.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            @forelse($services as $item)
            <div class="col-md-3 mb-4">
                <div class="card h-100 text-center border-0 shadow-sm p-4">
                    <div class="mb-3">
                        <img src="{{ asset($item->image) }}" alt="{{ $item->name }}" style="width: 60px;">
                    </div>
                    <h3 class="h5">{{ $item->name }}</h3>
                    <p class="small text-muted">{{ $item->description }}</p>
                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <h3>Tạm thời chưa có dữ liệu</h3>
            </div>
            @endforelse
        </div>
    </div>
</section>
<div class="ftco-section p-0">
    <div style="width: 100%; height: 500px;">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.9544103877546!2d106.6752906757519!3d10.737997159902678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f62a90e5dbd%3A0x674d5126513db295!2zMTgwIMSQLiBDYW8gTOG7lywgUGjGsOG7nW5nIDQsIFF14bqtbiA4LCBI4buTIENow60gTWluaCwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1709222444000!5m2!1sen!2s"
            width="100%"
            height="100%"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</div>
@endsection