<?php
namespace moxie;

class Link {
	private $post_type = LINKS_POST_TYPE;
	private $editor_options = array(
		'title',
		'thumbnail',
		'author',
		'revisions',
		'editor'
	);

	public function __construct() {
		add_action( 'init', array( $this, 'register' ) );
	}

	public function register() {
		register_post_type( $this->post_type, $this->get_args() );
	}

	private function get_args() {
		return array(
			'labels'        => $this->get_labels(),
			'description'   => 'Collections of Links',
			'public'        => true,
			'menu_position' => 4,
			'menu_icon'     => 'dashicons-migrate',
			'supports'      => $this->editor_options,
			'has_archive'   => true,
		);
	}

	private function get_labels() {
		return array(
			'name'               => _x( 'Link', 'post type general name' ),
			'singular_name'      => _x( 'Link', 'post type singular name' ),
			'add_new'            => _x( 'Add New', 'moxie15' ),
			'add_new_item'       => __( 'Add New Link' ),
			'edit_item'          => __( 'Edit Link' ),
			'new_item'           => __( 'New Link' ),
			'all_items'          => __( 'All Links' ),
			'view_item'          => __( 'View Link' ),
			'search_items'       => __( 'Search Link' ),
			'not_found'          => __( 'No links found' ),
			'not_found_in_trash' => __( 'No link found in the trash' ),
			'parent_item_colon'  => '',
			'menu_name'          => 'Links',
		);
	}
}
