<?php
// Register Custom Post Type
function custom_post_type()
{

    $labels = array(
    'name' => _x('Projects', 'Post Type General Name', 'show-project'),
    'singular_name' => _x('Project', 'Post Type Singular Name', 'show-project'),
    'menu_name' => __('Project', 'show-project'),
    'name_admin_bar' => __('Project', 'show-project'),
    'archives' => __('Item Archives', 'show-project'),
    'attributes' => __('Item Attributes', 'show-project'),
    'parent_item_colon' => __('Parent Item:', 'show-project'),
    'all_items' => __('All Items', 'show-project'),
    'add_new_item' => __('Add New Item', 'show-project'),
    'add_new' => __('Add New', 'show-project'),
    'new_item' => __('New Item', 'show-project'),
    'edit_item' => __('Edit Item', 'show-project'),
    'update_item' => __('Update Item', 'show-project'),
    'view_item' => __('View Item', 'show-project'),
    'view_items' => __('View Items', 'show-project'),
    'search_items' => __('Search Item', 'show-project'),
    'not_found' => __('Not found', 'show-project'),
    'not_found_in_trash' => __('Not found in Trash', 'show-project'),
    'featured_image' => __('Featured Image', 'show-project'),
    'set_featured_image' => __('Set featured image', 'show-project'),
    'remove_featured_image' => __('Remove featured image', 'show-project'),
    'use_featured_image' => __('Use as featured image', 'show-project'),
    'insert_into_item' => __('Insert into item', 'show-project'),
    'uploaded_to_this_item' => __('Uploaded to this item', 'show-project'),
    'items_list' => __('Items list', 'show-project'),
    'items_list_navigation' => __('Items list navigation', 'show-project'),
    'filter_items_list' => __('Filter items list', 'show-project'),
    );
    $args = array(
    'label' => __('Project', 'show-project'),
    'description' => __('Project Showcase', 'show-project'),
    'labels' => $labels,
    'supports' => array('title', 'editor', 'thumbnail'),
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'publicly_queryable' => true,
    'capability_type' => 'page',
    'show_in_rest' => true,
    );
    register_post_type('show_project', $args);

}

add_action('init', 'custom_post_type', 0);
