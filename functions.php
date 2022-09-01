<?php
/**
 * Soivigol Block Theme Functions
 *
 * @package    soivigol-block-theme
 */

defined( 'ABSPATH' ) || exit;

/**
 * Enqueue styles to Soivigol Block Theme.
 */
function soivigol_enqueue_scripts() {
	wp_enqueue_style(
		'soivigol-main-stye',
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme()->get( 'Version' ),
	);
}
add_action( 'wp_enqueue_scripts', 'soivigol_enqueue_scripts' );
