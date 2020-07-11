<?php
if( function_exists('acf_add_local_field_group') ):

  $location = array (
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'team_members',
      ),
    ),
  );

// ============================================================================

$team_members_member_image = array (
  'key' => 'field_team_members_member_image',
  'label' => 'Team Member Image',
  'name' => 'team_members_member_image',
  'type' => 'image',
  'preview_size' => 'thumbnail'
);

$team_members_member_name = array (
  'key' => 'field_team_members_member_name',
  'label' => 'Team Member Name',
  'name' => 'team_members_member_name',
  'type' => 'text',
);

$team_members_member_title = array (
  'key' => 'field_team_members_member_title',
  'label' => 'Team Member Title',
  'name' => 'team_members_member_title',
  'type' => 'text',
);

$team_members_member_description = array (
  'key' => 'field_team_members_member_description',
  'label' => 'Team Member Description',
  'name' => 'team_members_member_description',
  'type' => 'wysiwyg',
);

$team_members_member_phone_number = array (
  'key' => 'field_team_members_member_phone_number',
  'label' => 'Team Member Phone Number',
  'name' => 'team_members_member_phone_number',
  'type' => 'text',
);

$team_members_member_email_address = array (
  'key' => 'field_team_members_member_email_address',
  'label' => 'Team Member Email Address',
  'name' => 'team_members_member_email_address',
  'type' => 'text',
);


// ============================================================================

  acf_add_local_field_group(array (
    'key' => 'group_team_members_fields',
    'title' => 'Team Member Details',
    'fields' => array (
      $team_members_member_image,
      $team_members_member_name,
      $team_members_member_title,
      $team_members_member_description,
      $team_members_member_phone_number,
      $team_members_member_email_address
    ),
    'location' => $location,
    'menu_order' => 0,
  ));

// ============================================================================

endif;
