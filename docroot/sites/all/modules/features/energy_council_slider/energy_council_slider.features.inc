<?php
/**
 * @file
 * energy_council_slider.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function energy_council_slider_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "ds" && $api == "ds") {
    return array("version" => "1");
  }
  if ($module == "field_group" && $api == "field_group") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function energy_council_slider_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}
