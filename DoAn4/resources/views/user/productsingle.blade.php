@extends('user_layout')
@section('user_content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset("images/bg_2.jpg")}}');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
	  <div class="row no-gutters slider-text align-items-end justify-content-center">
		<div class="col-md-9 ftco-animate mb-5 text-center">
			<p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{route("index")}}">Trang chủ <i class="fa fa-chevron-right"></i></a></span> <span><a href="{{route("product")}}">Sản phẩm <i class="fa fa-chevron-right"></i></a></span> <span>Chi tiết sản phẩm <i class="fa fa-chevron-right"></i></span></p>
		  <h2 class="mb-0 bread">Chi tiết sản phẩm</h2>
		</div>
	  </div>
	</div>
  </section>
@csrf
  <section class="ftco-section">
	
	  <div class="container">
		<div class="row">
			<div class="col-lg-6 mb-5 ftco-animate">
				@foreach($data_picture as $item)
					<a href="{{asset('img'.'/'.$item->picture1)}}" class="image-popup prod-img-bg"><img src="{{asset('img'.'/'.$item->picture1)}}" class="img-fluid" alt="images"></a>
				@endforeach
			</div>
			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
				<h3>{{$data_single->wine_name}}</h3>
				<div class="rating d-flex">
						<p class="text-left mr-4">
							<a href="#" class="mr-2">5.0</a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star"></span></a>
							<a href="#"><span class="fa fa-star"></span></a>
						</p>
						<p class="text-left mr-4">
							<a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Đánh giá</span></a>
						</p>
						<p class="text-left">
							<a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Đã bán</span></a>
						</p>
					</div>
				<p class="price"><span>{{number_format($data_single->price)}}</span>   VND</p>
				<p></p>
				<p></p>
					</p>
					<div class="row mt-4">
						<div class="input-group col-md-6 d-flex mb-3">
				 <span class="input-group-btn mr-2">
					<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
				   <i class="fa fa-minus"></i>
					</button>
					</span>
				 <input type="text" id="quantity" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
				 <span class="input-group-btn ml-2">
					<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
					 <i class="fa fa-plus"></i>
				 </button>
				 </span>
			  </div>
			  <div class="w-100"></div>
			  <div class="col-md-12">
				  <p style="color: #000;">Số lượng còn lại: {{$data_single->amount}}</p>
			  </div>
		  </div>
		  <p><a href="{{ route('addcart', ['id' => $data_single->id]) }}" class="btn btn-primary py-3 px-5 mr-2">Thêm vào giỏ hàng</a><a href="cart.html" class="btn btn-primary py-3 px-5">Mua ngay</a></p>
			</div>
		</div>
		<div class="row mt-5">
	  <div class="col-md-12 nav-link-wrap">
		<div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		  <a class="nav-link ftco-animate active mr-lg-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Mô tả</a>

		  <a class="nav-link ftco-animate mr-lg-1" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Được sản xuất</a>

		  <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Phản hồi</a>

		</div>
	  </div>
	  <div class="col-md-12 tab-wrap">
		
		<div class="tab-content bg-light" id="v-pills-tabContent">

		  <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
			  <div class="p-4">
				  <h3 class="mb-4">{{$data_single->wine_name}}</h3>
				  <p>Loại rượu: {{$data_product->manufacturer}}</p>
				  <p>Nồng độ cồn: {{$data_single->alcohol_concentration}}</p>
				  <p>Dung tích: {{$data_single->capacity}}</p>
			  </div>
		  </div>

		  <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
			  <div class="p-4">
				  <h3 class="mb-4">Manufactured By Liquor Store</h3>
				  <p>{{$data_product->description}}</p>
			  </div>
		  </div>
		  <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
			  <div class="row p-4">
							   <div class="col-md-7">
								   <h3 class="mb-4">23 Reviews</h3>
								   <div class="review">
									   <div class="user-img" style="background-image: url({{asset("images/person_1.jpg")}})"></div>
									   <div class="desc">
										   <h4>
											   <span class="text-left">Jacob Webb</span>
											   <span class="text-right">25 April 2020</span>
										   </h4>
										   <p class="star">
											   <span>
												   <i class="fa fa-star"></i>
												   <i class="fa fa-star"></i>
												   <i class="fa fa-star"></i>
												   <i class="fa fa-star"></i>
												   <i class="fa fa-star"></i>
											   </span>
											   <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
										   </p>
										   <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
									   </div>
								   </div>
								   <div class="review">
									   <div class="user-img" style="background-image: url({{asset("images/person_2.jpg")}})"></div>
									   <div class="desc">
										   <h4>
											   <span class="text-left">Jacob Webb</span>
											   <span class="text-right">25 April 2020</span>
										   </h4>
										   <p class="star">
											   <span>
												   <i class="fa fa-star"></i>
												   <i class="fa fa-star"></i>
												   <i class="fa fa-star"></i>
												   <i class="fa fa-star"></i>
												   <i class="fa fa-star"></i>
											   </span>
											   <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
										   </p>
										   <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
									   </div>
								   </div>
								   <div class="review">
									   <div class="user-img" style="background-image: url({{asset("images/person_3.jpg")}})"></div>
									   <div class="desc">
										   <h4>
											   <span class="text-left">Jacob Webb</span>
											   <span class="text-right">25 April 2020</span>
										   </h4>
										   <p class="star">
											   <span>
												   <i class="fa fa-star"></i>
												   <i class="fa fa-star"></i>
												   <i class="fa fa-star"></i>
												   <i class="fa fa-star"></i>
												   <i class="fa fa-star"></i>
											   </span>
											   <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
										   </p>
										   <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
									   </div>
								   </div>
							   </div>
							   <div class="col-md-4">
								   <div class="rating-wrap">
									   <h3 class="mb-4">Give a Review</h3>
									   <p class="star">
										   <span>
											   <i class="fa fa-star"></i>
											   <i class="fa fa-star"></i>
											   <i class="fa fa-star"></i>
											   <i class="fa fa-star"></i>
											   <i class="fa fa-star"></i>
											   (98%)
										   </span>
										   <span>20 Reviews</span>
									   </p>
									   <p class="star">
										   <span>
											   <i class="fa fa-star"></i>
											   <i class="fa fa-star"></i>
											   <i class="fa fa-star"></i>
											   <i class="fa fa-star"></i>
											   <i class="fa fa-star"></i>
											   (85%)
										   </span>
										   <span>10 Reviews</span>
									   </p>
									   <p class="star">
										   <span>
											   <i class="fa fa-star"></i>
											   <i class="fa fa-star"></i>
											   <i class="fa fa-star"></i>
											   <i class="fa fa-star"></i>
											   <i class="fa fa-star"></i>
											   (98%)
										   </span>
										   <span>5 Reviews</span>
									   </p>
									   <p class="star">
										   <span>
											   <i class="fa fa-star"></i>
											   <i class="fa fa-star"></i>
											   <i class="fa fa-star"></i>
											   <i class="fa fa-star"></i>
											   <i class="fa fa-star"></i>
											   (98%)
										   </span>
										   <span>0 Reviews</span>
									   </p>
									   <p class="star">
										   <span>
											   <i class="fa fa-star"></i>
											   <i class="fa fa-star"></i>
											   <i class="fa fa-star"></i>
											   <i class="fa fa-star"></i>
											   <i class="fa fa-star"></i>
											   (98%)
										   </span>
										   <span>0 Reviews</span>
									   </p>
								   </div>
							   </div>
						   </div>
		  </div>
		</div>
	  </div>
	</div>
	</div>

  </section>

@endsection