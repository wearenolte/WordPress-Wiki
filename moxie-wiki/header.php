<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package moxie_wiki
 */
?>
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
		<section class="branding">
			<figure>
				<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
						<img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
					</a>
				<?php else : ?>
				<?php endif; ?>

			</figure>
			<h1><a href="<?php echo site_url(); ?>"><?php bloginfo(); ?></a></h1>
		</section>

		<nav class="navbar">
			<ul class="accordion" data-behavior="accordion">
				<li class="item-accordion">
					<h3 class="js-accordion-trigger">
						Architecture
						<span class="link-icon icon-keyboard-arrow-right"></span>
					</h3>
					<ul class="sub">
						<li><a href="">Cms</a></li>
						<li><a href="">eCommerce</a></li>
						<li><a href="">Frameworks</a></li>
						<li><a href="">Grids</a></li>
						<li><a href="">Preprocessors</a></li>
					</ul>
				</li>
				<li class="item-accordion">
					<h3 class="js-accordion-trigger">
						Coding
						<span class="link-icon icon-keyboard-arrow-right"></span>
					</h3>
					<ul class="sub">
						<li><a href="">Cms</a></li>
						<li><a href="">eCommerce</a></li>
						<li><a href="">Frameworks</a></li>
						<li><a href="">Grids</a></li>
						<li><a href="">Preprocessors</a></li>
					</ul>
				</li>
				<li class="item-accordion">
					<h3 class="js-accordion-trigger">
						Community
						<span class="link-icon icon-keyboard-arrow-right"></span>
					</h3>
					<ul class="sub">
						<li><a href="">Cms</a></li>
						<li><a href="">eCommerce</a></li>
						<li><a href="">Frameworks</a></li>
						<li><a href="">Grids</a></li>
						<li><a href="">Preprocessors</a></li>
					</ul>
				</li>
				<li>
					<h3 class="js-accordion-trigger">
						Ux
						<span class="link-icon icon-keyboard-arrow-right"></span>
					</h3>
					<ul class="sub">
						<li><a href="">Cms</a></li>
						<li><a href="">eCommerce</a></li>
						<li><a href="">Frameworks</a></li>
						<li><a href="">Grids</a></li>
						<li><a href="">Preprocessors</a></li>
					</ul>
				</li>
				<li>
					<h3 class="js-accordion-trigger">
						Blog and News
						<span class="link-icon icon-keyboard-arrow-right"></span>
					</h3>
					<ul class="sub">
						<li><a href="">Cms</a></li>
						<li><a href="">eCommerce</a></li>
						<li><a href="">Frameworks</a></li>
						<li><a href="">Grids</a></li>
						<li><a href="">Preprocessors</a></li>
					</ul>
				</li>
				<li>
					<h3 class="js-accordion-trigger">
						Services
						<span class="link-icon icon-keyboard-arrow-right"></span>
					</h3>
					<ul class="sub">
						<li><a href="">Cms</a></li>
						<li><a href="">eCommerce</a></li>
						<li><a href="">Frameworks</a></li>
						<li><a href="">Grids</a></li>
						<li><a href="">Preprocessors</a></li>
					</ul>
				</li>
				<li>
					<h3 class="js-accordion-trigger">
						Set Up
						<span class="link-icon icon-keyboard-arrow-right"></span>
					</h3>
					<ul class="sub">
						<li><a href="">Cms</a></li>
						<li><a href="">eCommerce</a></li>
						<li><a href="">Frameworks</a></li>
						<li><a href="">Grids</a></li>
						<li><a href="">Preprocessors</a></li>
					</ul>
				</li>
				<li>
					<h3 class="js-accordion-trigger">
						Inspiration
						<span class="link-icon icon-keyboard-arrow-right"></span>
					</h3>
					<ul class="sub">
						<li><a href="">Cms</a></li>
						<li><a href="">eCommerce</a></li>
						<li><a href="">Frameworks</a></li>
						<li><a href="">Grids</a></li>
						<li><a href="">Preprocessors</a></li>
					</ul>
				</li>
				<li>
					<h3 class="js-accordion-trigger">
						Project Tools
						<span class="link-icon icon-keyboard-arrow-right"></span>
					</h3>
					<ul class="sub">
						<li><a href="">Cms</a></li>
						<li><a href="">eCommerce</a></li>
						<li><a href="">Frameworks</a></li>
						<li><a href="">Grids</a></li>
						<li><a href="">Preprocessors</a></li>
					</ul>
				</li>
				<li>
					<h3 class="js-accordion-trigger">
						Elements
						<span class="link-icon icon-keyboard-arrow-right"></span>
					</h3>
					<ul class="sub">
						<li><a href="">Cms</a></li>
						<li><a href="">eCommerce</a></li>
						<li><a href="">Frameworks</a></li>
						<li><a href="">Grids</a></li>
						<li><a href="">Preprocessors</a></li>
					</ul>
				</li>
				<li>
					<h3 class="js-accordion-trigger">
						Other Resources
						<span class="link-icon icon-keyboard-arrow-right"></span>
					</h3>
					<ul class="sub">
						<li><a href="">Cms</a></li>
						<li><a href="">eCommerce</a></li>
						<li><a href="">Frameworks</a></li>
						<li><a href="">Grids</a></li>
						<li><a href="">Preprocessors</a></li>
					</ul>
				</li>
				<li data-behavior="modal-open">
					<h3 class="js-open-modal">
						Show All
						<span class="link-icon icon-gallery"></span>
					</h3>
				</li>
			</ul>
		</nav>
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


		<!-- List Links -->
<!--
		<section class="list-links flex-child">
			<div class="link-block">
				<div class="link">
					<div class="link-link"><a href="http://usabilitytools.com/" target="_blank"><span class="icon-link-external"></span></a></div>
					<div class="link-color" style="background:#F08484"></div>
					<div class="link-inner">
						<div class="link-top">
							<a href="http://usabilitytools.com/" target="_blank"><img class="link-thumb" src="http://wwwhere.io/img/thumbs/usabilitytools.jpg" alt="UsabilityTools logo"></a>
							<div class="link-main">
								<a href="http://usabilitytools.com/" target="_blank">
									<h2 class="link-title">UsabilityTools</h2>
								</a>
								<a href="http://usabilitytools.com/" target="_blank">
									<h6 class="link-address">usabilitytools.com</h6>
								</a>
								<div class="link-tags">
									<ul>
										<li><span class="tag icon-tag"></span></li>
										<li><a href="http://wwwhere.io/tags/behavior">behavior</a></li>
										<li><a href="http://wwwhere.io/tags/user%20research">user research</a></li>
									</ul>
								</div>
							</div>
						</div>
						<p class="link-description">Optimize websites for higher conversion and better customer experience.</p>
					</div>
				</div>
			</div>

			<div class="link-block">
				<div class="link">
					<div class="link-link"><a href="http://usabilitytools.com/" target="_blank"><span class="icon-link-external"></span></a></div>
					<div class="link-color" style="background:#F08484"></div>
					<div class="link-inner">
						<div class="link-top">
							<a href="http://usabilitytools.com/" target="_blank"><img class="link-thumb" src="http://wwwhere.io/img/thumbs/usabilitytools.jpg" alt="UsabilityTools logo"></a>
							<div class="link-main">
								<a href="http://usabilitytools.com/" target="_blank">
									<h2 class="link-title">UsabilityTools</h2>
								</a>
								<a href="http://usabilitytools.com/" target="_blank">
									<h6 class="link-address">usabilitytools.com</h6>
								</a>
								<div class="link-tags">
									<ul>
										<li><span class="tag icon-tag"></span></li>
										<li><a href="http://wwwhere.io/tags/behavior">behavior</a></li>
										<li><a href="http://wwwhere.io/tags/user%20research">user research</a></li>
									</ul>
								</div>
							</div>
						</div>
						<p class="link-description">Optimize websites for higher conversion and better customer experience.</p>
					</div>
				</div>
			</div>

			<div class="link-block">
				<div class="link">
					<div class="link-link"><a href="http://usabilitytools.com/" target="_blank"><span class="icon-link-external"></span></a></div>
					<div class="link-color" style="background:#F08484"></div>
					<div class="link-inner">
						<div class="link-top">
							<a href="http://usabilitytools.com/" target="_blank"><img class="link-thumb" src="http://wwwhere.io/img/thumbs/usabilitytools.jpg" alt="UsabilityTools logo"></a>
							<div class="link-main">
								<a href="http://usabilitytools.com/" target="_blank">
									<h2 class="link-title">UsabilityTools</h2>
								</a>
								<a href="http://usabilitytools.com/" target="_blank">
									<h6 class="link-address">usabilitytools.com</h6>
								</a>
								<div class="link-tags">
									<ul>
										<li><span class="tag icon-tag"></span></li>
										<li><a href="http://wwwhere.io/tags/behavior">behavior</a></li>
										<li><a href="http://wwwhere.io/tags/user%20research">user research</a></li>
									</ul>
								</div>
							</div>
						</div>
						<p class="link-description">Optimize websites for higher conversion and better customer experience.</p>
					</div>
				</div>
			</div>

			<div class="link-block">
				<div class="link">
					<div class="link-link"><a href="http://usabilitytools.com/" target="_blank"><span class="icon-link-external"></span></a></div>
					<div class="link-color" style="background:#F08484"></div>
					<div class="link-inner">
						<div class="link-top">
							<a href="http://usabilitytools.com/" target="_blank"><img class="link-thumb" src="http://wwwhere.io/img/thumbs/usabilitytools.jpg" alt="UsabilityTools logo"></a>
							<div class="link-main">
								<a href="http://usabilitytools.com/" target="_blank">
									<h2 class="link-title">UsabilityTools</h2>
								</a>
								<a href="http://usabilitytools.com/" target="_blank">
									<h6 class="link-address">usabilitytools.com</h6>
								</a>
								<div class="link-tags">
									<ul>
										<li><span class="tag icon-tag"></span></li>
										<li><a href="http://wwwhere.io/tags/behavior">behavior</a></li>
										<li><a href="http://wwwhere.io/tags/user%20research">user research</a></li>
									</ul>
								</div>
							</div>
						</div>
						<p class="link-description">Optimize websites for higher conversion and better customer experience.</p>
					</div>
				</div>
			</div>

			<div class="link-block">
				<div class="link">
					<div class="link-link"><a href="http://usabilitytools.com/" target="_blank"><span class="icon-link-external"></span></a></div>
					<div class="link-color" style="background:#F08484"></div>
					<div class="link-inner">
						<div class="link-top">
							<a href="http://usabilitytools.com/" target="_blank"><img class="link-thumb" src="http://wwwhere.io/img/thumbs/usabilitytools.jpg" alt="UsabilityTools logo"></a>
							<div class="link-main">
								<a href="http://usabilitytools.com/" target="_blank">
									<h2 class="link-title">UsabilityTools</h2>
								</a>
								<a href="http://usabilitytools.com/" target="_blank">
									<h6 class="link-address">usabilitytools.com</h6>
								</a>
								<div class="link-tags">
									<ul>
										<li><span class="tag icon-tag"></span></li>
										<li><a href="http://wwwhere.io/tags/behavior">behavior</a></li>
										<li><a href="http://wwwhere.io/tags/user%20research">user research</a></li>
									</ul>
								</div>
							</div>
						</div>
						<p class="link-description">Optimize websites for higher conversion and better customer experience.</p>
					</div>
				</div>
			</div>

			<div class="link-block">
				<div class="link">
					<div class="link-link"><a href="http://usabilitytools.com/" target="_blank"><span class="icon-link-external"></span></a></div>
					<div class="link-color" style="background:#F08484"></div>
					<div class="link-inner">
						<div class="link-top">
							<a href="http://usabilitytools.com/" target="_blank"><img class="link-thumb" src="http://wwwhere.io/img/thumbs/usabilitytools.jpg" alt="UsabilityTools logo"></a>
							<div class="link-main">
								<a href="http://usabilitytools.com/" target="_blank">
									<h2 class="link-title">UsabilityTools</h2>
								</a>
								<a href="http://usabilitytools.com/" target="_blank">
									<h6 class="link-address">usabilitytools.com</h6>
								</a>
								<div class="link-tags">
									<ul>
										<li><span class="tag icon-tag"></span></li>
										<li><a href="http://wwwhere.io/tags/behavior">behavior</a></li>
										<li><a href="http://wwwhere.io/tags/user%20research">user research</a></li>
									</ul>
								</div>
							</div>
						</div>
						<p class="link-description">Optimize websites for higher conversion and better customer experience.</p>
					</div>
				</div>
			</div>

			<div class="link-block">
				<div class="link">
					<div class="link-link"><a href="http://usabilitytools.com/" target="_blank"><span class="icon-link-external"></span></a></div>
					<div class="link-color" style="background:#F08484"></div>
					<div class="link-inner">
						<div class="link-top">
							<a href="http://usabilitytools.com/" target="_blank"><img class="link-thumb" src="http://wwwhere.io/img/thumbs/usabilitytools.jpg" alt="UsabilityTools logo"></a>
							<div class="link-main">
								<a href="http://usabilitytools.com/" target="_blank">
									<h2 class="link-title">UsabilityTools</h2>
								</a>
								<a href="http://usabilitytools.com/" target="_blank">
									<h6 class="link-address">usabilitytools.com</h6>
								</a>
								<div class="link-tags">
									<ul>
										<li><span class="tag icon-tag"></span></li>
										<li><a href="http://wwwhere.io/tags/behavior">behavior</a></li>
										<li><a href="http://wwwhere.io/tags/user%20research">user research</a></li>
									</ul>
								</div>
							</div>
						</div>
						<p class="link-description">Optimize websites for higher conversion and better customer experience.</p>
					</div>
				</div>
			</div>

			<div class="link-block">
				<div class="link">
					<div class="link-link"><a href="http://usabilitytools.com/" target="_blank"><span class="icon-link-external"></span></a></div>
					<div class="link-color" style="background:#F08484"></div>
					<div class="link-inner">
						<div class="link-top">
							<a href="http://usabilitytools.com/" target="_blank"><img class="link-thumb" src="http://wwwhere.io/img/thumbs/usabilitytools.jpg" alt="UsabilityTools logo"></a>
							<div class="link-main">
								<a href="http://usabilitytools.com/" target="_blank">
									<h2 class="link-title">UsabilityTools</h2>
								</a>
								<a href="http://usabilitytools.com/" target="_blank">
									<h6 class="link-address">usabilitytools.com</h6>
								</a>
								<div class="link-tags">
									<ul>
										<li><span class="tag icon-tag"></span></li>
										<li><a href="http://wwwhere.io/tags/behavior">behavior</a></li>
										<li><a href="http://wwwhere.io/tags/user%20research">user research</a></li>
									</ul>
								</div>
							</div>
						</div>
						<p class="link-description">Optimize websites for higher conversion and better customer experience.</p>
					</div>
				</div>
			</div>

			<div class="link-block">
				<div class="link">
					<div class="link-link"><a href="http://usabilitytools.com/" target="_blank"><span class="icon-link-external"></span></a></div>
					<div class="link-color" style="background:#F08484"></div>
					<div class="link-inner">
						<div class="link-top">
							<a href="http://usabilitytools.com/" target="_blank"><img class="link-thumb" src="http://wwwhere.io/img/thumbs/usabilitytools.jpg" alt="UsabilityTools logo"></a>
							<div class="link-main">
								<a href="http://usabilitytools.com/" target="_blank">
									<h2 class="link-title">UsabilityTools</h2>
								</a>
								<a href="http://usabilitytools.com/" target="_blank">
									<h6 class="link-address">usabilitytools.com</h6>
								</a>
								<div class="link-tags">
									<ul>
										<li><span class="tag icon-tag"></span></li>
										<li><a href="http://wwwhere.io/tags/behavior">behavior</a></li>
										<li><a href="http://wwwhere.io/tags/user%20research">user research</a></li>
									</ul>
								</div>
							</div>
						</div>
						<p class="link-description">Optimize websites for higher conversion and better customer experience.</p>
					</div>
				</div>
			</div>

			<div class="link-block">
				<div class="link">
					<div class="link-link"><a href="http://usabilitytools.com/" target="_blank"><span class="icon-link-external"></span></a></div>
					<div class="link-color" style="background:#F08484"></div>
					<div class="link-inner">
						<div class="link-top">
							<a href="http://usabilitytools.com/" target="_blank"><img class="link-thumb" src="http://wwwhere.io/img/thumbs/usabilitytools.jpg" alt="UsabilityTools logo"></a>
							<div class="link-main">
								<a href="http://usabilitytools.com/" target="_blank">
									<h2 class="link-title">UsabilityTools</h2>
								</a>
								<a href="http://usabilitytools.com/" target="_blank">
									<h6 class="link-address">usabilitytools.com</h6>
								</a>
								<div class="link-tags">
									<ul>
										<li><span class="tag icon-tag"></span></li>
										<li><a href="http://wwwhere.io/tags/behavior">behavior</a></li>
										<li><a href="http://wwwhere.io/tags/user%20research">user research</a></li>
									</ul>
								</div>
							</div>
						</div>
						<p class="link-description">Optimize websites for higher conversion and better customer experience.</p>
					</div>
				</div>
			</div>

			<div class="link-block">
				<div class="link">
					<div class="link-link"><a href="http://usabilitytools.com/" target="_blank"><span class="icon-link-external"></span></a></div>
					<div class="link-color" style="background:#F08484"></div>
					<div class="link-inner">
						<div class="link-top">
							<a href="http://usabilitytools.com/" target="_blank"><img class="link-thumb" src="http://wwwhere.io/img/thumbs/usabilitytools.jpg" alt="UsabilityTools logo"></a>
							<div class="link-main">
								<a href="http://usabilitytools.com/" target="_blank">
									<h2 class="link-title">UsabilityTools</h2>
								</a>
								<a href="http://usabilitytools.com/" target="_blank">
									<h6 class="link-address">usabilitytools.com</h6>
								</a>
								<div class="link-tags">
									<ul>
										<li><span class="tag icon-tag"></span></li>
										<li><a href="http://wwwhere.io/tags/behavior">behavior</a></li>
										<li><a href="http://wwwhere.io/tags/user%20research">user research</a></li>
									</ul>
								</div>
							</div>
						</div>
						<p class="link-description">Optimize websites for higher conversion and better customer experience.</p>
					</div>
				</div>
			</div>

			<div class="link-block">
				<div class="link">
					<div class="link-link"><a href="http://usabilitytools.com/" target="_blank"><span class="icon-link-external"></span></a></div>
					<div class="link-color" style="background:#F08484"></div>
					<div class="link-inner">
						<div class="link-top">
							<a href="http://usabilitytools.com/" target="_blank"><img class="link-thumb" src="http://wwwhere.io/img/thumbs/usabilitytools.jpg" alt="UsabilityTools logo"></a>
							<div class="link-main">
								<a href="http://usabilitytools.com/" target="_blank">
									<h2 class="link-title">UsabilityTools</h2>
								</a>
								<a href="http://usabilitytools.com/" target="_blank">
									<h6 class="link-address">usabilitytools.com</h6>
								</a>
								<div class="link-tags">
									<ul>
										<li><span class="tag icon-tag"></span></li>
										<li><a href="http://wwwhere.io/tags/behavior">behavior</a></li>
										<li><a href="http://wwwhere.io/tags/user%20research">user research</a></li>
									</ul>
								</div>
							</div>
						</div>
						<p class="link-description">Optimize websites for higher conversion and better customer experience.</p>
					</div>
				</div>
			</div>

			<div class="link-block">
				<div class="link">
					<div class="link-link"><a href="http://usabilitytools.com/" target="_blank"><span class="icon-link-external"></span></a></div>
					<div class="link-color" style="background:#F08484"></div>
					<div class="link-inner">
						<div class="link-top">
							<a href="http://usabilitytools.com/" target="_blank"><img class="link-thumb" src="http://wwwhere.io/img/thumbs/usabilitytools.jpg" alt="UsabilityTools logo"></a>
							<div class="link-main">
								<a href="http://usabilitytools.com/" target="_blank">
									<h2 class="link-title">UsabilityTools</h2>
								</a>
								<a href="http://usabilitytools.com/" target="_blank">
									<h6 class="link-address">usabilitytools.com</h6>
								</a>
								<div class="link-tags">
									<ul>
										<li><span class="tag icon-tag"></span></li>
										<li><a href="http://wwwhere.io/tags/behavior">behavior</a></li>
										<li><a href="http://wwwhere.io/tags/user%20research">user research</a></li>
									</ul>
								</div>
							</div>
						</div>
						<p class="link-description">Optimize websites for higher conversion and better customer experience.</p>
					</div>
				</div>
			</div>

			<div class="link-block">
				<div class="link">
					<div class="link-link"><a href="http://usabilitytools.com/" target="_blank"><span class="icon-link-external"></span></a></div>
					<div class="link-color" style="background:#F08484"></div>
					<div class="link-inner">
						<div class="link-top">
							<a href="http://usabilitytools.com/" target="_blank"><img class="link-thumb" src="http://wwwhere.io/img/thumbs/usabilitytools.jpg" alt="UsabilityTools logo"></a>
							<div class="link-main">
								<a href="http://usabilitytools.com/" target="_blank">
									<h2 class="link-title">UsabilityTools</h2>
								</a>
								<a href="http://usabilitytools.com/" target="_blank">
									<h6 class="link-address">usabilitytools.com</h6>
								</a>
								<div class="link-tags">
									<ul>
										<li><span class="tag icon-tag"></span></li>
										<li><a href="http://wwwhere.io/tags/behavior">behavior</a></li>
										<li><a href="http://wwwhere.io/tags/user%20research">user research</a></li>
									</ul>
								</div>
							</div>
						</div>
						<p class="link-description">Optimize websites for higher conversion and better customer experience.</p>
					</div>
				</div>
			</div>

			<div class="link-block">
				<div class="link">
					<div class="link-link"><a href="http://usabilitytools.com/" target="_blank"><span class="icon-link-external"></span></a></div>
					<div class="link-color" style="background:#F08484"></div>
					<div class="link-inner">
						<div class="link-top">
							<a href="http://usabilitytools.com/" target="_blank"><img class="link-thumb" src="http://wwwhere.io/img/thumbs/usabilitytools.jpg" alt="UsabilityTools logo"></a>
							<div class="link-main">
								<a href="http://usabilitytools.com/" target="_blank">
									<h2 class="link-title">UsabilityTools</h2>
								</a>
								<a href="http://usabilitytools.com/" target="_blank">
									<h6 class="link-address">usabilitytools.com</h6>
								</a>
								<div class="link-tags">
									<ul>
										<li><span class="tag icon-tag"></span></li>
										<li><a href="http://wwwhere.io/tags/behavior">behavior</a></li>
										<li><a href="http://wwwhere.io/tags/user%20research">user research</a></li>
									</ul>
								</div>
							</div>
						</div>
						<p class="link-description">Optimize websites for higher conversion and better customer experience.</p>
					</div>
				</div>
			</div>

			<div class="link-block">
				<div class="link">
					<div class="link-link"><a href="http://usabilitytools.com/" target="_blank"><span class="icon-link-external"></span></a></div>
					<div class="link-color" style="background:#F08484"></div>
					<div class="link-inner">
						<div class="link-top">
							<a href="http://usabilitytools.com/" target="_blank"><img class="link-thumb" src="http://wwwhere.io/img/thumbs/usabilitytools.jpg" alt="UsabilityTools logo"></a>
							<div class="link-main">
								<a href="http://usabilitytools.com/" target="_blank">
									<h2 class="link-title">UsabilityTools</h2>
								</a>
								<a href="http://usabilitytools.com/" target="_blank">
									<h6 class="link-address">usabilitytools.com</h6>
								</a>
								<div class="link-tags">
									<ul>
										<li><span class="tag icon-tag"></span></li>
										<li><a href="http://wwwhere.io/tags/behavior">behavior</a></li>
										<li><a href="http://wwwhere.io/tags/user%20research">user research</a></li>
									</ul>
								</div>
							</div>
						</div>
						<p class="link-description">Optimize websites for higher conversion and better customer experience.</p>
					</div>
				</div>
			</div>

		</section> -->




