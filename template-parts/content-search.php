<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ImaginaryFilmFestival
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

	
	</header><!-- .entry-header -->
        
        <div class="entry-content">
            <a href="<?php esc_url( the_permalink() ); ?>">
                <?php the_post_thumbnail();?>
            </a>
        </div><!-- .entry-content -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

        <footer class="entry-footer">
                <?php the_category(' &bull; '); ?>
            </footer><!-- .entry-footer -->
</article><!-- #post-## -->
