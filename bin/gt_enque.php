<?php
function gt_enque_css() {
	wp_enqueue_style('normalize', get_template_directory_uri()."/css/normalize.css");
	wp_enqueue_style('pace', get_template_directory_uri()."/css/pace.css", ['normalize']);
	wp_enqueue_style('animate', get_template_directory_uri()."/css/animate.css", ['normalize']);
	wp_enqueue_style('gt-theme', get_template_directory_uri()."/css/style.css", ['normalize']);
	wp_enqueue_style('fancybox-style', get_template_directory_uri()."/css/jquery.fancybox.css", ['normalize']);
}

function gt_enque_js() {
	wp_enqueue_script('jquery');
	wp_enqueue_script('plugin-js', get_template_directory_uri()."/js/plugins.js", ['jquery'], false);
	wp_enqueue_script('jquery-appear-js', get_template_directory_uri()."/js/jquery.appear.js", ['jquery'], false);
	wp_enqueue_script('html5', get_template_directory_uri()."/js/html5.js", ['jquery'], false, true);
	wp_enqueue_script('modernizr', get_template_directory_uri()."/js/lib/modernizr-2.6.2.min.js", ['jquery'], false);
	wp_enqueue_script('fancybox', get_template_directory_uri()."/js/jquery.fancybox.pack.js", ['jquery'], false);
	wp_enqueue_script('animated-modal', get_template_directory_uri()."/js/animatedModal.js", ['jquery'], false);
	wp_enqueue_script('pace-js', get_template_directory_uri()."/js/pace.min.js", ['jquery'], false);

	wp_enqueue_script('custom', get_template_directory_uri()."/js/custom.js", ['jquery', 'modernizr'], false, true);
}	
/*
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/animatedModal.min.js"></script>*/
