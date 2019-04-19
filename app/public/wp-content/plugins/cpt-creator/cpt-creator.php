<?php
/**
 * Plugin Name: Custom Post Type Creator
 * Author: Petar Coric
 */

 function create_cpts () {

 	register_post_type( 'test', 
 		array( 
        	'labels' => array(
        		'name' => __('Tests'),
        		'singular_name' => __('Test')
        	),
        	'public' => true,
        	'supports' => array(
        		'title', 'thumbnail', 'excerpt'
        	),      
 	    ) 
 	);

 }
add_action( 'init', 'create_cpts' );	