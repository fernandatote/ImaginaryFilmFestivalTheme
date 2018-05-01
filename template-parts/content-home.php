<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ImaginaryFilmFestival
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php
        if ( is_single() ) :
            the_title( '<h1 class="entry-title">', '</h1>' );
        else :
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        endif;
              
        ?>
    </header><!-- .entry-header -->
 
    <div class="entry-content">
        <a href="<?php esc_url( the_permalink() ); ?>">
            <?php the_post_thumbnail();?>
        </a>
    </div><!-- .entry-content -->
 
    <footer class="entry-footer">
        <?php the_category(' &bull; '); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
