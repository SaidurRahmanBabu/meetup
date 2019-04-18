<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Meetup is a free responsive single page bootstrap template by designerdada.com">
  <meta name="author" content="Akash Bhadange">

  <!-- Bootstrap -->
  
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> id="page-top" data-spy="scroll" data-target=".side-menu">
      <!-- nav menu -->
    <?php get_template_part('template-part/meet', 'nav'); ?>