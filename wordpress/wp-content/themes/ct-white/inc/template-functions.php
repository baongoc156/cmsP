<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package CT_White
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function ct_white_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'ct_white_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function ct_white_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'ct_white_pingback_header' );

/**
 *  Top Search
 */

function ct_white_header_search_form() { ?>
	<div id="ct_white_search">
	    <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	       <span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'ct-white' ); ?></span>
	       <input type="text" id="top_search_field" class="search-field" placeholder="<?php echo esc_attr_e( 'Search...', 'ct-white' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
	       <button class="jump-to-icon" tabindex="-1"></button>
		</form>
	</div>
<?php }

	
/**
 *	Post Excerpt
 */
 function ct_white_excerpt($post = NULL, $limit = 40) {
	 	 
	if (NULL == $post ) {
		global $post;
	}

	 $output	=	'';

	 if ( isset($post->ID) && has_excerpt($post->ID) ) {
		 $output = $post->post_excerpt;
	 }

	 elseif ( isset( $post->post_content ) ) {
		if ( strpos($post->post_content, '<!--more-->') ) {
			$output	=	get_the_content('');
		}
		else {
			$output	=	wp_trim_words( strip_shortcodes( $post->post_content ), $limit );
		}
	}
	return $output;
 }
 
 //Customize Search Widget
/*
 add_filter('get_search_form', 'ct_white_search_form');
 
function ct_white_search_form($text) {
     $text = str_replace('value="Search"', 'value=""', $text);
     return $text;
}
*/

function ct_white_footer_sidebar() { ?>
	<div id="footer-sidebar">
		<div class="container">
			<?php for( $i = 1; $i <= 3; $i++ ) { ?>
				<div class="footer footer-<?php echo $i ?>">
					<?php if ( !is_active_sidebar('footer-' . $i)) return;?>
					<?php dynamic_sidebar('footer-' . $i) ?>
				</div>
			<?php } ?>
		</div>
	</div>
<?php
}