	<footer>
		<?php
			$date = get_lastpostdate('blog', 'any');
			$dateObj = DateTimeImmutable::createFromFormat('Y-m-d H:i:s', $date);
		?>
		<span>&copy; <?= $dateObj->format('Y'); ?> <?=  bloginfo('name'); ?></span>
	</footer>
</div>