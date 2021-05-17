<?php
/**
 * Block Patterns
 * 
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern/
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @package Letterum
 * @since   1.3.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {
	register_block_pattern_category(
		'letterum',
		array( 'label' => __( 'Letterum Patterns', 'letterum' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

	// Latest Posts.
	register_block_pattern(
		'letterum/featured-category',
		array(
			'title'         => esc_html__( 'Featured Category', 'letterum' ),
			'categories'    => array( 'letterum' ),
			'viewportWidth' => 720,
			'content'       => '
								<!-- wp:columns {"align":"wide","style":{"color":{"background":"#f3f5f7"}},"textColor":"black","className":"featured-category"} -->
								<div class="wp-block-columns alignwide featured-category has-black-color has-text-color has-background" style="background-color:#f3f5f7"><!-- wp:column {"width":"20%"} -->
								<div class="wp-block-column" style="flex-basis:20%"><!-- wp:paragraph {"style":{"color":{"text":"#929da7"}}} -->
								<p class="has-text-color" style="color:#929da7">Featured Category</p>
								<!-- /wp:paragraph -->

								<!-- wp:paragraph {"textColor":"cyan-bluish-gray","fontSize":"small"} -->
								<p class="has-cyan-bluish-gray-color has-text-color has-small-font-size"><em>Category Description</em></p>
								<!-- /wp:paragraph --></div>
								<!-- /wp:column -->

								<!-- wp:column {"width":"80%"} -->
								<div class="wp-block-column" style="flex-basis:80%"><!-- wp:latest-posts {"postsToShow":3,"displayPostContent":true,"excerptLength":18,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"right"} /--></div>
								<!-- /wp:column --></div>
								<!-- /wp:columns -->
								',
		)
	);	

}