<?php

function create_offmarket() {
  register_post_type( 'offmarket',
    array(
      'labels' => array(
          'name' => __( 'Off Market' ),
          'singular_name' => __( 'Property' )
      ),
      'public' => true,
      'has_archive' => false,
      'rewrite' => array('slug' => 'off-market-real-estate'),
      'show_in_rest' => true,
      'supports' => array(
        'thumbnail',
        'title',
      )
    )
  );
}
add_post_type_support( 'offmarket', 'thumbnail' );
add_action( 'init', 'create_offmarket' );
