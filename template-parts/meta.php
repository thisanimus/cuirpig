<?php if (!empty($args['meta'])) : ?>
	<dl class="meta">
		<?php foreach ($args['meta'] as $item) : ?>
			<dt><?= esc_html($item['label']) ?></dt>
			<dd><?= implode(', ', array_map(
					fn($i) => empty($i['link'])
						? esc_html($i['text'])
						: '<a href="' . esc_url($i['link']) . '">' . esc_html($i['text']) . '</a>',
					$item['items'] ?? [$item]
				)) ?></dd>
		<?php endforeach; ?>
	</dl>
<?php endif; ?>
