<?php if ( ! empty( $categories ) ) : ?>
<nav class="navbar">
	<ul class="accordion" data-behavior="accordion">

		<?php
		foreach( $categories as $parent ):
			extract( $parent );
			$childs = isset( $childs ) ? $childs : array();
			$arrow_class = empty( $childs ) ? '' : 'icon-keyboard-arrow-right'
		?>

		<li class="item-accordion">
			<h3 class="js-accordion-trigger"><?php echo $title; ?>
				<span class="link-icon <?php echo $arrow_class; ?>"></span>
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
