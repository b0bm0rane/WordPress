<?php
/**
* The Sidebar containing the main widget areas.
* for theme ResuMe
* @since ResuMe 0.1
*/
if ( ! dynamic_sidebar( 'sidebar' ) ) : ?>
<div class="sidebar-container">
    <div class="meta-default">
    
        <?php get_search_form(); ?>
            
                <?php the_widget( 'WP_Widget_Pages', '', '' ); ?> 
                <?php the_widget( 'WP_Widget_Categories', '', '' ); ?>
                <hr>
                <ul><?php wp_loginout(); ?></ul>

    </div>
</div><!-- ends primary - widget-area -->

    <?php else : ?>
    <div class="sidebar-container">
    
        <?php dynamic_sidebar(); ?>
    </div><!-- ends primary - widget-area -->
    
<?php endif;  ?>