<?php
/**
 * @file
 * energy_council_menus.features.menu_links.inc
 */

/**
 * Implements hook_menu_default_menu_links().
 */
function energy_council_menus_menu_default_menu_links() {
  $menu_links = array();

  // Exported menu link: menu-header-menu_about-us:node/617
  $menu_links['menu-header-menu_about-us:node/617'] = array(
    'menu_name' => 'menu-header-menu',
    'link_path' => 'node/617',
    'router_path' => 'node/%',
    'link_title' => 'About Us',
    'options' => array(
      'attributes' => array(
        'title' => 'Learn more about the Council\'s role',
      ),
      'identifier' => 'menu-header-menu_about-us:node/617',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'customized' => 1,
  );
  // Exported menu link: menu-header-menu_contact-us:node/622
  $menu_links['menu-header-menu_contact-us:node/622'] = array(
    'menu_name' => 'menu-header-menu',
    'link_path' => 'node/622',
    'router_path' => 'node/%',
    'link_title' => 'Contact Us',
    'options' => array(
      'attributes' => array(
        'title' => 'Find contact details for the Council Secretariat here',
      ),
      'identifier' => 'menu-header-menu_contact-us:node/622',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'customized' => 1,
  );
  // Exported menu link: menu-sub-footer_accessibility:<front>
  $menu_links['menu-sub-footer_accessibility:<front>'] = array(
    'menu_name' => 'menu-sub-footer',
    'link_path' => '<front>',
    'router_path' => '',
    'link_title' => 'Accessibility',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'identifier' => 'menu-sub-footer_accessibility:<front>',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 1,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'customized' => 1,
  );
  // Exported menu link: menu-sub-footer_disclaimer:<front>
  $menu_links['menu-sub-footer_disclaimer:<front>'] = array(
    'menu_name' => 'menu-sub-footer',
    'link_path' => '<front>',
    'router_path' => '',
    'link_title' => 'Disclaimer',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'identifier' => 'menu-sub-footer_disclaimer:<front>',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 1,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'customized' => 1,
  );
  // Exported menu link: menu-sub-footer_privacy-statement:<front>
  $menu_links['menu-sub-footer_privacy-statement:<front>'] = array(
    'menu_name' => 'menu-sub-footer',
    'link_path' => '<front>',
    'router_path' => '',
    'link_title' => 'Privacy statement',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'identifier' => 'menu-sub-footer_privacy-statement:<front>',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 1,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'customized' => 1,
  );
  // Exported menu link: menu-sub-footer_site-map:<front>
  $menu_links['menu-sub-footer_site-map:<front>'] = array(
    'menu_name' => 'menu-sub-footer',
    'link_path' => '<front>',
    'router_path' => '',
    'link_title' => 'Site map',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'identifier' => 'menu-sub-footer_site-map:<front>',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 1,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'customized' => 1,
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('About Us');
  t('Accessibility');
  t('Contact Us');
  t('Disclaimer');
  t('Privacy statement');
  t('Site map');

  return $menu_links;
}
