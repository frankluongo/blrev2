<?php

$our_process_name = 'layout_custom_page_our_process';

$our_process_id = array(
  'OurProcess' => 'OurProcess'
);

$our_process_content = array(
  'key' => $our_process_name,
  'name' => 'ourProcess',
  'label' => 'Our Process',
  'display' => 'block',
  'sub_fields' => array(
    $blockOptions->blockId('field_our_process_id', $our_process_id)
  )
);
