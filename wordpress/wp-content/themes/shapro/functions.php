<?php

/**
 * Shapro functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package
 */
define('SHAPRO_VERSION', '1.0.1');
define('SHAPRO_INCLUDE', trailingslashit(get_template_directory()) . 'inc/');
define('SHAPRO_BASE_DIR', SHAPRO_INCLUDE . 'core/');
//echo get_template_directory_uri().'/images/blo11.png';
if (!defined('SHAPRO_DEBUG')) {
    define('SHAPRO_DEBUG', true);
}

if (!defined('SHAPRO_VERSION')) {
    // Replace the version number of the theme on each release.
    define('SHAPRO_VERSION', '1.0.0');
}

function shapro_run() {

    require_once SHAPRO_BASE_DIR . 'class-shapro-autoloader.php';
    $autoloader = new Shapro_Autoloader();

    spl_autoload_register(array($autoloader, 'loader'));
    new Shapro_Core();
}

shapro_run();

add_theme_support('post-thumbnails');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Register Widget WordPress.
 */
require get_template_directory() . '/inc/widget/widgets-register-sidebars.php';

/**
* Customizer
*/
/**
 * Custom functions that act independently of the theme templates.
 */
require_once get_template_directory() . '/inc/plugin-install.php';

/* Header */
require get_template_directory() . '/inc/customizer/customizer_header.php';

/* Recommended plugin */
require get_template_directory() . '/inc/customizer/customizer_recommended_plugin.php';

/* Header */
require get_template_directory() . '/inc/customizer/customizer_general.php';

if (!file_exists(get_template_directory() . '/inc/class-shapro-bootstrap-navwalker.php')) {
    // File does not exist... return an error.
    return new WP_Error('class-shapro-bootstrap-navwalker-missing', __('It appears the class-shapro-bootstrap-navwalker.php file may be missing.', 'shapro'));
} else {
    // File exists... require it.
    require_once get_template_directory() . '/inc/class-shapro-bootstrap-navwalker.php';
}


if (!function_exists('shapro_setup')):
/**
 * Sets up theme defaults and registers support for various WordPress features.
*/
    function shapro_setup() {
        /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Shapro, use a find and replace
     * to change 'shapro' to the name of your theme in all the template files.
     */
    load_theme_textdomain('shapro', get_template_directory().'/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    // woocommerce support
    
    add_theme_support( 'woocommerce' );
    
    // Woocommerce Gallery Support
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

   // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support('custom-logo');

        /*
        * Add theme support for gutenberg block
        */
        add_theme_support( 'align-wide' );
        add_theme_support( 'responsive-embeds' );
    }
endif;
add_action('after_setup_theme', 'shapro_setup');