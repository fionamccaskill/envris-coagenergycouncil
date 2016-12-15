<?php
/**
 * @file
 * publications.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function publications_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "ds" && $api == "ds") {
    return array("version" => "1");
  }
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function publications_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function publications_node_info() {
  $items = array(
    'publications' => array(
      'name' => t('Publications'),
      'base' => 'node_content',
      'description' => t('The publications content type is a library card of sorts.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
