<?php

	get_header();

	if ( is_archive() || is_home() || is_search() ) {
		get_template_part( 'fallback-template-parts/archive' );
	} elseif ( is_singular() ) {
		get_template_part( 'fallback-template-parts/single' );
	} else {
		get_template_part( 'fallback-template-parts/404' );
	}
	
	get_footer();

?>