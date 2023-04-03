	<?php
		// Elementor `footer` location
		if (!function_exists('elementor_theme_do_location') || !elementor_theme_do_location('footer')) {
			get_template_part('fallback-template-parts/footer');
		}
	?>
	<?php wp_footer(); ?>
	</body>
</html>