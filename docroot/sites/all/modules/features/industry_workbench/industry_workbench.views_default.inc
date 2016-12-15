<?php
/**
 * @file
 * industry_workbench.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function industry_workbench_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'workbench_schedules';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node_revision';
  $view->human_name = 'Workbench: Schedules';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Current schedules';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['access']['perm'] = 'view revisions';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['pager']['options']['items_per_page'] = '10';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['pager']['options']['id'] = '0';
  $handler->display->display_options['pager']['options']['quantity'] = '9';
  $handler->display->display_options['style_plugin'] = 'table';
  $handler->display->display_options['style_options']['columns'] = array(
    'timestamp' => 'timestamp',
    'title' => 'title',
  );
  $handler->display->display_options['style_options']['default'] = '-1';
  $handler->display->display_options['style_options']['info'] = array(
    'timestamp' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'title' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
  );
  /* No results behavior: Global: Text area */
  $handler->display->display_options['empty']['area']['id'] = 'area';
  $handler->display->display_options['empty']['area']['table'] = 'views';
  $handler->display->display_options['empty']['area']['field'] = 'area';
  $handler->display->display_options['empty']['area']['empty'] = TRUE;
  $handler->display->display_options['empty']['area']['content'] = 'There are currently no items scheduled.';
  $handler->display->display_options['empty']['area']['format'] = 'filtered_html';
  /* Relationship: Content revision: Content */
  $handler->display->display_options['relationships']['vid']['id'] = 'vid';
  $handler->display->display_options['relationships']['vid']['table'] = 'node_revision';
  $handler->display->display_options['relationships']['vid']['field'] = 'vid';
  /* Field: Content revision: Nid */
  $handler->display->display_options['fields']['nid']['id'] = 'nid';
  $handler->display->display_options['fields']['nid']['table'] = 'node_revision';
  $handler->display->display_options['fields']['nid']['field'] = 'nid';
  /* Field: Content revision: Updated date */
  $handler->display->display_options['fields']['timestamp']['id'] = 'timestamp';
  $handler->display->display_options['fields']['timestamp']['table'] = 'node_revision';
  $handler->display->display_options['fields']['timestamp']['field'] = 'timestamp';
  $handler->display->display_options['fields']['timestamp']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['timestamp']['alter']['ellipsis'] = FALSE;
  /* Field: Content revision: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node_revision';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node_revision'] = TRUE;
  /* Field: Workbench Moderation: Current */
  $handler->display->display_options['fields']['is_current']['id'] = 'is_current';
  $handler->display->display_options['fields']['is_current']['table'] = 'workbench_moderation_node_history';
  $handler->display->display_options['fields']['is_current']['field'] = 'is_current';
  $handler->display->display_options['fields']['is_current']['not'] = 0;
  /* Field: Workbench Moderation: State */
  $handler->display->display_options['fields']['state']['id'] = 'state';
  $handler->display->display_options['fields']['state']['table'] = 'workbench_moderation_node_history';
  $handler->display->display_options['fields']['state']['field'] = 'state';
  $handler->display->display_options['fields']['state']['machine_name'] = 0;
  /* Field: Workbench Scheduler: Start State */
  $handler->display->display_options['fields']['start_state']['id'] = 'start_state';
  $handler->display->display_options['fields']['start_state']['table'] = 'workbench_scheduler_schedules';
  $handler->display->display_options['fields']['start_state']['field'] = 'start_state';
  /* Field: Workbench Scheduler: Start Date */
  $handler->display->display_options['fields']['start_date']['id'] = 'start_date';
  $handler->display->display_options['fields']['start_date']['table'] = 'workbench_scheduler_nodes';
  $handler->display->display_options['fields']['start_date']['field'] = 'start_date';
  $handler->display->display_options['fields']['start_date']['date_format'] = 'long';
  $handler->display->display_options['fields']['start_date']['second_date_format'] = 'long';
  /* Field: Workbench Scheduler: End State */
  $handler->display->display_options['fields']['end_state']['id'] = 'end_state';
  $handler->display->display_options['fields']['end_state']['table'] = 'workbench_scheduler_schedules';
  $handler->display->display_options['fields']['end_state']['field'] = 'end_state';
  /* Field: Workbench Scheduler: End Date */
  $handler->display->display_options['fields']['end_date']['id'] = 'end_date';
  $handler->display->display_options['fields']['end_date']['table'] = 'workbench_scheduler_nodes';
  $handler->display->display_options['fields']['end_date']['field'] = 'end_date';
  $handler->display->display_options['fields']['end_date']['date_format'] = 'long';
  $handler->display->display_options['fields']['end_date']['second_date_format'] = 'long';
  /* Field: Workbench Moderation: Moderation links */
  $handler->display->display_options['fields']['moderation_actions']['id'] = 'moderation_actions';
  $handler->display->display_options['fields']['moderation_actions']['table'] = 'workbench_moderation_node_history';
  $handler->display->display_options['fields']['moderation_actions']['field'] = 'moderation_actions';
  /* Sort criterion: Content revision: Updated date */
  $handler->display->display_options['sorts']['timestamp']['id'] = 'timestamp';
  $handler->display->display_options['sorts']['timestamp']['table'] = 'node_revision';
  $handler->display->display_options['sorts']['timestamp']['field'] = 'timestamp';
  $handler->display->display_options['filter_groups']['groups'] = array(
    1 => 'OR',
    2 => 'AND',
  );
  /* Filter criterion: Workbench Scheduler: End Date */
  $handler->display->display_options['filters']['end_date_1']['id'] = 'end_date_1';
  $handler->display->display_options['filters']['end_date_1']['table'] = 'workbench_scheduler_nodes';
  $handler->display->display_options['filters']['end_date_1']['field'] = 'end_date';
  $handler->display->display_options['filters']['end_date_1']['operator'] = '>';
  $handler->display->display_options['filters']['end_date_1']['value']['value'] = 'today';
  $handler->display->display_options['filters']['end_date_1']['group'] = 1;
  /* Filter criterion: Workbench Scheduler: Start Date */
  $handler->display->display_options['filters']['start_date_1']['id'] = 'start_date_1';
  $handler->display->display_options['filters']['start_date_1']['table'] = 'workbench_scheduler_nodes';
  $handler->display->display_options['filters']['start_date_1']['field'] = 'start_date';
  $handler->display->display_options['filters']['start_date_1']['operator'] = '>';
  $handler->display->display_options['filters']['start_date_1']['value']['value'] = 'today';
  $handler->display->display_options['filters']['start_date_1']['group'] = 1;
  /* Filter criterion: Workbench Scheduler: End Date */
  $handler->display->display_options['filters']['end_date']['id'] = 'end_date';
  $handler->display->display_options['filters']['end_date']['table'] = 'workbench_scheduler_nodes';
  $handler->display->display_options['filters']['end_date']['field'] = 'end_date';
  $handler->display->display_options['filters']['end_date']['operator'] = 'not empty';
  $handler->display->display_options['filters']['end_date']['group'] = 2;
  /* Filter criterion: Workbench Scheduler: Start Date */
  $handler->display->display_options['filters']['start_date']['id'] = 'start_date';
  $handler->display->display_options['filters']['start_date']['table'] = 'workbench_scheduler_nodes';
  $handler->display->display_options['filters']['start_date']['field'] = 'start_date';
  $handler->display->display_options['filters']['start_date']['operator'] = 'not empty';
  $handler->display->display_options['filters']['start_date']['group'] = 2;

  /* Display: Block */
  $handler = $view->new_display('block', 'Block', 'block');
  $export['workbench_schedules'] = $view;

  return $export;
}
