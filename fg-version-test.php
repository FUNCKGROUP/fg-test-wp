<?php
/**
 * Plugin Name:       FG Version Test
 * Plugin URI:        https://github.com/FUNCKGROUP/fg-test-wp
 * Description:       Minimal diagnostic tool that displays its installed version in the WordPress admin bar for update testing.
 * Version:           1.4.0
 * Requires at least: 6.0
 * Requires PHP:      7.4
 * Author:            FUNCKGROUP
 * Author URI:        https://funckgroup.com/
 * License:           GPLv2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       fg-version-test
 * GitHub Plugin URI: https://github.com/FUNCKGROUP/fg-test-wp
 * Primary Branch:    main
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Current version.
 */
define( 'FG_VERSION_TEST_VERSION', '1.4.0' );

/**
 * Add the installed version to the WordPress admin bar.
 *
 * @param WP_Admin_Bar $wp_admin_bar WordPress admin bar instance.
 * @return void
 */
function fg_version_test_admin_bar( $wp_admin_bar ) {
	$wp_admin_bar->add_node(
		array(
			'id'    => 'fg-version-test',
			'title' => sprintf(
				/* translators: %s: Installed version. */
				esc_html__( 'FG Version Test v%s', 'fg-version-test' ),
				FG_VERSION_TEST_VERSION
			),
			'href'  => admin_url( 'plugins.php' ),
			'meta'  => array(
				'class' => 'fg-version-test-admin-bar',
			),
		)
	);
}
add_action( 'admin_bar_menu', 'fg_version_test_admin_bar', 100 );
