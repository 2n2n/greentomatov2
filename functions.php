<?php
include('bin/gt_enque.php');
include('bin/gt_register_menus.php');
include('bin/admin/gt_theme_settings.php');

function dd($data) {
	echo "<pre>";
	var_dump($data);
	echo "</pre>";
}

if (!function_exists('write_log')) {
    function write_log ( $log )  {
        if ( true === WP_DEBUG ) {
            if ( is_array( $log ) || is_object( $log ) ) {
                error_log( print_r( $log, true ) );
            } else {
                error_log( $log );
            }
        }
    }
}


function get_meta_video() {
	$id = get_the_ID();
	return get_post_meta($id, 'gt_video', true);
}

function get_sub_categories($category_id) {

    $affected = get_term_children($category_id, 'category');
    $args = ['include' => $affected, 'hide_empty' => 0, 'orderby' => 'term_id'];
    return get_categories($args);
}

function render_sub_categories ($term_id) {
    $sub_categories = get_sub_categories($term_id);
    echo "<ul class='sub-categories'>";
    foreach($sub_categories as $val) {
        echo "<li><a href='".get_category_link($val)."'>" .$val->name. "</a></li>";
    }
    echo "</ul>";

}
//register menu
add_action('init', 'gt_register_menus');

// enqueu scripts
add_action('wp_enqueue_scripts', 'gt_enque_css');
add_action('wp_enqueue_scripts', 'gt_enque_js');

// add pages and categories for the themes.
add_action('after_setup_theme', 'gt_create_required_categories_and_pages');
