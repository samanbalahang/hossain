<?php

/**
 * The template for displaying archive pages.
 *
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header(); ?>

<main id="main" class="site-main" role="main">
	<div class="container bg-white">
		<?php if (have_posts()) : ?>
			<header class="page-header">
				<?php
				the_archive_title('<h2 class="page-title">', '</h2>');
				the_archive_description('<div class="taxonomy-description">', '</div>');
				?>
			</header><!-- .page-header -->
			<div class="row">
				<?php
				while (have_posts()) :
					the_post();
				?>
					<div class="col-12 col-md-4 mb-3">
						<div class="card custom-height">
							<?php

							/**
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part('content', get_post_format());
							?>
						</div>
					</div>
				<?php
				endwhile;
				?>

			</div>
		<?php
		else :

			get_template_part('content', 'none');

		endif;
		?>
	</div>
</main><!-- #main -->


<?php
get_footer();
