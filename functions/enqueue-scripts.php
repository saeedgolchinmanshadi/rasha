<?php
function site_scripts()
{
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

  wp_deregister_script('wp-mediaelement');
  wp_deregister_style('wp-mediaelement');
  
  // Register main stylesheet
  //wp_dequeue_style( 'wp-block-library' );
  wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/styles/normalize.css');
  wp_enqueue_style('icon', get_template_directory_uri() . '/assets/styles/icons.css');
  wp_enqueue_style('style', get_template_directory_uri() . '/assets/styles/style.css');
  wp_enqueue_style('slick', get_stylesheet_directory_uri() . '/assets/styles/slick.css');
  wp_enqueue_style('slick-theme', get_stylesheet_directory_uri() . '/assets/styles/slick-theme.css');

  // Adding scripts file in the footer
  wp_dequeue_script('jquery');
  wp_dequeue_script('jquery-migrate');
  wp_deregister_script('wp-embed');

  wp_enqueue_script('jquery', false, array(), false, true);
  wp_enqueue_script('jquery-migrate', false, array(), false, true);

  // wp_enqueue_script('validate-min-js', get_template_directory_uri() . '/assets/scripts/jquery.validate.min.js', '1.0.0', true);
  
  wp_enqueue_script('script', get_template_directory_uri() . '/assets/scripts/scripts.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('slick', get_template_directory_uri() . '/assets/scripts/slick.min.js', array(), '1.0.0', true);
  

  // Comment reply script for threaded comments
  if (is_singular() and comments_open() and (get_option('thread_comments') == 1)) {
    wp_enqueue_script('comment-reply');
  }

  function my_admin_theme_style()
  {
    wp_enqueue_style('my-admin', get_template_directory_uri() . '/assets/stylesheets/admin.css');
  }
  add_action('admin_enqueue_scripts', 'my_admin_theme_style');
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);