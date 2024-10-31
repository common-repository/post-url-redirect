=== Redirector ===
Author: Haziq Khatri
Tags: redirect, page
Requires at least: 3.8
Tested up to: 6.3.1
Stable tag: 1.0.2
License: GPLv3

Redirect posts / pages / custom post types

== Description ==

Redirect posts, pages or any custom post type to a different url.

== Installation ==

* Put the plugin file in your plugin directory and activate it in your WP backend.
* Go to edit a page
* Scroll down to 'Redirector' meta box
* Select a WordPress page of you installation or enter a valid URL or select the 'first child page'

== Screenshots ==

1. Meta box - No redirection
2. Meta box - Select post ( any post type )
3. Modal box - Select post ( any post type ) with most recent posts
4. Modal box - Search post ( any post type )
5. Meta box - Selected post ( any post type )
6. Meta box - Custom URL
7. Meta box - First child element
8. Meta box - SSL

== Frequently Asked Questions ==

= How can I activate Redirector for other post types beside pages? =

Simple add the post type support for it via `add_post_type_support( 'post', 'redirector' )`

== Hooks ==

= Actions =

* `redirector_uninstall` - Runs on plugin deinstall
* `redirector_metabox_begin` - Begin redirector meta box
* `redirector_metabox_end` - End redirector meta box
* `redirector-modal-search-begin` Begin redirector modal
* `redirector-modal-search-end` End redirector modal

= Filters =

* `redirector-redirect-url` - Alter the query string that is appended to redirect url
* `redirector-status-code` - Redirect status code; default 301
* `redirector-recent-posts` - Alter redirector recent posts query
* `redirector-search-query` - Alter redirector search query
* `redirector-meta` - Alter Redirector meta save
== Changelog ==

= 1.0.0 =

* Redirect preview
* Search post object for post redirect type

= 1.0.1 =

* Version update

= 1.0.2 =

* Version update