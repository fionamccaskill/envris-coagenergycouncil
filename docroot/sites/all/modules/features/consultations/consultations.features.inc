<?php
/**
 * @file
 * consultations.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function consultations_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "ds" && $api == "ds") {
    return array("version" => "1");
  }
  if ($module == "feeds" && $api == "feeds_importer_default") {
    return array("version" => "1");
  }
  if ($module == "page_manager" && $api == "pages_default") {
    return array("version" => "1");
  }
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function consultations_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function consultations_node_info() {
  $items = array(
    'consultation' => array(
      'name' => t('Consultation'),
      'base' => 'node_content',
      'description' => t('Consultations are pulled directly from industry.gov.au, they do not need to be edited by users.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
