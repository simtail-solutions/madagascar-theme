<?php

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo bloginfo( 'stylesheet_url' ); ?>" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> id="simtail">
	<?php
		// Elementor `header` location
		if (!function_exists('elementor_theme_do_location') || !elementor_theme_do_location('header')) {
			get_template_part('fallback-template-parts/header');
		}
