<?php
/*
 * page - The pages template.
 * theme ResuMe
 */ 
get_header(); ?>
    <section class="row">
        <div class="large-3 columns" id="sidebar-content">
        
            <?php get_template_part( 'content', 'nav' ); ?>
        </div><!-- ends content left -->
            <div id="main" class="large-8 columns" role="main">
            
                <?php get_template_part( 'content' ); ?> 
                    <div class="autohide">
                    
                        <?php comments_template(); ?>
                    </div>
            </div><!-- ends main -->
    </section>
    
<?php get_footer(); ?>