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
                   <div class="srch clearfix">
                      <form method="GET" action="<?php echo get_site_url(); ?>">
                        <div class="container cbd"><input max-length="120" autocomplete="off" placeholder="Rechercher..." value="<?php the_search_query(); ?>" name="s" id="q"><button type="submit" title="Rechercher sur le site"><i class="fa fa-search"></i></button></div>
                      </form>
                    </div>
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
                          </ul>
                        </div>
                      </div>
                      <label for="slide-menu-right" class="menu-overlay"></label>
                    </div>               </div>
                  </div>
                </div>
              </header>

    <section class="container text-center pt-5">
      <h1 class="text-uppercase"><?php bloginfo('name'); ?></h1>
      <h2><?php bloginfo('description'); ?></h2>
    </section>
