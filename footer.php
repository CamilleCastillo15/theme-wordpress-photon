<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage photon_v2
 * @since photon_v2 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			
		<?php query_posts('name=Social Networks'); if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<div id="fb_tw"> <?php the_content(); ?> </div>
						
			</div>
			
			<?php endwhile; endif; wp_reset_query(); ?>
			
			<?php query_posts('name=Contact'); if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<div id="contact_test"> <?php the_content(); ?> </div>
						
			</div>
			
			<?php endwhile; endif; wp_reset_query(); ?>
		
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
