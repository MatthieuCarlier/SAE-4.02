<?php

show_admin_bar(true);
add_theme_support( 'post-thumbnails' );

/** STYLES */
/**
 * Enqueue scripts and styles.
 */
function init_scripts() {
    // style css
	wp_enqueue_style('global-style', get_template_directory_uri().'/input.css', [], null, 'all');

    wp_enqueue_style('style', get_template_directory_uri().'/public/css/style.css', [], null, 'all');
	wp_enqueue_style('chargement', get_template_directory_uri().'/public/css/chargement.css', [], null, 'all');
    wp_enqueue_style('front', get_template_directory_uri().'/public/css/output.css', [], null, 'all');
    


    // lib js
    // Enqueue Tailwind CSS

    add_action( 'wp_enqueue_scripts', 'enqueue_tailwind_css' );
    wp_enqueue_script( 'custom-script', get_template_directory_uri().'/public/js/script.js');

}
add_action( 'wp_enqueue_scripts', 'init_scripts' );


/** ACF */
function acf_json_save_groups($path) {
	return get_stylesheet_directory() . '/inc';
}
add_filter( 'acf/settings/save_json', 'acf_json_save_groups' );

function acf_json_load_point($paths) {
	unset($paths[0]);
	$paths[] = get_stylesheet_directory() . '/inc';
	return $paths;
}
add_filter('acf/settings/load_json', 'acf_json_load_point');


/** MENUS */
function register_custom_menus() {
    register_nav_menus(
      array(
        'header-menu' => __('Menu header'),
        'footer-menu' => __('Menu footer'),
              )
    );
}
add_action('init', 'register_custom_menus');


// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'cards', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'cards', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'cards', 'text_domain' ),
		'name_admin_bar'        => __( 'cards', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'cards', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'cards', $args );

}
add_action( 'init', 'custom_post_type', 0 );