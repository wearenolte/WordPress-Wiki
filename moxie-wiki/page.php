<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package moxie_wiki
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content">
			<ul>
			<?php global $wp_query;
			$wp_query = new WP_Query("post_type=link&post_status=publish");
			while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				<?php $postid = $wp_query->post->ID; ?>

			    <li>
			    	<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
			    	<a href="<?php echo get_post_meta( $postid, 'url-link', true); ?>"><?php echo get_post_meta( $postid, 'url-link', true); ?></a>
			    	<p><?php echo get_post_meta( $postid, 'description-link', true); ?></p>
					<?php the_post_thumbnail( array(200,200) ); ?>
			    </li>

			<?php endwhile; ?>
			</ul>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
