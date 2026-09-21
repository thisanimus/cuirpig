<?php get_header(); ?>

<main>

	<h1>Search results for <?php the_search_query(); ?>:</h1>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
			<article>
				<?php get_template_part('template-parts/post/header'); ?>
				<?php get_template_part('template-parts/post/content'); ?>
				<?php get_template_part('template-parts/post/footer'); ?>
			</article>
		<?php endwhile; ?>

		<?php the_posts_pagination(); ?>

	<?php else : ?>
		<p>Sorry, nothing matched your search.</p>
	<?php endif; ?>

</main>
<?php get_footer(); ?>