<?php

$text_image_block_name = 'layout_custom_page_image_text_block';

$text_image_block_id = array(
  'TextImageBlock' => 'TextImageBlock'
);

$text_image_block_content = array(
  'key' => $text_image_block_name,
  'name' => 'textImageblock',
  'label' => 'Text / Image Block',
  'display' => 'block',
  'sub_fields' => array(
    $blockOptions->blockId('field_text_image_block_id', $text_image_block_id),
    $blockOptions->bgColor('field_text_image_block_bg_color'),
    $blockOptions->textColor('field_text_image_block_text_color'),
    $blockOptions->slider('field_text_image_block_image_width', 'Image'),
    $blockOptions->slider('field_text_image_block_text_width', 'Text'),
    $blockOptions->imagePosition('field_text_image_block_image_position'),
    $blockOptions->image('field_text_image_block_image'),
    $blockOptions->textContent('field_text_image_block_text_content')
  )
);
