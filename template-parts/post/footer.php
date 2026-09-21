<!-- post -footer -- closing pieces -->
<?php $tags = get_the_tags($post); ?>
<footer>
	<?php get_template_part('template-parts/meta', null, ['meta' => array_values(array_filter([
		$tags ? ['label' => 'Tags', 'items' => array_map(
			fn($t) => ['text' => $t->name, 'link' => get_tag_link($t)],
			$tags
		)] : null,
		['label' => 'Permalink', 'text' => 'Read post', 'link' => get_permalink($post)],
	]))]); ?>
</footer>