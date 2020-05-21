<?php

class BlockOptions {
  public $colors = array(
    'white' => 'White',
    'light-gray' => 'Light Gray',
    'dark' => 'Dark',
    'orange' => 'Orange',
    'blue' => 'Blue',
  );

  public function bgColor($key) {
    return array(
      'key' => $key,
      'label' => 'Background Color',
      'name' => 'bgColor',
      'type' => 'select',
      'choices' => $this->colors,
      'return_format' => 'value',
      'default_value' => 'white'
    );
  }

  public function blockId($key, $id) {
    return array(
      'key' => $key,
      'label' => 'Block ID',
      'name' => 'blockId',
      'type' => 'select',
      'choices' => $id,
      'return_format' => 'value'
    );
  }

  public function heading($key) {
    return array(
      'key' => $key,
      'label' => 'heading',
      'name' => 'blockHeading',
      'type' => 'text'
    );
  }

  public function image($key) {
    return array(
      'key' => $key,
      'label' => 'Image',
      'name' => 'image',
      'type' => 'image',
      'preview_size' => 'thumbnail'
    );
  }

  public function items($key) {
    return array (
      'key' => $key,
      'label' => 'Grid Items',
      'name' => 'gridItems',
      'type' => 'repeater',
      'layout' => 'row',
      'sub_fields' => array(
        array(
          'key' => "field_item_$key",
          'label' => 'Item',
          'name' => 'singleItem',
          'type' => 'wysiwyg'
        )
      ),
    );
  }

  public function imagePosition($key) {
    return array(
      'key' => $key,
      'label' => 'Image Position',
      'name' => 'imagePosition',
      'type' => 'select',
      'default_value' => 'imageLeft',
      'choices' => array(
        'imageLeft' => 'Image Left',
        'imageRight' => 'Image Right'
      )
    );
  }

  public function textColor($key) {
    return array(
      'key' => $key,
      'label' => 'Text Color',
      'name' => 'textColor',
      'type' => 'select',
      'choices' => $this->colors,
      'return_format' => 'value',
      'default_value' => 'dark'
    );
  }

  public function textContent($key) {
    return array(
      'key' => $key,
      'label' => 'Text Content',
      'name' => 'textContent',
      'type' => 'wysiwyg'
    );
  }

  public function url($key, $label, $name, $default = '') {
    return array(
      'key' => $key,
      'label' => $label,
      'name' => $name,
      'type' => 'url',
      'default_value' => $default
    );
  }
}
