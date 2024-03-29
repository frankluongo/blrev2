<?php
if (function_exists('acf_add_local_field_group')) :

  $location = array(
    array(
      array(
        'param' => 'options_page',
        'operator' => '==',
        'value' => 'theme-general-settings',
      ),
    ),
  );

  // ============================================================================

  // Tabs
  // ============================================================================

  $options_tab = array(
    'key' => 'field_6174387bd0732',
    'label' => 'General Options',
    'name' => '',
    'type' => 'tab',
    'instructions' => '',
    'required' => 0,
    'conditional_logic' => 0,
    'wrapper' => array(
      'width' => '',
      'class' => '',
      'id' => '',
    ),
    'placement' => 'top',
    'endpoint' => 0,
  );

  $podio_tab = array(
    'key' => 'field_6174386fd0731',
    'label' => 'Podio Form',
    'name' => '',
    'type' => 'tab',
    'instructions' => '',
    'required' => 0,
    'conditional_logic' => 0,
    'wrapper' => array(
      'width' => '',
      'class' => '',
      'id' => '',
    ),
    'placement' => 'top',
    'endpoint' => 0,
  );

  // Podio Form
  // ============================================================================

  $podio_form_options = array(
    'key' => 'field_61743705d0726',
    'label' => 'Podio Form Details',
    'name' => 'podio_form_details',
    'type' => 'group',
    'instructions' => '',
    'required' => 0,
    'conditional_logic' => 0,
    'wrapper' => array(
      'width' => '',
      'class' => '',
      'id' => '',
    ),
    'layout' => 'block',
    'sub_fields' => array(
      array(
        'key' => 'field_6174370fd0727',
        'label' => 'Section Title (Optional)',
        'name' => 'section_title',
        'type' => 'text',
        'instructions' => 'Displays when the form is placed on a page in a section.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_61743728d0728',
        'label' => 'Form Title (Optional)',
        'name' => 'form_title',
        'type' => 'text',
        'instructions' => 'Displays at the top of the form.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => 'Receive My Cash Offer',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_61743741d0729',
        'label' => 'Form ID (Required)',
        'name' => 'form_id',
        'type' => 'text',
        'instructions' => 'The Form ID that Podio uses to keep track of the form.',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => 1710114,
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_61743767d072a',
        'label' => 'App ID',
        'name' => 'app_id',
        'type' => 'text',
        'instructions' => 'Your App ID for your Podio Account.',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => 23706431,
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_61743782d072b',
        'label' => 'Form Fields',
        'name' => 'form_fields',
        'type' => 'repeater',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'collapsed' => '',
        'min' => 0,
        'max' => 0,
        'layout' => 'block',
        'button_label' => 'Add Field',
        'sub_fields' => array(
          array(
            'key' => 'field_617437a2d072c',
            'label' => 'Label',
            'name' => 'label',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
          ),
          array(
            'key' => 'field_617437d6d072d',
            'label' => 'Slug',
            'name' => 'slug',
            'type' => 'text',
            'instructions' => 'The hyphenated, all lowercase value for a form Label',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
          ),
          array(
            'key' => 'field_617437ecd072e',
            'label' => 'Input Type',
            'name' => 'input_type',
            'type' => 'select',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'choices' => array(
              'email' => 'Email',
              'tel' => 'Telephone',
              'text' => 'Text',
            ),
            'default_value' => 'text',
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 0,
            'return_format' => 'value',
            'ajax' => 0,
            'placeholder' => '',
          ),
          array(
            'key' => 'field_6174382cd072f',
            'label' => 'Required?',
            'name' => 'required',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'message' => '',
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
          ),
        ),
      ),
    ),
  );



  // All Other Options
  // ============================================================================

  $office_address = array(
    'key' => 'field_theme_options_office_address',
    'label' => 'Office Address',
    'name' => 'theme_options_office_address',
    'type' => 'textarea'
  );

  $email_address = array(
    'key' => 'field_theme_options_email_address',
    'label' => 'Email Address',
    'name' => 'theme_options_email_address',
    'type' => 'text',
    'default_value' => 'info@brotherlyloveproperties.com',
  );

  $mission_statement = array(
    'key' => 'field_theme_options_mission_statement',
    'label' => 'Mission Statement',
    'name' => 'theme_options_mission_statement',
    'type' => 'textarea',
    'default_value' => 'We help people through one of the most important investment decisions of their lifetime by seamlessly providing fast, honest and professional real estate services.',
  );

  $our_process = array(
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

  $navigation_links = array(
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

  $footer_navigation_links = array(
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

  $phone_number = array(
    'key' => 'field_theme_options_phone_number',
    'label' => 'Phone Number',
    'name' => 'theme_options_phone_number',
    'type' => 'text',
    'default_value' => '123.456.7890',
  );

  $seo_description = array(
    'key' => 'field_theme_options_seo_description',
    'label' => 'Business Description (SEO)',
    'name' => 'theme_options_seo_description',
    'type' => 'textarea',
    'default_value' => 'We are a real, honest, local team looking to help you sell your home in Philadelphia, the city of Brotherly Love.',
  );

  $value_props = array(
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

  $facebook = array(
    'key' => 'field_facebook',
    'label' => 'Facebook',
    'name' => 'facebook',
    'type' => 'url',
    'default_value' => 'https://www.facebook.com/Brotherly-Love-Real-Estate-109148877354125',
  );
  $instagram = array(
    'key' => 'field_instagram',
    'label' => 'Instagram',
    'name' => 'instagram',
    'type' => 'url',
    'default_value' => 'https://www.instagram.com/brotherlyloverealestate/',
  );
  $twitter = array(
    'key' => 'field_twitter',
    'label' => 'Twitter',
    'name' => 'twitter',
    'type' => 'url',
    'default_value' => 'https://twitter.com/BLREphilly',
  );
  $youtube = array(
    'key' => 'field_youtube',
    'label' => 'Twitter',
    'name' => 'youtube',
    'type' => 'url',
    'default_value' => 'https://www.youtube.com/channel/UC3MSKMiyx9QVHlHfkdI93vw',
  );

  // ============================================================================

  acf_add_local_field_group(array(
    'key' => 'group_theme_settings',
    'title' => 'Theme Settings',
    'fields' => array(
      $options_tab,
      $office_address,
      $email_address,
      $footer_navigation_links,
      $mission_statement,
      $navigation_links,
      $phone_number,
      $our_process,
      $seo_description,
      $value_props,
      $facebook,
      $instagram,
      $twitter,
      $youtube,
      $podio_tab,
      $podio_form_options
    ),
    'location' => $location,
    'menu_order' => 0,
  ));

// ============================================================================

endif;
