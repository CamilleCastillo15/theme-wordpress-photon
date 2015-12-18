<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage photon_v2
 * 	
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<?php wp_enqueue_script("jquery"); ?> 
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="wp-content/themes/photon/normalize.css" type="text/css" /> 
	<?php  wp_enqueue_script( 'help-script', WP_CONTENT_URL . '/themes/photon_v2/help.js', array('jquery') ); ?>
	<?php wp_enqueue_style( 'style', WP_CONTENT_URL . '/themes/photon_v2/css/style.css' ); ?>
	<?php wp_enqueue_style( 'css3anim', WP_CONTENT_URL . '/themes/photon_v2/css/css3anim.css' ); ?>
	<?php wp_enqueue_style( 'mediaqueries', WP_CONTENT_URL . '/themes/photon_v2/css/mediaqueries.css' ); ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]--> 
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id = "head" >
		<div id="menu_haut">
				<ul>
					<li><a href="#head" class="scrollTo hvr-overline-from-center">Le projet</a></li>
					<li><a href="#photos" class="scrollTo hvr-overline-from-center">Les photos</a></li>
					<li><a href="#avis" class="scrollTo hvr-overline-from-center">Votre avis</a></li>
					<li><a href="#musique" class="scrollTo hvr-overline-from-center">Notre Musique</a></li>
					<li><a href="#fb_tw" class="scrollTo hvr-overline-from-center">Social</a></li>
				</ul>
		</div>
		<div id="img_logo">
		</div>
		
		<svg class="clip-svg">
			<defs>
				<clipPath id="hexagon-clip" clipPathUnits="objectBoundingBox">
					<polygon points="0.25 0.05, 0.75 0.05, 1 0.5, 0.75 0.95, 0.25 0.95, 0 0.5" />
				</clipPath>
			</defs>
		</svg>	
		
		<div id="test-popup" class="white-popup mfp-with-anim mfp-hide">
			
			<?php query_posts('name=test'); if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<div id="test"> <?php the_content(); ?> </div>
					
					<?php endwhile; endif; wp_reset_query(); ?>
		</div>
		
		<?php query_posts('name=img_header'); if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<div <?php post_class();?> id="post-<?php the_ID(); ?> ">
					
					<div id="photo_ampli"> <?php the_content(); ?> </div>
						
			</div>
			
			<?php endwhile; endif; wp_reset_query(); ?>
			
			
		</div>
	</header>
	

