<?php
/**
 * @file
 * industry_workbench.pages_default.inc
 */

/**
 * Implements hook_default_page_manager_handlers().
 */
function industry_workbench_default_page_manager_handlers() {
  $export = array();

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'myworkbench__panel_context_c426cf63-3a68-4833-ae9d-9b911ffda8ca';
  $handler->task = 'myworkbench';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = 101;
  $handler->conf = array(
    'title' => 'Custom Workbench',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
  );
  $display = new panels_display();
  $display->layout = 'twocol_bricks';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'middle' => NULL,
      'top' => NULL,
      'left_above' => NULL,
      'right_above' => NULL,
      'left_below' => NULL,
      'right_below' => NULL,
      'bottom' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = 'My Workbench';
  $display->uuid = 'db58e4bd-d511-4fd6-b03b-7b5b159f6545';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-1a7930a6-de0f-4fe8-834b-c951b93d07f4';
    $pane->panel = 'left_above';
    $pane->type = 'views';
    $pane->subtype = 'workbench_current_user';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'override_pager_settings' => 0,
      'use_pager' => 0,
      'nodes_per_page' => '0',
      'pager_id' => '0',
      'offset' => '0',
      'more_link' => 0,
      'feed_icons' => 0,
      'panel_args' => 0,
      'link_to_view' => 0,
      'args' => '',
      'url' => '',
      'display' => 'default',
      'override_title' => 0,
      'override_title_text' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = '';
    $pane->uuid = '1a7930a6-de0f-4fe8-834b-c951b93d07f4';
    $display->content['new-1a7930a6-de0f-4fe8-834b-c951b93d07f4'] = $pane;
    $display->panels['left_above'][0] = 'new-1a7930a6-de0f-4fe8-834b-c951b93d07f4';
    $pane = new stdClass();
    $pane->pid = 'new-bd9976d2-a859-43e5-9b8c-c72ef51cce5b';
    $pane->panel = 'middle';
    $pane->type = 'views';
    $pane->subtype = 'workbench_schedules';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'override_pager_settings' => 0,
      'use_pager' => 0,
      'nodes_per_page' => '5',
      'pager_id' => '0',
      'offset' => '0',
      'more_link' => 0,
      'feed_icons' => 0,
      'panel_args' => 0,
      'link_to_view' => 0,
      'args' => '',
      'url' => '',
      'display' => 'block',
      'override_title' => 0,
      'override_title_text' => '',
      'override_title_heading' => 'h2',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = 'bd9976d2-a859-43e5-9b8c-c72ef51cce5b';
    $display->content['new-bd9976d2-a859-43e5-9b8c-c72ef51cce5b'] = $pane;
    $display->panels['middle'][0] = 'new-bd9976d2-a859-43e5-9b8c-c72ef51cce5b';
    $pane = new stdClass();
    $pane->pid = 'new-175bb574-a278-4d94-8978-c601bfacb39a';
    $pane->panel = 'middle';
    $pane->type = 'views';
    $pane->subtype = 'workbench_recent_content';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'override_pager_settings' => 0,
      'use_pager' => 0,
      'nodes_per_page' => '25',
      'pager_id' => '0',
      'offset' => '0',
      'more_link' => 0,
      'feed_icons' => 0,
      'panel_args' => 0,
      'link_to_view' => 0,
      'args' => '',
      'url' => '',
      'display' => 'block_1',
      'override_title' => 0,
      'override_title_text' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 1;
    $pane->locks = '';
    $pane->uuid = '175bb574-a278-4d94-8978-c601bfacb39a';
    $display->content['new-175bb574-a278-4d94-8978-c601bfacb39a'] = $pane;
    $display->panels['middle'][1] = 'new-175bb574-a278-4d94-8978-c601bfacb39a';
    $pane = new stdClass();
    $pane->pid = 'new-010f8009-0dde-486d-a57c-b7ffab9106c2';
    $pane->panel = 'right_above';
    $pane->type = 'views';
    $pane->subtype = 'workbench_edited';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'override_pager_settings' => 0,
      'use_pager' => 0,
      'nodes_per_page' => '5',
      'pager_id' => '0',
      'offset' => '0',
      'more_link' => 0,
      'feed_icons' => 0,
      'panel_args' => 0,
      'link_to_view' => 0,
      'args' => '',
      'url' => '',
      'display' => 'block_1',
      'override_title' => 0,
      'override_title_text' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = '';
    $pane->uuid = '010f8009-0dde-486d-a57c-b7ffab9106c2';
    $display->content['new-010f8009-0dde-486d-a57c-b7ffab9106c2'] = $pane;
    $display->panels['right_above'][0] = 'new-010f8009-0dde-486d-a57c-b7ffab9106c2';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = 'new-175bb574-a278-4d94-8978-c601bfacb39a';
  $handler->conf['display'] = $display;
  $export['myworkbench__panel_context_c426cf63-3a68-4833-ae9d-9b911ffda8ca'] = $handler;

  return $export;
}
