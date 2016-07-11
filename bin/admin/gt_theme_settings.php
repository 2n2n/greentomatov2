<?php

function gt_create_required_categories_and_pages() {
	$term = term_exists('Moving Pictures', 'category');
	if($term == false && is_null($term)) {
		wp_insert_term('Moving Pictures', 'category', ['description' => 'The theme required category.']);
	}

	$parent_page = get_page_by_title('Green Tomato Pages');
	if(is_null($parent_page)) {
		wp_insert_post([
			'post_title' => 'Green Tomato Pages',
			'post_content' => "",
            'post_status' => "publish",
            'post_type' => 'page',
		]);
	}
	$pages = get_pages();
	$parent_id = get_page_by_title('Green Tomato Pages')->ID; 
	gt_insert_required_pages($pages, $parent_id);
}

function gt_insert_required_pages($pages, $parent_id) {

	$required = ['Green Tomato', 'About Us', 'Moving Pictures', 'Rates &amp; Faq', 'Stay Connected', 'Work With Us'];
	if($pages != false) {
		foreach($required as $page_title) {
			// search 
			$page = get_page_by_title($page_title);
			if(is_null($page)) {
				$post_id = wp_insert_post([
					'post_title' => $page_title,
					'post_content' => "",
		            'post_status' => "publish",
		            'post_type' => 'page',
		            'post_parent' => $parent_id
				]);
			}
			else {
				$update_data = [
					"ID" => $page->ID
				];
				if($page->post_status != 'published') {
					$update_data['[post_status'] = 'published';
				}
				if($page->post_parent != $parent_id) {
					$update_data['post_parent'] = $parent_id;
				}

				if(count($update_data) > 0) {
					$success = wp_update_post($update_data, true);
					if($success == false) {
						dd($success->get_error_messages());
					}
				}
			}
			// if not found create
			// if found update, and assign template
		}
	}
}