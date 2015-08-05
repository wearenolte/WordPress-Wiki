<?php
/**
 * The main template file.
 *
 * @package moxie_wiki
 */

get_header(); ?>

<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
	'post_type' => LINKS_POST_TYPE,
	'post_status' => 'published',
	'paged' => $paged
);
$links = new WP_Query( $args );
?>
		<?php if ( $links->have_posts() ) : ?>

		<?php while ( $links->have_posts() ) : $links->the_post(); ?>
		<?php
		if ( glue_view_exist() ){
			glue\View::make('link/single')
				->with('title', get_the_title())
				->with('link', wp_get_shortlink())
				->render();
		}
		?>
		<?php endwhile; ?>

		<?php else : ?>

		<?php get_template_part( 'page-templates/partials/content', 'none' ); ?>

		<?php endif; ?>

<?php get_footer(); ?>
