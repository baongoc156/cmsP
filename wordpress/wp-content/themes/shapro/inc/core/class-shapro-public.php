<?php

/**
 * Handles front end setup.
 *
 * @package Shapro
 */

/**
 * Class Shapro_public
 */
class Shapro_public {

    /**
     * Generic strings.
     *
     * @var array
     */
//    var $generic_strings;

    public function enqueue_scripts() {
        
        wp_enqueue_script('jquery'); // enqueue the jquery here

        // Bootstrap
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap' . ( ( SHAPRO_DEBUG ) ? '' : '' ) . '.css', array(), SHAPRO_VERSION);
        
       wp_enqueue_style('shapro-skin', get_template_directory_uri() . '/assets/css/skin/theme-default' . ( ( SHAPRO_DEBUG ) ? '' : '' ) . '.css', array(), SHAPRO_VERSION);

       wp_enqueue_style('shapro-style', get_stylesheet_uri() );

       wp_enqueue_style('smartmenus', get_template_directory_uri() . '/assets/css/bootstrap-smartmenus' . ( ( SHAPRO_DEBUG ) ? '' : '' ) . '.css', array(), SHAPRO_VERSION);

        wp_register_script('bootstrap-js', get_template_directory_uri(). '/assets/js/bootstrap.js', array('jquery'),'', true);
        wp_enqueue_script('bootstrap-js');

        wp_register_script('smartmenus-js', get_template_directory_uri(). '/assets/js/jquery.smartmenus.js', array('jquery'),'', true);
        wp_enqueue_script('smartmenus-js');

        wp_register_script('smartmenus-bootstrap', get_template_directory_uri(). '/assets/js/jquery.smartmenus.bootstrap.js', array('jquery'),'', true);
        wp_enqueue_script('smartmenus-bootstrap');
        
        
        wp_register_script('owl-carousel', get_template_directory_uri(). '/assets/js/owl.carousel.js', array('jquery'),'', true);
        wp_enqueue_script('owl-carousel');

        wp_register_script('shapro-slider', get_template_directory_uri(). '/assets/js/slider.js', array('jquery'),'', true);
        wp_enqueue_script('shapro-slider');
        
        wp_register_script('shapro-main', get_template_directory_uri(). '/assets/js/main.js', array('jquery'),'', true);
        wp_enqueue_script('shapro-main');
        
        wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), '');


        // Main Stylesheet
        wp_style_add_data('shapro_style', 'rtl', 'replace');

        

        wp_enqueue_style('shapro-animate', get_template_directory_uri() . '/assets/css/animate' . ( ( SHAPRO_DEBUG ) ? '' : '.min' ) . '.css', array(), SHAPRO_VERSION);
        wp_enqueue_style('shapro-owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel' . ( ( SHAPRO_DEBUG ) ? '' : '.min' ) . '.css', array(), SHAPRO_VERSION);

       if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }


    /**
     * Get fonts url.
     *
     * @return string fonts that need to be enqueued.
     */
    private function get_fonts_url() {
        $fonts_url = '';
        /**
         * Translators: If there are characters in your language that are not
         * supported by Roboto or Roboto Slab, translate this to 'off'. Do not translate
         * into your own language.
         */
        $font_families = $this->shapro_google_fonts_array();

        $query_args = array(
            'family' => urlencode(implode('|', $font_families)),
            'subset' => urlencode('latin,latin-ext'),
        );

        $fonts_url = add_query_arg($query_args, '//fonts.googleapis.com/css');

        return $fonts_url;
    }

    function shapro_google_fonts_array() {
        return apply_filters('shapro_google_fonts_array', array('Poppins', 'Rubik'));
    }

    /**
     * Detect if is blog page.
     *
     * @return bool
     */
    public static function is_blog() {
        return is_home() && 'post' === get_post_type();
    }

    /**
     * Filter the front page template so it's bypassed entirely if the user selects
     * to display blog posts on their homepage instead of a static page.
     */
    public function filter_front_page_template($template) {
        return is_home() ? '' : $template;
    }

    /**
     * Register widgets for the theme.
     *
     * @since    Shapro 1.0
     * @modified 1.1.40
     */
    public function initialize_widgets() {

        register_sidebar(
            array(
                'name' => esc_html__('Sidebar', 'shapro'),
                'id' => 'sidebar-1',
                'description' => esc_html__('Add widgets here.', 'shapro'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h3>',
                'after_title' => '</h3>',
        )
    );


    }

    /**
     * Setup the theme.
     *
     * @since Shapro 1.0
     */
    public function setup_theme() {
        // Maximum allowed width for any content in the theme, like oEmbeds and images added to posts.  https://codex.wordpress.org/Content_Width

        $GLOBALS['content_width'] = apply_filters('shapro_content_width', 640);

        $logo_settings = array(
            'height' => 55,
            'width' => 150,
            'flex-height' => true,
            'flex-width' => true,
        );

        $custom_background_settings = array(
            'default-color' => apply_filters('shapro_default_background_color', 'E5E5E5'),
        );

        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('automatic-feed-links');
        add_theme_support('custom-logo', $logo_settings);
        add_theme_support('html5', array('search-form'));
        add_theme_support('custom-background', $custom_background_settings);
        add_theme_support('header-footer-elementor');

        /**
         * Add support for wide alignments.
         *
         * @link https://wordpress.org/gutenberg/handbook/extensibility/theme-support/
         */
        add_theme_support('align-wide');

        /**
         * Add support for block color palettes.
         *
         * @link https://wordpress.org/gutenberg/handbook/extensibility/theme-support/
         */
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Shapro, use a find and replace
         * to change 'shapro' to the name of your theme in all the template files.
         */
        load_theme_textdomain('shapro', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'shapro'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
                'html5',
                array(
                    'search-form',
                    'comment-form',
                    'comment-list',
                    'gallery',
                    'caption',
                    'style',
                    'script',
                )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
                'custom-background',
                apply_filters(
                        'shapro_custom_background_args',
                        array(
                            'default-color' => 'ffffff',
                            'default-image' => '',
                        )
                )
        );

        add_editor_style();
    }

}


//Enqueue For Admin css and js
function shapro_admin_enqueue_scripts(){
    wp_enqueue_style('shapro-admin-style', get_template_directory_uri() . '/assets/css/admin.css');
    wp_enqueue_script( 'shapro-admin-script', get_template_directory_uri() . '/assets/js/shapro-admin-script.js', array( 'jquery' ), '', true );
    wp_localize_script( 'shapro-admin-script', 'shapro_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action( 'admin_enqueue_scripts', 'shapro_admin_enqueue_scripts' );

function shapro_menu(){ ?>
<script>
jQuery('a,input').bind('focus', function() {
    if(!jQuery(this).closest(".menu-item").length && ( jQuery(window).width() <= 992) ) {
    jQuery('.navbar-collapse').removeClass('show');
}})
</script>
<?php }
add_action( 'wp_footer', 'shapro_menu' );
?>