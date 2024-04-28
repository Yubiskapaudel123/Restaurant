<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/jpeg" href="{{asset('front_assets/images/WhatsApp Image 2024-03-29 at 16.37.00.jpeg')}}">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('front_assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('front_assets/fonts/themify/themify-icons.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
<!--=========================================================================.======================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/slick/slick.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/lightbox2/css/lightbox.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('front_assets/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('front_assets/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body class="animsition">
@yield('content')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v19.0" nonce="Isp6iPIq"></script>

  <!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<a href="{{url('/')}}">
							<img src="{{asset('front_assets/images/WhatsApp Image 2024-03-29 at 16.37.00.jpeg')}}" alt="IMG-LOGO" data-logofixed="{{asset('front_assets/images/WhatsApp Image 2024-03-29 at 16.37.00.jpeg')}}">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="{{url('/')}}">Home</a>
								</li>


								<li>
									<a href="{{url('/reservation')}}">Reservation</a>
								</li>

								<li>
									<a href="{{url('gallery')}}">Gallery</a>
								</li>

								<li>
									<a href="{{url('about')}}">About</a>
								</li>

								<li>
									<a href="{{url('blog')}}">Blog</a>
								</li>

								<li>
									<a href="{{url('contact')}}">Contact</a>
								</li>
							</ul>
						</nav>
					</div>

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<a href="javascript:void(0)"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
						<a href="https://www.facebook.com/eldoradoavenue"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
						<a href="https://www.instagram.com/el_dorado_avenue/"><i class="fa fa-instagram m-l-21" aria-hidden="true"></i></a>

						<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Sidebar -->
	<aside class="sidebar trans-0-4">
		<!-- Button Hide sidebar -->
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

		<!-- - -->
		<ul class="menu-sidebar p-t-95 p-b-70">
			<li class="t-center m-b-13">
				<a href="{{url('/')}}" class="txt19">Home</a>
			</li>

			

			<li class="t-center m-b-13">
				<a href="{{url('gallery')}}" class="txt19">Gallery</a>
			</li>

			<li class="t-center m-b-13">
				<a href="{{url('about')}}" class="txt19">About</a>
			</li>

			<li class="t-center m-b-13">
				<a href="{{url('blog')}}" class="txt19">Blog</a>
			</li>

			<li class="t-center m-b-33">
				<a href="{{url('contact')}}" class="txt19">Contact</a>
			</li>

			<li class="t-center">
				<!-- Button3 -->
				<a href="{{url('/reservation')}}" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
					Reservation
				</a>
			</li>
		</ul>

		<!-- - -->
		<div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40">
			<!-- - -->
			<h4 class="txt20 m-b-33">
				Gallery
			</h4>

			<!-- Gallery -->
			<div class="wrap-gallery-sidebar flex-w">
				<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('front_assets/images/photo-gallery-01.jpg')}}" data-lightbox="gallery-footer">
					<img src="{{asset('front_assets/images/photo-gallery-thumb-01.jpg')}}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('front_assets/images/photo-gallery-02.jpg')}}" data-lightbox="gallery-footer">
					<img src="{{asset('front_assets/images/photo-gallery-thumb-02.jpg')}}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('front_assets/images/photo-gallery-03.jpg')}}" data-lightbox="gallery-footer">
					<img src="{{asset('front_assets/images/photo-gallery-thumb-03.jpg')}}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('front_assets/images/photo-gallery-05.jpg')}}" data-lightbox="gallery-footer">
					<img src="{{asset('front_assets/images/photo-gallery-thumb-05.jpg')}}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('front_assets/images/photo-gallery-06.jpg')}}" data-lightbox="gallery-footer">
					<img src="{{asset('front_assets/images/photo-gallery-thumb-06.jpg')}}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('front_assets/images/photo-gallery-07.jpg')}}" data-lightbox="gallery-footer">
					<img src="{{asset('front_assets/images/photo-gallery-thumb-07.jpg')}}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('front_assets/images/photo-gallery-08.jpg')}}" data-lightbox="gallery-footer">
					<img src="{{asset('front_assets/images/photo-gallery-thumb-09.jpg')}}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('front_assets/images/photo-gallery-10.jpg')}}" data-lightbox="gallery-footer">
					<img src="{{asset('front_assets/images/photo-gallery-thumb-10.jpg')}}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('front_assets/images/photo-gallery-11.jpg')}}" data-lightbox="gallery-footer">
					<img src="{{asset('front_assets/images/photo-gallery-thumb-11.jpg')}}" alt="GALLERY">
				</a>
			</div>
		</div>
	</aside>
  @section('container')
  @show
 <!-- Footer -->
 <footer class="bg1">
		<div class="container p-t-40 p-b-70">
			<div class="row">
				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-33">
						Contact Us
					</h4>

					<ul class="m-b-70">
						<li class="txt14 m-b-14">
							<i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
							Butwal 11, Kalikanagar, Rupandehi, Nepal
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
							071-590504
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
							contact@site.com
						</li>
					</ul>

					<!-- - -->
					<h4 class="txt13 m-b-32">
						Opening Times
					</h4>

					<ul>
						<li class="txt14">
							10:00 AM – 11:00 PM
						</li>

						<li class="txt14">
							Every Day
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					
					

					<div class="fb-page" data-href="https://www.facebook.com/eldoradoavenue"  data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/eldoradoavenue" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/eldoradoavenue">Facebook</a></blockquote></div>
               </div>
				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-38">
						Gallery
					</h4>

					<!-- Gallery footer -->
					<div class="wrap-gallery-footer flex-w">
						<a class="item-gallery-footer wrap-pic-w" href="{{asset('front_assets/images/photo-gallery-01.jpg')}}" data-lightbox="gallery-footer">
							<img src="{{asset('front_assets/images/photo-gallery-thumb-01.jpg')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('front_assets/images/photo-gallery-02.jpg')}}" data-lightbox="gallery-footer">
							<img src="{{('front_assets/images/photo-gallery-thumb-02.jpg')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{'front_assets/images/photo-gallery-03.jpg'}}" data-lightbox="gallery-footer">
							<img src="{{asset('front_assets/images/photo-gallery-thumb-03.jpg')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('front_assets/images/photo-gallery-04.jpg')}}" data-lightbox="gallery-footer">
							<img src="{{asset('front_assets/images/photo-gallery-thumb-04.jpg')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('front_assets/images/photo-gallery-05.jpg')}}" data-lightbox="gallery-footer">
							<img src="{{asset('front_assets/images/photo-gallery-thumb-05.jpg')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('front_assets/images/photo-gallery-06.jpg')}}" data-lightbox="gallery-footer">
							<img src="{{asset('front_assets/images/photo-gallery-thumb-06.jpg')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('front_assets/images/photo-gallery-07.jpg')}}" data-lightbox="gallery-footer">
							<img src="{{asset('front_assets/images/photo-gallery-thumb-07.jpg')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('front_assets/images/photo-gallery-08.jpg')}}" data-lightbox="gallery-footer">
							<img src="{{asset('front_assets/images/photo-gallery-thumb-08.jpg')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('front_assets/images/photo-gallery-09.jpg')}}" data-lightbox="gallery-footer">
							<img src="{{asset('front_assets/images/photo-gallery-thumb-09.jpg')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('front_assets/images/photo-gallery-10.jpg')}}" data-lightbox="gallery-footer">
							<img src="{{asset('front_assets/images/photo-gallery-thumb-10.jpg')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('front_assets/images/photo-gallery-11.jpg')}}" data-lightbox="gallery-footer">
							<img src="{{asset('front_assets/images/photo-gallery-thumb-11.jpg')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('front_assets/images/photo-gallery-12.jpg')}}" data-lightbox="gallery-footer">
							<img src="{{asset('front_assets/images/photo-gallery-thumb-12.jpg')}}" alt="GALLERY">
						</a>
					</div>

				</div>
			</div>
		</div>

		<div class="end-footer bg2">
			<div class="container">
				<div class="flex-sb-m flex-w p-t-22 p-b-22">
				<div class="social flex-w flex-l-m p-r-20">
						<a href="javascript:void(0)"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
						<a href="https://www.facebook.com/eldoradoavenue"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
						<a href="https://www.instagram.com/el_dorado_avenue/"><i class="fa fa-instagram m-l-21" aria-hidden="true"></i></a>

						
					</div>

					<div class="txt17 p-r-20 p-t-5 p-b-5">
						Copyright &copy; 2024 All rights reserved  |  This template is made with <i class="fa fa-heart"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>

	<!-- Modal Video 01-->
	<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

		<div class="modal-dialog" role="document" data-dismiss="modal">
			<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

			<div class="wrap-video-mo-01">
				<div class="w-full wrap-pic-w op-0-0"><img src="public/front_assets/images/icons/video-16-9.jpg" alt="IMG"></div>
				<div class="video-mo-01">
					<iframe src="https://www.youtube.com/embed/5k1hSu2gdKE?rel=0&amp;showinfo=0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
    

  <!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
	<script type="text/javascript" src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('vendor/slick/slick.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('front_assets/js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('vendor/parallax100/parallax100.js')}}"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('vendor/lightbox2/js/lightbox.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('front_assets/js/main.js')}}"></script>


  </body>
</html>