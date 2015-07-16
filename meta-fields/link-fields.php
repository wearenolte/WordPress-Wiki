<?php

	function add_meta_box( $post_type ) {
		$post_types = array('post', 'link');     //limit meta box to certain post types
        if ( in_array( $post_type, $post_types )) {
			add_meta_box(
				'url'
				,__( 'Url Link', 'myplugin_textdomain' )
				,array( $this, 'render_meta_box_content' )
				,$post_type
				,'advanced'
				,'high'
			);
        }
	}

	add_action('add_meta_box','add_meta_box');
