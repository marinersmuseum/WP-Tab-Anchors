WP-Tab-Anchors
==============

By: Adam Carrier acarrier [at] marinersmuseum [dot] org

This plugin allows you to permalink (i.e., bookmark) to content on Twitter Bootstrap tabs (and now content inside collapsible components) via hash tag links.

Out-of-the-box, Bootstrap 3 won't allow you to permalink to content inside the tabs. This plugin activates the tab containing the permalinked content and then scrolls the page to the hash mark (i.e., to the HTML element with the ID specified in the URL's hash mark). You don't even have to know which tab the content is on; the plugin figures it out. It does this so quick you really won't notice all this going on. Page visitors who arrive using your permalink will pretty much immediately see the content you permalinked.

Here's an example: You have an element inside a collapsed tab you want to link to. Give the element an ID (e.g., `<div id="mylink"> ... </div>`). Then, use that ID in the URL (e.g., `http://www.mydomain.com/page/#mylink`). That will activate the tab and scroll the page to the location of the ID.

If you don't want the page to scroll automatically, there's an option in the WordPress admin dashboard (`Settings` > `WP Tab Anchors`) to disable the auto scrolling --enabled by default. This option will enable/disable the jQuery scrolling plugin from loading on your site. That means, if you change this setting and use a site caching plugin, you might need to clear your site cache to ensure the scrolling is truly enabled or disabled.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/wp-tab-anchors` directory, or install the plugin through the WordPress `Plugins` screen directly.
1. Activate the plugin through the `Plugins` screen in WordPress.
1. Use the `Settings` > `WP Tab Anchors` screen to configure the plugin.
1. That's it! Enjoy! It works automatically.

== Changelog ==

= 1.3 =
* Updated jquery.scrollTo to 2.1.2
* Added option panel to WordPress Dashboard to disable auto scrolling

= 1.2 =
* Updated jquery.scrollTo to 1.4.13

== Upgrade Notice ==

= 1.3 =
Adds option to disable auto scrolling
