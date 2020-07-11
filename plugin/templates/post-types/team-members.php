<?php
// Our custom post type function
function create_team_members() {
  register_post_type( 'team_members',
    array(
      'labels' => array(
          'name' => __( 'Team Members' ),
          'singular_name' => __( 'Team Member' )
      ),
      'public' => true,
      'has_archive' => false,
      'rewrite' => array('slug' => 'team-members'),
      'show_in_rest' => true,
      'supports' => array(
        'thumbnail',
        'title'
      )
    )
  );
}
add_post_type_support( 'team_members', 'thumbnail' );
add_action( 'init', 'create_team_members' );
