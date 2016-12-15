<?php
/**
 * @file
 * publications.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function publications_taxonomy_default_vocabularies() {
  return array(
    'document_categories' => array(
      'name' => 'Publication Type',
      'machine_name' => 'document_categories',
      'description' => 'Categorises documents.',
      'hierarchy' => 0,
      'module' => 'taxonomy',
      'weight' => 0,
    ),
  );
}
