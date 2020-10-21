<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <title><?php bloginfo('name'); ?></title>
   <!-- FONTAWESOME -->
   <script src="https://kit.fontawesome.com/5bf2af5d34.js" crossorigin="anonymous"></script>
  <?php wp_head() ?>
</head>
<body <?php body_class(); ?> >
  <?php wp_body_open(); ?>
  <header class="header">
    <div class="container">
      <p class="color-icons">blablala</p>
    </header>


    <section class="container text-center pt-5">
      <h1 class="text-uppercase"><?php bloginfo('name'); ?></h1>
      <h2><?php bloginfo('description'); ?></h2>

    </section>
