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


function my_register_sidebars() {
    register_sidebar(
        array(
            'id'            => 'footer-1',
            'name'          => __( 'Footer 1' ),
            'description'   => __( 'Widget for footer 1' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'footer-2',
            'name'          => __( 'Footer 2' ),
            'description'   => __( 'Widget for footer 2' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'footer-3',
            'name'          => __( 'Footer 3' ),
            'description'   => __( 'Widget for footer 3' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}

add_action( 'widgets_init', 'my_register_sidebars' );

add_theme_support('post-thumbnails');



function infographies_custom_post_type() {

	$labels = array(
		'name'                => _x( 'Infographies', 'Post Type General Name'),
		'singular_name'       => _x( 'Ifographie', 'Post Type Singular Name'),
		'menu_name'           => __( 'Infographies'),
		'all_items'           => __( 'Toutes les infographies'),
		'view_item'           => __( 'Voir les infographies'),
		'add_new_item'        => __( 'Ajouter une nouvelle infographie'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer l\' infographie'),
		'update_item'         => __( 'Modifier l\' infographie'),
		'search_items'        => __( 'Rechercher une infographie'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);


	$args = array(
		'label'               => __( 'Infographies'),
		'description'         => __( 'Tous sur les infographies'),
		'labels'              => $labels,
        'menu_icon'      => 'dashicons-format-image',
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'infographies'),

	);
	register_post_type( 'infographies', $args );

}

add_action( 'init', 'infographies_custom_post_type', 0 );