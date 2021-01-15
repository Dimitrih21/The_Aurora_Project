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

//CUSTOM POST TYPE MISSIONS

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


// MENU
register_nav_menus( array(
 'main' => 'Menu header',
 'footer' => 'Menu footer',
) );

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


// CUSTOM VIDEO HEADER
function video_post_types() {
	$labels = array(
        'name' => 'Vidéos',
        'all_items' => 'Toutes les vidéos',  // sous menu
        'singular_name' => 'Vidéo',
        'add_new_item' => 'Ajouter une vidéo',
        'edit_item' => 'Modifier une vidéo',
        'menu_name' => 'Vidéos'
    );
	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 4,
        'menu_icon' => 'dashicons-video-alt3',
	);
	register_post_type( 'Vidéos', $args );
	}
add_action( 'init', 'video_post_types' ); // hook init lance la fonction
