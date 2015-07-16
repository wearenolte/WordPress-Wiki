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
	<style type="text/css">
		<?php if ( 'no' === get_theme_mod( 'some-like-it-neat_post_format_support' ) ) : ?>
			h1.entry-title:before {
				display: none;
			}
		<?php endif; ?>
	</style>

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
			View::make('shared/logo_desktop')
			  ->with('site_url', get_site_url())
			  ->with('site_name', get_bloginfo())
			  ->with('logo_url', $image_url)
			  ->render();
			?>

			<?php
			View::make('shared/navbar')
			  ->render();
			?>
		</aside>

		<div class="column-parent">

			<!-- Header -->
			<header class="header flex-child">
				<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home' class="logo-mobile">
						<img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
					</a>
				<?php else : ?>
					<a href="<?php echo site_url(); ?>"><?php bloginfo(); ?></a>
				<?php endif; ?>
				<p class="link-count"><span class="link-icon icon-eye"></span>Browsing <span class="link-highlight">646</span> links</p>
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


