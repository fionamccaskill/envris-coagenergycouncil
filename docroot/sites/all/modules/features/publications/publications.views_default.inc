<?php
/**
 * @file
 * publications.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function publications_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'publications';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'search_api_index_publications';
  $view->human_name = 'Publications';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'none';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Relationship: Broken/missing handler */
  $handler->display->display_options['relationships']['field_attachments_file']['id'] = 'field_attachments_file';
  $handler->display->display_options['relationships']['field_attachments_file']['table'] = 'search_api_index_publications';
  $handler->display->display_options['relationships']['field_attachments_file']['field'] = 'field_attachments_file';
  $handler->display->display_options['relationships']['field_attachments_file']['label'] = 'Attachments » The file.';
  /* Relationship: Broken/missing handler */
  $handler->display->display_options['relationships']['field_attachments_file_1']['id'] = 'field_attachments_file_1';
  $handler->display->display_options['relationships']['field_attachments_file_1']['table'] = 'search_api_index_publications';
  $handler->display->display_options['relationships']['field_attachments_file_1']['field'] = 'field_attachments_file';
  $handler->display->display_options['relationships']['field_attachments_file_1']['label'] = 'Attachments » The file.';
  /* Field: Broken/missing handler */
  $handler->display->display_options['fields']['nid']['id'] = 'nid';
  $handler->display->display_options['fields']['nid']['table'] = 'search_api_index_publications';
  $handler->display->display_options['fields']['nid']['field'] = 'nid';
  /* Field: Broken/missing handler */
  $handler->display->display_options['fields']['search_api_excerpt']['id'] = 'search_api_excerpt';
  $handler->display->display_options['fields']['search_api_excerpt']['table'] = 'search_api_index_publications';
  $handler->display->display_options['fields']['search_api_excerpt']['field'] = 'search_api_excerpt';
  $handler->display->display_options['fields']['search_api_excerpt']['label'] = 'Excerpt';
  /* Field: Broken/missing handler */
  $handler->display->display_options['fields']['search_api_relevance']['id'] = 'search_api_relevance';
  $handler->display->display_options['fields']['search_api_relevance']['table'] = 'search_api_index_publications';
  $handler->display->display_options['fields']['search_api_relevance']['field'] = 'search_api_relevance';
  $handler->display->display_options['fields']['search_api_relevance']['label'] = 'Relevance';
  /* Field: File: File name */
  $handler->display->display_options['fields']['name']['id'] = 'name';
  $handler->display->display_options['fields']['name']['table'] = 'entity_file';
  $handler->display->display_options['fields']['name']['field'] = 'name';
  $handler->display->display_options['fields']['name']['relationship'] = 'field_attachments_file';
  /* Field: File: File size */
  $handler->display->display_options['fields']['size']['id'] = 'size';
  $handler->display->display_options['fields']['size']['table'] = 'entity_file';
  $handler->display->display_options['fields']['size']['field'] = 'size';
  $handler->display->display_options['fields']['size']['relationship'] = 'field_attachments_file';
  $handler->display->display_options['fields']['size']['link_to_entity'] = 0;
  /* Field: Broken/missing handler */
  $handler->display->display_options['fields']['field_attachments_file']['id'] = 'field_attachments_file';
  $handler->display->display_options['fields']['field_attachments_file']['table'] = 'search_api_index_publications';
  $handler->display->display_options['fields']['field_attachments_file']['field'] = 'field_attachments_file';
  $handler->display->display_options['fields']['field_attachments_file']['label'] = 'The file. (indexed)';
  /* Field: File: Rendered File */
  $handler->display->display_options['fields']['rendered_entity']['id'] = 'rendered_entity';
  $handler->display->display_options['fields']['rendered_entity']['table'] = 'views_entity_file';
  $handler->display->display_options['fields']['rendered_entity']['field'] = 'rendered_entity';
  $handler->display->display_options['fields']['rendered_entity']['relationship'] = 'field_attachments_file';
  $handler->display->display_options['fields']['rendered_entity']['link_to_entity'] = 1;
  $handler->display->display_options['fields']['rendered_entity']['view_mode'] = 'ical';
  $handler->display->display_options['fields']['rendered_entity']['bypass_access'] = 0;
  /* Field: Broken/missing handler */
  $handler->display->display_options['fields']['body_value']['id'] = 'body_value';
  $handler->display->display_options['fields']['body_value']['table'] = 'search_api_index_publications';
  $handler->display->display_options['fields']['body_value']['field'] = 'body_value';
  $handler->display->display_options['fields']['body_value']['label'] = 'Text (indexed)';
  /* Filter criterion: Broken/missing handler */
  $handler->display->display_options['filters']['search_api_views_fulltext']['id'] = 'search_api_views_fulltext';
  $handler->display->display_options['filters']['search_api_views_fulltext']['table'] = 'search_api_index_publications';
  $handler->display->display_options['filters']['search_api_views_fulltext']['field'] = 'search_api_views_fulltext';
  $handler->display->display_options['filters']['search_api_views_fulltext']['operator'] = 'OR';
  $handler->display->display_options['filters']['search_api_views_fulltext']['exposed'] = TRUE;
  $handler->display->display_options['filters']['search_api_views_fulltext']['expose']['operator_id'] = 'search_api_views_fulltext_op';
  $handler->display->display_options['filters']['search_api_views_fulltext']['expose']['label'] = 'Fulltext search';
  $handler->display->display_options['filters']['search_api_views_fulltext']['expose']['operator'] = 'search_api_views_fulltext_op';
  $handler->display->display_options['filters']['search_api_views_fulltext']['expose']['identifier'] = 'search_api_views_fulltext';
  $handler->display->display_options['filters']['search_api_views_fulltext']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
    4 => 0,
    5 => 0,
  );

  /* Display: Content pane */
  $handler = $view->new_display('panel_pane', 'Content pane', 'panel_pane_1');
  $export['publications'] = $view;

  return $export;
}
