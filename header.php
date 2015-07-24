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

		<!-- Aside -->

		<aside>
			<?php
				$image_url = esc_url( get_theme_mod( 'themeslug_logo' ) );
			 ?>
			<?php
			if ( glue_view_exist() ) {
				View::make('shared/logo_desktop')
				  ->with('site_url', get_site_url())
				  ->with('site_name', get_bloginfo())
				  ->with('logo_url', $image_url)
				  ->render();
			}
			?>

			<?php
			if( glue_view_exist() ){
				View::make('shared/navbar')
				  ->render();
			}
			?>
		</aside>

		<div class="column-parent">

			<!-- Header -->
			<header class="header flex-child">
				<?php
				if( glue_view_exist() ){
					$total = wp_count_posts( LINKS_POST_TYPE );
					View::make('shared/counter')
						->with('total', $total->publish)
						->with('prefix', 'Browsing')
						->render();
				}
				?>
				<div class="search-container" data-behavior="search-toggle">
					<form class="searchbox" action="http://wwwhere.io/search/results">
						<input type="text" name="q" placeholder="Search" class="searchbox-input" onkeyup="buttonUp()">
						<input type="submit" class="searchbox-submit" value="Go">
						<span class="searchbox-icon icon-search js-search-toggle"></span>
					</form>
				</div>
				<div class="menu-mobile button-default" data-behavior="modal-open"><span class="js-open-modal icon-menu"></span></div>
				<div class="sharing">
					<ul class="social-sharing">
						<li><a href="" class="popup share-twitter"><span class="share-icon icon-twitter"></span> <span class="share-text">tweet</span></a></li>
						<li><a href="" class="popup share-facebook"><span class="share-icon icon-facebook"></span> <span class="share-text">share</span></a></li>
					</ul>
				</div>
			</header>


