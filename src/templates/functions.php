<?php
  define('REQUIRE_DIRECTORY', trailingslashit( get_template_directory() ));
  require_once( REQUIRE_DIRECTORY . 'includes/CleanCustomMenu.php' );
  require_once( REQUIRE_DIRECTORY . 'includes/Helpers.php' );
  require_once( REQUIRE_DIRECTORY . 'includes/Scripts.php' );
  require_once( REQUIRE_DIRECTORY . 'includes/Shortcodes.php');
  require_once( REQUIRE_DIRECTORY . 'includes/Helpers.php' );
  require_once( REQUIRE_DIRECTORY . 'ajax/podioFormRequest.php' );

  $AppScripts = new Scripts();
  $AppScripts->initScripts();

