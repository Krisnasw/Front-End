<!DOCTYPE html>
<html>
	<head>
		<!-- Meta Tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta author="Intive Studio">
		<meta og="Intive Studio">
		
		<!-- Title -->
		<title>SEAMEO SEAMOLEC</title>
		
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
				barColor: '#d32f2f',
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

		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.6&appId=451303015068704";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		</script>
		
	</head>
	
	<body class="sticky-header-on tablet-sticky-header">
	
		<!-- Container -->
		<div class="container">

		<?php include('header.php'); ?>

		<section id="content">
			
			<!-- Section -->
			<section class="section full-width-bg">
				
				<div class="row">
				
					<div class="col-lg-9 col-md-9 col-sm-8">
						
						<!-- Main Slider -->
						<div class="flexslider main-flexslider animate-onscroll">
							
							<ul class="slides">
								
								<li id="main_flex_1">
									
									<div class="slide align-left">
										<h3>Celebrating the 50th </br>
											Anniversary of SEAMEO</br>
											50 Years of Education Cooperation </br>
											for Regional Sustainable Development </br>
										</h3>
										<a href="#" class="button big button-arrow">Find out more</a>
									</div>
									
								</li>
								
								<li id="main_flex_2">
								
									<div class="slide align-center">
										<h4 class="great-vibes">it’s time for changes</h4>
										<h2>Building Our Future Together!</h2>
										<a href="#" class="button big button-arrow">Get Involved</a>
									</div>
									
								</li>
								
								<li id="main_flex_3">
								
									<div class="slide align-right">
										<h2>10 YEARS OF EXPERIENCE</h2>
										<p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor,<br> dapibus eget, elementum vel, cursus eleifend, elit. </p>
										<a href="#" class="button big button-arrow">More Info</a>
									</div>
									
								</li>
								
							</ul>
							
						</div>	
						<!-- /Main Slider -->
						
					</div>
					
					<div class="col-lg-3 col-md-3 col-sm-4 sidebar">
						
						<div class="banner-wrapper">
							<a class="banner animate-onscroll" href="#">
								<i class="icons icon-calendar"></i>
								<h4>Find Events</h4>
								<p>Lorem ipsum dolor sit amet</p>
							</a>
						</div>
						
						<div class="banner-wrapper">
							<a class="banner animate-onscroll" href="#">
								<i class="icons icon-check"></i>
								<h4>Register to vote</h4>
								<p>Nemo enim ipsam</p>
							</a>
						</div>
						
						<div class="banner-wrapper">
							<a class="banner animate-onscroll" href="#">
								<i class="icons icon-user"></i>
								<h4>Volunteer</h4>
								<p>Pellentesque sed dolor</p>
							</a>
						</div>
										
						<div class="social-media animate-onscroll">
							<span class="small-caption">Get connected:</span>
							<ul class="social-icons">
								<li class="facebook"><a href="#" class="tooltip-ontop" title="Facebook"><i class="icons icon-facebook"></i></a></li>
								<li class="twitter"><a href="#" class="tooltip-ontop" title="Twitter"><i class="icons icon-twitter"></i></a></li>
								<li class="google"><a href="#" class="tooltip-ontop" title="Google Plus"><i class="icons icon-gplus"></i></a></li>
								<li class="youtube"><a href="#" class="tooltip-ontop" title="Youtube"><i class="icons icon-youtube-1"></i></a></li>
								<li class="flickr"><a href="#" class="tooltip-ontop" title="Flickr"><i class="icons icon-flickr-4"></i></a></li>
								<li class="email"><a href="#" class="tooltip-ontop" title="Email"><i class="icons icon-mail"></i></a></li>
							</ul>
						</div>						
					</div>
				
				</div>
				
			</section>
			<!-- /Section -->
			
			
			
			
			<!-- Section -->
			<section class="section full-width-bg gray-bg">
				
				<div class="row">
				
					<div class="col-lg-9 col-md-9 col-sm-8">
						
						<h3 class="animate-onscroll no-margin-top">Latest news</h3>
						
												<!-- Blog Post -->
						<div class="blog-post big animate-onscroll">
							
							<div class="post-image">
								<img src="img/blog/post1.jpg" alt="">
							</div>
							
							<h4 class="post-title"><a href="blog-single-sidebar.html">Nam elit agna, endrerit sit amet, tincidunt ac, viverra sed</a></h4>
							
							<div class="post-meta">
								<span>by <a href="#">admin</a></span>
								<span>October 01, 2013 11:28AM</span>
							</div>
							
							<p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.</p>
							
							<a href="blog-single-sidebar.html" class="button read-more-button big button-arrow">Read More</a>
							
						</div>
						<!-- /Blog Post -->						
						<!-- Owl Carousel -->
						<div class="owl-carousel-container">
							
							<div class="owl-header">
								
								<h3 class="animate-onscroll">Other Stories</h3>
								
								<div class="carousel-arrows animate-onscroll">
									<span class="left-arrow"><i class="icons icon-left-dir"></i></span>
									<span class="right-arrow"><i class="icons icon-right-dir"></i></span>
								</div>
								
							</div>
							
							<div class="owl-carousel" data-max-items="3">
										
								<!-- Owl Item -->
								<div>
									
									<!-- Blog Post -->
									<div class="blog-post animate-onscroll">
										
										<div class="post-image">
											<img src="img/blog/post2.jpg" alt="">
										</div>
										
										<h4 class="post-title"><a href="blog-single-sidebar.html">Donec porta diam eu massa</a></h4>
										
										<div class="post-meta">
											<span>by <a href="#">admin</a></span>
											<span>October 01, 2013 11:28AM</span>
										</div>
										
										<p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel.</p>
										
										<a href="blog-single-sidebar.html" class="button read-more-button big button-arrow">Read More</a>
										
									</div>
									<!-- /Blog Post -->
									
								</div>
								<!-- /Owl Item -->
								
								<!-- Owl Item -->
								<div>
									
									<!-- Blog Post -->
									<div class="blog-post animate-onscroll">
										
										<div class="post-image">
											<img src="img/blog/post3.jpg" alt="">
										</div>
										
										<h4 class="post-title"><a href="blog-single-sidebar.html">Vestibulum iaculis </a></h4>
										
										<div class="post-meta">
											<span>by <a href="#">admin</a></span>
											<span>October 01, 2013 11:28AM</span>
										</div>
										
										<p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel.</p>
										
										<a href="blog-single-sidebar.html" class="button read-more-button big button-arrow">Read More</a>
										
									</div>
									<!-- /Blog Post -->
									
								</div>
								<!-- /Owl Item -->
								
								<!-- Owl Item -->
								<div>
									
									<!-- Blog Post -->
									<div class="blog-post animate-onscroll">
										
										<div class="post-image">
											<img src="img/blog/post4.jpg" alt="">
										</div>
										
										<h4 class="post-title"><a href="blog-single-sidebar.html">Praesent justo dolor</a></h4>
										
										<div class="post-meta">
											<span>by <a href="#">admin</a></span>
											<span>October 01, 2013 11:28AM</span>
										</div>
										
										<p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel.</p>
										
										<a href="blog-single-sidebar.html" class="button read-more-button big button-arrow">Read More</a>
										
									</div>
									<!-- /Blog Post -->
									
								</div>
								<!-- /Owl Item -->
								
								<!-- Owl Item -->
								<div>
									
									<!-- Blog Post -->
									<div class="blog-post animate-onscroll">
										
										<div class="post-image">
											<img src="img/blog/post2.jpg" alt="">
										</div>
										
										<h4 class="post-title"><a href="blog-single-sidebar.html">Donec porta diam eu massa</a></h4>
										
										<div class="post-meta">
											<span>by <a href="#">admin</a></span>
											<span>October 01, 2013 11:28AM</span>
										</div>
										
										<p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel.</p>
										
										<a href="blog-single-sidebar.html" class="button read-more-button big button-arrow">Read More</a>
										
									</div>
									<!-- /Blog Post -->
									
								</div>
								<!-- /Owl Item -->
								
								<!-- Owl Item -->
								<div>
									
									<!-- Blog Post -->
									<div class="blog-post animate-onscroll">
										
										<div class="post-image">
											<img src="img/blog/post3.jpg" alt="">
										</div>
										
										<h4 class="post-title"><a href="blog-single-sidebar.html">Vestibulum iaculis </a></h4>
										
										<div class="post-meta">
											<span>by <a href="#">admin</a></span>
											<span>October 01, 2013 11:28AM</span>
										</div>
										
										<p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel.</p>
										
										<a href="blog-single-sidebar.html" class="button read-more-button big button-arrow">Read More</a>
										
									</div>
									<!-- /Blog Post -->
									
								</div>
								<!-- /Owl Item -->
								
								<!-- Owl Item -->
								<div>
									
									<!-- Blog Post -->
									<div class="blog-post animate-onscroll">
										
										<div class="post-image">
											<img src="img/blog/post4.jpg" alt="">
										</div>
										
										<h4 class="post-title"><a href="blog-single-sidebar.html">Praesent justo dolor</a></h4>
										
										<div class="post-meta">
											<span>by <a href="#">admin</a></span>
											<span>October 01, 2013 11:28AM</span>
										</div>
										
										<p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel.</p>
										
										<a href="blog-single-sidebar.html" class="button read-more-button big button-arrow">Read More</a>
										
									</div>
									<!-- /Blog Post -->
									
								</div>
								<!-- /Owl Item -->
							
							</div>
						
						</div>
						<!-- /Owl Carousel -->					
						
					</div>

					<?php include('left.blade.php'); ?>
				
				</div>
				
			</section>
			<!-- /Section -->
		
		</section>

			<?php include('footer.php'); ?>
			
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