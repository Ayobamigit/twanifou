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
		
		<!-- THEME CSS -->
		<link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout.css" rel="stylesheet" type="text/css" />

		<!---favicon-->
		 <link rel="shortcut icon" type="image/png" href="img/logo.png" />

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

		<!-- SLIDE TOP -->
		<div id="slidetop">

			<div class="container">
				
				<div class="row">

					<div class="col-md-4">
						<h6><i class="icon-heart"></i> WHO WE ARE?</h6>
						<p>Twani Foundation is a peace advocacy organization driven with the commitment to promote peace initiatives within her immediate environment. </p>
					</div>

					<div class="col-md-4">
						<h6><i class="icon-attachment"></i> OUR VISION</h6>
							<p>Twani Foundation envisions a diverse and inclusive society across Nigeria that respects human rights and dignity and in which conflicts are resolved through peaceful means.</p>
					</div>

					<div class="col-md-4">
						<h6><i class="icon-envelope"></i> CONTACT INFO</h6>
						<ul class="list-unstyled">
							<li><b>Address:</b> 3 Bima Close, garki 2, Abuja
							<li><b>Phone:</b> +234 (0) 803-605-3878</li>
							<li><b>Email:</b> <a href="mailto:ngeltuvo@yahoo.com">angeltuvo@yahoo.com</a></li>
						</ul>
					</div>

				</div>

			</div>

			<a class="slidetop-toggle" href="#"><!-- toggle button --></a>

		</div>
		<!-- /SLIDE TOP -->


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
			<div id="header" class="sticky clearfix">

				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- BUTTONS -->
						
						<!-- /BUTTONS -->

						<!-- Logo -->
						<a class="logo pull-left" href="index.php">
							<img src="img/logo.png" alt="" />
						</a>

						<!-- 
							Top Nav 
							
							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse pull-right nav-main-collapse collapse">
							<nav class="nav-main">

								<!--
									NOTE
									
									For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
									Direct Link Example: 

									<li>
										<a href="#">HOME</a>
									</li>-->
								<ul id="topMain" class="nav nav-pills nav-main">
									<li class="<?php if($file == 'index.php'){echo 'active';} ?>">
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
										
										
									</li>									<li class="<?php if($file == 'gallery.php'){echo 'active';} ?>">
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
