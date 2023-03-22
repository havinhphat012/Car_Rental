@extends('layouts.index')

@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 75vh">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner rounded-lg shadow border-0">
        <div class="carousel-item active">
            <img src="/upload/slides/Slider-1.png" class="d-block w-100" alt="slide1">
        </div>
        <div class="carousel-item">
            <img src="/upload/slides/Slider-2.png" class="d-block w-100" alt="slide2">
        </div>
        <div class="carousel-item">
            <img src="/upload/slides/Slider-3.png" class="d-block w-100" alt="slide3">
        </div>
        <div class="carousel-item">
            <img src="/upload/slides/Slider-4.png" class="d-block w-100" alt="slide4">
        </div>
        <div class="carousel-item">
            <img src="/upload/slides/Slider-5.png" class="d-block w-100" alt="slide5">
        </div>
        <div class="carousel-item">
            <img src="/upload/slides/Slider-6.png" class="d-block w-100" alt="slide6">
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="row mt-4">
    <div class="col-12 my-3">
        <h4 class="text-center text-uppercase lead display-4">Xe tốt nhất</h4>
    </div>
    @foreach ($xes as $xe)
    <div class="col-md-4 mb-4">
        <div class="card shadow rounded-lg border-0 overflow-hidden">
            <a href="{{ url('chi-tiet-xe', $xe->id) }}">
                <img src="upload/xes/{{ $xe->hinh }}" class="card-img-top" alt="{{ $xe->ten_xe }}">
            </a>
            <div class="card-body">
                <a href="{{ url('chi-tiet-xe', $xe->id) }}" class="text-dark text-decoration-none">
                    <h5 class="card-title pb-3 pt-0">{{ $xe->ten_xe }}</h5>
                </a>
                <div class="d-flex flex-row justify-content-between">
                    <div class="card-text">Loại xe: <span class="font-weight-bold">{{ $xe->loaiXe->ten_loai_xe }}</></div>
                    <div class="card-text">Giá: <span class="text-primary">{{ number_format($xe->gia_thue) }}</span> VND</div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="col-12 text-center mt-4">
        <a href="/thue-xe" class="text-page_exam">Xem thêm</a>
    </div>
    <div class="clear"></div>
    <!-- --------------------------------------------Tính năng nổi bật------------------------------------------- -->
 <div class="container-feature">
   <header class="container-feature_header">
     Tính năng nổi bật
   </header>
  <div class="grid wide">
    <div class="row">
      <div class="container-feature_content col l-12 m-12 c-12">
        <div class="row">
          <span class="container-feature_content__img col l-4 m-6 c-12">
            <img src="/img/tinh-nang-noi-bat-1.jpg" alt="Tính năng nổi bật 1">

          </span>
          <span class="container-feature_content__img col l-4 m-6 c-12">
            <img src="/img/tinh-nang-noi-bat-2.jpg" alt="Tính năng nổi bật 2">

          </span>
          <span class="container-feature_content__img col l-4 m-6 c-12">
            <img src="/img/tinh-nang-noi-bat-3.jpg" alt="Tính năng nổi bật 3">

          </span>
          <span class="container-feature_content__img col l-4 m-6 c-12">
            <img src="/img/tinh-nang-noi-bat-4.jpg" alt="Tính năng nổi bật 4">

          </span>
          <span class="container-feature_content__img col l-4 m-6 c-12">
            <img src="/img/tinh-nang-noi-bat-5.jpg" alt="Tính năng nổi bật 5">

        </span>
          <span class="container-feature_content__img col l-4 m-6 c-12">
            <img src="/img/tinh-nang-noi-bat-6.jpg" alt="Tính năng nổi bật 6">
          </span>
        </div>
      </div>
    </div>
  </div>
 </div>
<!-- ----------------------------------------------------End tính năng nổi bật--------------------------------------------------- -->

<div class="clear"></div>
<div class="container-guide">
  <header class="container-guide_header">Hướng dẫn đặt xe</header>
  <div class="grid wide">
    <div class="row">
      <div class="container-guide_content col l-12 m-12 c-12">
        <div class="row">
          <span class="container-guide_content__img col l-3 m-6 c-12">
            <img src="/img/huong-dan-1.svg" alt="Hướng dẫn 1">
          </span>
          <span class="container-guide_content__img col l-3 m-6 c-12">
            <img src="/img/huong-dan-2.svg" alt="Hướng dẫn 2">
          </span>
          <span class="container-guide_content__img col l-3 m-6 c-12">
            <img src="/img/huong-dan-3.svg" alt="Hướng dẫn 3">
          </span>
          <span class="container-guide_content__img col l-3 m-6 c-12">
            <img src="/img/huong-dan-4.svg" alt="Hướng dẫn 4">
          </span>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="clear"></div>
<div class="clear" style="margin: 40px 0"></div>
<div class="container-infomation">
<div class="container-infomation_img">
    <img src="/img/information1.gif" alt="information">
</div>
</div>
@endsection
