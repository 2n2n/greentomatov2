<?php
include('bin/gt_enque.php');
include('bin/gt_register_menus.php');

update_option('siteurl','http://104.236.78.136/greentomato');
update_option('home','http://104.236.78.136/greentomato');

include('bin/admin/gt_theme_settings.php');

function dd($data) {
	echo "<pre>";
	var_dump($data);
	echo "</pre>";
}


function get_meta_video() {
	$id = get_the_ID();
	return get_post_meta($id, 'gt_video', true);
}
//register menu
add_action('init', 'gt_register_menus');

// enqueu scripts
add_action('wp_enqueue_scripts', 'gt_enque_css');
add_action('wp_enqueue_scripts', 'gt_enque_js');

// add pages and categories for the themes.
add_action('after_setup_theme', 'gt_create_required_categories_and_pages');
