/*------------------------------------
    Add GT SHORTCODES Buttons
------------------------------------*/

(function() {  
    tinymce.create('tinymce.plugins.fusbutton', {
        init : function(ed, url) {  
            fus_shortcode_url = url;
        },    
        createControl : function(n, cm) {
            switch(n) {
                case 'fusbutton':
                    var c = cm.createSplitButton('fusbutton', {
                        title : 'GT Shortcodes',
                        image : fus_shortcode_url+'/fusbutton.png'
                    }); 
                    

                    c.onRenderMenu.add(function(c, m) {
                        m.add({
                            title : 'GT Shortcodes',
                            'class' : 'mceMenuItemTitle'
                        }).setDisabled(1);

                        m.add({
                            title : 'Accordion',
                            icon: 'fus_accordion',
                            onclick : function() {
                            // triggers the thickbox
                            var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                            W = W - 80;
                            H = H - 120;
                            tb_show( 'GT Accordion Shortcode', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=gt-accordion-form' );
                            }
                        });


                        m.add({
                            title : 'Alert',
                            icon: 'fus_alert',
                            onclick : function() {
                            // triggers the thickbox
                            var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                            W = W - 80;
                            H = H - 120;
                            tb_show( 'GT Alert Shortcode', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=gt-alert-form' );
                        }
                        });


                        m.add({
                            title : 'Animation',
                            icon: 'fus_animation',
                            onclick : function() {
                            // triggers the thickbox
                            var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                            W = W - 80;
                            H = H - 120;
                            tb_show( 'GT Animation Shortcode', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=gt-animation-form' );
                        }
                        });


                        m.add({
                            title : 'Numbers',
                            icon: 'fus_anim_num',
                            onclick : function() {
                            // triggers the thickbox
                            var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                            W = W - 80;
                            H = H - 120;
                            tb_show( 'GT Animated Numbers Shortcode', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=gt-animated_number-form' );
                        }
                        });


                        m.add({
                            title : 'Banner Ads',
                            icon: 'fus_banner',
                            onclick : function() {
                            // triggers the thickbox
                            var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                            W = W - 80;
                            H = H - 120;
                            tb_show( 'GT Banner Ads Shortcode', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=gt-banner-form' );

                            }
                        });


                        m.add({
                            title : 'Blockquote',
                            icon: 'fus_blockquote',
                            onclick : function() {
                            // triggers the thickbox
                            var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                            W = W - 80;
                            H = H - 120;
                            tb_show( 'GT Blockquotes Shortcode', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=gt-blockquote-form' );

                            }
                        });


                        m.add({
                            title : 'Button',
                            icon: 'fus_button',
                            onclick : function() {
                            // triggers the thickbox
                            var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                            W = W - 80;
                            H = H - 120;
                            tb_show( 'GT Button Shortcode', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=gt-button-form' );

                            }
                        });

                        
                        m.add({
                            title : 'Carousel',
                            icon: 'fus_carousel',
                            onclick : function() {
                            // triggers the thickbox
                            var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                            W = W - 80;
                            H = H - 120;
                            tb_show( 'GT Carousel Shortcode', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=gt-carousel-form' );

                            }
                        });


                        m.add({
                            title : 'Charts',
                            icon: 'fus_chart',
                            onclick : function() {
                            // triggers the thickbox
                            var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                            W = W - 80;
                            H = H - 120;
                            tb_show( 'GT Chart Shortcode', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=gt-charts-form' );

                            }
                        });


                        m.add({
                            title : 'Code',
                            icon: 'fus_code',
                            onclick : function() {
                            // triggers the thickbox
                            var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                            W = W - 80;
                            H = H - 120;
                            tb_show( 'GT Code Shortcode', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=gt-code-form' );

                            }
                        });


                        m.add({
                            title : 'Columns',
                            icon: 'fus_columns',
                            onclick : function() {
                            // triggers the thickbox
                            var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                            W = W - 80;
                            H = H - 120;
                            tb_show( 'GT Columns Shortcode', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=gt-columns-form' );

                            }
                        });


                        m.add({
                            title : 'Font Awesome',
                            icon: 'fus_font_awesome',
                            onclick : function() {
                            // triggers the thickbox
                            var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                            W = W - 80;
                            H = H - 120;
                            tb_show( 'GT Font Awesome Shortcode', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=gt-font-awesome-form' );

                            }
                        });

                        
                        m.add({
                            title : 'Glyph',
                            icon: 'fus_glyph',
                            onclick : function() {
                            // triggers the thickbox
                            var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                            W = W - 80;
                            H = H - 120;
                            tb_show( 'GT Glyph Shortcode', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=gt-glyph-form' );

                            }
                        });


                        m.add({
                            title : 'Google PieChart',
                            icon: 'fus_google_pie_chart',
                            onclick : function() {
                            // triggers the thickbox
                            var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                            W = W - 80;
                            H = H - 120;
                            tb_show( 'GT Google PieChart', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=gt-googlepiechart-form' );

                            }
                        });


                        m.add({
                            title : 'Google Map',
                            icon: 'fus_gmap',
                            onclick : function() {
                            // triggers the thickbox
                            var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                            W = W - 80;
                            H = H - 120;
                            tb_show( 'GT Google Map Shortcode', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=gt-gmap-form' );

                            }
                        });


                        m.add({
                            title : 'Highlight',
                            icon: 'fus_highlight',
                            onclick : function() {
                            // triggers the thickbox
                            var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                            W = W - 80;
                            H = H - 120;
                            tb_show( 'GT Highlight Shortcode', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=gt-highlight-form' );

                            }
                        });


                        m.add({
                            title : 'Horizontal Rules',
                            icon: 'fus_horizontal',
                            onclick : function() {
                            // triggers the thickbox
                            var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                            W = W - 80;
                            H = H - 120;
                            tb_show( 'GT Horizontal Rules Shortcode', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=gt-horizontal-form' );

                            }
                        });


                        m.add({
                            title : 'Icon List',
                            icon: 'fus_icon_list',
                            onclick : function() {
                            // triggers the thickbox
                            var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                            W = W - 80;
                            H = H - 120;
                            tb_show( 'GT Icon List Shortcode', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=gt-icon-list-form' );

                            }
                        });

                        
                        m.add({
                            title : 'Label',
                            icon: 'fus_label',
                            onclick : function() {
                            // triggers the thickbox
                            var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                            W = W - 80;
                            H = H - 120;
                            tb_show( 'GT Label Shortcode', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=gt-label-form' );

                            }
                        });


                        m.add({
                            title : 'Lazy Load',
                            icon: 'fus_lazy',
                            onclick : function() {
                            // triggers the thickbox
                            var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                            W = W - 80;
                            H = H - 120;
                            tb_show( 'GT Lazy Load Image Shortcode', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=gt-lazy-form' );

                            }
                        });


                        m.add({
                            title : 'Popover',
                            icon: 'fus_popover',
                            onclick : function() {
                            // triggers the thickbox
                            var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                            W = W - 80;
                            H = H - 120;
                            tb_show( 'GT Popover Shortcode', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=gt-popover-form' );

                            }
                        });


                        m.add({
                            title : 'Pricing Table',
                            icon: 'fus_ptable',
                            onclick : function() {
                            // triggers the thickbox
                            var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                            W = W - 80;
                            H = H - 120;
                            tb_show( 'GT Pricing Table Shortcode', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=gt-pricingtable-form' );

                            }

                        });
                        

                        m.add({
                            title : 'Progress Bar',
                            icon: 'fus_progress',
                            onclick : function() {
                            // triggers the thickbox
                            var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                            W = W - 80;
                            H = H - 120;
                            tb_show( 'GT Progress Bar Shortcode', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=gt-progressbar-form' );

                            }

                        });


                        m.add({
                            title : 'QR Codes',
                            icon: 'fus_qrcodes',
                            onclick : function() {
                            // triggers the thickbox
                            var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                            W = W - 80;
                            H = H - 120;
                            tb_show( 'GT QR Codes Shortcode', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=gt-qrcodes-form' );

                            }

                        });

                        
                        m.add({
                            title : 'Switch',
                            icon: 'fus_switch',
                            onclick : function() {
                            // triggers the thickbox
                            var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                            W = W - 80;
                            H = H - 120;
                            tb_show( 'GT Switch Shortcode', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=gt-switch-form' );

                            }
                        });


                        m.add({
                            title : 'Tab',
                            icon: 'fus_tab',
                            onclick : function() {
                            // triggers the thickbox
                            var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                            W = W - 80;
                            H = H - 120;
                            tb_show( 'GT Tab Shortcode', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=gt-tab-form' );

                            }
                        });

                        
                        m.add({
                            title : 'Table',
                            icon: 'fus_table',
                            onclick : function() {
                            // triggers the thickbox
                            var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                            W = W - 80;
                            H = H - 120;
                            tb_show( 'GT Table Shortcode', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=gt-table-form' );

                            }
                        });


                        m.add({
                            title : 'Tooltip',
                            icon: 'fus_tooltip',
                            onclick : function() {
                            // triggers the thickbox
                            var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                            W = W - 80;
                            H = H - 120;
                            tb_show( 'GT Tooltip Shortcode', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=gt-tooltip-form' );

                            }

                        });
                        

                        m.add({
                            title : 'Video',
                            icon: 'fus_video',
                            onclick : function() {
                            // triggers the thickbox
                            var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                            W = W - 80;
                            H = H - 120;
                            tb_show( 'GT Video Shortcode', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=gt-video-form' );

                            }

                        });
                        

                        m.add({
                            title : 'Visibility',
                            icon: 'fus_visibility',
                            onclick : function() {
                            // triggers the thickbox
                            var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                            W = W - 80;
                            H = H - 120;
                            tb_show( 'GT visibility Shortcode', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=gt-visibility-form' );

                            }

                        });

                     
                    });

                  // Return the new menu button instance
                  return c;
            }

            return null;
        },  
    });  
    tinymce.PluginManager.add('fusbutton', tinymce.plugins.fusbutton);  

    // executes this when the DOM is ready
    jQuery(function(){
        // Accordion Window
        var accordionForm = jQuery('<div id="gt-accordion-form"><table id="gt-table" class="form-table">\
            <small style="background-color:#ffebe8;padding:10px 30px;float:left;overflow:hidden;"><span style="color:#787878;">Content for each accordion tab is added through post editor. Once you insert accordion, add content (between shortcode) like this  - [gtaccordion]Content 1|Content 2|Content 3[/gtaccordion] (separated by pipe / vertical bar " | ").</span></small>\
            <tr>\
                <th><label for="gt-accordion-id">Accordion ID</label></th>\
                <td><input type="text" id="gt-accordion-id" name="accordion-id" value="accordion" /><br />\
                <small>Set unique accordion ID, useful when using multiple accordions on single page or post.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-accordion-count">Accordion Headers</label></th>\
                <td><input type="text" id="gt-accordion-count" name="accordion-count" value="3" /><br />\
                <small>Number of required accordion headers.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-accordion-title">Accordion Header Titles</label></th>\
                <td><textarea type="text" id="gt-accordion-title" name="accordion-title" >Accordion 1|Accordion 2|Accordion 3</textarea><br />\
                <small>Pipe (vertical bar) separated title\'s for the accordion.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-accordion-accids">Accordion Tab ID\'s</label></th>\
                <td><input type="text" id="gt-accordion-accids" name="accordion-accids" value="1|2|3" /><br />\
                <small>Pipe (vertical bar) separated Accordion IDs. Make sure to assign unique IDs.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-accordion-keep_open">Default Open Accordion Tab</label></th>\
                <td><input type="text" id="gt-accordion-keep_open" name="accordion-keep_open" value="" /><br />\
                <small>Add the tab number to keep it open by default. For example, if you have 3 tab headers and you want 2nd tab to remain open by default then insert 2 above.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-accordion-toggle_icon">Accordion Toggle Icon</label></th>\
                <td><select name="accordion-toggle_icon" id="gt-accordion-toggle_icon" style="font-family:FontAwesome,Arial;">\
                    <optgroup label="Directional Icons">\
                        <option value="angle-double-down">&#xf103; angle-double-down</option>\
                        <option value="angle-double-left">&#xf100; angle-double-left</option>\
                        <option value="angle-double-right">&#xf101; angle-double-right</option>\
                        <option value="angle-double-up">&#xf102; angle-double-up</option>\
                        <option value="angle-down">&#xf107; angle-down</option>\
                        <option value="angle-left">&#xf104; angle-left</option>\
                        <option value="angle-right">&#xf105; angle-right</option>\
                        <option value="angle-up">&#xf106; angle-up</option>\
                        <option value="arrow-circle-down">&#xf0ab; arrow-circle-down</option>\
                        <option value="arrow-circle-left">&#xf0a8; arrow-circle-left</option>\
                        <option value="arrow-circle-o-down">&#xf01a; arrow-circle-o-down</option>\
                        <option value="arrow-circle-o-left">&#xf190; arrow-circle-o-left</option>\
                        <option value="arrow-circle-o-right">&#xf18e; arrow-circle-o-right</option>\
                        <option value="arrow-circle-o-up">&#xf01b; arrow-circle-o-up</option>\
                        <option value="arrow-circle-right">&#xf0a9; arrow-circle-right</option>\
                        <option value="arrow-circle-up">&#xf0aa; arrow-circle-up</option>\
                        <option value="arrow-down">&#xf063; arrow-down</option>\
                        <option value="arrow-left">&#xf060; arrow-left</option>\
                        <option value="arrow-right">&#xf061; arrow-right</option>\
                        <option value="arrow-up">&#xf062; arrow-up</option>\
                        <option value="arrows">&#xf047; arrows</option>\
                        <option value="arrows-alt">&#xf0b2; arrows-alt</option>\
                        <option value="arrows-h">&#xf07e; arrows-h</option>\
                        <option value="arrows-v">&#xf07d; arrows-v</option>\
                        <option value="caret-down">&#xf0d7; caret-down</option>\
                        <option value="caret-left">&#xf0d9; caret-left</option>\
                        <option value="caret-right">&#xf0da; caret-right</option>\
                        <option value="caret-square-o-down">&#xf150; caret-square-o-down</option>\
                        <option value="caret-square-o-left">&#xf191; caret-square-o-left</option>\
                        <option value="caret-square-o-right">&#xf152; caret-square-o-right</option>\
                        <option value="caret-square-o-up">&#xf151; caret-square-o-up</option>\
                        <option value="caret-up">&#xf0d8; caret-up</option>\
                        <option value="chevron-circle-down">&#xf13a; chevron-circle-down</option>\
                        <option value="chevron-circle-left">&#xf137; chevron-circle-left</option>\
                        <option value="chevron-circle-right">&#xf138; chevron-circle-right</option>\
                        <option value="chevron-circle-up">&#xf139; chevron-circle-up</option>\
                        <option value="chevron-down">&#xf078; chevron-down</option>\
                        <option value="chevron-left">&#xf053; chevron-left</option>\
                        <option value="chevron-right">&#xf054; chevron-right</option>\
                        <option value="chevron-up">&#xf077; chevron-up</option>\
                        <option value="hand-o-down">&#xf0a7; hand-o-down</option>\
                        <option value="hand-o-left">&#xf0a5; hand-o-left</option>\
                        <option value="hand-o-right">&#xf0a4; hand-o-right</option>\
                        <option value="hand-o-up">&#xf0a6; hand-o-up</option>\
                        <option value="long-arrow-down">&#xf175; long-arrow-down</option>\
                        <option value="long-arrow-left">&#xf177; long-arrow-left</option>\
                        <option value="long-arrow-right">&#xf178; long-arrow-right</option>\
                        <option value="long-arrow-up">&#xf176; long-arrow-up</option>\
                        <option value="toggle-down">&#xf150; toggle-down</option>\
                        <option value="toggle-left">&#xf191; toggle-left</option>\
                        <option value="toggle-right">&#xf152; toggle-right</option>\
                        <option value="toggle-up">&#xf151; toggle-up</option>\
                    </optgroup>\
                </select><br />\
                <small>Select accordion toggle icon.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-accordion-background">Accordion Head Background</label></th>\
                <td><input type="text" name="accordion background color" id="gt-accordion-background" value="#FFFFFF" class="gt-iris color {hash:true,required:false}" /><br />\
                    <small>Adjust heading background color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-accordion-head_text_color">Accordion Head Text Color</label></th>\
                <td><input type="text" name="accordion head_text_color color" id="gt-accordion-head_text_color" value="#9F9FA0" class="gt-iris color {hash:true,required:false}" /><br />\
                    <small>Adjust heading text color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-accordion-border_size">Accordion Border Size</label></th>\
                <td><input type="text" id="gt-accordion-border_size" name="accordion-border_size" value="2" /><br />\
                <small>Insert the size for accordion border (in pixels). Ex: 1,2,3,etc.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-accordion-border_style">Accordion Border Style</label></th>\
                <td><select name="accordion-border_style" id="gt-accordion-border_style">\
                    <option value="none">None</option>\
                    <option value="hidden">Hidden</option>\
                    <option value="dotted">Dotted</option>\
                    <option value="dashed">Dashed</option>\
                    <option value="solid" selected>Solid</option>\
                    <option value="double">Double</option>\
                    <option value="groove">Groove</option>\
                    <option value="ridge">Ridge</option>\
                    <option value="inset">Inset</option>\
                    <option value="outset">Outset</option>\
                    <option value="inherit">Inherit</option>\
                </select><br />\
                <small>Select accordion border style.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-accordion-border_radius">Accordion Border Radius</label></th>\
                <td><input type="text" id="gt-accordion-border_radius" name="accordion-border_radius" value="4" /><br />\
                <small>Insert the radius for accordion border (in pixels). Ex: 1,2,3,etc.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-accordion-border_color">Accordion Border Color</label></th>\
                <td><input type="text" name="accordion border_color" id="gt-accordion-border_color" value="#EEF0EF" class="gt-iris color {hash:true,required:false}" /><br />\
                    <small>Adjust border color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-accordion-content_bg">Accordion Content Background</label></th>\
                <td><input type="text" name="accordion content background" id="gt-accordion-content_bg" value="#FFFFFF" class="gt-iris color {hash:true,required:false}" /><br />\
                    <small>Adjust content background color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-accordion-content_text_color">Accordion Content Text Color</label></th>\
                <td><input type="text" name="accordion content text color" id="gt-accordion-content_text_color" value="" class="gt-iris color {hash:true,required:false}" /><br />\
                    <small>Adjust content text color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-accordion-hstyle">Accordion Heading Style</label></th>\
                <td><textarea name="heading style" id="gt-accordion-hstyle"></textarea><br />\
                    <small>Apply style to heading area. Ex: background:#f5f5f5 !important; color:#000 !important;</small></td>\
            </tr>\
        </table>\
        <p class="submit">\
            <input type="button" id="gt-accordion-submit" class="button-primary" value="Insert Accordion" name="submit" />\
        </p>\
        </div>');
        
        var accordionTable = accordionForm.find('table');
        accordionForm.appendTo('body').hide();
        
        // handles the click event of the submit button
        accordionForm.find('#gt-accordion-submit').click(function(){
            // defines the options and their default values
            // again, this is not the most elegant way to do this
            // but well, this gets the job done nonetheless
            var accordionOptions = { 
                'id'            : 'accordion',
                'count'         : '3',
                'title'         : 'Accordion 1|Accordion 2|Accordion 3',
                'accids'        : '1|2|3',
                'keep_open'     : '',
                'toggle_icon'   : 'none',
                'background'    : '#FFFFFF',
                'head_text_color': '#9F9FA0',
                'border_size'   : '2',
                'border_style'  : 'solid',
                'border_radius' : '4',
                'border_color'  : '#EEF0EF',
                'content_bg'    : '#FFFFFF',
                'content_text_color':'',
                'hstyle'        : ''
                
                };
            var accordionShortcode = '[gtaccordion';
            
            for( var index in accordionOptions) {
                var accordionValue = accordionTable.find('#gt-accordion-' + index).val();
                
                // attaches the attribute to the shortcode only if it's different from the default value
                if ( accordionValue !== accordionOptions[index] )
                    accordionShortcode += ' ' + index + '="' + accordionValue + '"';
            }
            
            accordionShortcode += '][/gtaccordion]';
            
            // inserts the shortcode into the active editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, accordionShortcode);
            
            // closes Thickbox
            tb_remove();
        });



          ////////////////////////////////////////////////////////////////////////////////
         /////////// Alert Popup ////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////


        var alertForm = jQuery('<div id="gt-alert-form"><table id="gt-table" class="form-table">\
            <tr>\
                <th><label for="gt-alert-title">Alert Title</label></th>\
                <td><input type="text" id="gt-alert-title" name="alert-title" value="Alert!" /><br />\
                <small>Title for the alert.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-alert-title_color">Alert Title Color</label></th>\
                <td><input type="text" name="alert title color" id="gt-alert-title_color" value="" class="gt-iris color {hash:true,required:false}" /><br />\
                    <small>Adjust title color. This will override default colors.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-alert-hstyle">Alert Heading Style</label></th>\
                <td><textarea type="text" name="heading style" id="gt-alert-hstyle"></textarea><br />\
                    <small>Apply style to heading text. Ex: font-style:italic !important; color:#669900 !important;</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-alert-content">Alert Simple Text Content</label></th>\
                <td><textarea name="alert-content" id="gt-alert-content"></textarea><br />\
                <small>Add simple text content. For using dynamic text like including images, etc. use the post editor and add text between alert shortcode like [gtalert]add content here[/gtalert]</small>\
            </tr>\
            <tr>\
                <th><label for="gt-alert-content_color">Alert Content Color</label></th>\
                <td><input type="text" name="alert content color" id="gt-alert-content_color" value="" class="gt-iris color {hash:true,required:false}" /><br />\
                    <small>Adjust content color. This will override default colors.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-alert-pstyle">Alert Content Style</label></th>\
                <td><textarea type="text" name="content style" id="gt-alert-pstyle"></textarea><br />\
                    <small>Apply style to content text. Ex: font-style:italic !important;</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-alert-type">Alert Type</label></th>\
                <td><select name="alert-type" id="gt-alert-type">\
                    <option value="default">Default</option>\
                    <option value="info">Info</option>\
                    <option value="error">Error</option>\
                    <option value="success">Success</option>\
                </select><br />\
                <small>Alert style type.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-alert-background">Alert Background</label></th>\
                <td><input type="text" name="alert background color" id="gt-alert-background" value="" class="gt-iris color {hash:true,required:false}" /><br />\
                    <small>Adjust background color. This will override default colors.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-alert-close_button">Alert Close Button</label></th>\
                <td><select name="alert-close_button" id="gt-alert-close_button">\
                    <option value="yes">Yes</option>\
                    <option value="no">No</option>\
                </select><br />\
                <small>Enable or Disable close button (cross icon).</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-alert-border_color">Alert Border Color</label></th>\
                <td><input type="text" name="alert border color" id="gt-alert-border_color" value="" class="gt-iris color {hash:true,required:false}" /><br />\
                    <small>Adjust alert border color. This will override default colors.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-alert-border_size">Alert Border Size</label></th>\
                <td><input type="text" id="gt-alert-border_size" name="alert-border_size" value="2" /><br />\
                <small>Assign border size (in pixels) for alert. Ex: 8.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-alert-border_style">Alert Border Style</label></th>\
                <td><select name="alert-border_style" id="gt-alert-border_style">\
                    <option value="none">None</option>\
                    <option value="hidden">Hidden</option>\
                    <option value="dotted">Dotted</option>\
                    <option value="dashed">Dashed</option>\
                    <option value="solid">Solid</option>\
                    <option value="double">Double</option>\
                    <option value="groove">Groove</option>\
                    <option value="ridge">Ridge</option>\
                    <option value="inset">Inset</option>\
                    <option value="outset">Outset</option>\
                    <option value="inherit">Inherit</option>\
                </select><br />\
                <small>Select alert border style.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-alert-border_radius">Alert Border Radius</label></th>\
                <td><input type="text" id="gt-alert-border_radius" name="alert-border_radius" value="6" /><br />\
                <small>Assign border radius (in pixels) for alert. Ex: 4.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-alert-dstyle">Other Alert Style</label></th>\
                <td><textarea type="text" name="other style" id="gt-alert-dstyle"></textarea><br />\
                    <small>Apply other style. Ex: background:#C3C3E5 !important;</small></td>\
            </tr>\
        </table>\
        <p class="submit">\
            <input type="button" id="gt-alert-submit" class="button-primary" value="Insert Alert" name="submit" />\
        </p>\
        </div>');
        
        var alertTable = alertForm.find('table');
        alertForm.appendTo('body').hide();
        
        // handles the click event of the submit button
        alertForm.find('#gt-alert-submit').click(function(){
            // defines the options and their default values
            // again, this is not the most elegant way to do this
            // but well, this gets the job done nonetheless
            var alertOptions = { 
                'title'         : 'Alert!',
                'title_color'   : '',
                'hstyle'        : '',
                'content'       : '',
                'content_color' : '',
                'close_button'  : 'yes',
                'pstyle'        : '',
                'type'          : 'default',
                'background'    : '',
                'border_size'   : '2',
                'border_style'  : '',
                'border_color'  : '',
                'border_radius' : '',
                'dstyle'        : '',
                
                };
            var alertShortcode = '[gtalert';
            
            for( var index in alertOptions) {
                var alertValue = alertTable.find('#gt-alert-' + index).val();
                
                // attaches the attribute to the shortcode only if it's different from the default value
                if ( alertValue !== alertOptions[index] )
                    alertShortcode += ' ' + index + '="' + alertValue + '"';
            }
            
            alertShortcode += '][/gtalert]';
            
            // inserts the shortcode into the active editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, alertShortcode);
            
            // closes Thickbox
            tb_remove();
        });



          ////////////////////////////////////////////////////////////////////////////////
         /////////// Animation Popup ////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////


        var animationForm = jQuery('<div id="gt-animation-form"><table id="gt-table" class="form-table">\
            <small style="background-color:#ffebe8;padding:10px 30px;float:left;overflow:hidden;"><span style="color:#787878;">Make sure to enable animation stylesheet from options panel available here - Dashboard > Settings > GT Shortcodes.</span></small>\
            <tr>\
                <th><label for="gt-animation-event">Trigger Animation On</label></th>\
                <td><select name="animation-event" id="gt-animation-event">\
                    <option value="pageload">On Page Load</option>\
                    <option value="click">On Click</option>\
                    <option value="hover">On Hover</option>\
                    <option value="scroll">On Page Scroll</option>\
                </select><br />\
                <small>Select when to trigger the animation.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-animation-type">Animation Type</label></th>\
                <td><select name="animation-type" id="gt-animation-type">\
                    <option value="flash">Flash</option>\
                    <option value="bounce">Bounce</option>\
                    <option value="shake">Shake</option>\
                    <option value="tada">Tada</option>\
                    <option value="swing">Swing</option>\
                    <option value="wobble">Wobble</option>\
                    <option value="pulse">Pulse</option>\
                    <option value="flip">Flip</option>\
                    <option value="flipInX">FlipInX</option>\
                    <option value="flipOutX">FlipOutX</option>\
                    <option value="flipInY">FlipInY</option>\
                    <option value="flipOutY">FlipOutY</option>\
                    <option value="fadeIn">FadeIn</option>\
                    <option value="fadeInUp">FadeInUp</option>\
                    <option value="fadeInDown">FadeInDown</option>\
                    <option value="fadeInLeft">FadeInLeft</option>\
                    <option value="fadeInRight">FadeInRight</option>\
                    <option value="fadeInUpBig">FadeInUpBig</option>\
                    <option value="fadeInDownBig">FadeInDownBig</option>\
                    <option value="fadeInLeftBig">FadeInLeftBig</option>\
                    <option value="fadeInRightBig">FadeInRightBig</option>\
                    <option value="fadeOut">FadeOut</option>\
                    <option value="fadeOutUp">FadeOutUp</option>\
                    <option value="fadeOutDown">FadeOutDown</option>\
                    <option value="fadeOutLeft">FadeOutLeft</option>\
                    <option value="fadeOutRight">FadeOutRight</option>\
                    <option value="fadeOutUpBig">FadeOutUpBig</option>\
                    <option value="fadeOutDownBig">FadeOutDownBig</option>\
                    <option value="fadeOutLeftBig">FadeOutLeftBig</option>\
                    <option value="fadeOutRightBig">FadeOutRightBig</option>\
                    <option value="slideInDown">SlideInDown</option>\
                    <option value="slideInLeft">SlideInLeft</option>\
                    <option value="slideInRight">SlideInRight</option>\
                    <option value="slideOutUp">SlideOutUp</option>\
                    <option value="slideOutLeft">SlideOutLeft</option>\
                    <option value="slideOutRight">SlideOutRight</option>\
                    <option value="bounceIn">BounceIn</option>\
                    <option value="bounceInDown">BounceInDown</option>\
                    <option value="bounceInUp">BounceInUp</option>\
                    <option value="bounceInLeft">BounceInLeft</option>\
                    <option value="bounceInRight">BounceInRight</option>\
                    <option value="bounceOut">BounceOut</option>\
                    <option value="bounceOutDown">BounceOutDown</option>\
                    <option value="bounceOutUp">BounceOutUp</option>\
                    <option value="bounceOutLeft">BounceOutLeft</option>\
                    <option value="bounceOutRight">BounceOutRight</option>\
                    <option value="bounceOut">BounceOut</option>\
                    <option value="bounceOutDown">BounceOutDown</option>\
                    <option value="bounceOutUp">BounceOutUp</option>\
                    <option value="bounceOutLeft">BounceOutLeft</option>\
                    <option value="bounceOutRight">BounceOutRight</option>\
                    <option value="rotateIn">RotateIn</option>\
                    <option value="rotateInDownLeft">RotateInDownLeft</option>\
                    <option value="rotateInDownRight">RotateInDownRight</option>\
                    <option value="rotateInUpLeft">RotateInUpLeft</option>\
                    <option value="rotateInUpRight">RotateInUpRight</option>\
                    <option value="rotateOut">RotateOut</option>\
                    <option value="rotateOutDownLeft">RotateOutDownLeft</option>\
                    <option value="rotateOutDownRight">RotateOutDownRight</option>\
                    <option value="rotateOutUpLeft">RotateOutUpLeft</option>\
                    <option value="rotateOutUpRight">RotateOutUpRight</option>\
                    <option value="lightSpeedIn">LightSpeedIn</option>\
                    <option value="lightSpeedOut">LightSpeedOut</option>\
                    <option value="hinge">hinge</option>\
                    <option value="rollin">rollin</option>\
                    <option value="rollOut">rollOut</option>\
                </select><br />\
                <small>Select animation type.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-animation-duration">Animation Duration</label></th>\
                <td><input type="text" name="animation duration" id="gt-animation-duration" /><br />\
                    <small>Specifies how many seconds an animation takes to complete one cycle. Example: 1,2,3,etc.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-animation-count">Animation Iteration</label></th>\
                <td><input type="text" name="animation-count" id="gt-animation-count" /><br />\
                <small>Enter a number that defines how many times an animation should be played. Example: 1,2,3,etc.</small>\
            </tr>\
            <tr>\
                <th><label for="gt-animation-direction">Animation Direction</label></th>\
                <td><select name="animation-direction" id="gt-animation-direction">\
                    <option value="normal">Normal</option>\
                    <option value="reverse">Reverse</option>\
                    <option value="alternate">Alternate</option>\
                    <option value="alternate-reverse">Alternate Reverse</option>\
                </select><br />\
                <small>Specifies whether or not the animation should play in reverse on alternate cycles.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-animation-timing">Animation Timing</label></th>\
                <td><select name="animation-timing" id="gt-animation-timing">\
                    <option value="linear">Linear</option>\
                    <option value="ease">Ease</option>\
                    <option value="ease-in">Ease In</option>\
                    <option value="ease-out">Ease Out</option>\
                    <option value="ease-in-out">Ease In Out</option>\
                </select><br />\
                <small>Describes how the animation will progress over one cycle of its duration.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-animation-mode">Animation Mode</label></th>\
                <td><select name="animation-mode" id="gt-animation-mode">\
                    <option value="forwards">Forwards</option>\
                    <option value="backwards">Backwards</option>\
                    <option value="both" selected>Both</option>\
                    <option value="none">None</option>\
                </select><br />\
                <small>It defines how styles are applied to the target of your CSS animations outside of the animation itself.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-animation-delay">Animation Delay</label></th>\
                <td><input type="text" name="animation delay" id="gt-animation-delay" value="" /><br />\
                    <small>Specifies when the animation will start (in seconds). Example: 1,2,3,etc.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-animation-style">Animation Custom Style</label></th>\
                <td><textarea type="text" name="animation style" id="gt-animation-style" /><br />\
                    <small>Apply custom style to animation div.</small></td>\
            </tr>\
        </table>\
        <p class="submit">\
            <input type="button" id="gt-animation-submit" class="button-primary" value="Insert Animation" name="submit" />\
        </p>\
        </div>');
        
        var animationTable = animationForm.find('table');
        animationForm.appendTo('body').hide();
        
        // handles the click event of the submit button
        animationForm.find('#gt-animation-submit').click(function(){
            // defines the options and their default values
            // again, this is not the most elegant way to do this
            // but well, this gets the job done nonetheless
            var animationOptions = { 
                'event'        : '',
                'type'         : 'flash',
                'duration'     : '',
                'count'        : '',
                'direction'    : 'normal',
                'timing'       : 'linear',
                'mode'         : 'both',
                'delay'        : '',
                'style'        : '',
                
                };
            var animationShortcode = '[gtanimation';
            
            for( var index in animationOptions) {
                var animationValue = animationTable.find('#gt-animation-' + index).val();
                
                // attaches the attribute to the shortcode only if it's different from the default value
                if ( animationValue !== animationOptions[index] )
                    animationShortcode += ' ' + index + '="' + animationValue + '"';
            }
            
            animationShortcode += '][/gtanimation]';
            
            // inserts the shortcode into the active editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, animationShortcode);
            
            // closes Thickbox
            tb_remove();
        });



          ////////////////////////////////////////////////////////////////////////////////
         /////////// Animated Numbers Popup /////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////


        var animated_numberForm = jQuery('<div id="gt-animated_number-form"><table id="gt-table" class="form-table">\
            <small style="background-color:#ffebe8;padding:10px 30px;float:left;overflow:hidden;"><span style="color:#787878;">Make sure to enable animated numbers script from options panel available here - Dashboard > Settings > GT Shortcodes.</span></small>\
            <tr>\
                <th><label for="gt-animated_number-event">When to animate?</label></th>\
                <td><select name="animated_number-event" id="gt-animated_number-event">\
                    <option value="pageload">On Page Load</option>\
                    <option value="inview">In View</option>\
                </select><br />\
                <small>Select when to trigger number animation, on page load or when the numbers are in view.</small>\
            </tr>\
            <tr>\
                <th><label for="gt-animated_number-start_from">Starting Number</label></th>\
                <td><input type="text" name="animated_number start_from" id="gt-animated_number-start_from" value="0" /><br />\
                    <small>Enter the number from where you want to start the animated number. Negative values and decimal values are acceptable.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-animated_number-end_to">End Number</label></th>\
                <td><input type="text" name="animated_number end_to" id="gt-animated_number-end_to" value="" /><br />\
                    <small>Enter the number where you want to end the animated number. Negative values and decimal values are acceptable.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-animated_number-format">Format</label></th>\
                <td><select name="animated_number-format" id="gt-animated_number-format">\
                    <option value="normal">Normal</option>\
                    <option value="decimal">Decimal</option>\
                    <option value="comma">Comma Separated</option>\
                </select><br />\
                <small>Select the format for the number.</small>\
            </tr>\
            <tr id="gt-decimal-position">\
                <th><label for="gt-animated_number-decimal_pos">Decimal Position</label></th>\
                <td><input type="text" name="animated_number decimal_pos" id="gt-animated_number-decimal_pos" value="" /><br />\
                    <small>Enter the decimal position like 1 for after one digit (100.0), 2 for after 2 digit (100.00) and so on.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-animated_number-speed">Animation Speed</label></th>\
                <td><input type="text" name="animated_number speed" id="gt-animated_number-speed" value="5000" /><br />\
                    <small>Enter animation speed, less value = more speed.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-animated_number-color">Font Color</label></th>\
                <td><input type="text" name="animated number color" id="gt-animated_number-color" value="#444444" class="gt-iris color {hash:true,required:false}" /><br />\
                    <small>Adjust animated number font color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-animated_number-font_size">Font Size</label></th>\
                <td><input type="text" name="animated_number font_size" id="gt-animated_number-font_size" value="24" /><br />\
                    <small>Enter font size (in pixels). Example: 14, 28, 56, etc.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-animated_number-font_weight">Font Weight</label></th>\
                <td><select name="animated_number-font_weight" id="gt-animated_number-font_weight">\
                    <option value="normal">Normal</option>\
                    <option value="bold" selected>Bold</option>\
                    <option value="bolder">Bolder</option>\
                    <option value="lighter">Lighter</option>\
                    <option value="100">100</option>\
                    <option value="200">200</option>\
                    <option value="300">300</option>\
                    <option value="400">400</option>\
                    <option value="500">500</option>\
                    <option value="600">600</option>\
                    <option value="700">700</option>\
                    <option value="800">800</option>\
                    <option value="900">900</option>\
                    <option value="inherit">inherit</option>\
                </select><br />\
                    <small>Select the font weight. Font weights depend up on the theme you are using so make sure you are aware of what font weights your theme supports.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-animated_number-font_style">Font style</label></th>\
                <td><select name="animated_number-font_style" id="gt-animated_number-font_style">\
                    <option value="normal">Normal</option>\
                    <option value="italic">Italic</option>\
                    <option value="oblique" selected>Oblique</option>\
                    <option value="inherit">Inherit</option>\
                </select><br />\
                    <small>Select the font style.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-animated_number-style">Custom Style</label></th>\
                <td><textarea type="text" name="animated_number style" id="gt-animated_number-style" /><br />\
                    <small>Apply custom style to animated number span.</small></td>\
            </tr>\
        </table>\
        <p class="submit">\
            <input type="button" id="gt-animated_number-submit" class="button-primary" value="Insert Animated Number" name="submit" />\
        </p>\
        </div>');

        jQuery(document).ready(function($){
            $('#gt-decimal-position').hide();
            $('#gt-animated_number-format').change(function(){
                if($('#gt-animated_number-format').val()=='decimal'){
                    $('#gt-decimal-position').show('slow');
                }else{
                    $('#gt-decimal-position').hide();
                }
            });
        });
        
        var animated_numberTable = animated_numberForm.find('table');
        animated_numberForm.appendTo('body').hide();
        
        // handles the click event of the submit button
        animated_numberForm.find('#gt-animated_number-submit').click(function(){
            // defines the options and their default values
            // again, this is not the most elegant way to do this
            // but well, this gets the job done nonetheless
            var animated_numberOptions = { 
                'event'        : '',
                'start_from'   : '0',
                'end_to'       : '',
                'format'       : '',
                'decimal_pos'  : '',
                'speed'        : '5000',
                'color'        : '#444444',
                'font_size'    : '24',
                'font_weight'  : 'bold',
                'font_style'   : 'oblique',
                'style'        : ''
                
                };
            var animated_numberShortcode = '[gt_animated_number';
            
            for( var index in animated_numberOptions) {
                var animated_numberValue = animated_numberTable.find('#gt-animated_number-' + index).val();
                
                // attaches the attribute to the shortcode only if it's different from the default value
                if ( animated_numberValue !== animated_numberOptions[index] )
                    animated_numberShortcode += ' ' + index + '="' + animated_numberValue + '"';
            }
            
            animated_numberShortcode += ']';
            
            // inserts the shortcode into the active editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, animated_numberShortcode);
            
            // closes Thickbox
            tb_remove();
        });


          ////////////////////////////////////////////////////////////////////////////////
         /////////// Banner Ads Popup ///////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////


        var bannerForm = jQuery('<div id="gt-banner-form"><table id="gt-table" class="form-table">\
            <small style="background-color:#ffebe8;padding:10px 30px;float:left;overflow:hidden;"><span style="color:#787878;">If using lazy load for banner ads make sure you have setup lazy load options properly on plugin options page available here - Dashboard > Settings > GT Shortcodes.</span></small>\
            <tr>\
                <th><label for="gt-banner-size">Banner Ad Size</label></th>\
                <td><select name="banner-size" id="gt-banner-size">\
                    <option value="468x60">468x60 Full Banner</option>\
                    <option value="728x90">728x90 Leaderboard</option>\
                    <option value="336x280">336x280 Square</option>\
                    <option value="300x250">300x250 Square</option>\
                    <option value="250x250">250x250 Square</option>\
                    <option value="160x600">160x600 Skyscraper</option>\
                    <option value="120x600">120x600 Skyscraper</option>\
                    <option value="120x240">120x240 Small Skyscraper</option>\
                    <option value="240x400">240x400 Fat Skyscraper</option>\
                    <option value="234x60">234x60 Half Banner</option>\
                    <option value="180x150">180x150 Rectangle</option>\
                    <option value="125x125">125x125 Square Button</option>\
                    <option value="120x90">120x90 Button</option>\
                    <option value="120x60">120x60 Button</option>\
                    <option value="88x31">88x31 Button</option>\
                    <option value="custom">Custom Size</option>\
                </select><br />\
                <small>Select the required banner ad size.</small></td>\
            </tr>\
            <tr id="gt-banner-width">\
                <th><label for="gt-banner-max_width">Banner Image Custom Width</label></th>\
                <td><input type="text" id="gt-banner-max_width" name="banner-max_width" value="" /><br />\
                <small>Banner image width (in pixels). Example: 468.</small></td>\
            </tr>\
            <tr id="gt-banner-height">\
                <th><label for="gt-banner-max_height">Banner Image Custom Height</label></th>\
                <td><input type="text" id="gt-banner-max_height" name="banner-max_height" value="" /><br />\
                <small>Banner image height (in pixels). Example: 60.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-banner-image_src">Banner Image Source URL</label></th>\
                <td><input type="text" id="gt-banner-image_src" name="banner-image_src" value="" /><br />\
                <small>Banner image source link. Example: http:www.placeholdit.com/468x60.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-banner-alt">Banner Image Alternate Text</label></th>\
                <td><input type="text" id="gt-banner-alt" name="banner-alt" value="Advertisement" /><br />\
                <small>Enter alertnate text for image (Good for SEO). Example: My custom Ad.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-banner-lazy_load">Lazy Load Banner Image?</label></th>\
                <td><select name="banner-lazy_load" id="gt-banner-lazy_load">\
                    <option value="no">No</option>\
                    <option value="yes">Yes</option>\
                </select><br />\
                <small>Select whether to lazy load banner image or not.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-banner-link">Banner Link</label></th>\
                <td><input type="text" id="gt-banner-link" name="banner-link" value="" /><br />\
                <small>Enter banner link. Example: http://www.gautamthapar.me/</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-banner-link_target">Banner Link Target</label></th>\
                <td><select name="banner-link_target" id="gt-banner-link_target">\
                    <option value="_self">Self</option>\
                    <option value="_blank">Blank</option>\
                    <option value="_parent">Parent</option>\
                    <option value="_top">Top</option>\
                </select><br />\
                <small>Select button link target. Self - open link in same window, Blank - open in new window, Parent - open link in parent frame & top - open link in full body of the window.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-banner-link_title">Banner Link Title</label></th>\
                <td><input type="text" id="gt-banner-link_title" name="banner-link_title" value="Advert" /><br />\
                <small>Enter banner link title (Good for SEO). Example: My banner link.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-banner-placeholder_text">Banner Placeholder Text</label></th>\
                <td><input type="text" id="gt-banner-placeholder_text" name="banner-placeholder_text" value="" /><br />\
                <small>Enter custom text for placeholder image.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-banner-placeholder_image_color">Banner Placeholder Image Color</label></th>\
                <td><input type="text" name="banner placeholder_image_color" id="gt-banner-placeholder_image_color" value="EEF0EF" class="gt-iris color {hash:false,required:false}" /><br />\
                    <small>Adjust banner placeholder image color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-banner-placeholder_image_text_color">Banner Placeholder Image Text Color</label></th>\
                <td><input type="text" name="banner placeholder_image_text_color" id="gt-banner-placeholder_image_text_color" value="999999" class="gt-iris color {hash:false,required:false}" /><br />\
                    <small>Adjust banner placeholder image text color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-banner-placeholder_image_format">Banner Placeholder Image Format</label></th>\
                <td><select name="banner-placeholder_image_format" id="gt-banner-placeholder_image_format">\
                    <option value=".gif">GIF</option>\
                    <option value=".jpg">JPG</option>\
                    <option value=".png">PNG</option>\
                </select><br />\
                <small>Select placeholder image format.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-banner-border_size">Banner Image Border Size</label></th>\
                <td><input type="text" id="gt-banner-border_size" name="banner-border_size" value="0" /><br />\
                <small>Insert the size for banner image border (in pixels). Ex: 1,2,3,etc.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-banner-border_style">Banner Image Border Style</label></th>\
                <td><select name="banner-border_style" id="gt-banner-border_style">\
                    <option value="none">None</option>\
                    <option value="hidden">Hidden</option>\
                    <option value="dotted">Dotted</option>\
                    <option value="dashed">Dashed</option>\
                    <option value="solid" selected>Solid</option>\
                    <option value="double">Double</option>\
                    <option value="groove">Groove</option>\
                    <option value="ridge">Ridge</option>\
                    <option value="inset">Inset</option>\
                    <option value="outset">Outset</option>\
                    <option value="inherit">Inherit</option>\
                </select><br />\
                <small>Select banner image border style.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-banner-border_color">Banner Image Border Color</label></th>\
                <td><input type="text" name="banner border_color" id="gt-banner-border_color" value="#EEF0EF" class="gt-iris color {hash:true,required:false}" /><br />\
                    <small>Adjust banner image border color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-banner-border_radius">Banner Image Border Radius</label></th>\
                <td><input type="text" id="gt-banner-border_radius" name="banner-border_radius" value="0" /><br />\
                <small>Insert the radius for banner image border (in pixels). Ex: 1,2,3,etc.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-banner-style">Banner Image Style</label></th>\
                <td><textarea type="style" id="gt-banner-style" name="banner-style"></textarea><br />\
                <small>Add custom style (CSS) to banner image.</small></td>\
            </tr>\
        </table>\
        <p class="submit">\
            <input type="button" id="gt-banner-submit" class="button-primary" value="Insert Banner Ad" name="submit" />\
        </p>\
        </div>');

        jQuery(document).ready(function($){

            $('#gt-banner-width,#gt-banner-height').hide();

            jQuery('#gt-banner-size').change(function(){
                console.log($('#gt-banner-size').val());
                if($('#gt-banner-size').val()=='custom'){
                    $('#gt-banner-width,#gt-banner-height').show('slow');
                }else{
                    $('#gt-banner-width,#gt-banner-height').hide();
                }
            });

        });
        
        var bannerTable = bannerForm.find('table');
        bannerForm.appendTo('body').hide();
        
        // handles the click event of the submit banner
        bannerForm.find('#gt-banner-submit').click(function(){
            // defines the options and their default values
            // again, this is not the most elegant way to do this
            // but well, this gets the job done nonetheless
            var bannerOptions = { 
                'size'       : '',
                'image_src'  : '',
                'max_width'  : '',
                'max_height' : '',
                'alt'        : 'Advertisement',
                'lazy_load'  : 'no',
                'link'       : '',
                'link_target': '_self',
                'link_title' : 'Advert',
                'placeholder_text' : '',
                'placeholder_image_color' : 'EEF0EF',
                'placeholder_image_text_color' : '999999',
                'placeholder_image_format' : '.gif',
                'border_size' : '0',
                'border_style' : 'solid',
                'border_radius' : '0',
                'border_color' : '#EEF0EF',
                'style'      : ''
                
                };
            var bannerShortcode = '[gtbanner';
            
            for( var index in bannerOptions) {
                var bannerValue = bannerTable.find('#gt-banner-' + index).val();
                
                // attaches the attribute to the shortcode only if it's different from the default value
                if ( bannerValue !== bannerOptions[index] )
                    bannerShortcode += ' ' + index + '="' + bannerValue + '"';
            }
            
            bannerShortcode += ']';
            
            // inserts the shortcode into the active editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, bannerShortcode);
            
            // closes Thickbox
            tb_remove();
        });



          ////////////////////////////////////////////////////////////////////////////////
         /////////// Blockquote Popup ///////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////


        var blockquoteForm = jQuery('<div id="gt-blockquote-form"><table id="gt-table" class="form-table">\
            <small style="background-color:#ffebe8;padding:10px 30px;float:left;overflow:hidden;"><span style="color:#787878;">Text for the blockquote is added between the blockquote tags. Ex: [gtblockquote]your text here[/gtblockquote]</span></small>\
            <tr>\
                <th><label for="gt-blockquote-type">Blockquote Type</label></th>\
                <td><select name="blockquote-type" id="gt-blockquote-type">\
                    <option value="left">Left Aligned</option>\
                    <option value="right">Right Aligned</option>\
                </select><br />\
                <small>Select blockquote type.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-blockquote-quote_text_size">Blockquote Text Size</label></th>\
                <td><input type="text" id="gt-blockquote-quote_text_size" name="blockquote-quote_text_size" value="18" /><br />\
                <small>Insert the size for blockquote text (in pixels). Ex: 18,24,32,etc.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-blockquote-quote_text_style">Blockquote Text Style</label></th>\
                <td><select name="blockquote-quote_text_style" id="gt-blockquote-quote_text_style">\
                    <option value="normal">Normal</option>\
                    <option value="italic" selected>Italic</option>\
                    <option value="oblique">Oblique</option>\
                    <option value="inherit">Inherit</option>\
                </select><br />\
                <small>Select blockquote text style.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-blockquote-quote_text_color">Blockquote Text Color</label></th>\
                <td><input type="text" name="blockquote text color" id="gt-blockquote-quote_text_color" value="#999999" class="gt-iris color {hash:true,required:false}" /><br />\
                    <small>Adjust blockquote text color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-blockquote-background">Blockquote Background Color</label></th>\
                <td><input type="text" name="blockquote background" id="gt-blockquote-background" value="#FFFFFF" class="gt-iris color {hash:true,required:false}" /><br />\
                    <small>Adjust blockquote background color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-blockquote-source">Blockquote Source Name</label></th>\
                <td><input type="text" id="gt-blockquote-source" name="blockquote-source" value="" /><br />\
                <small>Insert blockquote source name.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-blockquote-source_text_size">Blockquote Source Text Size</label></th>\
                <td><input type="text" id="gt-blockquote-source_text_size" name="blockquote-source_text_size" value="12" /><br />\
                <small>Insert text size for blockquote source text (in pixels). Ex: 10,11,12,etc.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-blockquote-source_text_color">Blockquote Source Text Color</label></th>\
                <td><input type="text" name="blockquote source text color" id="gt-blockquote-source_text_color" value="#999999" class="gt-iris color {hash:true,required:false}" /><br />\
                    <small>Adjust blockquote source text color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-blockquote-border_size">Blockquote Border Size</label></th>\
                <td><input type="text" id="gt-blockquote-border_size" name="blockquote-border_size" value="5" /><br />\
                <small>Insert the size for blockquote border (in pixels). Ex: 1,2,3,etc.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-blockquote-border_style">Blockquote Border Style</label></th>\
                <td><select name="blockquote-border_style" id="gt-blockquote-border_style">\
                    <option value="none">None</option>\
                    <option value="hidden">Hidden</option>\
                    <option value="dotted">Dotted</option>\
                    <option value="dashed">Dashed</option>\
                    <option value="solid" selected>Solid</option>\
                    <option value="double">Double</option>\
                    <option value="groove">Groove</option>\
                    <option value="ridge">Ridge</option>\
                    <option value="inset">Inset</option>\
                    <option value="outset">Outset</option>\
                    <option value="inherit">Inherit</option>\
                </select><br />\
                <small>Select blockquote border style.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-blockquote-border_color">Blockquote Border Color</label></th>\
                <td><input type="text" name="blockquote border_color" id="gt-blockquote-border_color" value="#EEF0EF" class="gt-iris color {hash:true,required:false}" /><br />\
                    <small>Adjust blockquote border color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-blockquote-border_radius">Blockquote Border Radius</label></th>\
                <td><input type="text" id="gt-blockquote-border_radius" name="blockquote-border_radius" value="0" /><br />\
                <small>Insert the radius for blockquote border (in pixels). Ex: 1,2,3,etc. Border radius is used to give curve to blockquote borders.</small></td>\
            </tr>\
        </table>\
        <p class="submit">\
            <input type="button" id="gt-blockquote-submit" class="button-primary" value="Insert Blockquote" name="submit" />\
        </p>\
        </div>');
        
        var blockquoteTable = blockquoteForm.find('table');
        blockquoteForm.appendTo('body').hide();
        
        // handles the click event of the submit blockquote
        blockquoteForm.find('#gt-blockquote-submit').click(function(){
            // defines the options and their default values
            // again, this is not the most elegant way to do this
            // but well, this gets the job done nonetheless
            var blockquoteOptions = { 
                'type'              : 'left',
                'quote_text_size'   : '18',
                'quote_text_style'  : 'italic',
                'quote_text_color'  : '#999999',
                'source'            : '',
                'source_text_size'  : '12',
                'source_text_color' : '#999999',
                'background'        : '#FFFFFF',
                'border_size'       : '5',
                'border_style'      : 'solid',
                'border_color'      : '#EEF0EF',
                'border_radius'     : '0'
                
                };
            var blockquoteShortcode = '[gtblockquote';
            
            for( var index in blockquoteOptions) {
                var blockquoteValue = blockquoteTable.find('#gt-blockquote-' + index).val();
                
                // attaches the attribute to the shortcode only if it's different from the default value
                if ( blockquoteValue !== blockquoteOptions[index] )
                    blockquoteShortcode += ' ' + index + '="' + blockquoteValue + '"';
            }
            
            blockquoteShortcode += '][/gtblockquote]';
            
            // inserts the shortcode into the active editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, blockquoteShortcode);
            
            // closes Thickbox
            tb_remove();
        });



          ////////////////////////////////////////////////////////////////////////////////
         /////////// Button Popup ///////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////


        var buttonForm = jQuery('<div id="gt-button-form"><table id="gt-table" class="form-table">\
            <small style="background-color:#ffebe8;padding:10px 30px;float:left;overflow:hidden;"><span style="color:#787878;">Text for the button is added between the button tags. Ex: [gtbutton]your text here[/gtbutton]. Similarly you can include any other short code such as an icon short code between button tags.</span></small>\
            <tr>\
                <th><label for="gt-button-text">Text</label></th>\
                <td><input type="text" id="gt-button-text" name="button-text" value="" /><br />\
                <small>Add button text.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-button-tag">Button Tag</label></th>\
                <td><select name="button-tag" id="gt-button-tag">\
                    <option value="a">Anchor Tag</option>\
                    <option value="button">Button Tag</option>\
                    <option value="span">Span Tag</option>\
                </select><br />\
                <small>Select the html tag for button.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-button-class">Custom Class</label></th>\
                <td><input type="text" id="gt-button-class" name="button-class" value="" /><br />\
                <small>Add custom class to button.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-button-backtotop">Back To Top Link?</label></th>\
                <td><select name="button-backtotop" id="gt-button-backtotop">\
                    <option value="no">No</option>\
                    <option value="yes">Yes</option>\
                </select><br />\
                <small>Enable or Disable back to top link.</small></td>\
            </tr>\
            <tr id="gt-button-backtotop-link">\
                <th><label for="gt-button-link">Button Link</label></th>\
                <td><input type="text" id="gt-button-link" name="button-link" value="" /><br />\
                <small>Link to which button will redirect on click.</small></td>\
            </tr>\
            <tr id="gt-button-backtotop-target">\
                <th><label for="gt-button-target">Button Link Target</label></th>\
                <td><select name="button-target" id="gt-button-target">\
                    <option value="_self">Self</option>\
                    <option value="_blank">Blank</option>\
                    <option value="_parent">Parent</option>\
                    <option value="_top">Top</option>\
                </select><br />\
                <small>Select button link target. Self - open link in same window, Blank - open in new window, Parent - open link in parent frame & top - open link in full body of the window.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-button-size">Button Size</label></th>\
                <td><select name="button-size" id="gt-button-size">\
                    <option value="">Default</option>\
                    <option value="huge">Huge</option>\
                    <option value="large">Large</option>\
                    <option value="wide">Wide</option>\
                    <option value="small">Small</option>\
                    <option value="mini">Mini</option>\
                </select><br />\
                <small>Select button size.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-button-type">Button Type</label></th>\
                <td><select name="button-type" id="gt-button-type">\
                    <option value="">Default</option>\
                    <option value="primary">Primary</option>\
                    <option value="warning">Warning</option>\
                    <option value="success">Success</option>\
                    <option value="danger">Danger</option>\
                    <option value="inverse">Inverse</option>\
                    <option value="info">Info</option>\
                    <option value="social-facebook">Facebook</option>\
                    <option value="social-twitter">Twitter</option>\
                    <option value="social-googleplus">Googleplus</option>\
                    <option value="social-pinterest">Pinterest</option>\
                    <option value="social-linkedin">Linkedin</option>\
                    <option value="social-stumbleupon">Stumbleupon</option>\
                    <option value="social-skype">Skype</option>\
                    <option value="social-path">Path</option>\
                    <option value="social-myspace">Myspace</option>\
                    <option value="social-youtube">Youtube</option>\
                    <option value="social-vimeo">Vimeo</option>\
                    <option value="social-spotify">Spotify</option>\
                    <option value="social-dribbble">Dribbble</option>\
                    <option value="social-blogger">Blogger</option>\
                    <option value="social-behance">Behance</option>\
                </select><br />\
                <small>Select button type.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-button-block">Button Block</label></th>\
                <td><select name="button-block" id="gt-button-block">\
                    <option value="">No</option>\
                    <option value="yes">Yes</option>\
                </select><br />\
                <small>Select button block. It gives 100% width to Button.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-button-embossed">Button Embossed</label></th>\
                <td><select name="button-embossed" id="gt-button-embossed">\
                    <option value="">No</option>\
                    <option value="yes">Yes</option>\
                </select><br />\
                <small>Select button embossed.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-button-disabled">Button Disabled</label></th>\
                <td><select name="button-disabled" id="gt-button-disabled">\
                    <option value="">No</option>\
                    <option value="yes">Yes</option>\
                </select><br />\
                <small>Select button disabled.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-button-background">Button Background</label></th>\
                <td><input type="text" name="button background color" id="gt-button-background" value="" class="gt-iris color {hash:true,required:false}" /><br />\
                    <small>Select background color. This will override the default color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-button-border_size">Button Border Size</label></th>\
                <td><input type="text" id="gt-button-border_size" name="button-border_size" value="0" /><br />\
                <small>Insert the size for button border (in pixels). Ex: 1,2,3,etc.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-button-border_style">Button Border Style</label></th>\
                <td><select name="button-border_style" id="gt-button-border_style">\
                    <option value="none">None</option>\
                    <option value="hidden">Hidden</option>\
                    <option value="dotted">Dotted</option>\
                    <option value="dashed">Dashed</option>\
                    <option value="solid">Solid</option>\
                    <option value="double">Double</option>\
                    <option value="groove">Groove</option>\
                    <option value="ridge">Ridge</option>\
                    <option value="inset">Inset</option>\
                    <option value="outset">Outset</option>\
                    <option value="inherit">Inherit</option>\
                </select><br />\
                <small>Select button border style.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-button-border_color">Button Border Color</label></th>\
                <td><input type="text" name="button border_color" id="gt-button-border_color" value="" class="gt-iris color {hash:true,required:false}" /><br />\
                    <small>Adjust button border color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-button-border_radius">Button Border Radius</label></th>\
                <td><input type="text" id="gt-button-border_radius" name="button-border_radius" value="" /><br />\
                <small>Insert the radius for button border (in pixels). Ex: 1,2,3,etc. Border radius is used to give curve to button borders.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-button-style">Button Style</label></th>\
                <td><textarea id="gt-button-style" name="button-style">color:#fff;font-weight:normal;</textarea><br />\
                <small>Button style. Ex: color:#fff;font-weight:normal;</small></td>\
            </tr>\
            <tr>\
                <td><input type="hidden" id="gt-button-animation" name="button-animation" value="yes" />\
            </tr>\
        </table>\
        <p class="submit">\
            <input type="button" id="gt-button-submit" class="button-primary" value="Insert Button" name="submit" />\
        </p>\
        </div>');

        jQuery(document).ready(function($){
            $('#gt-button-backtotop').change(function(index){
                $('#gt-button-backtotop').each(function(index){

                    if($('#gt-button-backtotop').val()=='yes'){
                        $('#gt-button-backtotop-link,#gt-button-backtotop-target').hide();
                    }else{
                        $('#gt-button-backtotop-link,#gt-button-backtotop-target').show('slow');
                    }

                });
            });
        });
        
        var buttonTable = buttonForm.find('table');
        buttonForm.appendTo('body').hide();
        
        // handles the click event of the submit button
        buttonForm.find('#gt-button-submit').click(function(){
            // defines the options and their default values
            // again, this is not the most elegant way to do this
            // but well, this gets the job done nonetheless
            var buttonOptions = { 
                'class'         : '',
                'tag'           : 'a',
                'backtotop'     : 'no',
                'link'          : '',
                'target'        : '_self',
                'size'          : '',
                'type'          : '',
                'block'         : '',
                'embossed'      : '',
                'disabled'      : '',
                'background'    : '',
                'animation'     : 'yes',
                'border_size'    : '0',
                'border_style'   : 'none',
                'border_color'   : '',
                'border_radius'  : '',
                'style'          : 'color:#fff;font-weight:normal;'
                
                };
            var buttonShortcode = '[gtbutton';
            
            for( var index in buttonOptions) {
                var buttonValue = buttonTable.find('#gt-button-' + index).val();
                
                // attaches the attribute to the shortcode only if it's different from the default value
                if ( buttonValue !== buttonOptions[index] )
                    buttonShortcode += ' ' + index + '="' + buttonValue + '"';
            }

            var buttonText = jQuery('#gt-button-text').val();
            
            buttonShortcode += ']'+ buttonText +'[/gtbutton]';
            
            // inserts the shortcode into the active editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, buttonShortcode);
            
            // closes Thickbox
            tb_remove();
        });



          ////////////////////////////////////////////////////////////////////////////////
         /////////// Carousels Popup /////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////


        var carouselForm = jQuery('<div id="gt-carousel-form"><table id="gt-table" class="form-table">\
            <tr>\
                <th><label for="gt-carousel-id">Slider ID</label></th>\
                <td><input type="text" id="gt-carousel-id" name="carousel-id" value="myCarousel" /><br />\
                <small>Unique Carousel ID required for each carousel.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-carousel-slides">Number of Slides</label></th>\
                <td><input type="text" id="gt-carousel-slides" name="carousel-slides" value="3" /><br />\
                <small>Enter the number of required slides.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-carousel-images">Carousel Images</label></th>\
                <td><textarea type="text" name="Images" id="gt-carousel-images">#,#,#</textarea><br />\
                    <small>Enter comma separated image urls. If 3 slides then 3 urls and so on.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-carousel-links">Carousel Slide Links</label></th>\
                <td><textarea type="text" name="Carousel Links" id="gt-carousel-links">#,#,#</textarea><br />\
                    <small>Enter comma separated links. If 3 slides then 3 links and so on.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-carousel-alts">Carousel Image Alts</label></th>\
                <td><input type="text" name="Image alts" id="gt-carousel-alts" value="Slide1,Slide2,Slide3" /><br />\
                <small>Enter comma separated image alt texts. Good for SEO.</small>\
            </tr>\
            <tr>\
                <th><label for="gt-carousel-titles">Carousel Slide Titles</label></th>\
                <td><input type="text" name="Slide titles" id="gt-carousel-titles" value="Title1,Title2,Title3" /><br />\
                <small>Enter comma separated slide titles.</small>\
            </tr>\
            <tr>\
                <th><label for="gt-carousel-descs">Carousel Slide Descriptions</label></th>\
                <td><input type="text" name="Slide descriptions" id="gt-carousel-descs" value="Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec." /><br />\
                <small>Enter comma separated slide descriptions.</small>\
            </tr>\
            <tr>\
                <th><label for="gt-carousel-style">Carousel Style</label></th>\
                <td><input type="text" name="style" id="gt-carousel-style" value="" /><br />\
                <small>Apply style to carousel.</small></td>\
            </tr>\
        </table>\
        <p class="submit">\
            <input type="button" id="gt-carousel-submit" class="button-primary" value="Insert Carousel" name="submit" />\
        </p>\
        </div>');
        
        var carouselTable = carouselForm.find('table');
        carouselForm.appendTo('body').hide();
        
        // handles the click event of the submit button
        carouselForm.find('#gt-carousel-submit').click(function(){
            // defines the options and their default values
            // again, this is not the most elegant way to do this
            // but well, this gets the job done nonetheless
            var carouselOptions = { 
                'id'         : 'myCarousel',
                'slides'     : '3',
                'images'     : '#,#,#',
                'links'      : '#,#,#',
                'alts'       : 'Slide1,Slide2,Slide3',
                'titles'     : 'Title1,Title2,Title3',
                'descs'      : 'Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec.',
                'style'      : '',
                
                };
            var carouselShortcode = '[gtcarousel';
            
            for( var index in carouselOptions) {
                var carouselValue = carouselTable.find('#gt-carousel-' + index).val();
                
                // attaches the attribute to the shortcode only if it's different from the default value
                if ( carouselValue !== carouselOptions[index] )
                    carouselShortcode += ' ' + index + '="' + carouselValue + '"';
            }
            
            carouselShortcode += ']';
            
            // inserts the shortcode into the active editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, carouselShortcode);
            
            // closes Thickbox
            tb_remove();
        });



          ////////////////////////////////////////////////////////////////////////////////
         /////////// Charts Popup ///////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////


        var chartsForm = jQuery('<div id="gt-charts-form"><table id="gt-table-charts" class="form-table">\
            <small style="background-color:#ffebe8;padding:10px 30px;float:left;overflow:hidden;"><span style="color:#787878;">Make sure to enable charts script from options panel available here - Dashboard > Settings > GT Shortcodes.</span></small>\
            <tr>\
                <th><label for="gt-charts-width">Width</label></th>\
                <td><input type="text" name="charts width" id="gt-charts-width" value="" /><br />\
                    <small>Add chart width (in pixels).</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-charts-height">Height</label></th>\
                <td><input type="text" name="charts height" id="gt-charts-height" value="" /><br />\
                    <small>Add chart height (in pixels).</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-charts-animation_event">Animate On</label></th>\
                <td><select name="charts-animation_event" id="gt-charts-animation_event">\
                    <option value="pagescroll">Page Scroll</option>\
                    <option value="pageload">Page Load</option>\
                </select><br />\
                <small>Select charts animation event.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-charts-animation_type">Animation Type</label></th>\
                <td><select name="charts-animation_type" id="gt-charts-animation_type">\
                    <option value="linear">Linear</option>\
                    <option value="easeInQuad">EaseInQuad</option>\
                    <option value="easeOutQuad">EaseOutQuad</option>\
                    <option value="easeInOutQuad">EaseInOutQuad</option>\
                    <option value="easeInCubic">EaseInCubic</option>\
                    <option value="easeOutCubic">EaseOutCubic</option>\
                    <option value="easeInOutCubic">EaseInOutCubic</option>\
                    <option value="easeInQuart">EaseInQuart</option>\
                    <option value="easeOutQuart" selected>EaseOutQuart</option>\
                    <option value="easeInOutQuart">EaseInOutQuart</option>\
                    <option value="easeInQuint">EaseInQuint</option>\
                    <option value="easeOutQuint">EaseOutQuint</option>\
                    <option value="easeInOutQuint">EaseInOutQuint</option>\
                    <option value="easeInSine">EaseInSine</option>\
                    <option value="easeOutSine">EaseOutSine</option>\
                    <option value="easeInOutSine">EaseInOutSine</option>\
                    <option value="easeInExpo">EaseInExpo</option>\
                    <option value="easeOutExpo">EaseOutExpo</option>\
                    <option value="easeInOutExpo">EaseInOutExpo</option>\
                    <option value="easeInCirc">EaseInCirc</option>\
                    <option value="easeOutCirc">EaseOutCirc</option>\
                    <option value="easeInOutCirc">EaseInOutCirc</option>\
                    <option value="easeInElastic">EaseInElastic</option>\
                    <option value="easeOutElastic">EaseOutElastic</option>\
                    <option value="easeInOutElastic">EaseInOutElastic</option>\
                    <option value="easeInBack">EaseInBack</option>\
                    <option value="easeOutBack">EaseOutBack</option>\
                    <option value="easeInOutBack">EaseInOutBack</option>\
                    <option value="easeInBounce">EaseInBounce</option>\
                    <option value="easeOutBounce">EaseOutBounce</option>\
                    <option value="easeInOutBounce">EaseInOutBounce</option>\
                </select><br />\
                <small>Select charts animation type.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-charts-animation_delay">Animation Delay</label></th>\
                <td><input type="text" name="charts animation_delay" id="gt-charts-animation_delay" value="300" /><br />\
                    <small>Add chart animation delay (in milliseconds).</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-charts-type">Type</label></th>\
                <td><select name="charts-type" id="gt-charts-type">\
                    <option value="line" selected>Line</option>\
                    <option value="bar">Bar</option>\
                    <option value="radar">Radar</option>\
                    <option value="PolarArea">Polar Area</option>\
                    <option value="pie">Pie</option>\
                    <option value="doughnut">Doughnut</option>\
                </select><br />\
                <small>Select charts type.</small></td>\
            </tr>\
            <tr id="gt-charts-labels-tr">\
                <th><label for="gt-charts-labels">Labels</label></th>\
                <td><textarea name="charts labels" id="gt-charts-labels"></textarea><br />\
                    <small>Add labels (comma separated).</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-charts-style">Custom Style</label></th>\
                <td><textarea name="charts-style" id="gt-charts-style"></textarea><br />\
                    <small>Add custom css style. Example: margin:10px;</small></td>\
            </tr>\
            <tr class="gt-charts-data-begin gt-charts-fill_color-tr" style="border-top:1px solid #dcdcdc;">\
                <th><label for="gt-charts-fill_color">Fill Color</label></th>\
                <td><input type="text" name="charts-fill_color" value="#d0dce0" class="gt-iris color {hash:true}" /><br />\
                    <small>Select charts fill color.</small></td>\
            </tr>\
            <tr class="gt-charts-stroke_color-tr">\
                <th><label for="gt-charts-stroke_color">Stroke Color</label></th>\
                <td><input type="text" name="charts-stroke_color" value="#dcdcdc" class="gt-iris color {hash:true}" /><br />\
                    <small>Select charts stroke color.</small></td>\
            </tr>\
            <tr class="gt-charts-data-tr">\
                <th><label for="gt-charts-data">Data</label></th>\
                <td><textarea name="charts-data"></textarea><br />\
                    <small>Add data (comma separated).</small></td>\
            </tr>\
            <tr class="gt-charts-data-begin gt-charts-color-tr" style="border-top:1px solid #dcdcdc;display:none;">\
                <th><label for="gt-charts-color">Color</label></th>\
                <td><input type="text" name="charts-color" value="#d0dce0" class="gt-iris color {hash:true}" /><br />\
                    <small>Select charts data color.</small></td>\
            </tr>\
            <tr class="gt-charts-value-tr" style="display:none;">\
                <th><label for="gt-charts-value">Value</label></th>\
                <td><input type="text" name="charts-value" value="" /><br />\
                    <small>Add a value. Example: 60.</small></td>\
            </tr>\
        </table>\
        <a id="gt-charts-add-more" class="button-secondary" name="add-data" style="float:right;">Add Data</a>\
        <p class="submit">\
            <input type="button" id="gt-charts-submit" class="button-primary" value="Insert charts" name="submit" />\
        </p>\
        </div>');

        var chartType = '';

        jQuery(document).ready(function($){
            chartType = $('#gt-charts-type option:selected').text();
            $('#gt-charts-type').change(function(){
                var value = $(this).val();
                if(value == 'line' || value == 'bar' || value == 'radar'){
                    $('.gt-charts-color-tr,.gt-charts-value-tr').hide();
                    $('.gt-charts-data-tr,.gt-charts-stroke_color-tr,.gt-charts-fill_color-tr').fadeIn();
                    $('#gt-charts-labels-tr').fadeIn();
                }else{
                    $('.gt-charts-color-tr,.gt-charts-value-tr').fadeIn();
                    $('.gt-charts-data-tr,.gt-charts-stroke_color-tr,.gt-charts-fill_color-tr').hide();
                    $('#gt-charts-labels-tr').hide();
                }
                chartType = $('#gt-charts-type option:selected').text();
            });
            $('#gt-charts-add-more').click(function(){
                var dataInputs = $('<tr class="gt-charts-data-begin gt-charts-fill_color-tr" style="border-top:1px solid #dcdcdc;">\
                <th><label for="gt-charts-fill_color">Fill Color</label></th>\
                <td><input type="text" name="charts-fill_color" value="#d0dce0" class="gt-iris color {hash:true}" /><br />\
                    <small>Select charts fill color.</small></td>\
                </tr>\
                <tr class="gt-charts-stroke_color-tr">\
                    <th><label for="gt-charts-stroke_color">Stroke Color</label></th>\
                    <td><input type="text" name="charts-stroke_color" value="#dcdcdc" class="gt-iris color {hash:true}" /><br />\
                        <small>Select charts stroke color.</small></td>\
                </tr>\
                <tr class="gt-charts-data-tr">\
                    <th><label for="gt-charts-data">Data</label></th>\
                    <td><textarea name="charts-data"></textarea><br />\
                        <small>Add data (comma separated).</small></td>\
                </tr>\
                <tr class="gt-charts-data-begin gt-charts-color-tr" style="border-top:1px solid #dcdcdc;display:none;">\
                    <th><label for="gt-charts-color">Color</label></th>\
                    <td><input type="text" name="charts-color" value="#d0dce0" class="gt-iris color {hash:true}" /><br />\
                        <small>Select charts data color.</small></td>\
                </tr>\
                <tr class="gt-charts-value-tr" style="display:none;">\
                    <th><label for="gt-charts-value">Value</label></th>\
                    <td><input type="text" name="charts-value" value="" /><br />\
                        <small>Add a value. Example: 60.</small></td>\
                </tr>');

                var value = $('#gt-charts-type').val();
                
                $(document).find('#gt-table-charts').append(dataInputs);
                ;

                if(value == 'line' || value == 'bar' || value == 'radar'){
                    $('.gt-charts-color-tr,.gt-charts-value-tr').hide();
                    $('.gt-charts-data-tr,gt-charts-stroke_color-tr,gt-charts-fill_color-tr').fadeIn();
                }else{
                    $('.gt-charts-color-tr,.gt-charts-value-tr').fadeIn();
                    $('.gt-charts-data-tr,.gt-charts-stroke_color-tr,.gt-charts-fill_color-tr').hide();
                }

                $(document).find('#gt-table-charts').find('.gt-iris').wpColorPicker();
            
            });
        });
        
        var chartsTable = chartsForm.find('table');
        chartsForm.appendTo('body').hide();
        
        // handles the click event of the submit button
        chartsForm.find('#gt-charts-submit').click(function(){
            // defines the options and their default values
            // again, this is not the most elegant way to do this
            // but well, this gets the job done nonetheless
            var chartsOptions = { 
                'width'             : '960',
                'height'            : '400',
                'type'              : 'line',
                'labels'            : 'January,February,March,April,May,June,July',
                'animation_event'   : 'pagescroll',
                'animation_type'    : 'easeOutQuart',
                'animation_delay'   : '300',
                'style'             : ''
                };
            var chartsShortcode = '[gt_chart';
            
            for( var index in chartsOptions) {
                var chartsValue = chartsTable.find('#gt-charts-' + index).val();
                
                // attaches the attribute to the shortcode only if it's different from the default value
                if ( chartsValue !== chartsOptions[index] )
                    chartsShortcode += ' ' + index + '="' + chartsValue + '"';
            }
            
            chartsShortcode += ']';

            var fillArray = jQuery( "input[name=charts-fill_color]" ).map(function() {
                    return jQuery( this ).val();
                });
            var strokeArray = jQuery( "input[name=charts-stroke_color]" ).map(function() {
                    return jQuery( this ).val();
                });
            var dataArray = jQuery( 'textarea[name="charts-data"]' ).map(function() {
                    return jQuery( this ).val();
                });
            var colorArray = jQuery( "input[name=charts-color]" ).map(function() {
                    return jQuery( this ).val();
                });
            var valueArray = jQuery( 'input[name=charts-value]' ).map(function() {
                    return jQuery( this ).val();
                });

            if( chartType == 'Line' || chartType == 'Bar' || chartType == 'Radar' ){
                var dataLength = jQuery( 'input[name=charts-fill_color]' ).length;
                for( var i=0; i<dataLength; i++){
                    chartsShortcode += '<br>[gt_chart_data fill_color="'+fillArray[i]+'" stroke_color="'+strokeArray[i]+'" data="'+dataArray[i]+'"]';
                }
            }else{
                var dataLength = jQuery( 'input[name=charts-color]' ).length;
                for( var i=0; i<dataLength; i++){
                    chartsShortcode += '<br>[gt_circular_chart_data color="'+colorArray[i]+'" value="'+valueArray[i]+'"]';
                }
            }
                

            chartsShortcode += '<br>[/gt_chart]';
            
            // inserts the shortcode into the active editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, chartsShortcode);
            
            // closes Thickbox
            tb_remove();
        });



          ////////////////////////////////////////////////////////////////////////////////
         /////////// Code Block Popup /////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////


        var codeForm = jQuery('<div id="gt-code-form"><table id="gt-table" class="form-table">\
            <tr>\
                <th><label for="gt-code-type">Type</label></th>\
                <td><select name="code-type" id="gt-code-type">\
                    <option value="code">&lt;code&gt;</option>\
                    <option value="pre">&lt;pre&gt;</option>\
                </select><br />\
                <small>Select code block type.</small></td>\
            </tr>\
            <tr id="gt-code-scroll-tr" style="display:none;">\
                <th><label for="gt-code-scroll">Scroll</label></th>\
                <td><input type="checkbox" name="scroll" id="gt-code-scroll" value="" /><br />\
                <small>Make code block scrollable.</small></td>\
            </tr>\
            <tr id="gt-code-height-tr" style="display:none;">\
                <th><label for="gt-code-height">Max Height</label></th>\
                <td><input type="text" name="height" id="gt-code-height" value="340" /><br />\
                <small>Apply maximum height to code block (in pixels).</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-code-text_color">Text Color</label></th>\
                <td><input type="text" name="code text color" id="gt-code-text_color" value="" class="gt-iris color {hash:true,required:false}" /><br />\
                    <small>Select text color. This will override the default color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-code-background">Background Color</label></th>\
                <td><input type="text" name="code background color" id="gt-code-background" value="" class="gt-iris color {hash:true,required:false}" /><br />\
                    <small>Select background color. This will override the default color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-code-style">Code Style</label></th>\
                <td><textarea name="style" id="gt-code-style" value=""></textarea><br />\
                <small>Apply style to code block.</small></td>\
            </tr>\
        </table>\
        <p class="submit">\
            <input type="button" id="gt-code-submit" class="button-primary" value="Insert Code Block" name="submit" />\
        </p>\
        </div>');

        jQuery(document).ready(function($){

            $('#gt-code-type').change(function(){
                $('#gt-code-type').each(function(){
                    var codeType = $('#gt-code-type').val();
                    if( codeType == 'pre' ){
                        $('#gt-code-scroll-tr,#gt-code-height-tr').fadeIn();
                    }else{
                        $('#gt-code-scroll-tr,#gt-code-height-tr').hide();
                    }
                });
            });

            $('#gt-code-scroll').change(function(){
                $('#gt-code-scroll').each(function(){
                    if( $( '#gt-code-scroll' ).is(':checked') ){
                        $('#gt-code-height-tr').fadeIn();
                        $( '#gt-code-scroll' ).val('yes');
                    }else{
                        $('#gt-code-height-tr').hide();
                        $( '#gt-code-scroll' ).val('no');
                    }
                });
            });

        });
        
        var codeTable = codeForm.find('table');
        codeForm.appendTo('body').hide();
        
        // handles the click event of the submit button
        codeForm.find('#gt-code-submit').click(function(){
            // defines the options and their default values
            // again, this is not the most elegant way to do this
            // but well, this gets the job done nonetheless
            var codeOptions = { 
                'type'       : 'code',
                'scroll'     : 'no',
                'height'     : '340',
                'text_color' : '',
                'background' : '',
                'style'      : ''
                
                };
            var codeShortcode = '[gtcode';
            
            for( var index in codeOptions) {
                var codeValue = codeTable.find('#gt-code-' + index).val();
                
                // attaches the attribute to the shortcode only if it's different from the default value
                if ( codeValue !== codeOptions[index] )
                    codeShortcode += ' ' + index + '="' + codeValue + '"';
            }
            
            codeShortcode += '][/gtcode]';
            
            // inserts the shortcode into the active editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, codeShortcode);
            
            // closes Thickbox
            tb_remove();
        });



          ////////////////////////////////////////////////////////////////////////////////
         /////////// Columns Popup ////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////


        var columnsForm = jQuery('<div id="gt-columns-form"><table id="gt-table" class="form-table">\
            <tr>\
                <th><label for="gt-columns-count">Number of Columns</label></th>\
                <td><select name="columns-count" id="gt-columns-count">\
                    <option value="0">Select</option>\
                    <option value="1">1</option>\
                    <option value="2">2</option>\
                    <option value="3">3</option>\
                    <option value="4">4</option>\
                    <option value="5">5</option>\
                    <option value="6">6</option>\
                    <option value="7">7</option>\
                    <option value="8">8</option>\
                    <option value="9">9</option>\
                    <option value="10">10</option>\
                    <option value="11">11</option>\
                    <option value="12">12</option>\
                </select><br />\
                <small>Select the number of required columns.</small></td>\
            </tr>\
            <tr id="gtcolumn1">\
                <th><label for="gt-columns-col1">Column 1 Size</label></th>\
                <td><select name="columns-col1" id="gt-columns-col1">\
                    <option value="1">1</option>\
                    <option value="2">2</option>\
                    <option value="3">3</option>\
                    <option value="4">4</option>\
                    <option value="5">5</option>\
                    <option value="6">6</option>\
                    <option value="7">7</option>\
                    <option value="8">8</option>\
                    <option value="9">9</option>\
                    <option value="10">10</option>\
                    <option value="11">11</option>\
                    <option value="12">12</option>\
                </select><br />\
                <small>Select the column 1 size.</small></td>\
            </tr>\
            <tr id="gtcolumn2">\
                <th><label for="gt-columns-col2">Column 2 Size</label></th>\
                <td><select name="columns-col2" id="gt-columns-col2">\
                    <option value="1">1</option>\
                    <option value="2">2</option>\
                    <option value="3">3</option>\
                    <option value="4">4</option>\
                    <option value="5">5</option>\
                    <option value="6">6</option>\
                    <option value="7">7</option>\
                    <option value="8">8</option>\
                    <option value="9">9</option>\
                    <option value="10">10</option>\
                    <option value="11">11</option>\
                    <option value="12">12</option>\
                </select><br />\
                <small>Select the column 2 size.</small></td>\
            </tr>\
            <tr id="gtcolumn3">\
                <th><label for="gt-columns-col3">Column 3 Size</label></th>\
                <td><select name="columns-col3" id="gt-columns-col3">\
                    <option value="1">1</option>\
                    <option value="2">2</option>\
                    <option value="3">3</option>\
                    <option value="4">4</option>\
                    <option value="5">5</option>\
                    <option value="6">6</option>\
                    <option value="7">7</option>\
                    <option value="8">8</option>\
                    <option value="9">9</option>\
                    <option value="10">10</option>\
                    <option value="11">11</option>\
                    <option value="12">12</option>\
                </select><br />\
                <small>Select the column 3 size.</small></td>\
            </tr>\
            <tr id="gtcolumn4">\
                <th><label for="gt-columns-col4">Column 4 Size</label></th>\
                <td><select name="columns-col4" id="gt-columns-col4">\
                    <option value="1">1</option>\
                    <option value="2">2</option>\
                    <option value="3">3</option>\
                    <option value="4">4</option>\
                    <option value="5">5</option>\
                    <option value="6">6</option>\
                    <option value="7">7</option>\
                    <option value="8">8</option>\
                    <option value="9">9</option>\
                    <option value="10">10</option>\
                    <option value="11">11</option>\
                    <option value="12">12</option>\
                </select><br />\
                <small>Select the column 4 size.</small></td>\
            </tr>\
            <tr id="gtcolumn5">\
                <th><label for="gt-columns-col5">Column 5 Size</label></th>\
                <td><select name="columns-col5" id="gt-columns-col5">\
                    <option value="1">1</option>\
                    <option value="2">2</option>\
                    <option value="3">3</option>\
                    <option value="4">4</option>\
                    <option value="5">5</option>\
                    <option value="6">6</option>\
                    <option value="7">7</option>\
                    <option value="8">8</option>\
                    <option value="9">9</option>\
                    <option value="10">10</option>\
                    <option value="11">11</option>\
                    <option value="12">12</option>\
                </select><br />\
                <small>Select the column 5 size.</small></td>\
            </tr>\
            <tr id="gtcolumn6">\
                <th><label for="gt-columns-col6">Column 6 Size</label></th>\
                <td><select name="columns-col6" id="gt-columns-col6">\
                    <option value="1">1</option>\
                    <option value="2">2</option>\
                    <option value="3">3</option>\
                    <option value="4">4</option>\
                    <option value="5">5</option>\
                    <option value="6">6</option>\
                    <option value="7">7</option>\
                    <option value="8">8</option>\
                    <option value="9">9</option>\
                    <option value="10">10</option>\
                    <option value="11">11</option>\
                    <option value="12">12</option>\
                </select><br />\
                <small>Select the column 6 size.</small></td>\
            </tr>\
            <tr id="gtcolumn7">\
                <th><label for="gt-columns-col7">Column 7 Size</label></th>\
                <td><select name="columns-col7" id="gt-columns-col7">\
                    <option value="1">1</option>\
                    <option value="2">2</option>\
                    <option value="3">3</option>\
                    <option value="4">4</option>\
                    <option value="5">5</option>\
                    <option value="6">6</option>\
                    <option value="7">7</option>\
                    <option value="8">8</option>\
                    <option value="9">9</option>\
                    <option value="10">10</option>\
                    <option value="11">11</option>\
                    <option value="12">12</option>\
                </select><br />\
                <small>Select the column 7 size.</small></td>\
            </tr>\
            <tr id="gtcolumn8">\
                <th><label for="gt-columns-col8">Column 8 Size</label></th>\
                <td><select name="columns-col8" id="gt-columns-col8">\
                    <option value="1">1</option>\
                    <option value="2">2</option>\
                    <option value="3">3</option>\
                    <option value="4">4</option>\
                    <option value="5">5</option>\
                    <option value="6">6</option>\
                    <option value="7">7</option>\
                    <option value="8">8</option>\
                    <option value="9">9</option>\
                    <option value="10">10</option>\
                    <option value="11">11</option>\
                    <option value="12">12</option>\
                </select><br />\
                <small>Select the column 8 size.</small></td>\
            </tr>\
            <tr id="gtcolumn9">\
                <th><label for="gt-columns-col9">Column 9 Size</label></th>\
                <td><select name="columns-col9" id="gt-columns-col9">\
                    <option value="1">1</option>\
                    <option value="2">2</option>\
                    <option value="3">3</option>\
                    <option value="4">4</option>\
                    <option value="5">5</option>\
                    <option value="6">6</option>\
                    <option value="7">7</option>\
                    <option value="8">8</option>\
                    <option value="9">9</option>\
                    <option value="10">10</option>\
                    <option value="11">11</option>\
                    <option value="12">12</option>\
                </select><br />\
                <small>Select the column 9 size.</small></td>\
            </tr>\
            <tr id="gtcolumn10">\
                <th><label for="gt-columns-col10">Column 10 Size</label></th>\
                <td><select name="columns-col10" id="gt-columns-col10">\
                    <option value="1">1</option>\
                    <option value="2">2</option>\
                    <option value="3">3</option>\
                    <option value="4">4</option>\
                    <option value="5">5</option>\
                    <option value="6">6</option>\
                    <option value="7">7</option>\
                    <option value="8">8</option>\
                    <option value="9">9</option>\
                    <option value="10">10</option>\
                    <option value="11">11</option>\
                    <option value="12">12</option>\
                </select><br />\
                <small>Select the column 10 size.</small></td>\
            </tr>\
            <tr id="gtcolumn11">\
                <th><label for="gt-columns-col11">Column 11 Size</label></th>\
                <td><select name="columns-col11" id="gt-columns-col11">\
                    <option value="1">1</option>\
                    <option value="2">2</option>\
                    <option value="3>3</option>\
                    <option value="4">4</option>\
                    <option value="5">5</option>\
                    <option value="6">6</option>\
                    <option value="7">7</option>\
                    <option value="8">8</option>\
                    <option value="9">9</option>\
                    <option value="10">10</option>\
                    <option value="11">11</option>\
                    <option value="12">12</option>\
                </select><br />\
                <small>Select the column 11 size.</small></td>\
            </tr>\
            <tr id="gtcolumn12">\
                <th><label for="gt-columns-col12">Column 12 Size</label></th>\
                <td><select name="columns-col12" id="gt-columns-col12">\
                    <option value="1">1</option>\
                    <option value="2">2</option>\
                    <option value="3">3</option>\
                    <option value="4">4</option>\
                    <option value="5">5</option>\
                    <option value="6">6</option>\
                    <option value="7">7</option>\
                    <option value="8">8</option>\
                    <option value="9">9</option>\
                    <option value="10">10</option>\
                    <option value="11">11</option>\
                    <option value="12">12</option>\
                </select><br />\
                <small>Select the column 12 size.</small></td>\
            </tr>\
        </table>\
        <p class="submit">\
            <input type="button" id="gt-columns-submit" class="button-primary" value="Insert Column" name="submit" />\
        </p>\
        </div>');

        jQuery(document).ready(function(){

            jQuery("#gtcolumn1,#gtcolumn2,#gtcolumn3,#gtcolumn4,#gtcolumn5,#gtcolumn6,#gtcolumn7,#gtcolumn8,#gtcolumn9,#gtcolumn10,#gtcolumn11,#gtcolumn12").hide();

            jQuery('#gt-columns-count').change(function(){
                if (this.value == 1){ 
                    jQuery("#gtcolumn1").show("slow");
                    jQuery("#gtcolumn2,#gtcolumn3,#gtcolumn4,#gtcolumn5,#gtcolumn6,#gtcolumn7,#gtcolumn8,#gtcolumn9,#gtcolumn10,#gtcolumn11,#gtcolumn12").hide("slow");           
                } else if  (this.value == 2){
                    jQuery("#gtcolumn1,#gtcolumn2").show("slow"); 
                    jQuery("#gtcolumn3,#gtcolumn4,#gtcolumn5,#gtcolumn6,#gtcolumn7,#gtcolumn8,#gtcolumn9,#gtcolumn10,#gtcolumn11,#gtcolumn12").hide("slow");            
                } else if  (this.value == 3){
                    jQuery("#gtcolumn1,#gtcolumn2,#gtcolumn3").show("slow");
                    jQuery("#gtcolumn4,#gtcolumn5,#gtcolumn6,#gtcolumn7,#gtcolumn8,#gtcolumn9,#gtcolumn10,#gtcolumn11,#gtcolumn12").hide("slow");             
                } else if  (this.value == 4){
                    jQuery("#gtcolumn1,#gtcolumn2,#gtcolumn3,#gtcolumn4").show("slow");
                    jQuery("#gtcolumn5,#gtcolumn6,#gtcolumn7,#gtcolumn8,#gtcolumn9,#gtcolumn10,#gtcolumn11,#gtcolumn12").hide("slow"); 
                } else if  (this.value == 5){
                    jQuery("#gtcolumn1,#gtcolumn2,#gtcolumn3,#gtcolumn4,#gtcolumn5").show("slow");
                    jQuery("#gtcolumn6,#gtcolumn7,#gtcolumn8,#gtcolumn9,#gtcolumn10,#gtcolumn11,#gtcolumn12").hide("slow"); 
                } else if  (this.value == 6){
                    jQuery("#gtcolumn1,#gtcolumn2,#gtcolumn3,#gtcolumn4,#gtcolumn5,#gtcolumn6").show("slow");
                    jQuery("#gtcolumn7,#gtcolumn8,#gtcolumn9,#gtcolumn10,#gtcolumn11,#gtcolumn12").hide("slow"); 
                } else if  (this.value == 7){
                    jQuery("#gtcolumn1,#gtcolumn2,#gtcolumn3,#gtcolumn4,#gtcolumn5,#gtcolumn6,#gtcolumn7").show("slow");
                    jQuery("#gtcolumn8,#gtcolumn9,#gtcolumn10,#gtcolumn11,#gtcolumn12").hide("slow"); 
                } else if  (this.value == 8){
                    jQuery("#gtcolumn1,#gtcolumn2,#gtcolumn3,#gtcolumn4,#gtcolumn5,#gtcolumn6,#gtcolumn7,#gtcolumn8").show("slow");
                    jQuery("#gtcolumn9,#gtcolumn10,#gtcolumn11,#gtcolumn12").hide("slow"); 
                } else if  (this.value == 9){
                    jQuery("#gtcolumn1,#gtcolumn2,#gtcolumn3,#gtcolumn4,#gtcolumn5,#gtcolumn6,#gtcolumn7,#gtcolumn8,#gtcolumn9").show("slow");
                    jQuery("#gtcolumn10,#gtcolumn11,#gtcolumn12").hide("slow"); 
                } else if  (this.value == 10){
                    jQuery("#gtcolumn1,#gtcolumn2,#gtcolumn3,#gtcolumn4,#gtcolumn5,#gtcolumn6,#gtcolumn7,#gtcolumn8,#gtcolumn9,#gtcolumn10").show("slow");
                    jQuery("#gtcolumn11,#gtcolumn12").hide("slow"); 
                } else if  (this.value == 11){
                    jQuery("#gtcolumn1,#gtcolumn2,#gtcolumn3,#gtcolumn4,#gtcolumn5,#gtcolumn6,#gtcolumn7,#gtcolumn8,#gtcolumn9,#gtcolumn10,#gtcolumn11").show("slow");
                    jQuery("#gtcolumn12").hide("slow"); 
                } else if  (this.value == 12){
                    jQuery("#gtcolumn1,#gtcolumn2,#gtcolumn3,#gtcolumn4,#gtcolumn5,#gtcolumn6,#gtcolumn7,#gtcolumn8,#gtcolumn9,#gtcolumn10,#gtcolumn11,#gtcolumn12").show("slow");            
                } else {
                    jQuery("#gtcolumn1,#gtcolumn2,#gtcolumn3,#gtcolumn4,#gtcolumn5,#gtcolumn6,#gtcolumn7,#gtcolumn8,#gtcolumn9,#gtcolumn10,#gtcolumn11,#gtcolumn12").hide("500");         
                }       
            });

        });
        
        var columnsTable = columnsForm.find('table');
        columnsForm.appendTo('body').hide();
        
        // handles the click event of the submit button
        columnsForm.find('#gt-columns-submit').click(function(){
            // defines the options and their default values
            // again, this is not the most elegant way to do this
            // but well, this gets the job done nonetheless
            
            var col1 = columnsTable.find('#gt-columns-col1').val();
            var col2 = columnsTable.find('#gt-columns-col2').val();
            var col3 = columnsTable.find('#gt-columns-col3').val();
            var col4 = columnsTable.find('#gt-columns-col4').val();
            var col5 = columnsTable.find('#gt-columns-col5').val();
            var col6 = columnsTable.find('#gt-columns-col6').val();
            var col7 = columnsTable.find('#gt-columns-col7').val();
            var col8 = columnsTable.find('#gt-columns-col8').val();
            var col9 = columnsTable.find('#gt-columns-col9').val();
            var col10 = columnsTable.find('#gt-columns-col10').val();
            var col11 = columnsTable.find('#gt-columns-col11').val();
            var col12 = columnsTable.find('#gt-columns-col12').val();

            var colArray = [col1,col2,col3,col4,col5,col6,col7,col8,col9,col10,col11,col12]

            var columnsOptions = { 
                'count'        : '0'
                };
            var columnsShortcode = '[gtrow]';
            
                var countValue = columnsTable.find('#gt-columns-count').val();
                
                for( var i=0;i<countValue;i++) {
                    columnsShortcode += '[gtcolumn size' + '="' + colArray[i] + '"]<br/><br/>[/gtcolumn]';
                }
            
            columnsShortcode += '[/gtrow]';
            
            // inserts the shortcode into the active editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, columnsShortcode);
            
            // closes Thickbox
            tb_remove();
        });



          ////////////////////////////////////////////////////////////////////////////////
         /////////// Font Awesome Popup /////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////


        var fontawesomeForm = jQuery('<div id="gt-font-awesome-form"><table id="gt-table" class="form-table">\
            <small style="background-color:#ffebe8;padding:10px 30px;float:left;overflow:hidden;"><span style="color:#787878;">Make sure to enable font awesome stylesheet from options panel available here - Dashboard > Settings > GT Shortcodes.</span></small>\
            <tr>\
                <th><label for="gt-font-awesome-type">Font Awesome Type</label></th>\
                <td><select name="font-awesome-type" id="gt-font-awesome-type" style="font-family:FontAwesome,Arial;">\
                    <optgroup label="Web Application Icons">\
                        <option value="adjust">&#xf042; adjust</option>\
                        <option value="anchor">&#xf13d; anchor</option>\
                        <option value="archive">&#xf187; archive</option>\
                        <option value="arrows">&#xf047; arrows</option>\
                        <option value="arrows-h">&#xf07e; arrows horizontal</option>\
                        <option value="arrows-v">&#xf07d; arrows vertical</option>\
                        <option value="asterisk">&#xf069; asterisk</option>\
                        <option value="automobile">&#xf1b9; automobile</option>\
                        <option value="ban">&#xf05e; ban</option>\
                        <option value="bank">&#xf19c; bank</option>\
                        <option value="bar-chart-o">&#xf080; bar-chart-o</option>\
                        <option value="barcode">&#xf02a; barcode</option>\
                        <option value="bars">&#xf0c9; bars</option>\
                        <option value="beer">&#xf0fc; beer</option>\
                        <option value="bell">&#xf0a2; bell</option>\
                        <option value="bell-o">&#xf0f3; bell-o</option>\
                        <option value="bolt">&#xf0e7; bolt</option>\
                        <option value="bomb">&#xf1e2; bomb</option>\
                        <option value="book">&#xf02d; book</option>\
                        <option value="bookmark">&#xf02e; bookmark</option>\
                        <option value="bookmark-o">&#xf097; bookmark-o</option>\
                        <option value="briefcase">&#xf0b1; briefcase</option>\
                        <option value="bug">&#xf188; bug</option>\
                        <option value="building">&#xf1ad; building</option>\
                        <option value="building-o">&#xf0f7; building-o</option>\
                        <option value="bullhorn">&#xf0a1; bullhorn</option>\
                        <option value="bullseye">&#xf140; bullseye</option>\
                        <option value="cab">&#xf1ba; cab</option>\
                        <option value="calendar">&#xf073; calendar</option>\
                        <option value="calendar-o">&#xf133; calendar-o</option>\
                        <option value="camera">&#xf030; camera</option>\
                        <option value="camera-retro">&#xf083; camera-retro</option>\
                        <option value="car">&#xf1b9; car</option>\
                        <option value="caret-square-o-down">&#xf150; caret-square-o-down</option>\
                        <option value="caret-square-o-left">&#xf191; caret-square-o-left</option>\
                        <option value="caret-square-o-right">&#xf152; caret-square-o-right</option>\
                        <option value="caret-square-o-up">&#xf151; caret-square-o-up</option>\
                        <option value="certificate">&#xf0a3; certificate</option>\
                        <option value="check">&#xf00c; check</option>\
                        <option value="check-circle">&#xf058; check-circle</option>\
                        <option value="check-circle-o">&#xf10c; check-circle-o</option>\
                        <option value="check-square">&#xf14a; check-square</option>\
                        <option value="check-square-o">&#xf046; check-square-o</option>\
                        <option value="child">&#xf1ae; child</option>\
                        <option value="circle">&#xf111; circle</option>\
                        <option value="circle-o">&#xf10c; circle-o</option>\
                        <option value="circle-o-notch">&#xf1ce; circle-o-notch</option>\
                        <option value="circle-o-thin">&#xf1db; circle-o-thin</option>\
                        <option value="clock-o">&#xf017; clock-o</option>\
                        <option value="cloud">&#xf0c2; cloud</option>\
                        <option value="cloud-download">&#xf0ed; cloud-download</option>\
                        <option value="cloud-upload">&#xf0ee; cloud-upload</option>\
                        <option value="code">&#xf121; code</option>\
                        <option value="code-fork">&#xf126; code-fork</option>\
                        <option value="coffee">&#xf0f4; coffee</option>\
                        <option value="cog">&#xf013; cog</option>\
                        <option value="cogs">&#xf085; cogs</option>\
                        <option value="comment">&#xf075; comment</option>\
                        <option value="comment-o">&#xf0e5; comment-o</option>\
                        <option value="comments">&#xf086; comments</option>\
                        <option value="comments-o">&#xf0e6; comments-o</option>\
                        <option value="collapse-o">&#xf117; collapse-o</option>\
                        <option value="comment">&#xf075; comment</option>\
                        <option value="comment-o">&#xf0e5; comment-o</option>\
                        <option value="comments">&#xf086; comments</option>\
                        <option value="comments-o">&#xf0e6; comments-o</option>\
                        <option value="compass">&#xf14e; compass</option>\
                        <option value="credit-card">&#xf09d; credit-card</option>\
                        <option value="crop">&#xf125; crop</option>\
                        <option value="crosshairs">&#xf05b; crosshairs</option>\
                        <option value="cube">&#xf1b2; cube</option>\
                        <option value="cubes">&#xf1b3; cubes</option>\
                        <option value="crosshairs">&#xf05b; crosshairs</option>\
                        <option value="cutlery">&#xf0f5; cutlery</option>\
                        <option value="dashboard">&#xf0e4; dashboard</option>\
                        <option value="database">&#xf1c0; database</option>\
                        <option value="desktop">&#xf108; desktop</option>\
                        <option value="dot-circle-o">&#xf192; dot-circle-o</option>\
                        <option value="download">&#xf01a; download</option>\
                        <option value="edit">&#xf044; edit</option>\
                        <option value="ellipsis-h">&#xf141; ellipsis-horizontal</option>\
                        <option value="ellipsis-v">&#xf142; ellipsis-vertical</option>\
                        <option value="envelope">&#xf0e0; envelope</option>\
                        <option value="envelope-o">&#xf003; envelope-o</option>\
                        <option value="envelope-square">&#xf199; envelope-square</option>\
                        <option value="eraser">&#xf12d; eraser</option>\
                        <option value="exchange">&#xf0ec; exchange</option>\
                        <option value="exclamation">&#xf12a; exclamation</option>\
                        <option value="exclamation-circle">&#xf06a; exclamation-circle</option>\
                        <option value="exclamation-triangle">&#xf071; exclamation-triangle</option>\
                        <option value="expand-o">&#xf116; expand-o</option>\
                        <option value="external-link">&#xf08e; external-link</option>\
                        <option value="external-link-square">&#xf14c; external-link-square</option>\
                        <option value="eye">&#xf06e; eye</option>\
                        <option value="eye-slash">&#xf070; eye-slash</option>\
                        <option value="fax">&#xf1ac; fax</option>\
                        <option value="female">&#xf182; female</option>\
                        <option value="fighter-jet">&#xf0fb; fighter-jet</option>\
                        <option value="file-archive-o">&#xf1c6; file-archive-o</option>\
                        <option value="file-audio-o">&#xf1c7; file-audio-o</option>\
                        <option value="file-code-o">&#xf1c9; file-code-o</option>\
                        <option value="file-excel-o">&#xf1c3; file-excel-o</option>\
                        <option value="file-image-o">&#xf1c5; file-image-o</option>\
                        <option value="file-movie-o">&#xf1c8; file-movie-o</option>\
                        <option value="file-pdf-o">&#xf1c1; file-pdf-o</option>\
                        <option value="file-photo-o">&#xf1c5; file-photo-o</option>\
                        <option value="file-picture-o">&#xf1c5; file-picture-o</option>\
                        <option value="file-powerpoint-o">&#xf1c4; file-powerpoint-o</option>\
                        <option value="file-sound-o">&#xf1c7; file-sound-o</option>\
                        <option value="file-video-o">&#xf1c8; file-video-o</option>\
                        <option value="file-word-o">&#xf1c2; file-word-o</option>\
                        <option value="file-zip-o">&#xf1c6; file-zip-o</option>\
                        <option value="film">&#xf008; film</option>\
                        <option value="filter">&#xf0b0; filter</option>\
                        <option value="fire">&#xf06d; fire</option>\
                        <option value="fire-extinguisher">&#xf134; fire-extinguisher</option>\
                        <option value="flag">&#xf024; flag</option>\
                        <option value="flag-checkered">&#xf11e; flag-checkered</option>\
                        <option value="flag-o">&#xf11d; flag-o</option>\
                        <option value="flash">&#xf0e7; flash</option>\
                        <option value="flask">&#xf0c3; flask</option>\
                        <option value="folder">&#xf07b; folder</option>\
                        <option value="folder-o">&#xf114; folder-o</option>\
                        <option value="folder-open">&#xf07c; folder-open</option>\
                        <option value="folder-open-o">&#xf115; folder-open-o</option>\
                        <option value="frown-o">&#xf119; frown-o</option>\
                        <option value="gamepad">&#xf11b; gamepad</option>\
                        <option value="gavel">&#xf0e3; gavel</option>\
                        <option value="gear">&#xf013; gear</option>\
                        <option value="gears">&#xf085; gears</option>\
                        <option value="gift">&#xf06b; gift</option>\
                        <option value="glass">&#xf000; glass</option>\
                        <option value="globe">&#xf0ac; globe</option>\
                        <option value="graduation-cap">&#xf19d; graduation-cap</option>\
                        <option value="group">&#xf0c0; group</option>\
                        <option value="hdd-o">&#xf0a0; hdd</option>\
                        <option value="headphones">&#xf025; headphones</option>\
                        <option value="heart">&#xf004; heart</option>\
                        <option value="heart-o">&#xf08a; heart-o</option>\
                        <option value="history">&#xf1da; history</option>\
                        <option value="home">&#xf015; home</option>\
                        <option value="image">&#xf03e; image</option>\
                        <option value="inbox">&#xf01c; inbox</option>\
                        <option value="info">&#xf129; info</option>\
                        <option value="info-circle">&#xf05a; info-circle</option>\
                        <option value="institution">&#xf19c; institution</option>\
                        <option value="key">&#xf084; key</option>\
                        <option value="keyboard-o">&#xf11c; keyboard-o</option>\
                        <option value="language">&#xf1ab; language</option>\
                        <option value="laptop">&#xf109; laptop</option>\
                        <option value="leaf">&#xf06c; leaf</option>\
                        <option value="legal">&#xf0e3; legal</option>\
                        <option value="lemon-o">&#xf094; lemon-o</option>\
                        <option value="level-down">&#xf149; level-down</option>\
                        <option value="level-up">&#xf148; level-up</option>\
                        <option value="life-bouy">&#xf1cd; life-bouy</option>\
                        <option value="life-ring">&#xf1cd; life-ring</option>\
                        <option value="life-saver">&#xf1cd; life-saver</option>\
                        <option value="lightbulb-o">&#xf0eb; lightbulb-o</option>\
                        <option value="location-arrow">&#xf124; location-arrow</option>\
                        <option value="lock">&#xf023; lock</option>\
                        <option value="magic">&#xf0d0; magic</option>\
                        <option value="magnet">&#xf076; magnet</option>\
                        <option value="mail-forward">&#xf064; mail-forward</option>\
                        <option value="mail-reply">&#xf112; mail-reply</option>\
                        <option value="mail-reply-all">&#xf122; mail-reply-all</option>\
                        <option value="male">&#xf183; male</option>\
                        <option value="map-marker">&#xf041; map-marker</option>\
                        <option value="meh-o">&#xf11a; meh-o</option>\
                        <option value="microphone">&#xf130; microphone</option>\
                        <option value="microphone-slash">&#xf131; microphone-slash</option>\
                        <option value="minus">&#xf068; minus</option>\
                        <option value="minus-circle">&#xf056; minus-circle</option>\
                        <option value="minus-square">&#xf146; minus-square</option>\
                        <option value="minus-square-o">&#xf147; minus-square-o</option>\
                        <option value="mobile">&#xf10b; mobile</option>\
                        <option value="mobile-phone">&#xf10b; mobile-phone</option>\
                        <option value="money">&#xf0d6; money</option>\
                        <option value="moon-o">&#xf186; moon-o</option>\
                        <option value="mortar-board">&#xf19d; mortar-board</option>\
                        <option value="music">&#xf001; music</option>\
                        <option value="navicon">&#xf0c9; navicon</option>\
                        <option value="paper-plane">&#xf1d8; paper-plane</option>\
                        <option value="paper-plane-o">&#xf1d9; paper-plane-o</option>\
                        <option value="paw">&#xf1b0; paw</option>\
                        <option value="pencil">&#xf040; pencil</option>\
                        <option value="pencil-square">&#xf14b; pencil-square</option>\
                        <option value="pencil-square-o">&#xf044; pencil-square-o</option>\
                        <option value="phone">&#xf095; phone</option>\
                        <option value="phone-square">&#xf098; phone-square</option>\
                        <option value="photo">&#xf03e; photo</option>\
                        <option value="picture-o">&#xf03e; picture-o</option>\
                        <option value="plane">&#xf072; plane</option>\
                        <option value="plus">&#xf067; plus</option>\
                        <option value="plus-circle">&#xf055; plus-circle</option>\
                        <option value="plus-square">&#xf0fe; plus-square</option>\
                        <option value="plus-square-o">&#xf196; plus-square-o</option>\
                        <option value="power-off">&#xf011; power-off</option>\
                        <option value="print">&#xf02f; print</option>\
                        <option value="puzzle-piece">&#xf12e; puzzle-piece</option>\
                        <option value="qrcode">&#xf029; qrcode</option>\
                        <option value="question">&#xf128; question</option>\
                        <option value="question-circle">&#xf059; question-circle</option>\
                        <option value="quote-left">&#xf10d; quote-left</option>\
                        <option value="quote-right">&#xf10e; quote-right</option>\
                        <option value="random">&#xf074; random</option>\
                        <option value="recycle">&#xf1b8; recycle</option>\
                        <option value="refresh">&#xf021; refresh</option>\
                        <option value="reorder">&#xf0c9; reorder</option>\
                        <option value="reply">&#xf112; reply</option>\
                        <option value="reply-all">&#xf122; reply-all</option>\
                        <option value="retweet">&#xf079; retweet</option>\
                        <option value="road">&#xf018; road</option>\
                        <option value="rocket">&#xf135; rocket</option>\
                        <option value="rss">&#xf09e; rss</option>\
                        <option value="rss-square">&#xf143; rss-square</option>\
                        <option value="search">&#xf002; search</option>\
                        <option value="search-minus">&#xf010; search-minus</option>\
                        <option value="search-plus">&#xf00e; search-plus</option>\
                        <option value="send">&#xf1d8; send</option>\
                        <option value="send-o">&#xf1d9; send-o</option>\
                        <option value="share">&#xf045; share</option>\
                        <option value="share-alt">&#xf1e0; share-alt</option>\
                        <option value="share-alt-square">&#xf1e1; share-alt-square</option>\
                        <option value="share-square">&#xf14d; share-circle</option>\
                        <option value="share-square-o">&#xf045; share-square-o</option>\
                        <option value="shield">&#xf132; shield</option>\
                        <option value="shopping-cart">&#xf07a; shopping-cart</option>\
                        <option value="sign-in">&#xf090; sign-in</option>\
                        <option value="sign-out">&#xf08b; sign-out</option>\
                        <option value="signal">&#xf012; signal</option>\
                        <option value="sitemap">&#xf0e8; sitemap</option>\
                        <option value="sliders">&#xf1de; sliders</option>\
                        <option value="smile-o">&#xf118; smile-o</option>\
                        <option value="sort">&#xf0dc; sort</option>\
                        <option value="sort-alpha-asc">&#xf15d; sort-alpha-asc</option>\
                        <option value="sort-alpha-desc">&#xf15e; sort-alpha-desc</option>\
                        <option value="sort-amount-asc">&#xf160; sort-amount-asc</option>\
                        <option value="sort-amount-desc">&#xf161; sort-amount-desc</option>\
                        <option value="sort-asc">&#xf0dd; sort-asc</option>\
                        <option value="sort-desc">&#xf0de; sort-desc</option>\
                        <option value="sort-down">&#xf0dd; sort-down</option>\
                        <option value="sort-numeric-asc">&#xf162; sort-numeric-asc</option>\
                        <option value="sort-numeric-desc">&#xf163; sort-numeric-desc</option>\
                        <option value="sort-up">&#xf0de; sort-up</option>\
                        <option value="space-shuttle">&#xf197; space-shuttle</option>\
                        <option value="spinner">&#xf110; spinner</option>\
                        <option value="spoon">&#xf1b1; spoon</option>\
                        <option value="square">&#xf0c8; square</option>\
                        <option value="square-o">&#xf096; square-o</option>\
                        <option value="star">&#xf005; star</option>\
                        <option value="star-half">&#xf089; star-half</option>\
                        <option value="star-half-empty">&#xf123; star-half-empty</option>\
                        <option value="star-half-full">&#xf123; star-half-full</option>\
                        <option value="star-half-o">&#xf123; star-half-o</option>\
                        <option value="star-o">&#xf006; star-o</option>\
                        <option value="suitcase">&#xf0f2; suitcase</option>\
                        <option value="sun-o">&#xf185; sun-o</option>\
                        <option value="support">&#xf1cd; support</option>\
                        <option value="tablet">&#xf10a; tablet</option>\
                        <option value="tachnometer">&#xf0e4; tachnometer</option>\
                        <option value="tag">&#xf02b; tag</option>\
                        <option value="tags">&#xf02c; tags</option>\
                        <option value="tasks">&#xf0ae; tasks</option>\
                        <option value="taxi">&#xf1ba; taxi</option>\
                        <option value="terminal">&#xf120; terminal</option>\
                        <option value="thumb-tack">&#xf120; thumb-tack</option>\
                        <option value="thumbs-down">&#xf165; thumbs-down</option>\
                        <option value="thumbs-o-down">&#xf088; thumbs-o-down</option>\
                        <option value="thumbs-o-up">&#xf087; thumbs-o-up</option>\
                        <option value="thumbs-up">&#xf164; thumbs-up</option>\
                        <option value="ticket">&#xf145; ticket</option>\
                        <option value="times">&#xf00d; times</option>\
                        <option value="times-circle">&#xf057; times-circle</option>\
                        <option value="times-circle-o">&#xf05c; times-circle-o</option>\
                        <option value="tint">&#xf043; tint</option>\
                        <option value="toggle-down">&#xf150; toggle-down</option>\
                        <option value="toggle-left">&#xf191; toggle-left</option>\
                        <option value="toggle-right">&#xf152; toggle-right</option>\
                        <option value="toggle-up">&#xf151; toggle-up</option>\
                        <option value="trash-o">&#xf014; trash-o</option>\
                        <option value="tree">&#xf1bb; tree</option>\
                        <option value="trophy">&#xf091; trophy</option>\
                        <option value="truck">&#xf0d1; truck</option>\
                        <option value="umbrella">&#xf0e9; umbrella</option>\
                        <option value="university">&#xf19c; university</option>\
                        <option value="unlock">&#xf09c; unlock</option>\
                        <option value="unlock-alt">&#xf13e; unlock-alt</option>\
                        <option value="unsorted">&#xf0dc; unsorted</option>\
                        <option value="upload">&#xf01b; upload</option>\
                        <option value="user">&#xf007; user</option>\
                        <option value="users">&#xf0c0; users</option>\
                        <option value="video-camera">&#xf03d; video-camera</option>\
                        <option value="volume-down">&#xf027; volume-down</option>\
                        <option value="volume-off">&#xf026; volume-off</option>\
                        <option value="volume-up">&#xf028; volume-up</option>\
                        <option value="warning">&#xf071; warning</option>\
                        <option value="wheelchair">&#xf193; wheelchair</option>\
                        <option value="wrench">&#xf0ad; wrench</option>\
                    </optgroup>\
                    <optgroup label="Form Control Icons">\
                        <option value="check-square">&#xf14a; check-square</option>\
                        <option value="check-square-o">&#xf046; check-square-o</option>\
                        <option value="circle">&#xf111; circle</option>\
                        <option value="circle-o">&#xf10c; circle-o</option>\
                        <option value="dot-circle-o">&#xf192; dot-circle-o</option>\
                        <option value="minus-square">&#xf146; minus-square</option>\
                        <option value="minus-square-o">&#xf147; minus-square-o</option>\
                        <option value="plus-square">&#xf0fe; plus-square</option>\
                        <option value="plus-square-o">&#xf196; plus-square-o</option>\
                        <option value="square">&#xf0c8; square</option>\
                        <option value="square-o">&#xf096; square-o</option>\
                    </optgroup>\
                    <optgroup label="Currency Icons">\
                        <option value="bitcoin">&#xf15a; bitcoin</option>\
                        <option value="btc">&#xf15a; btc</option>\
                        <option value="cny">&#xf158; cny</option>\
                        <option value="dollar">&#xf155; dollar</option>\
                        <option value="eur">&#xf153; eur</option>\
                        <option value="euro">&#xf153; euro</option>\
                        <option value="gbp">&#xf154; gbp</option>\
                        <option value="inr">&#xf156; inr</option>\
                        <option value="jpy">&#xf157; jpy</option>\
                        <option value="krw">&#xf159; krw</option>\
                        <option value="money">&#xf0d6; money</option>\
                        <option value="rmb">&#xf157; rmb</option>\
                        <option value="rouble">&#xf158; rouble</option>\
                        <option value="rub">&#xf158; rub</option>\
                        <option value="ruble">&#xf158; ruble</option>\
                        <option value="rupee">&#xf156; rupee</option>\
                        <option value="try">&#xf195; try</option>\
                        <option value="turkish-lira">&#xf195; turkish-lira</option>\
                        <option value="usd">&#xf155; usd</option>\
                        <option value="won">&#xf159; won</option>\
                        <option value="yen">&#xf157; yen</option>\
                        </optgroup>\
                    <optgroup label="Text Editor Icons">\
                        <option value="align-center">&#xf037; align-center</option>\
                        <option value="align-justify">&#xf039; align-justify</option>\
                        <option value="align-left">&#xf036; align-left</option>\
                        <option value="align-right">&#xf038; align-right</option>\
                        <option value="bold">&#xf032; bold</option>\
                        <option value="chain">&#xf0c1; chain</option>\
                        <option value="chain-broken">&#xf127; chain-broken</option>\
                        <option value="clipboard">&#xf0ea; clipboard</option>\
                        <option value="columns">&#xf0db; columns</option>\
                        <option value="copy">&#xf0c5; copy</option>\
                        <option value="cut">&#xf0c4; cut</option>\
                        <option value="dedent">&#xf03b; dedent</option>\
                        <option value="eraser">&#xf12d; eraser</option>\
                        <option value="file">&#xf15b; file</option>\
                        <option value="file-o">&#xf016; file-o</option>\
                        <option value="file-text">&#xf15c; file-text</option>\
                        <option value="file-text-o">&#xf0f6; file-text-o</option>\
                        <option value="files-o">&#xf0c5; files-o</option>\
                        <option value="floppy-o">&#xf0c7; floppy-o</option>\
                        <option value="font">&#xf031; font</option>\
                        <option value="header">&#xf1dc; header</option>\
                        <option value="indent">&#xf03c; indent-right</option>\
                        <option value="italic">&#xf033; italic</option>\
                        <option value="link">&#xf0c1; link</option>\
                        <option value="list">&#xf03a; list</option>\
                        <option value="list-alt">&#xf022; list-alt</option>\
                        <option value="list-ol">&#xf0cb; list-ol</option>\
                        <option value="list-ul">&#xf0ca; list-ul</option>\
                        <option value="outdent">&#xf03b; outdent</option>\
                        <option value="paperclip">&#xf0c6; paperclip</option>\
                        <option value="paragraph">&#xf1dd; paragraph</option>\
                        <option value="paste">&#xf0ea; paste</option>\
                        <option value="repeat">&#xf01e; repeat</option>\
                        <option value="rotate-left">&#xf0e2; rotate-left</option>\
                        <option value="rotate-right">&#xf01e; rotate-right</option>\
                        <option value="save">&#xf0c7; save</option>\
                        <option value="scissors">&#xf0c4; scissors</option>\
                        <option value="strikethrough">&#xf0cc; strikethrough</option>\
                        <option value="subscript">&#xf12c; subscript</option>\
                        <option value="superscript">&#xf12b; superscript</option>\
                        <option value="table">&#xf0ce; table</option>\
                        <option value="text-height">&#xf034; text-height</option>\
                        <option value="text-width">&#xf035; text-width</option>\
                        <option value="th">&#xf00a; th</option>\
                        <option value="th-large">&#xf009; th-large</option>\
                        <option value="th-list">&#xf00b; th-list</option>\
                        <option value="underline">&#xf0cd; underline</option>\
                        <option value="undo">&#xf0e2; undo</option>\
                        <option value="unlink">&#xf127; unlink</option>\
                    </optgroup>\
                    <optgroup label="Directional Icons">\
                        <option value="angle-double-down">&#xf103; angle-double-down</option>\
                        <option value="angle-double-left">&#xf100; angle-double-left</option>\
                        <option value="angle-double-right">&#xf101; angle-double-right</option>\
                        <option value="angle-double-up">&#xf102; angle-double-up</option>\
                        <option value="angle-down">&#xf107; angle-down</option>\
                        <option value="angle-left">&#xf104; angle-left</option>\
                        <option value="angle-right">&#xf105; angle-right</option>\
                        <option value="angle-up">&#xf106; angle-up</option>\
                        <option value="arrow-circle-down">&#xf0ab; arrow-circle-down</option>\
                        <option value="arrow-circle-left">&#xf0a8; arrow-circle-left</option>\
                        <option value="arrow-circle-o-down">&#xf01a; arrow-circle-o-down</option>\
                        <option value="arrow-circle-o-left">&#xf190; arrow-circle-o-left</option>\
                        <option value="arrow-circle-o-right">&#xf18e; arrow-circle-o-right</option>\
                        <option value="arrow-circle-o-up">&#xf01b; arrow-circle-o-up</option>\
                        <option value="arrow-circle-right">&#xf0a9; arrow-circle-right</option>\
                        <option value="arrow-circle-up">&#xf0aa; arrow-circle-up</option>\
                        <option value="arrow-down">&#xf063; arrow-down</option>\
                        <option value="arrow-left">&#xf060; arrow-left</option>\
                        <option value="arrow-right">&#xf061; arrow-right</option>\
                        <option value="arrow-up">&#xf062; arrow-up</option>\
                        <option value="arrows">&#xf047; arrows</option>\
                        <option value="arrows-alt">&#xf0b2; arrows-alt</option>\
                        <option value="arrows-h">&#xf07e; arrows-h</option>\
                        <option value="arrows-v">&#xf07d; arrows-v</option>\
                        <option value="caret-down">&#xf0d7; caret-down</option>\
                        <option value="caret-left">&#xf0d9; caret-left</option>\
                        <option value="caret-right">&#xf0da; caret-right</option>\
                        <option value="caret-square-o-down">&#xf150; caret-square-o-down</option>\
                        <option value="caret-square-o-left">&#xf191; caret-square-o-left</option>\
                        <option value="caret-square-o-right">&#xf152; caret-square-o-right</option>\
                        <option value="caret-square-o-up">&#xf151; caret-square-o-up</option>\
                        <option value="caret-up">&#xf0d8; caret-up</option>\
                        <option value="chevron-circle-down">&#xf13a; chevron-circle-down</option>\
                        <option value="chevron-circle-left">&#xf137; chevron-circle-left</option>\
                        <option value="chevron-circle-right">&#xf138; chevron-circle-right</option>\
                        <option value="chevron-circle-up">&#xf139; chevron-circle-up</option>\
                        <option value="chevron-down">&#xf078; chevron-down</option>\
                        <option value="chevron-left">&#xf053; chevron-left</option>\
                        <option value="chevron-right">&#xf054; chevron-right</option>\
                        <option value="chevron-up">&#xf077; chevron-up</option>\
                        <option value="hand-o-down">&#xf0a7; hand-o-down</option>\
                        <option value="hand-o-left">&#xf0a5; hand-o-left</option>\
                        <option value="hand-o-right">&#xf0a4; hand-o-right</option>\
                        <option value="hand-o-up">&#xf0a6; hand-o-up</option>\
                        <option value="long-arrow-down">&#xf175; long-arrow-down</option>\
                        <option value="long-arrow-left">&#xf177; long-arrow-left</option>\
                        <option value="long-arrow-right">&#xf178; long-arrow-right</option>\
                        <option value="long-arrow-up">&#xf176; long-arrow-up</option>\
                        <option value="toggle-down">&#xf150; toggle-down</option>\
                        <option value="toggle-left">&#xf191; toggle-left</option>\
                        <option value="toggle-right">&#xf152; toggle-right</option>\
                        <option value="toggle-up">&#xf151; toggle-up</option>\
                    </optgroup>\
                    <optgroup label="Video Player Icons">\
                        <option value="arrows-alt">&#xf0b2; fullscreen</option>\
                        <option value="backward">&#xf04a; backward</option>\
                        <option value="compress">&#xf066; compress</option>\
                        <option value="eject">&#xf052; eject</option>\
                        <option value="expand">&#xf065; expand</option>\
                        <option value="fast-backward">&#xf049; fast-backward</option>\
                        <option value="fast-forward">&#xf050; fast-forward</option>\
                        <option value="forward">&#xf04e; forward</option>\
                        <option value="pause">&#xf04c; pause</option>\
                        <option value="play">&#xf04b; play</option>\
                        <option value="play-circle">&#xf144; play-circle</option>\
                        <option value="play-circle-o">&#xf01d; play-circle-o</option>\
                        <option value="step-backward">&#xf048; step-backward</option>\
                        <option value="step-forward">&#xf051; step-forward</option>\
                        <option value="stop">&#xf04d; stop</option>\
                        <option value="youtube-play">&#xf16a; youtube-play</option>\
                    </optgroup>\
                    <optgroup label="Brand Icons">\
                        <option value="adn">&#xf170; adn</option>\
                        <option value="android">&#xf17b; android</option>\
                        <option value="apple">&#xf179; apple</option>\
                        <option value="behance">&#xf1b4; behance</option>\
                        <option value="behance-square">&#xf1b5; behance-square</option>\
                        <option value="bitbucket">&#xf171; bitbucket</option>\
                        <option value="bitbucket-square">&#xf172; bitbucket-square</option>\
                        <option value="bitcoin">&#xf15a; bitcoin</option>\
                        <option value="btc">&#xf15a; btc</option>\
                        <option value="codepen">&#xf1cb; codepen</option>\
                        <option value="css3">&#xf13c; css3</option>\
                        <option value="delicious">&#xf1a5; delicious</option>\
                        <option value="deviantart">&#xf1bd; deviantart</option>\
                        <option value="digg">&#xf1a6; digg</option>\
                        <option value="dribbble">&#xf17d; dribbble</option>\
                        <option value="dropbox">&#xf16b; dropbox</option>\
                        <option value="drupal">&#xf1a9; drupal</option>\
                        <option value="empire">&#xf1d1; empire</option>\
                        <option value="facebook">&#xf09a; facebook</option>\
                        <option value="facebook-square">&#xf082; facebook-square</option>\
                        <option value="flickr">&#xf16e; flickr</option>\
                        <option value="foursquare">&#xf180; foursquare</option>\
                        <option value="ge">&#xf1d1; ge</option>\
                        <option value="git">&#xf1d3; git</option>\
                        <option value="git-square">&#xf1d2; git-square</option>\
                        <option value="github">&#xf09b; github</option>\
                        <option value="github-alt">&#xf113; github-alt</option>\
                        <option value="github-square">&#xf092; github-square</option>\
                        <option value="gittip">&#xf184; gittip</option>\
                        <option value="google">&#xf1a0; google</option>\
                        <option value="google-plus">&#xf0d5; google-plus</option>\
                        <option value="google-plus-square">&#xf0d4; google-plus-square</option>\
                        <option value="hacker-news">&#xf1d4; hacker-news</option>\
                        <option value="html5">&#xf13b; html5</option>\
                        <option value="instagram">&#xf16d; instagram</option>\
                        <option value="joomla">&#xf1aa; joomla</option>\
                        <option value="jsfiddle">&#xf1cc; jsfiddle</option>\
                        <option value="linkedin">&#xf0e1; linkedin</option>\
                        <option value="linkedin-square">&#xf08c;linkedin-square</option>\
                        <option value="linux">&#xf17c; linux</option>\
                        <option value="maxcdn">&#xf136; maxcdn</option>\
                        <option value="openid">&#xf19b; openid</option>\
                        <option value="pagelines">&#xf18c; pagelines</option>\
                        <option value="pied-piper">&#xf1a7; pied-piper</option>\
                        <option value="pied-piper-alt">&#xf1a8; pied-piper-alt</option>\
                        <option value="pied-piper-square">&#xf1a7; pied-piper-square</option>\
                        <option value="pinterest">&#xf0d2; pinterest</option>\
                        <option value="pinterest-square">&#xf0d3; pinterest-square</option>\
                        <option value="qq">&#xf1d6; qq</option>\
                        <option value="ra">&#xf1d0; ra</option>\
                        <option value="rebel">&#xf1d0; rebel</option>\
                        <option value="reddit">&#xf1a1; reddit</option>\
                        <option value="reddit-square">&#xf1a2; reddit-square</option>\
                        <option value="renren">&#xf18b; renren</option>\
                        <option value="share-alt">&#xf1e0; share-alt</option>\
                        <option value="share-alt-square">&#xf1e1; share-alt-square</option>\
                        <option value="skype">&#xf17e; skype</option>\
                        <option value="slack">&#xf198; slack</option>\
                        <option value="soundcloud">&#xf1be; soundcloud</option>\
                        <option value="spotify">&#xf1bc; spotify</option>\
                        <option value="stack-exchange">&#xf18d; stack-exchange</option>\
                        <option value="stack-overflow">&#xf16c; stack-overflow</option>\
                        <option value="steam">&#xf1b6; steam</option>\
                        <option value="steam-square">&#xf1b7; steam-square</option>\
                        <option value="stumbleupon">&#xf1a4; stumbleupon</option>\
                        <option value="stumbleupon-circle">&#xf1a3; stumbleupon-circle</option>\
                        <option value="tencent-weibo">&#xf1d5; tencent-weibo</option>\
                        <option value="trello">&#xf181; trello</option>\
                        <option value="tumblr">&#xf173; tumblr</option>\
                        <option value="tumblr-square">&#xf174; tumblr-square</option>\
                        <option value="twitter">&#xf099; twitter</option>\
                        <option value="twitter-square">&#xf081; twitter-square</option>\
                        <option value="vimeo-square">&#xf194; vimeo-square</option>\
                        <option value="vine">&#xf1ca; vine</option>\
                        <option value="vk">&#xf189; vk</option>\
                        <option value="wechat">&#xf1d7; wechat</option>\
                        <option value="weibo">&#xf18a; weibo</option>\
                        <option value="weixin">&#xf1d7; weixin</option>\
                        <option value="windows">&#xf17a; windows</option>\
                        <option value="wordpress">&#xf19a; wordpress</option>\
                        <option value="xing">&#xf168; xing</option>\
                        <option value="xing-square">&#xf169; xing-square</option>\
                        <option value="yahoo">&#xf19e; yahoo</option>\
                        <option value="youtube">&#xf167; youtube</option>\
                        <option value="youtube-play">&#xf16a; youtube-play</option>\
                        <option value="youtube-square">&#xf166; youtube-square</option>\
                    </optgroup>\
                    <optgroup label="Medical Icons">\
                        <option value="ambulance">&#xf0f9; ambulance</option>\
                        <option value="h-square">&#xf0fd; h-square</option>\
                        <option value="hospital-o">&#xf0f8; hospital-o</option>\
                        <option value="medkit">&#xf0fa; medkit</option>\
                        <option value="plus-square">&#xf0fe; plus-square</option>\
                        <option value="stethoscope">&#xf0f1; stethoscope</option>\
                        <option value="user-md">&#xf0f0; user-md</option>\
                        <option value="wheelchair">&#xf193; wheelchair</option>\
                    </optgroup>\
                </select><br />\
                <small>Select font awesome icon type.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-font-awesome-link">Font Awesome Link</label></th>\
                <td><input type="url" name="font-awesome link" id="gt-font-awesome-link" value="" /><br />\
                    <small>Add link to font-awesome.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-font-awesome-title">Font Awesome Title</label></th>\
                <td><input type="text" name="font-awesome title" id="gt-font-awesome-title" value="Icon" /><br />\
                    <small>Add title to font awesome. Good for SEO.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-font-awesome-size">Font Awesome Size</label></th>\
                <td><input type="text" name="font-awesome size" id="gt-font-awesome-size" value="16" /><br />\
                    <small>Adjust font awesome size. Ex: 16, 32, 48 or any size as required (in pixels).</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-font-awesome-color">Font Awesome Color</label></th>\
                <td><input type="text" name="font-awesome color" id="gt-font-awesome-color" value="#444444" class="gt-iris color {hash:true}" /><br />\
                    <small>Adjust font awesome icon color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-font-awesome-border">Font Awesome Icon Border</label></th>\
                <td><select name="font-awesome-border" id="gt-font-awesome-border">\
                    <option value="no">No</option>\
                    <option value="yes">Yes</option>\
                </select><br />\
                <small>Select whether to have border for the icon.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-font-awesome-border_size">Font Awesome Border Size</label></th>\
                <td><input type="text" name="font awesome border size" id="gt-font-awesome-border_size" value="2" /><br />\
                    <small>Adjust font awesome border-size. Ex: 1, 2, 4 or any border size as required (in pixels).</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-font-awesome-border_color">Font Awesome Border Color</label></th>\
                <td><input type="text" name="font awesome border color" id="gt-font-awesome-border_color" value="#EEEEEE" class="gt-iris color {hash:true}" /><br />\
                    <small>Adjust font awesome icon border color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-font-awesome-pull">Font Awesome Icon Float</label></th>\
                <td><select name="font-awesome-pull" id="gt-font-awesome-pull">\
                    <option value="none">None</option>\
                    <option value="left">Left</option>\
                    <option value="right">Right</option>\
                </select><br />\
                <small>Select whether to pull icon to the left or right or no pull.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-font-awesome-spin">Font Awesome Icon Spin</label></th>\
                <td><select name="font-awesome-spin" id="gt-font-awesome-spin">\
                    <option value="no">No</option>\
                    <option value="yes">Yes</option>\
                </select><br />\
                <small>Select whether to have spin for the icon.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-font-awesome-rotate">Font Awesome Icon Rotation</label></th>\
                <td><select name="font-awesome-rotate" id="gt-font-awesome-rotate">\
                    <option value="normal">Normal</option>\
                    <option value="90">90 degrees</option>\
                    <option value="180">180 degrees</option>\
                    <option value="270">270 degrees</option>\
                </select><br />\
                <small>Select rotation degree for the icon.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-font-awesome-flip">Font Awesome Icon Flip</label></th>\
                <td><select name="font-awesome-flip" id="gt-font-awesome-flip">\
                    <option value="normal">Normal</option>\
                    <option value="horizontal">Horizontal</option>\
                    <option value="vertical">Vertical</option>\
                </select><br />\
                <small>Select whether to flip icon horizontally or vertically or leave it as it is.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-font-awesome-style">Font Awesome Other Style</label></th>\
                <td><input type="text" name="fontawesome style" id="gt-font-awesome-style" value=" " /><br />\
                    <small>Adjust font awesome style. Any other style if required.</small></td>\
            </tr>\
        </table>\
        <p class="submit">\
            <input type="button" id="gt-font-awesome-submit" class="button-primary" value="Insert Font Awesome Icon" name="submit" />\
        </p>\
        </div>');
        
        var fontawesomeTable = fontawesomeForm.find('table');
        fontawesomeForm.appendTo('body').hide();
        
        // handles the click event of the submit button
        fontawesomeForm.find('#gt-font-awesome-submit').click(function(){
            // defines the options and their default values
            // again, this is not the most elegant way to do this
            // but well, this gets the job done nonetheless
            var fontawesomeOptions = { 
                'type'          : 'adjust',
                'link'          : '',
                'title'         : 'Icon',
                'size'          : '16',
                'color'         : '#444444',
                'border'        : 'no',
                'border_size'   : '2',
                'border_color'  : '#EEEEEE',
                'pull'          : 'none',
                'spin'          : 'no',
                'rotate'        : 'normal',
                'flip'          : 'normal',
                'style'         : ' ',
                
                };
            var fontawesomeShortcode = '[gtfa';
            
            for( var index in fontawesomeOptions) {
                var fontawesomeValue = fontawesomeTable.find('#gt-font-awesome-' + index).val();
                
                // attaches the attribute to the shortcode only if it's different from the default value
                if ( fontawesomeValue !== fontawesomeOptions[index] )
                    fontawesomeShortcode += ' ' + index + '="' + fontawesomeValue + '"';
            }
            
            fontawesomeShortcode += ']';
            
            // inserts the shortcode into the active editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, fontawesomeShortcode);
            
            // closes Thickbox
            tb_remove();
        });



          ////////////////////////////////////////////////////////////////////////////////
         /////////// Glyph Popup ////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////


        var glyphForm = jQuery('<div id="gt-glyph-form"><table id="gt-table" class="form-table">\
            <tr>\
                <th><label for="gt-glyph-type">Glyph Type</label></th>\
                <td><select name="glyph-type" id="gt-glyph-type">\
                    <option value="info">Info</option>\
                    <option value="alert">Alert</option>\
                    <option value="question">Question</option>\
                    <option value="window">Window</option>\
                    <option value="windows">Windows</option>\
                    <option value="upload">Upload</option>\
                    <option value="arrow-right">Arrow-right</option>\
                    <option value="arrow-left">Arrow-left</option>\
                    <option value="loop">Loop</option>\
                    <option value="cmd">Cmd</option>\
                    <option value="mic">Mic</option>\
                    <option value="export">Export</option>\
                    <option value="check-inverted">Check-inverted</option>\
                    <option value="heart">Heart</option>\
                    <option value="location">Loaction</option>\
                    <option value="plus">Plus</option>\
                    <option value="check">Check</option>\
                    <option value="cross">Cross</option>\
                    <option value="list">List</option>\
                    <option value="new">New</option>\
                    <option value="video">Video</option>\
                    <option value="photo">Photo</option>\
                    <option value="volume">Volume</option>\
                    <option value="time">Time</option>\
                    <option value="eye">Eye</option>\
                    <option value="chat">Chat</option>\
                    <option value="home">Home</option>\
                    <option value="search">Search</option>\
                    <option value="user">User</option>\
                    <option value="mail">Mail</option>\
                    <option value="lock">Lock</option>\
                    <option value="power">Power</option>\
                    <option value="star">Star</option>\
                    <option value="calendar">Calendar</option>\
                    <option value="gear">Gear</option>\
                    <option value="book">Book</option>\
                    <option value="exit">Exit</option>\
                    <option value="trash">Trash</option>\
                    <option value="folder">Folder</option>\
                    <option value="bubble">Bubble</option>\
                    <option value="cross-inverted">Cross-inverted</option>\
                    <option value="plus-inverted">Plus-inverted</option>\
                    <option value="calendar-solid">Calendar-solid</option>\
                    <option value="star-2">Star-2</option>\
                    <option value="credit-card">Credit Card</option>\
                    <option value="clip">Clip</option>\
                    <option value="link">Link</option>\
                    <option value="pause">Pause</option>\
                    <option value="play">Play</option>\
                    <option value="tag">Tag</option>\
                    <option value="document">Document</option>\
                    <option value="image">Image</option>\
                    <option value="triangle-up">Triangle-up</option>\
                    <option value="triangle-down">Triangle-down</option>\
                    <option value="triangle-up-small">Triangle-up-small</option>\
                    <option value="triangle-down-small">Triangle-down-small</option>\
                    <option value="triangle-left-large">Triangle-left-large</option>\
                    <option value="triangle-right-large">Triangle-right-large</option>\
                    <option value="radio-checked">Radio-checked</option>\
                    <option value="radio-unchecked">Radio-unchecked</option>\
                    <option value="checkbox-checked">Checkbox-checked</option>\
                    <option value="checkbox-unchecked">Checkbox-unchecked</option>\
                    <option value="list-thumbnailed">List-thumbnailed</option>\
                    <option value="list-small-thumbnails">List-small-thumbnails</option>\
                    <option value="list-numbered">List-numbered</option>\
                    <option value="list-large-thumbnails">List-large-thumbnails</option>\
                    <option value="list-columned">List-columned</option>\
                    <option value="list-bulleted">List-bulleted</option>\
                    <option value="facebook">Facebook</option>\
                    <option value="twitter">Twitter</option>\
                    <option value="googleplus">Googleplus</option>\
                    <option value="pinterest">Pinterest</option>\
                    <option value="linkedin">Linkedin</option>\
                    <option value="stumbleupon">Stumbleupon</option>\
                    <option value="skype">Skype</option>\
                    <option value="path">Path</option>\
                    <option value="myspace">Myspace</option>\
                    <option value="youtube">Youtube</option>\
                    <option value="vimeo">Vimeo</option>\
                    <option value="spotify">Spotify</option>\
                    <option value="dribbble">Dribbble</option>\
                    <option value="blogger">Blogger</option>\
                    <option value="behance">Behance</option>\
                </select><br />\
                <small>Select glyph type.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-glyph-link">Glyph Link</label></th>\
                <td><input type="url" name="glyph link" id="gt-glyph-link" value="" /><br />\
                    <small>Add link to glyph.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-glyph-title">Glyph Title</label></th>\
                <td><input type="text" name="glyph title" id="gt-glyph-title" value="glyph" /><br />\
                    <small>Add title to glyph. Good for SEO.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-glyph-size">Glyph Size</label></th>\
                <td><input type="text" name="glyph size" id="gt-glyph-size" value="16" /><br />\
                    <small>Adjust glyph size. Ex: 16, 32, 48 or any size as required.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-glyph-color">Glyph Color</label></th>\
                <td><input type="text" name="glyph color" id="gt-glyph-color" value="#34495e" class="gt-iris color {hash:true}" /><br />\
                    <small>Adjust glyph color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-glyph-style">Glyph Other Style</label></th>\
                <td><input type="text" name="glyph style" id="gt-glyph-style" value="" /><br />\
                    <small>Adjust glyph style. Any other style if required.</small></td>\
            </tr>\
        </table>\
        <p class="submit">\
            <input type="button" id="gt-glyph-submit" class="button-primary" value="Insert Glyph" name="submit" />\
        </p>\
        </div>');
        
        var glyphTable = glyphForm.find('table');
        glyphForm.appendTo('body').hide();
        
        // handles the click event of the submit button
        glyphForm.find('#gt-glyph-submit').click(function(){
            // defines the options and their default values
            // again, this is not the most elegant way to do this
            // but well, this gets the job done nonetheless
            var glyphOptions = { 
                'type'          : 'info',
                'link'          : '',
                'title'         : 'glyph',
                'size'          : '16',
                'color'         : '#34495e',
                'style'         : '',
                
                };
            var glyphShortcode = '[gtglyph';
            
            for( var index in glyphOptions) {
                var glyphValue = glyphTable.find('#gt-glyph-' + index).val();
                
                // attaches the attribute to the shortcode only if it's different from the default value
                if ( glyphValue !== glyphOptions[index] )
                    glyphShortcode += ' ' + index + '="' + glyphValue + '"';
            }
            
            glyphShortcode += ']';
            
            // inserts the shortcode into the active editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, glyphShortcode);
            
            // closes Thickbox
            tb_remove();
        });



          ////////////////////////////////////////////////////////////////////////////////
         /////////// Google Maps Popup //////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////


        var gmapForm = jQuery('<div id="gt-gmap-form"><table id="gt-table" class="form-table">\
            <small style="background-color:#ffebe8;padding:10px 30px;float:left;overflow:hidden;"><span style="color:#787878;">Make sure to enable google maps script from options panel available here - Dashboard > Settings > GT Shortcodes. <br>Custom map color style works only with road type map. Just select map type as road and you will see an option of predefined color styles which includes custom color style option. <br>A great online tool for finding latitude and longitude values - <a target="_blank" href="http://www.latlong.net/">LatLong</a>. <br>A great place for marker icons - <a target="_blank" href="http://mapicons.nicolasmollet.com/">Map Icons</a>.</span></small>\
            <tr>\
                <th><label for="gt-gmap-width">Width</label></th>\
                <td><input type="text" name="gmap width" id="gt-gmap-width" value="" /><br />\
                    <small>Add width (in pixels). Example 600. Leave blank for 100% width.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-gmap-height">Height</label></th>\
                <td><input type="text" name="gmap height" id="gt-gmap-height" value="300" /><br />\
                    <small>Add height (in pixels). Default is 300.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-gmap-lat">Latitude</label></th>\
                <td><input type="text" name="gmap latitude" id="gt-gmap-lat" value="" /><br />\
                    <small>Add latitude. Example 48.856614.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-gmap-long">Longitude</label></th>\
                <td><input type="text" name="gmap longitude" id="gt-gmap-long" value="" /><br />\
                    <small>Add longitude. Example 2.352222.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-gmap-zoom">Zoom</label></th>\
                <td><input type="text" name="gmap zoom" id="gt-gmap-zoom" value="2" /><br />\
                    <small>Add zoom level. Should be between 1 to 19.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-gmap-type">Type</label></th>\
                <td><select name="gmap-type" id="gt-gmap-type">\
                    <option value="hybrid">Hybrid</option>\
                    <option value="roadmap">Roadmap</option>\
                    <option value="satellite">Satellite</option>\
                    <option value="terrain">Terrain</option>\
                </select><br />\
                <small>Select map type.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-gmap-html">Html Content</label></th>\
                <td><textarea name="gmap html" id="gt-gmap-html" value="2"></textarea><br />\
                    <small>Add html content for the infowindow.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-gmap-icon">Icon</label></th>\
                <td><input type="url" name="gmap icon" id="gt-gmap-icon" value="" /><br />\
                    <small>Add custom icon (marker) link.</small></td>\
            </tr>\
            <tr id="gt-gmap-style-tr" style="display:none;">\
                <th><label for="gt-gmap-map_style">Map Style</label></th>\
                <td><select name="gmap-map_style" id="gt-gmap-map_style">\
                    <option value="">Default (No Style)</option>\
                    <option value="amethyst">Amethyst</option>\
                    <option value="carrot">Carrot</option>\
                    <option value="custom">Custom</option>\
                    <option value="emerald">Emerald</option>\
                    <option value="green-sea">Green Sea</option>\
                    <option value="greyscale">Greyscale</option>\
                    <option value="midnight">Midnight</option>\
                    <option value="nephritis">Nephritis</option>\
                    <option value="night">Night</option>\
                    <option value="orange">Orange</option>\
                    <option value="peter-river">Peter River</option>\
                    <option value="pomegranate">Pomegranate</option>\
                    <option value="pumpkin">Pumpkin</option>\
                    <option value="silver">Silver</option>\
                    <option value="sunflower">Sunflower</option>\
                    <option value="turquoise">Turquoise</option>\
                    <option value="wisteria">Wisteria</option>\
                </select><br />\
                <small>Select a predefined map style.</small></td>\
            </tr>\
            <tr id="gt-gmap-style_name-tr" style="display:none;">\
                <th><label for="gt-gmap-style_name">Style Name</label></th>\
                <td><input type="text" name="gmap style_name" id="gt-gmap-style_name" value="" /><br />\
                    <small>Add style name. For example: My custom style</small></td>\
            </tr>\
            <tr id="gt-gmap-color-tr" style="display:none;">\
                <th><label for="gt-gmap-color">Color</label></th>\
                <td><input type="text" name="gmap color" id="gt-gmap-color" value="#efefef" class="gt-iris color {hash:true}" /><br />\
                    <small>Select custom color for map.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-gmap-style">Custom Style</label></th>\
                <td><textarea name="gmap style" id="gt-gmap-style"></textarea><br />\
                    <small>Apply custom style. Ex: background: #C3C3E5;</small></td>\
            </tr>\
        </table>\
        <p class="submit">\
            <input type="button" id="gt-gmap-submit" class="button-primary" value="Insert Map" name="submit" />\
        </p>\
        </div>');

        jQuery(document).ready(function($){
            $('#gt-gmap-type').change(function(){
                if($(this).val()=='roadmap'){
                    $('#gt-gmap-style-tr').fadeIn();
                }else{
                    $('#gt-gmap-style-tr').hide();
                }
            });
            $('#gt-gmap-map_style').change(function(){
                if($(this).val()=='custom'){
                    $('#gt-gmap-style_name-tr,#gt-gmap-color-tr').fadeIn();
                }else{
                    $('#gt-gmap-style_name-tr,#gt-gmap-color-tr').hide();
                }
            });
        });
        
        var gmapTable = gmapForm.find('table');
        gmapForm.appendTo('body').hide();
        
        // handles the click event of the submit button
        gmapForm.find('#gt-gmap-submit').click(function(){
            // defines the options and their default values
            // again, this is not the most elegant way to do this
            // but well, this gets the job done nonetheless
            var gmapOptions = {
                'width'         : '',
                'height'        : '300',
                'lat'           : '48.856614',
                'long'          : '2.352222',
                'zoom'          : '2',
                'type'          : 'hybrid',
                'html'          : 'A romantic destination.',
                'icon'          : '',
                'map_style'     : '',
                'style_name'    : '',
                'color'         : '#EFEFEF',
                'style'         : ''
                
                };
            var gmapShortcode = '[gtgmap';
            
            for( var index in gmapOptions) {
                var gmapValue = gmapTable.find('#gt-gmap-' + index).val();
                
                // attaches the attribute to the shortcode only if it's different from the default value
                if ( gmapValue !== gmapOptions[index] )
                    gmapShortcode += ' ' + index + '="' + gmapValue + '"';
            }
            
            gmapShortcode += ']';
            
            // inserts the shortcode into the active editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, gmapShortcode);
            
            // closes Thickbox
            tb_remove();
        });


        
          ////////////////////////////////////////////////////////////////////////////////
         /////////// Google Pie Chart Popup ////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////


        var googlepiechartForm = jQuery('<div id="gt-googlepiechart-form"><table id="gt-table-googlepiechart" class="form-table">\
            <small style="background-color:#ffebe8;padding:10px 30px;float:left;overflow:hidden;"><span style="color:#787878;">Make sure to enable Google chart script and animation stylesheet from options panel available here - Dashboard > Settings > GT Shortcodes.</span></small>\
            <tr>\
                <th><label for="gt-googlepiechart-font_size">Font Size</label></th>\
                <td><input type="text" name="googlepiechart font size" id="gt-googlepiechart-font_size" value="14"/><br />\
                    <small>The default font size, in pixels, of all text in the chart (in pixels). Example: 14.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-googlepiechart-font_name">Font Name</label></th>\
                <td><input type="text" name="googlepiechart font name" id="gt-googlepiechart-font_name" value="Arial"/><br />\
                    <small>The default font face for all text in the chart. Example: Arial.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-googlepiechart-legend_align">Legend Alignment</label></th>\
                <td><select name="googlepiechart-legend_align" id="gt-googlepiechart-legend_align">\
                    <option value="automatic">Automatic</option>\
                    <option value="start">Start</option>\
                    <option value="center">Center</option>\
                    <option value="end">End</option>\
                </select><br />\
                <small>Select pie chart legend alignment.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-googlepiechart-legend_position">Legend Position</label></th>\
                <td><select name="googlepiechart-legend_position" id="gt-googlepiechart-legend_position">\
                    <option value="bottom">Bottom</option>\
                    <option value="labeled">Labeled</option>\
                    <option value="left">Left</option>\
                    <option value="none">None</option>\
                    <option value="right">Right</option>\
                    <option value="top">Top</option>\
                </select><br />\
                <small>Select pie chart legend position.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-googlepiechart-legend_font_size">Legend Font Size</label></th>\
                <td><input type="text" name="googlepiechart font size" id="gt-googlepiechart-legend_font_size" value="14"/><br />\
                    <small>Add pie chart legend font size (in pixels). Example: 14.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-googlepiechart-legend_color">Legend Color</label></th>\
                <td><input type="text" name="googlepiechart legend color" id="gt-googlepiechart-legend_color" value="#FFFFFF" class="color {hash:true}" /><br />\
                    <small>Add pie chart legend color. Example: white or #FFFFFF.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-googlepiechart-legend_bold">Legend bold</label></th>\
                <td><select name="googlepiechart-legend_bold" id="gt-googlepiechart-legend_bold">\
                    <option value="true">True</option>\
                    <option value="false" selected>False</option>\
                </select><br />\
                <small>Select whether pie chart legend should be bold or not.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-googlepiechart-legend_italic">Legend Italic</label></th>\
                <td><select name="googlepiechart-legend_italic" id="gt-googlepiechart-legend_italic">\
                    <option value="true">True</option>\
                    <option value="false" selected>False</option>\
                </select><br />\
                <small>Select whether pie chart legend should be italic or not.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-googlepiechart-pie_slice_border_color">Pie Slice Border Color</label></th>\
                <td><input type="text" name="googlepiechart pie slice border color" id="gt-googlepiechart-pie_slice_border_color" value="#FFFFFF" class="color {hash:true}" /><br />\
                    <small>Choose a color for pie chart slice border. Example: white or #FFFFFF.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-googlepiechart-pie_hole">Pie Hole</label></th>\
                <td><input type="text" name="googlepiechart pie hole" id="gt-googlepiechart-pie_hole"/><br />\
                    <small>Make pie chart a doughnut chart. Value should be between 0 to 1. Example: 0.4. If between 0 and 1, displays a donut chart. The hole with have a radius equal to number times the radius of the chart.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-googlepiechart-pie_slice_text">Pie Slice Text</label></th>\
                <td><select name="googlepiechart-pie_slice_text" id="gt-googlepiechart-pie_slice_text">\
                    <option value="percentage">Percentage</option>\
                    <option value="value">Value</option>\
                    <option value="label">Label</option>\
                    <option value="none">None</option>\
                </select><br />\
                <small>Select the content of the text displayed on the slice.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-googlepiechart-tooltip_text">Tooltip Text</label></th>\
                <td><select name="googlepiechart-tooltip_text" id="gt-googlepiechart-tooltip_text">\
                    <option value="both">Both</option>\
                    <option value="value">Value</option>\
                    <option value="percentage">Percentage</option>\
                </select><br />\
                <small>Select what information to display when the user hovers over a pie slice.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-googlepiechart-tooltip_font_size">Tooltip Font Size</label></th>\
                <td><input type="text" name="googlepiechart font size" id="gt-googlepiechart-tooltip_font_size" value="14"/><br />\
                    <small>Add pie chart tooltip font size (in pixels). Example: 14.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-googlepiechart-tooltip_color">Tooltip Color</label></th>\
                <td><input type="text" name="googlepiechart legend color" id="gt-googlepiechart-tooltip_color" value="#000000" class="color {hash:true}" /><br />\
                    <small>Add pie chart tooltip color. Example: black or #000000.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-googlepiechart-title">Title</label></th>\
                <td><textarea name="googlepiechart title" id="gt-googlepiechart-title"></textarea><br />\
                    <small>Add title.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-googlepiechart-title_font_size">Title Font Size</label></th>\
                <td><input type="text" name="googlepiechart title font size" id="gt-googlepiechart-title_font_size" value="14"/><br />\
                    <small>Add pie chart title font size (in pixels). Example: 14.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-googlepiechart-title_color">Title Color</label></th>\
                <td><input type="text" name="googlepiechart title color" id="gt-googlepiechart-title_color" value="#000000" class="color {hash:true}" /><br />\
                    <small>Add pie chart title color. Example: black or #000000.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-googlepiechart-title_bold">Title bold</label></th>\
                <td><select name="googlepiechart-title_bold" id="gt-googlepiechart-title_bold">\
                    <option value="true">True</option>\
                    <option value="false">False</option>\
                </select><br />\
                <small>Select whether pie chart title should be bold or not.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-googlepiechart-title_italic">Title Italic</label></th>\
                <td><select name="googlepiechart-title_italic" id="gt-googlepiechart-title_italic">\
                    <option value="true">True</option>\
                    <option value="false" selected>False</option>\
                </select><br />\
                <small>Select whether pie chart title should be italic or not.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-googlepiechart-shape">Shape</label></th>\
                <td><select name="googlepiechart-shape" id="gt-googlepiechart-shape">\
                    <option value="normal">Normal</option>\
                    <option value="3D">3D</option>\
                </select><br />\
                <small>Select chart shape type.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-googlepiechart-width">Width</label></th>\
                <td><input type="text" name="googlepiechart width" id="gt-googlepiechart-width"/><br />\
                    <small>Add chart width (in pixels).</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-googlepiechart-height">Height</label></th>\
                <td><input type="text" name="googlepiechart height" id="gt-googlepiechart-height"/><br />\
                    <small>Add chart height (in pixels).</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-googlepiechart-background">Background</label></th>\
                <td><input type="text" name="googlepiechart background" id="gt-googlepiechart-background" value="#FFFFFF" class="color {hash:true}" /><br />\
                    <small>Choose a background color for pie chart. Example: white or #FFFFFF.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-googlepiechart-border_size">Border Size</label></th>\
                <td><input type="text" name="googlepiechart border size" id="gt-googlepiechart-border_size" value="0"/><br />\
                    <small>Add chart border size (in pixels). Example: 2.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-googlepiechart-border_color">Border Color</label></th>\
                <td><input type="text" name="googlepiechart border color" id="gt-googlepiechart-border_color" value="#FFFFFF" class="color {hash:true}" /><br />\
                    <small>Choose a border color for pie chart. Example: white or #FFFFFF.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-googlepiechart-animation_event">Animation Event</label></th>\
                <td><select name="googlepiechart-animation_event" id="gt-googlepiechart-animation_event">\
                    <option value="PageScroll">Page Scroll</option>\
                    <option value="PageLoad">Page Load</option>\
                </select><br />\
                <small>Select animation event.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-googlepiechart-animation_type">Animation Type</label></th>\
                <td><select name="googlepiechart-animation_type" id="gt-googlepiechart-animation_type">\
                    <option value="flash">Flash</option>\
                    <option value="bounce">Bounce</option>\
                    <option value="shake">Shake</option>\
                    <option value="tada">Tada</option>\
                    <option value="swing">Swing</option>\
                    <option value="wobble">Wobble</option>\
                    <option value="pulse">Pulse</option>\
                    <option value="flip">Flip</option>\
                    <option value="flipInX">FlipInX</option>\
                    <option value="flipOutX">FlipOutX</option>\
                    <option value="flipInY">FlipInY</option>\
                    <option value="flipOutY">FlipOutY</option>\
                    <option value="fadeIn">FadeIn</option>\
                    <option value="fadeInUp">FadeInUp</option>\
                    <option value="fadeInDown">FadeInDown</option>\
                    <option value="fadeInLeft">FadeInLeft</option>\
                    <option value="fadeInRight">FadeInRight</option>\
                    <option value="fadeInUpBig">FadeInUpBig</option>\
                    <option value="fadeInDownBig">FadeInDownBig</option>\
                    <option value="fadeInLeftBig">FadeInLeftBig</option>\
                    <option value="fadeInRightBig">FadeInRightBig</option>\
                    <option value="fadeOut">FadeOut</option>\
                    <option value="fadeOutUp">FadeOutUp</option>\
                    <option value="fadeOutDown">FadeOutDown</option>\
                    <option value="fadeOutLeft">FadeOutLeft</option>\
                    <option value="fadeOutRight">FadeOutRight</option>\
                    <option value="fadeOutUpBig">FadeOutUpBig</option>\
                    <option value="fadeOutDownBig">FadeOutDownBig</option>\
                    <option value="fadeOutLeftBig">FadeOutLeftBig</option>\
                    <option value="fadeOutRightBig">FadeOutRightBig</option>\
                    <option value="slideInDown">SlideInDown</option>\
                    <option value="slideInLeft">SlideInLeft</option>\
                    <option value="slideInRight">SlideInRight</option>\
                    <option value="slideOutUp">SlideOutUp</option>\
                    <option value="slideOutLeft">SlideOutLeft</option>\
                    <option value="slideOutRight">SlideOutRight</option>\
                    <option value="bounceIn">BounceIn</option>\
                    <option value="bounceInDown">BounceInDown</option>\
                    <option value="bounceInUp">BounceInUp</option>\
                    <option value="bounceInLeft">BounceInLeft</option>\
                    <option value="bounceInRight">BounceInRight</option>\
                    <option value="bounceOut">BounceOut</option>\
                    <option value="bounceOutDown">BounceOutDown</option>\
                    <option value="bounceOutUp">BounceOutUp</option>\
                    <option value="bounceOutLeft">BounceOutLeft</option>\
                    <option value="bounceOutRight">BounceOutRight</option>\
                    <option value="bounceOut">BounceOut</option>\
                    <option value="bounceOutDown">BounceOutDown</option>\
                    <option value="bounceOutUp">BounceOutUp</option>\
                    <option value="bounceOutLeft">BounceOutLeft</option>\
                    <option value="bounceOutRight">BounceOutRight</option>\
                    <option value="rotateIn">RotateIn</option>\
                    <option value="rotateInDownLeft">RotateInDownLeft</option>\
                    <option value="rotateInDownRight">RotateInDownRight</option>\
                    <option value="rotateInUpLeft">RotateInUpLeft</option>\
                    <option value="rotateInUpRight">RotateInUpRight</option>\
                    <option value="rotateOut">RotateOut</option>\
                    <option value="rotateOutDownLeft">RotateOutDownLeft</option>\
                    <option value="rotateOutDownRight">RotateOutDownRight</option>\
                    <option value="rotateOutUpLeft">RotateOutUpLeft</option>\
                    <option value="rotateOutUpRight">RotateOutUpRight</option>\
                    <option value="lightSpeedIn">LightSpeedIn</option>\
                    <option value="lightSpeedOut">LightSpeedOut</option>\
                    <option value="hinge">hinge</option>\
                    <option value="rollin">rollin</option>\
                    <option value="rollOut">rollOut</option>\
                </select><br />\
                <small>Select chart animation style.</small></td>\
            </tr>\
            <tr id="gt-googlepiechart-color-tr" style="display:none;">\
                <th><label for="gt-googlepiechart-color">Color</label></th>\
                <td><input type="text" name="googlepiechart color" id="gt-googlepiechart-color" value="#efefef" class="color {hash:true}" /><br />\
                    <small>Select custom color for map.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-googlepiechart-style">Custom Style</label></th>\
                <td><textarea name="googlepiechart style" id="gt-googlepiechart-style"></textarea><br />\
                    <small>Apply custom style. Ex: background: #C3C3E5;</small></td>\
            </tr>\
            <tr class="gt-charts-data-begin gt-googlepiechart-label-tr" style="border-top:1px solid #dcdcdc;">\
                <th><label for="gt-googlepiechart-label">Label</label></th>\
                <td><input type="text" name="googlepiechart-label" value="" /><br />\
                    <small>Add a label. Example: Mushroom.</small></td>\
            </tr>\
            <tr class="gt-googlepiechart-color-tr">\
                <th><label for="gt-googlepiechart-color">Color</label></th>\
                <td><input type="text" name="googlepiechart-color" value="#d0dce0" class="color {hash:true}" /><br />\
                    <small>Select charts data color.</small></td>\
            </tr>\
            <tr class="gt-googlepiechart-weight-tr" style="">\
                <th><label for="gt-googlepiechart-weight">Weight</label></th>\
                <td><input type="text" name="googlepiechart-weight" value="" /><br />\
                    <small>Add a weight. Example: 5.</small></td>\
            </tr>\
        </table>\
        <a id="gt-googlepiechart-add-more" class="button-secondary" name="add-data" style="float:right;">Add Data</a>\
        <p class="submit">\
            <input type="button" id="gt-googlepiechart-submit" class="button-primary" value="Insert Google Chart" name="submit" />\
        </p>\
        </div>');

        jQuery(document).ready(function($){
            $('#gt-googlepiechart-add-more').click(function(){
                var dataInputs = $('<tr class="gt-charts-data-begin gt-googlepiechart-label-tr" style="border-top:1px solid #dcdcdc;">\
                <th><label for="gt-googlepiechart-label">Label</label></th>\
                <td><input type="text" name="googlepiechart-label" value="" /><br />\
                    <small>Add a label. Example: Mushroom.</small></td>\
                </tr>\
                <tr class="gt-googlepiechart-color-tr">\
                    <th><label for="gt-googlepiechart-color">Color</label></th>\
                    <td><input type="text" name="googlepiechart-color" value="#d0dce0" class="gt-iris color {hash:true}" /><br />\
                        <small>Select charts data color.</small></td>\
                </tr>\
                <tr class="gt-googlepiechart-weight-tr" style="">\
                    <th><label for="gt-googlepiechart-weight">Weight</label></th>\
                    <td><input type="text" name="googlepiechart-weight" value="" /><br />\
                        <small>Add a weight. Example: 5.</small></td>\
                </tr>');
            
                $(document).find('#gt-table-googlepiechart').append(dataInputs);
                $(document).find('#gt-table-googlepiechart').find('.gt-iris').wpColorPicker();
            });
        });
        
        var googlepiechartTable = googlepiechartForm.find('table');
        googlepiechartForm.appendTo('body').hide();
        
        // handles the click event of the submit button
        googlepiechartForm.find('#gt-googlepiechart-submit').click(function(){
            // defines the options and their default values
            // again, this is not the most elegant way to do this
            // but well, this gets the job done nonetheless
            var googlepiechartOptions = {
                'font_size'                     : '',
                'font_name'                     : '',
                'legend_align'                  : '',
                'legend_position'               : '',
                'legend_font_size'              : '',
                'legend_color'                  : '',
                'legend_bold'                   : '',
                'legend_italic'                 : '',
                'pie_hole'                      : '',
                'pie_slice_border_color'        : '',
                'pie_slice_text'                : '',
                'tooltip_text'                  : '',
                'tooltip_color'                 : '',
                'tooltip_font_size'             : '',
                'title'                         : '',
                'title_font_size'               : '',
                'title_color'                   : '',
                'title_bold'                    : '',
                'title_italic'                  : '',
                'title'                         : '',
                'shape'                         : '',
                'width'                         : '',
                'height'                        : '',
                'background'                    : '',
                'border_size'                   : '',
                'border_color'                  : '',
                'animation_event'               : '',
                'animation_type'                : '',
                'style'                         : ''
                };
            var googlepiechartShortcode = '[gt_google_pie_chart';
            
            for( var index in googlepiechartOptions) {
                var googlepiechartValue = googlepiechartTable.find('#gt-googlepiechart-' + index).val();
                
                // attaches the attribute to the shortcode only if it's different from the default value
                if ( googlepiechartValue !== googlepiechartOptions[index] )
                    googlepiechartShortcode += ' ' + index + '="' + googlepiechartValue + '"';
            }

            var colorArray = jQuery( "input[name=googlepiechart-color]" ).map(function() {
                return jQuery( this ).val();
            });

            var dataLength = jQuery( 'input[name=googlepiechart-color]' ).length;
            var colorAttr = ' colors="';
            for( var i=0; i<dataLength; i++){
                if( i < ( + dataLength - 1 ) ){
                    colorAttr += "'" + colorArray[i] + "',";
                }else if( i == ( + dataLength - 1 ) ){
                    colorAttr += "'" + colorArray[i] + "'";
                }
            }
            
            googlepiechartShortcode += colorAttr + '"' + ']';

            var labelArray = jQuery( "input[name=googlepiechart-label]" ).map(function() {
                    return jQuery( this ).val();
                });
            var weightArray = jQuery( 'input[name="googlepiechart-weight"]' ).map(function() {
                    return jQuery( this ).val();
                });
            
            var newDataLength = jQuery( 'input[name=googlepiechart-label]' ).length;
            for( var i=0; i<newDataLength; i++){
                googlepiechartShortcode += '[gt_google_pie_chart_data label="'+labelArray[i]+'" weight="'+weightArray[i]+'"]';
            }
                

            googlepiechartShortcode += '[/gt_google_pie_chart]';
            
            // inserts the shortcode into the active editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, googlepiechartShortcode);
            
            // closes Thickbox
            tb_remove();
        });





          ////////////////////////////////////////////////////////////////////////////////
         /////////// Highlight Popup ////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////


        var highlightForm = jQuery('<div id="gt-highlight-form"><table id="gt-table" class="form-table">\
            <small style="background-color:#ffebe8;padding:10px 30px;float:left;overflow:hidden;"><span style="color:#787878;">Usage - Just enter the text between highlight shortcode tags. Example - [gthighlight] ..your content goes here.. [/gthighlight].</span></small>\
            <tr>\
                <th><label for="gt-highlight-color">Text Color</label></th>\
                <td><input type="text" name="highlight text color" id="gt-highlight-color" value="#FFFFFF" class="gt-iris color {hash:true,required:true}" /><br />\
                    <small>Adjust highlight text color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-highlight-background">Highlight Color</label></th>\
                <td><input type="text" name="label background color" id="gt-highlight-background" value="#FFF2B3" class="gt-iris color {hash:true,required:true}" /><br />\
                    <small>Adjust highlight color.</small></td>\
            </tr>\
        </table>\
        <p class="submit">\
            <input type="button" id="gt-highlight-submit" class="button-primary" value="Insert Highlight" name="submit" />\
        </p>\
        </div>');
        
        var highlightTable = highlightForm.find('table');
        highlightForm.appendTo('body').hide();
        
        // handles the click event of the submit button
        highlightForm.find('#gt-highlight-submit').click(function(){
            // defines the options and their default values
            // again, this is not the most elegant way to do this
            // but well, this gets the job done nonetheless
            var highlightOptions = {
                'color'        : '#FFFFFF',
                'background'   : '#FFF2B3'
                
                };
            var highlightShortcode = '[gthighlight';
            
            for( var index in highlightOptions) {
                var highlightValue = highlightTable.find('#gt-highlight-' + index).val();
                
                // attaches the attribute to the shortcode only if it's different from the default value
                if ( highlightValue !== highlightOptions[index] )
                    highlightShortcode += ' ' + index + '="' + highlightValue + '"';
            }
            
            highlightShortcode += '][/gthighlight]';
            
            // inserts the shortcode into the active editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, highlightShortcode);
            
            // closes Thickbox
            tb_remove();
        });



          ////////////////////////////////////////////////////////////////////////////////
         /////////// Horizontal Rules Popup /////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////


        var horizontalForm = jQuery('<div id="gt-horizontal-form"><table id="gt-table" class="form-table">\
            <small style="background-color:#ffebe8;padding:10px 30px;float:left;overflow:hidden;"><span style="color:#787878;">Text is added between shortcode tags. Ex: [gthr]Text[/gthr]. Other shortcodes such as icons and buttons can also be included between shortcode tags.</span></small>\
            <tr>\
                <th><label for="gt-horizontal-type">Type</label></th>\
                <td><select name="horizontal-type" id="gt-horizontal-type">\
                    <option value="solid">Solid</option>\
                    <option value="dotted">Dotted</option>\
                    <option value="dashed">Dashed</option>\
                    <option value="double">Double</option>\
                    <option value="groove">Groove</option>\
                    <option value="ridge">Ridge</option>\
                    <option value="inset">Inset</option>\
                    <option value="outset">Outset</option>\
                    <option value="shadow">Shadow</option>\
                    <option value="gradient">Gradient</option>\
                    <option value="none">None (White Space)</option>\
                </select><br />\
                <small>Select horizontal rule type.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-horizontal-color">Color</label></th>\
                <td><input type="text" name="horizontal text color" id="gt-horizontal-color" value="#A2A2A2" class="gt-iris color {hash:true,required:true}" /><br />\
                    <small>Adjust color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-horizontal-size">Size</label></th>\
                <td><input type="text" name="Horizontal Size" id="gt-horizontal-size" value="1" /><br />\
                    <small>Add horizontal size (in pixels). Ex: 2,4,8 etc. Minimum size requirements for horizontal types -> Double - 3, Groove-Ridge - 4, Inset-Outset - 2, Shadow - 10.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-horizontal-backtotop">Back to Top Link?</label></th>\
                <td><select name="horizontal-backtotop" id="gt-horizontal-backtotop">\
                    <option value="no">No</option>\
                    <option value="yes">Yes</option>\
                </select><br />\
                <small>Select whether to use back to top link or not. You will still need to add text between shortcode tags. Once enabled, anything added between horizontal rules tag will act as back to top link.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-horizontal-align">Text Alignment</label></th>\
                <td><select name="horizontal-align" id="gt-horizontal-align">\
                    <option value="left">Left</option>\
                    <option value="right">Right</option>\
                    <option value="center">Center</option>\
                </select><br />\
                <small>Select whether to align text to the left, right or center.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-horizontal-margin">Text Margin</label></th>\
                <td><input type="text" name="Horizontal margin" id="gt-horizontal-margin" value="20" /><br />\
                    <small>Apply margin to text (in pixels), top and bottom. Useful for properly centering the text to horizontal line. If text appears to be above horizontal line then increase the margin but if text appears to be below horizontal line then decrease the margin.</small></td>\
            </tr>\
        </table>\
        <p class="submit">\
            <input type="button" id="gt-horizontal-submit" class="button-primary" value="Insert Horizontal Rule" name="submit" />\
        </p>\
        </div>');
        
        var horizontalTable = horizontalForm.find('table');
        horizontalForm.appendTo('body').hide();
        
        // handles the click event of the submit button
        horizontalForm.find('#gt-horizontal-submit').click(function(){
            // defines the options and their default values
            // again, this is not the most elegant way to do this
            // but well, this gets the job done nonetheless
            var horizontalOptions = {
                'type'      : 'solid',
                'color'     : '#A2A2A2',
                'backtotop' : 'no',
                'size'      : '1',
                'align'     : 'left',
                'margin'    : '20'
                
                };
            var horizontalShortcode = '[gthr';
            
            for( var index in horizontalOptions) {
                var horizontalValue = horizontalTable.find('#gt-horizontal-' + index).val();
                
                // attaches the attribute to the shortcode only if it's different from the default value
                if ( horizontalValue !== horizontalOptions[index] )
                    horizontalShortcode += ' ' + index + '="' + horizontalValue + '"';
            }
            
            horizontalShortcode += '][/gthr]';
            
            // inserts the shortcode into the active editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, horizontalShortcode);
            
            // closes Thickbox
            tb_remove();
        });



          ////////////////////////////////////////////////////////////////////////////////
         /////////// Icon List Popup ////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////


        var iconListForm = jQuery('<div id="gt-icon-list-form"><table id="gt-table-icon-list" class="form-table">\
            <small style="background-color:#ffebe8;padding:10px 30px;float:left;overflow:hidden;"><span style="color:#787878;">Make sure to enable font awesome stylesheet from options panel available here - Dashboard > Settings > GT Shortcodes.</span></small>\
            <tr>\
                <th><label for="gt-icon-list-border">Bottom Border</label></th>\
                <td><select name="icon-list-border" id="gt-icon-list-border">\
                    <option value="true">True</option>\
                    <option value="false">False</option>\
                </select><br />\
                <small>Select whether to have bottom border for list items.</small></td>\
        </table>\
        <a id="gt-icon-list-add-more" class="button-secondary" name="add-data" style="float:right;margin-top:10px;">Add Item</a>\
        <p class="submit">\
            <input type="button" id="gt-icon-list-submit" class="button-primary" value="Insert Icon List" name="submit" />\
        </p>\
        </div>');




        jQuery(document).ready(function($){

            $('#gt-icon-list-add-more').click(function(){
                var listItem = jQuery('<tr style="background-color:#fafafa;border-top:2px solid #f0f0f0;">\
                <th><label for="gt-icon-list-icon" style="padding-left:10px;">Icon</label></th>\
                    <td><select id="gt-icon-list-icon" name="icon-list-icon" style="font-family:FontAwesome,Arial;">\
                        <optgroup label="Web Application Icons">\
                            <option value="adjust">&#xf042; adjust</option>\
                            <option value="anchor">&#xf13d; anchor</option>\
                            <option value="archive">&#xf187; archive</option>\
                            <option value="arrows">&#xf047; arrows</option>\
                            <option value="arrows-h">&#xf07e; arrows horizontal</option>\
                            <option value="arrows-v">&#xf07d; arrows vertical</option>\
                            <option value="asterisk">&#xf069; asterisk</option>\
                            <option value="automobile">&#xf1b9; automobile</option>\
                            <option value="ban">&#xf05e; ban</option>\
                            <option value="bank">&#xf19c; bank</option>\
                            <option value="bar-chart-o">&#xf080; bar-chart-o</option>\
                            <option value="barcode">&#xf02a; barcode</option>\
                            <option value="bars">&#xf0c9; bars</option>\
                            <option value="beer">&#xf0fc; beer</option>\
                            <option value="bell">&#xf0a2; bell</option>\
                            <option value="bell-o">&#xf0f3; bell-o</option>\
                            <option value="bolt">&#xf0e7; bolt</option>\
                            <option value="bomb">&#xf1e2; bomb</option>\
                            <option value="book">&#xf02d; book</option>\
                            <option value="bookmark">&#xf02e; bookmark</option>\
                            <option value="bookmark-o">&#xf097; bookmark-o</option>\
                            <option value="briefcase">&#xf0b1; briefcase</option>\
                            <option value="bug">&#xf188; bug</option>\
                            <option value="building">&#xf1ad; building</option>\
                            <option value="building-o">&#xf0f7; building-o</option>\
                            <option value="bullhorn">&#xf0a1; bullhorn</option>\
                            <option value="bullseye">&#xf140; bullseye</option>\
                            <option value="cab">&#xf1ba; cab</option>\
                            <option value="calendar">&#xf073; calendar</option>\
                            <option value="calendar-o">&#xf133; calendar-o</option>\
                            <option value="camera">&#xf030; camera</option>\
                            <option value="camera-retro">&#xf083; camera-retro</option>\
                            <option value="car">&#xf1b9; car</option>\
                            <option value="caret-square-o-down">&#xf150; caret-square-o-down</option>\
                            <option value="caret-square-o-left">&#xf191; caret-square-o-left</option>\
                            <option value="caret-square-o-right">&#xf152; caret-square-o-right</option>\
                            <option value="caret-square-o-up">&#xf151; caret-square-o-up</option>\
                            <option value="certificate">&#xf0a3; certificate</option>\
                            <option value="check">&#xf00c; check</option>\
                            <option value="check-circle">&#xf058; check-circle</option>\
                            <option value="check-circle-o">&#xf10c; check-circle-o</option>\
                            <option value="check-square">&#xf14a; check-square</option>\
                            <option value="check-square-o">&#xf046; check-square-o</option>\
                            <option value="child">&#xf1ae; child</option>\
                            <option value="circle">&#xf111; circle</option>\
                            <option value="circle-o">&#xf10c; circle-o</option>\
                            <option value="circle-o-notch">&#xf1ce; circle-o-notch</option>\
                            <option value="circle-o-thin">&#xf1db; circle-o-thin</option>\
                            <option value="clock-o">&#xf017; clock-o</option>\
                            <option value="cloud">&#xf0c2; cloud</option>\
                            <option value="cloud-download">&#xf0ed; cloud-download</option>\
                            <option value="cloud-upload">&#xf0ee; cloud-upload</option>\
                            <option value="code">&#xf121; code</option>\
                            <option value="code-fork">&#xf126; code-fork</option>\
                            <option value="coffee">&#xf0f4; coffee</option>\
                            <option value="cog">&#xf013; cog</option>\
                            <option value="cogs">&#xf085; cogs</option>\
                            <option value="comment">&#xf075; comment</option>\
                            <option value="comment-o">&#xf0e5; comment-o</option>\
                            <option value="comments">&#xf086; comments</option>\
                            <option value="comments-o">&#xf0e6; comments-o</option>\
                            <option value="collapse-o">&#xf117; collapse-o</option>\
                            <option value="comment">&#xf075; comment</option>\
                            <option value="comment-o">&#xf0e5; comment-o</option>\
                            <option value="comments">&#xf086; comments</option>\
                            <option value="comments-o">&#xf0e6; comments-o</option>\
                            <option value="compass">&#xf14e; compass</option>\
                            <option value="credit-card">&#xf09d; credit-card</option>\
                            <option value="crop">&#xf125; crop</option>\
                            <option value="crosshairs">&#xf05b; crosshairs</option>\
                            <option value="cube">&#xf1b2; cube</option>\
                            <option value="cubes">&#xf1b3; cubes</option>\
                            <option value="crosshairs">&#xf05b; crosshairs</option>\
                            <option value="cutlery">&#xf0f5; cutlery</option>\
                            <option value="dashboard">&#xf0e4; dashboard</option>\
                            <option value="database">&#xf1c0; database</option>\
                            <option value="desktop">&#xf108; desktop</option>\
                            <option value="dot-circle-o">&#xf192; dot-circle-o</option>\
                            <option value="download">&#xf01a; download</option>\
                            <option value="edit">&#xf044; edit</option>\
                            <option value="ellipsis-h">&#xf141; ellipsis-horizontal</option>\
                            <option value="ellipsis-v">&#xf142; ellipsis-vertical</option>\
                            <option value="envelope">&#xf0e0; envelope</option>\
                            <option value="envelope-o">&#xf003; envelope-o</option>\
                            <option value="envelope-square">&#xf199; envelope-square</option>\
                            <option value="eraser">&#xf12d; eraser</option>\
                            <option value="exchange">&#xf0ec; exchange</option>\
                            <option value="exclamation">&#xf12a; exclamation</option>\
                            <option value="exclamation-circle">&#xf06a; exclamation-circle</option>\
                            <option value="exclamation-triangle">&#xf071; exclamation-triangle</option>\
                            <option value="expand-o">&#xf116; expand-o</option>\
                            <option value="external-link">&#xf08e; external-link</option>\
                            <option value="external-link-square">&#xf14c; external-link-square</option>\
                            <option value="eye">&#xf06e; eye</option>\
                            <option value="eye-slash">&#xf070; eye-slash</option>\
                            <option value="fax">&#xf1ac; fax</option>\
                            <option value="female">&#xf182; female</option>\
                            <option value="fighter-jet">&#xf0fb; fighter-jet</option>\
                            <option value="file-archive-o">&#xf1c6; file-archive-o</option>\
                            <option value="file-audio-o">&#xf1c7; file-audio-o</option>\
                            <option value="file-code-o">&#xf1c9; file-code-o</option>\
                            <option value="file-excel-o">&#xf1c3; file-excel-o</option>\
                            <option value="file-image-o">&#xf1c5; file-image-o</option>\
                            <option value="file-movie-o">&#xf1c8; file-movie-o</option>\
                            <option value="file-pdf-o">&#xf1c1; file-pdf-o</option>\
                            <option value="file-photo-o">&#xf1c5; file-photo-o</option>\
                            <option value="file-picture-o">&#xf1c5; file-picture-o</option>\
                            <option value="file-powerpoint-o">&#xf1c4; file-powerpoint-o</option>\
                            <option value="file-sound-o">&#xf1c7; file-sound-o</option>\
                            <option value="file-video-o">&#xf1c8; file-video-o</option>\
                            <option value="file-word-o">&#xf1c2; file-word-o</option>\
                            <option value="file-zip-o">&#xf1c6; file-zip-o</option>\
                            <option value="film">&#xf008; film</option>\
                            <option value="filter">&#xf0b0; filter</option>\
                            <option value="fire">&#xf06d; fire</option>\
                            <option value="fire-extinguisher">&#xf134; fire-extinguisher</option>\
                            <option value="flag">&#xf024; flag</option>\
                            <option value="flag-checkered">&#xf11e; flag-checkered</option>\
                            <option value="flag-o">&#xf11d; flag-o</option>\
                            <option value="flash">&#xf0e7; flash</option>\
                            <option value="flask">&#xf0c3; flask</option>\
                            <option value="folder">&#xf07b; folder</option>\
                            <option value="folder-o">&#xf114; folder-o</option>\
                            <option value="folder-open">&#xf07c; folder-open</option>\
                            <option value="folder-open-o">&#xf115; folder-open-o</option>\
                            <option value="frown-o">&#xf119; frown-o</option>\
                            <option value="gamepad">&#xf11b; gamepad</option>\
                            <option value="gavel">&#xf0e3; gavel</option>\
                            <option value="gear">&#xf013; gear</option>\
                            <option value="gears">&#xf085; gears</option>\
                            <option value="gift">&#xf06b; gift</option>\
                            <option value="glass">&#xf000; glass</option>\
                            <option value="globe">&#xf0ac; globe</option>\
                            <option value="graduation-cap">&#xf19d; graduation-cap</option>\
                            <option value="group">&#xf0c0; group</option>\
                            <option value="hdd-o">&#xf0a0; hdd</option>\
                            <option value="headphones">&#xf025; headphones</option>\
                            <option value="heart">&#xf004; heart</option>\
                            <option value="heart-o">&#xf08a; heart-o</option>\
                            <option value="history">&#xf1da; history</option>\
                            <option value="home">&#xf015; home</option>\
                            <option value="image">&#xf03e; image</option>\
                            <option value="inbox">&#xf01c; inbox</option>\
                            <option value="info">&#xf129; info</option>\
                            <option value="info-circle">&#xf05a; info-circle</option>\
                            <option value="institution">&#xf19c; institution</option>\
                            <option value="key">&#xf084; key</option>\
                            <option value="keyboard-o">&#xf11c; keyboard-o</option>\
                            <option value="language">&#xf1ab; language</option>\
                            <option value="laptop">&#xf109; laptop</option>\
                            <option value="leaf">&#xf06c; leaf</option>\
                            <option value="legal">&#xf0e3; legal</option>\
                            <option value="lemon-o">&#xf094; lemon-o</option>\
                            <option value="level-down">&#xf149; level-down</option>\
                            <option value="level-up">&#xf148; level-up</option>\
                            <option value="life-bouy">&#xf1cd; life-bouy</option>\
                            <option value="life-ring">&#xf1cd; life-ring</option>\
                            <option value="life-saver">&#xf1cd; life-saver</option>\
                            <option value="lightbulb-o">&#xf0eb; lightbulb-o</option>\
                            <option value="location-arrow">&#xf124; location-arrow</option>\
                            <option value="lock">&#xf023; lock</option>\
                            <option value="magic">&#xf0d0; magic</option>\
                            <option value="magnet">&#xf076; magnet</option>\
                            <option value="mail-forward">&#xf064; mail-forward</option>\
                            <option value="mail-reply">&#xf112; mail-reply</option>\
                            <option value="mail-reply-all">&#xf122; mail-reply-all</option>\
                            <option value="male">&#xf183; male</option>\
                            <option value="map-marker">&#xf041; map-marker</option>\
                            <option value="meh-o">&#xf11a; meh-o</option>\
                            <option value="microphone">&#xf130; microphone</option>\
                            <option value="microphone-slash">&#xf131; microphone-slash</option>\
                            <option value="minus">&#xf068; minus</option>\
                            <option value="minus-circle">&#xf056; minus-circle</option>\
                            <option value="minus-square">&#xf146; minus-square</option>\
                            <option value="minus-square-o">&#xf147; minus-square-o</option>\
                            <option value="mobile">&#xf10b; mobile</option>\
                            <option value="mobile-phone">&#xf10b; mobile-phone</option>\
                            <option value="money">&#xf0d6; money</option>\
                            <option value="moon-o">&#xf186; moon-o</option>\
                            <option value="mortar-board">&#xf19d; mortar-board</option>\
                            <option value="music">&#xf001; music</option>\
                            <option value="navicon">&#xf0c9; navicon</option>\
                            <option value="paper-plane">&#xf1d8; paper-plane</option>\
                            <option value="paper-plane-o">&#xf1d9; paper-plane-o</option>\
                            <option value="paw">&#xf1b0; paw</option>\
                            <option value="pencil">&#xf040; pencil</option>\
                            <option value="pencil-square">&#xf14b; pencil-square</option>\
                            <option value="pencil-square-o">&#xf044; pencil-square-o</option>\
                            <option value="phone">&#xf095; phone</option>\
                            <option value="phone-square">&#xf098; phone-square</option>\
                            <option value="photo">&#xf03e; photo</option>\
                            <option value="picture-o">&#xf03e; picture-o</option>\
                            <option value="plane">&#xf072; plane</option>\
                            <option value="plus">&#xf067; plus</option>\
                            <option value="plus-circle">&#xf055; plus-circle</option>\
                            <option value="plus-square">&#xf0fe; plus-square</option>\
                            <option value="plus-square-o">&#xf196; plus-square-o</option>\
                            <option value="power-off">&#xf011; power-off</option>\
                            <option value="print">&#xf02f; print</option>\
                            <option value="puzzle-piece">&#xf12e; puzzle-piece</option>\
                            <option value="qrcode">&#xf029; qrcode</option>\
                            <option value="question">&#xf128; question</option>\
                            <option value="question-circle">&#xf059; question-circle</option>\
                            <option value="quote-left">&#xf10d; quote-left</option>\
                            <option value="quote-right">&#xf10e; quote-right</option>\
                            <option value="random">&#xf074; random</option>\
                            <option value="recycle">&#xf1b8; recycle</option>\
                            <option value="refresh">&#xf021; refresh</option>\
                            <option value="reorder">&#xf0c9; reorder</option>\
                            <option value="reply">&#xf112; reply</option>\
                            <option value="reply-all">&#xf122; reply-all</option>\
                            <option value="retweet">&#xf079; retweet</option>\
                            <option value="road">&#xf018; road</option>\
                            <option value="rocket">&#xf135; rocket</option>\
                            <option value="rss">&#xf09e; rss</option>\
                            <option value="rss-square">&#xf143; rss-square</option>\
                            <option value="search">&#xf002; search</option>\
                            <option value="search-minus">&#xf010; search-minus</option>\
                            <option value="search-plus">&#xf00e; search-plus</option>\
                            <option value="send">&#xf1d8; send</option>\
                            <option value="send-o">&#xf1d9; send-o</option>\
                            <option value="share">&#xf045; share</option>\
                            <option value="share-alt">&#xf1e0; share-alt</option>\
                            <option value="share-alt-square">&#xf1e1; share-alt-square</option>\
                            <option value="share-square">&#xf14d; share-circle</option>\
                            <option value="share-square-o">&#xf045; share-square-o</option>\
                            <option value="shield">&#xf132; shield</option>\
                            <option value="shopping-cart">&#xf07a; shopping-cart</option>\
                            <option value="sign-in">&#xf090; sign-in</option>\
                            <option value="sign-out">&#xf08b; sign-out</option>\
                            <option value="signal">&#xf012; signal</option>\
                            <option value="sitemap">&#xf0e8; sitemap</option>\
                            <option value="sliders">&#xf1de; sliders</option>\
                            <option value="smile-o">&#xf118; smile-o</option>\
                            <option value="sort">&#xf0dc; sort</option>\
                            <option value="sort-alpha-asc">&#xf15d; sort-alpha-asc</option>\
                            <option value="sort-alpha-desc">&#xf15e; sort-alpha-desc</option>\
                            <option value="sort-amount-asc">&#xf160; sort-amount-asc</option>\
                            <option value="sort-amount-desc">&#xf161; sort-amount-desc</option>\
                            <option value="sort-asc">&#xf0dd; sort-asc</option>\
                            <option value="sort-desc">&#xf0de; sort-desc</option>\
                            <option value="sort-down">&#xf0dd; sort-down</option>\
                            <option value="sort-numeric-asc">&#xf162; sort-numeric-asc</option>\
                            <option value="sort-numeric-desc">&#xf163; sort-numeric-desc</option>\
                            <option value="sort-up">&#xf0de; sort-up</option>\
                            <option value="space-shuttle">&#xf197; space-shuttle</option>\
                            <option value="spinner">&#xf110; spinner</option>\
                            <option value="spoon">&#xf1b1; spoon</option>\
                            <option value="square">&#xf0c8; square</option>\
                            <option value="square-o">&#xf096; square-o</option>\
                            <option value="star">&#xf005; star</option>\
                            <option value="star-half">&#xf089; star-half</option>\
                            <option value="star-half-empty">&#xf123; star-half-empty</option>\
                            <option value="star-half-full">&#xf123; star-half-full</option>\
                            <option value="star-half-o">&#xf123; star-half-o</option>\
                            <option value="star-o">&#xf006; star-o</option>\
                            <option value="suitcase">&#xf0f2; suitcase</option>\
                            <option value="sun-o">&#xf185; sun-o</option>\
                            <option value="support">&#xf1cd; support</option>\
                            <option value="tablet">&#xf10a; tablet</option>\
                            <option value="tachnometer">&#xf0e4; tachnometer</option>\
                            <option value="tag">&#xf02b; tag</option>\
                            <option value="tags">&#xf02c; tags</option>\
                            <option value="tasks">&#xf0ae; tasks</option>\
                            <option value="taxi">&#xf1ba; taxi</option>\
                            <option value="terminal">&#xf120; terminal</option>\
                            <option value="thumb-tack">&#xf120; thumb-tack</option>\
                            <option value="thumbs-down">&#xf165; thumbs-down</option>\
                            <option value="thumbs-o-down">&#xf088; thumbs-o-down</option>\
                            <option value="thumbs-o-up">&#xf087; thumbs-o-up</option>\
                            <option value="thumbs-up">&#xf164; thumbs-up</option>\
                            <option value="ticket">&#xf145; ticket</option>\
                            <option value="times">&#xf00d; times</option>\
                            <option value="times-circle">&#xf057; times-circle</option>\
                            <option value="times-circle-o">&#xf05c; times-circle-o</option>\
                            <option value="tint">&#xf043; tint</option>\
                            <option value="toggle-down">&#xf150; toggle-down</option>\
                            <option value="toggle-left">&#xf191; toggle-left</option>\
                            <option value="toggle-right">&#xf152; toggle-right</option>\
                            <option value="toggle-up">&#xf151; toggle-up</option>\
                            <option value="trash-o">&#xf014; trash-o</option>\
                            <option value="tree">&#xf1bb; tree</option>\
                            <option value="trophy">&#xf091; trophy</option>\
                            <option value="truck">&#xf0d1; truck</option>\
                            <option value="umbrella">&#xf0e9; umbrella</option>\
                            <option value="university">&#xf19c; university</option>\
                            <option value="unlock">&#xf09c; unlock</option>\
                            <option value="unlock-alt">&#xf13e; unlock-alt</option>\
                            <option value="unsorted">&#xf0dc; unsorted</option>\
                            <option value="upload">&#xf01b; upload</option>\
                            <option value="user">&#xf007; user</option>\
                            <option value="users">&#xf0c0; users</option>\
                            <option value="video-camera">&#xf03d; video-camera</option>\
                            <option value="volume-down">&#xf027; volume-down</option>\
                            <option value="volume-off">&#xf026; volume-off</option>\
                            <option value="volume-up">&#xf028; volume-up</option>\
                            <option value="warning">&#xf071; warning</option>\
                            <option value="wheelchair">&#xf193; wheelchair</option>\
                            <option value="wrench">&#xf0ad; wrench</option>\
                        </optgroup>\
                        <optgroup label="Form Control Icons">\
                            <option value="check-square">&#xf14a; check-square</option>\
                            <option value="check-square-o">&#xf046; check-square-o</option>\
                            <option value="circle">&#xf111; circle</option>\
                            <option value="circle-o">&#xf10c; circle-o</option>\
                            <option value="dot-circle-o">&#xf192; dot-circle-o</option>\
                            <option value="minus-square">&#xf146; minus-square</option>\
                            <option value="minus-square-o">&#xf147; minus-square-o</option>\
                            <option value="plus-square">&#xf0fe; plus-square</option>\
                            <option value="plus-square-o">&#xf196; plus-square-o</option>\
                            <option value="square">&#xf0c8; square</option>\
                            <option value="square-o">&#xf096; square-o</option>\
                        </optgroup>\
                        <optgroup label="Currency Icons">\
                            <option value="bitcoin">&#xf15a; bitcoin</option>\
                            <option value="btc">&#xf15a; btc</option>\
                            <option value="cny">&#xf158; cny</option>\
                            <option value="dollar">&#xf155; dollar</option>\
                            <option value="eur">&#xf153; eur</option>\
                            <option value="euro">&#xf153; euro</option>\
                            <option value="gbp">&#xf154; gbp</option>\
                            <option value="inr">&#xf156; inr</option>\
                            <option value="jpy">&#xf157; jpy</option>\
                            <option value="krw">&#xf159; krw</option>\
                            <option value="money">&#xf0d6; money</option>\
                            <option value="rmb">&#xf157; rmb</option>\
                            <option value="rouble">&#xf158; rouble</option>\
                            <option value="rub">&#xf158; rub</option>\
                            <option value="ruble">&#xf158; ruble</option>\
                            <option value="rupee">&#xf156; rupee</option>\
                            <option value="try">&#xf195; try</option>\
                            <option value="turkish-lira">&#xf195; turkish-lira</option>\
                            <option value="usd">&#xf155; usd</option>\
                            <option value="won">&#xf159; won</option>\
                            <option value="yen">&#xf157; yen</option>\
                            </optgroup>\
                        <optgroup label="Text Editor Icons">\
                            <option value="align-center">&#xf037; align-center</option>\
                            <option value="align-justify">&#xf039; align-justify</option>\
                            <option value="align-left">&#xf036; align-left</option>\
                            <option value="align-right">&#xf038; align-right</option>\
                            <option value="bold">&#xf032; bold</option>\
                            <option value="chain">&#xf0c1; chain</option>\
                            <option value="chain-broken">&#xf127; chain-broken</option>\
                            <option value="clipboard">&#xf0ea; clipboard</option>\
                            <option value="columns">&#xf0db; columns</option>\
                            <option value="copy">&#xf0c5; copy</option>\
                            <option value="cut">&#xf0c4; cut</option>\
                            <option value="dedent">&#xf03b; dedent</option>\
                            <option value="eraser">&#xf12d; eraser</option>\
                            <option value="file">&#xf15b; file</option>\
                            <option value="file-o">&#xf016; file-o</option>\
                            <option value="file-text">&#xf15c; file-text</option>\
                            <option value="file-text-o">&#xf0f6; file-text-o</option>\
                            <option value="files-o">&#xf0c5; files-o</option>\
                            <option value="floppy-o">&#xf0c7; floppy-o</option>\
                            <option value="font">&#xf031; font</option>\
                            <option value="header">&#xf1dc; header</option>\
                            <option value="indent">&#xf03c; indent-right</option>\
                            <option value="italic">&#xf033; italic</option>\
                            <option value="link">&#xf0c1; link</option>\
                            <option value="list">&#xf03a; list</option>\
                            <option value="list-alt">&#xf022; list-alt</option>\
                            <option value="list-ol">&#xf0cb; list-ol</option>\
                            <option value="list-ul">&#xf0ca; list-ul</option>\
                            <option value="outdent">&#xf03b; outdent</option>\
                            <option value="paperclip">&#xf0c6; paperclip</option>\
                            <option value="paragraph">&#xf1dd; paragraph</option>\
                            <option value="paste">&#xf0ea; paste</option>\
                            <option value="repeat">&#xf01e; repeat</option>\
                            <option value="rotate-left">&#xf0e2; rotate-left</option>\
                            <option value="rotate-right">&#xf01e; rotate-right</option>\
                            <option value="save">&#xf0c7; save</option>\
                            <option value="scissors">&#xf0c4; scissors</option>\
                            <option value="strikethrough">&#xf0cc; strikethrough</option>\
                            <option value="subscript">&#xf12c; subscript</option>\
                            <option value="superscript">&#xf12b; superscript</option>\
                            <option value="table">&#xf0ce; table</option>\
                            <option value="text-height">&#xf034; text-height</option>\
                            <option value="text-width">&#xf035; text-width</option>\
                            <option value="th">&#xf00a; th</option>\
                            <option value="th-large">&#xf009; th-large</option>\
                            <option value="th-list">&#xf00b; th-list</option>\
                            <option value="underline">&#xf0cd; underline</option>\
                            <option value="undo">&#xf0e2; undo</option>\
                            <option value="unlink">&#xf127; unlink</option>\
                        </optgroup>\
                        <optgroup label="Directional Icons">\
                            <option value="angle-double-down">&#xf103; angle-double-down</option>\
                            <option value="angle-double-left">&#xf100; angle-double-left</option>\
                            <option value="angle-double-right">&#xf101; angle-double-right</option>\
                            <option value="angle-double-up">&#xf102; angle-double-up</option>\
                            <option value="angle-down">&#xf107; angle-down</option>\
                            <option value="angle-left">&#xf104; angle-left</option>\
                            <option value="angle-right">&#xf105; angle-right</option>\
                            <option value="angle-up">&#xf106; angle-up</option>\
                            <option value="arrow-circle-down">&#xf0ab; arrow-circle-down</option>\
                            <option value="arrow-circle-left">&#xf0a8; arrow-circle-left</option>\
                            <option value="arrow-circle-o-down">&#xf01a; arrow-circle-o-down</option>\
                            <option value="arrow-circle-o-left">&#xf190; arrow-circle-o-left</option>\
                            <option value="arrow-circle-o-right">&#xf18e; arrow-circle-o-right</option>\
                            <option value="arrow-circle-o-up">&#xf01b; arrow-circle-o-up</option>\
                            <option value="arrow-circle-right">&#xf0a9; arrow-circle-right</option>\
                            <option value="arrow-circle-up">&#xf0aa; arrow-circle-up</option>\
                            <option value="arrow-down">&#xf063; arrow-down</option>\
                            <option value="arrow-left">&#xf060; arrow-left</option>\
                            <option value="arrow-right">&#xf061; arrow-right</option>\
                            <option value="arrow-up">&#xf062; arrow-up</option>\
                            <option value="arrows">&#xf047; arrows</option>\
                            <option value="arrows-alt">&#xf0b2; arrows-alt</option>\
                            <option value="arrows-h">&#xf07e; arrows-h</option>\
                            <option value="arrows-v">&#xf07d; arrows-v</option>\
                            <option value="caret-down">&#xf0d7; caret-down</option>\
                            <option value="caret-left">&#xf0d9; caret-left</option>\
                            <option value="caret-right">&#xf0da; caret-right</option>\
                            <option value="caret-square-o-down">&#xf150; caret-square-o-down</option>\
                            <option value="caret-square-o-left">&#xf191; caret-square-o-left</option>\
                            <option value="caret-square-o-right">&#xf152; caret-square-o-right</option>\
                            <option value="caret-square-o-up">&#xf151; caret-square-o-up</option>\
                            <option value="caret-up">&#xf0d8; caret-up</option>\
                            <option value="chevron-circle-down">&#xf13a; chevron-circle-down</option>\
                            <option value="chevron-circle-left">&#xf137; chevron-circle-left</option>\
                            <option value="chevron-circle-right">&#xf138; chevron-circle-right</option>\
                            <option value="chevron-circle-up">&#xf139; chevron-circle-up</option>\
                            <option value="chevron-down">&#xf078; chevron-down</option>\
                            <option value="chevron-left">&#xf053; chevron-left</option>\
                            <option value="chevron-right">&#xf054; chevron-right</option>\
                            <option value="chevron-up">&#xf077; chevron-up</option>\
                            <option value="hand-o-down">&#xf0a7; hand-o-down</option>\
                            <option value="hand-o-left">&#xf0a5; hand-o-left</option>\
                            <option value="hand-o-right">&#xf0a4; hand-o-right</option>\
                            <option value="hand-o-up">&#xf0a6; hand-o-up</option>\
                            <option value="long-arrow-down">&#xf175; long-arrow-down</option>\
                            <option value="long-arrow-left">&#xf177; long-arrow-left</option>\
                            <option value="long-arrow-right">&#xf178; long-arrow-right</option>\
                            <option value="long-arrow-up">&#xf176; long-arrow-up</option>\
                            <option value="toggle-down">&#xf150; toggle-down</option>\
                            <option value="toggle-left">&#xf191; toggle-left</option>\
                            <option value="toggle-right">&#xf152; toggle-right</option>\
                            <option value="toggle-up">&#xf151; toggle-up</option>\
                        </optgroup>\
                        <optgroup label="Video Player Icons">\
                            <option value="arrows-alt">&#xf0b2; fullscreen</option>\
                            <option value="backward">&#xf04a; backward</option>\
                            <option value="compress">&#xf066; compress</option>\
                            <option value="eject">&#xf052; eject</option>\
                            <option value="expand">&#xf065; expand</option>\
                            <option value="fast-backward">&#xf049; fast-backward</option>\
                            <option value="fast-forward">&#xf050; fast-forward</option>\
                            <option value="forward">&#xf04e; forward</option>\
                            <option value="pause">&#xf04c; pause</option>\
                            <option value="play">&#xf04b; play</option>\
                            <option value="play-circle">&#xf144; play-circle</option>\
                            <option value="play-circle-o">&#xf01d; play-circle-o</option>\
                            <option value="step-backward">&#xf048; step-backward</option>\
                            <option value="step-forward">&#xf051; step-forward</option>\
                            <option value="stop">&#xf04d; stop</option>\
                            <option value="youtube-play">&#xf16a; youtube-play</option>\
                        </optgroup>\
                        <optgroup label="Brand Icons">\
                            <option value="adn">&#xf170; adn</option>\
                            <option value="android">&#xf17b; android</option>\
                            <option value="apple">&#xf179; apple</option>\
                            <option value="behance">&#xf1b4; behance</option>\
                            <option value="behance-square">&#xf1b5; behance-square</option>\
                            <option value="bitbucket">&#xf171; bitbucket</option>\
                            <option value="bitbucket-square">&#xf172; bitbucket-square</option>\
                            <option value="bitcoin">&#xf15a; bitcoin</option>\
                            <option value="btc">&#xf15a; btc</option>\
                            <option value="codepen">&#xf1cb; codepen</option>\
                            <option value="css3">&#xf13c; css3</option>\
                            <option value="delicious">&#xf1a5; delicious</option>\
                            <option value="deviantart">&#xf1bd; deviantart</option>\
                            <option value="digg">&#xf1a6; digg</option>\
                            <option value="dribbble">&#xf17d; dribbble</option>\
                            <option value="dropbox">&#xf16b; dropbox</option>\
                            <option value="drupal">&#xf1a9; drupal</option>\
                            <option value="empire">&#xf1d1; empire</option>\
                            <option value="facebook">&#xf09a; facebook</option>\
                            <option value="facebook-square">&#xf082; facebook-square</option>\
                            <option value="flickr">&#xf16e; flickr</option>\
                            <option value="foursquare">&#xf180; foursquare</option>\
                            <option value="ge">&#xf1d1; ge</option>\
                            <option value="git">&#xf1d3; git</option>\
                            <option value="git-square">&#xf1d2; git-square</option>\
                            <option value="github">&#xf09b; github</option>\
                            <option value="github-alt">&#xf113; github-alt</option>\
                            <option value="github-square">&#xf092; github-square</option>\
                            <option value="gittip">&#xf184; gittip</option>\
                            <option value="google">&#xf1a0; google</option>\
                            <option value="google-plus">&#xf0d5; google-plus</option>\
                            <option value="google-plus-square">&#xf0d4; google-plus-square</option>\
                            <option value="hacker-news">&#xf1d4; hacker-news</option>\
                            <option value="html5">&#xf13b; html5</option>\
                            <option value="instagram">&#xf16d; instagram</option>\
                            <option value="joomla">&#xf1aa; joomla</option>\
                            <option value="jsfiddle">&#xf1cc; jsfiddle</option>\
                            <option value="linkedin">&#xf0e1; linkedin</option>\
                            <option value="linkedin-square">&#xf08c;linkedin-square</option>\
                            <option value="linux">&#xf17c; linux</option>\
                            <option value="maxcdn">&#xf136; maxcdn</option>\
                            <option value="openid">&#xf19b; openid</option>\
                            <option value="pagelines">&#xf18c; pagelines</option>\
                            <option value="pied-piper">&#xf1a7; pied-piper</option>\
                            <option value="pied-piper-alt">&#xf1a8; pied-piper-alt</option>\
                            <option value="pied-piper-square">&#xf1a7; pied-piper-square</option>\
                            <option value="pinterest">&#xf0d2; pinterest</option>\
                            <option value="pinterest-square">&#xf0d3; pinterest-square</option>\
                            <option value="qq">&#xf1d6; qq</option>\
                            <option value="ra">&#xf1d0; ra</option>\
                            <option value="rebel">&#xf1d0; rebel</option>\
                            <option value="reddit">&#xf1a1; reddit</option>\
                            <option value="reddit-square">&#xf1a2; reddit-square</option>\
                            <option value="renren">&#xf18b; renren</option>\
                            <option value="share-alt">&#xf1e0; share-alt</option>\
                            <option value="share-alt-square">&#xf1e1; share-alt-square</option>\
                            <option value="skype">&#xf17e; skype</option>\
                            <option value="slack">&#xf198; slack</option>\
                            <option value="soundcloud">&#xf1be; soundcloud</option>\
                            <option value="spotify">&#xf1bc; spotify</option>\
                            <option value="stack-exchange">&#xf18d; stack-exchange</option>\
                            <option value="stack-overflow">&#xf16c; stack-overflow</option>\
                            <option value="steam">&#xf1b6; steam</option>\
                            <option value="steam-square">&#xf1b7; steam-square</option>\
                            <option value="stumbleupon">&#xf1a4; stumbleupon</option>\
                            <option value="stumbleupon-circle">&#xf1a3; stumbleupon-circle</option>\
                            <option value="tencent-weibo">&#xf1d5; tencent-weibo</option>\
                            <option value="trello">&#xf181; trello</option>\
                            <option value="tumblr">&#xf173; tumblr</option>\
                            <option value="tumblr-square">&#xf174; tumblr-square</option>\
                            <option value="twitter">&#xf099; twitter</option>\
                            <option value="twitter-square">&#xf081; twitter-square</option>\
                            <option value="vimeo-square">&#xf194; vimeo-square</option>\
                            <option value="vine">&#xf1ca; vine</option>\
                            <option value="vk">&#xf189; vk</option>\
                            <option value="wechat">&#xf1d7; wechat</option>\
                            <option value="weibo">&#xf18a; weibo</option>\
                            <option value="weixin">&#xf1d7; weixin</option>\
                            <option value="windows">&#xf17a; windows</option>\
                            <option value="wordpress">&#xf19a; wordpress</option>\
                            <option value="xing">&#xf168; xing</option>\
                            <option value="xing-square">&#xf169; xing-square</option>\
                            <option value="yahoo">&#xf19e; yahoo</option>\
                            <option value="youtube">&#xf167; youtube</option>\
                            <option value="youtube-play">&#xf16a; youtube-play</option>\
                            <option value="youtube-square">&#xf166; youtube-square</option>\
                        </optgroup>\
                        <optgroup label="Medical Icons">\
                            <option value="ambulance">&#xf0f9; ambulance</option>\
                            <option value="h-square">&#xf0fd; h-square</option>\
                            <option value="hospital-o">&#xf0f8; hospital-o</option>\
                            <option value="medkit">&#xf0fa; medkit</option>\
                            <option value="plus-square">&#xf0fe; plus-square</option>\
                            <option value="stethoscope">&#xf0f1; stethoscope</option>\
                            <option value="user-md">&#xf0f0; user-md</option>\
                            <option value="wheelchair">&#xf193; wheelchair</option>\
                        </optgroup>\
                    </select><br />\
                <small>Select an icon.</small></td>\
            </tr>\
            <tr style="background-color:#fafafa;">\
                <th><label for="gt-icon-list-position" style="padding-left:10px;">Position</label></th>\
                <td><select name="icon-list-position" id="gt-icon-list-position">\
                    <option value="left">Left</option>\
                    <option value="right">Right</option>\
                </select><br />\
                <small>Select icon position.</small></td>\
            </tr>\
            <tr style="background-color:#fafafa;">\
                <th><label for="gt-icon-list-size" style="padding-left:10px;">Size</label></th>\
                <td><input type="text" name="icon-list-size" id="gt-icon-list-size" value="14" /><br />\
                    <small>Add icon size size (in pixels). Ex: 12,14,18 etc.</small></td>\
            </tr>\
            <tr style="background-color:#fafafa;">\
                <th><label for="gt-icon-list-color" style="padding-left:10px;">Color</label></th>\
                <td><input type="text" name="icon-list-color" id="gt-icon-list-color" value="#333" class="gt-iris color {hash:true,required:true}" /><br />\
                    <small>Select icon color.</small></td>\
            </tr>\
            <tr style="background-color:#fafafa;margin-bottom:10px;">\
                <th><label for="gt-icon-list-text" style="padding-left:10px;">Text</label></th>\
                <td><textarea name="icon-list-text" id="gt-icon-list-text" rows="5" cols="40"></textarea><br />\
                    <small>Insert required text.</small></td>\
            </tr>');
            
                $(document).find('#gt-table-icon-list').append(listItem);
                $(document).find('#gt-table-icon-list').find('.gt-iris').wpColorPicker();

            });
        });

        
        
        var iconListTable = iconListForm.find('table');
        iconListForm.appendTo('body').hide();
        
        // handles the click event of the submit button
        iconListForm.find('#gt-icon-list-submit').click(function(){
            // defines the options and their default values
            // again, this is not the most elegant way to do this
            // but well, this gets the job done nonetheless
            var iconListOptions = {
                'border'    :   'true'

            };
            var iconListShortcode = '[gt_icon_list';
            
            for( var index in iconListOptions) {
                var iconListValue = iconListTable.find('#gt-icon-list-' + index).val();
                
                // attaches the attribute to the shortcode only if it's different from the default value
                if ( iconListValue !== iconListOptions[index] )
                    iconListShortcode += ' ' + index + '="' + iconListValue + '"';
            }

            iconListShortcode += ']';

            var iconArray = jQuery( "select[name=icon-list-icon]" ).map(function() {
                    return jQuery( this ).val();
                });
            var positionArray = jQuery( 'select[name="icon-list-position"]' ).map(function() {
                    return jQuery( this ).val();
                });
            var sizeArray = jQuery( 'input[name="icon-list-size"]' ).map(function() {
                    return jQuery( this ).val();
                });
            var colorArray = jQuery( 'input[name="icon-list-color"]' ).map(function() {
                    return jQuery( this ).val();
                });
            var textArray = jQuery( 'textarea[name="icon-list-text"]' ).map(function() {
                    return jQuery( this ).val();
                });
            
            var newItemLength = jQuery( 'select[name=icon-list-icon]' ).length;
            for( var i=0; i<newItemLength; i++){
                iconListShortcode += '<br/>[gt_icon_list_item icon="'+iconArray[i]+'" position="'+positionArray[i]+'" size="'+sizeArray[i]+'" color="'+colorArray[i]+'" ]' + textArray[i] + '[/gt_icon_list_item]';
            }
            
            iconListShortcode += '<br/>[/gt_icon_list]';
            
            // inserts the shortcode into the active editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, iconListShortcode);
            
            // closes Thickbox
            tb_remove();
        });




          ////////////////////////////////////////////////////////////////////////////////
         /////////// Label Popup ////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////


        var labelForm = jQuery('<div id="gt-label-form"><table id="gt-table" class="form-table">\
            <tr>\
                <th><label for="gt-label-size">Label Size</label></th>\
                <td><select name="label-size" id="gt-label-size">\
                    <option value="default">Default</option>\
                    <option value="small">Small</option>\
                    <option value="large">Large</option>\
                </select><br />\
                <small>Select label size.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-label-type">Label Type</label></th>\
                <td><select name="label-type" id="gt-label-type">\
                    <option value="default">Default</option>\
                    <option value="primary">Primary</option>\
                    <option value="important">Important</option>\
                    <option value="success">Success</option>\
                    <option value="warning">Warning</option>\
                    <option value="info">Info</option>\
                    <option value="inverse">Inverse</option>\
                </select><br />\
                <small>Select label style type.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-label-background">Label Background</label></th>\
                <td><input type="text" name="label background color" id="gt-label-background" value="" class="gt-iris color {hash:true,required:false}" /><br />\
                    <small>Adjust background color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-label-style">Label Custom Style</label></th>\
                <td><textarea type="text" name="other style" id="gt-label-style">color:#ffffff;</textarea><br />\
                    <small>Apply custom lable style. Ex: background: #C3C3E5!important;</small></td>\
            </tr>\
        </table>\
        <p class="submit">\
            <input type="button" id="gt-label-submit" class="button-primary" value="Insert Label" name="submit" />\
        </p>\
        </div>');
        
        var labelTable = labelForm.find('table');
        labelForm.appendTo('body').hide();
        
        // handles the click event of the submit button
        labelForm.find('#gt-label-submit').click(function(){
            // defines the options and their default values
            // again, this is not the most elegant way to do this
            // but well, this gets the job done nonetheless
            var labelOptions = { 
                'size'         : '',
                'type'         : '',
                'background'   : '',
                'style'        : 'color:#ffffff;'
                
                };
            var labelShortcode = '[gtlabel';
            
            for( var index in labelOptions) {
                var labelValue = labelTable.find('#gt-label-' + index).val();
                
                // attaches the attribute to the shortcode only if it's different from the default value
                if ( labelValue !== labelOptions[index] )
                    labelShortcode += ' ' + index + '="' + labelValue + '"';
            }
            
            labelShortcode += '][/gtlabel]';
            
            // inserts the shortcode into the active editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, labelShortcode);
            
            // closes Thickbox
            tb_remove();
        });



          ////////////////////////////////////////////////////////////////////////////////
         /////////// Lazy Load Image Popup //////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////


        var lazyForm = jQuery('<div id="gt-lazy-form"><table id="gt-table" class="form-table">\
            <small style="background-color:#ffebe8;padding:10px 30px;float:left;overflow:hidden;"><span style="color:#787878;">Before adding lazy load image make sure you have setup lazy load options properly on plugin options page available here - Dashboard > Settings > GT Shortcodes.</span></small>\
            <tr>\
                <th><label for="gt-lazy-original">Image URL</label></th>\
                <td><input type="text" name="Original Image" id="gt-lazy-original" /><br />\
                    <small>Add image url.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-lazy-width">Image Width (optional)</label></th>\
                <td><input type="text" name="Image Width" id="gt-lazy-width" /><br />\
                    <small>Add image width in pixels.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-lazy-height">Image Height (optional)</label></th>\
                <td><input type="text" name="Image Height" id="gt-lazy-height" /><br />\
                    <small>Add alt text for image.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-lazy-alt">Image alt (optional)</label></th>\
                <td><input type="text" name="Image alt" id="gt-lazy-alt" /><br />\
                    <small>Add image alt in pixels.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-lazy-style">Custom Style</label></th>\
                <td><textarea name="Custom Style" id="gt-lazy-style"></textarea><br />\
                    <small>Apply custom style to image.</small></td>\
            </tr>\
        </table>\
        <p class="submit">\
            <input type="button" id="gt-lazy-submit" class="button-primary" value="Insert Lazy Load Image" name="submit" />\
        </p>\
        </div>');
        
        var lazyTable = lazyForm.find('table');
        lazyForm.appendTo('body').hide();
        
        // handles the click event of the submit button
        lazyForm.find('#gt-lazy-submit').click(function(){
            // defines the options and their default values
            // again, this is not the most elegant way to do this
            // but well, this gets the job done nonetheless
            var lazyOptions = { 
                'original'      : '',
                'width'         : '',
                'height'        : '',
                'alt'           : '',
                'style'         : ''
                
                };
            var lazyShortcode = '[gtlazy';
            
            for( var index in lazyOptions) {
                var lazyValue = lazyTable.find('#gt-lazy-' + index).val();
                
                // attaches the attribute to the shortcode only if it's different from the default value
                if ( lazyValue !== lazyOptions[index] )
                    lazyShortcode += ' ' + index + '="' + lazyValue + '"';
            }
            
            lazyShortcode += ']';
            
            // inserts the shortcode into the active editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, lazyShortcode);
            
            // closes Thickbox
            tb_remove();
        });



          ////////////////////////////////////////////////////////////////////////////////
         /////////// Popover Popup //////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////


        var popoverForm = jQuery('<div id="gt-popover-form"><table id="gt-table" class="form-table">\
            <tr>\
                <th><label for="gt-popover-class">Popover Button Type</label></th>\
                <td><select name="popover-class" id="gt-popover-class">\
                    <option value="default">Default</option>\
                    <option value="primary">Primary</option>\
                    <option value="warning">Warning</option>\
                    <option value="success">Success</option>\
                    <option value="danger">Danger</option>\
                    <option value="inverse">Inverse</option>\
                    <option value="info">Info</option>\
                    <option value="social-facebook">Facebook</option>\
                    <option value="social-twitter">Twitter</option>\
                    <option value="social-googleplus">Googleplus</option>\
                    <option value="social-pinterest">Pinterest</option>\
                    <option value="social-linkedin">Linkedin</option>\
                    <option value="social-stumbleupon">Stumbleupon</option>\
                    <option value="social-skype">Skype</option>\
                    <option value="social-path">Path</option>\
                    <option value="social-myspace">Myspace</option>\
                    <option value="social-youtube">Youtube</option>\
                    <option value="social-vimeo">Vimeo</option>\
                    <option value="social-spotify">Spotify</option>\
                    <option value="social-dribbble">Dribbble</option>\
                    <option value="social-blogger">Blogger</option>\
                    <option value="social-behance">Behance</option>\
                </select><br />\
                <small>Select popover position.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-popover-position">Popover Position</label></th>\
                <td><select name="popover-position" id="gt-popover-position">\
                    <option value="top">Top</option>\
                    <option value="right">Right</option>\
                    <option value="left">Left</option>\
                    <option value="bottom">Bottom</option>\
                </select><br />\
                <small>Select popover position.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-popover-title">Popover Title</label></th>\
                <td><input type="text" name="popover title" id="gt-popover-title" value="" /><br />\
                    <small>Add popover title.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-popover-content">Popover Content</label></th>\
                <td><textarea type="text" name="popover content" id="gt-popover-content"></textarea><br />\
                    <small>Add popover content.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-popover-background">Popover Button Background</label></th>\
                <td><input type="text" name="popover background color" id="gt-popover-background" value="" class="gt-iris color {hash:true,required:false}" /><br />\
                    <small>Adjust background color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-popover-style">Popover Button Style</label></th>\
                <td><input type="text" name="popover style" id="gt-popover-style" value="color:white;" /><br />\
                    <small>Apply style to popover. Ex: color:white;</small></td>\
            </tr>\
        </table>\
        <p class="submit">\
            <input type="button" id="gt-popover-submit" class="button-primary" value="Insert Popover" name="submit" />\
        </p>\
        </div>');
        
        var popoverTable = popoverForm.find('table');
        popoverForm.appendTo('body').hide();
        
        // handles the click event of the submit button
        popoverForm.find('#gt-popover-submit').click(function(){
            // defines the options and their default values
            // again, this is not the most elegant way to do this
            // but well, this gets the job done nonetheless
            var popoverOptions = { 
                'class'       : 'default',
                'position'    : 'top',
                'title'       : 'Popover',
                'content'     : 'Popover content',
                'background'  : '',
                'style' : 'color:white;'
                };

            var popoverShortcode = '[gtpopover';
            
            for( var index in popoverOptions) {
                var popoverValue = popoverTable.find('#gt-popover-' + index).val();
                
                // attaches the attribute to the shortcode only if it's different from the default value
                if ( popoverValue !== popoverOptions[index] )
                    popoverShortcode += ' ' + index + '="' + popoverValue + '"';
            }
            
            popoverShortcode += '][/gtpopover]';
            
            // inserts the shortcode into the active editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, popoverShortcode);
            
            // closes Thickbox
            tb_remove();
        });



          ////////////////////////////////////////////////////////////////////////////////
         /////////// Pricing Table Popup ////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////


        var pricingtableForm = jQuery('<div id="gt-pricingtable-form"><table id="gt-table" class="form-table">\
            <small style="background-color:#ffebe8;padding:10px 30px;float:left;overflow:hidden;"><span style="color:#787878;">Make sure to enable pricing table stylesheet from options panel available here - Dashboard > Settings > GT Shortcodes.</span></small>\
            <tr>\
                <th><label for="gt-pricingtable-id">Pricing Table ID</label></th>\
                <td><input type="text" name="Pricing Table ID" id="gt-pricingtable-id" value="pt1"/><br />\
                    <small>Select unique ID for pricing table. It is needed when changing default colors. Example: pricingtable1.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-pricingtable-cols">Pricing Table Columns</label></th>\
                <td><select name="pricing-table-columns" id="gt-pricingtable-cols">\
                    <option value="1">One Column</option>\
                    <option value="2">Two Columns</option>\
                    <option value="3" selected>Three Columns</option>\
                    <option value="4">Four Columns</option>\
                    <option value="5">Five Columns</option>\
                    <option value="6">Six Columns</option>\
                    <option value="7">Seven Columns</option>\
                </select><br />\
                <small>Select pricing table columns.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-pricingtable-featured">Pricing Table Featured Column</label></th>\
                <td><select name="pricing-table-featured" id="gt-pricingtable-featured">\
                    <option value="0">First Column</option>\
                    <option value="1" selected>Second Column</option>\
                    <option value="2">Third Column</option>\
                    <option value="3">Fourth Column</option>\
                    <option value="4">Fifth Column</option>\
                    <option value="5">Sixth Column</option>\
                    <option value="6">Seventh Column</option>\
                </select><br />\
                <small>Enter the featured column number. This column will be highlighted. So if you have 3 columns, then select among first, second or third column.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-pricingtable-bg">Column Background</label></th>\
                <td><input type="text" name="Column Background Color" id="gt-pricingtable-bg" class="gt-iris color {hash:true,required:false}" value="#FFFFFF" /><br />\
                    <small>Choose the desired column background color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-pricingtable-feat_bg">Featured Column Background</label></th>\
                <td><input type="text" name="Featured Column Background Color" id="gt-pricingtable-feat_bg" class="gt-iris color {hash:true,required:false}" value="#FFFFFF" /><br />\
                    <small>Choose the desired featured column background color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-pricingtable-price_row">Enable Price Row Style</label></th>\
                <td><select name="pricing-table-price_row" id="gt-pricingtable-price_row">\
                    <option value="yes">Yes</option>\
                    <option value="no">No</option>\
                </select><br />\
                <small>Enable or Disable price row style.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-pricingtable-price_row_pos">Price Row Position</label></th>\
                <td><input type="text" name="Price Row Position" id="gt-pricingtable-price_row_pos" value="2"/><br />\
                    <small>If price row is enabled above, enter the row to apply price row style.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-pricingtable-head_bg">Head Row Background</label></th>\
                <td><input type="text" name="Head Row Background" id="gt-pricingtable-head_bg" class="gt-iris color {hash:true,required:false}" value="" /><br />\
                    <small>Choose the desired background color for the very first row in each column.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-pricingtable-feat_head_bg">Featured Head Row Background</label></th>\
                <td><input type="text" name="Featured Head Row Background" id="gt-pricingtable-feat_head_bg" class="gt-iris color {hash:true,required:false}" value="" /><br />\
                    <small>Choose the desired background color for the very first row in featured column.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-pricingtable-feat_amt_bg">Featured Column Price Row Background</label></th>\
                <td><input type="text" name="Featured Column Price Row Background" id="gt-pricingtable-feat_amt_bg" class="gt-iris color {hash:true,required:false}" value="#F7F7F7" /><br />\
                    <small>Choose the desired featured column price row background color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-pricingtable-price_bg">Price Row Background</label></th>\
                <td><input type="text" name="Price Row Background" id="gt-pricingtable-price_bg" class="gt-iris color {hash:true,required:false}" value="#F7F7F7" /><br />\
                    <small>Choose the desired price row background color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-pricingtable-border_size">Column Border Size</label></th>\
                <td><input type="text" name="Column Border Size" id="gt-pricingtable-border_size" value="2"/><br />\
                    <small>Enter the desired column border size (in pixels).</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-pricingtable-border_color">Column Border Color</label></th>\
                <td><input type="text" name="Column Border Color" id="gt-pricingtable-border_color" class="gt-iris color {hash:true,required:false}" value="#EBECE8" /><br />\
                    <small>Choose the desired column border color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-pricingtable-border_radius">Column Border Radius</label></th>\
                <td><input type="text" name="Column Border Radius" id="gt-pricingtable-border_radius" value="6"/><br />\
                    <small>Enter the desired column border radius (in pixels).</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-pricingtable-feat_border_size">Featured Column Border Size</label></th>\
                <td><input type="text" name="Featured Column Border Size" id="gt-pricingtable-feat_border_size" value="2"/><br />\
                    <small>Enter the desired featured column border size (in pixels).</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-pricingtable-feat_border_color">Featured Column Border Color</label></th>\
                <td><input type="text" name="Featured Column Border Color" id="gt-pricingtable-feat_border_color" class="gt-iris color {hash:true,required:false}" value="#EBECE8" /><br />\
                    <small>Choose the desired featured column border color.</small></td>\
            </tr>\
        </table>\
        <p class="submit">\
            <input type="button" id="gt-pricingtable-submit" class="button-primary" value="Insert Pricing Table" name="submit" />\
        </p>\
        </div>');
        
        var pricingtableTable = pricingtableForm.find('table');
        pricingtableForm.appendTo('body').hide();
        
        // handles the click event of the submit button
        pricingtableForm.find('#gt-pricingtable-submit').click(function(){
            // defines the options and their default values
            // again, this is not the most elegant way to do this
            // but well, this gets the job done nonetheless
            var pricingtableOptions = { 
                'id'        : 'pt1',
                'cols'        : '3',
                'featured'    : '1',
                'bg'          : '#FFFFFF',
                'feat_bg'     : '#FFFFFF',
                'price_row' : 'yes',
                'price_row_pos' : '2',
                'head_bg' : '',
                'feat_head_bg' : '',
                'feat_amt_bg' : '#F7F7F7',
                'price_bg' : '#F7F7F7',
                'border_size' : '2',
                'border_color' : '#EBECE8',
                'border_radius' : '6',
                'feat_border_size' : '2',
                'feat_border_color' : '#EBECE8',
                };
            var pricingtableShortcode = '[gtptable';
            
            for( var index in pricingtableOptions) {
                var pricingtableValue = pricingtableTable.find('#gt-pricingtable-' + index).val();
                
                // attaches the attribute to the shortcode only if it's different from the default value
                if ( pricingtableValue !== pricingtableOptions[index] )
                    pricingtableShortcode += ' ' + index + '="' + pricingtableValue + '"';
            }
            
            pricingtableShortcode += '][/gtptable]';
            
            // inserts the shortcode into the active editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, pricingtableShortcode);
            
            // closes Thickbox
            tb_remove();
        });



          ////////////////////////////////////////////////////////////////////////////////
         /////////// Progress Bar Popup ////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////


        var progressbarForm = jQuery('<div id="gt-progressbar-form"><table id="gt-table" class="form-table">\
            <small style="background-color:#ffebe8;padding:10px 30px;float:left;overflow:hidden;"><span style="color:#787878;">Make sure to enable progress bar script and bootstrap stylesheet from options panel available here - Dashboard > Settings > GT Shortcodes.</span></small>\
            <tr>\
                <th colspan="1"><label for="gt-progressbar-id">Progress Bar ID</label></th>\
                <td colspan="2"><input type="text" name="Progress Bar id" id="gt-progressbar-id" value="gtpb" /><br />\
                    <small>Assign unique id.</small></td>\
            </tr>\
            <tr>\
                <th colspan="1"><label for="gt-progressbar-size">Progress Bar Size</label></th>\
                <td colspan="2"><select name="progressbar-size" id="gt-progressbar-size">\
                    <option value="small">Small</option>\
                    <option value="medium" selected>Medium</option>\
                    <option value="large">Large</option>\
                    <option value="huge">Huge</option>\
                </select><br />\
                <small>Select progress bar color type.</small></td>\
            </tr>\
            <tr>\
                <th colspan="1"><label for="gt-progressbar-type">Progress Bar Type</label></th>\
                <td colspan="2"><select name="progressbar-type" id="gt-progressbar-type">\
                    <option value="left">Left</option>\
                    <option value="right">Right</option>\
                </select><br />\
                <small>Select the type of progress bar, left aligned or right aligned.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-progressbar-background_color">Background Color</label></th>\
                <td><input type="text" name="Progressbar background_color" id="gt-progressbar-background_color" class="gt-iris color {hash:true,required:true}" value="#EBEDEF"/><br />\
                <small>Choose custom background color from color picker.</small></td>\
            </tr>\
            <tr>\
                <th colspan="1"><label for="gt-progressbar-stripes">Progress Bar Stripes</label></th>\
                <td colspan="2"><select name="progressbar-stripes" id="gt-progressbar-stripes">\
                    <option value="none">None</option>\
                    <option value="fixed">Fixed</option>\
                    <option value="animated">Animated</option>\
                </select><br />\
                <small>Select whether or not to display stripes.</small></td>\
            </tr>\
            <tr>\
                <th colspan="1"><label for="gt-progressbar-border_radius">Border Radius</label></th>\
                <td colspan="2"><input type="text" name="Progress Bar Border Radius" id="gt-progressbar-border_radius" value="2"/><br />\
                    <small>Add border radius (in pixels). Ex: 2,4,6,8, etc.</small></td>\
            </tr>\
            <tr>\
                <th colspan="1"><label for="gt-progressbar-delay">Animation Delay</label></th>\
                <td colspan="2"><input type="text" name="Progress Bar Animation Delay" id="gt-progressbar-delay" value="300"/><br />\
                    <small>Add animation delay (in milliseconds). Ex: 500,1000,1500, etc.</small></td>\
            </tr>\
            <tr>\
                <th colspan="1"><label for="gt-progressbar-text_align">Text Alignment</label></th>\
                <td colspan="2"><select name="progressbar-text_align" id="gt-progressbar-text_align">\
                    <option value="left">Left</option>\
                    <option value="center">Center</option>\
                    <option value="right">Right</option>\
                </select><br />\
                <small>Select the direction where you would like to align text.</small></td>\
            </tr>\
            <tr>\
                <th colspan="1"><label for="gt-progressbar-text">Display Percentage or Amount as Text? (required)</label></th>\
                <td colspan="2"><select name="progressbar-text" id="gt-progressbar-text">\
                    <option value=""></option>\
                    <option value="yes">Yes</option>\
                    <option value="no">No</option>\
                </select><br />\
                <small>Select whether to display text or not. If you select "Yes" then percentage / amount will be displayed as text. If you select "No" then you will have the option to add custom text for each partition as custom text field will be added to each partition.</small></td>\
            </tr>\
            <tr id="gt-progressbar-peramt">\
                <th colspan="1"><label for="gt-progressbar-percent">Display Text as Percentage or Amount?</label></th>\
                <td colspan="2"><select name="progressbar-percent" id="gt-progressbar-percent">\
                    <option value="percentage">Percentage</option>\
                    <option value="amount">Amount</option>\
                </select><br />\
                <small>Select whether you would like to display percentage as text or amount. If true percentage will be displayed and if false amount will be displayed. Percentage example : 75% and Amount example : 75 / 100. If you want custom text for each partition then choose "no" for "display text" field above.</small></td>\
            </tr>\
            <tr id="gt-progressbar-peramt-ct">\
                <th colspan="1"><label for="gt-progressbar-custom_text">Custom Text after Percentage or Amount</label></th>\
                <td colspan="2"><input type="text" name="Progress Bar custom_text" id="gt-progressbar-custom_text" value=""/><br />\
                    <small>Append text to the precentage number. If you have a width of 10 then the text added here will be displayed as "10custom text". So give a space before text or use it like "10% custom text".</small></td>\
            </tr>\
            <tr>\
                <th colspan="1"><label for="gt-progressbar-animation_trigger">Animation Trigger</label></th>\
                <td colspan="2"><select name="progressbar-animation_trigger" id="gt-progressbar-animation_trigger">\
                    <option value="pageload">On Page Load</option>\
                    <option value="pagescroll">On Page Scroll</option>\
                </select><br />\
                <small>Select when to trigger animation.</small></td>\
            </tr>\
            <tr>\
                <th colspan="1"><label for="gt-progressbar-animation_duration">Animation Duration</label></th>\
                <td colspan="2"><input type="text" name="Progress Bar Animation Duration" id="gt-progressbar-animation_duration" value="2"/><br />\
                    <small>Enter animation duration (in seconds). Ex: 1,2,3,4,5, etc.</small></td>\
            </tr>\
            <tr>\
                <th colspan="1"><label for="gt-progressbar-animation_type">Animation Type</label></th>\
                <td colspan="2"><select name="progressbar-animation_type" id="gt-progressbar-animation_type">\
                    <option value="linear">Linear</option>\
                    <option value="ease" selected>Ease</option>\
                    <option value="ease-in">Ease-In</option>\
                    <option value="ease-out">Ease-Out</option>\
                    <option value="ease-in-out">Ease-In-Out</option>\
                </select><br />\
                <small>Select the animation type.</small></td>\
            </tr>\
            <tr>\
                <th colspan="1"><label for="gt-progressbar-secondary_text">Secondary Text</label></th>\
                <td colspan="2"><input type="text" name="Progress Bar Secondary Text" id="gt-progressbar-secondary_text" value=""/><br />\
                    <small>This text will appear in the empty bar area.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-progressbar-secondary_text_color">Secondary Text Color</label></th>\
                <td><input type="text" name="Progressbar secondary_text_color" id="gt-progressbar-secondary_text_color" class="gt-iris color {hash:true,required:true}" value="#FFFFFF"/><br />\
                <small>Choose text color from color picker.</small></td>\
            </tr>\
            <tr>\
                <th colspan="1"><label for="gt-progressbar-secondary_text_align">Secondary Text Alignment</label></th>\
                <td colspan="2"><select name="progressbar-secondary_text_align" id="gt-progressbar-secondary_text_align">\
                    <option value="left">Left</option>\
                    <option value="center">Center</option>\
                    <option value="right">Right</option>\
                </select><br />\
                <small>Select the direction where you would like to align secondary text.</small></td>\
            </tr>\
            <tr>\
                <th colspan="1"><label for="gt-progressbar-part_count">How much Partition? (required)</label></th>\
                <td colspan="2"><select name="progressbar-part_count" id="part_count">\
                    <option value="0">0</option>\
                    <option value="1">1</option>\
                    <option value="2">2</option>\
                    <option value="3">3</option>\
                    <option value="4">4</option>\
                    <option value="5">5</option>\
                    <option value="6">6</option>\
                    <option value="7">7</option>\
                    <option value="8">8</option>\
                    <option value="9">9</option>\
                    <option value="10">10</option>\
                </select><br />\
                <small>Select the amount of stacks in a progress bar.</small></td>\
            </tr>\
            <tr id="part-1">\
                <th><label for="gt-progressbar-class1">Stack 1</label></th>\
                <td width="50px"><select name="progressbar-class1" id="gt-progressbar-class1">\
                    <option value="">Default</option>\
                    <option value="success">Success</option>\
                    <option value="warning">Warning</option>\
                    <option value="danger">Danger</option>\
                    <option value="info">Info</option>\
                </select><br />\
                <small>Select pre-defined color.</small></td>\
                <td><input type="text" name="Progressbar color1" id="gt-progressbar-color1" class="gt-iris color {hash:true,required:false}"  size="10"/><br />\
                <small>Choose Custom color from color picker.</small></td>\
                <td><input type="text" id="gt-progressbar-width1" name="progressbar-width1" value="40" size="10"/><br />\
                <small>Assign Width. Example: 10,20,etc.</small></td>\
                <td class="gtpb-custom-text"><input type="text" id="gt-progressbar-text1" name="progressbar-text1" value="" size="5"/><br />\
                <small>Assign custom text.</small></td>\
            </tr>\
            <tr id="part-2">\
                <th><label for="gt-progressbar-class2">Stack 2</label></th>\
                <td width="50px"><select name="progressbar-class2" id="gt-progressbar-class2">\
                    <option value="">Default</option>\
                    <option value="success">Success</option>\
                    <option value="warning">Warning</option>\
                    <option value="danger">Danger</option>\
                    <option value="info">Info</option>\
                </select><br />\
                <small>Select pre-defined color.</small></td>\
                <td><input type="text" name="Progressbar color2" id="gt-progressbar-color2" class="gt-iris color {hash:true,required:false}"  size="10"/><br />\
                <small>Choose Custom color from color picker.</small></td>\
                <td><input type="text" id="gt-progressbar-width2" name="progressbar-width2" value="" size="10"/><br />\
                <small>Assign Width. Example: 10,20,etc.</small></td>\
                <td class="gtpb-custom-text"><input type="text" id="gt-progressbar-text2" name="progressbar-text2" value="" size="5"/><br />\
                <small>Assign custom text.</small></td>\
            </tr>\
            <tr id="part-3">\
                <th><label for="gt-progressbar-class3">Stack 3</label></th>\
                <td width="50px"><select name="progressbar-class3" id="gt-progressbar-class3">\
                    <option value="">Default</option>\
                    <option value="success">Success</option>\
                    <option value="warning">Warning</option>\
                    <option value="danger">Danger</option>\
                    <option value="info">Info</option>\
                </select><br />\
                <small>Select pre-defined color.</small></td>\
                <td><input type="text" name="Progressbar color3" id="gt-progressbar-color3" class="gt-iris color {hash:true,required:false}"  size="10"/><br />\
                <small>Choose Custom color from color picker.</small></td>\
                <td><input type="text" id="gt-progressbar-width3" name="progressbar-width3" value="" size="10"/><br />\
                <small>Assign Width. Example: 10,20,etc.</small></td>\
                <td class="gtpb-custom-text"><input type="text" id="gt-progressbar-text3" name="progressbar-text3" value="" size="5"/><br />\
                <small>Assign custom text.</small></td>\
            </tr>\
            <tr id="part-4">\
                <th><label for="gt-progressbar-class4">Stack 4</label></th>\
                <td width="50px"><select name="progressbar-class4" id="gt-progressbar-class4">\
                    <option value="">Default</option>\
                    <option value="success">Success</option>\
                    <option value="warning">Warning</option>\
                    <option value="danger">Danger</option>\
                    <option value="info">Info</option>\
                </select><br />\
                <small>Select pre-defined color.</small></td>\
                <td><input type="text" name="Progressbar color4" id="gt-progressbar-color4" class="gt-iris color {hash:true,required:false}"  size="10"/><br />\
                <small>Choose Custom color from color picker.</small></td>\
                <td><input type="text" id="gt-progressbar-width4" name="progressbar-width4" value="" size="10"/><br />\
                <small>Assign Width. Example: 10,20,etc.</small></td>\
                <td class="gtpb-custom-text"><input type="text" id="gt-progressbar-text4" name="progressbar-text4" value="" size="5"/><br />\
                <small>Assign custom text.</small></td>\
            </tr>\
            <tr id="part-5">\
                <th><label for="gt-progressbar-class5">Stack 5</label></th>\
                <td width="50px"><select name="progressbar-class5" id="gt-progressbar-class5">\
                    <option value="">Default</option>\
                    <option value="success">Success</option>\
                    <option value="warning">Warning</option>\
                    <option value="danger">Danger</option>\
                    <option value="info">Info</option>\
                </select><br />\
                <small>Select pre-defined color.</small></td>\
                <td><input type="text" name="Progressbar color5" id="gt-progressbar-color5" class="gt-iris color {hash:true,required:false}"  size="10"/><br />\
                <small>Choose Custom color from color picker.</small></td>\
                <td><input type="text" id="gt-progressbar-width5" name="progressbar-width5" value="" size="10"/><br />\
                <small>Assign Width. Example: 10,20,etc.</small></td>\
                <td class="gtpb-custom-text"><input type="text" id="gt-progressbar-text5" name="progressbar-text5" value="" size="5"/><br />\
                <small>Assign custom text.</small></td>\
            </tr>\
            <tr id="part-6">\
                <th><label for="gt-progressbar-class6">Stack 6</label></th>\
                <td width="50px"><select name="progressbar-class6" id="gt-progressbar-class6">\
                    <option value="">Default</option>\
                    <option value="success">Success</option>\
                    <option value="warning">Warning</option>\
                    <option value="danger">Danger</option>\
                    <option value="info">Info</option>\
                </select><br />\
                <small>Select pre-defined color.</small></td>\
                <td><input type="text" name="Progressbar color6" id="gt-progressbar-color6" class="gt-iris color {hash:true,required:false}"  size="10"/><br />\
                <small>Choose Custom color from color picker.</small></td>\
                <td><input type="text" id="gt-progressbar-width6" name="progressbar-width6" value="" size="10"/><br />\
                <small>Assign Width. Example: 10,20,etc.</small></td>\
                <td class="gtpb-custom-text"><input type="text" id="gt-progressbar-text6" name="progressbar-text6" value="" size="5"/><br />\
                <small>Assign custom text.</small></td>\
            </tr>\
            <tr id="part-7">\
                <th><label for="gt-progressbar-class7">Stack 7</label></th>\
                <td width="50px"><select name="progressbar-class7" id="gt-progressbar-class7">\
                    <option value="">Default</option>\
                    <option value="success">Success</option>\
                    <option value="warning">Warning</option>\
                    <option value="danger">Danger</option>\
                    <option value="info">Info</option>\
                </select><br />\
                <small>Select pre-defined color.</small></td>\
                <td><input type="text" name="Progressbar color7" id="gt-progressbar-color7" class="gt-iris color {hash:true,required:false}"  size="10"/><br />\
                <small>Choose Custom color from color picker.</small></td>\
                <td><input type="text" id="gt-progressbar-width7" name="progressbar-width7" value="" size="10"/><br />\
                <small>Assign Width. Example: 10,20,etc.</small></td>\
                <td class="gtpb-custom-text"><input type="text" id="gt-progressbar-text7" name="progressbar-text7" value="" size="5"/><br />\
                <small>Assign custom text.</small></td>\
            </tr>\
            <tr id="part-8">\
                <th><label for="gt-progressbar-class8">Stack 8</label></th>\
                <td width="50px"><select name="progressbar-class8" id="gt-progressbar-class8">\
                    <option value="">Default</option>\
                    <option value="success">Success</option>\
                    <option value="warning">Warning</option>\
                    <option value="danger">Danger</option>\
                    <option value="info">Info</option>\
                </select><br />\
                <small>Select pre-defined color.</small></td>\
                <td><input type="text" name="Progressbar color8" id="gt-progressbar-color8" class="gt-iris color {hash:true,required:false}"  size="10"/><br />\
                <small>Choose Custom color from color picker.</small></td>\
                <td><input type="text" id="gt-progressbar-width8" name="progressbar-width8" value="" size="10"/><br />\
                <small>Assign Width. Example: 10,20,etc.</small></td>\
                <td class="gtpb-custom-text"><input type="text" id="gt-progressbar-text8" name="progressbar-text8" value="" size="5"/><br />\
                <small>Assign custom text.</small></td>\
            </tr>\
            <tr id="part-9">\
                <th><label for="gt-progressbar-class9">Stack 9</label></th>\
                <td width="50px"><select name="progressbar-class9" id="gt-progressbar-class9">\
                    <option value="">Default</option>\
                    <option value="success">Success</option>\
                    <option value="warning">Warning</option>\
                    <option value="danger">Danger</option>\
                    <option value="info">Info</option>\
                </select><br />\
                <small>Select pre-defined color.</small></td>\
                <td><input type="text" name="Progressbar color9" id="gt-progressbar-color9" class="gt-iris color {hash:true,required:false}"  size="10"/><br />\
                <small>Choose Custom color from color picker.</small></td>\
                <td><input type="text" id="gt-progressbar-width9" name="progressbar-width9" value="" size="10"/><br />\
                <small>Assign Width. Example: 10,20,etc.</small></td>\
                <td class="gtpb-custom-text"><input type="text" id="gt-progressbar-text9" name="progressbar-text9" value="" size="5"/><br />\
                <small>Assign custom text.</small></td>\
            </tr>\
            <tr id="part-10">\
                <th><label for="gt-progressbar-class10" size="10">Stack 10</label></th>\
                <td width="50px"><select name="progressbar-class10" id="gt-progressbar-class10">\
                    <option value="">Default</option>\
                    <option value="success">Success</option>\
                    <option value="warning">Warning</option>\
                    <option value="danger">Danger</option>\
                    <option value="info">Info</option>\
                </select><br />\
                <small>Select pre-defined color.</small></td>\
                <td><input type="text" name="Progressbar color10" id="gt-progressbar-color10" class="gt-iris color {hash:true,required:false}"  size="5"/><br />\
                <small>Choose Custom color from color picker.</small></td>\
                <td><input type="text" id="gt-progressbar-width10" name="progressbar-width10" value="" size="5"/><br />\
                <small>Assign Width. Example: 10,20,etc.</small></td>\
                <td class="gtpb-custom-text"><input type="text" id="gt-progressbar-text10" name="progressbar-text10" value="" size="5"/><br />\
                <small>Assign custom text.</small></td>\
            </tr>\
        </table>\
        <p class="submit">\
            <input type="button" id="gt-progressbar-submit" class="button-primary" value="Insert Progress Bar" name="submit" />\
        </p>\
        </div>');

        jQuery(document).ready(function($){
            $('#gt-progressbar-peramt,#gt-progressbar-peramt-ct').hide();
            $('.gtpb-custom-text').hide();
            $('#gt-progressbar-text').change(function(index){
                $('#gt-progressbar-text').each(function(index){

                    if($('#gt-progressbar-text').val()=='yes'){
                        $('#gt-progressbar-peramt,#gt-progressbar-peramt-ct').show('slow');
                        $('.gtpb-custom-text').hide();
                    }else if($('#gt-progressbar-text').val()=='no'){
                        $('#gt-progressbar-peramt,#gt-progressbar-peramt-ct').hide();
                        $('.gtpb-custom-text').show('slow');
                    }else {
                        $('#gt-progressbar-peramt,#gt-progressbar-peramt-ct').hide();
                        $('.gtpb-custom-text').hide();
                    }

                });
            });
            $('#part-1,#part-2,#part-3,#part-4,#part-5,#part-6,#part-7,#part-8,#part-9,#part-10').hide();
            $('#part_count').change(function(index){
                $('#part_count').each(function(index){
                    if($('#part_count').val()=='1'){
                        $('#part-1').show('slow');
                        $('#part-2,#part-3,#part-4,#part-5,#part-6,#part-7,#part-8,#part-9,#part-10').hide();
                    }else if($('#part_count').val()=='2'){
                        $('#part-1,#part-2').show('slow');
                        $('#part-3,#part-4,#part-5,#part-6,#part-7,#part-8,#part-9,#part-10').hide();
                    }
                    else if($('#part_count').val()=='3'){
                        $('#part-1,#part-2,#part-3').show('slow');
                        $('#part-4,#part-5,#part-6,#part-7,#part-8,#part-9,#part-10').hide();
                    }else if($('#part_count').val()=='4'){
                        $('#part-1,#part-2,#part-3,#part-4').show('slow');
                        $('#part-5,#part-6,#part-7,#part-8,#part-9,#part-10').hide();
                    }else if($('#part_count').val()=='5'){
                        $('#part-1,#part-2,#part-3,#part-4,#part-5').show('slow');
                        $('#part-6,#part-7,#part-8,#part-9,#part-10').hide();
                    }else if($('#part_count').val()=='6'){
                        $('#part-1,#part-2,#part-3,#part-4,#part-5,#part-6').show('slow');
                        $('#part-7,#part-8,#part-9,#part-10').hide();
                    }else if($('#part_count').val()=='7'){
                        $('#part-1,#part-2,#part-3,#part-4,#part-5,#part-6,#part-7').show('slow');
                        $('#part-8,#part-9,#part-10').hide();
                    }else if($('#part_count').val()=='8'){
                        $('#part-1,#part-2,#part-3,#part-4,#part-5,#part-6,#part-7,#part-8').show('slow');
                        $('#part-9,#part-10').hide();
                    }else if($('#part_count').val()=='9'){
                        $('#part-1,#part-2,#part-3,#part-4,#part-5,#part-6,#part-7,#part-8,#part-9').show('slow');
                        $('#part-10').hide();
                    }else if($('#part_count').val()=='10'){
                        $('#part-1,#part-2,#part-3,#part-4,#part-5,#part-6,#part-7,#part-8,#part-9,#part-10').show('slow');
                    }else{
                        $('#part-1,#part-2,#part-3,#part-4,#part-5,#part-6,#part-7,#part-8,#part-9,#part-10').hide();
                    }
                });
            });
        });
        
        var progressbarTable = progressbarForm.find('table');
        progressbarForm.appendTo('body').hide();
        
        // handles the click event of the submit button
        progressbarForm.find('#gt-progressbar-submit').click(function(){
            // defines the options and their default values
            // again, this is not the most elegant way to do this
            // but well, this gets the job done nonetheless
            var progressbarOptions = { 
                'id'            : 'gtpb',
                'size'          : 'medium',
                'type'          : 'left',
                'background_color': '#EBEDEF',
                'stripes'       : 'none',
                'border_radius' : '2',
                'delay'         : '300',
                'text'          : 'no',
                'text_align'    : 'left',
                'percent'       : 'percentage',
                'custom_text'   : '',
                'animation_trigger': 'pagescroll',
                'animation_duration': '2',
                'animation_type': 'ease',
                'secondary_text': '',
                'secondary_text_color': '#FFFFFF',
                'secondary_text_align': 'left',
                'class1'        : '',
                'class2'        : '',
                'class3'        : '',
                'class4'        : '',
                'class5'        : '',
                'class6'        : '',
                'class7'        : '',
                'class8'        : '',
                'class9'        : '',
                'class10'       : '',
                'width1'        : '40',
                'width2'        : '',
                'width3'        : '',
                'width4'        : '',
                'width5'        : '',
                'width6'        : '',
                'width7'        : '',
                'width8'        : '',
                'width9'        : '',
                'width10'       : '',
                'color1'        : '',
                'color2'        : '',
                'color3'        : '',
                'color4'        : '',
                'color5'        : '',
                'color6'        : '',
                'color7'        : '',
                'color8'        : '',
                'color9'        : '',
                'color10'       : '',
                'text1'         : '',
                'text2'         : '',
                'text3'         : '',
                'text4'         : '',
                'text5'         : '',
                'text6'         : '',
                'text7'         : '',
                'text8'         : '',
                'text9'         : '',
                'text10'        : ''
                
                };
            var progressbarShortcode = '[gtprogress';
            
            for( var index in progressbarOptions) {
                var progressbarValue = progressbarTable.find('#gt-progressbar-' + index).val();
                
                // attaches the attribute to the shortcode only if it's different from the default value
                if ( progressbarValue !== progressbarOptions[index] )
                    progressbarShortcode += ' ' + index + '="' + progressbarValue + '"';
            }
            
            progressbarShortcode += ']';
            
            // inserts the shortcode into the active editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, progressbarShortcode);
            
            // closes Thickbox
            tb_remove();
        });



          ////////////////////////////////////////////////////////////////////////////////
         /////////// QR Code Popup ////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////


        var qrcodesForm = jQuery('<div id="gt-qrcodes-form"><table id="gt-table" class="form-table">\
            <tr>\
                <th><label for="gt-qrcodes-type">Type</label></th>\
                <td><select name="qrcodes-type" id="gt-qrcodes-type">\
                    <option value=""></option>\
                    <option value="current_page">Current Page</option>\
                    <option value="url">Custom URL</option>\
                    <option value="bc">Business Card</option>\
                    <option value="content">Text</option>\
                    <option value="phone">Phone Number</option>\
                    <option value="sms">SMS</option>\
                </select><br />\
                <small>Select QR code type.</small></td>\
            </tr>\
            <tr id="gt-qrcodes-url-tr">\
                <th><label for="gt-qrcodes-url">URL</label></th>\
                <td><input type="text" name="qrcodes url" id="gt-qrcodes-url" /><br />\
                    <small>Any URL. Example: http://www.google.com or google.com.</small></td>\
            </tr>\
            <tr id="gt-qrcodes-fname-tr">\
                <th><label for="gt-qrcodes-fname">First Name</label></th>\
                <td><input type="text" name="qrcodes fname" id="gt-qrcodes-fname" /><br />\
                    <small>Enter your first name.</small></td>\
            </tr>\
            <tr id="gt-qrcodes-lname-tr">\
                <th><label for="gt-qrcodes-lname">Family Name</label></th>\
                <td><input type="text" name="qrcodes lname" id="gt-qrcodes-lname" /><br />\
                    <small>Enter your last name.</small></td>\
            </tr>\
            <tr id="gt-qrcodes-number-tr">\
                <th><label for="gt-qrcodes-number">Phone Number</label></th>\
                <td><input type="text" name="qrcodes number" id="gt-qrcodes-number" /><br />\
                    <small>Enter contact number.</small></td>\
            </tr>\
            <tr id="gt-qrcodes-email-tr">\
                <th><label for="gt-qrcodes-email">Email</label></th>\
                <td><input type="text" name="qrcodes email" id="gt-qrcodes-email" /><br />\
                    <small>Your email.Example: example@domain.com</small></td>\
            </tr>\
            <tr id="gt-qrcodes-website-tr">\
                <th><label for="gt-qrcodes-website">Website</label></th>\
                <td><input type="text" name="qrcodes website" id="gt-qrcodes-website" /><br />\
                    <small>Enter your website address.</small></td>\
            </tr>\
            <tr id="gt-qrcodes-company_name-tr">\
                <th><label for="gt-qrcodes-company_name">Company Name</label></th>\
                <td><input type="text" name="qrcodes company_name" id="gt-qrcodes-company_name" /><br />\
                    <small>Enter company name.</small></td>\
            </tr>\
            <tr id="gt-qrcodes-company_title-tr">\
                <th><label for="gt-qrcodes-company_title">Company Title</label></th>\
                <td><input type="text" name="qrcodes company_title" id="gt-qrcodes-company_title" /><br />\
                    <small>Your title / position in company.</small></td>\
            </tr>\
            <tr id="gt-qrcodes-street-tr">\
                <th><label for="gt-qrcodes-street">Street</label></th>\
                <td><input type="text" name="qrcodes street" id="gt-qrcodes-street" /><br />\
                    <small>Enter Street Address.</small></td>\
            </tr>\
            <tr id="gt-qrcodes-city-tr">\
                <th><label for="gt-qrcodes-city">City</label></th>\
                <td><input type="text" name="qrcodes city" id="gt-qrcodes-city" /><br />\
                    <small>Enter City.</small></td>\
            </tr>\
            <tr id="gt-qrcodes-state-tr">\
                <th><label for="gt-qrcodes-state">State</label></th>\
                <td><input type="text" name="qrcodes state" id="gt-qrcodes-state" /><br />\
                    <small>Enter State</small></td>\
            </tr>\
            <tr id="gt-qrcodes-country-tr">\
                <th><label for="gt-qrcodes-country">Country</label></th>\
                <td><input type="text" name="qrcodes country" id="gt-qrcodes-country" /><br />\
                    <small>Enter Country.</small></td>\
            </tr>\
            <tr id="gt-qrcodes-zip-tr">\
                <th><label for="gt-qrcodes-zip">Zip</label></th>\
                <td><input type="text" name="qrcodes zip" id="gt-qrcodes-zip" /><br />\
                    <small>Enter Pin Code / Zip Code.</small></td>\
            </tr>\
            <tr id="gt-qrcodes-content-tr">\
                <th><label for="gt-qrcodes-content">Simple Text</label></th>\
                <td><textarea type="text" name="qrcodes content" id="gt-qrcodes-content" ></textarea><br />\
                    <small>Add simple text.</small></td>\
            </tr>\
            <tr id="gt-qrcodes-phone_number-tr">\
                <th><label for="gt-qrcodes-phone_number">Phone Number</label></th>\
                <td><input type="text" name="qrcodes phone_number" id="gt-qrcodes-phone_number" /><br />\
                    <small>Add phone number.</small></td>\
            </tr>\
            <tr id="gt-qrcodes-sms_number-tr">\
                <th><label for="gt-qrcodes-sms_number">SMS Number</label></th>\
                <td><input type="text" name="qrcodes sms_number" id="gt-qrcodes-sms_number" /><br />\
                    <small>Add sms receivers contact number.</small></td>\
            </tr>\
            <tr id="gt-qrcodes-sms_text-tr">\
                <th><label for="gt-qrcodes-sms_text">SMS Text</label></th>\
                <td><textarea type="text" name="qrcodes sms_text" id="gt-qrcodes-sms_text" ></textarea><br />\
                    <small>Add text for SMS.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-qrcodes-size">Image Size</label></th>\
                <td><input type="text" name="qrcodes size" id="gt-qrcodes-size" value="150" /><br />\
                    <small>Enter QR code image size (in pixels). Default is 150.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-qrcodes-alt">Image Alt Text</label></th>\
                <td><input type="text" name="qrcodes alt" id="gt-qrcodes-alt" value="Scan the QR Code"/><br />\
                    <small>Add alternate text for QR code image. Good for SEO.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-qrcodes-style">Custom Style</label></th>\
                <td><textarea type="text" name="qrcodes style" id="gt-qrcodes-style" ></textarea><br />\
                    <small>Apply custom style.</small></td>\
            </tr>\
        </table>\
        <p class="submit">\
            <input type="button" id="gt-qrcodes-submit" class="button-primary" value="Insert QR Code" name="submit" />\
        </p>\
        </div>');



        jQuery(document).ready(function($) {

            $('#gt-qrcodes-url-tr').hide();
            $('#gt-qrcodes-fname-tr').hide();
            $('#gt-qrcodes-lname-tr').hide();
            $('#gt-qrcodes-number-tr').hide();
            $('#gt-qrcodes-email-tr').hide();
            $('#gt-qrcodes-website-tr').hide();
            $('#gt-qrcodes-company_name-tr').hide();
            $('#gt-qrcodes-company_title-tr').hide();
            $('#gt-qrcodes-street-tr').hide();
            $('#gt-qrcodes-city-tr').hide();
            $('#gt-qrcodes-state-tr').hide();
            $('#gt-qrcodes-country-tr').hide();
            $('#gt-qrcodes-zip-tr').hide();
            $('#gt-qrcodes-content-tr').hide();
            $('#gt-qrcodes-phone_number-tr').hide();
            $('#gt-qrcodes-sms_number-tr').hide();
            $('#gt-qrcodes-sms_text-tr').hide();

            $('#gt-qrcodes-type').change(function(index){
                $('#gt-qrcodes-type').each(function(index){
                    if($('#gt-qrcodes-type').val()=='url'){
                        $('#gt-qrcodes-url-tr').show('slow');
                        $('#gt-qrcodes-fname-tr').hide();
                        $('#gt-qrcodes-lname-tr').hide();
                        $('#gt-qrcodes-number-tr').hide();
                        $('#gt-qrcodes-email-tr').hide();
                        $('#gt-qrcodes-website-tr').hide();
                        $('#gt-qrcodes-company_name-tr').hide();
                        $('#gt-qrcodes-company_title-tr').hide();
                        $('#gt-qrcodes-street-tr').hide();
                        $('#gt-qrcodes-city-tr').hide();
                        $('#gt-qrcodes-state-tr').hide();
                        $('#gt-qrcodes-country-tr').hide();
                        $('#gt-qrcodes-zip-tr').hide();
                        $('#gt-qrcodes-content-tr').hide();
                        $('#gt-qrcodes-phone_number-tr').hide();
                        $('#gt-qrcodes-sms_number-tr').hide();
                        $('#gt-qrcodes-sms_text-tr').hide();
                    } else if($('#gt-qrcodes-type').val()=='bc'){
                        $('#gt-qrcodes-url-tr').hide();
                        $('#gt-qrcodes-fname-tr').show('slow');
                        $('#gt-qrcodes-lname-tr').show('slow');
                        $('#gt-qrcodes-number-tr').show('slow');
                        $('#gt-qrcodes-email-tr').show('slow');
                        $('#gt-qrcodes-website-tr').show('slow');
                        $('#gt-qrcodes-company_name-tr').show('slow');
                        $('#gt-qrcodes-company_title-tr').show('slow');
                        $('#gt-qrcodes-street-tr').show('slow');
                        $('#gt-qrcodes-city-tr').show('slow');
                        $('#gt-qrcodes-state-tr').show('slow');
                        $('#gt-qrcodes-country-tr').show('slow');
                        $('#gt-qrcodes-zip-tr').show('slow');
                        $('#gt-qrcodes-content-tr').hide();
                        $('#gt-qrcodes-phone_number-tr').hide();
                        $('#gt-qrcodes-sms_number-tr').hide();
                        $('#gt-qrcodes-sms_text-tr').hide();
                    } else if($('#gt-qrcodes-type').val()=='content'){
                        $('#gt-qrcodes-url-tr').hide();
                        $('#gt-qrcodes-fname-tr').hide();
                        $('#gt-qrcodes-lname-tr').hide();
                        $('#gt-qrcodes-number-tr').hide();
                        $('#gt-qrcodes-email-tr').hide();
                        $('#gt-qrcodes-website-tr').hide();
                        $('#gt-qrcodes-company_name-tr').hide();
                        $('#gt-qrcodes-company_title-tr').hide();
                        $('#gt-qrcodes-street-tr').hide();
                        $('#gt-qrcodes-city-tr').hide();
                        $('#gt-qrcodes-state-tr').hide();
                        $('#gt-qrcodes-country-tr').hide();
                        $('#gt-qrcodes-zip-tr').hide();
                        $('#gt-qrcodes-content-tr').show('slow');
                        $('#gt-qrcodes-phone_number-tr').hide();
                        $('#gt-qrcodes-sms_number-tr').hide();
                        $('#gt-qrcodes-sms_text-tr').hide();
                    }  else if($('#gt-qrcodes-type').val()=='phone'){
                        $('#gt-qrcodes-url-tr').hide();
                        $('#gt-qrcodes-fname-tr').hide();
                        $('#gt-qrcodes-lname-tr').hide();
                        $('#gt-qrcodes-number-tr').hide();
                        $('#gt-qrcodes-email-tr').hide();
                        $('#gt-qrcodes-website-tr').hide();
                        $('#gt-qrcodes-company_name-tr').hide();
                        $('#gt-qrcodes-company_title-tr').hide();
                        $('#gt-qrcodes-street-tr').hide();
                        $('#gt-qrcodes-city-tr').hide();
                        $('#gt-qrcodes-state-tr').hide();
                        $('#gt-qrcodes-country-tr').hide();
                        $('#gt-qrcodes-zip-tr').hide();
                        $('#gt-qrcodes-content-tr').hide();
                        $('#gt-qrcodes-phone_number-tr').show('slow');
                        $('#gt-qrcodes-sms_number-tr').hide();
                        $('#gt-qrcodes-sms_text-tr').hide();
                    }  else if($('#gt-qrcodes-type').val()=='sms'){
                        $('#gt-qrcodes-url-tr').hide();
                        $('#gt-qrcodes-fname-tr').hide();
                        $('#gt-qrcodes-lname-tr').hide();
                        $('#gt-qrcodes-number-tr').hide();
                        $('#gt-qrcodes-email-tr').hide();
                        $('#gt-qrcodes-website-tr').hide();
                        $('#gt-qrcodes-company_name-tr').hide();
                        $('#gt-qrcodes-company_title-tr').hide();
                        $('#gt-qrcodes-street-tr').hide();
                        $('#gt-qrcodes-city-tr').hide();
                        $('#gt-qrcodes-state-tr').hide();
                        $('#gt-qrcodes-country-tr').hide();
                        $('#gt-qrcodes-zip-tr').hide();
                        $('#gt-qrcodes-content-tr').hide();
                        $('#gt-qrcodes-phone_number-tr').hide();
                        $('#gt-qrcodes-sms_number-tr').show('slow');
                        $('#gt-qrcodes-sms_text-tr').show('slow');
                    }  else {
                        $('#gt-qrcodes-url-tr').hide();
                        $('#gt-qrcodes-fname-tr').hide();
                        $('#gt-qrcodes-lname-tr').hide();
                        $('#gt-qrcodes-number-tr').hide();
                        $('#gt-qrcodes-email-tr').hide();
                        $('#gt-qrcodes-website-tr').hide();
                        $('#gt-qrcodes-company_name-tr').hide();
                        $('#gt-qrcodes-company_title-tr').hide();
                        $('#gt-qrcodes-street-tr').hide();
                        $('#gt-qrcodes-city-tr').hide();
                        $('#gt-qrcodes-state-tr').hide();
                        $('#gt-qrcodes-country-tr').hide();
                        $('#gt-qrcodes-zip-tr').hide();
                        $('#gt-qrcodes-content-tr').hide();
                        $('#gt-qrcodes-phone_number-tr').hide();
                        $('#gt-qrcodes-sms_number-tr').hide();
                        $('#gt-qrcodes-sms_text-tr').hide();
                    }
                });
            });
        });
        
        var qrcodesTable = qrcodesForm.find('table');
        qrcodesForm.appendTo('body').hide();
        
        // handles the click event of the submit button
        qrcodesForm.find('#gt-qrcodes-submit').click(function(){
            // defines the options and their default values
            // again, this is not the most elegant way to do this
            // but well, this gets the job done nonetheless
            var qrcodesOptions = { 
                'type'          : 'url',
                'url'           : '',
                'fname'         : '',
                'lname'         : '',
                'number'        : '',
                'email'         : '',
                'website'       : '',
                'company_name'  : '',
                'company_title' : '',
                'street'        : '',
                'city'          : '',
                'state'         : '',
                'country'       : '',
                'zip'           : '',
                'content'       : '',
                'phone_number'  : '',
                'sms_number'    : '',
                'sms_text'      : '',
                'size'          : '150',
                'alt'           : 'Scan the QR Code',
                'style'         : '',
                
                };
            var qrcodesShortcode = '[gtqrcode';
            
            for( var index in qrcodesOptions) {
                var qrcodesValue = qrcodesTable.find('#gt-qrcodes-' + index).val();
                
                // attaches the attribute to the shortcode only if it's different from the default value
                if ( qrcodesValue !== qrcodesOptions[index] )
                    qrcodesShortcode += ' ' + index + '="' + qrcodesValue + '"';
            }
            
            qrcodesShortcode += ']';
            
            // inserts the shortcode into the active editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, qrcodesShortcode);
            
            // closes Thickbox
            tb_remove();
        });



          ////////////////////////////////////////////////////////////////////////////////
         /////////// Switch Popup ///////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////


        var switchForm = jQuery('<div id="gt-switch-form"><table id="gt-table" class="form-table">\
            <small style="background-color:#ffebe8;padding:10px 30px;float:left;overflow:hidden;"><span style="color:#787878;">Make sure to enable switches script from options panel available here - Dashboard > Settings > GT Shortcodes.</span></small>\
            <tr>\
                <th><label for="gt-switch-type">Switch Type</label></th>\
                <td><select name="switch-type" id="gt-switch-type">\
                    <option value="default">Default</option>\
                    <option value="square">Square</option>\
                </select><br />\
                <small>Select switch style type.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-switch-default">Switch Default Value</label></th>\
                <td><select name="switch-default" id="gt-switch-default">\
                    <option value="off">Off</option>\
                    <option value="on">On</option>\
                </select><br />\
                <small>Select switch default value.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-switch-active">Switch Active</label></th>\
                <td><select name="switch-active" id="gt-switch-active">\
                    <option value="yes">Yes</option>\
                    <option value="no">No</option>\
                </select><br />\
                <small>Select switch state.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-switch-onicon">On Icon Type</label></th>\
                <td><select name="switch-onicon" id="gt-switch-onicon">\
                    <option value="">None</option>\
                    <option value="info">Info</option>\
                    <option value="alert">Alert</option>\
                    <option value="question">Question</option>\
                    <option value="window">Window</option>\
                    <option value="windows">Windows</option>\
                    <option value="upload">Upload</option>\
                    <option value="arrow-right">Arrow-right</option>\
                    <option value="arrow-left">Arrow-left</option>\
                    <option value="loop">Loop</option>\
                    <option value="cmd">Cmd</option>\
                    <option value="mic">Mic</option>\
                    <option value="export">Export</option>\
                    <option value="check-inverted">Check-inverted</option>\
                    <option value="heart">Heart</option>\
                    <option value="location">Loaction</option>\
                    <option value="plus">Plus</option>\
                    <option value="check" default>Check</option>\
                    <option value="cross">Cross</option>\
                    <option value="list">List</option>\
                    <option value="new">New</option>\
                    <option value="video">Video</option>\
                    <option value="photo">Photo</option>\
                    <option value="volume">Volume</option>\
                    <option value="time">Time</option>\
                    <option value="eye">Eye</option>\
                    <option value="chat">Chat</option>\
                    <option value="home">Home</option>\
                    <option value="search">Search</option>\
                    <option value="user">User</option>\
                    <option value="mail">Mail</option>\
                    <option value="lock">Lock</option>\
                    <option value="power">Power</option>\
                    <option value="star">Star</option>\
                    <option value="calendar">Calendar</option>\
                    <option value="gear">Gear</option>\
                    <option value="book">Book</option>\
                    <option value="exit">Exit</option>\
                    <option value="trash">Trash</option>\
                    <option value="folder">Folder</option>\
                    <option value="bubble">Bubble</option>\
                    <option value="cross-inverted">Cross-inverted</option>\
                    <option value="plus-inverted">Plus-inverted</option>\
                    <option value="calendar-solid">Calendar-solid</option>\
                    <option value="star-2">Star-2</option>\
                    <option value="credit-card">Credit Card</option>\
                    <option value="clip">Clip</option>\
                    <option value="link">Link</option>\
                    <option value="pause">Pause</option>\
                    <option value="play">Play</option>\
                    <option value="tag">Tag</option>\
                    <option value="document">Document</option>\
                    <option value="image">Image</option>\
                    <option value="triangle-up">Triangle-up</option>\
                    <option value="triangle-down">Triangle-down</option>\
                    <option value="triangle-up-small">Triangle-up-small</option>\
                    <option value="triangle-down-small">Triangle-down-small</option>\
                    <option value="triangle-left-large">Triangle-left-large</option>\
                    <option value="triangle-right-large">Triangle-right-large</option>\
                    <option value="radio-checked">Radio-checked</option>\
                    <option value="radio-unchecked">Radio-unchecked</option>\
                    <option value="checkbox-checked">Checkbox-checked</option>\
                    <option value="checkbox-unchecked">Checkbox-unchecked</option>\
                    <option value="list-thumbnailed">List-thumbnailed</option>\
                    <option value="list-small-thumbnails">List-small-thumbnails</option>\
                    <option value="list-numbered">List-numbered</option>\
                    <option value="list-large-thumbnails">List-large-thumbnails</option>\
                    <option value="list-columned">List-columned</option>\
                    <option value="list-bulleted">List-bulleted</option>\
                    <option value="facebook">Facebook</option>\
                    <option value="twitter">Twitter</option>\
                    <option value="googleplus">Googleplus</option>\
                    <option value="pinterest">Pinterest</option>\
                    <option value="linkedin">Linkedin</option>\
                    <option value="stumbleupon">Stumbleupon</option>\
                    <option value="skype">Skype</option>\
                    <option value="path">Path</option>\
                    <option value="myspace">Myspace</option>\
                    <option value="youtube">Youtube</option>\
                    <option value="vimeo">Vimeo</option>\
                    <option value="spotify">Spotify</option>\
                    <option value="dribbble">Dribbble</option>\
                    <option value="blogger">Blogger</option>\
                    <option value="behance">Behance</option>\
                </select><br />\
                <small>Select switch on icon.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-switch-officon">Off Icon Type</label></th>\
                <td><select name="switch-officon" id="gt-switch-officon">\
                    <option value="">None</option>\
                    <option value="info">Info</option>\
                    <option value="alert">Alert</option>\
                    <option value="question">Question</option>\
                    <option value="window">Window</option>\
                    <option value="windows">Windows</option>\
                    <option value="upload">Upload</option>\
                    <option value="arrow-right">Arrow-right</option>\
                    <option value="arrow-left">Arrow-left</option>\
                    <option value="loop">Loop</option>\
                    <option value="cmd">Cmd</option>\
                    <option value="mic">Mic</option>\
                    <option value="export">Export</option>\
                    <option value="check-inverted">Check-inverted</option>\
                    <option value="heart">Heart</option>\
                    <option value="location">Loaction</option>\
                    <option value="plus">Plus</option>\
                    <option value="check" default>Check</option>\
                    <option value="cross" default>Cross</option>\
                    <option value="list">List</option>\
                    <option value="new">New</option>\
                    <option value="video">Video</option>\
                    <option value="photo">Photo</option>\
                    <option value="volume">Volume</option>\
                    <option value="time">Time</option>\
                    <option value="eye">Eye</option>\
                    <option value="chat">Chat</option>\
                    <option value="home">Home</option>\
                    <option value="search">Search</option>\
                    <option value="user">User</option>\
                    <option value="mail">Mail</option>\
                    <option value="lock">Lock</option>\
                    <option value="power">Power</option>\
                    <option value="star">Star</option>\
                    <option value="calendar">Calendar</option>\
                    <option value="gear">Gear</option>\
                    <option value="book">Book</option>\
                    <option value="exit">Exit</option>\
                    <option value="trash">Trash</option>\
                    <option value="folder">Folder</option>\
                    <option value="bubble">Bubble</option>\
                    <option value="cross-inverted">Cross-inverted</option>\
                    <option value="plus-inverted">Plus-inverted</option>\
                    <option value="calendar-solid">Calendar-solid</option>\
                    <option value="star-2">Star-2</option>\
                    <option value="credit-card">Credit Card</option>\
                    <option value="clip">Clip</option>\
                    <option value="link">Link</option>\
                    <option value="pause">Pause</option>\
                    <option value="play">Play</option>\
                    <option value="tag">Tag</option>\
                    <option value="document">Document</option>\
                    <option value="image">Image</option>\
                    <option value="triangle-up">Triangle-up</option>\
                    <option value="triangle-down">Triangle-down</option>\
                    <option value="triangle-up-small">Triangle-up-small</option>\
                    <option value="triangle-down-small">Triangle-down-small</option>\
                    <option value="triangle-left-large">Triangle-left-large</option>\
                    <option value="triangle-right-large">Triangle-right-large</option>\
                    <option value="radio-checked">Radio-checked</option>\
                    <option value="radio-unchecked">Radio-unchecked</option>\
                    <option value="checkbox-checked">Checkbox-checked</option>\
                    <option value="checkbox-unchecked">Checkbox-unchecked</option>\
                    <option value="list-thumbnailed">List-thumbnailed</option>\
                    <option value="list-small-thumbnails">List-small-thumbnails</option>\
                    <option value="list-numbered">List-numbered</option>\
                    <option value="list-large-thumbnails">List-large-thumbnails</option>\
                    <option value="list-columned">List-columned</option>\
                    <option value="list-bulleted">List-bulleted</option>\
                    <option value="facebook">Facebook</option>\
                    <option value="twitter">Twitter</option>\
                    <option value="googleplus">Googleplus</option>\
                    <option value="pinterest">Pinterest</option>\
                    <option value="linkedin">Linkedin</option>\
                    <option value="stumbleupon">Stumbleupon</option>\
                    <option value="skype">Skype</option>\
                    <option value="path">Path</option>\
                    <option value="myspace">Myspace</option>\
                    <option value="youtube">Youtube</option>\
                    <option value="vimeo">Vimeo</option>\
                    <option value="spotify">Spotify</option>\
                    <option value="dribbble">Dribbble</option>\
                    <option value="blogger">Blogger</option>\
                    <option value="behance">Behance</option>\
                </select><br />\
                <small>Select switch off icon.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-switch-style">Other Style</label></th>\
                <td><input type="text" name="style" id="gt-switch-style" value="" /><br />\
                    <small>Apply style. Ex: box-sizing: content-box;</small></td>\
            </tr>\
        </table>\
        <p class="submit">\
            <input type="button" id="gt-switch-submit" class="button-primary" value="Insert Switch" name="submit" />\
        </p>\
        </div>');
        
        var switchTable = switchForm.find('table');
        switchForm.appendTo('body').hide();
        
        // handles the click event of the submit button
        switchForm.find('#gt-switch-submit').click(function(){
            // defines the options and their default values
            // again, this is not the most elegant way to do this
            // but well, this gets the job done nonetheless
            var switchOptions = { 
                'type'         : '',
                'default'      : 'off',
                'active'       : 'yes',
                'onicon'       : '',
                'officon'      : '',
                'style'        : '-webkit-box-sizing: content-box;-moz-box-sizing: content-box;-ms-box-sizing: content-box;-o-box-sizing: content-box;box-sizing: content-box;',
                
                };
            var switchShortcode = '[gtswitch';
            
            for( var index in switchOptions) {
                var switchValue = switchTable.find('#gt-switch-' + index).val();
                
                // attaches the attribute to the shortcode only if it's different from the default value
                if ( switchValue !== switchOptions[index] )
                    switchShortcode += ' ' + index + '="' + switchValue + '"';
            }
            
            switchShortcode += ']';
            
            // inserts the shortcode into the active editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, switchShortcode);
            
            // closes Thickbox
            tb_remove();
        });


          ////////////////////////////////////////////////////////////////////////////////
         /////////// Tab Popup //////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////


        var tabForm = jQuery('<div id="gt-tab-form"><table id="gt-table" class="form-table">\
            <small style="background-color:#ffebe8;padding:10px 30px;float:left;overflow:hidden;"><span style="color:#787878;">Content for each tab is added through post editor. Once you insert tab, add content (between shortcode) like this  - [gttab]Content 1|Content 2|Content 3[/gttab] (separated by pipe / vertical bar " | ").</span></small>\
            <tr>\
                <th><label for="gt-tab-id">Tab ID</label></th>\
                <td><input type="text" id="gt-tab-id" name="tab-id" value="tab1" /><br />\
                <small>Assign unique id to tab.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-tab-type">Tab Type</label></th>\
                <td><select name="tab-type" id="gt-tab-type">\
                    <option value="">Default</option>\
                    <option value="left">Left</option>\
                    <option value="right">Right</option>\
                </select><br />\
                <small>Select tab type.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-tab-count">Tab Count</label></th>\
                <td><input type="text" id="gt-tab-count" name="tab-count" value="3" /><br />\
                <small>Number of required tabs.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-tab-title">Tab Titles</label></th>\
                <td><textarea type="text" name="tab title" id="gt-tab-title">Tab 1|Tab 2|Tab 3</textarea><br />\
                    <small>Pipe (vertical bar) separated title\'s for tab.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-tab-tabids">Tab IDs</label></th>\
                <td><input type="text" name="tab tabids" id="gt-tab-tabids" value="1,2,3" /><br />\
                    <small>Add comma separated tab id\'s to tab. Make sure id\'s are unique when using multiple tabs on a single page.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-tab-open_tab">Default Open Tab</label></th>\
                <td><input type="text" name="tab open_tab" id="gt-tab-open_tab" value="1" /><br />\
                    <small>Add the tab number to keep it open by default. For example, if you have 3 tab headers and you want 2nd tab to remain open by default then insert 2 above.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-tab-transition_duration">Transition Duration</label></th>\
                <td><input type="text" name="tab transition duration" id="gt-tab-transition_duration" /><br />\
                    <small>Specifies how many seconds tab transition takes to complete one cycle. Example: 0.25,0.5,1,2,etc.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-tab-transition_timing">Transition Timing</label></th>\
                <td><select name="tab-transition_timing" id="gt-tab-transition_timing">\
                    <option value="linear">Linear</option>\
                    <option value="ease">Ease</option>\
                    <option value="ease-in">Ease In</option>\
                    <option value="ease-out">Ease Out</option>\
                    <option value="ease-in-out">Ease In Out</option>\
                </select><br />\
                <small>Describes how the tab transition will progress over one cycle of its duration.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-tab-head_bg_active">Active Tab Head Background</label></th>\
                <td><input type="text" name="active tab head background color" id="gt-tab-head_bg_active" value="#FFFFFF" class="gt-iris color {hash:true,required:false}" /><br />\
                    <small>Select active tab head background color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-tab-head_bg">Tab Head Background</label></th>\
                <td><input type="text" name="tab head background color" id="gt-tab-head_bg" value="#FFFFFF" class="gt-iris color {hash:true,required:false}" /><br />\
                    <small>Select tab head background color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-tab-head_text_color_active">Active Tab Head Text</label></th>\
                <td><input type="text" name="active tab head text color" id="gt-tab-head_text_color_active" value="#555555" class="gt-iris color {hash:true,required:false}" /><br />\
                    <small>Select active tab head text color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-tab-head_text_color">Tab Head Text</label></th>\
                <td><input type="text" name="tab head text color" id="gt-tab-head_text_color" value="#9f9f9f" class="gt-iris color {hash:true,required:false}" /><br />\
                    <small>Select tab head text color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-tab-content_bg">Content Background</label></th>\
                <td><input type="text" name="tab content background" id="gt-tab-content_bg" value="#FFFFFF" class="gt-iris color {hash:true,required:false}" /><br />\
                    <small>Select tab content background.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-tab-content_text_color">Content Text Color</label></th>\
                <td><input type="text" name="tab content text color" id="gt-tab-content_text_color" value="#555555" class="gt-iris color {hash:true,required:false}" /><br />\
                    <small>Select tab content text color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-tab-border_size">Tab Border Size</label></th>\
                <td><input type="text" name="tab Border Size" id="gt-tab-border_size" value="2"/><br />\
                    <small>Enter the desired tab border size (in pixels).</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-tab-border_style">Tab Border Style</label></th>\
                <td><select name="tab-border_style" id="gt-tab-border_style">\
                    <option value="none">None</option>\
                    <option value="hidden">Hidden</option>\
                    <option value="dotted">Dotted</option>\
                    <option value="dashed">Dashed</option>\
                    <option value="solid" selected>Solid</option>\
                    <option value="double">Double</option>\
                    <option value="groove">Groove</option>\
                    <option value="ridge">Ridge</option>\
                    <option value="inset">Inset</option>\
                    <option value="outset">Outset</option>\
                    <option value="inherit">Inherit</option>\
                </select><br />\
                <small>Select tab border style.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-tab-border_color">Tab Border Color</label></th>\
                <td><input type="text" name="tab Border Color" id="gt-tab-border_color" class="gt-iris color {hash:true,required:false}" value="#E1E4E7" /><br />\
                    <small>Choose the desired tab border color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-tab-border_radius">Tab Border Radius</label></th>\
                <td><input type="text" name="Tab Border Radius" id="gt-tab-border_radius" value="6"/><br />\
                    <small>Enter the desired tab border radius (in pixels).</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-tab-style">Custom Style</label></th>\
                <td><textarea name="Tab Style" id="gt-tab-style"></textarea><br />\
                    <small>Add custom css style. For example: margin:10px;</small></td>\
            </tr>\
        </table>\
        <p class="submit">\
            <input type="button" id="gt-tab-submit" class="button-primary" value="Insert Tab" name="submit" />\
        </p>\
        </div>');
        
        var tabTable = tabForm.find('table');
        tabForm.appendTo('body').hide();
        
        // handles the click event of the submit button
        tabForm.find('#gt-tab-submit').click(function(){
            // defines the options and their default values
            // again, this is not the most elegant way to do this
            // but well, this gets the job done nonetheless
            var tabOptions = { 
                'id'                        : 't1',
                'count'                     : '3',
                'type'                      : '',
                'title'                     : 'Tab 1|Tab 2|Tab 3',
                'tabids'                    : '1,2,3',
                'open_tab'                  : '1',
                'transition_duration'       : '0.25',
                'transition_timing'         : 'ease-in-out',
                'head_bg_active'            : '#FFFFFF',
                'head_bg'                   : '#FFFFFF',
                'head_text_color_active'    : '#555555',
                'head_text_color'           : '#9F9F9F',
                'content_bg'                : '#FFFFFF',
                'content_text_color'        : '#555555',
                'border_size'               : '2',
                'border_style'              : 'solid',
                'border_radius'             : '6',
                'border_color'              : '#E1E4E7',
                'style'                     : ''
                };
            var tabShortcode = '[gttab';
            
            for( var index in tabOptions) {
                var tabValue = tabTable.find('#gt-tab-' + index).val();
                
                // attaches the attribute to the shortcode only if it's different from the default value
                if ( tabValue !== tabOptions[index] )
                    tabShortcode += ' ' + index + '="' + tabValue + '"';
            }
            
            tabShortcode += '][/gttab]';
            
            // inserts the shortcode into the active editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, tabShortcode);
            
            // closes Thickbox
            tb_remove();
        });



        
          ////////////////////////////////////////////////////////////////////////////////
         /////////// Tables Popup ////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////


        var tableForm = jQuery('<div id="gt-table-form"><table id="gt-table" class="form-table">\
            <tr>\
                <th><label for="gt-table-type">Table Type</label></th>\
                <td><select name="table-type" id="gt-table-type">\
                    <option value="table-striped">Striped</option>\
                    <option value="table-striped table-hover">Striped + Hover</option>\
                    <option value="table-bordered">Bordered</option>\
                    <option value="table-bordered table-hover">Bordered + Hover</option>\
                </select><br />\
                <small>Select table type.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-table-cols">Table Columns</label></th>\
                <td><textarea type="text" name="table columns" id="gt-table-cols"></textarea><br />\
                    <small>Add comma separated head cell values. Ex: Col1,Col2,Col3</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-table-background">Table Background</label></th>\
                <td><input type="text" name="table background color" id="gt-table-background" value="" class="gt-iris color {hash:true,required:false}" /><br />\
                    <small>Adjust background color.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-table-style">Table Style</label></th>\
                <td><textarea type="text" name="table style" id="gt-table-style"></textarea><br />\
                    <small>Apply style to table. Ex: background:#eee;</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-table-background1">Table Head Cells Background</label></th>\
                <td><input type="text" name="table background color" id="gt-table-background1" value="" class="gt-iris color {hash:true,required:false}" /><br />\
                    <small>Adjust background color for table head cells.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-table-thstyle">Table Head Cells Style</label></th>\
                <td><textarea type="text" name="table head cell style" id="gt-table-thstyle"></textarea><br />\
                    <small>Apply style to table head cells. Ex: font-weight:bold;</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-table-background2">Table Data Cells Background</label></th>\
                <td><input type="text" name="table background color" id="gt-table-background2" value="" class="gt-iris color {hash:true,required:false}" /><br />\
                    <small>Adjust background color for table data cells.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-table-tdstyle">Table Data Cells Style</label></th>\
                <td><textarea type="text" name="table data cell style" id="gt-table-tdstyle">padding:8px 25px;</textarea><br />\
                    <small>Apply style to table data cells. Ex: padding:8px 25px;</small></td>\
            </tr>\
        </table>\
        <p class="submit">\
            <input type="button" id="gt-table-submit" class="button-primary" value="Insert Table" name="submit" />\
        </p>\
        </div>');
        
        var tableTable = tableForm.find('table');
        tableForm.appendTo('body').hide();
        
        // handles the click event of the submit button
        tableForm.find('#gt-table-submit').click(function(){
            // defines the options and their default values
            // again, this is not the most elegant way to do this
            // but well, this gets the job done nonetheless
            var tableOptions = { 
                'type'        : 'table-striped',
                'cols'        : 'none',
                'background'  : '',
                'style'       : '',
                'background1' : '',
                'thstyle'     : '',
                'background2' : '',
                'tdstyle'     : 'padding:8px 25px;'
                
                };
            var tableShortcode = '[gttable';
            
            for( var index in tableOptions) {
                var tableValue = tableTable.find('#gt-table-' + index).val();
                
                // attaches the attribute to the shortcode only if it's different from the default value
                if ( tableValue !== tableOptions[index] )
                    tableShortcode += ' ' + index + '="' + tableValue + '"';
            }
            
            tableShortcode += '][/gttable]';
            
            // inserts the shortcode into the active editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, tableShortcode);
            
            // closes Thickbox
            tb_remove();
        });



          ////////////////////////////////////////////////////////////////////////////////
         /////////// Tooltip Popup //////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////


        var tooltipForm = jQuery('<div id="gt-tooltip-form"><table id="gt-table" class="form-table">\
            <tr>\
                <th><label for="gt-tooltip-type">Tooltip Type</label></th>\
                <td><select name="tooltip-type" id="gt-tooltip-type">\
                    <option value="light">Light</option>\
                    <option value="dark">Dark</option>\
                </select><br />\
                <small>Select tooltip style type.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-tooltip-position">Tooltip Position</label></th>\
                <td><select name="tooltip-position" id="gt-tooltip-position">\
                    <option value="top">Top</option>\
                    <option value="right">Right</option>\
                    <option value="left">Left</option>\
                    <option value="bottom">Bottom</option>\
                </select><br />\
                <small>Select tooltip position.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-tooltip-content">Tooltip Content</label></th>\
                <td><input type="text" name="tooltip content" id="gt-tooltip-content" value="Tooltip" /><br />\
                    <small>Add tooltip content.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-tooltip-style">Text Style</label></th>\
                <td><input type="text" name="tooltip style" id="gt-tooltip-style" value="display:table;" /><br />\
                    <small>Apply style to text. Ex: font-weight:bold;</small></td>\
            </tr>\
        </table>\
        <p class="submit">\
            <input type="button" id="gt-tooltip-submit" class="button-primary" value="Insert Tooltip" name="submit" />\
        </p>\
        </div>');
        
        var tooltipTable = tooltipForm.find('table');
        tooltipForm.appendTo('body').hide();
        
        // handles the click event of the submit button
        tooltipForm.find('#gt-tooltip-submit').click(function(){
            // defines the options and their default values
            // again, this is not the most elegant way to do this
            // but well, this gets the job done nonetheless
            var tooltipOptions = { 
                'type'        : 'light',
                'position'    : 'top',
                'content'     : 'Tooltip',
                'style'       : 'display:table;'
                
                };
            var tooltipShortcode = '[gttooltip';
            
            for( var index in tooltipOptions) {
                var tooltipValue = tooltipTable.find('#gt-tooltip-' + index).val();
                
                // attaches the attribute to the shortcode only if it's different from the default value
                if ( tooltipValue !== tooltipOptions[index] )
                    tooltipShortcode += ' ' + index + '="' + tooltipValue + '"';
            }
            
            tooltipShortcode += '][/gttooltip]';
            
            // inserts the shortcode into the active editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, tooltipShortcode);
            
            // closes Thickbox
            tb_remove();
        });


          ////////////////////////////////////////////////////////////////////////////////
         /////////// Video Popup ////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////


        var videoForm = jQuery('<div id="gt-video-form"><table id="gt-table" class="form-table">\
            <small style="background-color:#ffebe8;padding:10px 30px;float:left;overflow:hidden;"><span style="color:#787878;">Make sure to enable video stylesheet and script from options panel available here - Dashboard > Settings > GT Shortcodes. If you want youtube and vimeo player then enable youtube and vimeo scripts as well.</span></small>\
            <tr>\
                <th><label for="gt-video-id">Video ID</label></th>\
                <td><input type="text" id="gt-video-id" name="video-id" value="1" /><br />\
                <small>Video ID. It should be unique. Required when using multiple videos on a single page.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-video-preload">Video Preload</label></th>\
                <td><select name="video-preload" id="gt-video-preload">\
                    <option value="auto">Auto</option>\
                    <option value="none">None</option>\
                </select><br />\
                <small>Select video preload or not.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-video-width">Video Width</label></th>\
                <td><input type="text" id="gt-video-width" name="video-width" value="620" /><br />\
                <small>Width for the video.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-video-height">Video Height</label></th>\
                <td><input type="text" id="gt-video-height" name="video-height" value="349" /><br />\
                <small>Height for the video.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-video-poster">Video Poster Image</label></th>\
                <td><input type="url" name="video poster" id="gt-video-poster" value="http://www.videojs.com/img/poster.jpg" /><br />\
                    <small>Url for poster image of video.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-video-src1">Video Source 1</label></th>\
                <td><input type="url" name="video src1" id="gt-video-src1" value="" /><br />\
                    <small>Url for video source.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-video-type1">Video Type 1</label></th>\
                <td><select name="video-type1" id="gt-video-type1">\
                    <option value="video/mp4">MP4</option>\
                    <option value="video/webm">WEBM</option>\
                    <option value="video/ogg">OGG</option>\
                </select><br />\
                <small>Video File Format 1.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-video-src2">Video Source 2</label></th>\
                <td><input type="url" name="video src2" id="gt-video-src2" value="" /><br />\
                    <small>Url for video source.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-video-type2">Video Type 2</label></th>\
                <td><select name="video-type2" id="gt-video-type2">\
                    <option value="video/webm">WEBM</option>\
                    <option value="video/ogg">OGG</option>\
                    <option value="video/mp4">MP4</option>\
                </select><br />\
                <small>Video File Format 2.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-video-src3">Video Source 3</label></th>\
                <td><input type="url" name="video src3" id="gt-video-src3" value="" /><br />\
                    <small>Url for video source.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-video-type3">Video Type 3</label></th>\
                <td><select name="video-type3" id="gt-video-type3">\
                    <option value="video/ogg">OGG</option>\
                    <option value="video/mp4">MP4</option>\
                    <option value="video/webm">WEBM</option>\
                </select><br />\
                <small>Video File Format 3.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-video-youtube">Youtube Video Link</label></th>\
                <td><input type="url" name="video youtube" id="gt-video-youtube" value="" /><br />\
                    <small>Url for youtube video source.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-video-ytcontrol">Youtube Controls</label></th>\
                <td><select name="video-ytcontrol" id="gt-video-ytcontrol">\
                    <option value="false">Disable</option>\
                    <option value="true">Enable</option>\
                </select><br />\
                <small>Enable or disable youtube video controls.</small></td>\
            </tr>\
            <tr>\
                <th><label for="gt-video-vimeo">Vimeo Video Link</label></th>\
                <td><input type="url" name="video vimeo" id="gt-video-vimeo" value="" /><br />\
                    <small>Url for vimeo video source. We cannot hide the Vimeo controls bar, they do not allow it.</small></td>\
            </tr>\
        </table>\
        <p class="submit">\
            <input type="button" id="gt-video-submit" class="button-primary" value="Insert Video" name="submit" />\
        </p>\
        </div>');
        
        var videoTable = videoForm.find('table');
        videoForm.appendTo('body').hide();
        
        // handles the click event of the submit button
        videoForm.find('#gt-video-submit').click(function(){
            // defines the options and their default values
            // again, this is not the most elegant way to do this
            // but well, this gets the job done nonetheless
            var videoOptions = { 
                'id'           : '1',
                'preload'      : 'auto',
                'width'        : '620',
                'height'       : '349',
                'poster'       : 'http://www.videojs.com/img/poster.jpg',
                'src1'         : '',
                'type1'        : 'video/mp4',
                'src2'         : '',
                'type2'        : 'video/webm',
                'src3'         : '',
                'type3'        : 'video/ogg',
                'youtube'      : '',
                'ytcontrol'    : 'false',
                'vimeo'        : ''
                
                };
            var videoShortcode = '[gtvideo';
            
            for( var index in videoOptions) {
                var videoValue = videoTable.find('#gt-video-' + index).val();
                
                // attaches the attribute to the shortcode only if it's different from the default value
                if ( videoValue !== videoOptions[index] )
                    videoShortcode += ' ' + index + '="' + videoValue + '"';
            }
            
            videoShortcode += ']';
            
            // inserts the shortcode into the active editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, videoShortcode);
            
            // closes Thickbox
            tb_remove();
        });



          ////////////////////////////////////////////////////////////////////////////////
         /////////// Visibility Popup //////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////


        var visibilityForm = jQuery('<div id="gt-visibility-form"><table id="gt-table" class="form-table">\
            <small style="background-color:#ffebe8;padding:10px 30px;float:left;overflow:hidden;"><span style="color:#787878;">Usage - For showing / hiding content by device, enter the content between the visibility shortcode tags. Example - [gtvisibility type="hidden-tablet"] ..your content goes here.. [/gtvisibility]. You can also include other shortcodes inside visibility shortcodes.</span></small>\
            <tr>\
                <th><label for="gt-visibility-type">Visibility Type</label></th>\
                <td><select name="visibility-type" id="gt-visibility-type">\
                    <option value="visible-phone">Visible on Phone</option>\
                    <option value="visible-tablet">Visible on Tablet</option>\
                    <option value="visible-desktop">Visible on Desktop</option>\
                    <option value="hidden-phone">Hidden on Phone</option>\
                    <option value="hidden-tablet">Hidden on Tablet</option>\
                    <option value="hidden-desktop">Hidden on Desktop</option>\
                </select><br />\
                <small>Select visibility type.</small>\
                <small>\
                    <ul>\
                        <li>Visible on Phone - Item visible only on phone, hidden on tablet and desktop.</li>\
                        <li>Visible on Tablet - Item visible only on tablet, hidden on phone and desktop.</li>\
                        <li>Visible on Desktop - Item visible only on desktop, hidden on phone and tablet.</li>\
                        <li>Hidden on Phone - Item hidden only on phone, visible on tablet and desktop.</li>\
                        <li>Hidden on Tablet - Item hidden only on tablet, visible on phone and desktop.</li>\
                        <li>Hidden on Desktop - Item hidden only on desktop, visible on phone and tablet.</li>\
                    </ul>\
                </small>\
                </td>\
            </tr>\
        </table>\
        <p class="submit">\
            <input type="button" id="gt-visibility-submit" class="button-primary" value="Insert Visibility" name="submit" />\
        </p>\
        </div>');
        
        var visibilityTable = visibilityForm.find('table');
        visibilityForm.appendTo('body').hide();
        
        // handles the click event of the submit button
        visibilityForm.find('#gt-visibility-submit').click(function(){
            // defines the options and their default values
            // again, this is not the most elegant way to do this
            // but well, this gets the job done nonetheless
            var visibilityOptions = { 
                'type'        : 'visible-phone'
                
                };
            var visibilityShortcode = '[gtvisibility';
            
            for( var index in visibilityOptions) {
                var visibilityValue = visibilityTable.find('#gt-visibility-' + index).val();
                
                // attaches the attribute to the shortcode only if it's different from the default value
                if ( visibilityValue !== visibilityOptions[index] )
                    visibilityShortcode += ' ' + index + '="' + visibilityValue + '"';
            }
            
            visibilityShortcode += '][/gtvisibility]';
            
            // inserts the shortcode into the active editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, visibilityShortcode);
            
            // closes Thickbox
            tb_remove();
        });
    });

})();