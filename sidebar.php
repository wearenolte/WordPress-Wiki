<?php
use glue\View;
/**
 * The Sidebar containing the main widget areas.
 *
 * @package moxie_wiki
 */
?>
	<?php tha_sidebars_before(); ?>
	<aside>
	<?php tha_sidebar_top(); ?>

	<?php
	$image_url = esc_url( get_theme_mod( 'themeslug_logo' ) );

	if ( glue_view_exist() ) {
		View::make( 'navbar/logo-desktop' )
			->with( 'site_url', get_site_url() )
			->with( 'site_name', get_bloginfo() )
			->with( 'logo_url', $image_url )
			->render();

		$categories = get_formated_taxonomies();

		View::make( 'navbar/navbar' )
			->with( 'categories', $categories )
			->render();
	}
?>

	<?php tha_sidebar_bottom(); ?>
	</aside>
	<?php tha_sidebars_after(); ?>
<?php /*

	<div id="secondary" class="widget-area" role="complementary">
	<?php do_action( 'before_sidebar' ); ?>
	<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

		<aside id="search" class="widget widget_search">
		</aside>

		<aside id="archives" class="widget">
		<h4 class="widget-title"><?php _e( 'Archives', 'some-like-it-neat' ); ?></h4>
		<ul>
		<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
	</ul>

		</aside>

		<aside id="meta" class="widget">
		<h4 class="widget-title"><?php _e( 'Meta', 'some-like-it-neat' ); ?></h4>
		<ul>
		<?php wp_register(); ?>
	<li><?php wp_loginout(); ?></li>
		<?php wp_meta(); ?>
	</ul>
		</aside>

		<?php endif;  ?>
	</div>
 */
?>
