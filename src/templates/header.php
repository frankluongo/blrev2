<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="p:domain_verify" content="9ed437cd49deaa691d2dc766113f20b5"/>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
    <?php get_template_part('components/header'); ?>
		<main id="main-content">
