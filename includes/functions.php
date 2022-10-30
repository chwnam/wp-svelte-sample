<?php

namespace wp_svelte_sample;

define( 'WP_SVELTE_SAMPLE_APP_ENV', in_array( wp_get_environment_type(), [ 'development', 'local' ], true ) );

function is_development(): bool {
	return WP_SVELTE_SAMPLE_APP_ENV;
}

function enqueue_scripts( string $entry ) {
	$url = "http://localhost:5173/$entry"; // TODO: for development.

	wp_enqueue_script( "wp-svelte-sample:$entry", $url, [], null );
}
