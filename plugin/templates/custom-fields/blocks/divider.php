<?php

$divider_name = 'layout_custom_page_block_divider';

$divider_id = array(
  'Divider' => 'Divider'
);

$divider_content = array(
  'key' => $divider_name,
  'name' => 'dividerBlock',
  'label' => 'Divider Block',
  'display' => 'block',
  'sub_fields' => array(
    $blockOptions->blockId('field_divider_block_id', $divider_id)
  )
);
