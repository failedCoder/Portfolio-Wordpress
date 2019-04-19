<?php

function load_files () {
	wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
	wp_enqueue_style( 'main', home_url('wp-content/themes/portfolio-theme/assets/css/main.css') );
    wp_enqueue_script( 'jquery','https://code.jquery.com/jquery-3.4.0.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'bootstrap-script','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array( 'jquery' ),'',true );
}
add_action( 'wp_enqueue_scripts', 'load_files' );

function set_title () {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'set_title' );