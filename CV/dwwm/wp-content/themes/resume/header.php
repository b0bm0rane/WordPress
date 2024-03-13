<?php
/*
 * Use a child theme for customization (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes).
 * @package WordPress - n/a
 * @subpackage resume
 * @since resume 0.1
 * © 2014 Larry Judd, Tradesouthwest.com
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php //wp_body_open hook if WordPress 5.2
    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    } ?>
<a class="skip-link screen-reader-text" href="#main">
<?php esc_attr_e( 'Skip to content', 'resume' ); ?></a>