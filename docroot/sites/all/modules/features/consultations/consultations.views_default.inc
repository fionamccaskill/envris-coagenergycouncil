<?php
/**
 * @file
 * consultations.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function consultations_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'consultations';
  $view->description = 'Displays consultations on the home page.';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Consultations';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Consultations';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['style_plugin'] = 'list';
  $handler->display->display_options['style_options']['default_row_class'] = FALSE;
  $handler->display->display_options['style_options']['row_class_special'] = FALSE;
  $handler->display->display_options['style_options']['wrapper_class'] = '';
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['row_options']['hide_empty'] = TRUE;
  $handler->display->display_options['row_options']['default_field_elements'] = FALSE;
  /* Header: Global: Text area */
  $handler->display->display_options['header']['area']['id'] = 'area';
  $handler->display->display_options['header']['area']['table'] = 'views';
  $handler->display->display_options['header']['area']['field'] = 'area';
  $handler->display->display_options['header']['area']['content'] = '<p>These consultations are hosted on <a href="http://consult.industry.gov.au" title="consult.industry.gov.au">consult.industry.gov.au</a> and may be of interest to you.</p><p>Select a consultation title to learn more about it.</p>';
  $handler->display->display_options['header']['area']['format'] = 'full_html';
  /* No results behavior: Global: Text area */
  $handler->display->display_options['empty']['area']['id'] = 'area';
  $handler->display->display_options['empty']['area']['table'] = 'views';
  $handler->display->display_options['empty']['area']['field'] = 'area';
  $handler->display->display_options['empty']['area']['empty'] = TRUE;
  $handler->display->display_options['empty']['area']['content'] = 'There are currently no consultations that may be of interest. Please visit <a href="http://consult.industry.gov.au" title="consult.industry.gov.au">consult.industry.gov.au</a> to view all of the Department of Industry\'s current consultations.';
  $handler->display->display_options['empty']['area']['format'] = 'filtered_html';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_type'] = '0';
  $handler->display->display_options['fields']['title']['element_label_type'] = '0';
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['title']['element_default_classes'] = FALSE;
  /* Sort criterion: Content: Consultation date - end date (field_start_date:value2) */
  $handler->display->display_options['sorts']['field_start_date_value2']['id'] = 'field_start_date_value2';
  $handler->display->display_options['sorts']['field_start_date_value2']['table'] = 'field_data_field_start_date';
  $handler->display->display_options['sorts']['field_start_date_value2']['field'] = 'field_start_date_value2';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'consultation' => 'consultation',
  );
  /* Filter criterion: Content: Consultation date - end date (field_start_date:value2) */
  $handler->display->display_options['filters']['field_start_date_value2']['id'] = 'field_start_date_value2';
  $handler->display->display_options['filters']['field_start_date_value2']['table'] = 'field_data_field_start_date';
  $handler->display->display_options['filters']['field_start_date_value2']['field'] = 'field_start_date_value2';
  $handler->display->display_options['filters']['field_start_date_value2']['operator'] = '>';
  $handler->display->display_options['filters']['field_start_date_value2']['form_type'] = 'date_text';
  $handler->display->display_options['filters']['field_start_date_value2']['default_date'] = 'now';

  /* Display: Home page list */
  $handler = $view->new_display('panel_pane', 'Home page list', 'consultations_list');
  $handler->display->display_options['defaults']['header'] = FALSE;
  /* Header: Global: Text area */
  $handler->display->display_options['header']['area']['id'] = 'area';
  $handler->display->display_options['header']['area']['table'] = 'views';
  $handler->display->display_options['header']['area']['field'] = 'area';
  $handler->display->display_options['header']['area']['content'] = '<p>These consultations are hosted on <a href="http://consult.industry.gov.au" title="consult.industry.gov.au">consult.industry.gov.au</a> and may be of interest to you. Select a consultation title to learn more about it.</p>';
  $handler->display->display_options['header']['area']['format'] = 'full_html';
  $handler->display->display_options['allow']['use_pager'] = 0;
  $handler->display->display_options['allow']['items_per_page'] = 0;
  $handler->display->display_options['allow']['offset'] = 0;
  $handler->display->display_options['allow']['link_to_view'] = 0;
  $handler->display->display_options['allow']['more_link'] = 0;
  $handler->display->display_options['allow']['path_override'] = 0;
  $handler->display->display_options['allow']['title_override'] = 'title_override';
  $handler->display->display_options['allow']['exposed_form'] = 0;
  $handler->display->display_options['allow']['fields_override'] = 0;

  /* Display: Full list */
  $handler = $view->new_display('panel_pane', 'Full list', 'panel_pane_1');
  $handler->display->display_options['display_description'] = 'Displays all consultations in a list.';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['default_row_class'] = FALSE;
  $handler->display->display_options['style_options']['row_class_special'] = FALSE;
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['row_options']['hide_empty'] = TRUE;
  $handler->display->display_options['row_options']['default_field_elements'] = FALSE;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['header'] = FALSE;
  /* Header: Global: Text area */
  $handler->display->display_options['header']['area']['id'] = 'area';
  $handler->display->display_options['header']['area']['table'] = 'views';
  $handler->display->display_options['header']['area']['field'] = 'area';
  $handler->display->display_options['header']['area']['content'] = '<p>These consultations are currently hosted on <a href="http://consult.industry.gov.au" title="consult.industry.gov.au">consult.industry.gov.au</a> and may be of interest to you.</p><p>Select a consultation title to learn more about it.</p>';
  $handler->display->display_options['header']['area']['format'] = 'full_html';
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_type'] = '0';
  $handler->display->display_options['fields']['title']['element_label_type'] = '0';
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['element_wrapper_type'] = 'h2';
  $handler->display->display_options['fields']['title']['element_default_classes'] = FALSE;
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['body']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['body']['type'] = 'text_summary_or_trimmed';
  $handler->display->display_options['fields']['body']['settings'] = array(
    'trim_length' => '200',
  );
  /* Field: Content: Council Priority Issue */
  $handler->display->display_options['fields']['field_council_priority_issue']['id'] = 'field_council_priority_issue';
  $handler->display->display_options['fields']['field_council_priority_issue']['table'] = 'field_data_field_council_priority_issue';
  $handler->display->display_options['fields']['field_council_priority_issue']['field'] = 'field_council_priority_issue';
  $handler->display->display_options['fields']['field_council_priority_issue']['label'] = '';
  $handler->display->display_options['fields']['field_council_priority_issue']['element_type'] = '0';
  $handler->display->display_options['fields']['field_council_priority_issue']['element_label_type'] = 'strong';
  $handler->display->display_options['fields']['field_council_priority_issue']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_council_priority_issue']['element_wrapper_type'] = 'p';
  $handler->display->display_options['fields']['field_council_priority_issue']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_council_priority_issue']['delta_offset'] = '0';
  /* Field: Broken/missing handler */
  $handler->display->display_options['fields']['field_work_stream']['id'] = 'field_work_stream';
  $handler->display->display_options['fields']['field_work_stream']['table'] = 'field_data_field_work_stream';
  $handler->display->display_options['fields']['field_work_stream']['field'] = 'field_work_stream';
  $handler->display->display_options['fields']['field_work_stream']['label'] = 'Work Stream';
  $handler->display->display_options['fields']['field_work_stream']['element_type'] = '0';
  $handler->display->display_options['fields']['field_work_stream']['element_label_type'] = 'strong';
  $handler->display->display_options['fields']['field_work_stream']['element_wrapper_type'] = 'p';
  $handler->display->display_options['fields']['field_work_stream']['element_default_classes'] = FALSE;
  /* Field: Content: Consultation date */
  $handler->display->display_options['fields']['field_start_date']['id'] = 'field_start_date';
  $handler->display->display_options['fields']['field_start_date']['table'] = 'field_data_field_start_date';
  $handler->display->display_options['fields']['field_start_date']['field'] = 'field_start_date';
  $handler->display->display_options['fields']['field_start_date']['element_type'] = '0';
  $handler->display->display_options['fields']['field_start_date']['element_label_type'] = 'strong';
  $handler->display->display_options['fields']['field_start_date']['element_wrapper_type'] = 'p';
  $handler->display->display_options['fields']['field_start_date']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_start_date']['settings'] = array(
    'format_type' => 'd_f_y',
    'fromto' => 'both',
    'multiple_number' => '',
    'multiple_from' => '',
    'multiple_to' => '',
  );
  $handler->display->display_options['allow']['use_pager'] = 0;
  $handler->display->display_options['allow']['items_per_page'] = 0;
  $handler->display->display_options['allow']['offset'] = 0;
  $handler->display->display_options['allow']['link_to_view'] = 0;
  $handler->display->display_options['allow']['more_link'] = 0;
  $handler->display->display_options['allow']['path_override'] = 0;
  $handler->display->display_options['allow']['title_override'] = 'title_override';
  $handler->display->display_options['allow']['exposed_form'] = 0;
  $handler->display->display_options['allow']['fields_override'] = 0;
  $export['consultations'] = $view;

  return $export;
}
