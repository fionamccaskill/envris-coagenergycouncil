<?php
/**
 * @file
 * energy_council_work_streams.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function energy_council_work_streams_taxonomy_default_vocabularies() {
  return array(
    'priority_issues_of_national_significance' => array(
      'name' => 'Council Priority',
      'machine_name' => 'priority_issues_of_national_significance',
      'description' => '',
      'hierarchy' => 0,
      'module' => 'taxonomy',
      'weight' => 0,
    ),
  );
}
