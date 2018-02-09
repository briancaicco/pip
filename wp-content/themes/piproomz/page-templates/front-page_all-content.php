<?php ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front-page.min.css">
	<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front-page/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front-page/linearicons.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front-page/ionicons.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front-page/magnific-popup.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front-page/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front-page/preset.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front-page/scroll-animation.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front-page/style.css">
		<link rel="stylesheet" id="triggerColor" href="<?php echo get_template_directory_uri(); ?>/css/front-page/triggerPlate/color0.css">        
		<link rel="stylesheet" id="grad_triggerColor" href="<?php echo get_template_directory_uri(); ?>/css/front-page/triggerPlate/gradient/color-0.css">  --> 
	</head>

	<?php if( is_user_logged_in() && is_front_page()  ) { ?>
	<script type="text/javascript">
		//window.location.href="<?php bloginfo( 'url' ); ?>/dashboard";
	</script>
	<?php } ?>
	<body data-spy="scroll" data-target=".navbar" data-offset="50" <?php body_class(); ?>>
		<!--Loader-->
<!-- 		<div class="loading">
			<div class="loading-center">
				<div class="loading-center-absolute">
					<div class="object object_one"></div>
					<div class="object object_two"></div>
					<div class="object object_three"></div>
				</div>
			</div>
		</div> -->
		<!-- End Color Preset -->
		<!-- MAIN NAV -->
		<nav class="navbar navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.html">
							<img src="<?php echo get_template_directory_uri(); ?>/img/pip_logo_white.svg" alt="logo" width="170px">
							<img class="logo-blue" src="<?php echo get_template_directory_uri(); ?>/img/pip_logo.svg" width="170px" alt="logo-blue">
						</a>
						<a class="btn-getnow" href="#get-app">Join or Login</a>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-right smoothscroll">
							<li class="active"><a href="#home">Home</a></li>
							<li><a href="#features">Features</a></li>
							<li><a href="#screenshots">Screenshots</a></li>
							<li><a href="#testimonial">Testimonial</a></li>
							<li><a href="#team">Team</a></li>
							<li><a href="#pricing">Pricing</a></li>
							<li><a href="#blog">Blog</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
		<!-- END MAIN NAV -->
		<!-- HEADER -->
		<header id="home" class="header-home image-home">
			<div class="container">
				<div class="row">
					<div class="col-sm-7 col-header-txt lr-padding">
						<h1 class="animate display-none">Trade like a <span>pro</span></h1>
						<p class="animate delay-a display-none">Piproomz is helping traders of any experience level connect with other traders, resources, and tools so they can dominate the markets.</p>
						<a class="btn-white animate delay-b display-none" href="#get-app">Join For Free</a>
						<!-- <a class="btn-transparent animate delay-c display-none" href="#">Discover more</a> -->
					</div>
					<div class="col-sm-5 col-md-offset-2 col-md-3 col-header-img right-padding">
						<img src="<?php echo get_template_directory_uri(); ?>/img/front-page/header-img-2.png" alt="header-img" class="img-header-lg animate delay-c display-none">
						<img src="<?php echo get_template_directory_uri(); ?>/img/front-page/header-img-1.png" alt="header-img" class="img-header-sm delay-a display-none">
					</div>
				</div>
			</div>
		</header>
		<!-- END HEADER -->
		<!-- OVERVIEW -->
		<section id="overview" class="sec-overview bg-white">
			<div class="container">
				<div class="row">
					<h2 class="sec-title">Why traders choose piproomz</h2>
					<div class="hr"></div>
					<p class="subheader">Our community is open to traders of any skill level<br> who desire honest and trustworthy information.</p>
					<div class="col-sm-6 col-md-3">
						<div class="wrapper ovi-item animate">
							<div class="wrapper-img">
								<i class="overview-img fas fa-tv" aria-hidden="true"></i>
							</div>
							<hr>
							<h5>Live Webinars</h5>
							<p>Watch, learn and follow strategies from professional traders.</p>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="wrapper ovi-item animate delay-a">
							<div class="wrapper-img">
								<i class="overview-img fas fa-graduation-cap" aria-hidden="true"></i>
							</div>
							<hr>
							<h5>Step-by-step Courses</h5>
							<p>Learn at your own pace with our beginner to advanced courses.</p>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="wrapper ovi-item animate delay-b">
							<div class="wrapper-img ">
								<i class="overview-img fas fa-comments"></i>
							</div>
							<hr>
							<h5>Realtime Chat</h5>
							<p>Chat in realtime with other traders about market trends and the charts.</p>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="wrapper ovi-item animate delay-c">
							<div class="wrapper-img">
								<i class="overview-img fas fa-dollar-sign" aria-hidden="true"></i>
							</div>
							<hr>
							<h5>Exclusive Offers</h5>
							<p>We negotiate deals with industry partners and pass the savings to you.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END OVERVIEW -->
		<!-- STEPS -->
		<section id="steps" class="sec-steps bg-gradient-vertical">
			<h2 class="sec-title">How it works</h2>
			<div class="hr"></div>
			<p class="subheader">Create your free account and connect with the hundreds of other traders in the piproomz community, Go Pro and get full access to take your profits to the next level!</p>
			<div class="container">
				<div class="row row-1">
					<div class="col-sm-12 col-lg-10 col-lg-offset-1">
						<div class="row row-2">
							<div class="col-sm-4 step-1">
								<img src="<?php echo get_template_directory_uri(); ?>/img/front-page/1.png" alt="step-1" class="animate delay-a">
								<div class="step-desc">
									<span>01</span>
									<h4>Join For Free</h4>
									<hr>
									<p>Really... Joining is 100% Free!<br/> Who doesn't like free?</p>
								</div>
							</div>
							<div class="col-sm-4 step-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/front-page/2.png" alt="step-2" class="animate delay-b ">
								<div class="step-desc">
									<span>02</span>
									<h4>Go Pro</h4>
									<hr>
									<p>Leverage industry leading tools,<br/> resources and more! </p>
								</div>
							</div>
							<div class="col-sm-4 step-3">
								<img src="<?php echo get_template_directory_uri(); ?>/img/front-page/3.png" alt="step-3" class="animate delay-c">
								<div class="step-desc">
									<span>03</span>
									<h4>Bigger Profits</h4>
									<hr>
									<p>Maximize your profits<br/> by learning trading tips and strategies.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END STEPS -->
		<!-- FEATURES -->
		<section id="features" class="sec-features bg-grey">
			<h2 class="sec-title">Made by traders, for traders.</h2>
			<div class="hr"></div>
			<p class="subheader">Piproomz was founded by two traders with a passion for mentoring,<br/> technology and most importantly investing.
			Every feature has been carefully planned and painstakingly created with the needs of online traders top of mind.</p>
			<div class="container">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1 col-md-12 container-acting">
						<div class="row">
							<div class="col-sm-6 col-md-4 col-lg-3 feat-top-left animate delay-a">
								<span class="lnr lnr-smartphone"></span>
								<h5>SMS Signals</h5>
								<p>Never miss an opportunity, <br>Get real time alerts <br>of when and what to trade.</p>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-3 feat-top-right animate">
								<span class="lnr lnr-diamond"></span>
								<h5>Birds-eye&trade; Trading Dashboard.</h5>
								<p>Watch all of your favorite <br>currency pairs on one screen.</p>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-3 feat-bottom-left animate delay-a">
								<span class="lnr lnr-drop"></span>
								<h5>Social Trading</h5>
								<p>Make friends and <br>follow the activity <br>of your favorite trders.</p>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-3 feat-bottom-right animate">
								<span class="lnr lnr-code"></span>
								<h5>Realtime Chat</h5>
								<p>Discuss market events <br>as they're happening <br>right beside the chart.</p>
							</div>
						</div>
						<img class='img-responsive' src="<?php echo get_template_directory_uri(); ?>/img/front-page/phone-lines.png" alt='featured'>
					</div>
				</div>
			</div>
		</section>
		<!-- END FEATURES -->
		<!-- SCREENSHOTS
		<section id="screenshots" class="sec-screenshots bg-white">
			<div class="container">
				<h2 class="sec-title">Awesome Screenshots</h2>
				<div class="hr"></div>
				<p class="subheader">Lorem ipsum dolor sit amet consectetur adipiscing elit donec tempus pellentesque dui <br/> vel tristique purus justo vestibulum eget lectus non gravida ultrices</p>
				<div class="filter-btns">
					<a href="#" id="all" class="filter-btn active">All</a>
					<a href="#" id="cat-1" class="filter-btn">Login</a>
					<a href="#" id="cat-2" class="filter-btn">Calendar</a>
					<a href="#" id="cat-3" class="filter-btn">Chart</a>
					<a href="#" id="cat-4" class="filter-btn">Main</a>
					<a href="#" id="cat-5" class="filter-btn">Workout</a>
				</div>
				<div class="row">
					<div id="owl-id" class="screenshots owl-carousel">
						<a href="<?php echo get_template_directory_uri(); ?>/img/front-page/1-big.jpg" class="screenshot cat-1"><img src="<?php echo get_template_directory_uri(); ?>/img/front-page/1.jpg" alt="screenshot"></a>
						<a href="<?php echo get_template_directory_uri(); ?>/img/front-page/2-big.jpg" class="screenshot cat-4"><img src="<?php echo get_template_directory_uri(); ?>/img/front-page/2.jpg" alt="screenshot"></a>
						<a href="<?php echo get_template_directory_uri(); ?>/img/front-page/3-big.jpg" class="screenshot cat-2"><img src="<?php echo get_template_directory_uri(); ?>/img/front-page/3.jpg" alt="screenshot"></a>
						<a href="<?php echo get_template_directory_uri(); ?>/img/front-page/4-big.jpg" class="screenshot cat-3"><img src="<?php echo get_template_directory_uri(); ?>/img/front-page/4.jpg" alt="screenshot"></a>
						<a href="<?php echo get_template_directory_uri(); ?>/img/front-page/5-big.jpg" class="screenshot cat-4"><img src="<?php echo get_template_directory_uri(); ?>/img/front-page/5.jpg" alt="screenshot"></a>
						<a href="<?php echo get_template_directory_uri(); ?>/img/front-page/1-big.jpg" class="screenshot cat-5"><img src="<?php echo get_template_directory_uri(); ?>/img/front-page/1.jpg" alt="screenshot"></a>
						<a href="<?php echo get_template_directory_uri(); ?>/img/front-page/2-big.jpg" class="screenshot cat-5"><img src="<?php echo get_template_directory_uri(); ?>/img/front-page/2.jpg" alt="screenshot"></a>
						<a href="<?php echo get_template_directory_uri(); ?>/img/front-page/3-big.jpg" class="screenshot cat-3"><img src="<?php echo get_template_directory_uri(); ?>/img/front-page/3.jpg" alt="screenshot"></a>
						<a href="<?php echo get_template_directory_uri(); ?>/img/front-page/4-big.jpg" class="screenshot cat-2"><img src="<?php echo get_template_directory_uri(); ?>/img/front-page/4.jpg" alt="screenshot"></a>
						<a href="<?php echo get_template_directory_uri(); ?>/img/front-page/5-big.jpg" class="screenshot cat-1"><img src="<?php echo get_template_directory_uri(); ?>/img/front-page/5.jpg" alt="screenshot"></a>
					</div>
				</div>
			</div>
		</section>
		END SCREENSHOTS -->
		<!-- VIDEO 
		<section id="video" class="sec-video bg-gradient-horizontal bg-img">
			<div class="bg-img"></div>
			<div class="wrapper-video">
				<a class="youtube-popup" href="https://www.youtube.com/watch?v=_L4IQoAWD9E"><i class="fa fa-play" aria-hidden="true"></i></a>
				<h3>Video demo app</h3>
				<h6>Vestibulum tempus vel est ut tempus quisque tempus blandit odio tincidunt</h6>
			</div>
		</section>
		END VIDEO -->
		<!-- TESTIMONIAL -->
		<section id="testimonial" class="sec-testimonial bg-white">
			<h2 class="sec-title">What people are saying</h2>
			<div class="hr"></div>
			<p class="subheader">Lorem ipsum dolor sit amet consectetur adipiscing elit donec tempus pellentesque dui <br/> vel tristique purus justo vestibulum eget lectus non gravida ultrices</p>
			<div class="container">
				<div class="row">
					<div id="owl-testimonial" class="owl-testimonial">
						<div class="wrapper-testimonial">
							<div class="media">
								<div class="media-left">
									<img src="<?php echo get_template_directory_uri(); ?>/img/front-page/1.jpg" alt="test1">
								</div>
								<div class="media-body">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
									<p>Thanks yet again for another successful and very popular mobile app.</p>
									<div class="rating">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
									</div>
									<h6>Leila Taylor</h6>
								</div>
							</div>
						</div>
						<div class="wrapper-testimonial">
							<div class="media">
								<div class="media-left">
									<img src="<?php echo get_template_directory_uri(); ?>/img/front-page/2.jpg" alt="test2">
								</div>
								<div class="media-body">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
									<p>The app was intuitive and well organized. It made helped my life go smoother.</p>
									<div class="rating">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-o" aria-hidden="true"></i>
									</div>
									<h6>Chester Bowen</h6>
								</div>
							</div>
						</div>
						<div class="wrapper-testimonial">
							<div class="media">
								<div class="media-left">
									<img src="<?php echo get_template_directory_uri(); ?>/img/front-page/1.jpg" alt="test1">
								</div>
								<div class="media-body">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
									<p>Thanks yet again for another successful and very popular mobile app.</p>
									<div class="rating">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
									</div>
									<h6>Leila Taylor</h6>
								</div>
							</div>
						</div>
						<div class="wrapper-testimonial">
							<div class="media">
								<div class="media-left">
									<img src="<?php echo get_template_directory_uri(); ?>/img/front-page/2.jpg" alt="test2">
								</div>
								<div class="media-body">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
									<p>The app was intuitive and well organized. It made helped my life go smoother.</p>
									<div class="rating">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-o" aria-hidden="true"></i>
									</div>
									<h6>Chester Bowen</h6>
								</div>
							</div>
						</div>
						<div class="wrapper-testimonial">
							<div class="media">
								<div class="media-left">
									<img src="<?php echo get_template_directory_uri(); ?>/img/front-page/1.jpg" alt="test1">
								</div>
								<div class="media-body">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
									<p>Thanks yet again for another successful and very popular mobile app.</p>
									<div class="rating">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
									</div>
									<h6>Leila Taylor</h6>
								</div>
							</div>
						</div>
						<div class="wrapper-testimonial">
							<div class="media">
								<div class="media-left">
									<img src="<?php echo get_template_directory_uri(); ?>/img/front-page/2.jpg" alt="test2">
								</div>
								<div class="media-body">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
									<p>The app was intuitive and well organized. It made helped my life go smoother.</p>
									<div class="rating">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-o" aria-hidden="true"></i>
									</div>
									<h6>Chester Bowen</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END TESTIMONIAL -->
		<!-- TEAM 
		<section id="team" class="sec-team bg-gradient-horizontal bg-img">
			<div class="bg-img"></div>
			<h2 class="sec-title">Our Team</h2>
			<div class="hr"></div>
			<p class="subheader">Lorem ipsum dolor sit amet consectetur adipiscing elit donec tempus pellentesque dui <br/> vel tristique purus justo vestibulum eget lectus non gravida ultrices</p>
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-3">
						<div class="wrapper animate">
							<div class="wrapper-img">
								<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/front-page/1.jpg" alt="team">
							</div>
							<h5>Sarah George</h5>
							<h6>CEO</h6>
							<hr>
							<div class="social">
								<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="wrapper animate delay-a">
							<div class="wrapper-img">
								<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/front-page/2.jpg" alt="team">
							</div>
							<h5>Willie Houston</h5>
							<h6>Web Design</h6>
							<hr>
							<div class="social">
								<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="wrapper animate delay-b">
							<div class="wrapper-img">
								<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/front-page/3.jpg" alt="team">
							</div>
							<h5>Warren Summers</h5>
							<h6>Developer</h6>
							<hr>
							<div class="social">
								<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="wrapper animate delay-c">
							<div class="wrapper-img">
								<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/front-page/4.jpg" alt="team">
							</div>
							<h5>Myrtie Malone</h5>
							<h6>Customer</h6>
							<hr>
							<div class="social">
								<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		END TEAM -->
		<!-- PRICING -->
		<section id="pricing" class="sec-pricing bg-white">
			<h2 class="sec-title">Table Pricing</h2>
			<div class="hr"></div>
			<p class="subheader">Lorem ipsum dolor sit amet consectetur adipiscing elit donec tempus pellentesque dui <br/> vel tristique purus justo vestibulum eget lectus non gravida ultrices</p>
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="wrapper animate">
							<h3>Personal</h3>
							<span class="pricing-img lnr lnr-user"></span>
							<hr>
							<p>Free Setup<br>Unlimited Bandwidth<br>50GB Storage<br>10 Email Accounts<br>100GB Disk Space</p>
							<h1>37</h1>
							<hr>
							<a href="#"><span>Order now</span></a>
						</div>
					</div>
					<div class="col-sm-4 highlighted">
						<div class="wrapper animate delay-a">
							<h3>Team</h3>
							<span class="pricing-img lnr lnr-users"></span>
							<hr>
							<p>Free Setup<br>Unlimited Bandwidth<br>100GB Storage<br>15 Email Accounts<br>200GB Disk Space</p>
							<h1>57</h1>
							<hr>
							<a href="#"><span>Order now</span></a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="wrapper animate delay-b">
							<h3>Business</h3>
							<span class="pricing-img lnr lnr-briefcase"></span>
							<hr>
							<p>Free Setup<br>Unlimited Bandwidth<br>200GB Storage<br>30 Email Accounts<br>500GB Disk Space</p>
							<h1>97</h1>
							<hr>
							<a href="#"><span>Order now</span></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END PRICING -->
		<!-- FAQ -->
		<section id="faq" class="sec-faq bg-gradient-vertical">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-md-7">
						<div class="faq-inner">
							<h2 class="sec-title">Frequently asked questions</h2>
							<div class="hr"></div>
							<p class="subheader">Checkout a list of some of our top FAQs! <br/>For a complete list view our FAQ page: <u><a href="http://piproomz.com/faq">www.piproomz.com/faq</a></u></p>
							<!--accordion-->
							<div class="panel-group" id="accordion">
								<div class="panel panel-default animate ">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="btn-accordion">Does Pip Roomz offer educational content?</a>
										</h4>
									</div>
									<div id="collapse1" class="panel-collapse collapse in">
										<div class="panel-body">Pip Roomz is here to help you grow and help you touch the unachievable. All of the Pip Roomz educational content is here for you to connect, to learn and to put in practice with cutting-edge trading tools, videos and live webinars.</div>
									</div>
								</div>
								<div class="panel panel-default animate delay-a">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="btn-accordion collapsed">How much money will I make if I join?</a>
										</h4>
									</div>
									<div id="collapse2" class="panel-collapse collapse">
										<div class="panel-body">Pip Roomz is a platform that encourages traders to learn to start using strategies in order to reach financial independence. Without hard work and great trading habits, it won’t be possible to see any results from that you’re wishing to see nonetheless we provide daily analytics and it is the trader’s responsibility to learn how to use these strategies and skills.</div>
									</div>
								</div>
								<div class="panel panel-default animate delay-b">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="btn-accordion collapsed">Is Pip Roomz a broker?</a>
										</h4>
									</div>
									<div id="collapse3" class="panel-collapse collapse">
										<div class="panel-body">No, Pip Roomz only provides a complete list of trusted brokers and recommends only the best brokers.</div>
									</div>
								</div>
								<div class="panel panel-default animate delay-c">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="btn-accordion collapsed">Can I add traders as friends on Pip Roomz?</a>
										</h4>
									</div>
									<div id="collapse4" class="panel-collapse collapse">
										<div class="panel-body">Pip Roomz is like the Facebook for traders, like, comment add friends in your trading circle and start building relationships with other traders online!</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-5 ">
						<div class="wrapper-img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/front-page/faq/img.png" alt="faq" class="animate delay-c">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END FAQ -->
		<!-- BLOG 
		<section id="blog" class="sec-blog bg-white">
			<h2 class="sec-title">Latest Posts</h2>
			<div class="hr"></div>
			<p class="subheader">Lorem ipsum dolor sit amet consectetur adipiscing elit donec tempus pellentesque dui <br/> vel tristique purus justo vestibulum eget lectus non gravida ultrices</p>
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="thumbnail-blog animate ">
							<div class="thumbnail-img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/front-page/1.jpg" alt="blog" class="img-responsive"/>
							</div>
							<a href="blog-detail.html"><h5>iOS 10: 8 things we want from Apple's new iPhone</h5></a>
							<h6>June 26, 2016</h6>
							<p>Most smartphone cases are used to simply protect devices from knocks and drops – the most you can usually hope for is an extra battery ...</p>
							<a href="blog-detail.html">Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="thumbnail-blog animate delay-a">
							<div class="thumbnail-img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/front-page/2.jpg" alt="blog" class="img-responsive"/>
							</div>
							<a href="blog-detail.html"><h5>Android will use beacons to tell phone users about local apps</h5></a>
							<h6>June 26, 2016</h6>
							<p>Praesent semper accumsan erat ac maximus non rutrum exsa fusce at erat in turpis tempus iaculis curabitur et augue pellentesque ...</p>
							<a href="blog-detail.html">Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="thumbnail-blog animate delay-b">
							<div class="thumbnail-img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/front-page/3.jpg" alt="blog" class="img-responsive"/>
							</div>
							<a href="blog-detail.html"><h5>The period-tracking app helping women and scientists</h5></a>
							<h6>June 26, 2016</h6>
							<p>Nullam molestie sem id ullamcorper congue sem nulla blandit neque sed viverra lorem metus quis justo vestibulum consequat odio ...</p>
							<a href="blog-detail.html">Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
				<a href="blog-list.html"><span>Go to blog</span></a>
			</div>
		</section>
		 END BLOG -->
		<!-- GET APP -->
		<section id="get-app" class="sec-get-app bg-grey bg-img">
			<div class="bg-img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/front-page/bg-1.jpg" alt="appstore" />
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-7">
						<h2 class="sec-title">Get app now</h2>
						<div class="hr"></div>
						<p class="subheader">Lorem ipsum dolor sit amet consectetur adipiscing elit donec tempus pellentesque dui vel tristique purus justo vestibulum eget lectus non gravida ultrices</p>
						<h4>Download from:</h4>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/front-page/app-store-nobg.png" alt="app"></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/front-page/play-store-nobg.png" alt="app"></a>
					</div>
					<div class="col-sm-5"><img class="get-app-mockup animate delay-c" src="<?php echo get_template_directory_uri(); ?>/img/front-page/mockup-tab.png" alt="mockup"></div>
				</div>
			</div>
		</section>
		<!-- END GET APP -->
		<!-- CONTACT 
		<section id="contact" class="sec-contact bg-img">
			<div class="bg-img"></div>
			<h2 class="sec-title">Get in touch</h2>
			<div class="hr"></div>
			<p class="subheader">Lorem ipsum dolor sit amet consectetur adipiscing elit donec tempus pellentesque dui vel tristique purus justo vestibulum eget lectus non gravida ultrices</p>
			<div class="container">
				<div class="row">
					<div class="col-md-8 animate">
						<div class="contact">
							<h3>Contact us</h3>
							<p>Donec interdum dapibus facilisis aliquam congue tempus augue non bibendum ipsum dictum</p>
							<div class="contact-info">
								<h5><i class="icon ion-ios-location"></i> Location</h5>
								<h6>591 Goldner Point, New York</h6>
							</div>
							<div class="contact-info">
								<h5><i class="icon ion-ios-telephone"></i> Phone</h5>
								<h6>(+045) 222-798-3532</h6>
							</div>
							<div class="contact-info">
								<h5><i class="icon ion-email-unread"></i> Email</h5>
								<h6>reilly.jasmin@flatley.biz</h6>
							</div>
							<div class="social">
								<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
							</div>
						</div>
						<div id="googleMap" class="google-maps"></div>
					</div>
					<div class="col-md-4 animate delay-a">
						<form class="contact_form" action="#" method="post" enctype="multipart/form-data">
							<h3>Leave a comment</h3>
							<div class="form-group">
								<input name="uname" type="text" class="form-control uName" placeholder="Your name">
							</div>
							<div class="form-group">
								<input name="uemail" type="email" class="form-control uEmail" placeholder="Your email">
							</div>
							<div class="form-group">
								<textarea name="message" class="form-control msg" placeholder="Message"></textarea>
							</div>
							<button type="submit">Send message <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
							<p id="fftext"></p>
							<span id="ffsuccess"></span>
						</form>
					</div>
				</div>
			</div>
		</section>
		END CONTACT -->
		<!-- FOOTER -->
		<footer>
<!-- 			<div class="bg-img"></div>
			<h2 class="sec-title">Join our newsletter</h2>
			<div class="hr"></div>
			<p class="subheader">Lorem ipsum dolor sit amet consectetur adipiscing elit donec tempus pellentesque dui vel tristique purus justo vestibulum eget lectus non gravida ultrices</p>
			<div class="subscription">
				<form class="form-inline mailchimp" method="post">
					<div class="form-group">
						<input name="email" type="email" class="form-control memail" placeholder="Your email">
					</div>
					<button type="submit">Subscribe <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
					<p class="mchimp-errmessage"></p>
					<p class="mchimp-sucmessage"></p>
				</form>
			</div> -->
			<h5 class="footer small">Copyright &copy; Pip Roomz Inc. All right reserved.</h5>
			<ul class="list-inline">
				<li class="list-inline-item" ><a class="nav-link" href="http://piproomz.com/privacy-policy">Privacy Policy</a></li>
				<li class="list-inline-item" ><a class="nav-link" href="http://piproomz.com/terms-of-use">Terms of Use</a></li>
				<li class="list-inline-item" ><a class="nav-link" href="http://piproomz.com/risk-warning">Risk Warning</a></li>
				<li class="list-inline-item" ><a class="nav-link" href="http://piproomz.com/faq">Frequently Asked Questions</a></li>
			</ul>
		</footer>
		<!-- END FOOTER -->
		<!-- <a href="#" class="scrollup"><i class="fa fa-arrow-up" aria-hidden="true"></i></a> -->
		<!-- Scripts -->
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/front-page/jquery.min.js"></script>
		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBumN1FxU0vF8HVI_qy9yFlwcZ4Wop_RtY"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/front-page/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/front-page/jquery.waypoints.min.js" ></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/front-page/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/front-page/owl.carousel.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/front-page/plugins.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/front-page/gmap.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/front-page/custom-animations.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/front-page/theme.js"></script>
		<?php wp_footer(); ?>
	</body>
	</html>