
<?php
  /* 
  *Template Name: Speakers
  */
?>


<?php
  function meet_speakers($atts, $content = null){
    extract(shortcode_atts(array(
      'speaker_group' => '',
      'title'         => '',
      'sub_title'     => '',
      'content'       => '',
      'icon1'         => '',
      'icon2'         => '',
      'icon3'         => '',
      'image'         => ''

    ), $atts));

    $content = wpb_js_remove_wpautop($content, true);

    ob_start();


    ?>

        <div class="row me-row content-ct speaker" id="speakers">
          <h2 class="row-title"><?php echo esc_html($title); ?></h2>

          <?php
            $speaker_groups = vc_param_group_parse_atts($speaker_group);
            foreach($speaker_groups as $speaker):
          ?>

          <div class="col-md-4 col-sm-6 feature">
            <?php
              $images = wp_get_attachment_image_src($speaker['image']);
            ?>
            <img src="<?php echo $images[0]; ?>" class="speaker-img">

            <h3><?php echo esc_html($speaker['sub_title']); ?></h3>

            <p><?php echo esc_html($speaker['content']); ?></p>

            <ul class="speaker-social">
              <li><a href="#"><span class="<?php echo esc_attr($speaker['icon1']); ?>"></span></a></li>
              <li><a href="#"><span class="<?php echo esc_attr($speaker['icon2']); ?>"></span></a></li>
              <li><a href="#"><span class="<?php echo esc_attr($speaker['icon3']); ?>"></span></a></li>
            </ul>
          </div>

        <?php endforeach; ?>
        </div>
        <!-- End: Speakers -->


  <?php

  return ob_get_clean();
}
add_shortcode('speakers', 'meet_speakers');