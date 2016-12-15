<?php 


$options['db_type'] = 'mysql';
$options['db_host'] = 'CBR1-AEGIR-DB01';
$options['db_port'] = '3306';
$options['db_passwd'] = 'YuoFDsQ5fi';
$options['db_name'] = 'prodenergycoun_0';
$options['db_user'] = 'prodenergycoun_0';
$options['packages'] = array (
  'platforms' => 
  array (
    'drupal' => 
    array (
      'short_name' => 'drupal',
      'version' => '7.43',
      'description' => 'This platform is running Drupal 7.43',
    ),
  ),
  'profiles' => 
  array (
    'standard' => 
    array (
      'name' => 'standard',
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/profiles/standard/standard.profile',
      'project' => 'drupal',
      'info' => 
      array (
        'name' => 'Standard',
        'description' => 'Install with commonly used features pre-configured.',
        'version' => '7.43',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'color',
          2 => 'comment',
          3 => 'contextual',
          4 => 'dashboard',
          5 => 'help',
          6 => 'image',
          7 => 'list',
          8 => 'menu',
          9 => 'number',
          10 => 'options',
          11 => 'path',
          12 => 'taxonomy',
          13 => 'dblog',
          14 => 'search',
          15 => 'shortcut',
          16 => 'toolbar',
          17 => 'overlay',
          18 => 'field_ui',
          19 => 'file',
          20 => 'rdf',
        ),
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'php' => '5.2.4',
        'languages' => 
        array (
          0 => 'en',
        ),
        'old_short_name' => 'default',
      ),
      'version' => '7.43',
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
    'aggregator' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/aggregator/aggregator.module',
      'name' => 'aggregator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aggregator',
        'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'aggregator.test',
        ),
        'configure' => 'admin/config/services/aggregator/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'aggregator.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'block' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/block/block.module',
      'name' => 'block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7009',
      'weight' => '-5',
      'info' => 
      array (
        'name' => 'Block',
        'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'block.test',
        ),
        'configure' => 'admin/structure/block',
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'blog' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/blog/blog.module',
      'name' => 'blog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blog',
        'description' => 'Enables multi-user blogs.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'blog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'book' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/book/book.module',
      'name' => 'book',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Book',
        'description' => 'Allows users to create and organize related content in an outline.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'book.test',
        ),
        'configure' => 'admin/content/book/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'book.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'color' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/color/color.module',
      'name' => 'color',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Color',
        'description' => 'Allows administrators to change the color scheme of compatible themes.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'color.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'comment' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/comment/comment.module',
      'name' => 'comment',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Comment',
        'description' => 'Allows users to comment on and discuss published content.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'text',
        ),
        'files' => 
        array (
          0 => 'comment.module',
          1 => 'comment.test',
        ),
        'configure' => 'admin/content/comment',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'comment.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'contact' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/contact/contact.module',
      'name' => 'contact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contact',
        'description' => 'Enables the use of both personal and site-wide contact forms.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contact.test',
        ),
        'configure' => 'admin/structure/contact',
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'contextual' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/contextual/contextual.module',
      'name' => 'contextual',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contextual links',
        'description' => 'Provides contextual links to perform actions related to elements on a page.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contextual.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'dashboard' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/dashboard/dashboard.module',
      'name' => 'dashboard',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Dashboard',
        'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.43',
        'files' => 
        array (
          0 => 'dashboard.test',
        ),
        'dependencies' => 
        array (
          0 => 'block',
        ),
        'configure' => 'admin/dashboard/customize',
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'dblog' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/dblog/dblog.module',
      'name' => 'dblog',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database logging',
        'description' => 'Logs and records system events to the database.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'dblog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'field' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/field/field.module',
      'name' => 'field',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field',
        'description' => 'Field API to add fields to entities like nodes and users.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'field.module',
          1 => 'field.attach.inc',
          2 => 'field.info.class.inc',
          3 => 'tests/field.test',
        ),
        'dependencies' => 
        array (
          0 => 'field_sql_storage',
        ),
        'required' => true,
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'theme/field.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'field_sql_storage' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/field/modules/field_sql_storage/field_sql_storage.module',
      'name' => 'field_sql_storage',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field SQL storage',
        'description' => 'Stores field data in an SQL database.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_sql_storage.test',
        ),
        'required' => true,
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'list' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/field/modules/list/list.module',
      'name' => 'list',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'List',
        'description' => 'Defines list field types. Use with Options to create selection lists.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'options',
        ),
        'files' => 
        array (
          0 => 'tests/list.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'number' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/field/modules/number/number.module',
      'name' => 'number',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Number',
        'description' => 'Defines numeric field types.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'number.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'options' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/field/modules/options/options.module',
      'name' => 'options',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Options',
        'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'options.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'text' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/field/modules/text/text.module',
      'name' => 'text',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Text',
        'description' => 'Defines simple text field types.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'text.test',
        ),
        'required' => true,
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'field_ui' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/field_ui/field_ui.module',
      'name' => 'field_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field UI',
        'description' => 'User interface for the Field API.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_ui.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'file' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/file/file.module',
      'name' => 'file',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File',
        'description' => 'Defines a file field type.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'tests/file.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'filter' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/filter/filter.module',
      'name' => 'filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7010',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filter',
        'description' => 'Filters content in preparation for display.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'filter.test',
        ),
        'required' => true,
        'configure' => 'admin/config/content/formats',
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'forum' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/forum/forum.module',
      'name' => 'forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Forum',
        'description' => 'Provides discussion forums.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'forum.test',
        ),
        'configure' => 'admin/structure/forum',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'forum.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'help' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/help/help.module',
      'name' => 'help',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Help',
        'description' => 'Manages the display of online help.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'help.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'image' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/image/image.module',
      'name' => 'image',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image',
        'description' => 'Provides image manipulation tools.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'file',
        ),
        'files' => 
        array (
          0 => 'image.test',
        ),
        'configure' => 'admin/config/media/image-styles',
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'locale' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/locale/locale.module',
      'name' => 'locale',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale',
        'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'locale.test',
        ),
        'configure' => 'admin/config/regional/language',
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'menu' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/menu/menu.module',
      'name' => 'menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu',
        'description' => 'Allows administrators to customize the site navigation menu.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'menu.test',
        ),
        'configure' => 'admin/structure/menu',
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'node' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/node/node.module',
      'name' => 'node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7015',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node',
        'description' => 'Allows content to be submitted to the site and displayed on pages.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'node.module',
          1 => 'node.test',
        ),
        'required' => true,
        'configure' => 'admin/structure/types',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'node.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'openid' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/openid/openid.module',
      'name' => 'openid',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID',
        'description' => 'Allows users to log into your site using OpenID.',
        'version' => '7.43',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'openid.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'overlay' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/overlay/overlay.module',
      'name' => 'overlay',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Overlay',
        'description' => 'Displays the Drupal administration interface in an overlay.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'path' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/path/path.module',
      'name' => 'path',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path',
        'description' => 'Allows users to rename URLs.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'path.test',
        ),
        'configure' => 'admin/config/search/path',
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'php' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/php/php.module',
      'name' => 'php',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PHP filter',
        'description' => 'Allows embedded PHP code/snippets to be evaluated.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'php.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'poll' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/poll/poll.module',
      'name' => 'poll',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Poll',
        'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'poll.test',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'poll.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'rdf' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/rdf/rdf.module',
      'name' => 'rdf',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'RDF',
        'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rdf.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'search' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/search/search.module',
      'name' => 'search',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search',
        'description' => 'Enables site-wide keyword searching.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'search.extender.inc',
          1 => 'search.test',
        ),
        'configure' => 'admin/config/search/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'search.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'shortcut' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/shortcut/shortcut.module',
      'name' => 'shortcut',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shortcut',
        'description' => 'Allows users to manage customizable lists of shortcut links.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'shortcut.test',
        ),
        'configure' => 'admin/config/user-interface/shortcut',
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'simpletest' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/simpletest/simpletest.module',
      'name' => 'simpletest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Testing',
        'description' => 'Provides a framework for unit and functional testing.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'simpletest.test',
          1 => 'drupal_web_test_case.php',
          2 => 'tests/actions.test',
          3 => 'tests/ajax.test',
          4 => 'tests/batch.test',
          5 => 'tests/boot.test',
          6 => 'tests/bootstrap.test',
          7 => 'tests/cache.test',
          8 => 'tests/common.test',
          9 => 'tests/database_test.test',
          10 => 'tests/entity_crud.test',
          11 => 'tests/entity_crud_hook_test.test',
          12 => 'tests/entity_query.test',
          13 => 'tests/error.test',
          14 => 'tests/file.test',
          15 => 'tests/filetransfer.test',
          16 => 'tests/form.test',
          17 => 'tests/graph.test',
          18 => 'tests/image.test',
          19 => 'tests/lock.test',
          20 => 'tests/mail.test',
          21 => 'tests/menu.test',
          22 => 'tests/module.test',
          23 => 'tests/pager.test',
          24 => 'tests/password.test',
          25 => 'tests/path.test',
          26 => 'tests/registry.test',
          27 => 'tests/schema.test',
          28 => 'tests/session.test',
          29 => 'tests/tablesort.test',
          30 => 'tests/theme.test',
          31 => 'tests/unicode.test',
          32 => 'tests/update.test',
          33 => 'tests/xmlrpc.test',
          34 => 'tests/upgrade/upgrade.test',
          35 => 'tests/upgrade/upgrade.comment.test',
          36 => 'tests/upgrade/upgrade.filter.test',
          37 => 'tests/upgrade/upgrade.forum.test',
          38 => 'tests/upgrade/upgrade.locale.test',
          39 => 'tests/upgrade/upgrade.menu.test',
          40 => 'tests/upgrade/upgrade.node.test',
          41 => 'tests/upgrade/upgrade.taxonomy.test',
          42 => 'tests/upgrade/upgrade.trigger.test',
          43 => 'tests/upgrade/upgrade.translatable.test',
          44 => 'tests/upgrade/upgrade.upload.test',
          45 => 'tests/upgrade/upgrade.user.test',
          46 => 'tests/upgrade/update.aggregator.test',
          47 => 'tests/upgrade/update.trigger.test',
          48 => 'tests/upgrade/update.field.test',
          49 => 'tests/upgrade/update.user.test',
        ),
        'configure' => 'admin/config/development/testing/settings',
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'statistics' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/statistics/statistics.module',
      'name' => 'statistics',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Statistics',
        'description' => 'Logs access statistics for your site.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'statistics.test',
        ),
        'configure' => 'admin/config/system/statistics',
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'syslog' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/syslog/syslog.module',
      'name' => 'syslog',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Syslog',
        'description' => 'Logs and records system events to syslog.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'syslog.test',
        ),
        'configure' => 'admin/config/development/logging',
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'system' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/system/system.module',
      'name' => 'system',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7080',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System',
        'description' => 'Handles general site configuration for administrators.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'system.archiver.inc',
          1 => 'system.mail.inc',
          2 => 'system.queue.inc',
          3 => 'system.tar.inc',
          4 => 'system.updater.inc',
          5 => 'system.test',
        ),
        'required' => true,
        'configure' => 'admin/config/system',
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'taxonomy' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/taxonomy/taxonomy.module',
      'name' => 'taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7011',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy',
        'description' => 'Enables the categorization of content.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'options',
        ),
        'files' => 
        array (
          0 => 'taxonomy.module',
          1 => 'taxonomy.test',
        ),
        'configure' => 'admin/structure/taxonomy',
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'toolbar' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/toolbar/toolbar.module',
      'name' => 'toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Toolbar',
        'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.43',
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'tracker' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/tracker/tracker.module',
      'name' => 'tracker',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tracker',
        'description' => 'Enables tracking of recent content for users.',
        'dependencies' => 
        array (
          0 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tracker.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'translation' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/translation/translation.module',
      'name' => 'translation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content translation',
        'description' => 'Allows content to be translated into different languages.',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'translation.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'trigger' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/trigger/trigger.module',
      'name' => 'trigger',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Trigger',
        'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'trigger.test',
        ),
        'configure' => 'admin/structure/trigger',
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'update' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/update/update.module',
      'name' => 'update',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update manager',
        'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
        'version' => '7.43',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'update.test',
        ),
        'configure' => 'admin/reports/updates/settings',
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'user' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/modules/user/user.module',
      'name' => 'user',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7018',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User',
        'description' => 'Manages the user registration and login system.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'user.module',
          1 => 'user.test',
        ),
        'required' => true,
        'configure' => 'admin/config/people',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'user.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'addressfield' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/addressfield/addressfield.module',
      'name' => 'addressfield',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Address Field',
        'description' => 'Manage a flexible address field, implementing the xNAL standard.',
        'core' => '7.x',
        'package' => 'Fields',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'addressfield.migrate.inc',
          1 => 'views/addressfield_views_handler_field_administrative_area.inc',
          2 => 'views/addressfield_views_handler_field_country.inc',
          3 => 'views/addressfield_views_handler_filter_country.inc',
        ),
        'version' => '7.x-1.2',
        'project' => 'addressfield',
        'datestamp' => '1444254070',
        'php' => '5.2.4',
      ),
      'project' => 'addressfield',
      'version' => '7.x-1.2',
    ),
    'admin_devel' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/admin_menu/admin_devel/admin_devel.module',
      'name' => 'admin_devel',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Administration Development tools',
        'description' => 'Administration and debugging functionality for developers and site builders.',
        'package' => 'Administration',
        'core' => '7.x',
        'scripts' => 
        array (
          0 => 'admin_devel.js',
        ),
        'version' => '7.x-3.0-rc5',
        'project' => 'admin_menu',
        'datestamp' => '1419029284',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'admin_menu',
      'version' => '7.x-3.0-rc5',
    ),
    'admin_menu' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/admin_menu/admin_menu.module',
      'name' => 'admin_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7304',
      'weight' => '100',
      'info' => 
      array (
        'name' => 'Administration menu',
        'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
        'package' => 'Administration',
        'core' => '7.x',
        'configure' => 'admin/config/administration/admin_menu',
        'dependencies' => 
        array (
          0 => 'system (>7.10)',
        ),
        'files' => 
        array (
          0 => 'tests/admin_menu.test',
        ),
        'version' => '7.x-3.0-rc5',
        'project' => 'admin_menu',
        'datestamp' => '1419029284',
        'php' => '5.2.4',
      ),
      'project' => 'admin_menu',
      'version' => '7.x-3.0-rc5',
    ),
    'admin_menu_toolbar' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
      'name' => 'admin_menu_toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6300',
      'weight' => '101',
      'info' => 
      array (
        'name' => 'Administration menu Toolbar style',
        'description' => 'A better Toolbar.',
        'package' => 'Administration',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'admin_menu',
        ),
        'version' => '7.x-3.0-rc5',
        'project' => 'admin_menu',
        'datestamp' => '1419029284',
        'php' => '5.2.4',
      ),
      'project' => 'admin_menu',
      'version' => '7.x-3.0-rc5',
    ),
    'admin_views' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/admin_views/admin_views.module',
      'name' => 'admin_views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '12',
      'info' => 
      array (
        'name' => 'Administration views',
        'description' => 'Replaces all system object management pages in Drupal core with real views.',
        'package' => 'Administration',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'views_bulk_operations (>=7.x-3.2)',
        ),
        'files' => 
        array (
          0 => 'plugins/views_plugin_display_system.inc',
          1 => 'plugins/views_plugin_access_menu.inc',
          2 => 'tests/admin_views.test',
        ),
        'version' => '7.x-1.5',
        'project' => 'admin_views',
        'datestamp' => '1436376676',
        'php' => '5.2.4',
      ),
      'project' => 'admin_views',
      'version' => '7.x-1.5',
    ),
    'apachesolr' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/apachesolr/apachesolr.module',
      'name' => 'apachesolr',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7017',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Apache Solr framework',
        'description' => 'Framework for searching with Solr',
        'package' => 'Search Toolkit',
        'core' => '7.x',
        'configure' => 'admin/config/search/apachesolr/settings',
        'files' => 
        array (
          0 => 'apachesolr.interface.inc',
          1 => 'Drupal_Apache_Solr_Service.php',
          2 => 'Apache_Solr_Document.php',
          3 => 'Solr_Base_Query.php',
          4 => 'plugins/facetapi/adapter.inc',
          5 => 'plugins/facetapi/query_type_date.inc',
          6 => 'plugins/facetapi/query_type_term.inc',
          7 => 'plugins/facetapi/query_type_numeric_range.inc',
          8 => 'plugins/facetapi/query_type_geo.inc',
          9 => 'tests/Dummy_Solr.php',
          10 => 'tests/apachesolr_base.test',
          11 => 'tests/solr_index_and_search.test',
          12 => 'tests/solr_base_query.test',
          13 => 'tests/solr_base_subquery.test',
          14 => 'tests/solr_document.test',
        ),
        'version' => '7.x-1.8',
        'project' => 'apachesolr',
        'datestamp' => '1449085462',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'apachesolr',
      'version' => '7.x-1.8',
    ),
    'apachesolr_access' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/apachesolr/apachesolr_access/apachesolr_access.module',
      'name' => 'apachesolr_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Apache Solr Access',
        'description' => 'Integrates node access and other permissions with Apache Solr search',
        'dependencies' => 
        array (
          0 => 'apachesolr',
        ),
        'package' => 'Search Toolkit',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/apachesolr_access.test',
        ),
        'version' => '7.x-1.8',
        'project' => 'apachesolr',
        'datestamp' => '1449085462',
        'php' => '5.2.4',
      ),
      'project' => 'apachesolr',
      'version' => '7.x-1.8',
    ),
    'apachesolr_search' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/apachesolr/apachesolr_search.module',
      'name' => 'apachesolr_search',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7006',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Apache Solr search',
        'description' => 'Search with Solr',
        'dependencies' => 
        array (
          0 => 'search',
          1 => 'apachesolr',
        ),
        'package' => 'Search Toolkit',
        'core' => '7.x',
        'configure' => 'admin/config/search/apachesolr/search-pages',
        'version' => '7.x-1.8',
        'project' => 'apachesolr',
        'datestamp' => '1449085462',
        'php' => '5.2.4',
      ),
      'project' => 'apachesolr',
      'version' => '7.x-1.8',
    ),
    'apachesolr_attachments' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/apachesolr_attachments/apachesolr_attachments.module',
      'name' => 'apachesolr_attachments',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Apache Solr search attachments',
        'description' => 'Search file attachments with Solr',
        'dependencies' => 
        array (
          0 => 'apachesolr',
        ),
        'package' => 'Search Toolkit',
        'core' => '7.x',
        'configure' => 'admin/config/search/apachesolr/attachments',
        'version' => '7.x-1.4',
        'project' => 'apachesolr_attachments',
        'datestamp' => '1425005884',
        'php' => '5.2.4',
      ),
      'project' => 'apachesolr_attachments',
      'version' => '7.x-1.4',
    ),
    'apachesolr_autocomplete' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/apachesolr_autocomplete/apachesolr_autocomplete.module',
      'name' => 'apachesolr_autocomplete',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Apache Solr autocomplete',
        'description' => 'Enables autocomplete on Apache Solr search boxes',
        'dependencies' => 
        array (
          0 => 'apachesolr',
          1 => 'apachesolr_search',
        ),
        'package' => 'Search Toolkit',
        'core' => '7.x',
        'version' => '7.x-1.5',
        'project' => 'apachesolr_autocomplete',
        'datestamp' => '1447708741',
        'php' => '5.2.4',
      ),
      'project' => 'apachesolr_autocomplete',
      'version' => '7.x-1.5',
    ),
    'apachesolr_panels' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/apachesolr_panels/apachesolr_panels.module',
      'name' => 'apachesolr_panels',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Apache Solr Panels',
        'description' => 'Integrates Apache Solr Search with Panels.',
        'package' => 'Apache Solr',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'apachesolr_search',
          1 => 'ctools',
          2 => 'page_manager',
          3 => 'panels',
        ),
        'version' => '7.x-1.1',
        'project' => 'apachesolr_panels',
        'datestamp' => '1350942969',
        'php' => '5.2.4',
      ),
      'project' => 'apachesolr_panels',
      'version' => '7.x-1.1',
    ),
    'apachesolr_views' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/apachesolr_views/apachesolr_views.module',
      'name' => 'apachesolr_views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Apache Solr Views integration',
        'description' => 'Provides Apache Solr integration with Views',
        'package' => 'Search Toolkit',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'apachesolr',
          1 => 'apachesolr_search',
          2 => 'views',
        ),
        'files' => 
        array (
          0 => 'apachesolr_views_query.inc',
          1 => 'apachesolr_views_solr_base_query.inc',
          2 => 'handlers/apachesolr_views_handler_field.inc',
          3 => 'handlers/apachesolr_views_handler_field_date.inc',
          4 => 'handlers/apachesolr_views_snippet_handler_field.inc',
          5 => 'handlers/apachesolr_views_handler_sort.inc',
          6 => 'handlers/apachesolr_views_handler_filter.inc',
          7 => 'handlers/apachesolr_views_handler_filter_date.inc',
          8 => 'handlers/apachesolr_views_handler_filter_string.inc',
          9 => 'handlers/apachesolr_views_keyword_handler_filter.inc',
          10 => 'handlers/apachesolr_views_handler_argument.inc',
        ),
        'version' => '7.x-1.1-beta1',
        'project' => 'apachesolr_views',
        'datestamp' => '1432238584',
        'php' => '5.2.4',
      ),
      'project' => 'apachesolr_views',
      'version' => '7.x-1.1-beta1',
    ),
    'backup_migrate' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/backup_migrate/backup_migrate.module',
      'name' => 'backup_migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7304',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Backup and Migrate',
        'description' => 'Backup the Drupal database and files or migrate them to another environment.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/destinations.inc',
          1 => 'includes/profiles.inc',
          2 => 'includes/schedules.inc',
        ),
        'configure' => 'admin/config/system/backup_migrate',
        'version' => '7.x-3.1',
        'project' => 'backup_migrate',
        'datestamp' => '1431350582',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'backup_migrate',
      'version' => '7.x-3.1',
    ),
    'better_messages' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/better_messages/better_messages.module',
      'name' => 'better_messages',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '6000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Better Messages',
        'description' => 'This module adds simple functions to make Drupal messages look and act better.',
        'core' => '7.x',
        'package' => 'User interface',
        'configure' => 'admin/config/user-interface/better-messages',
        'version' => '7.x-1.0-alpha1',
        'project' => 'better_messages',
        'datestamp' => '1418319316',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'better_messages',
      'version' => '7.x-1.0-alpha1',
    ),
    'block_class' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/block_class/block_class.module',
      'name' => 'block_class',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7103',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block Class',
        'description' => 'Allows assigning CSS classes to blocks.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'block',
        ),
        'files' => 
        array (
          0 => 'block_class.test',
        ),
        'test_dependencies' => 
        array (
          0 => 'context',
          1 => 'features (2.x)',
          2 => 'features_extra',
        ),
        'version' => '7.x-2.3',
        'project' => 'block_class',
        'datestamp' => '1450415951',
        'php' => '5.2.4',
      ),
      'project' => 'block_class',
      'version' => '7.x-2.3',
    ),
    'calendar' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/calendar/calendar.module',
      'name' => 'calendar',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Calendar',
        'description' => 'Views plugin to display views containing dates as Calendars.',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'date_api',
          2 => 'date_views',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/calendar_multiday.css',
          ),
        ),
        'files' => 
        array (
          0 => 'calendar.install',
          1 => 'calendar.module',
          2 => 'includes/calendar.views.inc',
          3 => 'includes/calendar_plugin_style.inc',
          4 => 'includes/calendar_plugin_row.inc',
          5 => 'includes/calendar.views_template.inc',
          6 => 'theme/theme.inc',
          7 => 'theme/calendar-style.tpl.php',
        ),
        'version' => '7.x-3.5',
        'project' => 'calendar',
        'datestamp' => '1413299943',
        'php' => '5.2.4',
      ),
      'project' => 'calendar',
      'version' => '7.x-3.5',
    ),
    'ckeditor' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/ckeditor/ckeditor.module',
      'name' => 'ckeditor',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CKEditor',
        'description' => 'Enables CKEditor (WYSIWYG HTML editor) for use instead of plain text fields.',
        'core' => '7.x',
        'package' => 'User interface',
        'configure' => 'admin/config/content/ckeditor',
        'version' => '7.x-1.17',
        'project' => 'ckeditor',
        'datestamp' => '1450969741',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'ckeditor',
      'version' => '7.x-1.17',
    ),
    'ckeditor_link' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/ckeditor_link/ckeditor_link.module',
      'name' => 'ckeditor_link',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'CKEditor Link',
        'description' => 'Easily create links to Drupal internal paths through CKEditor.',
        'package' => 'User interface',
        'core' => '7.x',
        'configure' => 'admin/config/content/ckeditor_link',
        'version' => '7.x-2.4',
        'project' => 'ckeditor_link',
        'datestamp' => '1454115840',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'ckeditor_link',
      'version' => '7.x-2.4',
    ),
    'crumbs' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/crumbs/crumbs.module',
      'name' => 'crumbs',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7203',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Crumbs',
        'description' => 'The ultimate breadcrumbs module',
        'core' => '7.x',
        'php' => '5.2',
        'version' => '7.x-2.5',
        'project' => 'crumbs',
        'datestamp' => '1459362841',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'crumbs',
      'version' => '7.x-2.5',
    ),
    'crumbs_example' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/crumbs/example/crumbs_example.module',
      'name' => 'crumbs_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Crumbs example',
        'description' => 'Example module for Crumbs custom plugins.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'xautoload',
        ),
        'version' => '7.x-2.5',
        'project' => 'crumbs',
        'datestamp' => '1459362841',
        'php' => '5.2.4',
      ),
      'project' => 'crumbs',
      'version' => '7.x-2.5',
    ),
    'crumbs_labs' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/crumbs/labs/crumbs_labs.module',
      'name' => 'crumbs_labs',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Crumbs Labs',
        'description' => 'Experimental stuff for Crumbs module.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'crumbs',
        ),
        'version' => '7.x-2.5',
        'project' => 'crumbs',
        'datestamp' => '1459362841',
        'php' => '5.2.4',
      ),
      'project' => 'crumbs',
      'version' => '7.x-2.5',
    ),
    'bulk_export' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/ctools/bulk_export/bulk_export.module',
      'name' => 'bulk_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bulk Export',
        'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.9',
        'project' => 'ctools',
        'datestamp' => '1440020680',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.9',
    ),
    'ctools' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/ctools/ctools.module',
      'name' => 'ctools',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos tools',
        'description' => 'A library of helpful tools by Merlin of Chaos.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.9',
        'files' => 
        array (
          0 => 'includes/context.inc',
          1 => 'includes/css-cache.inc',
          2 => 'includes/math-expr.inc',
          3 => 'includes/stylizer.inc',
          4 => 'tests/css_cache.test',
        ),
        'project' => 'ctools',
        'datestamp' => '1440020680',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.9',
    ),
    'ctools_access_ruleset' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
      'name' => 'ctools_access_ruleset',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom rulesets',
        'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.9',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'project' => 'ctools',
        'datestamp' => '1440020680',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.9',
    ),
    'ctools_ajax_sample' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
      'name' => 'ctools_ajax_sample',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) AJAX Example',
        'description' => 'Shows how to use the power of Chaos AJAX.',
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.9',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'core' => '7.x',
        'project' => 'ctools',
        'datestamp' => '1440020680',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.9',
    ),
    'ctools_custom_content' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/ctools/ctools_custom_content/ctools_custom_content.module',
      'name' => 'ctools_custom_content',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom content panes',
        'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.9',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'project' => 'ctools',
        'datestamp' => '1440020680',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.9',
    ),
    'ctools_plugin_example' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/ctools/ctools_plugin_example/ctools_plugin_example.module',
      'name' => 'ctools_plugin_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) Plugin Example',
        'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.9',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'panels',
          2 => 'page_manager',
          3 => 'advanced_help',
        ),
        'core' => '7.x',
        'project' => 'ctools',
        'datestamp' => '1440020680',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.9',
    ),
    'page_manager' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/ctools/page_manager/page_manager.module',
      'name' => 'page_manager',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '99',
      'info' => 
      array (
        'name' => 'Page manager',
        'description' => 'Provides a UI and API to manage pages within the site.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.9',
        'project' => 'ctools',
        'datestamp' => '1440020680',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.9',
    ),
    'stylizer' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/ctools/stylizer/stylizer.module',
      'name' => 'stylizer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stylizer',
        'description' => 'Create custom styles for applications such as Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.9',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'color',
        ),
        'project' => 'ctools',
        'datestamp' => '1440020680',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.9',
    ),
    'term_depth' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/ctools/term_depth/term_depth.module',
      'name' => 'term_depth',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Term Depth access',
        'description' => 'Controls access to context based upon term depth',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.9',
        'project' => 'ctools',
        'datestamp' => '1440020680',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.9',
    ),
    'views_content' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/ctools/views_content/views_content.module',
      'name' => 'views_content',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views content panes',
        'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'views',
        ),
        'core' => '7.x',
        'version' => '7.x-1.9',
        'files' => 
        array (
          0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
          1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
          2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
        ),
        'project' => 'ctools',
        'datestamp' => '1440020680',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.9',
    ),
    'custom_search' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/custom_search/custom_search.module',
      'name' => 'custom_search',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7104',
      'weight' => '100',
      'info' => 
      array (
        'name' => 'Custom Search',
        'description' => 'Customize the default search, change labels, default texts, ordering, and display content types and taxonomy selectors.',
        'core' => '7.x',
        'package' => 'Search',
        'dependencies' => 
        array (
          0 => 'search',
        ),
        'configure' => 'admin/config/search/custom_search',
        'version' => '7.x-1.19',
        'project' => 'custom_search',
        'datestamp' => '1449821671',
        'php' => '5.2.4',
      ),
      'project' => 'custom_search',
      'version' => '7.x-1.19',
    ),
    'custom_search_blocks' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/custom_search/modules/custom_search_blocks/custom_search_blocks.module',
      'name' => 'custom_search_blocks',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7101',
      'weight' => '99',
      'info' => 
      array (
        'name' => 'Custom Search Blocks',
        'description' => 'Provides additional search blocks.',
        'core' => '7.x',
        'package' => 'Search',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'custom_search',
        ),
        'configure' => 'admin/config/search/custom_search/blocks',
        'version' => '7.x-1.19',
        'project' => 'custom_search',
        'datestamp' => '1449821671',
        'php' => '5.2.4',
      ),
      'project' => 'custom_search',
      'version' => '7.x-1.19',
    ),
    'custom_search_i18n' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/custom_search/modules/custom_search_i18n/custom_search_i18n.module',
      'name' => 'custom_search_i18n',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom Search Internationalization',
        'description' => 'Provides Internationalization to Custom Search.',
        'core' => '7.x',
        'package' => 'Search',
        'dependencies' => 
        array (
          0 => 'custom_search',
          1 => 'i18n_string',
        ),
        'version' => '7.x-1.19',
        'project' => 'custom_search',
        'datestamp' => '1449821671',
        'php' => '5.2.4',
      ),
      'project' => 'custom_search',
      'version' => '7.x-1.19',
    ),
    'custom_search_taxonomy' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/custom_search/modules/custom_search_taxonomy/custom_search_taxonomy.module',
      'name' => 'custom_search_taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom Search Taxonomy',
        'description' => 'Adds taxonomy selectors to Custom Search.',
        'core' => '7.x',
        'package' => 'Search',
        'dependencies' => 
        array (
          0 => 'custom_search',
          1 => 'taxonomy',
        ),
        'configure' => 'admin/config/search/custom_search/taxonomy',
        'version' => '7.x-1.19',
        'project' => 'custom_search',
        'datestamp' => '1449821671',
        'php' => '5.2.4',
      ),
      'project' => 'custom_search',
      'version' => '7.x-1.19',
    ),
    'date' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/date/date.module',
      'name' => 'date',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date',
        'description' => 'Makes date/time fields available.',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'php' => '5.2',
        'files' => 
        array (
          0 => 'date.migrate.inc',
          1 => 'tests/date_api.test',
          2 => 'tests/date.test',
          3 => 'tests/date_field.test',
          4 => 'tests/date_migrate.test',
          5 => 'tests/date_validation.test',
          6 => 'tests/date_timezone.test',
          7 => 'tests/date_views_pager.test',
          8 => 'tests/date_views_popup.test',
        ),
        'version' => '7.x-2.9',
        'project' => 'date',
        'datestamp' => '1441727353',
      ),
      'project' => 'date',
      'version' => '7.x-2.9',
    ),
    'date_all_day' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/date/date_all_day/date_all_day.module',
      'name' => 'date_all_day',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date All Day',
        'description' => 'Adds \'All Day\' functionality to date fields, including an \'All Day\' theme and \'All Day\' checkboxes for the Date select and Date popup widgets.',
        'dependencies' => 
        array (
          0 => 'date_api',
          1 => 'date',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'version' => '7.x-2.9',
        'project' => 'date',
        'datestamp' => '1441727353',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.9',
    ),
    'date_api' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/date/date_api/date_api.module',
      'name' => 'date_api',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date API',
        'description' => 'A Date API that can be used by other modules.',
        'package' => 'Date/Time',
        'core' => '7.x',
        'php' => '5.2',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'date.css',
          ),
        ),
        'files' => 
        array (
          0 => 'date_api.module',
          1 => 'date_api_sql.inc',
        ),
        'version' => '7.x-2.9',
        'project' => 'date',
        'datestamp' => '1441727353',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'date',
      'version' => '7.x-2.9',
    ),
    'date_context' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/date/date_context/date_context.module',
      'name' => 'date_context',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Context',
        'description' => 'Adds an option to the Context module to set a context condition based on the value of a date field.',
        'package' => 'Date/Time',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'date',
          1 => 'context',
        ),
        'files' => 
        array (
          0 => 'date_context.module',
          1 => 'plugins/date_context_date_condition.inc',
        ),
        'version' => '7.x-2.9',
        'project' => 'date',
        'datestamp' => '1441727353',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.9',
    ),
    'date_migrate_example' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/date/date_migrate/date_migrate_example/date_migrate_example.module',
      'name' => 'date_migrate_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'date',
          1 => 'date_repeat',
          2 => 'date_repeat_field',
          3 => 'features',
          4 => 'migrate',
        ),
        'description' => 'Examples of migrating with the Date module',
        'features' => 
        array (
          'field' => 
          array (
            0 => 'node-date_migrate_example-body',
            1 => 'node-date_migrate_example-field_date',
            2 => 'node-date_migrate_example-field_date_range',
            3 => 'node-date_migrate_example-field_date_repeat',
            4 => 'node-date_migrate_example-field_datestamp',
            5 => 'node-date_migrate_example-field_datestamp_range',
            6 => 'node-date_migrate_example-field_datetime',
            7 => 'node-date_migrate_example-field_datetime_range',
          ),
          'node' => 
          array (
            0 => 'date_migrate_example',
          ),
        ),
        'files' => 
        array (
          0 => 'date_migrate_example.migrate.inc',
        ),
        'name' => 'Date Migration Example',
        'package' => 'Features',
        'project' => 'date',
        'version' => '7.x-2.9',
        'datestamp' => '1441727353',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.9',
    ),
    'date_popup' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/date/date_popup/date_popup.module',
      'name' => 'date_popup',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Popup',
        'description' => 'Enables jquery popup calendars and time entry widgets for selecting dates and times.',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'configure' => 'admin/config/date/date_popup',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'themes/datepicker.1.7.css',
          ),
        ),
        'version' => '7.x-2.9',
        'project' => 'date',
        'datestamp' => '1441727353',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.9',
    ),
    'date_repeat' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/date/date_repeat/date_repeat.module',
      'name' => 'date_repeat',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Date Repeat API',
        'description' => 'A Date Repeat API to calculate repeating dates and times from iCal rules.',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'php' => '5.2',
        'files' => 
        array (
          0 => 'tests/date_repeat.test',
          1 => 'tests/date_repeat_form.test',
        ),
        'version' => '7.x-2.9',
        'project' => 'date',
        'datestamp' => '1441727353',
      ),
      'project' => 'date',
      'version' => '7.x-2.9',
    ),
    'date_repeat_field' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/date/date_repeat_field/date_repeat_field.module',
      'name' => 'date_repeat_field',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Repeat Field',
        'description' => 'Creates the option of Repeating date fields and manages Date fields that use the Date Repeat API.',
        'dependencies' => 
        array (
          0 => 'date_api',
          1 => 'date',
          2 => 'date_repeat',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'date_repeat_field.css',
          ),
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'version' => '7.x-2.9',
        'project' => 'date',
        'datestamp' => '1441727353',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.9',
    ),
    'date_tools' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/date/date_tools/date_tools.module',
      'name' => 'date_tools',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Tools',
        'description' => 'Tools to import and auto-create dates and calendars.',
        'dependencies' => 
        array (
          0 => 'date',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'configure' => 'admin/config/date/tools',
        'files' => 
        array (
          0 => 'tests/date_tools.test',
        ),
        'version' => '7.x-2.9',
        'project' => 'date',
        'datestamp' => '1441727353',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.9',
    ),
    'date_views' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/date/date_views/date_views.module',
      'name' => 'date_views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7200',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Views',
        'description' => 'Views integration for date fields and date functionality.',
        'package' => 'Date/Time',
        'dependencies' => 
        array (
          0 => 'date_api',
          1 => 'views',
        ),
        'core' => '7.x',
        'php' => '5.2',
        'files' => 
        array (
          0 => 'includes/date_views_argument_handler.inc',
          1 => 'includes/date_views_argument_handler_simple.inc',
          2 => 'includes/date_views_filter_handler.inc',
          3 => 'includes/date_views_filter_handler_simple.inc',
          4 => 'includes/date_views.views.inc',
          5 => 'includes/date_views_plugin_pager.inc',
        ),
        'version' => '7.x-2.9',
        'project' => 'date',
        'datestamp' => '1441727353',
      ),
      'project' => 'date',
      'version' => '7.x-2.9',
    ),
    'date_ical' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/date_ical/date_ical.module',
      'name' => 'date_ical',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7300',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date iCal',
        'description' => 'Enables export of iCal feeds using Views, and import of iCal feeds using Feeds.',
        'package' => 'Date/Time',
        'php' => '5.3',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views (>=7.x-3.5)',
          1 => 'date_views',
          2 => 'entity',
          3 => 'libraries (>=7.x-2.0)',
          4 => 'date',
          5 => 'date_api',
        ),
        'files' => 
        array (
          0 => 'includes/date_ical_plugin_row_ical_entity.inc',
          1 => 'includes/date_ical_plugin_row_ical_fields.inc',
          2 => 'includes/date_ical_plugin_style_ical_feed.inc',
          3 => 'includes/DateiCalFeedsParser.inc',
        ),
        'version' => '7.x-3.8',
        'project' => 'date_ical',
        'datestamp' => '1448995442',
      ),
      'project' => 'date_ical',
      'version' => '7.x-3.8',
    ),
    'devel' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/devel/devel.module',
      'name' => 'devel',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7006',
      'weight' => '88',
      'info' => 
      array (
        'name' => 'Devel',
        'description' => 'Various blocks, pages, and functions for developers.',
        'package' => 'Development',
        'core' => '7.x',
        'configure' => 'admin/config/development/devel',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'files' => 
        array (
          0 => 'devel.test',
          1 => 'devel.mail.inc',
        ),
        'version' => '7.x-1.5',
        'project' => 'devel',
        'datestamp' => '1398963366',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'devel',
      'version' => '7.x-1.5',
    ),
    'devel_generate' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/devel/devel_generate/devel_generate.module',
      'name' => 'devel_generate',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel generate',
        'description' => 'Generate dummy users, nodes, and taxonomy terms.',
        'package' => 'Development',
        'core' => '7.x',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'configure' => 'admin/config/development/generate',
        'files' => 
        array (
          0 => 'devel_generate.test',
        ),
        'version' => '7.x-1.5',
        'project' => 'devel',
        'datestamp' => '1398963366',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'devel',
      'version' => '7.x-1.5',
    ),
    'devel_node_access' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/devel/devel_node_access.module',
      'name' => 'devel_node_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel node access',
        'description' => 'Developer blocks and page illustrating relevant node_access records.',
        'package' => 'Development',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/development/devel',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'version' => '7.x-1.5',
        'project' => 'devel',
        'datestamp' => '1398963366',
        'php' => '5.2.4',
      ),
      'project' => 'devel',
      'version' => '7.x-1.5',
    ),
    'ds' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/ds/ds.module',
      'name' => 'ds',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7203',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Display Suite',
        'description' => 'Extend the display options for every entity type.',
        'core' => '7.x',
        'package' => 'Display Suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'views/views_plugin_ds_entity_view.inc',
          1 => 'views/views_plugin_ds_fields_view.inc',
          2 => 'tests/ds.base.test',
          3 => 'tests/ds.search.test',
          4 => 'tests/ds.entities.test',
          5 => 'tests/ds.exportables.test',
          6 => 'tests/ds.views.test',
          7 => 'tests/ds.forms.test',
        ),
        'configure' => 'admin/structure/ds',
        'version' => '7.x-2.14',
        'project' => 'ds',
        'datestamp' => '1461696967',
        'php' => '5.2.4',
      ),
      'project' => 'ds',
      'version' => '7.x-2.14',
    ),
    'ds_devel' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/ds/modules/ds_devel/ds_devel.module',
      'name' => 'ds_devel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Display Suite Devel',
        'description' => 'Development functionality for Display Suite.',
        'core' => '7.x',
        'package' => 'Display Suite',
        'dependencies' => 
        array (
          0 => 'ds',
          1 => 'devel',
        ),
        'version' => '7.x-2.14',
        'project' => 'ds',
        'datestamp' => '1461696967',
        'php' => '5.2.4',
      ),
      'project' => 'ds',
      'version' => '7.x-2.14',
    ),
    'ds_extras' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/ds/modules/ds_extras/ds_extras.module',
      'name' => 'ds_extras',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7200',
      'weight' => '2',
      'info' => 
      array (
        'name' => 'Display Suite Extras',
        'description' => 'Contains additional features for Display Suite.',
        'core' => '7.x',
        'package' => 'Display Suite',
        'dependencies' => 
        array (
          0 => 'ds',
        ),
        'configure' => 'admin/structure/ds/list/extras',
        'version' => '7.x-2.14',
        'project' => 'ds',
        'datestamp' => '1461696967',
        'php' => '5.2.4',
      ),
      'project' => 'ds',
      'version' => '7.x-2.14',
    ),
    'ds_format' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/ds/modules/ds_format/ds_format.module',
      'name' => 'ds_format',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Display Suite Format',
        'description' => 'Provides the Display Suite Code format filter.',
        'core' => '7.x',
        'package' => 'Display Suite',
        'dependencies' => 
        array (
          0 => 'ds',
        ),
        'configure' => 'admin/structure/ds/list/extras',
        'version' => '7.x-2.14',
        'project' => 'ds',
        'datestamp' => '1461696967',
        'php' => '5.2.4',
      ),
      'project' => 'ds',
      'version' => '7.x-2.14',
    ),
    'ds_forms' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/ds/modules/ds_forms/ds_forms.module',
      'name' => 'ds_forms',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Display Suite Forms',
        'description' => 'Manage the layout of forms in Display Suite.',
        'core' => '7.x',
        'package' => 'Display Suite',
        'dependencies' => 
        array (
          0 => 'ds',
        ),
        'version' => '7.x-2.14',
        'project' => 'ds',
        'datestamp' => '1461696967',
        'php' => '5.2.4',
      ),
      'project' => 'ds',
      'version' => '7.x-2.14',
    ),
    'ds_search' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/ds/modules/ds_search/ds_search.module',
      'name' => 'ds_search',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Display Suite Search',
        'description' => 'Extend the display options for search results for Drupal Core or Apache Solr.',
        'core' => '7.x',
        'package' => 'Display Suite',
        'dependencies' => 
        array (
          0 => 'ds',
        ),
        'configure' => 'admin/structure/ds/list/search',
        'version' => '7.x-2.14',
        'project' => 'ds',
        'datestamp' => '1461696967',
        'php' => '5.2.4',
      ),
      'project' => 'ds',
      'version' => '7.x-2.14',
    ),
    'ds_ui' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/ds/modules/ds_ui/ds_ui.module',
      'name' => 'ds_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Display Suite UI',
        'description' => 'User interface for managing fields, view modes and classes.',
        'core' => '7.x',
        'package' => 'Display Suite',
        'dependencies' => 
        array (
          0 => 'ds',
        ),
        'version' => '7.x-2.14',
        'project' => 'ds',
        'datestamp' => '1461696967',
        'php' => '5.2.4',
      ),
      'project' => 'ds',
      'version' => '7.x-2.14',
    ),
    'easy_social' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/easy_social/easy_social.module',
      'name' => 'easy_social',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Easy Social',
        'description' => 'Simple module that adds share buttons to nodes. The most common ones are included by defauly and any module can define others.',
        'package' => 'Other',
        'core' => '7.x',
        'configure' => 'admin/config/content/easysocial',
        'tags' => 
        array (
          0 => 'social',
          1 => 'share',
        ),
        'dependencies' => 
        array (
          0 => 'variable',
        ),
        'files' => 
        array (
          0 => 'views/easy_social_handler_field.inc',
        ),
        'version' => '7.x-2.12',
        'project' => 'easy_social',
        'datestamp' => '1439585340',
        'php' => '5.2.4',
      ),
      'project' => 'easy_social',
      'version' => '7.x-2.12',
    ),
    'elfinder' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/elfinder/elfinder.module',
      'name' => 'elfinder',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'elFinder',
        'description' => 'AJAX file manager with Wysiwyg API capable editors support.',
        'package' => 'User interface',
        'configure' => 'admin/config/elfinder',
        'core' => '7.x',
        'version' => '7.x-0.8',
        'project' => 'elfinder',
        'datestamp' => '1366140883',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'elfinder',
      'version' => '7.x-0.8',
    ),
    'elfinder_bueditor' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/elfinder/modules/elfinder_bueditor/elfinder_bueditor.module',
      'name' => 'elfinder_bueditor',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'elFinder BUEditor integration',
        'description' => 'Adding elFinder to BUEditor Insert Image dialog',
        'package' => 'User interface',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'bueditor',
          1 => 'elfinder',
        ),
        'version' => '7.x-0.8',
        'project' => 'elfinder',
        'datestamp' => '1366140883',
        'php' => '5.2.4',
      ),
      'project' => 'elfinder',
      'version' => '7.x-0.8',
    ),
    'elfinder_ffsel' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/elfinder/modules/elfinder_ffsel/elfinder_ffsel.module',
      'name' => 'elfinder_ffsel',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'elFinder File Field Source',
        'description' => 'File Field Sources elFinder connector',
        'package' => 'User interface',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'filefield_sources',
          1 => 'elfinder',
        ),
        'version' => '7.x-0.8',
        'project' => 'elfinder',
        'datestamp' => '1366140883',
        'php' => '5.2.4',
      ),
      'project' => 'elfinder',
      'version' => '7.x-0.8',
    ),
    'email' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/email/email.module',
      'name' => 'email',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Email',
        'description' => 'Defines an email field type.',
        'core' => '7.x',
        'package' => 'Fields',
        'files' => 
        array (
          0 => 'email.migrate.inc',
        ),
        'version' => '7.x-1.3',
        'project' => 'email',
        'datestamp' => '1397134155',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'email',
      'version' => '7.x-1.3',
    ),
    'entity' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/entity/entity.module',
      'name' => 'entity',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity API',
        'description' => 'Enables modules to work with any entity type and to provide entities.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'entity.features.inc',
          1 => 'entity.i18n.inc',
          2 => 'entity.info.inc',
          3 => 'entity.rules.inc',
          4 => 'entity.test',
          5 => 'includes/entity.inc',
          6 => 'includes/entity.controller.inc',
          7 => 'includes/entity.ui.inc',
          8 => 'includes/entity.wrapper.inc',
          9 => 'views/entity.views.inc',
          10 => 'views/handlers/entity_views_field_handler_helper.inc',
          11 => 'views/handlers/entity_views_handler_area_entity.inc',
          12 => 'views/handlers/entity_views_handler_field_boolean.inc',
          13 => 'views/handlers/entity_views_handler_field_date.inc',
          14 => 'views/handlers/entity_views_handler_field_duration.inc',
          15 => 'views/handlers/entity_views_handler_field_entity.inc',
          16 => 'views/handlers/entity_views_handler_field_field.inc',
          17 => 'views/handlers/entity_views_handler_field_numeric.inc',
          18 => 'views/handlers/entity_views_handler_field_options.inc',
          19 => 'views/handlers/entity_views_handler_field_text.inc',
          20 => 'views/handlers/entity_views_handler_field_uri.inc',
          21 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
          22 => 'views/handlers/entity_views_handler_relationship.inc',
          23 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
        ),
        'version' => '7.x-1.7',
        'project' => 'entity',
        'datestamp' => '1458222244',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'entity',
      'version' => '7.x-1.7',
    ),
    'entity_token' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/entity/entity_token.module',
      'name' => 'entity_token',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity tokens',
        'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'entity_token.tokens.inc',
          1 => 'entity_token.module',
        ),
        'dependencies' => 
        array (
          0 => 'entity',
        ),
        'version' => '7.x-1.7',
        'project' => 'entity',
        'datestamp' => '1458222244',
        'php' => '5.2.4',
      ),
      'project' => 'entity',
      'version' => '7.x-1.7',
    ),
    'extended_file_field' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016',
      'name' => 'extended_file_field',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'facetapi_ranges' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016',
      'name' => 'facetapi_ranges',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'features' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/features/features.module',
      'name' => 'features',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7200',
      'weight' => '20',
      'info' => 
      array (
        'name' => 'Features',
        'description' => 'Provides feature management for Drupal.',
        'core' => '7.x',
        'package' => 'Features',
        'files' => 
        array (
          0 => 'tests/features.test',
        ),
        'test_dependencies' => 
        array (
          0 => 'image',
          1 => 'strongarm',
          2 => 'taxonomy',
          3 => 'views',
        ),
        'configure' => 'admin/structure/features/settings',
        'version' => '7.x-2.10',
        'project' => 'features',
        'datestamp' => '1461011641',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'features',
      'version' => '7.x-2.10',
    ),
    'fe_block' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/features_extra/fe_block.module',
      'name' => 'fe_block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FE Block',
        'description' => 'Build blocks and block settings as features.',
        'core' => '7.x',
        'package' => 'Features extra',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'ctools',
          2 => 'features',
        ),
        'test_dependencies' => 
        array (
          0 => 'block_class',
          1 => 'blockcache_alter',
        ),
        'files' => 
        array (
          0 => 'tests/features_extra_test_case.test',
          1 => 'tests/fe_block.test',
        ),
        'version' => '7.x-1.0',
        'project' => 'features_extra',
        'datestamp' => '1439376840',
        'php' => '5.2.4',
      ),
      'project' => 'features_extra',
      'version' => '7.x-1.0',
    ),
    'fe_date' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/features_extra/fe_date.module',
      'name' => 'fe_date',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FE Date',
        'description' => 'Build date format as features.',
        'core' => '7.x',
        'package' => 'Features extra',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'features',
        ),
        'version' => '7.x-1.0',
        'project' => 'features_extra',
        'datestamp' => '1439376840',
        'php' => '5.2.4',
      ),
      'project' => 'features_extra',
      'version' => '7.x-1.0',
    ),
    'fe_nodequeue' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/features_extra/fe_nodequeue.module',
      'name' => 'fe_nodequeue',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FE Nodequeue',
        'description' => 'Build nodequeues as features.',
        'core' => '7.x',
        'package' => 'Features extra',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'features',
          2 => 'nodequeue',
        ),
        'files' => 
        array (
          0 => 'tests/features_extra_test_case.test',
          1 => 'tests/fe_nodequeue.test',
        ),
        'version' => '7.x-1.0',
        'project' => 'features_extra',
        'datestamp' => '1439376840',
        'php' => '5.2.4',
      ),
      'project' => 'features_extra',
      'version' => '7.x-1.0',
    ),
    'fe_profile' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/features_extra/fe_profile.module',
      'name' => 'fe_profile',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FE Profile',
        'description' => 'Export profile field using features.',
        'core' => '7.x',
        'package' => 'Features extra',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'features',
          2 => 'profile',
        ),
        'version' => '7.x-1.0',
        'project' => 'features_extra',
        'datestamp' => '1439376840',
        'php' => '5.2.4',
      ),
      'project' => 'features_extra',
      'version' => '7.x-1.0',
    ),
    'features_extra_test' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/features_extra/tests/features_extra_test.module',
      'name' => 'features_extra_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Features Extra test feature',
        'description' => 'Test feature for Features Extra.',
        'core' => '7.x',
        'package' => 'Testing',
        'php' => '5.2.4',
        'dependencies' => 
        array (
          0 => 'block_class',
          1 => 'blockcache_alter',
          2 => 'fe_block',
          3 => 'fe_nodequeue',
        ),
        'features' => 
        array (
          'fe_block_boxes' => 
          array (
            0 => 'features_extra_test_block',
          ),
          'fe_block_settings' => 
          array (
            0 => 'block-features_extra_test_block',
          ),
          'fe_nodequeue' => 
          array (
            0 => 'features_extra_test_nodequeue',
          ),
          'features_api' => 
          array (
            0 => 'api:1',
          ),
        ),
        'version' => '7.x-1.0',
        'project' => 'features_extra',
        'datestamp' => '1439376840',
      ),
      'project' => 'features_extra',
      'version' => '7.x-1.0',
    ),
    'feeds' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/feeds/feeds.module',
      'name' => 'feeds',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7212',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Feeds',
        'description' => 'Aggregates RSS/Atom/RDF feeds, imports CSV files and more.',
        'package' => 'Feeds',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'job_scheduler',
        ),
        'test_dependencies' => 
        array (
          0 => 'date:date',
          1 => 'entity_translation:entity_translation',
          2 => 'feeds_xpathparser:feeds_xpathparser',
          3 => 'link:link',
          4 => 'i18n:i18n_taxonomy',
        ),
        'files' => 
        array (
          0 => 'includes/FeedsConfigurable.inc',
          1 => 'includes/FeedsImporter.inc',
          2 => 'includes/FeedsSource.inc',
          3 => 'libraries/ParserCSV.inc',
          4 => 'libraries/http_request.inc',
          5 => 'libraries/PuSHSubscriber.inc',
          6 => 'plugins/FeedsCSVParser.inc',
          7 => 'plugins/FeedsFetcher.inc',
          8 => 'plugins/FeedsFileFetcher.inc',
          9 => 'plugins/FeedsHTTPFetcher.inc',
          10 => 'plugins/FeedsNodeProcessor.inc',
          11 => 'plugins/FeedsOPMLParser.inc',
          12 => 'plugins/FeedsParser.inc',
          13 => 'plugins/FeedsPlugin.inc',
          14 => 'plugins/FeedsProcessor.inc',
          15 => 'plugins/FeedsSimplePieParser.inc',
          16 => 'plugins/FeedsSitemapParser.inc',
          17 => 'plugins/FeedsSyndicationParser.inc',
          18 => 'plugins/FeedsTermProcessor.inc',
          19 => 'plugins/FeedsUserProcessor.inc',
          20 => 'tests/feeds.test',
          21 => 'tests/common_syndication_parser.test',
          22 => 'tests/feeds_content_type.test',
          23 => 'tests/feeds_date_time.test',
          24 => 'tests/feeds_mapper_date.test',
          25 => 'tests/feeds_mapper_date_multiple.test',
          26 => 'tests/feeds_mapper_field.test',
          27 => 'tests/feeds_mapper_file.test',
          28 => 'tests/feeds_mapper_hooks.test',
          29 => 'tests/feeds_mapper_link.test',
          30 => 'tests/feeds_mapper_list.test',
          31 => 'tests/feeds_mapper_multilingual_fields.test',
          32 => 'tests/feeds_mapper_path.test',
          33 => 'tests/feeds_mapper_profile.test',
          34 => 'tests/feeds_mapper_unique.test',
          35 => 'tests/feeds_mapper.test',
          36 => 'tests/feeds_mapper_config.test',
          37 => 'tests/feeds_fetcher_file.test',
          38 => 'tests/feeds_mapper_format_config.test',
          39 => 'tests/feeds_fetcher_http.test',
          40 => 'tests/feeds_i18n.test',
          41 => 'tests/feeds_i18n_node.test',
          42 => 'tests/feeds_i18n_taxonomy.test',
          43 => 'tests/feeds_parser_csv.test',
          44 => 'tests/feeds_parser_sitemap.test',
          45 => 'tests/feeds_parser_syndication.test',
          46 => 'tests/feeds_processor_node.test',
          47 => 'tests/feeds_processor_term.test',
          48 => 'tests/feeds_processor_user.test',
          49 => 'tests/feeds_push.test',
          50 => 'tests/feeds_scheduler.test',
          51 => 'tests/feeds_mapper_link.test',
          52 => 'tests/feeds_mapper_summary.test',
          53 => 'tests/feeds_mapper_taxonomy.test',
          54 => 'tests/http_request.test',
          55 => 'tests/parser_csv.test',
          56 => 'views/feeds_views_handler_argument_importer_id.inc',
          57 => 'views/feeds_views_handler_field_importer_name.inc',
          58 => 'views/feeds_views_handler_field_log_message.inc',
          59 => 'views/feeds_views_handler_field_severity.inc',
          60 => 'views/feeds_views_handler_field_source.inc',
          61 => 'views/feeds_views_handler_filter_severity.inc',
          62 => 'views/feeds_views_plugin_argument_validate_feed_nid.inc',
        ),
        'version' => '7.x-2.0-beta2+17-dev',
        'project' => 'feeds',
        'datestamp' => '1464629053',
        'php' => '5.2.4',
      ),
      'project' => 'feeds',
      'version' => '7.x-2.0-beta2+17-dev',
    ),
    'feeds_import' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/feeds/feeds_import/feeds_import.module',
      'name' => 'feeds_import',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Feeds Import',
        'description' => 'An example of a node importer and a user importer.',
        'core' => '7.x',
        'package' => 'Feeds',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'feeds',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'feeds:feeds_importer_default:1',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'feeds_importer' => 
          array (
            0 => 'node',
            1 => 'user',
          ),
        ),
        'files' => 
        array (
          0 => 'feeds_import.test',
        ),
        'version' => '7.x-2.0-beta2+17-dev',
        'project' => 'feeds',
        'datestamp' => '1464629053',
        'php' => '5.2.4',
      ),
      'project' => 'feeds',
      'version' => '7.x-2.0-beta2+17-dev',
    ),
    'feeds_news' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/feeds/feeds_news/feeds_news.module',
      'name' => 'feeds_news',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Feeds News',
        'description' => 'A news aggregator built with feeds, creates nodes from imported feed items. With OPML import.',
        'core' => '7.x',
        'package' => 'Feeds',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'features',
          2 => 'feeds',
          3 => 'views',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'feeds:feeds_importer_default:1',
            1 => 'views:views_default:3.0',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'feeds_importer' => 
          array (
            0 => 'feed',
            1 => 'opml',
          ),
          'field_base' => 
          array (
            0 => 'field_feed_item_description',
          ),
          'field_instance' => 
          array (
            0 => 'node-feed_item-field_feed_item_description',
          ),
          'node' => 
          array (
            0 => 'feed',
            1 => 'feed_item',
          ),
          'views_view' => 
          array (
            0 => 'feeds_defaults_feed_items',
          ),
        ),
        'files' => 
        array (
          0 => 'feeds_news.module',
          1 => 'feeds_news.test',
        ),
        'version' => '7.x-2.0-beta2+17-dev',
        'project' => 'feeds',
        'datestamp' => '1464629053',
        'php' => '5.2.4',
      ),
      'project' => 'feeds',
      'version' => '7.x-2.0-beta2+17-dev',
    ),
    'feeds_ui' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/feeds/feeds_ui/feeds_ui.module',
      'name' => 'feeds_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Feeds Admin UI',
        'description' => 'Administrative UI for Feeds module.',
        'package' => 'Feeds',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'feeds',
        ),
        'configure' => 'admin/structure/feeds',
        'files' => 
        array (
          0 => 'feeds_ui.test',
        ),
        'version' => '7.x-2.0-beta2+17-dev',
        'project' => 'feeds',
        'datestamp' => '1464629053',
        'php' => '5.2.4',
      ),
      'project' => 'feeds',
      'version' => '7.x-2.0-beta2+17-dev',
    ),
    'feeds_jsonpath_parser' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/feeds_jsonpath_parser/feeds_jsonpath_parser.module',
      'name' => 'feeds_jsonpath_parser',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'JSONPath Parser',
        'description' => 'Parse a JSON document using JSONPath.',
        'files' => 
        array (
          0 => 'tests/feeds_jsonpath_parser.test',
          1 => 'FeedsJSONPathParser.inc',
        ),
        'package' => 'Feeds',
        'dependencies' => 
        array (
          0 => 'feeds',
        ),
        'core' => '7.x',
        'version' => '7.x-1.0',
        'project' => 'feeds_jsonpath_parser',
        'datestamp' => '1435272784',
        'php' => '5.2.4',
      ),
      'project' => 'feeds_jsonpath_parser',
      'version' => '7.x-1.0',
    ),
    'feeds_tamper' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/feeds_tamper/feeds_tamper.module',
      'name' => 'feeds_tamper',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Feeds Tamper',
        'description' => 'Modify feeds data before it gets saved.',
        'package' => 'Feeds',
        'dependencies' => 
        array (
          0 => 'feeds',
        ),
        'files' => 
        array (
          0 => 'tests/feeds_tamper.test',
          1 => 'tests/feeds_tamper_plugins.test',
          2 => 'tests/feeds_tamper_efq_finder.test',
        ),
        'core' => '7.x',
        'version' => '7.x-1.1',
        'project' => 'feeds_tamper',
        'datestamp' => '1433291282',
        'php' => '5.2.4',
      ),
      'project' => 'feeds_tamper',
      'version' => '7.x-1.1',
    ),
    'feeds_tamper_ui' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/feeds_tamper/feeds_tamper_ui/feeds_tamper_ui.module',
      'name' => 'feeds_tamper_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Feeds Tamper Admin UI',
        'description' => 'Administrative UI for Feeds Tamper module.',
        'package' => 'Feeds',
        'dependencies' => 
        array (
          0 => 'feeds_tamper',
          1 => 'feeds_ui',
        ),
        'files' => 
        array (
          0 => 'tests/feeds_tamper_ui.test',
        ),
        'core' => '7.x',
        'version' => '7.x-1.1',
        'project' => 'feeds_tamper',
        'datestamp' => '1433291282',
        'php' => '5.2.4',
      ),
      'project' => 'feeds_tamper',
      'version' => '7.x-1.1',
    ),
    'field_collection' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/field_collection/field_collection.module',
      'name' => 'field_collection',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field collection',
        'description' => 'Provides a field collection field, to which any number of fields can be attached.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'entity',
        ),
        'files' => 
        array (
          0 => 'field_collection.test',
          1 => 'field_collection.info.inc',
          2 => 'views/field_collection_handler_relationship.inc',
          3 => 'field_collection.migrate.inc',
        ),
        'configure' => 'admin/structure/field-collections',
        'package' => 'Fields',
        'version' => '7.x-1.0-beta8',
        'project' => 'field_collection',
        'datestamp' => '1415122384',
        'php' => '5.2.4',
      ),
      'project' => 'field_collection',
      'version' => '7.x-1.0-beta8',
    ),
    'field_group' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/field_group/field_group.module',
      'name' => 'field_group',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7008',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Field Group',
        'description' => 'Provides the ability to group your fields on both form and display.',
        'package' => 'Fields',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'ctools',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/field_group.ui.test',
          1 => 'tests/field_group.display.test',
        ),
        'version' => '7.x-1.5',
        'project' => 'field_group',
        'datestamp' => '1452033709',
        'php' => '5.2.4',
      ),
      'project' => 'field_group',
      'version' => '7.x-1.5',
    ),
    'field_reference' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/field_reference/field_reference.module',
      'name' => 'field_reference',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field reference',
        'description' => 'Defines a field type for referencing a field from another.',
        'package' => 'Fields',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'entity',
          1 => 'field',
          2 => 'references',
          3 => 'options',
        ),
        'version' => '7.x-1.0',
        'project' => 'field_reference',
        'datestamp' => '1345432353',
        'php' => '5.2.4',
      ),
      'project' => 'field_reference',
      'version' => '7.x-1.0',
    ),
    'filefield_sources' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/filefield_sources/filefield_sources.module',
      'name' => 'filefield_sources',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '5',
      'info' => 
      array (
        'name' => 'File Field Sources',
        'description' => 'Extends File fields to allow referencing of existing files, remote files, and server files.',
        'dependencies' => 
        array (
          0 => 'file',
          1 => 'system (>=7.36)',
        ),
        'package' => 'Fields',
        'core' => '7.x',
        'version' => '7.x-1.10+2-dev',
        'project' => 'filefield_sources',
        'datestamp' => '1440496740',
        'php' => '5.2.4',
      ),
      'project' => 'filefield_sources',
      'version' => '7.x-1.10+2-dev',
    ),
    'file_entity' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/file_entity/file_entity.module',
      'name' => 'file_entity',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7216',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File Entity',
        'description' => 'Extends Drupal file entities to be fieldable and viewable.',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'file',
          2 => 'ctools',
          3 => 'system (>=7.33)',
        ),
        'test_dependencies' => 
        array (
          0 => 'token',
        ),
        'files' => 
        array (
          0 => 'views/views_handler_argument_file_type.inc',
          1 => 'views/views_handler_field_file_rendered.inc',
          2 => 'views/views_handler_field_file_type.inc',
          3 => 'views/views_handler_filter_file_type.inc',
          4 => 'views/views_handler_filter_schema_type.inc',
          5 => 'views/views_handler_field_file_filename.inc',
          6 => 'views/views_handler_field_file_link.inc',
          7 => 'views/views_handler_field_file_link_edit.inc',
          8 => 'views/views_handler_field_file_link_delete.inc',
          9 => 'views/views_handler_field_file_link_download.inc',
          10 => 'views/views_handler_field_file_link_usage.inc',
          11 => 'views/views_plugin_row_file_rss.inc',
          12 => 'views/views_plugin_row_file_view.inc',
          13 => 'file_entity.test',
        ),
        'configure' => 'admin/config/media/file-settings',
        'version' => '7.x-2.0-beta3',
        'project' => 'file_entity',
        'datestamp' => '1464653173',
        'php' => '5.2.4',
      ),
      'project' => 'file_entity',
      'version' => '7.x-2.0-beta3',
    ),
    'flexslider' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/flexslider/flexslider.module',
      'name' => 'flexslider',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7202',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FlexSlider',
        'description' => 'Integrate the FlexSlider 2 library with Drupal',
        'core' => '7.x',
        'package' => 'FlexSlider',
        'dependencies' => 
        array (
          0 => 'libraries (>=2.x)',
          1 => 'ctools',
          2 => 'image',
        ),
        'files' => 
        array (
          0 => 'theme/flexslider.theme.inc',
          1 => 'flexslider.test',
        ),
        'configure' => 'admin/config/media/flexslider',
        'version' => '7.x-2.0-rc1',
        'project' => 'flexslider',
        'datestamp' => '1438285141',
        'php' => '5.2.4',
      ),
      'project' => 'flexslider',
      'version' => '7.x-2.0-rc1',
    ),
    'flexslider_example' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/flexslider/flexslider_example/flexslider_example.module',
      'name' => 'flexslider_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FlexSlider Example',
        'description' => 'Sample implementation of FlexSlider',
        'core' => '7.x',
        'package' => 'FlexSlider',
        'php' => '5.2.4',
        'dependencies' => 
        array (
          0 => 'context',
          1 => 'features',
          2 => 'flexslider',
          3 => 'flexslider_fields',
          4 => 'flexslider_views',
          5 => 'image',
          6 => 'menu',
          7 => 'strongarm',
          8 => 'views',
        ),
        'features' => 
        array (
          'context' => 
          array (
            0 => 'flexslider_example_thumbnail',
          ),
          'ctools' => 
          array (
            0 => 'context:context:3',
            1 => 'flexslider:flexslider_default_preset:1',
            2 => 'strongarm:strongarm:1',
            3 => 'views:views_default:3.0',
          ),
          'features_api' => 
          array (
            0 => 'api:1',
          ),
          'field' => 
          array (
            0 => 'node-flexslider_example-field_flexslider_example_image',
            1 => 'node-flexslider_example-field_flexslider_example_slidesh',
          ),
          'flexslider_optionset' => 
          array (
            0 => 'flexslider_carousel_with_min_and_max_ranges',
            1 => 'flexslider_default_basic_carousel',
            2 => 'flexslider_default_slider_thumbnail_controlnav',
            3 => 'flexslider_default_slider_w_thumbnail_slider',
            4 => 'flexslider_default_thumbnail_captions',
            5 => 'flexslider_default_thumbnail_slider',
          ),
          'menu_custom' => 
          array (
            0 => 'menu-flexslider-example',
          ),
          'node' => 
          array (
            0 => 'flexslider_example',
          ),
          'variable' => 
          array (
            0 => 'field_bundle_settings_node__flexslider_example',
          ),
          'views_view' => 
          array (
            0 => 'flexslider_views_example',
          ),
        ),
        'version' => '7.x-2.0-rc1',
        'project' => 'flexslider',
        'datestamp' => '1438285141',
      ),
      'project' => 'flexslider',
      'version' => '7.x-2.0-rc1',
    ),
    'flexslider_fields' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/flexslider/flexslider_fields/flexslider_fields.module',
      'name' => 'flexslider_fields',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FlexSlider Fields',
        'description' => 'Adds a display mode in Fields for FlexSlider',
        'core' => '7.x',
        'package' => 'FlexSlider',
        'dependencies' => 
        array (
          0 => 'flexslider',
        ),
        'version' => '7.x-2.0-rc1',
        'project' => 'flexslider',
        'datestamp' => '1438285141',
        'php' => '5.2.4',
      ),
      'project' => 'flexslider',
      'version' => '7.x-2.0-rc1',
    ),
    'flexslider_views' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/flexslider/flexslider_views/flexslider_views.module',
      'name' => 'flexslider_views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FlexSlider Views Style',
        'description' => 'Adds a Views style plugin for FlexSlider',
        'core' => '7.x',
        'package' => 'FlexSlider',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'flexslider',
        ),
        'files' => 
        array (
          0 => 'flexslider_views.module',
          1 => 'flexslider_views.views.inc',
          2 => 'flexslider_views_plugin_style_flexslider.inc',
        ),
        'version' => '7.x-2.0-rc1',
        'project' => 'flexslider',
        'datestamp' => '1438285141',
        'php' => '5.2.4',
      ),
      'project' => 'flexslider',
      'version' => '7.x-2.0-rc1',
    ),
    'force_password_change' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/force_password_change/force_password_change.module',
      'name' => 'force_password_change',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Force Password Change',
        'description' => 'Allows administrators to force users to change their password',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'force_password_change.install',
          1 => 'force_password_change.module',
          2 => 'force_password_change.pages.inc',
        ),
        'version' => '7.x-1.0',
        'project' => 'force_password_change',
        'datestamp' => '1449157452',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'force_password_change',
      'version' => '7.x-1.0',
    ),
    'googleanalytics' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/google_analytics/googleanalytics.module',
      'name' => 'googleanalytics',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7205',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Google Analytics',
        'description' => 'Allows your site to be tracked by Google Analytics by adding a Javascript tracking code to every page.',
        'core' => '7.x',
        'package' => 'Statistics',
        'configure' => 'admin/config/system/googleanalytics',
        'files' => 
        array (
          0 => 'googleanalytics.test',
        ),
        'test_dependencies' => 
        array (
          0 => 'token',
        ),
        'version' => '7.x-2.2',
        'project' => 'google_analytics',
        'datestamp' => '1461443643',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'google_analytics',
      'version' => '7.x-2.2',
    ),
    'image_style_quality' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/image_style_quality/image_style_quality.module',
      'name' => 'image_style_quality',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image Style Quality',
        'description' => 'Provides a way of specifying custom image quality for different image styles.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'image',
        ),
        'version' => '7.x-1.5',
        'project' => 'image_style_quality',
        'datestamp' => '1411962261',
        'php' => '5.2.4',
      ),
      'project' => 'image_style_quality',
      'version' => '7.x-1.5',
    ),
    'imce' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/imce/imce.module',
      'name' => 'imce',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IMCE',
        'description' => 'An image/file uploader and browser supporting personal directories and user quota.',
        'core' => '7.x',
        'package' => 'Media',
        'configure' => 'admin/config/media/imce',
        'version' => '7.x-1.10',
        'project' => 'imce',
        'datestamp' => '1459346870',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'imce',
      'version' => '7.x-1.10',
    ),
    'imce_plupload' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/imce_plupload/imce_plupload.module',
      'name' => 'imce_plupload',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IMCE plupload',
        'description' => 'Integrate plupload with IMCE to enable multi-file uploads.',
        'dependencies' => 
        array (
          0 => 'imce',
          1 => 'plupload',
        ),
        'package' => 'Media',
        'core' => '7.x',
        'version' => '7.x-2.0',
        'project' => 'imce_plupload',
        'datestamp' => '1451136241',
        'php' => '5.2.4',
      ),
      'project' => 'imce_plupload',
      'version' => '7.x-2.0',
    ),
    'job_scheduler' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/job_scheduler/job_scheduler.module',
      'name' => 'job_scheduler',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7101',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Job Scheduler',
        'description' => 'Scheduler API',
        'files' => 
        array (
          0 => 'job_scheduler.module',
          1 => 'job_scheduler.install',
          2 => 'JobScheduler.inc',
          3 => 'JobSchedulerCronTab.inc',
        ),
        'core' => '7.x',
        'php' => '5.2',
        'version' => '7.x-2.0-alpha3',
        'project' => 'job_scheduler',
        'datestamp' => '1336466457',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'job_scheduler',
      'version' => '7.x-2.0-alpha3',
    ),
    'job_scheduler_trigger' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/job_scheduler/modules/job_scheduler_trigger/job_scheduler_trigger.module',
      'name' => 'job_scheduler_trigger',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Job Scheduler Trigger',
        'description' => 'Creates scheduler triggers that fire up at certain days, times',
        'core' => '7.x',
        'php' => '5.2',
        'dependencies' => 
        array (
          0 => 'job_scheduler',
        ),
        'version' => '7.x-2.0-alpha3',
        'project' => 'job_scheduler',
        'datestamp' => '1336466457',
      ),
      'project' => 'job_scheduler',
      'version' => '7.x-2.0-alpha3',
    ),
    'jquery_update' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/jquery_update/jquery_update.module',
      'name' => 'jquery_update',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'jQuery Update',
        'description' => 'Update jQuery and jQuery UI to a more recent version.',
        'package' => 'User interface',
        'core' => '7.x',
        'configure' => 'admin/config/development/jquery_update',
        'version' => '7.x-3.0-alpha3',
        'project' => 'jquery_update',
        'datestamp' => '1445382241',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'jquery_update',
      'version' => '7.x-3.0-alpha3',
    ),
    'libraries' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/libraries/libraries.module',
      'name' => 'libraries',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7201',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Libraries',
        'description' => 'Allows version-dependent and shared usage of external libraries.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'system (>=7.11)',
        ),
        'files' => 
        array (
          0 => 'tests/LibrariesAdminWebTest.test',
          1 => 'tests/LibrariesLoadWebTest.test',
          2 => 'tests/LibrariesUnitTest.test',
          3 => 'tests/LibrariesWebTestBase.test',
        ),
        'version' => '7.x-2.3',
        'project' => 'libraries',
        'datestamp' => '1463077450',
        'php' => '5.2.4',
      ),
      'project' => 'libraries',
      'version' => '7.x-2.3',
    ),
    'link' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/link/link.module',
      'name' => 'link',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Link',
        'description' => 'Defines simple link field types.',
        'core' => '7.x',
        'package' => 'Fields',
        'files' => 
        array (
          0 => 'link.module',
          1 => 'link.migrate.inc',
          2 => 'tests/link.test',
          3 => 'tests/link.attribute.test',
          4 => 'tests/link.crud.test',
          5 => 'tests/link.crud_browser.test',
          6 => 'tests/link.token.test',
          7 => 'tests/link.entity_token.test',
          8 => 'tests/link.validate.test',
          9 => 'views/link_views_handler_argument_target.inc',
          10 => 'views/link_views_handler_filter_protocol.inc',
        ),
        'version' => '7.x-1.4',
        'project' => 'link',
        'datestamp' => '1452830642',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'link',
      'version' => '7.x-1.4',
    ),
    'linkchecker' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/linkchecker/linkchecker.module',
      'name' => 'linkchecker',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7011',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Link checker',
        'description' => 'Periodically checks for broken links in node types, blocks and fields and reports the results.',
        'configure' => 'admin/config/content/linkchecker',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'linkchecker.drush.inc',
          1 => 'linkchecker.test',
        ),
        'version' => '7.x-1.2',
        'project' => 'linkchecker',
        'datestamp' => '1402132428',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'linkchecker',
      'version' => '7.x-1.2',
    ),
    'link_css' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/link_css/link_css.module',
      'name' => 'link_css',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Link CSS',
        'description' => 'Include CSS files using <link> element instead of @import.',
        'core' => '7.x',
        'package' => 'Development',
        'configure' => 'admin/config/development/link-css',
        'version' => '7.x-1.1',
        'project' => 'link_css',
        'datestamp' => '1444715641',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'link_css',
      'version' => '7.x-1.1',
    ),
    'markdown' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016',
      'name' => 'markdown',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'match_redirect' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016',
      'name' => 'match_redirect',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'mediafront' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/mediafront/mediafront.module',
      'name' => 'mediafront',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'MediaFront',
        'description' => 'A front end media solution for Drupal.',
        'package' => 'MediaFront',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'mediafront.module',
          1 => 'mediafront.install',
          2 => 'mediafront.admin.inc',
          3 => 'MediaFile.php',
          4 => 'includes/mediafront.features.inc',
          5 => 'includes/mediafront.field.inc',
          6 => 'includes/mediafront.preset.inc',
          7 => 'views/mediafront.views.inc',
          8 => 'views/mediafront_plugin_style_player.inc',
          9 => 'views/mediafront_handler_area_player.inc',
        ),
        'required' => false,
        'configure' => 'admin/structure/mediafront',
        'version' => '7.x-2.2',
        'project' => 'mediafront',
        'datestamp' => '1379103236',
        'php' => '5.2.4',
      ),
      'project' => 'mediafront',
      'version' => '7.x-2.2',
    ),
    'mediafront_kaltura' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/mediafront/modules/mediafront_kaltura/mediafront_kaltura.module',
      'name' => 'mediafront_kaltura',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'MediaFront Kaltura',
        'description' => 'This adds MediaFront support to the Kaltura module.',
        'core' => '7.x',
        'package' => 'MediaFront',
        'php' => '5.2.4',
        'dependencies' => 
        array (
          0 => 'mediafront',
          1 => 'osmplayer',
          2 => 'field_kaltura',
        ),
        'version' => '7.x-2.2',
        'project' => 'mediafront',
        'datestamp' => '1379103236',
      ),
      'project' => 'mediafront',
      'version' => '7.x-2.2',
    ),
    'mediafront_youtube' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/mediafront/modules/mediafront_youtube/mediafront_youtube.module',
      'name' => 'mediafront_youtube',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'MediaFront: YouTube Playlist Feeds',
        'description' => 'A feature module which provides MediaFront integration with YouTube Playlist Feeds',
        'core' => '7.x',
        'package' => 'MediaFront',
        'php' => '5.2.4',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'features',
          2 => 'feeds',
          3 => 'feeds_tamper',
          4 => 'feeds_tamper_ui',
          5 => 'feeds_ui',
          6 => 'feeds_xpathparser',
          7 => 'feeds_youtube_fetcher',
          8 => 'image',
          9 => 'mediafront',
          10 => 'osmplayer',
          11 => 'strongarm',
          12 => 'taxonomy',
          13 => 'views',
          14 => 'views_ui',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'feeds:feeds_importer_default:1',
            1 => 'feeds_tamper:feeds_tamper_default:2',
            2 => 'strongarm:strongarm:1',
            3 => 'views:views_default:3.0',
          ),
          'features_api' => 
          array (
            0 => 'api:1',
          ),
          'feeds_importer' => 
          array (
            0 => 'youtube_importer',
          ),
          'feeds_tamper' => 
          array (
            0 => 'youtube_importer-xpathparser_7-explode',
            1 => 'youtube_importer-xpathparser_8-string_to_unix_timestamp',
          ),
          'field' => 
          array (
            0 => 'node-youtube_channel-body',
            1 => 'node-youtube_media-body',
            2 => 'node-youtube_media-field_youtube_category',
            3 => 'node-youtube_media-field_youtube_keywords',
            4 => 'node-youtube_media-field_youtube_poster',
            5 => 'node-youtube_media-field_youtube_thumb',
            6 => 'node-youtube_media-field_youtube_url',
          ),
          'mediafront' => 
          array (
            0 => 'youtube_landing',
            1 => 'youtube_nodeplayer',
            2 => 'youtube_player',
          ),
          'mediafront_views' => 
          array (
            0 => 'youtube_media',
          ),
          'node' => 
          array (
            0 => 'youtube_channel',
            1 => 'youtube_media',
          ),
          'taxonomy' => 
          array (
            0 => 'youtube_category',
            1 => 'youtube_keywords',
          ),
          'variable' => 
          array (
            0 => 'comment_anonymous_youtube_channel',
            1 => 'comment_anonymous_youtube_media',
            2 => 'comment_default_mode_youtube_channel',
            3 => 'comment_default_mode_youtube_media',
            4 => 'comment_default_per_page_youtube_channel',
            5 => 'comment_default_per_page_youtube_media',
            6 => 'comment_form_location_youtube_channel',
            7 => 'comment_form_location_youtube_media',
            8 => 'comment_preview_youtube_channel',
            9 => 'comment_preview_youtube_media',
            10 => 'comment_subject_field_youtube_channel',
            11 => 'comment_subject_field_youtube_media',
            12 => 'comment_youtube_channel',
            13 => 'comment_youtube_media',
            14 => 'field_bundle_settings_node__youtube_media',
            15 => 'menu_options_youtube_channel',
            16 => 'menu_options_youtube_media',
            17 => 'menu_parent_youtube_channel',
            18 => 'menu_parent_youtube_media',
            19 => 'node_options_youtube_channel',
            20 => 'node_options_youtube_media',
            21 => 'node_preview_youtube_channel',
            22 => 'node_preview_youtube_media',
            23 => 'node_submitted_youtube_channel',
            24 => 'node_submitted_youtube_media',
          ),
          'views_view' => 
          array (
            0 => 'youtube_media',
          ),
        ),
        'version' => '7.x-2.2',
        'project' => 'mediafront',
        'datestamp' => '1379103236',
      ),
      'project' => 'mediafront',
      'version' => '7.x-2.2',
    ),
    'timeline_bookmark' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/mediafront/modules/timeline_bookmark/timeline_bookmark.module',
      'name' => 'timeline_bookmark',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Timeline Bookmarks',
        'description' => 'This enables timeline bookmarking where users can bookmark their place within a media content.',
        'core' => '7.x',
        'package' => 'MediaFront',
        'php' => '5.2.4',
        'dependencies' => 
        array (
          0 => 'mediafront',
          1 => 'osmplayer',
          2 => 'views',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'views:views_default:3.0',
          ),
          'features_api' => 
          array (
            0 => 'api:1',
          ),
          'views_view' => 
          array (
            0 => 'user_timeline_bookmarks',
          ),
        ),
        'files' => 
        array (
          0 => 'timeline_bookmark.inc',
          1 => 'views/timeline_bookmark_field_link.inc',
          2 => 'views/timeline_bookmark_field_delete.inc',
        ),
        'version' => '7.x-2.2',
        'project' => 'mediafront',
        'datestamp' => '1379103236',
      ),
      'project' => 'mediafront',
      'version' => '7.x-2.2',
    ),
    'minplayer' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/mediafront/players/minplayer/minplayer.module',
      'name' => 'minplayer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'minPlayer',
        'description' => 'A minimalistic, HTML5, plugin based media player.',
        'package' => 'MediaFront : Players',
        'dependencies' => 
        array (
          0 => 'mediafront',
          1 => 'html5_media',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'minplayer.module',
        ),
        'required' => false,
        'version' => '7.x-2.2',
        'project' => 'mediafront',
        'datestamp' => '1379103236',
        'php' => '5.2.4',
      ),
      'project' => 'mediafront',
      'version' => '7.x-2.2',
    ),
    'osmplayer' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/mediafront/players/osmplayer/osmplayer.module',
      'name' => 'osmplayer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Open Standards Media Player',
        'description' => 'The Open Standards Media player plugin for the MediaFront module.',
        'package' => 'MediaFront : Players',
        'dependencies' => 
        array (
          0 => 'mediafront',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'osmplayer.module',
        ),
        'required' => false,
        'version' => '7.x-2.2',
        'project' => 'mediafront',
        'datestamp' => '1379103236',
        'php' => '5.2.4',
      ),
      'project' => 'mediafront',
      'version' => '7.x-2.2',
    ),
    'menu_block' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/menu_block/menu_block.module',
      'name' => 'menu_block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7203',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu Block',
        'description' => 'Provides configurable blocks of menu items.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'menu (>7.11)',
        ),
        'configure' => 'admin/config/user-interface/menu-block',
        'version' => '7.x-2.7',
        'project' => 'menu_block',
        'datestamp' => '1435676232',
        'php' => '5.2.4',
      ),
      'project' => 'menu_block',
      'version' => '7.x-2.7',
    ),
    'menu_block_export' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/menu_block/menu_block_export.module',
      'name' => 'menu_block_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu Block Export',
        'description' => 'Provides export interface for Menu block module.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'menu_block',
        ),
        'files' => 
        array (
          0 => 'menu_block_export.module',
          1 => 'menu_block_export.admin.inc',
        ),
        'configure' => 'admin/config/user-interface/menu-block/export',
        'version' => '7.x-2.7',
        'project' => 'menu_block',
        'datestamp' => '1435676232',
        'php' => '5.2.4',
      ),
      'project' => 'menu_block',
      'version' => '7.x-2.7',
    ),
    'menu_trail_by_path' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/menu_trail_by_path/menu_trail_by_path.module',
      'name' => 'menu_trail_by_path',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu Trail By Path',
        'description' => 'Expand menus and set active-trail according to the current path. <strong>Requires Drupal 7.12+</strong>',
        'package' => 'Other',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'menu',
          1 => 'path',
          2 => 'system (>=7.12)',
        ),
        'configure' => 'admin/structure/menu_trail_by_path',
        'version' => '7.x-2.0',
        'project' => 'menu_trail_by_path',
        'datestamp' => '1351260718',
        'php' => '5.2.4',
      ),
      'project' => 'menu_trail_by_path',
      'version' => '7.x-2.0',
    ),
    'metatag' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/metatag/metatag.module',
      'name' => 'metatag',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7107',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag',
        'description' => 'Adds support and an API to implement meta tags.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'system (>= 7.28)',
          1 => 'ctools',
          2 => 'token',
        ),
        'configure' => 'admin/config/search/metatags',
        'files' => 
        array (
          0 => 'metatag.inc',
          1 => 'metatag.migrate.inc',
          2 => 'tests/metatag.helper.test',
          3 => 'tests/metatag.unit.test',
          4 => 'tests/metatag.node.test',
          5 => 'tests/metatag.term.test',
          6 => 'tests/metatag.user.test',
          7 => 'tests/metatag.core_tag_removal.test',
          8 => 'tests/metatag.string_handling.test',
          9 => 'tests/metatag.string_handling_with_i18n.test',
          10 => 'tests/metatag.image.test',
          11 => 'tests/metatag.locale.test',
          12 => 'tests/metatag.with_i18n_output.test',
          13 => 'tests/metatag.with_i18n_disabled.test',
          14 => 'tests/metatag.with_i18n_config.test',
          15 => 'tests/metatag.with_i18n_node.test',
          16 => 'tests/metatag.with_panels.test',
          17 => 'tests/metatag.with_views.test',
        ),
        'test_dependencies' => 
        array (
          0 => 'devel',
          1 => 'imagecache_token',
          2 => 'entity_translation',
          3 => 'i18n',
          4 => 'context',
          5 => 'panels',
          6 => 'views',
        ),
        'version' => '7.x-1.14',
        'project' => 'metatag',
        'datestamp' => '1459607642',
        'php' => '5.2.4',
      ),
      'project' => 'metatag',
      'version' => '7.x-1.14',
    ),
    'metatag_app_links' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/metatag/metatag_app_links/metatag_app_links.module',
      'name' => 'metatag_app_links',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: App Links',
        'description' => 'Provides support for applinks.org meta tags.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag',
        ),
        'version' => '7.x-1.14',
        'project' => 'metatag',
        'datestamp' => '1459607642',
        'php' => '5.2.4',
      ),
      'project' => 'metatag',
      'version' => '7.x-1.14',
    ),
    'metatag_context' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/metatag/metatag_context/metatag_context.module',
      'name' => 'metatag_context',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Context',
        'description' => 'Assigned Metatag using Context definitions, allowing them to be assigned by path and other criteria.',
        'package' => 'SEO',
        'core' => '7.x',
        'configure' => 'admin/config/search/metatags/context',
        'dependencies' => 
        array (
          0 => 'metatag',
          1 => 'context',
        ),
        'files' => 
        array (
          0 => 'tests/metatag_context.test',
          1 => 'tests/metatag_context.i18n.test',
        ),
        'version' => '7.x-1.14',
        'project' => 'metatag',
        'datestamp' => '1459607642',
        'php' => '5.2.4',
      ),
      'project' => 'metatag',
      'version' => '7.x-1.14',
    ),
    'metatag_dc' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/metatag/metatag_dc/metatag_dc.module',
      'name' => 'metatag_dc',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Dublin Core',
        'description' => 'Provides the fifteen <a href="http://dublincore.org/documents/dces/">Dublin Core Metadata Element Set 1.1</a> meta tags from the <a href="http://dublincore.org/">Dublin Core Metadata Institute</a>.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag',
        ),
        'version' => '7.x-1.14',
        'project' => 'metatag',
        'datestamp' => '1459607642',
        'php' => '5.2.4',
      ),
      'project' => 'metatag',
      'version' => '7.x-1.14',
    ),
    'metatag_dc_advanced' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/metatag/metatag_dc_advanced/metatag_dc_advanced.module',
      'name' => 'metatag_dc_advanced',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Dublin Core Advanced',
        'description' => 'Provides forty additional meta tags from the <a href="http://dublincore.org/">Dublin Core Metadata Institute</a>.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag',
          1 => 'metatag_dc',
        ),
        'version' => '7.x-1.14',
        'project' => 'metatag',
        'datestamp' => '1459607642',
        'php' => '5.2.4',
      ),
      'project' => 'metatag',
      'version' => '7.x-1.14',
    ),
    'metatag_devel' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/metatag/metatag_devel/metatag_devel.module',
      'name' => 'metatag_devel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Devel',
        'description' => 'Provides development / debugging functionality for the Metatag module. Integrates with Devel Generate.',
        'package' => 'Development',
        'core' => '7.x',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'dependencies' => 
        array (
          0 => 'metatag',
        ),
        'version' => '7.x-1.14',
        'project' => 'metatag',
        'datestamp' => '1459607642',
        'php' => '5.2.4',
      ),
      'project' => 'metatag',
      'version' => '7.x-1.14',
    ),
    'metatag_facebook' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/metatag/metatag_facebook/metatag_facebook.module',
      'name' => 'metatag_facebook',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Facebook',
        'description' => 'Provides support for Facebook\'s custom meta tags.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag',
        ),
        'version' => '7.x-1.14',
        'project' => 'metatag',
        'datestamp' => '1459607642',
        'php' => '5.2.4',
      ),
      'project' => 'metatag',
      'version' => '7.x-1.14',
    ),
    'metatag_favicons' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/metatag/metatag_favicons/metatag_favicons.module',
      'name' => 'metatag_favicons',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: favicons',
        'description' => 'Provides support for custom favicons.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag',
        ),
        'version' => '7.x-1.14',
        'project' => 'metatag',
        'datestamp' => '1459607642',
        'php' => '5.2.4',
      ),
      'project' => 'metatag',
      'version' => '7.x-1.14',
    ),
    'metatag_google_plus' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/metatag/metatag_google_plus/metatag_google_plus.module',
      'name' => 'metatag_google_plus',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Google+',
        'description' => 'Provides support for Google+ \'itemscope\' meta tags.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag',
        ),
        'files' => 
        array (
          0 => 'metatag_google_plus.inc',
        ),
        'version' => '7.x-1.14',
        'project' => 'metatag',
        'datestamp' => '1459607642',
        'php' => '5.2.4',
      ),
      'project' => 'metatag',
      'version' => '7.x-1.14',
    ),
    'metatag_hreflang' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/metatag/metatag_hreflang/metatag_hreflang.module',
      'name' => 'metatag_hreflang',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: hreflang',
        'description' => 'Provides support for the hreflang meta tag with some extra logic to simplify it.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag',
          1 => 'locale',
        ),
        'files' => 
        array (
          0 => 'metatag_hreflang.test',
        ),
        'version' => '7.x-1.14',
        'project' => 'metatag',
        'datestamp' => '1459607642',
        'php' => '5.2.4',
      ),
      'project' => 'metatag',
      'version' => '7.x-1.14',
    ),
    'metatag_importer' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/metatag/metatag_importer/metatag_importer.module',
      'name' => 'metatag_importer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag Importer',
        'description' => 'Import data from other modules into Metatag.',
        'core' => '7.x',
        'package' => 'SEO',
        'dependencies' => 
        array (
          0 => 'metatag',
        ),
        'version' => '7.x-1.14',
        'project' => 'metatag',
        'datestamp' => '1459607642',
        'php' => '5.2.4',
      ),
      'project' => 'metatag',
      'version' => '7.x-1.14',
    ),
    'metatag_mobile' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/metatag/metatag_mobile/metatag_mobile.module',
      'name' => 'metatag_mobile',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Mobile & UI Adjustments',
        'description' => 'Provides support for meta tags used to control the mobile browser experience.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag',
        ),
        'version' => '7.x-1.14',
        'project' => 'metatag',
        'datestamp' => '1459607642',
        'php' => '5.2.4',
      ),
      'project' => 'metatag',
      'version' => '7.x-1.14',
    ),
    'metatag_opengraph' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/metatag/metatag_opengraph/metatag_opengraph.module',
      'name' => 'metatag_opengraph',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: OpenGraph',
        'description' => 'Provides support for Open Graph Protocol meta tags.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag',
        ),
        'version' => '7.x-1.14',
        'project' => 'metatag',
        'datestamp' => '1459607642',
        'php' => '5.2.4',
      ),
      'project' => 'metatag',
      'version' => '7.x-1.14',
    ),
    'metatag_opengraph_products' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/metatag/metatag_opengraph_products/metatag_opengraph_products.module',
      'name' => 'metatag_opengraph_products',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag:OpenGraph Products',
        'description' => 'Provides additional Open Graph Protocol meta tags for describing products.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag',
          1 => 'metatag_opengraph',
        ),
        'version' => '7.x-1.14',
        'project' => 'metatag',
        'datestamp' => '1459607642',
        'php' => '5.2.4',
      ),
      'project' => 'metatag',
      'version' => '7.x-1.14',
    ),
    'metatag_panels' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/metatag/metatag_panels/metatag_panels.module',
      'name' => 'metatag_panels',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Panels',
        'description' => 'Provides Metatag integration within the Panels interface.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag',
          1 => 'panels',
        ),
        'files' => 
        array (
          0 => 'tests/metatag_panels.test',
          1 => 'tests/metatag_panels.i18n.test',
        ),
        'version' => '7.x-1.14',
        'project' => 'metatag',
        'datestamp' => '1459607642',
        'php' => '5.2.4',
      ),
      'project' => 'metatag',
      'version' => '7.x-1.14',
    ),
    'metatag_twitter_cards' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/metatag/metatag_twitter_cards/metatag_twitter_cards.module',
      'name' => 'metatag_twitter_cards',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Twitter Cards',
        'description' => 'Provides support for Twitter\'s Card meta tags.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag',
        ),
        'version' => '7.x-1.14',
        'project' => 'metatag',
        'datestamp' => '1459607642',
        'php' => '5.2.4',
      ),
      'project' => 'metatag',
      'version' => '7.x-1.14',
    ),
    'metatag_verification' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/metatag/metatag_verification/metatag_verification.module',
      'name' => 'metatag_verification',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Verification',
        'description' => 'Various meta tags for verifying ownership of a site.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag',
        ),
        'version' => '7.x-1.14',
        'project' => 'metatag',
        'datestamp' => '1459607642',
        'php' => '5.2.4',
      ),
      'project' => 'metatag',
      'version' => '7.x-1.14',
    ),
    'metatag_views' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/metatag/metatag_views/metatag_views.module',
      'name' => 'metatag_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Views',
        'description' => 'Provides Metatag integration within the Views interface.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag',
          1 => 'views',
        ),
        'files' => 
        array (
          0 => 'metatag_views.inc',
          1 => 'metatag_views_plugin_display_extender_metatags.inc',
          2 => 'tests/metatag_views.test',
          3 => 'tests/metatag_views.i18n.test',
        ),
        'version' => '7.x-1.14',
        'project' => 'metatag',
        'datestamp' => '1459607642',
        'php' => '5.2.4',
      ),
      'project' => 'metatag',
      'version' => '7.x-1.14',
    ),
    'module_filter' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/module_filter/module_filter.module',
      'name' => 'module_filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7201',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Module filter',
        'description' => 'Filter the modules list.',
        'core' => '7.x',
        'package' => 'Administration',
        'files' => 
        array (
          0 => 'module_filter.install',
          1 => 'module_filter.js',
          2 => 'module_filter.module',
          3 => 'module_filter.admin.inc',
          4 => 'module_filter.theme.inc',
          5 => 'css/module_filter.css',
          6 => 'css/module_filter_tab.css',
          7 => 'js/module_filter.js',
          8 => 'js/module_filter_tab.js',
        ),
        'configure' => 'admin/config/user-interface/modulefilter',
        'version' => '7.x-2.0',
        'project' => 'module_filter',
        'datestamp' => '1424631189',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'module_filter',
      'version' => '7.x-2.0',
    ),
    'nice_menus' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016',
      'name' => 'nice_menus',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '6002',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'nodequeue_service' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/nodequeue/addons/nodequeue_service/nodequeue_service.module',
      'name' => 'nodequeue_service',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Nodequeue Service',
        'description' => 'Provides a nodequeue service.',
        'package' => 'Nodequeue',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'services',
          1 => 'nodequeue',
        ),
        'files' => 
        array (
          0 => 'nodequeue_service.inc',
        ),
        'version' => '7.x-2.0',
        'project' => 'nodequeue',
        'datestamp' => '1433622481',
        'php' => '5.2.4',
      ),
      'project' => 'nodequeue',
      'version' => '7.x-2.0',
    ),
    'nodequeue' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/nodequeue/nodequeue.module',
      'name' => 'nodequeue',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Nodequeue',
        'description' => 'Create queues which can contain nodes in arbitrary order',
        'package' => 'Nodequeue',
        'core' => '7.x',
        'configure' => 'admin/structure/nodequeue/settings',
        'files' => 
        array (
          0 => 'includes/views/nodequeue.views.inc',
          1 => 'includes/nodequeue.actions.inc',
          2 => 'includes/views/nodequeue_handler_argument_subqueue_qid.inc',
          3 => 'includes/views/nodequeue_handler_field_all_queues.inc',
          4 => 'includes/views/nodequeue_handler_field_all_subqueues.inc',
          5 => 'includes/views/nodequeue_handler_field_links.inc',
          6 => 'includes/views/nodequeue_handler_field_queue_tab.inc',
          7 => 'includes/views/nodequeue_handler_filter_in_queue.inc',
          8 => 'includes/views/nodequeue_handler_relationship_nodequeue.inc',
          9 => 'includes/views/nodequeue_handler_sort_by_position_and_other.inc',
          10 => 'includes/views/nodequeue_handler_sort_in_queue.inc',
        ),
        'version' => '7.x-2.0',
        'project' => 'nodequeue',
        'datestamp' => '1433622481',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'nodequeue',
      'version' => '7.x-2.0',
    ),
    'nodequeue_generate' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/nodequeue/nodequeue_generate.module',
      'name' => 'nodequeue_generate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Nodequeue generate',
        'description' => 'Bulk assign nodes into queues for quickly populating a site.',
        'package' => 'Development',
        'dependencies' => 
        array (
          0 => 'nodequeue',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'nodequeue_generate.module',
        ),
        'version' => '7.x-2.0',
        'project' => 'nodequeue',
        'datestamp' => '1433622481',
        'php' => '5.2.4',
      ),
      'project' => 'nodequeue',
      'version' => '7.x-2.0',
    ),
    'smartqueue' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/nodequeue/smartqueue.module',
      'name' => 'smartqueue',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Smartqueue taxonomy',
        'description' => 'Creates a node queue for each taxonomy vocabulary',
        'package' => 'Nodequeue',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'nodequeue',
          1 => 'taxonomy',
        ),
        'version' => '7.x-2.0',
        'project' => 'nodequeue',
        'datestamp' => '1433622481',
        'php' => '5.2.4',
      ),
      'project' => 'nodequeue',
      'version' => '7.x-2.0',
    ),
    'open_readspeaker' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/open_readspeaker/open_readspeaker.module',
      'name' => 'open_readspeaker',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Open ReadSpeaker',
        'description' => 'Insert ReadSpeaker Enterprise Highlighting to selected node types.',
        'package' => 'Content',
        'core' => '7.x',
        'configure' => 'admin/config/services/open-readspeaker',
        'version' => '7.x-1.0-beta1',
        'project' => 'open_readspeaker',
        'datestamp' => '1392135211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'open_readspeaker',
      'version' => '7.x-1.0-beta1',
    ),
    'i18n_panels' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/panels/i18n_panels/i18n_panels.module',
      'name' => 'i18n_panels',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panels translation',
        'description' => 'Supports translatable panels items.',
        'dependencies' => 
        array (
          0 => 'i18n',
          1 => 'panels',
          2 => 'i18n_string',
          3 => 'i18n_translation',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'version' => '7.x-3.5',
        'project' => 'panels',
        'datestamp' => '1422472985',
        'php' => '5.2.4',
      ),
      'project' => 'panels',
      'version' => '7.x-3.5',
    ),
    'panels' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/panels/panels.module',
      'name' => 'panels',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7303',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panels',
        'description' => 'Core Panels display functions; provides no external UI, at least one other Panels module should be enabled.',
        'core' => '7.x',
        'package' => 'Panels',
        'version' => '7.x-3.5',
        'configure' => 'admin/structure/panels',
        'dependencies' => 
        array (
          0 => 'ctools (>1.5)',
        ),
        'files' => 
        array (
          0 => 'panels.module',
          1 => 'includes/common.inc',
          2 => 'includes/legacy.inc',
          3 => 'includes/plugins.inc',
          4 => 'plugins/views/panels_views_plugin_row_fields.inc',
        ),
        'project' => 'panels',
        'datestamp' => '1422472985',
        'php' => '5.2.4',
      ),
      'project' => 'panels',
      'version' => '7.x-3.5',
    ),
    'panels_ipe' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/panels/panels_ipe/panels_ipe.module',
      'name' => 'panels_ipe',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panels In-Place Editor',
        'description' => 'Provide a UI for managing some Panels directly on the frontend, instead of having to use the backend.',
        'package' => 'Panels',
        'version' => '7.x-3.5',
        'dependencies' => 
        array (
          0 => 'panels',
        ),
        'core' => '7.x',
        'configure' => 'admin/structure/panels',
        'files' => 
        array (
          0 => 'panels_ipe.module',
        ),
        'project' => 'panels',
        'datestamp' => '1422472985',
        'php' => '5.2.4',
      ),
      'project' => 'panels',
      'version' => '7.x-3.5',
    ),
    'panels_mini' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/panels/panels_mini/panels_mini.module',
      'name' => 'panels_mini',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mini panels',
        'description' => 'Create mini panels that can be used as blocks by Drupal and panes by other panel modules.',
        'package' => 'Panels',
        'version' => '7.x-3.5',
        'dependencies' => 
        array (
          0 => 'panels',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'plugins/export_ui/panels_mini_ui.class.php',
        ),
        'project' => 'panels',
        'datestamp' => '1422472985',
        'php' => '5.2.4',
      ),
      'project' => 'panels',
      'version' => '7.x-3.5',
    ),
    'panels_node' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/panels/panels_node/panels_node.module',
      'name' => 'panels_node',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panel nodes',
        'description' => 'Create nodes that are divided into areas with selectable content.',
        'package' => 'Panels',
        'version' => '7.x-3.5',
        'dependencies' => 
        array (
          0 => 'panels',
        ),
        'configure' => 'admin/structure/panels',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'panels_node.module',
        ),
        'project' => 'panels',
        'datestamp' => '1422472985',
        'php' => '5.2.4',
      ),
      'project' => 'panels',
      'version' => '7.x-3.5',
    ),
    'pathauto' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/pathauto/pathauto.module',
      'name' => 'pathauto',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7006',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Pathauto',
        'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
        'dependencies' => 
        array (
          0 => 'path',
          1 => 'token',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'pathauto.migrate.inc',
          1 => 'pathauto.test',
        ),
        'configure' => 'admin/config/search/path/patterns',
        'recommends' => 
        array (
          0 => 'redirect',
        ),
        'version' => '7.x-1.3',
        'project' => 'pathauto',
        'datestamp' => '1444232655',
        'php' => '5.2.4',
      ),
      'project' => 'pathauto',
      'version' => '7.x-1.3',
    ),
    'plupload' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/plupload/plupload.module',
      'name' => 'plupload',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Plupload integration module',
        'description' => 'Provides a plupload element.',
        'files' => 
        array (
          0 => 'plupload.module',
        ),
        'core' => '7.x',
        'package' => 'Media',
        'version' => '7.x-1.7',
        'project' => 'plupload',
        'datestamp' => '1415390716',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'plupload',
      'version' => '7.x-1.7',
    ),
    'rh_file' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/rabbit_hole/modules/rh_file/rh_file.module',
      'name' => 'rh_file',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rabbit Hole files',
        'description' => 'Adds Rabbit Hole functionality for files.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'rabbit_hole',
          1 => 'file_entity',
        ),
        'version' => '7.x-2.23',
        'project' => 'rabbit_hole',
        'datestamp' => '1405026229',
        'php' => '5.2.4',
      ),
      'project' => 'rabbit_hole',
      'version' => '7.x-2.23',
    ),
    'rh_node' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/rabbit_hole/modules/rh_node/rh_node.module',
      'name' => 'rh_node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rabbit Hole nodes',
        'description' => 'Adds Rabbit Hole functionality for nodes.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'rabbit_hole',
          1 => 'node',
        ),
        'version' => '7.x-2.23',
        'project' => 'rabbit_hole',
        'datestamp' => '1405026229',
        'php' => '5.2.4',
      ),
      'project' => 'rabbit_hole',
      'version' => '7.x-2.23',
    ),
    'rh_taxonomy' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/rabbit_hole/modules/rh_taxonomy/rh_taxonomy.module',
      'name' => 'rh_taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rabbit Hole taxonomy terms',
        'description' => 'Adds Rabbit Hole functionality for taxonomy terms.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'rabbit_hole',
          1 => 'taxonomy',
        ),
        'version' => '7.x-2.23',
        'project' => 'rabbit_hole',
        'datestamp' => '1405026229',
        'php' => '5.2.4',
      ),
      'project' => 'rabbit_hole',
      'version' => '7.x-2.23',
    ),
    'rh_user' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/rabbit_hole/modules/rh_user/rh_user.module',
      'name' => 'rh_user',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rabbit Hole users',
        'description' => 'Adds Rabbit Hole functionality for users.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'rabbit_hole',
          1 => 'user',
        ),
        'version' => '7.x-2.23',
        'project' => 'rabbit_hole',
        'datestamp' => '1405026229',
        'php' => '5.2.4',
      ),
      'project' => 'rabbit_hole',
      'version' => '7.x-2.23',
    ),
    'rabbit_hole' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/rabbit_hole/rabbit_hole.module',
      'name' => 'rabbit_hole',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rabbit Hole',
        'description' => 'Basic functionality that is shared among the different Rabbit Hole modules.',
        'core' => '7.x',
        'version' => '7.x-2.23',
        'project' => 'rabbit_hole',
        'datestamp' => '1405026229',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'rabbit_hole',
      'version' => '7.x-2.23',
    ),
    'redirect' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/redirect/redirect.module',
      'name' => 'redirect',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7102',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Redirect',
        'description' => 'Allows users to redirect from old URLs to new URLs.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'redirect.controller.inc',
          1 => 'redirect.test',
          2 => 'views/redirect.views.inc',
          3 => 'views/redirect_handler_filter_redirect_type.inc',
          4 => 'views/redirect_handler_field_redirect_source.inc',
          5 => 'views/redirect_handler_field_redirect_redirect.inc',
          6 => 'views/redirect_handler_field_redirect_operations.inc',
          7 => 'views/redirect_handler_field_redirect_link_edit.inc',
          8 => 'views/redirect_handler_field_redirect_link_delete.inc',
        ),
        'configure' => 'admin/config/search/redirect/settings',
        'version' => '7.x-1.0-rc3',
        'project' => 'redirect',
        'datestamp' => '1436393342',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'redirect',
      'version' => '7.x-1.0-rc3',
    ),
    'node_reference' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/references/node_reference/node_reference.module',
      'name' => 'node_reference',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node Reference',
        'description' => 'Defines a field type for referencing one node from another.',
        'package' => 'Fields',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'references',
          2 => 'options',
        ),
        'files' => 
        array (
          0 => 'node_reference.test',
        ),
        'version' => '7.x-2.1',
        'project' => 'references',
        'datestamp' => '1360265821',
        'php' => '5.2.4',
      ),
      'project' => 'references',
      'version' => '7.x-2.1',
    ),
    'references' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/references/references.module',
      'name' => 'references',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'References',
        'description' => 'Defines common base features for the various reference field types.',
        'package' => 'Fields',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'options',
        ),
        'files' => 
        array (
          0 => 'views/references_handler_relationship.inc',
          1 => 'views/references_handler_argument.inc',
          2 => 'views/references_plugin_display.inc',
          3 => 'views/references_plugin_style.inc',
          4 => 'views/references_plugin_row_fields.inc',
        ),
        'version' => '7.x-2.1',
        'project' => 'references',
        'datestamp' => '1360265821',
        'php' => '5.2.4',
      ),
      'project' => 'references',
      'version' => '7.x-2.1',
    ),
    'user_reference' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/references/user_reference/user_reference.module',
      'name' => 'user_reference',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User Reference',
        'description' => 'Defines a field type for referencing a user from a node.',
        'package' => 'Fields',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'references',
          2 => 'options',
        ),
        'version' => '7.x-2.1',
        'project' => 'references',
        'datestamp' => '1360265821',
        'php' => '5.2.4',
      ),
      'project' => 'references',
      'version' => '7.x-2.1',
    ),
    'rules' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/rules/rules.module',
      'name' => 'rules',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7214',
      'weight' => '20',
      'info' => 
      array (
        'name' => 'Rules',
        'description' => 'React on events and conditionally evaluate actions.',
        'package' => 'Rules',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rules.features.inc',
          1 => 'tests/rules.test',
          2 => 'includes/faces.inc',
          3 => 'includes/rules.core.inc',
          4 => 'includes/rules.event.inc',
          5 => 'includes/rules.processor.inc',
          6 => 'includes/rules.plugins.inc',
          7 => 'includes/rules.state.inc',
          8 => 'includes/rules.dispatcher.inc',
          9 => 'modules/node.eval.inc',
          10 => 'modules/php.eval.inc',
          11 => 'modules/rules_core.eval.inc',
          12 => 'modules/system.eval.inc',
          13 => 'ui/ui.controller.inc',
          14 => 'ui/ui.core.inc',
          15 => 'ui/ui.data.inc',
          16 => 'ui/ui.plugins.inc',
        ),
        'dependencies' => 
        array (
          0 => 'entity_token',
          1 => 'entity',
        ),
        'version' => '7.x-2.9',
        'project' => 'rules',
        'datestamp' => '1426527210',
        'php' => '5.2.4',
      ),
      'project' => 'rules',
      'version' => '7.x-2.9',
    ),
    'rules_admin' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/rules/rules_admin/rules_admin.module',
      'name' => 'rules_admin',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules UI',
        'description' => 'Administrative interface for managing rules.',
        'package' => 'Rules',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rules_admin.module',
          1 => 'rules_admin.inc',
        ),
        'dependencies' => 
        array (
          0 => 'rules',
        ),
        'version' => '7.x-2.9',
        'project' => 'rules',
        'datestamp' => '1426527210',
        'php' => '5.2.4',
      ),
      'project' => 'rules',
      'version' => '7.x-2.9',
    ),
    'rules_i18n' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/rules/rules_i18n/rules_i18n.module',
      'name' => 'rules_i18n',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules translation',
        'description' => 'Allows translating rules.',
        'dependencies' => 
        array (
          0 => 'rules',
          1 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rules_i18n.i18n.inc',
          1 => 'rules_i18n.rules.inc',
          2 => 'rules_i18n.test',
        ),
        'version' => '7.x-2.9',
        'project' => 'rules',
        'datestamp' => '1426527210',
        'php' => '5.2.4',
      ),
      'project' => 'rules',
      'version' => '7.x-2.9',
    ),
    'rules_scheduler' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/rules/rules_scheduler/rules_scheduler.module',
      'name' => 'rules_scheduler',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules Scheduler',
        'description' => 'Schedule the execution of Rules components using actions.',
        'dependencies' => 
        array (
          0 => 'rules',
        ),
        'package' => 'Rules',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rules_scheduler.admin.inc',
          1 => 'rules_scheduler.module',
          2 => 'rules_scheduler.install',
          3 => 'rules_scheduler.rules.inc',
          4 => 'rules_scheduler.test',
          5 => 'includes/rules_scheduler.handler.inc',
          6 => 'includes/rules_scheduler.views_default.inc',
          7 => 'includes/rules_scheduler.views.inc',
          8 => 'includes/rules_scheduler_views_filter.inc',
        ),
        'version' => '7.x-2.9',
        'project' => 'rules',
        'datestamp' => '1426527210',
        'php' => '5.2.4',
      ),
      'project' => 'rules',
      'version' => '7.x-2.9',
    ),
    'security_review' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/security_review/security_review.module',
      'name' => 'security_review',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Security Review',
        'description' => 'Site security and configuration review module.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/security_review.test',
        ),
        'configure' => 'admin/reports/security-review/settings',
        'version' => '7.x-1.2',
        'project' => 'security_review',
        'datestamp' => '1410036834',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'security_review',
      'version' => '7.x-1.2',
    ),
    'shs_node_count' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/shs/modules/shs_node_count/shs_node_count.module',
      'name' => 'shs_node_count',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Simple hierarchical select: node count',
        'core' => '7.x',
        'description' => 'Extends \'Simple hierarchical select\' with "node count" functionality.',
        'dependencies' => 
        array (
          0 => 'shs',
        ),
        'version' => '7.x-1.6+70-dev',
        'project' => 'shs',
        'datestamp' => '1463322841',
        'php' => '5.2.4',
      ),
      'project' => 'shs',
      'version' => '7.x-1.6+70-dev',
    ),
    'shs' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/shs/shs.module',
      'name' => 'shs',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Simple hierarchical select',
        'core' => '7.x',
        'description' => 'Creates a simple hierarchical select widget for taxonomy fields.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'files' => 
        array (
          0 => 'includes/handlers/shs_handler_filter_entityreference.inc',
          1 => 'includes/handlers/shs_handler_filter_term_node_tid.inc',
          2 => 'includes/handlers/shs_handler_filter_term_node_tid_depth.inc',
        ),
        'version' => '7.x-1.6+70-dev',
        'project' => 'shs',
        'datestamp' => '1463322841',
        'php' => '5.2.4',
      ),
      'project' => 'shs',
      'version' => '7.x-1.6+70-dev',
    ),
    'site_map' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/site_map/site_map.module',
      'name' => 'site_map',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Site map',
        'description' => 'Display a site map.',
        'core' => '7.x',
        'configure' => 'admin/config/search/sitemap',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'files' => 
        array (
          0 => 'site_map.test',
        ),
        'version' => '7.x-1.3',
        'project' => 'site_map',
        'datestamp' => '1441076640',
        'php' => '5.2.4',
      ),
      'project' => 'site_map',
      'version' => '7.x-1.3',
    ),
    'special_menu_items' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/special_menu_items/special_menu_items.module',
      'name' => 'special_menu_items',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Special menu items',
        'description' => 'Allow users to add placeholder and/or separator menu items.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'configure' => 'admin/config/system/special_menu_items',
        'version' => '7.x-2.0',
        'project' => 'special_menu_items',
        'datestamp' => '1346788411',
        'php' => '5.2.4',
      ),
      'project' => 'special_menu_items',
      'version' => '7.x-2.0',
    ),
    'strongarm' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/strongarm/strongarm.module',
      'name' => 'strongarm',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7201',
      'weight' => '-1000',
      'info' => 
      array (
        'name' => 'Strongarm',
        'description' => 'Enforces variable values defined by modules that need settings set to operate properly.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'strongarm.admin.inc',
          1 => 'strongarm.install',
          2 => 'strongarm.module',
        ),
        'version' => '7.x-2.0',
        'project' => 'strongarm',
        'datestamp' => '1339604214',
        'php' => '5.2.4',
      ),
      'project' => 'strongarm',
      'version' => '7.x-2.0',
    ),
    'superfish' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/superfish/superfish.module',
      'name' => 'superfish',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Superfish',
        'description' => 'jQuery Superfish plugin for your Drupal menus.',
        'package' => 'User interface',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'menu',
        ),
        'configure' => 'admin/config/user-interface/superfish',
        'core' => '7.x',
        'version' => '7.x-1.9+41-dev',
        'project' => 'superfish',
        'datestamp' => '1448444342',
        'php' => '5.2.4',
      ),
      'project' => 'superfish',
      'version' => '7.x-1.9+41-dev',
    ),
    'taxonomy_menu' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/taxonomy_menu/taxonomy_menu.module',
      'name' => 'taxonomy_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'menu',
        ),
        'description' => 'Adds links to taxonomy terms to a menu.',
        'name' => 'Taxonomy menu',
        'package' => 'Taxonomy menu',
        'files' => 
        array (
          0 => 'taxonomy_menu.batch.inc',
          1 => 'taxonomy_menu.database.inc',
          2 => 'taxonomy_menu.module',
          3 => 'taxonomy_menu.test',
          4 => 'taxonomy_menu.install',
        ),
        'version' => '7.x-1.5',
        'project' => 'taxonomy_menu',
        'datestamp' => '1396359247',
        'php' => '5.2.4',
      ),
      'project' => 'taxonomy_menu',
      'version' => '7.x-1.5',
    ),
    'token' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/token/token.module',
      'name' => 'token',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Token',
        'description' => 'Provides a user interface for the Token API and some missing core tokens.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'token.test',
        ),
        'version' => '7.x-1.6',
        'project' => 'token',
        'datestamp' => '1425149060',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'token',
      'version' => '7.x-1.6',
    ),
    'token_filter' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/token_filter/token_filter.module',
      'name' => 'token_filter',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Token Filter',
        'description' => 'Allows token values to be used as filters',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'token',
        ),
        'version' => '7.x-1.1',
        'project' => 'token_filter',
        'datestamp' => '1325700944',
        'php' => '5.2.4',
      ),
      'project' => 'token_filter',
      'version' => '7.x-1.1',
    ),
    'token_insert' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/token_insert/token_insert.module',
      'name' => 'token_insert',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Token insert UI',
        'description' => 'Allows you to insert tokens in a textfield or wysiwyg field.',
        'core' => '7.x',
        'package' => 'Token insert',
        'dependencies' => 
        array (
          0 => 'token',
        ),
        'files' => 
        array (
          0 => 'token_insert.inc',
          1 => 'token_insert.module',
          2 => 'token_insert.js',
        ),
        'configure' => 'admin/config/content/formats',
        'version' => '7.x-2.4',
        'project' => 'token_insert',
        'datestamp' => '1404308328',
        'php' => '5.2.4',
      ),
      'project' => 'token_insert',
      'version' => '7.x-2.4',
    ),
    'token_insert_ckeditor' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/token_insert/token_insert_ckeditor/token_insert_ckeditor.module',
      'name' => 'token_insert_ckeditor',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Token insert (ckeditor)',
        'description' => 'Provides a plugin for the CKEditor module to insert tokens. Tokens are inserted in the format Token Filter works with.',
        'core' => '7.x',
        'package' => 'Token insert',
        'dependencies' => 
        array (
          0 => 'token',
          1 => 'ckeditor',
          2 => 'token_insert',
        ),
        'version' => '7.x-2.4',
        'project' => 'token_insert',
        'datestamp' => '1404308328',
        'php' => '5.2.4',
      ),
      'project' => 'token_insert',
      'version' => '7.x-2.4',
    ),
    'token_insert_text' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/token_insert/token_insert_text/token_insert_text.module',
      'name' => 'token_insert_text',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Token insert (text)',
        'description' => 'Allows you to insert tokens in a textfield with one click of a button. Tokens are inserted in the format Token Filter (http://drupal.org/project/token_filter) works with.',
        'core' => '7.x',
        'package' => 'Token insert',
        'dependencies' => 
        array (
          0 => 'token',
          1 => 'token_insert',
        ),
        'files' => 
        array (
          0 => 'token_insert_text.js',
          1 => 'token_insert_text.module',
        ),
        'version' => '7.x-2.4',
        'project' => 'token_insert',
        'datestamp' => '1404308328',
        'php' => '5.2.4',
      ),
      'project' => 'token_insert',
      'version' => '7.x-2.4',
    ),
    'token_insert_wysiwyg' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/token_insert/token_insert_wysiwyg/token_insert_wysiwyg.module',
      'name' => 'token_insert_wysiwyg',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Token insert (wysiwyg)',
        'description' => 'Allows you to insert tokens in a wysiwyg field. Tokens are inserted in the format Token Filter works with.',
        'core' => '7.x',
        'package' => 'Token insert',
        'dependencies' => 
        array (
          0 => 'token',
          1 => 'wysiwyg',
          2 => 'token_insert',
        ),
        'files' => 
        array (
          0 => 'plugins/token_insert_wysiwyg.inc',
          1 => 'plugins/token_insert_wysiwyg/token_insert_wysiwyg.js',
          2 => 'plugins/token_insert_wysiwyg/token_insert_wysiwyg.css',
        ),
        'version' => '7.x-2.4',
        'project' => 'token_insert',
        'datestamp' => '1404308328',
        'php' => '5.2.4',
      ),
      'project' => 'token_insert',
      'version' => '7.x-2.4',
    ),
    'variable' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/variable/variable.module',
      'name' => 'variable',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable',
        'description' => 'Variable Information and basic variable API',
        'package' => 'Variable',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/forum.variable.inc',
          1 => 'includes/locale.variable.inc',
          2 => 'includes/menu.variable.inc',
          3 => 'includes/node.variable.inc',
          4 => 'includes/system.variable.inc',
          5 => 'includes/taxonomy.variable.inc',
          6 => 'includes/translation.variable.inc',
          7 => 'includes/user.variable.inc',
          8 => 'variable.test',
        ),
        'version' => '7.x-2.5',
        'project' => 'variable',
        'datestamp' => '1398250128',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-2.5',
    ),
    'variable_admin' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/variable/variable_admin/variable_admin.module',
      'name' => 'variable_admin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable admin',
        'description' => 'Variable Administration UI',
        'dependencies' => 
        array (
          0 => 'variable',
        ),
        'package' => 'Variable',
        'core' => '7.x',
        'version' => '7.x-2.5',
        'project' => 'variable',
        'datestamp' => '1398250128',
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-2.5',
    ),
    'variable_example' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/variable/variable_example/variable_example.module',
      'name' => 'variable_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable example',
        'description' => 'An example module showing how to use the Variable API and providing some variables.',
        'dependencies' => 
        array (
          0 => 'variable',
          1 => 'variable_store',
        ),
        'package' => 'Example modules',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'variable_example.variable.inc',
        ),
        'version' => '7.x-2.5',
        'project' => 'variable',
        'datestamp' => '1398250128',
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-2.5',
    ),
    'variable_realm' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/variable/variable_realm/variable_realm.module',
      'name' => 'variable_realm',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable realm',
        'description' => 'API to use variable realms from different modules',
        'dependencies' => 
        array (
          0 => 'variable',
        ),
        'package' => 'Variable',
        'core' => '7.x',
        'version' => '7.x-2.5',
        'files' => 
        array (
          0 => 'variable_realm.class.inc',
          1 => 'variable_realm_union.class.inc',
        ),
        'project' => 'variable',
        'datestamp' => '1398250128',
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-2.5',
    ),
    'variable_store' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/variable/variable_store/variable_store.module',
      'name' => 'variable_store',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable store',
        'description' => 'Database storage for variable realms. This is an API module.',
        'dependencies' => 
        array (
          0 => 'variable',
        ),
        'package' => 'Variable',
        'core' => '7.x',
        'version' => '7.x-2.5',
        'files' => 
        array (
          0 => 'variable_store.class.inc',
          1 => 'variable_store.test',
        ),
        'project' => 'variable',
        'datestamp' => '1398250128',
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-2.5',
    ),
    'variable_views' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/variable/variable_views/variable_views.module',
      'name' => 'variable_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable views',
        'description' => 'Provides views integration for variable, included a default variable argument.',
        'dependencies' => 
        array (
          0 => 'variable',
          1 => 'views',
        ),
        'package' => 'Variable',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/views_plugin_argument_default_variable.inc',
          1 => 'includes/views_handler_field_variable_title.inc',
          2 => 'includes/views_handler_field_variable_value.inc',
        ),
        'version' => '7.x-2.5',
        'project' => 'variable',
        'datestamp' => '1398250128',
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-2.5',
    ),
    'views' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/views/views.module',
      'name' => 'views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7302',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Views',
        'description' => 'Create customized lists and queries from your database.',
        'package' => 'Views',
        'core' => '7.x',
        'php' => '5.2',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/views.css',
          ),
        ),
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'handlers/views_handler_area.inc',
          1 => 'handlers/views_handler_area_messages.inc',
          2 => 'handlers/views_handler_area_result.inc',
          3 => 'handlers/views_handler_area_text.inc',
          4 => 'handlers/views_handler_area_text_custom.inc',
          5 => 'handlers/views_handler_area_view.inc',
          6 => 'handlers/views_handler_argument.inc',
          7 => 'handlers/views_handler_argument_date.inc',
          8 => 'handlers/views_handler_argument_formula.inc',
          9 => 'handlers/views_handler_argument_many_to_one.inc',
          10 => 'handlers/views_handler_argument_null.inc',
          11 => 'handlers/views_handler_argument_numeric.inc',
          12 => 'handlers/views_handler_argument_string.inc',
          13 => 'handlers/views_handler_argument_group_by_numeric.inc',
          14 => 'handlers/views_handler_field.inc',
          15 => 'handlers/views_handler_field_counter.inc',
          16 => 'handlers/views_handler_field_boolean.inc',
          17 => 'handlers/views_handler_field_contextual_links.inc',
          18 => 'handlers/views_handler_field_custom.inc',
          19 => 'handlers/views_handler_field_date.inc',
          20 => 'handlers/views_handler_field_entity.inc',
          21 => 'handlers/views_handler_field_markup.inc',
          22 => 'handlers/views_handler_field_math.inc',
          23 => 'handlers/views_handler_field_numeric.inc',
          24 => 'handlers/views_handler_field_prerender_list.inc',
          25 => 'handlers/views_handler_field_time_interval.inc',
          26 => 'handlers/views_handler_field_serialized.inc',
          27 => 'handlers/views_handler_field_machine_name.inc',
          28 => 'handlers/views_handler_field_url.inc',
          29 => 'handlers/views_handler_filter.inc',
          30 => 'handlers/views_handler_filter_boolean_operator.inc',
          31 => 'handlers/views_handler_filter_boolean_operator_string.inc',
          32 => 'handlers/views_handler_filter_combine.inc',
          33 => 'handlers/views_handler_filter_date.inc',
          34 => 'handlers/views_handler_filter_equality.inc',
          35 => 'handlers/views_handler_filter_entity_bundle.inc',
          36 => 'handlers/views_handler_filter_group_by_numeric.inc',
          37 => 'handlers/views_handler_filter_in_operator.inc',
          38 => 'handlers/views_handler_filter_many_to_one.inc',
          39 => 'handlers/views_handler_filter_numeric.inc',
          40 => 'handlers/views_handler_filter_string.inc',
          41 => 'handlers/views_handler_filter_fields_compare.inc',
          42 => 'handlers/views_handler_relationship.inc',
          43 => 'handlers/views_handler_relationship_groupwise_max.inc',
          44 => 'handlers/views_handler_sort.inc',
          45 => 'handlers/views_handler_sort_date.inc',
          46 => 'handlers/views_handler_sort_formula.inc',
          47 => 'handlers/views_handler_sort_group_by_numeric.inc',
          48 => 'handlers/views_handler_sort_menu_hierarchy.inc',
          49 => 'handlers/views_handler_sort_random.inc',
          50 => 'includes/base.inc',
          51 => 'includes/handlers.inc',
          52 => 'includes/plugins.inc',
          53 => 'includes/view.inc',
          54 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
          55 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
          56 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
          57 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
          58 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
          59 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
          60 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
          61 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
          62 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
          63 => 'modules/book/views_plugin_argument_default_book_root.inc',
          64 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
          65 => 'modules/comment/views_handler_field_comment.inc',
          66 => 'modules/comment/views_handler_field_comment_depth.inc',
          67 => 'modules/comment/views_handler_field_comment_link.inc',
          68 => 'modules/comment/views_handler_field_comment_link_approve.inc',
          69 => 'modules/comment/views_handler_field_comment_link_delete.inc',
          70 => 'modules/comment/views_handler_field_comment_link_edit.inc',
          71 => 'modules/comment/views_handler_field_comment_link_reply.inc',
          72 => 'modules/comment/views_handler_field_comment_node_link.inc',
          73 => 'modules/comment/views_handler_field_comment_username.inc',
          74 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
          75 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
          76 => 'modules/comment/views_handler_field_node_comment.inc',
          77 => 'modules/comment/views_handler_field_node_new_comments.inc',
          78 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
          79 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
          80 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
          81 => 'modules/comment/views_handler_filter_node_comment.inc',
          82 => 'modules/comment/views_handler_sort_comment_thread.inc',
          83 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
          84 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
          85 => 'modules/comment/views_plugin_row_comment_rss.inc',
          86 => 'modules/comment/views_plugin_row_comment_view.inc',
          87 => 'modules/contact/views_handler_field_contact_link.inc',
          88 => 'modules/field/views_handler_field_field.inc',
          89 => 'modules/field/views_handler_relationship_entity_reverse.inc',
          90 => 'modules/field/views_handler_argument_field_list.inc',
          91 => 'modules/field/views_handler_filter_field_list_boolean.inc',
          92 => 'modules/field/views_handler_argument_field_list_string.inc',
          93 => 'modules/field/views_handler_filter_field_list.inc',
          94 => 'modules/filter/views_handler_field_filter_format_name.inc',
          95 => 'modules/locale/views_handler_field_node_language.inc',
          96 => 'modules/locale/views_handler_filter_node_language.inc',
          97 => 'modules/locale/views_handler_argument_locale_group.inc',
          98 => 'modules/locale/views_handler_argument_locale_language.inc',
          99 => 'modules/locale/views_handler_field_locale_group.inc',
          100 => 'modules/locale/views_handler_field_locale_language.inc',
          101 => 'modules/locale/views_handler_field_locale_link_edit.inc',
          102 => 'modules/locale/views_handler_filter_locale_group.inc',
          103 => 'modules/locale/views_handler_filter_locale_language.inc',
          104 => 'modules/locale/views_handler_filter_locale_version.inc',
          105 => 'modules/node/views_handler_argument_dates_various.inc',
          106 => 'modules/node/views_handler_argument_node_language.inc',
          107 => 'modules/node/views_handler_argument_node_nid.inc',
          108 => 'modules/node/views_handler_argument_node_type.inc',
          109 => 'modules/node/views_handler_argument_node_vid.inc',
          110 => 'modules/node/views_handler_argument_node_uid_revision.inc',
          111 => 'modules/node/views_handler_field_history_user_timestamp.inc',
          112 => 'modules/node/views_handler_field_node.inc',
          113 => 'modules/node/views_handler_field_node_link.inc',
          114 => 'modules/node/views_handler_field_node_link_delete.inc',
          115 => 'modules/node/views_handler_field_node_link_edit.inc',
          116 => 'modules/node/views_handler_field_node_revision.inc',
          117 => 'modules/node/views_handler_field_node_revision_link.inc',
          118 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
          119 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
          120 => 'modules/node/views_handler_field_node_path.inc',
          121 => 'modules/node/views_handler_field_node_type.inc',
          122 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
          123 => 'modules/node/views_handler_filter_node_access.inc',
          124 => 'modules/node/views_handler_filter_node_status.inc',
          125 => 'modules/node/views_handler_filter_node_type.inc',
          126 => 'modules/node/views_handler_filter_node_uid_revision.inc',
          127 => 'modules/node/views_plugin_argument_default_node.inc',
          128 => 'modules/node/views_plugin_argument_validate_node.inc',
          129 => 'modules/node/views_plugin_row_node_rss.inc',
          130 => 'modules/node/views_plugin_row_node_view.inc',
          131 => 'modules/profile/views_handler_field_profile_date.inc',
          132 => 'modules/profile/views_handler_field_profile_list.inc',
          133 => 'modules/profile/views_handler_filter_profile_selection.inc',
          134 => 'modules/search/views_handler_argument_search.inc',
          135 => 'modules/search/views_handler_field_search_score.inc',
          136 => 'modules/search/views_handler_filter_search.inc',
          137 => 'modules/search/views_handler_sort_search_score.inc',
          138 => 'modules/search/views_plugin_row_search_view.inc',
          139 => 'modules/statistics/views_handler_field_accesslog_path.inc',
          140 => 'modules/system/views_handler_argument_file_fid.inc',
          141 => 'modules/system/views_handler_field_file.inc',
          142 => 'modules/system/views_handler_field_file_extension.inc',
          143 => 'modules/system/views_handler_field_file_filemime.inc',
          144 => 'modules/system/views_handler_field_file_uri.inc',
          145 => 'modules/system/views_handler_field_file_status.inc',
          146 => 'modules/system/views_handler_filter_file_status.inc',
          147 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
          148 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
          149 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
          150 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
          151 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
          152 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
          153 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
          154 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
          155 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
          156 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
          157 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
          158 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
          159 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
          160 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
          161 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
          162 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
          163 => 'modules/tracker/views_handler_argument_tracker_comment_user_uid.inc',
          164 => 'modules/tracker/views_handler_filter_tracker_comment_user_uid.inc',
          165 => 'modules/tracker/views_handler_filter_tracker_boolean_operator.inc',
          166 => 'modules/system/views_handler_filter_system_type.inc',
          167 => 'modules/translation/views_handler_argument_node_tnid.inc',
          168 => 'modules/translation/views_handler_field_node_link_translate.inc',
          169 => 'modules/translation/views_handler_field_node_translation_link.inc',
          170 => 'modules/translation/views_handler_filter_node_tnid.inc',
          171 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
          172 => 'modules/translation/views_handler_relationship_translation.inc',
          173 => 'modules/user/views_handler_argument_user_uid.inc',
          174 => 'modules/user/views_handler_argument_users_roles_rid.inc',
          175 => 'modules/user/views_handler_field_user.inc',
          176 => 'modules/user/views_handler_field_user_language.inc',
          177 => 'modules/user/views_handler_field_user_link.inc',
          178 => 'modules/user/views_handler_field_user_link_cancel.inc',
          179 => 'modules/user/views_handler_field_user_link_edit.inc',
          180 => 'modules/user/views_handler_field_user_mail.inc',
          181 => 'modules/user/views_handler_field_user_name.inc',
          182 => 'modules/user/views_handler_field_user_permissions.inc',
          183 => 'modules/user/views_handler_field_user_picture.inc',
          184 => 'modules/user/views_handler_field_user_roles.inc',
          185 => 'modules/user/views_handler_filter_user_current.inc',
          186 => 'modules/user/views_handler_filter_user_name.inc',
          187 => 'modules/user/views_handler_filter_user_permissions.inc',
          188 => 'modules/user/views_handler_filter_user_roles.inc',
          189 => 'modules/user/views_plugin_argument_default_current_user.inc',
          190 => 'modules/user/views_plugin_argument_default_user.inc',
          191 => 'modules/user/views_plugin_argument_validate_user.inc',
          192 => 'modules/user/views_plugin_row_user_view.inc',
          193 => 'plugins/views_plugin_access.inc',
          194 => 'plugins/views_plugin_access_none.inc',
          195 => 'plugins/views_plugin_access_perm.inc',
          196 => 'plugins/views_plugin_access_role.inc',
          197 => 'plugins/views_plugin_argument_default.inc',
          198 => 'plugins/views_plugin_argument_default_php.inc',
          199 => 'plugins/views_plugin_argument_default_fixed.inc',
          200 => 'plugins/views_plugin_argument_default_raw.inc',
          201 => 'plugins/views_plugin_argument_validate.inc',
          202 => 'plugins/views_plugin_argument_validate_numeric.inc',
          203 => 'plugins/views_plugin_argument_validate_php.inc',
          204 => 'plugins/views_plugin_cache.inc',
          205 => 'plugins/views_plugin_cache_none.inc',
          206 => 'plugins/views_plugin_cache_time.inc',
          207 => 'plugins/views_plugin_display.inc',
          208 => 'plugins/views_plugin_display_attachment.inc',
          209 => 'plugins/views_plugin_display_block.inc',
          210 => 'plugins/views_plugin_display_default.inc',
          211 => 'plugins/views_plugin_display_embed.inc',
          212 => 'plugins/views_plugin_display_extender.inc',
          213 => 'plugins/views_plugin_display_feed.inc',
          214 => 'plugins/views_plugin_display_page.inc',
          215 => 'plugins/views_plugin_exposed_form_basic.inc',
          216 => 'plugins/views_plugin_exposed_form.inc',
          217 => 'plugins/views_plugin_exposed_form_input_required.inc',
          218 => 'plugins/views_plugin_localization_core.inc',
          219 => 'plugins/views_plugin_localization.inc',
          220 => 'plugins/views_plugin_localization_none.inc',
          221 => 'plugins/views_plugin_pager.inc',
          222 => 'plugins/views_plugin_pager_full.inc',
          223 => 'plugins/views_plugin_pager_mini.inc',
          224 => 'plugins/views_plugin_pager_none.inc',
          225 => 'plugins/views_plugin_pager_some.inc',
          226 => 'plugins/views_plugin_query.inc',
          227 => 'plugins/views_plugin_query_default.inc',
          228 => 'plugins/views_plugin_row.inc',
          229 => 'plugins/views_plugin_row_fields.inc',
          230 => 'plugins/views_plugin_row_rss_fields.inc',
          231 => 'plugins/views_plugin_style.inc',
          232 => 'plugins/views_plugin_style_default.inc',
          233 => 'plugins/views_plugin_style_grid.inc',
          234 => 'plugins/views_plugin_style_list.inc',
          235 => 'plugins/views_plugin_style_jump_menu.inc',
          236 => 'plugins/views_plugin_style_mapping.inc',
          237 => 'plugins/views_plugin_style_rss.inc',
          238 => 'plugins/views_plugin_style_summary.inc',
          239 => 'plugins/views_plugin_style_summary_jump_menu.inc',
          240 => 'plugins/views_plugin_style_summary_unformatted.inc',
          241 => 'plugins/views_plugin_style_table.inc',
          242 => 'tests/handlers/views_handlers.test',
          243 => 'tests/handlers/views_handler_area_text.test',
          244 => 'tests/handlers/views_handler_argument_null.test',
          245 => 'tests/handlers/views_handler_argument_string.test',
          246 => 'tests/handlers/views_handler_field.test',
          247 => 'tests/handlers/views_handler_field_boolean.test',
          248 => 'tests/handlers/views_handler_field_custom.test',
          249 => 'tests/handlers/views_handler_field_counter.test',
          250 => 'tests/handlers/views_handler_field_date.test',
          251 => 'tests/handlers/views_handler_field_file_extension.test',
          252 => 'tests/handlers/views_handler_field_file_size.test',
          253 => 'tests/handlers/views_handler_field_math.test',
          254 => 'tests/handlers/views_handler_field_url.test',
          255 => 'tests/handlers/views_handler_field_xss.test',
          256 => 'tests/handlers/views_handler_filter_combine.test',
          257 => 'tests/handlers/views_handler_filter_date.test',
          258 => 'tests/handlers/views_handler_filter_equality.test',
          259 => 'tests/handlers/views_handler_filter_in_operator.test',
          260 => 'tests/handlers/views_handler_filter_numeric.test',
          261 => 'tests/handlers/views_handler_filter_string.test',
          262 => 'tests/handlers/views_handler_sort_random.test',
          263 => 'tests/handlers/views_handler_sort_date.test',
          264 => 'tests/handlers/views_handler_sort.test',
          265 => 'tests/test_handlers/views_test_area_access.inc',
          266 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
          267 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
          268 => 'tests/test_plugins/views_test_plugin_style_test_mapping.inc',
          269 => 'tests/plugins/views_plugin_display.test',
          270 => 'tests/styles/views_plugin_style_jump_menu.test',
          271 => 'tests/styles/views_plugin_style.test',
          272 => 'tests/styles/views_plugin_style_base.test',
          273 => 'tests/styles/views_plugin_style_mapping.test',
          274 => 'tests/styles/views_plugin_style_unformatted.test',
          275 => 'tests/views_access.test',
          276 => 'tests/views_analyze.test',
          277 => 'tests/views_basic.test',
          278 => 'tests/views_argument_default.test',
          279 => 'tests/views_argument_validator.test',
          280 => 'tests/views_exposed_form.test',
          281 => 'tests/field/views_fieldapi.test',
          282 => 'tests/views_glossary.test',
          283 => 'tests/views_groupby.test',
          284 => 'tests/views_handlers.test',
          285 => 'tests/views_module.test',
          286 => 'tests/views_pager.test',
          287 => 'tests/views_plugin_localization_test.inc',
          288 => 'tests/views_translatable.test',
          289 => 'tests/views_query.test',
          290 => 'tests/views_upgrade.test',
          291 => 'tests/views_test.views_default.inc',
          292 => 'tests/comment/views_handler_argument_comment_user_uid.test',
          293 => 'tests/comment/views_handler_filter_comment_user_uid.test',
          294 => 'tests/node/views_node_revision_relations.test',
          295 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
          296 => 'tests/user/views_handler_field_user_name.test',
          297 => 'tests/user/views_user_argument_default.test',
          298 => 'tests/user/views_user_argument_validate.test',
          299 => 'tests/user/views_user.test',
          300 => 'tests/views_cache.test',
          301 => 'tests/views_view.test',
          302 => 'tests/views_ui.test',
        ),
        'version' => '7.x-3.13',
        'project' => 'views',
        'datestamp' => '1446804876',
      ),
      'project' => 'views',
      'version' => '7.x-3.13',
    ),
    'views_ui' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/views/views_ui.module',
      'name' => 'views_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views UI',
        'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
        'package' => 'Views',
        'core' => '7.x',
        'configure' => 'admin/structure/views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'views_ui.module',
          1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
        ),
        'version' => '7.x-3.13',
        'project' => 'views',
        'datestamp' => '1446804876',
        'php' => '5.2.4',
      ),
      'project' => 'views',
      'version' => '7.x-3.13',
    ),
    'actions_permissions' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/views_bulk_operations/actions_permissions.module',
      'name' => 'actions_permissions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Actions permissions (VBO)',
        'description' => 'Provides permission-based access control for actions. Used by Views Bulk Operations.',
        'package' => 'Administration',
        'core' => '7.x',
        'version' => '7.x-3.3',
        'project' => 'views_bulk_operations',
        'datestamp' => '1435764542',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'views_bulk_operations',
      'version' => '7.x-3.3',
    ),
    'views_bulk_operations' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/views_bulk_operations/views_bulk_operations.module',
      'name' => 'views_bulk_operations',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Bulk Operations',
        'description' => 'Provides a way of selecting multiple rows and applying operations to them.',
        'dependencies' => 
        array (
          0 => 'entity',
          1 => 'views',
        ),
        'package' => 'Views',
        'core' => '7.x',
        'php' => '5.2.9',
        'files' => 
        array (
          0 => 'plugins/operation_types/base.class.php',
          1 => 'views/views_bulk_operations_handler_field_operations.inc',
        ),
        'version' => '7.x-3.3',
        'project' => 'views_bulk_operations',
        'datestamp' => '1435764542',
      ),
      'project' => 'views_bulk_operations',
      'version' => '7.x-3.3',
    ),
    'views_content_cache' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/views_content_cache/views_content_cache.module',
      'name' => 'views_content_cache',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Content Cache',
        'description' => 'Provides a views cache plugin based on content type changes.',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'plugins/views_content_cache/base.inc',
          1 => 'plugins/views_content_cache/comment.inc',
          2 => 'plugins/views_content_cache/node.inc',
          3 => 'plugins/views_content_cache/node_only.inc',
          4 => 'plugins/views_content_cache/og.inc',
          5 => 'plugins/views_content_cache/votingapi.inc',
          6 => 'views/views_content_cache_plugin_cache.inc',
          7 => 'tests/views_content_cache.test',
        ),
        'version' => '7.x-3.0-alpha3',
        'project' => 'views_content_cache',
        'datestamp' => '1383658110',
        'php' => '5.2.4',
      ),
      'project' => 'views_content_cache',
      'version' => '7.x-3.0-alpha3',
    ),
    'views_field_view' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/views_field_view/views_field_view.module',
      'name' => 'views_field_view',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Field View',
        'description' => 'Embeds a view inside a view as field',
        'core' => '7.x',
        'package' => 'Views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'views_field_view_handler_field_view.inc',
          1 => 'tests/views_field_view.test',
        ),
        'version' => '7.x-1.2',
        'project' => 'views_field_view',
        'datestamp' => '1442561052',
        'php' => '5.2.4',
      ),
      'project' => 'views_field_view',
      'version' => '7.x-1.2',
    ),
    'views_tree' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/views_tree/views_tree.module',
      'name' => 'views_tree',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Tree',
        'description' => 'A Views style plugin to display a tree of elements using the adjacency model.',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'views_tree_plugin_style_tree.inc',
        ),
        'version' => '7.x-2.0',
        'project' => 'views_tree',
        'datestamp' => '1332368746',
        'php' => '5.2.4',
      ),
      'project' => 'views_tree',
      'version' => '7.x-2.0',
    ),
    'weight' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/weight/weight.module',
      'name' => 'weight',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Weight',
        'description' => 'Add a weight field to nodes.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'views/weight_handler_field_weight.inc',
          1 => 'views/weight_handler_filter_weight_enabled.inc',
          2 => 'weight.migrate.inc',
        ),
        'version' => '7.x-2.5',
        'project' => 'weight',
        'datestamp' => '1430342647',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'weight',
      'version' => '7.x-2.5',
    ),
    'workbench' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/workbench/workbench.module',
      'name' => 'workbench',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Workbench',
        'description' => 'Workbench editorial suite.',
        'package' => 'Workbench',
        'core' => '7.x',
        'configure' => 'admin/config/workbench/settings',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'version' => '7.x-1.2',
        'project' => 'workbench',
        'datestamp' => '1358534592',
        'php' => '5.2.4',
      ),
      'project' => 'workbench',
      'version' => '7.x-1.2',
    ),
    'workbench_moderation' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/workbench_moderation/workbench_moderation.module',
      'name' => 'workbench_moderation',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7010',
      'weight' => '5',
      'info' => 
      array (
        'name' => 'Workbench Moderation',
        'description' => 'Provides content moderation services',
        'package' => 'Workbench',
        'core' => '7.x',
        'configure' => 'admin/config/workbench/moderation',
        'files' => 
        array (
          0 => 'workbench_moderation.module',
          1 => 'includes/workbench_moderation_handler_field_history_link.inc',
          2 => 'includes/workbench_moderation_handler_field_links.inc',
          3 => 'includes/workbench_moderation_handler_field_state.inc',
          4 => 'includes/workbench_moderation_handler_filter_state.inc',
          5 => 'includes/workbench_moderation_handler_filter_moderated_type.inc',
          6 => 'includes/workbench_moderation_handler_filter_user_can_moderate.inc',
          7 => 'workbench_moderation.migrate.inc',
          8 => 'tests/external_node_update.test',
          9 => 'tests/workbench_moderation.test',
          10 => 'tests/workbench_moderation.files.test',
        ),
        'version' => '7.x-1.4',
        'project' => 'workbench_moderation',
        'datestamp' => '1424191727',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'workbench_moderation',
      'version' => '7.x-1.4',
    ),
    'workbench_scheduler' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/contrib/workbench_scheduler/workbench_scheduler.module',
      'name' => 'workbench_scheduler',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Workbench Scheduler',
        'description' => 'Provides ability to schedule state changes',
        'package' => 'Workbench',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'workbench_moderation',
          1 => 'date',
          2 => 'date_popup',
        ),
        'version' => '7.x-1.8',
        'project' => 'workbench_scheduler',
        'datestamp' => '1448038142',
        'php' => '5.2.4',
      ),
      'project' => 'workbench_scheduler',
      'version' => '7.x-1.8',
    ),
    'apachesolr_themer' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016',
      'name' => 'apachesolr_themer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'copyright_block' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/custom/copyright_block/copyright_block.module',
      'name' => 'copyright_block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Copyright block',
        'description' => 'A block to display copyright information for the current year.',
        'core' => '7.x',
        'package' => 'Miscellaneous',
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'energy_council_mailchimp' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/custom/energy_council_mailchimp/energy_council_mailchimp.module',
      'name' => 'energy_council_mailchimp',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Energy Council Mailchimp',
        'description' => 'Mailchimp subscription bock',
        'core' => '7.x',
        'package' => 'Features',
        'version' => '7.x-2.0',
        'project' => 'energy_council_mailchimp',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'energy_council_mailchimp',
      'version' => '7.x-2.0',
    ),
    'redirect_and_show_url' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/custom/redirect_and_show_url/redirect_and_show_url.module',
      'name' => 'redirect_and_show_url',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Redirect and Show URL',
        'description' => 'Redirects authors to the ST URL & provides them with live URL link to content.',
        'core' => '7.x',
        'package' => 'Features',
        'version' => '7.x-1.42',
        'project' => 'redirect_and_show_url',
        'dependencies' => 
        array (
          0 => 'entity',
          1 => 'fe_block',
          2 => 'features',
          3 => 'filter',
          4 => 'rules',
          5 => 'rules_admin',
          6 => 'token_filter',
        ),
        'configure' => 'admin/config/system/redirect/url',
        'features' => 
        array (
          'fe_block_boxes' => 
          array (
            0 => 'live_link',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'filter' => 
          array (
            0 => 'full_html',
          ),
          'rules_config' => 
          array (
            0 => 'rules_login_redirect_to_st',
          ),
        ),
        'php' => '5.2.4',
      ),
      'project' => 'redirect_and_show_url',
      'version' => '7.x-1.42',
    ),
    'search_path_unset' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016',
      'name' => 'search_path_unset',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'shs_any_override' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016',
      'name' => 'shs_any_override',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'views_file_extension' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/custom/views_file_extension/views_file_extension.module',
      'name' => 'views_file_extension',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views File Extension Filter',
        'description' => 'Provides a file extensions filter and handler for Views.',
        'core' => '7.x',
        'package' => 'Views',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'file_entity',
        ),
        'files' => 
        array (
          0 => 'views_handler_filter_file_extension.inc',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'consultations' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/features/consultations/consultations.module',
      'name' => 'consultations',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Consultations',
        'description' => 'A generic consultation feature with feed, home page panel and detail view. Requires a node panel.',
        'core' => '7.x',
        'package' => 'Features',
        'version' => '7.x-1.7',
        'project' => 'consultations',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'date',
          2 => 'ds',
          3 => 'energy_council_work_streams',
          4 => 'features',
          5 => 'feeds',
          6 => 'feeds_jsonpath_parser',
          7 => 'link',
          8 => 'news_item',
          9 => 'page_manager',
          10 => 'publications',
          11 => 'shs',
          12 => 'strongarm',
          13 => 'taxonomy',
          14 => 'text',
          15 => 'views',
          16 => 'views_content',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'ds:ds:1',
            1 => 'feeds:feeds_importer_default:1',
            2 => 'page_manager:pages_default:1',
            3 => 'strongarm:strongarm:1',
            4 => 'views:views_default:3.0',
          ),
          'ds_field_settings' => 
          array (
            0 => 'node|consultation|default',
            1 => 'node|consultation|search_index',
            2 => 'node|consultation|search_result',
          ),
          'ds_layout_settings' => 
          array (
            0 => 'node|consultation|default',
            1 => 'node|consultation|search_index',
            2 => 'node|consultation|search_result',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'feeds_importer' => 
          array (
            0 => 'consult_industry_gov_au',
          ),
          'field_base' => 
          array (
            0 => 'field_consultation_id',
            1 => 'field_start_date',
            2 => 'field_url',
          ),
          'field_instance' => 
          array (
            0 => 'node-consultation-body',
            1 => 'node-consultation-field_consultation_id',
            2 => 'node-consultation-field_council_priority_issue',
            3 => 'node-consultation-field_start_date',
            4 => 'node-consultation-field_url',
          ),
          'node' => 
          array (
            0 => 'consultation',
          ),
          'page_manager_handlers' => 
          array (
            0 => 'node_view__consultations',
          ),
          'page_manager_pages' => 
          array (
            0 => 'consultations',
          ),
          'variable' => 
          array (
            0 => 'field_bundle_settings_node__consultation',
            1 => 'menu_options_consultation',
            2 => 'menu_parent_consultation',
            3 => 'node_options_consultation',
            4 => 'node_preview_consultation',
            5 => 'node_submitted_consultation',
          ),
          'views_view' => 
          array (
            0 => 'consultations',
          ),
        ),
        'php' => '5.2.4',
      ),
      'project' => 'consultations',
      'version' => '7.x-1.7',
    ),
    'energy_council_about_block' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/features/energy_council_about_block/energy_council_about_block.module',
      'name' => 'energy_council_about_block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Energy Council: About block',
        'description' => 'Provides a short \'About this site\' block for the footer of the site.',
        'core' => '7.x',
        'package' => 'Features',
        'version' => '7.x-1.0',
        'project' => 'energy_council_about_block',
        'dependencies' => 
        array (
          0 => 'fe_block',
        ),
        'features' => 
        array (
          'fe_block_boxes' => 
          array (
            0 => 'about_this_site',
          ),
          'fe_block_settings' => 
          array (
            0 => 'block-about_this_site',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
        ),
        'php' => '5.2.4',
      ),
      'project' => 'energy_council_about_block',
      'version' => '7.x-1.0',
    ),
    'energy_council_basic_page' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/features/energy_council_basic_page/energy_council_basic_page.module',
      'name' => 'energy_council_basic_page',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Energy Council Basic Page',
        'description' => 'A basic page type, with associated displays.',
        'core' => '7.x',
        'package' => 'Features',
        'version' => '7.x-1.2',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'ds',
          2 => 'energy_council_work_streams',
          3 => 'features',
          4 => 'news_item',
          5 => 'page_manager',
          6 => 'shs',
          7 => 'strongarm',
          8 => 'taxonomy',
          9 => 'text',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'ds:ds:1',
            1 => 'page_manager:pages_default:1',
            2 => 'strongarm:strongarm:1',
          ),
          'ds_field_settings' => 
          array (
            0 => 'node|page|search_index',
            1 => 'node|page|search_result',
          ),
          'ds_layout_settings' => 
          array (
            0 => 'node|page|default',
            1 => 'node|page|search_index',
            2 => 'node|page|search_result',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'field_instance' => 
          array (
            0 => 'node-page-body',
            1 => 'node-page-field_council_priority_issue',
          ),
          'node' => 
          array (
            0 => 'page',
          ),
          'page_manager_handlers' => 
          array (
            0 => 'node_view__basic_page',
          ),
          'variable' => 
          array (
            0 => 'field_bundle_settings_node__page',
            1 => 'menu_options_page',
            2 => 'menu_parent_page',
            3 => 'node_options_page',
            4 => 'node_preview_page',
            5 => 'node_submitted_page',
          ),
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.x-1.2',
    ),
    'energy_council_council_meetings_full' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/features/energy_council_council_meetings_full/energy_council_council_meetings_full.module',
      'name' => 'energy_council_council_meetings_full',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Energy Council: Council Meetings Full',
        'description' => 'Provides a full list of the council meetings along with a page.',
        'core' => '7.x',
        'package' => 'Features',
        'version' => '7.x-1.2',
        'project' => 'energy_council_council_meetings_full',
        'dependencies' => 
        array (
          0 => 'page_manager',
          1 => 'views',
          2 => 'views_content',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'page_manager:pages_default:1',
            1 => 'views:views_default:3.0',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'page_manager_pages' => 
          array (
            0 => 'council_meetings',
          ),
          'views_view' => 
          array (
            0 => 'council_meetings_list',
          ),
        ),
        'features_exclude' => 
        array (
          'dependencies' => 
          array (
            'ctools' => 'ctools',
          ),
        ),
        'php' => '5.2.4',
      ),
      'project' => 'energy_council_council_meetings_full',
      'version' => '7.x-1.2',
    ),
    'energy_council_council_meetings_home_page' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/features/energy_council_council_meetings_home_page/energy_council_council_meetings_home_page.module',
      'name' => 'energy_council_council_meetings_home_page',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Energy Council: Council Meetings Home Page',
        'description' => 'Provides a view for the home page of the Energy Council website.',
        'core' => '7.x',
        'package' => 'Features',
        'version' => '7.x-1.2',
        'project' => 'energy_council_council_meetings_home_page',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'views_content',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'views:views_default:3.0',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'views_view' => 
          array (
            0 => 'council_meetings_list_home_page',
          ),
        ),
        'features_exclude' => 
        array (
          'dependencies' => 
          array (
            'ctools' => 'ctools',
          ),
        ),
        'php' => '5.2.4',
      ),
      'project' => 'energy_council_council_meetings_home_page',
      'version' => '7.x-1.2',
    ),
    'energy_council_council_meeting_content_type' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/features/energy_council_council_meeting_content_type/energy_council_council_meeting_content_type.module',
      'name' => 'energy_council_council_meeting_content_type',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Energy Council: Council meeting content type',
        'description' => 'Creates a \'council meeting\' content type.',
        'core' => '7.x',
        'package' => 'Features',
        'version' => '7.x-1.0',
        'project' => 'energy_council_council_meeting_content_type',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'date',
          2 => 'features',
          3 => 'file',
          4 => 'options',
          5 => 'strongarm',
          6 => 'taxonomy',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'field_base' => 
          array (
            0 => 'field_attachments',
            1 => 'field_date',
            2 => 'field_meeting_type',
          ),
          'field_instance' => 
          array (
            0 => 'node-council_meetings-field_attachments',
            1 => 'node-council_meetings-field_date',
            2 => 'node-council_meetings-field_meeting_type',
          ),
          'node' => 
          array (
            0 => 'council_meetings',
          ),
          'taxonomy' => 
          array (
            0 => 'meeting_type',
          ),
          'variable' => 
          array (
            0 => 'field_bundle_settings_node__council_meetings',
            1 => 'menu_options_council_meetings',
            2 => 'menu_parent_council_meetings',
            3 => 'node_options_council_meetings',
            4 => 'node_preview_council_meetings',
            5 => 'node_submitted_council_meetings',
          ),
        ),
        'php' => '5.2.4',
      ),
      'project' => 'energy_council_council_meeting_content_type',
      'version' => '7.x-1.0',
    ),
    'energy_council_council_priorities' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/features/energy_council_council_priorities/energy_council_council_priorities.module',
      'name' => 'energy_council_council_priorities',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Energy Council: Council Priorities',
        'description' => 'Bits and pieces related to Council Priorities.',
        'core' => '7.x',
        'package' => 'Features',
        'version' => '7.x-1.1',
        'dependencies' => 
        array (
          0 => 'page_manager',
          1 => 'views',
          2 => 'views_content',
          3 => 'views_tree',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'page_manager:pages_default:1',
            1 => 'views:views_default:3.0',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'page_manager_handlers' => 
          array (
            0 => 'term_view__council_priorities',
          ),
          'page_manager_pages' => 
          array (
            0 => 'council_priorities',
          ),
          'views_view' => 
          array (
            0 => 'council_priorities',
          ),
        ),
        'features_exclude' => 
        array (
          'dependencies' => 
          array (
            'ctools' => 'ctools',
          ),
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.x-1.1',
    ),
    'energy_council_home_page' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/features/energy_council_home_page/energy_council_home_page.module',
      'name' => 'energy_council_home_page',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Energy Council Home Page',
        'description' => 'The home page for the Energy Council home page.',
        'core' => '7.x',
        'package' => 'Features',
        'version' => '7.x-1.16',
        'project' => 'energy_council_home_page',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'page_manager',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'page_manager:pages_default:1',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'page_manager_pages' => 
          array (
            0 => 'home',
          ),
        ),
        'php' => '5.2.4',
      ),
      'project' => 'energy_council_home_page',
      'version' => '7.x-1.16',
    ),
    'energy_council_menus' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/features/energy_council_menus/energy_council_menus.module',
      'name' => 'energy_council_menus',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Energy Council Menus',
        'description' => 'Provides stub menus for the Energy Council website',
        'core' => '7.x',
        'package' => 'Features',
        'version' => '7.x-1.11',
        'dependencies' => 
        array (
          0 => 'fe_block',
          1 => 'features',
          2 => 'menu',
          3 => 'superfish',
        ),
        'features' => 
        array (
          'fe_block_settings' => 
          array (
            0 => 'menu-menu-footer',
            1 => 'menu-menu-header-menu',
            2 => 'menu-menu-sub-footer',
            3 => 'superfish-1',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'menu_custom' => 
          array (
            0 => 'main-menu',
            1 => 'menu-header-menu',
            2 => 'menu-sub-footer',
          ),
          'menu_links' => 
          array (
            0 => 'menu-header-menu_about-us:node/617',
            1 => 'menu-header-menu_contact-us:node/622',
            2 => 'menu-sub-footer_accessibility:<front>',
            3 => 'menu-sub-footer_disclaimer:<front>',
            4 => 'menu-sub-footer_privacy-statement:<front>',
            5 => 'menu-sub-footer_site-map:<front>',
          ),
        ),
        'features_exclude' => 
        array (
          'menu_links' => 
          array (
            'main-menu_cl-0:taxonomy/term/76' => 'main-menu_cl-0:taxonomy/term/76',
            'main-menu_brugubipu:taxonomy/term/79' => 'main-menu_brugubipu:taxonomy/term/79',
            'main-menu_hacla-1:taxonomy/term/81' => 'main-menu_hacla-1:taxonomy/term/81',
            'main-menu_soshape:taxonomy/term/83' => 'main-menu_soshape:taxonomy/term/83',
            'main-menu_friridap:taxonomy/term/82' => 'main-menu_friridap:taxonomy/term/82',
            'main-menu_dr:taxonomy/term/80' => 'main-menu_dr:taxonomy/term/80',
            'main-menu_na-0:taxonomy/term/74' => 'main-menu_na-0:taxonomy/term/74',
            'main-menu_bipriual-7:taxonomy/term/75' => 'main-menu_bipriual-7:taxonomy/term/75',
            'main-menu_swe:taxonomy/term/77' => 'main-menu_swe:taxonomy/term/77',
            'main-menu_vahovomi-1:taxonomy/term/78' => 'main-menu_vahovomi-1:taxonomy/term/78',
            'main-menu_council-priorities:council-priorities' => 'main-menu_council-priorities:council-priorities',
            'main-menu_stulac-0:taxonomy/term/37' => 'main-menu_stulac-0:taxonomy/term/37',
            'main-menu_wo-2:taxonomy/term/40' => 'main-menu_wo-2:taxonomy/term/40',
            'main-menu_br-27:taxonomy/term/38' => 'main-menu_br-27:taxonomy/term/38',
            'main-menu_chaprilidre:taxonomy/term/25' => 'main-menu_chaprilidre:taxonomy/term/25',
            'main-menu_tu:taxonomy/term/32' => 'main-menu_tu:taxonomy/term/32',
            'main-menu_phedr:taxonomy/term/34' => 'main-menu_phedr:taxonomy/term/34',
            'main-menu_phu:taxonomy/term/36' => 'main-menu_phu:taxonomy/term/36',
            'main-menu_frathi:taxonomy/term/26' => 'main-menu_frathi:taxonomy/term/26',
            'main-menu_clabenoshic:taxonomy/term/28' => 'main-menu_clabenoshic:taxonomy/term/28',
            'main-menu_gislu:taxonomy/term/30' => 'main-menu_gislu:taxonomy/term/30',
            'main-menu_lironasoslu:taxonomy/term/27' => 'main-menu_lironasoslu:taxonomy/term/27',
            'main-menu_vushaprit:taxonomy/term/23' => 'main-menu_vushaprit:taxonomy/term/23',
            'main-menu_konistut:taxonomy/term/24' => 'main-menu_konistut:taxonomy/term/24',
            'main-menu_engagement:<nolink>' => 'main-menu_engagement:<nolink>',
          ),
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.x-1.11',
    ),
    'energy_council_news_list' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/features/energy_council_news_list/energy_council_news_list.module',
      'name' => 'energy_council_news_list',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Energy Council News List',
        'description' => 'A list displaying news items. Requires a \'news_item\' content type. Also includes a \'full list\' view.',
        'core' => '7.x',
        'package' => 'Features',
        'version' => '7.x-1.8',
        'project' => 'energy_council_news_list',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'ds',
          2 => 'features',
          3 => 'page_manager',
          4 => 'views',
          5 => 'views_content',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'ds:ds:1',
            1 => 'field_group:field_group:1',
            2 => 'page_manager:pages_default:1',
            3 => 'views:views_default:3.0',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'page_manager_pages' => 
          array (
            0 => 'all_news_items',
          ),
          'views_view' => 
          array (
            0 => 'news',
          ),
        ),
        'php' => '5.2.4',
      ),
      'project' => 'energy_council_news_list',
      'version' => '7.x-1.8',
    ),
    'energy_council_search' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/features/energy_council_search/energy_council_search.module',
      'name' => 'energy_council_search',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Energy Council Search',
        'description' => 'Provides search functionality for the Enrgy Council website.',
        'core' => '7.x',
        'package' => 'Features',
        'version' => '7.x-1.3',
        'project' => 'energy_council_search',
        'dependencies' => 
        array (
          0 => 'apachesolr',
          1 => 'apachesolr_panels',
          2 => 'apachesolr_search',
          3 => 'ctools',
          4 => 'custom_search_blocks',
          5 => 'facetapi',
          6 => 'fe_block',
          7 => 'page_manager',
        ),
        'features' => 
        array (
          'apachesolr_environment' => 
          array (
            0 => 'solr',
          ),
          'apachesolr_search_page' => 
          array (
            0 => 'core_search',
            1 => 'publications_search',
          ),
          'ctools' => 
          array (
            0 => 'apachesolr:apachesolr_environments:1',
            1 => 'apachesolr_search:apachesolr_search_defaults:3',
            2 => 'facetapi:facetapi_defaults:1',
            3 => 'page_manager:pages_default:1',
          ),
          'facetapi' => 
          array (
            0 => 'apachesolr@solr::bundle',
            1 => 'apachesolr@solr::dm_field_date',
            2 => 'apachesolr@solr::im_field_categories_reference',
            3 => 'apachesolr@solr::im_field_council_priority_issue',
            4 => 'apachesolr@solr::im_field_work_stream',
            5 => 'apachesolr@solr:block:author',
            6 => 'apachesolr@solr:block:bundle',
            7 => 'apachesolr@solr:block:changed',
            8 => 'apachesolr@solr:block:created',
            9 => 'apachesolr@solr:block:dm_field_date',
            10 => 'apachesolr@solr:block:dm_field_event_date',
            11 => 'apachesolr@solr:block:dm_field_start_date',
            12 => 'apachesolr@solr:block:im_field_categories_reference',
            13 => 'apachesolr@solr:block:im_field_council_priority_issue',
            14 => 'apachesolr@solr:block:im_field_event_type',
            15 => 'apachesolr@solr:block:im_field_meeting_type',
            16 => 'apachesolr@solr:block:im_field_related_documents',
            17 => 'apachesolr@solr:block:im_field_tags',
            18 => 'apachesolr@solr:block:im_field_work_stream',
            19 => 'apachesolr@solr:block:language',
            20 => 'apachesolr@solr:block:sm_field_consultation_id',
            21 => 'apachesolr@solr:block:sm_field_process_and_timelines',
            22 => 'apachesolr@solr:block:sm_field_project',
          ),
          'fe_block_settings' => 
          array (
            0 => 'apachesolr_panels-search_form',
            1 => 'custom_search_blocks-1',
            2 => 'custom_search_blocks-2',
            3 => 'facetapi-1vx93wKyU7HoAzs6sa0PMm14kMgfBQ1d',
            4 => 'facetapi-GiIy4zr9Gu0ZSa0bumw1Y9qIIpIDf1wu',
            5 => 'facetapi-Iki0WcR148qZFw325tteAwFXLCsn2BCf',
            6 => 'facetapi-YdDbjnk2RBNprs7zE0nyxz1qLyN16Ak0',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'page_manager_handlers' => 
          array (
            0 => 'search_apachesolr_search__site_search',
          ),
          'page_manager_pages' => 
          array (
            0 => 'publications_search',
            1 => 'site_search',
          ),
        ),
        'php' => '5.2.4',
      ),
      'project' => 'energy_council_search',
      'version' => '7.x-1.3',
    ),
    'energy_council_slider' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/features/energy_council_slider/energy_council_slider.module',
      'name' => 'energy_council_slider',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Energy Council Feature',
        'description' => 'A feature for the home page of the Energy Council website.',
        'core' => '7.x',
        'package' => 'Features',
        'version' => '7.x-1.2',
        'project' => 'energy_council_slider',
        'dependencies' => 
        array (
          0 => 'ds',
          1 => 'features',
          2 => 'flexslider_views',
          3 => 'views',
          4 => 'views_content',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'ds:ds:1',
            1 => 'field_group:field_group:1',
            2 => 'views:views_default:3.0',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'views_view' => 
          array (
            0 => 'news_slider',
          ),
        ),
        'features_exclude' => 
        array (
          'dependencies' => 
          array (
            'ctools' => 'ctools',
          ),
        ),
        'php' => '5.2.4',
      ),
      'project' => 'energy_council_slider',
      'version' => '7.x-1.2',
    ),
    'energy_council_work_streams' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/features/energy_council_work_streams/energy_council_work_streams.module',
      'name' => 'energy_council_work_streams',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Energy Council: Work Streams',
        'description' => 'Provides Work Streams and related functionality.',
        'core' => '7.x',
        'package' => 'Features',
        'version' => '7.x-1.12',
        'project' => 'energy_council_work_streams',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'ds',
          2 => 'features',
          3 => 'news_item',
          4 => 'node_reference',
          5 => 'options',
          6 => 'page_manager',
          7 => 'shs',
          8 => 'strongarm',
          9 => 'taxonomy',
          10 => 'text',
          11 => 'views',
          12 => 'views_content',
          13 => 'views_tree',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'ds:ds:1',
            1 => 'page_manager:pages_default:1',
            2 => 'strongarm:strongarm:1',
            3 => 'views:views_default:3.0',
          ),
          'ds_field_settings' => 
          array (
            0 => 'node|work_stream|default',
            1 => 'node|work_stream|search_result',
            2 => 'node|work_stream|teaser',
            3 => 'taxonomy_term|work_streams|default',
            4 => 'taxonomy_term|work_streams|full',
          ),
          'ds_layout_settings' => 
          array (
            0 => 'node|work_stream|default',
            1 => 'node|work_stream|search_result',
            2 => 'node|work_stream|teaser',
            3 => 'taxonomy_term|work_streams|default',
            4 => 'taxonomy_term|work_streams|full',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'field_base' => 
          array (
            0 => 'field_council_priority_issue',
            1 => 'field_related_documents',
          ),
          'field_instance' => 
          array (
            0 => 'node-work_stream-body',
            1 => 'node-work_stream-field_council_priority_issue',
            2 => 'node-work_stream-field_related_documents',
          ),
          'node' => 
          array (
            0 => 'work_stream',
          ),
          'page_manager_handlers' => 
          array (
            0 => 'node_view__work_streams',
            1 => 'term_view__work_stream',
          ),
          'page_manager_pages' => 
          array (
            0 => 'work_streams',
          ),
          'taxonomy' => 
          array (
            0 => 'priority_issues_of_national_significance',
          ),
          'variable' => 
          array (
            0 => 'field_bundle_settings_node__work_stream',
            1 => 'menu_options_work_stream',
            2 => 'menu_parent_work_stream',
            3 => 'node_options_work_stream',
            4 => 'node_preview_work_stream',
            5 => 'node_submitted_work_stream',
          ),
          'views_view' => 
          array (
            0 => 'work_streams',
          ),
        ),
        'features_exclude' => 
        array (
          'field_base' => 
          array (
            'field_work_stream_body' => 'field_work_stream_body',
          ),
          'field_instance' => 
          array (
            'taxonomy_term-work_streams-field_work_stream_body' => 'taxonomy_term-work_streams-field_work_stream_body',
          ),
        ),
        'php' => '5.2.4',
      ),
      'project' => 'energy_council_work_streams',
      'version' => '7.x-1.12',
    ),
    'events' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016',
      'name' => 'events',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'industry_events' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/features/industry_events/industry_events.module',
      'name' => 'industry_events',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Industry Events',
        'description' => 'An events content type, using panels and views.',
        'core' => '7.x',
        'package' => 'Features',
        'version' => '7.x-1.9',
        'project' => 'industry_events',
        'dependencies' => 
        array (
          0 => 'calendar',
          1 => 'ctools',
          2 => 'date',
          3 => 'date_ical',
          4 => 'date_views',
          5 => 'ds',
          6 => 'energy_council_work_streams',
          7 => 'features',
          8 => 'file',
          9 => 'link',
          10 => 'news_item',
          11 => 'page_manager',
          12 => 'publications',
          13 => 'shs',
          14 => 'strongarm',
          15 => 'taxonomy',
          16 => 'text',
          17 => 'views',
          18 => 'views_content',
          19 => 'views_tree',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'ds:ds:1',
            1 => 'page_manager:pages_default:1',
            2 => 'strongarm:strongarm:1',
            3 => 'views:views_default:3.0',
          ),
          'ds_field_settings' => 
          array (
            0 => 'node|event|default',
            1 => 'node|event|search_result',
          ),
          'ds_layout_settings' => 
          array (
            0 => 'node|event|default',
            1 => 'node|event|search_result',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'field_base' => 
          array (
            0 => 'field_event_attachments',
            1 => 'field_event_date',
            2 => 'field_event_link',
            3 => 'field_event_type',
          ),
          'field_instance' => 
          array (
            0 => 'node-event-body',
            1 => 'node-event-field_council_priority_issue',
            2 => 'node-event-field_event_attachments',
            3 => 'node-event-field_event_date',
            4 => 'node-event-field_event_link',
            5 => 'node-event-field_event_type',
          ),
          'node' => 
          array (
            0 => 'event',
          ),
          'page_manager_handlers' => 
          array (
            0 => 'node_view__events',
          ),
          'taxonomy' => 
          array (
            0 => 'event_type',
          ),
          'variable' => 
          array (
            0 => 'field_bundle_settings_node__event',
            1 => 'menu_options_event',
            2 => 'menu_parent_event',
            3 => 'node_options_event',
            4 => 'node_preview_event',
            5 => 'node_submitted_event',
          ),
          'views_view' => 
          array (
            0 => 'calendar',
            1 => 'event_type',
          ),
        ),
        'features_exclude' => 
        array (
          'dependencies' => 
          array (
            'hierarchical_select' => 'hierarchical_select',
          ),
        ),
        'php' => '5.2.4',
      ),
      'project' => 'industry_events',
      'version' => '7.x-1.9',
    ),
    'industry_workbench' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/features/industry_workbench/industry_workbench.module',
      'name' => 'industry_workbench',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Industry Workbench',
        'description' => 'Provides a workbench panel variant and associated views and workbench settings.',
        'core' => '7.x',
        'package' => 'Features',
        'version' => '7.x-1.1',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'page_manager',
          2 => 'views',
          3 => 'workbench_moderation',
          4 => 'workbench_moderation',
          5 => 'workbench_moderation',
          6 => 'workbench_scheduler',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'page_manager:pages_default:1',
            1 => 'views:views_default:3.0',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'page_manager_handlers' => 
          array (
            0 => 'myworkbench__panel_context_c426cf63-3a68-4833-ae9d-9b911ffda8ca',
          ),
          'views_view' => 
          array (
            0 => 'workbench_schedules',
          ),
          'workbench_moderation_states' => 
          array (
            0 => 'draft',
            1 => 'needs_review',
            2 => 'published',
          ),
          'workbench_moderation_transitions' => 
          array (
            0 => 'draft:needs_review',
            1 => 'needs_review:draft',
            2 => 'needs_review:published',
          ),
          'workbench_scheduler' => 
          array (
            0 => 'publish',
          ),
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.x-1.1',
    ),
    'news_item' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/features/news_item/news_item.module',
      'name' => 'news_item',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'News item',
        'description' => 'A \'news item\' content type.',
        'core' => '7.x',
        'package' => 'Features',
        'version' => '7.x-1.4',
        'project' => 'news_item',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'ds',
          2 => 'features',
          3 => 'field_group',
          4 => 'image',
          5 => 'strongarm',
          6 => 'text',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'ds:ds:1',
            1 => 'field_group:field_group:1',
            2 => 'strongarm:strongarm:1',
          ),
          'ds_field_settings' => 
          array (
            0 => 'node|news|default',
            1 => 'node|news|feature',
            2 => 'node|news|list',
            3 => 'node|news|search_result',
            4 => 'node|news|slideshow',
            5 => 'node|news|teaser',
          ),
          'ds_layout_settings' => 
          array (
            0 => 'node|news|default',
            1 => 'node|news|feature',
            2 => 'node|news|list',
            3 => 'node|news|search_result',
            4 => 'node|news|slideshow',
            5 => 'node|news|teaser',
          ),
          'ds_view_modes' => 
          array (
            0 => 'feature',
            1 => 'list',
            2 => 'slideshow',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'field_base' => 
          array (
            0 => 'body',
            1 => 'field_image',
          ),
          'field_group' => 
          array (
            0 => 'group_feature_background|node|news|feature',
            1 => 'group_feature_text|node|news|feature',
            2 => 'group_feature|node|news|feature',
            3 => 'group_list_image|node|news|default',
            4 => 'group_list_image|node|news|list',
            5 => 'group_list_image|node|news|teaser',
            6 => 'group_list_text|node|news|default',
            7 => 'group_list_text|node|news|list',
            8 => 'group_list_text|node|news|teaser',
            9 => 'group_list|node|news|list',
            10 => 'group_list|node|news|teaser',
            11 => 'group_slideshow_background|node|news|slideshow',
            12 => 'group_slideshow_text|node|news|slideshow',
            13 => 'group_slideshow|node|news|slideshow',
          ),
          'field_instance' => 
          array (
            0 => 'node-news-body',
            1 => 'node-news-field_image',
          ),
          'node' => 
          array (
            0 => 'news',
          ),
          'variable' => 
          array (
            0 => 'field_bundle_settings_node__news',
            1 => 'menu_options_news',
            2 => 'menu_parent_news',
            3 => 'node_options_news',
            4 => 'node_preview_news',
            5 => 'node_submitted_news',
          ),
        ),
        'php' => '5.2.4',
      ),
      'project' => 'news_item',
      'version' => '7.x-1.4',
    ),
    'publications' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/features/publications/publications.module',
      'name' => 'publications',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Publications',
        'description' => 'A publication content type with image, date, attachments and category.',
        'core' => '7.x',
        'package' => 'Features',
        'version' => '7.x-1.9',
        'project' => 'publications',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'date',
          2 => 'ds',
          3 => 'energy_council_work_streams',
          4 => 'features',
          5 => 'file',
          6 => 'file_entity',
          7 => 'image',
          8 => 'news_item',
          9 => 'options',
          10 => 'shs',
          11 => 'strongarm',
          12 => 'taxonomy',
          13 => 'text',
          14 => 'views',
          15 => 'views_content',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'ds:ds:1',
            1 => 'strongarm:strongarm:1',
            2 => 'views:views_default:3.0',
          ),
          'ds_field_settings' => 
          array (
            0 => 'node|publications|default',
            1 => 'node|publications|search_result',
            2 => 'node|publications|teaser',
          ),
          'ds_layout_settings' => 
          array (
            0 => 'file|document|default',
            1 => 'file|document|search_index',
            2 => 'node|publications|default',
            3 => 'node|publications|search_result',
            4 => 'node|publications|teaser',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'field_base' => 
          array (
            0 => 'field_attachments',
            1 => 'field_categories_reference',
            2 => 'field_date',
          ),
          'field_instance' => 
          array (
            0 => 'node-publications-body',
            1 => 'node-publications-field_attachments',
            2 => 'node-publications-field_categories_reference',
            3 => 'node-publications-field_council_priority_issue',
            4 => 'node-publications-field_date',
            5 => 'node-publications-field_image',
          ),
          'node' => 
          array (
            0 => 'publications',
          ),
          'taxonomy' => 
          array (
            0 => 'document_categories',
          ),
          'variable' => 
          array (
            0 => 'field_bundle_settings_node__publications',
            1 => 'menu_options_publications',
            2 => 'menu_parent_publications',
            3 => 'node_options_publications',
            4 => 'node_preview_publications',
            5 => 'node_submitted_publications',
          ),
          'views_view' => 
          array (
            0 => 'publications',
          ),
        ),
        'features_exclude' => 
        array (
          'dependencies' => 
          array (
            'hs_taxonomy' => 'hs_taxonomy',
          ),
        ),
        'php' => '5.2.4',
      ),
      'project' => 'publications',
      'version' => '7.x-1.9',
    ),
    'workflow_emails' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/modules/features/workflow_emails/workflow_emails.module',
      'name' => 'workflow_emails',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Workflow Emails',
        'description' => 'Provides a workflow email functionality.',
        'core' => '7.x',
        'package' => 'Features',
        'version' => '7.x-1.1',
        'project' => 'workflow_emails',
        'dependencies' => 
        array (
          0 => 'entity',
          1 => 'rules',
          2 => 'workbench_moderation',
        ),
        'features' => 
        array (
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'rules_config' => 
          array (
            0 => 'rules_email_approval_group',
            1 => 'rules_email_author_on_approval',
            2 => 'rules_email_author_on_rejection',
          ),
        ),
        'php' => '5.2.4',
      ),
      'project' => 'workflow_emails',
      'version' => '7.x-1.1',
    ),
    'better_exposed_filters' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/prod.energycouncil/modules/better_exposed_filters/better_exposed_filters.module',
      'name' => 'better_exposed_filters',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Better Exposed Filters',
        'description' => 'Allow the use of checkboxes or radio buttons for exposed Views filters',
        'core' => '7.x',
        'package' => 'Views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'better_exposed_filters_exposed_form_plugin.inc',
          1 => 'tests/better_exposed_filters.test',
        ),
        'version' => '7.x-3.2',
        'project' => 'better_exposed_filters',
        'datestamp' => '1428077889',
        'php' => '5.2.4',
      ),
      'platform' => -1,
      'project' => 'better_exposed_filters',
      'version' => '7.x-3.2',
    ),
    'current_search' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/prod.energycouncil/modules/facetapi/contrib/current_search/current_search.module',
      'name' => 'current_search',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Current Search Blocks',
        'description' => 'Provides an interface for creating blocks containing information about the current search.',
        'dependencies' => 
        array (
          0 => 'facetapi',
        ),
        'package' => 'Search Toolkit',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'plugins/current_search/item.inc',
          1 => 'plugins/current_search/item_active.inc',
          2 => 'plugins/current_search/item_group.inc',
          3 => 'plugins/current_search/item_text.inc',
          4 => 'tests/current_search.test',
        ),
        'configure' => 'admin/config/search/current_search',
        'version' => '7.x-1.5',
        'project' => 'facetapi',
        'datestamp' => '1405685332',
        'php' => '5.2.4',
      ),
      'platform' => -1,
      'project' => 'facetapi',
      'version' => '7.x-1.5',
    ),
    'facetapi' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/prod.energycouncil/modules/facetapi/facetapi.module',
      'name' => 'facetapi',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7103',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Facet API',
        'description' => 'An abstracted facet API that can be used by various search backends.',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Search Toolkit',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'plugins/facetapi/adapter.inc',
          1 => 'plugins/facetapi/dependency.inc',
          2 => 'plugins/facetapi/dependency_bundle.inc',
          3 => 'plugins/facetapi/dependency_role.inc',
          4 => 'plugins/facetapi/empty_behavior.inc',
          5 => 'plugins/facetapi/empty_behavior_text.inc',
          6 => 'plugins/facetapi/filter.inc',
          7 => 'plugins/facetapi/query_type.inc',
          8 => 'plugins/facetapi/url_processor.inc',
          9 => 'plugins/facetapi/url_processor_standard.inc',
          10 => 'plugins/facetapi/widget.inc',
          11 => 'plugins/facetapi/widget_links.inc',
          12 => 'tests/facetapi_test.plugins.inc',
          13 => 'tests/facetapi.test',
        ),
        'version' => '7.x-1.5',
        'project' => 'facetapi',
        'datestamp' => '1405685332',
        'php' => '5.2.4',
      ),
      'platform' => -1,
      'project' => 'facetapi',
      'version' => '7.x-1.5',
    ),
    'imce_filefield' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/prod.energycouncil/modules/imce_filefield/imce_filefield.module',
      'name' => 'imce_filefield',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IMCE for File Field',
        'description' => 'Allows users to select files from IMCE File Browser for file fields.',
        'dependencies' => 
        array (
          0 => 'file',
          1 => 'imce',
        ),
        'package' => 'Media',
        'core' => '7.x',
        'version' => '7.x-1.1',
        'project' => 'imce_filefield',
        'datestamp' => '1428520988',
        'php' => '5.2.4',
      ),
      'platform' => -1,
      'project' => 'imce_filefield',
      'version' => '7.x-1.1',
    ),
    'search_api_facetapi' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/prod.energycouncil/modules/search_api/contrib/search_api_facetapi/search_api_facetapi.module',
      'name' => 'search_api_facetapi',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search facets',
        'description' => 'Integrate the Search API with the Facet API to provide facetted searches.',
        'dependencies' => 
        array (
          0 => 'search_api',
          1 => 'facetapi',
        ),
        'core' => '7.x',
        'package' => 'Search',
        'files' => 
        array (
          0 => 'plugins/facetapi/adapter.inc',
          1 => 'plugins/facetapi/query_type_term.inc',
          2 => 'plugins/facetapi/query_type_date.inc',
        ),
        'version' => '7.x-1.14',
        'project' => 'search_api',
        'datestamp' => '1419580682',
        'php' => '5.2.4',
      ),
      'platform' => -1,
      'project' => 'search_api',
      'version' => '7.x-1.14',
    ),
    'search_api_views' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/prod.energycouncil/modules/search_api/contrib/search_api_views/search_api_views.module',
      'name' => 'search_api_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search views',
        'description' => 'Integrates the Search API with Views, enabling users to create views with searches as filters or arguments.',
        'dependencies' => 
        array (
          0 => 'search_api',
          1 => 'views',
        ),
        'core' => '7.x',
        'package' => 'Search',
        'files' => 
        array (
          0 => 'includes/display_facet_block.inc',
          1 => 'includes/handler_argument.inc',
          2 => 'includes/handler_argument_fulltext.inc',
          3 => 'includes/handler_argument_more_like_this.inc',
          4 => 'includes/handler_argument_string.inc',
          5 => 'includes/handler_argument_date.inc',
          6 => 'includes/handler_argument_taxonomy_term.inc',
          7 => 'includes/handler_filter.inc',
          8 => 'includes/handler_filter_boolean.inc',
          9 => 'includes/handler_filter_date.inc',
          10 => 'includes/handler_filter_entity.inc',
          11 => 'includes/handler_filter_fulltext.inc',
          12 => 'includes/handler_filter_language.inc',
          13 => 'includes/handler_filter_options.inc',
          14 => 'includes/handler_filter_taxonomy_term.inc',
          15 => 'includes/handler_filter_text.inc',
          16 => 'includes/handler_filter_user.inc',
          17 => 'includes/handler_sort.inc',
          18 => 'includes/plugin_cache.inc',
          19 => 'includes/query.inc',
        ),
        'version' => '7.x-1.14',
        'project' => 'search_api',
        'datestamp' => '1419580682',
        'php' => '5.2.4',
      ),
      'platform' => -1,
      'project' => 'search_api',
      'version' => '7.x-1.14',
    ),
    'search_api' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/prod.energycouncil/modules/search_api/search_api.module',
      'name' => 'search_api',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7117',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search API',
        'description' => 'Provides a generic API for modules offering search capabilites.',
        'dependencies' => 
        array (
          0 => 'entity',
        ),
        'core' => '7.x',
        'package' => 'Search',
        'files' => 
        array (
          0 => 'search_api.test',
          1 => 'includes/callback.inc',
          2 => 'includes/callback_add_aggregation.inc',
          3 => 'includes/callback_add_hierarchy.inc',
          4 => 'includes/callback_add_url.inc',
          5 => 'includes/callback_add_viewed_entity.inc',
          6 => 'includes/callback_bundle_filter.inc',
          7 => 'includes/callback_comment_access.inc',
          8 => 'includes/callback_language_control.inc',
          9 => 'includes/callback_node_access.inc',
          10 => 'includes/callback_node_status.inc',
          11 => 'includes/callback_role_filter.inc',
          12 => 'includes/datasource.inc',
          13 => 'includes/datasource_entity.inc',
          14 => 'includes/datasource_external.inc',
          15 => 'includes/exception.inc',
          16 => 'includes/index_entity.inc',
          17 => 'includes/processor.inc',
          18 => 'includes/processor_highlight.inc',
          19 => 'includes/processor_html_filter.inc',
          20 => 'includes/processor_ignore_case.inc',
          21 => 'includes/processor_stopwords.inc',
          22 => 'includes/processor_tokenizer.inc',
          23 => 'includes/processor_transliteration.inc',
          24 => 'includes/query.inc',
          25 => 'includes/server_entity.inc',
          26 => 'includes/service.inc',
        ),
        'configure' => 'admin/config/search/search_api',
        'version' => '7.x-1.14',
        'project' => 'search_api',
        'datestamp' => '1419580682',
        'php' => '5.2.4',
      ),
      'platform' => -1,
      'project' => 'search_api',
      'version' => '7.x-1.14',
    ),
    'search_api_attachments_entityreference' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/prod.energycouncil/modules/search_api_attachments/contrib/search_api_attachments_entityreference/search_api_attachments_entityreference.module',
      'name' => 'search_api_attachments_entityreference',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search API Attachments Entityreference',
        'description' => 'Extends the attachments indexing to file fields in the referenced entity',
        'dependencies' => 
        array (
          0 => 'entityreference',
          1 => 'search_api_attachments',
        ),
        'core' => '7.x',
        'package' => 'Search',
        'files' => 
        array (
          0 => 'includes/callback_attachments_entityreference_settings.inc',
        ),
        'version' => '7.x-1.6',
        'project' => 'search_api_attachments',
        'datestamp' => '1430603282',
        'php' => '5.2.4',
      ),
      'platform' => -1,
      'project' => 'search_api_attachments',
      'version' => '7.x-1.6',
    ),
    'search_api_attachments_field_collections' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/prod.energycouncil/modules/search_api_attachments/contrib/search_api_attachments_field_collections/search_api_attachments_field_collections.module',
      'name' => 'search_api_attachments_field_collections',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search API Attachments Field Collections',
        'description' => 'Extends the attachments indexing to file fields in the referenced field collection',
        'dependencies' => 
        array (
          0 => 'field_collection',
          1 => 'search_api_attachments',
        ),
        'core' => '7.x',
        'package' => 'Search',
        'files' => 
        array (
          0 => 'includes/callback_attachments_field_collections_settings.inc',
        ),
        'version' => '7.x-1.6',
        'project' => 'search_api_attachments',
        'datestamp' => '1430603282',
        'php' => '5.2.4',
      ),
      'platform' => -1,
      'project' => 'search_api_attachments',
      'version' => '7.x-1.6',
    ),
    'search_api_attachments' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/prod.energycouncil/modules/search_api_attachments/search_api_attachments.module',
      'name' => 'search_api_attachments',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search API attachments',
        'description' => 'Provides a generic API for modules offering search capabilities.',
        'dependencies' => 
        array (
          0 => 'search_api',
        ),
        'core' => '7.x',
        'package' => 'Search',
        'configure' => 'admin/config/search/search_api/attachments',
        'files' => 
        array (
          0 => 'includes/callback_attachments_settings.inc',
        ),
        'version' => '7.x-1.6',
        'project' => 'search_api_attachments',
        'datestamp' => '1430603282',
        'php' => '5.2.4',
      ),
      'platform' => -1,
      'project' => 'search_api_attachments',
      'version' => '7.x-1.6',
    ),
    'search_api_solr' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/prod.energycouncil/modules/search_api_solr/search_api_solr.module',
      'name' => 'search_api_solr',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7102',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Solr search',
        'description' => 'Offers an implementation of the Search API that uses an Apache Solr server for indexing content.',
        'dependencies' => 
        array (
          0 => 'search_api',
        ),
        'core' => '7.x',
        'package' => 'Search',
        'files' => 
        array (
          0 => 'includes/document.inc',
          1 => 'includes/service.inc',
          2 => 'includes/solr_connection.inc',
          3 => 'includes/solr_connection.interface.inc',
          4 => 'includes/solr_field.inc',
          5 => 'includes/spellcheck.inc',
        ),
        'version' => '7.x-1.6',
        'project' => 'search_api_solr',
        'datestamp' => '1410186051',
        'php' => '5.2.4',
      ),
      'platform' => -1,
      'project' => 'search_api_solr',
      'version' => '7.x-1.6',
    ),
  ),
  'themes' => 
  array (
    'adminimal' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/themes/contrib/adminimal_theme/adminimal.info',
      'name' => 'adminimal',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Adminimal',
        'description' => 'Minimalist administration theme.',
        'core' => '7.x',
        'scripts' => 
        array (
          0 => 'js/jRespond.js',
          1 => 'js/adminimal_theme.js',
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '1',
          'style_checkboxes' => '1',
          'display_icons_config' => '1',
          'rounded_buttons' => '1',
          'sticky_actions' => '0',
          'avoid_custom_font' => '0',
          'custom_css' => '0',
          'use_custom_media_queries' => '0',
          'media_query_mobile' => 'only screen and (max-width: 480px)',
          'media_query_tablet' => 'only screen and (min-width : 481px) and (max-width : 1024px)',
        ),
        'regions' => 
        array (
          'hidden' => 'Hidden',
          'content_before' => 'Before Content',
          'sidebar_left' => 'Sidebar Left',
          'content' => 'Content',
          'sidebar_right' => 'Sidebar Right',
          'content_after' => 'After Content',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
        ),
        'version' => '7.x-1.23',
        'project' => 'adminimal_theme',
        'datestamp' => '1445193540',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'adminimal_theme',
      'version' => '7.x-1.23',
    ),
    'bartik' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/themes/bartik/bartik.info',
      'name' => 'bartik',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bartik',
        'description' => 'A flexible, recolorable theme with many regions.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/layout.css',
            1 => 'css/style.css',
            2 => 'css/colors.css',
          ),
          'print' => 
          array (
            0 => 'css/print.css',
          ),
        ),
        'regions' => 
        array (
          'header' => 'Header',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'highlighted' => 'Highlighted',
          'featured' => 'Featured',
          'content' => 'Content',
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'triptych_first' => 'Triptych first',
          'triptych_middle' => 'Triptych middle',
          'triptych_last' => 'Triptych last',
          'footer_firstcolumn' => 'Footer first column',
          'footer_secondcolumn' => 'Footer second column',
          'footer_thirdcolumn' => 'Footer third column',
          'footer_fourthcolumn' => 'Footer fourth column',
          'footer' => 'Footer',
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '0',
        ),
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'energy_council' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/themes/contrib/energy_council/energy_council.info',
      'name' => 'energy_council',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Energy Council',
        'description' => 'The theme for the Energy Council website.',
        'base theme' => 'omega',
        'screenshot' => 'screenshot.png',
        'engine' => 'phptemplate',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/energy-council.normalize.css',
            1 => 'css/energy-council.hacks.css',
            2 => 'css/energy-council.styles.css',
            3 => 'css/energy-council.no-query.css',
          ),
        ),
        'scripts' => 
        array (
          0 => 'js/energy-council.behaviors.js',
        ),
        'regions' => 
        array (
          'header' => 'Header',
          'navigation' => 'Navigation',
          'content' => 'Content',
          'footer' => 'Footer',
          'subfooter' => 'Sub footer',
        ),
        'plugins' => 
        array (
          'panels' => 
          array (
            'layouts' => 'panels/layouts',
          ),
        ),
        'settings' => 
        array (
          'toggle_logo' => '0',
          'toggle_name' => '0',
          'toggle_slogan' => '0',
          'toggle_node_user_picture' => '0',
          'toggle_comment_user_picture' => '1',
          'toggle_comment_user_verification' => '1',
          'toggle_favicon' => '0',
          'toggle_main_menu' => '0',
          'toggle_secondary_menu' => '0',
          'omega_toggle_front_page_content' => '1',
          'default_logo' => '1',
          'logo_path' => '',
          'logo_upload' => '',
          'default_favicon' => '1',
          'favicon_path' => '',
          'favicon_upload' => '',
          'omega_enable_warning' => '1',
          'omega_toggle_extension_development' => '1',
          'omega_enable_export_reminder' => '1',
          'omega_rebuild_theme_registry' => '1',
          'omega_rebuild_aggregates' => '1',
          'omega_browser_width_indicator' => '1',
          'omega_livereload' => '0',
          'omega_livereload_script' => 'http://localhost:35729/livereload.js',
          'omega_livereload_host' => 'localhost',
          'omega_livereload_port' => '35729',
          'omega_demo_regions' => '0',
          'omega_toggle_extension_compatibility' => '1',
          'omega_conditional_classes_html' => '1',
          'omega_apple_touch' => '1',
          'omega_cleartype' => '1',
          'omega_handheld_friendly' => '1',
          'omega_mobile_optimized' => '1',
          'omega_viewport' => '1',
          'omega_viewport_user_scaleable' => '1',
          'omega_chrome_edge' => '1',
          'omega_toggle_extension_layouts' => '0',
          'omega_layout' => '',
          'omega_toggle_extension_assets' => '1',
          'omega_libraries' => 
          array (
            'selectivizr' => 
            array (
              'status' => '1',
            ),
            'respond' => 
            array (
              'status' => '1',
            ),
            'pie' => 
            array (
              'status' => '1',
            ),
            'html5shiv' => 
            array (
              'status' => '1',
            ),
          ),
        ),
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'garland' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/themes/garland/garland.info',
      'name' => 'garland',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Garland',
        'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
          ),
          'print' => 
          array (
            0 => 'print.css',
          ),
        ),
        'settings' => 
        array (
          'garland_width' => 'fluid',
        ),
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'ohm' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/themes/contrib/omega/ohm/ohm.info',
      'name' => 'ohm',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ohm',
        'description' => 'Omega based demonstration theme. Serves as a best-practice reference for the Omega documentation. Ohm will be constantly updated as best practice evolves so shouldn\'t be used in production.',
        'base theme' => 'omega',
        'screenshot' => 'screenshot.png',
        'engine' => 'phptemplate',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/ohm.normalize.css',
            1 => 'css/ohm.hacks.css',
            2 => 'css/ohm.styles.css',
            3 => 'css/ohm.no-query.css',
          ),
        ),
        'regions' => 
        array (
          'branding' => 'Branding',
          'navigation' => 'Navigation bar',
          'header' => 'Header',
          'hero' => 'Hero',
          'highlighted' => 'Highlighted',
          'help' => 'Help',
          'content' => 'Content',
          'sidebar_first' => 'First sidebar',
          'sidebar_second' => 'Second sidebar',
          'footer' => 'Footer',
        ),
        'layout' => 
        array (
          'hero' => 
          array (
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'css/layouts/hero/ohm-hero.layout.css',
              ),
            ),
          ),
        ),
        'settings' => 
        array (
          'toggle_logo' => '1',
          'toggle_name' => '1',
          'toggle_slogan' => '1',
          'toggle_node_user_picture' => '1',
          'toggle_comment_user_picture' => '1',
          'toggle_comment_user_verification' => '1',
          'toggle_favicon' => '1',
          'toggle_main_menu' => '1',
          'toggle_secondary_menu' => '1',
          'omega_toggle_front_page_content' => '1',
          'default_logo' => '1',
          'logo_path' => '',
          'logo_upload' => '',
          'default_favicon' => '1',
          'favicon_path' => '',
          'favicon_upload' => '',
          'omega_toggle_extension_assets' => '1',
          'omega_libraries' => 
          array (
            'selectivizr' => 
            array (
              'status' => '0',
            ),
            'respond' => 
            array (
              'status' => '0',
            ),
            'pie' => 
            array (
              'status' => '0',
            ),
            'html5shiv' => 
            array (
              'status' => '1',
            ),
            'messages' => 
            array (
              'status' => '1',
            ),
          ),
          'omega_toggle_extension_compatibility' => '1',
          'omega_conditional_classes_html' => '1',
          'omega_apple_touch' => '1',
          'omega_cleartype' => '1',
          'omega_handheld_friendly' => '1',
          'omega_mobile_optimized' => '1',
          'omega_viewport' => '1',
          'omega_viewport_user_scaleable' => '1',
          'omega_chrome_edge' => '1',
          'omega_chrome_popup' => '0',
          'omega_chrome_notice' => '0',
          'omega_toggle_extension_layouts' => '1',
          'omega_layout' => 'ohm-hero',
          'omega_toggle_extension_development' => '1',
          'omega_rebuild_theme_registry' => '0',
          'omega_rebuild_aggregates' => '0',
          'omega_browser_width_indicator' => '0',
          'omega_livereload' => '1',
          'omega_livereload_script' => 'http://localhost:35729/livereload.js',
          'omega_livereload_host' => 'localhost',
          'omega_livereload_port' => '35729',
          'omega_demo_regions' => '1',
          'omega_demo_regions_list' => 
          array (
            'navigation' => 'navigation',
            'header' => 'header',
            'hero' => 'hero',
            'highlighted' => 'highlighted',
            'help' => 'help',
            'content' => 'content',
            'sidebar_first' => 'sidebar_first',
            'sidebar_second' => 'sidebar_second',
            'footer' => 'footer',
          ),
        ),
        'version' => '7.x-4.4',
        'project' => 'omega',
        'datestamp' => '1437473042',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'omega',
      'version' => '7.x-4.4',
    ),
    'omega' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/sites/all/themes/contrib/omega/omega/omega.info',
      'name' => 'omega',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Omega',
        'description' => 'A powerful base theme framework.',
        'screenshot' => 'screenshot.png',
        'engine' => 'phptemplate',
        'core' => '7.x',
        'regions' => 
        array (
          'branding' => 'Branding',
          'header' => 'Header',
          'navigation' => 'Navigation',
          'highlighted' => 'Highlighted',
          'help' => 'Help',
          'content' => 'Content',
          'sidebar_first' => 'First Sidebar',
          'sidebar_second' => 'Second Sidebar',
          'footer' => 'Footer',
        ),
        'plugins' => 
        array (
          'panels' => 
          array (
            'layouts' => 'panels/layouts',
            'styles' => 'panels/styles',
          ),
        ),
        'version' => '7.x-4.4',
        'project' => 'omega',
        'datestamp' => '1437473042',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'omega',
      'version' => '7.x-4.4',
    ),
    'seven' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/themes/seven/seven.info',
      'name' => 'seven',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Seven',
        'description' => 'A simple one-column, tableless, fluid width administration theme.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'reset.css',
            1 => 'style.css',
          ),
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '1',
        ),
        'regions' => 
        array (
          'content' => 'Content',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'sidebar_first' => 'First sidebar',
        ),
        'regions_hidden' => 
        array (
          0 => 'sidebar_first',
        ),
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
    'stark' => 
    array (
      'filename' => '/var/aegir/platforms/energy-council-3-june-2016/themes/stark/stark.info',
      'name' => 'stark',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stark',
        'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
        'package' => 'Core',
        'version' => '7.43',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'layout.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1456343506',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.43',
    ),
  ),
);
$options['installed'] = true;
# Aegir additions
$_SERVER['db_type'] = $options['db_type'];
$_SERVER['db_port'] = $options['db_port'];
$_SERVER['db_host'] = $options['db_host'];
$_SERVER['db_user'] = $options['db_user'];
$_SERVER['db_passwd'] = $options['db_passwd'];
$_SERVER['db_name'] = $options['db_name'];
