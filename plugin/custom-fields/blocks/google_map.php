<?php

$google_map_block_name = 'layout_custom_page_google_map';

$google_map_block_id = array(
  'GoogleMapBlock' => 'GoogleMapBlock'
);

$google_map_block_content = array(
  'key' => $google_map_block_name,
  'name' => 'googleMapBlock',
  'label' => 'Google Map Block',
  'display' => 'block',
  'sub_fields' => array(
    $blockOptions->blockId('field_google_maps_block_id', $google_map_block_id),
    $blockOptions->bgColor('field_google_maps_block_bg_color'),
    $blockOptions->textColor('field_google_maps_block_text_color'),
    $blockOptions->textContent('field_google_maps_block_text_content'),
    $blockOptions->url('field_google_maps_block_map_url', 'Google Maps URL', 'googleMapUrl', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12224.10262180778!2d-75.1860145!3d40.0078745!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x415b95d5492568f5!2sBrotherly%20Love%20Real%20Estate!5e0!3m2!1sen!2sus!4v1588098355609!5m2!1sen!2sus'),
  ),
);
