<?php
/**
 * Plugin Name: Custom Post Type Creator
 * Author: Petar Coric
 */

 function create_custom_post_types () {

 	register_post_type( 'event', 
 		array( 
        	'labels' => array(
        		'name' => __('Events'),
        		'singular_name' => __('Event'),
                        'add_new_item' => __('Add New Event'),
                        'edit_item' => __('Edit Event'),
        	),
        	'public' => true,
        	'supports' => array(
        		'title', 'excerpt','editor','custom-fields'
        	),
        	'menu_icon' => 'dashicons-rest-api',
        	'has_archive' => true,
        	'rewrite' => array(
        		'slug' => 'events'
        	),    
 	    ) 
 	);

 	register_post_type( 'skill', 
 		array( 
        	'labels' => array(
        		'name' => __('Skills'),
        		'singular_name' => __('Skill'),
                        'add_new_item' => __('Add New Skill'),
                        'edit_item' => __('Edit Skill'),
        	),
        	'public' => true,
        	'supports' => array(
        		'title', 'editor', 'custom-fields'
        	),
        	'menu_icon' => 'dashicons-hammer',
        	'has_archive' => true,
        	'rewrite' => array(
        		'slug' => 'skills'
        	),    
 	    ) 
 	);

 }
add_action( 'init', 'create_custom_post_types' );	