<?php // custom css 

function tr_affreview_lite_add_custom_css() {
	    wp_enqueue_style('custom-css', get_template_directory_uri() . '/css/custom.css'); 
	    
        
}
add_action( 'wp_enqueue_scripts', 'tr_affreview_lite_add_custom_css' );
?>