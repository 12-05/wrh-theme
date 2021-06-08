<?php

function create_kontakt() {
	$labels = array(
		'name' => _x( 'Ansprechpartner', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Ansprechpartner', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Ansprechpartner', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Ansprechpartner', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'partner Archives', 'textdomain' ),
		'attributes' => __( 'partner Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent partner:', 'textdomain' ),
		'all_items' => __( 'All Ansprechpartner', 'textdomain' ),
		'add_new_item' => __( 'Add New Ansprechpartner', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New partner', 'textdomain' ),
		'edit_item' => __( 'Edit partner', 'textdomain' ),
		'update_item' => __( 'Update Ansprechpartner', 'textdomain' ),
		'view_item' => __( 'View Ansprechpartner', 'textdomain' ),
		'view_items' => __( 'View Ansprechpartner', 'textdomain' ),
		'search_items' => __( 'Search Ansprechpartner', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into partner', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this partner', 'textdomain' ),
		'items_list' => __( 'Ansprechpartner list', 'textdomain' ),
		'items_list_navigation' => __( 'Ansprechpartner list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Ansprechpartner list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'partner', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => get_template_directory_uri().'/assets/img/handshake.svg',
		'supports' => array('title'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'partner', $args );

}




function create_room() {
	$labels = array(
		'name' => _x( 'Rooms', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Room', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Rooms', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Room', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Room Archives', 'textdomain' ),
		'attributes' => __( 'Room Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Room:', 'textdomain' ),
		'all_items' => __( 'All Rooms', 'textdomain' ),
		'add_new_item' => __( 'Add New Room', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Room', 'textdomain' ),
		'edit_item' => __( 'Edit Room', 'textdomain' ),
		'update_item' => __( 'Update Room', 'textdomain' ),
		'view_item' => __( 'View Room', 'textdomain' ),
		'view_items' => __( 'View Rooms', 'textdomain' ),
		'search_items' => __( 'Search Room', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Room', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Room', 'textdomain' ),
		'items_list' => __( 'Rooms list', 'textdomain' ),
		'items_list_navigation' => __( 'Rooms list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Rooms list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'room', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => get_template_directory_uri().'/assets/img/room.svg',
		'supports' => array('title'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'room', $args );

}

function create_angebot() {
	$labels = array(
		'name' => _x( 'Angebote', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Angebot', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Angebote', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Angebot', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Angebot Archives', 'textdomain' ),
		'attributes' => __( 'Angebot Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Angebot:', 'textdomain' ),
		'all_items' => __( 'All Angebote', 'textdomain' ),
		'add_new_item' => __( 'Add New Angebot', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Angebot', 'textdomain' ),
		'edit_item' => __( 'Edit Angebot', 'textdomain' ),
		'update_item' => __( 'Update Angebot', 'textdomain' ),
		'view_item' => __( 'View Angebot', 'textdomain' ),
		'view_items' => __( 'View Angebote', 'textdomain' ),
		'search_items' => __( 'Search Angebot', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Angebot', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Angebot', 'textdomain' ),
		'items_list' => __( 'Angebote list', 'textdomain' ),
		'items_list_navigation' => __( 'Angebote list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Angebote list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'angebot', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => get_template_directory_uri().'/assets/img/offer.svg',
		'supports' => array('title'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'angebot', $args );

}

function create_job() {
	$labels = array(
		'name' => _x( 'Job', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Job', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Job', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Job', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'partner Archives', 'textdomain' ),
		'attributes' => __( 'partner Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent partner:', 'textdomain' ),
		'all_items' => __( 'All Jobs', 'textdomain' ),
		'add_new_item' => __( 'Add New Job', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Job', 'textdomain' ),
		'edit_item' => __( 'Edit Job', 'textdomain' ),
		'update_item' => __( 'Update Job', 'textdomain' ),
		'view_item' => __( 'View Job', 'textdomain' ),
		'view_items' => __( 'View Job', 'textdomain' ),
		'search_items' => __( 'Search Job', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into partner', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Job', 'textdomain' ),
		'items_list' => __( 'Job list', 'textdomain' ),
		'items_list_navigation' => __( 'Job list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Job list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'job', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => get_template_directory_uri().'/assets/img/job.svg',
		'supports' => array('title'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'job', $args );

}