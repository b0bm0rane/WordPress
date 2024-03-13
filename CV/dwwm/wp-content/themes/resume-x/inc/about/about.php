<?php

/**
 * About setup
 *
 * @package ResumeX
 */

require_once trailingslashit(get_template_directory()) . 'inc/about/class.about.php';

if (!function_exists('resume_x_about_setup')) :

	/**
	 * About setup.
	 *
	 * @since 1.0.0
	 */
	function resume_x_about_setup()
	{
		$theme = wp_get_theme();
		$xtheme_name = $theme->get('Name');

		$config = array(
			// Menu name under Appearance.
			'menu_name'               => sprintf(esc_html__('%s Info', 'resume-x'), $xtheme_name),
			// Page title.
			'page_name'               => sprintf(esc_html__('%s Info', 'resume-x'), $xtheme_name),
			/* translators: Main welcome title */
			'welcome_title'         => sprintf(esc_html__('Welcome to %s! - Version ', 'resume-x'), $theme['Name']),
			// Main welcome content
			// Welcome content.
			'welcome_content' => sprintf(esc_html__('%1$s is now installed and ready to use. We want to make sure you have the best experience using the theme and that is why we gathered here all the necessary information for you. Thanks for using our theme!', 'resume-x'), $theme['Name']),

			// Tabs.
			'tabs' => array(
				'getting_started' => esc_html__('Getting Started', 'resume-x'),
				'recommended_actions' => esc_html__('Recommended Actions', 'resume-x'),
				'useful_plugins'  => esc_html__('Useful Plugins', 'resume-x'),
				'free_pro'  => esc_html__('Free Vs Pro', 'resume-x'),
			),

			// Quick links.
			'quick_links' => array(
				'xmagazine_url' => array(
					'text'   => esc_html__('UPGRADE ResumeX PRO', 'resume-x'),
					'url'    => 'https://wpthemespace.com/product/resumex-pro/?add-to-cart=6049',
					'button' => 'danger',
				),
				'update_url' => array(
					'text'   => esc_html__('ResumeX PRO Video', 'resume-x'),
					'url'    => 'https://www.youtube.com/watch?v=LLcVqf_ORYs&t=15s',
					'button' => 'danger',
				),

			),

			// Getting started.
			'getting_started' => array(
				'one' => array(
					'title'       => esc_html__('Demo Content', 'resume-x'),
					'icon'        => 'dashicons dashicons-layout',
					'description' => sprintf(esc_html__('Demo content is pro feature. To import sample demo content, %1$s plugin should be installed and activated. After plugin is activated, visit Import Demo Data menu under Appearance.', 'resume-x'), esc_html__('One Click Demo Import', 'resume-x')),
					'button_text' => esc_html__('UPGRADE For  Demo Content', 'resume-x'),
					'button_url'  => 'https://wpthemespace.com/product/resumex-pro/?add-to-cart=6049',
					'button_type' => 'primary',
					'is_new_tab'  => true,
				),

				'two' => array(
					'title'       => esc_html__('Theme Options', 'resume-x'),
					'icon'        => 'dashicons dashicons-admin-customizer',
					'description' => esc_html__('Theme uses Customizer API for theme options. Using the Customizer you can easily customize different aspects of the theme.', 'resume-x'),
					'button_text' => esc_html__('Customize', 'resume-x'),
					'button_url'  => wp_customize_url(),
					'button_type' => 'primary',
				),
				'three' => array(
					'title'       => esc_html__('Show Video', 'resume-x'),
					'icon'        => 'dashicons dashicons-layout',
					'description' => sprintf(esc_html__('You may show ResumeX short video for better understanding', 'resume-x'), esc_html__('One Click Demo Import', 'resume-x')),
					'button_text' => esc_html__('Show video', 'resume-x'),
					'button_url'  => 'https://www.youtube.com/watch?v=LLcVqf_ORYs&t=15s',
					'button_type' => 'primary',
					'is_new_tab'  => true,
				),
				'five' => array(
					'title'       => esc_html__('Set Widgets', 'resume-x'),
					'icon'        => 'dashicons dashicons-tagcloud',
					'description' => esc_html__('Set widgets in your sidebar, Offcanvas as well as footer.', 'resume-x'),
					'button_text' => esc_html__('Add Widgets', 'resume-x'),
					'button_url'  => admin_url() . '/widgets.php',
					'button_type' => 'link',
					'is_new_tab'  => true,
				),
				'six' => array(
					'title'       => esc_html__('Theme Preview', 'resume-x'),
					'icon'        => 'dashicons dashicons-welcome-view-site',
					'description' => esc_html__('You can check out the theme demos for reference to find out what you can achieve using the theme and how it can be customized. Theme demo only work in pro theme', 'resume-x'),
					'button_text' => esc_html__('View Demo', 'resume-x'),
					'button_url'  => 'https://resumex.wpteamx.com/demos',
					'button_type' => 'link',
					'is_new_tab'  => true,
				),
				'seven' => array(
					'title'       => esc_html__('Contact Support', 'resume-x'),
					'icon'        => 'dashicons dashicons-sos',
					'description' => esc_html__('Got theme support question or found bug or got some feedbacks? Best place to ask your query is the dedicated Support forum for the theme.', 'resume-x'),
					'button_text' => esc_html__('Contact Support', 'resume-x'),
					'button_url'  => 'https://wpthemespace.com/support/',
					'button_type' => 'link',
					'is_new_tab'  => true,
				),
			),

			'useful_plugins'        => array(
				'description' => esc_html__('Theme supports some helpful WordPress plugins to enhance your site. But, please enable only those plugins which you need in your site. For example, enable WooCommerce only if you are using e-commerce.', 'resume-x'),
				'already_activated_message' => esc_html__('Already activated', 'resume-x'),
				'version_label' => esc_html__('Version: ', 'resume-x'),
				'install_label' => esc_html__('Install and Activate', 'resume-x'),
				'activate_label' => esc_html__('Activate', 'resume-x'),
				'deactivate_label' => esc_html__('Deactivate', 'resume-x'),
				'content'                   => array(
					array(
						'slug' => 'magical-addons-for-elementor',
						'icon' => 'svg',
					),
					array(
						'slug' => 'magical-products-display'
					),
					array(
						'slug' => 'magical-posts-display'
					),
					array(
						'slug' => 'click-to-top'
					),
					array(
						'slug' => 'gallery-box',
						'icon' => 'svg',
					),
					array(
						'slug' => 'magical-blocks'
					),
					array(
						'slug' => 'easy-share-solution',
						'icon' => 'svg',
					),
					array(
						'slug' => 'wp-edit-password-protected',
						'icon' => 'svg',
					),
				),
			),
			// Required actions array.
			'recommended_actions'        => array(
				'install_label' => esc_html__('Install and Activate', 'resume-x'),
				'activate_label' => esc_html__('Activate', 'resume-x'),
				'deactivate_label' => esc_html__('Deactivate', 'resume-x'),
				'content'            => array(
					'magical-blocks' => array(
						'title'       => __('Magical Addons', 'resume-x'),
						'description' => __('Now you can add or update your site elements very easily by Magical Addons. Supercharge your Elementor block with highly customizable Magical Addons.', 'resume-x'),
						'plugin_slug' => 'magical-products-display',
						'id' => 'magical-addons-for-elementor'
					),
					'go-pro' => array(
						'title'       => '<a target="_blank" class="activate-now button button-danger" href="https://wpthemespace.com/product/resumex-pro/?add-to-cart=6049">' . __('UPGRADE ResumeX PRO', 'resume-x') . '</a>',
						'description' => __('You will get more frequent updates and quicker support with the Pro version.', 'resume-x'),
						//'plugin_slug' => 'x-instafeed',
						'id' => 'go-pro'
					),

				),
			),
			// Free vs pro array.
			'free_pro'                => array(
				'free_theme_name'     => $xtheme_name,
				'pro_theme_name'      => $xtheme_name . __(' Pro', 'resume-x'),
				'pro_theme_link'      => 'https://wpthemespace.com/product/resumex-pro/?add-to-cart=6049',
				/* translators: View link */
				'get_pro_theme_label' => sprintf(__('Get %s', 'resume-x'), 'ResumeX Pro'),
				'features'            => array(
					array(
						'title'       => esc_html__('Daring Design for Devoted Readers', 'resume-x'),
						'description' => esc_html__('ResumeX\'s design helps you stand out from the crowd and create an experience that your readers will love and talk about. With a flexible home page you have the chance to easily showcase appealing content with ease.', 'resume-x'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Mobile-Ready For All Devices', 'resume-x'),
						'description' => esc_html__('ResumeX makes room for your readers to enjoy your articles on the go, no matter the device their using. We shaped everything to look amazing to your audience.', 'resume-x'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Home slider', 'resume-x'),
						'description' => esc_html__('ResumeX gives you extra slider feature. You can create awesome home slider in this theme.', 'resume-x'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Widgetized Sidebars To Keep Attention', 'resume-x'),
						'description' => esc_html__('ResumeX comes with a widget-based flexible system which allows you to add your favorite widgets over the Sidebar as well as on offcanvas too.', 'resume-x'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Auto Set-up Feature', 'resume-x'),
						'description' => esc_html__('You can import demo site only one click so you can setup your site like demo very easily.', 'resume-x'),
						'is_in_lite'  => 'ture',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Multiple Header Layout', 'resume-x'),
						'description' => esc_html__('ResumeX gives you extra ways to showcase your header with miltiple layout option you can change it on the basis of your requirement', 'resume-x'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('One Click Demo install', 'resume-x'),
						'description' => esc_html__('You can import demo site only one click so you can setup your site like demo very easily.', 'resume-x'),
						'is_in_lite'  => 'ture',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Extra Drag and drop support', 'resume-x'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Advanced Portfolio Filter', 'resume-x'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Testimonial Carousel', 'resume-x'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Diffrent Style Blog', 'resume-x'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Flexible Home Page Design', 'resume-x'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Pro Service Section', 'resume-x'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Animation Home Text', 'resume-x'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Advance Customizer Options', 'resume-x'),
						'description' => esc_html__('Advance control for each element gives you different way of customization and maintained you site as you like and makes you feel different.', 'resume-x'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Advance Pagination', 'resume-x'),
						'description' => esc_html__('Multiple Option of pagination via customizer can be obtained on your site like Infinite scroll, Ajax Button On Click, Number as well as classical option are available.', 'resume-x'),
						'is_in_lite'  => 'ture',
						'is_in_pro'   => 'true',
					),

					array(
						'title'       => esc_html__('Premium Support and Assistance', 'resume-x'),
						'description' => esc_html__('We offer ongoing customer support to help you get things done in due time. This way, you save energy and time, and focus on what brings you happiness. We know our products inside-out and we can lend a hand to help you save resources of all kinds.', 'resume-x'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('No Credit Footer Link', 'resume-x'),
						'description' => esc_html__('You can easily remove the Theme: ResumeX by ResumeX copyright from the footer area and make the theme yours from start to finish.', 'resume-x'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
				),
			),

		);

		resume_x_About::init($config);
	}

endif;

add_action('after_setup_theme', 'resume_x_about_setup');


function resume_x_pnotice_output()
{

?>
	<div class="mgadin-hero">
		<div class="mge-info-content">
			<div class="mge-info-hello">
				<?php
				$current_theme = wp_get_theme();
				$current_theme_name = $current_theme->get('Name');
				$current_user = wp_get_current_user();
				$demo_link = esc_url('https://wpthemespace.com/product/resumex-pro/');
				$pro_link = esc_url('https://wpthemespace.com/product/resumex-pro/?add-to-cart=6049');


				esc_html_e('Hello, ', 'resume-x');
				echo esc_html($current_user->display_name);
				?>

				<?php esc_html_e('👋🏻', 'resume-x'); ?>
			</div>
			<div class="mge-info-desc">
				<div><?php printf(esc_html__('Thanks for choosing %1$s. Upgrade to ResumeX Pro for an enhanced website-building experience! With our new auto-setup feature, activating the theme unlocks advanced features. In just a few clicks, you can create an impressive online presence to impress employers or clients. Upgrade to ResumeX Pro today and make your website shine like never before!', 'resume-x'), $current_theme_name); ?></div>
				<div class="mge-offer"><?php printf(esc_html__('Don\'t miss out! Supercharge your experience with the Pro version now and unlock the incredible value of our budget-friendly prices!', 'resume-x'), $current_theme_name); ?></div>
			</div>
			<div class="mge-info-actions">
				<a href="<?php echo esc_url($pro_link); ?>" target="_blank" class="button button-primary upgrade-btn">
					<?php esc_html_e('Upgrade Pro', 'resume-x'); ?>
				</a>
				<a href="<?php echo esc_url($demo_link); ?>" target="_blank" class="button button-primary demo-btn">
					<?php esc_html_e('View Demo', 'resume-x'); ?>
				</a>
				<button class="button button-info btnend"><?php esc_html_e('Dismiss this notice', 'resume-x') ?></button>
			</div>

		</div>

	</div>
<?php
}


//Admin notice 
function resume_x_new_optins_texts()
{
	$hide_date = get_option('resumex_info_dates');
	if (!empty($hide_date)) {
		$clickhide = round((time() - strtotime($hide_date)) / 24 / 60 / 60);
		if ($clickhide < 25) {
			return;
		}
	}


?>
	<div class="mgadin-notice notice notice-success mgadin-theme-dashboard mgadin-theme-dashboard-notice mge is-dismissible meis-dismissible">
		<?php resume_x_pnotice_output(); ?>
	</div>
<?php

}
add_action('admin_notices', 'resume_x_new_optins_texts');


function resume_x_new_optins_texts_init()
{
	if (isset($_GET['xbnotice']) && $_GET['xbnotice'] == 1) {
		update_option('resumex_info_dates', current_time('mysql'));
	}
}
add_action('init', 'resume_x_new_optins_texts_init');
