<?php
/**
 * @file
 * energy_council_council_meetings_full.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function energy_council_council_meetings_full_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "page_manager" && $api == "pages_default") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function energy_council_council_meetings_full_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}
