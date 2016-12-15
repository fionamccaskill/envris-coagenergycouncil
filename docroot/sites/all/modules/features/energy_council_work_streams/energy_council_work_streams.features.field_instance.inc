<?php
/**
 * @file
 * energy_council_work_streams.features.field_instance.inc
 */

/**
 * Implements hook_field_default_field_instances().
 */
function energy_council_work_streams_field_default_field_instances() {
  $field_instances = array();

  // Exported field_instance: 'node-work_stream-body'
  $field_instances['node-work_stream-body'] = array(
    'bundle' => 'work_stream',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => 'Add the contents of the work stream here. Ensure you use Heading 2 to break up sections. It is also wise to add a summary that can be used in search results and other content lists.',
    'display' => array(
      'default' => array(
        'label' => 'hidden',
        'module' => 'text',
        'settings' => array(),
        'type' => 'text_default',
        'weight' => 3,
      ),
      'search_result' => array(
        'label' => 'hidden',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 12,
      ),
      'teaser' => array(
        'label' => 'hidden',
        'module' => 'text',
        'settings' => array(
          'trim_length' => 600,
        ),
        'type' => 'text_summary_or_trimmed',
        'weight' => 1,
      ),
    ),
    'ds_extras_field_template' => '',
    'entity_type' => 'node',
    'field_name' => 'body',
    'label' => 'Body',
    'required' => 1,
    'settings' => array(
      'display_summary' => 1,
      'text_processing' => 1,
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'text',
      'settings' => array(
        'rows' => 20,
        'summary_rows' => 5,
      ),
      'type' => 'text_textarea_with_summary',
      'weight' => 3,
    ),
  );

  // Exported field_instance: 'node-work_stream-field_council_priority_issue'
  $field_instances['node-work_stream-field_council_priority_issue'] = array(
    'bundle' => 'work_stream',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => 'Select a Council Priority Issue for this Work Stream.',
    'display' => array(
      'default' => array(
        'label' => 'inline',
        'module' => 'ds',
        'settings' => array(
          'taxonomy_term_link' => 1,
          'taxonomy_term_separator' => ', ',
        ),
        'type' => 'ds_taxonomy_separator',
        'weight' => 2,
      ),
      'search_result' => array(
        'label' => 'inline',
        'module' => 'ds',
        'settings' => array(
          'taxonomy_term_link' => 1,
          'taxonomy_term_separator' => ', ',
        ),
        'type' => 'ds_taxonomy_separator',
        'weight' => 1,
      ),
      'teaser' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 10,
      ),
    ),
    'ds_extras_field_template' => '',
    'entity_type' => 'node',
    'field_name' => 'field_council_priority_issue',
    'label' => 'Council Priority Issue',
    'required' => 1,
    'settings' => array(
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'shs',
      'settings' => array(
        'shs' => array(
          'create_new_levels' => 1,
          'create_new_terms' => 1,
          'force_deepest' => 0,
          'node_count' => 0,
        ),
      ),
      'type' => 'taxonomy_shs',
      'weight' => 2,
    ),
  );

  // Exported field_instance: 'node-work_stream-field_related_documents'
  $field_instances['node-work_stream-field_related_documents'] = array(
    'bundle' => 'work_stream',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => 'Select one or more publications to link to this work stream. The publication must already exist on the site before you can add it here.',
    'display' => array(
      'default' => array(
        'label' => 'above',
        'module' => 'node_reference',
        'settings' => array(),
        'type' => 'node_reference_default',
        'weight' => 4,
      ),
      'search_result' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 13,
      ),
      'teaser' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 8,
      ),
    ),
    'ds_extras_field_template' => '',
    'entity_type' => 'node',
    'field_name' => 'field_related_documents',
    'label' => 'Work Stream Related Document',
    'required' => 0,
    'settings' => array(
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'node_reference',
      'settings' => array(
        'autocomplete_match' => 'contains',
        'autocomplete_path' => 'node_reference/autocomplete',
        'size' => 60,
      ),
      'type' => 'node_reference_autocomplete',
      'weight' => 4,
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Add the contents of the work stream here. Ensure you use Heading 2 to break up sections. It is also wise to add a summary that can be used in search results and other content lists.');
  t('Body');
  t('Council Priority Issue');
  t('Select a Council Priority Issue for this Work Stream.');
  t('Select one or more publications to link to this work stream. The publication must already exist on the site before you can add it here.');
  t('Work Stream Related Document');

  return $field_instances;
}
