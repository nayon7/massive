<?php
function damble_setup() {

	load_theme_textdomain( 'damble' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'damble' ),
		'social'  => __( 'Social Links Menu', 'damble' ),
	) );

	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	add_theme_support( 'custom-logo', array(
		'height'      => 248,
		'width'       => 248,
		'flex-height' => true,
	) );
}

add_action( 'after_setup_theme', 'damble_setup' );


function damble_scripts() {

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'damble-css', get_template_directory_uri() . '/assets/css/main.css', array(), '3.2' );
	wp_enqueue_style( 'noscript', get_template_directory_uri() . '/assets/css/noscript.css', array(), '3.2' );

	// Load our main stylesheet.
	wp_enqueue_style( 'damble-style', get_stylesheet_uri() );

	// Load the Internet Explorer specific stylesheet.

	wp_enqueue_script( 'damble-scrollex', get_template_directory_uri() . '/assets/js/jquery.scrollex.min.js', array('jQuery'), '20141010', true );
	wp_enqueue_script( 'damble-scrolly', get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js', array('jQuery'), '20141010', true );
	wp_enqueue_script( 'damble-browser', get_template_directory_uri() . '/assets/js/browser.min.js', array('jQuery'), '20141010', true );
	wp_enqueue_script( 'damble-breakpoints', get_template_directory_uri() . '/assets/js/breakpoints.min.js', array('jQuery'), '20141010', true );
	wp_enqueue_script( 'damble-util', get_template_directory_uri() . '/assets/js/util.js', array('jQuery'), '20141010', true );
	wp_enqueue_script( 'damble-main', get_template_directory_uri() . '/assets/js/main.js', array('jQuery'), '20141010', true );
}

add_action( 'wp_enqueue_scripts', 'damble_scripts' );



function damble_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Widget Area', 'damble' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'damble' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'damble_widgets_init' );



function damble_theme_custom_post() {
    register_post_type( 'generic',
        array(
            'labels' => array(
                'name' => __( 'generics' ),
                'singular_name' => __( 'generic' )
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true
        )
    );
    register_post_type( 'damble',
        array(
            'labels' => array(
                'name' => __( 'dambles' ),
                'singular_name' => __( 'damble' )
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true
        )
    );
	}


	add_action( 'init', 'damble_theme_custom_post' );





		function damble_custom($wp_customizer){
			$wp_customizer->add_section('cust_header',array(
				'title'=>__('Header Section','damble'),
				'priority'=>'80'
			));

			$wp_customizer->add_setting('cust_header_number',array(
				'default'=>"+ (012) 830 456 789",
				'transport'=>'refresh', //postMessage
		//		'type'=>'option' //theme_mod or option
			));

			$wp_customizer->add_control('cust_header_number',array(
				'label'=>__('header Numer','damble'),
				'section'=>'cust_header',
				'settings'=>'cust_header_number',
				'type'=>'text'
			));


			$wp_customizer->add_setting('header_right_title', array(
				'transport' => 'refresh',
			));

			$wp_customizer->add_control('header_right_title',array(
				'label' =>__('header Right Title'),
				'section' => 'cust_header',
				'settings' => 'header_right_title',
				'type' => 'text',
			 ));



			$wp_customizer->add_setting('header_title', array(
				'transport' => 'refresh',
			));

			$wp_customizer->add_control('header_title_ctrl',array(
				'label' =>__('header Top Title'),
				'section' => 'cust_header',
				'settings' => 'header_title',
				'type' => 'text',
			 ));


			$wp_customizer->add_setting('header_title_tops', array(
				'transport' => 'refresh',
			));

			$wp_customizer->add_control('header_footer_title_ctrl',array(
				'label' =>__('header Top Sub Title'),
				'section' => 'cust_header',
				'settings' => 'header_title_tops',
				'type' => 'text',
			 ));

			$wp_customizer->add_setting('header_title_bottom', array(
				'transport' => 'refresh',
			));

			$wp_customizer->add_control('header_footer_bottom_title_ctrl',array(
				'label' =>__('header Middle Title'),
				'section' => 'cust_header',
				'settings' => 'header_title_bottom',
				'type' => 'text',
			 ));



		}
		add_action('customize_register','damble_custom');




	function juta_footer_settings($wp_customizer){
		$wp_customizer->add_section('cust_footer',array(
			'title'=>__('Footer Section','juta'),
			'priority'=>'80'
		));

		$wp_customizer->add_setting('cust_footer_number',array(
			'default'=>"+ (012) 800 456 789",
			'transport'=>'refresh', //postMessage
	//		'type'=>'option' //theme_mod or option
		));

		$wp_customizer->add_control('cust_footer_number_ctrl',array(
			'label'=>__('Footer Numer','juta'),
			'section'=>'cust_footer',
			'settings'=>'cust_footer_number',
			'type'=>'text'
		));




		$wp_customizer->add_setting('cust_footer_copyright_text',array(
			'transport'=>'refresh', //postMessage
	//		'type'=>'option' //theme_mod or option
		));

		$wp_customizer->add_control('cust_services_subheading_ctrl',array(
			'label'=>__('Footer Copy Right Text','juta'),
			'section'=>'cust_footer',
			'settings'=>'cust_footer_copyright_text',
			'type'=>'textarea'
		));



		$wp_customizer->add_setting('footer_right_title', array(
			'transport' => 'refresh',
		));

		$wp_customizer->add_control('footer_right_title_ctrl',array(
			'label' =>__('footer Right Title'),
			'section' => 'cust_footer',
			'settings' => 'footer_right_title',
			'type' => 'text',
		 ));



		$wp_customizer->add_setting('footer_right_text', array(
			'transport' => 'refresh',
		));

		$wp_customizer->add_control('footer_right_text_ctrl',array(
			'label' =>__('footer Right Text'),
			'section' => 'cust_footer',
			'settings' => 'footer_right_text',
			'type' => 'textarea',
		 ));

		$wp_customizer->add_setting('footer_right_timing', array(
			'transport' => 'refresh',
		));



		$wp_customizer->add_control('footer_right_timing_ctrl',array(
			'label' =>__('footer Right Timing'),
			'section' => 'cust_footer',
			'settings' => 'footer_right_timing',
			'type' => 'text',
		 ));


		 $wp_customizer->add_setting('footer_desktop_logo', array(
		    'capability'            =>  'edit_theme_options',
		    'theme_supports'        =>  '',
		    'sanitize_js_callback'  =>  '',
		    'transport'             =>  'refresh',
	  	));
		$wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'footer_desktop_logo', array(
		    'label'                 =>  __('Choose Footer Logo', 'juta'),
		    'section'               =>  'cust_footer',
		    'settings'              =>  'footer_desktop_logo',
		)));







	}
	add_action('customize_register','juta_footer_settings');












?>
