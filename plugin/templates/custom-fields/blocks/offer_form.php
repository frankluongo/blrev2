<?php

$offer_form_block_name = 'layout_custom_page_offer_form_block';

$offer_form_block_id = array(
  'OfferFormBlock' => 'OfferFormBlock'
);

$offer_form_block_content = array(
  'key' => $offer_form_block_name,
  'name' => 'offerFormBlock',
  'label' => 'Offer Form Block',
  'display' => 'block',
  'sub_fields' => array(
    $blockOptions->blockId('field_offer_form_block_id', $offer_form_block_id),
    $blockOptions->bgColor('field_offer_form_block_bg_color'),
    $blockOptions->textColor('field_offer_form_block_text_color'),
    $blockOptions->heading('field_offer_form_block_heading'),
    $blockOptions->textContent('field_offer_form_block_text_content')
  ),
  'min' => '',
  'max' => '',
);
