<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?>
<!DOCTYPE html>
<html lang="fa-IR">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php get_bloginfo("name"); ?>
	<link rel="shortcut icon" href="assets/images/logo-144.png" type="image/png">
	<meta name="theme-color" content="#0f1932">
	<meta name="author" content="htraders.ir">
	<meta property="og:description" content="Trade over 1000 instruments, Anywhere, anytime">
	<meta property="og:site_name" content="htraders.ir">
	<meta property="og:url" content="https://htraders.ir/">
	<meta property="og:image" content="htraders.ir/assets/images/logo-144.png">
	<meta property="og:type" content="website">
	<meta property="og:image:secure_url" content="htraders.ir/assets/images/logo-144.png">
	<meta property="og:image:alt" content="<?php get_the_title(); ?>">
	<meta property="og:image:type" content="htraders.ir/assets/images/logo-144.png">
	<meta property="og:image:width" content="512">
	<meta property="og:image:height" content="512">
	<meta property="twitter:title" content="<?php get_the_title(); ?>">
	<meta property="twitter:image" content="htraders.ir/assets/images/logo-144.png">
	<meta property="og:image" content="htraders.ir/assets/images/logo-144.png">
	<meta name="twitter:description" content="<?php get_the_title(); ?>">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@htraders">
	<meta name="twitter:creator" content="@htraders">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="<?= get_template_directory_uri()  ?>/assets/css/style.min.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<nav>
			<ul class="d-block d-md-none">
				<li>
					<a href="#" class="bars">
						<i class="material-icons">menu</i>
					</a>
				</li>
			</ul>
			<?php
			$args = array(
				'container' => false,
				'theme_location' => 'primary',
				'items_wrap' => '<ul class="primary">%3$s</ul>',
			);
			wp_nav_menu($args);
			?>
			<ul>
				<li>
					<a class="text-end" href="<?php echo esc_url(home_url('/')); ?>">
						<img src="<?= get_template_directory_uri()  ?>/assets/images/brand.png" alt="brand">
					</a>
				</li>
			</ul>
		</nav>
	</header>
