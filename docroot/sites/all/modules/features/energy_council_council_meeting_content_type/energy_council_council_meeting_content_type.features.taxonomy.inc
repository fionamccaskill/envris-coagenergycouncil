<?php
/**
 * @file
 * energy_council_council_meeting_content_type.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function energy_council_council_meeting_content_type_taxonomy_default_vocabularies() {
  return array(
    'meeting_type' => array(
      'name' => 'Meeting Type',
      'machine_name' => 'meeting_type',
      'description' => 'Stores \'types\' of council meetings for sorting and grouping purposes.',
      'hierarchy' => 0,
      'module' => 'taxonomy',
      'weight' => 0,
    ),
  );
}
