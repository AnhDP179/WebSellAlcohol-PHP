@extends('user_layout')
@section('user_content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
	  <div class="row no-gutters slider-text align-items-end justify-content-center">
		<div class="col-md-9 ftco-animate mb-5 text-center">
			<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Trang chủ <i class="fa fa-chevron-right"></i></a></span> <span>Sản phẩm <i class="fa fa-chevron-right"></i></span></p>
		  <h2 class="mb-0 bread">Sản phẩm</h2>
		</div>
	  </div>
	</div>
  </section>

  <section class="ftco-section">
		  <div class="container">
			  <div class="row">
				  <div class="col-md-9">
					  <div class="row">
						  @foreach ($data_picture as $item)						
						  <div class="col-md-4 d-flex">
							  <div class="product ftco-animate">
								  <div class="img d-flex align-items-center justify-content-center" style="background-image: url({{asset('img'.'/'.$item->picture1)}});"  alt="images">
									  <div class="desc">
										  <p class="meta-prod d-flex">
											  <a href="{{ route('addcart', ['id' => $item->product_id]) }}" class="d-flex align-items-center justify-content-center"><i class="fa fa-shopping-bag"  aria-hidden="true"></i></a>
											  <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
											  <a href="{{route("productsingle").'/'.$item->product_id}}" class="d-flex align-items-center justify-content-center"><i class="fa fa-eye" aria-hidden="true"></i></a>
											</p>
									  </div>
								  </div>
								  <div class="text text-center">
									<span class="category" value="{{$item->product_id}}">{{$item->productsingle->product->manufacturer}}</span>
									<h2 value="{{$item->product_id}}">{{$item->productsingle->wine_name}}</h2>
									<p class="mb-0"> <span class="price" value="{{$item->product_id}}">{{number_format($item->productsingle->price)}}  VND</span></p>
								</div>
							  </div>
						  </div>
						  @endforeach

					  </div>
					  <div class="row mt-5">
				<div class="col text-center">
				  <div class="block-27">
					<ul>
					  <li class="active" >{{$data_single->links()}}</li>
					</ul>
				  </div>
				</div>
			  </div>
				  </div>

				  <div class="col-md-3">
					  <div class="sidebar-box ftco-animate">
			<div class="categories">
			  <h3>Loại sản phẩm</h3>
			  @foreach ($data_product as $item)
			  <ul class="p-0">
				  <li><a href="#">{{$item->manufacturer}}<span class="fa fa-chevron-right"></span></a></li>
			  </ul>
			  @endforeach
			</div>
		  </div>
				</div>
			  </div>
		  </div>
	  </section>
@endsection