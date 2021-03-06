@extends('user_layout')
@section('user_content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate mb-5 text-center">
        <p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{route("index")}}">Trang chủ <i class="fa fa-chevron-right"></i></a></span> <span>Thông tin <i class="fa fa-chevron-right"></i></span></p>
        <h2 class="mb-0 bread">Thông tin</h2>
      </div>
    </div>
  </div>
</section>

<section class="ftco-intro">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-4 d-flex">
        <div class="intro d-lg-flex w-100 ftco-animate">
          <div class="icon">
            <span class="flaticon-support"></span>
          </div>
          <div class="text">
            <h2>Hỗ trợ online 24/7</h2>
            <p>với đường dây riêng, tự nhận diện Khách hàng ưu tiên, luôn sẵn sàng hỗ trợ Quý khách hàng mọi lúc mọi nơi.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex">
        <div class="intro color-1 d-lg-flex w-100 ftco-animate">
          <div class="icon">
            <span class="flaticon-cashback"></span>
          </div>
          <div class="text">
            <h2>Đảm bảo hoàn lại tiền</h2>
            <p>đảm bảo quyền lợi của Người mua bằng cách cho phép gửi yêu cầu hoàn trả sản phẩm và/hoặc hoàn tiền trước khi hết hạn.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex">
        <div class="intro color-2 d-lg-flex w-100 ftco-animate">
          <div class="icon">
            <span class="flaticon-free-delivery"></span>
          </div>
          <div class="text">
            <h2>Miễn phí vận chyển &amp; trả hàng</h2>
            <p>chính sách miễn phí vận chuyển khi mua hàng cũng như trả hàng khi sản phẩm gặp lỗi do cửa hàng sau khi đã xác nhận.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection