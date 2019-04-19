<?php
/**
 * Plugin Name: Test
 *
 */	
function test( $query ) {
  if ( !$query->is_front_page() ) {
    $query->set( 'posts_per_page', 2 );
  }
}
add_action( 'pre_get_posts', 'test' );
