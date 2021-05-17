<?php
/**
 * Dynamic inline styles
 */

/* Theme Color */
$primary_color 				= '#' . get_theme_mod( 'clearnote_primary_color', '1e73be' );

?>
	
/* Custom Colors */
a:hover, a:focus{ color: <?php echo esc_attr( $primary_color ); ?>; }
::selection{ background: <?php echo esc_attr( $primary_color ); ?>; color:#fff; }
::-moz-selection{ background: <?php echo esc_attr( $primary_color ); ?>; color:#fff; }
.theme_color{ color: <?php echo esc_attr( $primary_color ); ?>; }

.bg_primary,
button, input[type='button'],
input[type='reset'],
input[type='submit'],
button:hover,
input[type='button']:hover,
input[type='reset']:hover,
input[type='submit']:hover,
input[type='button']:hover,
input[type='reset']:hover,
.contentarea form.wpcf7-form input[type='submit'],
.header_search_block:after,
.swipebox-counter i{
	background-color: <?php echo esc_attr( $primary_color ); ?>;
}

/* Blog Posts */
.entry-meta-cats a{ color: <?php echo esc_attr( $primary_color ); ?>; }