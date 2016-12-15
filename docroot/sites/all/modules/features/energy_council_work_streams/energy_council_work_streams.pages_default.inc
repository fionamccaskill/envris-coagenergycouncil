<?php
/**
 * @file
 * energy_council_work_streams.pages_default.inc
 */

/**
 * Implements hook_default_page_manager_handlers().
 */
function energy_council_work_streams_default_page_manager_handlers() {
  $export = array();

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'node_view__work_streams';
  $handler->task = 'node_view';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = 1;
  $handler->conf = array(
    'title' => 'Work Streams',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'name' => 'work_streams',
    'access' => array(
      'plugins' => array(
        0 => array(
          'name' => 'node_type',
          'settings' => array(
            'type' => array(
              'work_stream' => 'work_stream',
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
      'content' => NULL,
      'left' => NULL,
      'right' => NULL,
      'bottom' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '%node:title';
  $display->uuid = '19608b78-4efc-4256-9b78-cf7ca293d59b';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-0919869b-e9ac-451e-91f4-a1e287fe5a02';
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
    $pane->uuid = '0919869b-e9ac-451e-91f4-a1e287fe5a02';
    $display->content['new-0919869b-e9ac-451e-91f4-a1e287fe5a02'] = $pane;
    $display->panels['left'][0] = 'new-0919869b-e9ac-451e-91f4-a1e287fe5a02';
    $pane = new stdClass();
    $pane->pid = 'new-5ad510d4-85bd-45bb-900e-85b2cb66a17e';
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
    $pane->uuid = '5ad510d4-85bd-45bb-900e-85b2cb66a17e';
    $display->content['new-5ad510d4-85bd-45bb-900e-85b2cb66a17e'] = $pane;
    $display->panels['right'][0] = 'new-5ad510d4-85bd-45bb-900e-85b2cb66a17e';
    $pane = new stdClass();
    $pane->pid = 'new-fd8d0bc6-6cf5-44a7-b44c-d5287204a352';
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
    $pane->uuid = 'fd8d0bc6-6cf5-44a7-b44c-d5287204a352';
    $display->content['new-fd8d0bc6-6cf5-44a7-b44c-d5287204a352'] = $pane;
    $display->panels['right'][1] = 'new-fd8d0bc6-6cf5-44a7-b44c-d5287204a352';
    $pane = new stdClass();
    $pane->pid = 'new-704761f9-a7bc-4f2a-8907-ba53182c4dd2';
    $pane->panel = 'right';
    $pane->type = 'node_title';
    $pane->subtype = 'node_title';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'link' => 0,
      'markup' => 'h1',
      'id' => '',
      'class' => '',
      'context' => 'argument_entity_id:node_1',
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
    $pane->uuid = '704761f9-a7bc-4f2a-8907-ba53182c4dd2';
    $display->content['new-704761f9-a7bc-4f2a-8907-ba53182c4dd2'] = $pane;
    $display->panels['right'][2] = 'new-704761f9-a7bc-4f2a-8907-ba53182c4dd2';
    $pane = new stdClass();
    $pane->pid = 'new-47bf196d-13be-42e2-b76c-be1015d58258';
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
    $pane->uuid = '47bf196d-13be-42e2-b76c-be1015d58258';
    $display->content['new-47bf196d-13be-42e2-b76c-be1015d58258'] = $pane;
    $display->panels['right'][3] = 'new-47bf196d-13be-42e2-b76c-be1015d58258';
  $display->hide_title = PANELS_TITLE_NONE;
  $display->title_pane = 'new-fd8d0bc6-6cf5-44a7-b44c-d5287204a352';
  $handler->conf['display'] = $display;
  $export['node_view__work_streams'] = $handler;

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'term_view__work_stream';
  $handler->task = 'term_view';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'Work Stream',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'name' => 'work_stream',
    'access' => array(
      'plugins' => array(
        0 => array(
          'name' => 'term_vocabulary',
          'settings' => array(
            'machine_name' => array(
              'work_streams' => 'work_streams',
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
  $display->uuid = '028429a5-0e6b-401a-857a-29e5dd259514';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-9332a285-5eb0-4964-8a9f-16ee1d906d41';
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
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '9332a285-5eb0-4964-8a9f-16ee1d906d41';
    $display->content['new-9332a285-5eb0-4964-8a9f-16ee1d906d41'] = $pane;
    $display->panels['left'][0] = 'new-9332a285-5eb0-4964-8a9f-16ee1d906d41';
    $pane = new stdClass();
    $pane->pid = 'new-0fbd9b8d-0c82-400a-8e7b-b296891fa46c';
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
    $pane->uuid = '0fbd9b8d-0c82-400a-8e7b-b296891fa46c';
    $display->content['new-0fbd9b8d-0c82-400a-8e7b-b296891fa46c'] = $pane;
    $display->panels['right'][0] = 'new-0fbd9b8d-0c82-400a-8e7b-b296891fa46c';
    $pane = new stdClass();
    $pane->pid = 'new-e5be1cfb-38ef-40f2-b344-e80ee5bc78f9';
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
    $pane->css = array(
      'css_id' => '',
      'css_class' => 'term-description',
    );
    $pane->extras = array();
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = 'e5be1cfb-38ef-40f2-b344-e80ee5bc78f9';
    $display->content['new-e5be1cfb-38ef-40f2-b344-e80ee5bc78f9'] = $pane;
    $display->panels['right'][1] = 'new-e5be1cfb-38ef-40f2-b344-e80ee5bc78f9';
    $pane = new stdClass();
    $pane->pid = 'new-e8a1f239-830d-40ac-abaf-0d2fbcf76fd5';
    $pane->panel = 'right';
    $pane->type = 'entity_field';
    $pane->subtype = 'taxonomy_term:field_work_stream_body';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'hidden',
      'formatter' => 'node_reference_node',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(
        'node_reference_view_mode' => 'full',
      ),
      'context' => 'argument_term_1',
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
    $pane->uuid = 'e8a1f239-830d-40ac-abaf-0d2fbcf76fd5';
    $display->content['new-e8a1f239-830d-40ac-abaf-0d2fbcf76fd5'] = $pane;
    $display->panels['right'][2] = 'new-e8a1f239-830d-40ac-abaf-0d2fbcf76fd5';
    $pane = new stdClass();
    $pane->pid = 'new-23b0e242-8379-48db-ae50-90d772064fc5';
    $pane->panel = 'right';
    $pane->type = 'views_panes';
    $pane->subtype = 'work_streams-panel_pane_1';
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
      'css_id' => '',
      'css_class' => 'term-list',
    );
    $pane->extras = array();
    $pane->position = 3;
    $pane->locks = array();
    $pane->uuid = '23b0e242-8379-48db-ae50-90d772064fc5';
    $display->content['new-23b0e242-8379-48db-ae50-90d772064fc5'] = $pane;
    $display->panels['right'][3] = 'new-23b0e242-8379-48db-ae50-90d772064fc5';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = 'new-23b0e242-8379-48db-ae50-90d772064fc5';
  $handler->conf['display'] = $display;
  $export['term_view__work_stream'] = $handler;

  return $export;
}

/**
 * Implements hook_default_page_manager_pages().
 */
function energy_council_work_streams_default_page_manager_pages() {
  $page = new stdClass();
  $page->disabled = FALSE; /* Edit this to true to make a default page disabled initially */
  $page->api_version = 1;
  $page->name = 'work_streams';
  $page->task = 'page';
  $page->admin_title = 'Work Streams';
  $page->admin_description = 'Displays the council meetings using a View.';
  $page->path = 'work-streams';
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
  $handler->name = 'page_work_streams__panel_context_f8aa676a-7cb5-40f4-98ee-3e4c1e96e846';
  $handler->task = 'page';
  $handler->subtask = 'work_streams';
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
      'content' => NULL,
      'left' => NULL,
      'right' => NULL,
      'bottom' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = 'Work Streams';
  $display->uuid = 'b100f4f0-c396-45b2-a7c3-0dae2a3d6b24';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-f8b9cf36-d310-413d-946a-36cb985a251c';
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
    $pane->uuid = 'f8b9cf36-d310-413d-946a-36cb985a251c';
    $display->content['new-f8b9cf36-d310-413d-946a-36cb985a251c'] = $pane;
    $display->panels['left'][0] = 'new-f8b9cf36-d310-413d-946a-36cb985a251c';
    $pane = new stdClass();
    $pane->pid = 'new-3f4a8cc2-5b0c-48c7-9450-e275aa9a6004';
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
    $pane->uuid = '3f4a8cc2-5b0c-48c7-9450-e275aa9a6004';
    $display->content['new-3f4a8cc2-5b0c-48c7-9450-e275aa9a6004'] = $pane;
    $display->panels['right'][0] = 'new-3f4a8cc2-5b0c-48c7-9450-e275aa9a6004';
    $pane = new stdClass();
    $pane->pid = 'new-26662591-0b1a-4cd6-8fe3-7cc93d0b6a0e';
    $pane->panel = 'right';
    $pane->type = 'page_title';
    $pane->subtype = 'page_title';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'markup' => 'h1',
      'class' => '',
      'id' => '',
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
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = '26662591-0b1a-4cd6-8fe3-7cc93d0b6a0e';
    $display->content['new-26662591-0b1a-4cd6-8fe3-7cc93d0b6a0e'] = $pane;
    $display->panels['right'][1] = 'new-26662591-0b1a-4cd6-8fe3-7cc93d0b6a0e';
    $pane = new stdClass();
    $pane->pid = 'new-eb534fcf-efd6-498c-9732-a733cacb108f';
    $pane->panel = 'right';
    $pane->type = 'views_panes';
    $pane->subtype = 'work_streams-work_streams_full';
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
    $pane->uuid = 'eb534fcf-efd6-498c-9732-a733cacb108f';
    $display->content['new-eb534fcf-efd6-498c-9732-a733cacb108f'] = $pane;
    $display->panels['right'][2] = 'new-eb534fcf-efd6-498c-9732-a733cacb108f';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $page->default_handlers[$handler->name] = $handler;
  $pages['work_streams'] = $page;

  return $pages;

}
