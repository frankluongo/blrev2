<?php
if( function_exists('acf_add_local_field_group') ):

  $location = array (
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'testimonials',
      ),
    ),
  );

// ============================================================================

$testimonials_testimonial_author = array (
  'key' => 'field_testimonials_testimonial_author',
  'label' => 'Testimonial Author',
  'name' => 'testimonials_testimonial_author',
  'type' => 'text',
);

$testiominials_testimonial_video = array (
  'key' => 'field_testiominials_testimonial_video',
  'label' => 'Testimonial Video',
  'name' => 'testiominials_testimonial_video',
  'type' => 'oembed',
);

$testiominials_testimonial_description = array (
  'key' => 'field_testiominials_testimonial_description',
  'label' => 'Testimonial Description',
  'name' => 'testiominials_testimonial_description',
  'type' => 'wysiwyg',
);

// ============================================================================

  acf_add_local_field_group(array (
    'key' => 'group_testimonials_fields',
    'title' => 'Review Details',
    'fields' => array (
      $testimonials_testimonial_author,
      $testiominials_testimonial_video,
      $testiominials_testimonial_description
    ),
    'location' => $location,
    'menu_order' => 0,
  ));

// ============================================================================

endif;
