<!-- post-header -- title and bylines stuff, maybe an image -->
<header>
	<?php if (has_post_thumbnail($post)) : ?>
		<figure class="post-thumbnail"><?= get_the_post_thumbnail($post, 'large') ?></figure>
	<?php endif; ?>
	<h3><a href="<?= esc_url(get_permalink($post)) ?>"><?= esc_html(get_the_title($post)) ?></a></h3>
	<time datetime="<?= esc_attr(get_the_date('c', $post)) ?>"><?= esc_html(get_the_date('', $post)) ?></time>
</header>