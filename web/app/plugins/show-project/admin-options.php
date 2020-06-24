<?php
// Control core classes for avoid errors
if (class_exists('CSF')) {
  //
  // Set a unique slug-like ID
    $prefix = 'show_project';

  //
  // Create options
    CSF::createOptions($prefix, array(

  // framework title
    'framework_title'         => 'Project Showcase',
    'framework_class'         => '',

  // menu settings
    'menu_title'              => 'Project Showcase',
    'menu_slug'               => 'project-showcase',
    'menu_type'               => 'menu',
    'menu_capability'         => 'manage_options',
    'menu_icon'               => "dashicons-smiley",
    'menu_position'           => null,
    'menu_hidden'             => false,
    'menu_parent'             => '',

  // menu extras
    'show_bar_menu'           => true,
    'show_sub_menu'           => true,
    'show_in_network'         => true,
    'show_in_customizer'      => false,

    'show_search'             => false,
    'show_reset_all'          => false,
    'show_reset_section'      => false,
    'show_footer'             => true,
    'show_all_options'        => true,
    'show_form_warning'       => true,
    'sticky_header'           => true,
    'save_defaults'           => true,
    'ajax_save'               => true,

  // admin bar menu settings
    'admin_bar_menu_icon'     => '',
    'admin_bar_menu_priority' => 80,

  // footer
    'footer_text'             => '',
    'footer_after'            => '',
    'footer_credit'           => '',

  // database model
    'database'                => '', // options, transient, theme_mod, network
    'transient_time'          => 0,

  // contextual help
    'contextual_help'         => array(),
    'contextual_help_sidebar' => '',

  // typography options
    'enqueue_webfont'         => true,
    'async_webfont'           => false,

  // others
    'output_css'              => true,

  // theme and wrapper classname
    'theme'                   => 'light',
    'class'                   => '',

  // external default values
    'defaults'                => array(),

    ));

  //
  // Header
    CSF::createSection($prefix, array(
    'title'  => 'Header',
    'fields' => array(

      //
      // Logo
      array(
        'id'    => 'project-logo',
        'type'  => 'upload',
        'title' => 'Upload Logo',
      ),


      //
      // Tag Line
      array(
        'id'      => 'tag-line',
        'type'    => 'textarea',
        'title'   => 'Heading Tag Line',
        'default' => 'Truth can only be found in one place, <span>the code<span>'
      ),

    )
    ));

  //
  // About
    CSF::createSection($prefix, array(
    'title'  => 'About',
    'fields' => array(

    //
    // About Me
    array(
      'id'      => 'about-me',
      'type'    => 'textarea',
      'title'   => 'About Me',
      'default' => 'Lorem ipsum dollar.'
    ),

    //
    // About Image
      array(
        'id'    => 'about-image',
        'type'  => 'upload',
        'title' => 'Upload Image',
      ),


    )
    ));


    //
    // Footer
     CSF::createSection($prefix, array(
    'title'  => 'Footer',
    'fields' => array(

      //
      // Footer
      array(
        'id'      => 'footer-copyright',
        'type'    => 'text',
        'title'   => 'Footer Copyright Text',
        'default' => 'Copyright © 2020 All rights reserved'
      ),

      )
     ));
}
