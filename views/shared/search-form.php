<div class="search-container" data-behavior="search-toggle">
	<form class="searchbox" action="<?php echo $action; ?>">
		<input	type="text" name="s" id="s" onkeyup="buttonUp()"
				placeholder="<?php echo $placeholder; ?>" class="searchbox-input"
				value="<?php echo $value; ?>">
		<input type="submit" class="searchbox-submit" value="Go">
		<span class="searchbox-icon icon-search js-search-toggle"></span>
	</form>
</div>
