<?php
/**
 * File with helper function to be used in the handle of the taxonomies.
 */

/**
 * Creates a formated array with the taxomoies of LINKS_TAXONOMY
 *
 * @return array	An array of arrays with the followin structure
 *					array(
 *						array(
 *							'title' => 'Some title',
 *							'link' => 'http://site.com/taxonomy-url',
 *							'chils' => array(
 *								'title' => 'Some title',
 *								'link' => 'http://site.com/taxonomy-url',
 *							)
 *						),
 *						...
 *					)
 *
 *					Or empty array if has no taxonomies
 */
function get_formated_taxonomies(){
	$taxonomies = get_links_taxonomies();
	$formated = array();
	foreach( $taxonomies as $row ){
		$parent = array_key_exists( 'parent', $row ) ? $row['parent'] : array();
		$childs = array_key_exists( 'childs', $row ) ? $row['childs'] : array();

		$formated[] = array(
			'title' => property_exists( $parent, 'name' ) ? $parent->name : '',
			'link' => get_term_link( $parent, LINKS_TAXONOMY ),
			'childs' => get_formated_childs( $childs )
		);
	}

	return $formated;
}

/**
 * Creates a formated array with the childs taxomoies of LINKS_TAXONOMY
 *
 * @param	array	$childs		The childs to be formated.
 * @return	array				An array of arrays with the followin structure
 *								array(
 *									array(
 *										'title' => 'Some title',
 *										'link' => 'http://site.com/taxonomy-url',
 *									),
 *									...
 *								)
 *								Or empty array if has no taxonomies
 */
function get_formated_childs( $childs = array() ) {
	$childs = is_array( $childs ) ? $childs : array();
	$results = array();
	foreach ( $childs as $child ) {
		$results[] = array(
			'title' => property_exists( $child, 'name' ) ? $child->name : '',
			'link' => get_term_link( $child, LINKS_TAXONOMY ),
		);
	}
	return $results;
}


/**
 * Creates an array with parents and childs taxonomies of the links post type
 *
 * @return	array	An array with the data of the taxonomies used in Link post
 *					type.
 */
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
