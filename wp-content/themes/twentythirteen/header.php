<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="" role="banner">
			<div class="container" style="position:relative;left:60px">
				<div class="row">
				<div class="GATSLogo col-md-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="/images/logo.jpg" border="0"></a></div>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<div class="GATSNameSection col-md-4">
						<div class="GATSTamil">அட்லாண்டா மாநகரத் தமிழ்ச் சங்கம்</div>
						<div class="GATSEnglish"><span><?php bloginfo( 'name' ); ?></span></div>
						<div><span><?php bloginfo( 'description'); ?></span><br><span style="padding-right:20px">Cultural</span> <span style="padding-right:20px">Charitable</span> <span>Tamil Education</span></div>
					</div>
				</a>
				<div class="banner-link-container col-md-4">
					<ul class="top-menu-links">
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Members</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">About</a></li>
						<li style="border:none"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Contact</li></a>
					</ul>
					<ul class="no-border">
						<li><a href="" target="_blank"><img src="http://www.gatamilsangam.org/images/newslettersignup.jpg" class="img-responsive" style="height:70px"></a></li>
						<li><a href="http://www.gatamilsangam.org/VasanthaMalarl/2014/vmoct2015.pdf" target="_blank"><img title="Vasantha Malar Issue" src="http://www.gatamilsangam.org/VasanthaMalar/vmissue.png" style="height:70px"></a></li>
						<li><a href="https://www.facebook.com/groups/192364347457395/"target="_blank"><img title="GATS Facebook Page" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTaxU_D5YlSbes17k_bOVCCQxCYLzYh8Ze_Pd5VkumyJjr0BdgIz4BJnEA" style="height:70px"></a></li>
					</ul>
				</div>
				</div>
			</div>
		</header><!-- #masthead -->
		<nav id="navbar" class="navbar">
			<div id="site-navigation" class="navigation main-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></button>
				<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
				<div><?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu',  'menu_id' => 'primary-menu' ) ); ?></div>
			</div><!-- #site-navigation -->
		</nav><!-- #navbar -->
		<div id="main" class="site-main">
