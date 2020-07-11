<?php
if( function_exists('acf_add_local_field_group') ):

  $location = array (
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'written_reviews',
      ),
    ),
  );

// ============================================================================

$written_reviews_author = array (
  'key' => 'field_written_reviews_author',
  'label' => 'Review Author',
  'name' => 'written_reviews_author',
  'type' => 'text',
);

$written_reviews_date = array (
  'key' => 'field_written_reviews_date',
  'label' => 'Review Date',
  'name' => 'written_reviews_date',
  'type' => 'date_picker',
  'display_format' => 'm/d/Y',
  'return_format' => 'm/d/Y',
  'first_day' => 1
);
$written_reviews_review = array (
  'key' => 'field_written_reviews_review',
  'label' => 'Review Text',
  'name' => 'written_reviews_review',
  'type' => 'wysiwyg',
);

// ============================================================================

  acf_add_local_field_group(array (
    'key' => 'group_written_review_fields',
    'title' => 'Review Details',
    'fields' => array (
      $written_reviews_author,
      $written_reviews_date,
      $written_reviews_review
    ),
    'location' => $location,
    'menu_order' => 0,
  ));

// ============================================================================

endif;
