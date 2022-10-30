<?php

namespace wp_svelte_sample;

/**
 * Replace script tag type attribute.
 *
 * @param string $tag
 * @param string $handle
 *
 * @return string
 */
function modify_script_type( string $tag, string $handle ): string {
	if ( str_starts_with( $handle, 'wp-svelte-sample:' ) ) {
		if ( str_contains( $tag, "type='text/javascript'" ) ) {
			// Header script. Replace type attribute.
			$tag = str_replace( "<script type='text/javascript'", "<script type='module'", $tag );
		} else {
			// Footer scripts does not have 'type' attribute.
			$tag = str_replace( "<script src='", "<script type='module' src='", $tag );
		}
	}

	return $tag;
}

if ( is_development() ) {
	add_filter( 'script_loader_tag', 'wp_svelte_sample\modify_script_type', 10, 2 );
}
