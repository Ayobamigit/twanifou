<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>Twani Foundation - We are driven with commitment to promote peace!</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

		<!-- SWIPER SLIDER -->
		<link href="assets/plugins/slider.swiper/dist/css/swiper.min.css" rel="stylesheet" type="text/css" />

		<!---favicon-->
		 <link rel="shortcut icon" type="image/png" href="img/logo.png" />

		<!-- THEME CSS -->
		<link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout.css" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="assets/css/header-1.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />
	</head>

	<!--
		AVAILABLE BODY CLASSES:
		
		smoothscroll 			= create a browser smooth scroll
		enable-animation		= enable WOW animations

		bg-grey					= grey background
		grain-grey				= grey grain background
		grain-blue				= blue grain background
		grain-green				= green grain background
		grain-blue				= blue grain background
		grain-orange			= orange grain background
		grain-yellow			= yellow grain background
		
		boxed 					= boxed layout
		pattern1 ... patern11	= pattern background
		menu-vertical-hide		= hidden, open on click
		
		BACKGROUND IMAGE [together with .boxed class]
		data-background="assets/images/boxed_background/1.jpg"
	-->
	<body class="smoothscroll enable-animation">

		<!-- wrapper -->
		<div id="wrapper">

			<!-- 
				AVAILABLE HEADER CLASSES

				Default nav height: 96px
				.header-md 		= 70px nav height
				.header-sm 		= 60px nav height

				.noborder 		= remove bottom border (only with transparent use)
				.transparent	= transparent header
				.translucent	= translucent header
				.sticky			= sticky header
				.static			= static header
				.dark			= dark header
				.bottom			= header on bottom
				
				shadow-before-1 = shadow 1 header top
				shadow-after-1 	= shadow 1 header bottom
				shadow-before-2 = shadow 2 header top
				shadow-after-2 	= shadow 2 header bottom
				shadow-before-3 = shadow 3 header top
				shadow-after-3 	= shadow 3 header bottom

				.clearfix		= required for mobile menu, do not remove!

				Example Usage:  class="clearfix sticky header-sm transparent noborder"
			-->
			<div id="header" class="sticky bottom header-sm dark clearfix">

				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- Logo -->
						<a class="logo pull-left" href="index.php">
							<img src="img/logo.png" alt="" /> <!-- light logo -->
							<img src="img/logo.png" alt="" /> <!-- dark logo -->
						</a>

						<!-- 
							Top Nav 
							
							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
							<nav class="nav-main">

								<!-- 
									.nav-onepage
									Required for onepage navigation links
									
									Add .external for an external link!
								-->
								<ul id="topMain" class="nav nav-pills nav-main nav-onepage">
									<li class="<?php if($file == 'index.php'){echo 'active';} ?>"><!-- HOME -->
										<a href="index.php">
											HOME
										</a>
										
									</li>
									<li class="<?php if($file == 'about.php'){echo 'active';} ?>"><!-- PAGES -->
										<a href="about.php">
											ABOUT US
										</a>
										
									</li>
									<li class="<?php if($file == 'event.php'){echo 'active';} ?>"><!-- FEATURES -->
										<a class="dropdown-toggle" href="#">
												EVENTS
										</a>
												<ul class="dropdown-menu">
													<li class="dropdown">
														<a href="event.php">
															Our Events
														</a>
													</li>
													<li class="dropdown">
														<a href="upcomingevent.php">
															Upcoming Events
														</a>
													</li>
											
												</ul>	
										
										
									</li>
									<li class="<?php if($file == 'gallery.php'){echo 'active';} ?>">
										<a href="gallery.php">
											GALLERY
										</a>
										
									</li>
									<li class="<?php if($file == 'contact.php'){echo 'active';} ?>" ><!-- BLOG -->
										<a href="contact.php">
											CONTACT US
										</a>
										
									</li>
								</ul>

							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->

			</div>


			<!-- SLIDER -->
			<section id="slider" class="fullheight">

				<!--
					SWIPPER SLIDER PARAMS
					
					data-effect="slide|fade|coverflow"
					data-autoplay="2500|false"
				-->
				<div class="swiper-container" data-effect="slide" data-autoplay="false">
					<div class="swiper-wrapper">

						<!-- SLIDE 1 -->
						<div class="swiper-slide" style="background-image: url('img/peace.jpg');">
							<div class="overlay dark-9"><!-- dark overlay [1 to 9 opacity] --></div>
							
							<div class="display-table">
								<div class="display-table-cell vertical-align-middle">
									<div class="container">

										<div class="row">
											<div class="text-center col-md-8 col-xs-12 col-md-offset-2">

												<h1 class="bold font-raleway wow fadeInUp" data-wow-delay="0.4s">YOUTH PEACE SUMMIT 2019</h1>
												<p class="lead font-lato weight-300 hidden-xs wow fadeInUp" data-wow-delay="0.6s"> A peace building event bringing the Taraba and Benue youth together to come to settle of a peace movement. Using their talent positively to promote and showcase their cultures</p>
												<a class="btn btn-3d btn-lg btn-teal wow fadeIn" data-wow-delay="1.5s" href="contact.php">CONTACT US</a>

											</div>
										</div>
							
									</div>
								</div>
							</div>
							
						</div>
						<!-- /SLIDE 1 -->


						
				</div>

			</section>
			<!-- /SLIDER -->






			<!-- ABOUT -->
			<section id="about">


				<div class="container">
					<header class="text-center margin-bottom-60">
						<h1 class="weight-300">We Stand For Peace</h1>
						<h2 class="weight-300 letter-spacing-1 size-13"><span>A POWERFUL MIXTURE OF PEOPLE</span></h2>
					</header>

					<div class="row">
						<div class="col-md-7 col-sm-5">
							<div class="embed-responsive embed-responsive-16by9 block margin-bottom-60">
								<video controls="" preload="auto" loop autoplay muted>
			                        
			                        <source id="video-volume" src="videos/peace.mp4" type="video/mp4" />
                    			</video>
							</div>
						</div>

						<div class="col-md-5 col-sm-5">
							<header class="margin-bottom-30">
								<h2>YOUTH PEACE SUMMIT</h2>
								<p class="lead font-lato">We are driven with commitment to promote peace!</p>
							</header>

							<p>Twani Foundation is a peace advocacy organization driven with the commitment to promote peace initiatives within her immediate environment. The organization is given to empowerment programs for women and youths and a state commitment to harmonizing resources to advocate for harmonious living among different ethnic groups.  </p>
							<p>The Youth Pease Summit is a peace building event bringing the Taraba and Benue youth together to come to settle of a peace movement. Using their talent positively to promote and showcase their cultures</p>

							
						</div>
						
					</div>
					
				
								

				</div>
			</section>	

			<!-- /ABOUT -->
<!-- CALLOUT -->
			<div class="alert alert-transparent bordered-bottom nomargin">
				<div class="container">

					<div class="row">

						<div class="col-md-9 col-sm-12"><!-- left text -->
							<h3>Call now at <span><strong> 234 (0) 8036053878</strong></span></h3>
							<p class="font-lato weight-300 size-20 nomargin-bottom">
								We are driven with commitment to promote peace!
							</p>
						</div><!-- /left text -->

						
						<div class="col-md-3 col-sm-12 text-right"><!-- right btn -->
							<a href="contact.php" rel="nofollow" target="_blank" class="btn btn-primary btn-lg">CONTACT US NOW</a>
						</div><!-- /right btn -->

					</div>

				</div>
			</div>
			<!-- /CALLOUT -->
			
<?php

	require_once('includes/footer.php')

  ?>