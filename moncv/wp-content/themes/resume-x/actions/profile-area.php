<?php

/**
 * The file for header all actions
 *
 *
 * @package resume X
 */

function resume_x_profile_area()
{
	$resume_x_pdefault_img = get_template_directory_uri() . '/assets/img/man.jpg';
	$resumex_psec_show = get_theme_mod('resumex_psec_show', true);
	if (empty($resumex_psec_show)) {
		return;
	}
	$resumex_pimg = get_theme_mod('resumex_pimg', $resume_x_pdefault_img);
	$resumex_profile_title = get_theme_mod('resumex_profile_title', __('Alex Smith Doe', 'resume-x'));
	$resumex_profile_subtitle = get_theme_mod('resumex_profile_subtitle', __('Senior WordPress Developer', 'resume-x'));
	$resumex_fblink = get_theme_mod('resumex_fblink', '#');
	$resumex_instalink = get_theme_mod('resumex_instalink', '#');
	$resumex_twitlink = get_theme_mod('resumex_twitlink', '#');
	$resumex_youlink = get_theme_mod('resumex_youlink', '#');
	$resumex_inlink = get_theme_mod('resumex_inlink', '#');
	$resumex_btntext = get_theme_mod('resumex_btntext', __('Contact Me', 'resume-x'));
	$resumex_btnlink = get_theme_mod('resumex_btnlink', '#');

?>
	<div class="col-lg-4 profile-side">
		<div class="author-sticky">
			<div class="author-section">
				<div class="author">
					<div class="author-img">
						<img src="<?php echo esc_url($resumex_pimg); ?>" alt="<?php esc_attr_e('Profile Image', 'resume-x'); ?>">
					</div>
					<div class="author-all-imf">
						<?php if ($resumex_profile_title) : ?>
							<h3 class="author-name"><?php echo esc_html($resumex_profile_title); ?></h3>
						<?php endif; ?>
						<?php if ($resumex_profile_subtitle) : ?>
							<h4 class="author-subtitle"><?php echo esc_html($resumex_profile_subtitle); ?></h4>
						<?php endif; ?>

						<div class="author-social-icons">
							<?php if ($resumex_fblink) : ?>
								<a href="<?php echo esc_url($resumex_fblink); ?>"><i class="fab fa-facebook-f"></i></a>
							<?php endif; ?>
							<?php if ($resumex_instalink) : ?>
								<a href="<?php echo esc_url($resumex_instalink); ?>"><i class="fab fa-instagram"></i></a>
							<?php endif; ?>
							<?php if ($resumex_twitlink) : ?>
								<a href="<?php echo esc_url($resumex_twitlink); ?>"><i class="fab fa-twitter"></i></a>
							<?php endif; ?>
							<?php if ($resumex_youlink) : ?>
								<a href="<?php echo esc_url($resumex_youlink); ?>"><i class="fab fa-youtube"></i></a>
							<?php endif; ?>
							<?php if ($resumex_inlink) : ?>
								<a href="<?php echo esc_url($resumex_inlink); ?>"><i class="fab fa-linkedin-in"></i></a>
							<?php endif; ?>
						</div>
						<?php if ($resumex_btnlink) : ?>
							<div class="author-all-btn">
								<a href="<?php echo esc_url($resumex_btnlink); ?>" class="main-btn"><?php echo esc_html($resumex_btntext); ?></a>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
}
add_action('resumex_profile', 'resume_x_profile_area');
