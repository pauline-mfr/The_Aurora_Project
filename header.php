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
                   <i id="search-icon" class="fas fa-search fa-3x color-icons"></i><span id="search-bar"><?php get_search_form(); ?></span>
                  </div>
                  <div>
                    <?php if (function_exists('the_custom_logo')) {
                      the_custom_logo();
                    } ?>
                  </div>
                  <div id="menu">
                    <label for="slide-menu-right" class="fas fa-bars fa-3x color-icons"></label>
                    <div class="slide-menu">
                      <input id="slide-menu-right" class="menu-toggle" type="checkbox" />
                      <div class="menu-display">
                        <label for="slide-menu-right" class="close-icon">Close</label>
                        <h1 class="menu-title">Menu</h1>
                        <div class="menu-list">
                          <ul>
                            <li><a href="#">Accueil</a></li>
                            <li><a href="#">A propos</a></li>
                            <li><a href="#">Articles</a></li>
                            <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
                          </ul>
                        </div>
                      </div>
                      <label for="slide-menu-right" class="menu-overlay"></label>

                    </div>
                  </div>
                  </div>
                </div>
              </header>

    <section class="container text-center pt-5">
      <h1 class="text-uppercase"><?php bloginfo('name'); ?></h1>
      <h2><?php bloginfo('description'); ?></h2>
    </section>
