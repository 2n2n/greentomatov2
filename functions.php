<?php
include('bin/gt_enque.php');
include('bin/gt_register_menus.php');

include('bin/admin/gt_theme_settings.php');

//register menu
add_action('init', 'gt_register_menus');
// enqueu scripts
add_action('wp_enqueue_scripts', 'gt_enque_css');
add_action('wp_enqueue_scripts', 'gt_enque_js');

// add pages and categories for the themes.
add_action('after_setup_theme', 'gt_create_required_categories_and_pages');
