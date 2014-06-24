<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->

	<div id="footer" role="contentinfo">
		<div id="colophon">

<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>

			<div id="site-info">
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>
			</div><!-- #site-info -->

			<div id="site-generator">
				<?php do_action( 'twentyten_credits' ); ?>
				<a href="http://tandemlegal.mx/publicaciones/wp-admin/" title="Administrador del sitio" rel="generator">Administrador</a>
			</div><!-- #site-generator -->


			<!--<div id="site-generator">
				<?php do_action( 'twentyten_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyten' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyten' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s.', 'twentyten' ), 'WordPress' ); ?></a>
			</div><!-- #site-generator -->

		</div><!-- #colophon -->
	</div><!-- #footer -->

</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
<p><br></p>
<div id="bottompropio" align="center">
  <br />
  <table width="790" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td><a href="../index.php" class="ligabottom">INICIO</a> | <a href="../nosotros.php" class="ligabottom">NOSOTROS</a> | <a href="../servicios.php" class="ligabottom">SERVICIOS</a> | <a href="#" class="ligabottom">PUBLICACIONES</a> | <a href="../contacto.php" class="ligabottom">CONTACTO</a></td>
      <td align="right">TANDEM CONSULTORES LEGALES    &copy; 2011   DERECHOS RESERVADOS </td>
    </tr>
  </table>
</div>
</body>
</html>
