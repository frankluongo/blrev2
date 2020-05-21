<?php

$testimonials_name = 'layout_custom_page_testimonials';

$testimonials_id = array(
  'Testimonials' => 'Testimonials'
);

$testimonials_content = array(
  'key' => $testimonials_name,
  'name' => 'testimonials',
  'label' => 'Testimonials',
  'display' => 'block',
  'sub_fields' => array(
    $blockOptions->blockId('field_testimonials_id', $testimonials_id)
  )
);
