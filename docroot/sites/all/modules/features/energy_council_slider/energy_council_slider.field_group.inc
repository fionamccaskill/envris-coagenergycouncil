<?php
/**
 * @file
 * energy_council_slider.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function energy_council_slider_field_group_info() {
  $export = array();

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_list_image|node|news|default';
  $field_group->group_name = 'group_list_image';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'news';
  $field_group->mode = 'default';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'List image',
    'weight' => '0',
    'children' => array(
      0 => 'field_image',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'List image',
      'instance_settings' => array(
        'id' => '',
        'classes' => 'list-image',
        'description' => '',
        'show_label' => '0',
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'none',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_list_image|node|news|default'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_list_image|node|news|list';
  $field_group->group_name = 'group_list_image';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'news';
  $field_group->mode = 'list';
  $field_group->parent_name = 'group_list';
  $field_group->data = array(
    'label' => 'List image',
    'weight' => '11',
    'children' => array(
      0 => 'field_image',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'List image',
      'instance_settings' => array(
        'id' => '',
        'classes' => 'list-image',
        'description' => '',
        'show_label' => '0',
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'none',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_list_image|node|news|list'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_list_text|node|news|default';
  $field_group->group_name = 'group_list_text';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'news';
  $field_group->mode = 'default';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'List text',
    'weight' => '1',
    'children' => array(
      0 => 'body',
      1 => 'title',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'List text',
      'instance_settings' => array(
        'id' => '',
        'classes' => 'list-text',
        'description' => '',
        'show_label' => '0',
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'none',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_list_text|node|news|default'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_list_text|node|news|list';
  $field_group->group_name = 'group_list_text';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'news';
  $field_group->mode = 'list';
  $field_group->parent_name = 'group_list';
  $field_group->data = array(
    'label' => 'List text',
    'weight' => '12',
    'children' => array(
      0 => 'body',
      1 => 'title',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'List text',
      'instance_settings' => array(
        'id' => '',
        'classes' => 'list-text',
        'description' => '',
        'show_label' => '0',
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'none',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_list_text|node|news|list'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_list|node|news|list';
  $field_group->group_name = 'group_list';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'news';
  $field_group->mode = 'list';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'List',
    'weight' => '0',
    'children' => array(
      0 => 'group_list_image',
      1 => 'group_list_text',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'List',
      'instance_settings' => array(
        'id' => '',
        'classes' => 'list-item',
        'description' => '',
        'show_label' => '0',
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'none',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_list|node|news|list'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_slideshow_background|node|news|slideshow';
  $field_group->group_name = 'group_slideshow_background';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'news';
  $field_group->mode = 'slideshow';
  $field_group->parent_name = 'group_slideshow';
  $field_group->data = array(
    'label' => 'Slideshow background',
    'weight' => '10',
    'children' => array(
      0 => 'field_image',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'Slideshow background',
      'instance_settings' => array(
        'id' => '',
        'classes' => 'slideshow-background',
        'description' => '',
        'show_label' => '0',
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'none',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_slideshow_background|node|news|slideshow'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_slideshow_text|node|news|slideshow';
  $field_group->group_name = 'group_slideshow_text';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'news';
  $field_group->mode = 'slideshow';
  $field_group->parent_name = 'group_slideshow';
  $field_group->data = array(
    'label' => 'Slideshow text',
    'weight' => '9',
    'children' => array(
      0 => 'body',
      1 => 'title',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'Slideshow text',
      'instance_settings' => array(
        'id' => '',
        'classes' => 'slideshow-text',
        'description' => '',
        'show_label' => '0',
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'none',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_slideshow_text|node|news|slideshow'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_slideshow|node|news|slideshow';
  $field_group->group_name = 'group_slideshow';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'news';
  $field_group->mode = 'slideshow';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Slideshow',
    'weight' => '0',
    'children' => array(
      0 => 'group_slideshow_text',
      1 => 'group_slideshow_background',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'Slideshow',
      'instance_settings' => array(
        'id' => '',
        'classes' => 'slideshow-item',
        'description' => '',
        'show_label' => '0',
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'none',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_slideshow|node|news|slideshow'] = $field_group;

  return $export;
}
