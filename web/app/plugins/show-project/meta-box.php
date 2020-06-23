<?php
// Control core classes for avoid errors
if (class_exists('CSF')) {

  //
  // Set a unique slug-like ID
    $prefix = 'project_meta';

  //
  // Create a metabox
    CSF::createMetabox($prefix, array(
    'title' => 'Project Link',
    'post_type' => 'show_project',
    'theme' => 'light',
    ));

  //
  // Create a section
    CSF::createSection($prefix, array(
    'title' => 'Add your project link',
    'fields' => array(

      //
      // A text field
      array(
        'id' => 'project-link',
        'type' => 'text',
        'title' => 'Link',
      ),

    )
    ));

}
