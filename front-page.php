<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ImaginaryFilmFestival
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
                    
                    <!--Showing This Year ==========================-->
                    <h2 class="section-heading"><span>Showing This Year</span></h2>
                    
                    <div class="articles">
                        <?php
                        /* HIGH RES MOVIES QUERY */
                          $movies_query = new WP_Query( array(
                                                'tag' => 'high-definition',
                                                'posts_per_page' => '40',
                                                'orderby' => 'rand',
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
                    
                    <!--Hall of Fame ==========================-->
                    <h2 class="section-heading"><span>Hall of Fame</span></h2>
                    
                    <div class="articles">
                        <?php
                        /* HIGH RES MOVIES QUERY */
                          $low_res_movies_query = new WP_Query( array(
                            'tag' => 'regular-definition', 
                            'posts_per_page' => '6',
                            'orderby' => 'rand',
                        ) );

                        if ( $low_res_movies_query->have_posts() ) :

                                /* Start the Loop */
                                while ( $low_res_movies_query->have_posts() ) : $low_res_movies_query->the_post();

                                        /*
                                         * Include the Post-Format-specific template for the content.
                                         * If you want to override this in a child theme, then include a file
                                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                         */
                                        get_template_part( 'template-parts/content', 'home' );

                                endwhile;

    //                            the_posts_navigation();

                        else :

                                get_template_part( 'template-parts/content', 'none' );

                        endif; 
                        wp_reset_postdata();

                        ?>
                    </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
