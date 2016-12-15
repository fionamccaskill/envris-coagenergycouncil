<?php
/**
 * @file
 * consultations.pages_default.inc
 */

/**
 * Implements hook_default_page_manager_handlers().
 */
function consultations_default_page_manager_handlers() {
  $export = array();

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'node_view__consultations';
  $handler->task = 'node_view';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'Consultations',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'name' => 'consultations',
    'access' => array(
      'logic' => 'and',
      'plugins' => array(
        0 => array(
          'name' => 'node_type',
          'settings' => array(
            'type' => array(
              'consultation' => 'consultation',
            ),
          ),
          'context' => 'argument_entity_id:node_1',
          'not' => FALSE,
        ),
      ),
    ),
  );
  $display = new panels_display();
  $display->layout = 'energy_council_home';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'content' => NULL,
      'left' => NULL,
      'right' => NULL,
      'bottom' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '%node:title';
  $display->uuid = 'd3e92bf4-bdb7-44d2-ac16-48015228b2ae';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-88452997-2b1b-4d3d-bd95-779a17793d91';
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
    $pane->uuid = '88452997-2b1b-4d3d-bd95-779a17793d91';
    $display->content['new-88452997-2b1b-4d3d-bd95-779a17793d91'] = $pane;
    $display->panels['left'][0] = 'new-88452997-2b1b-4d3d-bd95-779a17793d91';
    $pane = new stdClass();
    $pane->pid = 'new-bdada8dc-94b5-4b63-b52a-c7ef2233afab';
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
    $pane->uuid = 'bdada8dc-94b5-4b63-b52a-c7ef2233afab';
    $display->content['new-bdada8dc-94b5-4b63-b52a-c7ef2233afab'] = $pane;
    $display->panels['right'][0] = 'new-bdada8dc-94b5-4b63-b52a-c7ef2233afab';
    $pane = new stdClass();
    $pane->pid = 'new-be542b48-90da-4a76-9768-a5a72c0983f9';
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
    $pane->uuid = 'be542b48-90da-4a76-9768-a5a72c0983f9';
    $display->content['new-be542b48-90da-4a76-9768-a5a72c0983f9'] = $pane;
    $display->panels['right'][1] = 'new-be542b48-90da-4a76-9768-a5a72c0983f9';
    $pane = new stdClass();
    $pane->pid = 'new-39cd0e4c-3bf6-4163-ab23-399a166f1795';
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
      'override_title_heading' => 'h1',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 2;
    $pane->locks = array();
    $pane->uuid = '39cd0e4c-3bf6-4163-ab23-399a166f1795';
    $display->content['new-39cd0e4c-3bf6-4163-ab23-399a166f1795'] = $pane;
    $display->panels['right'][2] = 'new-39cd0e4c-3bf6-4163-ab23-399a166f1795';
    $pane = new stdClass();
    $pane->pid = 'new-64f69053-38fd-48a3-9e0b-502da8d11112';
    $pane->panel = 'right';
    $pane->type = 'node_content';
    $pane->subtype = 'node_content';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'links' => 0,
      'no_extras' => 1,
      'override_title' => 1,
      'override_title_text' => '',
      'identifier' => '',
      'link' => 0,
      'leave_node_title' => 0,
      'build_mode' => 'full',
      'context' => 'argument_entity_id:node_1',
      'override_title_heading' => 'h2',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 3;
    $pane->locks = array();
    $pane->uuid = '64f69053-38fd-48a3-9e0b-502da8d11112';
    $display->content['new-64f69053-38fd-48a3-9e0b-502da8d11112'] = $pane;
    $display->panels['right'][3] = 'new-64f69053-38fd-48a3-9e0b-502da8d11112';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $export['node_view__consultations'] = $handler;

  return $export;
}

/**
 * Implements hook_default_page_manager_pages().
 */
function consultations_default_page_manager_pages() {
  $page = new stdClass();
  $page->disabled = FALSE; /* Edit this to true to make a default page disabled initially */
  $page->api_version = 1;
  $page->name = 'consultations';
  $page->task = 'page';
  $page->admin_title = 'Consultations';
  $page->admin_description = 'Lists consultations currently available.';
  $page->path = 'engagement/consultations';
  $page->access = array();
  $page->menu = array();
  $page->arguments = array();
  $page->conf = array(
    'admin_paths' => FALSE,
  );
  $page->default_handlers = array();
  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'page_consultations__panel_context_099c6cc0-5d54-4ae2-b0cb-6751016ba682';
  $handler->task = 'page';
  $handler->subtask = 'consultations';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'Panel',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
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
  $display->title = 'Consultations';
  $display->uuid = '59856935-54f7-4126-b1dc-c3a34a737d90';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-1cd8afd0-3cc4-4374-ab1d-d87fc76325e5';
    $pane->panel = 'left';
    $pane->type = 'menu_tree';
    $pane->subtype = 'main-menu';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'parent' => 'main-menu:0',
      'title_link' => 0,
      'admin_title' => '',
      'level' => '2',
      'follow' => 0,
      'depth' => '0',
      'depth_relative' => 0,
      'expanded' => 0,
      'sort' => 0,
      'menu_name' => 'main-menu',
      'parent_mlid' => '0',
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
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '1cd8afd0-3cc4-4374-ab1d-d87fc76325e5';
    $display->content['new-1cd8afd0-3cc4-4374-ab1d-d87fc76325e5'] = $pane;
    $display->panels['left'][0] = 'new-1cd8afd0-3cc4-4374-ab1d-d87fc76325e5';
    $pane = new stdClass();
    $pane->pid = 'new-e9c9f76e-2428-458d-bf24-0fda3f258852';
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
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = 'e9c9f76e-2428-458d-bf24-0fda3f258852';
    $display->content['new-e9c9f76e-2428-458d-bf24-0fda3f258852'] = $pane;
    $display->panels['right'][0] = 'new-e9c9f76e-2428-458d-bf24-0fda3f258852';
    $pane = new stdClass();
    $pane->pid = 'new-578af99d-9aea-4abb-a274-ebeae2368d67';
    $pane->panel = 'right';
    $pane->type = 'views_panes';
    $pane->subtype = 'consultations-panel_pane_1';
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
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = '578af99d-9aea-4abb-a274-ebeae2368d67';
    $display->content['new-578af99d-9aea-4abb-a274-ebeae2368d67'] = $pane;
    $display->panels['right'][1] = 'new-578af99d-9aea-4abb-a274-ebeae2368d67';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = 'new-1cd8afd0-3cc4-4374-ab1d-d87fc76325e5';
  $handler->conf['display'] = $display;
  $page->default_handlers[$handler->name] = $handler;
  $pages['consultations'] = $page;

  return $pages;

}
