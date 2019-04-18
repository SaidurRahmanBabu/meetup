<?php
	//theme scripts
	require_once(get_theme_file_path( 'inc/meet-scripts.php' ));

	//theme after setup hook
	require_once(get_theme_file_path( 'inc/meet-theme-setup.php' ));

	//theme init hook
	require_once(get_theme_file_path( 'inc/meet-init.php' ));





	//shortcodes
	require_once(get_theme_file_path( 'template-part/meet-header.php' ));
	require_once(get_theme_file_path( 'template-part/meet-event.php' ));
	require_once(get_theme_file_path( 'template-part/meet-speakers.php' ));
	require_once(get_theme_file_path( 'template-part/meet-schedule.php' ));
	require_once(get_theme_file_path( 'template-part/meet-tickets.php' ));
	require_once(get_theme_file_path( 'inc/meet-vc.php' ));






		// $meet_page = new WP_Query(array(
		// 	'post_type' => array('page')
		// ));        
                                                                                 
  //   // The second loop. if ( $meet_page->have_posts() ) 
  //   echo '<ul>';

  //   while ( $meet_page->have_posts() ) : $meet_page->the_post();
      
  //     echo '<li>' . get_the_title() . '</li>';

  //   endwhile;

  //   echo '</ul>';
		// wp_reset_postdata();
	?>