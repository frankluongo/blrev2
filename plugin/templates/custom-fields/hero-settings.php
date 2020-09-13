<?php
if( function_exists('acf_add_local_field_group') ):

  $location = array (
    array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
    array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'offmarket',
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'neighborhoods',
			),
		),
  );

// ============================================================================

  $display_hero = array (
    'key' => 'field_display_hero',
    'label' => 'Display Hero?',
    'name' => 'display_hero',
    'type' => 'true_false',
    'default_value' => 1
  );

  $hero_heading = array (
    'key' => 'field_hero_heading',
    'label' => 'Hero Heading',
    'name' => 'hero_heading',
    'type' => 'text',
  );


  $hero_image = array (
    'key' => 'field_hero_image',
    'label' => 'Hero Image',
    'name' => 'hero_image',
    'type' => 'image',
    'preview_size' => 'thumbnail'
  );

  $hero_tagline = array (
    'key' => 'field_hero_description',
    'label' => 'Hero Description',
    'name' => 'hero_description',
    'type' => 'textarea',
  );

  $hero_type = array (
    'key' => 'field_hero_type',
    'label' => 'Hero Type',
    'name' => 'hero_type',
    'type' => 'select',
    'default_value' => 'default',
    'choices' => array(
      'default' => 'default',
      'large' => 'Large',
    )
  );

// ============================================================================

  acf_add_local_field_group(array (
    'key' => 'group_hero_fields',
    'title' => 'Hero Settings',
    'fields' => array (
      $display_hero,
      $hero_heading,
      $hero_image,
      $hero_tagline,
      $hero_type
    ),
    'location' => $location,
    'menu_order' => 0,
  ));

// ============================================================================

endif;
