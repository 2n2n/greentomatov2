<?php

function gt_create_required_categories() {
	$term = term_exists('Moving Pictures', 'category');
	if($term == false && is_null($term)) {
		wp_insert_term('Moving Pictures', 'category', ['description' => 'The theme required category.']);
	}
}