=== Weaver Show Sliders ===
Plugin Name: Weaver Show Sliders
Plugin URI: http://weavertheme.com/plugins/
Author URI: http://weavertheme.com/about/
Contributors: wpweaver
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: show-sliders
Tags: slider, slide show, recent posts, responsive, responsive slider, [gallery], gallery slide show, slider options, slider shortcode, FlexSlider
Requires at least: 5.4
Tested up to: 6.1
Stable tag: 1.7

== Description ==

This isn't the typical plugin to create Sliders: Slide Shows, Carousels, Sliders with Posts. This is a Slider with options!
It supports beautiful, responsive image sliders and slide shows. And that's not all - it also can display any regular post in a slider or slide show.
You can even use Weaver Show Sliders as a Slide Show replacement for the standard WordPress [gallery] shortcode.

But, best of all, Weaver Show Sliders has been designed to give you options! You have more control of what content is displayed in your sliders
and slide shows, as well as how that content is displayed.

This plugin uses the FlexSlider jQuery script for the actual slider animation.

= Slider Options =

Weaver Show Sliders has been designed to give you more control of what content is displayed in your sliders
and slide shows, as well as how that content is displayed, than any other slider plugin.

* Add sliders using a shortcode
* Create multiple sliders - display as many as you want anywhere you can add a shortcode
* Slider Types: Fader, Slider, Carousel
* Multiple Index Paging Options: none, dots, thumbnails, and sliding thumbnails
* Slider Content: Images or Posts
* Easy Selection of Content: use the Weaver Show Posts plugin features to select posts and individual slides
* Add custom posts with a special post type.
* Use the WordPress Gallery tool to define images, or add images one post at a time.
* Many display options: Previous/Next navigation buttons, Pause/Play, Autostart show, Add links to image, Captions, Titles, Descriptions, BG color, Borders
* A Custom CSS option allows you to add your own styling rules for the sliders. Full documentation is included about slider classes.
* [gallery] shortcode replacement slider
* A built-in Lightbox to responsively show your images in a full popup lightbox.

= Easy to Select Content =

For images sliders, you can use the standard WordPress gallery generator. Simply add a [gallery] to one
of the new Slider Custom Post types. You can use the standard gallery interface to select images from your
Media library. That interface allows you to add captions, descriptions, even specify the order the images are shown.

Weaver Show Sliders requires the Weaver Show Posts plugin to specify exactly which posts (or individual images) are used for
sliders you define. You can use the special Slider Post type. You can pick up a gallery from any page. Weaver
Show Sliders will even automatically use the first image found on any post. Using the Weaver Show Posts filter
interface, you can easily select exactly where your images and posts included in a slider originate.

No other slider makes it as easy to select the source of your images and posts.

Other options supported by Weaver Show Sliders include  more sizing and layout options;
more control over how images are displayed with titles, captions, and descriptions;
support for Videos in sliders, more control of Carousels;
selection of over 20 different navigation arrows;
display options for navigation arrows,timing and order options;
per-slider custom CSS;
and other options
to fine tune your slider.
There is no other slider plugin like it.

== Installation ==

Please use the Plugin Add Plugin page to install this plugin.

This plugin REQUIRES the Weaver Show Posts plugin to work, and will display an automatic installation choice
if you haven't already installed Weaver Show Posts.

== Frequently Asked Questions ==

= Nothing Happens =

This plugin will not work without the Weaver Show Posts plugin.

= Can I put a slider in my header? =

Weaver Show Sliders includes an option to make a "banner" slider. If your theme allows adding shortcodes to
the header area, you can use the shortcode to add a banner slider in your header. Otherwise, instructions
are included to add custom code to your theme to support this capability.

= What are "Slider Posts"? =

This is a convenience post type that allows you to add slide shows based on the WordPress Gallery tool,
or individual slides (one per Slider Post), grouped together in a "Slider Group". These posts won't
normally appear in the rest of your site.

== Copyrights ==

* Weaver Show Sliders is Copyright (c) 2014-2023 by Bruce E. Wampler. It is licensed under GPL Version 2.
* FlexSlider is licensed under GPL Version 2.
* jQuery Easing is licensed under BSD
* FitVids is licensed under WTFPL
* mousewheel is licensed under MIT

== Changelog ==
= 1.6 =
* WP 6.1 version update

= 1.5.2 =
* WP 5.7 version update
* PHP 8 compatibility

= 1.5.1 =
* WP 5.6 update

= 1.5 =
* WP 5.3 update

= 1.4.11 =
* WP 5.0 update

= 1.4.10 =
* WP 4.9 version update
* Fix: HTML slider name comment moved outside <style> block

= 1.4.9 =
* WP 4.8 compatibility update
* Fix: Wrong initial state of Pause/Play button when start with slideshow paused
* Update: updated to FlexSlider 4.6.3 (that did not fix the play/pause issue, so the flexslider code was fixed.)

= 1.4.8 =
* Tweak: some issue with WP versioning - the 1.4.7 failed to update at WP correctly

= 1.4.7 =
* Fix: Weaver Xtreme Plus unnecessary dependency

= 1.4.6 =
* Fix: z-index for Lightbox popup was too low

= 1.4.5 =
* Added Weaver Show Sliders Widget - use with Page Builders

= 1.4.4 =
* Fix: Issue with bottom margin when no Pager

= 1.4.3 =
* Update: WP version compatibility

= 1.4.3 =
* Fix: readme.txt file

= 1.4.2 =
* Fix: update link for tutorials on Help tab.

= 1.4.1 =
* Tweak: added automatic 2% left/right margin for slider float right or float left.
* Tweak: change to .atwkslider .atwk-control-nav CSS rule for better spacing on mobile

= 1.4 =
* New: Default Media Library image size option for image sliders, including [gallery] based sliders
* Changed: Handling for new WP 4.4 responsive image sizing - srcset option now included
* Fixed: Display edited image and not original (WP 4.4)
* Update: FlexSlider 2.6.0

= 1.3.5 =
* Bug in new TGMPA library - was overriding plugin name info

= 1.3.4 =
* Update: TGM-PLUGIN-ACTIVATION library

= 1.3.3 =
* Tweak: help out people with https:// - remove all http: and https: prefixes on image src=

= 1.3.2 =
* Changed: changed text domain to show-sliders

= 1.3.1 =
* Fixed: nesting [ show_slider ] in posts (including Weaver Page with Posts)
* Fixed: Vertical scrolling single images can't have margins.
* Update: FlexSlider 2.5.0

= 1.3 =
* Update to WP 4.3 compatibility (no changes)

= 1.2.6 =
* Fixed: Slider Thumbs issue with multiple sliders on same page

= 1.2.5 =
* Fixed: Loading Spinner

= 1.2.4 =
* New: Duplicate Slider definition
* Update WP compatibility to 4.2
* Added support for manual excerpts

= 1.2.3 =
* Fixed - error message wording

= 1.2.2 =
* Fix: removed debugging output

== 1.2 ==
* New: name from ATW Show Sliders to Weaver Show Sliders
* New: Added Lightbox display option
* New: Added Save/Restore Slider settngs
* Tweak: alt= value on slider images, uses WP Alt value
* Fix: fixed several minor bugs

= 1.1 =
* Added Pro freatures to free version
* Fixed Multi-site menu display
* Updated FlexSlider and FitVids versions
* Fixed preview of edited page
* Fixed alt= tags

= 1.0.10 =
* Tweaked Custom Per-Slider CSS  box (Pro)
* Tweaked some option wording
* Fixed problem with minimized script file

= 1.0.8 =
* Fixed "Enter" on text input areas issue triggering submit
* Added support for Sliding Thumbnails for Posts Sliders
* Added max-height for thumbnail pager images

= 1.0.6 =
* Show recommended plugin only if user can activate plugins
* Fixed animation time issue

= 1.0.5 =
* Fixed auto-update issues with Pro version

= 1.0.4 =
* Fixed arrow spacing when margins specified for slider
* Added Per-slider custom css (pro)
* Added selection of left/right arrows (pro)
* Added show arrows in upper right corner (pro)
* Added always show arrows (pro)
* Added disable arrows slide-in effect (pro)

= 1.0.3 =
* Fixed activation order issues with Show Posts and Show Sliders

= 1.0.2 =
* Temporary work around for requirement that Weaver Show Posts be activated first.

= 1.0.1 =
* Added arbitrary link option for images defined in a post (Pro)
* When Video, will not use FI for image for all slides
* Fixed opacity for slider pager when above

= 1.0 =
* First release.
