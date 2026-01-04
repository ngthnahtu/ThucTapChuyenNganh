@extends('layout.home')
@section('body')

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-5">
			<div class="col-md-7 text-center heading-section ftco-animate">
				<h2 class="mb-2">Giữ Nụ Cười Của Bạn Với Dịch Vụ Tốt Nhất</h2>
				<p>Chúng tôi cam kết cung cấp các giải pháp nha khoa tốt nhất với chất lượng hàng đầu</p>
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
@endsection