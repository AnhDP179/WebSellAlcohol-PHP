@extends('user_layout')
@section('user_content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
	  <div class="row no-gutters slider-text align-items-end justify-content-center">
		<div class="col-md-9 ftco-animate mb-5 text-center">
			<p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{route("index")}}">Trang chủ <i class="fa fa-chevron-right"></i></a></span> <span>Giỏ hàng <i class="fa fa-chevron-right"></i></span></p>
		  <h2 class="mb-0 bread">Giỏ hàng của bạn</h2>
		</div>
	  </div>
	</div>
  </section>

  <section class="ftco-section">
	  <div class="container">
		  <div class="row">
			  <div class="table-wrap">
					  <table class="table">
						<thead class="thead-primary">
						  <tr>
							<th>STT</th>
						    <th>Hình ảnh</th>
							<th>Tên rượu</th>
							<th>Giá (VND)</th>
							<th>Số lượng</th>
							<th>Tổng tiền (VND)</th>
							<th></th>
							
						  </tr>
						</thead>
						<tbody>
							@php
                                    $tt = 1
                             @endphp
							@foreach ($cart as $key)
							
							<tr class="alert" role="alert">

								<td class="text-center">{{ $tt++ }}</td>
								<td>
									<div class="img" style="background-image: url({{ asset('img'.'/'.$key->options->img) }});"></div>
								</td>
							  <td>
								  <div class="email" style="text-align: left">
									  <span><a href="{{ route('productsingle').'/'.$key->id }}"></a>{{ $key->name }}</span>
								  </div>
							  </td>
							  <td style="text-align: right">{{ number_format($key->price) }} </td>
							  <td class="text-center">
								<div class="quote text-center mt-1">
										<form action="{{ route('cart.update', $key->rowId) }}" method="post">
											@csrf
											@method("PUT")
											<input type="hidden" value="{{ $key->rowId }}" name="rowId_cart" class="form-control">
											<input type="number" name="qty" id="qty" value="{{ $key->qty }}" placeholder="1" class="quote" min="1" max="100">
											<input type="submit" value="Cập nhật">
										</form>
										
								</div>
							</td>
						  <td style="text-align: right; color:orangered">{{ number_format($key->price * $key->qty) }} </td>
						<td class="text-center" >
							<form action="{{ route('cart.destroy', $key->rowId) }}" method="post">
								@csrf
								<input type="hidden" name="_method" value="DELETE">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"><i class="lni-trash"></i></button>   
							</form>
						</td>

				</tr>
  
							@endforeach
						</tbody>
					  </table>
				  </div>
		  </div>
		  <div class="row justify-content-end" >
			  <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
				  <div class="cart-total mb-3">
					  <h3>Giá trị giỏ hàng</h3>
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
				  <p class="text-center"><a href="/checkout" class="btn btn-primary py-3 px-4">Thanh toán</a></p>
			  </div>
		  </div>
	  </div>
  </section>

@endsection