<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <script src="https://kit.fontawesome.com/5bf2af5d34.js" crossorigin="anonymous"></script>
  <title><?php wp_title() ?></title>
  <?php wp_head() ?>
</head>
<body <?php body_class(); ?> >
  <?php wp_body_open(); ?>


  <header class="header">
    <div class="container-fluid">
           <div class="mt-2 d-flex justify-content-between">
               <div>
                   <i class="fas fa-search fa-3x color-icons"></i>
               </div>
               <div>
                 <?php if (function_exists('the_custom_logo')) {
                   the_custom_logo();
                 } ?>
               </div>
               <div>
                   <i class="fas fa-bars fa-3x color-icons"></i>
               </div>
           </div>
       </div>
    </header>


    <section class="container text-center pt-5">
      <h1 class="text-uppercase"><?php bloginfo('name'); ?></h1>
      <h2><?php bloginfo('description'); ?></h2>

    </section>
