<?php
// Calling your own login css so you can style it
function goldio_login_css()
{
	wp_enqueue_style('goldio_login_css', get_template_directory_uri() . '/assets/styles/login.css', false);
}

// changing the logo link from wordpress.org to your site
function goldio_login_url()
{
	return home_url();
}

// changing the alt text on the logo to show your site name
function goldio_login_title()
{
	return get_option('blogname');
}

/* Login */
function login_url() {
	return home_url('url');
}

function login_text() {
	return get_bloginfo( 'name' );
}

// calling it only on the login page
add_action('login_enqueue_scripts', 'goldio_login_css', 10);
add_filter('login_headerurl', 'goldio_login_url',112);
add_filter('login_headertext ', 'goldio_login_title',111);
add_filter('login_headertitle', 'login_text', 112);