<?php
/**
 * Implements hook_views_data().
 */
function views_file_extension_views_data_alter(&$data) {
  $data['file_managed']['extension']['filter']['handler'] = 'views_handler_filter_file_extension';
}
