<div class="navigation">
	<?php if( $prev ): ?>
	<div class="arrow previous">
		<a href="http://wwwhere.io/"><span data-icon="m"></span></a>
		<?php
		$svg = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="640" height="640" viewBox="0 0 640 640"><g></g><path d="M192 144v112h416v128h-416v112l-168-176 168-176z"/></svg>';
		$prev = str_replace('&laquo; Previous Page',  sprintf('<span class="icon">%s</span>', $svg), $prev);
		echo $prev;
		?>
	</div>
	<?php endif; ?>
	<?php if( $next ): ?>
	<div class="arrow next">
		<?php
		$svg = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="640" height="640" viewBox="0 0 640 640"><g></g><path d="M448 496v-112h-416v-128h416v-112l168 176-168 176z"/></svg>';
		$next = str_replace('Next Page &raquo;',  sprintf('<span class="icon">%s</span>', $svg), $next);
		echo $next;
		?>
	</div>
	<?php endif; ?>
</div>
