=============
Fluida WordPress Theme
Copyright 2015-17 Cryout Creations
https://www.cryoutcreations.eu/

Author: Cryout Creations
Requires at least: 4.2
Tested up to: 4.8.0
Stable tag: 1.3.4
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl.html
Donate link: https://www.cryoutcreations.eu/donate/

Fluida is a modern, crystal clear and squeaky clean theme. It shines bright with a fluid and responsive layout and carries under its hood a light and powerful framework. All the theme's graphics are created using HTML5, CSS3 and icon fonts so it's extremely fast to load.

It's also SEO ready, using microformats and Google readable Schema.org microdata. Fluida also provides over 100 customizer theme settings that enable you to take full control of your site. You can change everything starting with layout (content and up to 2 sidebars), site and sidebar widths, colors, (Google) fonts and font sizes for all the important elements of your blog, featured images, post information metas, post excerpts, comments and much more.

Fluida also features social menus with over 100 social network icons available in 4 locations, 3 menus, 6 widget areas, 8 page templates, all post formats, is translation ready, RTL and compatible with older browsers.


== License ==

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see http://www.gnu.org/copyleft/gpl.html


== Third Party Resources ==

Fluida WordPress Theme bundles the following third-party resources:

HTML5Shiv, Copyright Alexander Farkas (aFarkas)
Dual licensed under the terms of the GPL v2 and MIT licenses
Source: https://github.com/aFarkas/html5shiv/

FitVids, Copyright Chris Coyier - http://css-tricks.com + Dave Rupert - http://daverupert.com
Licensed under the terms of the WTFPLlicense
Source: http://fitvidsjs.com/

== Bundled Fonts ==

Elusive-Icons, Copyright Aristeides Stathopoulos
Licensed under the SIL Open Font License, Version 1.1
Source: http://shoestrap.org/downloads/elusive-icons-webfont/

Zocial CSS social buttons, Copyright Sam Collins
Licensed under the terms of the MIT license
Source: https://github.com/smcllns/css-social-buttons

Feather icons, Copyright Cole Bemis
Licensed under the terms of the MIT license
Source: http://colebemis.com/feather/

== Bundled Images ==

The following bundled images are released into the public domain under Creative Commons CC0:
https://unsplash.com/photos/YeH5EIRFCIs
https://pixabay.com/en/water-priroda-drops-rain-815271/
https://pixabay.com/en/jellyfish-under-water-sea-ocean-698521/
https://pixabay.com/en/waterfall-water-level-movement-335985/

The rest of the bundled images are created by Cryout Creations and released with the theme under GPLv3


== Changelog ==

= 1.3.4 =
* Default sidebar message is now only shown for users that have widget editing capabilities
* Adjusted dropdown menu z-index to improve appearance on multi-line menus; also moved background colors from list items to anchors
* Improved mobile menu appearance (submenus indentation, items color inherited from the main menu, removed submenu items bottom line)
* Fixed image vertical alignment in main menu
* Fixed headings font sizes in editor styling

= 1.3.3 = 
* Added styling to disable Chrome's built-in blue border on focused form elements
* Added explicit support for WooCommerce 3.0 new product gallery
* Removed 'wp_calculate_image_srcset' filter support due to Jetpack_Photon::filter_srcset_array() issue

= 1.3.2 =
* Changed post titles in posts lists from 60 units smaller to 75%
* Improved srcset functionality by switching to viewpoint units for better responsiveness
* Improved srcset sizes for the landing page featured images
* Improved backwards compatibility for browsers that do not use srcsets
* Fixed srcset sizes for 1 column posts list layout
* Added 'fluida_featured_srcset' filter and support for 'wp_calculate_image_srcset' filter for disabling srcset functionality 
* Fixed renaming .mobile class
* Changed default value for Featured Image Alignment from center/center to center/top
* Updated Cryout Framework to v0.6.5 

= 1.3.1.1 =
* Changed H1 to H2 in the static slider
* Fixed post titles wrong size in the landing page posts list (since 1.3.1)
* Added site title always present in the source of the site (for SEO purposes)
* Fixed WordPress' "Display Site Title and Tagline" option not hiding tagline

= 1.3.1 =
* Added srcset support for featured images and two additional featured image sizes to improve responsiveness and cross-device compatibility
* Added colour option for the H1-H4 content headings
* Extended Featured Image Alignment option to apply to all featured image crop variants added by the new srcset feature
* Slightly adjusted headings font sizes generator function and added separate distinct styling for h5 and h6
* Increased page/post titles default value to 250% and made post titles in page list 60 units smaller
* Fixed responsive styling arranging footer widgets in two columns even when option was set to one column
* Added site title accent position option
* Fixed pages manual excerpts not working and added support for <!--nextpage--> tag in icon blocks
* Fixed search results showing meta information for pages
* Fixed floats in content not clearing properly
* Updated Cryout Framework to v0.6.4
* Updated translation files

= 1.3.0 =
* Improved landing page behaviour for the contained and wide theme layouts
* Added support for <!--more--> tag in landing page text area pages
* Fixed author pages displaying broken titles in certain cases
* Added landing page slider shortcode field to translatable fields in WPML / Polylang
* Made header video centered on wide layouts
* Removed wp_kses() filtering from landing page blocks/boxes/texts titles/contents
* Extended fitVids status option to add desktop/mobile separate control
* Improved content_width internal handling to take layouts into account (for better handling of embed media sizing)

= 1.2.8.1 =
* Fixed header image visible on landing page after the addition of video header support

= 1.2.8 =
* Fixed colophon margins and border on left layouts
* Added WordPress 4.7 video header support
* Fixed main menu enlarging when set to fixed and a shorter height than the resized on
* Fixed icon blocks customizer controls not displaying the icons in Chrome / Safari
* Adjusted the landing page block/text areas title and text retrieval functions to work with qTranslate
* Fixed missing pagination on Category page with intro template
* Fixed breadcrumbs and content padding padding on Category page with intro template
* Updated theme screenshot

= 1.2.7 =
* Fixed previous/next navigation links appearing on the Landing Page
* Added disable functionality to landing page box excerpt by settings excerpt length to zero
* Added disable functionality to landing page box read more button by letting the label field empty
* Added alt attribute on featured images and header image
* Fixed hardcoded line height in the theme's style
* Improved menu styling for compatibility with menu-related plugins
* Added shortcode functionality on all landing page text fields for compatibility with qTranslate (thanks Jari)
* Fixed naming inconsistencies in social icons classnames
* Added 'fluida_thumbnail_image_width'/'fluida_thumbnail_image_height', 'fluida_featured_image_width'/'fluida_featured_image_height' filters on the registered image sizes
* Fixed comment icon misalignment, extra padding on date and author layout on RTL

= 1.2.6 =
* Added 'disabled' option for icon blocks content
* Fixed blocks/boxes excerpts issue due to incompatibility with plugins that added custom content filters
* Added extra font values for general font option
* Fixed CSS inconsistencies in fontfaces.css
* Removed alt attribute from header logo anchor
* Fixed masonry posts order on RTL
* Extra RTL fixes: posts read more button animation, customizer maximize arrow direction, customizer maximized sidebar wrong margin on RTL, landing page box read more arrow animation, landing page read more posts button icon position
* Added menu walker to support social menu elements classes
* Updated Cryout Framework to version 0.6.3

= 1.2.5 =
* Added structured markup data
* Redesigned the mobile menu
* Updated Cryout Framework to 0.6.2
* Adjusted customizer panels for compatibility with WordPress 4.7
* Fixed Google fonts with weights and subsets simultaneous usage
* Added Custom CSS hint for WordPress 4.7
* Fixed main navigation search icon out of line with menu items and social icons
* Added auto-scroll option in the Miscellaneous section
* Fixed anchor links scrolling when fixed menu is used
* Made breadcrumbs function pluggable again

= 1.2.4 =
* Added manual excerpts support in landing page boxes
* Decreased line height for landing page box titles and texts
* Adjusted landing page text titles and descriptions maximum width to 75% and decreased line height
* Moved Colors options section outside of General panel
* Fixed a typo in the options description

= 1.2.3.1 =
* Actually fixed landing page custom styling only taking effect when main menu is fixed :)

= 1.2.3 =
* Fixed landing page custom styling only taking effect when main menu is fixed
* Added check for 'the_comments_navigation' use that is not available before WordPress 4.4.0

= 1.2.2 =
* Added CSS print styles
* Added option to disable the custom theme styling in the WordPress editor (under Miscellaneous settings)
* Added a no-icon option to the landing page featured icon blocks so you can now show only text
* Fixed the 'Category page with intro' page template (and page templates in general) not working when set as front page
* Fixed horizontal rule (<hr> tag) not displaying

= 1.2.1 =
* Added WooCommerce compatibility
* Added WPML/Polylang compatibility
* Extended Fitvids status check in Masonry call after more posts are loaded
* Hid landing page slider separator when text and description are not both defined
* Changed default footer background color; added footer text color option; fixed footer border and separators color
* Improved landing page fields checks
* Fixed get_default_pages() to sort by post_date
* Fixed one singular typo in style.css

= 1.2.0 =
* Added title and description fields to blocks and boxes
* Redesigned the mobile menu
* Added landing page 'more posts' button
* Added 'disable' option for landing page boxes
* Fixed landing page boxes and blocks clear responsiveness
* Checked articles animation to 'fade'
* Removed page templates - use the new pages meta layout option
* Changed several icons used in the theme
* Changed icons pack for the landing page icon blocks; slightly redesigned the icon blocks
* Centered landing page text areas
* Updated translation file
* Changed default static slider image
* Fixed incomplete breadcrumbs visible on static homepage

= 1.1.4 =
* Reupload due to incomplete admin/main.php file in the 1.1.3 release

= 1.1.3 =
* Added support for cloned options in the customizer
* Fixed landing page boxes not clearing
* Fixed min/max attributes for number inputs in the customizer
* Landing page 'show posts' option is now only visible when the landing page is enabled
* Fixed labels for the landing page boxes "content" customizer option
* Rearranged landing page CSS
* The Fitvids script is now executed on document ready instead of window load

= 1.1.2 =
* Static boxes images are now clickable and linked to the corresponding post
* Changed static boxes image hover effects and animation
* Landing page featured boxes can now be disabled by selecting "0" for the number of boxes to show
* Sanitized all outputs in the landing page functions

= 1.1.1 =
* Fixed "before content" widget appearing twice on landing page
* TGMPA info is now a notice instead of a warning

= 1.1.0 =
* Added "Cryout Serious Slider" selector in customizer
* Added excerpt length option to the landing page boxes
* Added a fourth text area to the landing page (between the two box sections)
* Added TGMPA notices to recommend the "Cryout Serious Slider" and "Force Regenerate Thumbnails" plugins
* Added theme info headers to all files
* Rearranged landing page code and made it child theme friendly
* Updated translation files

= 1.0.0 =
* Added a brand new landing page complete with static image/slider shortcode, featured icon blocks, featured boxes and text areas
* Replaced page templates with custom post metas for page layouts
* Merged the mobile styling (styles/responsive.css) with the main style (style.css)
* Reordered, functionified and optimized theme's JavaScript (frontend.js)
* Added structure, options and defaults filters for child themes
* Removed before/after content widget areas columns under responsiveness
* Fixed branding transition missing when main menu was fixed
* Fixed article animation on scroll and also made it work as expected on mobile
* Fixed breadcrumbs and headers on search pages not staying in sync with magazine layout setting
* Changed default headings font to "Open Sans Condensed" and size 130% (from "Open Sans" and size 120%)
* Changed default menu size from 100% to 105% ( also decreased menu font size option steps from 10% to 5%)
* Changed "with-masonry" body class to "fluida-with-masonry"
* Changed references from the old 'settings page' to 'settings panel'

= 0.9.9.4 =
* Fixed breadcrumbs and archive headers not staying in sync with magazine layout setting
* Added implicit label and HTML5 'button' input to search in searchform.php (accessibility)
* Added screen reader text to breadcrumbs Home icon (accessibility)

= 0.9.9.3 =
* Cleaned up framework breadcrumbs function
* Added random ids to search input in searchform.php
* Updated comments functions to include multiple plural forms
* Added check to not show comment icon when comments are disabled

= 0.9.9.2 =
* Fixed magazine layouts on mobile
* Added setting for articles animation when scrolling (under General > Decorations)
* Added label for search input in searchform.php (accessibility)
* Updated translations and included plural forms

= 0.9.9.1 =
* Fixed "Auto Select Images From Posts Content" option not working
* Fixed center aligned menu not hiding on mobile
* Fixed attachment pages missing article padding
* Changed both sorted and unsorted lists to "outside" style by default
* Fixed typo in Amazon social icon URL

= 0.9.9 =
* Renamed 'Graphics' customizer section to 'General'
* Relocated 'Socials' panel under 'General' and 'Custom Footer Text' under 'General' > 'Structure'
* Added compatibility option to disable Masonry
* Added compatibility option to disable 'defer' script loading
* Added compatibility option to disable FitVids
* Replaced get_category() usage with core get_queried_object()
* Updated Cryout Framework to 0.5.7
* Moved breadcrumbs function to the framework
* Escaped all outputs in framework customizer controls
* Escaped url, permalink and link function calls
* Escaped core WordPress function calls
* Renamed body classes added by the theme
* Improved theme options loading check

= 0.9.8.3 =
* Fixed header issues with different menu alignments
* Improved "Continue reading" button animation

= 0.9.8.2 =
* Fixed mobile menu not showing up while re-re-re-fixing the fixed header on IE
* Added IE9 compatibility to CSS transforms
* Changed "Continue reading" button aspect to use accent colors
* Removed input[type="file"] styling
* Changed content_width to 1024px

= 0.9.8.1 =
* Double fixed issues with fixed top menu in IE11
* Fixed footer widgets alignment
* Added menu alignment option
* Added site tagline display option
* Improved featured images layout and articles padding

= 0.9.8 =
* Adjusted main responsiveness step from 1280px to 1152px (to exclude mobile devices that are large enough to fit the sidebars but do not correctly handle media queries)
* Added site title value as header logo alt/title attributes
* Added theme settings save/load functionality
* Changed default layout to Centered
* Disabled Masonry activation when single column layout is used
* Changed default title size to 150% (from 130%)

= 0.9.7 =
* Optimized PHP and HTML code to follow standards
* Optimized CSS layout to follow standards
* Cleaned up post format files
* Cleaned up header.php and fixed header image display, comments.php, content.php, single.php, search.php, 404.php
* Cleaned up content-* files
* Redesigned attachment.php as image.php
* Merged author.php, tag.php, category.php into archive.php (and split author info to author-bio.php)
* Added new WordPress.org theme tags (and removed deprecated ones)
* Added normalized tags option (on by default)
* Added post formats to breadcrumbs
* Added base font name to Google fonts enqueue (when custom weights are used)
* Added .icon-chat (same as .icon-quote) for the chat post format
* Added color transition to post format and meta icons
* Improved Continue Reading button visual style
* Improved round corners option to apply to the correct elements (#toTop, a.continue-reading-button,.page-numbers, .page-header, span.entry-format)
* Fixed author and date microformats
* Fixed one-column page template breadcrumbs position
* Switched to using proper the_title() call (with arguments)
* Renamed registered image sizes
* Removed leftover check for site title HTML tag and post/page titles
* Removed async from script filter (causes issues with Masonry)
* Removed round corners from back-to-top button
* Removed unused /resources/patterns folder
* Moved entry_meta_format_hook after content title (and resized format meta icons)
* Moved side header padding to inner element
* Moved cryout_schema_microdata() to framework and added imageObject
* Updated theme URL for new site
* Updated theme news feed URL for new site structure
* Restored proper order of theme panels/sections in the Customizer
* Changed default content font size to 16px (from 18px)

= 0.9.6.2 =
* Fixed footer widgets flex arrangement

= 0.9.6.1 =
* Same as 0.9.6, bumping version to force repository publish

= 0.9.6 =
* Removed import/export settings from admin area
* Added second textdomain support for WordPress' language packs (also deleted languages folder under cryout and removed redundant loading of text domains in admin area)
* Fixed Masonry JS error (removed 'async' attribute when loading scripts on the frontend)
* Social links in the header/footer area are now turned off by default
* Removed 'Debug info' section from the admin area
* Removed social links (and respective scripts) from the admin area
* Renamed 'Latest News' section in admin to 'Theme Updates'
* Removed autoupdater call in cryout/framework.php

= 0.9.5 =
* Updated customizer color sanitization to use the existing sanitize_hex_color() function
* Added unminified resources/js/html5shiv.js
* Cleaned up the unused cryout/widgets.php and cryout/widget-areas.php files

= 0.9.4.5 =
* Removed template-blog.php page template
* Removed license.txt file
* Improved arhive.php to handle archives, categories and tags (removed category.php and tag.php)
* Improved plugin/child theme styling override support by changing #main id to .main class

= 0.9.4.4 =
* Changed image size handle from 'featured' to 'cryout-featured'
* Switched to using core WordPress 'jquery-masonry'

= 0.9.4.3 =
* Fixed unwanted header container margin when fixed menu is used and admin bar is visible
* Added table border styles option
* Fixed customizer maximize button overlapping WP 4.5 device buttons
* Added WordPress 4.5 site logo support
* Fixed unwanted scrollbar on ads in sidebar

= 0.9.4.2 =
* Fixed main menu extra top padding on medium screens (since 0.9.3)
* Fixed header image alignment on left non-contained layout (since 0.9.3)
* Fixed the fixed menu cutoff to left on contained layouts (since 0.9.3)
* Fixed masonry negative margins creating horizontal scrollbar on medium screens
* Improved main/pad-container margins for for masonry
* Added socials in mobile menu for small devices (and removed from header)
* Further mobile optimizations

= 0.9.4.1 =
* Escaped support URLs with esc_url_raw

= 0.9.4 =
* Removed duplicate static HTML5Shiv inclusion in header (as it was already enqueued)
* Moved hardcoded GooglePlus profile script to enqueue (with defer/async filter)
* Corrected WordPress name formatting in all theme strings
* Fixed cryout_schema_microdata() call in author info page HTML

= 0.9.3.1 =
* Fixed responsive featured image inconsistency between browsers
* Corrected fixed menu alignment issue with the new left/centre layouts

= 0.9.3 =
* Added menu text colour option
* Further extended layout alignment options with Left (not contained) and Center (not contained) options
* Fixed sidebar background colour missing on mobile devices
* Fixed breadcrumbs alignment issue on mobile devices
* Improved mobile menu to follow configured colour options
* Fixed article alignment in masonry enabled pages
* Fixed theme recommended Google fonts not loading extra weights
* Added auto-detection of RSS link in social icons
* Improved form elements styling outside the main content areas
* Fix icons rotation effect glitch on some browsers

= 0.9.2 =
* Fixed padding for widgets missing on mobile
* Fixed leftover text domain in widget areas
* Fixed usage of code incompatible with PHP < 5.3 in includes/core.php
* Fixed header widget area invisible when header image is responsive
* Removed bundled fonts in favor of Google fonts (to reduce theme size)
* Added new main layout alignment option
* Extended header widget area width option with 100% value
* Added header widget area alignment option
* Improved post featured images to center-align if too small to fill area
* Fixed apostrophe usage in style.css description
* Added 'time ago' option for comments
* Added max width option for comment form
* Fixed duplicate id both from <li> and <header> in includes/comments.php
* Fixed author.php closing <section> instead of <div>
* Fixed empty strings with text domain
* Fixed leftover hardcoded theme name in cryout/back-compat.php
* Fixed leftover hardcoded theme name in cryout/admin-functions.php
* Removed unused AJAX backend code from includes/core.php

= 0.9.1 =
* Fixed breadcrumbs on page templates (moved breadcrumbs back under the header)
* Fixed menu to display the default arrow on no-link menu items
* Updated FitVids to version 1.1
* Finished readme.txt contents
* New screenshot
* Fixed news in the theme's info page
* Rearranged breadcrumbs, main menu search, footer search and comment form placeholder hooks
* Fixed one column magazine layout being too wide
* Fixed breadcrumbs reasponsiveness
* Fixed custom post type articles missing background color and padding
* Fixed menu arrows on RTL
* Added customizer settings for header and featured images: responsive/cropped (responsive is default)
* Removed background color for comment forms, added hover and focus effects
* Removed padding for fieldset and label
* Resized default header images to 1920 x 250px
* Added theme version parameter to backend script/style enqueues (to help with caching issues)
* Fixed comments closed text option not working on pages

= 0.9 =
Initial release
