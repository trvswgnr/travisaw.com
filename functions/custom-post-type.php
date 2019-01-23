<?php
// Register Custom Post Type Event
// Post Type Key: event
function create_event_cpt() {

  $labels = array(
    'name' => __( 'Events', 'Post Type General Name', 'taw' ),
    'singular_name' => __( 'Event', 'Post Type Singular Name', 'taw' ),
    'menu_name' => __( 'Events', 'taw' ),
    'name_admin_bar' => __( 'Event', 'taw' ),
    'archives' => __( 'Event Archives', 'taw' ),
    'attributes' => __( 'Event Attributes', 'taw' ),
    'parent_item_colon' => __( 'Parent Event:', 'taw' ),
    'all_items' => __( 'All Events', 'taw' ),
    'add_new_item' => __( 'Add New Event', 'taw' ),
    'add_new' => __( 'Add New', 'taw' ),
    'new_item' => __( 'New Event', 'taw' ),
    'edit_item' => __( 'Edit Event', 'taw' ),
    'update_item' => __( 'Update Event', 'taw' ),
    'view_item' => __( 'View Event', 'taw' ),
    'view_items' => __( 'View Events', 'taw' ),
    'search_items' => __( 'Search Event', 'taw' ),
    'not_found' => __( 'Not found', 'taw' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'taw' ),
    'featured_image' => __( 'Featured Image', 'taw' ),
    'set_featured_image' => __( 'Set featured image', 'taw' ),
    'remove_featured_image' => __( 'Remove featured image', 'taw' ),
    'use_featured_image' => __( 'Use as featured image', 'taw' ),
    'insert_into_item' => __( 'Insert into Event', 'taw' ),
    'uploaded_to_this_item' => __( 'Uploaded to this Event', 'taw' ),
    'items_list' => __( 'Events list', 'taw' ),
    'items_list_navigation' => __( 'Events list navigation', 'taw' ),
    'filter_items_list' => __( 'Filter Events list', 'taw' ),
  );
  $args = array(
    'label' => __( 'Event', 'taw' ),
    'description' => __( 'Employees of Solana Empowered', 'taw' ),
    'labels' => $labels,
    'menu_icon' => 'dashicons-id',
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields', ),
    'taxonomies' => array(),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => true,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
  );
  register_post_type( 'event', $args );
}
add_action( 'init', 'create_event_cpt', 0 );
?>
