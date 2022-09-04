<?php
/**
 * Register default patterns offers in the theme.
 *
 * @package    soivigolblocktheme
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers block patterns.
 *
 * @return void
 */
function soivigol_register_custom_block_paterns() {

	$block_patterns = array(
		'soivigol-main-hero',
		'section-with-items',
		'section-description-featured',
		'section-with-collaborators',
		'section-services-img-left',
		'section-services-img-right',
	);

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'soivigolblocktheme/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'soivigol_register_custom_block_paterns', 9 );
