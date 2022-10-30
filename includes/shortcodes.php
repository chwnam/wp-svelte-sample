<?php

namespace wp_svelte_sample;

add_shortcode( 'wp_svelte_sample', 'wp_svelte_sample\\wp_svelte_sample' );

function wp_svelte_sample(): string {
	enqueue_scripts( 'index.ts' );

	return '<div>12</div>';
}
