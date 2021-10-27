<?php
/**
 * Plugin name: Masterbar Note
 */
add_action( 'admin_bar_menu', function( WP_Admin_Bar $wp_menu ) {
	$wp_menu->add_node(
		array(
			'id'     => 'master-bar-note',
			'title'  => get_option( 'master-bar-note', 'Hello' ),
		)
	);
}, 100 );
