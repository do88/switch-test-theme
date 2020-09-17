<?php
// Register menus
register_nav_menus(
	array(
		'main-nav'		=> __( 'Main Menu', 'jointswp' ),
	)
);

// The Top Menu Desktop
function joints_top_nav() {
	wp_nav_menu(array(
		'container'			=> false,
		'items_wrap'		=> '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown">%3$s</ul>',
		'theme_location'	=> 'main-nav',
		'depth'				=> 1,
		'fallback_cb'		=> false,
	));
}
