<?php
/*
* archive.php
* The archive template. Used when a category, author, or date is queried. 
* Note that this template will be overridden by category.php, author.php, and date.php for their respective query types. 
*/
get_header(); ?>

    <section class="row">
        <div class="large-3 columns" id="sidebar">
        
                <?php get_template_part( 'content', 'nav' ); ?>
                
        </div><!-- ends content left -->
            <div id="main" class="large-8 columns" role="main">
            
                <?php get_template_part( 'content', 'excerpt' ); ?> 
                
                    <div class="autohide">
                    
                        <?php comments_template(); ?>
                        
                    </div>
            </div><!-- ends main -->
    </section>
    
<?php get_footer(); ?>