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
		<?php tha_content_bottom(); ?>
		</main><!-- #main -->
		<?php tha_content_after(); ?>
		<?php tha_footer_before(); ?>
		<?php tha_footer_top(); ?>

		<?php
		View::make('shared/footer')
		  ->with('foot_description', 'Wiki is a curated list of tools and resources for people who make websites.')
		  ->with('address', '3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890')
		  ->render();
		?>
		<!-- <?php tha_footer_bottom(); ?> -->
		<?php tha_footer_after(); ?>
	</div><!-- .wrap -->
</div><!-- #page -->

<?php tha_body_bottom(); ?>
<?php wp_footer(); ?>


</body>
</html>
