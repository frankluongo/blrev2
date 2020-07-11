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

  $page_type = array (
    'key' => 'field_page_type',
    'label' => 'Page Type',
    'name' => 'page_type',
    'type' => 'select',
    'default_value' => 'regular_page',
    'choices' => array(
      'about_us' => 'About Us Page',
      'homepage' => 'Homepage',
      'how_we_work' => 'How We Work Page',
      'regular_page' => 'Regular Page',
      'reviews' => 'Reviews Page',
      'sell_your_home' => 'Sell Your Home Page'
    )
  );

// ============================================================================

  acf_add_local_field_group(array (
    'key' => 'group_page_fields',
    'title' => 'Page Settings',
    'fields' => array (
      $page_type,
    ),
    'location' => $location,
    'menu_order' => -1,
  ));

// ============================================================================

endif;
