<?php
/*
 - Locate main functions : inc/main-functions.php
 - Locate Ajax functions : inc/ajax-functions.php
 - Please add your custom code to main-functions.php
 - Don't write code on this file
 */
require_once ('inc/main-functions.php');
require_once ('inc/ajax-functions.php');
require_once ('inc/addon-functions.php');

/*
 - Location Post type functions : inc/post-type-functions.php
 */
require_once ('inc/post-type-functions.php');

/*
- Theme Options for Levelup dance
*/
add_filter( 'ot_show_new_layout', '__return_false' );
add_filter( 'ot_show_pages', '__return_false' );
add_filter( 'ot_theme_mode', '__return_true' );
add_filter( 'ot_meta_boxes', '__return_true' );
include_once( 'inc/option-tree/ot-loader.php' );
include_once( 'inc/theme-options.php' );
include_once( 'inc/theme-metabox.php' );