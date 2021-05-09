<?php 

//custom-logo-section
function theme_prefix_setup() {
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );
}
add_action( 'after_setup_theme', 'theme_prefix_setup' );
//menu
function custom_theme_setup() {
    register_nav_menus( array(
            'primary' => esc_html__( 'Primary Menu', 'matco' ),
            'footer'  => esc_html__( 'Footer Menu', 'matco' ),
    ) );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );
 add_theme_support('post-thumbnails',array('post','service','slider'));
function web_service() {
	// Assign lables here
	$labels = array(
		'name' => _x('Service', 'service', 'web'),
		'singular_name' => _x('service ', 'service ', 'web'),
		'menu_name' => __('service ', 'web'),
		'name_admin_bar' => __('service ', 'web'),
		'archives' => __('service  Archives', 'web'),
		'attributes' => __('service  Attributes', 'web'),
		'parent_item_colon' => __('Parent service :', 'web'),
		'all_items' => __('All service', 'web'),
		'add_new_item' => __('Add New service ', 'web'),
		'add_new' => __('Add service ', 'web'),
		'new_item' => __('New service ', 'web'),
		'edit_item' => __('Edit service ', 'web'),
		'update_item' => __('Update service ', 'web'),
		'view_item' => __('View service ', 'web'),
		'view_items' => __('View service', 'web'),
		'search_items' => __('Search service ', 'web'),
		'not_found' => __('Not found', 'web'),
		'not_found_in_trash' => __('Not found in Trash', 'web'),
		'featured_image' => __('Featured Image', 'web'),
		'set_featured_image' => __('Set featured image', 'web'),
		'remove_featured_image' => __('Remove featured image', 'web'),
		'use_featured_image' => __('Use as featured image', 'web'),
		'insert_into_item' => __('Insert into service ', 'web'),
		'uploaded_to_this_item' => __('Uploaded to this service ', 'web'),
		'items_list' => __('service list', 'web'),
		'items_list_navigation' => __('service list navigation', 'web'),
		'filter_items_list' => __('Filter service list', 'web'),
	);
	$args = array(
		'label' => __('service', 'web'),
		'description' => __('service  Description', 'web'),
		'labels' => $labels,
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
		'taxonomies' => array('post_tag','category'),
		'hierarchical' => false,
		'public' => false,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 20,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => false,
		'capability_type' => 'post',
	);
	register_post_type('service', $args);

}
add_action('init','web_service');

function web_slider() {
	// Assign lables here
	$labels = array(
		'name' => _x('slider', 'slider', 'web'),
		'singular_name' => _x('slider ', 'slider ', 'web'),
		'menu_name' => __('slider ', 'web'),
		'name_admin_bar' => __('slider ', 'web'),
		'archives' => __('slider  Archives', 'web'),
		'attributes' => __('slider  Attributes', 'web'),
		'parent_item_colon' => __('Parent slider :', 'web'),
		'all_items' => __('All slider', 'web'),
		'add_new_item' => __('Add New slider ', 'web'),
		'add_new' => __('Add slider ', 'web'),
		'new_item' => __('New slider ', 'web'),
		'edit_item' => __('Edit slider ', 'web'),
		'update_item' => __('Update slider ', 'web'),
		'view_item' => __('View slider ', 'web'),
		'view_items' => __('View slider', 'web'),
		'search_items' => __('Search slider ', 'web'),
		'not_found' => __('Not found', 'web'),
		'not_found_in_trash' => __('Not found in Trash', 'web'),
		'featured_image' => __('Featured Image', 'web'),
		'set_featured_image' => __('Set featured image', 'web'),
		'remove_featured_image' => __('Remove featured image', 'web'),
		'use_featured_image' => __('Use as featured image', 'web'),
		'insert_into_item' => __('Insert into slider ', 'web'),
		'uploaded_to_this_item' => __('Uploaded to this slider ', 'web'),
		'items_list' => __('slider list', 'web'),
		'items_list_navigation' => __('slider list navigation', 'web'),
		'filter_items_list' => __('Filter slider list', 'web'),
	);
	$args = array(
		'label' => __('slider', 'web'),
		'description' => __('slider  Description', 'web'),
		'labels' => $labels,
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
		'taxonomies' => array('post_tag','category'),
		'hierarchical' => false,
		'public' => false,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 20,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => false,
		'capability_type' => 'post',
	);
	register_post_type('slider', $args);

}
add_action('init','web_slider');
 ?>