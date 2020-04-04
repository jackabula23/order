@extends('layouts.admin')

@section('content')
	<!-- About -->
	<div class="about" id="about">
		<div class="container">
		</div>
	</div>
	<!-- //about -->
	<!--we-offer -->
	<div class="features">
		<div class="container">
			<div class="heading-setion-w3ls">
				<h2 class="title-w3layouts">寶澤提供的服務 <i class="fa fa-bell-o" aria-hidden="true"></i><i
						class="fa fa-bell" aria-hidden="true"></i></h2>
			</div>
			<div class="col-md-4 servies-agileinfo">
				<p class="pink-w3ls">品茗使您的生活更加豐富</p>
				<p class="para-w3agileits">我們以超讚的優惠和折扣為您提供最好的茶。</p>
			</div>
			<div class="col-md-4 servies-agileinfo">
				<ul>
					<li><i class="fa fa-diamond" aria-hidden="true"></i>Mothers day</li>
					<li><i class="fa fa-diamond" aria-hidden="true"></i>Valentine's Day</li>
					<li><i class="fa fa-diamond" aria-hidden="true"></i>Wedding Day</li>
					<li><i class="fa fa-diamond" aria-hidden="true"></i>Anniversary</li>
					<li><i class="fa fa-diamond" aria-hidden="true"></i>Get well</li>
					<li><i class="fa fa-diamond" aria-hidden="true"></i>House warming</li>
				</ul>
			</div>
			<div class="col-md-4 servies-agileinfo">
				<ul>
					<li><i class="fa fa-diamond" aria-hidden="true"></i>Retirement</li>
					<li><i class="fa fa-diamond" aria-hidden="true"></i>New baby</li>
					<li><i class="fa fa-diamond" aria-hidden="true"></i>Business</li>
					<li><i class="fa fa-diamond" aria-hidden="true"></i>Birth days</li>
					<li><i class="fa fa-diamond" aria-hidden="true"></i>Graduation day</li>
					<li><i class="fa fa-diamond" aria-hidden="true"></i>Return gifts</li>
				</ul>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //we-offer -->
	<div class="sale-w3ls">
		<div class="container">
			<h6 class="white-agileits">Sale! <span>40%</span> off</h6>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent varius lectus vitae porttitor
				fringilla. Donec turpis orci, elementum a nunc quis, maximus varius ipsum. Sed bibendum ex in dignissim
				bibendum.</p>
			<a href="buynow.html" class="botton-agileits">Read more</a>
		</div>
	</div>
	<!-- team -->
	<div class="team" id="team">
		<div class="container">
			<div class="heading-setion-w3ls">
				<h3 class="title-w3layouts">Meet our Team <i class="fa fa-bell-o" aria-hidden="true"></i><i
						class="fa fa-bell" aria-hidden="true"></i></h3>
			</div>
			<div class="col-md-6 team-left">
				<div class="team1">
					<div class="col-md-4 team-img1">
						<img src="{{asset('resources/assets/images/team1.jpg')}}" alt="" />
					</div>
					<div class="col-md-4 team-info">
						<h4>Carl Haddon</h4>
						<p>Lorem Ipsum</p>
						<div class="social-icons">
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="team2">
					<div class="col-md-4 team-img2">
						<img src="{{asset('resources/assets/images/team2.jpg')}}" alt="" />
					</div>
					<div class="col-md-4 team-info">
						<h4>Nessa Peters</h4>
						<p>Lorem Ipsum</p>
						<div class="social-icons">
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-6 team-right">
				<div class="team3">
					<div class="col-md-4 team-img1">
						<img src="{{asset('resources/assets/images/team3.jpg')}}" alt="" />
					</div>
					<div class="col-md-4 team-info">
						<h4>Mark Johnson</h4>
						<p>Lorem Ipsum</p>
						<div class="social-icons">
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="team4">
					<div class="col-md-4 team-img2">
						<img src="{{asset('resources/assets/images/team4.jpg')}}" alt="" />
					</div>
					<div class="col-md-4 team-info">
						<h4>Alice Puse</h4>
						<p>Lorem Ipsum</p>
						<div class="social-icons">
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //team -->
	<!-- services -->
	<div class="services">
		<div class="container">
			<div class="w3l-about-grids">
				<div class="col-md-6 w3ls-about-left">
					<div class="heading-setion-w3ls">
						<h3 class="title-w3layouts white-agileits">Features <i class="fa fa-bell-o"
								aria-hidden="true"></i><i class="fa fa-bell white-agileits" aria-hidden="true"></i></h3>
					</div>
					<div class="agileits-icon-grid">
						<div class="icon-left hvr-radial-out">
							<i class="fa fa-cog" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Suspendisse consectetur dapibus volutpat.</h5>
							<p class="para-w3-agile">Phasellus dapibus felis elit, sed accumsan arcu gravida vitae.
								Nullam aliquam erat at lectus ullamcorper, nec interdum neque hendrerit.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="agileits-icon-grid">
						<div class="icon-left hvr-radial-out">
							<i class="fa fa-heart" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Lorem ipsum dolor sit amet</h5>
							<p class="para-w3-agile">Phasellus dapibus felis elit, sed accumsan arcu gravida vitae.
								Nullam aliquam erat at lectus ullamcorper, nec interdum neque hendrerit.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="agileits-icon-grid">
						<div class="icon-left hvr-radial-out">
							<i class="fa fa-paper-plane" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Suspendisse consectetur dapibus volutpat.</h5>
							<p class="para-w3-agile">Phasellus dapibus felis elit, sed accumsan arcu gravida vitae.
								Nullam aliquam erat at lectus ullamcorper, nec interdum neque hendrerit.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 w3ls-about-right">
					<div class="heading-setion-w3ls">
						<h3 class="title-w3layouts white-agileits">They Say <i class="fa fa-bell-o"
								aria-hidden="true"></i><i class="fa fa-bell white-agileits" aria-hidden="true"></i></h3>
					</div>
					<div class="w3ls-about-right-img">
						<div class="test-gri1">
							<div id="owl-demo2" class="owl-carousel">
								<div class="test-grid1">
									<img src="{{asset('resources/assets/images/team1.jpg')}}" alt="" class="img-r">
									<h4>Mark Henry</h4>
									<span>CUSTOMER 1</span>
									<p>Lorem ipsum dolor sit amet, Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
								</div>
								<div class="agile">
									<div class="test-grid1">
										<img src="{{asset('resources/assets/images/team2.jpg')}}" alt="" class="img-r">
										<h4>Joseph Carl</h4>
										<span>CUSTOMER 2</span>
										<p>Lorem ipsum dolor sit amet, Ut enim ad minim veniam, quis.Lorem ipsum dolor .
										</p>
									</div>
								</div>
								<div class="agile">
									<div class="test-grid1">
										<img src="{{asset('resources/assets/images/team3.jpg')}}" alt="" class="img-r">
										<h4>John Mark</h4>
										<span>CUSTOMER 3</span>
										<p>Lorem ipsum dolor sit amet, Ut enim ad minim veniam, quis.Lorem ipsum dolor .
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->
@endsection