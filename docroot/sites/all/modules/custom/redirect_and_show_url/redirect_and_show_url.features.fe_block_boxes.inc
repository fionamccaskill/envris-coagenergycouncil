<?php
/**
 * @file
 * redirect_and_show_url.features.fe_block_boxes.inc
 */

/**
 * Implements hook_default_fe_block_boxes().
 */
function redirect_and_show_url_default_fe_block_boxes() {
  $export = array();

  $fe_block_boxes = new stdClass();
  $fe_block_boxes->info = 'Live Link';
  $fe_block_boxes->format = 'full_html';
  $fe_block_boxes->machine_name = 'live_link';
  $fe_block_boxes->body = '<p>http://SITENAME.industry.gov.au/[current-page:url:path]</p>
';

  $export['live_link'] = $fe_block_boxes;

  return $export;
}
