<main id="simtailSingle" class="simtail-single" role="main">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="post">
			<h2 class="title"><?php the_title(); ?></h2>
			<div class="post-content"><?php the_content(); ?></div>
		</article>
		<?php endwhile; ?>
	<?php else: ?>
		<div class="no-posts">No posts found.</div>
	<?php endif; ?>
</main>