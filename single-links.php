<?php
use glue\View;
/**
 * The Template for displaying all single posts.
 *
 * @package moxie_wiki
 */

get_header();

	while ( have_posts() ) : the_post();

		$content = get_the_content();
		View::make('link/complete')
			->with('content', $content)
			->render();

				// If comments are open or we have at least one comment, load up the comment template
	if ( comments_open() || '0' != get_comments_number() ) :
		comments_template();
	endif;

endwhile;

get_sidebar();
get_footer();
?>
