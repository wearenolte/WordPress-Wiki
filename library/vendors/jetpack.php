<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package moxie_wiki
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function moxie_wiki_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'moxie_wiki_jetpack_setup' );
