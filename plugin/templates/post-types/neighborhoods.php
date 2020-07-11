<?php
// Our custom post type function
function create_neighborhoods() {
  register_post_type( 'neighborhoods',
    array(
      'labels' => array(
          'name' => __( 'Neighborhoods' ),
          'singular_name' => __( 'Neighborhood' )
      ),
      'public' => true,
      'has_archive' => false,
      'rewrite' => array('slug' => 'neighborhoods'),
      'show_in_rest' => true,
      'supports' => array(
        'thumbnail',
        'title'
      )
    )
  );
}
add_post_type_support( 'neighborhoods', 'thumbnail' );
add_action( 'init', 'create_neighborhoods' );
