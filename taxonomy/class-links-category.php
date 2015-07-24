<?php
namespace moxie;

class Category {
	private $taxonomy = LINKS_TAXONOMY;
	private $post_type = LINKS_POST_TYPE;

	public function __construct() {
		add_action( 'init', array( $this, 'register' ) );
	}

	public function register() {
		register_taxonomy(
			$this->taxonomy,
			array( $this->post_type ),
			$this->get_args()
		);
	}

	private function get_args() {
		return array(
			'hierarchical'      => true,
			'labels'            => $this->get_labels(),
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array(
				'slug' => ''
			),
		);
	}

	private function get_labels() {
		return array(
			'name'              => _x( 'Categories', 'taxonomy general name' ),
			'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
			'search_items'      => __( 'Search Link Category' ),
			'all_items'         => __( 'All Categories' ),
			'parent_item'       => __( 'Parent Category' ),
			'parent_item_colon' => __( 'Parent Category:' ),
			'edit_item'         => __( 'Edit Category' ),
			'update_item'       => __( 'Update Category' ),
			'add_new_item'      => __( 'Add New Category' ),
			'new_item_name'     => __( 'New Category Name' ),
			'menu_name'         => __( 'Categories' ),
		);
	}
}
