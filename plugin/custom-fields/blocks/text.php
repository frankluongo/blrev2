<?php

$text_block_name = 'layout_custom_page_text_block';

$text_block_id = array(
  'TextBlock' => 'TextBlock'
);

$text_block_content = array(
  'key' => $text_block_name,
  'name' => 'textBlock',
  'label' => 'Text Block',
  'display' => 'block',
  'sub_fields' => array(
    $blockOptions->blockId('field_text_block_id', $text_block_id),
    $blockOptions->bgColor('field_text_block_bg_color'),
    $blockOptions->textColor('field_text_block_text_color'),
    $blockOptions->textContent('field_text_block_text_content')
  ),
  'min' => '',
  'max' => '',
);

