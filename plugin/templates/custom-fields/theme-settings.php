<?php
if( function_exists('acf_add_local_field_group') ):

  $location = array (
    array (
      array (
        'param' => 'options_page',
        'operator' => '==',
        'value' => 'theme-general-settings',
      ),
    ),
  );

// ============================================================================

    $podio_form_section_title = array (
      'key' => 'field_theme_options_podio_form_section_title',
      'label' => 'Podio Form Section Title',
      'name' => 'theme_options_podio_form_section_title',
      'type' => 'text',
      'default_value' => 'Get Your Offer'
    );

    $podio_form_title = array (
      'key' => 'field_theme_options_podio_form_title',
      'label' => 'Podio Form Title',
      'name' => 'theme_options_podio_form_title',
      'type' => 'text',
      'default_value' => 'Cash Offer Form'
    );

    $podio_form_id = array (
      'key' => 'field_theme_options_podio_form_id',
      'label' => 'Podio Form ID',
      'name' => 'theme_options_podio_form_id',
      'type' => 'text',
    );

    $podio_app_id = array (
      'key' => 'field_theme_options_podio_app_id',
      'label' => 'Podio App ID',
      'name' => 'theme_options_podio_app_id',
      'type' => 'text',
      'default_value' => '<div>Cash Offer Form content</div>',
    );

    $office_address = array (
      'key' => 'field_theme_options_office_address',
      'label' => 'Office Address',
      'name' => 'theme_options_office_address',
      'type' => 'textarea'
    );

    $email_address = array (
      'key' => 'field_theme_options_email_address',
      'label' => 'Email Address',
      'name' => 'theme_options_email_address',
      'type' => 'text',
      'default_value' => 'info@brotherlyloveproperties.com',
    );

    $mission_statement = array (
      'key' => 'field_theme_options_mission_statement',
      'label' => 'Mission Statement',
      'name' => 'theme_options_mission_statement',
      'type' => 'textarea',
      'default_value' => 'We help people through one of the most important investment decisions of their lifetime by seamlessly providing fast, honest and professional real estate services.',
    );

    $our_process = array (
      'key' => 'field_our_process',
      'label' => 'Our Process',
      'name' => 'our_process',
      'type' => 'repeater',
      'layout' => 'row',
      'sub_fields' => array(
        array(
          'key' => 'field_our_process_number',
          'label' => 'Step Number',
          'name' => 'our_process_number',
          'type' => 'number',
          'default_value' => 1
        ),
        array(
          'key' => 'field_our_process_image',
          'label' => 'Image',
          'name' => 'our_process_image',
          'type' => 'image',
          'preview_size' => 'thumbnail',
        ),
        array(
          'key' => 'field_our_process_heading',
          'label' => 'Heading',
          'name' => 'our_process_heading',
          'type' => 'text',
          'default_value' => 'Our Process Heading'
        ),
        array(
          'key' => 'field_our_process_description',
          'label' => 'Description',
          'name' => 'our_process_description',
          'type' => 'wysiwyg',
          'default_value' => '<p>This is the description!</p>'
        )
      ),
    );

    $navigation_links = array (
      'key' => 'field_navigation_links',
      'label' => 'Navigation Links',
      'name' => 'navigation_links',
      'type' => 'repeater',
      'layout' => 'row',
      'sub_fields' => array(
        array(
          'key' => 'field_navigation_link_url',
          'label' => 'Link',
          'name' => 'navigation_link_url',
          'type' => 'link',
        )
      ),
    );

    $footer_navigation_links = array (
      'key' => 'field_footer_navigation_links',
      'label' => 'Footer Navigation Links',
      'name' => 'footer_navigation_links',
      'type' => 'repeater',
      'layout' => 'row',
      'sub_fields' => array(
        array(
          'key' => 'field_footer_navigation_link_url',
          'label' => 'Link',
          'name' => 'footer_navigation_link_url',
          'type' => 'link',
        )
      ),
    );

    $phone_number = array (
      'key' => 'field_theme_options_phone_number',
      'label' => 'Phone Number',
      'name' => 'theme_options_phone_number',
      'type' => 'text',
      'default_value' => '123.456.7890',
    );

    $seo_description = array (
      'key' => 'field_theme_options_seo_description',
      'label' => 'Business Description (SEO)',
      'name' => 'theme_options_seo_description',
      'type' => 'textarea',
      'default_value' => 'We are a real, honest, local team looking to help you sell your home in Philadelphia, the city of Brotherly Love.',
    );

    $value_props = array (
      'key' => 'field_value_props_sitewide',
      'label' => 'Value Props',
      'name' => 'valueProps',
      'type' => 'repeater',
      'layout' => 'row',
      'sub_fields' => array(
        array(
          'key' => 'field_value_prop_image_sitewide',
          'label' => 'Image',
          'name' => 'valuePropImage',
          'type' => 'image',
          'preview_size' => 'thumbnail',
        ),
        array(
          'key' => 'field_value_prop_heading_sitewide',
          'label' => 'Heading',
          'name' => 'valuePropHeading',
          'type' => 'text',
          'default_value' => 'Value Prop'
        ),
        array(
          'key' => 'field_value_prop_description_sitewide',
          'label' => 'Description',
          'name' => 'valuePropDescription',
          'type' => 'wysiwyg',
          'default_value' => '<p>This is the description!</p>'
        )
      ),
    );

    $facebook = array (
      'key' => 'field_facebook',
      'label' => 'Facebook',
      'name' => 'facebook',
      'type' => 'url',
      'default_value' => 'https://www.facebook.com/Brotherly-Love-Real-Estate-109148877354125',
    );
    $instagram = array (
      'key' => 'field_instagram',
      'label' => 'Instagram',
      'name' => 'instagram',
      'type' => 'url',
      'default_value' => 'https://www.instagram.com/brotherlyloverealestate/',
    );
    $twitter = array (
      'key' => 'field_twitter',
      'label' => 'Twitter',
      'name' => 'twitter',
      'type' => 'url',
      'default_value' => 'https://twitter.com/BLREphilly',
    );
    $youtube = array (
      'key' => 'field_youtube',
      'label' => 'Twitter',
      'name' => 'youtube',
      'type' => 'url',
      'default_value' => 'https://www.youtube.com/channel/UC3MSKMiyx9QVHlHfkdI93vw',
    );

// ============================================================================

  acf_add_local_field_group(array (
    'key' => 'group_theme_settings',
    'title' => 'Theme Settings',
    'fields' => array (
      $office_address,
      $email_address,
      $footer_navigation_links,
      $mission_statement,
      $navigation_links,
      $phone_number,
      $podio_form_section_title,
      $podio_form_title,
      $podio_form_id,
      $podio_app_id,
      $our_process,
      $seo_description,
      $value_props,
      $facebook,
      $instagram,
      $twitter,
      $youtube
    ),
    'location' => $location,
    'menu_order' => 0,
  ));

// ============================================================================

endif;
