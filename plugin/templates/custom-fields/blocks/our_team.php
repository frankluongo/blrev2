<?php

$our_team_name = 'layout_custom_page_our_team';

$our_team_id = array(
  'OurTeam' => 'OurTeam'
);

$our_team_content = array(
  'key' => $our_team_name,
  'name' => 'ourTeam',
  'label' => 'Our Team',
  'display' => 'block',
  'sub_fields' => array(
    $blockOptions->blockId('field_our_team_id', $our_team_id)
  )
);
