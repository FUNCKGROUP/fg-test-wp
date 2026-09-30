=== FG Version Test ===
Contributors: funckgroup
Tags: testing, updates, diagnostics, version
Requires at least: 6.0
Tested up to: 7.1
Stable tag: 1.4.0
Requires PHP: 7.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A minimal diagnostic tool that displays its installed version in the WordPress admin bar for update testing.

== Description ==

FG Version Test is intentionally small. It provides a visible version marker in the WordPress admin bar so administrators and developers can verify which version is currently installed.

It is useful for testing and validating WordPress update workflows, including normal WordPress.org updates and development update mechanisms used in controlled environments.

It has no settings, stores no data, performs no tracking, makes no external requests, and has no dependency on FG Core or any other plugin.

= What it does =

* Displays "FG Version Test vX.Y.Z" in the WordPress admin bar.
* Links the admin-bar item to the Plugins screen.
* Provides a small, predictable test package whose version can be changed for update tests.

= Privacy =

FG Version Test does not collect, store, transmit, or process personal data.

== Installation ==

1. Install it through the WordPress Plugins screen or upload the ZIP file.
2. Activate "FG Version Test".
3. When the WordPress admin bar is visible, the installed version is shown there.

== Frequently Asked Questions ==

= Does this require FG Core? =

No. FG Version Test is completely standalone.

= Does this contact GitHub or another external service? =

No. FG Version Test itself makes no external requests. Other installed update-management tools may independently use metadata from the header.

= Does this change my site content or settings? =

No. It only adds a small version indicator to the WordPress admin bar.

= Is this intended for production functionality? =

Its purpose is diagnostic and update testing. It does not add public-facing site functionality.

== Changelog ==

= 1.4.0 =
* Renamed the WordPress.org-facing package to FG Version Test with the slug `fg-version-test`.
* Prepared metadata and documentation for WordPress.org distribution.
* Added WordPress and PHP requirement headers.
* Added translation-ready admin-bar text.
* Linked the admin-bar item directly to the Plugins screen.
* Confirmed the package remains standalone without FG Core.

= 1.3.1 =
* Previous test release under the earlier development name.
