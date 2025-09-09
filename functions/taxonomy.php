<?php
    register_taxonomy( 'department', 
    	array('post'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => true,     /* if this is true, it acts like categories */             
    		'labels' => array(
    			'name' => __( 'بخش', 'goldio' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'بخش', 'goldio' ), /* single taxonomy name */
    		),
    		'show_admin_column' => true, 
    		'show_ui' => true,
        'query_var' => true,
        'show_in_rest' => true,
    		'rewrite' => array( 'slug' => 'department' ),
    	)
		);
			// now let's add custom categories (these act like categories)
			// register_taxonomy( 'custom_cat', 
    // 	array('custom_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    // 	array('hierarchical' => true,     /* if this is true, it acts like categories */             
    // 		'labels' => array(
    // 			'name' => __( 'Custom Categories', 'goldio' ), /* name of the custom taxonomy */
    // 			'singular_name' => __( 'Custom Category', 'goldio' ), /* single taxonomy name */
    // 			'search_items' =>  __( 'Search Custom Categories', 'goldio' ), /* search title for taxomony */
    // 			'all_items' => __( 'All Custom Categories', 'goldio' ), /* all title for taxonomies */
    // 			'parent_item' => __( 'Parent Custom Category', 'goldio' ), /* parent title for taxonomy */
    // 			'parent_item_colon' => __( 'Parent Custom Category:', 'goldio' ), /* parent taxonomy title */
    // 			'edit_item' => __( 'Edit Custom Category', 'goldio' ), /* edit custom taxonomy title */
    // 			'update_item' => __( 'Update Custom Category', 'goldio' ), /* update title for taxonomy */
    // 			'add_new_item' => __( 'Add New Custom Category', 'goldio' ), /* add new title for taxonomy */
    // 			'new_item_name' => __( 'New Custom Category Name', 'goldio' ) /* name title for taxonomy */
    // 		),
    // 		'show_admin_column' => true, 
    // 		'show_ui' => true,
    // 		'query_var' => true,
    // 		'rewrite' => array( 'slug' => 'custom-slug' ),
    // 	)
    // );   
    
	// now let's add custom tags (these act like categories)
	
    // register_taxonomy( 'custom_tag', 
    // 	array('custom_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    // 	array('hierarchical' => false,    /* if this is false, it acts like tags */                
    // 		'labels' => array(
    // 			'name' => __( 'Custom Tags', 'goldio' ), /* name of the custom taxonomy */
    // 			'singular_name' => __( 'Custom Tag', 'goldio' ), /* single taxonomy name */
    // 			'search_items' =>  __( 'Search Custom Tags', 'goldio' ), /* search title for taxomony */
    // 			'all_items' => __( 'All Custom Tags', 'goldio' ), /* all title for taxonomies */
    // 			'parent_item' => __( 'Parent Custom Tag', 'goldio' ), /* parent title for taxonomy */
    // 			'parent_item_colon' => __( 'Parent Custom Tag:', 'goldio' ), /* parent taxonomy title */
    // 			'edit_item' => __( 'Edit Custom Tag', 'goldio' ), /* edit custom taxonomy title */
    // 			'update_item' => __( 'Update Custom Tag', 'goldio' ), /* update title for taxonomy */
    // 			'add_new_item' => __( 'Add New Custom Tag', 'goldio' ), /* add new title for taxonomy */
    // 			'new_item_name' => __( 'New Custom Tag Name', 'goldio' ) /* name title for taxonomy */
    // 		),
    // 		'show_admin_column' => true,
    // 		'show_ui' => true,
    // 		'query_var' => true,
    // 	)
		// ); 
	