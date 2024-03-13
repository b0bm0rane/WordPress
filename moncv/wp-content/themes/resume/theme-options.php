<?php
/**
 * Theme-Options invokes and adds options to Customizer
 * theme ResuMe
 */

// create function to sanitize boolean (checkboxes) 
function resume_sanitize_checkbox( $input ) {
	return absint( $input );
}
    
    // create new section for theme options
function resume_customize_register( $wp_customize ) {

    $wp_customize->add_section( 'resume_support_section' , array(

    'title'       => __( 'Theme Support', 'resume' ),

    'priority'    => 150,

    'description' => __( 'Theme built by Tradesouthwest', 'resume' ),

    ) );

    $wp_customize->add_section( 'resume_options_section' , array(

    'title'       => __( 'Theme Information', 'resume' ),

    'priority'    => 30,

    'description' => __( 'Upload logo, Set print style, Toggle assets', 'resume' ),

    ) );

    /** Section =Theme Options 
     *  @since version 0.3
     */
    // theme author message link
    $wp_customize->add_setting( 'resume_support', array(
        'sanitize_callback' => 'esc_raw_url',
        'default'           => 'Tradesouthwest.com',
    ) );
    $wp_customize->add_control( 'resume_support', array(
        'label'       => __( 'For Theme Modifications: ', 'resume' ),
        'description' => '<a href="mailto:themes@tradesouthwest.com">themes@tradesouthwest.com</a>',         
        'section'     => 'resume_support_section',
        'settings'    => 'resume_support', 
        'type'        => 'hidden', 
     ) );

    // logo upload option
    $wp_customize->add_setting( 'resume_logo', array(
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control(
    $wp_customize, 'resume_logo', array(
        'label'    => __( 'Logo', 'resume' ),
        'section'  => 'resume_options_section',
        'settings' => 'resume_logo',
    ) ) );

    // toggle metatdata
    $wp_customize->add_setting( 'resume_toggle_meta', array( 
        'sanitize_callback' => 'resume_sanitize_checkbox',
        'default'           => false,
    ) );
    $wp_customize->add_control( new WP_Customize_Control(
    $wp_customize, 'resume_toggle_meta', array(
        'label'    => __( 'Check to Hide Header Info', 'resume' ),
        'section'  => 'resume_options_section',
        'settings' => 'resume_toggle_meta',
        'type'     => 'checkbox',
    ) ) );

    // toggle comments
    $wp_customize->add_setting( 'resume_comments_off', array( 
       'sanitize_callback' => 'resume_sanitize_checkbox',
        'default'          => false,
    ) );
    $wp_customize->add_control( new WP_Customize_Control(
    $wp_customize, 'resume_comments_off', array(
        'label'    => __( 'Check to Hide Comments Form', 'resume' ),
        'section'  => 'resume_options_section',
        'settings' => 'resume_comments_off',
        'type'     => 'checkbox',
    ) ) );

    // toggle sidebar print
    $wp_customize->add_setting( 'resume_sidebar_print', array( 
        'sanitize_callback' => 'resume_sanitize_checkbox',
        'default'           => false,
    ) );
    $wp_customize->add_control( new WP_Customize_Control(
    $wp_customize, 'resume_sidebar_print', array(
        'label'       => __( 'Check to Hide Sidebar from Printing', 'resume' ),
        'description' => __( 'Only effects print output, not browser', 'resume' ),
        'section'     => 'resume_options_section',
        'settings'    => 'resume_sidebar_print',
        'type'        => 'checkbox',
    ) ) );

    // link colors
    $wp_customize->add_setting( 'resume_link', array( 
        'sanitize_callback' => 'sanitize_hex_color',
        'default'           => '#0055aa',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'resume_link', array(
        'label'    => __( 'Link colors', 'resume' ),
        'section'  => 'colors',
        'settings' => 'resume_link',
    ) ) );

    // sidebar color
    $wp_customize->add_setting( 'resume_side_color', array( 
        'sanitize_callback' => 'sanitize_hex_color',
        'default'           => '#7a7a7a',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'resume_side_color', array(
        'label'    => __( 'Sidebar Background Color', 'resume' ),
        'section'  => 'colors',
        'settings' => 'resume_side_color',
    ) ) );

    // sidebar text color
    $wp_customize->add_setting( 'resume_text_color', array( 
        'sanitize_callback' => 'sanitize_hex_color',
        'default'           => '#ffffff',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'resume_text_color', array(
        'label'    => __( 'Sidebar Text Color', 'resume' ),
        'section'  => 'colors',
        'settings' => 'resume_text_color',
    ) ) );
    
}
add_action( 'customize_register', 'resume_customize_register' );

/** now put the options to work in theme
 */

// styles added to header
function resume_customize_css() {
?>
    <style type="text/css">
        a { color:<?php esc_attr_e( get_theme_mod('resume_link', '#0055aa' ) ); ?>; }
        #sidebar-content { background-color:<?php esc_attr_e( get_theme_mod( 'resume_side_color', '#7a7a7a' ) ); ?>; }
        #sidebar-content, .widgettitle, h2.site-description { color:<?php esc_attr_e( get_theme_mod( 'resume_text_color', '#ffffff' ) ); ?>; }
    @media print {
        <?php if( esc_attr( get_theme_mod('resume_sidebar_print') ) == 1 ) : ?>
        .large-3.columns#sidebar-content, section.sidebar-content { display: none !important; }
        #main { width: 94%; margin: 0 auto; }
        <?php endif; ?>
    }
    </style>
<?php
}
add_action( 'wp_head', 'resume_customize_css');