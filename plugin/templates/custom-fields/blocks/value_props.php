<?php

$value_props_name = 'layout_custom_page_value_props';

$value_props_id = array(
  'ValueProps' => 'ValueProps'
);

$value_props_content = array(
  'key' => $value_props_name,
  'name' => 'valueProps',
  'label' => 'Why Work With Us',
  'display' => 'block',
  'sub_fields' => array(
    $blockOptions->blockId('field_value_props_id', $value_props_id)
  )
);
