<?php

add_action('init', 'create_project_taxonomies', 0);

function create_project_taxonomies()
{
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name' => _x('Filter', 'taxonomy general name', 'textdomain'),
    'singular_name' => _x('Filter', 'taxonomy singular name', 'textdomain'),
    'search_items' => __('Search Filter', 'textdomain'),
    'all_items' => __('All Filter', 'textdomain'),
    'parent_item' => __('Parent Filter', 'textdomain'),
    'parent_item_colon' => __('Parent Filter:', 'textdomain'),
    'edit_item' => __('Edit Filter', 'textdomain'),
    'update_item' => __('Update Filter', 'textdomain'),
    'add_new_item' => __('Add New Filter', 'textdomain'),
    'new_item_name' => __('New Filter Name', 'textdomain'),
    'menu_name' => __('Filter', 'textdomain'),
  );

  $args = array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'show_in_rest'  => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'filter'),
  );

  register_taxonomy('filter', array('show_project'), $args);

}