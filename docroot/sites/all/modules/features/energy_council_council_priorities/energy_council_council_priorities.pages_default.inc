<?php
/**
 * @file
 * energy_council_council_priorities.pages_default.inc
 */

/**
 * Implements hook_default_page_manager_handlers().
 */
function energy_council_council_priorities_default_page_manager_handlers() {
  $export = array();

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'term_view__council_priorities';
  $handler->task = 'term_view';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = 1;
  $handler->conf = array(
    'title' => 'Council priorities',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'name' => 'council_priorities',
    'access' => array(
      'plugins' => array(
        0 => array(
          'name' => 'term_vocabulary',
          'settings' => array(
            'machine_name' => array(
              'priority_issues_of_national_significance' => 'priority_issues_of_national_significance',
            ),
          ),
          'context' => 'argument_term_1',
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
  $display->title = '%term:name';
  $display->uuid = '78b3b540-27f2-4277-84ba-efdf938d1499';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-0c2a0a32-4c4b-4c26-8776-d05609b01dc9';
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
    $pane->uuid = '0c2a0a32-4c4b-4c26-8776-d05609b01dc9';
    $display->content['new-0c2a0a32-4c4b-4c26-8776-d05609b01dc9'] = $pane;
    $display->panels['left'][0] = 'new-0c2a0a32-4c4b-4c26-8776-d05609b01dc9';
    $pane = new stdClass();
    $pane->pid = 'new-7c763289-6409-44a7-bfa9-f4cd6fbd4970';
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
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '7c763289-6409-44a7-bfa9-f4cd6fbd4970';
    $display->content['new-7c763289-6409-44a7-bfa9-f4cd6fbd4970'] = $pane;
    $display->panels['right'][0] = 'new-7c763289-6409-44a7-bfa9-f4cd6fbd4970';
    $pane = new stdClass();
    $pane->pid = 'new-c0418424-d708-4d3b-8179-ac9383d2a73a';
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
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = 'c0418424-d708-4d3b-8179-ac9383d2a73a';
    $display->content['new-c0418424-d708-4d3b-8179-ac9383d2a73a'] = $pane;
    $display->panels['right'][1] = 'new-c0418424-d708-4d3b-8179-ac9383d2a73a';
    $pane = new stdClass();
    $pane->pid = 'new-650c2e82-fe8a-40a8-b93a-14d50d93aa88';
    $pane->panel = 'right';
    $pane->type = 'entity_field_extra';
    $pane->subtype = 'taxonomy_term:description';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'view_mode' => 'full',
      'context' => 'argument_term_1',
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
    $pane->position = 2;
    $pane->locks = array();
    $pane->uuid = '650c2e82-fe8a-40a8-b93a-14d50d93aa88';
    $display->content['new-650c2e82-fe8a-40a8-b93a-14d50d93aa88'] = $pane;
    $display->panels['right'][2] = 'new-650c2e82-fe8a-40a8-b93a-14d50d93aa88';
    $pane = new stdClass();
    $pane->pid = 'new-0bbbd356-1739-4194-ba21-9fd572d5bc22';
    $pane->panel = 'right';
    $pane->type = 'views_panes';
    $pane->subtype = 'council_priorities-panel_pane_1';
    $pane->shown = FALSE;
    $pane->access = array();
    $pane->configuration = array(
      'context' => array(
        0 => 'argument_term_1',
      ),
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
    $pane->position = 3;
    $pane->locks = array();
    $pane->uuid = '0bbbd356-1739-4194-ba21-9fd572d5bc22';
    $display->content['new-0bbbd356-1739-4194-ba21-9fd572d5bc22'] = $pane;
    $display->panels['right'][3] = 'new-0bbbd356-1739-4194-ba21-9fd572d5bc22';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $export['term_view__council_priorities'] = $handler;

  return $export;
}

/**
 * Implements hook_default_page_manager_pages().
 */
function energy_council_council_priorities_default_page_manager_pages() {
  $page = new stdClass();
  $page->disabled = FALSE; /* Edit this to true to make a default page disabled initially */
  $page->api_version = 1;
  $page->name = 'council_priorities';
  $page->task = 'page';
  $page->admin_title = 'Council Priorities';
  $page->admin_description = 'Displays a list of council priorities.';
  $page->path = 'council-priorities';
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
  $handler->name = 'page_council_priorities__panel_context_cedc18a2-f9b4-4197-b1b0-ef579ca19080';
  $handler->task = 'page';
  $handler->subtask = 'council_priorities';
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
  $display->title = 'Council Priorities';
  $display->uuid = '222dba18-3850-4d11-82d3-212667525c33';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-d4bb619b-99e4-4b8f-8af9-e9c47f2270b3';
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
    $pane->uuid = 'd4bb619b-99e4-4b8f-8af9-e9c47f2270b3';
    $display->content['new-d4bb619b-99e4-4b8f-8af9-e9c47f2270b3'] = $pane;
    $display->panels['left'][0] = 'new-d4bb619b-99e4-4b8f-8af9-e9c47f2270b3';
    $pane = new stdClass();
    $pane->pid = 'new-e73f9461-1be9-437e-9f34-2d9f9b71b7c7';
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
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = 'e73f9461-1be9-437e-9f34-2d9f9b71b7c7';
    $display->content['new-e73f9461-1be9-437e-9f34-2d9f9b71b7c7'] = $pane;
    $display->panels['right'][0] = 'new-e73f9461-1be9-437e-9f34-2d9f9b71b7c7';
    $pane = new stdClass();
    $pane->pid = 'new-5eed0878-74c2-4d4f-93c3-94b0ad00b3cd';
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
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = '5eed0878-74c2-4d4f-93c3-94b0ad00b3cd';
    $display->content['new-5eed0878-74c2-4d4f-93c3-94b0ad00b3cd'] = $pane;
    $display->panels['right'][1] = 'new-5eed0878-74c2-4d4f-93c3-94b0ad00b3cd';
    $pane = new stdClass();
    $pane->pid = 'new-a1ec4fa0-ac6b-42fe-a905-263fb4c3b9fd';
    $pane->panel = 'right';
    $pane->type = 'views_panes';
    $pane->subtype = 'council_priorities-council_priorities_full';
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
    $pane->position = 2;
    $pane->locks = array();
    $pane->uuid = 'a1ec4fa0-ac6b-42fe-a905-263fb4c3b9fd';
    $display->content['new-a1ec4fa0-ac6b-42fe-a905-263fb4c3b9fd'] = $pane;
    $display->panels['right'][2] = 'new-a1ec4fa0-ac6b-42fe-a905-263fb4c3b9fd';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $page->default_handlers[$handler->name] = $handler;
  $pages['council_priorities'] = $page;

  return $pages;

}
