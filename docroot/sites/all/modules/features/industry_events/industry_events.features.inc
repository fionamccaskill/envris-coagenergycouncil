<?php
/**
 * @file
 * industry_events.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function industry_events_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "ds" && $api == "ds") {
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
function industry_events_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function industry_events_node_info() {
  $items = array(
    'event' => array(
      'name' => t('Event'),
      'base' => 'node_content',
      'description' => t('The \'Event\' content type is used to store generic industry_events. They are all displayed on a calendar, which includes other dated information.'),
      'has_title' => '1',
      'title_label' => t('Event Name'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
