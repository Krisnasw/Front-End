<!DOCTYPE html>
<html>
	<head>
		<!-- Meta Tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Title -->
		<title>Team | SEAMEO SEAMOLEC</title>
		
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		
		<!-- Stylesheets -->
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="css/fontello.css" rel="stylesheet" type="text/css">
		<link href="css/flexslider.css" rel="stylesheet" type="text/css">
		<link href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="css/owl.carousel.css" rel="stylesheet" type="text/css">
		<link href="css/responsive-calendar.css" rel="stylesheet" type="text/css">
		<link href="css/chosen.css" rel="stylesheet" type="text/css">
		<link href="jackbox/css/jackbox.min.css" rel="stylesheet" type="text/css" />
		<link href="css/cloud-zoom.css" rel="stylesheet" type="text/css" />
		
		<link href="css/style.css" rel="stylesheet" type="text/css">

		
		<!--[if IE 9]>
			<link rel="stylesheet" href="css/ie9.css">
		<![endif]-->
		
		<!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<link href="css/jackbox-ie8.css" rel="stylesheet" type="text/css" />
			<link rel="stylesheet" href="css/ie.css">
        <![endif]-->
		
		<!--[if gt IE 8]>
			<link href="css/jackbox-ie9.css" rel="stylesheet" type="text/css" />
		<![endif]-->
		
		<!--[if IE 7]>
			<link rel="stylesheet" href="css/fontello-ie7.css">
		<![endif]-->
		
		<style type="text/css">
			.no-fouc {display:none;}
	  	</style>
		
		<!-- jQuery -->
		<script src="js/jquery-1.11.0.min.js"></script>
		<script src="js/jquery-ui-1.10.4.min.js"></script>
		
		<!-- Preloader -->
		<script src="js/jquery.queryloader2.min.js"></script>
		
		<script type="text/javascript">
		$('html').addClass('no-fouc');
		
		$(document).ready(function(){
			
			$('html').show();
			
			var window_w = $(window).width();
			var window_h = $(window).height();
			var window_s = $(window).scrollTop();
			
			$("body").queryLoader2({
				backgroundColor: '#f2f4f9',
				barColor: '#63b2f5',
				barHeight: 4,
				percentage:false,
				deepSearch:true,
				minimumTime:1000,
				onComplete: function(){
					
					$('.animate-onscroll').filter(function(index){
					
						return this.offsetTop < (window_s + window_h);
						
					}).each(function(index, value){
						
						var el = $(this);
						var el_y = $(this).offset().top;
						
						if((window_s) > el_y){
							$(el).addClass('animated fadeInDown').removeClass('animate-onscroll');
							setTimeout(function(){
								$(el).css('opacity','1').removeClass('animated fadeInDown');
							},2000);
						}
						
					});
					
				}
			});
			
		});
		</script>
		
	</head>
	
	<body class="sticky-header-on tablet-sticky-header">
	
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>		
		<!-- Container -->
		<div class="container">
			
			<?php include('header.php'); ?>
			
		<section id="content">	
			
			<!-- Page Heading -->
			<section class="section page-heading animate-onscroll">
				
				<h1>Team</h1>
				<p class="breadcrumb"><a href="main-v1.html">Home</a> / Team</p>
				
			</section>
			<!-- Page Heading -->
			
			<!-- Section -->
			<section class="section full-width-bg gray-bg">
				
				<div class="row">
				
					<div class="col-lg-12 col-md-12 col-sm-12">
						
						<h3 class="animate-onscroll no-margin-top">Meet our team</h3>
						
						<div class="row">
							
							<div class="col-lg-3 col-md-3 col-sm-6">
								
								<!-- Team Member -->
								<div class="team-member animate-onscroll ">
									
									<img class="team-member-image" src="img/team/4.jpg" alt="">
									
									<div class="team-member-info">
										
										<h2>Eva Savits</h2>
										<span class="job">Senate Majority Leader</span>
										
										<div class="team-member-more">
											<p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus.</p>
										</div>
										
									</div>
									
								</div>
								<!-- /Team Member -->							
							</div>
							
							<div class="col-lg-3 col-md-3 col-sm-6">
								
																<!-- Team Member -->
								<div class="team-member animate-onscroll ">
									
									<img class="team-member-image" src="img/team/5.jpg" alt="">
									
									<div class="team-member-info">
										
										<h2>John McCoist</h2>
										<span class="job">Democratic National Committee Chair</span>
										
										<div class="team-member-more">
											<p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus.</p>
										</div>
										
									</div>
									
								</div>
								<!-- /Team Member -->							
							</div>
							
							<div class="col-lg-3 col-md-3 col-sm-6">
								
								<!-- Team Member -->
								<div class="team-member animate-onscroll ">
									
									<img class="team-member-image" src="img/team/6.jpg" alt="">
									
									<div class="team-member-info">
										
										<h2>Caroline Beek</h2>
										<span class="job">Senate Majority Leader</span>
										
										<div class="team-member-more">
											<p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus.</p>
										</div>
										
									</div>
									
								</div>
								<!-- /Team Member -->							
							</div>
							
							<div class="col-lg-3 col-md-3 col-sm-6">
								
								<!-- Team Member -->
								<div class="team-member animate-onscroll ">
									
									<img class="team-member-image" src="img/team/7.jpg" alt="">
									
									<div class="team-member-info">
										
										<h2>Sam Kromstain</h2>
										<span class="job">House Democratic Leader</span>
										
										<div class="team-member-more">
											<p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus.</p>
										</div>
										
									</div>
									
								</div>
								<!-- /Team Member -->							
							</div>
							
						</div>
						
					</div>

				</div>
				
			</section>
			<!-- /Section -->
		
		</section>
			
			<!-- Footer -->
			<?php include('footer.php'); ?>
			<!-- /Footer -->
			
			<!-- Back To Top -->
			<a href="#" id="button-to-top"><i class="icons icon-up-dir"></i></a>
		
		</div>
		<!-- /Container -->	
	
		<!-- JavaScript -->
		
		<!-- Bootstrap -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		
		<!-- Modernizr -->
		<script type="text/javascript" src="js/modernizr.js"></script>
		
		<!-- Sliders/Carousels -->
		<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		
		<!-- Revolution Slider  -->
		<script type="text/javascript" src="js/revolution-slider/js/jquery.themepunch.plugins.min.js"></script>
		<script type="text/javascript" src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
		
		<!-- Calendar -->
		<script type="text/javascript" src="js/responsive-calendar.min.js"></script>
		
		<!-- Raty -->
		<script type="text/javascript" src="js/jquery.raty.min.js"></script>
		
		<!-- Chosen -->
		<script type="text/javascript" src="js/chosen.jquery.min.js"></script>
		
		<!-- jFlickrFeed -->
		<script type="text/javascript" src="js/jflickrfeed.min.js"></script>
		
		<!-- InstaFeed -->
		<script type="text/javascript" src="js/instafeed.min.js"></script>
		
		<!-- Twitter -->
		<script type="text/javascript" src="php/twitter/jquery.tweet.js"></script>
		
		<!-- MixItUp -->
		<script type="text/javascript" src="js/jquery.mixitup.js"></script>
		
		<!-- JackBox -->
		<script type="text/javascript" src="jackbox/js/jackbox-packed.min.js"></script>
		
		<!-- CloudZoom -->
		<script type="text/javascript" src="js/zoomsl-3.0.min.js"></script>
		
		<!-- Main Script -->
		<script type="text/javascript" src="js/script.js"></script>
		
		
		<!--[if lt IE 9]>
			<script type="text/javascript" src="js/jquery.placeholder.js"></script>
			<script type="text/javascript" src="js/script_ie.js"></script>
		<![endif]-->
		
		
	</body>

</html>