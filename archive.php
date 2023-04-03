<?php
get_header();

// Elementor `archive` location
if (!function_exists('elementor_theme_do_location') || !elementor_theme_do_location('archive')) {
	get_template_part( 'fallback-template-parts/archive' );
}

get_footer();
