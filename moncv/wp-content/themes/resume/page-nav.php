<?php
/*
 * page-nav - conditional navigation for pages and posts
 * @since resume 0.4
 */
 ?>
<div class="clearfix"></div>
    <div id="hidden-links">
        <p class="pagination"><?php echo paginate_links(); ?></p>
    </div>
    
    <?php if( is_single() ) { ?>
    <nav id="navigation">
        <p><?php previous_post_link();  ?> <span> &#8656; <?php _e( 'More Pages', 'resume' ); ?> &#8658; <?php next_post_link(); ?></span></p>
    </nav>
    
    <?php } elseif( is_category() || is_tag() || is_archive() ) { ?>
        <nav id="navigation">
            <p><?php posts_nav_link(); ?></p>
        </nav>
        
            <?php } else { echo '<hr>'; } ?>