<?php

if( function_exists('acf_add_local_field_group') ):
  $location = array(
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
    array(
      array(
        'param' => 'options_page',
        'operator' => '==',
        'value' => 'hood-settings',
      ),
    ),
  );
  include 'blocks/block_options.php';
  $blockOptions = new BlockOptions();
  include 'blocks/divider.php';
  include 'blocks/google_map.php';
  include 'blocks/grid.php';
  include 'blocks/mission_statement.php';
  include 'blocks/offer_form.php';
  include 'blocks/our_process.php';
  include 'blocks/our_team.php';
  include 'blocks/testimonials.php';
  include 'blocks/text_image.php';
  include 'blocks/text.php';
  include 'blocks/value_props.php';
  include 'blocks/written_reviews.php';

  acf_add_local_field_group(array(
    'key' => 'group_custom_page_blocks',
    'title' => 'Page Blocks',
    'fields' => array(
      array(
        'key' => 'field_flexible_page_blocks',
        'label' => 'Custom Page Blocks',
        'name' => 'page_blocks',
        'type' => 'flexible_content',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'layouts' => array(
          $divider_name => $divider_content,
          $google_map_block_name => $google_map_block_content,
          $grid_block_name => $grid_block_content,
          $mission_statement_name => $mission_statement_content,
          $offer_form_block_name => $offer_form_block_content,
          $our_process_name => $our_process_content,
          $our_team_name => $our_team_content,
          $testimonials_name => $testimonials_content,
          $text_image_block_name => $text_image_block_content,
          $text_block_name => $text_block_content,
          $value_props_name => $value_props_content,
          $written_reviews_name => $written_reviews_content,
        )
      ),
    ),
    'location' => $location
  ));

endif;
