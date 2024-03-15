<?php

get_header();

if ( have_posts() ) : 
    while( have_posts() ) : 

        the_post();

        ?>

            <h2><?php the_title(); ?></h2>
            <h2><?php the_content(); ?></h2>
            <h2><?php the_date(); ?></h2>
            <h2><?php the_time(); ?></h2>
            <!-- <h2><?php echo get_the_title(); ?></h2> retourne en + la valeur -->

        <?php
    
    endwhile;
endif;

get_footer();
