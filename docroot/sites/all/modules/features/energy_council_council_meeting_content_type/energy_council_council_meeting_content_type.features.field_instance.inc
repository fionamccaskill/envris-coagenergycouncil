<?php
/**
 * @file
 * energy_council_council_meeting_content_type.features.field_instance.inc
 */

/**
 * Implements hook_field_default_field_instances().
 */
function energy_council_council_meeting_content_type_field_default_field_instances() {
  $field_instances = array();

  // Exported field_instance: 'node-council_meetings-field_attachments'
  $field_instances['node-council_meetings-field_attachments'] = array(
    'bundle' => 'council_meetings',
    'deleted' => 0,
    'description' => 'Add attachments here, such as communiques or minutes. You can add different versions of each document.',
    'display' => array(
      'default' => array(
        'label' => 'above',
        'module' => 'file',
        'settings' => array(),
        'type' => 'file_default',
        'weight' => 1,
      ),
      'teaser' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 0,
      ),
    ),
    'ds_extras_field_template' => 'theme_ds_field_reset',
    'entity_type' => 'node',
    'field_name' => 'field_attachments',
    'label' => 'Attachments',
    'required' => 1,
    'settings' => array(
      'description_field' => 1,
      'file_directory' => 'council-meetings',
      'file_extensions' => 'doc docx pdf',
      'max_filesize' => '',
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'file',
      'settings' => array(
        'filefield_sources' => array(
          'filefield_sources' => array(
            'attach' => 0,
            'clipboard' => 0,
            'elfinder' => 'elfinder',
            'reference' => 0,
            'remote' => 0,
            'upload' => 0,
          ),
          'source_attach' => array(
            'absolute' => 0,
            'attach_mode' => 'move',
            'path' => 'file_attach',
          ),
          'source_imce' => array(
            'imce_mode' => 0,
          ),
          'source_reference' => array(
            'autocomplete' => 0,
          ),
        ),
        'progress_indicator' => 'bar',
      ),
      'type' => 'file_generic',
      'weight' => 3,
    ),
  );

  // Exported field_instance: 'node-council_meetings-field_date'
  $field_instances['node-council_meetings-field_date'] = array(
    'bundle' => 'council_meetings',
    'deleted' => 0,
    'description' => 'Add a date for the meeting. This will sort the meetings, after \'Meeting Type\'.',
    'display' => array(
      'default' => array(
        'label' => 'above',
        'module' => 'date',
        'settings' => array(
          'format_type' => 'long',
          'fromto' => 'both',
          'multiple_from' => '',
          'multiple_number' => '',
          'multiple_to' => '',
        ),
        'type' => 'date_default',
        'weight' => 0,
      ),
      'teaser' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 0,
      ),
    ),
    'ds_extras_field_template' => 'theme_ds_field_reset',
    'entity_type' => 'node',
    'field_name' => 'field_date',
    'label' => 'Meeting Date',
    'required' => 1,
    'settings' => array(
      'default_value' => 'now',
      'default_value2' => 'same',
      'default_value_code' => '',
      'default_value_code2' => '',
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'date',
      'settings' => array(
        'increment' => 15,
        'input_format' => 'd/m/Y - H:i:s',
        'input_format_custom' => '',
        'label_position' => 'above',
        'text_parts' => array(),
        'year_range' => '-5:+3',
      ),
      'type' => 'date_popup',
      'weight' => 1,
    ),
  );

  // Exported field_instance: 'node-council_meetings-field_meeting_type'
  $field_instances['node-council_meetings-field_meeting_type'] = array(
    'bundle' => 'council_meetings',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => 'Select which type of meeting this is. This will determine how it is sorted.',
    'display' => array(
      'default' => array(
        'label' => 'above',
        'module' => 'taxonomy',
        'settings' => array(),
        'type' => 'taxonomy_term_reference_link',
        'weight' => 2,
      ),
      'teaser' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 0,
      ),
    ),
    'ds_extras_field_template' => '',
    'entity_type' => 'node',
    'field_name' => 'field_meeting_type',
    'label' => 'Meeting type',
    'required' => 1,
    'settings' => array(
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'options',
      'settings' => array(),
      'type' => 'options_select',
      'weight' => 2,
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Add a date for the meeting. This will sort the meetings, after \'Meeting Type\'.');
  t('Add attachments here, such as communiques or minutes. You can add different versions of each document.');
  t('Attachments');
  t('Meeting Date');
  t('Meeting type');
  t('Select which type of meeting this is. This will determine how it is sorted.');

  return $field_instances;
}
