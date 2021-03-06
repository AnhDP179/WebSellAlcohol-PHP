@extends('user_layout')
@section('user_content')
<div class="hero-wrap" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
	  <div class="row no-gutters slider-text align-items-center justify-content-center">
		<div class="col-md-8 ftco-animate d-flex align-items-end">
			<div class="text w-100 text-center">
			  <h1 class="mb-4">Good <span>Drink</span> for Good <span>Moments</span>.</h1>
			  <p><a href="{{ route("product") }}" class="btn btn-primary py-2 px-4">Mua ngay</a> <a href="#" class="btn btn-white btn-outline-white py-2 px-4">Tìm hiểu thêm</a></p>
		  </div>
		</div>
	  </div>
	</div>
  </div>

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

  <section class="ftco-section ftco-no-pb">
		  <div class="container">
			  <div class="row">
				  <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
				  </div>
				  <div class="col-md-6 wrap-about pl-md-5 ftco-animate py-5">
			<div class="heading-section">
				<span class="subheading">Lịch sử trải dài</span>
			  <h2 class="mb-4">Mong muốn đem đến một hương vị mới</h2>

			  <p>Các loại thức uống có chứa cồn lên men đã được biết đến từ thời tiền sử. Người Ai Cập và người Sumer là những người đầu tiên sản xuất bia và sau đó là rượu vang dùng các loại men hoang dã. Họ cũng là những người đầu tiên dùng rượu trong y học. Các kết quả khảo cổ học mới đây đã củng cố cho giả thuyết rằng người Trung Hoa đã sản xuất rượu từ 5000 năm trước Công nguyên.

				  <br> Rượu vang đã được uống từ thời Hy Lạp cổ điển trong các bữa ăn sáng và tiệc rượu ban đêm. Trong thế kỷ 1 TCN rượu vang cũng được người dân La Mã dùng trong các bữa ăn. Tuy nhiên người Hy Lạp và cả người La Mã đều pha loãng rượu vang với nước.
				  
				  <br> Trong khoảng từ thế kỷ 8 – 9 các nhà giả kim thuật đạo Hồi đã chưng cất rượu mạnh từ rượu vang. Rượu được dùng phổ biến trong cuộc sống hằng ngày cũng như trong y học thời đó. Rượu mạnh bắt đầu gia nhập vào châu Âu khoảng giữa thế kỷ 12 qua các nhà giả kim thuật và từ giữa thế kỷ 14 lượng rượu dùng bắt đầu tăng vọt.</p>
			  <p class="year">
				  <strong class="number" data-number="115">0</strong>
				  <span> Năm kinh nghiệm trong kinh doanh</span>
			  </p>
			</div>

				  </div>
			  </div>
		  </div>
	  </section>

	  <section class="ftco-section ftco-no-pb">
		  <div class="container">
			  <div class="row">
				  <div class="col-lg-2 col-md-4 ">
					  <div class="sort w-100 text-center ftco-animate">
						  <div class="img" style="background-image: url(images/kind-1.jpg);"></div>
						  <h3>Brandy</h3>
					  </div>
				  </div>
				  <div class="col-lg-2 col-md-4 ">
					  <div class="sort w-100 text-center ftco-animate">
						  <div class="img" style="background-image: url(images/kind-2.jpg);"></div>
						  <h3>Gin</h3>
					  </div>
				  </div>
				  <div class="col-lg-2 col-md-4 ">
					  <div class="sort w-100 text-center ftco-animate">
						  <div class="img" style="background-image: url(images/kind-3.jpg);"></div>
						  <h3>Rum</h3>
					  </div>
				  </div>
				  <div class="col-lg-2 col-md-4 ">
					  <div class="sort w-100 text-center ftco-animate">
						  <div class="img" style="background-image: url(images/kind-4.jpg);"></div>
						  <h3>Tequila</h3>
					  </div>
				  </div>
				  <div class="col-lg-2 col-md-4 ">
					  <div class="sort w-100 text-center ftco-animate">
						  <div class="img" style="background-image: url(images/kind-5.jpg);"></div>
						  <h3>Vodka</h3>
					  </div>
				  </div>
				  <div class="col-lg-2 col-md-4 ">
					  <div class="sort w-100 text-center ftco-animate">
						  <div class="img" style="background-image: url(images/kind-6.jpg);"></div>
						  <h3>Whiskey</h3>
					  </div>
				  </div>

			  </div>
		  </div>
	  </section>

	  <section class="ftco-section">
		  <div class="container">
			  <div class="row justify-content-center pb-5">
		<div class="col-md-7 heading-section text-center ftco-animate">
			<span class="subheading">Dịch vụ thú vị của chúng tôi</span>
		  <h2>Hương vị tuyệt hảo dành cho bạn</h2>
		</div>
	  </div>
			  {{-- <div class="row">
				  <div class="col-md-3 d-flex">
					  <div class="product ftco-animate">
						  <div class="img d-flex align-items-center justify-content-center" style="background-image: url(image/Vodka/v_11.jpg);">
							  <div class="desc">
								  <p class="meta-prod d-flex">
									  <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-shopping-bag"  aria-hidden="true"></i></a>
									  <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									  <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-eye" aria-hidden="true"></i></a>
								  </p>
							  </div>
						  </div>
						  <div class="text text-center">
							  <span class="category">Brandy</span>
							  <h2>Bacardi 151</h2>
							  <p class="mb-0"><span class="price price-sale">$69.00</span> <span class="price">$49.00</span></p>
						  </div>
					  </div>
				  </div>
				  </div>
				  </div>
			  </div> --}}
			  <div class="row justify-content-center">
				  <div class="col-md-4">
					  <a href="{{route("product")}}" class="btn btn-primary d-block">Tất cả sản phẩm  <span class="fa fa-long-arrow-right"></span></a>
				  </div>
			  </div>
		  </div>
	  </section>

@endsection