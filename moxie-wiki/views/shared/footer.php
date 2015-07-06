<footer class="footer">
	<div class="wrap">
		<div class="foot-description">
			<?php echo $foot_description ?>
		</div>
		<nav class="nav-footer">
			<ul>
				<?php foreach($nav_footer as $item => $values): extract( $values ); ?>
					<li><a href="<?php echo $link; ?>"><?php echo $title; ?></a></li>
				<?php endforeach; ?>
		</nav>
	</div>
</footer>
