<?php

function aurora_register_assets() {
wp_register_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css');
wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js', [ 'popper'], false, true);
wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', [], false, true);

wp_enqueue_style('bootstrap');
wp_enqueue_style('style', get_stylesheet_uri());
wp_enqueue_script('bootstrap');

}

add_action('wp_enqueue_scripts', 'aurora_register_assets');
