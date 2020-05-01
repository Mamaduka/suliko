<article class="entry mb-12">
	<header class="mb-6">
		<h2 class="font-bold text-gray-900 text-3xl leading-tight mb-1">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h2>
		<p class="font-mono text-gray-600 text-sm leading-none"><?php echo get_the_date(); ?></p>
	</header>
	<div class="entry-content text-gray-800 text-lg leading-relaxed">
		<?php the_content(); ?>
	</div>
</article>
