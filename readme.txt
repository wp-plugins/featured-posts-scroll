=== Featured Posts Scroll ===
Contributors: Chaser324
Donate link: http://chasepettit.com/2011/03/featured-posts-scroll/
Author URI: http://chasepettit.com/2011/03/featured-posts-scroll/
Plugin URI: http://chasepettit.com/2011/03/featured-posts-scroll/
Tags: posts, scroll, slider, featured, featured post, featured posts, recent post, recent posts, highlighted posts
Requires at least: 2.9.1
Tested up to: 3.1
Stable tag: 1.3

A basic javascript based scrolling display of post titles and thumbnails.

== Description ==

[Live Demo](http://chasepettit.com/2011/03/featured-posts-scroll/)
[More Info](http://chasepettit.com/2011/03/featured-posts-scroll/)
[Comments/Suggestions](http://chasepettit.com/2011/03/featured-posts-scroll/)
[About Author](http://chasepettit.com/about/)

This will scroll a set of posts (either automatically or via user click) in any desired location within a template or a post.
The appearance is highly customizable via the admin options menu (colors, drop shadows, rounded corners, & more).

If there are any additional features or bug fixes you would like to see in future versions, feel free to contact me.

If you find this plugin useful please remember to rate it and comment.

== Installation ==

= Installation =

1. Use the built-in WordPress plugin installer.
   OR
   Download the zip file and extract the contents.
   Upload the 'featured-posts-scroll' folder to your plugins directory (wp-content/plugins/).
2. Activate the plugin through the WordPress 'Plugins' menu.

= How to Use =

To use this plugin to display the most recent posts in any category and with any tag:
1. Copy and paste the code below to your desired template location:
<code><?php if (function_exists('fps_show')) { echo fps_show(NULL); } ?></code>

If you would like to customize what posts are displayed:
1. Copy and paste the code below to your desired template location:
<code><?php if (function_exists('fps_show')) {
            $args = array(
                'cat'     => '',/* comma separated list of category ids to include (put '-' in front of ids to exclude) */
                'tag'     => '' /* comma separated list tag slugs to include */);
            echo fps_show($args);
        }?></code>
2. Modify the '$args' array to filter out only the posts that you would like displayed. Delete any entries in the array you don't want to use (be careful with the commas. See here(http://codex.wordpress.org/Function_Reference/WP_Query#Parameters) for more details on all valid query parameters. Contact me if you have any questions about getting just the posts that you want.
3. Recommendation: Create a new 'featured' tag and put it on the posts that you want to displayed and add that category's slug to the array in the code above.

If you would like to display the featured posts scroll inside of a post:
1. Insert the following shortcode in your post:
<code>[fps]</code>

== Frequently Asked Questions ==

= FAQ =

== Screenshots ==

1. Admin Screen
2. Appearance Customization

== Changelog ==

= 1.3 =
* Corrected issue with title/excerpt underlining in Chrome.
* Corrected issue where scrolling didn't work in Firefox versions prior to 4.0.
* Accounted for bug in non-webkit browsers where nested elements clip rounded borders.

= 1.0 =
* Initial release.

== Upgrade Notice ==

= 1.3 =
* Corrected issue with title/excerpt underlining in Chrome.
* Corrected issue where scrolling didn't work in Firefox versions prior to 4.0.
* Accounted for bug in non-webkit browsers where nested elements clip rounded borders.

= 1.0 =
* Initial release.