<?php // Template Name: Front Page ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://piproomz.com/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-152x152.png" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon-16x16.png" sizes="16x16" />
	<meta name="application-name" content="Piproomz"/>
	<meta name="msapplication-TileColor" content="#FFFFFF" />
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/img/mstile-144x144.png" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front-page.min.css">
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
						<a class="navbar-brand" href="<?php bloginfo('url'); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/pip_logo_white.svg" alt="logo" width="160px">
							<img class="logo-blue" src="<?php echo get_template_directory_uri(); ?>/img/pip_logo.svg" width="160px" alt="logo-blue">
						</a>
						<a class="btn-getnow" href="<?php bloginfo('url'); ?>/login">Join or Login</a>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-right smoothscroll">
							<li class="active"><a href="#home">Home</a></li>
							<li><a href="#features">Features</a></li>
							<!-- <li><a href="#screenshots">Screenshots</a></li> -->
							<!-- <li><a href="#testimonial">Testimonial</a></li> -->
							<!-- <li><a href="#team">Team</a></li> -->
							<li><a href="#pricing">Pricing</a></li>
							<!-- <li><a href="#blog">Blog</a></li> -->
							<!-- <li><a href="#contact">Contact</a></li> -->
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
						<a class="btn-white animate delay-b display-none" href="<?php bloginfo('url'); ?>/register">Join For Free</a>
						<!-- <a class="btn-transparent animate delay-c display-none" href="#">Discover more</a> -->
					</div>
					<div class="col-sm-5 col-md-offset-2 col-md-3 col-header-img right-padding">
						<img src="<?php echo get_template_directory_uri(); ?>/img/front-page/header-img-4.png" alt="header-img" class="img-header-lg animate delay-c display-none">
						<img src="<?php echo get_template_directory_uri(); ?>/img/front-page/header-img-3.png" alt="header-img" class="img-header-sm delay-a display-none">
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
								<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/front-page/1.png" alt="step-1" class="animate delay-a"> -->
								<div class="step-desc">
									<span>01</span>
									<h4>Join For Free</h4>
									<hr>
									<p>Really... Joining is 100% Free!<br/> Who doesn't like free?</p>
								</div>
							</div>
							<div class="col-sm-4 step-2">
								<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/front-page/2.png" alt="step-2" class="animate delay-b "> -->
								<div class="step-desc">
									<span>02</span>
									<h4>Go Pro</h4>
									<hr>
									<p>Leverage industry leading tools,<br/> resources and more! </p>
								</div>
							</div>
							<div class="col-sm-4 step-3">
								<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/front-page/3.png" alt="step-3" class="animate delay-c"> -->
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
								<span class="lnr lnr-eye"></span>
								<h5>Birds-eye&trade; Trading Dashboard.</h5>
								<p>Watch all of your favorite <br>currency pairs on one screen.</p>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-3 feat-bottom-left animate delay-a">
								<span class="lnr lnr-user"></span>
								<h5>Social Trading</h5>
								<p>Make friends and <br>follow the activity <br>of your favorite trders.</p>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-3 feat-bottom-right animate">
								<span class="lnr lnr-bubble"></span>
								<h5>Realtime Chat</h5>
								<p>Discuss market events <br>as they're happening <br>right beside the chart.</p>
							</div>
						</div>
						<img class='img-responsive phone-lines' src="<?php echo get_template_directory_uri(); ?>/img/front-page/phone-lines-2.png" alt='featured'>
					</div>
				</div>
			</div>
		</section>
		<!-- END FEATURES -->
		<!-- TESTIMONIAL 
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
		END TESTIMONIAL -->
		<!-- PRICING -->
		<section id="pricing" class="sec-pricing bg-white">
			<h2 class="sec-title">Go Pro Today!</h2>
			<div class="hr"></div>
			<p class="subheader">Get access to the exact same tools, techniques and strategies<br/> that the pro's use to earning millions.</p>
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="wrapper animate">
							<h3>Free</h3>
							<span class="pricing-img lnr lnr-star-empty"></span>
							<hr>
							<p>Basic Dashboard<br>Ad Supported<br>Weekly Live Stream Coaching<br>One-on-one coaching<br>Chat Rooms (Major Pairs Only)</p>
							<!-- <p>Free Setup<br>Unlimited Bandwidth<br>50GB Storage<br>10 Email Accounts<br>100GB Disk Space</p> -->
							<h1>0</h1>
							<hr>
							<a href="<?php bloginfo('url'); ?>/register/"><span>Join Now</span></a>
						</div>
					</div>
					<div class="col-sm-4 highlighted">
						<div class="wrapper animate delay-a">
							<h3>Pro</h3>
							<span class="pricing-img lnr lnr-star"></span>
							<hr>
							<p>Enhanced Dashboard<br>Ad Free<br>Weekly Live Stream Coaching<br>One-on-one Coaching (20% discount)<br>Chat Rooms (Major/Exotic/Crypto Pairs)<br>Full Broker Database<br>Trading Tools/Calculators<br>Realtime Currency Quotes<br>Trade Signals via SMS &amp; Email</p>
							<h1>98</h1>
							<hr>
							<a href="<?php bloginfo('url'); ?>/subscribe/basic-membership/"><span>Order now</span></a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="wrapper animate delay-b">
							<h3>Basic</h3>
							<span class="pricing-img lnr lnr-star-half"></span>
							<hr>
							<p>Enhanced Dashboard<br>Ad Free<br>Weekly Live Stream Coaching<br>One-on-one coaching (15% discount)<br>Chat Rooms (Major/Exotic Pairs Only)<br>Full Broker Database</p>
							<h1>74</h1>
							<hr>
							<a href="<?php bloginfo('url'); ?>/subscribe/basic-membership/"><span>Order now</span></a>
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
							<img src="<?php echo get_template_directory_uri(); ?>/img/front-page/faq-aside.jpg" alt="faq" class="animate delay-c">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END FAQ -->
		<!-- GET APP -->
		<section id="get-app" class="sec-get-app bg-grey bg-img">
			<div class="bg-img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/front-page/bg-1.jpg" alt="appstore" />
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-7">
						<h2 class="sec-title">Join Pip Roomz Today</h2>
						<div class="hr"></div>
						<p class="subheader">Whether you’re a beginner, intermediate or advanced trader, Pip Roomz will always have the best educational content in the industry.<br/>We take great pride in our education and helping traders of all levels reach goals that are unreachable without the right habits and knowledge.</p>
						<a class="btn-transparent animate delay-b display-none" href="<?php bloginfo('url'); ?>/register">Join For Free</a>
					</div>
					<div class="col-sm-5"><img class="get-app-mockup animate delay-c" src="<?php echo get_template_directory_uri(); ?>/img/front-page/mockup-tab-2.png" alt="mockup"></div>
				</div>
			</div>
		</section>
		<!-- END GET APP -->
		<!-- FOOTER -->
		<footer>
			<h5 class="footer small">Copyright &copy; Pip Roomz Inc. All right reserved.</h5>
			<ul class="list-inline">
				<li class="list-inline-item" ><a class="nav-link" href="http://piproomz.com/privacy-policy">Privacy Policy</a></li>
				<li class="list-inline-item" ><a class="nav-link" href="http://piproomz.com/terms-of-use">Terms of Use</a></li>
				<li class="list-inline-item" ><a class="nav-link" href="http://piproomz.com/risk-warning">Risk Warning</a></li>
				<li class="list-inline-item" ><a class="nav-link" href="http://piproomz.com/faq">Frequently Asked Questions</a></li>
			</ul>
		</footer>
		<!-- END FOOTER -->
		<!-- Scripts -->
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/front-page-min.js"></script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108382349-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-108382349-1');
		</script>

		<?php wp_footer(); ?>
	</body>
	</html>