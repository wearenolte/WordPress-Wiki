<header class="header flex-child">
	<?php if( $view->has('counter') ): ?>
		<?php $counter->render(); ?>
	<?php endif; ?>
	<div class="search-container" data-behavior="search-toggle">
		<form class="searchbox" action="http://wwwhere.io/search/results">
			<input type="text" name="q" placeholder="Search" class="searchbox-input" onkeyup="buttonUp()">
			<input type="submit" class="searchbox-submit" value="Go">
			<span class="searchbox-icon icon-search js-search-toggle"></span>
		</form>
	</div>
	<div class="menu-mobile button-default" data-behavior="modal-open"><span class="js-open-modal icon-menu"></span></div>
	<div class="sharing">
		<ul class="social-sharing">
			<li><a href="" class="popup share-twitter"><span class="share-icon icon-twitter"></span> <span class="share-text">tweet</span></a></li>
			<li><a href="" class="popup share-facebook"><span class="share-icon icon-facebook"></span> <span class="share-text">share</span></a></li>
		</ul>
	</div>
</header>


