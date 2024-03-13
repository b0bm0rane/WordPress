<?php
/*
 * Use a child theme for customization (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes).
 * @package WordPress - n/a
 * @subpackage resume
 * @since resume 1.0
 * © 2014 Larry Judd, Tradesouthwest.com
 */
include_once get_template_directory() . '/theme-options.php';

function resume_setup() {
    
    // set width of external linked media players not defined
     global $content_width;
    if ( !isset( $content_width  ) ) {
        $content_width  = 720;
    }

    // custom editor style support
    add_editor_style( 'editor-style.css' );
    
    // This theme uses Featured Images (change size below by removing comment element)
    add_theme_support('post-thumbnails'); 
    //set_post_thumbnail_size( 150, 150 );

    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // add tag support to pages
    register_taxonomy_for_object_type('post_tag', 'page');

    // for WordPress 4.1 and above only
    add_theme_support( 'title-tag' ); 

    // language support - add your translation
    load_theme_textdomain('resume', get_template_directory() . '/languages');

    // This theme uses wp_nav_menu in one location.
    register_nav_menus(array(
        'primary' => __('Main Primary Navigation', 'resume')
        ));    
    if ( function_exists( 'register_block_style' ) ) {
    register_block_style(
        'core/quote',
        array(
            'name'         => 'resume-input-search-block',
            'label'        => __( 'Search Bar in Sidebar', 'resume' ),
            'is_default'   => true,
            'inline_style' => '.wp-block-input.is-style-resume-input-search { width: 90%; margin: 0 auto; }',
        )
    );
} 
}
add_action('after_setup_theme', 'resume_setup');

function resume_add_theme_scripts() {    
   
    // Loads default main stylesheet.
    wp_enqueue_style( 'style', get_stylesheet_uri() ); 
     /*
      * Adds JavaScript to pages with the comment form to support
      * sites with threaded comments (when in use).
      */
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
	wp_enqueue_script( 'comment-reply' );  
}
    add_action( 'wp_enqueue_scripts', 'resume_add_theme_scripts' );

    // add ie conditional html5 shim to header
function resume_add_ie_html5_shim () {
      echo "<!--[if lt IE 9]>\n";
        echo '<script src="', get_template_directory_uri() .'/js/html5shiv.js"></script>'."\n";
        echo '<meta http-equiv="X-UA-Compatible" content="IE=9"/>'."\n";
        echo "<![endif]-->\n";
}
    add_action('wp_head', 'resume_add_ie_html5_shim');

// compatibility for title tag support
if ( ! function_exists( '_wp_render_title_tag' ) ) :
    function resume_render_title() { ?>
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <?php
    }
    add_action( 'wp_head', 'resume_render_title' );
endif;

   /**
     * customer background color and image support 
     */
    add_theme_support( 'custom-background' );
    $args = array(
    'default-color' => 'FAFAFB',	
    );
    add_theme_support( 'custom-background', $args );
   
function resume_widgets_init() {
    register_sidebar(array(
        'name' => __('Primary Left Side', 'resume'),
        'id' => 'sidebar',
        'description' => __('The left-side widget area', 'resume'),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ));
}
add_action( 'widgets_init', 'resume_widgets_init' );

?>