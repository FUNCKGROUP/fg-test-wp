=== FG Test Plugin ===
Contributors: funckgroup
Tags: testing, updates, diagnostics, admin bar
Requires at least: 6.0
Tested up to: 7.1
Stable tag: 1.4.0
Requires PHP: 7.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A minimal diagnostic plugin that displays its installed version in the WordPress admin bar for update testing.

== Description ==

FG Test Plugin is intentionally small. It provides a visible version marker in the WordPress admin bar so administrators and developers can verify which plugin version is currently installed.

The plugin is useful for testing and validating WordPress plugin update workflows, including normal WordPress.org updates and development update mechanisms used in controlled environments.

It has no settings, stores no data, performs no tracking, makes no external requests, and has no dependency on FG Core or any other plugin.

= What it does =

* Displays "FG Test Plugin vX.Y.Z" in the WordPress admin bar.
* Links the admin-bar item to the Plugins screen.
* Provides a small, predictable plugin whose version can be changed for update tests.

= Privacy =

FG Test Plugin does not collect, store, transmit, or process personal data.

== Installation ==

1. Install the plugin through the WordPress Plugins screen or upload the plugin ZIP file.
2. Activate "FG Test Plugin".
3. When the WordPress admin bar is visible, the installed plugin version is shown there.

== Frequently Asked Questions ==

= Does this plugin require FG Core? =

No. FG Test Plugin is completely standalone.

= Does this plugin contact GitHub or another external service? =

No. FG Test Plugin itself makes no external requests. Other installed update-management plugins may independently use metadata from the plugin header.

= Does this plugin change my site content or settings? =

No. It only adds a small version indicator to the WordPress admin bar.

= Is this intended for production functionality? =

Its purpose is diagnostic and update testing. It does not add public-facing site functionality.

== Changelog ==

= 1.4.0 =
* Prepared the plugin metadata and documentation for WordPress.org distribution.
* Added WordPress and PHP requirement headers.
* Added translation-ready admin-bar text.
* Linked the admin-bar item directly to the Plugins screen.
* Confirmed the plugin remains standalone without FG Core.

= 1.3.1 =
* Previous test release.
