<?php
class Link {
	private $post_type = 'link';
	// private $title_placeholder = 'Name of the Team Member';
	private $editor_options = array(
		'title'
	);
	public function __construct() {
		add_action( 'init', array( $this, 'register' ) );
		// $this->update_columns();
		// $this->update_placeholder();
	}
	public function register() {
		register_post_type( 'link', $this->get_args() );
	}
	private function get_args() {
		return array(
			'labels'        => $this->get_labels(),
			'description'   => 'Link created by Moxie',
			'public'        => true,
			'menu_position' => 4,
			'menu_icon'     => 'dashicons-admin-links',
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
			'not_found'          => __( 'No link found' ),
			'not_found_in_trash' => __( 'No links found in the Trash' ),
			'parent_item_colon'  => '',
			'menu_name'          => 'Links',
		);
	}


	// private function update_columns() {
	// 	add_filter( 'manage_edit-team_columns', array( $this, 'columns' ) );
	// 	add_filter( 'manage_edit-team_sortable_columns', array( $this, 'posts_column_register_sortable' ) );
	// 	add_action( 'manage_team_posts_custom_column' , array( $this, 'custom_team_columns' ), 10, 2 );
	// }
	// public function columns( $columns ) {
	// 	$columns = array(
	// 		'cb'            => '<input type="checkbox" />',
	// 		'title'         => 'Name',
	// 		'description'   => 'Description',
	// 	);
	// 	return $columns;
	// }
	// public function custom_team_columns( $column, $post_id ) {
	// 	switch ( $column ) {
	// 		case 'description' :
	// 			the_field( 'member_description', $post_id );
	// 			break;
	// 	}
	// }
	// public function posts_column_register_sortable( $columns ) {
	// 	$columns['description'] = 'description';
	// 	return $columns;
	// }
	// private function update_placeholder() {
	// 	add_filter( 'enter_title_here', array( $this, 'change_default_title' ) );
	// }
	// public function change_default_title( $title ) {
	// 	$screen = get_current_screen();
	// 	if ( $this->post_type == $screen->post_type ) {
	// 		$title = $this->title_placeholder;
	// 	}
	// 	return $title;
	// }
}
