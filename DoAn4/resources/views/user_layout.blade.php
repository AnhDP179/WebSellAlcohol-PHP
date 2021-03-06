<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Liquor Store </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ URL::asset("css\animate.css") }}">
    
    <link rel="stylesheet" href="{{ URL::asset("css\owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ URL::asset("css\owl.theme.default.min.css") }}">
    <link rel="stylesheet" href="{{ URL::asset("css\magnific-popup.css") }}">
    
    <link rel="stylesheet" href="{{ URL::asset("css\flaticon.css") }}">
    <link rel="stylesheet" href="{{ URL::asset("css\style.css") }}">
  </head>
  <body>
    @csrf
  	<div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex align-items-center">
						<p class="mb-0 phone pl-md-2">
							<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +84 911 130 712</a> 
							<a href="#"><span class="fa fa-paper-plane mr-1"></span> vuivatva179@gmail.com</a>
						</p>
					</div>
					<div class="col-md-6 d-flex justify-content-md-end">
						<div class="social-media mr-4">
			    		<p class="mb-0 d-flex">
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
			    		</p>
		        </div>
		        <div class="reg">
		        	<p class="mb-0"><a href="{{ route('register') }}" class="mr-2">????ng k??</a> <a href="{{ route('login') }}">????ng nh???p</a></a></p>
		        </div>
					</div>
				</div>
			</div>
		</div>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{route("index")}}">Liquor <span>store</span></a>
	      <div class="order-lg-last btn-group">
          <a href="#" class="btn-cart dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            @foreach ($cart as $item)
            <div class="dropdown-item d-flex align-items-start" href="#">
				    	<div class="img" style="background-image: url({{ asset('img'.'/'.$item->options->img) }});"></div>
				    	<div class="text pl-3">
				    		<h4 value="{{ route('productsingle').'/'.$item->id }}">{{ $item->name }}</h4>
				    		<p class="mb-0"><a href="{{ route('productsingle').'/'.$item->id }}" class="price">{{number_format($item->price)}}</a><span class="quantity ml-3">S??? l?????ng:{{ $item->qty }}</span></p>
				    	</div>
				    </div>

            @endforeach

				    <a class="dropdown-item text-center btn-link d-block w-100" href="{{ route('cart.index') }}">
				    	Xem 
				    	<span class="ion-ios-arrow-round-forward"></span>
				    </a>
				  </div>
        </div>

	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{route("index")}}" class="nav-link">Trang ch???</a></li>
                <li class="nav-item"><a href="{{ route("about") }}" class="nav-link">Th??ng tin</a></li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">S???n ph???m</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                    <a class="dropdown-item" href="{{ route("product") }}">S???n ph???m</a>
                  <a class="dropdown-item" href="{{ route('cart.index') }}">Gi??? h??ng</a>
                  <a class="dropdown-item" href="{{ route("checkout") }}">Thanh to??n</a>
                </div>
              </li>
                <li class="nav-item"><a href="{{ route("contact") }}" class="nav-link">Li??n h???</a></li>
              </ul>
            </div>
          </div>
	  </nav>
    <!-- END nav -->
    @yield('user_content')
    <footer class="ftco-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo"><a href="#">Liquor <span>Store</span></a></h2>
              {{-- <p>Ch??n n??y l?? c???a e, ch??nh x??c th???t r???i ???</p> --}}
              <p>H??y t???i m???t n??i xa, khu???t sau nh???ng d??y n??i, r???i xa kh???i ch???n ???? th??? v?? t???n h?????ng s??? di???u k?? t??? ????? u???ng c???a ch??ng t??i .</p>
              <ul class="ftco-footer-social list-unstyled mt-2">
                <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">T??i kho???n</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>T??i kho???n</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>????ng k??</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>????ng nh???p</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>????n h??ng</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Th??ng tin</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>V??? ch??ng t??i</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Th?? vi???n</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Li??n h??? v???i ch??ng t??i</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>K?? h???n &amp; ??i???u ki???n</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Li??n k???t nhanh</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Ng?????i d??ng m???i</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Trung t??m h??? tr???</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>B??o c??o</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>C??c c??u h???i th?????ng g???p</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">B???n c?? th???c m???c ?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon fa fa-map marker"></span><span class="text">?????i h???c S?? ph???m k?? thu???t H??ng Y??n, TX.M?? H??o, T.H??ng Y??n</span></li>
	                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+84 911 130 712</span></a></li>
	                <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">vuivatva179@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid px-0 py-5 bg-black">
      	<div class="container">
      		<div class="row">
	          <div class="col-md-12">
	          </div>
	        </div>
      	</div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset("js/jquery.min.js") }}"></script>
  <script src="{{asset("js/jquery-migrate-3.0.1.min.js") }}"></script>
  <script src="{{asset("js/popper.min.js") }}"></script>
  <script src="{{asset("js/bootstrap.min.js") }}"></script>
  <script src="{{asset("js/jquery.easing.1.3.js") }}"></script>
  <script src="{{asset("js/jquery.waypoints.min.js") }}"></script>
  <script src="{{asset("js/jquery.stellar.min.js") }}"></script>
  <script src="{{asset("js/owl.carousel.min.js") }}"></script>
  <script src="{{asset("js/jquery.magnific-popup.min.js") }}"></script>
  <script src="{{asset("js/jquery.animateNumber.min.js") }}"></script>
  <script src="{{asset("js/scrollax.min.js") }}"></script>
  <script src="{{asset("https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false") }}"></script>
  <script src="{{asset("js/google-map.js") }}"></script>
  <script src="{{asset("js/main.js") }}"></script>
    
  </body>
</html>