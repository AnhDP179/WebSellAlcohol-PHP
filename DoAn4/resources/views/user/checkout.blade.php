@extends('user_layout')
@section('user_content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate mb-5 text-center">
        <p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{route("index")}}">Trang chủ <i class="fa fa-chevron-right"></i></a></span> <span><a href="{{route("cart.index")}}">Giỏ hàng <i class="fa fa-chevron-right"></i></a></span> <span>Thanh toán <i class="fa fa-chevron-right"></i></span></p>
        <h2 class="mb-0 bread">Thanh toán</h2>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section" action="">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-10 ftco-animate">
        <form method="post" action="{{ route('checkout_post') }}" class="billing-form" enctype="multipart/form-data">
          @csrf
          <h3 class="mb-4 billing-heading">Thông tin thanh toán</h3>
          <div class="row align-items-end">
            <div class="form-group">
              <div class="col-md-12">
                  <input type="hidden" name="txtid" class="form-control" value="{{ Auth::id() }}" />
              </div>
          </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="firstname">Họ và tên</label>
                <input type="text" name="txtName" class="form-control" placeholder="Họ và tên" >
              </div>
            </div>
            <div class="w-100"></div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="streetaddress">Ngày sinh</label>
                <input type="date" name="txtDate" class="form-control" placeholder="Ngày sinh">
              </div>
            </div>
            <div class="w-100"></div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="streetaddress">Địa chỉ</label>
                <input type="text" name="txtad" class="form-control" placeholder="Số nhà và tên đường">
              </div>
            </div>
            <div class="w-100"></div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="towncity">Số điện thoại</label>
                <input type="text" name="txtPhone" class="form-control" placeholder="Số điện thoại" >
              </div>
            </div>
            <div class="w-100"></div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="postcodezip">Email</label>
                <input type="email" name="txtEmail" class="form-control" placeholder="Email" value="{{ Auth::user()->username }}">
              </div>
            </div>
            <div class="w-100"></div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="postcodezip">Ghi chú</label>
                <input type="text" name="txtNote" class="form-control" placeholder="Ghi chú" rows="3">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group mt-4">
              </div>
            </div>
          </div>



        <div class="row mt-5 pt-3 d-flex">
          <div class="col-md-6 d-flex">
            <div class="cart-detail cart-total p-3 p-md-4">
              <h3 class="billing-heading mb-4">Tổng số trong giỏ hàng</h3>
              <p class="d-flex">
                <span>Thành tiền</span>
                <span style="text-align: right">{{ Cart::subtotal(0,3)}} VND</span>
              </p>
              <p class="d-flex">
                <span>Phí giao hàng</span>
                <span style="text-align: right">0.00 VND</span>
              </p>
              <p class="d-flex">
                <span>Thuế</span>
                <span style="text-align: right">0.00 VND</span>
              </p>
              <hr>
              <p class="d-flex total-price">
                <span>Tổng cộng</span>
                <span style="text-align: right; color:red">{{ Cart::subtotal(0,3).' '.'VND' }}</span>
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="cart-detail p-3 p-md-4">
              <h3 class="billing-heading mb-4">Phương thức thanh toán</h3>
              <div class="form-group">
                <div class="col-md-12">
                  <div class="radio">
                     <label><input type="radio" name="optradio" class="mr-2"> Chuyển khoản trực tiếp</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <div class="radio">
                     <label><input type="radio" name="optradio" class="mr-2"> Thanh toán khi nhận hàng</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <div class="radio">
                     <label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <div class="checkbox">
                     <label><input type="checkbox" value="" class="mr-2"> Tôi đã đọc và chấp nhận các điều khoản và điều kiện</label>
                  </div>
                </div>
              </div>
              <button type="submit" class="form-control btn btn-success" value="">Đặt hàng</button>
            </div>
          </div>
        </div>
      </form><!-- END -->

      </div> <!-- .col-md-8 -->
    </div>
  </div>
</section>

@endsection