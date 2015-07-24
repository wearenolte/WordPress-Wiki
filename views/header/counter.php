<p class="link-count">
	<span class="link-icon icon-eye"></span>
	<?php
	$suffix = ( (int) $total === 1 ) ? 'link' : 'links';
	printf('%s <span class="link-highlight">%d</span> %s',
		$view->has('prefix') ? $prefix : '',
		$view->has('total') ? $total : 0,
		$suffix
	); ?>
</p>
