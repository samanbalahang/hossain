<?php
/**
 * The template for displaying all single posts.
 *
 * @package storefront
 */
get_header(); ?>
		<main id="main" class="container" role="main">
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'content', 'page' );
			endwhile; // End of the loop.
			?>
		</main><!-- #main -->
<?php
get_footer();