<?php

// Featured Image Showing
add_action('rest_api_init', 'show_featured_media_in_rest');

function show_featured_media_in_rest()
{
  // register_rest_field ( 'name-of-post-type', 'name-of-field-to-return', array-of-callbacks-and-schema() )
    register_rest_field('show_project', 'project-image', array(
        'get_callback' => 'get_project_image_for_api',
        'schema' => null,
    ));
}

function get_project_image_for_api()
{
    return wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
}


// Project Link Showing
add_action('rest_api_init', 'show_project_link_in_rest');

function show_project_link_in_rest()
{
    // register_rest_field ( 'name-of-post-type', 'name-of-field-to-return', array-of-callbacks-and-schema() )
    register_rest_field('show_project', 'project-link', array(
      'get_callback' => 'get_project_link_for_api',
      'schema' => null,
    ));
}

function get_project_link_for_api()
{
    $project_link = get_post_meta(get_the_ID(), 'project_meta', true);
    return $project_link['project-link'];
}