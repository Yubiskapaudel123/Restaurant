@extends('front/layout')


@section('title')
    Home 
@endsection



@section('container')

	<!-- Slide1 -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url('{{asset('front_assets/images/332276075_504926338465734_8285107212269949982_n.jpg')}}');">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							Welcome to
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							El Dorado Avenue
						</h2>

					</div>
				</div>

				<div class="item-slick1 item2-slick1" style="background-image: url('{{asset('front_assets/images/332276075_504926338465734_8285107212269949982_n.jpg')}}');">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rollIn">
							Welcome to
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
							El Dorado Avenue
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="slideInUp">
							<!-- Button1 -->
							<!-- <a href="menu.html" class="btn1 flex-c-m size1 txt3 trans-0-4">
								Look Menu
							</a> -->
						</div>
					</div>
				</div>

				<div class="item-slick1 item3-slick1" style="background-image: url('{{asset('front_assets/images/332276075_504926338465734_8285107212269949982_n.jpg')}}');">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
							Welcome to
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
						    El Dorado Avenue

						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="rotateIn">
							<!-- Button1 -->
							<!-- <a href="menu.html" class="btn1 flex-c-m size1 txt3 trans-0-4">
								Look Menu
							</a> -->
						</div>
					</div>
				</div>

			</div>

			<div class="wrap-slick1-dots"></div>
		</div>
	</section>

	<!-- Welcome -->
	<section class="section-welcome bg1-pattern p-t-120 p-b-105">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-t-45 p-b-30">
					<div class="wrap-text-welcome t-center">
						<span class="tit2 t-center">
							Italian Restaurant
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-5">
							Welcome
						</h3>

						<p class="t-center m-b-22 size3 m-l-r-auto">
							Donec quis lorem nulla. Nunc eu odio mi. Morbi nec lobortis est. Sed fringilla, nunc sed imperdiet lacinia, nisl ante egestas mi, ac facilisis ligula sem id neque.
						</p>

						<a href="{{url('about')}}" class="txt4">
							Our Story
							<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
						</a>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<img src="{{asset('front_assets/images/our-story-01.jpg')}}" alt="IMG-OUR">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Intro -->
	<section class="section-intro">
		<div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url('asset{{('front_assets/images/bg-intro-01.jpg')}}');">
			<span class="tit2 p-l-15 p-r-15">
				Discover
			</span>

			<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
				El Dorado Avenue
			</h3>
		</div>

		<div class="content-intro bg-white p-t-77 p-b-133">
			<div class="container">
				<div class="row">
					<div class="col-md-4 p-t-30">
						<!-- Block1 -->
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
								<a href="javascript:void(0)"><img src="{{asset('front_assets/images/intro-01.jpg')}}" alt="IMG-INTRO"></a>
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<a href="javascript:void(0)"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
									Romantic Restaurant
								</h4></a>

								<p class="m-b-20">
									Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
								</p>

								<a href="javascript:void(0)" class="txt4">
									Learn More
									<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-md-4 p-t-30">
						<!-- Block1 -->
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
								<a href="javascript:void(0)"><img src="{{asset('front_assets/images/intro-02.jpg')}}" alt="IMG-INTRO"></a>
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<a href="javascript:void(0)"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
									Delicious 
								</h4></a>

								<p class="m-b-20">
									Aliquam eget aliquam magna, quis posuere risus ac justo ipsum nibh urna
								</p>

								<a href="javascript:void(0)" class="txt4">
									Learn More
									<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-md-4 p-t-30">
						<!-- Block1 -->
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
								<a href="javascript:void(0)"><img src="{{asset('front_assets/images/intro-04.jpg')}}" alt="IMG-INTRO"></a>
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<a href="javascript:void(0)"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
									Red Wines You Love
								</h4></a>

								<p class="m-b-20">
									Sed ornare ligula eget tortor tempor, quis porta tellus dictum.
								</p>

								<a href="javascript:void(0)" class="txt4">
									Learn More
									<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	

	<!-- Event -->
	<section class="section-event">
		<div class="wrap-slick2">
			<div class="slick2">
				<div class="item-slick2 item1-slick2" style="background-image: url('{{asset('front_assets/images/bg-event-01.jpg')}}');">
					<div class="wrap-content-slide2 p-t-115 p-b-208">
						<div class="container">
							<!-- - -->
							<div class="title-event t-center m-b-52">
								<span class="tit2 p-l-15 p-r-15">
									Upcomming
								</span>

								<h3 class="tit6 t-center p-l-15 p-r-15 p-t-3">
									Events
								</h3>
							</div>

							<!-- Block2 -->
							<div class="blo2 flex-w flex-str flex-col-c-m-lg animated visible-false" data-appear="zoomIn">
								<!-- Pic block2 -->
								<a href="javascript:void(0)" class="wrap-pic-blo2 bg1-blo2" style="background-image: url('{{asset('front_assets/images/event-02.jpg')}}');">
									<div class="time-event size10 txt6 effect1">
										<span class="txt-effect1 flex-c-m t-center">
											08:00 PM Tuesday - 21 November 2018
										</span>
									</div>
								</a>

								<!-- Text block2 -->
								<div class="wrap-text-blo2 flex-col-c-m p-l-40 p-r-40 p-t-45 p-b-30">
									<h4 class="tit7 t-center m-b-10">
										Wines during specific nights
									</h4>

									<p class="t-center">
										Donec quis lorem nulla. Nunc eu odio mi. Morbi nec lobortis est. Sed fringilla, nunc sed imperdiet lacinia
									</p>

									<div class="flex-sa-m flex-w w-full m-t-40">
										<div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 days">
												25
											</span>

											<span class="dis-block t-center txt8">
												Days
											</span>
										</div>

										<div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 hours">
												12
											</span>

											<span class="dis-block t-center txt8">
												Hours
											</span>
										</div>

										<div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 minutes">
												59
											</span>

											<span class="dis-block t-center txt8">
												Minutes
											</span>
										</div>

										<div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 seconds">
												56
											</span>

											<span class="dis-block t-center txt8">
												Seconds
											</span>
										</div>
									</div>

									<a href="javascript:void(0)" class="txt4 m-t-40">
										View Details
										<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick2 item2-slick2" style="background-image: url('{{asset('front_assets/images/bg-event-02.jpg')}}');">
					<div class="wrap-content-slide2 p-t-115 p-b-208">
						<div class="container">
							<!-- - -->
							<div class="title-event t-center m-b-52">
								<span class="tit2 p-l-15 p-r-15">
									Upcomming
								</span>

								<h3 class="tit6 t-center p-l-15 p-r-15 p-t-3">
									Events
								</h3>
							</div>

							<!-- Block2 -->
							<div class="blo2 flex-w flex-str flex-col-c-m-lg animated visible-false" data-appear="fadeInDown">
								<!-- Pic block2 -->
								<a href="javascript:void(0)" class="wrap-pic-blo2 bg2-blo2" style="background-image: url('{{asset('front_assets/images/event-06.jpg')}}');">
									<div class="time-event size10 txt6 effect1">
										<span class="txt-effect1 flex-c-m">
											08:00 PM Tuesday - 21 November 2018
										</span>
									</div>
								</a>

								<!-- Text block2 -->
								<div class="wrap-text-blo2 flex-col-c-m p-l-40 p-r-40 p-t-45 p-b-30">
									<h4 class="tit7 t-center m-b-10">
										Wines during specific nights
									</h4>

									<p class="t-center">
										Donec quis lorem nulla. Nunc eu odio mi. Morbi nec lobortis est. Sed fringilla, nunc sed imperdiet lacinia
									</p>

									<div class="flex-sa-m flex-w w-full m-t-40">
										<div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 days">
												25
											</span>

											<span class="dis-block t-center txt8">
												Days
											</span>
										</div>

										<div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 hours">
												12
											</span>

											<span class="dis-block t-center txt8">
												Hours
											</span>
										</div>

										<div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 minutes">
												59
											</span>

											<span class="dis-block t-center txt8">
												Minutes
											</span>
										</div>

										<div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 seconds">
												56
											</span>

											<span class="dis-block t-center txt8">
												Seconds
											</span>
										</div>
									</div>

									<a href="javascript:void(0)" class="txt4 m-t-40">
										View Details
										<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick2 item3-slick2" style="background-image: url('{{asset('front_assets/images/bg-event-04.jpg')}}');">
					<div class="wrap-content-slide2 p-t-115 p-b-208">
						<div class="container">
							<!-- - -->
							<div class="title-event t-center m-b-52">
								<span class="tit2 p-l-15 p-r-15">
									Upcomming
								</span>

								<h3 class="tit6 t-center p-l-15 p-r-15 p-t-3">
									Events
								</h3>
							</div>

							<!-- Block2 -->
							<div class="blo2 flex-w flex-str flex-col-c-m-lg animated visible-false" data-appear="rotateInUpLeft">
								<!-- Pic block2 -->
								<a href="javascript:void(0)" class="wrap-pic-blo2 bg3-blo2" style="background-image: url('{{asset('front_assets/images/event-01.jpg')}}');">
									<div class="time-event size10 txt6 effect1">
										<span class="txt-effect1 flex-c-m">
											08:00 PM Tuesday - 21 November 2018
										</span>
									</div>
								</a>

								<!-- Text block2 -->
								<div class="wrap-text-blo2 flex-col-c-m p-l-40 p-r-40 p-t-45 p-b-30">
									<h4 class="tit7 t-center m-b-10">
										Wines during specific nights
									</h4>

									<p class="t-center">
										Donec quis lorem nulla. Nunc eu odio mi. Morbi nec lobortis est. Sed fringilla, nunc sed imperdiet lacinia
									</p>

									<div class="flex-sa-m flex-w w-full m-t-40">
										<div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 days">
												25
											</span>

											<span class="dis-block t-center txt8">
												Days
											</span>
										</div>

										<div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 hours">
												12
											</span>

											<span class="dis-block t-center txt8">
												Hours
											</span>
										</div>

										<div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 minutes">
												59
											</span>

											<span class="dis-block t-center txt8">
												Minutes
											</span>
										</div>

										<div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 seconds">
												56
											</span>

											<span class="dis-block t-center txt8">
												Seconds
											</span>
										</div>
									</div>

									<a href="javascript:void(0)" class="txt4 m-t-40">
										View Details
										<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="wrap-slick2-dots"></div>
		</div>
	</section>

	<!-- Booking -->
		<!-- Reservation -->
		<section class="section-reservation bg1-pattern p-t-100 p-b-113">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 p-b-30">
					<div class="t-center">
						<span class="tit2 t-center">
							Reservation
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-2">
							Book table
						</h3>
					</div>
					@if(session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif


					<form method="POST" action="{{route('reservation.reservation_process') }}" class="wrap-form-reservation size22 m-l-r-auto">
						@csrf
						<div class="row">
							<div class="col-md-4">
								<!-- Date -->
								<span class="txt9">
									Date
								</span>

								<div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="form-control" type="date" name="date"  required>
								</div>
							</div>

							<div class="col-md-4">
								<!-- Time -->
								<span class="txt9">
									Time
								</span>

								<div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
									
									<input id="time" type="time" class="form-control" name="time"  required>
                                    @error('time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
								</div>
							</div>

							<div class="col-md-4">
								<!-- People -->
								<span class="txt9">
									People
								</span>

								<div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
								<input id="guests" type="number" class="form-control" name="guests"  required>
                                    @error('guests')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<!-- Name -->
								<span class="txt9">
									Name
								</span>

								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name"  placeholder="Name">
									@error('name')
									   <span class="invalid-feedback" role="alert">
									      <strong>{{ $message }}</strong>
									   </span>
								  @enderror
                                   
								</div>
							</div>

							<div class="col-md-4">
								<!-- Phone -->
								<span class="txt9">
									Phone
								</span>

								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="phone"  placeholder="Phone">
									@error('phone')
									   <span class="invalid-feedback" role="alert">
									      <strong>{{ $message }}</strong>
									   </span>
								  @enderror
								</div>
							</div>

							<div class="col-md-4">
								<!-- Email -->
								<span class="txt9">
									Email
								</span>

								<div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email"  placeholder="Email">
									@error('email')
									   <span class="invalid-feedback" role="alert">
									      <strong>{{ $message }}</strong>
									   </span>
								  @enderror
								</div>
								
							</div>

						</div>

						<div class="wrap-btn-booking flex-c-m m-t-6">
							<!-- Button3 -->
							<button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
								Book Table
							</button>
						</div>
					</form>
				</div>
			</div>

			<div class="info-reservation flex-w p-t-80">
				<div class="size23 w-full-md p-t-40 p-r-30 p-r-0-md">
					<h4 class="txt5 m-b-18">
						Reserve by Phone
					</h4>

					<p class="size25">
						Donec quis euismod purus. Donec feugiat ligula rhoncus, varius nisl sed, tincidunt lectus.
						<span class="txt25">Nulla vulputate</span>
						, lectus vel volutpat efficitur, orci
						<span class="txt25">lacus sodales</span>
						 sem, sit amet quam:
						<span class="txt24"> 071-590504</span>
					</p>
				</div>

				<div class="size24 w-full-md p-t-40">
					<h4 class="txt5 m-b-18">
						For Event Booking
					</h4>

					<p class="size26">
						Donec feugiat ligula rhoncus:
						<span class="txt24"> 071-590504</span>
						, varius nisl sed, tinci-dunt lectus sodales sem.
					</p>
				</div>

			</div>
		</div>
	</section>


	<!-- Review -->
	<section class="section-review p-t-115">
		<!-- - -->
		<div class="title-review t-center m-b-2">
			<span class="tit2 p-l-15 p-r-15">
				Customers Say
			</span>

			<h3 class="tit8 t-center p-l-20 p-r-15 p-t-3">
				Review
			</h3>
		</div>

		<!-- - -->
		<div class="wrap-slick3">
			<div class="slick3">
				<div class="item-slick3 item1-slick3">
					<div class="wrap-content-slide3 p-b-50 p-t-50">
						<div class="container">
							<div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
								<img src="{{asset('front_assets/images/avatar-01.jpg')}}" alt="IGM-AVATAR">
							</div>

							<div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
								<p class="t-center txt12 size15 m-l-r-auto">
									“ We are lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tellus sem, mattis in pre-tium nec, fermentum viverra dui ”
								</p>

								<div class="star-review fs-18 color0 flex-c-m m-t-12">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star p-l-1" aria-hidden="true"></i>
									<i class="fa fa-star p-l-1" aria-hidden="true"></i>
									<i class="fa fa-star p-l-1" aria-hidden="true"></i>
									<i class="fa fa-star p-l-1" aria-hidden="true"></i>
								</div>

								<div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
									Marie Simmons ˗ New York
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick3 item2-slick3">
					<div class="wrap-content-slide3 p-b-50 p-t-50">
						<div class="container">
							<div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
								<img src="{{asset('front_assets/images/avatar-04.jpg')}}" alt="IGM-AVATAR">
							</div>

							<div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
								<p class="t-center txt12 size15 m-l-r-auto">
									“ We are lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tellus sem, mattis in pre-tium nec, fermentum viverra dui ”
								</p>

								<div class="star-review fs-18 color0 flex-c-m m-t-12">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star p-l-1" aria-hidden="true"></i>
									<i class="fa fa-star p-l-1" aria-hidden="true"></i>
									<i class="fa fa-star p-l-1" aria-hidden="true"></i>
									<i class="fa fa-star p-l-1" aria-hidden="true"></i>
								</div>

								<div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
									Marie Simmons ˗ New York
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick3 item3-slick3">
					<div class="wrap-content-slide3 p-b-50 p-t-50">
						<div class="container">
							<div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
								<img src="{{asset('front_assets/images/avatar-05.jpg')}}" alt="IGM-AVATAR">
							</div>

							<div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
								<p class="t-center txt12 size15 m-l-r-auto">
									“ We are lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tellus sem, mattis in pre-tium nec, fermentum viverra dui ”
								</p>

								<div class="star-review fs-18 color0 flex-c-m m-t-12">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star p-l-1" aria-hidden="true"></i>
									<i class="fa fa-star p-l-1" aria-hidden="true"></i>
									<i class="fa fa-star p-l-1" aria-hidden="true"></i>
									<i class="fa fa-star p-l-1" aria-hidden="true"></i>
								</div>

								<div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
									Marie Simmons ˗ New York
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="wrap-slick3-dots m-t-30"></div>
		</div>
	</section>


	<!-- Video -->
	<section class="section-video parallax100" style="background-image: url(/public/front_assets/images/bg-cover-video-02.jpg);">
		<div class="content-video t-center p-t-225 p-b-250">
			<span class="tit2 p-l-15 p-r-15">
				Discover
			</span>

			<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
				Our Video
			</h3>

			<div class="btn-play ab-center size16 hov-pointer m-l-r-auto m-t-43 m-b-33" data-toggle="modal" data-target="#modal-video-01">
				<div class="flex-c-m sizefull bo-cir bgwhite color1 hov1 trans-0-4">
					<i class="fa fa-play fs-18 m-l-2" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</section>


	<!-- Blog -->
	<section class="section-blog bg-white p-t-115 p-b-123">
		<div class="container">
			<div class="title-section-ourmenu t-center m-b-22">
				<span class="tit2 t-center">
					Latest News
				</span>

				<h3 class="tit5 t-center m-t-2">
					The Blog
				</h3>
			</div>

			<div class="row">
				<div class="col-md-4 p-t-30">
					<!-- Block1 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="javascript:void(0)"><img src="{{asset('front_assets/images/blog-01.jpg')}}" alt="IMG-INTRO"></a>

							<div class="time-blog">
								21 Dec 2017
							</div>
						</div>

						<div class="wrap-text-blo1 p-t-35">
							<a href="javascript:void(0)"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
							</p>

							<a href="javascript:void(0)" class="txt4">
								Continue Reading
								<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</div>

				<div class="col-md-4 p-t-30">
					<!-- Block1 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="javascript:void(0)"><img src="{{asset('front_assets/images/blog-02.jpg')}}" alt="IMG-INTRO"></a>

							<div class="time-blog">
								15 Dec 2017
							</div>
						</div>

						<div class="wrap-text-blo1 p-t-35">
							<a href="javascript:void(0)"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Eggs and Cheese
							</h4></a>

							<p class="m-b-20">
								Duis elementum, risus sit amet lobortis nunc justo condimentum ligula, vitae feugiat
							</p>

							<a href="javascript:void(0)" class="txt4">
								Continue Reading
								<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</div>

				<div class="col-md-4 p-t-30">
					<!-- Block1 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="javascript:void(0)"><img src="{{asset('front_assets/images/blog-03.jpg')}}" alt="IMG-INTRO"></a>

							<div class="time-blog">
								12 Dec 2017
							</div>
						</div>

						<div class="wrap-text-blo1 p-t-35">
							<a href="javascript:void(0)"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Style the Wedding Party
							</h4></a>

							<p class="m-b-20">
								Sed ornare ligula eget tortor tempor, quis porta tellus dictum.
							</p>

							<a href="javascript:void(0)" class="txt4">
								Continue Reading
								<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>


@endsection