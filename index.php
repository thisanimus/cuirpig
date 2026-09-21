<?php get_header(); ?>

<main class="site-content">
	<!-- Section-contents -- contains the various posts or content pieces for the section -->
	<?php foreach (get_categories() as $cat) :
		$posts = get_posts(['category' => $cat->term_id, 'numberposts' => -1]); ?>
		<section>
			<?php get_template_part('template-parts/section/header', null, [
				'title' => $cat->name,
			]); ?>

			<?php foreach ($posts as $post) : setup_postdata($post); ?>
				<article id="post-<?= $post->ID ?>">
					<?php get_template_part('template-parts/post/header'); ?>
					<?php get_template_part('template-parts/post/content'); ?>
					<?php get_template_part('template-parts/post/footer'); ?>
				</article>
			<?php endforeach;
			wp_reset_postdata(); ?>

			<?php get_template_part('template-parts/section/footer', null, [
				'meta' => [
					['label' => 'Post Count', 'text' => $cat->count, 'link' => get_category_link($cat)],
					['label' => 'Most Recent', 'text' => get_the_date('', $posts[0]), 'link' => get_post_permalink($posts[0])],
				]
			]); ?>

		</section>
	<?php endforeach; ?>

</main>
<?php get_footer(); ?>