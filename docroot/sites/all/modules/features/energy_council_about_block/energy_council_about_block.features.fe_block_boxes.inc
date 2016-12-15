<?php
/**
 * @file
 * energy_council_about_block.features.fe_block_boxes.inc
 */

/**
 * Implements hook_default_fe_block_boxes().
 */
function energy_council_about_block_default_fe_block_boxes() {
  $export = array();

  $fe_block_boxes = new stdClass();
  $fe_block_boxes->info = 'About this site';
  $fe_block_boxes->format = 'filtered_html';
  $fe_block_boxes->machine_name = 'about_this_site';
  $fe_block_boxes->body = '<p><strong>The COAG Energy Council provides a forum for collaboration on developing an integrated and coherent national energy policy.</strong></p>

<p>In December 2013, the Council of Australian Governments (COAG) established the Energy Council as part of a decision to streamline the COAG council system and refocus it on COAG\'s priorities.</p>

<p>Find out more about the COAG Energy Council.</p>
';

  $export['about_this_site'] = $fe_block_boxes;

  return $export;
}
