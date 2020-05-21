<?php
// Our custom post type function
function create_written_reviews() {
  register_post_type( 'written_reviews',
    array(
      'labels' => array(
          'name' => __( 'Written Reviews' ),
          'singular_name' => __( 'Review' )
      ),
      'public' => true,
      'has_archive' => false,
      'rewrite' => array('slug' => 'reviews'),
      'show_in_rest' => true,
      'supports' => array(
        'thumbnail',
        'title'
      )
    )
  );
}
add_post_type_support( 'written_reviews', 'thumbnail' );
add_action( 'init', 'create_written_reviews' );
