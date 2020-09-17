<!doctype html>
  <html class="no-js"  <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<?php wp_head(); ?>
		<script src="https://kit.fontawesome.com/7fa10e3b4f.js" crossorigin="anonymous"></script>
	</head>

<body <?php body_class(); ?>>

<header class="main-header" role="site-header">
	<div class="main-header__wrapper">
		<a href="/" class="main-header__logo">
			<?php echo get_bloginfo( 'name' ); ?>
		</a>
		<?php joints_top_nav(); ?>
	</div>

	<div class="main-header__mobile-menu off-canvas-wrapper">
		<a class="off-canvas-menu" data-toggle="mobileMenu"><i class="fas fa-bars"></i> Menu</a>
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
			<nav class="off-canvas position-right" id="mobileMenu" data-off-canvas data-position="right" role="mobile-navigation">
				<a class="off-canvas-close" data-toggle="mobileMenu"><i class="fas fa-times"></i> Close</a>
				<?php joints_top_nav(); ?>
			</nav>
		</div>
	</div>
</header>