<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ImaginaryFilmFestival
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
                
                <!--registration form-->
                <?php echo do_shortcode( '[ninja_form id=3]' ); ?>
                
                <nav id="social-navigation" class="social-navigation" role="navigation">
           <?php
               wp_nav_menu( array(
                   'theme_location' => 'menu-social',
                   'menu_id'        => 'social-menu',
                                      'menu_class'     => 'social-menu',
                                      'link_before'     => '<span class="screen-reader-text">',
               ) );
           ?>
       </nav><!-- #social-navigation -->
            
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'iff' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'iff' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'iff' ), 'iff', '<a href="https://automattic.com/" rel="designer">WPStudent</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
