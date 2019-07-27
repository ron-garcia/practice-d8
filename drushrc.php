<?php 


$options['db_type'] = 'mysql';
$options['db_host'] = 'aegir.rg';
$options['db_port'] = '3306';
$options['db_passwd'] = 'UvaZSUuE5z';
$options['db_name'] = 'practiceronaldpg';
$options['db_user'] = 'practiceronaldpg';
$options['profile_installed'] = true;
$options['installed'] = true;
$options['packages'] = array (
  'platforms' => 
  array (
    'drupal' => 
    array (
      'short_name' => 'drupal',
      'version' => '8.7.5',
      'description' => 'This platform is running Drupal 8.7.5',
    ),
  ),
  'profiles' => 
  array (
    'standard' => 
    array (
      'name' => 'Standard',
      'info' => 
      array (
        'name' => 'Standard',
        'type' => 'profile',
        'description' => 'Install with commonly used features pre-configured.',
        'version' => 'VERSION',
        'core' => '8.x',
        'install' => 
        array (
          0 => 'node',
          1 => 'history',
          2 => 'block',
          3 => 'breakpoint',
          4 => 'ckeditor',
          5 => 'color',
          6 => 'config',
          7 => 'comment',
          8 => 'contextual',
          9 => 'contact',
          10 => 'menu_link_content',
          11 => 'datetime',
          12 => 'block_content',
          13 => 'quickedit',
          14 => 'editor',
          15 => 'help',
          16 => 'image',
          17 => 'menu_ui',
          18 => 'options',
          19 => 'path',
          20 => 'page_cache',
          21 => 'dynamic_page_cache',
          22 => 'big_pipe',
          23 => 'taxonomy',
          24 => 'dblog',
          25 => 'search',
          26 => 'shortcut',
          27 => 'toolbar',
          28 => 'field_ui',
          29 => 'file',
          30 => 'rdf',
          31 => 'views',
          32 => 'views_ui',
          33 => 'tour',
          34 => 'automated_cron',
        ),
        'themes' => 
        array (
          0 => 'bartik',
          1 => 'seven',
        ),
        'languages' => 
        array (
          0 => 'en',
        ),
      ),
      'filename' => '/private/var/aegir/platforms/projectd8/core/profiles/standard/standard.info.yml',
      'path' => '/private/var/aegir/platforms/projectd8/core/profiles/standard',
      'version' => '8.7.5',
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
    'action' => 
    array (
      'name' => 'Actions',
      'type' => 'module',
      'description' => 'Perform tasks on specific events triggered within the system.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'configure' => 'entity.action.collection',
      'mtime' => 1563294297,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/action/action.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'aggregator' => 
    array (
      'name' => 'Aggregator',
      'type' => 'module',
      'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds) from external sources.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'configure' => 'aggregator.admin_settings',
      'dependencies' => 
      array (
        0 => 'drupal:file',
        1 => 'drupal:options',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/aggregator/aggregator.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'automated_cron' => 
    array (
      'name' => 'Automated Cron',
      'type' => 'module',
      'description' => 'Provides an automated way to run cron jobs, by executing them at the end of a server response.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'configure' => 'system.cron_settings',
      'mtime' => 1563294297,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/automated_cron/automated_cron.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'ban' => 
    array (
      'name' => 'Ban',
      'type' => 'module',
      'description' => 'Enables banning of IP addresses.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'configure' => 'ban.admin_page',
      'mtime' => 1563294297,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/ban/ban.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'basic_auth' => 
    array (
      'name' => 'HTTP Basic Authentication',
      'type' => 'module',
      'description' => 'Provides the HTTP Basic authentication provider',
      'package' => 'Web services',
      'version' => '8.7.5',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'drupal:user',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/basic_auth/basic_auth.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'big_pipe' => 
    array (
      'name' => 'BigPipe',
      'type' => 'module',
      'description' => 'Sends pages using the BigPipe technique that allows browsers to show them much faster.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'mtime' => 1563294297,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/big_pipe/big_pipe.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'block' => 
    array (
      'name' => 'Block',
      'type' => 'module',
      'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'configure' => 'block.admin_display',
      'mtime' => 1563294297,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/block/block.info.yml',
      'status' => 1,
      'schema_version' => '8003',
    ),
    'block_content' => 
    array (
      'name' => 'Custom Block',
      'type' => 'module',
      'description' => 'Allows the creation of custom blocks through the user interface.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'drupal:block',
        1 => 'drupal:text',
        2 => 'drupal:user',
      ),
      'configure' => 'entity.block_content.collection',
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/block_content/block_content.info.yml',
      'status' => 1,
      'schema_version' => '8600',
    ),
    'block_place' => 
    array (
      'name' => 'Place Blocks',
      'type' => 'module',
      'description' => 'Allow administrators to place blocks from any Drupal page',
      'package' => 'Core (Experimental)',
      'version' => '8.7.5',
      'core' => '8.x',
      'hidden' => true,
      'dependencies' => 
      array (
        0 => 'drupal:block',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/block_place/block_place.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'book' => 
    array (
      'name' => 'Book',
      'type' => 'module',
      'description' => 'Allows users to create and organize related content in an outline.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'drupal:node',
      ),
      'configure' => 'book.settings',
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/book/book.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'breakpoint' => 
    array (
      'name' => 'Breakpoint',
      'type' => 'module',
      'description' => 'Manage breakpoints and breakpoint groups for responsive designs.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'mtime' => 1563294297,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/breakpoint/breakpoint.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'ckeditor' => 
    array (
      'name' => 'CKEditor',
      'type' => 'module',
      'description' => 'WYSIWYG editing for rich text fields using CKEditor.',
      'package' => 'Core',
      'core' => '8.x',
      'version' => '8.7.5',
      'dependencies' => 
      array (
        0 => 'drupal:editor',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/ckeditor/ckeditor.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'color' => 
    array (
      'name' => 'Color',
      'type' => 'module',
      'description' => 'Allows administrators to change the color scheme of compatible themes.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'mtime' => 1563294297,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/color/color.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'comment' => 
    array (
      'name' => 'Comment',
      'type' => 'module',
      'description' => 'Allows users to comment on and discuss published content.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'drupal:text',
      ),
      'configure' => 'comment.admin',
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/comment/comment.info.yml',
      'status' => 1,
      'schema_version' => '8701',
    ),
    'config' => 
    array (
      'name' => 'Configuration Manager',
      'type' => 'module',
      'description' => 'Allows administrators to manage configuration changes.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'configure' => 'config.sync',
      'mtime' => 1563294297,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/config/config.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'config_translation' => 
    array (
      'name' => 'Configuration Translation',
      'type' => 'module',
      'description' => 'Provides a translation interface for configuration.',
      'package' => 'Multilingual',
      'version' => '8.7.5',
      'core' => '8.x',
      'configure' => 'config_translation.mapper_list',
      'dependencies' => 
      array (
        0 => 'drupal:locale',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/config_translation/config_translation.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'contact' => 
    array (
      'name' => 'Contact',
      'type' => 'module',
      'description' => 'Enables the use of both personal and site-wide contact forms.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'configure' => 'entity.contact_form.collection',
      'mtime' => 1563294297,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/contact/contact.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'content_moderation' => 
    array (
      'name' => 'Content Moderation',
      'type' => 'module',
      'description' => 'Provides moderation states for content.',
      'version' => '8.7.5',
      'core' => '8.x',
      'package' => 'Core',
      'configure' => 'entity.workflow.collection',
      'dependencies' => 
      array (
        0 => 'drupal:workflows',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/content_moderation/content_moderation.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'content_translation' => 
    array (
      'name' => 'Content Translation',
      'type' => 'module',
      'description' => 'Allows users to translate content entities.',
      'dependencies' => 
      array (
        0 => 'drupal:language',
      ),
      'package' => 'Multilingual',
      'version' => '8.7.5',
      'core' => '8.x',
      'configure' => 'language.content_settings_page',
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/content_translation/content_translation.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'contextual' => 
    array (
      'name' => 'Contextual Links',
      'type' => 'module',
      'description' => 'Provides contextual links to perform actions related to elements on a page.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'mtime' => 1563294297,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/contextual/contextual.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'datetime' => 
    array (
      'name' => 'Datetime',
      'type' => 'module',
      'description' => 'Defines datetime form elements and a datetime field type.',
      'package' => 'Field types',
      'version' => '8.7.5',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'drupal:field',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/datetime/datetime.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'datetime_range' => 
    array (
      'name' => 'Datetime Range',
      'type' => 'module',
      'description' => 'Provides the ability to store end dates.',
      'package' => 'Field types',
      'version' => '8.7.5',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'drupal:datetime',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/datetime_range/datetime_range.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'dblog' => 
    array (
      'name' => 'Database Logging',
      'type' => 'module',
      'description' => 'Logs and records system events to the database.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'configure' => 'system.logging_settings',
      'mtime' => 1563294297,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/dblog/dblog.info.yml',
      'status' => 1,
      'schema_version' => '8600',
    ),
    'dynamic_page_cache' => 
    array (
      'name' => 'Internal Dynamic Page Cache',
      'type' => 'module',
      'description' => 'Caches pages for any user, handling dynamic content correctly.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'mtime' => 1563294297,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/dynamic_page_cache/dynamic_page_cache.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'editor' => 
    array (
      'name' => 'Text Editor',
      'type' => 'module',
      'description' => 'Provides a means to associate text formats with text editor libraries such as WYSIWYGs or toolbars.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'drupal:filter',
        1 => 'drupal:file',
      ),
      'configure' => 'filter.admin_overview',
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/editor/editor.info.yml',
      'status' => 1,
      'schema_version' => '8001',
    ),
    'entity_reference' => 
    array (
      'name' => 'Entity Reference',
      'type' => 'module',
      'description' => 'Deprecated. All the functionality has been moved to Core.',
      'package' => 'Field types',
      'version' => '8.7.5',
      'core' => '8.x',
      'hidden' => true,
      'mtime' => 1563294297,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/entity_reference/entity_reference.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'field' => 
    array (
      'name' => 'Field',
      'type' => 'module',
      'description' => 'Field API to add fields to entities like nodes and users.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'mtime' => 1563294297,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/field/field.info.yml',
      'status' => 1,
      'schema_version' => '8500',
    ),
    'field_layout' => 
    array (
      'name' => 'Field Layout',
      'type' => 'module',
      'description' => 'Allows users to configure the display and form display by arranging fields in several columns.',
      'package' => 'Core (Experimental)',
      'version' => '8.7.5',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'drupal:layout_discovery',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/field_layout/field_layout.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'field_ui' => 
    array (
      'name' => 'Field UI',
      'type' => 'module',
      'description' => 'User interface for the Field API.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'drupal:field',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/field_ui/field_ui.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'file' => 
    array (
      'name' => 'File',
      'type' => 'module',
      'description' => 'Defines a file field type.',
      'package' => 'Field types',
      'version' => '8.7.5',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'drupal:field',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/file/file.info.yml',
      'status' => 1,
      'schema_version' => '8700',
    ),
    'filter' => 
    array (
      'name' => 'Filter',
      'type' => 'module',
      'description' => 'Filters content in preparation for display.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'configure' => 'filter.admin_overview',
      'dependencies' => 
      array (
        0 => 'drupal:user',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/filter/filter.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'forum' => 
    array (
      'name' => 'Forum',
      'type' => 'module',
      'description' => 'Provides discussion forums.',
      'dependencies' => 
      array (
        0 => 'drupal:node',
        1 => 'drupal:history',
        2 => 'drupal:taxonomy',
        3 => 'drupal:comment',
        4 => 'drupal:options',
      ),
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'configure' => 'forum.overview',
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/forum/forum.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'hal' => 
    array (
      'name' => 'HAL',
      'type' => 'module',
      'description' => 'Serializes entities using Hypertext Application Language.',
      'package' => 'Web services',
      'version' => '8.7.5',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'drupal:serialization',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/hal/hal.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'help' => 
    array (
      'name' => 'Help',
      'type' => 'module',
      'description' => 'Manages the display of online help.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'mtime' => 1563294297,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/help/help.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'history' => 
    array (
      'name' => 'History',
      'type' => 'module',
      'description' => 'Records which user has read which content.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'drupal:node',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/history/history.info.yml',
      'status' => 1,
      'schema_version' => '8101',
    ),
    'image' => 
    array (
      'name' => 'Image',
      'type' => 'module',
      'description' => 'Defines an image field type and provides image manipulation tools.',
      'package' => 'Field types',
      'version' => '8.7.5',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'drupal:file',
      ),
      'configure' => 'entity.image_style.collection',
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/image/image.info.yml',
      'status' => 1,
      'schema_version' => '8201',
    ),
    'inline_form_errors' => 
    array (
      'type' => 'module',
      'name' => 'Inline Form Errors',
      'description' => 'Places error messages adjacent to form inputs, for improved usability and accessibility.',
      'version' => '8.7.5',
      'core' => '8.x',
      'package' => 'Core',
      'mtime' => 1563294297,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/inline_form_errors/inline_form_errors.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'jsonapi' => 
    array (
      'name' => 'JSON:API',
      'type' => 'module',
      'description' => 'Exposes entities as a JSON:API-specification-compliant web API.',
      'core' => '8.x',
      'package' => 'Web services',
      'configure' => 'jsonapi.settings',
      'dependencies' => 
      array (
        0 => 'drupal:serialization',
      ),
      'mtime' => 1563294297,
      'version' => NULL,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/jsonapi/jsonapi.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'language' => 
    array (
      'name' => 'Language',
      'type' => 'module',
      'description' => 'Allows users to configure languages and apply them to content.',
      'package' => 'Multilingual',
      'version' => '8.7.5',
      'core' => '8.x',
      'configure' => 'entity.configurable_language.collection',
      'mtime' => 1563294297,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/language/language.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'layout_builder' => 
    array (
      'name' => 'Layout Builder',
      'type' => 'module',
      'description' => 'Allows users to add and arrange blocks and content fields directly on the content.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'drupal:layout_discovery',
        1 => 'drupal:contextual',
        2 => 'drupal:field_ui',
        3 => 'drupal:block',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/layout_builder/layout_builder.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'layout_discovery' => 
    array (
      'name' => 'Layout Discovery',
      'type' => 'module',
      'description' => 'Provides a way for modules or themes to register layouts.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'mtime' => 1563294297,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/layout_discovery/layout_discovery.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'link' => 
    array (
      'name' => 'Link',
      'type' => 'module',
      'description' => 'Provides a simple link field type.',
      'core' => '8.x',
      'package' => 'Field types',
      'version' => '8.7.5',
      'dependencies' => 
      array (
        0 => 'drupal:field',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/link/link.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'locale' => 
    array (
      'name' => 'Interface Translation',
      'type' => 'module',
      'description' => 'Translates the built-in user interface.',
      'configure' => 'locale.translate_page',
      'package' => 'Multilingual',
      'version' => '8.7.5',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'drupal:language',
        1 => 'drupal:file',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/locale/locale.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'media' => 
    array (
      'name' => 'Media',
      'description' => 'Manages the creation, configuration, and display of media items.',
      'type' => 'module',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'drupal:file',
        1 => 'drupal:image',
        2 => 'drupal:user',
      ),
      'configure' => 'media.settings',
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/media/media.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'media_library' => 
    array (
      'name' => 'Media Library',
      'type' => 'module',
      'description' => 'Enhances the media list with additional features to more easily find and use existing media items.',
      'package' => 'Core (Experimental)',
      'version' => '8.7.5',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'drupal:media',
        1 => 'drupal:views',
        2 => 'drupal:user',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/media_library/media_library.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'menu_link_content' => 
    array (
      'name' => 'Custom Menu Links',
      'type' => 'module',
      'description' => 'Allows administrators to create custom menu links.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'drupal:link',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/menu_link_content/menu_link_content.info.yml',
      'status' => 1,
      'schema_version' => '8601',
    ),
    'menu_ui' => 
    array (
      'name' => 'Menu UI',
      'type' => 'module',
      'description' => 'Allows administrators to customize the site navigation menu.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'configure' => 'entity.menu.collection',
      'dependencies' => 
      array (
        0 => 'drupal:menu_link_content',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/menu_ui/menu_ui.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'migrate' => 
    array (
      'name' => 'Migrate',
      'type' => 'module',
      'description' => 'Handles migrations',
      'package' => 'Migration',
      'version' => '8.7.5',
      'core' => '8.x',
      'mtime' => 1563294297,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/migrate/migrate.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'migrate_drupal' => 
    array (
      'name' => 'Migrate Drupal',
      'type' => 'module',
      'description' => 'Contains migrations from older Drupal versions.',
      'package' => 'Migration',
      'version' => '8.7.5',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'drupal:migrate',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/migrate_drupal/migrate_drupal.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'migrate_drupal_multilingual' => 
    array (
      'name' => 'Migrate Drupal Multilingual',
      'type' => 'module',
      'description' => 'Provides a requirement for multilingual migrations.',
      'package' => 'Core (Experimental)',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'migrate_drupal',
      ),
      'mtime' => 1563294297,
      'version' => NULL,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/migrate_drupal_multilingual/migrate_drupal_multilingual.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'migrate_drupal_ui' => 
    array (
      'name' => 'Migrate Drupal UI',
      'type' => 'module',
      'description' => 'Provides a user interface for migrating from older Drupal versions.',
      'package' => 'Migration',
      'version' => '8.7.5',
      'core' => '8.x',
      'configure' => 'migrate_drupal_ui.upgrade',
      'dependencies' => 
      array (
        0 => 'drupal:migrate',
        1 => 'drupal:migrate_drupal',
        2 => 'drupal:dblog',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/migrate_drupal_ui/migrate_drupal_ui.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'node' => 
    array (
      'name' => 'Node',
      'type' => 'module',
      'description' => 'Allows content to be submitted to the site and displayed on pages.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'configure' => 'entity.node_type.collection',
      'dependencies' => 
      array (
        0 => 'drupal:text',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/node/node.info.yml',
      'status' => 1,
      'schema_version' => '8700',
    ),
    'options' => 
    array (
      'name' => 'Options',
      'type' => 'module',
      'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
      'package' => 'Field types',
      'version' => '8.7.5',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'drupal:field',
        1 => 'drupal:text',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/options/options.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'page_cache' => 
    array (
      'name' => 'Internal Page Cache',
      'type' => 'module',
      'description' => 'Caches pages for anonymous users. Use when an external page cache is not available.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'mtime' => 1563294297,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/page_cache/page_cache.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'path' => 
    array (
      'name' => 'Path',
      'type' => 'module',
      'description' => 'Allows users to rename URLs.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'configure' => 'path.admin_overview',
      'mtime' => 1563294297,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/path/path.info.yml',
      'status' => 1,
      'schema_version' => '8200',
    ),
    'quickedit' => 
    array (
      'name' => 'Quick Edit',
      'type' => 'module',
      'description' => 'In-place content editing.',
      'package' => 'Core',
      'core' => '8.x',
      'version' => '8.7.5',
      'dependencies' => 
      array (
        0 => 'drupal:contextual',
        1 => 'drupal:field',
        2 => 'drupal:filter',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/quickedit/quickedit.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'rdf' => 
    array (
      'name' => 'RDF',
      'type' => 'module',
      'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'mtime' => 1563294297,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/rdf/rdf.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'responsive_image' => 
    array (
      'name' => 'Responsive Image',
      'type' => 'module',
      'description' => 'Provides an image formatter and breakpoint mappings to output responsive images using the HTML5 picture tag.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'drupal:breakpoint',
        1 => 'drupal:image',
      ),
      'configure' => 'entity.responsive_image_style.collection',
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/responsive_image/responsive_image.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'rest' => 
    array (
      'name' => 'RESTful Web Services',
      'type' => 'module',
      'description' => 'Exposes entities and other resources as RESTful web API',
      'package' => 'Web services',
      'version' => '8.7.5',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'drupal:serialization',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/rest/rest.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'search' => 
    array (
      'name' => 'Search',
      'type' => 'module',
      'description' => 'Enables site-wide keyword searching.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'configure' => 'entity.search_page.collection',
      'mtime' => 1563294297,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/search/search.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'serialization' => 
    array (
      'name' => 'Serialization',
      'type' => 'module',
      'description' => 'Provides a service for (de)serializing data to/from formats such as JSON and XML',
      'package' => 'Web services',
      'version' => '8.7.5',
      'core' => '8.x',
      'mtime' => 1563294297,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/serialization/serialization.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'settings_tray' => 
    array (
      'name' => 'Settings Tray',
      'type' => 'module',
      'description' => 'Allows users to directly edit the configuration of blocks on the current page.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'drupal:block',
        1 => 'drupal:toolbar',
        2 => 'drupal:contextual',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/settings_tray/settings_tray.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'shortcut' => 
    array (
      'name' => 'Shortcut',
      'type' => 'module',
      'description' => 'Allows users to manage customizable lists of shortcut links.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'configure' => 'entity.shortcut_set.collection',
      'dependencies' => 
      array (
        0 => 'drupal:link',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/shortcut/shortcut.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'simpletest' => 
    array (
      'name' => 'Testing',
      'type' => 'module',
      'description' => 'Provides a framework for unit and functional testing.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'configure' => 'simpletest.settings',
      'mtime' => 1563294297,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/simpletest/simpletest.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'statistics' => 
    array (
      'name' => 'Statistics',
      'type' => 'module',
      'description' => 'Logs content statistics for your site.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'configure' => 'statistics.settings',
      'dependencies' => 
      array (
        0 => 'drupal:node',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/statistics/statistics.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'syslog' => 
    array (
      'name' => 'Syslog',
      'type' => 'module',
      'description' => 'Logs and records system events to syslog.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'configure' => 'system.logging_settings',
      'mtime' => 1563294297,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/syslog/syslog.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'system' => 
    array (
      'name' => 'System',
      'type' => 'module',
      'description' => 'Handles general site configuration for administrators.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'required' => true,
      'configure' => 'system.admin_config_system',
      'mtime' => 1563294297,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/system/system.info.yml',
      'status' => 1,
      'schema_version' => '8702',
    ),
    'taxonomy' => 
    array (
      'name' => 'Taxonomy',
      'type' => 'module',
      'description' => 'Enables the categorization of content.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'drupal:node',
        1 => 'drupal:text',
      ),
      'configure' => 'entity.taxonomy_vocabulary.collection',
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/taxonomy/taxonomy.info.yml',
      'status' => 1,
      'schema_version' => '8701',
    ),
    'telephone' => 
    array (
      'name' => 'Telephone',
      'type' => 'module',
      'description' => 'Defines a field type for telephone numbers.',
      'package' => 'Field types',
      'version' => '8.7.5',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'drupal:field',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/telephone/telephone.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'text' => 
    array (
      'name' => 'Text',
      'type' => 'module',
      'description' => 'Defines simple text field types.',
      'package' => 'Field types',
      'version' => '8.7.5',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'drupal:field',
        1 => 'drupal:filter',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/text/text.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'toolbar' => 
    array (
      'name' => 'Toolbar',
      'type' => 'module',
      'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
      'core' => '8.x',
      'package' => 'Core',
      'version' => '8.7.5',
      'dependencies' => 
      array (
        0 => 'drupal:breakpoint',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/toolbar/toolbar.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'tour' => 
    array (
      'name' => 'Tour',
      'type' => 'module',
      'description' => 'Provides guided tours.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'mtime' => 1563294297,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/tour/tour.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'tracker' => 
    array (
      'name' => 'Activity Tracker',
      'type' => 'module',
      'description' => 'Enables tracking of recent content for users.',
      'dependencies' => 
      array (
        0 => 'drupal:node',
        1 => 'drupal:comment',
      ),
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/tracker/tracker.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'update' => 
    array (
      'name' => 'Update Manager',
      'type' => 'module',
      'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
      'version' => '8.7.5',
      'package' => 'Core',
      'core' => '8.x',
      'configure' => 'update.settings',
      'dependencies' => 
      array (
        0 => 'drupal:file',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/update/update.info.yml',
      'status' => 1,
      'schema_version' => '8001',
    ),
    'user' => 
    array (
      'name' => 'User',
      'type' => 'module',
      'description' => 'Manages the user registration and login system.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'required' => true,
      'configure' => 'user.admin_index',
      'dependencies' => 
      array (
        0 => 'drupal:system',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/user/user.info.yml',
      'status' => 1,
      'schema_version' => '8100',
    ),
    'views' => 
    array (
      'name' => 'Views',
      'type' => 'module',
      'description' => 'Create customized lists and queries from your database.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'drupal:filter',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/views/views.info.yml',
      'status' => 1,
      'schema_version' => '8500',
    ),
    'views_ui' => 
    array (
      'name' => 'Views UI',
      'type' => 'module',
      'description' => 'Administrative interface for Views.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'configure' => 'entity.view.collection',
      'dependencies' => 
      array (
        0 => 'drupal:views',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/views_ui/views_ui.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'workflows' => 
    array (
      'name' => 'Workflows',
      'type' => 'module',
      'description' => 'Provides UI and API for managing workflows. This module can be used with the Content moderation module to add highly customizable workflows to content.',
      'version' => '8.7.5',
      'core' => '8.x',
      'package' => 'Core',
      'configure' => 'entity.workflow.collection',
      'mtime' => 1563294297,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/workflows/workflows.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'workspaces' => 
    array (
      'name' => 'Workspaces',
      'type' => 'module',
      'description' => 'Allows users to stage content or preview a full site by using multiple workspaces on a single site.',
      'version' => '8.7.5',
      'core' => '8.x',
      'package' => 'Core (Experimental)',
      'configure' => 'entity.workspace.collection',
      'dependencies' => 
      array (
        0 => 'drupal:user',
      ),
      'mtime' => 1563294297,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/core/modules/workspaces/workspaces.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'ctools' => 
    array (
      'name' => 'Chaos Tools',
      'type' => 'module',
      'description' => 'Provides a number of utility and helper APIs for Drupal developers and site builders.',
      'package' => 'Chaos tool suite',
      'dependencies' => 
      array (
        0 => 'drupal:system (>=8.5)',
      ),
      'version' => '8.x-3.2',
      'core' => '8.x',
      'project' => 'ctools',
      'datestamp' => 1550728390,
      'mtime' => 1550728390,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/modules/contrib/ctools/ctools.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'ctools_block' => 
    array (
      'name' => 'Chaos Tools Blocks',
      'type' => 'module',
      'description' => 'Provides improvements to blocks that will one day be added to Drupal core.',
      'package' => 'Chaos tool suite (Experimental)',
      'dependencies' => 
      array (
        0 => 'ctools:ctools',
      ),
      'version' => '8.x-3.2',
      'core' => '8.x',
      'project' => 'ctools',
      'datestamp' => 1550728390,
      'mtime' => 1550728390,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/modules/contrib/ctools/modules/ctools_block/ctools_block.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'ctools_entity_mask' => 
    array (
      'name' => 'Entity Mask',
      'type' => 'module',
      'description' => 'Allows an entity type to borrow the fields and display configuration of another entity type.',
      'version' => '8.x-3.2',
      'core' => '8.x',
      'project' => 'ctools',
      'datestamp' => 1550728390,
      'mtime' => 1550728390,
      'dependencies' => 
      array (
      ),
      'package' => 'Other',
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/modules/contrib/ctools/modules/ctools_entity_mask/ctools_entity_mask.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'ctools_views' => 
    array (
      'name' => 'Chaos Tools Views',
      'type' => 'module',
      'description' => 'A set of improvements to the core Views code that allows for greater control over Blocks.',
      'package' => 'Chaos tool suite (Experimental)',
      'dependencies' => 
      array (
        0 => 'drupal:block',
        1 => 'drupal:views',
      ),
      'version' => '8.x-3.2',
      'core' => '8.x',
      'project' => 'ctools',
      'datestamp' => 1550728390,
      'mtime' => 1550728390,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/modules/contrib/ctools/modules/ctools_views/ctools_views.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'pathauto' => 
    array (
      'name' => 'Pathauto',
      'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
      'type' => 'module',
      'dependencies' => 
      array (
        0 => 'ctools:ctools',
        1 => 'drupal:path',
        2 => 'drupal:system (>=8.5)',
        3 => 'token:token',
      ),
      'configure' => 'entity.pathauto_pattern.collection',
      'recommends' => 
      array (
        0 => 'redirect:redirect',
      ),
      'version' => '8.x-1.4',
      'core' => '8.x',
      'project' => 'pathauto',
      'datestamp' => 1554239894,
      'mtime' => 1554239894,
      'package' => 'Other',
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/modules/contrib/pathauto/pathauto.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'sw_register' => 
    array (
      'name' => 'Service Worker Registration',
      'type' => 'module',
      'description' => 'Registers a Service Worker script.',
      'package' => 'PWA',
      'configure' => 'sw_register.settings_form',
      'version' => '8.x-1.0',
      'core' => '8.x',
      'project' => 'sw_register',
      'datestamp' => 1513585087,
      'mtime' => 1513585087,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/modules/contrib/sw_register/sw_register.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'token' => 
    array (
      'type' => 'module',
      'name' => 'Token',
      'description' => 'Provides a user interface for the Token API and some missing core tokens.',
      'dependencies' => 
      array (
        0 => 'drupal:system (>= 8.5)',
      ),
      'version' => '8.x-1.5',
      'core' => '8.x',
      'project' => 'token',
      'datestamp' => 1537557488,
      'mtime' => 1537557488,
      'package' => 'Other',
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/modules/contrib/token/token.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'vem_migrate_oembed' => 
    array (
      'name' => 'Video Embed Media - Migrate to core oEmbed',
      'type' => 'module',
      'description' => 'Provides a drush command to migrate to cores oEmbed',
      'package' => 'Video Embed Field',
      'dependencies' => 
      array (
        0 => 'drupal:media (>= 8.6)',
        1 => 'video_embed_field:video_embed_media',
      ),
      'version' => '8.x-2.2',
      'core' => '8.x',
      'project' => 'video_embed_field',
      'datestamp' => 1564103587,
      'mtime' => 1564103587,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/modules/contrib/video_embed_field/modules/video_embed_media/modules/vem_migrate_oembed/vem_migrate_oembed.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'video_embed_media' => 
    array (
      'name' => 'Video Embed Media',
      'type' => 'module',
      'description' => 'Integrates video_embed_field with the Media module, creating a new media type tailored to display embedded videos. Useful for websites which are using the media suite of modules.',
      'package' => 'Video Embed Field',
      'dependencies' => 
      array (
        0 => 'drupal:media (>= 8.4)',
        1 => 'video_embed_field:video_embed_field',
      ),
      'version' => '8.x-2.2',
      'core' => '8.x',
      'project' => 'video_embed_field',
      'datestamp' => 1564103587,
      'mtime' => 1564103587,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/modules/contrib/video_embed_field/modules/video_embed_media/video_embed_media.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'video_embed_wysiwyg' => 
    array (
      'name' => 'Video Embed WYSIWYG',
      'type' => 'module',
      'description' => 'Integrates video_embed_field directly into ckeditor. Useful for websites not using the media suite of modules that need WYSIWYG support.',
      'package' => 'Video Embed Field',
      'dependencies' => 
      array (
        0 => 'drupal:field',
        1 => 'drupal:ckeditor',
        2 => 'video_embed_field:video_embed_field',
      ),
      'version' => '8.x-2.2',
      'core' => '8.x',
      'project' => 'video_embed_field',
      'datestamp' => 1564103587,
      'mtime' => 1564103587,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/modules/contrib/video_embed_field/modules/video_embed_wysiwyg/video_embed_wysiwyg.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'video_embed_field' => 
    array (
      'name' => 'Video Embed Field',
      'type' => 'module',
      'description' => 'Provides a field type for displaying videos from 3rd party providers such as YouTube and Vimeo.',
      'package' => 'Video Embed Field',
      'dependencies' => 
      array (
        0 => 'drupal:field',
        1 => 'drupal:image',
        2 => 'drupal:system (>=8.7.0)',
      ),
      'test_dependencies' => 
      array (
        0 => 'media_entity:media_entity',
        1 => 'media_entity_embeddable_video:media_entity_embeddable_video',
        2 => 'colorbox:colorbox',
      ),
      'version' => '8.x-2.2',
      'core' => '8.x',
      'project' => 'video_embed_field',
      'datestamp' => 1564103587,
      'mtime' => 1564103587,
      'php' => '5.5.9',
      'filename' => '/private/var/aegir/platforms/projectd8/modules/contrib/video_embed_field/video_embed_field.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'standard' => 
    array (
      'name' => 'Standard',
      'type' => 'profile',
      'description' => 'Install with commonly used features pre-configured.',
      'version' => '8.7.5',
      'core' => '8.x',
      'install' => 
      array (
        0 => 'node',
        1 => 'history',
        2 => 'block',
        3 => 'breakpoint',
        4 => 'ckeditor',
        5 => 'color',
        6 => 'config',
        7 => 'comment',
        8 => 'contextual',
        9 => 'contact',
        10 => 'menu_link_content',
        11 => 'datetime',
        12 => 'block_content',
        13 => 'quickedit',
        14 => 'editor',
        15 => 'help',
        16 => 'image',
        17 => 'menu_ui',
        18 => 'options',
        19 => 'path',
        20 => 'page_cache',
        21 => 'dynamic_page_cache',
        22 => 'big_pipe',
        23 => 'taxonomy',
        24 => 'dblog',
        25 => 'search',
        26 => 'shortcut',
        27 => 'toolbar',
        28 => 'field_ui',
        29 => 'file',
        30 => 'rdf',
        31 => 'views',
        32 => 'views_ui',
        33 => 'tour',
        34 => 'automated_cron',
      ),
      'themes' => 
      array (
        0 => 'bartik',
        1 => 'seven',
      ),
      'mtime' => 1563294297,
      'dependencies' => 
      array (
      ),
      'package' => 'Other',
      'php' => '5.5.9',
      'hidden' => true,
      'required' => true,
      'distribution' => 
      array (
        'name' => 'Drupal',
      ),
      'filename' => '/private/var/aegir/platforms/projectd8/core/profiles/standard/standard.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
  ),
  'themes' => 
  array (
    'bartik' => 
    array (
      'name' => 'Bartik',
      'type' => 'theme',
      'base theme' => 'classy',
      'description' => 'A flexible, recolorable theme with many regions and a responsive, mobile-first layout.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'libraries' => 
      array (
        0 => 'bartik/global-styling',
      ),
      'ckeditor_stylesheets' => 
      array (
        0 => 'css/base/elements.css',
        1 => 'css/components/captions.css',
        2 => 'css/components/table.css',
        3 => 'css/components/text-formatted.css',
      ),
      'regions' => 
      array (
        'header' => 'Header',
        'primary_menu' => 'Primary menu',
        'secondary_menu' => 'Secondary menu',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
        'highlighted' => 'Highlighted',
        'featured_top' => 'Featured top',
        'breadcrumb' => 'Breadcrumb',
        'content' => 'Content',
        'sidebar_first' => 'Sidebar first',
        'sidebar_second' => 'Sidebar second',
        'featured_bottom_first' => 'Featured bottom first',
        'featured_bottom_second' => 'Featured bottom second',
        'featured_bottom_third' => 'Featured bottom third',
        'footer_first' => 'Footer first',
        'footer_second' => 'Footer second',
        'footer_third' => 'Footer third',
        'footer_fourth' => 'Footer fourth',
        'footer_fifth' => 'Footer fifth',
      ),
      'mtime' => 1563294297,
      'engine' => 'twig',
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'core/themes/bartik/screenshot.png',
      'php' => '5.5.9',
      'libraries_extend' => 
      array (
      ),
      'libraries_override' => 
      array (
      ),
      'dependencies' => 
      array (
        0 => 'classy',
      ),
      'regions_hidden' => 
      array (
        0 => 'page_top',
        1 => 'page_bottom',
      ),
      'filename' => '/private/var/aegir/platforms/projectd8/core/themes/bartik/bartik.info.yml',
      'status' => 1,
    ),
    'classy' => 
    array (
      'name' => 'Classy',
      'type' => 'theme',
      'description' => 'A base theme with sensible default CSS classes added. Learn how to use Classy as a base theme in the <a href="https://www.drupal.org/docs/8/theming">Drupal 8 Theming Guide</a>.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'hidden' => true,
      'libraries' => 
      array (
        0 => 'classy/base',
        1 => 'classy/messages',
        2 => 'core/normalize',
      ),
      'libraries-extend' => 
      array (
        'user/drupal.user' => 
        array (
          0 => 'classy/user',
        ),
        'core/drupal.dropbutton' => 
        array (
          0 => 'classy/dropbutton',
        ),
        'core/drupal.dialog' => 
        array (
          0 => 'classy/dialog',
        ),
        'file/drupal.file' => 
        array (
          0 => 'classy/file',
        ),
        'core/drupal.progress' => 
        array (
          0 => 'classy/progress',
        ),
      ),
      'mtime' => 1563294297,
      'engine' => 'twig',
      'base theme' => 'stable',
      'regions' => 
      array (
        'sidebar_first' => 'Left sidebar',
        'sidebar_second' => 'Right sidebar',
        'content' => 'Content',
        'header' => 'Header',
        'primary_menu' => 'Primary menu',
        'secondary_menu' => 'Secondary menu',
        'footer' => 'Footer',
        'highlighted' => 'Highlighted',
        'help' => 'Help',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
        'breadcrumb' => 'Breadcrumb',
      ),
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'core/themes/classy/screenshot.png',
      'php' => '5.5.9',
      'libraries_extend' => 
      array (
      ),
      'libraries_override' => 
      array (
      ),
      'dependencies' => 
      array (
        0 => 'stable',
      ),
      'regions_hidden' => 
      array (
        0 => 'page_top',
        1 => 'page_bottom',
      ),
      'filename' => '/private/var/aegir/platforms/projectd8/core/themes/classy/classy.info.yml',
      'status' => 1,
    ),
    'seven' => 
    array (
      'name' => 'Seven',
      'type' => 'theme',
      'base theme' => 'classy',
      'description' => 'The default administration theme for Drupal 8 was designed with clean lines, simple blocks, and sans-serif font to emphasize the tools and tasks at hand.',
      'alt text' => 'Default administration theme for Drupal 8 with simple blocks and clean lines.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'libraries' => 
      array (
        0 => 'seven/global-styling',
      ),
      'libraries-override' => 
      array (
        'system/base' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              '/core/themes/stable/css/system/components/system-status-counter.css' => 'css/components/system-status-counter.css',
              '/core/themes/stable/css/system/components/system-status-report-counters.css' => 'css/components/system-status-report-counters.css',
              '/core/themes/stable/css/system/components/system-status-report-general-info.css' => 'css/components/system-status-report-general-info.css',
            ),
          ),
        ),
        'core/drupal.vertical-tabs' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              '/core/themes/stable/css/core/vertical-tabs.css' => false,
            ),
          ),
        ),
        'core/jquery.ui' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'assets/vendor/jquery.ui/themes/base/theme.css' => false,
            ),
          ),
        ),
        'core/jquery.ui.dialog' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'assets/vendor/jquery.ui/themes/base/dialog.css' => false,
            ),
          ),
        ),
        'classy/dialog' => 'seven/seven.drupal.dialog',
        'classy/base' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/components/details.css' => false,
            ),
          ),
        ),
      ),
      'libraries-extend' => 
      array (
        'core/ckeditor' => 
        array (
          0 => 'seven/ckeditor-dialog',
        ),
        'core/drupal.vertical-tabs' => 
        array (
          0 => 'seven/vertical-tabs',
        ),
        'core/jquery.ui' => 
        array (
          0 => 'seven/seven.jquery.ui',
        ),
        'tour/tour-styling' => 
        array (
          0 => 'seven/tour-styling',
        ),
      ),
      'quickedit_stylesheets' => 
      array (
        0 => 'css/components/quickedit.css',
      ),
      'regions' => 
      array (
        'header' => 'Header',
        'pre_content' => 'Pre-content',
        'breadcrumb' => 'Breadcrumb',
        'highlighted' => 'Highlighted',
        'help' => 'Help',
        'content' => 'Content',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
        'sidebar_first' => 'First sidebar',
      ),
      'regions_hidden' => 
      array (
        0 => 'sidebar_first',
        1 => 'page_top',
        2 => 'page_bottom',
      ),
      'mtime' => 1563294297,
      'engine' => 'twig',
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'core/themes/seven/screenshot.png',
      'php' => '5.5.9',
      'libraries_extend' => 
      array (
      ),
      'libraries_override' => 
      array (
      ),
      'dependencies' => 
      array (
        0 => 'classy',
      ),
      'filename' => '/private/var/aegir/platforms/projectd8/core/themes/seven/seven.info.yml',
      'status' => 1,
    ),
    'stable' => 
    array (
      'name' => 'Stable',
      'type' => 'theme',
      'description' => 'A default base theme using Drupal 8.0.0\'s core markup and CSS.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'hidden' => true,
      'libraries-override' => 
      array (
        'block/drupal.block.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/block.admin.css' => 'css/block/block.admin.css',
            ),
          ),
        ),
        'ckeditor/drupal.ckeditor' => 
        array (
          'css' => 
          array (
            'state' => 
            array (
              'css/ckeditor.css' => 'css/ckeditor/ckeditor.css',
            ),
          ),
        ),
        'ckeditor/drupal.ckeditor.plugins.drupalimagecaption' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/plugins/drupalimagecaption/ckeditor.drupalimagecaption.css' => 'css/ckeditor/plugins/drupalimagecaption/ckeditor.drupalimagecaption.css',
            ),
          ),
        ),
        'ckeditor/drupal.ckeditor.plugins.language' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/plugins/language/ckeditor.language.css' => 'css/ckeditor/plugins/language/ckeditor.language.css',
            ),
          ),
        ),
        'ckeditor/drupal.ckeditor.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/ckeditor.admin.css' => 'css/ckeditor/ckeditor.admin.css',
            ),
          ),
        ),
        'color/admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/color.admin.css' => 'css/color/color.admin.css',
            ),
          ),
        ),
        'config_translation/drupal.config_translation.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/config_translation.admin.css' => 'css/config_translation/config_translation.admin.css',
            ),
          ),
        ),
        'content_translation/drupal.content_translation.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/content_translation.admin.css' => 'css/content_translation/content_translation.admin.css',
            ),
          ),
        ),
        'content_moderation/content_moderation' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/content_moderation.module.css' => 'css/content_moderation/content_moderation.module.css',
            ),
            'theme' => 
            array (
              'css/content_moderation.theme.css' => 'css/content_moderation/content_moderation.theme.css',
            ),
          ),
        ),
        'contextual/drupal.contextual-links' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/contextual.module.css' => 'css/contextual/contextual.module.css',
            ),
            'theme' => 
            array (
              'css/contextual.theme.css' => 'css/contextual/contextual.theme.css',
              'css/contextual.icons.theme.css' => 'css/contextual/contextual.icons.theme.css',
            ),
          ),
        ),
        'contextual/drupal.contextual-toolbar' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/contextual.toolbar.css' => 'css/contextual/contextual.toolbar.css',
            ),
          ),
        ),
        'core/drupal.dialog.off_canvas' => 
        array (
          'css' => 
          array (
            'base' => 
            array (
              'misc/dialog/off-canvas.reset.css' => 'css/core/dialog/off-canvas.reset.css',
              'misc/dialog/off-canvas.base.css' => 'css/core/dialog/off-canvas.base.css',
              'misc/dialog/off-canvas.css' => 'css/core/dialog/off-canvas.css',
              'misc/dialog/off-canvas.theme.css' => 'css/core/dialog/off-canvas.theme.css',
            ),
            'component' => 
            array (
              'misc/dialog/off-canvas.motion.css' => 'css/core/dialog/off-canvas.motion.css',
              'misc/dialog/off-canvas.button.css' => 'css/core/dialog/off-canvas.button.css',
              'misc/dialog/off-canvas.form.css' => 'css/core/dialog/off-canvas.form.css',
              'misc/dialog/off-canvas.table.css' => 'css/core/dialog/off-canvas.table.css',
              'misc/dialog/off-canvas.details.css' => 'css/core/dialog/off-canvas.details.css',
              'misc/dialog/off-canvas.tabledrag.css' => 'css/core/dialog/off-canvas.tabledrag.css',
              'misc/dialog/off-canvas.dropbutton.css' => 'css/core/dialog/off-canvas.dropbutton.css',
              'misc/dialog/off-canvas.layout.css' => 'css/core/dialog/off-canvas.layout.css',
            ),
          ),
        ),
        'core/drupal.dropbutton' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'misc/dropbutton/dropbutton.css' => 'css/core/dropbutton/dropbutton.css',
            ),
          ),
        ),
        'core/drupal.vertical-tabs' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'misc/vertical-tabs.css' => 'css/core/vertical-tabs.css',
            ),
          ),
        ),
        'dblog/drupal.dblog' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/dblog.module.css' => 'css/dblog/dblog.module.css',
            ),
          ),
        ),
        'field_ui/drupal.field_ui' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/field_ui.admin.css' => 'css/field_ui/field_ui.admin.css',
            ),
          ),
        ),
        'file/drupal.file' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/file.admin.css' => 'css/file/file.admin.css',
            ),
          ),
        ),
        'filter/drupal.filter.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/filter.admin.css' => 'css/filter/filter.admin.css',
            ),
          ),
        ),
        'filter/drupal.filter' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/filter.admin.css' => 'css/filter/filter.admin.css',
            ),
          ),
        ),
        'filter/caption' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/filter.caption.css' => 'css/filter/filter.caption.css',
            ),
          ),
        ),
        'image/admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/image.admin.css' => 'css/image/image.admin.css',
            ),
          ),
        ),
        'image/quickedit.inPlaceEditor.image' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/editors/image.css' => 'css/image/editors/image.css',
            ),
            'theme' => 
            array (
              'css/editors/image.theme.css' => 'css/image/editors/image.theme.css',
            ),
          ),
        ),
        'language/drupal.language.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/language.admin.css' => 'css/language/language.admin.css',
            ),
          ),
        ),
        'layout_builder/drupal.layout_builder' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/layout-builder.css' => 'css/layout_builder/layout-builder.css',
            ),
          ),
        ),
        'locale/drupal.locale.admin' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/locale.admin.css' => 'css/locale/locale.admin.css',
            ),
          ),
        ),
        'media/oembed.formatter' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/oembed.formatter.css' => 'css/media/oembed.formatter.css',
            ),
          ),
        ),
        'media/oembed.frame' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/oembed.frame.css' => 'css/media/oembed.frame.css',
            ),
          ),
        ),
        'menu_ui/drupal.menu_ui.adminforms' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/menu_ui.admin.css' => 'css/menu_ui/menu_ui.admin.css',
            ),
          ),
        ),
        'migrate_drupal_ui/base' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/components/upgrade-analysis-report-tables.css' => 'css/migrate_drupal_ui/components/upgrade-analysis-report-tables.css',
            ),
          ),
        ),
        'node/drupal.node' => 
        array (
          'css' => 
          array (
            'layout' => 
            array (
              'css/node.module.css' => 'css/node/node.module.css',
            ),
          ),
        ),
        'node/drupal.node.preview' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/node.preview.css' => 'css/node/node.preview.css',
            ),
          ),
        ),
        'node/form' => 
        array (
          'css' => 
          array (
            'layout' => 
            array (
              'css/node.module.css' => 'css/node/node.module.css',
            ),
          ),
        ),
        'node/drupal.node.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/node.admin.css' => 'css/node/node.admin.css',
            ),
          ),
        ),
        'quickedit/quickedit' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/quickedit.module.css' => 'css/quickedit/quickedit.module.css',
            ),
            'theme' => 
            array (
              'css/quickedit.theme.css' => 'css/quickedit/quickedit.theme.css',
              'css/quickedit.icons.theme.css' => 'css/quickedit/quickedit.icons.theme.css',
            ),
          ),
        ),
        'settings_tray/drupal.settings_tray' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/settings_tray.module.css' => 'css/settings_tray/settings_tray.module.css',
              'css/settings_tray.motion.css' => 'css/settings_tray/settings_tray.motion.css',
              'css/settings_tray.toolbar.css' => 'css/settings_tray/settings_tray.toolbar.css',
            ),
            'theme' => 
            array (
              'css/settings_tray.theme.css' => 'css/settings_tray/settings_tray.theme.css',
            ),
          ),
        ),
        'shortcut/drupal.shortcut' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/shortcut.theme.css' => 'css/shortcut/shortcut.theme.css',
              'css/shortcut.icons.theme.css' => 'css/shortcut/shortcut.icons.theme.css',
            ),
          ),
        ),
        'simpletest/drupal.simpletest' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/simpletest.module.css' => 'css/simpletest/simpletest.module.css',
            ),
          ),
        ),
        'system/base' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/components/ajax-progress.module.css' => 'css/system/components/ajax-progress.module.css',
              'css/components/align.module.css' => 'css/system/components/align.module.css',
              'css/components/autocomplete-loading.module.css' => 'css/system/components/autocomplete-loading.module.css',
              'css/components/fieldgroup.module.css' => 'css/system/components/fieldgroup.module.css',
              'css/components/container-inline.module.css' => 'css/system/components/container-inline.module.css',
              'css/components/clearfix.module.css' => 'css/system/components/clearfix.module.css',
              'css/components/details.module.css' => 'css/system/components/details.module.css',
              'css/components/hidden.module.css' => 'css/system/components/hidden.module.css',
              'css/components/item-list.module.css' => 'css/system/components/item-list.module.css',
              'css/components/js.module.css' => 'css/system/components/js.module.css',
              'css/components/nowrap.module.css' => 'css/system/components/nowrap.module.css',
              'css/components/position-container.module.css' => 'css/system/components/position-container.module.css',
              'css/components/progress.module.css' => 'css/system/components/progress.module.css',
              'css/components/reset-appearance.module.css' => 'css/system/components/reset-appearance.module.css',
              'css/components/resize.module.css' => 'css/system/components/resize.module.css',
              'css/components/sticky-header.module.css' => 'css/system/components/sticky-header.module.css',
              'css/components/system-status-counter.css' => 'css/system/components/system-status-counter.css',
              'css/components/system-status-report-counters.css' => 'css/system/components/system-status-report-counters.css',
              'css/components/system-status-report-general-info.css' => 'css/system/components/system-status-report-general-info.css',
              'css/components/tabledrag.module.css' => 'css/system/components/tabledrag.module.css',
              'css/components/tablesort.module.css' => 'css/system/components/tablesort.module.css',
              'css/components/tree-child.module.css' => 'css/system/components/tree-child.module.css',
            ),
          ),
        ),
        'system/admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/system.admin.css' => 'css/system/system.admin.css',
            ),
          ),
        ),
        'system/maintenance' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/system.maintenance.css' => 'css/system/system.maintenance.css',
            ),
          ),
        ),
        'system/diff' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/system.diff.css' => 'css/system/system.diff.css',
            ),
          ),
        ),
        'taxonomy/drupal.taxonomy' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/taxonomy.theme.css' => 'css/taxonomy/taxonomy.theme.css',
            ),
          ),
        ),
        'toolbar/toolbar' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/toolbar.module.css' => 'css/toolbar/toolbar.module.css',
            ),
            'theme' => 
            array (
              'css/toolbar.theme.css' => 'css/toolbar/toolbar.theme.css',
              'css/toolbar.icons.theme.css' => 'css/toolbar/toolbar.icons.theme.css',
            ),
          ),
        ),
        'toolbar/toolbar.menu' => 
        array (
          'css' => 
          array (
            'state' => 
            array (
              'css/toolbar.menu.css' => 'css/toolbar/toolbar.menu.css',
            ),
          ),
        ),
        'tour/tour-styling' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/tour.module.css' => 'css/tour/tour.module.css',
            ),
          ),
        ),
        'update/drupal.update.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/update.admin.theme.css' => 'css/update/update.admin.theme.css',
            ),
          ),
        ),
        'user/drupal.user' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/user.module.css' => 'css/user/user.module.css',
            ),
          ),
        ),
        'user/drupal.user.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/user.admin.css' => 'css/user/user.admin.css',
            ),
          ),
        ),
        'user/drupal.user.icons' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/user.icons.admin.css' => 'css/user/user.icons.admin.css',
            ),
          ),
        ),
        'views/views.module' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/views.module.css' => 'css/views/views.module.css',
            ),
          ),
        ),
        'views_ui/admin.styling' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/views_ui.admin.css' => 'css/views_ui/views_ui.admin.css',
            ),
            'theme' => 
            array (
              'css/views_ui.admin.theme.css' => 'css/views_ui/views_ui.admin.theme.css',
              'css/views_ui.contextual.css' => 'css/views_ui/views_ui.contextual.css',
            ),
          ),
        ),
      ),
      'mtime' => 1563294297,
      'engine' => 'twig',
      'regions' => 
      array (
        'sidebar_first' => 'Left sidebar',
        'sidebar_second' => 'Right sidebar',
        'content' => 'Content',
        'header' => 'Header',
        'primary_menu' => 'Primary menu',
        'secondary_menu' => 'Secondary menu',
        'footer' => 'Footer',
        'highlighted' => 'Highlighted',
        'help' => 'Help',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
        'breadcrumb' => 'Breadcrumb',
      ),
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'core/themes/stable/screenshot.png',
      'php' => '5.5.9',
      'libraries' => 
      array (
      ),
      'libraries_extend' => 
      array (
      ),
      'libraries_override' => 
      array (
      ),
      'regions_hidden' => 
      array (
        0 => 'page_top',
        1 => 'page_bottom',
      ),
      'filename' => '/private/var/aegir/platforms/projectd8/core/themes/stable/stable.info.yml',
      'status' => 1,
    ),
    'stark' => 
    array (
      'name' => 'Stark',
      'type' => 'theme',
      'description' => 'An intentionally plain theme with no styling to demonstrate default Drupal’s HTML and CSS. Learn how to build a custom theme from Stark in the <a href="https://www.drupal.org/docs/8/theming">Theming Guide</a>.',
      'package' => 'Core',
      'version' => '8.7.5',
      'core' => '8.x',
      'mtime' => 1563294297,
      'engine' => 'twig',
      'regions' => 
      array (
        'sidebar_first' => 'Left sidebar',
        'sidebar_second' => 'Right sidebar',
        'content' => 'Content',
        'header' => 'Header',
        'primary_menu' => 'Primary menu',
        'secondary_menu' => 'Secondary menu',
        'footer' => 'Footer',
        'highlighted' => 'Highlighted',
        'help' => 'Help',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
        'breadcrumb' => 'Breadcrumb',
      ),
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'core/themes/stark/screenshot.png',
      'php' => '5.5.9',
      'libraries' => 
      array (
      ),
      'libraries_extend' => 
      array (
      ),
      'libraries_override' => 
      array (
      ),
      'regions_hidden' => 
      array (
        0 => 'page_top',
        1 => 'page_bottom',
      ),
      'filename' => '/private/var/aegir/platforms/projectd8/core/themes/stark/stark.info.yml',
      'status' => 0,
    ),
    'bootstrap' => 
    array (
      'type' => 'theme',
      'name' => 'Bootstrap',
      'description' => 'Built to use Bootstrap, a sleek, intuitive, and powerful front-end framework for faster and easier web development.',
      'package' => 'Bootstrap',
      'regions' => 
      array (
        'navigation' => 'Navigation',
        'navigation_collapsible' => 'Navigation (Collapsible)',
        'header' => 'Top Bar',
        'highlighted' => 'Highlighted',
        'help' => 'Help',
        'content' => 'Content',
        'sidebar_first' => 'Primary',
        'sidebar_second' => 'Secondary',
        'footer' => 'Footer',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
      ),
      'libraries' => 
      array (
        0 => 'bootstrap/theme',
      ),
      'libraries-extend' => 
      array (
        'core/drupal.ajax' => 
        array (
          0 => 'bootstrap/drupal.ajax',
        ),
        'core/drupal.autocomplete' => 
        array (
          0 => 'bootstrap/drupal.autocomplete',
        ),
        'core/drupal.dialog.ajax' => 
        array (
          0 => 'bootstrap/drupal.dialog.ajax',
        ),
        'core/drupal.form' => 
        array (
          0 => 'bootstrap/drupal.form',
        ),
        'core/drupal.message' => 
        array (
          0 => 'bootstrap/drupal.message',
        ),
        'core/drupal.progress' => 
        array (
          0 => 'bootstrap/drupal.progress',
        ),
        'core/drupal.states' => 
        array (
          0 => 'bootstrap/drupal.states',
        ),
        'core/drupal.tabledrag' => 
        array (
          0 => 'bootstrap/drupal.tabledrag',
        ),
        'core/drupal.tableheader' => 
        array (
          0 => 'bootstrap/drupal.tableheader',
        ),
        'image_widget_crop/cropper.integration' => 
        array (
          0 => 'bootstrap/image_widget_crop',
        ),
        'views/views.ajax' => 
        array (
          0 => 'bootstrap/views.ajax',
        ),
      ),
      'libraries-override' => 
      array (
        'core/drupal.batch' => 'bootstrap/drupal.batch',
        'core/drupal.dropbutton' => 'bootstrap/dropdown',
        'core/drupal.vertical-tabs' => 'bootstrap/drupal.vertical-tabs',
        'filter/drupal.filter' => 'bootstrap/drupal.filter',
        'system/admin' => false,
        'text/drupal.text' => 'bootstrap/drupal.text',
        'system/base' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/components/ajax-progress.module.css' => false,
              'css/components/autocomplete-loading.module.css' => false,
              'css/components/tabledrag.module.css' => false,
            ),
          ),
        ),
        'file/drupal.file' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/file.admin.css' => false,
            ),
          ),
        ),
        'filter/drupal.filter.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/filter.admin.css' => false,
            ),
          ),
        ),
        'node/drupal.node.preview' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/node.preview.css' => false,
            ),
          ),
        ),
      ),
      'version' => '8.x-3.20',
      'core' => '8.x',
      'project' => 'bootstrap',
      'datestamp' => 1561051706,
      'mtime' => 1561051706,
      'engine' => 'twig',
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'themes/contrib/bootstrap/screenshot.png',
      'php' => '5.5.9',
      'libraries_extend' => 
      array (
      ),
      'libraries_override' => 
      array (
      ),
      'regions_hidden' => 
      array (
        0 => 'page_top',
        1 => 'page_bottom',
      ),
      'filename' => '/private/var/aegir/platforms/projectd8/themes/contrib/bootstrap/bootstrap.info.yml',
      'status' => 0,
    ),
    'react_basic' => 
    array (
      'name' => 'React -- Basic Hello World',
      'type' => 'theme',
      'description' => 'A theme that loads React JavaScript libraries, and a React application.',
      'core' => '8.x',
      'base theme' => 'seven',
      'mtime' => 1561136783,
      'engine' => 'twig',
      'regions' => 
      array (
        'sidebar_first' => 'Left sidebar',
        'sidebar_second' => 'Right sidebar',
        'content' => 'Content',
        'header' => 'Header',
        'primary_menu' => 'Primary menu',
        'secondary_menu' => 'Secondary menu',
        'footer' => 'Footer',
        'highlighted' => 'Highlighted',
        'help' => 'Help',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
        'breadcrumb' => 'Breadcrumb',
      ),
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'themes/custom/react_basic/screenshot.png',
      'php' => '5.5.9',
      'libraries' => 
      array (
      ),
      'libraries_extend' => 
      array (
      ),
      'libraries_override' => 
      array (
      ),
      'dependencies' => 
      array (
        0 => 'seven',
      ),
      'regions_hidden' => 
      array (
        0 => 'page_top',
        1 => 'page_bottom',
      ),
      'filename' => '/private/var/aegir/platforms/projectd8/themes/custom/react_basic/react_basic.info.yml',
      'status' => 0,
    ),
    'strapboot' => 
    array (
      'core' => '8.x',
      'type' => 'theme',
      'base theme' => 'bootstrap',
      'name' => 'Strap boot',
      'description' => 'A Drupal Bootstrap 3 based sub-theme.',
      'package' => 'Bootstrap',
      'regions' => 
      array (
        'navigation' => 'Navigation',
        'navigation_collapsible' => 'Navigation (Collapsible)',
        'header' => 'Top Bar',
        'highlighted' => 'Highlighted',
        'help' => 'Help',
        'content' => 'Content',
        'sidebar_first' => 'Primary',
        'sidebar_second' => 'Secondary',
        'footer' => 'Footer',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
      ),
      'libraries-extend' => 
      array (
        'bootstrap/framework' => 
        array (
          0 => 'strapboot/framework',
        ),
      ),
      'mtime' => 1563334973,
      'engine' => 'twig',
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'themes/custom/strapboot/screenshot.png',
      'php' => '5.5.9',
      'libraries' => 
      array (
      ),
      'libraries_extend' => 
      array (
      ),
      'libraries_override' => 
      array (
      ),
      'dependencies' => 
      array (
        0 => 'bootstrap',
      ),
      'regions_hidden' => 
      array (
        0 => 'page_top',
        1 => 'page_bottom',
      ),
      'filename' => '/private/var/aegir/platforms/projectd8/themes/custom/strapboot/strapboot.info.yml',
      'status' => 0,
    ),
  ),
);
# Aegir additions.
$_SERVER['db_type'] = $options['db_type'];
$_SERVER['db_port'] = $options['db_port'];
$_SERVER['db_host'] = $options['db_host'];
$_SERVER['db_user'] = $options['db_user'];
$_SERVER['db_passwd'] = $options['db_passwd'];
$_SERVER['db_name'] = $options['db_name'];

# Local non-aegir-generated additions.
@include_once('/var/aegir/platforms/projectd8/sites/practice.ronaldpgarcia.com/local.drushrc.php');
