<?php
/**
 * For more info: https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

// Theme support options
require_once(get_template_directory().'/functions/theme-support.php');

// WP Head and other cleanup functions
require_once(get_template_directory().'/functions/cleanup.php');

// Register scripts and stylesheets
require_once(get_template_directory().'/functions/enqueue-scripts.php');

// Register custom menus and menu walkers
require_once(get_template_directory().'/functions/menu.php');

// Disable comments on entire site
require_once(get_template_directory().'/functions/disable-comments.php');

// Disable Gutenberg editor
require_once(get_template_directory().'/functions/disable-gutenberg.php');

// Add button shortcode
require_once(get_template_directory().'/functions/button-shortcode.php');

// Custom image sizes
require_once(get_template_directory().'/functions/custom-image-sizes.php');
