<div class="link-block">
	<div class="link">
		<div class="link-link">
			<a href="<?php echo $link ?>" target="_blank">
				<span class="icon-link-external"></span>
			</a>
		</div>
		<div class="link-color" style="background:#F08484"></div>
		<div class="link-inner">
			<div class="link-top">
				<?php if( $img ): ?>
				<a href="<?php echo $link ?>" target="_blank">
					<img src="<?php echo $img; ?>" alt="<?php echo $title; ?>">
				</a>
				<?php endif; ?>
				<div class="link-main">
					<a href="<?php echo $link ?>" target="_blank">
						<h2 class="link-title"><?php echo $title ?></h2>
					</a>
					<a href="<?php echo $link; ?>" target="_blank">
						<h6 class="link-address"><?php echo $link ?></h6>
					</a>
					<?php if( ! empty( $categories ) ): ?>
					<div class="link-tags">
						<ul>
							<li><span class="tag icon-tag"></span></li>
						<?php foreach( $categories as $category ): ?>
							<?php extract( $category ); ?>
							<li><a href="<?php echo $link; ?>"><?php echo $name; ?></a></li>
						<?php endforeach; ?>
						</ul>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<p class="link-description"><?php echo $description ?></p>
		</div>
	</div>
</div>