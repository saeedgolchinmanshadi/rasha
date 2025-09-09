<?php
// Function to change email address
function goldio_sender_email($original_email_address)
{
    $site = site_url();
    $input = trim($site, '/');
    if (!preg_match('#^http(s)?://#', $input)) {
        $input = 'http://' . $input;
    }
    $urlParts = parse_url($input);
    $domain = preg_replace('/^www\./', '', $urlParts['host']);
    return "support@$domain";
}

// Function to change sender name
function goldio_sender_name($original_email_from)
{
    $name = bloginfo('name');
    return $name;
}

// Hooking up our functions to WordPress filters 
add_filter('wp_mail_from', 'goldio_sender_email');
add_filter('wp_mail_from_name', 'goldio_sender_name');
