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
            the_title( '<h1 class="entry-title">', '</h1>' );
                ?>
    </header><!-- .entry-header -->
 
    <div class="entry-content">
        <?php
             
               the_content( sprintf(
                /* translators: %s: Name of current post. */
                wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'untouched' ), array( 'span' => array( 'class' => array() ) ) ),
                the_title( '<span class="screen-reader-text">"', '"</span>', false )
            ) );
                             
            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'iff' ),
                'after'  => '</div>',
            ) );
        ?>
            
    </div><!-- .entry-content -->
    
         
        <div class="entry-meta-data">
                <ul>
                    <li><b><span>Country: </span></b><?php esc_html(the_field('country')); ?></li>
                    <li><b><span>Director: </span></b><?php esc_html(the_field('director')); ?></li>
                    <li><b><span>Year: </span></b><?php esc_html(the_field('year')); ?></li>                   
                </ul>    
         </div>
                 
         
</article><!-- #post-## -->
