@extends('layout.home')
@section('body')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 bg-light p-5">
            <h2 class="mb-4">Hồ Sơ Của Bạn</h2>
            <hr>
            <p><strong>Họ và Tên:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            
            @if($user->patient)
                <p><strong>Số điện thoại:</strong> {{ $user->patient->phone }}</p>
                <p><strong>Tuổi:</strong> {{ $user->patient->age }}</p>
                <p><strong>Giới tính:</strong> {{ $user->patient->gender }}</p>
                <p><strong>Địa chỉ:</strong> {{ $user->patient->address }}</p>
            @endif
            
            <div class="mt-4">
                <a href="{{ route('home') }}" class="btn btn-primary">Quay lại trang chủ</a>
            </div>
        </div>
    </div>
</div>
@endsection