 <?php
  /* 
  *Template Name: Tickets
  */
?>
<?php
  function meet_tickets($atts, $content = null){
    extract(shortcode_atts(array(
      'tickets_group' => '',
      'title'         => '',
      'sub_title'     => '',
      'content'       => '',
      'price'         => '',
      'button'        => '',
      'remaining'     => ''

    ), $atts));

    ob_start();


    ?>

 <!-- Start: Tickets -->
    <div class="container-fluid tickets" id="tickets">
      <div class="row me-row content-ct">

        <h2 class="row-title"><?php echo esc_html($title); ?></h2>

          <?php
            $ticket_group = vc_param_group_parse_atts($tickets_group);
            foreach($ticket_group as $ticket):
          ?>

        <div class="col-md-4 col-sm-6 col-md-offset-1">
          <h3><?php echo esc_html($ticket['sub_title']); ?></h3>

          <p class="price"><?php echo esc_html($ticket['price']); ?></p>

          <p><?php echo esc_html($ticket['content']); ?></p>

          <a href="#" class="btn btn-lg btn-red">
            <?php echo esc_html($ticket['button']); ?> 
            <small><?php echo esc_html($ticket['remaining']); ?></small>
          </a>
        </div>

        <?php endforeach; ?>
      </div>
    </div>
      <!-- End: Tickets -->


  <?php

  return ob_get_clean();
}
add_shortcode('tickets', 'meet_tickets');