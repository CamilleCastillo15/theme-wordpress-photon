<div id="custom-content" class="white-popup-block" style="max-width:600px; margin: 20px auto;">
	
	<?php require('../../../../wp-blog-header.php'); 
	
	query_posts('name=Gallerie extent'); if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<div id="Gallerie_2"> <?php the_content(); ?> </div>
			
			<?php endwhile; endif; wp_reset_query(); 
			?>
			
	<script type="text/javascript">
	
		jQuery(document).ready(function() {
			
			jQuery(".gallerie_extent").removeClass('su-custom-gallery su-custom-gallery-title-never su-lightbox-gallery');
			jQuery(".gallerie_extent").addClass('gallery');
			
			jQuery( ".gallerie_extent .su-custom-gallery-slide a" ).each(function(index ) {
			  jQuery(".gallerie_extent .su-custom-gallery-slide a").unwrap();
			});
			
			jQuery( ".gallerie_extent a").addClass('mfp-image image-link');
			
			jQuery('.image-link').magnificPopup({ 
						type: 'image', 
						}); 
			
			/*jQuery('.gallery').each(function () {
							jQuery(this).magnificPopup({
								delegate: 'a',
								type: 'image',
								gallery: {
									enabled: true,
									navigateByImgClick: true
								}
							});
						});*/
			});
			
	</script>
	
</div>