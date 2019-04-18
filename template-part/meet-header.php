<?php
  /* 
  *Template Name: Header
  */
?>

<?php
  function meet_header($atts){
    extract(shortcode_atts(array(
      'title'     => '',
      'sub_title' => '',
      'date'      => '',
      'button'    => '',
      'img'       => '',
      'logo'      => ''
      
    ), $atts));

    ob_start();


    ?>


  <div class="container-fluid">
    <!-- Start: Header -->
    <div class="row hero-header" id="home">
      <div class="col-md-7">
        <?php
          $image = wp_get_attachment_image_src($logo);
          if($image):
        ?>
        <img src="<?php echo esc_url($image[0]); ?>" class="logo">
      <?php endif; ?>

        <h1><?php echo esc_html( $title ); ?></h1>

        <h3><?php echo esc_html( $sub_title ); ?></h3>

        <!-- <h4>20<sup>th</sup> to 22<sup>nd</sup>  October, 2015</h4> -->
        <h4><?php echo esc_html($date); ?></h4>

        <a href="#" class="btn btn-lg btn-red"><?php echo esc_html($button); ?><span class="ti-arrow-right"></span></a>

      </div>
      <div class="col-md-5 hidden-xs">
        <?php
          $rocket = wp_get_attachment_image_src($img);
          if($rocket):
        ?>
        <img src="<?php echo esc_url($rocket[0]); ?>" class="rocket animated bounce">
      <?php endif; ?>
      </div>
    </div>
    <!-- End: Header -->
  </div>


  <?php

  return ob_get_clean();
}
add_shortcode('header', 'meet_header');