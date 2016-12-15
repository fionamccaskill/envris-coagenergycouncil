<?php
/**
 * @file
 * industry_workbench.features.workbench_scheduler.inc
 */

/**
 * Implements hook_workbench_scheduler_export_schedules().
 */
function industry_workbench_workbench_scheduler_export_schedules() {
  $items = array(
    'publish' => array(
      'name' => 'publish',
      'label' => 'Publish',
      'start_state' => 'published',
      'end_state' => 'draft',
      'types' => array(
        0 => 'consultation',
        1 => 'event',
        2 => 'news',
        3 => 'page',
        4 => 'publications',
        5 => 'work_stream',
      ),
    ),
  );
  return $items;
}
