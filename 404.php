<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ImaginaryFilmFestival
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'iff' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">

                                    <?php get_search_form();?>
                                    
                                    <h2>Recent Posts</h2>
                                    <div class="articles">
                                        
                                        
                                        <?php
                                        /* HIGH RES MOVIES QUERY */
                                          $movies_query = new WP_Query( array(
                                                                'orderby' => 'post_date',
                                                                'order' => 'DESC',
                                                                'posts_per_page' => '4',
                                              	'exclude' => 'contact',
                                        ) );

                                        if ( $movies_query->have_posts() ) :

                                                /* Start the Loop */
                                                while ( $movies_query->have_posts() ) : $movies_query->the_post();

                                                        /*
                                                         * Include the Post-Format-specific template for the content.
                                                         * If you want to override this in a child theme, then include a file
                                                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                                         */
                                                        get_template_part( 'template-parts/content', 'home' );

                                                endwhile;

                //                                the_posts_navigation();

                                        else :

                                                get_template_part( 'template-parts/content', 'none' );

                                        endif; 
                                        wp_reset_postdata();

                                        ?>
                                    </div>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
