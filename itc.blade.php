<!DOCTYPE html>
<html>

	<head>
		
		<!-- Meta Tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Title -->
		<title>IT Content | SEAMEO SEAMOLEC</title>
		
		<?php include('style.blade.php'); ?>
		
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
			
			
			<!-- Header -->
			<?php include('header.php'); ?>
			<!-- /Header -->
			
			
		<section id="content">	
			
			<!-- Page Heading -->
			<section class="section page-heading animate-onscroll">
				
				<h1>IT Content</h1>
				<p class="breadcrumb"><a href="main-v1.html">Home</a> / IT Content</p>
				
			</section>
			<!-- Page Heading -->
			

			
			<!-- Section -->
			<section class="section full-width-bg gray-bg">
				
				<div class="row">
				
					<div class="col-lg-12 col-md-12 col-sm-12">
						
						<!-- Media Filters -->
						<div class="media-filters animate-onscroll">
							
							<div class="filter-filtering">
							
								<label>Show:</label>
								<ul class="filter-dropdown">
									<li><span>All</span>
										<ul>
											<li class="filter" data-filter="all">All</li>
											<li class="filter" data-filter=".category-campaign">Campaign</li>
											<li class="filter" data-filter=".category-meetings">Meetings</li>
											<li class="filter" data-filter=".category-videos">Videos</li>
											<li class="filter" data-filter=".category-photos">Photos</li>
										</ul>
									</li>
								</ul>
							
							</div>
							
							<label>Sort by:</label>
							<div class="filter-sorting">
								
								<div class="order-group active-sort ascending-sort">
									<button class="small sort sorting-asc" data-sort="nameorder:asc">Name</button>
									<button class="small sort sorting-desc" data-sort="nameorder:desc">Name</button>
								</div>
								
								<div class="order-group">
									<button class="small sort sorting-asc" data-sort="dateorder:asc">Date</button>
									<button class="small sort sorting-desc" data-sort="dateorder:desc">Date</button>
								</div>
								
							</div>
							
						</div>
						<!-- /Media Filters -->
						
						
						
						<div class="media-items row">
							
							<div class="col-lg-3 col-md-4 col-sm-6 mix category-photos" data-nameorder="1" data-dateorder="3">
							
							<!-- Media Item -->
							<div class="media-item animate-onscroll ">
								
								<div class="media-image">
								
									<img src="img/media/media1.jpg" alt="">
									
									<div class="media-hover">
										<div class="media-icons">
											<a href="img/media/media1.jpg" data-group="media-jackbox" data-thumbnail="img/media/media1.jpg" class="jackbox media-icon"><i class="icons icon-zoom-in"></i></a>
											<a href="portfolio-single-sidebar.html" class="media-icon"><i class="icons icon-link"></i></a>
										</div>
									</div>
								
								</div>
								
																
								<div class="media-info">
								
									<div class="media-header">
										
										<div class="media-format">
											<div>
											<i class="icons icon-picture"></i>
											</div>
										</div>
										
										<div class="media-caption">
											<h2><a href="portfolio-single-sidebar.html">In pede mi, aliquet sit amet, euismod</a></h2>
											<span class="tags"><a href="#">Politics</a>, <a href="#">Meetings</a>, <a href="#">Photos</a></span>
										</div>
										
									</div>
									
									<div class="media-description">
										<p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget...</p>
									</div>
									
									<div class="media-button">
										<a href="portfolio-single-sidebar.html" class="button big button-arrow">More info</a>
									</div>
								
								</div>
								
																
							</div>
							<!-- /Media Item -->							
							</div>
							
							<div class="col-lg-3 col-md-4 col-sm-6 mix category-videos category-meetings" data-nameorder="2" data-dateorder="1">
							
							<!-- Media Item -->
							<div class="media-item animate-onscroll ">
								
								<div class="media-image">
								
									<img src="img/media/media2.jpg" alt="">
									
									<div class="media-hover">
										<div class="media-icons">
											<a href="https://www.youtube.com/watch?v=1WbQe-wVK9E" data-group="media-jackbox" data-thumbnail="img/media/media2.jpg" class="jackbox media-icon"><i class="icons icon-play"></i></a>
											<a href="portfolio-single-sidebar.html" class="media-icon"><i class="icons icon-link"></i></a>
										</div>
									</div>
								
								</div>
								
																
								<div class="media-info">
								
									<div class="media-header">
										
										<div class="media-format">
											<div>
											<i class="icons icon-video"></i>
											</div>
										</div>
										
										<div class="media-caption">
											<h2><a href="portfolio-single-sidebar.html">Praesent justo dolor, lobortis quis</a></h2>
											<span class="tags"><a href="#">Politics</a>, <a href="#">Meetings</a>, <a href="#">Videos</a></span>
										</div>
										
									</div>
									
									<div class="media-description">
										<p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. </p>
									</div>
									
									<div class="media-button">
										<a href="portfolio-single-sidebar.html" class="button big button-arrow">More info</a>
										<a href="#" target="_blank" class="button big button-arrow">View Project</a>									</div>
								
								</div>
								
																
							</div>
							<!-- /Media Item -->							
							</div>
							
							<div class="col-lg-3 col-md-4 col-sm-6 mix category-campaign category-videos category-meetings" data-nameorder="3" data-dateorder="2">
							
																						<!-- Media Item -->
							<div class="media-item animate-onscroll ">
								
								<div class="media-image">
								
									<img src="img/media/media3.jpg" alt="">
									
									<div class="media-hover">
										<div class="media-icons">
											<a href="https://www.youtube.com/watch?v=1WbQe-wVK9E" data-group="media-jackbox" data-thumbnail="img/media/media3.jpg" class="jackbox media-icon"><i class="icons icon-play"></i></a>
											<a href="portfolio-single-sidebar.html" class="media-icon"><i class="icons icon-link"></i></a>
										</div>
									</div>
								
								</div>
								
																
								<div class="media-info">
								
									<div class="media-header">
										
										<div class="media-format">
											<div>
											<i class="icons icon-video"></i>
											</div>
										</div>
										
										<div class="media-caption">
											<h2><a href="portfolio-single-sidebar.html">Vestibulum sed ante</a></h2>
											<span class="tags"><a href="#">Politics</a>, <a href="#">Meetings</a>, <a href="#">Audio</a></span>
										</div>
										
									</div>
									
									<div class="media-description">
										<p>Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa. Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. </p>
									</div>
									
									<div class="media-button">
										<a href="portfolio-single-sidebar.html" class="button big button-arrow">More info</a>
																			</div>
								
								</div>
								
																
							</div>
							<!-- /Media Item -->							
							</div>
							
							<div class="col-lg-3 col-md-4 col-sm-6 mix category-campaign category-photos" data-nameorder="4" data-dateorder="5">
							
																						<!-- Media Item -->
							<div class="media-item animate-onscroll ">
								
								<div class="media-image">
								
									<img src="img/media/media4.jpg" alt="">
									
									<div class="media-hover">
										<div class="media-icons">
											<a href="img/media/media4.jpg" data-group="media-jackbox" data-thumbnail="img/media/media4.jpg" class="jackbox media-icon"><i class="icons icon-zoom-in"></i></a>
											<a href="portfolio-single-sidebar.html" class="media-icon"><i class="icons icon-link"></i></a>
										</div>
									</div>
								
								</div>
								
																
								<div class="media-info">
								
									<div class="media-header">
										
										<div class="media-format">
											<div>
											<i class="icons icon-picture"></i>
											</div>
										</div>
										
										<div class="media-caption">
											<h2><a href="portfolio-single-sidebar.html">Donec sagittis euismod purus</a></h2>
											<span class="tags"><a href="#">Politics</a>, <a href="#">Meetings</a></span>
										</div>
										
									</div>
									
									<div class="media-description">
										<p>Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum auctor pulvinar. Vestibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. </p>
									</div>
									
									<div class="media-button">
										<a href="portfolio-single-sidebar.html" class="button big button-arrow">More info</a>
										<a href="#" target="_blank" class="button big button-arrow">View Project</a>									</div>
								
								</div>
								
																
							</div>
							<!-- /Media Item -->							
							</div>
							
							<div class="col-lg-3 col-md-4 col-sm-6 mix category-videos category-meetings" data-nameorder="5" data-dateorder="4">
							
																						<!-- Media Item -->
							<div class="media-item animate-onscroll ">
								
								<div class="media-image">
								
									<img src="img/media/media5.jpg" alt="">
									
									<div class="media-hover">
										<div class="media-icons">
											<a href="https://www.youtube.com/watch?v=1WbQe-wVK9E" data-group="media-jackbox" data-thumbnail="img/media/media5.jpg" class="jackbox media-icon"><i class="icons icon-play"></i></a>
											<a href="portfolio-single-sidebar.html" class="media-icon"><i class="icons icon-link"></i></a>
										</div>
									</div>
								
								</div>
								
																
								<div class="media-info">
								
									<div class="media-header">
										
										<div class="media-format">
											<div>
											<i class="icons icon-video"></i>
											</div>
										</div>
										
										<div class="media-caption">
											<h2><a href="portfolio-single-sidebar.html">Sed ut perspiciatis unde omnis iste natus error sit </a></h2>
											<span class="tags"><a href="#">Politics</a>, <a href="#">Meetings</a>, <a href="#">Videos</a></span>
										</div>
										
									</div>
									
									<div class="media-description">
										<p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
									</div>
									
									<div class="media-button">
										<a href="portfolio-single-sidebar.html" class="button big button-arrow">More info</a>
																			</div>
								
								</div>
								
																
							</div>
							<!-- /Media Item -->							
							</div>
							
							
							
							<div class="col-lg-3 col-md-4 col-sm-6 mix category-campaign category-meetings" data-nameorder="6" data-dateorder="6">
							
																						<!-- Media Item -->
							<div class="media-item animate-onscroll ">
								
								<div class="media-image">
								
									<img src="img/media/media6.jpg" alt="">
									
									<div class="media-hover">
										<div class="media-icons">
											<a href="img/media/media6.jpg" data-group="media-jackbox" data-thumbnail="img/media/media6.jpg" class="jackbox media-icon"><i class="icons icon-zoom-in"></i></a>
											<a href="portfolio-single-sidebar.html" class="media-icon"><i class="icons icon-link"></i></a>
										</div>
									</div>
								
								</div>
								
																
								<div class="media-info">
								
									<div class="media-header">
										
										<div class="media-format">
											<div>
											<i class="icons icon-picture"></i>
											</div>
										</div>
										
										<div class="media-caption">
											<h2><a href="portfolio-single-sidebar.html">Mauris fermentum dictum magna</a></h2>
											<span class="tags"><a href="#">Politics</a>, <a href="#">Meetings</a>, <a href="#">Videos</a></span>
										</div>
										
									</div>
									
									<div class="media-description">
										<p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.</p>
									</div>
									
									<div class="media-button">
										<a href="portfolio-single-sidebar.html" class="button big button-arrow">More info</a>
																			</div>
								
								</div>
								
																
							</div>
							<!-- /Media Item -->							
							</div>
							
							<div class="col-lg-3 col-md-4 col-sm-6 mix category-photos" data-nameorder="1" data-dateorder="3">
							
																						<!-- Media Item -->
							<div class="media-item animate-onscroll ">
								
								<div class="media-image">
								
									<img src="img/media/media1.jpg" alt="">
									
									<div class="media-hover">
										<div class="media-icons">
											<a href="img/media/media7.jpg" data-group="media-jackbox" data-thumbnail="img/media/media1.jpg" class="jackbox media-icon"><i class="icons icon-zoom-in"></i></a>
											<a href="portfolio-single-sidebar.html" class="media-icon"><i class="icons icon-link"></i></a>
										</div>
									</div>
								
								</div>
								
																
								<div class="media-info">
								
									<div class="media-header">
										
										<div class="media-format">
											<div>
											<i class="icons icon-picture"></i>
											</div>
										</div>
										
										<div class="media-caption">
											<h2><a href="portfolio-single-sidebar.html">In pede mi, aliquet sit amet, euismod</a></h2>
											<span class="tags"><a href="#">Politics</a>, <a href="#">Meetings</a>, <a href="#">Photos</a></span>
										</div>
										
									</div>
									
									<div class="media-description">
										<p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget...</p>
									</div>
									
									<div class="media-button">
										<a href="portfolio-single-sidebar.html" class="button big button-arrow">More info</a>
										<a href="#" target="_blank" class="button big button-arrow">View Project</a>									</div>
								
								</div>
								
																
							</div>
							<!-- /Media Item -->							
							</div>
							
							<div class="col-lg-3 col-md-4 col-sm-6 mix category-videos category-meetings" data-nameorder="2" data-dateorder="1">
							
							<!-- Media Item -->
							<div class="media-item animate-onscroll ">
								
								<div class="media-image">
								
									<img src="img/media/media8.jpg" alt="">
									
									<div class="media-hover">
										<div class="media-icons">
											<a href="https://www.youtube.com/watch?v=1WbQe-wVK9E" data-group="media-jackbox" data-thumbnail="img/media/media8.jpg" class="jackbox media-icon"><i class="icons icon-play"></i></a>
											<a href="portfolio-single-sidebar.html" class="media-icon"><i class="icons icon-link"></i></a>
										</div>
									</div>
								
								</div>
								
																
								<div class="media-info">
								
									<div class="media-header">
										
										<div class="media-format">
											<div>
											<i class="icons icon-video"></i>
											</div>
										</div>
										
										<div class="media-caption">
											<h2><a href="portfolio-single-sidebar.html">Praesent justo dolor, lobortis quis</a></h2>
											<span class="tags"><a href="#">Politics</a>, <a href="#">Meetings</a>, <a href="#">Videos</a></span>
										</div>
										
									</div>
									
									<div class="media-description">
										<p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. </p>
									</div>
									
									<div class="media-button">
										<a href="portfolio-single-sidebar.html" class="button big button-arrow">More info</a>
										<a href="#" target="_blank" class="button big button-arrow">View Project</a>
									</div>
								
								</div>
																
							</div>
							<!-- /Media Item -->							
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
		
	</body>

</html>