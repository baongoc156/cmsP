<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function shapro_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Top Left Sidebar', 'shapro'),
        'id' => 'top-left-sidebar',
        'before_widget' => '<div id="%1$s" class="widget shapro-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Top Right Sidebar', 'shapro'),
        'id' => 'top-right-sidebar',
        'before_widget' => '<div id="%1$s" class="widget shapro-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'shapro'),
        'id' => 'sidebar-1',
        'before_widget' => '<div id="%1$s" class="widget shapro-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));


    register_sidebar(array(
        'name' => esc_html__('Footer', 'shapro'),
        'id' => 'footer_widget_area',
        'before_widget' => '<div class="col-md-3"><div id="%1$s" class="widget shapro-widget %2$s">',
        'after_widget' => '</div></div>',
        'before_title' => '<h4 class="widget-title widget-title-1">',
        'after_title' => '</h4>',
    ));
}

add_action('widgets_init', 'shapro_widgets_init');