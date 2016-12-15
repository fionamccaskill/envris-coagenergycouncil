<?php
/**
 * @file
 * energy_council_about_block.features.fe_block_settings.inc
 */

/**
 * Implements hook_default_fe_block_settings().
 */
function energy_council_about_block_default_fe_block_settings() {
  $export = array();

  $export['version'] = '2.0';

  $export['block-about_this_site'] = array(
    'cache' => -1,
    'css_class' => 'about-this-site',
    'custom' => 0,
    'machine_name' => 'about_this_site',
    'module' => 'block',
    'node_types' => array(),
    'pages' => '',
    'roles' => array(),
    'themes' => array(
      'adminimal' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'adminimal',
        'weight' => 0,
      ),
      'energy_council' => array(
        'region' => 'footer',
        'status' => 1,
        'theme' => 'energy_council',
        'weight' => -15,
      ),
    ),
    'title' => '<none>',
    'visibility' => 0,
  );

  return $export;
}
