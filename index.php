<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package D&M
 */

/**
 * Template Name: Homepage
 */
get_header(); 
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="container-fluid">
			
			<div class="row icons-container">

				<div class="col-md-offset-1 col-md-2 col-sm-offset-1 col-sm-2 col-xs-6 text-center icon-container">
					<img class="icons" src=<?php echo do_shortcode('[themeuri]')."/images/extra_mile.png";?>>
					<h5 class="icon-title"><b>We go the extra mile</b></h5>
					<h5 class="icon-description">D&amp;M specializes in customer service.D&amp;M specializes in customer service.D&amp;M specializes in customer service.D&amp;M specializes in customer service.</h5>
				</div>
				<div class="col-md-2 col-xs-6 col-sm-2 text-center icon-container">
					<img class="icons" src=<?php echo do_shortcode('[themeuri]')."/images/one_call.png";?>>
					<h5 class="icon-title"><b>Just one call</b></h5>
					<h5 class="icon-description">Access an entire industry with on call to D&amp;M.</h5>
				</div>
				<div class="col-md-2 col-xs-6 col-sm-2 text-center icon-container">
					<img class="icons" src=<?php echo do_shortcode('[themeuri]')."/images/handle_it.png";?>>
					<h5 class="icon-title"><b>Let us handle it</b></h5>
					<h5 class="icon-description">An end to trouble tickets and carrier negotiations. D&amp;M manages it all.</h5>
				</div>
				<div class="col-md-2 col-xs-6 col-sm-2 text-center icon-container">
					<img class="icons" src=<?php echo do_shortcode('[themeuri]')."/images/experts.png";?>>
					<h5 class="icon-title"><b>We are experts</b></h5>
					<h5 class="icon-description">Experienced industry insiders who advocate for you.</h5>
				</div>
				<div class="col-md-2 col-xs-6 col-sm-2 text-center icon-container">
					<img class="icons" src=<?php echo do_shortcode('[themeuri]')."/images/do_it_fast.png";?>>
					<h5 class="icon-title"><b>We do it fast</b></h5>
					<h5 class="icon-description">Resolve supplier &amp; carrier issues three times faster.</h5>
				</div>
			</div>

			<div class="row pic-card-container">
				<div class="col-md-6 col-sm-6 col-xs-12 pic-card">
					<div class="pic-card-content col-md-6 col-sm-6">
						<h5 class="pic-card-title"><b>Comprehensive Managed Services</b></h5>
						<h5 class="pic-card-description">D&amp;M provides businesses the ability to immediately impact their telecom environments through: end-to-end services provisioning, help desk and trouble ticket resolution, services inventory management, contract negotiations, and continual network optimization, to name a few.</h5>
					</div>
					<div class="pic-card-image hidden-xs col-md-6 col-sm-6">
						<img src=<?php echo do_shortcode('[themeuri]')."/images/extra_mile.png";?>>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 pic-card">
					<div class="pic-card-content col-md-6 col-sm-6">
						<h5 class="pic-card-title"><b>Award Winning Service</b></h5>
						<h5 class="pic-card-description">D&amp;M has received numerous performance excellence and President's Club awards, and has been honored at all medal levels by Intelisys. We have held seats on the Paetec and Intelisys Advisory Boards, and have been on the front-page feature for PHONE.</h5>
					</div>
					<div class="pic-card-image hidden-xs col-md-6 col-sm-6">
						<img src=<?php echo do_shortcode('[themeuri]')."/images/extra_mile.png";?>>
					</div>
				</div>
			</div>

			<div class="row services">
				<h4 class="col-md-offset-1 col-sm-offset-1 col-xs-offset-1 services-title"><b>Our Services</b></h4>
				<div class="services-container">
				<div class=" col-md-offset-1 col-md-2 col-xs-6 text-center service-container hidden-xs">
					<img class="icons" src=<?php echo do_shortcode('[themeuri]')."/images/cloud.png";?>>
					<div class="service-content">
						<h5 class="service-title"><b>Cloud</b></h5>
						<h5 class="service-description">D&amp;M connects you with fast, reliable, and secure cloud services. We can walk you through the decision-making process to help determine if you need a public, private, or hybrid cloud platform, and we will help you find the provider that offers the best rates and consistent reliable services.</h5>
					</div>
					<div class="service-button-container">
						<a class="btn btn-block service-button" href="#">Learn More</a>
					</div>
				</div>
				<div class="col-md-2 col-xs-6 text-center service-container hidden-xs">
					<img class="icons" src=<?php echo do_shortcode('[themeuri]')."/images/voice.png";?>>
					<div class="service-content">
						<h5 class="service-title"><b>Voice</b></h5>
						<h5 class="icon-description">Voice services are constantly evolving with new technology. D&amp;M will be your guru and advocate in a very competitive market. From reliable phone service to high-quality, web-based communications, D&amp;M uses our domain expertise to identify the tools and services that will best serve your needs.</h5>
					</div>
					<div class="service-button-container">
						<a class="btn btn-block service-button" href="#">Learn More</a>
					</div>
				</div>
				<div class="col-md-2 col-xs-6 text-center service-container hidden-xs">
					<img class="icons" src=<?php echo do_shortcode('[themeuri]')."/images/data.png";?>>
					<div class="row service-content">
						<h5 class="service-title"><b>Data</b></h5>
						<h5 class="service-description">D&amp;M provides guidance and support throughout the process of procuring data solutions, including infrastructure and ongoing account management. Our knowledgeable team helps determine which connection and service models are the right fit for your business.</h5>
					</div>
					<div class="service-button-container">
						<a class="btn btn-block service-button" href="#">Learn More</a>
					</div>
				</div>
				<div class="col-md-2 col-xs-6 text-center service-container hidden-xs">
					<img class="icons" src=<?php echo do_shortcode('[themeuri]')."/images/energy.png";?>>
					<div class="service-content">
						<h5 class="service-title"><b>Energy</b></h5>
						<h5 class="service-description">Energy solutions from D&amp;M save your business money, because we scour the markets for the best rates and superior services. Better choices of monthly billing products means massive savings over time.</h5>
					</div>
					<div class="service-button-container">
						<a class="btn btn-block service-button" href="#">Learn More</a>
					</div>
				</div>
				<div class="col-md-2 col-xs-6 text-center service-container hidden-xs">
					<img class="icons" src=<?php echo do_shortcode('[themeuri]')."/images/managed_services.png";?>>
					<div class="service-content">
						<h5 class="service-title"><b>Managed Services</b></h5>
						<h5 class="service-description">D&amp;M provides comprehensive managed services enabling you to focus on the strategic work of running your business. Our managed services take the tactical workload off your team and ensure that you get the most out of our services and providers.</h5>
					</div>
					<div class="service-button-container">
						<a class="btn btn-block service-button" href="#">Learn More</a>
					</div>
				</div>

				<div class="list-group services-list hidden-sm hidden-md hidden-lg">
				  <a href="#" class="list-group-item service-item">Cloud <i class="pull-right fa fa-chevron-right"></i></a>
				  <a href="#" class="list-group-item service-item">Voice <i class="pull-right fa fa-chevron-right"></i></a>
				  <a href="#" class="list-group-item service-item">Data <i class="pull-right fa fa-chevron-right"></i></a>
				  <a href="#" class="list-group-item service-item">Energy <i class="pull-right fa fa-chevron-right"></i></a>
				  <a href="#" class="list-group-item service-item">Managed Services <i class="pull-right fa fa-chevron-right"></i></a>
				</div>
				</div>
			</div>

			<div class="row testimonials">
			      <h4 class="col-xs-offset-1 testimonials-title"><b>Testimonials</b></h4>
			      <div class="carousel slide" data-ride="carousel" id="testimonial-carousel">
			      
					<!-- Bottom Carousel Indicators -->
					<ol class="carousel-indicators">
					  <li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
					  <li data-target="#testimonial-carousel" data-slide-to="1"></li>
					  <li data-target="#testimonial-carousel" data-slide-to="2"></li>
					</ol>
			        

					<!-- Carousel Slides / Quotes -->
					<div class="carousel-inner">

						<!-- Quote 1 -->
						<div class="item active">
						    <div class="col-xs-12 col-sm-6 testimonial-card">
								<div class="testimonial-card-image col-xs-3">
									<img src=<?php echo do_shortcode('[themeuri]')."/images/extra_mile.png";?>>
								</div>
								<div class="testimonial-card-content col-xs-9">
									<h5 class="person-name"><b>Tim Schoenwald</b></h5>
									<h5 class="person-designation">Vice President</h5>
									<h5 class="person-company">Aurora Bank FSB</h5>
									<h5 class="testimonial">D&amp;M provides businesses the ability to immediately impact their telecom environments through: end-to-end services provisioning, help desk and trouble ticket resolution, services inventory management, contract negotiations, and continual network optimization, to name a few.</h5>
								</div>				     
						    </div>
						</div>

						<!-- Quote 2 -->
						<div class="item">
						    <div class="col-sm-12 col-sm-6 testimonial-card">
						      	<div class="testimonial-card-image col-xs-3">
									<img src=<?php echo do_shortcode('[themeuri]')."/images/extra_mile.png";?>>
								</div>
								<div class="testimonial-card-content col-xs-9">
									<h5 class="person-name"><b>Tim Schoenwald</b></h5>
									<h5 class="person-designation">Vice President</h5>
									<h5 class="person-company">Aurora Bank FSB</h5>
									<h5 class="testimonial">D&amp;M provides businesses the ability to immediately impact their telecom environments through: end-to-end services provisioning, help desk and trouble ticket resolution, services inventory management, contract negotiations, and continual network optimization, to name a few.</h5>
								</div>
						    </div>
						</div>

						<!-- Quote 3 -->
						<div class="item">
						    <div class="col-sm-12 col-sm-6 testimonial-card">
						      	<div class="testimonial-card-image col-xs-3">
									<img src=<?php echo do_shortcode('[themeuri]')."/images/extra_mile.png";?>>
								</div>
								<div class="testimonial-card-content col-xs-9">
									<h5 class="person-name"><b>Tim Schoenwald</b></h5>
									<h5 class="person-designation">Vice President</h5>
									<h5 class="person-company">Aurora Bank FSB</h5>
									<h5 class="testimonial">D&amp;M provides businesses the ability to immediately impact their telecom environments through: end-to-end services provisioning, help desk and trouble ticket resolution.</h5>
								</div>
						    </div>
						</div>
					  
					</div>
			        

			      </div>                          
			    </div>
			</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->	

<?php
get_footer();
