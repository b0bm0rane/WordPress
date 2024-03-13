<?php
/*
 * comments.php - The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 * 
 * for theme ResuMe
 * @since ResuMe 0.5
 */
    if ( post_password_required() )
        return;
if ( get_theme_mod( 'resume_comments_off' ) == 1 ) : ?>
<div class="hide"></div>

<?php else : ?>
    <aside id="comments">   

    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title"><?php get_the_title() ?></h2>

                <ol class="commentlist">
                <?php wp_list_comments(); ?>
                </ol><!-- ends commentlist -->
                
                <div class="navigation">
                  <div class="alignleft"><?php previous_comments_link() ?></div>
                  <div class="alignright"><?php next_comments_link() ?></div>
                </div>
                
        <?php else : // this is displayed if there are no comments so far ?>
	    <?php if ( comments_open() ) : ?>
		<!-- <small></small> -->
		
	<?php else : // then this if comments are closed ?>
                <!-- <small></small> -->
	        
	    <?php endif;
    endif; // end have_comments() ?>
    
        <?php comment_form(); ?><hr>      
    </aside><!-- ends comments-area -->
    
<?php endif; ?>