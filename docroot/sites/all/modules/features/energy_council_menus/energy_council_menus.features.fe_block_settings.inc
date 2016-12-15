<?php
/**
 * @file
 * energy_council_menus.features.fe_block_settings.inc
 */

/**
 * Implements hook_default_fe_block_settings().
 */
function energy_council_menus_default_fe_block_settings() {
  $export = array();

  $export['version'] = '2.0';

  $export['menu-menu-footer'] = array(
    'cache' => -1,
    'css_class' => 'footer-menu',
    'custom' => 0,
    'delta' => 'menu-footer',
    'module' => 'menu',
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
        'region' => '',
        'status' => 0,
        'theme' => 'energy_council',
        'weight' => -15,
      ),
    ),
    'title' => '<none>',
    'visibility' => 0,
  );

  $export['menu-menu-header-menu'] = array(
    'cache' => -1,
    'css_class' => 'top-menu',
    'custom' => 0,
    'delta' => 'menu-header-menu',
    'module' => 'menu',
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
        'region' => 'header',
        'status' => 1,
        'theme' => 'energy_council',
        'weight' => -15,
      ),
    ),
    'title' => '<none>',
    'visibility' => 0,
  );

  $export['menu-menu-sub-footer'] = array(
    'cache' => -1,
    'css_class' => 'sub-footer-menu',
    'custom' => 0,
    'delta' => 'menu-sub-footer',
    'module' => 'menu',
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
        'region' => 'subfooter',
        'status' => 1,
        'theme' => 'energy_council',
        'weight' => 0,
      ),
    ),
    'title' => '<none>',
    'visibility' => 0,
  );

  $export['superfish-1'] = array(
    'cache' => -1,
    'css_class' => '',
    'custom' => 0,
    'delta' => 1,
    'module' => 'superfish',
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
        'region' => 'navigation',
        'status' => 1,
        'theme' => 'energy_council',
        'weight' => 2,
      ),
    ),
    'title' => '<none>',
    'visibility' => 0,
  );

  return $export;
}
