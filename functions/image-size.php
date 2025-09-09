<?php
if (function_exists('add_image_size')) {
	add_image_size('slider', 1360, 550, true);
	add_image_size('page', 1360, 348, true);
	add_image_size('vertical', 380, 498, true);
	add_image_size('small-crop', 300, 200, true);
	add_image_size('crop-280', 280, 280, true);
	add_image_size('feature', 30, 30, true);
}
add_filter('wp_calculate_image_srcset_meta', '__return_empty_array');
add_filter('jpeg_quality', function ($arg) {
	return 100;
});
add_filter('wp_editor_set_quality', function ($arg) {
	return 100;
});
