<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package bizmo
 */
?>

	</div><!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php 	
		if ( !function_exists( 'bizmo_footer' ) ) {?>
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'bizmo' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'bizmo' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'bizmo' ), 'Bizmo', '<a href="http://storefrontthemes.com/" rel="designer">Storefront Themes</a>' ); ?>
			</div><!-- .site-info -->
		<?php } else {bizmo_footer();} ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
