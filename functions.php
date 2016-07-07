<?php

function dd($data) {
	echo "<pre>";
	var_dump($data);
	echo "</pre>";
}
include('bin/gt_enque.php');
include('bin/admin/gt_theme_settings.php');

add_action('wp_enqueue_scripts', 'gt_enque_css');
add_action('wp_enqueue_scripts', 'gt_enque_js');


add_action('after_setup_theme', 'gt_create_required_categories_and_pages');
