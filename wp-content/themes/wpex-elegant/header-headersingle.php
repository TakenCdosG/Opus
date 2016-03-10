<?php
/**
 * The Header for our theme.
 *
 * @package     Elegant WordPress theme
 * @subpackage  Templates
 * @author      Alexander Clarke
 * @link        http://www.wpexplorer.com
 * @since       1.0.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<!-- Typekit Fonts -->
	<script src="https://use.typekit.net/qtm2uuv.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="wrap" class="clr">

		<?php get_template_part( 'partials/header/single/layout' ); ?>

		<?php get_template_part( 'partials/home/slider' ); ?>
		
		<!-- <div id="main" class="site-main container clr"> -->
		<div style="">