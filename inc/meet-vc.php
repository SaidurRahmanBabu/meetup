<?php
	function meet_vc_element(){

		//Section Header
		vc_map(array(
			'name' 										=> __('Header', 'meet'),
			'description' 						=> __('Header Section', 'meet'),
			'base' 										=> 'header',
			'icon' 										=> '',
			'show_settings_on_create' => true,
			'category' 								=> __('Meet Content', 'meet'),
			'params' 									=> array(

				array(
					'param_name' 	=> 'title',
					'type' 				=> 'textfield',
					'heading' 		=> __('Title', 'meet'),
					'description' => __('Type Heading Title', 'meet')
				),

				array(
					'param_name'  => 'sub_title',
					'type' 				=> 'textfield',
					'heading' 		=> __('Sub Title', 'meet'),
					'description' => __('Type Sub Title Text', 'meet')
				),

				array(
					'param_name'  => 'date',
					'type' 				=> 'textfield',
					'heading' 		=> __('Date', 'meet'),
					'description' => __('Type Date', 'meet')
				),

				array(
					'param_name'  => 'button',
					'type' 				=> 'textfield',
					'heading' 		=> __('Button', 'meet'),
					'description' => __('Button Text', 'meet')
				),

				array(
					'param_name'  => 'logo',
					'type' 				=> 'attach_image',
					'heading' 		=> __('Logo', 'meet'),
					'description' => __('Logo Image', 'meet')
				),

				array(
					'param_name'  => 'img',
					'type' 				=> 'attach_image',
					'heading' 		=> __('Image', 'meet'),
					'description' => __('Animated Image', 'meet')
				)

			)
		));
		//end of header Section 

		//Section Event
		vc_map(array(
			'name' 										=> __('Events', 'meet'),
			'description' 						=> __('Events Section', 'meet'),
			'base' 										=> 'events',
			'icon' 										=> '',
			'show_settings_on_create' => true,
			'category' 								=> __('Meet Content', 'meet'),
			'params' 									=> array(

				array(
					'param_name' 	=> 'title',
					'type' 				=> 'textfield',
					'heading' 		=> __('Title', 'meet'),
					'description' => __('Type Events Title', 'meet')
				),

				array(
					'param_name'  => 'event_group',
					'type' 				=> 'param_group',
					'heading' 		=> __('Event Elements', 'meet'),
					'value' 			=> '',
					'params' 			=> array(
						array(
							'param_name' 	=> 'sub_title',
							'type' 				=> 'textfield',
							'heading' 		=> __('Title', 'meet'),
							'description' => __('Type Events Element Title', 'meet')
						),
						
						array(
							'param_name' 	=> 'icon',
							'type' 				=> 'iconpicker',
							'heading' 		=> __('Icon', 'meet'),
							'description' => __('Select Events Icon', 'meet')
						),
						
						array(
							'param_name' 	=> 'content',
							'type' 				=> 'textarea',
							'heading' 		=> __('Text', 'meet'),
							'description' => __('Type Events Content Text', 'meet')
						),

					)//group params
				)
			)
		));
		//end of Event Section 


		//Section Speakers
		vc_map(array(
			'name' 										=> __('Speakers', 'meet'),
			'description' 						=> __('Speakers Section', 'meet'),
			'base' 										=> 'speakers',
			'icon' 										=> '',
			'show_settings_on_create' => true,
			'category' 								=> __('Meet Content', 'meet'),
			'params' 									=> array(

				array(
					'param_name' 	=> 'title',
					'type' 				=> 'textfield',
					'heading' 		=> __('Title', 'meet'),
					'description' => __('Type Speaker Title', 'meet')
				),

				array(
					'param_name'  => 'speaker_group',
					'type' 				=> 'param_group',
					'heading' 		=> __('Speaker Elements', 'meet'),
					'value' 			=> '',
					'params' 			=> array(
						array(
							'param_name' 	=> 'sub_title',
							'type' 				=> 'textfield',
							'heading' 		=> __('Title', 'meet'),
							'description' => __('Type Speaker Element Title', 'meet')
						),
						
						array(
							'param_name' 	=> 'content',
							'type' 				=> 'textarea',
							'heading' 		=> __('Text', 'meet'),
							'description' => __('Type Speaker Content Text', 'meet')
						),
						
						array(
							'param_name' 	=> 'icon1',
							'type' 				=> 'iconpicker',
							'heading' 		=> __('Social Icon1', 'meet'),
							'description' => __('Select Speaker Icon', 'meet')
						),
						
						array(
							'param_name' 	=> 'icon2',
							'type' 				=> 'iconpicker',
							'heading' 		=> __('Social Icon2', 'meet'),
							'description' => __('Select Speaker Icon', 'meet')
						),
						
						array(
							'param_name' 	=> 'icon3',
							'type' 				=> 'iconpicker',
							'heading' 		=> __('Social Icon3', 'meet'),
							'description' => __('Select Speaker Icon', 'meet')
						),
						
						array(
							'param_name' 	=> 'image',
							'type' 				=> 'attach_image',
							'heading' 		=> __('Image', 'meet'),
							'description' => __('Select Speaker Image', 'meet')
						),

					)//group params
				)
			)
		));
		//end of Speakers Section 


		//Section Tickets
		vc_map(array(
			'name' 										=> __('Tickets', 'meet'),
			'description' 						=> __('Tickets Section', 'meet'),
			'base' 										=> 'tickets',
			'icon' 										=> '',
			'show_settings_on_create' => true,
			'category' 								=> __('Meet Content', 'meet'),
			'params' 									=> array(

				array(
					'param_name' 	=> 'title',
					'type' 				=> 'textfield',
					'heading' 		=> __('Title', 'meet'),
					'description' => __('Type Tickets Title', 'meet')
				),

				array(
					'param_name'  => 'tickets_group',
					'type' 				=> 'param_group',
					'heading' 		=> __('Tickets Elements', 'meet'),
					'value' 			=> '',
					'params' 			=> array(
						array(
							'param_name' 	=> 'sub_title',
							'type' 				=> 'textfield',
							'heading' 		=> __('Title', 'meet'),
							'description' => __('Type Tickets Element Title', 'meet')
						),
						
						array(
							'param_name' 	=> 'price',
							'type' 				=> 'textfield',
							'heading' 		=> __('Price', 'meet'),
							'description' => __('Tickets Price', 'meet')
						),
						
						array(
							'param_name' 	=> 'content',
							'type' 				=> 'textarea',
							'heading' 		=> __('Text', 'meet'),
							'description' => __('Tickets Text Content', 'meet')
						),
						
						array(
							'param_name' 	=> 'button',
							'type' 				=> 'textfield',
							'heading' 		=> __('Button', 'meet'),
							'description' => __('Button Text', 'meet'),
							'value'				=> 'Buy'
						),
						
						array(
							'param_name' 	=> 'remaining',
							'type' 				=> 'textfield',
							'heading' 		=> __('Ramaining', 'meet'),
							'description' => __('Number of ticket remains', 'meet'),
							'value'				=> '(6 Remains)',
						)

					)//group params
				)
			)
		));
		//end of Speakers Section 


		//Section Schedule
		vc_map(array(
			'name' 										=> __('Schedule', 'meet'),
			'description' 						=> __('Schedule Section', 'meet'),
			'base' 										=> 'schedule',
			'icon' 										=> '',
			'show_settings_on_create' => true,
			'category' 								=> __('Meet Content', 'meet'),
			'params' 									=> array(

				array(
					'param_name' 	=> 'title',
					'type' 				=> 'textfield',
					'heading' 		=> __('Title', 'meet'),
					'description' => __('Type Schedule Title', 'meet')
				),
				//param group for tab menu
				array(
					'param_name'  => 'schedule_menu_group',
					'type' 				=> 'param_group',
					'heading' 		=> __('Schedule tablist', 'meet'),
					'value' 			=> '',
					'params' 			=> array(
						array(
							'param_name' 	=> 'link_id',
							'type' 				=> 'textfield',
							'heading' 		=> __('Link Id', 'meet'),
							'description' => __('Tab Link Id Name', 'meet')
						),
						
						array(
							'param_name' 	=> 'link_date_text',
							'type' 				=> 'textfield',
							'heading' 		=> __('Link text', 'meet'),
							'description' => __('Link tab text', 'meet')
						),

					)
				),// link tab group params

				//param group for tab content
				array(
					'param_name'  => 'schedule_section_group',
					'type' 				=> 'param_group',
					'heading' 		=> __('Schedule tablist', 'meet'),
					'value' 			=> '',
					'params'			=> array(
						array(
							'param_name' 	=> 'section_id',
							'type' 				=> 'textfield',
							'heading' 		=> __('Section Id', 'meet'),
							'description' => __('i.e: Have to same with link id', 'meet')
						),

						array(
							'param_name' 	=> 'section_date',
							'type' 				=> 'textfield',
							'heading' 		=> __('Date', 'meet'),
							'description' => __('Section Date', 'meet')
						),

						array(
							'param_name' 	=> 'img',
							'type' 				=> 'attach_image',
							'heading' 		=> __('Date', 'meet'),
							'description' => __('Section Date', 'meet')
						),

						array(
							'param_name' 	=> 'sub_title',
							'type' 				=> 'textfield',
							'heading' 		=> __('Title', 'meet'),
							'description' => __('Content Title', 'meet')
						),

						array(
							'param_name' 	=> 'content',
							'type' 				=> 'textarea',
							'heading' 		=> __('Text', 'meet'),
							'description' => __('Content Text', 'meet')
						),

					),
				)//link tab group content
			)
		));
		//end of Schedule Section 


	} //end functmeet meet_vc_element
	add_action('vc_before_init', 'meet_vc_element');