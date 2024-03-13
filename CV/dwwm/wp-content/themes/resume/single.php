<?php
/*
 * file name single
 * The template to show single post pages.
 * for theme "ResuMe"
 */ 
get_header(); ?>
    <section class="row">
        <div class="large-3 columns" id="sidebar-content">
        
            <?php get_template_part( 'content', 'nav' ); ?>
        </div><!-- ends content left -->
            <div id="main" class="large-8 columns" role="main">
            
                <?php get_template_part( 'content' ); ?> 
                
                    <?php get_template_part( 'page-nav' ); ?>
                        <div class="autohide">
                        
                            <?php comments_template(); ?>
                        </div>
            </div><!-- ends main -->
    </section>
    
<?php get_footer(); ?>