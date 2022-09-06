<?php
/**
 * Register pattern section with three items and description.
 *
 * @package    soivigolblocktheme
 */

return array(
	'title'      => __( 'Section with three items', 'soivigol-blocks' ),
	'categories' => array( 'featured' ),
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem","right":"1rem","left":"1rem"}}}} -->
	<div class="wp-block-group alignwide" style="padding-top:4rem;padding-right:1rem;padding-bottom:4rem;padding-left:1rem"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"4rem"}}},"fontSize":"x-large"} -->
	<h2 class="has-x-large-font-size" style="margin-bottom:4rem">Services of web development on WordPress</h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"gap":"4rem"}} -->
	<div class="wp-block-columns"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"right":"1rem"}}}} -->
	<div class="wp-block-group" style="padding-right:1rem"><!-- wp:image {"id":36,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( home_url() ) . '/wp-content/themes/soivigolblocktheme/assets/img/web-code.png" alt="" class="wp-image-36"/></figure>
	<!-- /wp:image -->

	<!-- wp:heading {"level":3,"fontSize":"large"} -->
	<h3 class="has-large-font-size">' . __( 'Title item 1', 'soivigol-blocks' ) . '</h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"textColor":"textsecondary"} -->
	<p class="has-textsecondary-color has-text-color">' . __( 'Short description aplied to the box item. This description is ideal to describe a short description of the a service that you offer to the clients.', 'soivigol-blocks' ) . ' </p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"right":"1rem"}}}} -->
	<div class="wp-block-group" style="padding-right:1rem"><!-- wp:image {"id":37,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( home_url() ) . '/wp-content/themes/soivigolblocktheme/assets/img/computer.png" alt="" class="wp-image-37"/></figure>
	<!-- /wp:image -->

	<!-- wp:heading {"level":3,"fontSize":"large"} -->
	<h3 class="has-large-font-size">' . __( 'Title item 2', 'soivigol-blocks' ) . '</h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"textColor":"textsecondary"} -->
	<p class="has-textsecondary-color has-text-color">' . __( 'Short description aplied to the box item. This description is ideal to describe a short description of the a service that you offer to the clients.', 'soivigol-blocks' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"right":"1rem"}}}} -->
	<div class="wp-block-group" style="padding-right:1rem"><!-- wp:image {"id":38,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( home_url() ) . '/wp-content/themes/soivigolblocktheme/assets/img/construction.png" alt="" class="wp-image-38"/></figure>
	<!-- /wp:image -->

	<!-- wp:heading {"level":3,"fontSize":"large"} -->
	<h3 class="has-large-font-size">' . __( 'Title item 3', 'soivigol-blocks' ) . '</h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"textColor":"textsecondary"} -->
	<p class="has-textsecondary-color has-text-color">' . __( 'Short description aplied to the box item. This description is ideal to describe a short description of the a service that you offer to the clients.', 'soivigol-blocks' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button -->
	<div class="wp-block-button"><a class="wp-block-button__link" href="#">' . __( 'More info', 'soivigol-blocks' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group -->',
);
