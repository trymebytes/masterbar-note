<?php
/**
 * Plugin name: Masterbar Note
 * Text Domain: masterbar-note
 * Requires at least: 4.6
 */
add_action( 'admin_bar_menu', function( WP_Admin_Bar $wp_menu ) {
	$wp_menu->add_node(
		array(
			'id'     => 'master-bar-note',
			'title'  => get_option( 'master-bar-note', 'Hello' ),
		)
	);
}, 100 );

add_action( 'admin_init', function() {
    register_setting(
        'general',             // Options group
        'master-bar-note',     // Option name/database
        'sanitize_text_field'  // Sanitize callback function
    );
    add_settings_field(
        'master-bar-note-field',    // Field ID
        'Masterbar Note',           // Field title
        'master_bar_note_callback', // Field callback function
        'general',                  // Settings page slug
    );

} );

function master_bar_note_callback(){
    ?>
    <label for="master-bar-note-field">
        <input type="text" value="<?php echo esc_attr( get_option( 'master-bar-note', 'Hello' ) ); ?>" name="master-bar-note" id="master-bar-note-field"/>
        <p class="description">
        <?php _e( 'This is the text you\'d like to appear in the Master Bar.', 'masterbar-note' ); ?>
        </p>
    </label>
    <?php
}
