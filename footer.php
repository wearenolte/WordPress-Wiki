<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package moxie_wiki
 */
?>
<?php use \glue\View; ?>
	</div>
</div>
		<?php tha_content_bottom(); ?>
		<?php tha_content_after(); ?>
		<?php tha_footer_before(); ?>
		<?php tha_footer_top(); ?>

		<?php
			$nav_footer = array(
					array(
						'title' => 'About',
						'link' => '#'
					),
					array(
						'title' => 'Facebook',
						'link' => 'http://www.facebook.com'
					),
					array(
						'title' => 'Twitter',
						'link' => 'http://www.twitter.com'
					),
					array(
						'title' => 'Tos',
						'link' => '#'
					),
					array(
						'title' => 'Buy a Beer',
						'link' => '#'
					),
				);
		?>

		<?php
		if( glue_view_exist() ){
			View::make('shared/footer')
			  ->with('foot_description', get_theme_mod( 'moxie_wiki_footer_colophon' ))
			  ->with('nav_footer', $nav_footer)
			  ->render();
		}
		?>
		<!-- <?php tha_footer_bottom(); ?> -->
		<?php tha_footer_after(); ?>
	</div><!-- .wrap -->
</div><!-- #page -->

<?php tha_body_bottom(); ?>
<?php wp_footer(); ?>


</body>
</html>
