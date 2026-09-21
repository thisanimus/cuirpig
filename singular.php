<?php get_header();
global $post;
?>

<main>

	<?php while (have_posts()) : the_post(); ?>
		<article>
			<?php get_template_part('template-parts/post/header'); ?>
			<?php get_template_part('template-parts/post/content', 'full'); ?>
			<?php get_template_part('template-parts/post/footer'); ?>
		</article>
	<?php endwhile; ?>

</main>
<?php get_footer(); ?>