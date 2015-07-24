<section class="branding">
	<figure>
		<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
			<a href="<?php echo $site_url ?>" title='<?php echo $site_name ?>' rel='home'>
				<img src='<?php echo $logo_url ?>' alt='<?php echo $site_name ?>'>
			</a>
		<?php else : ?>
		<?php endif; ?>

	</figure>
	<h1><a href="<?php echo $site_url ?>"><?php echo $site_name ?></a></h1>
</section>
