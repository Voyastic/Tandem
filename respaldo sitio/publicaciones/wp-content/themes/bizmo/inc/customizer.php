<?php
/**
 * bizmo Theme Customizer
 *
 * @package bizmo
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function bizmo_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	if ( isset( $_GET['resetmods'] ) ) {
		remove_theme_mods();
	}
	
	/* Add a custom class for reset button */
	class bizmo_Customize_Reset_Control extends WP_Customize_Control {
		public $type = 'reset_button';
	
		public function render_content() {
			?>
			<form action="customize.php" method="get">
			<label>
			<span style="font-weight:normal;margin-bottom:10px;" class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<input type="submit" class="reset-button button-secondary" name="resetmods" value="<?php esc_attr_e( 'Reset Theme Mods', 'bizmo' ); ?>" onclick="return confirm( '<?php print esc_js( __( 'Click OK to reset. Any theme mods you have set in the Theme Customizer will be lost!', 'bizmo' ) ); ?>' );" />
			</label>
			</form>
			<?php
		}
	}
	
	/* Add a custom class for support tab */
	class bizmo_Customize_Support_Control extends WP_Customize_Control {
		public $type = 'support_tab';
	
		public function render_content() {
			?>
			<h3><?php esc_attr_e( 'Welcome to Bizmo!', 'bizmo' ); ?></h3>
			<p><?php esc_attr_e( 'We\'ve released this theme as a free theme and have a video tutorial to help you get up and running with it. To watch the video, simply visit the theme\'s homepage using the button below.', 'bizmo' ); ?></p>
			<a class="button-secondary" href="http://storefrontthemes.com/themes/bizmo"><?php esc_attr_e( 'Learn More', 'bizmo' ); ?></a>
			<p><?php esc_attr_e( 'We also offer a Pro plugin that enhances this theme with custom logo upload, footer widget areas, eCommerce features and premium level support. Simply click on the button below to learn more.', 'bizmo' ); ?></p>
			<a class="button-primary" href="http://storefrontthemes.com/membership-signup/"><?php esc_attr_e( 'Get Support', 'bizmo' ); ?></a>
			<?php
		}
	}
	
	do_action('bizmo_add_to_customizer');
	
}
add_action( 'customize_register', 'bizmo_customize_register' );

/*
==================================================================
SITE COLORS
==================================================================
*/
add_action('bizmo_add_to_customizer','bizmo_colors_customizer_options');
function bizmo_colors_customizer_options($wp_customize) {
	global $wp_customize;
	/*$wp_customize->add_section( 'color_settings', array(
		'title'          => 'Color Scheme',
		'priority'       => 140,
		'description'    => __( 'Choose colors for your theme.', 'bizmo' ),
	) );*/
	
	/* Nav Color */
	$wp_customize->add_setting( 'nav_color', array(
		'default'        => '#024959',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_color', array(
		'label'   => 'Nav/Top Bar Color',
		'section' => 'colors',
		'settings'   => 'nav_color',
		'priority'       => 10,
	) ) );
	
	/* Header Color */
	$wp_customize->add_setting( 'header_color', array(
		'default'        => '#037E8C',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_color', array(
		'label'   => 'Header Color',
		'section' => 'colors',
		'settings'   => 'header_color',
		'priority'       => 20,
	) ) );

	/* Button/Link Color */
	$wp_customize->add_setting( 'button_color', array(
		'default'        => '#F24C27',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_color', array(
		'label'   => 'Button/Link Color',
		'section' => 'colors',
		'settings'   => 'button_color',
		'priority'       => 30,
	) ) );
	
	/* Footer Color */
	$wp_customize->add_setting( 'footer_color', array(
		'default'        => '#404040',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_color', array(
		'label'   => 'Footer Color',
		'section' => 'colors',
		'settings'   => 'footer_color',
		'priority'       => 40,
	) ) );

}// END COLOR SETTINGS

/*
==================================================================
RESET CONTROL
==================================================================
*/
add_action('bizmo_add_to_customizer','bizmo_reset_customizer_options');
function bizmo_reset_customizer_options($wp_customize) {
	global $wp_customize;
	/* Reset Theme Mods */
	$wp_customize->add_section( 'reset_settings', array(
		'title'          => 'Reset Theme Mods',
		'priority'       => 9998,
	) );	
	
	$wp_customize->add_setting( 'reset_button', array(
		'default'        => '',
		'sanitize_callback' => 'bizmo_reset_button'
	) );
	
	$wp_customize->add_control( new bizmo_Customize_Reset_Control( $wp_customize, 'reset_button', array(
		'label'   => 'Reset all theme mods made for this theme to their default values by clicking the button below.',
		'section' => 'reset_settings',
		'settings'   => 'reset_button',
		'priority'       => 45,
	) ) );
	
}// END RESET CONTROL

/*
==================================================================
SUPPORT TAB
==================================================================
*/
add_action('bizmo_add_to_customizer','bizmo_support_customizer_options');
function bizmo_support_customizer_options($wp_customize) {
	global $wp_customize;
	/* Support */
	$wp_customize->add_section( 'support_settings', array(
		'title'          => 'Theme Support',
		'priority'       => 9999,
	) );
	
	$wp_customize->add_setting( 'support_tab', array(
		'sanitize_callback' => 'sanitize_text_field'
	) );
	
	$wp_customize->add_control( new bizmo_Customize_Support_Control( $wp_customize, 'support_tab', array(
		'label'   => 'Theme Support',
		'section' => 'support_settings',
		'settings'    => 'support_tab',
		'priority'       => 1,
	) ) );
}// END SUPPORT TAB

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function bizmo_customize_preview_js() {
	wp_enqueue_script( 'bizmo_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'bizmo_customize_preview_js' );

/*
==========================================================
Loads the custom styles from the Theme Customizer
==========================================================
*/
add_action( 'wp_head', 'bizmo_custom_style');
function bizmo_custom_style() { ?>
<style>
/* BODY */
<?php
/* Set Variables */
$nav_color = get_theme_mod( 'nav_color');
$header_color = get_theme_mod( 'header_color');
$button_color = get_theme_mod( 'button_color');
$footer_color = get_theme_mod( 'footer_color');

/* Nav Color */
if($nav_color){echo '#top-bar {background:' .$nav_color.';}';}

/* Header Color */
if($header_color){echo '.current_page_item a, #masthead {background:' .$header_color.';}';}

/* Button Color */
if($button_color){
	echo 'a,#colophon .site-info a {color:' .$button_color.';}';
	echo '#topbar-search button:hover,.main-navigation li:hover a,.main-navigation a:hover,.button,button,
input[type="button"],input[type="reset"],input[type="submit"] {background:' .$button_color.';}';
	echo '@media screen and (max-width: 600px) {.menu-toggle,#site-navigation li {background:' .$button_color.';}}';
	echo '.button:hover,button:hover,input[type="button"]:hover,input[type="reset"]:hover,input[type="submit"]:hover {background:' .cr_one_darken_color($button_color).';}';
}

/* Footer Color */
if($footer_color){echo 'html,#colophon,#breadcrumbs-wrap {background:' .$footer_color.';}';}

do_action('bizmo_add_to_custom_style');

?>
</style>
<?php }

/*
==========================================================
FUNCTION TO DARKEN A COLOR BY 30%
==========================================================
*/
function cr_one_darken_color($color) {
if(!preg_match('/^#?([0-9a-f]{2})([0-9a-f]{2})([0-9a-f]{2})$/i', $color, $parts))
  die("Not a value color");
 $out = "#"; // Prepare to fill with the results
for($i = 1; $i <= 3; $i++) {
  $parts[$i] = hexdec($parts[$i]);
 $parts[$i] = round($parts[$i] * 80/100); // 80/100 = 80%, i.e. 20% darker
  // Increase or decrease it to fit your needs
 $out .= str_pad(dechex($parts[$i]), 2, '0', STR_PAD_LEFT);
 }
 return $out;
};