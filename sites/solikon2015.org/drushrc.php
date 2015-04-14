<?php 


$options['db_type'] = 'mysql';
$options['db_host'] = 'localhost';
$options['db_port'] = '3306';
$options['db_passwd'] = 'DPfKU4Zmdf';
$options['db_name'] = 'solikon2015org_0';
$options['db_user'] = 'solikon2015org_0';
$options['packages'] = array (
  'platforms' => 
  array (
    'drupal' => 
    array (
      'short_name' => 'drupal',
      'version' => '7.35',
      'description' => 'This platform is running Drupal 7.35',
    ),
  ),
  'profiles' => 
  array (
    'standard' => 
    array (
      'name' => 'standard',
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/standard/standard.profile',
      'project' => '',
      'info' => 
      array (
        'name' => 'Standard',
        'description' => 'Install with commonly used features pre-configured.',
        'version' => '7.35',
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
        'php' => '5.2.4',
        'languages' => 
        array (
          0 => 'en',
        ),
        'old_short_name' => 'default',
      ),
      'version' => '7.35',
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
    'aggregator' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/aggregator/aggregator.module',
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
        'version' => '7.35',
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
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'block' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/block/block.module',
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
        'version' => '7.35',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'block.test',
        ),
        'configure' => 'admin/structure/block',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'blog' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/blog/blog.module',
      'name' => 'blog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blog',
        'description' => 'Enables multi-user blogs.',
        'package' => 'Core',
        'version' => '7.35',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'blog.test',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'book' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/book/book.module',
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
        'version' => '7.35',
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
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'color' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/color/color.module',
      'name' => 'color',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Color',
        'description' => 'Allows administrators to change the color scheme of compatible themes.',
        'package' => 'Core',
        'version' => '7.35',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'color.test',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'comment' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/comment/comment.module',
      'name' => 'comment',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7009',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Comment',
        'description' => 'Allows users to comment on and discuss published content.',
        'package' => 'Core',
        'version' => '7.35',
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
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'contact' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/contact/contact.module',
      'name' => 'contact',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contact',
        'description' => 'Enables the use of both personal and site-wide contact forms.',
        'package' => 'Core',
        'version' => '7.35',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contact.test',
        ),
        'configure' => 'admin/structure/contact',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'contextual' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/contextual/contextual.module',
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
        'version' => '7.35',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contextual.test',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'dashboard' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/dashboard/dashboard.module',
      'name' => 'dashboard',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Dashboard',
        'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.35',
        'files' => 
        array (
          0 => 'dashboard.test',
        ),
        'dependencies' => 
        array (
          0 => 'block',
        ),
        'configure' => 'admin/dashboard/customize',
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'dblog' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/dblog/dblog.module',
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
        'version' => '7.35',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'dblog.test',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'field' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/field/field.module',
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
        'version' => '7.35',
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
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'field_sql_storage' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/field/modules/field_sql_storage/field_sql_storage.module',
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
        'version' => '7.35',
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
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'list' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/field/modules/list/list.module',
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
        'version' => '7.35',
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
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'number' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/field/modules/number/number.module',
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
        'version' => '7.35',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'number.test',
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'options' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/field/modules/options/options.module',
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
        'version' => '7.35',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'options.test',
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'text' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/field/modules/text/text.module',
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
        'version' => '7.35',
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
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'field_ui' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/field_ui/field_ui.module',
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
        'version' => '7.35',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_ui.test',
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'file' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/file/file.module',
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
        'version' => '7.35',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'tests/file.test',
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'filter' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/filter/filter.module',
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
        'version' => '7.35',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'filter.test',
        ),
        'required' => true,
        'configure' => 'admin/config/content/formats',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'forum' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/forum/forum.module',
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
        'version' => '7.35',
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
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'help' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/help/help.module',
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
        'version' => '7.35',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'help.test',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'image' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/image/image.module',
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
        'version' => '7.35',
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
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'locale' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/locale/locale.module',
      'name' => 'locale',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale',
        'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
        'package' => 'Core',
        'version' => '7.35',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'locale.test',
        ),
        'configure' => 'admin/config/regional/language',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'menu' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/menu/menu.module',
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
        'version' => '7.35',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'menu.test',
        ),
        'configure' => 'admin/structure/menu',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'node' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/node/node.module',
      'name' => 'node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7014',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node',
        'description' => 'Allows content to be submitted to the site and displayed on pages.',
        'package' => 'Core',
        'version' => '7.35',
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
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'openid' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/openid/openid.module',
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
        'version' => '7.35',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'openid.test',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'overlay' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/overlay/overlay.module',
      'name' => 'overlay',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Overlay',
        'description' => 'Displays the Drupal administration interface in an overlay.',
        'package' => 'Core',
        'version' => '7.35',
        'core' => '7.x',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'admin' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/admin/admin.module',
      'name' => 'admin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Admin',
        'description' => 'UI helpers for Drupal admins and managers.',
        'package' => 'Administration',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'admin.admin.inc',
          1 => 'admin.install',
          2 => 'admin.module',
          3 => 'includes/admin.devel.inc',
          4 => 'includes/admin.theme.inc',
          5 => 'theme/admin-panes.tpl.php',
          6 => 'theme/admin-toolbar.tpl.php',
          7 => 'theme/theme.inc',
        ),
        'version' => '7.x-2.0-beta3',
        'project' => 'admin',
        'datestamp' => '1292541646',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'admin',
      'version' => '7.x-2.0-beta3',
    ),
    'advagg' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/advagg/advagg.module',
      'name' => 'advagg',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7205',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Advanced CSS/JS Aggregation',
        'description' => 'Aggregates multiple CSS/JS files in a way that prevents 404 from happening when accessing a CSS or JS file.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'configure' => 'admin/config/development/performance/advagg',
        'version' => '7.x-2.7',
        'project' => 'advagg',
        'datestamp' => '1402608232',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'advagg',
      'version' => '7.x-2.7',
    ),
    'advagg_bundler' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/advagg/advagg_bundler/advagg_bundler.module',
      'name' => 'advagg_bundler',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg Bundler',
        'description' => 'Provides intelligent bundling of CSS and JS files by grouping files that belong together.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'configure' => 'admin/config/development/performance/advagg/bundler',
        'version' => '7.x-2.7',
        'project' => 'advagg',
        'datestamp' => '1402608232',
        'php' => '5.2.4',
      ),
      'project' => 'advagg',
      'version' => '7.x-2.7',
    ),
    'advagg_css_cdn' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/advagg/advagg_css_cdn/advagg_css_cdn.module',
      'name' => 'advagg_css_cdn',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg CDN CSS',
        'description' => 'Use a shared CDN for CSS libraries, Google Libraries API currently.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'version' => '7.x-2.7',
        'project' => 'advagg',
        'datestamp' => '1402608232',
        'php' => '5.2.4',
      ),
      'project' => 'advagg',
      'version' => '7.x-2.7',
    ),
    'advagg_css_compress' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/advagg/advagg_css_compress/advagg_css_compress.module',
      'name' => 'advagg_css_compress',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg Compress CSS',
        'description' => 'Compress CSS with a 3rd party compressor, YUI currently.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'configure' => 'admin/config/development/performance/advagg/css-compress',
        'version' => '7.x-2.7',
        'project' => 'advagg',
        'datestamp' => '1402608232',
        'php' => '5.2.4',
      ),
      'project' => 'advagg',
      'version' => '7.x-2.7',
    ),
    'advagg_js_cdn' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/advagg/advagg_js_cdn/advagg_js_cdn.module',
      'name' => 'advagg_js_cdn',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg CDN Javascript',
        'description' => 'Use a shared CDN for javascript libraries, Google Libraries API currently.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'version' => '7.x-2.7',
        'project' => 'advagg',
        'datestamp' => '1402608232',
        'php' => '5.2.4',
      ),
      'project' => 'advagg',
      'version' => '7.x-2.7',
    ),
    'advagg_js_compress' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/advagg/advagg_js_compress/advagg_js_compress.module',
      'name' => 'advagg_js_compress',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg Compress Javascript',
        'description' => 'Compress Javascript with a 3rd party compressor, JSMin+ currently.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'configure' => 'admin/config/development/performance/advagg/js-compress',
        'version' => '7.x-2.7',
        'project' => 'advagg',
        'datestamp' => '1402608232',
        'php' => '5.2.4',
      ),
      'project' => 'advagg',
      'version' => '7.x-2.7',
    ),
    'advagg_mod' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/advagg/advagg_mod/advagg_mod.module',
      'name' => 'advagg_mod',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg Modifier',
        'description' => 'Allows one to alter the CSS and JS array.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'configure' => 'admin/config/development/performance/advagg/mod',
        'version' => '7.x-2.7',
        'project' => 'advagg',
        'datestamp' => '1402608232',
        'php' => '5.2.4',
      ),
      'project' => 'advagg',
      'version' => '7.x-2.7',
    ),
    'advagg_validator' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/advagg/advagg_validator/advagg_validator.module',
      'name' => 'advagg_validator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg CSS/JS Validator',
        'description' => 'Validate the CSS & JS files used in Aggregation for syntax errors.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'configure' => 'admin/config/development/performance/advagg/validator',
        'version' => '7.x-2.7',
        'project' => 'advagg',
        'datestamp' => '1402608232',
        'php' => '5.2.4',
      ),
      'project' => 'advagg',
      'version' => '7.x-2.7',
    ),
    'blockcache_alter' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/blockcache_alter/blockcache_alter.module',
      'name' => 'blockcache_alter',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block Cache Alter',
        'description' => 'Alter the cache settings per block.',
        'core' => '7.x',
        'package' => 'Performance and scalability',
        'configure' => 'admin/config/development/performance/blockcache_alter',
        'version' => '7.x-1.1-beta1+0-dev',
        'project' => 'blockcache_alter',
        'datestamp' => '1415445181',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'blockcache_alter',
      'version' => '7.x-1.1-beta1+0-dev',
    ),
    'boost' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/boost/boost.module',
      'name' => 'boost',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Boost',
        'description' => 'Caches generated output as a static file to be served directly from the webserver.',
        'package' => 'Performance and scalability',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'boost.module',
          1 => 'boost.admin.inc',
          2 => 'boost.blocks.inc',
        ),
        'recommends' => 
        array (
          0 => 'expire',
        ),
        'configure' => 'admin/config/system/boost',
        'version' => '7.x-1.0',
        'project' => 'boost',
        'datestamp' => '1399056528',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'boost',
      'version' => '7.x-1.0',
    ),
    'boost_crawler' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/boost/boost_crawler/boost_crawler.module',
      'name' => 'boost_crawler',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Boost Crawler',
        'description' => 'Minimal crawler to regenerate the cache as pages are expired.',
        'package' => 'Performance and scalability',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'boost_crawler.module',
        ),
        'recommends' => 
        array (
          0 => 'boost',
        ),
        'dependencies' => 
        array (
          0 => 'httprl',
          1 => 'expire',
        ),
        'configure' => 'admin/config/system/boost/crawler',
        'version' => '7.x-1.0',
        'project' => 'boost',
        'datestamp' => '1399056528',
        'php' => '5.2.4',
      ),
      'project' => 'boost',
      'version' => '7.x-1.0',
    ),
    'cdn' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/cdn/cdn.module',
      'name' => 'cdn',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CDN',
        'description' => 'Integrates your site with a CDN, through altering file URLs.',
        'core' => '7.x',
        'package' => 'Performance and scalability',
        'configure' => 'admin/config/development/cdn',
        'files' => 
        array (
          0 => 'cdn.test',
        ),
        'version' => '7.x-2.6+3-dev',
        'project' => 'cdn',
        'datestamp' => '1392895444',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'cdn',
      'version' => '7.x-2.6+3-dev',
    ),
    'config_perms' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/config_perms/config_perms.module',
      'name' => 'config_perms',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom Permissions',
        'description' => 'Allows additional permissions to be created and managed through an administration form.
<br /><small>Machine name: config_perms</small>',
        'core' => '7.x',
        'package' => 'Permissions',
        'configure' => 'admin/people/custom_permissions',
        'version' => '7.x-2.0+33-dev',
        'project' => 'config_perms',
        'datestamp' => '1412099050',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'config_perms',
      'version' => '7.x-2.0+33-dev',
    ),
    'css_emimage' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/css_emimage/css_emimage.module',
      'name' => 'css_emimage',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CSS Embedded Images',
        'description' => 'Replaces image URLs in CSS files with embedded images when CSS optimization is enabled.',
        'core' => '7.x',
        'package' => 'Performance and scalability',
        'configure' => 'admin/config/development/performance',
        'version' => '7.x-1.3+3-dev',
        'project' => 'css_emimage',
        'datestamp' => '1380568223',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'css_emimage',
      'version' => '7.x-1.3+3-dev',
    ),
    'display_cache' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/display_cache/display_cache.module',
      'name' => 'display_cache',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Display Cache',
        'description' => 'Provides views and panels plugins to display rendered entities from cache.',
        'package' => 'Performance',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'entity',
        ),
        'version' => '7.x-1.0',
        'project' => 'display_cache',
        'datestamp' => '1399555728',
        'php' => '5.2.4',
      ),
      'project' => 'display_cache',
      'version' => '7.x-1.0',
    ),
    'esi' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/esi/esi.module',
      'name' => 'esi',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ESI - Edge Side Includes',
        'description' => 'Allow Drupal components to be delivered via ESI (Edge-Side Includes).  Requires an ESI-capable proxy.',
        'package' => 'Caching',
        'recommends' => 
        array (
          0 => 'varnish',
        ),
        'core' => '7.x',
        'version' => '7.x-3.0-alpha1+16-dev',
        'project' => 'esi',
        'datestamp' => '1380577290',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'esi',
      'version' => '7.x-3.0-alpha1+16-dev',
    ),
    'esi_block' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/esi/modules/esi_block/esi_block.module',
      'name' => 'esi_block',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ESI - Block',
        'description' => 'Deliver Drupal blocks via ESI.',
        'core' => '7.x',
        'package' => 'Caching',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'esi',
        ),
        'files' => 
        array (
          0 => 'esi_block.test',
        ),
        'version' => '7.x-3.0-alpha1+16-dev',
        'project' => 'esi',
        'datestamp' => '1380577290',
        'php' => '5.2.4',
      ),
      'project' => 'esi',
      'version' => '7.x-3.0-alpha1+16-dev',
    ),
    'esi_context' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/esi/modules/esi_context/esi_context.module',
      'name' => 'esi_context',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ESI - Context integration',
        'description' => 'Deliver context-controlled blocks via ESI.',
        'core' => '7.x',
        'package' => 'Caching',
        'dependencies' => 
        array (
          0 => 'context',
          1 => 'esi',
          2 => 'esi_block',
        ),
        'version' => '7.x-3.0-alpha1+16-dev',
        'project' => 'esi',
        'datestamp' => '1380577290',
        'php' => '5.2.4',
      ),
      'project' => 'esi',
      'version' => '7.x-3.0-alpha1+16-dev',
    ),
    'esi_panels' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/esi/modules/esi_panels/esi_panels.module',
      'name' => 'esi_panels',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ESI - Panels',
        'description' => 'Deliver panel-panes via ESI.',
        'core' => '7.x',
        'package' => 'Caching',
        'dependencies' => 
        array (
          0 => 'panels',
          1 => 'page_manager',
          2 => 'esi',
        ),
        'version' => '7.x-3.0-alpha1+16-dev',
        'project' => 'esi',
        'datestamp' => '1380577290',
        'php' => '5.2.4',
      ),
      'project' => 'esi',
      'version' => '7.x-3.0-alpha1+16-dev',
    ),
    'expire' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/expire/expire.module',
      'name' => 'expire',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Cache Expiration',
        'description' => 'Logic for expiring cached pages.',
        'package' => 'Performance and scalability',
        'core' => '7.x',
        'configure' => 'admin/config/system/expire',
        'files' => 
        array (
          0 => 'includes/expire.api.inc',
          1 => 'includes/expire.comment.inc',
          2 => 'includes/expire.domain.inc',
          3 => 'includes/expire.interface.inc',
          4 => 'includes/expire.menu_link.inc',
          5 => 'includes/expire.node.inc',
          6 => 'includes/expire.user.inc',
          7 => 'includes/expire.votingapi.inc',
          8 => 'includes/expire.file.inc',
        ),
        'version' => '7.x-2.0-rc4',
        'project' => 'expire',
        'datestamp' => '1414746830',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'expire',
      'version' => '7.x-2.0-rc4',
    ),
    'filefield_nginx_progress' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/filefield_nginx_progress/filefield_nginx_progress.module',
      'name' => 'filefield_nginx_progress',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FileField Nginx Progress',
        'description' => 'Adds upload progress functionality for Nginx',
        'files' => 
        array (
          0 => 'filefield_nginx_progress.install',
          1 => 'filefield_nginx_progress.module',
        ),
        'dependencies' => 
        array (
          0 => 'file',
        ),
        'package' => 'Fields',
        'core' => '7.x',
        'php' => '5.2',
        'version' => '7.x-2.3+1-dev',
        'project' => 'filefield_nginx_progress',
        'datestamp' => '1380579093',
      ),
      'project' => 'filefield_nginx_progress',
      'version' => '7.x-2.3+1-dev',
    ),
    'flood_control' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/flood_control/flood_control.module',
      'name' => 'flood_control',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Flood control',
        'description' => 'Interface for hidden flood control options.',
        'core' => '7.x',
        'configure' => 'admin/config/system/flood-control',
        'version' => '7.x-1.x-dev',
        'project' => 'flood_control',
        'datestamp' => '1380579747',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'flood_control',
      'version' => '7.x-1.x-dev',
    ),
    'force_password_change' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/force_password_change/force_password_change.module',
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
        'version' => '7.x-1.0-rc2',
        'project' => 'force_password_change',
        'datestamp' => '1296546103',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'force_password_change',
      'version' => '7.x-1.0-rc2',
    ),
    'fpa' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/fpa/fpa.module',
      'name' => 'fpa',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fast Permissions Administration',
        'description' => 'Fast filtering on permissions administration form.',
        'core' => '7.x',
        'package' => 'Administration',
        'version' => '7.x-2.6',
        'project' => 'fpa',
        'datestamp' => '1408744435',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'fpa',
      'version' => '7.x-2.6',
    ),
    'httprl' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/httprl/httprl.module',
      'name' => 'httprl',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'HTTP Parallel Request Library',
        'description' => 'Send http requests out in parallel in a blocking or non-blocking manner.',
        'package' => 'Performance and scalability',
        'core' => '7.x',
        'version' => '7.x-1.14',
        'project' => 'httprl',
        'datestamp' => '1388542110',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'httprl',
      'version' => '7.x-1.14',
    ),
    'js' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/js/js.module',
      'name' => 'js',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'JavaScript callback handler',
        'description' => 'A high-performance JavaScript callback handler for 3rd party modules.',
        'package' => 'Performance',
        'core' => '7.x',
        'configure' => 'admin/config/system/js',
        'version' => '7.x-1.0+5-dev',
        'project' => 'js',
        'datestamp' => '1394174606',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'js',
      'version' => '7.x-1.0+5-dev',
    ),
    'js_test' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/js/tests/js_test.module',
      'name' => 'js_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'JavaScript callback handler tests',
        'description' => 'Tests for the JS module.',
        'package' => 'Performance',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'js_test.test',
        ),
        'version' => '7.x-1.0+5-dev',
        'project' => 'js',
        'datestamp' => '1394174606',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'js',
      'version' => '7.x-1.0+5-dev',
    ),
    'login_security' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/login_security/login_security.module',
      'name' => 'login_security',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Login Security',
        'description' => 'Enable security options in the login flow of the site.',
        'files' => 
        array (
          0 => 'login_security.test',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/people/login_security',
        'version' => '7.x-1.9',
        'project' => 'login_security',
        'datestamp' => '1392987818',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'login_security',
      'version' => '7.x-1.9',
    ),
    'nocurrent_pass' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/nocurrent_pass/nocurrent_pass.module',
      'name' => 'nocurrent_pass',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'No Current Password',
        'description' => 'Make the "current password" requirement on the user edit form optional.',
        'package' => 'Other',
        'core' => '7.x',
        'version' => '7.x-1.0',
        'project' => 'nocurrent_pass',
        'datestamp' => '1328692247',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'nocurrent_pass',
      'version' => '7.x-1.0',
    ),
    'panels_content_cache' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/panels_content_cache/panels_content_cache.module',
      'name' => 'panels_content_cache',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panels Content Cache',
        'core' => '7.x',
        'package' => 'Panels',
        'description' => 'A content based caching plugin for panels. Allows panel caches to be expired based on content creation / updates.',
        'dependencies' => 
        array (
          0 => 'panels',
        ),
        'version' => '7.x-1.0',
        'project' => 'panels_content_cache',
        'datestamp' => '1367328019',
        'php' => '5.2.4',
      ),
      'project' => 'panels_content_cache',
      'version' => '7.x-1.0',
    ),
    'purge' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/purge/purge.module',
      'name' => 'purge',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Purge',
        'description' => 'Purge clears urls from reverse proxy caches like Varnish and Squid by issuing HTTP PURGE requests.',
        'package' => 'Performance and scalability',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'expire',
        ),
        'files ' => 
        array (
          0 => 'purge.module',
          1 => 'purge.inc',
        ),
        'configure' => 'admin/config/development/performance/purge',
        'version' => '7.x-1.6',
        'project' => 'purge',
        'datestamp' => '1358998406',
        'php' => '5.2.4',
      ),
      'project' => 'purge',
      'version' => '7.x-1.6',
    ),
    'readonlymode' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/readonlymode/readonlymode.module',
      'name' => 'readonlymode',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Read Only Mode',
        'description' => 'This module will lock your site for any form postings.',
        'core' => '7.x',
        'package' => 'Administration',
        'configure' => 'admin/config/development/maintenance',
        'files' => 
        array (
          0 => 'readonlymode.test',
        ),
        'version' => '7.x-1.2',
        'project' => 'readonlymode',
        'datestamp' => '1402574630',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'readonlymode',
      'version' => '7.x-1.2',
    ),
    'reroute_email' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/reroute_email/reroute_email.module',
      'name' => 'reroute_email',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Reroute emails',
        'description' => 'Reroutes emails send from the site to a predefined email. Useful for test sites.',
        'package' => 'Development',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'reroute_email.test',
        ),
        'configure' => 'admin/config/development/reroute_email',
        'version' => '7.x-1.2',
        'project' => 'reroute_email',
        'datestamp' => '1414831432',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'reroute_email',
      'version' => '7.x-1.2',
    ),
    'robotstxt' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/robotstxt/robotstxt.module',
      'name' => 'robotstxt',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'robots.txt',
        'description' => 'Generates the robots.txt file dynamically and gives you the chance to edit it, on a per-site basis, from the web UI.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'robotstxt.module',
          1 => 'robotstxt.admin.inc',
          2 => 'robotstxt.install',
        ),
        'configure' => 'admin/config/search/robotstxt',
        'version' => '7.x-1.3',
        'project' => 'robotstxt',
        'datestamp' => '1419385385',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'robotstxt',
      'version' => '7.x-1.3',
    ),
    'securesite' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/securesite/securesite.module',
      'name' => 'securesite',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Secure Site',
        'description' => 'Enables HTTP Auth security or an HTML form to restrict site access.',
        'core' => '7.x',
        'configure' => 'admin/config/system/securesite',
        'files' => 
        array (
          0 => 'securesite.test',
          1 => 'securesite.inc',
        ),
        'version' => '7.x-2.0-beta2+4-dev',
        'project' => 'securesite',
        'datestamp' => '1396946353',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'securesite',
      'version' => '7.x-2.0-beta2+4-dev',
    ),
    'session_expire' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/session_expire/session_expire.module',
      'name' => 'session_expire',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Session Expire',
        'description' => 'Expires rows from the session table older than a certain time.',
        'core' => '7.x',
        'configure' => 'admin/config/system/session_expire',
        'files' => 
        array (
          0 => 'session_expire.module',
        ),
        'version' => '7.x-1.0-alpha1+7-dev',
        'project' => 'session_expire',
        'datestamp' => '1417209266',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'session_expire',
      'version' => '7.x-1.0-alpha1+7-dev',
    ),
    'site_verify' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/site_verify/site_verify.module',
      'name' => 'site_verify',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Site Verification',
        'description' => 'Verifies ownership of a site for use with search engines.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'site_verify.module',
          1 => 'site_verify.admin.inc',
          2 => 'site_verify.install',
          3 => 'site_verify.test',
        ),
        'configure' => 'admin/config/search/verifications',
        'version' => '7.x-1.1',
        'project' => 'site_verify',
        'datestamp' => '1395656959',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'site_verify',
      'version' => '7.x-1.1',
    ),
    'speedy' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/speedy/speedy.module',
      'name' => 'speedy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Speedy',
        'description' => 'Tools to improve the front end performance of your site.',
        'core' => '7.x',
        'configure' => 'admin/config/development/performance',
        'version' => '7.x-1.15',
        'project' => 'speedy',
        'datestamp' => '1416498504',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'speedy',
      'version' => '7.x-1.15',
    ),
    'taxonomy_edge' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/taxonomy_edge/taxonomy_edge.module',
      'name' => 'taxonomy_edge',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy Edge',
        'description' => 'Edge lists for taxonomies',
        'package' => 'Taxonomy',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'configure' => 'admin/structure/taxonomy/edge',
        'files' => 
        array (
          0 => 'tests/tree.test',
          1 => 'tests/unit.test',
        ),
        'version' => '7.x-1.9',
        'project' => 'taxonomy_edge',
        'datestamp' => '1409109835',
        'php' => '5.2.4',
      ),
      'project' => 'taxonomy_edge',
      'version' => '7.x-1.9',
    ),
    'views_taxonomy_edge' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/taxonomy_edge/views_taxonomy_edge/views_taxonomy_edge.module',
      'name' => 'views_taxonomy_edge',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Taxonomy Edge',
        'description' => 'Views for taxonomies using Taxonomy Edge',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'taxonomy_edge',
          1 => 'views',
        ),
        'files' => 
        array (
          0 => 'handlers/views_handler_argument_term_edge_node_tid_depth.inc',
          1 => 'handlers/views_handler_argument_term_edge_node_tid_depth_modifier.inc',
          2 => 'handlers/views_handler_filter_term_edge_node_tid_depth.inc',
          3 => 'handlers/views_join_term_edge.inc',
          4 => 'handlers/views_handler_sort_term_edge_hierarchy.inc',
        ),
        'version' => '7.x-1.9',
        'project' => 'taxonomy_edge',
        'datestamp' => '1409109835',
        'php' => '5.2.4',
      ),
      'project' => 'taxonomy_edge',
      'version' => '7.x-1.9',
    ),
    'textile' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/textile/textile.module',
      'name' => 'textile',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Textile',
        'description' => 'Allows content to be submitted using Textile, a simple, plain text syntax that is filtered into valid XHTML.',
        'package' => 'Input filters',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'vars (> 1.0)',
        ),
        'version' => '7.x-2.0-rc11',
        'project' => 'textile',
        'datestamp' => '1319231138',
        'php' => '5.2.4',
      ),
      'project' => 'textile',
      'version' => '7.x-2.0-rc11',
    ),
    'variable_clean' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/variable_clean/variable_clean.module',
      'name' => 'variable_clean',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable Cleanup',
        'description' => 'Allows you to remove variables not currently used.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'variable_clean.module',
          1 => 'variable_clean.test',
        ),
        'version' => '7.x-1.x-dev',
        'project' => 'variable_clean',
        'datestamp' => '1382151358',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'variable_clean',
      'version' => '7.x-1.x-dev',
    ),
    'vars' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/vars/vars.module',
      'name' => 'vars',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable API',
        'description' => 'Implements an API to handle persistent variables.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'vars.classes.inc',
          1 => 'tests/vars.test',
        ),
        'version' => '7.x-2.0-alpha10',
        'project' => 'vars',
        'datestamp' => '1318969538',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'vars',
      'version' => '7.x-2.0-alpha10',
    ),
    'views404' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/views404/views404.module',
      'name' => 'views404',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views 404',
        'description' => 'Return 404 if the path doesn\'t match the view path.',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'version' => '7.x-1.0-beta1',
        'project' => 'views404',
        'datestamp' => '1418590460',
        'php' => '5.2.4',
      ),
      'project' => 'views404',
      'version' => '7.x-1.0-beta1',
    ),
    'views_accelerator' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/views_accelerator/views_accelerator.module',
      'name' => 'views_accelerator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Accelerator',
        'description' => 'Performance booster for views that are receptive to render optimisations.',
        'core' => '7.x',
        'configure' => 'admin/config/system/views-accelerator',
        'package' => 'Views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'views/plugins/views_plugin_cache_none_accelerated.inc',
          1 => 'views/plugins/views_plugin_cache_none_debug.inc',
        ),
        'version' => '7.x-1.0-beta1',
        'project' => 'views_accelerator',
        'datestamp' => '1415076828',
        'php' => '5.2.4',
      ),
      'project' => 'views_accelerator',
      'version' => '7.x-1.0-beta1',
    ),
    'views_cache_bully' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/views_cache_bully/views_cache_bully.module',
      'name' => 'views_cache_bully',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Cache Bully',
        'description' => 'Forcibily cache all views, come hell or high water.',
        'core' => '7.x',
        'package' => 'views',
        'files' => 
        array (
          0 => 'views_cache_bully.views.inc',
        ),
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'version' => '7.x-3.1',
        'project' => 'views_cache_bully',
        'datestamp' => '1389886710',
        'php' => '5.2.4',
      ),
      'project' => 'views_cache_bully',
      'version' => '7.x-3.1',
    ),
    'views_content_cache' => 
    array (
      'filename' => '/data/all/008/o_contrib_seven/views_content_cache/views_content_cache.module',
      'name' => 'views_content_cache',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
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
    'path' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/path/path.module',
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
        'version' => '7.35',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'path.test',
        ),
        'configure' => 'admin/config/search/path',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'php' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/php/php.module',
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
        'version' => '7.35',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'php.test',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'poll' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/poll/poll.module',
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
        'version' => '7.35',
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
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'rdf' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/rdf/rdf.module',
      'name' => 'rdf',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'RDF',
        'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
        'package' => 'Core',
        'version' => '7.35',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rdf.test',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'search' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/search/search.module',
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
        'version' => '7.35',
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
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'shortcut' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/shortcut/shortcut.module',
      'name' => 'shortcut',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shortcut',
        'description' => 'Allows users to manage customizable lists of shortcut links.',
        'package' => 'Core',
        'version' => '7.35',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'shortcut.test',
        ),
        'configure' => 'admin/config/user-interface/shortcut',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'simpletest' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/simpletest/simpletest.module',
      'name' => 'simpletest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Testing',
        'description' => 'Provides a framework for unit and functional testing.',
        'package' => 'Core',
        'version' => '7.35',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'simpletest.test',
          1 => 'drupal_web_test_case.php',
          2 => 'tests/actions.test',
          3 => 'tests/ajax.test',
          4 => 'tests/batch.test',
          5 => 'tests/bootstrap.test',
          6 => 'tests/cache.test',
          7 => 'tests/common.test',
          8 => 'tests/database_test.test',
          9 => 'tests/entity_crud.test',
          10 => 'tests/entity_crud_hook_test.test',
          11 => 'tests/entity_query.test',
          12 => 'tests/error.test',
          13 => 'tests/file.test',
          14 => 'tests/filetransfer.test',
          15 => 'tests/form.test',
          16 => 'tests/graph.test',
          17 => 'tests/image.test',
          18 => 'tests/lock.test',
          19 => 'tests/mail.test',
          20 => 'tests/menu.test',
          21 => 'tests/module.test',
          22 => 'tests/pager.test',
          23 => 'tests/password.test',
          24 => 'tests/path.test',
          25 => 'tests/registry.test',
          26 => 'tests/schema.test',
          27 => 'tests/session.test',
          28 => 'tests/tablesort.test',
          29 => 'tests/theme.test',
          30 => 'tests/unicode.test',
          31 => 'tests/update.test',
          32 => 'tests/xmlrpc.test',
          33 => 'tests/upgrade/upgrade.test',
          34 => 'tests/upgrade/upgrade.comment.test',
          35 => 'tests/upgrade/upgrade.filter.test',
          36 => 'tests/upgrade/upgrade.forum.test',
          37 => 'tests/upgrade/upgrade.locale.test',
          38 => 'tests/upgrade/upgrade.menu.test',
          39 => 'tests/upgrade/upgrade.node.test',
          40 => 'tests/upgrade/upgrade.taxonomy.test',
          41 => 'tests/upgrade/upgrade.trigger.test',
          42 => 'tests/upgrade/upgrade.translatable.test',
          43 => 'tests/upgrade/upgrade.upload.test',
          44 => 'tests/upgrade/upgrade.user.test',
          45 => 'tests/upgrade/update.aggregator.test',
          46 => 'tests/upgrade/update.trigger.test',
          47 => 'tests/upgrade/update.field.test',
          48 => 'tests/upgrade/update.user.test',
        ),
        'configure' => 'admin/config/development/testing/settings',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'statistics' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/statistics/statistics.module',
      'name' => 'statistics',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Statistics',
        'description' => 'Logs access statistics for your site.',
        'package' => 'Core',
        'version' => '7.35',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'statistics.test',
        ),
        'configure' => 'admin/config/system/statistics',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'syslog' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/syslog/syslog.module',
      'name' => 'syslog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Syslog',
        'description' => 'Logs and records system events to syslog.',
        'package' => 'Core',
        'version' => '7.35',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'syslog.test',
        ),
        'configure' => 'admin/config/development/logging',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'system' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/system/system.module',
      'name' => 'system',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7079',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System',
        'description' => 'Handles general site configuration for administrators.',
        'package' => 'Core',
        'version' => '7.35',
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
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'taxonomy' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/taxonomy/taxonomy.module',
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
        'version' => '7.35',
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
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'toolbar' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/toolbar/toolbar.module',
      'name' => 'toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Toolbar',
        'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.35',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'tracker' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/tracker/tracker.module',
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
        'version' => '7.35',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tracker.test',
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'translation' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/translation/translation.module',
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
        'version' => '7.35',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'translation.test',
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'trigger' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/trigger/trigger.module',
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
        'version' => '7.35',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'trigger.test',
        ),
        'configure' => 'admin/structure/trigger',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'update' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/update/update.module',
      'name' => 'update',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update manager',
        'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
        'version' => '7.35',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'update.test',
        ),
        'configure' => 'admin/reports/updates/settings',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'user' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/modules/user/user.module',
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
        'version' => '7.35',
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
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'acquia_agent' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/acquia_connector/acquia_agent/acquia_agent.module',
      'name' => 'acquia_agent',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Acquia agent',
        'description' => 'Allows Drupal to securely communicate with Acquia Insight, and checks for updates to Acquia Drupal.',
        'package' => 'Acquia Connector',
        'core' => '7.x',
        'configure' => 'admin/config/system/acquia-agent',
        'files' => 
        array (
          0 => 'tests/acquia_agent.test',
        ),
        'php' => '5.2',
        'version' => '7.x-2.15',
        'project' => 'acquia_connector',
        'datestamp' => '1415907497',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'acquia_connector',
      'version' => '7.x-2.15',
    ),
    'acquia_search' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/acquia_connector/acquia_search/acquia_search.module',
      'name' => 'acquia_search',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Acquia search',
        'description' => 'Provides integration between your Drupal site and Acquia\'s hosted search service.',
        'package' => 'Acquia Connector',
        'core' => '7.x',
        'configure' => 'admin/config/search/apachesolr/settings',
        'dependencies' => 
        array (
          0 => 'acquia_agent',
          1 => 'apachesolr',
          2 => 'apachesolr_search',
          3 => 'search',
        ),
        'files' => 
        array (
          0 => 'Acquia_Search_Service.php',
          1 => 'tests/acquia_search.test',
        ),
        'version' => '7.x-2.15',
        'project' => 'acquia_connector',
        'datestamp' => '1415907497',
        'php' => '5.2.4',
      ),
      'project' => 'acquia_connector',
      'version' => '7.x-2.15',
    ),
    'acquia_spi' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/acquia_connector/acquia_spi/acquia_spi.module',
      'name' => 'acquia_spi',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Acquia Site Profile Information',
        'description' => 'Sends detailed information about your Drupal site (status, info, debugging, etc...) to Acquia Insight.',
        'package' => 'Acquia Connector',
        'php' => '5.0',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'acquia_agent',
        ),
        'files' => 
        array (
          0 => 'tests/acquia_spi.test',
        ),
        'version' => '7.x-2.15',
        'project' => 'acquia_connector',
        'datestamp' => '1415907497',
      ),
      'project' => 'acquia_connector',
      'version' => '7.x-2.15',
    ),
    'addressfield' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/addressfield/addressfield.module',
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
          1 => 'views/addressfield_views_handler_field_country.inc',
          2 => 'views/addressfield_views_handler_filter_country.inc',
        ),
        'version' => '7.x-1.0',
        'project' => 'addressfield',
        'datestamp' => '1421426885',
        'php' => '5.2.4',
      ),
      'project' => 'addressfield',
      'version' => '7.x-1.0',
    ),
    'adminimal_admin_menu' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/adminimal_admin_menu/adminimal_admin_menu.module',
      'name' => 'adminimal_admin_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Administration menu Adminimal Theme',
        'description' => 'Clean and minimal theme for the administration menu module.',
        'package' => 'Administration',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'admin_menu',
        ),
        'version' => '7.x-1.5+6-dev',
        'project' => 'adminimal_admin_menu',
        'datestamp' => '1399641269',
        'php' => '5.2.4',
      ),
      'project' => 'adminimal_admin_menu',
      'version' => '7.x-1.5+6-dev',
    ),
    'admin_icons' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/admin_icons/admin_icons.module',
      'name' => 'admin_icons',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Icon fonts',
        'description' => 'Icon font library for use with other modules and themes.',
        'core' => '7.x',
        'version' => '7.x-1.x-dev',
        'project' => 'admin_icons',
        'datestamp' => '1348864295',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'admin_icons',
      'version' => '7.x-1.x-dev',
    ),
    'admin_devel' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/admin_menu/admin_devel/admin_devel.module',
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
        'datestamp' => '1395418383',
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
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/admin_menu/admin_menu.module',
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
        'datestamp' => '1395418383',
        'php' => '5.2.4',
      ),
      'project' => 'admin_menu',
      'version' => '7.x-3.0-rc5',
    ),
    'admin_menu_toolbar' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
      'name' => 'admin_menu_toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
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
        'datestamp' => '1395418383',
        'php' => '5.2.4',
      ),
      'project' => 'admin_menu',
      'version' => '7.x-3.0-rc5',
    ),
    'advanced_help' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/advanced_help/advanced_help.module',
      'name' => 'advanced_help',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Advanced help',
        'description' => 'Allow advanced help and documentation.',
        'core' => '7.x',
        'version' => '7.x-1.1',
        'project' => 'advanced_help',
        'datestamp' => '1386871727',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'advanced_help',
      'version' => '7.x-1.1',
    ),
    'help_example' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/advanced_help/help_example/help_example.module',
      'name' => 'help_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Advanced help example',
        'description' => 'A example help module to demonstrate the advanced help module.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advanced_help',
        ),
        'version' => '7.x-1.1',
        'project' => 'advanced_help',
        'datestamp' => '1386871727',
        'php' => '5.2.4',
      ),
      'project' => 'advanced_help',
      'version' => '7.x-1.1',
    ),
    'apachesolr' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/apachesolr/apachesolr.module',
      'name' => 'apachesolr',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
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
        'version' => '7.x-1.7',
        'project' => 'apachesolr',
        'datestamp' => '1409317099',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'apachesolr',
      'version' => '7.x-1.7',
    ),
    'apachesolr_access' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/apachesolr/apachesolr_access/apachesolr_access.module',
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
        'version' => '7.x-1.7',
        'project' => 'apachesolr',
        'datestamp' => '1409317099',
        'php' => '5.2.4',
      ),
      'project' => 'apachesolr',
      'version' => '7.x-1.7',
    ),
    'apachesolr_search' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/apachesolr/apachesolr_search.module',
      'name' => 'apachesolr_search',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
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
        'version' => '7.x-1.7',
        'project' => 'apachesolr',
        'datestamp' => '1409317099',
        'php' => '5.2.4',
      ),
      'project' => 'apachesolr',
      'version' => '7.x-1.7',
    ),
    'apachesolr_og' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/apachesolr_og/apachesolr_og.module',
      'name' => 'apachesolr_og',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Apache Solr Organic Groups',
        'description' => 'Integrates Organic Groups and Apache Solr Search',
        'package' => 'Apache Solr',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'apachesolr',
          1 => 'og',
        ),
        'version' => '7.x-1.0+2-dev',
        'project' => 'apachesolr_og',
        'datestamp' => '1352897236',
        'php' => '5.2.4',
      ),
      'project' => 'apachesolr_og',
      'version' => '7.x-1.0+2-dev',
    ),
    'auto_nodetitle' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/auto_nodetitle/auto_nodetitle.module',
      'name' => 'auto_nodetitle',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Automatic Nodetitles',
        'description' => 'Allows hiding of the content title field and automatic title creation.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'auto_nodetitle.install',
          1 => 'auto_nodetitle.module',
          2 => 'auto_nodetitle.js',
        ),
        'version' => '7.x-1.0',
        'project' => 'auto_nodetitle',
        'datestamp' => '1307449915',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'auto_nodetitle',
      'version' => '7.x-1.0',
    ),
    'backup_migrate' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/backup_migrate/backup_migrate.module',
      'name' => 'backup_migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7303',
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
        'version' => '7.x-3.0',
        'project' => 'backup_migrate',
        'datestamp' => '1401209057',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'backup_migrate',
      'version' => '7.x-3.0',
    ),
    'breakpoints' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/breakpoints/breakpoints.module',
      'name' => 'breakpoints',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Breakpoints',
        'description' => 'Manage breakpoints',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'breakpoints.module',
          1 => 'breakpoints.test',
        ),
        'configure' => 'admin/config/media/breakpoints',
        'version' => '7.x-1.3',
        'project' => 'breakpoints',
        'datestamp' => '1407507528',
        'php' => '5.2.4',
      ),
      'project' => 'breakpoints',
      'version' => '7.x-1.3',
    ),
    'ckeditor' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/ckeditor/ckeditor.module',
      'name' => 'ckeditor',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7006',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CKEditor',
        'description' => 'Enables CKEditor (WYSIWYG HTML editor) for use instead of plain text fields.',
        'core' => '7.x',
        'package' => 'User interface',
        'configure' => 'admin/config/content/ckeditor',
        'version' => '7.x-1.16',
        'project' => 'ckeditor',
        'datestamp' => '1413311935',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'ckeditor',
      'version' => '7.x-1.16',
    ),
    'cod_base' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/cod_support/cod_base/cod_base.module',
      'name' => 'cod_base',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'COD Base',
        'description' => 'Contains dependencies shared by other COD feature modules.',
        'core' => '7.x',
        'package' => 'COD',
        'project' => 'cod_support',
        'dependencies' => 
        array (
          0 => 'advanced_help',
          1 => 'comment',
          2 => 'dashboard',
          3 => 'features',
          4 => 'field_permissions',
          5 => 'menu',
          6 => 'pathauto',
          7 => 'strongarm',
          8 => 'taxonomy',
          9 => 'token',
          10 => 'views',
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
          'user_permission' => 
          array (
            0 => 'access administration menu',
            1 => 'access administration pages',
            2 => 'access content',
            3 => 'access content overview',
            4 => 'access dashboard',
            5 => 'access private fields',
            6 => 'access site in maintenance mode',
            7 => 'access site reports',
            8 => 'access user profiles',
            9 => 'administer comments',
            10 => 'administer content types',
            11 => 'administer field permissions',
            12 => 'administer menu',
            13 => 'administer nodes',
            14 => 'administer pathauto',
            15 => 'administer permissions',
            16 => 'administer site configuration',
            17 => 'administer taxonomy',
            18 => 'administer url aliases',
            19 => 'administer users',
            20 => 'administer views',
            21 => 'bypass node access',
            22 => 'create url aliases',
            23 => 'flush caches',
            24 => 'notify of path changes',
            25 => 'view advanced help index',
            26 => 'view advanced help popup',
            27 => 'view advanced help topic',
            28 => 'view the administration theme',
            29 => 'view own unpublished content',
          ),
          'user_role' => 
          array (
            0 => 'content editor',
          ),
          'variable' => 
          array (
            0 => 'admin_toolbar',
            1 => 'date_format_date_no_time',
          ),
        ),
        'files' => 
        array (
          0 => 'cod_base.module',
        ),
        'version' => '7.x-1.0-beta8+5-dev',
        'datestamp' => '1427924214',
        'php' => '5.2.4',
      ),
      'project' => 'cod_support',
      'version' => '7.x-1.0-beta8+5-dev',
    ),
    'cod_basic_page' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/cod_support/cod_basic_page/cod_basic_page.module',
      'name' => 'cod_basic_page',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'COD Basic Page',
        'description' => 'Basic pages (program, hotel, etc) for COD Events',
        'core' => '7.x',
        'package' => 'COD',
        'dependencies' => 
        array (
          0 => 'cod_events',
          1 => 'views',
          2 => 'views_content',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'page_manager:pages_default:1',
            1 => 'strongarm:strongarm:1',
            2 => 'views:views_default:3.0',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'field_instance' => 
          array (
            0 => 'node-page-og_group_ref',
          ),
          'node' => 
          array (
            0 => 'page',
          ),
          'og_features_permission' => 
          array (
            0 => 'node:event:create page content',
            1 => 'node:event:delete any page content',
            2 => 'node:event:delete own page content',
            3 => 'node:event:update any page content',
            4 => 'node:event:update own page content',
          ),
          'page_manager_pages' => 
          array (
            0 => 'cod_basic_pages',
          ),
          'variable' => 
          array (
            0 => 'field_bundle_settings_node__page',
            1 => 'panelizer_defaults_node_page',
            2 => 'pathauto_node_page_pattern',
          ),
          'views_view' => 
          array (
            0 => 'cod_basic_pages_admin_listing',
          ),
        ),
        'features_exclude' => 
        array (
          'dependencies' => 
          array (
            'ctools' => 'ctools',
            'entityreference' => 'entityreference',
            'features' => 'features',
            'og' => 'og',
            'page_manager' => 'page_manager',
            'strongarm' => 'strongarm',
          ),
        ),
        'install_option' => 'cod',
        'version' => '7.x-1.0-beta8+5-dev',
        'project' => 'cod_support',
        'datestamp' => '1427924214',
        'php' => '5.2.4',
      ),
      'project' => 'cod_support',
      'version' => '7.x-1.0-beta8+5-dev',
    ),
    'cod_bof' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/cod_support/cod_bof/cod_bof.module',
      'name' => 'cod_bof',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'COD BoF Session',
        'description' => 'Self-scheduled, unconference style sessions (BoFs)',
        'core' => '7.x',
        'package' => 'COD',
        'dependencies' => 
        array (
          0 => 'cod_schedule',
          1 => 'cod_session',
          2 => 'ctools',
          3 => 'entityreference',
          4 => 'features',
          5 => 'field_group',
          6 => 'node',
          7 => 'og',
          8 => 'og_ui',
          9 => 'options',
          10 => 'quicktabs',
          11 => 'strongarm',
          12 => 'text',
          13 => 'views',
          14 => 'views_field_view',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'field_group:field_group:1',
            1 => 'strongarm:strongarm:1',
            2 => 'views:views_default:3.0',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'field_group' => 
          array (
            0 => 'group_bof_schedule|node|bof_session|form',
          ),
          'field_instance' => 
          array (
            0 => 'node-bof_session-body',
            1 => 'node-bof_session-field_session_timeslot',
            2 => 'node-bof_session-og_group_ref',
          ),
          'node' => 
          array (
            0 => 'bof_session',
          ),
          'user_permission' => 
          array (
            0 => 'create bof_session content',
            1 => 'delete any bof_session content',
            2 => 'delete own bof_session content',
            3 => 'edit any bof_session content',
            4 => 'edit own bof_session content',
            5 => 'view bofs',
          ),
          'variable' => 
          array (
            0 => 'cod_unique_bof_session',
            1 => 'comment_anonymous_bof_session',
            2 => 'comment_bof_session',
            3 => 'comment_controls_bof_session',
            4 => 'comment_default_mode_bof_session',
            5 => 'comment_default_order_bof_session',
            6 => 'comment_default_per_page_bof_session',
            7 => 'comment_form_location_bof_session',
            8 => 'comment_preview_bof_session',
            9 => 'comment_subject_field_bof_session',
            10 => 'field_bundle_settings_node__bof_session',
            11 => 'menu_options_bof_session',
            12 => 'menu_parent_bof_session',
            13 => 'node_options_bof_session',
            14 => 'node_preview_bof_session',
            15 => 'node_submitted_bof_session',
            16 => 'pathauto_node_bof_session_pattern',
          ),
          'views_view' => 
          array (
            0 => 'cod_bof_schedule',
            1 => 'cod_bof_schedule_content',
            2 => 'cod_bof_schedule_timeslots',
          ),
        ),
        'install_option' => 'cod',
        'version' => '7.x-1.0-beta8+5-dev',
        'project' => 'cod_support',
        'datestamp' => '1427924214',
        'php' => '5.2.4',
      ),
      'project' => 'cod_support',
      'version' => '7.x-1.0-beta8+5-dev',
    ),
    'cod_bof_pages' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/cod_support/cod_bof/modules/cod_bof_pages/cod_bof_pages.module',
      'name' => 'cod_bof_pages',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'COD BoF Pages',
        'core' => '7.x',
        'package' => 'COD Pages',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'panelizer',
          2 => 'panels_ipe',
          3 => 'strongarm',
          4 => 'cod_bof',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'panelizer:panelizer:1',
            1 => 'strongarm:strongarm:1',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'panelizer_defaults' => 
          array (
            0 => 'node:bof_session:default:default',
          ),
          'variable' => 
          array (
            0 => 'panelizer_defaults_node_bof_session',
          ),
        ),
        'version' => '7.x-1.0-beta8+5-dev',
        'project' => 'cod_support',
        'datestamp' => '1427924214',
        'description' => '',
        'php' => '5.2.4',
      ),
      'project' => 'cod_support',
      'version' => '7.x-1.0-beta8+5-dev',
    ),
    'cod_community' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/cod_support/cod_community/cod_community.module',
      'name' => 'cod_community',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'COD Community',
        'description' => 'Show pages of attendees (requires registration)',
        'core' => '7.x',
        'package' => 'COD',
        'dependencies' => 
        array (
          0 => 'cod_base',
          1 => 'contact',
          2 => 'ctools',
          3 => 'entityreference',
          4 => 'features',
          5 => 'list',
          6 => 'menu',
          7 => 'options',
          8 => 'views',
          9 => 'views_content',
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
          'field_base' => 
          array (
            0 => 'field_ticket_attendee_listing',
          ),
          'field_instance' => 
          array (
            0 => 'node-event-field_ticket_attendee_listing',
          ),
          'user_permission' => 
          array (
            0 => 'administer contact forms',
          ),
          'views_view' => 
          array (
            0 => 'cod_community_attendees',
          ),
        ),
        'install_option' => 'cod',
        'version' => '7.x-1.0-beta8+5-dev',
        'project' => 'cod_support',
        'datestamp' => '1427924214',
        'php' => '5.2.4',
      ),
      'project' => 'cod_support',
      'version' => '7.x-1.0-beta8+5-dev',
    ),
    'cod_community_pages' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/cod_support/cod_community/modules/cod_community_pages/cod_community_pages.module',
      'name' => 'cod_community_pages',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'COD Community Pages',
        'core' => '7.x',
        'package' => 'COD Pages',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'cod_community',
          2 => 'page_manager',
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
            0 => 'community',
          ),
        ),
        'version' => '7.x-1.0-beta8+5-dev',
        'project' => 'cod_support',
        'datestamp' => '1427924214',
        'description' => '',
        'php' => '5.2.4',
      ),
      'project' => 'cod_support',
      'version' => '7.x-1.0-beta8+5-dev',
    ),
    'cod_events' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/cod_support/cod_events/cod_events.module',
      'name' => 'cod_events',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'COD Events',
        'description' => 'Provides base event management',
        'core' => '7.x',
        'package' => 'COD',
        'project' => 'cod_support',
        'dependencies' => 
        array (
          0 => 'cod_base',
          1 => 'ctools',
          2 => 'date',
          3 => 'date_api',
          4 => 'date_popup',
          5 => 'efq_extra_field',
          6 => 'entity',
          7 => 'entityreference',
          8 => 'features',
          9 => 'field_collection',
          10 => 'field_select_ct',
          11 => 'flag',
          12 => 'image',
          13 => 'inline_entity_form',
          14 => 'list',
          15 => 'og',
          16 => 'og_ui',
          17 => 'options',
          18 => 'page_manager',
          19 => 'panels',
          20 => 'strongarm',
          21 => 'subpathauto',
          22 => 'text',
          23 => 'views',
          24 => 'views_content',
          25 => 'views_field_view',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'page_manager:pages_default:1',
            1 => 'strongarm:strongarm:1',
            2 => 'views:views_default:3.0',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'field_base' => 
          array (
            0 => 'body',
            1 => 'field_dates',
            2 => 'field_event_image',
            3 => 'group_access',
            4 => 'group_group',
            5 => 'og_group_ref',
            6 => 'og_roles_permissions',
          ),
          'field_instance' => 
          array (
            0 => 'node-event-body',
            1 => 'node-event-field_dates',
            2 => 'node-event-field_event_image',
            3 => 'node-event-group_access',
            4 => 'node-event-group_group',
            5 => 'node-event-og_roles_permissions',
          ),
          'flag' => 
          array (
            0 => 'default_event',
          ),
          'node' => 
          array (
            0 => 'event',
          ),
          'og_features_permission' => 
          array (
            0 => 'node:event:add user',
            1 => 'node:event:administer group',
            2 => 'node:event:approve and deny subscription',
            3 => 'node:event:manage members',
            4 => 'node:event:manage permissions',
            5 => 'node:event:manage roles',
            6 => 'node:event:subscribe',
            7 => 'node:event:subscribe without approval',
            8 => 'node:event:unsubscribe',
            9 => 'node:event:update group',
          ),
          'page_manager_pages' => 
          array (
            0 => 'event_dashboard',
          ),
          'user_permission' => 
          array (
            0 => 'view program',
          ),
          'user_role' => 
          array (
            0 => 'attendee manager',
          ),
          'variable' => 
          array (
            0 => 'comment_anonymous_event',
            1 => 'comment_default_mode_event',
            2 => 'comment_default_per_page_event',
            3 => 'comment_event',
            4 => 'comment_form_location_event',
            5 => 'comment_preview_event',
            6 => 'comment_subject_field_event',
            7 => 'field_bundle_settings_node__event',
            8 => 'menu_options_event',
            9 => 'menu_parent_event',
            10 => 'node_options_event',
            11 => 'node_preview_event',
            12 => 'node_submitted_event',
            13 => 'og_features_ignore_og_fields',
            14 => 'og_group_manager_default_rids_node_event',
            15 => 'og_group_manager_full_access',
            16 => 'og_node_access_strict',
            17 => 'og_orphans_delete',
            18 => 'og_ui_admin_people_view',
            19 => 'og_use_queue',
            20 => 'pathauto_node_event_pattern',
            21 => 'subpathauto_depth',
            22 => 'subpathauto_ignore_admin',
          ),
          'views_view' => 
          array (
            0 => 'cod_events_admin',
          ),
        ),
        'features_exclude' => 
        array (
          'dependencies' => 
          array (
            'cod_community' => 'cod_community',
          ),
          'field_base' => 
          array (
            'field_event_product' => 'field_event_product',
            'field_paid_event' => 'field_paid_event',
          ),
          'field_instance' => 
          array (
            'node-event-field_event_product' => 'node-event-field_event_product',
            'node-event-field_paid_event' => 'node-event-field_paid_event',
          ),
        ),
        'files' => 
        array (
          0 => 'includes/views/handlers/cod_events_plugin_argument_default_event.inc',
          1 => 'includes/views/handlers/cod_events_plugin_argument_default_type.inc',
        ),
        'version' => '7.x-1.0-beta8+5-dev',
        'datestamp' => '1427924214',
        'php' => '5.2.4',
      ),
      'project' => 'cod_support',
      'version' => '7.x-1.0-beta8+5-dev',
    ),
    'cod_events_pages' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/cod_support/cod_events/modules/cod_events_pages/cod_events_pages.module',
      'name' => 'cod_events_pages',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'COD Events Pages',
        'core' => '7.x',
        'package' => 'COD Pages',
        'dependencies' => 
        array (
          0 => 'cod_events',
          1 => 'ctools',
          2 => 'page_manager',
          3 => 'panelizer',
          4 => 'panels',
          5 => 'views',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'page_manager:pages_default:1',
            1 => 'panelizer:panelizer:1',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'page_manager_pages' => 
          array (
            0 => 'conference_admin',
            1 => 'program',
          ),
          'panelizer_defaults' => 
          array (
            0 => 'node:event:default:default',
          ),
        ),
        'version' => '7.x-1.0-beta8+5-dev',
        'project' => 'cod_support',
        'datestamp' => '1427924214',
        'description' => '',
        'php' => '5.2.4',
      ),
      'project' => 'cod_support',
      'version' => '7.x-1.0-beta8+5-dev',
    ),
    'cod_front_page' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/cod_support/cod_front_page/cod_front_page.module',
      'name' => 'cod_front_page',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'COD Front Page',
        'description' => 'Displays promoted content, sessions, and news on front page.',
        'core' => '7.x',
        'package' => 'COD Pages',
        'project' => 'cod_support',
        'dependencies' => 
        array (
          0 => 'cod_news',
          1 => 'cod_session',
          2 => 'ctools',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'context:context:3',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
        ),
        'version' => '7.x-1.0-beta8+5-dev',
        'datestamp' => '1427924214',
        'php' => '5.2.4',
      ),
      'project' => 'cod_support',
      'version' => '7.x-1.0-beta8+5-dev',
    ),
    'cod_news' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/cod_support/cod_news/cod_news.module',
      'name' => 'cod_news',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'COD News',
        'description' => 'News items for events',
        'core' => '7.x',
        'package' => 'COD',
        'project' => 'cod_support',
        'dependencies' => 
        array (
          0 => 'cod_events',
          1 => 'comment',
          2 => 'ctools',
          3 => 'features',
          4 => 'menu',
          5 => 'og',
          6 => 'og_ui',
          7 => 'strongarm',
          8 => 'taxonomy',
          9 => 'text',
          10 => 'views',
          11 => 'views_content',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
            1 => 'views:views_default:3.0',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'field_base' => 
          array (
            0 => 'field_news_tags',
          ),
          'field_instance' => 
          array (
            0 => 'node-news-body',
            1 => 'node-news-field_news_tags',
            2 => 'node-news-og_group_ref',
          ),
          'node' => 
          array (
            0 => 'news',
          ),
          'taxonomy' => 
          array (
            0 => 'news_tags',
          ),
          'variable' => 
          array (
            0 => 'comment_anonymous_news',
            1 => 'comment_default_mode_news',
            2 => 'comment_default_per_page_news',
            3 => 'comment_form_location_news',
            4 => 'comment_news',
            5 => 'comment_preview_news',
            6 => 'comment_subject_field_news',
            7 => 'field_bundle_settings_node__news',
            8 => 'menu_options_news',
            9 => 'menu_parent_news',
            10 => 'node_options_news',
            11 => 'node_preview_news',
            12 => 'node_submitted_news',
            13 => 'pathauto_node_news_pattern',
          ),
          'views_view' => 
          array (
            0 => 'cod_news',
          ),
        ),
        'install_option' => 'cod',
        'version' => '7.x-1.0-beta8+5-dev',
        'datestamp' => '1427924214',
        'php' => '5.2.4',
      ),
      'project' => 'cod_support',
      'version' => '7.x-1.0-beta8+5-dev',
    ),
    'cod_paid_events' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/cod_support/cod_paid_events/cod_paid_events.module',
      'name' => 'cod_paid_events',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'COD Paid Events',
        'description' => 'Provides paid events options',
        'core' => '7.x',
        'package' => 'COD',
        'project' => 'cod_support',
        'dependencies' => 
        array (
          0 => 'cod_events',
          1 => 'cod_registration',
          2 => 'commerce',
          3 => 'commerce_cart',
          4 => 'commerce_checkout',
          5 => 'commerce_features',
          6 => 'commerce_order_ui',
          7 => 'commerce_price',
          8 => 'commerce_product_reference',
          9 => 'commerce_product_ui',
          10 => 'commerce_payment',
          11 => 'commerce_payment_ui',
          12 => 'conditional_fields',
          13 => 'ctools',
          14 => 'entityreference',
          15 => 'features',
          16 => 'inline_entity_form',
          17 => 'list',
          18 => 'options',
          19 => 'ticket',
          20 => 'ticket_state',
          21 => 'views',
          22 => 'rules',
        ),
        'features' => 
        array (
          'commerce_product_type' => 
          array (
            0 => 'cod_paid_event',
          ),
          'ctools' => 
          array (
            0 => 'views:views_default:3.0',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'field_base' => 
          array (
            0 => 'commerce_price',
            1 => 'field_checkout_complete_state',
            2 => 'field_ticket_order',
            3 => 'field_ticket_related_product',
          ),
          'field_instance' => 
          array (
            0 => 'commerce_product-cod_paid_event-commerce_price',
            1 => 'ticket_type-ticket_type-field_checkout_complete_state',
            2 => 'ticket_type-ticket_type-field_ticket_related_product',
          ),
          'user_permission' => 
          array (
            0 => 'create field_checkout_complete_state',
            1 => 'edit field_checkout_complete_state',
            2 => 'edit own field_checkout_complete_state',
            3 => 'view field_checkout_complete_state',
            4 => 'view own field_checkout_complete_state',
          ),
          'views_view' => 
          array (
            0 => 'order_registrations',
          ),
        ),
        'features_exclude' => 
        array (
          'dependencies' => 
          array (
            'field_permissions' => 'field_permissions',
          ),
        ),
        'install_option' => 'cod',
        'version' => '7.x-1.0-beta8+5-dev',
        'datestamp' => '1427924214',
        'php' => '5.2.4',
      ),
      'project' => 'cod_support',
      'version' => '7.x-1.0-beta8+5-dev',
    ),
    'cod_profile_base' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/cod_support/cod_profile_base/cod_profile_base.module',
      'name' => 'cod_profile_base',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'COD Profile Base',
        'description' => 'Provides a base set of profile fields for user profiles.',
        'core' => '7.x',
        'package' => 'COD',
        'project' => 'cod_support',
        'dependencies' => 
        array (
          0 => 'addressfield',
          1 => 'ctools',
          2 => 'features',
          3 => 'strongarm',
          4 => 'text',
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
            0 => 'field_profile_bio',
            1 => 'field_profile_first',
            2 => 'field_profile_interests',
            3 => 'field_profile_job_title',
            4 => 'field_profile_last',
            5 => 'field_profile_location',
            6 => 'field_profile_org',
            7 => 'field_profile_phone',
          ),
          'field_instance' => 
          array (
            0 => 'user-user-field_profile_bio',
            1 => 'user-user-field_profile_first',
            2 => 'user-user-field_profile_interests',
            3 => 'user-user-field_profile_job_title',
            4 => 'user-user-field_profile_last',
            5 => 'user-user-field_profile_location',
            6 => 'user-user-field_profile_org',
            7 => 'user-user-field_profile_phone',
          ),
          'variable' => 
          array (
            0 => 'field_bundle_settings_user__user',
            1 => 'realname_pattern',
            2 => 'user_picture_dimensions',
            3 => 'user_picture_file_size',
            4 => 'user_picture_style',
            5 => 'user_pictures',
          ),
        ),
        'version' => '7.x-1.0-beta8+5-dev',
        'datestamp' => '1427924214',
        'php' => '5.2.4',
      ),
      'project' => 'cod_support',
      'version' => '7.x-1.0-beta8+5-dev',
    ),
    'cod_profile_optional' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/cod_support/cod_profile_optional/cod_profile_optional.module',
      'name' => 'cod_profile_optional',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'COD Profile (Optional fields)',
        'description' => 'Additional fields such as dietary needs and t-shirt size.',
        'core' => '7.x',
        'package' => 'COD',
        'project' => 'cod_support',
        'dependencies' => 
        array (
          0 => 'cod_profile_base',
          1 => 'features',
          2 => 'field_group',
          3 => 'list',
          4 => 'options',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'field_group:field_group:1',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'field_base' => 
          array (
            0 => 'field_dietary_needs',
            1 => 'field_t_shirt_size',
          ),
          'field_group' => 
          array (
            0 => 'group_cod_profile_details|user|user|form',
          ),
          'field_instance' => 
          array (
            0 => 'user-user-field_dietary_needs',
            1 => 'user-user-field_t_shirt_size',
          ),
        ),
        'install_option' => 'cod',
        'version' => '7.x-1.0-beta8+5-dev',
        'datestamp' => '1427924214',
        'php' => '5.2.4',
      ),
      'project' => 'cod_support',
      'version' => '7.x-1.0-beta8+5-dev',
    ),
    'cod_profile_social' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/cod_support/cod_profile_social/cod_profile_social.module',
      'name' => 'cod_profile_social',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'COD Profile (Social fields)',
        'description' => 'Provide a set of link fields to the user\'s profile for the user\'s Facebook, Linkedin and Twitter accounts.',
        'core' => '7.x',
        'package' => 'COD',
        'project' => 'cod_support',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'field_group',
          2 => 'link',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'field_group:field_group:1',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'field_base' => 
          array (
            0 => 'field_facebook_url',
            1 => 'field_linkedin_url',
            2 => 'field_twitter_url',
          ),
          'field_group' => 
          array (
            0 => 'group_cod_profile_social|user|user|form',
          ),
          'field_instance' => 
          array (
            0 => 'user-user-field_facebook_url',
            1 => 'user-user-field_linkedin_url',
            2 => 'user-user-field_twitter_url',
          ),
        ),
        'install_option' => 'cod',
        'version' => '7.x-1.0-beta8+5-dev',
        'datestamp' => '1427924214',
        'php' => '5.2.4',
      ),
      'project' => 'cod_support',
      'version' => '7.x-1.0-beta8+5-dev',
    ),
    'cod_registration' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/cod_support/cod_registration/cod_registration.module',
      'name' => 'cod_registration',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'COD Registration',
        'description' => 'Provide registration options to attendees',
        'core' => '7.x',
        'package' => 'COD',
        'project' => 'cod_support',
        'dependencies' => 
        array (
          0 => 'cod_base',
          1 => 'cod_events',
          2 => 'ctools',
          3 => 'date',
          4 => 'date_api',
          5 => 'date_popup',
          6 => 'entity',
          7 => 'features',
          8 => 'inline_entity_form',
          9 => 'og',
          10 => 'options',
          11 => 'strongarm',
          12 => 'text',
          13 => 'ticket',
          14 => 'ticket_state',
          15 => 'ticket_user_registration',
          16 => 'views',
          17 => 'views_field_view',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
            1 => 'views:views_default:3.0',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'field_base' => 
          array (
            0 => 'field_event_tickets',
          ),
          'field_instance' => 
          array (
            0 => 'node-event-field_event_tickets',
          ),
          'ticket_state' => 
          array (
            0 => 'cancelled',
            1 => 'checked_in',
            2 => 'completed',
            3 => 'pending',
          ),
          'user_permission' => 
          array (
            0 => 'administer ticket',
            1 => 'administer ticket states',
            2 => 'edit all ticket registrations',
            3 => 'view all ticket registrations',
          ),
        ),
        'install_option' => 'cod',
        'version' => '7.x-1.0-beta8+5-dev',
        'datestamp' => '1427924214',
        'php' => '5.2.4',
      ),
      'project' => 'cod_support',
      'version' => '7.x-1.0-beta8+5-dev',
    ),
    'cod_registration_pages' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/cod_support/cod_registration/modules/cod_registration_pages/cod_registration_pages.module',
      'name' => 'cod_registration_pages',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'COD Registration Pages',
        'core' => '7.x',
        'package' => 'COD Pages',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'cod_registration',
          2 => 'page_manager',
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
            0 => 'event_registration',
          ),
        ),
        'version' => '7.x-1.0-beta8+5-dev',
        'project' => 'cod_support',
        'datestamp' => '1427924214',
        'description' => '',
        'php' => '5.2.4',
      ),
      'project' => 'cod_support',
      'version' => '7.x-1.0-beta8+5-dev',
    ),
    'cod_schedule' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/cod_support/cod_schedule/cod_schedule.module',
      'name' => 'cod_schedule',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'COD Schedule',
        'description' => 'Scheduling for Sessions, BoFs, etc.',
        'core' => '7.x',
        'package' => 'COD',
        'project' => 'cod_support',
        'dependencies' => 
        array (
          0 => 'cod_base',
          1 => 'cod_events',
          2 => 'cod_session',
          3 => 'ctools',
          4 => 'entityreference',
          5 => 'field_collection',
          6 => 'field_permissions',
          7 => 'number',
          8 => 'quicktabs',
          9 => 'views',
          10 => 'views_json',
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
          'field_base' => 
          array (
            0 => 'field_event_timeslots',
            1 => 'field_evttime_date',
            2 => 'field_session_timeslot',
            3 => 'field_timeslot_allowed_types',
            4 => 'field_timeslot_room',
            5 => 'field_timeslot_time',
          ),
          'field_instance' => 
          array (
            0 => 'cod_event_room-cod_event_room-og_group_ref',
            1 => 'cod_event_time-cod_event_time-field_evttime_date',
            2 => 'cod_event_time-cod_event_time-og_group_ref',
            3 => 'field_collection_item-field_event_timeslots-field_timeslot_allowed_types',
            4 => 'field_collection_item-field_event_timeslots-field_timeslot_room',
            5 => 'field_collection_item-field_event_timeslots-field_timeslot_time',
            6 => 'node-event-field_event_timeslots',
            7 => 'node-schedule_item-field_session_timeslot',
            8 => 'node-session-field_session_timeslot',
          ),
          'og_features_permission' => 
          array (
            0 => 'node:event:administer cod_event_room',
            1 => 'node:event:administer cod_event_time',
            2 => 'node:event:create cod_event_room',
            3 => 'node:event:create cod_event_time',
            4 => 'node:event:edit any cod_event_room',
            5 => 'node:event:edit any cod_event_time',
            6 => 'node:event:edit own cod_event_room',
            7 => 'node:event:edit own cod_event_time',
            8 => 'node:event:view cod_event_room',
            9 => 'node:event:view cod_event_time',
          ),
          'user_permission' => 
          array (
            0 => 'create field_session_timeslot',
            1 => 'edit field_session_timeslot',
            2 => 'edit own field_session_timeslot',
            3 => 'view field_session_timeslot',
            4 => 'view own field_session_timeslot',
            5 => 'view schedule',
          ),
          'views_view' => 
          array (
            0 => 'cod_schedule',
            1 => 'cod_schedule_content',
            2 => 'cod_schedule_duplicate_timeslots',
            3 => 'cod_schedule_timeslot_widget',
          ),
        ),
        'files' => 
        array (
          0 => 'cod_schedule.entity.inc',
        ),
        'install_option' => 'cod',
        'version' => '7.x-1.0-beta8+5-dev',
        'datestamp' => '1427924214',
        'php' => '5.2.4',
      ),
      'project' => 'cod_support',
      'version' => '7.x-1.0-beta8+5-dev',
    ),
    'cod_schedule_pages' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/cod_support/cod_schedule/modules/cod_schedule_pages/cod_schedule_pages.module',
      'name' => 'cod_schedule_pages',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'COD Schedule Pages',
        'core' => '7.x',
        'package' => 'COD Pages',
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
            0 => 'cod_schedule_admin_page',
          ),
        ),
        'version' => '7.x-1.0-beta8+5-dev',
        'project' => 'cod_support',
        'datestamp' => '1427924214',
        'description' => '',
        'php' => '5.2.4',
      ),
      'project' => 'cod_support',
      'version' => '7.x-1.0-beta8+5-dev',
    ),
    'cod_session' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/cod_support/cod_session/cod_session.module',
      'name' => 'cod_session',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'COD Session',
        'description' => 'Sessions, Session Items, and Voting Functionality',
        'core' => '7.x',
        'package' => 'COD',
        'project' => 'cod_support',
        'dependencies' => 
        array (
          0 => 'auto_nodetitle',
          1 => 'cod_base',
          2 => 'cod_events',
          3 => 'ctools',
          4 => 'date',
          5 => 'date_popup',
          6 => 'entityreference',
          7 => 'features',
          8 => 'field_collection',
          9 => 'field_group',
          10 => 'field_permissions',
          11 => 'field_select_ct',
          12 => 'file',
          13 => 'flag',
          14 => 'image',
          15 => 'list',
          16 => 'menu',
          17 => 'node',
          18 => 'number',
          19 => 'og',
          20 => 'og_ui',
          21 => 'og_vocab',
          22 => 'options',
          23 => 'quicktabs',
          24 => 'quicktabs_tabstyles',
          25 => 'search',
          26 => 'strongarm',
          27 => 'taxonomy',
          28 => 'text',
          29 => 'views',
          30 => 'views_autorefresh',
          31 => 'views_bulk_operations',
          32 => 'views_content',
          33 => 'views_json',
          34 => 'views_send',
          35 => 'views_ui',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'field_group:field_group:1',
            1 => 'strongarm:strongarm:1',
            2 => 'views:views_default:3.0',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'field_base' => 
          array (
            0 => 'field_accepted',
            1 => 'field_event_default_session_view',
            2 => 'field_experience',
            3 => 'field_news_image',
            4 => 'field_slides',
            5 => 'field_speakers',
            6 => 'og_vocabulary',
            7 => 'upload',
          ),
          'field_group' => 
          array (
            0 => 'group_audience|node|session|default',
            1 => 'group_audience|node|session|form',
            2 => 'group_event_sessions|node|event|form',
            3 => 'group_schedule_info|node|schedule_item|default',
            4 => 'group_schedule_info|node|session|default',
            5 => 'group_schedule|node|schedule_item|form',
            6 => 'group_schedule|node|session|form',
          ),
          'field_instance' => 
          array (
            0 => 'node-event-field_event_default_session_view',
            1 => 'node-page-body',
            2 => 'node-page-upload',
            3 => 'node-schedule_item-body',
            4 => 'node-schedule_item-field_accepted',
            5 => 'node-schedule_item-og_group_ref',
            6 => 'node-session-body',
            7 => 'node-session-field_accepted',
            8 => 'node-session-field_experience',
            9 => 'node-session-field_news_image',
            10 => 'node-session-field_slides',
            11 => 'node-session-field_speakers',
            12 => 'node-session-og_group_ref',
            13 => 'node-session-og_vocabulary',
          ),
          'flag' => 
          array (
            0 => 'session_confirm',
            1 => 'session_schedule',
            2 => 'session_vote',
          ),
          'menu_custom' => 
          array (
            0 => 'main-menu',
            1 => 'menu-menu-quick-links',
          ),
          'node' => 
          array (
            0 => 'schedule_item',
            1 => 'session',
          ),
          'og_features_role' => 
          array (
            0 => 'node:event:session organizer',
          ),
          'user_permission' => 
          array (
            0 => 'create schedule_item content',
            1 => 'create session content',
            2 => 'delete any schedule_item content',
            3 => 'delete any session content',
            4 => 'delete own session content',
            5 => 'edit any schedule_item content',
            6 => 'edit any session content',
            7 => 'edit own session content',
            8 => 'view sessions',
            9 => 'view speakers',
          ),
          'user_role' => 
          array (
            0 => 'session organizer',
          ),
          'variable' => 
          array (
            0 => 'comment_anonymous_page',
            1 => 'comment_anonymous_schedule_item',
            2 => 'comment_anonymous_session',
            3 => 'comment_default_mode_page',
            4 => 'comment_default_mode_schedule_item',
            5 => 'comment_default_mode_session',
            6 => 'comment_default_per_page_page',
            7 => 'comment_default_per_page_schedule_item',
            8 => 'comment_default_per_page_session',
            9 => 'comment_form_location_page',
            10 => 'comment_form_location_schedule_item',
            11 => 'comment_form_location_session',
            12 => 'comment_page',
            13 => 'comment_preview_page',
            14 => 'comment_preview_schedule_item',
            15 => 'comment_preview_session',
            16 => 'comment_schedule_item',
            17 => 'comment_session',
            18 => 'comment_subject_field_page',
            19 => 'comment_subject_field_schedule_item',
            20 => 'comment_subject_field_session',
            21 => 'field_bundle_settings_node__schedule_item',
            22 => 'field_bundle_settings_node__session',
            23 => 'menu_options_page',
            24 => 'menu_options_schedule_item',
            25 => 'menu_options_session',
            26 => 'menu_parent_page',
            27 => 'menu_parent_schedule_item',
            28 => 'menu_parent_session',
            29 => 'node_options_page',
            30 => 'node_options_schedule_item',
            31 => 'node_options_session',
            32 => 'node_preview_page',
            33 => 'node_preview_schedule_item',
            34 => 'node_preview_session',
            35 => 'node_submitted_page',
            36 => 'node_submitted_schedule_item',
            37 => 'node_submitted_session',
            38 => 'pathauto_node_schedule_item_pattern',
            39 => 'pathauto_node_session_pattern',
          ),
          'views_view' => 
          array (
            0 => 'cod_session_sessions',
            1 => 'cod_session_sessions_admin',
            2 => 'cod_session_sessions_admin_contact',
            3 => 'cod_session_sessions_speaker_confirmation',
            4 => 'cod_session_speakers',
            5 => 'cod_session_tracks',
            6 => 'cod_session_user_presentations',
          ),
        ),
        'version' => '7.x-1.0-beta8+5-dev',
        'datestamp' => '1427924214',
        'php' => '5.2.4',
      ),
      'project' => 'cod_support',
      'version' => '7.x-1.0-beta8+5-dev',
    ),
    'cod_session_management_pages' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/cod_support/cod_session/modules/cod_session_management_pages/cod_session_management_pages.module',
      'name' => 'cod_session_management_pages',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'COD Session Management Pages',
        'description' => 'Allow sessions to be managed',
        'core' => '7.x',
        'package' => 'COD Pages',
        'dependencies' => 
        array (
          0 => 'cod_events',
          1 => 'cod_session',
          2 => 'ctools',
          3 => 'page_manager',
          4 => 'panels',
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
            0 => 'cod_session_management_pages',
          ),
        ),
        'version' => '7.x-1.0-beta8+5-dev',
        'project' => 'cod_support',
        'datestamp' => '1427924214',
        'php' => '5.2.4',
      ),
      'project' => 'cod_support',
      'version' => '7.x-1.0-beta8+5-dev',
    ),
    'cod_session_pages' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/cod_support/cod_session/modules/cod_session_pages/cod_session_pages.module',
      'name' => 'cod_session_pages',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'COD Session Pages',
        'description' => 'Manage Moderated Sessions, Session Items, and Voting',
        'core' => '7.x',
        'package' => 'COD Pages',
        'install_option' => 'cod',
        'dependencies' => 
        array (
          0 => 'cod_events_pages',
          1 => 'cod_session',
          2 => 'cod_session_management_pages',
          3 => 'ctools',
          4 => 'page_manager',
          5 => 'panelizer',
          6 => 'panels',
          7 => 'panels_ipe',
          8 => 'strongarm',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'page_manager:pages_default:1',
            1 => 'panelizer:panelizer:1',
            2 => 'strongarm:strongarm:1',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'page_manager_pages' => 
          array (
            0 => 'sessions',
          ),
          'panelizer_defaults' => 
          array (
            0 => 'node:schedule_item:default:default',
            1 => 'node:session:default:default',
          ),
          'variable' => 
          array (
            0 => 'panelizer_defaults_node_schedule_item',
            1 => 'panelizer_defaults_node_session',
          ),
        ),
        'version' => '7.x-1.0-beta8+5-dev',
        'project' => 'cod_support',
        'datestamp' => '1427924214',
        'php' => '5.2.4',
      ),
      'project' => 'cod_support',
      'version' => '7.x-1.0-beta8+5-dev',
    ),
    'cod_session_ranking' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/cod_support/cod_session/modules/cod_session_ranking/cod_session_ranking.module',
      'name' => 'cod_session_ranking',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'COD Session Ranking',
        'description' => 'Provide administrative (private) rankings for sessions',
        'core' => '7.x',
        'package' => 'COD',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'field_permissions',
          2 => 'cod_session',
          3 => 'fivestar',
        ),
        'features' => 
        array (
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'field_base' => 
          array (
            0 => 'field_session_ranking',
          ),
          'field_instance' => 
          array (
            0 => 'node-session-field_session_ranking',
          ),
          'user_permission' => 
          array (
            0 => 'create field_session_ranking',
            1 => 'edit field_session_ranking',
            2 => 'edit own field_session_ranking',
            3 => 'rate content',
            4 => 'view field_session_ranking',
            5 => 'view own field_session_ranking',
          ),
        ),
        'install_option' => 'cod',
        'version' => '7.x-1.0-beta8+5-dev',
        'project' => 'cod_support',
        'datestamp' => '1427924214',
        'php' => '5.2.4',
      ),
      'project' => 'cod_support',
      'version' => '7.x-1.0-beta8+5-dev',
    ),
    'cod_speaker_pages' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/cod_support/cod_session/modules/cod_speaker_pages/cod_speaker_pages.module',
      'name' => 'cod_speaker_pages',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'COD Speaker Pages',
        'core' => '7.x',
        'package' => 'COD Pages',
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
            0 => 'speakers',
          ),
        ),
        'version' => '7.x-1.0-beta8+5-dev',
        'project' => 'cod_support',
        'datestamp' => '1427924214',
        'description' => '',
        'php' => '5.2.4',
      ),
      'project' => 'cod_support',
      'version' => '7.x-1.0-beta8+5-dev',
    ),
    'cod_sponsors' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/cod_support/cod_sponsors/cod_sponsors.module',
      'name' => 'cod_sponsors',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'COD Sponsors',
        'description' => 'Sponsorship features',
        'core' => '7.x',
        'package' => 'COD',
        'project' => 'cod_support',
        'dependencies' => 
        array (
          0 => 'cod_base',
          1 => 'cod_events',
          2 => 'cod_session',
          3 => 'ctools',
          4 => 'entityreference',
          5 => 'features',
          6 => 'image',
          7 => 'link',
          8 => 'list',
          9 => 'node',
          10 => 'number',
          11 => 'og',
          12 => 'options',
          13 => 'strongarm',
          14 => 'taxonomy',
          15 => 'text',
          16 => 'views',
          17 => 'views_content',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'context:context:3',
            1 => 'strongarm:strongarm:1',
            2 => 'views:views_default:3.0',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'field_base' => 
          array (
            0 => 'field_sponsor_body',
            1 => 'field_sponsor_logo',
            2 => 'field_sponsor_related_attendees',
            3 => 'field_sponsor_sponsorship_level',
            4 => 'field_sponsor_url',
          ),
          'field_instance' => 
          array (
            0 => 'node-sponsor-field_sponsor_body',
            1 => 'node-sponsor-field_sponsor_logo',
            2 => 'node-sponsor-field_sponsor_related_attendees',
            3 => 'node-sponsor-field_sponsor_sponsorship_level',
            4 => 'node-sponsor-field_sponsor_url',
            5 => 'node-sponsor-og_group_ref',
          ),
          'image' => 
          array (
            0 => 'cod_sponsors',
          ),
          'node' => 
          array (
            0 => 'sponsor',
          ),
          'og_features_role' => 
          array (
            0 => 'node:event:sponsor organizer',
          ),
          'taxonomy' => 
          array (
            0 => 'sponsorship_level',
          ),
          'user_permission' => 
          array (
            0 => 'create sponsor content',
            1 => 'delete any sponsor content',
            2 => 'edit any sponsor content',
            3 => 'view sponsors',
          ),
          'user_role' => 
          array (
            0 => 'sponsor organizer',
          ),
          'variable' => 
          array (
            0 => 'comment_anonymous_sponsor',
            1 => 'comment_default_mode_sponsor',
            2 => 'comment_default_per_page_sponsor',
            3 => 'comment_form_location_sponsor',
            4 => 'comment_preview_sponsor',
            5 => 'comment_sponsor',
            6 => 'comment_subject_field_sponsor',
            7 => 'field_bundle_settings_node__sponsor',
            8 => 'menu_options_sponsor',
            9 => 'menu_options_sponsorship_level',
            10 => 'menu_parent_sponsor',
            11 => 'menu_parent_sponsorship_level',
            12 => 'node_options_sponsor',
            13 => 'node_options_sponsorship_level',
            14 => 'node_preview_sponsor',
            15 => 'node_submitted_sponsor',
            16 => 'node_submitted_sponsorship_level',
            17 => 'pathauto_node_sponsor_pattern',
          ),
          'views_view' => 
          array (
            0 => 'cod_sponsors',
            1 => 'cod_sponsors_admin',
            2 => 'cod_sponsors_levels',
          ),
        ),
        'version' => '7.x-1.0-beta8+5-dev',
        'datestamp' => '1427924214',
        'php' => '5.2.4',
      ),
      'project' => 'cod_support',
      'version' => '7.x-1.0-beta8+5-dev',
    ),
    'cod_sponsors_commerce' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/cod_support/cod_sponsors/modules/cod_sponsors_commerce/cod_sponsors_commerce.module',
      'name' => 'cod_sponsors_commerce',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'COD Sponsors Commerce',
        'description' => 'Sell and manage sponsorship order information',
        'core' => '7.x',
        'package' => 'COD',
        'install_option' => 'cod',
        'dependencies' => 
        array (
          0 => 'cod_events',
          1 => 'cod_sponsors',
          2 => 'commerce_features',
          3 => 'commerce_product_ui',
          4 => 'entityreference',
          5 => 'features',
          6 => 'og',
          7 => 'options',
          8 => 'taxonomy',
        ),
        'features' => 
        array (
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'field_instance' => 
          array (
            0 => 'commerce_product-sponsor-field_sponsor_sponsorship_level',
            1 => 'commerce_product-sponsor-og_group_ref',
          ),
        ),
        'files' => 
        array (
          0 => 'views/cod_sponsors_commerce.views.inc',
          1 => 'views/cod_sponsors_commerce_views_handler_field_order_link.inc',
        ),
        'version' => '7.x-1.0-beta8+5-dev',
        'project' => 'cod_support',
        'datestamp' => '1427924214',
        'php' => '5.2.4',
      ),
      'project' => 'cod_support',
      'version' => '7.x-1.0-beta8+5-dev',
    ),
    'cod_sponsors_exhibits' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/cod_support/cod_sponsors/modules/cod_sponsors_exhibits/cod_sponsors_exhibits.module',
      'name' => 'cod_sponsors_exhibits',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'COD Sponsors Exhibits',
        'description' => 'Provide Exhibitor information for Sponsors',
        'core' => '7.x',
        'package' => 'COD',
        'project' => 'cod_support',
        'install_option' => 'cod',
        'dependencies' => 
        array (
          0 => 'cod_sponsors',
          1 => 'features',
          2 => 'field_group',
          3 => 'list',
          4 => 'options',
          5 => 'text',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'field_group:field_group:1',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'field_base' => 
          array (
            0 => 'field_sponsor_booth_number',
            1 => 'field_sponsor_booth_request',
          ),
          'field_group' => 
          array (
            0 => 'group_sponsor_exhibit|node|sponsor|form',
          ),
          'field_instance' => 
          array (
            0 => 'node-sponsor-field_sponsor_booth_number',
            1 => 'node-sponsor-field_sponsor_booth_request',
          ),
        ),
        'features_exclude' => 
        array (
          'dependencies' => 
          array (
            'ctools' => 'ctools',
          ),
        ),
        'files' => 
        array (
          0 => 'views/cod_sponsors_exhibits.views.inc',
        ),
        'version' => '7.x-1.0-beta8+5-dev',
        'datestamp' => '1427924214',
        'php' => '5.2.4',
      ),
      'project' => 'cod_support',
      'version' => '7.x-1.0-beta8+5-dev',
    ),
    'cod_sponsors_pages' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/cod_support/cod_sponsors/modules/cod_sponsors_pages/cod_sponsors_pages.module',
      'name' => 'cod_sponsors_pages',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'COD Sponsors Pages',
        'description' => 'Manage event sponsors',
        'core' => '7.x',
        'package' => 'COD Pages',
        'install_option' => 'cod',
        'dependencies' => 
        array (
          0 => 'cod_sponsors',
          1 => 'ctools',
          2 => 'page_manager',
          3 => 'panels',
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
            0 => 'cod_sponsors_management_pages',
          ),
        ),
        'version' => '7.x-1.0-beta8+5-dev',
        'project' => 'cod_support',
        'datestamp' => '1427924214',
        'php' => '5.2.4',
      ),
      'project' => 'cod_support',
      'version' => '7.x-1.0-beta8+5-dev',
    ),
    'cod_wysiwyg' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/cod_support/cod_wysiwyg/cod_wysiwyg.module',
      'name' => 'cod_wysiwyg',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'COD WYSIWYG',
        'description' => 'Provides a rich text editor for content creation.',
        'core' => '7.x',
        'package' => 'COD',
        'project' => 'cod_support',
        'dependencies' => 
        array (
          0 => 'ckeditor',
          1 => 'features',
          2 => 'filter',
          3 => 'strongarm',
        ),
        'datestamp' => '1427924214',
        'features' => 
        array (
          'ckeditor_profile' => 
          array (
            0 => 'Advanced',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'filter' => 
          array (
            0 => 'filtered_html',
            1 => 'full_html',
          ),
          'user_permission' => 
          array (
            0 => 'use text format filtered_html',
          ),
        ),
        'version' => '7.x-1.0-beta8+5-dev',
        'php' => '5.2.4',
      ),
      'project' => 'cod_support',
      'version' => '7.x-1.0-beta8+5-dev',
    ),
    'commerce' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce/commerce.module',
      'name' => 'commerce',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Commerce',
        'description' => 'Defines features and functions common to the Commerce modules. Must be enabled to uninstall other Commerce modules.',
        'package' => 'Commerce',
        'dependencies' => 
        array (
          0 => 'system',
          1 => 'entity',
          2 => 'rules',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/commerce_base.test',
          1 => 'includes/commerce.controller.inc',
        ),
        'version' => '7.x-1.11',
        'project' => 'commerce',
        'datestamp' => '1421426596',
        'php' => '5.2.4',
      ),
      'project' => 'commerce',
      'version' => '7.x-1.11',
    ),
    'commerce_ui' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce/commerce_ui.module',
      'name' => 'commerce_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Commerce UI',
        'description' => 'Defines menu items common to the various Drupal Commerce UI modules.',
        'package' => 'Commerce',
        'dependencies' => 
        array (
          0 => 'commerce',
        ),
        'core' => '7.x',
        'version' => '7.x-1.11',
        'project' => 'commerce',
        'datestamp' => '1421426596',
        'php' => '5.2.4',
      ),
      'project' => 'commerce',
      'version' => '7.x-1.11',
    ),
    'commerce_cart' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce/modules/cart/commerce_cart.module',
      'name' => 'commerce_cart',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Cart',
        'description' => 'Implements the shopping cart system and add to cart features.',
        'package' => 'Commerce',
        'dependencies' => 
        array (
          0 => 'commerce',
          1 => 'commerce_checkout',
          2 => 'commerce_line_item',
          3 => 'commerce_order',
          4 => 'commerce_product',
          5 => 'commerce_product_pricing',
          6 => 'commerce_product_reference',
          7 => 'entity',
          8 => 'rules',
          9 => 'views',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/views/handlers/commerce_cart_handler_field_add_to_cart_form.inc',
          1 => 'includes/views/handlers/commerce_cart_plugin_argument_default_current_cart_order_id.inc',
          2 => 'includes/views/handlers/commerce_cart_handler_area_empty_text.inc',
          3 => 'tests/commerce_cart.test',
        ),
        'version' => '7.x-1.11',
        'project' => 'commerce',
        'datestamp' => '1421426596',
        'php' => '5.2.4',
      ),
      'project' => 'commerce',
      'version' => '7.x-1.11',
    ),
    'commerce_checkout' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce/modules/checkout/commerce_checkout.module',
      'name' => 'commerce_checkout',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Checkout',
        'description' => 'Enable checkout as a multi-step form with customizable checkout pages.',
        'package' => 'Commerce',
        'dependencies' => 
        array (
          0 => 'commerce',
          1 => 'commerce_ui',
          2 => 'commerce_order',
          3 => 'entity',
          4 => 'rules',
        ),
        'core' => '7.x',
        'configure' => 'admin/commerce/config/checkout',
        'files' => 
        array (
          0 => 'tests/commerce_checkout.test',
        ),
        'version' => '7.x-1.11',
        'project' => 'commerce',
        'datestamp' => '1421426596',
        'php' => '5.2.4',
      ),
      'project' => 'commerce',
      'version' => '7.x-1.11',
    ),
    'commerce_customer' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce/modules/customer/commerce_customer.module',
      'name' => 'commerce_customer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Customer',
        'description' => 'Defines the Customer entity with Address Field integration.',
        'package' => 'Commerce',
        'dependencies' => 
        array (
          0 => 'addressfield',
          1 => 'commerce',
          2 => 'entity',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/commerce_customer_profile.controller.inc',
          1 => 'includes/views/handlers/commerce_customer_handler_area_empty_text.inc',
          2 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile.inc',
          3 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_link.inc',
          4 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_link_delete.inc',
          5 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_link_edit.inc',
          6 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_type.inc',
          7 => 'includes/views/handlers/commerce_customer_handler_filter_customer_profile_type.inc',
        ),
        'version' => '7.x-1.11',
        'project' => 'commerce',
        'datestamp' => '1421426596',
        'php' => '5.2.4',
      ),
      'project' => 'commerce',
      'version' => '7.x-1.11',
    ),
    'commerce_customer_ui' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce/modules/customer/commerce_customer_ui.module',
      'name' => 'commerce_customer_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Customer UI',
        'description' => 'Exposes a default UI for Customers through profile edit forms and default Views.',
        'package' => 'Commerce',
        'dependencies' => 
        array (
          0 => 'field_ui',
          1 => 'commerce',
          2 => 'commerce_ui',
          3 => 'commerce_customer',
          4 => 'views',
        ),
        'core' => '7.x',
        'configure' => 'admin/commerce/customer-profiles/types',
        'files' => 
        array (
          0 => 'tests/commerce_customer_ui.test',
        ),
        'version' => '7.x-1.11',
        'project' => 'commerce',
        'datestamp' => '1421426596',
        'php' => '5.2.4',
      ),
      'project' => 'commerce',
      'version' => '7.x-1.11',
    ),
    'commerce_line_item' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce/modules/line_item/commerce_line_item.module',
      'name' => 'commerce_line_item',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Line Item',
        'description' => 'Defines the Line Item entity and associated features.',
        'package' => 'Commerce',
        'dependencies' => 
        array (
          0 => 'commerce',
          1 => 'commerce_price',
          2 => 'entity',
          3 => 'rules',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/commerce_line_item.controller.inc',
          1 => 'includes/views/handlers/commerce_line_item_handler_area_line_item_summary.inc',
          2 => 'includes/views/handlers/commerce_line_item_handler_argument_line_item_line_item_id.inc',
          3 => 'includes/views/handlers/commerce_line_item_handler_field_line_item_title.inc',
          4 => 'includes/views/handlers/commerce_line_item_handler_field_line_item_type.inc',
          5 => 'includes/views/handlers/commerce_line_item_handler_filter_line_item_type.inc',
          6 => 'includes/views/handlers/commerce_line_item_handler_field_edit_quantity.inc',
          7 => 'includes/views/handlers/commerce_line_item_handler_field_edit_delete.inc',
        ),
        'version' => '7.x-1.11',
        'project' => 'commerce',
        'datestamp' => '1421426596',
        'php' => '5.2.4',
      ),
      'project' => 'commerce',
      'version' => '7.x-1.11',
    ),
    'commerce_line_item_ui' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce/modules/line_item/commerce_line_item_ui.module',
      'name' => 'commerce_line_item_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Line Item UI',
        'description' => 'Exposes a default UI for Line Items through line item type forms and default Views.',
        'package' => 'Commerce',
        'dependencies' => 
        array (
          0 => 'field_ui',
          1 => 'commerce',
          2 => 'commerce_ui',
          3 => 'commerce_line_item',
          4 => 'views',
        ),
        'core' => '7.x',
        'configure' => 'admin/commerce/config/line-items',
        'version' => '7.x-1.11',
        'project' => 'commerce',
        'datestamp' => '1421426596',
        'php' => '5.2.4',
      ),
      'project' => 'commerce',
      'version' => '7.x-1.11',
    ),
    'commerce_order' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce/modules/order/commerce_order.module',
      'name' => 'commerce_order',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Order',
        'description' => 'Defines the Order entity and associated features.',
        'package' => 'Commerce',
        'dependencies' => 
        array (
          0 => 'commerce',
          1 => 'commerce_customer',
          2 => 'commerce_line_item',
          3 => 'commerce_price',
          4 => 'entity',
          5 => 'rules',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/commerce_order.controller.inc',
          1 => 'includes/views/handlers/commerce_order_handler_area_empty_text.inc',
          2 => 'includes/views/handlers/commerce_order_handler_area_order_total.inc',
          3 => 'includes/views/handlers/commerce_order_handler_argument_order_order_id.inc',
          4 => 'includes/views/handlers/commerce_order_handler_field_order.inc',
          5 => 'includes/views/handlers/commerce_order_handler_field_order_status.inc',
          6 => 'includes/views/handlers/commerce_order_handler_field_order_state.inc',
          7 => 'includes/views/handlers/commerce_order_handler_field_order_type.inc',
          8 => 'includes/views/handlers/commerce_order_handler_field_order_link.inc',
          9 => 'includes/views/handlers/commerce_order_handler_field_order_link_delete.inc',
          10 => 'includes/views/handlers/commerce_order_handler_field_order_link_edit.inc',
          11 => 'includes/views/handlers/commerce_order_handler_field_order_mail.inc',
          12 => 'includes/views/handlers/commerce_order_handler_field_order_operations.inc',
          13 => 'includes/views/handlers/commerce_order_handler_filter_order_status.inc',
          14 => 'includes/views/handlers/commerce_order_handler_filter_order_state.inc',
          15 => 'includes/views/handlers/commerce_order_handler_filter_order_type.inc',
          16 => 'includes/views/handlers/commerce_order_plugin_argument_validate_user.inc',
          17 => 'tests/commerce_order.rules.test',
          18 => 'tests/commerce_order.test',
        ),
        'version' => '7.x-1.11',
        'project' => 'commerce',
        'datestamp' => '1421426596',
        'php' => '5.2.4',
      ),
      'project' => 'commerce',
      'version' => '7.x-1.11',
    ),
    'commerce_order_ui' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce/modules/order/commerce_order_ui.module',
      'name' => 'commerce_order_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Order UI',
        'description' => 'Exposes a default UI for Orders through order edit forms and default Views.',
        'package' => 'Commerce',
        'dependencies' => 
        array (
          0 => 'field_ui',
          1 => 'commerce',
          2 => 'commerce_ui',
          3 => 'commerce_line_item',
          4 => 'commerce_order',
          5 => 'views',
        ),
        'core' => '7.x',
        'configure' => 'admin/commerce/config/order',
        'files' => 
        array (
          0 => 'includes/views/handlers/commerce_order_ui_handler_area_view_order_form.inc',
          1 => 'tests/commerce_order_ui.test',
        ),
        'version' => '7.x-1.11',
        'project' => 'commerce',
        'datestamp' => '1421426596',
        'php' => '5.2.4',
      ),
      'project' => 'commerce',
      'version' => '7.x-1.11',
    ),
    'commerce_payment' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce/modules/payment/commerce_payment.module',
      'name' => 'commerce_payment',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Payment',
        'description' => 'Implement core payment features for Drupal commerce.',
        'package' => 'Commerce',
        'dependencies' => 
        array (
          0 => 'commerce',
          1 => 'commerce_order',
          2 => 'entity',
          3 => 'rules',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'commerce_payment.rules.inc',
          1 => 'includes/commerce_payment_transaction.controller.inc',
          2 => 'includes/views/handlers/commerce_payment_handler_area_totals.inc',
          3 => 'includes/views/handlers/commerce_payment_handler_field_amount.inc',
          4 => 'includes/views/handlers/commerce_payment_handler_field_currency_code.inc',
          5 => 'includes/views/handlers/commerce_payment_handler_field_message.inc',
          6 => 'includes/views/handlers/commerce_payment_handler_field_payment_method.inc',
          7 => 'includes/views/handlers/commerce_payment_handler_field_payment_transaction_link.inc',
          8 => 'includes/views/handlers/commerce_payment_handler_field_payment_transaction_link_delete.inc',
          9 => 'includes/views/handlers/commerce_payment_handler_field_payment_transaction_operations.inc',
          10 => 'includes/views/handlers/commerce_payment_handler_field_status.inc',
          11 => 'includes/views/handlers/commerce_payment_handler_filter_payment_method.inc',
          12 => 'includes/views/handlers/commerce_payment_handler_filter_payment_transaction_status.inc',
          13 => 'includes/views/handlers/commerce_payment_handler_filter_currency_code.inc',
          14 => 'includes/views/handlers/commerce_payment_handler_field_balance.inc',
          15 => 'tests/commerce_payment.rules.test',
        ),
        'version' => '7.x-1.11',
        'project' => 'commerce',
        'datestamp' => '1421426596',
        'php' => '5.2.4',
      ),
      'project' => 'commerce',
      'version' => '7.x-1.11',
    ),
    'commerce_payment_ui' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce/modules/payment/commerce_payment_ui.module',
      'name' => 'commerce_payment_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Payment UI',
        'description' => 'Exposes a default UI for payment method configuration and payment transaction administration.',
        'package' => 'Commerce',
        'dependencies' => 
        array (
          0 => 'rules_admin',
          1 => 'commerce',
          2 => 'commerce_order',
          3 => 'commerce_order_ui',
          4 => 'commerce_payment',
        ),
        'core' => '7.x',
        'configure' => 'admin/commerce/config/payment-methods',
        'files' => 
        array (
          0 => 'tests/commerce_payment_ui.test',
        ),
        'version' => '7.x-1.11',
        'project' => 'commerce',
        'datestamp' => '1421426596',
        'php' => '5.2.4',
      ),
      'project' => 'commerce',
      'version' => '7.x-1.11',
    ),
    'commerce_payment_example' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce/modules/payment/modules/commerce_payment_example.module',
      'name' => 'commerce_payment_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Payment Method Example',
        'description' => 'Provides an example payment method for testing and development.',
        'package' => 'Commerce',
        'dependencies' => 
        array (
          0 => 'commerce',
          1 => 'commerce_payment',
        ),
        'core' => '7.x',
        'version' => '7.x-1.11',
        'project' => 'commerce',
        'datestamp' => '1421426596',
        'php' => '5.2.4',
      ),
      'project' => 'commerce',
      'version' => '7.x-1.11',
    ),
    'commerce_price' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce/modules/price/commerce_price.module',
      'name' => 'commerce_price',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Price',
        'description' => 'Defines the price field and a price alteration system.',
        'package' => 'Commerce',
        'dependencies' => 
        array (
          0 => 'commerce',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'commerce_price.rules.inc',
          1 => 'includes/views/handlers/commerce_price_handler_field_commerce_price.inc',
          2 => 'includes/views/handlers/commerce_price_handler_filter_commerce_price_amount.inc',
        ),
        'version' => '7.x-1.11',
        'project' => 'commerce',
        'datestamp' => '1421426596',
        'php' => '5.2.4',
      ),
      'project' => 'commerce',
      'version' => '7.x-1.11',
    ),
    'commerce_product' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce/modules/product/commerce_product.module',
      'name' => 'commerce_product',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Product',
        'description' => 'Defines the Product entity and associated features.',
        'package' => 'Commerce',
        'dependencies' => 
        array (
          0 => 'commerce',
          1 => 'commerce_price',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/commerce_product.controller.inc',
          1 => 'includes/views/handlers/commerce_product_handler_area_empty_text.inc',
          2 => 'includes/views/handlers/commerce_product_handler_argument_product_id.inc',
          3 => 'includes/views/handlers/commerce_product_handler_field_product.inc',
          4 => 'includes/views/handlers/commerce_product_handler_field_product_type.inc',
          5 => 'includes/views/handlers/commerce_product_handler_field_product_link.inc',
          6 => 'includes/views/handlers/commerce_product_handler_field_product_link_delete.inc',
          7 => 'includes/views/handlers/commerce_product_handler_field_product_link_edit.inc',
          8 => 'includes/views/handlers/commerce_product_handler_field_product_operations.inc',
          9 => 'includes/views/handlers/commerce_product_handler_filter_product_type.inc',
          10 => 'includes/commerce_product.translation_handler.inc',
          11 => 'tests/commerce_product.test',
        ),
        'version' => '7.x-1.11',
        'project' => 'commerce',
        'datestamp' => '1421426596',
        'php' => '5.2.4',
      ),
      'project' => 'commerce',
      'version' => '7.x-1.11',
    ),
    'commerce_product_ui' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce/modules/product/commerce_product_ui.module',
      'name' => 'commerce_product_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Product UI',
        'description' => 'Exposes a default UI for Products through product edit forms and default Views.',
        'package' => 'Commerce',
        'dependencies' => 
        array (
          0 => 'field_ui',
          1 => 'commerce',
          2 => 'commerce_ui',
          3 => 'commerce_product',
          4 => 'views',
        ),
        'core' => '7.x',
        'configure' => 'admin/commerce/products/types',
        'files' => 
        array (
          0 => 'tests/commerce_product_ui.test',
        ),
        'version' => '7.x-1.11',
        'project' => 'commerce',
        'datestamp' => '1421426596',
        'php' => '5.2.4',
      ),
      'project' => 'commerce',
      'version' => '7.x-1.11',
    ),
    'commerce_product_pricing' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce/modules/product_pricing/commerce_product_pricing.module',
      'name' => 'commerce_product_pricing',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Product Pricing',
        'description' => 'Enables Rules based product sell price calculation for dynamic product pricing.',
        'package' => 'Commerce',
        'dependencies' => 
        array (
          0 => 'commerce',
          1 => 'commerce_price',
          2 => 'commerce_product_reference',
          3 => 'entity',
          4 => 'rules',
        ),
        'core' => '7.x',
        'version' => '7.x-1.11',
        'project' => 'commerce',
        'datestamp' => '1421426596',
        'php' => '5.2.4',
      ),
      'project' => 'commerce',
      'version' => '7.x-1.11',
    ),
    'commerce_product_pricing_ui' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce/modules/product_pricing/commerce_product_pricing_ui.module',
      'name' => 'commerce_product_pricing_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Product Pricing UI',
        'description' => 'Exposes a UI for managing product pricing rules and pre-calculation settings.',
        'package' => 'Commerce',
        'dependencies' => 
        array (
          0 => 'rules_admin',
          1 => 'commerce',
          2 => 'commerce_ui',
          3 => 'commerce_price',
          4 => 'commerce_product_pricing',
          5 => 'commerce_product_reference',
        ),
        'core' => '7.x',
        'configure' => 'admin/commerce/config/product-pricing',
        'version' => '7.x-1.11',
        'project' => 'commerce',
        'datestamp' => '1421426596',
        'php' => '5.2.4',
      ),
      'project' => 'commerce',
      'version' => '7.x-1.11',
    ),
    'commerce_product_reference' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce/modules/product_reference/commerce_product_reference.module',
      'name' => 'commerce_product_reference',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Product Reference',
        'description' => 'Defines a product reference field and default display formatters.',
        'package' => 'Commerce',
        'dependencies' => 
        array (
          0 => 'commerce',
          1 => 'commerce_line_item',
          2 => 'commerce_price',
          3 => 'commerce_product',
          4 => 'entity',
          5 => 'options',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/views/handlers/commerce_product_reference_handler_filter_node_is_product_display.inc',
          1 => 'includes/views/handlers/commerce_product_reference_handler_filter_node_type.inc',
          2 => 'includes/views/handlers/commerce_product_reference_handler_filter_product_line_item_type.inc',
          3 => 'tests/commerce_product_reference.test',
        ),
        'version' => '7.x-1.11',
        'project' => 'commerce',
        'datestamp' => '1421426596',
        'php' => '5.2.4',
      ),
      'project' => 'commerce',
      'version' => '7.x-1.11',
    ),
    'commerce_tax' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce/modules/tax/commerce_tax.module',
      'name' => 'commerce_tax',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tax',
        'description' => 'Define tax rates and configure tax rules for applicability and display.',
        'package' => 'Commerce',
        'dependencies' => 
        array (
          0 => 'commerce',
          1 => 'commerce_line_item',
          2 => 'commerce_price',
          3 => 'commerce_product_pricing',
          4 => 'entity',
          5 => 'rules',
        ),
        'core' => '7.x',
        'version' => '7.x-1.11',
        'project' => 'commerce',
        'datestamp' => '1421426596',
        'php' => '5.2.4',
      ),
      'project' => 'commerce',
      'version' => '7.x-1.11',
    ),
    'commerce_tax_ui' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce/modules/tax/commerce_tax_ui.module',
      'name' => 'commerce_tax_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tax UI',
        'description' => 'Provides a UI for creating simple tax types and rates.',
        'package' => 'Commerce',
        'dependencies' => 
        array (
          0 => 'commerce',
          1 => 'commerce_ui',
          2 => 'commerce_tax',
        ),
        'core' => '7.x',
        'configure' => 'admin/commerce/config/taxes',
        'files' => 
        array (
          0 => 'tests/commerce_tax_ui.test',
        ),
        'version' => '7.x-1.11',
        'project' => 'commerce',
        'datestamp' => '1421426596',
        'php' => '5.2.4',
      ),
      'project' => 'commerce',
      'version' => '7.x-1.11',
    ),
    'commerce_coupon' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce_coupon/commerce_coupon.module',
      'name' => 'commerce_coupon',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Commerce Coupon',
        'description' => 'Coupon functionality for Drupal Commerce',
        'package' => 'Commerce (contrib)',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'commerce_discount',
          1 => 'commerce_cart',
        ),
        'files' => 
        array (
          0 => 'includes/commerce_coupon.controller.inc',
          1 => 'includes/views/handlers/commerce_coupon_handler_field_discount_value_display.inc',
          2 => 'includes/views/handlers/commerce_coupon_handler_field_coupon_order_remove.inc',
          3 => 'includes/views/handlers/commerce_coupon_handler_field_coupon_delete.inc',
          4 => 'includes/views/handlers/commerce_coupon_handler_field_coupon_edit.inc',
          5 => 'includes/views/handlers/commerce_coupon_handler_field_coupon_link.inc',
          6 => 'includes/views/handlers/commerce_coupon_handler_argument_coupon_id.inc',
          7 => 'includes/views/handlers/commerce_coupon_handler_argument_coupon_code.inc',
          8 => 'commerce_coupon.info.inc',
        ),
        'version' => '7.x-2.0-beta4+12-dev',
        'project' => 'commerce_coupon',
        'datestamp' => '1423077510',
        'php' => '5.2.4',
      ),
      'project' => 'commerce_coupon',
      'version' => '7.x-2.0-beta4+12-dev',
    ),
    'commerce_coupon_date' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce_coupon/modules/date/commerce_coupon_date.module',
      'name' => 'commerce_coupon_date',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Commerce Coupon Date',
        'description' => 'Set a valid date range for coupons',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'commerce_coupon',
          1 => 'date_popup',
        ),
        'version' => '7.x-2.0-beta4+12-dev',
        'project' => 'commerce_coupon',
        'datestamp' => '1423077510',
        'php' => '5.2.4',
      ),
      'project' => 'commerce_coupon',
      'version' => '7.x-2.0-beta4+12-dev',
    ),
    'commerce_coupon_usage' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce_coupon/modules/usage/commerce_coupon_usage.module',
      'name' => 'commerce_coupon_usage',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Commerce Coupon Usage',
        'description' => 'Enables coupon usage limits',
        'project' => 'commerce_coupon',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'commerce_coupon',
          1 => 'inline_conditions',
        ),
        'files' => 
        array (
          0 => 'includes/views/handlers/commerce_coupon_usage_views_handler_area_usage_summary.inc',
          1 => 'includes/views/handlers/commerce_coupon_usage_views_handler_field_usage.inc',
          2 => 'includes/views/handlers/commerce_coupon_usage_views_handler_field_remove.inc',
          3 => 'includes/views/commerce_coupon_usage.views.inc',
          4 => 'includes/commerce_coupon_usage.controller.inc',
        ),
        'version' => '7.x-2.0-beta4+12-dev',
        'datestamp' => '1423077510',
        'php' => '5.2.4',
      ),
      'project' => 'commerce_coupon',
      'version' => '7.x-2.0-beta4+12-dev',
    ),
    'commerce_coupon_user' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce_coupon/modules/user/commerce_coupon_user.module',
      'name' => 'commerce_coupon_user',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Commerce Coupon User',
        'description' => 'Associate coupons with specific users',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'commerce_coupon',
        ),
        'version' => '7.x-2.0-beta4+12-dev',
        'project' => 'commerce_coupon',
        'datestamp' => '1423077510',
        'php' => '5.2.4',
      ),
      'project' => 'commerce_coupon',
      'version' => '7.x-2.0-beta4+12-dev',
    ),
    'commerce_coupon_batch' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce_coupon_batch/commerce_coupon_batch.module',
      'name' => 'commerce_coupon_batch',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Coupon Batch',
        'description' => 'Enables the mass generation of coupons.',
        'package' => 'Commerce Coupon',
        'dependencies' => 
        array (
          0 => 'commerce_coupon',
          1 => 'views_bulk_operations',
        ),
        'core' => '7.x',
        'version' => '7.x-2.x-dev',
        'project' => 'commerce_coupon_batch',
        'datestamp' => '1395700323',
        'php' => '5.2.4',
      ),
      'project' => 'commerce_coupon_batch',
      'version' => '7.x-2.x-dev',
    ),
    'commerce_discount' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce_discount/commerce_discount.module',
      'name' => 'commerce_discount',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Commerce Discount',
        'description' => 'Provides common functionality and a UI for managing discounts.',
        'core' => '7.x',
        'package' => 'Commerce (contrib)',
        'dependencies' => 
        array (
          0 => 'number',
          1 => 'commerce',
          2 => 'commerce_price',
          3 => 'commerce_line_item',
          4 => 'commerce_product_reference',
          5 => 'entity',
          6 => 'entityreference',
          7 => 'inline_entity_form (>=1.5)',
          8 => 'views',
          9 => 'inline_conditions',
        ),
        'files' => 
        array (
          0 => 'commerce_discount.info.inc',
          1 => 'includes/commerce_discount.admin.inc',
          2 => 'includes/commerce_discount.class.inc',
          3 => 'includes/commerce_discount_offer.class.inc',
          4 => 'includes/commerce_discount_offer.inline_entity_form.inc',
          5 => 'includes/commerce_discount.controller.inc',
          6 => 'includes/views/commerce_discount.views.inc',
          7 => 'includes/views/handlers/commerce_discount_handler_field_operations_dropbutton.inc',
          8 => 'commerce_discount.test',
        ),
        'version' => '7.x-1.0-alpha4+7-dev',
        'project' => 'commerce_discount',
        'datestamp' => '1419293097',
        'php' => '5.2.4',
      ),
      'project' => 'commerce_discount',
      'version' => '7.x-1.0-alpha4+7-dev',
    ),
    'commerce_discount_date' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce_discount/modules/commerce_discount_date/commerce_discount_date.module',
      'name' => 'commerce_discount_date',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Commerce Discount Date',
        'description' => 'Provides date fields for the Commerce discount entity.',
        'core' => '7.x',
        'package' => 'Commerce (contrib)',
        'dependencies' => 
        array (
          0 => 'commerce_discount',
          1 => 'date',
          2 => 'date_popup',
        ),
        'files' => 
        array (
          0 => 'commerce_discount_date.test',
        ),
        'version' => '7.x-1.0-alpha4+7-dev',
        'project' => 'commerce_discount',
        'datestamp' => '1419293097',
        'php' => '5.2.4',
      ),
      'project' => 'commerce_discount',
      'version' => '7.x-1.0-alpha4+7-dev',
    ),
    'commerce_discount_usage' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce_discount/modules/commerce_discount_usage/commerce_discount_usage.module',
      'name' => 'commerce_discount_usage',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Commerce Discount Usage',
        'description' => 'Provide usage tracking and limits for Commerce Discounts',
        'package' => 'Commerce (contrib)',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'commerce_discount',
        ),
        'files' => 
        array (
          0 => 'includes/views/handlers/commerce_discount_usage_handler_field_commerce_discount_analytics.inc',
        ),
        'version' => '7.x-1.0-alpha4+7-dev',
        'project' => 'commerce_discount',
        'datestamp' => '1419293097',
        'php' => '5.2.4',
      ),
      'project' => 'commerce_discount',
      'version' => '7.x-1.0-alpha4+7-dev',
    ),
    'commerce_features' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce_features/commerce_features.module',
      'name' => 'commerce_features',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Commerce Features',
        'description' => 'Features integration for Drupal Commerce module',
        'package' => 'Features',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'commerce',
        ),
        'version' => '7.x-1.0',
        'project' => 'commerce_features',
        'datestamp' => '1385479047',
        'php' => '5.2.4',
      ),
      'project' => 'commerce_features',
      'version' => '7.x-1.0',
    ),
    'commerce_stock' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce_stock/commerce_stock.module',
      'name' => 'commerce_stock',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Commerce Stock API',
        'description' => 'Provides a stock management framework based on rules to manage stock levels of commerce products.',
        'package' => 'Commerce (stock)',
        'dependencies' => 
        array (
          0 => 'number',
          1 => 'commerce_product',
          2 => 'commerce_order',
          3 => 'rules',
        ),
        'core' => '7.x',
        'configure' => 'admin/commerce/config/stock',
        'version' => '7.x-2.1',
        'project' => 'commerce_stock',
        'datestamp' => '1418323685',
        'php' => '5.2.4',
      ),
      'project' => 'commerce_stock',
      'version' => '7.x-2.1',
    ),
    'commerce_stock_ui' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce_stock/commerce_stock_ui.module',
      'name' => 'commerce_stock_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Commerce stock UI',
        'description' => 'Provides an interface for viewing and managing stock rules.',
        'package' => 'Commerce (stock)',
        'dependencies' => 
        array (
          0 => 'rules',
          1 => 'commerce',
          2 => 'commerce_stock',
        ),
        'core' => '7.x',
        'configure' => 'admin/commerce/config/stock',
        'version' => '7.x-2.1',
        'project' => 'commerce_stock',
        'datestamp' => '1418323685',
        'php' => '5.2.4',
      ),
      'project' => 'commerce_stock',
      'version' => '7.x-2.1',
    ),
    'commerce_sdf' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce_stock/modules/commerce_sdf/commerce_sdf.module',
      'name' => 'commerce_sdf',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Commerce Stock Decimal formatter',
        'description' => 'Provide a Decimal formater for converting stock levels into text messages.',
        'package' => 'Commerce (stock)',
        'dependencies' => 
        array (
          0 => 'number',
        ),
        'core' => '7.x',
        'version' => '7.x-2.1',
        'project' => 'commerce_stock',
        'datestamp' => '1418323685',
        'php' => '5.2.4',
      ),
      'project' => 'commerce_stock',
      'version' => '7.x-2.1',
    ),
    'commerce_ss' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce_stock/modules/commerce_ss/commerce_ss.module',
      'name' => 'commerce_ss',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Commerce Simple Stock',
        'description' => 'Manage stock levels of Commerce products using a decimal level field and rules',
        'package' => 'Commerce (stock)',
        'dependencies' => 
        array (
          0 => 'number',
          1 => 'commerce_product',
          2 => 'commerce_order',
          3 => 'commerce_stock',
          4 => 'commerce_checkout',
          5 => 'rules',
        ),
        'core' => '7.x',
        'configure' => 'admin/commerce/config/stock/ss',
        'version' => '7.x-2.1',
        'project' => 'commerce_stock',
        'datestamp' => '1418323685',
        'php' => '5.2.4',
      ),
      'project' => 'commerce_stock',
      'version' => '7.x-2.1',
    ),
    'commerce_ssr' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/commerce_stock/modules/commerce_ssr/commerce_ssr.module',
      'name' => 'commerce_ssr',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Commerce Simple Stock Rules',
        'description' => 'Validation rules for simple stock.',
        'package' => 'Commerce (stock)',
        'dependencies' => 
        array (
          0 => 'number',
          1 => 'commerce_product',
          2 => 'commerce_order',
          3 => 'commerce_stock',
          4 => 'commerce_ss',
          5 => 'rules',
        ),
        'core' => '7.x',
        'version' => '7.x-2.1',
        'project' => 'commerce_stock',
        'datestamp' => '1418323685',
        'php' => '5.2.4',
      ),
      'project' => 'commerce_stock',
      'version' => '7.x-2.1',
    ),
    'conditional_fields' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/conditional_fields/conditional_fields.module',
      'name' => 'conditional_fields',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Conditional Fields',
        'description' => 'Define dependencies between fields based on their states and values.',
        'core' => '7.x',
        'package' => 'Fields',
        'dependencies' => 
        array (
          0 => 'system (>=7.14)',
          1 => 'field',
        ),
        'configure' => 'admin/structure/dependencies',
        'version' => '7.x-3.0-alpha1+15-dev',
        'project' => 'conditional_fields',
        'datestamp' => '1424367474',
        'php' => '5.2.4',
      ),
      'project' => 'conditional_fields',
      'version' => '7.x-3.0-alpha1+15-dev',
    ),
    'connector' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/connector/connector.module',
      'name' => 'connector',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Connector',
        'description' => 'Provides base functionality for one-click login with eg. Facebook Connect and Twitter Connect',
        'core' => '7.x',
        'package' => 'Connector',
        'version' => '7.x-1.0-beta2',
        'project' => 'connector',
        'datestamp' => '1361736072',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'connector',
      'version' => '7.x-1.0-beta2',
    ),
    'connector_action_default_register_form' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/connector/modules/connector_action_default_register_form/connector_action_default_register_form.module',
      'name' => 'connector_action_default_register_form',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Connector Action Default Register Form',
        'description' => 'Adepts the default action for new accounts.',
        'core' => '7.x',
        'package' => 'Connector Action',
        'dependencies' => 
        array (
          0 => 'connector',
        ),
        'version' => '7.x-1.0-beta2',
        'project' => 'connector',
        'datestamp' => '1361736072',
        'php' => '5.2.4',
      ),
      'project' => 'connector',
      'version' => '7.x-1.0-beta2',
    ),
    'content_access' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/content_access/content_access.module',
      'name' => 'content_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Access',
        'description' => 'Provides flexible content access control.',
        'core' => '7.x',
        'package' => 'Access control',
        'files' => 
        array (
          0 => 'content_access.rules.inc',
          1 => 'tests/content_access.test',
          2 => 'tests/content_access_acl.test',
        ),
        'version' => '7.x-1.2-beta2',
        'project' => 'content_access',
        'datestamp' => '1366014321',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'content_access',
      'version' => '7.x-1.2-beta2',
    ),
    'content_access_rules' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/content_access/content_access_rules/content_access_rules.module',
      'name' => 'content_access_rules',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Access Rules Integrations',
        'description' => 'Integrates Rules with Content access. Allows to act on access events, conditions, and actions.',
        'package' => 'Access control',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'content_access',
          1 => 'rules',
        ),
        'files' => 
        array (
          0 => 'content_access.rules.inc',
        ),
        'version' => '7.x-1.2-beta2',
        'project' => 'content_access',
        'datestamp' => '1366014321',
        'php' => '5.2.4',
      ),
      'project' => 'content_access',
      'version' => '7.x-1.2-beta2',
    ),
    'bulk_export' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/ctools/bulk_export/bulk_export.module',
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
        'version' => '7.x-1.7',
        'project' => 'ctools',
        'datestamp' => '1426696183',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.7',
    ),
    'ctools' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/ctools/ctools.module',
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
        'version' => '7.x-1.7',
        'files' => 
        array (
          0 => 'includes/context.inc',
          1 => 'includes/css-cache.inc',
          2 => 'includes/math-expr.inc',
          3 => 'includes/stylizer.inc',
          4 => 'tests/css_cache.test',
        ),
        'project' => 'ctools',
        'datestamp' => '1426696183',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.7',
    ),
    'ctools_access_ruleset' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
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
        'version' => '7.x-1.7',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'project' => 'ctools',
        'datestamp' => '1426696183',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.7',
    ),
    'ctools_ajax_sample' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
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
        'version' => '7.x-1.7',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'core' => '7.x',
        'project' => 'ctools',
        'datestamp' => '1426696183',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.7',
    ),
    'ctools_custom_content' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/ctools/ctools_custom_content/ctools_custom_content.module',
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
        'version' => '7.x-1.7',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'project' => 'ctools',
        'datestamp' => '1426696183',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.7',
    ),
    'ctools_plugin_example' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/ctools/ctools_plugin_example/ctools_plugin_example.module',
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
        'version' => '7.x-1.7',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'panels',
          2 => 'page_manager',
          3 => 'advanced_help',
        ),
        'core' => '7.x',
        'project' => 'ctools',
        'datestamp' => '1426696183',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.7',
    ),
    'page_manager' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/ctools/page_manager/page_manager.module',
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
        'version' => '7.x-1.7',
        'project' => 'ctools',
        'datestamp' => '1426696183',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.7',
    ),
    'stylizer' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/ctools/stylizer/stylizer.module',
      'name' => 'stylizer',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stylizer',
        'description' => 'Create custom styles for applications such as Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.7',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'color',
        ),
        'project' => 'ctools',
        'datestamp' => '1426696183',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.7',
    ),
    'term_depth' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/ctools/term_depth/term_depth.module',
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
        'version' => '7.x-1.7',
        'project' => 'ctools',
        'datestamp' => '1426696183',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.7',
    ),
    'views_content' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/ctools/views_content/views_content.module',
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
        'version' => '7.x-1.7',
        'files' => 
        array (
          0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
          1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
          2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
        ),
        'project' => 'ctools',
        'datestamp' => '1426696183',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.7',
    ),
    'date' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/date/date.module',
      'name' => 'date',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
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
        ),
        'version' => '7.x-2.8',
        'project' => 'date',
        'datestamp' => '1406653438',
      ),
      'project' => 'date',
      'version' => '7.x-2.8',
    ),
    'date_all_day' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/date/date_all_day/date_all_day.module',
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
        'version' => '7.x-2.8',
        'project' => 'date',
        'datestamp' => '1406653438',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.8',
    ),
    'date_api' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/date/date_api/date_api.module',
      'name' => 'date_api',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
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
        'version' => '7.x-2.8',
        'project' => 'date',
        'datestamp' => '1406653438',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'date',
      'version' => '7.x-2.8',
    ),
    'date_context' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/date/date_context/date_context.module',
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
        'version' => '7.x-2.8',
        'project' => 'date',
        'datestamp' => '1406653438',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.8',
    ),
    'date_migrate_example' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/date/date_migrate/date_migrate_example/date_migrate_example.module',
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
        'version' => '7.x-2.8',
        'datestamp' => '1406653438',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.8',
    ),
    'date_popup' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/date/date_popup/date_popup.module',
      'name' => 'date_popup',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
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
        'version' => '7.x-2.8',
        'project' => 'date',
        'datestamp' => '1406653438',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.8',
    ),
    'date_repeat' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/date/date_repeat/date_repeat.module',
      'name' => 'date_repeat',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
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
        'version' => '7.x-2.8',
        'project' => 'date',
        'datestamp' => '1406653438',
      ),
      'project' => 'date',
      'version' => '7.x-2.8',
    ),
    'date_repeat_field' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/date/date_repeat_field/date_repeat_field.module',
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
        'version' => '7.x-2.8',
        'project' => 'date',
        'datestamp' => '1406653438',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.8',
    ),
    'date_tools' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/date/date_tools/date_tools.module',
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
        'version' => '7.x-2.8',
        'project' => 'date',
        'datestamp' => '1406653438',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.8',
    ),
    'date_views' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/date/date_views/date_views.module',
      'name' => 'date_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
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
        'version' => '7.x-2.8',
        'project' => 'date',
        'datestamp' => '1406653438',
      ),
      'project' => 'date',
      'version' => '7.x-2.8',
    ),
    'date_ical' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/date_ical/date_ical.module',
      'name' => 'date_ical',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
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
        'version' => '7.x-3.3',
        'project' => 'date_ical',
        'datestamp' => '1412727230',
      ),
      'project' => 'date_ical',
      'version' => '7.x-3.3',
    ),
    'devel' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/devel/devel.module',
      'name' => 'devel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
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
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/devel/devel_generate/devel_generate.module',
      'name' => 'devel_generate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
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
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/devel/devel_node_access.module',
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
    'diff' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/diff/diff.module',
      'name' => 'diff',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Diff',
        'description' => 'Show differences between content revisions.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'DiffEngine.php',
        ),
        'version' => '7.x-3.2',
        'project' => 'diff',
        'datestamp' => '1352784357',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'diff',
      'version' => '7.x-3.2',
    ),
    'ds' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/ds/ds.module',
      'name' => 'ds',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7202',
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
        'version' => '7.x-2.7',
        'project' => 'ds',
        'datestamp' => '1414483431',
        'php' => '5.2.4',
      ),
      'project' => 'ds',
      'version' => '7.x-2.7',
    ),
    'ds_devel' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/ds/modules/ds_devel/ds_devel.module',
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
        'version' => '7.x-2.7',
        'project' => 'ds',
        'datestamp' => '1414483431',
        'php' => '5.2.4',
      ),
      'project' => 'ds',
      'version' => '7.x-2.7',
    ),
    'ds_extras' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/ds/modules/ds_extras/ds_extras.module',
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
        'version' => '7.x-2.7',
        'project' => 'ds',
        'datestamp' => '1414483431',
        'php' => '5.2.4',
      ),
      'project' => 'ds',
      'version' => '7.x-2.7',
    ),
    'ds_format' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/ds/modules/ds_format/ds_format.module',
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
        'version' => '7.x-2.7',
        'project' => 'ds',
        'datestamp' => '1414483431',
        'php' => '5.2.4',
      ),
      'project' => 'ds',
      'version' => '7.x-2.7',
    ),
    'ds_forms' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/ds/modules/ds_forms/ds_forms.module',
      'name' => 'ds_forms',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '20',
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
        'version' => '7.x-2.7',
        'project' => 'ds',
        'datestamp' => '1414483431',
        'php' => '5.2.4',
      ),
      'project' => 'ds',
      'version' => '7.x-2.7',
    ),
    'ds_search' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/ds/modules/ds_search/ds_search.module',
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
        'version' => '7.x-2.7',
        'project' => 'ds',
        'datestamp' => '1414483431',
        'php' => '5.2.4',
      ),
      'project' => 'ds',
      'version' => '7.x-2.7',
    ),
    'ds_ui' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/ds/modules/ds_ui/ds_ui.module',
      'name' => 'ds_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
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
        'version' => '7.x-2.7',
        'project' => 'ds',
        'datestamp' => '1414483431',
        'php' => '5.2.4',
      ),
      'project' => 'ds',
      'version' => '7.x-2.7',
    ),
    'efq_extra_field' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/efq_extra_field/efq_extra_field.module',
      'name' => 'efq_extra_field',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity Field Query Extra Fields',
        'description' => 'Allow retrieving extra fields from EFQ',
        'core' => '7.x',
        'version' => '7.x-1.0-alpha1',
        'project' => 'efq_extra_field',
        'datestamp' => '1415196781',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'efq_extra_field',
      'version' => '7.x-1.0-alpha1',
    ),
    'entity' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/entity/entity.module',
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
        'version' => '7.x-1.6+6-dev',
        'project' => 'entity',
        'datestamp' => '1425056902',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'entity',
      'version' => '7.x-1.6+6-dev',
    ),
    'entity_token' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/entity/entity_token.module',
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
        'version' => '7.x-1.6+6-dev',
        'project' => 'entity',
        'datestamp' => '1425056902',
        'php' => '5.2.4',
      ),
      'project' => 'entity',
      'version' => '7.x-1.6+6-dev',
    ),
    'entitycache' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/entitycache/entitycache.module',
      'name' => 'entitycache',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity cache',
        'description' => 'Provides caching for core entities including nodes and taxonomy terms.',
        'core' => '7.x',
        'package' => 'Performance and scalability',
        'files' => 
        array (
          0 => 'entitycache.module',
          1 => 'entitycache.comment.inc',
          2 => 'entitycache.taxonomy.inc',
          3 => 'entitycache.test',
        ),
        'version' => '7.x-1.2+0-dev',
        'project' => 'entitycache',
        'datestamp' => '1343161414',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'entitycache',
      'version' => '7.x-1.2+0-dev',
    ),
    'entityreference' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/entityreference/entityreference.module',
      'name' => 'entityreference',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity Reference',
        'description' => 'Provides a field that can reference other entities.',
        'core' => '7.x',
        'package' => 'Fields',
        'dependencies' => 
        array (
          0 => 'entity',
          1 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'entityreference.migrate.inc',
          1 => 'plugins/selection/abstract.inc',
          2 => 'plugins/selection/views.inc',
          3 => 'plugins/behavior/abstract.inc',
          4 => 'views/entityreference_plugin_display.inc',
          5 => 'views/entityreference_plugin_style.inc',
          6 => 'views/entityreference_plugin_row_fields.inc',
          7 => 'tests/entityreference.handlers.test',
          8 => 'tests/entityreference.taxonomy.test',
          9 => 'tests/entityreference.admin.test',
          10 => 'tests/entityreference.feeds.test',
        ),
        'version' => '7.x-1.1',
        'project' => 'entityreference',
        'datestamp' => '1384973110',
        'php' => '5.2.4',
      ),
      'project' => 'entityreference',
      'version' => '7.x-1.1',
    ),
    'entityreference_behavior_example' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/entityreference/examples/entityreference_behavior_example/entityreference_behavior_example.module',
      'name' => 'entityreference_behavior_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity Reference Behavior Example',
        'description' => 'Provides some example code for implementing Entity Reference behaviors.',
        'core' => '7.x',
        'package' => 'Fields',
        'dependencies' => 
        array (
          0 => 'entityreference',
        ),
        'version' => '7.x-1.1',
        'project' => 'entityreference',
        'datestamp' => '1384973110',
        'php' => '5.2.4',
      ),
      'project' => 'entityreference',
      'version' => '7.x-1.1',
    ),
    'entityreference_prepopulate' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/entityreference_prepopulate/entityreference_prepopulate.module',
      'name' => 'entityreference_prepopulate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity reference prepopulate',
        'description' => 'Prepopulate entity reference values from URL.',
        'core' => '7.x',
        'package' => 'Fields',
        'dependencies' => 
        array (
          0 => 'entityreference',
        ),
        'files' => 
        array (
          0 => 'entityreference_prepopulate.test',
        ),
        'version' => '7.x-1.5+5-dev',
        'project' => 'entityreference_prepopulate',
        'datestamp' => '1395825637',
        'php' => '5.2.4',
      ),
      'project' => 'entityreference_prepopulate',
      'version' => '7.x-1.5+5-dev',
    ),
    'features' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/features/features.module',
      'name' => 'features',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
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
        'configure' => 'admin/structure/features/settings',
        'version' => '7.x-2.4',
        'project' => 'features',
        'datestamp' => '1425501344',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'features',
      'version' => '7.x-2.4',
    ),
    'field_collection' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/field_collection/field_collection.module',
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
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/field_group/field_group.module',
      'name' => 'field_group',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
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
        'version' => '7.x-1.4',
        'project' => 'field_group',
        'datestamp' => '1401918529',
        'php' => '5.2.4',
      ),
      'project' => 'field_group',
      'version' => '7.x-1.4',
    ),
    'field_permissions' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/field_permissions/field_permissions.module',
      'name' => 'field_permissions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field Permissions',
        'description' => 'Set field-level permissions to create, update or view fields.',
        'package' => 'Fields',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'field_permissions.module',
          1 => 'field_permissions.admin.inc',
          2 => 'field_permissions.test',
        ),
        'configure' => 'admin/reports/fields/permissions',
        'version' => '7.x-1.0-beta2',
        'project' => 'field_permissions',
        'datestamp' => '1327510549',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'field_permissions',
      'version' => '7.x-1.0-beta2',
    ),
    'field_select_ct' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/field_select_ct/field_select_ct.module',
      'name' => 'field_select_ct',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Select CT Field',
        'description' => 'Field to select CTs dynamically.',
        'package' => 'Fields',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'options',
        ),
        'version' => '7.x-1.0',
        'project' => 'field_select_ct',
        'datestamp' => '1414455829',
        'php' => '5.2.4',
      ),
      'project' => 'field_select_ct',
      'version' => '7.x-1.0',
    ),
    'fivestar' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/fivestar/fivestar.module',
      'name' => 'fivestar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fivestar',
        'description' => 'Enables fivestar ratings on content, users, etc.',
        'package' => 'Voting',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'votingapi',
        ),
        'configure' => 'admin/config/content/fivestar',
        'files' => 
        array (
          0 => 'test/fivestar.base.test',
          1 => 'test/fivestar.field.test',
        ),
        'version' => '7.x-2.1',
        'project' => 'fivestar',
        'datestamp' => '1395087839',
        'php' => '5.2.4',
      ),
      'project' => 'fivestar',
      'version' => '7.x-2.1',
    ),
    'flag' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/flag/flag.module',
      'name' => 'flag',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Flag',
        'description' => 'Create customized flags that users can set on entities.',
        'core' => '7.x',
        'package' => 'Flags',
        'configure' => 'admin/structure/flags',
        'test_dependencies' => 
        array (
          0 => 'token',
          1 => 'rules',
        ),
        'files' => 
        array (
          0 => 'includes/flag/flag_flag.inc',
          1 => 'includes/flag/flag_entity.inc',
          2 => 'includes/flag/flag_node.inc',
          3 => 'includes/flag/flag_comment.inc',
          4 => 'includes/flag/flag_user.inc',
          5 => 'includes/flag.cookie_storage.inc',
          6 => 'includes/flag.entity.inc',
          7 => 'flag.rules.inc',
          8 => 'includes/views/flag_handler_argument_entity_id.inc',
          9 => 'includes/views/flag_handler_field_ops.inc',
          10 => 'includes/views/flag_handler_field_flagged.inc',
          11 => 'includes/views/flag_handler_filter_flagged.inc',
          12 => 'includes/views/flag_handler_sort_flagged.inc',
          13 => 'includes/views/flag_handler_relationships.inc',
          14 => 'includes/views/flag_plugin_argument_validate_flaggability.inc',
          15 => 'tests/flag.test',
        ),
        'version' => '7.x-3.6',
        'project' => 'flag',
        'datestamp' => '1425327793',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'flag',
      'version' => '7.x-3.6',
    ),
    'flag_actions' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/flag/flag_actions.module',
      'name' => 'flag_actions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Flag actions',
        'description' => 'Execute actions on Flag events.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'flag',
        ),
        'package' => 'Flags',
        'configure' => 'admin/structure/flags/actions',
        'files' => 
        array (
          0 => 'flag.install',
          1 => 'flag_actions.module',
        ),
        'version' => '7.x-3.6',
        'project' => 'flag',
        'datestamp' => '1425327793',
        'php' => '5.2.4',
      ),
      'project' => 'flag',
      'version' => '7.x-3.6',
    ),
    'flag_bookmark' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/flag/flag_bookmark/flag_bookmark.module',
      'name' => 'flag_bookmark',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Flag Bookmark',
        'description' => 'Provides an example bookmark flag and supporting views.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'flag',
        ),
        'package' => 'Flags',
        'version' => '7.x-3.6',
        'project' => 'flag',
        'datestamp' => '1425327793',
        'php' => '5.2.4',
      ),
      'project' => 'flag',
      'version' => '7.x-3.6',
    ),
    'fontyourface' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/fontyourface/fontyourface.module',
      'name' => 'fontyourface',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7204',
      'weight' => '0',
      'info' => 
      array (
        'name' => '@font-your-face',
        'description' => 'Manages web fonts.',
        'package' => '@font-your-face',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'fontyourface.test',
        ),
        'version' => '7.x-2.8',
        'project' => 'fontyourface',
        'datestamp' => '1367195415',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'fontyourface',
      'version' => '7.x-2.8',
    ),
    'edge_fonts' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/fontyourface/modules/edge_fonts/edge_fonts.module',
      'name' => 'edge_fonts',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Edge Fonts',
        'description' => '@font-your-face provider for Edge Fonts.',
        'dependencies' => 
        array (
          0 => 'fontyourface',
        ),
        'package' => '@font-your-face',
        'core' => '7.x',
        'version' => '7.x-2.8',
        'project' => 'fontyourface',
        'datestamp' => '1367195415',
        'php' => '5.2.4',
      ),
      'project' => 'fontyourface',
      'version' => '7.x-2.8',
    ),
    'fontdeck' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/fontyourface/modules/fontdeck/fontdeck.module',
      'name' => 'fontdeck',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fontdeck',
        'description' => '@font-your-face provider of fonts from Fontdeck.com.',
        'dependencies' => 
        array (
          0 => 'fontyourface',
        ),
        'package' => '@font-your-face',
        'core' => '7.x',
        'php' => '5.2.0',
        'files' => 
        array (
          0 => 'fontdeck.install',
          1 => 'fontdeck.module',
        ),
        'version' => '7.x-2.8',
        'project' => 'fontyourface',
        'datestamp' => '1367195415',
      ),
      'project' => 'fontyourface',
      'version' => '7.x-2.8',
    ),
    'fontsquirrel' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/fontyourface/modules/fontsquirrel/fontsquirrel.module',
      'name' => 'fontsquirrel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Font Squirrel API',
        'description' => '@font-your-face provider with Font Squirrel fonts.',
        'dependencies' => 
        array (
          0 => 'fontyourface',
        ),
        'package' => '@font-your-face',
        'core' => '7.x',
        'php' => '5.2.0',
        'version' => '7.x-2.8',
        'project' => 'fontyourface',
        'datestamp' => '1367195415',
      ),
      'project' => 'fontyourface',
      'version' => '7.x-2.8',
    ),
    'fonts_com' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/fontyourface/modules/fonts_com/fonts_com.module',
      'name' => 'fonts_com',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fonts.com',
        'description' => '@font-your-face provider of fonts from Fonts.com.',
        'dependencies' => 
        array (
          0 => 'fontyourface',
        ),
        'package' => '@font-your-face',
        'core' => '7.x',
        'php' => '5.2.0',
        'files' => 
        array (
          0 => 'api.inc',
        ),
        'version' => '7.x-2.8',
        'project' => 'fontyourface',
        'datestamp' => '1367195415',
      ),
      'project' => 'fontyourface',
      'version' => '7.x-2.8',
    ),
    'fontyourface_ui' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/fontyourface/modules/fontyourface_ui/fontyourface_ui.module',
      'name' => 'fontyourface_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => '@font-your-face UI',
        'description' => 'Administrative interface for managing fonts.',
        'package' => '@font-your-face',
        'dependencies' => 
        array (
          0 => 'fontyourface',
          1 => 'views',
        ),
        'configure' => 'admin/config/user-interface/fontyourface',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'views/fontyourface.views_default.inc',
          1 => 'views/views_handler_field_fontyourface_font.inc',
          2 => 'views/views_handler_field_fontyourface_foundry.inc',
          3 => 'views/views_handler_field_fontyourface_license.inc',
          4 => 'views/views_handler_field_fontyourface_provider.inc',
          5 => 'views/views_handler_field_fontyourface_tag_font_tid.inc',
          6 => 'views/views_handler_filter_tag_font_tid.inc',
          7 => 'views/views_handler_relationship_fontyourface_tag.inc',
          8 => 'views/views_handler_field_fontyourface_preview.inc',
          9 => 'views/views_handler_field_fontyourface_enable_disable.inc',
          10 => 'views/views_handler_field_fontyourface_enabled_yes_no.inc',
          11 => 'views/views_handler_filter_fontyourface_provider.inc',
          12 => 'views/views_handler_filter_fontyourface_foundry.inc',
        ),
        'version' => '7.x-2.8',
        'project' => 'fontyourface',
        'datestamp' => '1367195415',
        'php' => '5.2.4',
      ),
      'project' => 'fontyourface',
      'version' => '7.x-2.8',
    ),
    'fontyourface_wysiwyg' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/fontyourface/modules/fontyourface_wysiwyg/fontyourface_wysiwyg.module',
      'name' => 'fontyourface_wysiwyg',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'WYSIWYG for @font-your-face',
        'description' => 'Adds list of enabled fonts to WYSIWYG.',
        'dependencies' => 
        array (
          0 => 'fontyourface',
          1 => 'wysiwyg',
        ),
        'package' => '@font-your-face',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'fontyourface_wysiwyg.module',
        ),
        'version' => '7.x-2.8',
        'project' => 'fontyourface',
        'datestamp' => '1367195415',
        'php' => '5.2.4',
      ),
      'project' => 'fontyourface',
      'version' => '7.x-2.8',
    ),
    'font_reference' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/fontyourface/modules/font_reference/font_reference.module',
      'name' => 'font_reference',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Font Reference',
        'description' => 'Defines a field type for referencing a font from a node.',
        'package' => 'Fields',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'fontyourface',
          1 => 'field',
          2 => 'options',
        ),
        'version' => '7.x-2.8',
        'project' => 'fontyourface',
        'datestamp' => '1367195415',
        'php' => '5.2.4',
      ),
      'project' => 'fontyourface',
      'version' => '7.x-2.8',
    ),
    'google_fonts_api' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/fontyourface/modules/google_fonts_api/google_fonts_api.module',
      'name' => 'google_fonts_api',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Google Fonts API',
        'description' => '@font-your-face provider with Google fonts.',
        'dependencies' => 
        array (
          0 => 'fontyourface',
        ),
        'package' => '@font-your-face',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'views/google_fonts_api.views_default.inc',
        ),
        'version' => '7.x-2.8',
        'project' => 'fontyourface',
        'datestamp' => '1367195415',
        'php' => '5.2.4',
      ),
      'project' => 'fontyourface',
      'version' => '7.x-2.8',
    ),
    'local_fonts' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/fontyourface/modules/local_fonts/local_fonts.module',
      'name' => 'local_fonts',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7200',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Local Fonts',
        'description' => '@font-your-face provider with fonts installed locally on the Drupal server.',
        'dependencies' => 
        array (
          0 => 'fontyourface',
        ),
        'package' => '@font-your-face',
        'core' => '7.x',
        'version' => '7.x-2.8',
        'project' => 'fontyourface',
        'datestamp' => '1367195415',
        'php' => '5.2.4',
      ),
      'project' => 'fontyourface',
      'version' => '7.x-2.8',
    ),
    'typekit_api' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/fontyourface/modules/typekit_api/typekit_api.module',
      'name' => 'typekit_api',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Typekit API',
        'description' => '@font-your-face provider with Typekit.com fonts.',
        'dependencies' => 
        array (
          0 => 'fontyourface',
        ),
        'package' => '@font-your-face',
        'core' => '7.x',
        'php' => '5.2.0',
        'version' => '7.x-2.8',
        'project' => 'fontyourface',
        'datestamp' => '1367195415',
      ),
      'project' => 'fontyourface',
      'version' => '7.x-2.8',
    ),
    'i18n' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/i18n/i18n.module',
      'name' => 'i18n',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Internationalization',
        'description' => 'Extends Drupal support for multilingual features.',
        'dependencies' => 
        array (
          0 => 'locale',
          1 => 'variable',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_object.inc',
          1 => 'i18n.test',
        ),
        'configure' => 'admin/config/regional/i18n',
        'version' => '7.x-1.12',
        'project' => 'i18n',
        'datestamp' => '1422286982',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.12',
    ),
    'i18n_block' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/i18n/i18n_block/i18n_block.module',
      'name' => 'i18n_block',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block languages',
        'description' => 'Enables language selector for blocks and optional block translation.',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_block.inc',
          1 => 'i18n_block.test',
        ),
        'version' => '7.x-1.12',
        'project' => 'i18n',
        'datestamp' => '1422286982',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.12',
    ),
    'i18n_contact' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/i18n/i18n_contact/i18n_contact.module',
      'name' => 'i18n_contact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contact translation',
        'description' => 'Makes contact categories and replies available for translation.',
        'dependencies' => 
        array (
          0 => 'contact',
          1 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'version' => '7.x-1.12',
        'project' => 'i18n',
        'datestamp' => '1422286982',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.12',
    ),
    'i18n_field' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/i18n/i18n_field/i18n_field.module',
      'name' => 'i18n_field',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field translation',
        'description' => 'Translate field properties',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_field.inc',
          1 => 'i18n_field.test',
        ),
        'version' => '7.x-1.12',
        'project' => 'i18n',
        'datestamp' => '1422286982',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.12',
    ),
    'i18n_forum' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/i18n/i18n_forum/i18n_forum.module',
      'name' => 'i18n_forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Multilingual forum',
        'description' => 'Enables multilingual forum, translates names and containers.',
        'dependencies' => 
        array (
          0 => 'forum',
          1 => 'i18n_taxonomy',
          2 => 'i18n_node',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_forum.test',
        ),
        'version' => '7.x-1.12',
        'project' => 'i18n',
        'datestamp' => '1422286982',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.12',
    ),
    'i18n_menu' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/i18n/i18n_menu/i18n_menu.module',
      'name' => 'i18n_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu translation',
        'description' => 'Supports translatable custom menu items.',
        'dependencies' => 
        array (
          0 => 'i18n',
          1 => 'menu',
          2 => 'i18n_string',
          3 => 'i18n_translation',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_menu.inc',
          1 => 'i18n_menu.test',
        ),
        'version' => '7.x-1.12',
        'project' => 'i18n',
        'datestamp' => '1422286982',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.12',
    ),
    'i18n_node' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/i18n/i18n_node/i18n_node.module',
      'name' => 'i18n_node',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Multilingual content',
        'description' => 'Extended node options for multilingual content',
        'dependencies' => 
        array (
          0 => 'translation',
          1 => 'i18n',
          2 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'configure' => 'admin/config/regional/i18n/node',
        'files' => 
        array (
          0 => 'i18n_node.test',
          1 => 'i18n_node.variable.inc',
        ),
        'version' => '7.x-1.12',
        'project' => 'i18n',
        'datestamp' => '1422286982',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.12',
    ),
    'i18n_path' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/i18n/i18n_path/i18n_path.module',
      'name' => 'i18n_path',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path translation',
        'description' => 'Define translations for generic paths',
        'dependencies' => 
        array (
          0 => 'i18n_translation',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_path.inc',
          1 => 'i18n_path.test',
        ),
        'version' => '7.x-1.12',
        'project' => 'i18n',
        'datestamp' => '1422286982',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.12',
    ),
    'i18n_redirect' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/i18n/i18n_redirect/i18n_redirect.module',
      'name' => 'i18n_redirect',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Translation redirect',
        'description' => 'Redirect to translated page when available. SEO for multilingual sites.',
        'dependencies' => 
        array (
          0 => 'i18n',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'version' => '7.x-1.12',
        'project' => 'i18n',
        'datestamp' => '1422286982',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.12',
    ),
    'i18n_select' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/i18n/i18n_select/i18n_select.module',
      'name' => 'i18n_select',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Multilingual select',
        'description' => 'API module for multilingual content selection',
        'dependencies' => 
        array (
          0 => 'i18n',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'configure' => 'admin/config/regional/i18n/select',
        'files' => 
        array (
          0 => 'i18n_select.test',
        ),
        'version' => '7.x-1.12',
        'project' => 'i18n',
        'datestamp' => '1422286982',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.12',
    ),
    'i18n_string' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/i18n/i18n_string/i18n_string.module',
      'name' => 'i18n_string',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'String translation',
        'description' => 'Provides support for translation of user defined strings.',
        'dependencies' => 
        array (
          0 => 'locale',
          1 => 'i18n',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_string.admin.inc',
          1 => 'i18n_string.inc',
          2 => 'i18n_string.test',
        ),
        'configure' => 'admin/config/regional/i18n/strings',
        'version' => '7.x-1.12',
        'project' => 'i18n',
        'datestamp' => '1422286982',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.12',
    ),
    'i18n_sync' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/i18n/i18n_sync/i18n_sync.module',
      'name' => 'i18n_sync',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Synchronize translations',
        'description' => 'Synchronizes taxonomy and fields accross translations of the same content.',
        'dependencies' => 
        array (
          0 => 'i18n',
          1 => 'translation',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_sync.module',
          1 => 'i18n_sync.install',
          2 => 'i18n_sync.module.inc',
          3 => 'i18n_sync.node.inc',
          4 => 'i18n_sync.test',
        ),
        'version' => '7.x-1.12',
        'project' => 'i18n',
        'datestamp' => '1422286982',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.12',
    ),
    'i18n_taxonomy' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/i18n/i18n_taxonomy/i18n_taxonomy.module',
      'name' => 'i18n_taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy translation',
        'description' => 'Enables multilingual taxonomy.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'i18n_string',
          2 => 'i18n_translation',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_taxonomy.inc',
          1 => 'i18n_taxonomy.pages.inc',
          2 => 'i18n_taxonomy.admin.inc',
          3 => 'i18n_taxonomy.test',
        ),
        'version' => '7.x-1.12',
        'project' => 'i18n',
        'datestamp' => '1422286982',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.12',
    ),
    'i18n_translation' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/i18n/i18n_translation/i18n_translation.module',
      'name' => 'i18n_translation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Translation sets',
        'description' => 'Simple translation sets API for generic objects',
        'dependencies' => 
        array (
          0 => 'i18n',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_translation.inc',
        ),
        'version' => '7.x-1.12',
        'project' => 'i18n',
        'datestamp' => '1422286982',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.12',
    ),
    'i18n_user' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/i18n/i18n_user/i18n_user.module',
      'name' => 'i18n_user',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User mail translation',
        'description' => 'Translate emails sent from the User module.',
        'core' => '7.x',
        'package' => 'Multilingual - Internationalization',
        'dependencies' => 
        array (
          0 => 'i18n_variable',
        ),
        'version' => '7.x-1.12',
        'project' => 'i18n',
        'datestamp' => '1422286982',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.12',
    ),
    'i18n_variable' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/i18n/i18n_variable/i18n_variable.module',
      'name' => 'i18n_variable',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable translation',
        'description' => 'Multilingual variables that switch language depending on page language.',
        'dependencies' => 
        array (
          0 => 'i18n',
          1 => 'variable_store (7.x-2.x)',
          2 => 'variable_realm (7.x-2.x)',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'configure' => 'admin/config/regional/i18n/variable',
        'files' => 
        array (
          0 => 'i18n_variable.class.inc',
          1 => 'i18n_variable.test',
        ),
        'version' => '7.x-1.12',
        'project' => 'i18n',
        'datestamp' => '1422286982',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.12',
    ),
    'imce' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/imce/imce.module',
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
        'version' => '7.x-1.9',
        'project' => 'imce',
        'datestamp' => '1400275428',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'imce',
      'version' => '7.x-1.9',
    ),
    'imce_wysiwyg' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/imce_wysiwyg/imce_wysiwyg.module',
      'name' => 'imce_wysiwyg',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IMCE Wysiwyg API bridge',
        'description' => 'Makes IMCE available as plugin for client-side editors integrated via Wysiwyg API.',
        'package' => 'User interface',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'imce',
          1 => 'wysiwyg',
        ),
        'version' => '7.x-1.0',
        'project' => 'imce_wysiwyg',
        'datestamp' => '1317851503',
        'php' => '5.2.4',
      ),
      'project' => 'imce_wysiwyg',
      'version' => '7.x-1.0',
    ),
    'inline_conditions' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/inline_conditions/inline_conditions.module',
      'name' => 'inline_conditions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Inline Conditions',
        'description' => 'Manage frequently used conditions through an attached field.',
        'package' => 'Rules',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'rules',
        ),
        'version' => '7.x-1.0-alpha4',
        'project' => 'inline_conditions',
        'datestamp' => '1405675129',
        'php' => '5.2.4',
      ),
      'project' => 'inline_conditions',
      'version' => '7.x-1.0-alpha4',
    ),
    'inline_entity_form' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/inline_entity_form/inline_entity_form.module',
      'name' => 'inline_entity_form',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Inline Entity Form',
        'description' => 'Provides a widget for inline management (creation, modification, removal) of referenced entities. ',
        'package' => 'Fields',
        'dependencies' => 
        array (
          0 => 'entity',
          1 => 'system (>7.14)',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/entity.inline_entity_form.inc',
          1 => 'includes/node.inline_entity_form.inc',
          2 => 'includes/taxonomy_term.inline_entity_form.inc',
          3 => 'includes/commerce_product.inline_entity_form.inc',
          4 => 'includes/commerce_line_item.inline_entity_form.inc',
        ),
        'version' => '7.x-1.5',
        'project' => 'inline_entity_form',
        'datestamp' => '1389971831',
        'php' => '5.2.4',
      ),
      'project' => 'inline_entity_form',
      'version' => '7.x-1.5',
    ),
    'jquery_update' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/jquery_update/jquery_update.module',
      'name' => 'jquery_update',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'jQuery Update',
        'description' => 'Update jQuery and jQuery UI to a more recent version.',
        'package' => 'User interface',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'jquery_update.module',
          1 => 'jquery_update.install',
        ),
        'configure' => 'admin/config/development/jquery_update',
        'version' => '7.x-2.5',
        'project' => 'jquery_update',
        'datestamp' => '1422221882',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'jquery_update',
      'version' => '7.x-2.5',
    ),
    'libraries' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/libraries/libraries.module',
      'name' => 'libraries',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7200',
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
          0 => 'tests/libraries.test',
        ),
        'version' => '7.x-2.2',
        'project' => 'libraries',
        'datestamp' => '1391965716',
        'php' => '5.2.4',
      ),
      'project' => 'libraries',
      'version' => '7.x-2.2',
    ),
    'mailsystem' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/mailsystem/mailsystem.module',
      'name' => 'mailsystem',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'package' => 'Mail',
        'name' => 'Mail System',
        'description' => 'Provides a user interface for per-module and site-wide mail_system selection.',
        'php' => '5.0',
        'core' => '7.x',
        'configure' => 'admin/config/system/mailsystem',
        'dependencies' => 
        array (
          0 => 'filter',
        ),
        'version' => '7.x-2.34',
        'project' => 'mailsystem',
        'datestamp' => '1334082653',
      ),
      'project' => 'mailsystem',
      'version' => '7.x-2.34',
    ),
    'menu_block' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/menu_block/menu_block.module',
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
        'version' => '7.x-2.5',
        'project' => 'menu_block',
        'datestamp' => '1423092482',
        'php' => '5.2.4',
      ),
      'project' => 'menu_block',
      'version' => '7.x-2.5',
    ),
    'menu_block_export' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/menu_block/menu_block_export.module',
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
        'version' => '7.x-2.5',
        'project' => 'menu_block',
        'datestamp' => '1423092482',
        'php' => '5.2.4',
      ),
      'project' => 'menu_block',
      'version' => '7.x-2.5',
    ),
    'mimemail' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/mimemail/mimemail.module',
      'name' => 'mimemail',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mime Mail',
        'description' => 'Send MIME-encoded emails with embedded images and attachments.',
        'dependencies' => 
        array (
          0 => 'mailsystem',
          1 => 'system (>=7.24)',
        ),
        'package' => 'Mail',
        'core' => '7.x',
        'configure' => 'admin/config/system/mimemail',
        'files' => 
        array (
          0 => 'includes/mimemail.mail.inc',
          1 => 'tests/mimemail.test',
          2 => 'tests/mimemail_rules.test',
          3 => 'tests/mimemail_compress.test',
        ),
        'version' => '7.x-1.0-beta3',
        'project' => 'mimemail',
        'datestamp' => '1394018015',
        'php' => '5.2.4',
      ),
      'project' => 'mimemail',
      'version' => '7.x-1.0-beta3',
    ),
    'mimemail_action' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/mimemail/modules/mimemail_action/mimemail_action.module',
      'name' => 'mimemail_action',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mime Mail Action',
        'description' => 'Provide actions for Mime Mail.',
        'package' => 'Mail',
        'dependencies' => 
        array (
          0 => 'mimemail',
          1 => 'trigger',
        ),
        'core' => '7.x',
        'version' => '7.x-1.0-beta3',
        'project' => 'mimemail',
        'datestamp' => '1394018015',
        'php' => '5.2.4',
      ),
      'project' => 'mimemail',
      'version' => '7.x-1.0-beta3',
    ),
    'mimemail_compress' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/mimemail/modules/mimemail_compress/mimemail_compress.module',
      'name' => 'mimemail_compress',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mime Mail CSS Compressor',
        'description' => 'Converts CSS to inline styles in an HTML message. (Requires the PHP DOM extension.)',
        'package' => 'Mail',
        'dependencies' => 
        array (
          0 => 'mimemail',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'mimemail_compress.inc',
        ),
        'version' => '7.x-1.0-beta3',
        'project' => 'mimemail',
        'datestamp' => '1394018015',
        'php' => '5.2.4',
      ),
      'project' => 'mimemail',
      'version' => '7.x-1.0-beta3',
    ),
    'module_filter' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/module_filter/module_filter.module',
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
    'og' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/og/og.module',
      'name' => 'og',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7205',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Organic groups',
        'description' => 'API to allow associating content with groups.',
        'package' => 'Organic groups',
        'dependencies' => 
        array (
          0 => 'options',
          1 => 'list',
          2 => 'text',
          3 => 'entity',
          4 => 'entityreference',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'og.info.inc',
          1 => 'includes/og.admin.inc',
          2 => 'includes/og.exception.inc',
          3 => 'includes/og.membership.inc',
          4 => 'includes/og.membership_type.inc',
          5 => 'includes/views/og.views.inc',
          6 => 'og.test',
          7 => 'includes/views/handlers/og_plugin_argument_validate_group.inc',
          8 => 'includes/views/handlers/og_plugin_argument_default_user_groups.inc',
          9 => 'includes/views/handlers/og_handler_field_group_member_count.inc',
          10 => 'includes/views/handlers/og_handler_field_group_audience_state.inc',
          11 => 'includes/views/handlers/og_handler_field_prerender_list.inc',
          12 => 'includes/views/handlers/og_handler_field_user_roles.inc',
          13 => 'includes/views/handlers/og_handler_field_group_permissions.inc',
          14 => 'includes/views/handlers/og_handler_field_og_membership_link_edit.inc',
          15 => 'includes/views/handlers/og_handler_field_og_membership_link_delete.inc',
          16 => 'includes/views/handlers/og_handler_filter_group_audience_state.inc',
          17 => 'includes/views/handlers/og_handler_filter_user_roles.inc',
          18 => 'includes/views/handlers/og_handler_relationship.inc',
          19 => 'includes/migrate/plugins/destinations/og_membership.inc',
          20 => 'includes/migrate/7000/og_add_fields.inc',
          21 => 'includes/migrate/7000/og_content.inc',
          22 => 'includes/migrate/7000/og_group.inc',
          23 => 'includes/migrate/7000/og_user.inc',
          24 => 'includes/migrate/7000/og_ogur_roles.migrate.inc',
          25 => 'includes/migrate/7000/og_ogur.migrate.inc',
          26 => 'includes/migrate/og.migrate.inc',
          27 => 'includes/migrate/7200/og_og_membership.migrate.inc',
          28 => 'includes/migrate/7200/og_roles.migrate.inc',
          29 => 'includes/migrate/7200/og_user_roles.migrate.inc',
        ),
        'version' => '7.x-2.7',
        'project' => 'og',
        'datestamp' => '1399486728',
        'php' => '5.2.4',
      ),
      'project' => 'og',
      'version' => '7.x-2.7',
    ),
    'og_access' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/og/og_access/og_access.module',
      'name' => 'og_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Organic groups access control',
        'description' => 'Enable access control for private and public groups and group content.',
        'package' => 'Organic groups',
        'dependencies' => 
        array (
          0 => 'og',
        ),
        'core' => '7.x',
        'version' => '7.x-2.7',
        'files' => 
        array (
          0 => 'og_access.module',
          1 => 'og_access.install',
          2 => 'og_access.test',
        ),
        'project' => 'og',
        'datestamp' => '1399486728',
        'php' => '5.2.4',
      ),
      'project' => 'og',
      'version' => '7.x-2.7',
    ),
    'og_context' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/og/og_context/og_context.module',
      'name' => 'og_context',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Organic groups context',
        'description' => 'Get a group from a viewed page.',
        'package' => 'Organic groups',
        'dependencies' => 
        array (
          0 => 'og',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'og_context.module',
          1 => 'og_context.install',
          2 => 'includes/views/handlers/og_context_plugin_argument_default_group_context.inc',
          3 => 'includes/views/handlers/og_context_plugin_access_og_perm.inc',
        ),
        'version' => '7.x-2.7',
        'project' => 'og',
        'datestamp' => '1399486728',
        'php' => '5.2.4',
      ),
      'project' => 'og',
      'version' => '7.x-2.7',
    ),
    'og_example' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/og/og_example/og_example.module',
      'name' => 'og_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OG example',
        'description' => 'Example module to show Organic groups configuration that can be used as building block.',
        'core' => '7.x',
        'package' => 'Features',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'entityreference_prepopulate',
          2 => 'features',
          3 => 'list',
          4 => 'message_notify',
          5 => 'og',
          6 => 'og_ui',
          7 => 'page_manager',
          8 => 'panels',
          9 => 'rules',
          10 => 'views_content',
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
          'field_base' => 
          array (
            0 => 'body',
            1 => 'field_node_reference',
            2 => 'group_group',
            3 => 'og_group_ref',
          ),
          'field_instance' => 
          array (
            0 => 'message-og_new_content-field_node_reference',
            1 => 'node-group-body',
            2 => 'node-group-group_group',
            3 => 'node-post-body',
            4 => 'node-post-og_group_ref',
          ),
          'message_type' => 
          array (
            0 => 'og_new_content',
          ),
          'node' => 
          array (
            0 => 'group',
            1 => 'post',
          ),
          'page_manager_handlers' => 
          array (
            0 => 'node_view_panel_context',
          ),
          'rules_config' => 
          array (
            0 => 'rules_og_new_content_message',
          ),
        ),
        'version' => '7.x-2.7',
        'project' => 'og',
        'datestamp' => '1399486728',
        'php' => '5.2.4',
      ),
      'project' => 'og',
      'version' => '7.x-2.7',
    ),
    'og_field_access' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/og/og_field_access/og_field_access.module',
      'name' => 'og_field_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Organic groups field access',
        'description' => 'Provide field access based on group.',
        'package' => 'Organic groups',
        'dependencies' => 
        array (
          0 => 'og',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'og_field_access.module',
          1 => 'og_field_access.test',
        ),
        'version' => '7.x-2.7',
        'project' => 'og',
        'datestamp' => '1399486728',
        'php' => '5.2.4',
      ),
      'project' => 'og',
      'version' => '7.x-2.7',
    ),
    'og_register' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/og/og_register/og_register.module',
      'name' => 'og_register',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Organic groups register',
        'description' => 'Allow subscribing to groups during the user registration.',
        'package' => 'Organic groups',
        'dependencies' => 
        array (
          0 => 'og',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'og_register.module',
          1 => 'og_register.install',
        ),
        'version' => '7.x-2.7',
        'project' => 'og',
        'datestamp' => '1399486728',
        'php' => '5.2.4',
      ),
      'project' => 'og',
      'version' => '7.x-2.7',
    ),
    'og_ui' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/og/og_ui/og_ui.module',
      'name' => 'og_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Organic groups UI',
        'description' => 'Organic groups UI.',
        'package' => 'Organic groups',
        'dependencies' => 
        array (
          0 => 'og',
          1 => 'views_bulk_operations',
        ),
        'core' => '7.x',
        'version' => '7.x-2.7',
        'files' => 
        array (
          0 => 'og_ui.test',
          1 => 'includes/views/handlers/og_ui_handler_area_og_membership_overview.inc',
          2 => 'includes/migrate/7000/add_field.inc',
          3 => 'includes/migrate/7000/populate_field.inc',
          4 => 'includes/migrate/7000/set_roles.inc',
        ),
        'configure' => 'admin/config/group',
        'project' => 'og',
        'datestamp' => '1399486728',
        'php' => '5.2.4',
      ),
      'project' => 'og',
      'version' => '7.x-2.7',
    ),
    'print' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/print/print.module',
      'name' => 'print',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7203',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Printer-friendly pages',
        'description' => 'Generates a printer-friendly version of Drupal pages.',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'files' => 
        array (
          0 => 'print_join_page_counter.inc',
        ),
        'dependencies' => 
        array (
          0 => 'node',
        ),
        'configure' => 'admin/config/user-interface/print',
        'version' => '7.x-2.0',
        'project' => 'print',
        'datestamp' => '1396426766',
        'php' => '5.2.4',
      ),
      'project' => 'print',
      'version' => '7.x-2.0',
    ),
    'print_epub_phpepub' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/print/print_epub/lib_handlers/print_epub_phpepub/print_epub_phpepub.module',
      'name' => 'print_epub_phpepub',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PHPePub library handler',
        'description' => 'EPUB generation library using PHPePub.',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'dependencies' => 
        array (
          0 => 'print_epub',
        ),
        'version' => '7.x-2.0',
        'project' => 'print',
        'datestamp' => '1396426766',
        'php' => '5.2.4',
      ),
      'project' => 'print',
      'version' => '7.x-2.0',
    ),
    'print_epub' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/print/print_epub/print_epub.module',
      'name' => 'print_epub',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'EPUB version',
        'description' => 'Adds the capability to export pages as EPUB. Requires an EPUB library and the respective handler module.',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'dependencies' => 
        array (
          0 => 'print',
        ),
        'configure' => 'admin/config/user-interface/print/epub',
        'version' => '7.x-2.0',
        'project' => 'print',
        'datestamp' => '1396426766',
        'php' => '5.2.4',
      ),
      'project' => 'print',
      'version' => '7.x-2.0',
    ),
    'print_mail' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/print/print_mail/print_mail.module',
      'name' => 'print_mail',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7203',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Send by email',
        'description' => 'Provides the capability to send the web page by email',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'dependencies' => 
        array (
          0 => 'print',
        ),
        'configure' => 'admin/config/user-interface/print/email',
        'version' => '7.x-2.0',
        'project' => 'print',
        'datestamp' => '1396426766',
        'php' => '5.2.4',
      ),
      'project' => 'print',
      'version' => '7.x-2.0',
    ),
    'print_pdf_dompdf' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/print/print_pdf/lib_handlers/print_pdf_dompdf/print_pdf_dompdf.module',
      'name' => 'print_pdf_dompdf',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'dompdf library handler',
        'description' => 'PDF generation library using dompdf.',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'dependencies' => 
        array (
          0 => 'print_pdf',
        ),
        'configure' => 'admin/config/user-interface/print/pdf/dompdf',
        'version' => '7.x-2.0',
        'project' => 'print',
        'datestamp' => '1396426766',
        'php' => '5.2.4',
      ),
      'project' => 'print',
      'version' => '7.x-2.0',
    ),
    'print_pdf_mpdf' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/print/print_pdf/lib_handlers/print_pdf_mpdf/print_pdf_mpdf.module',
      'name' => 'print_pdf_mpdf',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'mPDF library handler',
        'description' => 'PDF generation library using mPDF.',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'dependencies' => 
        array (
          0 => 'print_pdf',
        ),
        'version' => '7.x-2.0',
        'project' => 'print',
        'datestamp' => '1396426766',
        'php' => '5.2.4',
      ),
      'project' => 'print',
      'version' => '7.x-2.0',
    ),
    'print_pdf_tcpdf' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/print/print_pdf/lib_handlers/print_pdf_tcpdf/print_pdf_tcpdf.module',
      'name' => 'print_pdf_tcpdf',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'TCPDF library handler',
        'description' => 'PDF generation library using TCPDF.',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'dependencies' => 
        array (
          0 => 'print_pdf',
        ),
        'files' => 
        array (
          0 => 'print_pdf_tcpdf.class.inc',
        ),
        'configure' => 'admin/config/user-interface/print/pdf/tcpdf',
        'version' => '7.x-2.0',
        'project' => 'print',
        'datestamp' => '1396426766',
        'php' => '5.2.4',
      ),
      'project' => 'print',
      'version' => '7.x-2.0',
    ),
    'print_pdf_wkhtmltopdf' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/print/print_pdf/lib_handlers/print_pdf_wkhtmltopdf/print_pdf_wkhtmltopdf.module',
      'name' => 'print_pdf_wkhtmltopdf',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'wkhtmltopdf library handler',
        'description' => 'PDF generation library using wkhtmltopdf.',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'dependencies' => 
        array (
          0 => 'print_pdf',
        ),
        'configure' => 'admin/config/user-interface/print/pdf/wkhtmltopdf',
        'version' => '7.x-2.0',
        'project' => 'print',
        'datestamp' => '1396426766',
        'php' => '5.2.4',
      ),
      'project' => 'print',
      'version' => '7.x-2.0',
    ),
    'print_pdf' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/print/print_pdf/print_pdf.module',
      'name' => 'print_pdf',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7205',
      'weight' => '2',
      'info' => 
      array (
        'name' => 'PDF version',
        'description' => 'Adds the capability to export pages as PDF. Requires a PDF library and the respective handler module.',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'dependencies' => 
        array (
          0 => 'print',
        ),
        'configure' => 'admin/config/user-interface/print/pdf',
        'version' => '7.x-2.0',
        'project' => 'print',
        'datestamp' => '1396426766',
        'php' => '5.2.4',
      ),
      'project' => 'print',
      'version' => '7.x-2.0',
    ),
    'print_ui' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/print/print_ui/print_ui.module',
      'name' => 'print_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Printer-friendly pages UI',
        'description' => 'Manages the printer-friendly versions link display conditions. Without this module, those links are not displayed.',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'dependencies' => 
        array (
          0 => 'print',
        ),
        'configure' => 'admin/config/user-interface/print/ui',
        'version' => '7.x-2.0',
        'project' => 'print',
        'datestamp' => '1396426766',
        'php' => '5.2.4',
      ),
      'project' => 'print',
      'version' => '7.x-2.0',
    ),
    'profiler_builder_extras' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/profiler_builder/modules/profiler_builder_extras/profiler_builder_extras.module',
      'name' => 'profiler_builder_extras',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Profiler Builder Extras',
        'description' => 'Extra tools for use with profiler builder, more experimental.',
        'package' => 'Development',
        'core' => '7.x',
        'configure' => 'admin/config/development/profiler_builder/extras',
        'version' => '7.x-1.2',
        'project' => 'profiler_builder',
        'datestamp' => '1409079116',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'profiler_builder',
      'version' => '7.x-1.2',
    ),
    'profiler_builder' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/profiler_builder/profiler_builder.module',
      'name' => 'profiler_builder',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Profiler Builder',
        'description' => 'Turn this site into a profiler distribution fast!',
        'package' => 'Development',
        'core' => '7.x',
        'configure' => 'admin/config/development/profiler_builder',
        'version' => '7.x-1.2',
        'project' => 'profiler_builder',
        'datestamp' => '1409079116',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'profiler_builder',
      'version' => '7.x-1.2',
    ),
    'rules' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/rules/rules.module',
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
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/rules/rules_admin/rules_admin.module',
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
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/rules/rules_i18n/rules_i18n.module',
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
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/rules/rules_scheduler/rules_scheduler.module',
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
    'simplenews' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/simplenews/simplenews.module',
      'name' => 'simplenews',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7010',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Simplenews',
        'description' => 'Send newsletters to subscribed email addresses.',
        'package' => 'Mail',
        'core' => '7.x',
        'configure' => 'admin/config/services/simplenews',
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'test_dependencies' => 
        array (
          0 => 'i18n_taxonomy',
        ),
        'files' => 
        array (
          0 => 'tests/simplenews.test',
          1 => 'includes/simplenews.source.inc',
          2 => 'includes/views/handlers/simplenews_handler_field_newsletter_status.inc',
          3 => 'includes/views/handlers/simplenews_handler_field_newsletter_priority.inc',
          4 => 'includes/views/handlers/simplenews_handler_field_category_hyperlinks.inc',
          5 => 'includes/views/handlers/simplenews_handler_field_category_new_account.inc',
          6 => 'includes/views/handlers/simplenews_handler_field_category_opt_inout.inc',
          7 => 'includes/views/handlers/simplenews_handler_field_newsletter_send.inc',
          8 => 'includes/views/handlers/simplenews_handler_filter_newsletter_status.inc',
          9 => 'includes/views/handlers/simplenews_handler_filter_newsletter_priority.inc',
          10 => 'includes/views/handlers/simplenews_handler_filter_category_hyperlinks.inc',
          11 => 'includes/views/handlers/simplenews_handler_filter_category_new_account.inc',
          12 => 'includes/views/handlers/simplenews_handler_filter_category_opt_inout.inc',
        ),
        'version' => '7.x-1.1',
        'project' => 'simplenews',
        'datestamp' => '1381947969',
        'php' => '5.2.4',
      ),
      'project' => 'simplenews',
      'version' => '7.x-1.1',
    ),
    'simplenews_rules' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/simplenews/simplenews_rules/simplenews_rules.module',
      'name' => 'simplenews_rules',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Simplenews rules',
        'description' => 'Provides integration with Rules module for Simplenews.',
        'dependencies' => 
        array (
          0 => 'simplenews',
          1 => 'rules',
        ),
        'package' => 'Mail',
        'core' => '7.x',
        'version' => '7.x-1.1',
        'project' => 'simplenews',
        'datestamp' => '1381947969',
        'php' => '5.2.4',
      ),
      'project' => 'simplenews',
      'version' => '7.x-1.1',
    ),
    'views' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/views/views.module',
      'name' => 'views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7301',
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
        'version' => '7.x-3.10',
        'project' => 'views',
        'datestamp' => '1423648085',
      ),
      'project' => 'views',
      'version' => '7.x-3.10',
    ),
    'views_ui' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/views/views_ui.module',
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
        'version' => '7.x-3.10',
        'project' => 'views',
        'datestamp' => '1423648085',
        'php' => '5.2.4',
      ),
      'project' => 'views',
      'version' => '7.x-3.10',
    ),
    'actions_permissions' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/views_bulk_operations/actions_permissions.module',
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
        'version' => '7.x-3.2',
        'project' => 'views_bulk_operations',
        'datestamp' => '1387798183',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'views_bulk_operations',
      'version' => '7.x-3.2',
    ),
    'views_bulk_operations' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/views_bulk_operations/views_bulk_operations.module',
      'name' => 'views_bulk_operations',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
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
        'version' => '7.x-3.2',
        'project' => 'views_bulk_operations',
        'datestamp' => '1387798183',
      ),
      'project' => 'views_bulk_operations',
      'version' => '7.x-3.2',
    ),
    'views_json' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/views_datasource/views_json.module',
      'name' => 'views_json',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views JSON',
        'description' => 'Views style plugin to render node content as JSON.',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'views/plugins/views_plugin_style_json.inc',
        ),
        'version' => '7.x-1.0-alpha2',
        'project' => 'views_datasource',
        'datestamp' => '1423859528',
        'php' => '5.2.4',
      ),
      'project' => 'views_datasource',
      'version' => '7.x-1.0-alpha2',
    ),
    'views_rdf' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/views_datasource/views_rdf.module',
      'name' => 'views_rdf',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views RDF',
        'description' => 'Views style plugin to render node content as RDF.',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'views/plugins/views_plugin_style_rdf.inc',
        ),
        'version' => '7.x-1.0-alpha2',
        'project' => 'views_datasource',
        'datestamp' => '1423859528',
        'php' => '5.2.4',
      ),
      'project' => 'views_datasource',
      'version' => '7.x-1.0-alpha2',
    ),
    'views_xhtml' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/views_datasource/views_xhtml.module',
      'name' => 'views_xhtml',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views XHTML',
        'description' => 'Views style plugin to render node content as XHTML microformats.',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'views_xml',
        ),
        'files' => 
        array (
          0 => 'views/plugins/views_plugin_style_xhtml.inc',
        ),
        'version' => '7.x-1.0-alpha2',
        'project' => 'views_datasource',
        'datestamp' => '1423859528',
        'php' => '5.2.4',
      ),
      'project' => 'views_datasource',
      'version' => '7.x-1.0-alpha2',
    ),
    'views_xml' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/views_datasource/views_xml.module',
      'name' => 'views_xml',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views XML',
        'description' => 'Views style plugin to render node content as XML.',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'views/plugins/views_plugin_style_xml.inc',
        ),
        'version' => '7.x-1.0-alpha2',
        'project' => 'views_datasource',
        'datestamp' => '1423859528',
        'php' => '5.2.4',
      ),
      'project' => 'views_datasource',
      'version' => '7.x-1.0-alpha2',
    ),
    'views_slideshow_cycle' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/views_slideshow/contrib/views_slideshow_cycle/views_slideshow_cycle.module',
      'name' => 'views_slideshow_cycle',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Slideshow: Cycle',
        'description' => 'Adds a Rotating slideshow mode to Views Slideshow.',
        'dependencies' => 
        array (
          0 => 'views_slideshow',
          1 => 'libraries',
        ),
        'package' => 'Views',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'views_slideshow_cycle.module',
          1 => 'views_slideshow_cycle.views_slideshow.inc',
          2 => 'theme/views_slideshow_cycle.theme.inc',
        ),
        'version' => '7.x-3.1',
        'project' => 'views_slideshow',
        'datestamp' => '1382584826',
        'php' => '5.2.4',
      ),
      'project' => 'views_slideshow',
      'version' => '7.x-3.1',
    ),
    'views_slideshow' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/views_slideshow/views_slideshow.module',
      'name' => 'views_slideshow',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Slideshow',
        'description' => 'Provides a View style that displays rows as a jQuery slideshow.  This is an API and requires Views Slideshow Cycle or another module that supports the API.',
        'dependencies' => 
        array (
          0 => 'views (>=3.0)',
        ),
        'package' => 'Views',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'views_slideshow.module',
          1 => 'theme/views_slideshow.theme.inc',
          2 => 'views_slideshow.views.inc',
          3 => 'views_slideshow_plugin_style_slideshow.inc',
        ),
        'version' => '7.x-3.1',
        'project' => 'views_slideshow',
        'datestamp' => '1382584826',
        'php' => '5.2.4',
      ),
      'project' => 'views_slideshow',
      'version' => '7.x-3.1',
    ),
    'votingapi' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/votingapi/votingapi.module',
      'name' => 'votingapi',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Voting API',
        'description' => 'Provides a shared voting API for other modules.',
        'package' => 'Voting',
        'core' => '7.x',
        'configure' => 'admin/config/search/votingapi',
        'files' => 
        array (
          0 => 'tests/votingapi.test',
          1 => 'views/votingapi_views_handler_field_value.inc',
          2 => 'views/votingapi_views_handler_sort_nullable.inc',
          3 => 'views/votingapi_views_handler_relationship.inc',
        ),
        'version' => '7.x-2.12',
        'project' => 'votingapi',
        'datestamp' => '1407995929',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'votingapi',
      'version' => '7.x-2.12',
    ),
    'webform' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/webform/webform.module',
      'name' => 'webform',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Webform',
        'description' => 'Enables the creation of forms and questionnaires.',
        'core' => '7.x',
        'package' => 'Webform',
        'configure' => 'admin/config/content/webform',
        'php' => '5.3',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'views',
        ),
        'test_dependencies' => 
        array (
          0 => 'token',
        ),
        'files' => 
        array (
          0 => 'includes/exporters/webform_exporter_delimited.inc',
          1 => 'includes/exporters/webform_exporter_excel_delimited.inc',
          2 => 'includes/exporters/webform_exporter_excel_xlsx.inc',
          3 => 'includes/exporters/webform_exporter.inc',
          4 => 'views/webform_handler_field_form_body.inc',
          5 => 'views/webform_handler_field_is_draft.inc',
          6 => 'views/webform_handler_field_node_link_edit.inc',
          7 => 'views/webform_handler_field_node_link_results.inc',
          8 => 'views/webform_handler_field_submission_count.inc',
          9 => 'views/webform_handler_field_submission_data.inc',
          10 => 'views/webform_handler_field_submission_link.inc',
          11 => 'views/webform_handler_field_webform_status.inc',
          12 => 'views/webform_handler_filter_is_draft.inc',
          13 => 'views/webform_handler_filter_submission_data.inc',
          14 => 'views/webform_handler_filter_webform_status.inc',
          15 => 'views/webform_handler_area_result_pager.inc',
          16 => 'views/webform_plugin_row_submission_view.inc',
          17 => 'views/webform_handler_relationship_submission_data.inc',
          18 => 'views/webform.views.inc',
          19 => 'tests/components.test',
          20 => 'tests/conditionals.test',
          21 => 'tests/permissions.test',
          22 => 'tests/submission.test',
          23 => 'tests/webform.test',
        ),
        'version' => '7.x-4.5',
        'project' => 'webform',
        'datestamp' => '1426611481',
      ),
      'project' => 'webform',
      'version' => '7.x-4.5',
    ),
    'wysiwyg' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/modules/contrib/wysiwyg/wysiwyg.module',
      'name' => 'wysiwyg',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7200',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Wysiwyg',
        'description' => 'Allows to edit content with client-side editors.',
        'package' => 'User interface',
        'core' => '7.x',
        'configure' => 'admin/config/content/wysiwyg',
        'files' => 
        array (
          0 => 'wysiwyg.module',
          1 => 'tests/wysiwyg.test',
        ),
        'version' => '7.x-2.2',
        'project' => 'wysiwyg',
        'datestamp' => '1349213776',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'wysiwyg',
      'version' => '7.x-2.2',
    ),
  ),
  'themes' => 
  array (
    'adminimal' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/themes/contrib/adminimal_theme/adminimal.info',
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
        'description' => 'A simple one-column, tableless, minimalist administration theme.',
        'core' => '7.x',
        'scripts' => 
        array (
          0 => 'js/jRespond.js',
          1 => 'js/adminimal_theme.js',
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '1',
          'display_icons_config' => '1',
          'custom_css' => '0',
          'use_custom_media_queries' => '0',
          'media_query_mobile' => 'only screen and (max-width: 480px)',
          'media_query_tablet' => 'only screen and (min-width : 481px) and (max-width : 1024px)',
        ),
        'regions' => 
        array (
          'content_before' => 'Before Content',
          'sidebar_left' => 'Sidebar Left',
          'content' => 'Content',
          'sidebar_right' => 'Sidebar Right',
          'content_after' => 'After Content',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'sidebar_first' => 'First sidebar',
        ),
        'regions_hidden' => 
        array (
          0 => 'sidebar_first',
        ),
        'version' => '7.x-1.21',
        'project' => 'adminimal_theme',
        'datestamp' => '1425236582',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'adminimal_theme',
      'version' => '7.x-1.21',
    ),
    'bartik' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/themes/bartik/bartik.info',
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
        'version' => '7.35',
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
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'blacksea' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/themes/contrib/blacksea/blacksea.info',
      'name' => 'blacksea',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blacksea for Drupal 7.x',
        'description' => 'Theme by ThemeShark.com (default).',
        'version' => '7.x-1.3',
        'core' => '7.x',
        'engine' => 'phptemplate',
        'scripts' => 
        array (
          0 => 'js/scripts.js',
          1 => 'js/superfish.js',
        ),
        'regions' => 
        array (
          'sidebar_first' => 'Sidebar First',
          'sidebar_second' => 'Sidebar Second',
          'highlighted' => 'Highlighted',
          'content_top' => 'Content Top',
          'content' => 'Content',
          'content_bottom' => 'Content Bottom',
          'footer' => 'Footer',
          'main_menu' => 'Main Menu',
          'user_menu' => 'User Menu',
          'navigation_menu' => 'Navigation Menu',
          'search_box' => 'Search Box',
          'slideshow' => 'Slideshow',
          'user1' => 'User 1',
          'user2' => 'User 2',
          'user3' => 'User 3',
          'user4' => 'User 4',
          'user5' => 'User 5',
          'user6' => 'User 6',
          'user7' => 'User 7',
          'user8' => 'User 8',
        ),
        'settings' => 
        array (
          'style' => '0',
          'layout' => '0',
          'fixedwidth' => '960',
          'leftwidth' => '200',
          'rightwidth' => '280',
          'font_size' => '0.8',
          'font_family' => 'Tahoma, Arial, Helvetica, sans-serif',
          'breadcrumb' => '1',
          'css' => '1',
          'facebook_url' => 'http://www.facebook.com',
          'twitter_url' => 'http://www.twitter.com',
        ),
        'project' => 'blacksea',
        'datestamp' => '1361898659',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'blacksea',
      'version' => '7.x-1.3',
    ),
    'bs_solikon' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/themes/contrib/bs_solikon/bs_solikon.info',
      'name' => 'bs_solikon',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'BS Solikon',
        'description' => 'Solikon Theme based on blacksea Theme by ThemeShark.com.',
        'version' => '7.x-1.3',
        'core' => '7.x',
        'engine' => 'phptemplate',
        'scripts' => 
        array (
          0 => 'js/scripts.js',
          1 => 'js/superfish.js',
        ),
        'regions' => 
        array (
          'sidebar_first' => 'Sidebar First',
          'sidebar_second' => 'Sidebar Second',
          'highlighted' => 'Highlighted',
          'content_top' => 'Content Top',
          'content' => 'Content',
          'content_bottom' => 'Content Bottom',
          'footer' => 'Footer',
          'main_menu' => 'Main Menu',
          'user_menu' => 'User Menu',
          'navigation_menu' => 'Navigation Menu',
          'search_box' => 'Search Box',
          'slideshow' => 'Slideshow',
          'user1' => 'User 1',
          'user2' => 'User 2',
          'user3' => 'User 3',
          'user4' => 'User 4',
          'user5' => 'User 5',
          'user6' => 'User 6',
          'user7' => 'User 7',
          'user8' => 'User 8',
        ),
        'settings' => 
        array (
          'style' => '0',
          'layout' => '0',
          'fixedwidth' => '960',
          'leftwidth' => '200',
          'rightwidth' => '280',
          'font_size' => '0.8',
          'font_family' => 'Tahoma, Arial, Helvetica, sans-serif',
          'breadcrumb' => '1',
          'css' => '1',
          'facebook_url' => 'http://www.facebook.com',
          'twitter_url' => 'http://www.twitter.com',
        ),
        'project' => 'bs_solikon',
        'datestamp' => '1361898659',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'bs_solikon',
      'version' => '7.x-1.3',
    ),
    'business' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/themes/contrib/business/business.info',
      'name' => 'business',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Business',
        'description' => 'Business is a premium Drupal 7 theme. Developed by <a href="http://www.devsaran.com">Devsaran.com</a>.',
        'core' => '7.x',
        'engine' => 'phptemplate',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
            1 => 'color/colors.css',
          ),
        ),
        'scripts' => 
        array (
          0 => 'js/superfish.js',
          1 => 'js/supersubs.js',
          2 => 'js/sfmenu.js',
        ),
        'regions' => 
        array (
          'sidebar_first' => 'First Sidebar',
          'header' => 'Header',
          'homequotes' => 'Home Quotes',
          'home_high1' => 'Home Highlight 1',
          'home_high2' => 'Home Highlight 2',
          'home_high3' => 'Home Highlight 3',
          'content' => 'Content',
          'content_top' => 'Content Top',
          'help' => 'Help',
          'footer_first' => 'First Bottom',
          'footer_second' => 'Second Bottom',
          'footer_third' => 'Third Bottom',
          'footer_fourth' => 'Fourth Bottom',
          'footer' => 'Footer',
        ),
        'features' => 
        array (
          0 => 'logo',
          1 => 'name',
          2 => 'slogan',
          3 => 'node_user_picture',
          4 => 'comment_user_picture',
          5 => 'comment_user_verification',
          6 => 'favicon',
          7 => 'main_menu',
          8 => 'secondary_menu',
        ),
        'settings' => 
        array (
          'footer_copyright' => '1',
          'footer_credits' => '1',
          'slideshow_display' => '1',
          'show_front_content' => '1',
          'breadcrumbs' => '1',
          'slide1_desc' => 'What We Do',
          'slide2_desc' => 'Who We Are',
          'slide3_desc' => 'Our Service',
          'slide1_url' => 'node/1',
          'slide2_url' => 'node/2',
          'slide3_url' => 'node/3',
        ),
        'version' => '7.x-1.11',
        'project' => 'business',
        'datestamp' => '1395414857',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'business',
      'version' => '7.x-1.11',
    ),
    'garland' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/themes/garland/garland.info',
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
        'version' => '7.35',
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
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'ohm' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/themes/contrib/omega/ohm/ohm.info',
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
        'version' => '7.x-4.3+2-dev',
        'project' => 'omega',
        'datestamp' => '1413967429',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'omega',
      'version' => '7.x-4.3+2-dev',
    ),
    'omega' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/themes/contrib/omega/omega/omega.info',
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
        'description' => 'A powerful HTML5 base theme framework utilizing tools like <a href="http://sass-lang.com/" title="Sass">Sass</a>, <a href="http://compass-style.org/" title="Compass">Compass</a>, <a href="http://gruntjs.com/" title="Grunt">Grunt</a>, <a href="http://bower.io/" title="Bower">Bower</a>, <a href="http://rvm.io/" title="Ruby Version Manager">Ruby Version Manager</a>, <a href="http://bundler.io/" title="Bundler">Bundler</a> and more.',
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
        'version' => '7.x-4.3+2-dev',
        'project' => 'omega',
        'datestamp' => '1413967429',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'omega',
      'version' => '7.x-4.3+2-dev',
    ),
    'seven' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/themes/seven/seven.info',
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
        'version' => '7.35',
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
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
    ),
    'skeletontheme' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/themes/contrib/skeletontheme/skeletontheme.info',
      'name' => 'skeletontheme',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Skeleton',
        'description' => 'Skeleton is a powerful, clean, responsive theme ported to Drupal by <a href="http://www.morethanthemes.com/" target="_blank">More Than (just) Themes</a>. If you like this theme, we encourage you to try also our other <a href="http://www.morethanthemes.com" target="_blank">Premium</a> and <a href="http://drupalizing.com" target="_blank">Free</a> Drupal themes.',
        'version' => '7.x-1.4',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/skeleton.css',
            1 => 'css/style.css',
            2 => 'css/buttons.css',
            3 => 'css/layout.css',
            4 => 'color/colors.css',
          ),
        ),
        'regions' => 
        array (
          'header_top_left' => 'Header top left',
          'header_top_right' => 'Header top right',
          'header_right' => 'Header right',
          'header' => 'Header',
          'highlighted' => 'Highlighted',
          'content' => 'Content',
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'featured_left' => 'Featured left',
          'featured_right' => 'Featured right',
          'footer_first' => 'Footer first',
          'footer_second' => 'Footer second',
          'footer_third' => 'Footer third',
          'footer' => 'Footer',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
        ),
        'settings' => 
        array (
          'responsive_menu_state' => '1',
          'responsive_menu_switchwidth' => '760',
          'responsive_menu_topoptiontext' => 'Select a page',
        ),
        'project' => 'skeletontheme',
        'datestamp' => '1396987453',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'skeletontheme',
      'version' => '7.x-1.4',
    ),
    'sk_solikon' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/profiles/cod/themes/contrib/sk_solikon/sk_solikon.info',
      'name' => 'sk_solikon',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'SK Solikon',
        'description' => 'Based on Skeleton Theme',
        'version' => '7.x-1.4',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/skeleton.css',
            1 => 'css/style.css',
            2 => 'css/style-solikon.css',
            3 => 'css/layout.css',
            4 => 'color/colors.css',
          ),
        ),
        'regions' => 
        array (
          'header_top_left' => 'Header top left',
          'header_top_right' => 'Header top right',
          'header_right' => 'Header right',
          'header' => 'Header',
          'highlighted' => 'Highlighted',
          'content' => 'Content',
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'featured_left' => 'Featured left',
          'featured_right' => 'Featured right',
          'footer_first' => 'Footer first',
          'footer_second' => 'Footer second',
          'footer_third' => 'Footer third',
          'footer' => 'Footer',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
        ),
        'settings' => 
        array (
          'responsive_menu_state' => '1',
          'responsive_menu_switchwidth' => '760',
          'responsive_menu_topoptiontext' => 'Select a page',
        ),
        'project' => 'sk_solikon',
        'datestamp' => '1396987453',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'sk_solikon',
      'version' => '7.x-1.4',
    ),
    'stark' => 
    array (
      'filename' => '/data/disk/o3/static/cod7-7.35.1-dev/themes/stark/stark.info',
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
        'version' => '7.35',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'layout.css',
          ),
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.35',
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
