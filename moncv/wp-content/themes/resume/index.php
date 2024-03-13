<?php
/*
 * index
 * The template to show blog if it is the home page. Otherwise is used for all pages without a hierarchy template
 * theme ResuMe
 */ 
get_header(); ?>
    <section class="row">
        <div class="large-3 columns" id="sidebar-content">

            <?php get_template_part( 'content', 'nav' ); ?>
        </div><!-- ends content left -->
            <div id="main" class="large-8 columns" role="main">

                <?php get_template_part( 'content', 'excerpt' ); ?> 
                    <div class="autohide">

                        <?php comments_template(); ?>
                    </div>

                        <?php get_template_part( 'page-nav' ); ?>
            </div><!-- ends main -->
    </section>

<?php get_footer(); ?>