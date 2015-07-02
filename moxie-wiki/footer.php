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
		<?php tha_footer_top(); ?>
		<!-- Footer -->
		<footer class="footer">
			<div class="wrap">
				<div class="foot-description">
					Wiki is a curated list of tools and resources for people who make websites.
				</div>
				<nav class="nav-footer">
					<ul>
						<li><a href="">About</a></li>
						<li><a href="">Facebook</a></li>
						<li><a href="">Twitter</a></li>
						<li><a href="">Tos</a></li>
						<li><a href="">Buy a beer</a></li>
					</ul>
				</nav>
			</div>
		</footer>
		<!-- <?php tha_footer_bottom(); ?> -->
		<?php tha_footer_after(); ?>
	</div><!-- .wrap -->
</div><!-- #page -->

<?php tha_body_bottom(); ?>
<?php wp_footer(); ?>


</body>
</html>
