<!DOCTYPE html>
<html>
  <head>
    <title>寶澤茶品</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="寶澤茶品" />
    <script type="application/x-javascript">
      addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
      }, false);
  
      function hideURLbar() {
        window.scrollTo(0, 1);
      }
    </script>
    <!-- //custom-theme -->
    <link href="{{asset('resources/assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome-icons -->
    <link href="{{asset('resources/assets/css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <link href="{{asset('resources/assets/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('resources/assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- <link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
  <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'> -->
  </head>
  
<body>
	<!-- banner -->
	<div class="banner_top" id="home">
		<div data-vide-bg="video/gift-packs">
			<div class="center-container">
				<div class="w3_agile_header">
					<div class="w3_agileits_logo">
						<h1><a href="{{url('admin\index')}}">寶澤茶品</a></h1>
					</div>
					<div class="w3_menu">
						<div class="agileits_w3layouts_banner_info">

							<form action="#" method="post">
								<input type="search" name="search" placeholder=" " required="">
								<input type="submit" value="Search">
							</form>
						</div>
						<div class="top-nav">
							<nav class="navbar navbar-default">
								<div class="container">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
										data-target="#bs-example-navbar-collapse-1">選單</button>
								</div>
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<ul class="nav navbar-nav">
										<li class="home-icon"><a href="{{url('admin\index')}}"><span class="fa fa-home"
													aria-hidden="true"></span></a></li>
										<li><a href="{{url('admin\category')}}">關於寶澤</a></li>
										<li><a href="{{url('admin\gallery')}}">我們的成果</a></li>
										<li><a href="{{url('admin\buynow')}}">去購物</a></li>
										<li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom"
												data-toggle="dropdown" role="button" aria-haspopup="true"
												aria-expanded="false">Pages <span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a class="hvr-bounce-to-bottom" href="icons.html">Web Icons</a></li>
												<li><a class="hvr-bounce-to-bottom" href="codes.html">Short Codes</a>
												</li>
											</ul>
										</li>
										<li><a href="{{url('admin\contact')}}">聯繫我們</a></li>
										<li class="nav-cart-w3ls">
											<form action="#" method="post" class="last">
												<input type="hidden" name="cmd" value="_cart">
												<input type="hidden" name="display" value="1">
												<button class="w3view-cart" type="submit" name="submit" value=""><i
														class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
											</form>
										</li>
									</ul>
									<div class="clearfix"> </div>
								</div>
							</nav>
						</div>
					</div>

					<div class="clearfix"></div>
				</div>
				<!-- banner-text -->
				<div class="slider">
					<div class="callbacks_container">
						<ul class="rslides callbacks callbacks1" id="slider4">
							<li>
								<div class="agileits-banner-info">
									<h4>寶澤茶品</h4>
									<h3>好茶、好禮、好品味</h3>
								</div>
							</li>
							<li>
								<div class="agileits-banner-info">
									<h4>寶澤的使命</h4>
									<h3>保原味，擇好茶</h3>
								</div>
							</li>
							<li>
								<div class="agileits-banner-info">
									<h4>精緻經典，高山品質</h4>
									<h3>50年製茶經驗沉淀之作</h3>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<!--banner Slider starts Here-->
				<div class="w3_agileits_social_media ">
					<ul class="social-icons3">
						<li class="agileinfo_share">Share On</li>
						<li><a href="#" class="wthree_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a>
						</li>
						<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="wthree_dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
						</li>
						<li><a href="#" class="wthree_behance"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->

@yield('content')
	<!--footer-->
	<div class="footer_bottom section">
		<div class="agileits-w3layouts-footer">
			<div class="container">
				<div class="col-md-4 w3-agile-grid">
					<h5>關於茶</h5>
					<p>俗話說的好種茶的不賣茶,賣茶的不種茶,會種茶的不會做茶,會做茶的不會種茶,寶澤茶品製造商名品製茶廠是從種茶.製茶到賣茶皆自行參與並培育優良茶苗供應給茶農名品製茶廠從種茶.製茶到賣茶皆自行參與並培育優良茶苗供應給茶農本著製茶50年經驗提供手採高山烏龍.四季春.金萱.翠玉等品種之好茶</p>
					<div class="w3_agileits_social_media team_agile_w3l team footer">
						<ul class="social-icons3">

							<li><a href="#" class="wthree_facebook"> <i class="fa fa-facebook"
										aria-hidden="true"></i></a></li>
							<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li><a href="#" class="wthree_dribbble"><i class="fa fa-dribbble"
										aria-hidden="true"></i></a></li>
							<li><a href="#" class="wthree_behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
					<div class="image-agileits">
						<img src="{{asset('resources/assets/images/f1.jpg')}}" alt="" class="img-r">
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3-agile-grid mid-w3-add">
					<h5>聯絡資訊</h5>
					<div class="w3-address">
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>聯絡手機</h6>
								<p>0933711233</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>電子郵件</h6>
								<p>電子郵件 :<a href="mailto:bolin6377@gmail.com">bolin6377@gmail.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>聯絡地址</h6>
								<p>新北市板橋區民生路一段25號2樓
									<span>電話 : 02-29509070</span>
								</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-4 footer-right w3-agile-grid">
					<div class="agile_footer_grid">
						<h5>最新消息</h5>
						<ul class="agileits_w3layouts_footer_grid_list">
							<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
								<a href="#" data-toggle="modal" data-target="#myModal1">Lorem ipsum neque vulputate </a>
							</li>
							<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
								<a href="#" data-toggle="modal" data-target="#myModal1">Dolor amet sed quam vitae</a>
							</li>
							<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
								<a href="#" data-toggle="modal" data-target="#myModal1">Lorem ipsum neque, vulputate
								</a>
							</li>
							<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
								<a href="#" data-toggle="modal" data-target="#myModal1">Dolor amet sed quam vitae</a>
							</li>
							<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
								<a href="#" data-toggle="modal" data-target="#myModal1">Lorem ipsum neque, vulputate
								</a>
							</li>
						</ul>
					</div>
					<h5>Stay in Touch</h5>
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Email Id" required="">
						<input type="submit" value="Subscribe">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="copyright">
			<p>© 2020 寶澤茶品. All rights reserved | Design by <a href="#">Jack_yu</a></p>
		</div>
	</div>
	<!-- Modal1 -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>Prezzie</h4>
					<img src="{{asset('resources/assets/images/f2.jpg')}}" alt=" " class="img-responsive">
					<h5>Integer lorem ipsum dolor sit amet </h5>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
						the industry's standard dummy text ever since the 1500s, rds which don't look even slightly
						believable..</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal1 -->

	<!--//footer-->

	<!-- js -->
	<script type="text/javascript" src="{{asset('resources/assets/js/jquery-2.1.4.min.js')}}"></script>
	<!-- //js -->
	<script src="{{asset('resources/assets/js/responsiveslides.min.js')}}"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!-- for-Clients -->
	<script src="{{asset('resources/assets/js/owl.carousel.js')}}"></script>
	<!-- requried-jsfiles-for owl -->
	<script>
		$(document).ready(function () {
			$("#owl-demo2").owlCarousel({
				items: 1,
				lazyLoad: false,
				autoPlay: true,
				navigation: false,
				navigationText: false,
				pagination: true,
			});
		});
	</script>
	<!-- //requried-jsfiles-for owl -->
	<!-- //for-Clients -->
	<!-- cart-js -->
	<script src="{{asset('resources/assets/js/minicart.min.js')}}"></script>
	<script>
		// Mini Cart
		paypal.minicart.render({
			action: '#'
		});

		if (~window.location.search.indexOf('reset=true')) {
			paypal.minicart.reset();
		}
	</script>
	<!-- //cart-js -->
	<!-- Nice scroll -->
	<script src="{{asset('resources/assets/js/jquery.nicescroll.js')}}"></script>
	<script src="{{asset('resources/assets/js/scripts.js')}}"></script>
	<!-- //Nice scroll -->
	<!-- for bootstrap working -->
	<script type="text/javascript" src="{{asset('resources/assets/js/bootstrap-3.1.1.min.js')}}"></script>
	<!-- //for bootstrap working -->
</body>
</html>