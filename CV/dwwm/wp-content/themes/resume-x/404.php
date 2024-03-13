<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package resume X
 */

get_header();
?>
<div class="container">

	<main id="primary" class="site-main xmain-404 shadow mt-5 mb-5">

		<section class="error-404 not-found py-5 px-3 text-center">
			<header class="page-header pb-3">
				<h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'resume-x'); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'resume-x'); ?></p>

				<?php
				get_search_form();

				?>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->
</div>

<?php
get_footer();
