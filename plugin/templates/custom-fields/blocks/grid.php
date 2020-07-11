<?php

$grid_block_name = 'layout_custom_page_grid_block';

$grid_block_id = array(
  'GridBlock' => 'GridBlock'
);

$grid_block_content = array(
  'key' => $grid_block_name,
  'name' => 'gridBlock',
  'label' => 'Grid Block',
  'display' => 'block',
  'sub_fields' => array(
    $blockOptions->blockId('field_grid_block_id', $grid_block_id),
    $blockOptions->bgColor('field_grid_block_bg_color'),
    $blockOptions->textColor('field_grid_block_text_color'),
    $blockOptions->items('field_grid_block_grid_items')
  )
);
