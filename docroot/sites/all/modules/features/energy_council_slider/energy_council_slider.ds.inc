<?php
/**
 * @file
 * energy_council_slider.ds.inc
 */

/**
 * Implements hook_ds_field_settings_info().
 */
function energy_council_slider_ds_field_settings_info() {
  $export = array();

  $ds_fieldsetting = new stdClass();
  $ds_fieldsetting->api_version = 1;
  $ds_fieldsetting->id = 'node|news|slideshow';
  $ds_fieldsetting->entity_type = 'node';
  $ds_fieldsetting->bundle = 'news';
  $ds_fieldsetting->view_mode = 'slideshow';
  $ds_fieldsetting->settings = array(
    'title' => array(
      'weight' => '0',
      'label' => 'hidden',
      'format' => 'default',
      'formatter_settings' => array(
        'link' => '1',
        'wrapper' => 'h2',
        'class' => '',
        'ft' => array(
          'func' => 'theme_ds_field_expert',
        ),
      ),
    ),
    'body' => array(
      'formatter_settings' => array(
        'ft' => array(
          'func' => 'theme_ds_field_expert',
        ),
      ),
    ),
    'field_image' => array(
      'formatter_settings' => array(
        'ft' => array(
          'func' => 'theme_ds_field_expert',
        ),
      ),
    ),
  );
  $export['node|news|slideshow'] = $ds_fieldsetting;

  return $export;
}

/**
 * Implements hook_ds_layout_settings_info().
 */
function energy_council_slider_ds_layout_settings_info() {
  $export = array();

  $ds_layout = new stdClass();
  $ds_layout->api_version = 1;
  $ds_layout->id = 'node|news|slideshow';
  $ds_layout->entity_type = 'node';
  $ds_layout->bundle = 'news';
  $ds_layout->view_mode = 'slideshow';
  $ds_layout->layout = 'panels-naked';
  $ds_layout->settings = array(
    'regions' => array(
      'content' => array(
        0 => 'group_slideshow',
        1 => 'title',
        2 => 'body',
        3 => 'group_slideshow_text',
        4 => 'group_slideshow_background',
        5 => 'field_image',
      ),
    ),
    'fields' => array(
      'group_slideshow' => 'content',
      'title' => 'content',
      'body' => 'content',
      'group_slideshow_text' => 'content',
      'group_slideshow_background' => 'content',
      'field_image' => 'content',
    ),
    'classes' => array(),
    'wrappers' => array(
      'content' => 'div',
    ),
    'layout_wrapper' => 'div',
    'layout_attributes' => '',
    'layout_attributes_merge' => 1,
    'layout_link_attribute' => '',
    'layout_link_custom' => '',
  );
  $export['node|news|slideshow'] = $ds_layout;

  return $export;
}

/**
 * Implements hook_ds_view_modes_info().
 */
function energy_council_slider_ds_view_modes_info() {
  $export = array();

  $ds_view_mode = new stdClass();
  $ds_view_mode->api_version = 1;
  $ds_view_mode->view_mode = 'slideshow';
  $ds_view_mode->label = 'Slideshow';
  $ds_view_mode->entities = array(
    'node' => 'node',
  );
  $export['slideshow'] = $ds_view_mode;

  return $export;
}
