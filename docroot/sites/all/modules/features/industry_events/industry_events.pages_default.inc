<?php
/**
 * @file
 * industry_events.pages_default.inc
 */

/**
 * Implements hook_default_page_manager_handlers().
 */
function industry_events_default_page_manager_handlers() {
  $export = array();

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'node_view__events';
  $handler->task = 'node_view';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = 2;
  $handler->conf = array(
    'title' => 'Events',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'name' => 'events',
    'access' => array(
      'plugins' => array(
        0 => array(
          'name' => 'node_type',
          'settings' => array(
            'type' => array(
              'event' => 'event',
            ),
          ),
          'context' => 'argument_entity_id:node_1',
          'not' => FALSE,
        ),
      ),
      'logic' => 'and',
    ),
  );
  $display = new panels_display();
  $display->layout = 'energy_council_home';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'left' => NULL,
      'right' => NULL,
      'bottom' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '%node:title';
  $display->uuid = '60afa768-57b3-44a9-80f9-f31754ed6b75';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-89514af8-7789-4201-98b7-5d66f616158d';
    $pane->panel = 'left';
    $pane->type = 'block';
    $pane->subtype = 'system-main-menu';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'override_title' => 1,
      'override_title_text' => '',
      'override_title_heading' => 'h2',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => 'left-menu',
      'css_class' => '',
    );
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '89514af8-7789-4201-98b7-5d66f616158d';
    $display->content['new-89514af8-7789-4201-98b7-5d66f616158d'] = $pane;
    $display->panels['left'][0] = 'new-89514af8-7789-4201-98b7-5d66f616158d';
    $pane = new stdClass();
    $pane->pid = 'new-4ac4c525-9562-448f-9177-6f7df20b5925';
    $pane->panel = 'right';
    $pane->type = 'block';
    $pane->subtype = 'workbench-block';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
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
    $pane->uuid = '4ac4c525-9562-448f-9177-6f7df20b5925';
    $display->content['new-4ac4c525-9562-448f-9177-6f7df20b5925'] = $pane;
    $display->panels['right'][0] = 'new-4ac4c525-9562-448f-9177-6f7df20b5925';
    $pane = new stdClass();
    $pane->pid = 'new-1cb46607-2881-4ae6-9da8-e1ba52372e2d';
    $pane->panel = 'right';
    $pane->type = 'block';
    $pane->subtype = 'crumbs-breadcrumb';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'override_title' => 1,
      'override_title_text' => '',
      'override_title_heading' => 'h2',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => 'breadcrumbs',
      'css_class' => '',
    );
    $pane->extras = array();
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = '1cb46607-2881-4ae6-9da8-e1ba52372e2d';
    $display->content['new-1cb46607-2881-4ae6-9da8-e1ba52372e2d'] = $pane;
    $display->panels['right'][1] = 'new-1cb46607-2881-4ae6-9da8-e1ba52372e2d';
    $pane = new stdClass();
    $pane->pid = 'new-69b18447-a7ec-49eb-94d2-8cd535810436';
    $pane->panel = 'right';
    $pane->type = 'page_title';
    $pane->subtype = 'page_title';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'markup' => 'h1',
      'class' => '',
      'id' => '',
      'override_title' => 1,
      'override_title_text' => '',
      'override_title_heading' => 'h2',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 2;
    $pane->locks = array();
    $pane->uuid = '69b18447-a7ec-49eb-94d2-8cd535810436';
    $display->content['new-69b18447-a7ec-49eb-94d2-8cd535810436'] = $pane;
    $display->panels['right'][2] = 'new-69b18447-a7ec-49eb-94d2-8cd535810436';
    $pane = new stdClass();
    $pane->pid = 'new-4387ada2-6fe5-449f-825e-005136fe967b';
    $pane->panel = 'right';
    $pane->type = 'node_content';
    $pane->subtype = 'node_content';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'links' => 0,
      'no_extras' => 0,
      'override_title' => 1,
      'override_title_text' => '',
      'identifier' => '',
      'link' => 0,
      'leave_node_title' => 0,
      'build_mode' => 'full',
      'context' => 'argument_entity_id:node_1',
      'override_title_heading' => 'h1',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 3;
    $pane->locks = array();
    $pane->uuid = '4387ada2-6fe5-449f-825e-005136fe967b';
    $display->content['new-4387ada2-6fe5-449f-825e-005136fe967b'] = $pane;
    $display->panels['right'][3] = 'new-4387ada2-6fe5-449f-825e-005136fe967b';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = 'new-89514af8-7789-4201-98b7-5d66f616158d';
  $handler->conf['display'] = $display;
  $export['node_view__events'] = $handler;

  return $export;
}
