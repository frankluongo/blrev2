<?php
// Our custom post type function
function create_testimonials() {
  register_post_type( 'testimonials',
    array(
      'labels' => array(
          'name' => __( 'Testimonials' ),
          'singular_name' => __( 'Testimonial' )
      ),
      'public' => true,
      'has_archive' => false,
      'rewrite' => array('slug' => 'testimonials'),
      'show_in_rest' => true,
      'supports' => array(
        'thumbnail',
        'title'
      )
    )
  );
}
add_post_type_support( 'testimonials', 'thumbnail' );
add_action( 'init', 'create_testimonials' );
