<?php

/*------------------------------------
    Plugin options page set-up
------------------------------------*/

function fus_add_options_link() {
    add_options_page('GT Shortcodes Options', 'GT Shortcodes', 'manage_options', 'fus-options', 'fus_options_page');
}
add_action('admin_menu', 'fus_add_options_link');

function fus_register_settings() {
    // creates our settings in the options table
    register_setting('fus_settings_group', 'fus_settings');
}
add_action('admin_init', 'fus_register_settings');

function fus_options_page() {
    
    global $fus_options;
 
    ob_start(); ?>
    <div class="wrap">

        <?php screen_icon(); ?>
    
        <h2 style="margin-bottom:15px;line-height:17px;">GT Shortcodes <sup><small style="font-size:10px;color:#B5B5B5;">v1.5.4 [BOOTSTRAP 2.3.2]</small></sup></h2>

        <div id="poststuff">

            <div id="post-body" class="metabox-holder columns-2">
                
                <!-- main content -->
                <div id="post-body-content">

                    <div class="meta-box-sortables ui-sortable">

                        <div class="postbox">

                            <h3><span>Main Settings</span></h3>
                            <div class="inside">
     
                                <form method="post" action="options.php">
                     
                                <?php settings_fields('fus_settings_group'); ?>

                                <table class="form-table">
                                    <tbody style="background-color: #ffebe8;">

                                        <tr valign="top" style="border-bottom:1px solid #FFFFFF;">
                                            <td class="row-title" style="width:242px !important;">
                                                <label class="description" for="fus_settings[de_activate]"><?php _e('Plugin Deactivation', 'fus_domain'); ?></label>
                                            </td>
                                            <td>
                                                <input id="fus_settings[de_activate]" type="checkbox" name="fus_settings[de_activate]" value="1" <?php if(isset($fus_options['de_activate'])){checked( '1', $fus_options['de_activate'] );} ?> />
                                                <label class="description" for="fus_settings[de_activate]" style="font-size:smaller;font-style:italic;color:#b5b5b5;font-weight: lighter;"><?php _e(' Delete all data from database on plugin deactivation.', 'fus_domain'); ?></label>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td class="row-title" style="width:242px !important;">
                                                <label class="description" for="fus_settings[uninstall]"><?php _e('Plugin Deletion', 'fus_domain'); ?></label>
                                            </td>
                                            <td>
                                                <input id="fus_settings[uninstall]" type="checkbox" name="fus_settings[uninstall]" value="1" <?php if(isset($fus_options['uninstall'])){checked( '1', $fus_options['uninstall'] );} ?> />
                                                <label class="description" for="fus_settings[uninstall]" style="font-size:smaller;font-style:italic;color:#b5b5b5;font-weight: lighter;"><?php _e(' Delete all data from database on plugin deletion.', 'fus_domain'); ?></label>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                            <h3><span><?php _e('Enable Styles', 'fus_domain'); ?></span></h3>
                            <div class="inside">

                                <table class="form-table">
                                    <tbody>

                                        <tr valign="top">
                                            <td class="row-title" style="width:242px !important;">
                                                <label class="description" for="fus_settings[style_one]"><?php _e('Bootstrap', 'fus_domain'); ?></label>
                                            </td>
                                            <td>
                                                <input id="fus_settings[style_one]" type="radio" name="fus_settings[style_one]" value="bootstrap" <?php if(isset($fus_options['style_one'])){
                                                    checked( 'bootstrap' == $fus_options['style_one'] );
                                                }  ?> />
                                                <label class="description" for="fus_settings[style_one]" style="font-size:smaller;font-style:italic;color:#b5b5b5;font-weight: lighter;"><?php _e(' Enable Bootstrap Stylesheet or Enable Minified Version Below.', 'fus_domain'); ?></label>
                                            </td>
                                        </tr>

                                        <tr valign="top">
                                            <td class="row-title" style="width:242px !important;">
                                                <label class="description" for="fus_settings[style_two]"><?php _e('Bootstrap Minified', 'fus_domain'); ?></label>
                                            </td>
                                            <td>
                                                <input id="fus_settings[style_two]" type="radio" name="fus_settings[style_one]" value="bootstrap-min" <?php if(isset($fus_options['style_one'])) {
                                                    checked( 'bootstrap-min' == $fus_options['style_one'] );
                                                } ?> />
                                                <label class="description" for="fus_settings[style_two]" style="font-size:smaller;font-style:italic;color:#b5b5b5;font-weight: lighter;"><?php _e(' Enable Bootstrap Minified Stylesheet.', 'fus_domain'); ?></label>
                                            </td>
                                        </tr>

                                        <tr valign="top">
                                            <td class="row-title" style="width:242px !important;">
                                                <label class="description" for="fus_settings[font_awesome]"><?php _e('Font Awesome', 'fus_domain'); ?></label>
                                            </td>
                                            <td>
                                                <input id="fus_settings[font_awesome]" type="radio" name="fus_settings[font_awesome]" value="font-awesome" <?php if(isset($fus_options['font_awesome'])){
                                                    checked( 'font-awesome' == $fus_options['font_awesome'] );
                                                } ?> />
                                                <label class="description" for="fus_settings[font_awesome]" style="font-size:smaller;font-style:italic;color:#b5b5b5;font-weight: lighter;"><?php _e(' Enable Font Awesome Stylesheet.', 'fus_domain'); ?></label>
                                            </td>
                                        </tr>

                                        <tr valign="top">
                                            <td class="row-title" style="width:242px !important;">
                                                <label class="description" for="fus_settings[font_awesome_min]"><?php _e('Font Awesome Minified', 'fus_domain'); ?></label>
                                            </td>
                                            <td>
                                                <input id="fus_settings[font_awesome_min]" type="radio" name="fus_settings[font_awesome]" value="font-awesome-min" <?php if(isset($fus_options['font_awesome'])){
                                                    checked( 'font-awesome-min' == $fus_options['font_awesome'] );
                                                } ?> />
                                                <label class="description" for="fus_settings[font_awesome_min]" style="font-size:smaller;font-style:italic;color:#b5b5b5;font-weight: lighter;"><?php _e(' Enable Font Awesome Minified Stylesheet.', 'fus_domain'); ?></label>
                                            </td>
                                        </tr>

                                        <tr valign="top">
                                            <td class="row-title" style="width:242px !important;">
                                                <label class="description" for="fus_settings[pricing_tables]"><?php _e('Pricing Table', 'fus_domain'); ?></label>
                                            </td>
                                            <td>
                                                <input id="fus_settings[pricing_tables]" type="checkbox" name="fus_settings[pricing_tables]" value="1" <?php if(isset($fus_options['pricing_tables'])){checked( '1', $fus_options['pricing_tables'] );} ?> />
                                                <label class="description" for="fus_settings[pricing_tables]" style="font-size:smaller;font-style:italic;color:#b5b5b5;font-weight: lighter;"><?php _e(' Enable Pricing Table Stylesheet.', 'fus_domain'); ?></label>
                                            </td>
                                        </tr>

                                        <tr valign="top">
                                            <td class="row-title" style="width:242px !important;">
                                                <label class="description" for="fus_settings[gt_video_css]"><?php _e('Video Player', 'fus_domain'); ?></label>
                                            </td>
                                            <td>
                                                <input id="fus_settings[gt_video_css]" type="checkbox" name="fus_settings[gt_video_css]" value="1" <?php if(isset($fus_options['gt_video_css'])){checked( '1', $fus_options['gt_video_css'] );} ?> />
                                                <label class="description" for="fus_settings[gt_video_css]" style="font-size:smaller;font-style:italic;color:#b5b5b5;font-weight: lighter;"><?php _e(' Enable Video Player Style.', 'fus_domain'); ?></label>
                                            </td>
                                        </tr>

                                        <tr valign="top">
                                            <td class="row-title" style="width:242px !important;">
                                                <label class="description" for="fus_settings[animations]"><?php _e('Animations', 'fus_domain'); ?></label>
                                            </td>
                                            <td>
                                                <input id="fus_settings[animations]" type="radio" name="fus_settings[animations]" value="animations" <?php if(isset($fus_options['animations'])){
                                                    checked( 'animations' == $fus_options['animations'] );
                                                } ?> />
                                                <label class="description" for="fus_settings[animations]" style="font-size:smaller;font-style:italic;color:#b5b5b5;font-weight: lighter;"><?php _e(' Enable Animations Stylesheet or Enable Minified Stylesheet Below.', 'fus_domain'); ?></label>
                                            </td>
                                        </tr>

                                        <tr valign="top">
                                            <td class="row-title" style="width:242px !important;">
                                                <label class="description" for="fus_settings[animations_min]"><?php _e('Animations Minified', 'fus_domain'); ?></label>
                                            </td>
                                            <td>
                                                <input id="fus_settings[animations_min]" type="radio" name="fus_settings[animations]" value="animations-min" <?php if(isset($fus_options['animations'])){
                                                    checked( 'animations-min' == $fus_options['animations'] );
                                                } ?> />
                                                <label class="description" for="fus_settings[animations_min]" style="font-size:smaller;font-style:italic;color:#b5b5b5;font-weight: lighter;"><?php _e(' Enable Animations Minified Stylesheet.', 'fus_domain'); ?></label>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                            <h3><span><?php _e('Enable Scripts', 'fus_domain'); ?></span></h3>
                            <div class="inside">

                                <table class="form-table">
                                    <tbody>

                                        <tr valign="top">
                                            <td class="row-title" style="width:242px !important;">
                                                <label class="description" for="fus_settings[script_one]"><?php _e('Bootstrap', 'fus_domain'); ?></label>
                                            </td>
                                            <td>
                                                <input id="fus_settings[script_one]" type="radio" name="fus_settings[script_one]" value="bootstrap-script" <?php if(isset($fus_options['script_one'])){
                                                    checked( 'bootstrap-script' == $fus_options['script_one'] );
                                                } ?> />
                                                <label class="description" for="fus_settings[script_one]" style="font-size:smaller;font-style:italic;color:#b5b5b5;font-weight: lighter;"><?php _e(' Enable Bootstrap Script or Enable Minified Version Below.', 'fus_domain'); ?></label>
                                            </td>
                                        </tr>

                                        <tr valign="top">
                                            <td class="row-title" style="width:242px !important;">
                                                <label class="description" for="fus_settings[script_two]"><?php _e('Bootstrap Minified', 'fus_domain'); ?></label>
                                            </td>
                                            <td>
                                                <input id="fus_settings[script_two]" type="radio" name="fus_settings[script_one]" value="bootstrap-script-min" <?php if(isset($fus_options['script_one'])){
                                                    checked( 'bootstrap-script-min' == $fus_options['script_one'] );
                                                } ?> />
                                                <label class="description" for="fus_settings[script_two]" style="font-size:smaller;font-style:italic;color:#b5b5b5;font-weight: lighter;"><?php _e(' Enable Bootstrap Minified Script.', 'fus_domain'); ?></label>
                                            </td>
                                        </tr>

                                        <tr valign="top">
                                            <td class="row-title" style="width:242px !important;">
                                                <label class="description" for="fus_settings[script_switch]"><?php _e('Switches', 'fus_domain'); ?></label>
                                            </td>
                                            <td>
                                                <input id="fus_settings[script_switch]" type="checkbox" name="fus_settings[script_switch]" value="1" <?php if(isset($fus_options['script_switch'])){checked( '1', $fus_options['script_switch'] );} ?> />
                                                <label class="description" for="fus_settings[script_switch]" style="font-size:smaller;font-style:italic;color:#b5b5b5;font-weight: lighter;"><?php _e(' Enable Switches Script.', 'fus_domain'); ?></label>
                                            </td>
                                        </tr>

                                        <tr valign="top">
                                            <td class="row-title" style="width:242px !important;">
                                                <label class="description" for="fus_settings[script_touch]"><?php _e('jQuery Touch', 'fus_domain'); ?></label>
                                            </td>
                                            <td>
                                                <input id="fus_settings[script_touch]" type="checkbox" name="fus_settings[script_touch]" value="1" <?php if(isset($fus_options['script_touch'])){checked( '1', $fus_options['script_touch'] );} ?> />
                                                <label class="description" for="fus_settings[script_touch]" style="font-size:smaller;font-style:italic;color:#b5b5b5;font-weight: lighter;"><?php _e(' Enable jQuery Touch Script for Touch Events.', 'fus_domain'); ?></label>
                                            </td>
                                        </tr>

                                        <tr valign="top">
                                            <td class="row-title" style="width:242px !important;">
                                                <label class="description" for="fus_settings[html5shiv]"><?php _e('Html5 Shiv', 'fus_domain'); ?></label>
                                            </td>
                                            <td>
                                                <input id="fus_settings[html5shiv]" type="checkbox" name="fus_settings[html5shiv]" value="1" <?php if(isset($fus_options['html5shiv'])){checked( '1', $fus_options['html5shiv'] );} ?> />
                                                <label class="description" for="fus_settings[html5shiv]" style="font-size:smaller;font-style:italic;color:#b5b5b5;font-weight: lighter;"><?php _e(' Enable Html5shiv for IE6 to IE8, supports html5 in IE6 to IE8.', 'fus_domain'); ?></label>
                                            </td>
                                        </tr>

                                        <tr valign="top">
                                            <td class="row-title" style="width:242px !important;">
                                                <label class="description" for="fus_settings[icon_font_ie7]"><?php _e('Icon Font Script IE6 / IE7', 'fus_domain'); ?></label>
                                            </td>
                                            <td>
                                                <input id="fus_settings[icon_font_ie7]" type="checkbox" name="fus_settings[icon_font_ie7]" value="1" <?php if(isset($fus_options['icon_font_ie7'])){checked( '1', $fus_options['icon_font_ie7'] );} ?> />
                                                <label class="description" for="fus_settings[icon_font_ie7]" style="font-size:smaller;font-style:italic;color:#b5b5b5;font-weight: lighter;"><?php _e(' Enable Icon Font Script, for IE6 & IE7, supports icon fonts (glyphs) in IE6 & IE7.', 'fus_domain'); ?></label>
                                            </td>
                                        </tr>

                                        <tr valign="top">
                                            <td class="row-title" style="width:242px !important;">
                                                <label class="description" for="fus_settings[gt_video]"><?php _e('Video Player', 'fus_domain'); ?></label>
                                            </td>
                                            <td>
                                                <input id="fus_settings[gt_video]" type="checkbox" name="fus_settings[gt_video]" value="1" <?php if(isset($fus_options['gt_video'])){checked( '1', $fus_options['gt_video'] );} ?> />
                                                <label class="description" for="fus_settings[gt_video]" style="font-size:smaller;font-style:italic;color:#b5b5b5;font-weight: lighter;"><?php _e(' Enable Video Player Script.', 'fus_domain'); ?></label>
                                            </td>
                                        </tr>

                                        <tr valign="top">
                                            <td class="row-title" style="width:242px !important;">
                                                <label class="description" for="fus_settings[gt_vid_yt]"><?php _e('YouTube', 'fus_domain'); ?></label>
                                            </td>
                                            <td>
                                                <input id="fus_settings[gt_vid_yt]" type="checkbox" name="fus_settings[gt_vid_yt]" value="1" <?php if(isset($fus_options['gt_vid_yt'])){checked( '1', $fus_options['gt_vid_yt'] );} ?> />
                                                <label class="description" for="fus_settings[gt_vid_yt]" style="font-size:smaller;font-style:italic;color:#b5b5b5;font-weight: lighter;"><?php _e(' Enable YouTube Video Support in Video Player.', 'fus_domain'); ?></label>
                                            </td>
                                        </tr>

                                        <tr valign="top">
                                            <td class="row-title" style="width:242px !important;">
                                                <label class="description" for="fus_settings[gt_vid_vm]"><?php _e('Vimeo', 'fus_domain'); ?></label>
                                            </td>
                                            <td>
                                                <input id="fus_settings[gt_vid_vm]" type="checkbox" name="fus_settings[gt_vid_vm]" value="1" <?php if(isset($fus_options['gt_vid_vm'])){checked( '1', $fus_options['gt_vid_vm'] );} ?> />
                                                <label class="description" for="fus_settings[gt_vid_vm]" style="font-size:smaller;font-style:italic;color:#b5b5b5;font-weight: lighter;"><?php _e(' Enable Vimeo Video Support in Video Player.', 'fus_domain'); ?></label>
                                            </td>
                                        </tr>

                                        <tr valign="top">
                                            <td class="row-title" style="width:242px !important;">
                                                <label class="description" for="fus_settings[gt_anim_num_script]"><?php _e('Animated Numbers', 'fus_domain'); ?></label>
                                            </td>
                                            <td>
                                                <input id="fus_settings[gt_anim_num_script]" type="checkbox" name="fus_settings[gt_anim_num_script]" value="1" <?php if(isset($fus_options['gt_anim_num_script'])){checked( '1', $fus_options['gt_anim_num_script'] );} ?> />
                                                <label class="description" for="fus_settings[gt_anim_num_script]" style="font-size:smaller;font-style:italic;color:#b5b5b5;font-weight: lighter;"><?php _e(' Enable Animated Numbers Script.', 'fus_domain'); ?></label>
                                            </td>
                                        </tr>

                                        <tr valign="top">
                                            <td class="row-title" style="width:242px !important;">
                                                <label class="description" for="fus_settings[gt_progressbar]"><?php _e('Progress Bars', 'fus_domain'); ?></label>
                                            </td>
                                            <td>
                                                <input id="fus_settings[gt_progressbar]" type="radio" name="fus_settings[gt_progressbar]" value="gt-progressbar" <?php if(isset($fus_options['gt_progressbar'])){
                                                    checked( 'gt-progressbar' == $fus_options['gt_progressbar'] );
                                                } ?> />
                                                <label class="description" for="fus_settings[gt_progressbar]" style="font-size:smaller;font-style:italic;color:#b5b5b5;font-weight: lighter;"><?php _e(' Enable Progress Bar Script or Enable Minified Version Below.', 'fus_domain'); ?></label>
                                            </td>
                                        </tr>

                                        <tr valign="top">
                                            <td class="row-title" style="width:242px !important;">
                                                <label class="description" for="fus_settings[gt_progressbar_min]"><?php _e('Progress Bar Minified', 'fus_domain'); ?></label>
                                            </td>
                                            <td>
                                                <input id="fus_settings[gt_progressbar_min]" type="radio" name="fus_settings[gt_progressbar]" value="gt-progressbar-min" <?php if(isset($fus_options['gt_progressbar'])){
                                                    checked( 'gt-progressbar-min' == $fus_options['gt_progressbar'] );
                                                } ?> />
                                                <label class="description" for="fus_settings[gt_progressbar_min]" style="font-size:smaller;font-style:italic;color:#b5b5b5;font-weight: lighter;"><?php _e(' Enable Progress Bar Minified Script.', 'fus_domain'); ?></label>
                                            </td>
                                        </tr>

                                        <tr valign="top">
                                            <td class="row-title" style="width:242px !important;">
                                                <label class="description" for="fus_settings[gt_maplace]"><?php _e('Google Maps', 'fus_domain'); ?></label>
                                            </td>
                                            <td>
                                                <input id="fus_settings[gt_maplace]" type="radio" name="fus_settings[gt_maplace]" value="gt-maplace" <?php if(isset($fus_options['gt_maplace'])){
                                                    checked( 'gt-maplace' == $fus_options['gt_maplace'] );
                                                } ?> />
                                                <label class="description" for="fus_settings[gt_maplace]" style="font-size:smaller;font-style:italic;color:#b5b5b5;font-weight: lighter;"><?php _e(' Enable Google Maps Script or Enable Minified Version Below.', 'fus_domain'); ?></label>
                                            </td>
                                        </tr>

                                        <tr valign="top">
                                            <td class="row-title" style="width:242px !important;">
                                                <label class="description" for="fus_settings[gt_maplace_min]"><?php _e('Google Maps Minified', 'fus_domain'); ?></label>
                                            </td>
                                            <td>
                                                <input id="fus_settings[gt_maplace_min]" type="radio" name="fus_settings[gt_maplace]" value="gt-maplace-min" <?php if(isset($fus_options['gt_maplace'])){
                                                    checked( 'gt-maplace-min' == $fus_options['gt_maplace'] );
                                                } ?> />
                                                <label class="description" for="fus_settings[gt_maplace_min]" style="font-size:smaller;font-style:italic;color:#b5b5b5;font-weight: lighter;"><?php _e(' Enable Google Maps Minified Script.', 'fus_domain'); ?></label>
                                            </td>
                                        </tr>

                                        <tr valign="top">
                                            <td class="row-title" style="width:242px !important;">
                                                <label class="description" for="fus_settings[gt_charts]"><?php _e('Charts', 'fus_domain'); ?></label>
                                            </td>
                                            <td>
                                                <input id="fus_settings[gt_charts]" type="radio" name="fus_settings[gt_charts]" value="gt-charts" <?php if(isset($fus_options['gt_charts'])){
                                                    checked( 'gt-charts' == $fus_options['gt_charts'] );
                                                } ?> />
                                                <label class="description" for="fus_settings[gt_charts]" style="font-size:smaller;font-style:italic;color:#b5b5b5;font-weight: lighter;"><?php _e(' Enable Charts Script or Enable Minified Version Below.', 'fus_domain'); ?></label>
                                            </td>
                                        </tr>

                                        <tr valign="top">
                                            <td class="row-title" style="width:242px !important;">
                                                <label class="description" for="fus_settings[gt_chart_min]"><?php _e('Charts Minified', 'fus_domain'); ?></label>
                                            </td>
                                            <td>
                                                <input id="fus_settings[gt_charts_min]" type="radio" name="fus_settings[gt_charts]" value="gt-charts-min" <?php if(isset($fus_options['gt_charts'])){
                                                    checked( 'gt-charts-min' == $fus_options['gt_charts'] );
                                                } ?> />
                                                <label class="description" for="fus_settings[gt_charts_min]" style="font-size:smaller;font-style:italic;color:#b5b5b5;font-weight: lighter;"><?php _e(' Enable Charts Minified Script.', 'fus_domain'); ?></label>
                                            </td>
                                        </tr>

                                        <tr valign="top">
                                            <td class="row-title" style="width:242px !important;">
                                                <label class="description" for="fus_settings[gt_google_pie_chart]"><?php _e('Google Charts', 'fus_domain'); ?></label>
                                            </td>
                                            <td>
                                                <input id="fus_settings[gt_google_pie_chart]" type="checkbox" name="fus_settings[gt_google_pie_chart]" value="gt-google-pie-chart" <?php if(isset($fus_options['gt_google_pie_chart'])){
                                                    checked( 'gt-google-pie-chart' == $fus_options['gt_google_pie_chart']);
                                                    } ?> />
                                                <label class="description" for="fus_settings[gt_google_pie_chart]" style="font-size:smaller;font-style:italic;color:#b5b5b5;font-weight: lighter;"><?php _e(' Enable Charts Script or Enable Minified Version Below.', 'fus_domain'); ?></label>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                            <h3><span><?php _e('Global Image Lazy Load Settings', 'fus_domain'); ?></span></h3>
                            <div class="inside">

                                <table class="form-table">
                                    <tbody>
                                        <tr valign="top">
                                            <td class="row-title" style="width:242px !important;">
                                                <label class="description" for="fus_settings[lazy_load]"><?php _e('Lazy Load Script', 'fus_domain'); ?></label>
                                            </td>
                                            <td>
                                                <input id="fus_settings[lazy_load]" type="radio" name="fus_settings[lazy_load]" value="lazy-load" <?php if(isset($fus_options['lazy_load'])){
                                                    checked( 'lazy-load' == $fus_options['lazy_load'] );
                                                } ?> />
                                                <label class="description" for="fus_settings[lazy_load]" style="font-size:smaller;font-style:italic;color:#b5b5b5;font-weight: lighter;"><?php _e(' Enable lazy load script or enable minified version from below.', 'fus_domain'); ?></label>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td class="row-title" style="width:242px !important;">
                                                <label class="description" for="fus_settings[lazy_load_min]"><?php _e('Lazy Load Minified Script', 'fus_domain'); ?></label>
                                            </td>
                                            <td>
                                                <input id="fus_settings[lazy_load_min]" type="radio" name="fus_settings[lazy_load]" value="lazy-load-min" <?php if(isset($fus_options['lazy_load'])){
                                                    checked( 'lazy-load-min' == $fus_options['lazy_load'] );
                                                } ?> />
                                                <label class="description" for="fus_settings[lazy_load_min]" style="font-size:smaller;font-style:italic;color:#b5b5b5;font-weight: lighter;"><?php _e(' Enable lazy load minified script.', 'fus_domain'); ?></label>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td class="row-title" style="width:242px !important;"><label class="description" for="fus_settings[gt_lazy_load_class]"><?php _e('Lazy Load Image Class', 'fus_domain'); ?></label></td>
                                            <td><input id="fus_settings[gt_lazy_load_class]" type="text" name="fus_settings[gt_lazy_load_class]" value="<?php echo $fus_options['gt_lazy_load_class']; ?>" class="regular-text" /><br><small style="font-style:italic;color:#b5b5b5;font-weight:lighter;float:left;width:65%;"><?php _e(' Add lazy load image class. Images with this class will lazy load. If you already have a class assigned to your images then use that class in order to make existing images lazy load as well.', 'fus_domain'); ?></small></td>
                                        </tr>
                                        <tr valign="top">
                                            <td class="row-title" style="width:242px !important;"><label class="description" for="fus_settings[gt_lazy_load_delay]"><?php _e('Lazy Load Image Delay', 'fus_domain'); ?></label></td>
                                            <td><input id="fus_settings[gt_lazy_load_delay]" type="number" name="fus_settings[gt_lazy_load_delay]" value="<?php echo $fus_options['gt_lazy_load_delay']; ?>" class="regular-text" /><br><small style="font-style:italic;color:#b5b5b5;font-weight:lighter;float:left;width:65%;"><?php _e(' By default images are loaded when they appear on the screen. If you want images to load earlier you can set delay parameter.Setting delay to 200 causes image to load 200 pixels before it is visible. You can also use negative values like \'-500\' to delay the image load.', 'fus_domain'); ?></small></td>
                                        </tr>
                                        <tr valign="top">
                                            <td class="row-title" style="width:242px !important;"><label class="description" for="fus_settings[gt_lazy_load_placeholder]"><?php _e('Custom Placeholder Image URL', 'fus_domain'); ?></label></td>
                                            <td><input id="fus_settings[gt_lazy_load_placeholder]" type="text" name="fus_settings[gt_lazy_load_placeholder]" value="<?php echo $fus_options['gt_lazy_load_placeholder']; ?>" class="regular-text" /><br><small style="font-style: italic;color: #b5b5b5;font-weight: lighter;float: left;"><?php _e(' Add a custom placeholder image link. By default 1×1 pixel grey gif is used.', 'fus_domain'); ?></small></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <p class="submit">
                                    <input type="submit" class="button-primary" value="<?php _e('Save Options', 'fus_domain'); ?>" />
                                </p>
                     
                                </form>

                            </div> <!-- .inside -->

                        </div> <!-- .postbox -->
                        
                    </div> <!-- .meta-box-sortables .ui-sortable -->
                    
                </div> <!-- post-body-content -->

                <!-- sidebar -->
                <div id="postbox-container-1" class="postbox-container">
                    
                    <div class="meta-box-sortables">
                        
                        <div class="postbox">
                        
                            <h3><span>Support</span></h3>
                            <div class="inside">
                                For any issues, email me from my - <a target="_blank" href="http://codecanyon.net/user/GautamThapar">CodeCanyon Profile</a>.
                            </div> <!-- .inside -->
                            
                        </div> <!-- .postbox -->
                        
                    </div> <!-- .meta-box-sortables -->
                    
                </div> <!-- #postbox-container-1 .postbox-container -->

            </div> <!-- #post-body .metabox-holder .columns-2 -->

            <br class="clear">
        </div> <!-- #poststuff -->
 
    </div> <!-- .wrap -->
    <?php
    echo ob_get_clean();
}
?>