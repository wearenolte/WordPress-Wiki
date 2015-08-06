<?php
use glue\View;

	if ( glue_view_exist() ) {

		$classes = 'searchbox';
		if( is_search() ) {
			$classes .= ' searchbox-open';
		}

		View::make( 'shared/search-form' )
			->with( 'action', esc_url( home_url( '/' ) ) )
			->with( 'value', get_search_query() )
			->with( 'placeholder', 'Search')
			->with( 'classes', $classes )
			->render();
	}
?>
