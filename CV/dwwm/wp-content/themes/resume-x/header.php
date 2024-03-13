<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package resume X
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php do_action('resume_x_header_small_menu'); ?>
	<?php
	$resume_x_blog_container = get_theme_mod('resume_x_blog_container', 'container');
	?>
	<?php if (has_header_image()) : ?>
		<div class="header-img">
			<?php the_header_image_tag(); ?>
		</div>
	<?php endif; ?>
	<div class="<?php echo esc_attr($resume_x_blog_container); ?>">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'resume-x'); ?></a>

		<div class="row">
			<?php
			do_action('resumex_profile');
			$resumex_psec_show = get_theme_mod('resumex_psec_show', true);
			if ($resumex_psec_show) {
				$resume_x_mcolumn = 8;
			} else {
				$resume_x_mcolumn = 12;
			}
			?>
			<div class="col-lg-<?php echo esc_attr($resume_x_mcolumn); ?> rxmain-content">
				<div id="page" class="site all-details-section px-3">
					<header id="masthead" class="site-header text-center">
						<?php
						do_action('resume_x_header_logo');
						do_action('resume_x_header_menu');
						?>
					</header><!-- #masthead -->