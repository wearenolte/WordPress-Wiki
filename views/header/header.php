<header class="header flex-child">
	<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
		<a href="<?php echo $site_url ?>" class="logo-mobile" title='<?php echo $site_name ?>' rel='home'>
			<img src='<?php echo $logo_url ?>' alt='<?php echo $site_name ?>'>
		</a>
	<?php else : ?>
	<?php endif; ?>
	<?php if ( $view->has( $counter ) ): ?>
		<?php $counter->render(); ?>
	<?php endif; ?>

	<?php if ( $view->has( $search_form ) ): ?>
		<?php $search_form; ?>
	<?php endif; ?>
	<div class="menu-mobile button-default" data-behavior="modal-open"><span class="js-open-modal icon-menu"></span></div>
	<div class="sharing">
		<ul class="social-sharing">
			<?php if ( get_theme_mod( 'themeslug_social_twitter' ) ) : ?>
				<li><a href="" class="popup share-twitter"><span class="share-icon icon-twitter"></span> <span class="share-text">tweet</span></a></li>
			<?php else : ?>
			<?php endif; ?>

			<?php if ( get_theme_mod( 'themeslug_social_facebook' ) ) : ?>
				<li><a href="" class="popup share-facebook"><span class="share-icon icon-facebook"></span> <span class="share-text">share</span></a></li>
			<?php else : ?>
			<?php endif; ?>
		</ul>
	</div>
</header>


