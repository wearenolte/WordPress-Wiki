<?php if ( ! empty( $categories ) ) : ?>
<nav class="navbar">
	<ul class="accordion" data-behavior="accordion">

		<?php
		foreach( $categories as $parent ):
			extract( $parent );
			$childs = isset( $childs ) ? $childs : array();
			$arrow_class = '';
			if( empty( $childs) ){
				$title = sprintf('<a class="parent no-childs" href="%s" title="%s"><h3>%s</h3></a>',
					$link, $title, $title
				);
			} else {
				$arrow_class = 'icon-keyboard-arrow-right';
				$title = sprintf('<h3 class="js-accordion-trigger">%s<span class="link-icon %s"></span></h3>',
					$title, $arrow_class
				);
			}
		?>

			<li class="item-accordion">
				<?php echo $title; ?>
			</h3>
			<?php if( ! empty( $childs ) ): ?>
			<ul class="sub">
			<?php foreach ( $childs as $child ) : ?>
				<?php extract( $child ); ?>
				<li><a href="<?php echo $link; ?>"><?php echo $title; ?></a></li>
			<?php endforeach; ?>

			</ul>
			<?php endif; ?>
		</li>

		<?php endforeach; ?>

		<li data-behavior="modal-open">
			<h3 class="js-open-modal">
				Show All
				<span class="link-icon icon-gallery"></span>
			</h3>
		</li>
	</ul>
</nav>
<?php endif; ?>
