<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package subsimple
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
      <div id="footer-container">	
		<div class="site-info">
			<?php do_action( 'subsimple_credits' ); ?>
            <div id="footer-navigation"><?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?></div>
			 <div id="wordpress-credit"><a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'subsimple' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'subsimple' ), 'WordPress' ); ?></a>
             </div>
		</div><!-- .site-info -->
      </div>  
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>