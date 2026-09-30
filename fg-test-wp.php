<?php
/**
 * Plugin Name:       FG Test Plugin
 * Plugin URI:        https://github.com/FUNCKGROUP/fg-test-wp
 * Description:       Minimal diagnostic plugin that displays its installed version in the WordPress admin bar for update testing.
 * Version:           1.4.0
 * Requires at least: 6.0
 * Requires PHP:      7.4
 * Author:            FUNCKGROUP
 * Author URI:        https://funckgroup.com/
 * License:           GPLv2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       fg-test-wp
 * GitHub Plugin URI: https://github.com/FUNCKGROUP/fg-test-wp
 * Primary Branch:    main
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Plugin version.
 */
define( 'FG_TEST_WP_VERSION', '1.4.0' );

/**
 * Add the plugin name and installed version to the WordPress admin bar.
 *
 * @param WP_Admin_Bar $wp_admin_bar WordPress admin bar instance.
 * @return void
 */
function fg_test_wp_admin_bar( $wp_admin_bar ) {
	$wp_admin_bar->add_node(
		array(
			'id'    => 'fg-test-wp',
			'title' => sprintf(
				/* translators: %s: Installed plugin version. */
				esc_html__( 'FG Test Plugin v%s', 'fg-test-wp' ),
				FG_TEST_WP_VERSION
			),
			'href'  => admin_url( 'plugins.php' ),
			'meta'  => array(
				'class' => 'fg-test-wp-admin-bar',
			),
		)
	);
}
add_action( 'admin_bar_menu', 'fg_test_wp_admin_bar', 100 );
