<?php
/*
 * content-nav includes sidebar and menus in this theme
 * for theme ResuMe
 */
?>
<section class="sidebar-content">
    <header id="site-header" role="banner">
        <figure class="branding">   
            <?php if( get_theme_mod( 'resume_logo') ) : ?>
            <div class='site-logo'>
                <a href='<?php echo esc_url( home_url( '/' ) ); ?>'title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'rel='home'><img src='<?php echo esc_url( get_theme_mod( 'resume_logo' ) ); ?>'alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
            </div>
            <?php endif; ?>
        </figure> 
            <div id="hgroup">	
                <h1 class="site-title"><a href="<?php echo esc_url( home_url() ); ?>/"><?php bloginfo('name'); ?></a></h1>
                <h2 class="site-description"><?php bloginfo('description'); ?></h2>	
            </div>
    </header>
        <div id="access" role="navigation">

        <?php // uncomment for screen readers ?>
        <!-- <div class="skip-link screen-reader-text">
        <a href="#content" title="<?php esc_attr_e( 'Skip to content', 'resume' ); ?>"><?php _e( 'Skip to content', 'resume' ); ?></a>
        </div> -->

            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </div><!-- ends access# -->
        
            <?php get_sidebar(); ?>
</section>