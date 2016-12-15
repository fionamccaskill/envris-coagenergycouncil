<?php
/**
 * @file
 * energy_council_search.apachesolr_environments.inc
 */

/**
 * Implements hook_apachesolr_environments().
 */
function energy_council_search_apachesolr_environments() {
  $export = array();

  $environment = new stdClass();
  $environment->api_version = 1;
  $environment->env_id = 'solr';
  $environment->name = 'Solr';
  $environment->url = 'http://10.1.32.1:8080/solr/dev.energycouncil';
  $environment->service_class = '';
  $environment->conf = array(
    'apachesolr_direct_commit' => 0,
    'apachesolr_read_only' => '0',
    'apachesolr_search_facet_pages' => '',
    'apachesolr_soft_commit' => 1,
  );
  $environment->index_bundles = array(
    'node' => array(
      0 => 'consultation',
      1 => 'event',
      2 => 'news',
      3 => 'page',
      4 => 'publications',
      5 => 'work_stream',
    ),
  );
  $export['solr'] = $environment;

  return $export;
}
