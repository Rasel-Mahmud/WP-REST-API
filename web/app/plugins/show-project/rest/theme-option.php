<?php
if (!is_admin()) {
    //
    // Header
    function get_project_header_for_api()
    {
        $options = get_option('show_project');
        $logo = isset($options['project-logo']) ? $options['project-logo'] : '';
        $tag = isset($options['tag-line']) ? $options['tag-line'] : '';
        $data[0]['logo'] = $logo;
        $data[0]['tag_line'] = $tag;
        return $data;
    }
    add_action('rest_api_init', function () {
        register_rest_route('project/v1', '/header', array(
        'methods' => 'GET',
        'callback' => 'get_project_header_for_api',
        ));
    });

    //
    // About
    function get_project_about_for_api()
    {
        $options = get_option('show_project');
        $about_me = isset($options['about-me']) ? $options['about-me'] : '';
        $about_image = isset($options['about-image']) ? $options['about-image'] : '';
        $data[0]['about_me'] = $about_me;
        $data[0]['about_image'] = $about_image;
        return $data;
    }

    add_action('rest_api_init', function () {
        register_rest_route('project/v1', '/about', array(
        'methods' => 'GET',
        'callback'  => 'get_project_about_for_api'
        ));
    });


  //
  // Footer
    function get_project_footer_for_api()
    {
        $options = get_option('show_project');
        $footer_copyright = isset($options['footer-copyright']) ? $options['footer-copyright'] : '';
        $data[0]['about_me'] = $footer_copyright;
        return $data;
    }

    add_action('rest_api_init', function () {
        register_rest_route('project/v1', '/footer', array(
        'methods' => 'GET',
        'callback'  => 'get_project_footer_for_api'
        ));
    });
}
