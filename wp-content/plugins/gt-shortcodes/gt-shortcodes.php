<?php
/*
Plugin Name: GT Shortcodes
Plugin URI: http://gautamthapar.me/
Description: GT Shortcodes provides UI elements like Accordions, Alert Boxes, Animations, Animated Numbers, Banner Ads, Blockquotes, Buttons, Carousel, Charts, Code Blocks, Columns, Font Awesome Icons, Glyphicons, Google Maps, Highlights, Horizontal Rules, Labels, Lazy Loading Images, Popovers, Pricing Tables, Progress Bars, QR Codes, Switches, Tabs, Tables, Tooltip, Video Player and Visibility in the form of simple shortcodes.
Version: 1.5.4
Author: Gautam Thapar
Author URI: http://gautamthapar.me/
License: GPLv3 or later
*/

/*------------------------------------
	Global Variables
------------------------------------*/

// retrieve our plugin settings from the options table
$fus_options = get_option('fus_settings');


/*------------------------------------
	Including Files
------------------------------------*/

include('inc/shortcodes.php');
include('inc/scripts.php');
include('inc/admin-page.php');


/*------------------------------------
	Adding Filters
------------------------------------*/

add_filter('widget_text', 'do_shortcode'); // for running shortcodes in widgets
add_filter('the_content', 'do_shortcode'); // for running shortcodes in template files


/*------------------------------------
    Remove extra p and br tags
------------------------------------*/

function gt_shortcode_cleaner($gt_content) {
    $block = join("|",array("gtaccordion", "gtalert", "gtanimation", "gt_animated_number", "gtbanner", "gtblockquote", "gtbutton", "gtcarousel", "gtcolumn", "gtfa", "gtglyph", "gthighlight", "gthr", "gtlabel", "gtlazy", "gtpopover", "gtptable", "gtprogress", "gtqrcode", "gtrow", "gtswitch", "gttab", "gttable", "gttooltip", "gtvideo", "gtvisibility"));

    // opening tag
    $rep = preg_replace("/(<p>)?\[($block)(\s[^\]]+)?\](<\/p>|<br \/>)?/","[$2$3]", $gt_content);

    // closing tag
    $rep = preg_replace("/(<p>)?\[\/($block)](<\/p>|<br \/>)/","[/$2]", $rep);

    return $rep;
}

add_filter('the_content', 'gt_shortcode_cleaner');
add_filter('widget_text', 'gt_shortcode_cleaner');


/*------------------------------------------
    Removing Saved Options on Deactivation
------------------------------------------*/

function fus_deactivation_settings() {
       delete_option('fus_settings');
}

global $fus_options;

if( isset($fus_options['de_activate']) && $fus_options['de_activate'] == true ){
	register_deactivation_hook(__FILE__, 'fus_deactivation_settings');
}

if( isset($fus_options['uninstall']) && $fus_options['uninstall'] == true ){
    register_uninstall_hook(__FILE__, 'fus_deactivation_settings');
}


/*------------------------------------------
    Adding Settings Link on Plugins List Page
------------------------------------------*/

add_filter('plugin_action_links', 'gtsc_plugin_action_links', 10, 2);

function gtsc_plugin_action_links($links, $file) {
    static $this_plugin;

    if (!$this_plugin) {
        $this_plugin = plugin_basename(__FILE__);
    }

    if ($file == $this_plugin) {
        // The "page" query string value must be equal to the slug
        // of the Settings admin page we defined earlier, which in
        // this case equals "myplugin-settings".
        $settings_link = '<a href="' . get_bloginfo('wpurl') . '/wp-admin/admin.php?page=fus-options">Settings</a>';
        array_unshift($links, $settings_link);
    }

    return $links;
}

?>
<?php //include('images/social.png'); ?>