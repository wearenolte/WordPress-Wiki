<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package moxie_wiki
 */
?>
		<?php tha_content_bottom(); ?>
		</main><!-- #main -->
		<?php tha_content_after(); ?>
			<?php tha_footer_before(); ?>
		<footer id="colophon" class="site-footer wrap" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
		<?php tha_footer_top(); ?>
			<div class="site-info">
				<?php do_action( 'moxie_wiki_credits' ); ?>
				<?php if ( 'no' === get_theme_mod( 'some-like-it-neat_hide_WordPress_credits' ) ) : ?>
					<a class="wordpress" href="http://wordpress.org/" rel="generator"><?php printf( __( 'Proudly powered by %s WordPress', 'some-like-it-neat' ), '<span class="genericon genericon-wordpress"></span>' ); ?></a>
					<span class="sep"> | </span>
				<?php endif; ?>

				<?php echo esc_attr( get_theme_mod( 'moxie_wiki_footer_colophon', __( 'Moxie Wiki, by Moxie NYC - http://getmoxied.net', 'some-like-it-neat' ) ) );  ?><br />

			</div><!-- .site-info -->
		<?php tha_footer_bottom(); ?>
		</footer><!-- #colophon -->
		<?php tha_footer_after(); ?>
	</div><!-- .wrap -->
</div><!-- #page -->

<?php tha_body_bottom(); ?>
<?php wp_footer(); ?>
</body>
</html>
