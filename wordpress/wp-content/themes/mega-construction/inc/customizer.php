<?php
/**
 * Mega Construction Theme Customizer
 * @package Mega Construction
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function mega_construction_customize_register( $wp_customize ) {

	class Mega_Construction_WP_Customize_Range_Control extends WP_Customize_Control{
	    public $type = 'custom_range';
	    public function enqueue(){
	        wp_enqueue_script(
	            'cs-range-control',
	            false,
	            true
	        );
	    }
	    public function render_content(){?>
	        <label>
	            <?php if ( ! empty( $this->label )) : ?>
	                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
	            <?php endif; ?>
	            <div class="cs-range-value"><?php echo esc_html($this->value()); ?></div>
	            <input data-input-type="range" type="range" <?php $this->input_attrs(); ?> value="<?php echo esc_attr($this->value()); ?>" <?php $this->link(); ?> />
	            <?php if ( ! empty( $this->description )) : ?>
	                <span class="description customize-control-description"><?php echo esc_html($this->description); ?></span>
	            <?php endif; ?>
	        </label>
        <?php }
	}	

	//add home page setting pannel
	$wp_customize->add_panel( 'mega_construction_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'TG Settings', 'mega-construction' ),
	    'description' => __( 'Description of what this panel does.', 'mega-construction' ),
	) );

	// Add the Theme Color Option section.
	$wp_customize->add_section( 'mega_construction_theme_color_option', array( 
		'panel' => 'mega_construction_panel_id', 
		'title' => esc_html__( 'Global Color Settings', 'mega-construction' ) 
	) );

  	$wp_customize->add_setting( 'mega_construction_first_theme_color', array(
	    'default' => '#01477f',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mega_construction_first_theme_color', array(
  		'label' => 'Color Option 1',
	    'description' => __('One can change complete theme global color settings on just one click.', 'mega-construction'),
	    'section' => 'mega_construction_theme_color_option',
	    'settings' => 'mega_construction_first_theme_color',
  	)));

  	$wp_customize->add_setting( 'mega_construction_second_theme_color', array(
	    'default' => '#fec200',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mega_construction_second_theme_color', array(
  		'label' => 'Color Option 2',
	    'description' => __('One can change complete theme global color settings on just one click.', 'mega-construction'),
	    'section' => 'mega_construction_theme_color_option',
	    'settings' => 'mega_construction_second_theme_color',
  	)));

    $mega_construction_font_array = array(
        '' =>'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' =>'Acme', 
        'Anton' => 'Anton', 
        'Architects Daughter' =>'Architects Daughter',
        'Arimo' => 'Arimo', 
        'Arsenal' =>'Arsenal',
        'Arvo' =>'Arvo',
        'Alegreya' =>'Alegreya',
        'Alfa Slab One' =>'Alfa Slab One',
        'Averia Serif Libre' =>'Averia Serif Libre', 
        'Bangers' =>'Bangers', 
        'Boogaloo' =>'Boogaloo', 
        'Bad Script' =>'Bad Script',
        'Bitter' =>'Bitter', 
        'Bree Serif' =>'Bree Serif', 
        'BenchNine' =>'BenchNine',
        'Cabin' =>'Cabin',
        'Cardo' =>'Cardo', 
        'Courgette' =>'Courgette', 
        'Cherry Swash' =>'Cherry Swash',
        'Cormorant Garamond' =>'Cormorant Garamond', 
        'Crimson Text' =>'Crimson Text',
        'Cuprum' =>'Cuprum', 
        'Cookie' =>'Cookie',
        'Chewy' =>'Chewy',
        'Days One' =>'Days One',
        'Dosis' =>'Dosis',
        'Droid Sans' =>'Droid Sans', 
        'Economica' =>'Economica', 
        'Fredoka One' =>'Fredoka One',
        'Fjalla One' =>'Fjalla One',
        'Francois One' =>'Francois One', 
        'Frank Ruhl Libre' => 'Frank Ruhl Libre', 
        'Gloria Hallelujah' =>'Gloria Hallelujah',
        'Great Vibes' =>'Great Vibes', 
        'Handlee' =>'Handlee', 
        'Hammersmith One' =>'Hammersmith One',
        'Inconsolata' =>'Inconsolata',
        'Indie Flower' =>'Indie Flower', 
        'IM Fell English SC' =>'IM Fell English SC',
        'Julius Sans One' =>'Julius Sans One',
        'Josefin Slab' =>'Josefin Slab',
        'Josefin Sans' =>'Josefin Sans',
        'Kanit' =>'Kanit',
        'Lobster' =>'Lobster',
        'Lato' => 'Lato',
        'Lora' =>'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather',
        'Monda' =>'Monda',
        'Montserrat' =>'Montserrat',
        'Muli' =>'Muli',
        'Marck Script' =>'Marck Script',
        'Noto Serif' =>'Noto Serif',
        'Open Sans' =>'Open Sans',
        'Overpass' => 'Overpass', 
        'Overpass Mono' =>'Overpass Mono',
        'Oxygen' =>'Oxygen',
        'Orbitron' =>'Orbitron',
        'Patua One' =>'Patua One',
        'Pacifico' =>'Pacifico',
        'Padauk' =>'Padauk',
        'Playball' =>'Playball',
        'Playfair Display' =>'Playfair Display',
        'PT Sans' =>'PT Sans',
        'Philosopher' =>'Philosopher',
        'Permanent Marker' =>'Permanent Marker',
        'Poiret One' =>'Poiret One',
        'Quicksand' =>'Quicksand',
        'Quattrocento Sans' =>'Quattrocento Sans',
        'Raleway' =>'Raleway',
        'Rubik' =>'Rubik',
        'Rokkitt' =>'Rokkitt',
        'Russo One' => 'Russo One', 
        'Righteous' =>'Righteous', 
        'Slabo' =>'Slabo', 
        'Source Sans Pro' =>'Source Sans Pro',
        'Shadows Into Light Two' =>'Shadows Into Light Two',
        'Shadows Into Light' =>  'Shadows Into Light',
        'Sacramento' =>'Sacramento',
        'Shrikhand' =>'Shrikhand',
        'Tangerine' => 'Tangerine',
        'Ubuntu' =>'Ubuntu',
        'VT323' =>'VT323',
        'Varela Round' =>'Varela Round',
        'Vampiro One' =>'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' =>'Volkhov',
        'Yanone Kaffeesatz' =>'Yanone Kaffeesatz',
        'Poppins' => 'Poppins'
    );

	//Typography
	$wp_customize->add_section( 'mega_construction_typography', array(
    	'title'      => __( 'Typography', 'mega-construction' ),
		'priority'   => null,
		'panel' => 'mega_construction_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'mega_construction_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mega_construction_paragraph_color', array(
		'label' => __('Paragraph Color', 'mega-construction'),
		'section' => 'mega_construction_typography',
		'settings' => 'mega_construction_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('mega_construction_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'mega_construction_sanitize_choices'
	));
	$wp_customize->add_control(
	    'mega_construction_paragraph_font_family', array(
	    'section'  => 'mega_construction_typography',
	    'label'    => __( 'Paragraph Fonts','mega-construction'),
	    'type'     => 'select',
	    'choices'  => $mega_construction_font_array,
	));

	$wp_customize->add_setting('mega_construction_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('mega_construction_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','mega-construction'),
		'section'	=> 'mega_construction_typography',
		'setting'	=> 'mega_construction_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'mega_construction_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mega_construction_atag_color', array(
		'label' => __('"a" Tag Color', 'mega-construction'),
		'section' => 'mega_construction_typography',
		'settings' => 'mega_construction_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('mega_construction_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'mega_construction_sanitize_choices'
	));
	$wp_customize->add_control(
	    'mega_construction_atag_font_family', array(
	    'section'  => 'mega_construction_typography',
	    'label'    => __( '"a" Tag Fonts','mega-construction'),
	    'type'     => 'select',
	    'choices'  => $mega_construction_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'mega_construction_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mega_construction_li_color', array(
		'label' => __('"li" Tag Color', 'mega-construction'),
		'section' => 'mega_construction_typography',
		'settings' => 'mega_construction_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('mega_construction_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'mega_construction_sanitize_choices'
	));
	$wp_customize->add_control(
	    'mega_construction_li_font_family', array(
	    'section'  => 'mega_construction_typography',
	    'label'    => __( '"li" Tag Fonts','mega-construction'),
	    'type'     => 'select',
	    'choices'  => $mega_construction_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'mega_construction_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mega_construction_h1_color', array(
		'label' => __('H1 Color', 'mega-construction'),
		'section' => 'mega_construction_typography',
		'settings' => 'mega_construction_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('mega_construction_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'mega_construction_sanitize_choices'
	));
	$wp_customize->add_control(
	    'mega_construction_h1_font_family', array(
	    'section'  => 'mega_construction_typography',
	    'label'    => __( 'H1 Fonts','mega-construction'),
	    'type'     => 'select',
	    'choices'  => $mega_construction_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('mega_construction_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('mega_construction_h1_font_size',array(
		'label'	=> __('H1 Font Size','mega-construction'),
		'section'	=> 'mega_construction_typography',
		'setting'	=> 'mega_construction_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'mega_construction_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mega_construction_h2_color', array(
		'label' => __('H2 Color', 'mega-construction'),
		'section' => 'mega_construction_typography',
		'settings' => 'mega_construction_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('mega_construction_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'mega_construction_sanitize_choices'
	));
	$wp_customize->add_control(
	    'mega_construction_h2_font_family', array(
	    'section'  => 'mega_construction_typography',
	    'label'    => __( 'H2 Fonts','mega-construction'),
	    'type'     => 'select',
	    'choices'  => $mega_construction_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('mega_construction_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('mega_construction_h2_font_size',array(
		'label'	=> __('H2 Font Size','mega-construction'),
		'section'	=> 'mega_construction_typography',
		'setting'	=> 'mega_construction_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'mega_construction_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mega_construction_h3_color', array(
		'label' => __('H3 Color', 'mega-construction'),
		'section' => 'mega_construction_typography',
		'settings' => 'mega_construction_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('mega_construction_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'mega_construction_sanitize_choices'
	));
	$wp_customize->add_control(
	    'mega_construction_h3_font_family', array(
	    'section'  => 'mega_construction_typography',
	    'label'    => __( 'H3 Fonts','mega-construction'),
	    'type'     => 'select',
	    'choices'  => $mega_construction_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('mega_construction_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('mega_construction_h3_font_size',array(
		'label'	=> __('H3 Font Size','mega-construction'),
		'section'	=> 'mega_construction_typography',
		'setting'	=> 'mega_construction_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'mega_construction_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mega_construction_h4_color', array(
		'label' => __('H4 Color', 'mega-construction'),
		'section' => 'mega_construction_typography',
		'settings' => 'mega_construction_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('mega_construction_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'mega_construction_sanitize_choices'
	));
	$wp_customize->add_control(
	    'mega_construction_h4_font_family', array(
	    'section'  => 'mega_construction_typography',
	    'label'    => __( 'H4 Fonts','mega-construction'),
	    'type'     => 'select',
	    'choices'  => $mega_construction_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('mega_construction_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('mega_construction_h4_font_size',array(
		'label'	=> __('H4 Font Size','mega-construction'),
		'section'	=> 'mega_construction_typography',
		'setting'	=> 'mega_construction_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'mega_construction_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mega_construction_h5_color', array(
		'label' => __('H5 Color', 'mega-construction'),
		'section' => 'mega_construction_typography',
		'settings' => 'mega_construction_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('mega_construction_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'mega_construction_sanitize_choices'
	));
	$wp_customize->add_control(
	    'mega_construction_h5_font_family', array(
	    'section'  => 'mega_construction_typography',
	    'label'    => __( 'H5 Fonts','mega-construction'),
	    'type'     => 'select',
	    'choices'  => $mega_construction_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('mega_construction_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('mega_construction_h5_font_size',array(
		'label'	=> __('H5 Font Size','mega-construction'),
		'section'	=> 'mega_construction_typography',
		'setting'	=> 'mega_construction_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'mega_construction_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mega_construction_h6_color', array(
		'label' => __('H6 Color', 'mega-construction'),
		'section' => 'mega_construction_typography',
		'settings' => 'mega_construction_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('mega_construction_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'mega_construction_sanitize_choices'
	));
	$wp_customize->add_control(
	    'mega_construction_h6_font_family', array(
	    'section'  => 'mega_construction_typography',
	    'label'    => __( 'H6 Fonts','mega-construction'),
	    'type'     => 'select',
	    'choices'  => $mega_construction_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('mega_construction_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('mega_construction_h6_font_size',array(
		'label'	=> __('H6 Font Size','mega-construction'),
		'section'	=> 'mega_construction_typography',
		'setting'	=> 'mega_construction_h6_font_size',
		'type'	=> 'text'
	));

	//Topbar section
	$wp_customize->add_section('mega_construction_topbar_icon',array(
		'title'	=> __('Topbar Section','mega-construction'),
		'description'	=> __('Add Header Content here','mega-construction'),
		'priority'	=> null,
		'panel' => 'mega_construction_panel_id',
	));

	$wp_customize->add_setting('mega_construction_topbar_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('mega_construction_topbar_padding',array(
		'label'	=> esc_html__('Topbar Padding','mega-construction'),
		'section'=> 'mega_construction_topbar_icon',
	));

    $wp_customize->add_setting('mega_construction_top_topbar_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'mega_construction_sanitize_float'
	));
	$wp_customize->add_control('mega_construction_top_topbar_padding',array(
		'description'	=> __('Top','mega-construction'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'mega_construction_topbar_icon',
		'type'=> 'number',
	));

	$wp_customize->add_setting('mega_construction_bottom_topbar_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'mega_construction_sanitize_float'
	));
	$wp_customize->add_control('mega_construction_bottom_topbar_padding',array(
		'description'	=> __('Bottom','mega-construction'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'mega_construction_topbar_icon',
		'type'=> 'number',
	));

	$wp_customize->add_setting('mega_construction_sticky_header',array(
       'default' => '',
       'sanitize_callback'	=> 'mega_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('mega_construction_sticky_header',array(
       'type' => 'checkbox',
       'label' => __('Stick header on Desktop','mega-construction'),
       'section' => 'mega_construction_topbar_icon'
    ));

    $wp_customize->add_setting('mega_construction_sticky_header_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('mega_construction_sticky_header_padding',array(
		'label'	=> esc_html__('Sticky Header Padding','mega-construction'),
		'section'=> 'mega_construction_topbar_icon',
		'type' => 'hidden',
	));

    $wp_customize->add_setting('mega_construction_top_sticky_header_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'mega_construction_sanitize_float'
	));
	$wp_customize->add_control('mega_construction_top_sticky_header_padding',array(
		'description'	=> __('Top','mega-construction'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'mega_construction_topbar_icon',
		'type'=> 'number'
	));

	$wp_customize->add_setting('mega_construction_bottom_sticky_header_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'mega_construction_sanitize_float'
	));
	$wp_customize->add_control('mega_construction_bottom_sticky_header_padding',array(
		'description'	=> __('Bottom','mega-construction'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'mega_construction_topbar_icon',
		'type'=> 'number'
	));

	$wp_customize->add_setting('mega_construction_show_search',array(
       'default' => 'true',
       'sanitize_callback'	=> 'mega_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('mega_construction_show_search',array(
       'type' => 'checkbox',
       'label' => __('Show/Hide Search','mega-construction'),
       'section' => 'mega_construction_topbar_icon'
    ));

    $wp_customize->add_setting('mega_construction_search_placeholder',array(
       'default' => __('Search','mega-construction'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('mega_construction_search_placeholder',array(
       'type' => 'text',
       'label' => __('Search Placeholder text','mega-construction'),
       'section' => 'mega_construction_topbar_icon'
    ));

	$wp_customize->add_setting('mega_construction_address',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('mega_construction_address',array(
		'label'	=> __('Add Address','mega-construction'),
		'section'	=> 'mega_construction_topbar_icon',
		'setting'	=> 'mega_construction_address',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('mega_construction_address1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('mega_construction_address1',array(
		'label'	=> __('Add Address','mega-construction'),
		'section'	=> 'mega_construction_topbar_icon',
		'setting'	=> 'mega_construction_address',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('mega_construction_phone',array(
		'default'	=> '',
		'sanitize_callback'	=> 'mega_construction_sanitize_phone_number'
	));
	
	$wp_customize->add_control('mega_construction_phone',array(
		'label'	=> __('Add Contact','mega-construction'),
		'section'	=> 'mega_construction_topbar_icon',
		'setting'	=> 'mega_construction_phone',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('mega_construction_phone1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'mega_construction_sanitize_phone_number'
	));
	
	$wp_customize->add_control('mega_construction_phone1',array(
		'label'	=> __('Add Contact','mega-construction'),
		'section'	=> 'mega_construction_topbar_icon',
		'setting'	=> 'mega_construction_phone1',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('mega_construction_email',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));
	
	$wp_customize->add_control('mega_construction_email',array(
		'label'	=> __('Add Email','mega-construction'),
		'section'	=> 'mega_construction_topbar_icon',
		'setting'	=> 'mega_construction_email',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('mega_construction_email1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'mega_construction_sanitize_email'
	));
	
	$wp_customize->add_control('mega_construction_email1',array(
		'label'	=> __('Add Email','mega-construction'),
		'section'	=> 'mega_construction_topbar_icon',
		'setting'	=> 'mega_construction_email1',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('mega_construction_button_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('mega_construction_button_link',array(
		'label'	=> __('Special Offers','mega-construction'),
		'section'	=> 'mega_construction_topbar_icon',
		'setting'	=> 'mega_construction_button_link',
		'type'		=> 'url'
	));
	
	$wp_customize->add_section('mega_construction_header',array(
		'title'	=> __('Header','mega-construction'),
		'priority'	=> null,
		'panel' => 'mega_construction_panel_id',
	));

	$wp_customize->add_setting('mega_construction_menu_case',array(
        'default' => 'uppercase',
        'sanitize_callback' => 'mega_construction_sanitize_choices'
	));
	$wp_customize->add_control('mega_construction_menu_case',array(
        'type' => 'select',
        'label' => __('Menu Case','mega-construction'),
        'section' => 'mega_construction_header',
        'choices' => array(
            'uppercase' => __('Uppercase','mega-construction'),
            'capitalize' => __('Capitalize','mega-construction'),
        ),
	) );

	$wp_customize->add_setting( 'mega_construction_menu_font_size', array(
		'default'=> '14',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Mega_Construction_WP_Customize_Range_Control( $wp_customize, 'mega_construction_menu_font_size', array(
        'label'  => __('Menu Font Size','mega-construction'),
        'section'  => 'mega_construction_header',
        'description' => __('Measurement is in pixel.','mega-construction'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

	//home page slider
	$wp_customize->add_section( 'mega_construction_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'mega-construction' ),
		'priority'   => null,
		'panel' => 'mega_construction_panel_id'
	) );
	
	$wp_customize->add_setting('mega_construction_slider_hide',array(
       'default' => false,
       'sanitize_callback'	=> 'mega_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('mega_construction_slider_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','mega-construction'),
       'section' => 'mega_construction_slidersettings'
    ));

    $wp_customize->add_setting('mega_construction_slider_indicator',array(
        'default' => true,
        'sanitize_callback'	=> 'mega_construction_sanitize_checkbox'
	));
	$wp_customize->add_control('mega_construction_slider_indicator',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Indicators','mega-construction'),
      	'section' => 'mega_construction_slidersettings'
	));

	$wp_customize->add_setting('mega_construction_slider_title',array(
        'default' => true,
        'sanitize_callback'	=> 'mega_construction_sanitize_checkbox'
	));
	$wp_customize->add_control('mega_construction_slider_title',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Title','mega-construction'),
      	'section' => 'mega_construction_slidersettings'
	));

	$wp_customize->add_setting('mega_construction_slider_content',array(
        'default' => true,
        'sanitize_callback'	=> 'mega_construction_sanitize_checkbox'
	));
	$wp_customize->add_control('mega_construction_slider_content',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Content','mega-construction'),
      	'section' => 'mega_construction_slidersettings'
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'mega_construction_slidersettings_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'mega_construction_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'mega_construction_slidersettings_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'mega-construction' ),
			'section'  => 'mega_construction_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting( 'mega_construction_slider_speed', array(
		'default'              => 3000,
		'sanitize_callback'	=> 'mega_construction_sanitize_float'
	) );
	$wp_customize->add_control( 'mega_construction_slider_speed', array(
		'label'       => esc_html__( 'Slider Speed','mega-construction' ),
		'section'     => 'mega_construction_slidersettings',
		'type'        => 'number',
		'settings'    => 'mega_construction_slider_speed',
		'input_attrs' => array(
			'step'             => 500,
			'min'              => 500,
			'max'              => 5000,
		),
	) );

	//Slider excerpt
	$wp_customize->add_setting( 'mega_construction_slider_excerpt_number', array(
		'default'              => 25,
		'sanitize_callback'    => 'mega_construction_sanitize_float',
	) );
	$wp_customize->add_control( 'mega_construction_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Excerpt length','mega-construction' ),
		'section'     => 'mega_construction_slidersettings',
		'type'        => 'number',
		'settings'    => 'mega_construction_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('mega_construction_slider_image_overlay',array(
        'default' => true,
        'sanitize_callback'	=> 'mega_construction_sanitize_checkbox'
	));
	$wp_customize->add_control('mega_construction_slider_image_overlay',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Image Overlay','mega-construction'),
      	'section' => 'mega_construction_slidersettings',
	));

	$wp_customize->add_setting( 'mega_construction_slider_overlay_color', array(
	    'default' => '#000',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mega_construction_slider_overlay_color', array(
	    'label' => __('Slider Overlay Color', 'mega-construction'),
	    'section' => 'mega_construction_slidersettings',
  	)));

	//Opacity
	$wp_customize->add_setting('mega_construction_slider_opacity_color',array(
      'default'              => 0.7,
      'sanitize_callback' => 'mega_construction_sanitize_choices'
	));
	$wp_customize->add_control( 'mega_construction_slider_opacity_color', array(
		'label'       => esc_html__( 'Slider Image Opacity','mega-construction' ),
		'section'     => 'mega_construction_slidersettings',
		'type'        => 'select',
		'settings'    => 'mega_construction_slider_opacity_color',
		'choices' => array(
	      '0' =>  esc_attr('0','mega-construction'),
	      '0.1' =>  esc_attr('0.1','mega-construction'),
	      '0.2' =>  esc_attr('0.2','mega-construction'),
	      '0.3' =>  esc_attr('0.3','mega-construction'),
	      '0.4' =>  esc_attr('0.4','mega-construction'),
	      '0.5' =>  esc_attr('0.5','mega-construction'),
	      '0.6' =>  esc_attr('0.6','mega-construction'),
	      '0.7' =>  esc_attr('0.7','mega-construction'),
	      '0.8' =>  esc_attr('0.8','mega-construction'),
	      '0.9' =>  esc_attr('0.9','mega-construction')
		),
	));
	
	//About
	$wp_customize->add_section('mega_construction_about1',array(
		'title'	=> __('About Section','mega-construction'),
		'description'	=> __('Add About sections below.','mega-construction'),
		'panel' => 'mega_construction_panel_id',
	));

	$wp_customize->add_setting('mega_construction_sec1_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('mega_construction_sec1_title',array(
		'label'	=> __('Section Title','mega-construction'),
		'section'=> 'mega_construction_about1',
		'setting'=> 'mega_construction_sec1_title',
		'type'=> 'text'
	));
	
	$args = array('numberposts' => -1);
	$post_list = get_posts($args);
 	$i = 0;
	$pst[]='Select';  
	foreach($post_list as $post){
		$pst[$post->post_title] = $post->post_title;
	}

	$wp_customize->add_setting('mega_construction_about_setting',array(
		'sanitize_callback' => 'mega_construction_sanitize_choices',
	));

	$wp_customize->add_control('mega_construction_about_setting',array(
		'type'    => 'select',
		'choices' => $pst,
		'label' => __('Select post','mega-construction'),
		'section' => 'mega_construction_about1',
	));

	//layout setting
	$wp_customize->add_section( 'mega_construction_theme_layout', array(
    	'title'  => __( 'Blog Settings', 'mega-construction' ),
		'priority'   => null,
		'panel' => 'mega_construction_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('mega_construction_layout', array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'mega_construction_sanitize_choices'	        
    ));

	$wp_customize->add_control('mega_construction_layout', array(
        'type' => 'radio',
        'section' => 'mega_construction_theme_layout',
   		'label' => __('Blog Layout','mega-construction'),
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','mega-construction'),
            'Right Sidebar' => __('Right Sidebar','mega-construction'),
            'One Column' => __('One Column','mega-construction'),
            'Three Columns' => __('Three Columns','mega-construction'),
            'Four Columns' => __('Four Columns','mega-construction'),
            'Grid Layout' => __('Grid Layout','mega-construction')
    	),
    ) );

    $wp_customize->add_setting('mega_construction_metafields_date',array(
       'default' => 'true',
       'sanitize_callback'	=> 'mega_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('mega_construction_metafields_date',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Date ','mega-construction'),
       'section' => 'mega_construction_theme_layout'
    ));

    $wp_customize->add_setting('mega_construction_metafields_author',array(
       'default' => 'true',
       'sanitize_callback'	=> 'mega_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('mega_construction_metafields_author',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Author','mega-construction'),
       'section' => 'mega_construction_theme_layout'
    ));

    $wp_customize->add_setting('mega_construction_metafields_comment',array(
       'default' => 'true',
       'sanitize_callback'	=> 'mega_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('mega_construction_metafields_comment',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Comments','mega-construction'),
       'section' => 'mega_construction_theme_layout'
    ));

    $wp_customize->add_setting('mega_construction_post_navigation',array(
       'default' => 'true',
       'sanitize_callback' => 'mega_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('mega_construction_post_navigation',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Post Navigation','mega-construction'),
       'section' => 'mega_construction_theme_layout'
    ));

    $wp_customize->add_setting('mega_construction_blog_post_content',array(
    	'default' => 'Excerpt Content',
        'sanitize_callback' => 'mega_construction_sanitize_choices'
	));
	$wp_customize->add_control('mega_construction_blog_post_content',array(
        'type' => 'radio',
        'label' => __('Blog Post Content Type','mega-construction'),
        'section' => 'mega_construction_theme_layout',
        'choices' => array(
            'No Content' => __('No Content','mega-construction'),
            'Full Content' => __('Full Content','mega-construction'),
            'Excerpt Content' => __('Excerpt Content','mega-construction'),
        ),
	) );

   $wp_customize->add_setting( 'mega_construction_post_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'mega_construction_sanitize_float'
	) );
	$wp_customize->add_control( 'mega_construction_post_excerpt_number', array(
		'label'       => esc_html__( 'Blog Post Excerpt Number (Max 50)','mega-construction' ),
		'section'     => 'mega_construction_theme_layout',
		'type'        => 'number',
		'settings'    => 'mega_construction_post_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
		'active_callback' => 'mega_construction_excerpt_enabled'
	) );

	$wp_customize->add_setting( 'mega_construction_button_excerpt_suffix', array(
		'default'   => '...',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'mega_construction_button_excerpt_suffix', array(
		'label'       => esc_html__( 'Post Excerpt Suffix','mega-construction' ),
		'section'     => 'mega_construction_theme_layout',
		'type'        => 'text',
		'settings'    => 'mega_construction_button_excerpt_suffix',
		'active_callback' => 'mega_construction_excerpt_enabled'
	) );

	$wp_customize->add_setting( 'mega_construction_feature_image_border_radius', array(
		'default'=> '0',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Mega_Construction_WP_Customize_Range_Control( $wp_customize, 'mega_construction_feature_image_border_radius', array(
        'label'  => __('Featured Image Border Radius','mega-construction'),
        'section'  => 'mega_construction_theme_layout',
        'description' => __('Measurement is in pixel.','mega-construction'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        ),
    )));

    $wp_customize->add_setting( 'mega_construction_feature_image_shadow', array(
		'default'=> '0',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Mega_Construction_WP_Customize_Range_Control( $wp_customize, 'mega_construction_feature_image_shadow', array(
        'label'  => __('Featured Image Shadow','mega-construction'),
        'section'  => 'mega_construction_theme_layout',
        'description' => __('Measurement is in pixel.','mega-construction'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        ),
    )));

    $wp_customize->add_setting( 'mega_construction_pagination_type', array(
        'default'			=> 'page-numbers',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'mega_construction_pagination_type', array(
        'section' => 'mega_construction_theme_layout',
        'type' => 'select',
        'label' => __( 'Blog Pagination Style', 'mega-construction' ),
        'choices'		=> array(
            'page-numbers'  => __( 'Number', 'mega-construction' ),
            'next-prev' => __( 'Next/Prev', 'mega-construction' ),
    )));

    $wp_customize->add_setting('mega_construction_blog_nav_position',array(
        'default' => 'bottom',
        'sanitize_callback' => 'mega_construction_sanitize_choices'
    ));
	$wp_customize->add_control('mega_construction_blog_nav_position', array(
        'type' => 'select',
        'label' => __( 'Blog Post Navigation Position', 'mega-construction' ),
        'section' => 'mega_construction_theme_layout',
        'choices' => array(
            'top' => __('Top','mega-construction'),
            'bottom' => __('Bottom','mega-construction'),
            'both' => __('Both','mega-construction')
        ),
    ));

	$wp_customize->add_section( 'mega_construction_single_post_settings', array(
		'title' => __( 'Single Post Options', 'mega-construction' ),
		'panel' => 'mega_construction_panel_id',
	));

	$wp_customize->add_setting('mega_construction_single_post_breadcrumb',array(
       'default' => 'true',
       'sanitize_callback'	=> 'mega_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('mega_construction_single_post_breadcrumb',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Breadcrumb','mega-construction'),
       'section' => 'mega_construction_single_post_settings'
    ));

	$wp_customize->add_setting('mega_construction_single_post_date',array(
       'default' => 'true',
       'sanitize_callback'	=> 'mega_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('mega_construction_single_post_date',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Date','mega-construction'),
       'section' => 'mega_construction_single_post_settings'
    ));

    $wp_customize->add_setting('mega_construction_single_post_author',array(
       'default' => 'true',
       'sanitize_callback'	=> 'mega_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('mega_construction_single_post_author',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Author','mega-construction'),
       'section' => 'mega_construction_single_post_settings'
    ));

    $wp_customize->add_setting('mega_construction_single_post_comment_no',array(
       'default' => 'true',
       'sanitize_callback'	=> 'mega_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('mega_construction_single_post_comment_no',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Comment Number','mega-construction'),
       'section' => 'mega_construction_single_post_settings'
    ));

    $wp_customize->add_setting('mega_construction_post_tag',array(
       'default' => true,
       'sanitize_callback'	=> 'mega_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('mega_construction_post_tag',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single post Tag','mega-construction'),
       'section' => 'mega_construction_single_post_settings'
    ));

    $wp_customize->add_setting('mega_construction_single_post_image',array(
       'default' => 'true',
       'sanitize_callback'	=> 'mega_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('mega_construction_single_post_image',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Featured Image','mega-construction'),
       'section' => 'mega_construction_single_post_settings'
    ));

    $wp_customize->add_setting( 'mega_construction_post_featured_image', array(
        'default' => 'in-content',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'mega_construction_post_featured_image', array(
        'section' => 'mega_construction_single_post_settings',
        'type' => 'radio',
        'label' => __( 'Featured Image Display Type', 'mega-construction' ),
        'choices'		=> array(
            'banner'  => __('as Banner Image', 'mega-construction'),
            'in-content' => __( 'as Featured Image', 'mega-construction' ),
    )));

    $wp_customize->add_setting('mega_construction_single_post_nav',array(
       'default' => 'true',
       'sanitize_callback'	=> 'mega_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('mega_construction_single_post_nav',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Navigation','mega-construction'),
       'section' => 'mega_construction_single_post_settings'
    ));

    $wp_customize->add_setting( 'mega_construction_single_post_prev_nav_text', array(
		'default' => __('Previous','mega-construction' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'mega_construction_single_post_prev_nav_text', array(
		'label' => esc_html__( 'Single Post Previous Nav text','mega-construction' ),
		'section'     => 'mega_construction_single_post_settings',
		'type'        => 'text',
		'settings'    => 'mega_construction_single_post_prev_nav_text'
	) );

	$wp_customize->add_setting( 'mega_construction_single_post_next_nav_text', array(
		'default' => __('Next','mega-construction' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'mega_construction_single_post_next_nav_text', array(
		'label' => esc_html__( 'Single Post Next Nav text','mega-construction' ),
		'section'     => 'mega_construction_single_post_settings',
		'type'        => 'text',
		'settings'    => 'mega_construction_single_post_next_nav_text'
	) );

    $wp_customize->add_setting('mega_construction_single_post_comment',array(
       'default' => 'true',
       'sanitize_callback'	=> 'mega_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('mega_construction_single_post_comment',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post comment','mega-construction'),
       'section' => 'mega_construction_single_post_settings'
    ));

	$wp_customize->add_setting( 'mega_construction_comment_width', array(
		'default'=> '100',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Mega_Construction_WP_Customize_Range_Control( $wp_customize, 'mega_construction_comment_width', array(
        'label'  => __('Comment textarea width','mega-construction'),
        'section'  => 'mega_construction_single_post_settings',
        'description' => __('Measurement is in %.','mega-construction'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 100,
        ),
    )));

    $wp_customize->add_setting('mega_construction_comment_title',array(
       'default' => __('Leave a Reply','mega-construction'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('mega_construction_comment_title',array(
       'type' => 'text',
       'label' => __('Comment form Title','mega-construction'),
       'section' => 'mega_construction_single_post_settings'
    ));

    $wp_customize->add_setting('mega_construction_comment_submit_text',array(
       'default' => __('Post Comment','mega-construction'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('mega_construction_comment_submit_text',array(
       'type' => 'text',
       'label' => __('Comment Submit Button Label','mega-construction'),
       'section' => 'mega_construction_single_post_settings'
    ));

	$wp_customize->add_setting('mega_construction_related_posts',array(
       'default' => true,
       'sanitize_callback'	=> 'mega_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('mega_construction_related_posts',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Related Posts','mega-construction'),
       'section' => 'mega_construction_single_post_settings'
    ));

    $wp_customize->add_setting('mega_construction_related_posts_title',array(
       'default' => __('You May Also Like','mega-construction'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('mega_construction_related_posts_title',array(
       'type' => 'text',
       'label' => __('Related Posts Title','mega-construction'),
       'section' => 'mega_construction_single_post_settings'
    ));

    $wp_customize->add_setting( 'mega_construction_related_post_count', array(
		'default' => 3,
		'sanitize_callback'	=> 'mega_construction_sanitize_float'
	) );
	$wp_customize->add_control( 'mega_construction_related_post_count', array(
		'label' => esc_html__( 'Related Posts Count','mega-construction' ),
		'section' => 'mega_construction_single_post_settings',
		'type' => 'number',
		'settings' => 'mega_construction_related_post_count',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 6,
		),
	) );

    $wp_customize->add_setting( 'mega_construction_post_shown_by', array(
        'default' => 'categories',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'mega_construction_post_shown_by', array(
        'section' => 'mega_construction_single_post_settings',
        'type' => 'radio',
        'label' => __( 'Related Posts must be shown:', 'mega-construction' ),
        'choices' => array(
            'categories'  => __('By Categories', 'mega-construction'),
            'tags' => __( 'By Tags', 'mega-construction' ),
    )));

	// Button option
	$wp_customize->add_section( 'mega_construction_button_options', array(
		'title' =>  __( 'Button Options', 'mega-construction' ),
		'panel' => 'mega_construction_panel_id',
	));

    $wp_customize->add_setting( 'mega_construction_blog_button_text', array(
		'default'   => __('Read Full','mega-construction'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'mega_construction_blog_button_text', array(
		'label'       => esc_html__( 'Blog Post Button Label','mega-construction' ),
		'section'     => 'mega_construction_button_options',
		'type'        => 'text',
		'settings'    => 'mega_construction_blog_button_text'
	) );

	$wp_customize->add_setting('mega_construction_button_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('mega_construction_button_padding',array(
		'label'	=> esc_html__('Button Padding','mega-construction'),
		'section'=> 'mega_construction_button_options',
		'active_callback' => 'mega_construction_button_enabled'
	));

	$wp_customize->add_setting('mega_construction_top_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'mega_construction_sanitize_float'
	));
	$wp_customize->add_control('mega_construction_top_button_padding',array(
		'label'	=> __('Top','mega-construction'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'mega_construction_button_options',
		'type'=> 'number',
		'active_callback' => 'mega_construction_button_enabled'
	));

	$wp_customize->add_setting('mega_construction_bottom_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'mega_construction_sanitize_float'
	));
	$wp_customize->add_control('mega_construction_bottom_button_padding',array(
		'label'	=> __('Bottom','mega-construction'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'mega_construction_button_options',
		'type'=> 'number',
		'active_callback' => 'mega_construction_button_enabled'
	));

	$wp_customize->add_setting('mega_construction_left_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'mega_construction_sanitize_float'
	));
	$wp_customize->add_control('mega_construction_left_button_padding',array(
		'label'	=> __('Left','mega-construction'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'mega_construction_button_options',
		'type'=> 'number',
		'active_callback' => 'mega_construction_button_enabled'
	));

	$wp_customize->add_setting('mega_construction_right_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'mega_construction_sanitize_float'
	));
	$wp_customize->add_control('mega_construction_right_button_padding',array(
		'label'	=> __('Right','mega-construction'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'mega_construction_button_options',
		'type'=> 'number',
		'active_callback' => 'mega_construction_button_enabled'
	));

	$wp_customize->add_setting( 'mega_construction_button_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Mega_Construction_WP_Customize_Range_Control( $wp_customize, 'mega_construction_button_border_radius', array(
        'label'  => __('Border Radius','mega-construction'),
        'section'  => 'mega_construction_button_options',
        'description' => __('Measurement is in pixel.','mega-construction'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        ),
		'active_callback' => 'mega_construction_button_enabled'
    )));

    //Sidebar setting
	$wp_customize->add_section( 'mega_construction_sidebar_options', array(
    	'title'   => __( 'Sidebar options', 'mega-construction' ),
		'priority'   => null,
		'panel' => 'mega_construction_panel_id'
	) );

	$wp_customize->add_setting('mega_construction_single_page_layout',array(
        'default' => 'One Column',
        'sanitize_callback' => 'mega_construction_sanitize_choices'
    ));
	$wp_customize->add_control('mega_construction_single_page_layout', array(
        'type' => 'select',
        'label' => __( 'Single Page Layout', 'mega-construction' ),
        'section' => 'mega_construction_sidebar_options',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','mega-construction'),
            'Right Sidebar' => __('Right Sidebar','mega-construction'),
            'One Column' => __('One Column','mega-construction')
        ),
    ));

    $wp_customize->add_setting('mega_construction_single_post_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'mega_construction_sanitize_choices'
    ));
	$wp_customize->add_control('mega_construction_single_post_layout', array(
        'type' => 'select',
        'label' => __( 'Single Post Layout', 'mega-construction' ),
        'section' => 'mega_construction_sidebar_options',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','mega-construction'),
            'Right Sidebar' => __('Right Sidebar','mega-construction'),
            'One Column' => __('One Column','mega-construction')
        ),
    ));

    //Advance Options
	$wp_customize->add_section( 'mega_construction_advance_options', array(
    	'title' => __( 'Advance Options', 'mega-construction' ),
		'priority'   => null,
		'panel' => 'mega_construction_panel_id'
	) );

	$wp_customize->add_setting('mega_construction_preloader',array(
       'default' => 'true',
       'sanitize_callback'	=> 'mega_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('mega_construction_preloader',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','mega-construction'),
       'section' => 'mega_construction_advance_options'
    ));

    $wp_customize->add_setting( 'mega_construction_preloader_color', array(
	    'default' => '#333333',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mega_construction_preloader_color', array(
  		'label' => __('Preloader Color', 'mega-construction'),
	    'section' => 'mega_construction_advance_options',
	    'settings' => 'mega_construction_preloader_color',
  	)));

  	$wp_customize->add_setting( 'mega_construction_preloader_bg_color', array(
	    'default' => '#ffffff',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mega_construction_preloader_bg_color', array(
  		'label' => __('Preloader Background Color', 'mega-construction'),
	    'section' => 'mega_construction_advance_options',
	    'settings' => 'mega_construction_preloader_bg_color',
  	)));

  	$wp_customize->add_setting('mega_construction_preloader_type',array(
        'default' => 'Square',
        'sanitize_callback' => 'mega_construction_sanitize_choices'
	));
	$wp_customize->add_control('mega_construction_preloader_type',array(
        'type' => 'radio',
        'label' => __('Preloader Type','mega-construction'),
        'section' => 'mega_construction_advance_options',
        'choices' => array(
            'Square' => __('Square','mega-construction'),
            'Circle' => __('Circle','mega-construction'),
        ),
	) );

	$wp_customize->add_setting('mega_construction_theme_layout_options',array(
        'default' => 'Default Theme',
        'sanitize_callback' => 'mega_construction_sanitize_choices'
	));
	$wp_customize->add_control('mega_construction_theme_layout_options',array(
        'type' => 'radio',
        'label' => __('Theme Layout','mega-construction'),
        'section' => 'mega_construction_advance_options',
        'choices' => array(
            'Default Theme' => __('Default Theme','mega-construction'),
            'Container Theme' => __('Container Theme','mega-construction'),
            'Box Container Theme' => __('Box Container Theme','mega-construction'),
        ),
	) );

	//404 Page Option
	$wp_customize->add_section('mega_construction_404_settings',array(
		'title'	=> __('404 Page & Search Result Settings','mega-construction'),
		'priority'	=> null,
		'panel' => 'mega_construction_panel_id',
	));

	$wp_customize->add_setting('mega_construction_404_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('mega_construction_404_title',array(
		'label'	=> __('404 Title','mega-construction'),
		'section'	=> 'mega_construction_404_settings',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('mega_construction_404_button_label',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('mega_construction_404_button_label',array(
		'label'	=> __('404 button Label','mega-construction'),
		'section'	=> 'mega_construction_404_settings',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('mega_construction_search_result_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('mega_construction_search_result_title',array(
		'label'	=> __('No Search Result Title','mega-construction'),
		'section'	=> 'mega_construction_404_settings',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('mega_construction_search_result_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('mega_construction_search_result_text',array(
		'label'	=> __('No Search Result Text','mega-construction'),
		'section'	=> 'mega_construction_404_settings',
		'type'		=> 'text'
	));	

	//Woocommerce Options
	$wp_customize->add_section('mega_construction_woocommerce',array(
		'title'	=> __('WooCommerce Options','mega-construction'),
		'panel' => 'mega_construction_panel_id',
	));

	$wp_customize->add_setting('mega_construction_shop_page_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'mega_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('mega_construction_shop_page_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable Shop Page Sidebar','mega-construction'),
       'section' => 'mega_construction_woocommerce'
    ));

    $wp_customize->add_setting('mega_construction_shop_page_navigation',array(
       'default' => true,
       'sanitize_callback'	=> 'mega_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('mega_construction_shop_page_navigation',array(
       'type' => 'checkbox',
       'label' => __('Enable Shop Page Pagination','mega-construction'),
       'section' => 'mega_construction_woocommerce'
    ));

    $wp_customize->add_setting('mega_construction_single_product_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'mega_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('mega_construction_single_product_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable Single Product Page Sidebar','mega-construction'),
       'section' => 'mega_construction_woocommerce'
    ));

    $wp_customize->add_setting('mega_construction_single_related_products',array(
       'default' => true,
       'sanitize_callback' => 'mega_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('mega_construction_single_related_products',array(
       'type' => 'checkbox',
       'label' => __('Enable Related Products','mega-construction'),
       'section' => 'mega_construction_woocommerce'
    ));

    $wp_customize->add_setting('mega_construction_products_per_page',array(
		'default'=> '9',
		'sanitize_callback'	=> 'mega_construction_sanitize_float'
	));
	$wp_customize->add_control('mega_construction_products_per_page',array(
		'label'	=> __('Products Per Page','mega-construction'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'mega_construction_woocommerce',
		'type'=> 'number',
	));

	$wp_customize->add_setting('mega_construction_products_per_row',array(
		'default'=> '3',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mega_construction_products_per_row',array(
		'label'	=> __('Products Per Row','mega-construction'),
		'choices' => array(
            '2' => '2',
			'3' => '3',
			'4' => '4',
        ),
		'section'=> 'mega_construction_woocommerce',
		'type'=> 'select',
	));

	$wp_customize->add_setting('mega_construction_product_border',array(
       'default' => true,
       'sanitize_callback'	=> 'mega_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('mega_construction_product_border',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide product border','mega-construction'),
       'section' => 'mega_construction_woocommerce',
    ));

    $wp_customize->add_setting('mega_construction_product_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('mega_construction_product_padding',array(
		'label'	=> esc_html__('Product Padding','mega-construction'),
		'section'=> 'mega_construction_woocommerce',
	));

	$wp_customize->add_setting( 'mega_construction_product_top_padding',array(
		'default' => 10,
		'sanitize_callback' => 'mega_construction_sanitize_float'
	));
	$wp_customize->add_control('mega_construction_product_top_padding', array(
		'label' => esc_html__( 'Top','mega-construction' ),
		'type' => 'number',
		'section' => 'mega_construction_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('mega_construction_product_bottom_padding',array(
		'default' => 10,
		'sanitize_callback' => 'mega_construction_sanitize_float'
	));
	$wp_customize->add_control('mega_construction_product_bottom_padding', array(
		'label' => esc_html__( 'Bottom','mega-construction' ),
		'type' => 'number',
		'section' => 'mega_construction_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('mega_construction_product_left_padding',array(
		'default' => 10,
		'sanitize_callback' => 'mega_construction_sanitize_float'
	));
	$wp_customize->add_control('mega_construction_product_left_padding', array(
		'label' => esc_html__( 'Left','mega-construction' ),
		'type' => 'number',
		'section' => 'mega_construction_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'mega_construction_product_right_padding',array(
		'default' => 10,
		'sanitize_callback' => 'mega_construction_sanitize_float'
	));
	$wp_customize->add_control('mega_construction_product_right_padding', array(
		'label' => esc_html__( 'Right','mega-construction' ),
		'type' => 'number',
		'section' => 'mega_construction_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'mega_construction_product_border_radius',array(
		'default' => '0',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Mega_Construction_WP_Customize_Range_Control( $wp_customize, 'mega_construction_product_border_radius', array(
        'label'  => __('Product Border Radius','mega-construction'),
        'section'  => 'mega_construction_woocommerce',
        'description' => __('Measurement is in pixel.','mega-construction'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

	$wp_customize->add_setting('mega_construction_product_button_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('mega_construction_product_button_padding',array(
		'label'	=> esc_html__('Product Button Padding','mega-construction'),
		'section'=> 'mega_construction_woocommerce',
	));

	$wp_customize->add_setting( 'mega_construction_product_button_top_padding',array(
		'default' => 10,
		'sanitize_callback' => 'mega_construction_sanitize_float'
	));
	$wp_customize->add_control('mega_construction_product_button_top_padding', array(
		'label' => esc_html__( 'Top','mega-construction' ),
		'type' => 'number',
		'section' => 'mega_construction_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('mega_construction_product_button_bottom_padding',array(
		'default' => 10,
		'sanitize_callback' => 'mega_construction_sanitize_float'
	));
	$wp_customize->add_control('mega_construction_product_button_bottom_padding', array(
		'label' => esc_html__( 'Bottom','mega-construction' ),
		'type' => 'number',
		'section' => 'mega_construction_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('mega_construction_product_button_left_padding',array(
		'default' => 15,
		'sanitize_callback' => 'mega_construction_sanitize_float'
	));
	$wp_customize->add_control('mega_construction_product_button_left_padding', array(
		'label' => esc_html__( 'Left','mega-construction' ),
		'type' => 'number',
		'section' => 'mega_construction_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'mega_construction_product_button_right_padding',array(
		'default' => 15,
		'sanitize_callback' => 'mega_construction_sanitize_float'
	));
	$wp_customize->add_control('mega_construction_product_button_right_padding', array(
		'label' => esc_html__( 'Right','mega-construction' ),
		'type' => 'number',
		'section' => 'mega_construction_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'mega_construction_product_button_border_radius',array(
		'default' => '0',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Mega_Construction_WP_Customize_Range_Control( $wp_customize, 'mega_construction_product_button_border_radius', array(
        'label'  => __('Product Button Border Radius','mega-construction'),
        'section'  => 'mega_construction_woocommerce',
        'description' => __('Measurement is in pixel.','mega-construction'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

    $wp_customize->add_setting('mega_construction_product_sale_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'mega_construction_sanitize_choices'
	));
	$wp_customize->add_control('mega_construction_product_sale_position',array(
        'type' => 'radio',
        'label' => __('Product Sale Position','mega-construction'),
        'section' => 'mega_construction_woocommerce',
        'choices' => array(
            'Left' => __('Left','mega-construction'),
            'Right' => __('Right','mega-construction'),
        ),
	) );

    $wp_customize->add_setting('mega_construction_product_sale_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('mega_construction_product_sale_padding',array(
		'label'	=> esc_html__('Product Sale Padding','mega-construction'),
		'section'=> 'mega_construction_woocommerce',
	));

	$wp_customize->add_setting( 'mega_construction_product_sale_top_padding',array(
		'default' => 0,
		'sanitize_callback' => 'mega_construction_sanitize_float'
	));
	$wp_customize->add_control('mega_construction_product_sale_top_padding', array(
		'label' => esc_html__( 'Top','mega-construction' ),
		'type' => 'number',
		'section' => 'mega_construction_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('mega_construction_product_sale_bottom_padding',array(
		'default' => 0,
		'sanitize_callback' => 'mega_construction_sanitize_float'
	));
	$wp_customize->add_control('mega_construction_product_sale_bottom_padding', array(
		'label' => esc_html__( 'Bottom','mega-construction' ),
		'type' => 'number',
		'section' => 'mega_construction_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('mega_construction_product_sale_left_padding',array(
		'default' => 0,
		'sanitize_callback' => 'mega_construction_sanitize_float'
	));
	$wp_customize->add_control('mega_construction_product_sale_left_padding', array(
		'label' => esc_html__( 'Left','mega-construction' ),
		'type' => 'number',
		'section' => 'mega_construction_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('mega_construction_product_sale_right_padding',array(
		'default' => 0,
		'sanitize_callback' => 'mega_construction_sanitize_float'
	));
	$wp_customize->add_control('mega_construction_product_sale_right_padding', array(
		'label' => esc_html__( 'Right','mega-construction' ),
		'type' => 'number',
		'section' => 'mega_construction_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'mega_construction_product_sale_border_radius',array(
		'default' => '50',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Mega_Construction_WP_Customize_Range_Control( $wp_customize, 'mega_construction_product_sale_border_radius', array(
        'label'  => __('Product Sale Border Radius','mega-construction'),
        'section'  => 'mega_construction_woocommerce',
        'description' => __('Measurement is in pixel.','mega-construction'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

	//footer text
	$wp_customize->add_section('mega_construction_footer_section',array(
		'title'	=> __('Footer Section','mega-construction'),
		'panel' => 'mega_construction_panel_id'
	));

	$wp_customize->add_setting('mega_construction_hide_scroll',array(
        'default' => 'true',
        'sanitize_callback'	=> 'mega_construction_sanitize_checkbox'
	));
	$wp_customize->add_control('mega_construction_hide_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Back To Top','mega-construction'),
      	'section' => 'mega_construction_footer_section',
	));

	$wp_customize->add_setting('mega_construction_back_to_top',array(
        'default' => 'Right',
        'sanitize_callback' => 'mega_construction_sanitize_choices'
	));
	$wp_customize->add_control('mega_construction_back_to_top',array(
        'type' => 'radio',
        'label' => __('Back to Top Alignment','mega-construction'),
        'section' => 'mega_construction_footer_section',
        'choices' => array(
            'Left' => __('Left','mega-construction'),
            'Right' => __('Right','mega-construction'),
            'Center' => __('Center','mega-construction'),
        ),
	) );

	$wp_customize->add_setting('mega_construction_footer_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mega_construction_footer_bg_color', array(
		'label'    => __('Footer Background Color', 'mega-construction'),
		'section'  => 'mega_construction_footer_section',
	)));

	$wp_customize->add_setting('mega_construction_footer_bg_image',array(
		'default'	=> esc_url(get_template_directory_uri()) . '/images/footer-bg.jpg',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'mega_construction_footer_bg_image',array(
        'label' => __('Footer Background Image','mega-construction'),
        'section' => 'mega_construction_footer_section'
	)));

	$wp_customize->add_setting('mega_construction_footer_widget',array(
        'default'           => '4',
        'sanitize_callback' => 'mega_construction_sanitize_choices',
    ));
    $wp_customize->add_control('mega_construction_footer_widget',array(
        'type'        => 'radio',
        'label'       => __('No. of Footer columns', 'mega-construction'),
        'section'     => 'mega_construction_footer_section',
        'description' => __('Select the number of footer columns and add your widgets in the footer.', 'mega-construction'),
        'choices' => array(
            '1'     => __('One column', 'mega-construction'),
            '2'     => __('Two columns', 'mega-construction'),
            '3'     => __('Three columns', 'mega-construction'),
            '4'     => __('Four columns', 'mega-construction')
        ),
    ));

    $wp_customize->add_setting('mega_construction_copyright_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('mega_construction_copyright_padding',array(
		'label'	=> esc_html__('Copyright Padding','mega-construction'),
		'section'=> 'mega_construction_footer_section',
	));

    $wp_customize->add_setting('mega_construction_top_copyright_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'mega_construction_sanitize_float'
	));
	$wp_customize->add_control('mega_construction_top_copyright_padding',array(
		'description'	=> __('Top','mega-construction'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'mega_construction_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('mega_construction_bottom_copyright_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'mega_construction_sanitize_float'
	));
	$wp_customize->add_control('mega_construction_bottom_copyright_padding',array(
		'description'	=> __('Bottom','mega-construction'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'mega_construction_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('mega_construction_copyright_alignment',array(
        'default' => 'center',
        'sanitize_callback' => 'mega_construction_sanitize_choices'
	));
	$wp_customize->add_control('mega_construction_copyright_alignment',array(
        'type' => 'radio',
        'label' => __('Copyright Alignment','mega-construction'),
        'section' => 'mega_construction_footer_section',
        'choices' => array(
            'left' => __('Left','mega-construction'),
            'right' => __('Right','mega-construction'),
            'center' => __('Center','mega-construction'),
        ),
	) );

	$wp_customize->add_setting( 'mega_construction_copyright_font_size', array(
		'default'=> '15',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Mega_Construction_WP_Customize_Range_Control( $wp_customize, 'mega_construction_copyright_font_size', array(
        'label'  => __('Copyright Font Size','mega-construction'),
        'section'  => 'mega_construction_footer_section',
        'description' => __('Measurement is in pixel.','mega-construction'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));
	
	$wp_customize->add_setting('mega_construction_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('mega_construction_text',array(
		'label'	=> __('Copyright Text','mega-construction'),
		'description'	=> __('Add some text for footer like copyright etc.','mega-construction'),
		'section'	=> 'mega_construction_footer_section',
		'type'		=> 'text'
	));	
}
add_action( 'customize_register', 'mega_construction_customize_register' );	

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Mega_Construction_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Mega_Construction_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Mega_Construction_Customize_Section_Pro(
				$manager,
				'mega_construction_pro_link',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'Mega Construction Pro', 'mega-construction' ),
					'pro_text' => esc_html__( 'Go Pro', 'mega-construction' ),
					'pro_url'  => esc_url('https://www.themesglance.com/themes/premium-construction-wordpress-theme/'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'mega-construction-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'mega-construction-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Mega_Construction_Customize::get_instance();