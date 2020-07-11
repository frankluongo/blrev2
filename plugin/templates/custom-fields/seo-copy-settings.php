<?php
if( function_exists('acf_add_local_field_group') ):

  $location = array (
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'page',
      ),
    ),
  );

// ============================================================================

  $seo_heading = array (
    'key' => 'field_seo_heading',
    'label' => 'SEO Section Heading',
    'name' => 'seo_heading',
    'type' => 'text',
  );

  $seo_description = array (
    'key' => 'field_seo_description',
    'label' => 'SEO Section Description',
    'name' => 'seo_description',
    'type' => 'wysiwyg',
  );

// ============================================================================

  acf_add_local_field_group(array (
    'key' => 'group_seo_fields',
    'title' => 'SEO Settings',
    'fields' => array (
      $seo_heading,
      $seo_description
    ),
    'location' => $location,
    'menu_order' => 0,
  ));

// ============================================================================

endif;
