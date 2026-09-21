<?php get_header(); ?>

<main class="site-content">

	<section>
		<?php get_template_part('template-parts/section/header', null, [
			'title' => wp_strip_all_tags(get_the_archive_title()),
		]); ?>

		<?php if (have_posts()) : ?>

			<?php foreach ($posts as $post) : setup_postdata($post); ?>
				<article id="post-<?= $post->ID ?>">
					<?php get_template_part('template-parts/post/header'); ?>
					<?php get_template_part('template-parts/post/content'); ?>
					<?php get_template_part('template-parts/post/footer'); ?>
				</article>
			<?php endforeach;
			wp_reset_postdata(); ?>

			<?php the_posts_pagination(); ?>

			<?php get_template_part('template-parts/section/footer', null, [
				'meta' => [
					['label' => 'Post Count', 'text' => $wp_query->found_posts],
					['label' => 'Most Recent', 'text' => get_the_date('', $posts[0]), 'link' => get_permalink($posts[0])],
				]
			]); ?>

		<?php else : ?>
			<p>Nothing in this archive yet.</p>
		<?php endif; ?>

	</section>

</main>
<?php get_footer(); ?>
