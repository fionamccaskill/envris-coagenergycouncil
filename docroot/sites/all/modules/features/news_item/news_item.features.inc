<?php
/**
 * @file
 * news_item.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function news_item_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "ds" && $api == "ds") {
    return array("version" => "1");
  }
  if ($module == "field_group" && $api == "field_group") {
    return array("version" => "1");
  }
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function news_item_node_info() {
  $items = array(
    'news' => array(
      'name' => t('News Item'),
      'base' => 'node_content',
      'description' => t('Use this content type to add news items to the site. The first three news items will be automatically become \'Features\' and appear in the slider, however you will be able to promote features.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
