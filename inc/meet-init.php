<?php
	if( ! function_exists('meet_init')):

		function meet_init(){
			//Nav Menu
			register_nav_menus(array(
				'main-menu' => __('Main Menu', 'meet')
			));

	//menu class
		function add_menuclass($ulclass) {
		   return preg_replace('/<a /', '<a class="page-scroll"', $ulclass);
			}
		add_filter('wp_nav_menu','add_menuclass');


		}
		add_action('init', 'meet_init');

	endif;