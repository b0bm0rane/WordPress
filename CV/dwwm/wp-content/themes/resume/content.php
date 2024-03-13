<?php
/*
 * content - runs the loop!
 * Please note that trackback rdf must stay in comment for XHTML 
 * to work with HTML. Do not remove comment element.
 * for theme ResuMe
 */
?>
<section id="content">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <article class="content-area">
            <h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
            
                <?php if ( get_theme_mod( 'resume_toggle_meta' ) == 1 ) : ?>
                <div class="hide"></div>
                
                <?php else : ?>
                <div class="entry-header">
                    <div class="hgroup">
                        <div class="entry-date">
                        <?php the_date('','<h4>','</h4>'); ?>
                        </div>
                    </div>
                        <div class="metadata">
                            <?php _e( 'Filed under: ', 'resume' ); ?><span class="linkcat"> <?php the_category(',') ?> </span> - <?php the_author() ?> @ <?php the_time() ?> <?php edit_post_link( __( 'Edit This', 'resume' ) ); ?>
                        </div><!-- ends metadata -->
                </div>
                
                <?php endif; // ends hiding metadata ?>
                    <div class="entry">
                        <figure class="header-thumb">
                        
                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail( ); 
                            } ?>
                        </figure>
                            <?php the_content(); ?><div class="clearfix"><br></div>
                                <p><?php the_tags(); ?></p>
                                    <p class="pagination"><?php wp_link_pages(); ?></p> 
                    </div>         
            <!--
            <?php trackback_rdf(); ?>
            -->
        </article><div class="clearfix"></div>
    </div><!-- ends post -->
    
        <?php endwhile; else: ?>
        <div class="content-area">
            <p><?php _e( 'No posts matched your criteria.', 'resume' ); ?></p>
        </div>    
                
    <?php endif; ?>
</section>