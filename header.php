<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="section section-header">
		<div class="inner">
			<div class="container-fluid hat">
				<div class="row">
					<div class="col-md-5">
						<img
							src="<?php echo get_template_directory_uri() . '/assets/images/psalm23_logo.svg'; ?>"
							alt="Psalm23 Basketball Academy"
							height="100px"
							width="340px" />
					</div>
					<div class="col-md-7 main-nav">
						<?php
						wp_nav_menu( array(
							'menu'              => 'primary',
							// 'theme_location'    => 'secondary',
							//'depth'             => 4,
							'container'         => 'nav',
							'menu_id'        	=> 'primary_nav'
						) );
						?>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row banner">
					<div class="col-sm-12 col-md-7">
						<h2 class="banner-title">
							<span class="black">Basketball</span><br/>
						 	skills clinic</h2>
						<ul class="banner-text">
							<li>Strength and Conditioning,</li>
							<li>Agility,</li>
							<li>Quickness,</li>
							<li>Ball handling,</li>
							<li>Passing and more</li>
						</ul>
					</div>
					<div class="col-sm-12 col-md-5"></div>
				</div>
			</div>
		</div>

	</div>