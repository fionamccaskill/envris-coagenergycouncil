<?php
/**
 * @file
 * energy_council_home_page.pages_default.inc
 */

/**
 * Implements hook_default_page_manager_pages().
 */
function energy_council_home_page_default_page_manager_pages() {
  $page = new stdClass();
  $page->disabled = FALSE; /* Edit this to true to make a default page disabled initially */
  $page->api_version = 1;
  $page->name = 'home';
  $page->task = 'page';
  $page->admin_title = 'Home';
  $page->admin_description = 'Home page layout for the Energy Council website.';
  $page->path = 'home';
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
  $handler->name = 'page_home__panel_context_eb986aa1-0cb5-4f18-96fb-93a4f79171c6';
  $handler->task = 'page';
  $handler->subtask = 'home';
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
    'left' => array(
      'style' => 'naked',
    ),
    'right' => array(
      'style' => 'naked',
    ),
    'bottom' => array(
      'style' => 'naked',
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = '6ab3451f-65a8-4b08-9372-1ee0e5fe5c19';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-145add2a-6b32-468d-aad3-7c88389baaa4';
    $pane->panel = 'left';
    $pane->type = 'views_panes';
    $pane->subtype = 'news_slider-home_page_feature';
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
      'css_id' => 'feature',
      'css_class' => '',
    );
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '145add2a-6b32-468d-aad3-7c88389baaa4';
    $display->content['new-145add2a-6b32-468d-aad3-7c88389baaa4'] = $pane;
    $display->panels['left'][0] = 'new-145add2a-6b32-468d-aad3-7c88389baaa4';
    $pane = new stdClass();
    $pane->pid = 'new-ab471c79-3b8d-460e-80f4-fa3ddb4455c2';
    $pane->panel = 'left';
    $pane->type = 'views_panes';
    $pane->subtype = 'news-home_page_news_list';
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
      'css_id' => 'news-list',
      'css_class' => '',
    );
    $pane->extras = array();
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = 'ab471c79-3b8d-460e-80f4-fa3ddb4455c2';
    $display->content['new-ab471c79-3b8d-460e-80f4-fa3ddb4455c2'] = $pane;
    $display->panels['left'][1] = 'new-ab471c79-3b8d-460e-80f4-fa3ddb4455c2';
    $pane = new stdClass();
    $pane->pid = 'new-6dbc443e-39df-4a1b-b6ec-569761cd4737';
    $pane->panel = 'right';
    $pane->type = 'block';
    $pane->subtype = 'custom_search_blocks-2';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'override_title' => 1,
      'override_title_text' => 'Publications quick search',
      'override_title_heading' => 'h3',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => 'publications-search',
      'css_class' => '',
    );
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '6dbc443e-39df-4a1b-b6ec-569761cd4737';
    $display->content['new-6dbc443e-39df-4a1b-b6ec-569761cd4737'] = $pane;
    $display->panels['right'][0] = 'new-6dbc443e-39df-4a1b-b6ec-569761cd4737';
    $pane = new stdClass();
    $pane->pid = 'new-a0522c0d-4c65-439e-b64f-c121031bd72e';
    $pane->panel = 'right';
    $pane->type = 'block';
    $pane->subtype = 'energy_council_mailchimp-energy_council_subscribe';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'override_title' => 1,
      'override_title_text' => 'Energy Council Mailing List',
      'override_title_heading' => 'h2',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => 'subscribe',
      'css_class' => '',
    );
    $pane->extras = array();
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = 'a0522c0d-4c65-439e-b64f-c121031bd72e';
    $display->content['new-a0522c0d-4c65-439e-b64f-c121031bd72e'] = $pane;
    $display->panels['right'][1] = 'new-a0522c0d-4c65-439e-b64f-c121031bd72e';
    $pane = new stdClass();
    $pane->pid = 'new-56ffca8d-5372-4b3a-90a0-f453b2a828f3';
    $pane->panel = 'right';
    $pane->type = 'views';
    $pane->subtype = 'calendar';
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
      'display' => 'block_2',
      'override_title' => 0,
      'override_title_text' => '',
      'override_title_heading' => 'h2',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
      'style' => 'default',
    );
    $pane->css = array(
      'css_id' => 'upcoming-events',
      'css_class' => '',
    );
    $pane->extras = array();
    $pane->position = 2;
    $pane->locks = array();
    $pane->uuid = '56ffca8d-5372-4b3a-90a0-f453b2a828f3';
    $display->content['new-56ffca8d-5372-4b3a-90a0-f453b2a828f3'] = $pane;
    $display->panels['right'][2] = 'new-56ffca8d-5372-4b3a-90a0-f453b2a828f3';
    $pane = new stdClass();
    $pane->pid = 'new-3e07c4aa-6dcf-4703-9a81-8552956b87a8';
    $pane->panel = 'right';
    $pane->type = 'views_panes';
    $pane->subtype = 'consultations-consultations_list';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'override_title' => 1,
      'override_title_text' => 'Consultations',
      'override_title_heading' => 'h3',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => 'consultations',
      'css_class' => '',
    );
    $pane->extras = array();
    $pane->position = 3;
    $pane->locks = array();
    $pane->uuid = '3e07c4aa-6dcf-4703-9a81-8552956b87a8';
    $display->content['new-3e07c4aa-6dcf-4703-9a81-8552956b87a8'] = $pane;
    $display->panels['right'][3] = 'new-3e07c4aa-6dcf-4703-9a81-8552956b87a8';
    $pane = new stdClass();
    $pane->pid = 'new-bd1e1bf7-f1dc-4e21-af5a-f96a2e85b23c';
    $pane->panel = 'right';
    $pane->type = 'views_panes';
    $pane->subtype = 'work_streams-work_streams_home';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array();
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => 'work-streams',
      'css_class' => '',
    );
    $pane->extras = array();
    $pane->position = 4;
    $pane->locks = array();
    $pane->uuid = 'bd1e1bf7-f1dc-4e21-af5a-f96a2e85b23c';
    $display->content['new-bd1e1bf7-f1dc-4e21-af5a-f96a2e85b23c'] = $pane;
    $display->panels['right'][4] = 'new-bd1e1bf7-f1dc-4e21-af5a-f96a2e85b23c';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $page->default_handlers[$handler->name] = $handler;
  $pages['home'] = $page;

  return $pages;

}
