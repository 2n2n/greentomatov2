<?php
add_filter('gt_customize_menu', 'clean_custom_menus', 5, 1);

function gt_register_menus() {
	$location = 'green-tomato-menu';
	if(!has_nav_menu($location)) {
		register_nav_menus([
			$location => __( 'Green Tomato Special Nav Menu', 'gt-menu-desc') 
		]);
	}
}

function format_title($title) {
	$pcs = explode(' ', $title);
	$formatted_title = count($pcs) > 2 ? "<span>{$pcs[0]}</span>{$pcs[1]}{$pcs[2]}": "<span>{$pcs[0]}</span>{$pcs[1]}";
	return $formatted_title;
}

function remap_array($menus) {
	$menu_remapped = [];
	foreach($menus as $key => $current) {
		if($current->menu_item_parent == 0) {
			array_push($menu_remapped, $current);
			foreach($menus as $menu) {
				if($current->ID == $menu->menu_item_parent) {
					if(!isset($menu_remapped[$key]->children)) { $menu_remapped[$key]->children = []; }
					array_push($menu_remapped[$key]->children, $menu);  
				}
			}
			continue;
		}
	}
	return $menu_remapped;
}
function clean_custom_menus($menu_name) {
	$list_html = "<ul>";
	$template_url = get_template_directory_uri();
	$base_url = get_site_url();
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);

		$menu_items = (array) wp_get_nav_menu_items($menu->term_id);
		$menu_items = remap_array($menu_items);

		foreach ($menu_items as $key => $menu_item) {
			$title = format_title($menu_item->title);
			if(property_exists($menu_item, 'children')) {
				$list_html .= "<li><a href='{$menu_item->url}'>{$title}</a><ul>";
				
				foreach($menu_item->children as $submenu) {
					$list_html .= "<li><a href='{$submenu->url}'>{$submenu->title}</a></li>";
				}

				$list_html .= "</ul></li>";
			}
			else if($key == 3) {
				$list_html .= "<li class='menu-logo-holder'>" .
					"<a href='{$base_url}'>" .
						"<div class='menu-logo bp-ab'> <div class='saling-pusa'></div>" .
							"<span class='bp-ab logo-part1 inview' data-delay='300'><img src='{$template_url}/images/page_template/green.png' width='106' height='106' alt='' title=''/></span>" .
							"<span class='bp-ab logo-part2 inview' data-delay='300'><img src='{$template_url}/images/page_template/pink.png' width='106' height='106' alt='' title=''/></span>" .
							"<span class='bp-ab logo-part3 inview' data-delay='300'><img src='{$template_url}/images/page_template/gray_1.png' width='106' height='72' alt='' title=''/></span>" .
							"<span class='bp-ab logo-part4 inview' data-delay='300'><img src='{$template_url}/images/page_template/gray_2.png' width='69' height='138' alt='' title=''/></span>" .
							"<span class='bp-ab logo-part5 inview' data-delay='300'><img src='{$template_url}/images/page_template/gray_3.png' width='36' height='105' alt='' title=''/></span>" .
						"</div>" .
					"</a>" .
				"</li>";
				continue;
			}
			else {
				$list_html .= "<li><a href='{$menu_item->url}'>{$title}</a></li>";
			}
		}

	} 
	$list_html .= "</ul>";
	echo $list_html;
}

// echo "<pre>";
// var_dump(clean_custom_menus());
// echo "</pre>";
// die;