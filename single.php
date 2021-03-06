<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ThePositiveMess
 */

get_header(); ?>

	<div class="container blog">
        <div class="row" id="primary">
            <main id="content" class="col-md-8" role="main"> 

                <?php
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content-page', get_post_format() );

                    

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>
            
            </main>
            
            <aside class="col-md-4 sidebar">
                <?php get_sidebar(); ?>
            </aside>
        </div>
    </div>

<?php
get_footer();
