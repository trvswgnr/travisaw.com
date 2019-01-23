<?php
// Register Custom Post Type Estimate
// Post Type Key: estimate
function create_estimate_cpt() {

  $labels = array(
    'name' => __( 'Estimates', 'Post Type General Name', 'taw' ),
    'singular_name' => __( 'Estimate', 'Post Type Singular Name', 'taw' ),
    'menu_name' => __( 'Estimates', 'taw' ),
    'name_admin_bar' => __( 'Estimate', 'taw' ),
    'archives' => __( 'Estimate Archives', 'taw' ),
    'attributes' => __( 'Estimate Attributes', 'taw' ),
    'parent_item_colon' => __( 'Parent Estimate:', 'taw' ),
    'all_items' => __( 'All Estimates', 'taw' ),
    'add_new_item' => __( 'Add New Estimate', 'taw' ),
    'add_new' => __( 'Add New', 'taw' ),
    'new_item' => __( 'New Estimate', 'taw' ),
    'edit_item' => __( 'Edit Estimate', 'taw' ),
    'update_item' => __( 'Update Estimate', 'taw' ),
    'view_item' => __( 'View Estimate', 'taw' ),
    'view_items' => __( 'View Estimates', 'taw' ),
    'search_items' => __( 'Search Estimate', 'taw' ),
    'not_found' => __( 'Not found', 'taw' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'taw' ),
    'featured_image' => __( 'Featured Image', 'taw' ),
    'set_featured_image' => __( 'Set featured image', 'taw' ),
    'remove_featured_image' => __( 'Remove featured image', 'taw' ),
    'use_featured_image' => __( 'Use as featured image', 'taw' ),
    'insert_into_item' => __( 'Insert into Estimate', 'taw' ),
    'uploaded_to_this_item' => __( 'Uploaded to this Estimate', 'taw' ),
    'items_list' => __( 'Estimates list', 'taw' ),
    'items_list_navigation' => __( 'Estimates list navigation', 'taw' ),
    'filter_items_list' => __( 'Filter Estimates list', 'taw' ),
  );
  $args = array(
    'label' => __( 'Estimate', 'taw' ),
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
  register_post_type( 'estimate', $args );
}
add_action( 'init', 'create_estimate_cpt', 0 );
?>
