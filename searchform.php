<?php
use glue\View;

	if ( glue_view_exist() ) {
		View::make( 'shared/search-form' )
			->with( 'action', esc_url( home_url( '/' ) ) )
			->with( 'value', get_search_query() )
			->with( 'placeholder', 'Search')
			->render();
	}
?>
