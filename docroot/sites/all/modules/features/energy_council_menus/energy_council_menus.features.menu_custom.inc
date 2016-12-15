<?php
/**
 * @file
 * energy_council_menus.features.menu_custom.inc
 */

/**
 * Implements hook_menu_default_menu_custom().
 */
function energy_council_menus_menu_default_menu_custom() {
  $menus = array();

  // Exported menu: main-menu.
  $menus['main-menu'] = array(
    'menu_name' => 'main-menu',
    'title' => 'Main menu',
    'description' => 'The <em>Main</em> menu is used on many sites to show the major sections of the site, often in a top navigation bar.',
  );
  // Exported menu: menu-header-menu.
  $menus['menu-header-menu'] = array(
    'menu_name' => 'menu-header-menu',
    'title' => 'Header menu',
    'description' => '',
  );
  // Exported menu: menu-sub-footer.
  $menus['menu-sub-footer'] = array(
    'menu_name' => 'menu-sub-footer',
    'title' => 'Sub footer',
    'description' => 'A menu to appear below the footer.',
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('A menu to appear below the footer.');
  t('Header menu');
  t('Main menu');
  t('Sub footer');
  t('The <em>Main</em> menu is used on many sites to show the major sections of the site, often in a top navigation bar.');


  return $menus;
}
