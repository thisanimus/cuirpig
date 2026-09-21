<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Header -- contains all of the header content for the document -->
	<meta charset="<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
	<meta name="language" content="english" />
	<meta name="description" content="<?php bloginfo('description'); ?> " />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1">
	<meta name="HandheldFriendly" content="True">
	<meta name="view-transition" content="same-origin" />
	<?php wp_head(); ?>



<body <?php body_class(); ?>>
	<!-- Content -- contains the body of the document -->

	<?php get_template_part('template-parts/site/header'); ?>

	<?php wp_body_open(); ?>
	<!-- Site-Content -- contains the various categorical sections -->