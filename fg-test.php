<?php
/**
 * Plugin Name: FG Test Plugin
 * Plugin URI: https://www.funckgroup.com
 * Description: Ein einfaches Test-Plugin, das den Namen und die Version in der Admin-Leiste anzeigt.
 * Version: 1.2.1
 * Author: FUNCKGROUP
 * Author URI: https://funckgroup.com
 * License: GPL2
 * GitHub Plugin URI: https://github.com/FUNCKGROUP/fg-test-wp
 * Primary Branch: main
 */

if (!defined('ABSPATH')) {
    exit; // Sicherheitscheck
}

// Funktion zum Hinzufügen des Menüeintrags in der Admin-Leiste
function fg_test_plugin_admin_bar($wp_admin_bar) {
    $args = array(
        'id'    => 'fg_test_plugin',
        'title' => 'FG Test Plugin v1.2.1',
        'href'  => admin_url(),
        'meta'  => array(
            'class' => 'fg-test-plugin-class',
        ),
    );
    $wp_admin_bar->add_node($args);
}
add_action('admin_bar_menu', 'fg_test_plugin_admin_bar', 100);