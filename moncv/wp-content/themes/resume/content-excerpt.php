<?php
/*
 * content-excerpt is the loop for excerpts such as blog snippets and portfolio display boxes
 * Please note that trackback rdf must stay in comment for XHTML 
 * to work with HTML. Do not remove comment element.
 * 
 * for theme ResuMe
 */

if (have_posts()) : while (have_posts()) : the_post(); ?>
<article class="large-5 columns" id="excerpt-content">
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
            
        <?php if ( get_theme_mod( 'resume_toggle_meta' ) == 1 ) : ?>
        <div class="hide"></div>
        
            <?php else : ?>
                <div class="hgroup">
                    <div class="entry-date">
                        <?php the_date('','<h4>','</h4>'); ?>
                    </div>
                </div>
                    <div class="metadata">
                        <?php _e( 'Filed under: ', 'resume' ); ?><span class="linkcat"> <?php the_category(',') ?> </span> - <?php the_author() ?> @ <?php the_time() ?> 
                        <?php edit_post_link(__( 'Edit This', 'resume' )); ?>
                    </div><!-- ends metadata -->
                    
        <?php endif; ?>
        </header>
            <div class="entry">
                <figure class="excerpt-thumb">
                
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); 
                    } ?>
                </figure>
                    <?php the_excerpt(); ?>
                        <p><?php the_tags(); ?></p>    
            </div>                 
            <!--
            <?php trackback_rdf(); ?>
            -->
    </div><!-- ends post -->
</article>

    <?php endwhile; else: ?>
        <div class="entry">
            <p><?php _e( 'No posts matched your criteria.', 'resume' ); ?></p>
        </div> 
        
<?php endif; ?>