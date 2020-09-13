<?php
if( function_exists('acf_add_local_field_group') ):

  $location = array (
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'offmarket',
      ),
    ),
  );

// ============================================================================

$offmarket_price = array (
  'key' => 'field_offmarket_price',
  'label' => 'Price',
  'name' => 'offmarket_price',
  'type' => 'text',
);

// ============================================================================

  acf_add_local_field_group(array (
    'key' => 'group_offmarket_fields',
    'title' => 'Off Market Custom Fields',
    'fields' => array (
      $offmarket_price
    ),
    'location' => $location,
    'menu_order' => 0,
  ));

// ============================================================================

endif;
