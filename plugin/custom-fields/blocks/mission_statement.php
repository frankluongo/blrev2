<?php

$mission_statement_name = 'layout_custom_page_mission_statement';

$mission_statement_id = array(
  'MissionStatement' => 'MissionStatement'
);

$mission_statement_content = array(
  'key' => $mission_statement_name,
  'name' => 'missionStatement',
  'label' => 'Mission Statement',
  'display' => 'block',
  'sub_fields' => array(
    $blockOptions->blockId('field_mission_statement_id', $mission_statement_id)
  )
);
