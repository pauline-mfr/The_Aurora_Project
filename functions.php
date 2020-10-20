<?php
add_theme_support('post-thumbnails');

function aurora_register_assets() {
wp_register_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css');
wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js', [ 'popper'], false, true);
wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', [], false, true);

wp_enqueue_style('bootstrap');
wp_enqueue_style('style', get_stylesheet_uri());
wp_enqueue_script('bootstrap');


}

add_action('wp_enqueue_scripts', 'aurora_register_assets');

function setup_theme() {
  add_theme_support('custom-logo', [
    'header-text' => ['site-title', 'site-description'],
    'height' => 100,
    'width' => 400,
    'flex-height' => true,
    'flex-width' => true,


  ]);
}
add_action('after_setup_theme', 'setup_theme');

//CUSTOM POST TYPE

function mission_post_types() {
	$labels = array(
        'name' => 'Missions',
        'all_items' => 'Toutes les missions',  // sous menu
        'singular_name' => 'Mission',
        'add_new_item' => 'Ajouter une mission',
        'edit_item' => 'Modifier une mission',
        'menu_name' => 'Missions'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-universal-access',
	);

	register_post_type( 'Missions', $args );

	}

add_action( 'init', 'mission_post_types' ); // hook init lance la fonction
