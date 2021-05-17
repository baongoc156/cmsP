<?php

class Shapro_Core {

    function __construct() {
        $this->define_hooks();
    }

    /**
     * Register all of the hooks related to the functionality
     * of the theme setup.
     *
     * @access   private
     */
    private function define_hooks() {

        $front_end = new Shapro_public();
        add_action('wp_enqueue_scripts', array($front_end, 'enqueue_scripts'));
        add_action('after_setup_theme', array($front_end, 'setup_theme'));
        add_action('widgets_init', array($front_end, 'initialize_widgets'));
    }

}
