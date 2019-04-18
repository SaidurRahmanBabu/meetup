<?php
	if(! function_exists('meet_theme_setup')):

		function meet_theme_setup(){
			//load text domain
			load_theme_textdomain( 'meet', get_template_directory() . '/languages' );

			//theme supports
			require_once('meet-theme-support.php');


		}
		add_action('after_setup_theme', 'meet_theme_setup');

	endif;