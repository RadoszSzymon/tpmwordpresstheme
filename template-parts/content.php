<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ThePositiveMess
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h6 class="entry-title">', '</h6>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		    <div class="post-details">
                <time><?php the_date(); ?></time>
                <span>/</span>
                <span class="category_span"><?php the_category(', '); ?></span>
            </div>
		<?php
		endif; ?>
	</header><!-- .entry-header -->
	
	<?php if( has_post_thumbnail() ){ ?>
	<div class="post-image">
        <?php the_post_thumbnail(); ?>
    </div>
    <?php } ?>
    <div class="post-excerpt">
        <?php the_excerpt(); ?>
    </div>

</article><!-- #post-## -->
