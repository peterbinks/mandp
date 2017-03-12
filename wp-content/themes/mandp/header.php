<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mandp
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Vesper+Libre" rel="stylesheet">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="wrapper">

<header class="site-header" role="banner">
	<div class="title">
		<h3><a href="/">Peter Binkowski &amp; Melody Nelson</a></h1>
	</div>
	<div class="row">
		<div class="the-date">
			<h4>05-28-17</h2>
		</div>
		<nav class="main-nav" role="navigation">
			<?php wp_nav_menu( array('menu_id' => 'primary-menu' ) ); ?>
		</nav>
	</div>
</header>
