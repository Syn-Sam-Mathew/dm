<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package D&M
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php

$logo = get_field("logo");
$header_background = get_field("header_background");
$header_title = get_field("header_title");
$header_description = get_field("header_description");
$header_button = get_field("header_button");
$header_button_link = get_field("header_button_link");

?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dm' ); ?></a>

	<header id="masthead" class="site-header" role="banner" style="background-image: url(<?php echo $header_background ?>)">

			<div class="site-branding pull-left">
				<img src=<?php echo $logo ?> alt="Logo" height="100" width="100">
			</div><!-- .site-branding -->

			<span class="pull-right">
				<nav id="site-navigation" class="navbar nav nav-pills nav-justified hidden-xs" role="navigation">
					<a href="#">Contact Us</a>
					<a href="#">Services</a>
					<a href="#">About</a>
					<a href="#">Resources</a>
					<a id="portal" href="#">Portal</a>
				</nav>
				<a onclick='myFunction()'><i class="hidden-md hidden-sm hidden-lg fa fa-bars menu-icon"></i></a>
			</span>
			<ul class="topnav non-responsive" id="myTopnav">
				  	<li><a href="#">Contact Us</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Resources</a></li>
					<li><a href="#">Portal</a></li>
			</ul>
			<!-- #site-navigation -->

		<?php if($header_title): ?>
				<br/>
				<br/>
				<br/>
				<br/>
		<?php endif;?>
		<div id="header-content">
			<div class="col-md-5">
				<h1 class="header-title"><b><?php echo $header_title ?></b></h1>
				<h4 class="header-description"><?php echo $header_description ?></h4>
				<?php if($header_button): ?>
						<a class="btn" id="contact-us" href=<?php echo $header_button_link ?> ><?php echo $header_button ?></a>
				<?php endif;?>
			</div>
		</div>


	</header><!-- #masthead -->

	<div id="content" class="site-content">
