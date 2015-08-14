<?php if( $view->has( $categories ) ): ?>
<div class="modal">
	<div class="modal-overlay modal-toggle"></div>
	<div class="modal-wrapper modal-transition">
		<div class="modal-header" data-behavior="modal-close"><span class="modal-close js-close-modal icon-close"></span></div>
		<div class="modal-body">
			<ul>
			<?php
			foreach( $categories as $category ):
				extract( $category );
				printf('<li><a href="%s">%s</a></li>', $link, $title);
				foreach( $childs as $child_category ) :
					extract( $child_category );
					printf('<li><a href="%s">%s</a></li>', $link, $title);
				endforeach;
			endforeach;
			?>
			</ul>
		</div>
	</div>
</div>
<?php endif; ?>
