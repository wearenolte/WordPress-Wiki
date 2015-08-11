<?php if( $content ): ?>
<section class="list-links flex-child">
	<div class="link single-link">
		<div class="link-color" style="background:#F08484"></div>
		<div class="link-content">
			<h2><?php the_title(); ?></h2>
		</div>
		<div class="link-content">
			<?php
			if( class_exists('Parsedown') ){
				$Parsedown = new Parsedown();
				$content = $Parsedown->text( $content );
			}
			printf('%s', $content);
			?>
		</div>
	</div>
</section>
<?php endif; ?>
