<?php
/**
 * @file
 * energy_council_search.features.fe_block_boxes.inc
 */

/**
 * Implements hook_default_fe_block_boxes().
 */
function energy_council_search_default_fe_block_boxes() {
  $export = array();

  $fe_block_boxes = new stdClass();
  $fe_block_boxes->info = 'A title for the left hand search column.';
  $fe_block_boxes->format = 'filtered_html';
  $fe_block_boxes->machine_name = 'search_refinement';
  $fe_block_boxes->body = '<p>Refine your search using the options below.</p>
';

  $export['search_refinement'] = $fe_block_boxes;

  return $export;
}
