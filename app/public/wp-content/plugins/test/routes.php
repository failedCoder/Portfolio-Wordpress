<?php
function register_routes () {
	register_rest_route( 'v1/posts', '/test-endpoint', array(
		'methods' => 'GET',
		'callback' => 'test'
	) );
}
add_action( 'rest_api_init', 'register_routes' );
