<?php
/**
 * @file
 * energy_council_search.features.fe_block_settings.inc
 */

/**
 * Implements hook_default_fe_block_settings().
 */
function energy_council_search_default_fe_block_settings() {
  $export = array();

  $export['version'] = '2.0';

  $export['apachesolr_panels-search_form'] = array(
    'cache' => -1,
    'css_class' => '',
    'custom' => 0,
    'delta' => 'search_form',
    'module' => 'apachesolr_panels',
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
        'weight' => 0,
      ),
    ),
    'title' => '',
    'visibility' => 0,
  );

  $export['custom_search_blocks-1'] = array(
    'cache' => -1,
    'css_class' => '',
    'custom' => 0,
    'delta' => 1,
    'module' => 'custom_search_blocks',
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
        'weight' => 0,
      ),
    ),
    'title' => '',
    'visibility' => 0,
  );

  $export['custom_search_blocks-2'] = array(
    'cache' => -1,
    'css_class' => '',
    'custom' => 0,
    'delta' => 2,
    'module' => 'custom_search_blocks',
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
        'weight' => 0,
      ),
    ),
    'title' => '',
    'visibility' => 0,
  );

  $export['facetapi-1vx93wKyU7HoAzs6sa0PMm14kMgfBQ1d'] = array(
    'cache' => -1,
    'css_class' => 'publications-search-date',
    'custom' => 0,
    'delta' => '1vx93wKyU7HoAzs6sa0PMm14kMgfBQ1d',
    'module' => 'facetapi',
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
        'weight' => -19,
      ),
    ),
    'title' => '',
    'visibility' => 0,
  );

  $export['facetapi-GiIy4zr9Gu0ZSa0bumw1Y9qIIpIDf1wu'] = array(
    'cache' => -1,
    'css_class' => '',
    'custom' => 0,
    'delta' => 'GiIy4zr9Gu0ZSa0bumw1Y9qIIpIDf1wu',
    'module' => 'facetapi',
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
        'weight' => 0,
      ),
    ),
    'title' => '',
    'visibility' => 0,
  );

  $export['facetapi-Iki0WcR148qZFw325tteAwFXLCsn2BCf'] = array(
    'cache' => -1,
    'css_class' => '',
    'custom' => 0,
    'delta' => 'Iki0WcR148qZFw325tteAwFXLCsn2BCf',
    'module' => 'facetapi',
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
        'weight' => 0,
      ),
    ),
    'title' => '',
    'visibility' => 0,
  );

  $export['facetapi-YdDbjnk2RBNprs7zE0nyxz1qLyN16Ak0'] = array(
    'cache' => -1,
    'css_class' => 'publications-search-category',
    'custom' => 0,
    'delta' => 'YdDbjnk2RBNprs7zE0nyxz1qLyN16Ak0',
    'module' => 'facetapi',
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
        'weight' => -18,
      ),
    ),
    'title' => '',
    'visibility' => 0,
  );

  return $export;
}
