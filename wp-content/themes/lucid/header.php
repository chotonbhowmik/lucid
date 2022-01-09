<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lucid
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/bootstrap.min.css">
    <!-----for favicon---->
    <link rel="icon" href="<?php global $redux_demo; echo $redux_demo['upload-favicon']['url']; ?>" type="image/gif" sizes="16x16">

	<!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/font-awesome.min.css">	

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/assets/css/owl.theme.default.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/style.css">

    <!-- Theme Responsive View -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/assets/css/responsive.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- header-section Code start -->
	<header class="header-section">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <div class="container">
		  		<a class="navbar-brand" href="index.html">
				  	<img src="<?php global $redux_demo; echo $redux_demo['upload-logo']['url']; ?>" alt="Logo" class="logo">
				</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <i class="fa fa-bars"></i>
			  </button>
			  <?php
			  wp_nav_menu( array(

			  	'theme_location'     => 'primary',
			  	'container'          => 'nav',
			  	'container_class'    => 'collapse navbar-collapse',
			  	'menu_class'         => 'navbar-nav ml-auto',



			  ));


			  ?>
<!-- 
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav ml-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Features</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">About</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Testimonials</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Pricing</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Contact</a>
			      </li>
			      
			    </ul>
			  </div> -->
		  </div>
		</nav>
