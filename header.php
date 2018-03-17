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
<link href="//fonts.googleapis.com/css?family=Fjalla+One|Open+Sans" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="section section-header">
			<div class="container">
				<div class="row">
					<div class="col-md-6 text-left">
						<img height="90px" width="200px" src="<?php echo get_template_directory_uri() . '/assets/images/logo.svg'; ?>" />
					</div>
					<div class="col-md-6 main-nav text-right">
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
				<div class="row banner">
					<div class="col-md-12">
						<h1>This is header.php</h1>
					</div>
				</div>
			</div>
		</div>
	</div>