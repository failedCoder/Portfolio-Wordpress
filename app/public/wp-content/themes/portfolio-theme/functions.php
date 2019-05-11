<?php

function load_files () {
	wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
	wp_enqueue_style( 'font-awsome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css' );
	wp_enqueue_style( 'custom-css', home_url('wp-content/themes/portfolio-theme/assets/scss/public/main.min.css') );
    wp_enqueue_script( 'jquery','https://code.jquery.com/jquery-3.4.0.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'bootstrap-script','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'custom-js', home_url('wp-content/themes/portfolio-theme/assets/js/public/app.min.js'), '','',true );
}
add_action( 'wp_enqueue_scripts', 'load_files' );

function set_title () {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'set_title' );

function register_navigation_menus () {
	register_nav_menu( 'main', 'Main navbar' );
}

function add_link_atts($atts) {
	$atts['class'] = "nav-link";
return $atts;
}

add_filter( 'nav_menu_link_attributes', 'add_link_atts');

// sort skills related to the timeline event by their level
// skill levels (from highest to lowest): S, A , B ,C 
function sort_related_skills ($related_skills) {

	define('S', 1);
	define('A', 2);
	define('B', 3);
	define('C', 4);

	$sorted_skills = [];

	foreach ($related_skills as $skill) {
		if ($skill->level == S) {
			$sorted_skills[S][] = $skill;
		} else if ($skill->level == A) {
			$sorted_skills[A][] = $skill;
		} else if ($skill->level == B) {
			$sorted_skills[B][] = $skill;
		} else if ($skill->level == C) {
			$sorted_skills[C][] = $skill;
		}
	}

	ksort($sorted_skills);

	return $sorted_skills;
}

// every skill level has unique badge
// returns right class for the skill level
function get_related_skill_badge_type ($skill_level) {

	$badge_type = '';

	if ($skill_level == 1) {
		$badge_type = 'badge-danger';
	} elseif ($skill_level == 2 ) {
		$badge_type = 'badge-warning';
	} elseif ($skill_level == 3 ) {
		$badge_type = 'badge-success';
	} elseif ($skill_level == 4) {
		$badge_type = 'badge-primary';
	} 
	
	return $badge_type;	
}