<?php
/**
 *	Template name: About Us
 *
 *	The template for displaying Custom Page Template: About Us.
 *
 *	@package WordPress
 *	@subpackage illdy
 */
?>
<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<section id="blog">
				<?php
				if( have_posts() ):
					while( have_posts() ):
						echo '<div class="col-sm-6 about-us-images">';
							// check if the repeater field has rows of data
	                    if( have_rows('our_images') ):

	                        // loop through the rows of data
	                        while ( have_rows('our_images') ) : the_row();

	                            // display a sub field value
	                            echo '<img class="our-images" src="'.get_sub_field('images').'"/>';

	                        endwhile;

	                    else :

	                        // no rows found

                    	endif;
						echo '
						<img class="chile" src="'.get_bloginfo('template_directory').'/layout/images/chile.png">
							</div>
							<div class="col-sm-6"> ';
						the_post();
						get_template_part( 'template-parts/content', 'page' );
						echo '</div>';
					endwhile;
				endif;
				?>
			</section><!--/#blog-->
		</div><!--/.col-sm-12-->
	</div><!--/.row-->
</div><!--/.container-->
<?php get_footer(); ?>