<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
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