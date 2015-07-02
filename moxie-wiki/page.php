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

		<section class="list-links flex-child">
		<?php global $wp_query;
		$wp_query = new WP_Query("post_type=link&post_status=publish");
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			<?php $postid = $wp_query->post->ID; ?>

			<div class="link-block">
				<div class="link">
					<div class="link-link"><a href="<?php the_permalink() ?>" target="_blank"><span class="icon-link-external"></span></a></div>
					<div class="link-color" style="background:#F08484"></div>
					<div class="link-inner">
						<div class="link-top">
							<a href="<?php the_permalink() ?>" target="_blank">
								<?php the_post_thumbnail( array(200,200) ); ?>
							</a>
							<div class="link-main">
								<a href="<?php the_permalink() ?>" target="_blank">
									<h2 class="link-title"><?php the_title(); ?></h2>
								</a>
								<a href="<?php the_permalink() ?>" target="_blank">
									<h6 class="link-address"><?php the_permalink() ?></h6>
								</a>
								<div class="link-tags">
									<ul>
										<li><span class="tag icon-tag"></span></li>
										<li><a href="#">behavior</a></li>
										<li><a href="#">user research</a></li>
									</ul>
								</div>
							</div>
						</div>
						<p class="link-description"><?php echo get_post_meta( $postid, 'description-link', true); ?></p>
					</div>
				</div>
			</div>
	<!--
		    <li>
		    	<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
		    	<a href="<?php echo get_post_meta( $postid, 'url-link', true); ?>"><?php echo get_post_meta( $postid, 'url-link', true); ?></a>
		    	<p><?php echo get_post_meta( $postid, 'description-link', true); ?></p>
				<?php the_post_thumbnail( array(200,200) ); ?>
		    </li> -->

		<?php endwhile; ?>
		</section>

		<div class="modal">
			<div class="modal-overlay modal-toggle"></div>
			<div class="modal-wrapper modal-transition">
				<div class="modal-header" data-behavior="modal-close"><span class="modal-close js-close-modal icon-close"></span></div>
				<div class="modal-body">
					<ul>
						<li><a href="/tags/accessibility">accessibility</a></li>
						<li><a href="/tags/advice">advice</a></li>
						<li><a href="/tags/analytics">analytics</a></li>
						<li><a href="/tags/animation">animation</a></li>
						<li><a href="/tags/articles">articles</a></li>
						<li><a href="/tags/awards">awards</a></li>
						<li><a href="/tags/behavior">behavior</a></li>
						<li><a href="/tags/browser">browser</a></li>
						<li><a href="/tags/browser extension">browser extension</a></li>
						<li><a href="/tags/checklist">checklist</a></li>
						<li><a href="/tags/CMS">CMS</a></li>
						<li><a href="/tags/code editor">code editor</a></li>
						<li><a href="/tags/code generator">code generator</a></li>
						<li><a href="/tags/collaboration">collaboration</a></li>
						<li><a href="/tags/collecting">collecting</a></li>
						<li><a href="/tags/color">color</a></li>
						<li><a href="/tags/community aggregated">community aggregated</a></li>
						<li><a href="/tags/deployment">deployment</a></li>
						<li><a href="/tags/documentation">documentation</a></li>
						<li><a href="/tags/domains and hosting">domains and hosting</a></li>
						<li><a href="/tags/eCommerce">eCommerce</a></li>
						<li><a href="/tags/forms">forms</a></li>
						<li><a href="/tags/framework">framework</a></li>
						<li><a href="/tags/freebies">freebies</a></li>
						<li><a href="/tags/freelance">freelance</a></li>
						<li><a href="/tags/grid">grid</a></li>
						<li><a href="/tags/guides">guides</a></li>
						<li><a href="/tags/icons">icons</a></li>
						<li><a href="/tags/images">images</a></li>
						<li><a href="/tags/interviews">interviews</a></li>
						<li><a href="/tags/Javascript">Javascript</a></li>
						<li><a href="/tags/job board">job board</a></li>
						<li><a href="/tags/learning">learning</a></li>
						<li><a href="/tags/legal">legal</a></li>
						<li><a href="/tags/live chat">live chat</a></li>
						<li><a href="/tags/maps">maps</a></li>
						<li><a href="/tags/music and sounds">music and sounds</a></li>
						<li><a href="/tags/newsletter">newsletter</a></li>
						<li><a href="/tags/online editors">online editors</a></li>
						<li><a href="/tags/payments">payments</a></li>
						<li><a href="/tags/placeholder">placeholder</a></li>
						<li><a href="/tags/platform as a service">platform as a service</a></li>
						<li><a href="/tags/podcast and radio">podcast and radio</a></li>
						<li><a href="/tags/portfolio">portfolio</a></li>
						<li><a href="/tags/preprocessor">preprocessor</a></li>
						<li><a href="/tags/prototyping">prototyping</a></li>
						<li><a href="/tags/SEO">SEO</a></li>
						<li><a href="/tags/showcase">showcase</a></li>
						<li><a href="/tags/site builder">site builder</a></li>
						<li><a href="/tags/social engagement">social engagement</a></li>
						<li><a href="/tags/static site generator">static site generator</a></li>
						<li><a href="/tags/task management">task management</a></li>
						<li><a href="/tags/testing and optimization">testing and optimization</a></li>
						<li><a href="/tags/tutorials">tutorials</a></li>
						<li><a href="/tags/typography">typography</a></li>
						<li><a href="/tags/user research">user research</a></li>
						<li><a href="/tags/version control">version control</a></li>
						<li><a href="/tags/videos">videos</a></li>
						<li><a href="/tags/web fonts">web fonts</a></li>
						<li><a href="/tags/wireframing">wireframing</a></li>
						<li><a href="/tags/workflow">workflow</a></li>
					</ul>
				</div>
			</div>
		</div><!-- modal -->

	</div><!-- column-parent -->

</div><!-- flex-child row-parent -->


<?php get_footer(); ?>
