<?php
/**
 * @file
 * energy_council_basic_page.pages_default.inc
 */

/**
 * Implements hook_default_page_manager_handlers().
 */
function energy_council_basic_page_default_page_manager_handlers() {
  $export = array();

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'node_view__basic_page';
  $handler->task = 'node_view';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = 3;
  $handler->conf = array(
    'title' => 'Basic Page',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'name' => 'basic_page',
    'access' => array(
      'plugins' => array(
        0 => array(
          'name' => 'node_type',
          'settings' => array(
            'type' => array(
              'page' => 'page',
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
  $display->uuid = 'a71af08d-b625-44d7-bd27-acdd7a7aca4e';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-6e11e0c1-95e3-44e1-8ac1-4975341927cf';
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
    $pane->uuid = '6e11e0c1-95e3-44e1-8ac1-4975341927cf';
    $display->content['new-6e11e0c1-95e3-44e1-8ac1-4975341927cf'] = $pane;
    $display->panels['left'][0] = 'new-6e11e0c1-95e3-44e1-8ac1-4975341927cf';
    $pane = new stdClass();
    $pane->pid = 'new-4f4c1ec2-f11c-4131-a320-265c0427c66b';
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
    $pane->uuid = '4f4c1ec2-f11c-4131-a320-265c0427c66b';
    $display->content['new-4f4c1ec2-f11c-4131-a320-265c0427c66b'] = $pane;
    $display->panels['right'][0] = 'new-4f4c1ec2-f11c-4131-a320-265c0427c66b';
    $pane = new stdClass();
    $pane->pid = 'new-ad40e794-51d4-46f6-91f5-c5645fe1aa81';
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
    $pane->uuid = 'ad40e794-51d4-46f6-91f5-c5645fe1aa81';
    $display->content['new-ad40e794-51d4-46f6-91f5-c5645fe1aa81'] = $pane;
    $display->panels['right'][1] = 'new-ad40e794-51d4-46f6-91f5-c5645fe1aa81';
    $pane = new stdClass();
    $pane->pid = 'new-e69b1a3b-10ad-4cea-a691-fd469289524e';
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
    $pane->uuid = 'e69b1a3b-10ad-4cea-a691-fd469289524e';
    $display->content['new-e69b1a3b-10ad-4cea-a691-fd469289524e'] = $pane;
    $display->panels['right'][2] = 'new-e69b1a3b-10ad-4cea-a691-fd469289524e';
    $pane = new stdClass();
    $pane->pid = 'new-498fabcd-8c81-40f8-8986-25057cc61ee1';
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
    $pane->uuid = '498fabcd-8c81-40f8-8986-25057cc61ee1';
    $display->content['new-498fabcd-8c81-40f8-8986-25057cc61ee1'] = $pane;
    $display->panels['right'][3] = 'new-498fabcd-8c81-40f8-8986-25057cc61ee1';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = 'new-6e11e0c1-95e3-44e1-8ac1-4975341927cf';
  $handler->conf['display'] = $display;
  $export['node_view__basic_page'] = $handler;

  return $export;
}
