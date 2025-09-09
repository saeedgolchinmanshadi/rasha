<?php
function slider_register()
{
    $labels = array(
        'name' => _x('Slider', 'post type general name', 'sws'),
        'singular_name' => _x('slider', 'post type singular name', 'sws'),
        'add_new' => _x('add slider', 'video item', 'sws'),
        'add_new_item' => __('add slider', 'sws'),
        'edit_item' => __('edit slider', 'sws'),
        'new_item' => __('new slider', 'sws'),
        'view_item' => __('view slider', 'sws'),
        'search_items' => __('search slider', 'sws'),
        'not_found' =>  __('item is not in trash', 'sws'),
        'not_found_in_trash' => __('item is not in recycle bin', 'sws'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => false, //if false doesnt have link
        'publicly_queryable' => true, //if false doesnt show in query 
        'show_ui' => true, //if true display a user-interface (admin panel) for this post type
        'query_var' => true, //If set to true it allows you to request a custom posts type (book) using this: example.com/?book=life-of-pi
        'rewrite' => true, // if set true it prevent to rewrite
        'capability_type' => 'post', //
        'hierarchical' => false, // if empty, 'name' is set to value of 'label', and 'singular_name' is set to value of 'name'.
        'supports' => array('title', 'thumbnail', 'excerpt'), // Include [title,editor,author,thumbnail,excerpt,trackbacks,custom-fields,comments,revisions,post-formats] 
        'menu_position' => 8, // postition in admin panel menu]
        'menu_icon' => 'dashicons-images-alt', //icon of post type
        'has_archive' => true //Enables post type archives
    );
    register_post_type('slider', $args);
}
add_action('init', 'slider_register');

function blog_register()
{
    $labels = array(
        'name' => _x('Blog', 'post type general name', 'sws'),
        'singular_name' => _x('Blog', 'post type singular name', 'sws'),
        'add_new' => _x('Add New Blog', 'blog item', 'sws'),
        'add_new_item' => __('Add New Blog', 'sws'),
        'edit_item' => __('Edit Blog', 'sws'),
        'new_item' => __('New Blog', 'sws'),
        'view_item' => __('View Blog', 'sws'),
        'search_items' => __('Search Blog', 'sws'),
        'not_found' =>  __('No blog posts found', 'sws'),
        'not_found_in_trash' => __('No blog posts found in trash', 'sws'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'blog'),
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments', 'author', 'tags'),
        'menu_position' => 9,
        'menu_icon' => 'dashicons-edit',
        'has_archive' => true,
        'show_in_rest' => true,
        'taxonomies'  => array( 'category', 'post_tag' )
    );
    register_post_type('blog', $args);
}
add_action('init', 'blog_register');