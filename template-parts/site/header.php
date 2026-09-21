<!-- Site-header -- contains the site-identity/nav/etc. -->
<header>
	<h1><?php bloginfo('name'); ?></h1>
	<?php if (has_nav_menu('main_menu')) : ?>
		<nav><?php wp_nav_menu(array('theme_location' => 'main_menu')); ?></nav>
	<?php endif; ?>
</header>