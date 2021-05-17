<?php
wp_enqueue_style('theme-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');

//link style
function mytheme_styles()
{
    wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css', 'all');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.css',
	'4.4.0');	
   //mystyle css
   wp_enqueue_style( 'mytheme_style', get_template_directory_uri().'/css/custom-style.css');

}
add_action('wp_enqueue_scripts', 'mytheme_styles');

//navwalker  menu
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// if ( ! function_exists( 'theme_setup' ) ) :

// 	function theme_setup() {
// 		register_nav_menus( array(
// 			'primarymenu' => esc_html__( 'Primary', 'mytheme' ),
// 		) );

// 	}
// endif;
// add_action( 'after_setup_theme', 'theme_setup' );

//widget
function mytheme_widget() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mytheme' ),
		'id'            => 'right-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'mytheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'mytheme_widget' );