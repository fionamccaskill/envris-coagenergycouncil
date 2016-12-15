<?php
/**
 * @file
 * industry_events.features.hierarchical_select.inc
 */

/**
 * Implements hook_hierarchical_select_default_configs().
 */
function industry_events_hierarchical_select_default_configs() {
$configs = array();
$config = array(
  'config_id'       => 'taxonomy-field_event_type',
  'save_lineage'    => 0,
  'enforce_deepest' => 1,
  'entity_count'    => 0,
  'require_entity'  => 0,
  'resizable'       => 1,
  'level_labels' => array(
    'status' => 0,
    'labels' => array(
      0 => '',
    ),
  ),
  'dropbox' => array(
    'status'    => 0,
    'title'     => 'All selections',
    'limit'     => 0,
    'reset_hs'  => 1,
  ),
  'editability' => array(
    'status' => 1,
    'item_types' => array(
      0 => '',
    ),
    'allowed_levels' => array(
      0 => 1,
    ),
    'allow_new_levels' => 1,
    'max_levels'       => 0,
  ),
);

$configs['taxonomy-field_event_type'] = $config;
return $configs;
}
