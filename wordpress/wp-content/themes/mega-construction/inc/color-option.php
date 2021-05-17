<?php
	
	$mega_construction_first_theme_color = get_theme_mod('mega_construction_first_theme_color');

	$mega_construction_custom_css = '';

	if($mega_construction_first_theme_color != false){
		$mega_construction_custom_css .='a.button, #comments a.comment-reply-link:hover, #sidebar .tagcloud a:hover, span.page-number,span.page-links-title, #contact-us, h1.page-title, h1.search-title , .textbox, .blogbtn a, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, .bradcrumbs a, #sidebar h3::before, .pagination .current, span.meta-nav , .title-box, input[type="submit"]:hover, .nav-menu ul ul li a:hover, .tags a:hover, .woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content{';
			$mega_construction_custom_css .='background-color: '.esc_attr($mega_construction_first_theme_color).';';
		$mega_construction_custom_css .='}';
	}
	if($mega_construction_first_theme_color != false){
		$mega_construction_custom_css .=' a, #sidebar ul li a:hover, input[type="submit"],  .social-media i:hover, .contactbtn a, .blog-sec h2 a, .about h2, .woocommerce td.product-name a, .copyright a , .inner, #sidebar h3, #sidebar input[type="submit"], span.post-title, .entry-content a, .nav-menu ul ul a, h2.entry-title, .logo h1 a, .logo p.site-title a, #comments a.comment-reply-link, .comment-meta.commentmetadata a, .woocommerce-product-search button, .back-to-top:hover, .back-to-top:focus, .tags a i, #wrapper .related-posts h2.related-posts-main-title, #wrapper .related-posts h3 a, .nav-menu ul li a:hover{';
			$mega_construction_custom_css .='color: '.esc_attr($mega_construction_first_theme_color).';';
		$mega_construction_custom_css .='}';
	}
	if($mega_construction_first_theme_color != false){
		$mega_construction_custom_css .=' #footer .widget_shopping_cart .buttons a, #footer .widget_shopping_cart .buttons a, #footer .widget_price_filter .price_slider_amount .button{';
			$mega_construction_custom_css .='color: '.esc_attr($mega_construction_first_theme_color).' !important;';
		$mega_construction_custom_css .='}';
	}
	if($mega_construction_first_theme_color != false){
		$mega_construction_custom_css .=' a.button, #sidebar form, #sidebar aside, #wrapper, #sidebar input[type="search"], .tags a:hover{';
			$mega_construction_custom_css .='border-color: '.esc_attr($mega_construction_first_theme_color).';';
		$mega_construction_custom_css .='}';
	}
	if($mega_construction_first_theme_color != false){
		$mega_construction_custom_css .=' .back-to-top::after{';
			$mega_construction_custom_css .='border-bottom-color: '.esc_attr($mega_construction_first_theme_color).';';
		$mega_construction_custom_css .='}';
	}

	$mega_construction_second_theme_color = get_theme_mod('mega_construction_second_theme_color');

	if($mega_construction_second_theme_color != false){
		$mega_construction_custom_css .='.hvr-sweep-to-right:before, #footer input[type="submit"], input[type="submit"], .nav-menu ul li a:hover, .nav-menu ul ul a, .contactbtn a, .inner, #sidebar input[type="submit"], .pagination a:hover, #comments a.comment-reply-link, .woocommerce-product-search button, .back-to-top, #slider .carousel-indicators li, .woocommerce .widget_price_filter .ui-slider-horizontal .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle{';
			$mega_construction_custom_css .='background-color: '.esc_attr($mega_construction_second_theme_color).';';
		$mega_construction_custom_css .='}';
	}
	if($mega_construction_second_theme_color != false){
		$mega_construction_custom_css .='#footer .widget_shopping_cart .buttons a, #footer .widget_shopping_cart .buttons a, #footer .widget_price_filter .price_slider_amount .button{';
			$mega_construction_custom_css .='background-color: '.esc_attr($mega_construction_second_theme_color).' !important;';
		$mega_construction_custom_css .='}';
	}
	if($mega_construction_second_theme_color != false){
		$mega_construction_custom_css .=' .nav-menu ul li a:active,  #contact-us i, .textbox a, .post-info i, .footerinner ul li a:hover, .nav-menu ul ul a:hover, #comments a.comment-reply-link:hover, #comments input[type="submit"].submit:hover, #sidebar input[type="submit"]:hover {';
			$mega_construction_custom_css .='color: '.esc_attr($mega_construction_second_theme_color).';';
		$mega_construction_custom_css .='}';
	}
	if($mega_construction_second_theme_color != false){
		$mega_construction_custom_css .=' 
		@media screen and (max-width:1000px){
		.nav-menu .current_page_item > a, .nav-menu .current-menu-item > a, .nav-menu .current_page_ancestor > a ,.nav-menu ul li a:hover{';
			$mega_construction_custom_css .='color: '.esc_attr($mega_construction_second_theme_color).';';
		$mega_construction_custom_css .='} }';
	}
	if($mega_construction_second_theme_color != false){
		$mega_construction_custom_css .=' .nav-menu ul ul{';
			$mega_construction_custom_css .='border-color: '.esc_attr($mega_construction_second_theme_color).';';
		$mega_construction_custom_css .='}';
	}
	if($mega_construction_second_theme_color != false){
		$mega_construction_custom_css .=' .nav-menu ul ul a:hover{';
			$mega_construction_custom_css .='border-left-color: '.esc_attr($mega_construction_second_theme_color).';';
		$mega_construction_custom_css .='}';
	}
	if($mega_construction_second_theme_color != false){
		$mega_construction_custom_css .=' .back-to-top::before{';
			$mega_construction_custom_css .='border-bottom-color: '.esc_attr($mega_construction_second_theme_color).';';
		$mega_construction_custom_css .='}';
	}
	if($mega_construction_second_theme_color != false){
		$mega_construction_custom_css .=' 
		@media screen and (max-width:1000px){
		.nav-menu ul ul a:hover{';
			$mega_construction_custom_css .='color: '.esc_attr($mega_construction_second_theme_color).' !important;';
		$mega_construction_custom_css .='} }';
	}

	// Layout Options
	$mega_construction_theme_layout = get_theme_mod( 'mega_construction_theme_layout_options','Default Theme');
    if($mega_construction_theme_layout == 'Default Theme'){
		$mega_construction_custom_css .='body{';
			$mega_construction_custom_css .='max-width: 100%;';
		$mega_construction_custom_css .='}';
	}else if($mega_construction_theme_layout == 'Container Theme'){
		$mega_construction_custom_css .='body{';
			$mega_construction_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$mega_construction_custom_css .='}';
	}else if($mega_construction_theme_layout == 'Box Container Theme'){
		$mega_construction_custom_css .='body{';
			$mega_construction_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto !important; margin-left: auto !important;';
		$mega_construction_custom_css .='}';
	}

	/*------- Slider Opacity -----------*/

	$mega_construction_slider_layout = get_theme_mod( 'mega_construction_slider_opacity_color','0.7');
	if($mega_construction_slider_layout == '0'){
		$mega_construction_custom_css .='#slider img{';
			$mega_construction_custom_css .='opacity:0';
		$mega_construction_custom_css .='}';
	}else if($mega_construction_slider_layout == '0.1'){
		$mega_construction_custom_css .='#slider img{';
			$mega_construction_custom_css .='opacity:0.1';
		$mega_construction_custom_css .='}';
	}else if($mega_construction_slider_layout == '0.2'){
		$mega_construction_custom_css .='#slider img{';
			$mega_construction_custom_css .='opacity:0.2';
		$mega_construction_custom_css .='}';
	}else if($mega_construction_slider_layout == '0.3'){
		$mega_construction_custom_css .='#slider img{';
			$mega_construction_custom_css .='opacity:0.3';
		$mega_construction_custom_css .='}';
	}else if($mega_construction_slider_layout == '0.4'){
		$mega_construction_custom_css .='#slider img{';
			$mega_construction_custom_css .='opacity:0.4';
		$mega_construction_custom_css .='}';
	}else if($mega_construction_slider_layout == '0.5'){
		$mega_construction_custom_css .='#slider img{';
			$mega_construction_custom_css .='opacity:0.5';
		$mega_construction_custom_css .='}';
	}else if($mega_construction_slider_layout == '0.6'){
		$mega_construction_custom_css .='#slider img{';
			$mega_construction_custom_css .='opacity:0.6';
		$mega_construction_custom_css .='}';
	}else if($mega_construction_slider_layout == '0.7'){
		$mega_construction_custom_css .='#slider img{';
			$mega_construction_custom_css .='opacity:0.7';
		$mega_construction_custom_css .='}';
	}else if($mega_construction_slider_layout == '0.8'){
		$mega_construction_custom_css .='#slider img{';
			$mega_construction_custom_css .='opacity:0.8';
		$mega_construction_custom_css .='}';
	}else if($mega_construction_slider_layout == '0.9'){
		$mega_construction_custom_css .='#slider img{';
			$mega_construction_custom_css .='opacity:0.9';
		$mega_construction_custom_css .='}';
	}


	/*--------- Preloader Color Option -------*/
	$mega_construction_preloader_color = get_theme_mod('mega_construction_preloader_color');

	if($mega_construction_preloader_color != false){
		$mega_construction_custom_css .=' .tg-loader{';
			$mega_construction_custom_css .='border-color: '.esc_attr($mega_construction_preloader_color).';';
		$mega_construction_custom_css .='} ';
		$mega_construction_custom_css .=' .tg-loader-inner, .preloader .preloader-container .animated-preloader, .preloader .preloader-container .animated-preloader:before{';
			$mega_construction_custom_css .='background-color: '.esc_attr($mega_construction_preloader_color).';';
		$mega_construction_custom_css .='} ';
	}

	$mega_construction_preloader_bg_color = get_theme_mod('mega_construction_preloader_bg_color');

	if($mega_construction_preloader_bg_color != false){
		$mega_construction_custom_css .=' #overlayer, .preloader{';
			$mega_construction_custom_css .='background-color: '.esc_attr($mega_construction_preloader_bg_color).';';
		$mega_construction_custom_css .='} ';
	}

	/*------------ Button Settings option-----------------*/

	$mega_construction_top_button_padding = get_theme_mod('mega_construction_top_button_padding');
	$mega_construction_bottom_button_padding = get_theme_mod('mega_construction_bottom_button_padding');
	$mega_construction_left_button_padding = get_theme_mod('mega_construction_left_button_padding');
	$mega_construction_right_button_padding = get_theme_mod('mega_construction_right_button_padding');
	if($mega_construction_top_button_padding != false || $mega_construction_bottom_button_padding != false || $mega_construction_left_button_padding != false || $mega_construction_right_button_padding != false){
		$mega_construction_custom_css .='.blogbtn a, #comments input[type="submit"].submit{';
			$mega_construction_custom_css .='padding-top: '.esc_attr($mega_construction_top_button_padding).'px; padding-bottom: '.esc_attr($mega_construction_bottom_button_padding).'px; padding-left: '.esc_attr($mega_construction_left_button_padding).'px; padding-right: '.esc_attr($mega_construction_right_button_padding).'px; display:inline-block;';
		$mega_construction_custom_css .='}';
	}

	$mega_construction_button_border_radius = get_theme_mod('mega_construction_button_border_radius',0);
	$mega_construction_custom_css .='.blogbtn a, #comments input[type="submit"].submit, .hvr-sweep-to-right:before{';
		$mega_construction_custom_css .='border-radius: '.esc_attr($mega_construction_button_border_radius).'px;';
	$mega_construction_custom_css .='}';

	/*----------- Copyright css -----*/
	$mega_construction_copyright_top_padding = get_theme_mod('mega_construction_top_copyright_padding');
	$mega_construction_copyright_bottom_padding = get_theme_mod('mega_construction_top_copyright_padding');
	if($mega_construction_copyright_top_padding != false || $mega_construction_copyright_bottom_padding != false){
		$mega_construction_custom_css .='.inner{';
			$mega_construction_custom_css .='padding-top: '.esc_attr($mega_construction_copyright_top_padding).'px; padding-bottom: '.esc_attr($mega_construction_copyright_bottom_padding).'px; ';
		$mega_construction_custom_css .='}';
	}

	$mega_construction_copyright_alignment = get_theme_mod('mega_construction_copyright_alignment', 'center');
	if($mega_construction_copyright_alignment == 'center' ){
		$mega_construction_custom_css .='#footer .copyright p{';
			$mega_construction_custom_css .='text-align: '. $mega_construction_copyright_alignment .';';
		$mega_construction_custom_css .='}';
	}elseif($mega_construction_copyright_alignment == 'left' ){
		$mega_construction_custom_css .='#footer .copyright p{';
			$mega_construction_custom_css .=' text-align: '. $mega_construction_copyright_alignment .';';
		$mega_construction_custom_css .='}';
	}elseif($mega_construction_copyright_alignment == 'right' ){
		$mega_construction_custom_css .='#footer .copyright p{';
			$mega_construction_custom_css .='text-align: '. $mega_construction_copyright_alignment .';';
		$mega_construction_custom_css .='}';
	}

	$mega_construction_copyright_font_size = get_theme_mod('mega_construction_copyright_font_size');
	$mega_construction_custom_css .='#footer .copyright p{';
		$mega_construction_custom_css .='font-size: '.esc_attr($mega_construction_copyright_font_size).'px;';
	$mega_construction_custom_css .='}';

	/*------ Slider Show/Hide ------*/
	$mega_construction_slider = get_theme_mod('mega_construction_slider_hide');
	if($mega_construction_slider == false ){
		$mega_construction_custom_css .='.page-template-custom-front-page .logo{';
			$mega_construction_custom_css .='position: static; transform: none; border-bottom: 1px solid #e4e4e4; max-width: 100%;';
		$mega_construction_custom_css .='}';
		$mega_construction_custom_css .='.page-template-custom-front-page .logo h1 a, .page-template-custom-front-page .logo p.site-title a{';
			$mega_construction_custom_css .='color: #01477f;';
		$mega_construction_custom_css .='}';
		$mega_construction_custom_css .='.page-template-custom-front-page .logo p{';
			$mega_construction_custom_css .='color: #666;';
		$mega_construction_custom_css .='}';
		$mega_construction_custom_css .='.page-template-custom-front-page header{';
			$mega_construction_custom_css .='background: #fff;';
		$mega_construction_custom_css .='}';
	}

	/*------ Topbar padding ------*/
	$mega_construction_top_topbar_padding = get_theme_mod('mega_construction_top_topbar_padding');
	$mega_construction_bottom_topbar_padding = get_theme_mod('mega_construction_bottom_topbar_padding');
	if($mega_construction_top_topbar_padding != false || $mega_construction_bottom_topbar_padding != false){
		$mega_construction_custom_css .='#contact-us{';
			$mega_construction_custom_css .='padding-top: '.esc_attr($mega_construction_top_topbar_padding).'px; padding-bottom: '.esc_attr($mega_construction_bottom_topbar_padding).'px; ';
		$mega_construction_custom_css .='}';
	}

	/*------ Woocommerce ----*/
	$mega_construction_product_border = get_theme_mod('mega_construction_product_border',true);

	if($mega_construction_product_border == false){
		$mega_construction_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$mega_construction_custom_css .='border: 0;';
		$mega_construction_custom_css .='}';
	}

	$mega_construction_product_top = get_theme_mod('mega_construction_product_top_padding', 10);
	$mega_construction_product_bottom = get_theme_mod('mega_construction_product_bottom_padding', 10);
	$mega_construction_product_left = get_theme_mod('mega_construction_product_left_padding', 10);
	$mega_construction_product_right = get_theme_mod('mega_construction_product_right_padding', 10);
	$mega_construction_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$mega_construction_custom_css .='padding-top: '.esc_attr($mega_construction_product_top).'px; padding-bottom: '.esc_attr($mega_construction_product_bottom).'px; padding-left: '.esc_attr($mega_construction_product_left).'px; padding-right: '.esc_attr($mega_construction_product_right).'px;';
	$mega_construction_custom_css .='}';

	$mega_construction_product_border_radius = get_theme_mod('mega_construction_product_border_radius');
	$mega_construction_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$mega_construction_custom_css .='border-radius: '.esc_attr($mega_construction_product_border_radius).'px;';
	$mega_construction_custom_css .='}';

	/*----- WooCommerce button css --------*/
	$mega_construction_product_button_top = get_theme_mod('mega_construction_product_button_top_padding',10);
	$mega_construction_product_button_bottom = get_theme_mod('mega_construction_product_button_bottom_padding',10);
	$mega_construction_product_button_left = get_theme_mod('mega_construction_product_button_left_padding',15);
	$mega_construction_product_button_right = get_theme_mod('mega_construction_product_button_right_padding',15);
	$mega_construction_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$mega_construction_custom_css .='padding-top: '.esc_attr($mega_construction_product_button_top).'px; padding-bottom: '.esc_attr($mega_construction_product_button_bottom).'px; padding-left: '.esc_attr($mega_construction_product_button_left).'px; padding-right: '.esc_attr($mega_construction_product_button_right).'px;';
	$mega_construction_custom_css .='}';

	$mega_construction_product_button_border_radius = get_theme_mod('mega_construction_product_button_border_radius');
	$mega_construction_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, a.checkout-button.button.alt.wc-forward, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit{';
		$mega_construction_custom_css .='border-radius: '.esc_attr($mega_construction_product_button_border_radius).'px;';
	$mega_construction_custom_css .='}';

	/*----- WooCommerce product sale css --------*/
	$mega_construction_product_sale_top = get_theme_mod('mega_construction_product_sale_top_padding');
	$mega_construction_product_sale_bottom = get_theme_mod('mega_construction_product_sale_bottom_padding');
	$mega_construction_product_sale_left = get_theme_mod('mega_construction_product_sale_left_padding');
	$mega_construction_product_sale_right = get_theme_mod('mega_construction_product_sale_right_padding');
	$mega_construction_custom_css .='.woocommerce span.onsale {';
		$mega_construction_custom_css .='padding-top: '.esc_attr($mega_construction_product_sale_top).'px; padding-bottom: '.esc_attr($mega_construction_product_sale_bottom).'px; padding-left: '.esc_attr($mega_construction_product_sale_left).'px; padding-right: '.esc_attr($mega_construction_product_sale_right).'px;';
	$mega_construction_custom_css .='}';

	$mega_construction_product_sale_border_radius = get_theme_mod('mega_construction_product_sale_border_radius',50);
	$mega_construction_custom_css .='.woocommerce span.onsale {';
		$mega_construction_custom_css .='border-radius: '.esc_attr($mega_construction_product_sale_border_radius).'px;';
	$mega_construction_custom_css .='}';

	$mega_construction_menu_case = get_theme_mod('mega_construction_product_sale_position', 'Right');
	if($mega_construction_menu_case == 'Right' ){
		$mega_construction_custom_css .='.woocommerce ul.products li.product .onsale{';
			$mega_construction_custom_css .=' left:auto; right:0;';
		$mega_construction_custom_css .='}';
	}elseif($mega_construction_menu_case == 'Left' ){
		$mega_construction_custom_css .='.woocommerce ul.products li.product .onsale{';
			$mega_construction_custom_css .=' left:-10px; right:auto;';
		$mega_construction_custom_css .='}';
	}

	/*---- Slider Image overlay -----*/
	$mega_construction_slider_image_overlay = get_theme_mod('mega_construction_slider_image_overlay',true);
	if($mega_construction_slider_image_overlay == false){
		$mega_construction_custom_css .='#slider img {';
			$mega_construction_custom_css .='opacity: 1;';
		$mega_construction_custom_css .='}';
	}

	$mega_construction_slider_overlay_color = get_theme_mod('mega_construction_slider_overlay_color');
	if($mega_construction_slider_overlay_color != false){
		$mega_construction_custom_css .='#slider  {';
			$mega_construction_custom_css .='background-color: '.esc_attr($mega_construction_slider_overlay_color).';';
		$mega_construction_custom_css .='}';
	}

	/*---- Comment form ----*/
	$mega_construction_comment_width = get_theme_mod('mega_construction_comment_width', '100');
	$mega_construction_custom_css .='#comments textarea{';
		$mega_construction_custom_css .=' width:'.esc_attr($mega_construction_comment_width).'%;';
	$mega_construction_custom_css .='}';

	$mega_construction_comment_submit_text = get_theme_mod('mega_construction_comment_submit_text', 'Post Comment');
	if($mega_construction_comment_submit_text == ''){
		$mega_construction_custom_css .='#comments p.form-submit {';
			$mega_construction_custom_css .='display: none;';
		$mega_construction_custom_css .='}';
	}

	$mega_construction_comment_title = get_theme_mod('mega_construction_comment_title', 'Leave a Reply');
	if($mega_construction_comment_title == ''){
		$mega_construction_custom_css .='#comments h2#reply-title {';
			$mega_construction_custom_css .='display: none;';
		$mega_construction_custom_css .='}';
	}

	/*------ Footer background css -------*/
	$mega_construction_footer_bg_color = get_theme_mod('mega_construction_footer_bg_color');
	if($mega_construction_footer_bg_color != false){
		$mega_construction_custom_css .='.copyright-wrapper{';
			$mega_construction_custom_css .='background: '.esc_attr($mega_construction_footer_bg_color).';';
		$mega_construction_custom_css .='}';
	}

	$mega_construction_footer_bg_image = get_theme_mod('mega_construction_footer_bg_image');
	if($mega_construction_footer_bg_image != false){
		$mega_construction_custom_css .='.copyright-wrapper{';
			$mega_construction_custom_css .='background: url('.esc_attr($mega_construction_footer_bg_image).');';
		$mega_construction_custom_css .='}';
	}

	/*----- Featured image css -----*/
	$mega_construction_feature_image_border_radius = get_theme_mod('mega_construction_feature_image_border_radius');
	if($mega_construction_feature_image_border_radius != false){
		$mega_construction_custom_css .='.blog-sec img{';
			$mega_construction_custom_css .='border-radius: '.esc_attr($mega_construction_feature_image_border_radius).'px;';
		$mega_construction_custom_css .='}';
	}

	$mega_construction_feature_image_shadow = get_theme_mod('mega_construction_feature_image_shadow');
	if($mega_construction_feature_image_shadow != false){
		$mega_construction_custom_css .='.blog-sec img{';
			$mega_construction_custom_css .='box-shadow: '.esc_attr($mega_construction_feature_image_shadow).'px '.esc_attr($mega_construction_feature_image_shadow).'px '.esc_attr($mega_construction_feature_image_shadow).'px #aaa;';
		$mega_construction_custom_css .='}';
	}

	/*------ Sticky header padding ------------*/
	$mega_construction_top_sticky_header_padding = get_theme_mod('mega_construction_top_sticky_header_padding');
	$mega_construction_bottom_sticky_header_padding = get_theme_mod('mega_construction_bottom_sticky_header_padding');
	$mega_construction_custom_css .=' .fixed-header{';
		$mega_construction_custom_css .=' padding-top: '.esc_attr($mega_construction_top_sticky_header_padding).'px; padding-bottom: '.esc_attr($mega_construction_bottom_sticky_header_padding).'px';
	$mega_construction_custom_css .='}';

	/*------ Related products ---------*/
	$mega_construction_related_products = get_theme_mod('mega_construction_single_related_products',true);
	if($mega_construction_related_products == false){
		$mega_construction_custom_css .=' .related.products{';
			$mega_construction_custom_css .='display: none;';
		$mega_construction_custom_css .='}';
	}

	/*-------- Menu Font Size --------*/
	$mega_construction_menu_font_size = get_theme_mod('mega_construction_menu_font_size',14);
	if($mega_construction_menu_font_size != false){
		$mega_construction_custom_css .='.nav-menu li a{';
			$mega_construction_custom_css .='font-size: '.esc_attr($mega_construction_menu_font_size).'px;';
		$mega_construction_custom_css .='}';
	}

	$mega_construction_menu_case = get_theme_mod('mega_construction_menu_case', 'uppercase');
	if($mega_construction_menu_case == 'uppercase' ){
		$mega_construction_custom_css .='.nav-menu li a{';
			$mega_construction_custom_css .=' text-transform: uppercase;';
		$mega_construction_custom_css .='}';
	}elseif($mega_construction_menu_case == 'capitalize' ){
		$mega_construction_custom_css .='.nav-menu li a{';
			$mega_construction_custom_css .=' text-transform: capitalize;';
		$mega_construction_custom_css .='}';
	}

	// Featured image header
	$header_image_url = mega_construction_banner_image( $image_url = '' );
	$mega_construction_custom_css .='#page-site-header{';
		$mega_construction_custom_css .='background-image: url('. esc_url( $header_image_url ).'); background-size: cover;';
	$mega_construction_custom_css .='}';

	$mega_construction_post_featured_image = get_theme_mod('mega_construction_post_featured_image', 'in-content');
	if($mega_construction_post_featured_image == 'banner' ){
		$mega_construction_custom_css .='.single #wrapper h1, .page #wrapper h1, .page #wrapper img, .page .title-box{';
			$mega_construction_custom_css .=' display: none;';
		$mega_construction_custom_css .='}';
		$mega_construction_custom_css .='#page-site-header{';
			$mega_construction_custom_css .=' margin-bottom: 20px;';
		$mega_construction_custom_css .='}';
		$mega_construction_custom_css .='.page-template-custom-front-page #page-site-header{';
			$mega_construction_custom_css .=' display: none;';
		$mega_construction_custom_css .='}';
	}

	// Woocommerce Shop page pagination
	$mega_construction_shop_page_navigation = get_theme_mod('mega_construction_shop_page_navigation',true);
	if ($mega_construction_shop_page_navigation == false) {
		$mega_construction_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$mega_construction_custom_css .='display: none;';
		$mega_construction_custom_css .='}';
	}