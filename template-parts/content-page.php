<?php
/**
 * Template part for displaying page content in page.php.
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
				the_title( '<h3 class="entry-title">', '</h3>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		    <div class="post-details">
                <time><?php the_date(); ?></time>
                <span>&middot;</span>
                <?php the_category(', '); ?>
                <span>&middot;</span>
                <?php the_tags(); ?>
            </div>
		<?php
		endif; ?>
	</header><!-- .entry-header -->
	
	<?php if( has_post_thumbnail() ){ ?>
	<div class="post-image">
        <?php the_post_thumbnail(); ?>
    </div>
    <?php } ?>
    <div class="post-body">
        <?php the_content(); ?>
    </div>
    
</article><!-- #post-## -->
