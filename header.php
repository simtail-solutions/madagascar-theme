<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>
			<?php
				global $page, $paged;
				wp_title( '|', true, 'right' );
				bloginfo( 'name' );
				$site_description = get_bloginfo( 'description', 'display' );
				if ( $site_description && ( is_home() || is_front_page() ) )
					echo " | $site_description";
				if ( $paged >= 2 || $page >= 2 )
					echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
			?>
			<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		</title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>