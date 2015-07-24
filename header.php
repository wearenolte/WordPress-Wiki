<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package moxie_wiki
 */
?>
<?php use \glue\View; ?>

<!DOCTYPE html>
<?php tha_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
	<?php tha_head_top(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php tha_head_bottom(); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php tha_body_top(); ?>

	<div class="flex-child row-parent">

		<aside>
		<?php
		$image_url = esc_url( get_theme_mod( 'themeslug_logo' ) );

		if ( glue_view_exist() ) {
			View::make('header/logo-desktop')
			  ->with('site_url', get_site_url())
			  ->with('site_name', get_bloginfo())
			  ->with('logo_url', $image_url)
			  ->render();

			View::make('shared/navbar')
			  ->render();
		}
		?>
		</aside>

		<div class="column-parent">
		<?php
		if ( glue_view_exist() ){
			$total = wp_count_posts( LINKS_POST_TYPE );
			$counter = View::make('header/counter')
				->with('total', $total->publish)
				->with('prefix', 'Browsing');

			$header = View::make( 'header/header' )
				->with( 'counter', $counter )
				->with( 'search_form', get_search_form() )
				->render();
		}
		?>
