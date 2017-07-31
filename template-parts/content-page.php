<?php
/**
 *	The template for displaying the page content.
 *
 *	@package WordPress
 *	@subpackage illdy
 */

$jumbotron_single_image  = get_theme_mod( 'illdy_jumbotron_enable_featured_image', true );

if (is_page('products') || is_page('contact')){
	the_content();
}else{

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post' ); ?>>
	<?php if (is_page('products')!=true){?>
	<!--<h1 class="blog-post-title"><?php //the_title(); ?></h1>-->
	<?php } ?>
	<?php if ( has_post_thumbnail() && $jumbotron_single_image != true ) { ?>
		<div class="blog-post-image">
			<?php the_post_thumbnail( 'illdy-blog-list' ); ?>
		</div><!--/.blog-post-image-->
	<?php } ?>
	<div class="blog-post-entry markup-format">
		<?php
		the_content();

		wp_link_pages( array(
			'before'	=> '<div class="link-pages">' . __( 'Pages:', 'illdy' ),
			'after'		=> '</div><!--/.link-pages-->'
		) );
		?>
	</div><!--/.blog-post-entry.markup-format-->
</article><!--/#post-<?php the_ID(); ?>.blog-post-->
<?php } ?>