<?php
/**
 * File with helper function to be used in the handle of the taxonomies.
 */

function get_links_taxonomy( $parent = '' ){
	$taxonomy = array( LINKS_TAXONOMY );
	$args = array(
		'orderby'           => 'name',
		'order'             => 'ASC',
		'hide_empty'        => false,
		'fields'            => 'all',
		'slug'              => '',
		'parent'            => $parent,
		'offset'            => '',
	);
	return get_terms( $taxonomy, $args );
}

function get_links_taxonomies(){
	$taxonomies = array();

	$categories = get_links_taxonomy( $parent = 0 );
	foreach( $categories as $parent_category ){
		$parent_id = property_exists( $parent_category, 'term_id' )
			? $parent_category->term_id
			: '';

		$childs = get_links_taxonomy( $parent_id );
		$taxonomies[] = array(
			'parent' => $parent_category,
			'childs' => $childs,
		);
	}

	return $taxonomies;
}

