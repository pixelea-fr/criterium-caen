<?php

require_once 'inc-functions/cpt.php';
require_once 'inc-functions/register-menus.php';
require_once 'inc-functions/register-styles.php';
require_once 'inc-functions/register-scripts.php';
require_once 'inc-functions/acf-options-page.php';


/**
 * Essential theme supports
 * */
add_action('after_setup_theme','criterium_theme_setup');
function criterium_theme_setup(){
    /** tag-title **/
    add_theme_support( 'title-tag' );

    /** post-thumnails **/
	add_theme_support( 'post-thumbnails' );

	/** editor-styles **/
	add_theme_support( 'editor-styles' );

	/** editor-styles-css **/
	add_editor_style( 'editor.css' );

	/** Load block styles on frontend **/
	add_theme_support( 'wp-block-styles' );

	/** Align wide **/
	add_theme_support( 'align-wide' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}

/**
 * Add custom logo for admin login screen and link to homepage
 */
function criterium_filter_login_head() {

	if ( has_custom_logo() ) {
		$image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
		?>
		<style type="text/css">
			.login h1 a {
				background-image: url(<?php echo esc_url( $image[0] ); ?>);
				-webkit-background-size: contain;
				background-size: contain;
				height: 80px;
				width: 200px;
			}
		</style>
		<?php
	}
}
add_action( 'login_head', 'criterium_filter_login_head', 100 );

function criterium_new_wp_login_url() {
	return home_url();
}
add_filter('login_headerurl', 'criterium_new_wp_login_url');


function format_value($value)
{
    // Remplace les caractères accentués par les lettres non accentuées
    $value = Normalizer::normalize($value, Normalizer::FORM_D);
    $value = preg_replace('/\p{M}/u', '', $value);

    // Remplace les espaces par des traits de soulignement
    $formatted_value = strtolower(str_replace(' ', '_', $value));

    return $formatted_value;
}
/**
 * Add custom logo for admin login screen and link to homepage
 */
function hatsumei_filter_login_head()
{

	if (has_custom_logo()) {
		$image = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full');
?>
		<style type="text/css">
			#login {
				display: flex;
				flex-direction: column;
			}

			#login h1,
			#login h1 a {
				height: 80px;
				width: 100%;
			}

			.login h1 a {
				background-image: url(<?php echo esc_url($image[0]); ?>);
				-webkit-background-size: contain;
				background-size: contain;
			}
		</style>
<?php
	}
}
add_action('login_head', 'hatsumei_filter_login_head', 100);

function hatsumei_new_wp_login_url()
{
	return home_url();
}
add_filter('login_headerurl', 'hatsumei_new_wp_login_url');