<?php
function filter_show_project_json($data, $post, $context)
{
    $meta = get_post_meta(get_the_ID(), 'project_meta', true);
    $social_link = $meta['project-link'];
    if ($social_link) {
        $data->data['project_link'] = $social_link;
    }
    return $data;
}
add_filter('rest_prepare_show_project', 'filter_show_project_json', 10, 3);
