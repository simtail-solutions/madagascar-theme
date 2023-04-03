<main id="simtailMain" class="simtail-main" role="main">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="post">
			<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="post-preview"><?php the_excerpt(); ?></div>
		</article>
		<?php endwhile; ?>
	<?php else: ?>
		<div class="no-posts">No posts found.</div>
	<?php endif; ?>
</main>