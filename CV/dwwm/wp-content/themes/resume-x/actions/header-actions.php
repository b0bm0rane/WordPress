<?php

/**
 * The file for header all actions
 *
 *
 * @package resume X
 */

function resume_x_header_menu_output()
{
?>
	<div class="menu-bar text-center">
		<div class="container">
			<div class="resume-x-container menu-inner">
				<nav id="site-navigation" class="main-navigation">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'main-menu',
						'menu_id'        => 'resume-x-menu',
						'menu_class'        => 'resume-x-menu',
					));
					?>
				</nav><!-- #site-navigation -->
			</div>
		</div>
	</div>

<?php
}
add_action('resume_x_header_menu', 'resume_x_header_menu_output');


function resume_x_header_small_menu_output()
{
?>
	<div id="site-navigation" class="sm-mobile-menu">
		<!-- Button trigger modal -->
		<div class="container">
			<div class="small-menubar">
				<div class="sm-logo">
					<?php if (display_header_text() == true || (display_header_text() == true && is_customize_preview())) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
					<?php endif; ?>
				</div>
				<button type="button" class="btn smallmenubtn" data-bs-toggle="modal" data-bs-target="#smallmenu">
					<?php esc_html_e('Menu', 'resume-x'); ?>
				</button>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="smallmenu" tabindex="-1" aria-labelledby="smallmenuLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<nav id="sm-navigation" class="sm-main-navigation">
						<?php
						wp_nav_menu(array(
							'theme_location' => 'main-menu',
							'menu_id'        => 'resume-x-menu',
							'menu_class'        => 'resume-x-menu',
						));
						?>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</div>
	</div>


<?php
}
add_action('resume_x_header_small_menu', 'resume_x_header_small_menu_output');

function resume_x_header_logo_output()
{
?>

	<div class="resume-x-logo-section">
		<div class="container">
			<div class="head-logo-sec">
				<?php if (has_custom_logo()) : ?>
					<div class="site-branding brand-logo">
						<?php
						the_custom_logo();
						?>
					</div>
				<?php endif; ?>
				<?php
				if (display_header_text() == true || (display_header_text() == true && is_customize_preview())) : ?>
					<div class="site-branding brand-text">
						<?php if (display_header_text() == true || (display_header_text() == true && is_customize_preview())) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
							<?php
							$resume_x_description = get_bloginfo('description', 'display');
							if ($resume_x_description || is_customize_preview()) :
							?>
								<p class="site-description"><?php echo $resume_x_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
															?></p>
							<?php endif; ?>
						<?php endif; ?>

					</div><!-- .site-branding -->
				<?php endif; ?>
			</div>
		</div>
	</div>




<?php
}
add_action('resume_x_header_logo', 'resume_x_header_logo_output');
