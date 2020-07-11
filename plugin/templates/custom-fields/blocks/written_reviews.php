<?php

$written_reviews_name = 'layout_custom_page_written_reviews';

$written_reviews_id = array(
  'WrittenReviews' => 'WrittenReviews'
);

$written_reviews_content = array(
  'key' => $written_reviews_name,
  'name' => 'writtenReviews',
  'label' => 'Written Reviews',
  'display' => 'block',
  'sub_fields' => array(
    $blockOptions->blockId('field_written_reviews_id', $written_reviews_id)
  )
);
