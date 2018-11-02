# WP Tab Anchors
Contributors: AdamBCarrier
Tags: tabs, anchors, Bootstrap tabs
Donate link: http://www.marinersmuseum.org/donate
Requires at least: 3.8
Tested up to: 4.9.8
Stable tag: 1.4.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin allows you to permalink (i.e., bookmark) to content on Twitter Bootstrap 3 tabs via hash tag links.

## Description
This plugin allows you to permalink (i.e., bookmark) to content on Twitter Bootstrap tabs (and now content inside collapsible components) via hash tag links.

Out-of-the-box, Bootstrap 3 won't allow you to permalink to content inside the tabs. This plugin activates the tab containing the permalinked content and then scrolls the page to the hash mark (i.e., to the HTML element with the ID specified in the URL's hash mark). You don't even have to know which tab the content is on; the plugin figures it out. It does this so quick you really won't notice all this going on. Page visitors who arrive using your permalink will pretty much immediately see the content you permalinked.

Here's an example: You have an element inside a collapsed tab you want to link to. Give the element an ID (e.g., `<div id="mylink"> ... </div>`). Then, use that ID in the URL (e.g., `http://www.mydomain.com/page/#mylink`). That will activate the tab and scroll the page to the location of the ID.

If you don't want the page to scroll automatically, there's an option in the WordPress admin dashboard (`Settings` > `WP Tab Anchors`) to disable the auto scrolling --enabled by default. This option will enable/disable the jQuery scrolling plugin from loading on your site. That means, if you change this setting and use a site caching plugin, you might need to clear your site cache to ensure the scrolling is truly enabled or disabled.

You can contribute to this plugin here:  https://github.com/marinersmuseum/WP-Tab-Anchors

## Installation

1. Upload the plugin files to the `/wp-content/plugins/wp-tab-anchors` directory, or install the plugin through the WordPress `Plugins` screen directly.
2. Activate the plugin through the `Plugins` screen in WordPress.
3. Use the `Settings` > `WP Tab Anchors` screen to configure the plugin.
4. That's it! Enjoy! It works automatically.

## Changelog

= 1.4 =
* Added a fix to accommodate nested tabs (which aren't officially supported)

= 1.3 =
* Updated jquery.scrollTo to 2.1.2
* Added option panel to WordPress Dashboard to disable auto scrolling

= 1.2 =
* Updated jquery.scrollTo to 1.4.13

## Upgrade Notice

= 1.4 =
Added a fix to accommodate nested tabs (which aren't officially supported)