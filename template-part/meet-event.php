<?php
  /* 
  *Template Name: Events
  */
?>
<?php
  function meet_events($atts, $content = null){
    extract(shortcode_atts(array(
      'event_group' => '',
      'title'       => '',
      'sub_title'   => '',
      'content'     => '',
      'icon'        => ''

    ), $atts));

    ob_start();


    ?>

  <div class="container">
    <!-- Start: Desc -->
    <div class="row me-row content-ct" id="events">

      <h2 class="row-title"><?php echo esc_html($title); ?></h2>

    <?php
      $event_groups = vc_param_group_parse_atts($event_group);
      foreach($event_groups as $event):
    ?>

      <div class="col-md-4 feature">
        <span class="<?php echo esc_attr($event['icon']); ?>"></span>

        <h3><?php echo esc_html($event['sub_title']); ?></h3>

        <p><?php
          echo esc_html($event['content']);
        ?></p>

      </div>

      <?php endforeach; ?>
    </div>
  </div>


  <?php

  return ob_get_clean();
}
add_shortcode('events', 'meet_events');