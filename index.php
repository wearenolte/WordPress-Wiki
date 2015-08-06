<?php
use glue\View;
/**
 * The main template file.
 *
 * @package moxie_wiki
 */

get_header();

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
	'post_type' => LINKS_POST_TYPE,
	'post_status' => 'published',
	'paged' => $paged
);
$links = new WP_Query( $args );

if ( $links->have_posts() ) {

	$links_collection = array();

	while ( $links->have_posts() ) : $links->the_post();
		if ( glue_view_exist() ){
			$id = $links->post->ID;
			$links_collection[] = View::make('link/single')
				->with('title', get_the_title())
				->with('link', wp_get_shortlink())
				->with('categories', get_attached_categories( $id ) );
		}
	endwhile;

	if( glue_view_exist() ){
		View::make( 'link/grid' )
			->with( 'links', $links_collection )
			->render();

		View::make('link/navigation')
			->with( 'prev', get_previous_posts_link() )
			->with( 'next',  get_next_posts_link() )
			->render();
	}

} else {
	get_template_part( 'page-templates/partials/content', 'none' );
}

get_footer();
?>
