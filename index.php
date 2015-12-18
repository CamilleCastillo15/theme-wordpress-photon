<div id="page" class="hfeed site">

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="photos">
		<div id="rectangle_photos">
		
		<svg class="clip-svg">
			<defs>
				<clipPath id="clipTriangle">
					<polygon points="110 10, 280 300, 0 190" />
				</clipPath>
			</defs>
		</svg>
		
		<svg class="clip-svg">
		  <defs>
			<clipPath id="clipTriangle2">
			  <polygon points="220 0, 110 185, 0 0" />
		   </clipPath>
		  </defs>
		</svg>
		
			<?php query_posts('name=Gallerie 1 test'); if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<div id="photo"> <?php the_content(); ?> </div>
						
			</div>
			
			<?php endwhile; endif; wp_reset_query(); ?>
			
			<div id="test-popup_8" class="white-popup mfp-with-anim mfp-hide">
			
				<?php query_posts('name=Gallerie extent'); if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<div id="Gallerie_2"> <?php the_content(); ?> </div>
			
			<?php endwhile; endif; wp_reset_query(); ?>
				
			</div>
			
			
		<div id="triangle_haut">
			
			<?php
				
				echo '<div class="slider">';
				
						/*$args = array(
							'status' => 'hold',
						);*/
						
						$args = array(
							'status' => 'approve',
						);
						
						$comments = get_comments($args);
						$length = 70;
						
						foreach(array_slice($comments, 0) as $comment) :
						
						$content = $comment->comment_content;
						
						if ( strlen($comment->comment_content) > $length ) {
							$content = substr($comment->comment_content,0,$length);
							$content = $content.' ...';
							}
						
						echo  '<div>';
						echo '<h1>Avis n°';
						echo $comment->comment_ID;
						echo  '</h1><br /><b>';
						echo $comment->comment_author;
						echo '</b><br /><br />';
						echo $content;
											
						echo		'<ul class="inline-popups_2">';
						echo		'<li>';
						echo			'<a href="#test-popup_'.$comment->comment_ID.'"'.' data-effect="mfp-move-from-top">';
						echo				'<div class="lire_plus">> Lire plus</div>';
						echo			'</a>';
						echo		'</li>';
						echo	'</ul>';
					
						
						echo "<div id='test-popup_".$comment->comment_ID."'"."class='white-popup mfp-with-anim mfp-hide'>";
							
							echo substr($comment->comment_content, 0, -3);
						
						echo	'</div>';
											
					echo  '</div>';
					
						endforeach;
					
					echo '</div>';
			?>
			
			<div class="controls">
			  <a class="prev" ><</a>
			  <a class="next" >></a>
			</div>
						
		</div>
	</div>
	
	<div id = "avis" >

		<div id="triangle_milieu_1_haut">
		
					<?php
				
				echo '<div class="slider">';
				
						/*$args = array(
							'status' => 'hold',
						);*/
						
						$args = array(
							'status' => 'approve',
						);
						
						$comments = get_comments($args);
						$length = 70;
						
						foreach(array_slice($comments, 0) as $comment) :
						
						$content = $comment->comment_content;
						
						if ( strlen($comment->comment_content) > $length ) {
							$content = substr($comment->comment_content,0,$length);
							$content = $content.' ...';
							}
						
						echo  '<div>';
						echo '<h1>Avis n°';
						echo $comment->comment_ID;
						echo  '</h1><br /><b>';
						echo $comment->comment_author;
						echo '</b><br /><br />';
						echo $content;
											
						echo		'<ul class="inline-popups_2">';
						echo		'<li>';
						echo			'<a href="#test-popup_'.$comment->comment_ID.'"'.' data-effect="mfp-move-horizontal">';
						echo				'<div class="lire_plus">> Lire plus</div>';
						echo			'</a>';
						echo		'</li>';
						echo	'</ul>';
					
						
						echo "<div id='test-popup_".$comment->comment_ID."'"."class='white-popup mfp-with-anim mfp-hide'>";
							
							echo substr($comment->comment_content, 0, -3);
						
						echo	'</div>';
											
					echo  '</div>';
					
						endforeach;
					
					echo '</div>';
			?>
			
			<div class="controls">
			  <a class="next" >></a>
			</div>
			
			</div>

		
		<div id="triangle_milieu_1_bas">
		
					<?php
				
				echo '<div class="slider_2">';
				
						/*$args = array(
							'status' => 'hold',
						);*/
						
						$args = array(
							'status' => 'approve',
						);
						
						$comments = get_comments($args);
						$length = 70;
						
						foreach(array_slice($comments, 0) as $comment) :
						
						$content = $comment->comment_content;
						
						if ( strlen($comment->comment_content) > $length ) {
							$content = substr($comment->comment_content,0,$length);
							$content = $content.' ...';
							}
						
						echo  '<div>';
						echo '<h1>Avis n°';
						echo $comment->comment_ID;
						echo  '</h1><br /><b>';
						echo $comment->comment_author;
						echo '</b><br /><br />';
						echo $content;
											
						echo		'<ul class="inline-popups_2">';
						echo		'<li>';
						echo			'<a href="#test-popup_'.$comment->comment_ID.'"'.' data-effect="mfp-move-horizontal">';
						echo				'<div class="lire_plus">> Lire plus</div>';
						echo			'</a>';
						echo		'</li>';
						echo	'</ul>';
					
						
						echo "<div id='test-popup_".$comment->comment_ID."'"."class='white-popup mfp-with-anim mfp-hide'>";
							
							echo substr($comment->comment_content, 0, -3);
						
						echo	'</div>';
											
					echo  '</div>';
					
						endforeach;
					
					echo '</div>';
			?>
		
		</div>
		<div id="formulaire_avis">
			<?php comment_form(); ?>
		</div>
		
		<div id="triangle_milieu_2_haut">
		
						<?php
				
				echo '<div class="slider">';
				
						/*$args = array(
							'status' => 'hold',
						);*/
						
						$args = array(
							'status' => 'approve',
						);
						
						$comments = get_comments($args);
						$length = 70;
						
						foreach(array_slice($comments, 0) as $comment) :
						
						$content = $comment->comment_content;
						
						if ( strlen($comment->comment_content) > $length ) {
							$content = substr($comment->comment_content,0,$length);
							$content = $content.' ...';
							}
						
						echo  '<div>';
						echo '<h1>Avis n°';
						echo $comment->comment_ID;
						echo  '</h1><br /><b>';
						echo $comment->comment_author;
						echo '</b><br /><br />';
						echo $content;
											
						echo		'<ul class="inline-popups_2">';
						echo		'<li>';
						echo			'<a href="#test-popup_'.$comment->comment_ID.'"'.' data-effect="mfp-move-horizontal-right">';
						echo				'<div class="lire_plus">> Lire plus</div>';
						echo			'</a>';
						echo		'</li>';
						echo	'</ul>';
					
						
						echo "<div id='test-popup_".$comment->comment_ID."'"."class='white-popup mfp-with-anim mfp-hide'>";
							
							echo substr($comment->comment_content, 0, -3);
						
						echo	'</div>';
											
					echo  '</div>';
					
						endforeach;
					
					echo '</div>';
			?>
			
			
			<div class="controls">
			  <a class="prev" ><</a>
			</div>
			
		</div>
		<div id="triangle_milieu_2_bas">
			
					<?php
				
				echo '<div class="slider_2">';
				
						/*$args = array(
							'status' => 'hold',
						);*/
						
						$args = array(
							'status' => 'approve',
						);
						
						$comments = get_comments($args);
						$length = 70;
						
						foreach(array_slice($comments, 0) as $comment) :
						
						$content = $comment->comment_content;
						
						if ( strlen($comment->comment_content) > $length ) {
							$content = substr($comment->comment_content,0,$length);
							$content = $content.' ...';
							}
						
						echo  '<div>';
						echo '<h1>Avis n°';
						echo $comment->comment_ID;
						echo  '</h1><br /><b>';
						echo $comment->comment_author;
						echo '</b><br /><br />';
						echo $content;
											
						echo		'<ul class="inline-popups_2">';
						echo		'<li>';
						echo			'<a href="#test-popup_'.$comment->comment_ID.'"'.' data-effect="mfp-move-horizontal-right">';
						echo				'<div class="lire_plus">> Lire plus</div>';
						echo			'</a>';
						echo		'</li>';
						echo	'</ul>';
					
						
						echo "<div id='test-popup_".$comment->comment_ID."'"."class='white-popup mfp-with-anim mfp-hide'>";
							
							echo substr($comment->comment_content, 0, -3);
						
						echo	'</div>';
											
					echo  '</div>';
					
						endforeach;
					
					echo '</div>';
			?>
		
		</div>
		
	</div>
	<div id = "musique" >
		
		<div id="triangle_bas_bas">
		
			<?php
				
				echo '<div class="slider_2">';
				
						/*$args = array(
							'status' => 'hold',
						);*/
						
						$args = array(
							'status' => 'approve',
						);
						
						$comments = get_comments($args);
						$length = 70;
						
						foreach(array_slice($comments, 0) as $comment) :
						
						$content = $comment->comment_content;
						
						if ( strlen($comment->comment_content) > $length ) {
							$content = substr($comment->comment_content,0,$length);
							$content = $content.' ...';
							}
						
						echo  '<div>';
						echo '<h1>Avis n°';
						echo $comment->comment_ID;
						echo  '</h1><br /><b>';
						echo $comment->comment_author;
						echo '</b><br /><br />';
						echo $content;
											
						echo		'<ul class="inline-popups_2">';
						echo		'<li>';
						echo			'<a href="#test-popup_'.$comment->comment_ID.'"'.' data-effect="mfp-move-from-bottom">';
						echo				'<div class="lire_plus">> Lire plus</div>';
						echo			'</a>';
						echo		'</li>';
						echo	'</ul>';
					
						
						echo "<div id='test-popup_".$comment->comment_ID."'"."class='white-popup mfp-with-anim mfp-hide'>";
							
							echo substr($comment->comment_content, 0, -3);
						
						echo	'</div>';
											
					echo  '</div>';
					
						endforeach;
					
					echo '</div>';
			?>
			
			<div class="controls">
			  <a class="prev" ><</a>
			  <a class="next" >></a>
			</div>
			
		</div>
			
			<?php query_posts('name=Playlist test'); if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<div <?php post_class();?> id="post-<?php the_ID(); ?> ">
					
					<div id="musique"> <?php the_content(); ?> </div>
						
			</div>
			
			<?php endwhile; endif; wp_reset_query(); ?>
	
<?php get_footer(); ?>

