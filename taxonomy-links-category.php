<?php
use glue\View;
/**
 * The template for displaying Category post.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package moxie_wiki
 */


get_header();

	if ( have_posts() ) : {
		while ( have_posts() ) : the_post();

			if ( glue_view_exist() ){
				$id = get_the_ID();
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


		else {
			get_template_part( 'page-templates/partials/content', 'none' );
		}
	}
	endif;

get_sidebar();
get_footer(); ?>




