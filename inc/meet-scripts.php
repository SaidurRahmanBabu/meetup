<?php
	function meet_scripts(){
		//css files
		wp_enqueue_style( 'meet-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css','null','all');

		wp_enqueue_style( 'meet-style', get_template_directory_uri() . '/css/style.css','null','all');

		wp_enqueue_style( 'meet-themify-icons', get_template_directory_uri() . '/css/themify-icons.css','null','all');

		wp_enqueue_style( 'meet-fotawesome-icons', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css');

		wp_enqueue_style( 'meet-dosis-font', get_template_directory_uri() . '/css/dosis-font.css','null','all');

		wp_enqueue_style( 'theme-style', get_stylesheet_uri(), time(), 'all' );


		//js files
		wp_enqueue_script( 'meet-bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array ( 'jquery' ), null, true);

		wp_enqueue_script( 'meet-jquery.easing.min', get_template_directory_uri() . '/js/jquery.easing.min.js', array ( 'jquery' ), null, true);

		wp_enqueue_script( 'meet-scrolling-nav', get_template_directory_uri() . '/js/scrolling-nav.js', array ( 'jquery' ), null, true);

		wp_enqueue_script( 'meet-validator', get_template_directory_uri() . '/js/validator.js', array ( 'jquery' ), null, true);

	}
	add_action('wp_enqueue_scripts', 'meet_scripts');