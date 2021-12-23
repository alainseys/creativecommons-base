<!doctype html>
<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
	<link rel="stylesheet" href="https://unpkg.com/@creativecommons/fonts@2020.9.3/css/fonts.css">
	<link rel="stylesheet" href="https://unpkg.com/@creativecommons/vocabulary@2020.11.3/css/vocabulary.css">
	<script src="https://unpkg.com/vue@next"></script>
	<script src="https://unpkg.com/@creativecommons/cc-global-components@0.x.x/dist/cc-globals.min.js"></script>
	<title><?php wp_title('|'); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Div element for CC Explore Banner -->
	<div class="container">
		<div id="explore-cc">
			<cc-explore donation-url="https://classy.org/give/313412/#!/donation/checkout?c_src=website&amp;c_src2=top-of-page-banner" />
		</div>
	</div>
	<?php do_action('cc_theme_before_header'); ?>
	<!--BEGIN HEADER-->
	<header class="main-header">
		<?php do_action('cc_theme_before_header_content'); ?>
		<div class="container">
			<nav class="navbar">
				<div class="navbar-brand">
					<a href="<?php bloginfo('url'); ?>" class="has-text-black">
						<?php echo CC_Site::get_current_website_logo(); ?>
					</a>
					<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
						<span aria-hidden="true"></span>
						<span aria-hidden="true"></span>
						<span aria-hidden="true"></span>
					</a>
				</div>
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'main-navigation',
						'depth'           => 2,
						'container'       => 'div',
						'container_class' => 'navbar-menu',
						'items_wrap'      => '<div id="%1$s" class="navbar-end">%3$s</div>',
						'menu_class'      => 'navbar-menu',
						'menu_id'         => 'primary-menu',
						'after'           => '</div>',
						'walker'          => new Navwalker(),
					)
				);
				?>
			</nav>
		</div>
		<?php
		if (function_exists('yoast_breadcrumb')) {
			yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
		}
		?>
		<?php if (is_active_sidebar('after-navigation')) : ?>
			<div class="container notification-container push-up">
				<div class="columns is-centered is-gapless">
					<div class="column is-10">
						<?php dynamic_sidebar('after-navigation'); ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<?php do_action('cc_theme_after_header_content'); ?>
	</header>
	<!--END HEADER-->
	<?php do_action('cc_theme_after_header'); ?>