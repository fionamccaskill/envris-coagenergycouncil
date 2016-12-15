<?php
/**
 * @file
 * energy_council_search.pages_default.inc
 */

/**
 * Implements hook_default_page_manager_handlers().
 */
function energy_council_search_default_page_manager_handlers() {
  $export = array();

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'search_apachesolr_search__site_search';
  $handler->task = 'search';
  $handler->subtask = 'apachesolr_search';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'Site search',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'name' => 'site_search',
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
  $display->title = 'Search result for "%query:html_safe"';
  $display->uuid = '815b48a4-242e-4ece-949d-33c4c832eb9e';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-8e1eb310-d380-4cd5-abbf-e170d7f22a1c';
    $pane->panel = 'left';
    $pane->type = 'block';
    $pane->subtype = 'facetapi-YdDbjnk2RBNprs7zE0nyxz1qLyN16Ak0';
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
    $pane->uuid = '8e1eb310-d380-4cd5-abbf-e170d7f22a1c';
    $display->content['new-8e1eb310-d380-4cd5-abbf-e170d7f22a1c'] = $pane;
    $display->panels['left'][0] = 'new-8e1eb310-d380-4cd5-abbf-e170d7f22a1c';
    $pane = new stdClass();
    $pane->pid = 'new-f91ecca0-5fa2-44b2-84c9-bd7cd9726cd9';
    $pane->panel = 'right';
    $pane->type = 'apachesolr_form';
    $pane->subtype = 'apachesolr_form';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'path_type' => 'same',
      'path' => '',
      'override_prompt' => 1,
      'prompt' => 'Search our site',
      'show_keys' => 1,
      'override_title' => 0,
      'override_title_text' => '',
      'override_title_heading' => 'h2',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => 'site-search',
      'css_class' => '',
    );
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = 'f91ecca0-5fa2-44b2-84c9-bd7cd9726cd9';
    $display->content['new-f91ecca0-5fa2-44b2-84c9-bd7cd9726cd9'] = $pane;
    $display->panels['right'][0] = 'new-f91ecca0-5fa2-44b2-84c9-bd7cd9726cd9';
    $pane = new stdClass();
    $pane->pid = 'new-5c70b304-2f18-424b-924d-76338e95f6b8';
    $pane->panel = 'right';
    $pane->type = 'apachesolr_spellchecker';
    $pane->subtype = 'apachesolr_spellchecker';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'title_override' => FALSE,
      'title_override_text' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => 'site-spelling',
      'css_class' => '',
    );
    $pane->extras = array();
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = '5c70b304-2f18-424b-924d-76338e95f6b8';
    $display->content['new-5c70b304-2f18-424b-924d-76338e95f6b8'] = $pane;
    $display->panels['right'][1] = 'new-5c70b304-2f18-424b-924d-76338e95f6b8';
    $pane = new stdClass();
    $pane->pid = 'new-dadd9d9e-0344-4007-b725-ec2bccdad43a';
    $pane->panel = 'right';
    $pane->type = 'apachesolr_info';
    $pane->subtype = 'apachesolr_info';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'title_override' => FALSE,
      'title_override_text' => '',
      'override_title' => 0,
      'override_title_text' => '',
      'override_title_heading' => 'h2',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => 'site-information',
      'css_class' => '',
    );
    $pane->extras = array();
    $pane->position = 2;
    $pane->locks = array();
    $pane->uuid = 'dadd9d9e-0344-4007-b725-ec2bccdad43a';
    $display->content['new-dadd9d9e-0344-4007-b725-ec2bccdad43a'] = $pane;
    $display->panels['right'][2] = 'new-dadd9d9e-0344-4007-b725-ec2bccdad43a';
    $pane = new stdClass();
    $pane->pid = 'new-bf8a879d-990a-4418-8c5f-a1b2bb534939';
    $pane->panel = 'right';
    $pane->type = 'apachesolr_result';
    $pane->subtype = 'apachesolr_result';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'keys_action' => 'none',
      'keys' => '',
      'keys_required' => 1,
      'filters_action' => 'none',
      'filters' => '',
      'rows' => '10',
      'env_id' => 'solr',
      'sort_action' => 'none',
      'sort' => '',
      'breadcrumb' => 1,
      'title_override' => 0,
      'title_override_text' => '',
      'empty_override' => 0,
      'empty_override_title' => '',
      'empty_override_text' => array(
        'value' => '',
        'format' => 'plain_text',
      ),
      'empty_override_format' => 'plain_text',
      'log' => 0,
      'substitute' => 0,
      'context' => 'argument_string_1',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => 'site-results',
      'css_class' => '',
    );
    $pane->extras = array();
    $pane->position = 3;
    $pane->locks = array();
    $pane->uuid = 'bf8a879d-990a-4418-8c5f-a1b2bb534939';
    $display->content['new-bf8a879d-990a-4418-8c5f-a1b2bb534939'] = $pane;
    $display->panels['right'][3] = 'new-bf8a879d-990a-4418-8c5f-a1b2bb534939';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = 'new-8e1eb310-d380-4cd5-abbf-e170d7f22a1c';
  $handler->conf['display'] = $display;
  $export['search_apachesolr_search__site_search'] = $handler;

  return $export;
}

/**
 * Implements hook_default_page_manager_pages().
 */
function energy_council_search_default_page_manager_pages() {
  $page = new stdClass();
  $page->disabled = FALSE; /* Edit this to true to make a default page disabled initially */
  $page->api_version = 1;
  $page->name = 'publications_search';
  $page->task = 'page';
  $page->admin_title = 'Publications Search';
  $page->admin_description = '';
  $page->path = 'search/publications/!query';
  $page->access = array();
  $page->menu = array();
  $page->arguments = array(
    'query' => array(
      'id' => 1,
      'identifier' => 'Query',
      'name' => 'string',
      'settings' => array(
        'use_tail' => 0,
      ),
    ),
  );
  $page->conf = array(
    'admin_paths' => FALSE,
  );
  $page->default_handlers = array();
  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'page_publications_search__panel_context_1c151f65-41d5-49a5-be06-ba86d64a6a01';
  $handler->task = 'page';
  $handler->subtask = 'publications_search';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'Search: Publications',
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
  $display->title = 'Search result for "%query:html_safe"';
  $display->uuid = 'e8a0ba3e-6fdd-49e7-abfd-76a08a0eda6c';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-8be1d5f8-315b-4850-99aa-bd679c893b60';
    $pane->panel = 'left';
    $pane->type = 'block';
    $pane->subtype = 'facetapi-YdDbjnk2RBNprs7zE0nyxz1qLyN16Ak0';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'override_title' => 1,
      'override_title_text' => '%title',
      'override_title_heading' => 'h3',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '8be1d5f8-315b-4850-99aa-bd679c893b60';
    $display->content['new-8be1d5f8-315b-4850-99aa-bd679c893b60'] = $pane;
    $display->panels['left'][0] = 'new-8be1d5f8-315b-4850-99aa-bd679c893b60';
    $pane = new stdClass();
    $pane->pid = 'new-a7009905-393d-43f5-a5ba-f990a5a9ff5b';
    $pane->panel = 'left';
    $pane->type = 'block';
    $pane->subtype = 'facetapi-1vx93wKyU7HoAzs6sa0PMm14kMgfBQ1d';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'override_title' => 1,
      'override_title_text' => '%title',
      'override_title_heading' => 'h3',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = 'a7009905-393d-43f5-a5ba-f990a5a9ff5b';
    $display->content['new-a7009905-393d-43f5-a5ba-f990a5a9ff5b'] = $pane;
    $display->panels['left'][1] = 'new-a7009905-393d-43f5-a5ba-f990a5a9ff5b';
    $pane = new stdClass();
    $pane->pid = 'new-ae6d5428-cd00-4a0c-a2ff-e45c4dd7ab49';
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
    $pane->uuid = 'ae6d5428-cd00-4a0c-a2ff-e45c4dd7ab49';
    $display->content['new-ae6d5428-cd00-4a0c-a2ff-e45c4dd7ab49'] = $pane;
    $display->panels['right'][0] = 'new-ae6d5428-cd00-4a0c-a2ff-e45c4dd7ab49';
    $pane = new stdClass();
    $pane->pid = 'new-04d7e2b1-9b02-47b9-a196-59b9e4437760';
    $pane->panel = 'right';
    $pane->type = 'block';
    $pane->subtype = 'custom_search_blocks-2';
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
      'css_id' => 'publications-search',
      'css_class' => '',
    );
    $pane->extras = array();
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = '04d7e2b1-9b02-47b9-a196-59b9e4437760';
    $display->content['new-04d7e2b1-9b02-47b9-a196-59b9e4437760'] = $pane;
    $display->panels['right'][1] = 'new-04d7e2b1-9b02-47b9-a196-59b9e4437760';
    $pane = new stdClass();
    $pane->pid = 'new-d28b7a61-8155-4f62-b3fc-da015e3ba211';
    $pane->panel = 'right';
    $pane->type = 'apachesolr_info';
    $pane->subtype = 'apachesolr_info';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'title_override' => FALSE,
      'title_override_text' => '',
      'override_title' => 0,
      'override_title_text' => '',
      'override_title_heading' => 'h2',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => 'search-information',
      'css_class' => '',
    );
    $pane->extras = array();
    $pane->position = 2;
    $pane->locks = array();
    $pane->uuid = 'd28b7a61-8155-4f62-b3fc-da015e3ba211';
    $display->content['new-d28b7a61-8155-4f62-b3fc-da015e3ba211'] = $pane;
    $display->panels['right'][2] = 'new-d28b7a61-8155-4f62-b3fc-da015e3ba211';
    $pane = new stdClass();
    $pane->pid = 'new-2b5876b5-7b35-4bf4-b1fd-0400463289b1';
    $pane->panel = 'right';
    $pane->type = 'apachesolr_result';
    $pane->subtype = 'apachesolr_result';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'keys_action' => 'none',
      'keys' => '',
      'keys_required' => 0,
      'filters_action' => 'override',
      'filters' => 'bundle:"document" OR bundle:"publications"',
      'rows' => '10',
      'env_id' => 'solr',
      'sort_action' => 'none',
      'sort' => '',
      'breadcrumb' => 1,
      'title_override' => 0,
      'title_override_text' => '',
      'empty_override' => 1,
      'empty_override_title' => 'No results found!',
      'empty_override_text' => array(
        'value' => '',
        'format' => 'plain_text',
      ),
      'empty_override_format' => 'plain_text',
      'log' => 0,
      'substitute' => 0,
      'context' => 'argument_string_1',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => 'search-results',
      'css_class' => '',
    );
    $pane->extras = array();
    $pane->position = 3;
    $pane->locks = array();
    $pane->uuid = '2b5876b5-7b35-4bf4-b1fd-0400463289b1';
    $display->content['new-2b5876b5-7b35-4bf4-b1fd-0400463289b1'] = $pane;
    $display->panels['right'][3] = 'new-2b5876b5-7b35-4bf4-b1fd-0400463289b1';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = 'new-8be1d5f8-315b-4850-99aa-bd679c893b60';
  $handler->conf['display'] = $display;
  $page->default_handlers[$handler->name] = $handler;
  $pages['publications_search'] = $page;

  $page = new stdClass();
  $page->disabled = FALSE; /* Edit this to true to make a default page disabled initially */
  $page->api_version = 1;
  $page->name = 'site_search';
  $page->task = 'page';
  $page->admin_title = 'Site search';
  $page->admin_description = '';
  $page->path = 'search/all/!keyword';
  $page->access = array();
  $page->menu = array();
  $page->arguments = array(
    'keyword' => array(
      'id' => 1,
      'identifier' => 'Keyword',
      'name' => 'string',
      'settings' => array(
        'use_tail' => 0,
      ),
    ),
  );
  $page->conf = array(
    'admin_paths' => FALSE,
  );
  $page->default_handlers = array();
  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'page_site_search__panel_context_8cc70a54-a8bc-495b-987f-c778cc3af280';
  $handler->task = 'page';
  $handler->subtask = 'site_search';
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
  $display->title = 'Search result for "%keyword:html_safe"';
  $display->uuid = 'a4ea79c7-dd45-4361-b91c-e4c2faa0bac7';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-c29cf097-d0bd-4790-b3ad-7932e2bdbc0f';
    $pane->panel = 'left';
    $pane->type = 'block';
    $pane->subtype = 'facetapi-GiIy4zr9Gu0ZSa0bumw1Y9qIIpIDf1wu';
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
    $pane->uuid = 'c29cf097-d0bd-4790-b3ad-7932e2bdbc0f';
    $display->content['new-c29cf097-d0bd-4790-b3ad-7932e2bdbc0f'] = $pane;
    $display->panels['left'][0] = 'new-c29cf097-d0bd-4790-b3ad-7932e2bdbc0f';
    $pane = new stdClass();
    $pane->pid = 'new-036b7795-c0d7-4639-a284-ac19719bbf59';
    $pane->panel = 'left';
    $pane->type = 'block';
    $pane->subtype = 'facetapi-i0dkYjRL56b0jy5GNA8IXXbGk1pT0Ms1';
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
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = '036b7795-c0d7-4639-a284-ac19719bbf59';
    $display->content['new-036b7795-c0d7-4639-a284-ac19719bbf59'] = $pane;
    $display->panels['left'][1] = 'new-036b7795-c0d7-4639-a284-ac19719bbf59';
    $pane = new stdClass();
    $pane->pid = 'new-304c70dd-f3f2-4929-b0f6-4ec2e76369da';
    $pane->panel = 'left';
    $pane->type = 'block';
    $pane->subtype = 'facetapi-Iki0WcR148qZFw325tteAwFXLCsn2BCf';
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
    $pane->position = 2;
    $pane->locks = array();
    $pane->uuid = '304c70dd-f3f2-4929-b0f6-4ec2e76369da';
    $display->content['new-304c70dd-f3f2-4929-b0f6-4ec2e76369da'] = $pane;
    $display->panels['left'][2] = 'new-304c70dd-f3f2-4929-b0f6-4ec2e76369da';
    $pane = new stdClass();
    $pane->pid = 'new-6c41a7aa-c824-436c-92ab-8cfa9c068167';
    $pane->panel = 'left';
    $pane->type = 'block';
    $pane->subtype = 'facetapi-1vx93wKyU7HoAzs6sa0PMm14kMgfBQ1d';
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
    $pane->position = 3;
    $pane->locks = array();
    $pane->uuid = '6c41a7aa-c824-436c-92ab-8cfa9c068167';
    $display->content['new-6c41a7aa-c824-436c-92ab-8cfa9c068167'] = $pane;
    $display->panels['left'][3] = 'new-6c41a7aa-c824-436c-92ab-8cfa9c068167';
    $pane = new stdClass();
    $pane->pid = 'new-07e8d2fc-6a20-4211-bce4-21660bc98f76';
    $pane->panel = 'left';
    $pane->type = 'block';
    $pane->subtype = 'facetapi-YdDbjnk2RBNprs7zE0nyxz1qLyN16Ak0';
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
    $pane->position = 4;
    $pane->locks = array();
    $pane->uuid = '07e8d2fc-6a20-4211-bce4-21660bc98f76';
    $display->content['new-07e8d2fc-6a20-4211-bce4-21660bc98f76'] = $pane;
    $display->panels['left'][4] = 'new-07e8d2fc-6a20-4211-bce4-21660bc98f76';
    $pane = new stdClass();
    $pane->pid = 'new-6c154804-fedb-46b8-86d6-102873f14592';
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
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '6c154804-fedb-46b8-86d6-102873f14592';
    $display->content['new-6c154804-fedb-46b8-86d6-102873f14592'] = $pane;
    $display->panels['right'][0] = 'new-6c154804-fedb-46b8-86d6-102873f14592';
    $pane = new stdClass();
    $pane->pid = 'new-224ab8a6-96a9-4f30-86da-6c3017e1c041';
    $pane->panel = 'right';
    $pane->type = 'block';
    $pane->subtype = 'custom_search_blocks-1';
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
      'css_id' => 'site-search',
      'css_class' => '',
    );
    $pane->extras = array();
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = '224ab8a6-96a9-4f30-86da-6c3017e1c041';
    $display->content['new-224ab8a6-96a9-4f30-86da-6c3017e1c041'] = $pane;
    $display->panels['right'][1] = 'new-224ab8a6-96a9-4f30-86da-6c3017e1c041';
    $pane = new stdClass();
    $pane->pid = 'new-8f842736-17da-496f-aa17-14741602d1e3';
    $pane->panel = 'right';
    $pane->type = 'apachesolr_spellchecker';
    $pane->subtype = 'apachesolr_spellchecker';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'title_override' => FALSE,
      'title_override_text' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => 'site-spellcheck',
      'css_class' => '',
    );
    $pane->extras = array();
    $pane->position = 2;
    $pane->locks = array();
    $pane->uuid = '8f842736-17da-496f-aa17-14741602d1e3';
    $display->content['new-8f842736-17da-496f-aa17-14741602d1e3'] = $pane;
    $display->panels['right'][2] = 'new-8f842736-17da-496f-aa17-14741602d1e3';
    $pane = new stdClass();
    $pane->pid = 'new-75f77a94-e412-478e-905b-8ce1ded429bd';
    $pane->panel = 'right';
    $pane->type = 'apachesolr_info';
    $pane->subtype = 'apachesolr_info';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'title_override' => FALSE,
      'title_override_text' => '',
      'override_title' => 0,
      'override_title_text' => '',
      'override_title_heading' => 'h2',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => 'site-information',
      'css_class' => '',
    );
    $pane->extras = array();
    $pane->position = 3;
    $pane->locks = array();
    $pane->uuid = '75f77a94-e412-478e-905b-8ce1ded429bd';
    $display->content['new-75f77a94-e412-478e-905b-8ce1ded429bd'] = $pane;
    $display->panels['right'][3] = 'new-75f77a94-e412-478e-905b-8ce1ded429bd';
    $pane = new stdClass();
    $pane->pid = 'new-c28a270e-c48e-4a51-ada2-14d0a48c91d8';
    $pane->panel = 'right';
    $pane->type = 'apachesolr_result';
    $pane->subtype = 'apachesolr_result';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'keys_action' => 'none',
      'keys' => '',
      'keys_required' => 0,
      'filters_action' => 'none',
      'filters' => '',
      'rows' => '10',
      'env_id' => 'solr',
      'sort_action' => 'none',
      'sort' => '',
      'breadcrumb' => 1,
      'title_override' => 0,
      'title_override_text' => '',
      'empty_override' => 1,
      'empty_override_title' => 'No results found!',
      'empty_override_text' => array(
        'value' => '',
        'format' => 'plain_text',
      ),
      'empty_override_format' => 'plain_text',
      'log' => 0,
      'substitute' => 0,
      'context' => 'argument_string_1',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => 'site-results',
      'css_class' => '',
    );
    $pane->extras = array();
    $pane->position = 4;
    $pane->locks = array();
    $pane->uuid = 'c28a270e-c48e-4a51-ada2-14d0a48c91d8';
    $display->content['new-c28a270e-c48e-4a51-ada2-14d0a48c91d8'] = $pane;
    $display->panels['right'][4] = 'new-c28a270e-c48e-4a51-ada2-14d0a48c91d8';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = 'new-07e8d2fc-6a20-4211-bce4-21660bc98f76';
  $handler->conf['display'] = $display;
  $page->default_handlers[$handler->name] = $handler;
  $pages['site_search'] = $page;

  return $pages;

}
