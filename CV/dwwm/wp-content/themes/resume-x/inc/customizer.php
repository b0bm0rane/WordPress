<?php

/**
 * resume X Theme Customizer
 *
 * @package resume X
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function resume_x_customize_register($wp_customize)
{
	$wp_customize->get_setting('blogname')->transport         = 'postMessage';
	$wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
	$wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

	//select sanitization function
	function resume_x_sanitize_select($input, $setting)
	{
		$input = sanitize_key($input);
		$choices = $setting->manager->get_control($setting->id)->choices;
		return (array_key_exists($input, $choices) ? $input : $setting->default);
	}
	function resume_x_sanitize_image($file, $setting)
	{
		$mimes = array(
			'jpg|jpeg|jpe' => 'image/jpeg',
			'gif'          => 'image/gif',
			'png'          => 'image/png',
			'bmp'          => 'image/bmp',
			'tif|tiff'     => 'image/tiff',
			'ico'          => 'image/x-icon'
		);
		//check file type from file name
		$file_ext = wp_check_filetype($file, $mimes);
		//if file has a valid mime type return it, otherwise return default
		return ($file_ext['ext'] ? $file : $setting->default);
	}

	/* Header settings */
	$wp_customize->add_section('resume_x_general', array(
		'title' => __('General Settings', 'resume-x'),
		'capability'     => 'edit_theme_options',
		'description'     => __('resume X theme general settings', 'resume-x'),
		'panel'    => 'resume_x_settings',

	));
	$wp_customize->add_setting('resume_x_blog_container', array(
		'default'        => 'container',
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'sanitize_callback' => 'resume_x_sanitize_select',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('resume_x_blog_container', array(
		'label'      => __('Container type', 'resume-x'),
		'description' => __('You can set standard container or full width container. ', 'resume-x'),
		'section'    => 'resume_x_general',
		'settings'   => 'resume_x_blog_container',
		'type'       => 'select',
		'choices'    => array(
			'container' => __('Standard Container', 'resume-x'),
			'container-fluid' => __('Full width Container', 'resume-x'),
		),
	));


	// profile area settings
	$wp_customize->add_panel('resume_x_settings', array(
		'priority'       => 50,
		'title'          => __('resume X Theme settings', 'resume-x'),
		'description'    => __('All resume X theme settings', 'resume-x'),
	));
	$wp_customize->add_section('resumex_profile', array(
		'title' => __('Resume X Profile Settings', 'resume-x'),
		'capability'     => 'edit_theme_options',
		'description'     => __('Resume X theme profile settings', 'resume-x'),
		'panel'    => 'resume_x_settings',
	));
	$wp_customize->add_setting('resumex_psec_show', array(
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'default'       =>  true,
		'sanitize_callback' => 'absint',
		'transport'     => 'refresh',
	));
	$wp_customize->add_control('resumex_psec_show', array(
		'label'      => __('Show Profile Area? ', 'resume-x'),
		'section'    => 'resumex_profile',
		'settings'   => 'resumex_psec_show',
		'type'       => 'checkbox',
	));
	$wp_customize->add_setting('resumex_pimg', array(
		'capability'        => 'edit_theme_options',
		'default'           => '',
		'sanitize_callback' => 'resume_x_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control(
		$wp_customize,
		'resumex_pimg',
		array(
			'label'    => __('Upload Profile Image', 'resume-x'),
			'description'    => __('Image size should be 380px width & 320px height for better view.', 'resume-x'),
			'section'  => 'resumex_profile',
			'settings' => 'resumex_pimg',
		)
	));
	$wp_customize->add_setting('resumex_profile_title', array(
		'default' => __('Alex Smith Doe', 'resume-x'),
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('resumex_profile_title', array(
		'label'      => __('Profile Title', 'resume-x'),
		'section'    => 'resumex_profile',
		'settings'   => 'resumex_profile_title',
		'type'       => 'text',
	));
	$wp_customize->add_setting('resumex_profile_subtitle', array(
		'default' => __('Senior WordPress Developer', 'resume-x'),
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('resumex_profile_subtitle', array(
		'label'      => __('Profile Sub Title', 'resume-x'),
		'section'    => 'resumex_profile',
		'settings'   => 'resumex_profile_subtitle',
		'type'       => 'text',
	));
	$wp_customize->add_setting('resumex_fblink', array(
		'default' => '#',
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'sanitize_callback' => 'esc_url_raw',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('resumex_fblink', array(
		'label'      => __('Facebook Url', 'resume-x'),
		'section'    => 'resumex_profile',
		'settings'   => 'resumex_fblink',
		'type'       => 'url',
	));
	$wp_customize->add_setting('resumex_instalink', array(
		'default' => '#',
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'sanitize_callback' => 'esc_url_raw',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('resumex_instalink', array(
		'label'      => __('Instagram Url', 'resume-x'),
		'section'    => 'resumex_profile',
		'settings'   => 'resumex_instalink',
		'type'       => 'url',
	));
	$wp_customize->add_setting('resumex_twitlink', array(
		'default' => '#',
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'sanitize_callback' => 'esc_url_raw',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('resumex_twitlink', array(
		'label'      => __('Twitter Url', 'resume-x'),
		'section'    => 'resumex_profile',
		'settings'   => 'resumex_twitlink',
		'type'       => 'url',
	));
	$wp_customize->add_setting('resumex_youlink', array(
		'default' => '#',
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'sanitize_callback' => 'esc_url_raw',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('resumex_youlink', array(
		'label'      => __('Youtube Url', 'resume-x'),
		'section'    => 'resumex_profile',
		'settings'   => 'resumex_youlink',
		'type'       => 'url',
	));
	$wp_customize->add_setting('resumex_inlink', array(
		'default' => '#',
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'sanitize_callback' => 'esc_url_raw',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('resumex_inlink', array(
		'label'      => __('Linkedin Url', 'resume-x'),
		'section'    => 'resumex_profile',
		'settings'   => 'resumex_inlink',
		'type'       => 'url',
	));
	$wp_customize->add_setting('resumex_btntext', array(
		'default' => __('Contact Me', 'resume-x'),
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('resumex_btntext', array(
		'label'      => __('Button Text', 'resume-x'),
		'section'    => 'resumex_profile',
		'settings'   => 'resumex_btntext',
		'type'       => 'text',
	));
	$wp_customize->add_setting('resumex_btnlink', array(
		'default' => '#',
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'sanitize_callback' => 'esc_url_raw',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('resumex_btnlink', array(
		'label'      => __('Button Url', 'resume-x'),
		'section'    => 'resumex_profile',
		'settings'   => 'resumex_btnlink',
		'type'       => 'url',
	));


	//resume-x blog settings
	$wp_customize->add_section('resume_x_blog', array(
		'title' => __('resume X Blog Settings', 'resume-x'),
		'capability'     => 'edit_theme_options',
		'description'     => __('resume X theme blog settings', 'resume-x'),
		'panel'    => 'resume_x_settings',

	));
	$wp_customize->add_setting('resume_x_blog_layout', array(
		'default'        => 'fullwidth',
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'sanitize_callback' => 'resume_x_sanitize_select',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('resume_x_blog_layout', array(
		'label'      => __('Select Blog Layout', 'resume-x'),
		'description' => __('Right and Left sidebar only show when sidebar widget is available. ', 'resume-x'),
		'section'    => 'resume_x_blog',
		'settings'   => 'resume_x_blog_layout',
		'type'       => 'select',
		'choices'    => array(
			'rightside' => __('Right Sidebar', 'resume-x'),
			'leftside' => __('Left Sidebar', 'resume-x'),
			'fullwidth' => __('No Sidebar', 'resume-x'),
		),
	));
	$wp_customize->add_setting('resumex_blogdate_show', array(
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'default'       =>  true,
		'sanitize_callback' => 'absint',
		'transport'     => 'refresh',
	));
	$wp_customize->add_control('resumex_blogdate_show', array(
		'label'      => __('Show Blog Date? ', 'resume-x'),
		'section'    => 'resume_x_blog',
		'settings'   => 'resumex_blogdate_show',
		'type'       => 'checkbox',
	));

	//resume-x page settings
	$wp_customize->add_section('resume_x_page', array(
		'title' => __('resume X Page Settings', 'resume-x'),
		'capability'     => 'edit_theme_options',
		'description'     => __('resume X theme blog settings', 'resume-x'),
		'panel'    => 'resume_x_settings',

	));
	$wp_customize->add_setting('resume_x_page_header', array(
		'default'        => 'show',
		'capability'     => 'edit_theme_options',
		'type'           => 'theme_mod',
		'sanitize_callback' => 'resume_x_sanitize_select',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('resume_x_page_header', array(
		'label'      => __('Show Page header', 'resume-x'),
		'section'    => 'resume_x_page',
		'settings'   => 'resume_x_page_header',
		'type'       => 'select',
		'choices'    => array(
			'show' => __('Show all pages', 'resume-x'),
			'hide-home' => __('Hide Only Front Page', 'resume-x'),
			'hide' => __('Hide All Pages', 'resume-x'),
		),
	));




	if (isset($wp_customize->selective_refresh)) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'resume_x_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'resume_x_customize_partial_blogdescription',
			)
		);
	}
}
add_action('customize_register', 'resume_x_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function resume_x_customize_partial_blogname()
{
	bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function resume_x_customize_partial_blogdescription()
{
	bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function resume_x_customize_preview_js()
{
	wp_enqueue_script('resume-x-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array('customize-preview'), RESUME_X_VERSION, true);
}
add_action('customize_preview_init', 'resume_x_customize_preview_js');
