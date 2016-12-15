<?php

class views_handler_filter_file_extension extends views_handler_filter_equality {
  /**
   * Provide a select field for extension. This also restricts the extensions to those associated with the 'document' file type.
   */
  function value_form(&$form, &$form_state) {
    $options = array();
    $options = db_query("SELECT DISTINCT SUBSTRING_INDEX(filename, '.', -1) AS type FROM {file_managed} WHERE type = 'document' ORDER BY type")->fetchAllKeyed(0, 0);

    $form['value'] = array(
      '#type' => 'select',
      '#title' => t('Extension'),
      '#options' => $options,
      '#default_value' => array($this->value),
    );

    if (!empty($form_state['exposed'])) {
      $identifier = $this->options['expose']['identifier'];
      if (!isset($form_state['input'][$identifier])) {
        $form_state['input'][$identifier] = $this->value;
      }
    }
  }

  /**
   * Add this filter to the query.
   *
   * Due to the nature of fapi, the value and the operator have an unintended
   * level of indirection. You will find them in $this->operator
   * and $this->value respectively.
   */
  function query() {
    $this->ensure_my_table();
    $field = "$this->table_alias.$this->real_field";

    // Copied from string - ends with. Gets us close.
    $this->query->add_where($this->options['group'], $field, '%' . db_like($this->value), 'LIKE');

    // What we actually want.  Doesn't work. :/
    // $expression = "SUBSTRING_INDEX($field, '.', -1)";
    //$this->query->add_where($this->options['group'], $expression, $this->value, $this->operator);
  }
}