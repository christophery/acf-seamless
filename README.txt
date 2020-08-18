=== ACF Seamless ===

Contributors: cmyee
Tags: Advanced Custom Fields, ACF, seamless, restore, style
Requires at least: 5.2
Tested up to: 5.5
Stable tag: 1.0.1
Requires PHP: 5.6
License: GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.en.html

Restore the seamless style to ACF Field Groups when using the Gutenberg editor.

== Description ==

ACF Seamless is a WordPress plugin that will [restore the seamless style](https://github.com/AdvancedCustomFields/acf/issues/193#issuecomment-501916061) to ACF Field Groups when using the Gutenberg editor.

By default [Advanced Custom Fields (ACF)](https://www.advancedcustomfields.com/) will display Field Groups with the standard WordPress metabox styling when using the Gutenberg editor.

== Requirements ==
- [Advanced Custom Fields 5.8+](https://www.advancedcustomfields.com/)
- [Gutenberg editor](https://wordpress.org/gutenberg/)

== Getting Started ==
1. Create or edit a [ACF field Group](https://www.advancedcustomfields.com/resources/creating-a-field-group/) with fields.
2. Under **Settings** set the **Style** to **Seamless (no metabox)**.
3. **Publish** or **Save** your Field Group.

== Screenshots ==
1. Standard (WP metabox) vs Seamless (no metabox)

== Installation ==

**Manual Installation**

1. Unzip the downloaded file.
2. Upload the plugin directory to the `/wp-content/plugins/` directory of your WordPress installation.
3. Activate the plugin through the Plugins menu the WordPress dashboard.

== Frequently Asked Questions ==
= I don't see any difference with my ACF Field Groups =
This plugin will have no visual effect if you are using the [Classic Editor](https://en-ca.wordpress.org/plugins/classic-editor/) or using a older version of Advanced Custom Fields.

= I need help with Advanced Custom Fields! =
For questions regarding [Advanced Custom Fields](https://www.advancedcustomfields.com/), please [view their support page](https://www.advancedcustomfields.com/support/) or [contact them](https://www.advancedcustomfields.com/contact/).

== Changelog ==

= 1.0.1 =
Renamed cmyee_acf_seamless_js() function
Updated license to GPL3

= 1.0.0 =
Initial Release
