<?php
/**
 * @file
 * energy_council_news_list.pages_default.inc
 */

/**
 * Implements hook_default_page_manager_pages().
 */
function energy_council_news_list_default_page_manager_pages() {
  $page = new stdClass();
  $page->disabled = FALSE; /* Edit this to true to make a default page disabled initially */
  $page->api_version = 1;
  $page->name = 'all_news_items';
  $page->task = 'page';
  $page->admin_title = 'All news items';
  $page->admin_description = 'Displays the council meetings using a View.';
  $page->path = 'news';
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
  $handler->name = 'page_all_news_items__panel_context_a6612c34-bea5-4fa0-a87a-d451c4a81c4e';
  $handler->task = 'page';
  $handler->subtask = 'all_news_items';
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
  $display->title = 'News';
  $display->uuid = 'b100f4f0-c396-45b2-a7c3-0dae2a3d6b24';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-54d31213-0885-466f-bd75-342a9727c26b';
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
    $pane->uuid = '54d31213-0885-466f-bd75-342a9727c26b';
    $display->content['new-54d31213-0885-466f-bd75-342a9727c26b'] = $pane;
    $display->panels['left'][0] = 'new-54d31213-0885-466f-bd75-342a9727c26b';
    $pane = new stdClass();
    $pane->pid = 'new-d36dc070-ac01-4b46-a08f-d953a57d0a8b';
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
    $pane->uuid = 'd36dc070-ac01-4b46-a08f-d953a57d0a8b';
    $display->content['new-d36dc070-ac01-4b46-a08f-d953a57d0a8b'] = $pane;
    $display->panels['right'][0] = 'new-d36dc070-ac01-4b46-a08f-d953a57d0a8b';
    $pane = new stdClass();
    $pane->pid = 'new-effb3798-30ee-40fa-a8ba-22004e1ad947';
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
    $pane->uuid = 'effb3798-30ee-40fa-a8ba-22004e1ad947';
    $display->content['new-effb3798-30ee-40fa-a8ba-22004e1ad947'] = $pane;
    $display->panels['right'][1] = 'new-effb3798-30ee-40fa-a8ba-22004e1ad947';
    $pane = new stdClass();
    $pane->pid = 'new-3e01b17e-a7c9-45c3-962b-7514cec802b4';
    $pane->panel = 'right';
    $pane->type = 'views_panes';
    $pane->subtype = 'news-news_list_full';
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
      'css_id' => 'news-list-full',
      'css_class' => 'landing-page-view',
    );
    $pane->extras = array();
    $pane->position = 2;
    $pane->locks = array();
    $pane->uuid = '3e01b17e-a7c9-45c3-962b-7514cec802b4';
    $display->content['new-3e01b17e-a7c9-45c3-962b-7514cec802b4'] = $pane;
    $display->panels['right'][2] = 'new-3e01b17e-a7c9-45c3-962b-7514cec802b4';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $page->default_handlers[$handler->name] = $handler;
  $pages['all_news_items'] = $page;

  return $pages;

}
