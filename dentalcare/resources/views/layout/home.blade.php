<!DOCTYPE html>
<html lang="en">

<head>
  <title>Nha khoa DentaCare</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <base href="{{asset('public/')}}">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <section class="home-slider owl-carousel">
    <div class="slider-item bread-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container" data-scrollax-parent="true">
        <div class="row slider-text align-items-end">
          <div class="col-md-7 col-sm-12 ftco-animate mb-5">
            <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Đội Ngũ Bác Sĩ Hàng Đầu</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{route('home')}}">Denta<span>Care</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="{{route('home')}}" class="nav-link">Trang Chủ</a></li>
          <li class="nav-item"><a href="{{route('services')}}" class="nav-link">Dịch Vụ</a></li>
          <li class="nav-item dropdown">
            <a id="deptDropdown" href="#" class="nav-link dropdown-toggle" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Khoa
            </a>
            <div class="dropdown-menu" aria-labelledby="deptDropdown">
              @forelse($khoas as $object)
              <a class="dropdown-item" href="{{route('khoa_doctor',['khoa'=>$object->id])}}">{{ $object->name }}</a>
              @empty
              <a class="dropdown-item disabled" href="#" tabindex="-1" aria-disabled="true">No departments</a>
              @endforelse
            </div>
          </li>
          <li class="nav-item"><a href="{{route('doctors')}}" class="nav-link">Bác Sĩ</a></li>
          <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Liên Hệ</a></li>

          @guest
          <!-- chua đănh nhap -->
          <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Đăng Nhập</a></li>
          @endguest

          @auth
          <!-- đã đăng nhap -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="userMenu" data-toggle="dropdown">
              Xin chào, {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu" aria-labelledby="userMenu">
              <a class="dropdown-item" href="{{ route('profile') }}">Thông tin cá nhân</a>
              <div class="dropdown-divider"></div>

              <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Đăng xuất
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
          @endauth

          <li class="nav-item cta">
            @guest
            <a href="{{ route('login') }}" class="btn btn-primary nav-link"><span>Đặt Lịch Ngay</span></a>
            @else
            <a href="#" class="nav-link" data-toggle="modal" data-target="#modalRequest"><span>Đặt Lịch Ngay</span></a>
            @endguest
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  @yield('body')

  <!--Footer-->
  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-3">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">DentaCare.</h2>
            <p>Với đội ngũ Bác sĩ hàng đầu mang lại nụ cười tự tin cho bạn.</p>
          </div>
        </div>
        <div class="col-md-2">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Truy cập</h2>
            <ul class="list-unstyled">
              <li class="nav-item"><a href="{{route('services')}}" class="py-2 d-block">Dịch Vụ</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Địa chỉ</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">180 Cao Lỗ, phường Chánh Hưng, Thành phố Hồ Chí Minh</span></li>
                <li><a href="tel:+84966900381"><span class="icon icon-phone"></span><span class="text">+84 966 900 381</span></a></li>
                <li><a href="mailto:ngthnahtu@gmail.com"><span class="icon icon-envelope"></span><span class="text">ngthnahtu@gmail.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Bản đồ</h2>
            <div class="block-23 mb-3">
              <div style="width: 100%; height: 250px; border-radius: 5px; overflow: hidden; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.954067902468!2d106.6752906745167!3d10.738023859902678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f62a90e5dbd%3A0x674d5126513db295!2zMTgwIENhbyBM4buXLCBQaMaw4budbmcgNCwgUXXhuq1uIDgsIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1700000000000!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 text-center">
          <p>
            Copyright ©<script>
              document.write(new Date().getFullYear());
            </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
          </p>
        </div>
      </div>

    </div>
  </footer>
  <!-- Đặt Lịch -->
  <div class="modal fade" id="modalRequest" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Bạn muốn gặp nha sĩ?</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="{{ route('appointment.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label>Chọn Bác Sĩ</label>
              <select name="idDoctor" class="form-control">
                <option value="">-- Chọn bác sĩ --</option>
                @foreach($doctors_list as $dr)
                <option value="{{ $dr->id }}">{{ $dr->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="row">
              <div class="col-md-6">
                <input type="date" class="form-control" name="date">
              </div>
              <div class="col-md-6">
                <input type="time" class="form-control" name="time">
              </div>
            </div>
            <div class="form-group mt-2">
              <textarea name="note" class="form-control" placeholder="Lời nhắn..."></textarea>
            </div>
            <button class="btn btn-primary w-100">Xác Nhận Đặt Lịch</button>
          </form>
        </div>

      </div>
    </div>
  </div>





  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOVYRIgupAurZup5y1PRh8Ismb1A3lLao&libraries=places&callback=initMap"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
</body>

</html>