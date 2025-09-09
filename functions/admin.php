<?php
// This file handles the admin area and functions - You can use this file to make changes to the dashboard.

/************* DASHBOARD WIDGETS *****************/
// Disable default dashboard widgets
function disable_default_dashboard_widgets()
{
	// Remove_meta_box('dashboard_right_now', 'dashboard', 'core');    // Right Now Widget
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'core'); // Comments Widget
	remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');  // Incoming Links Widget
	remove_meta_box('dashboard_plugins', 'dashboard', 'core');         // Plugins Widget

	// Remove_meta_box('dashboard_quick_press', 'dashboard', 'core');  // Quick Press Widget
	remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');   // Recent Drafts Widget
	remove_meta_box('dashboard_primary', 'dashboard', 'core');         //
	remove_meta_box('dashboard_secondary', 'dashboard', 'core');       //

	// Removing plugin dashboard boxes
	remove_meta_box('yoast_db_widget', 'dashboard', 'normal');         // Yoast's SEO Plugin Widget

}

// removing the dashboard widgets
add_action('admin_menu', 'disable_default_dashboard_widgets');

add_action('wp_dashboard_setup', 'goldio_remove_all_dashboard_meta_boxes', 9999);
function goldio_remove_all_dashboard_meta_boxes()
{
	global $wp_meta_boxes;
	$wp_meta_boxes['dashboard']['normal']['core'] = array();
	$wp_meta_boxes['dashboard']['side']['core'] = array();
	remove_meta_box('rss_dashboard', 'dashboard', 'normal');
}
remove_action('welcome_panel', 'wp_welcome_panel');

/************* CUSTOMIZE ADMIN *******************/
// Custom Backend Footer
function goldio_custom_admin_footer()
{
	_e('<span id="footer-thankyou">توسعه یافته توسط <a href="#" target="_blank">گلدیو</a></span>.', 'goldio');
}

// adding it to the admin area
add_filter('admin_footer_text', 'goldio_custom_admin_footer');

// add links/menus to the admin bar
/*
function goldio_admin_bar_render()
{
	global $wp_admin_bar;
	$user = wp_get_current_user();
	$allowed_roles = array('administrator', 'charity');
	if (array_intersect($allowed_roles, $user->roles)) {
		$wp_admin_bar->add_menu(array(
			'parent' => false, // use 'false' for a root menu, or pass the ID of the parent menu
			'id' => 'new_media', // link ID, defaults to a sanitized title value
			'title' => __('خیریه','goldio'), // link title
			'href' => home_url('panel/dashboard/'), // name of file
			'meta' => array('target' => 'blank', 'class' => "icon-edit-fill") // array of any of the following options: array( 'html' => '', 'class' => '', 'onclick' => '', target => '', title => '' );
		));
	}
}
add_action('wp_before_admin_bar_render', 'goldio_admin_bar_render');
*/