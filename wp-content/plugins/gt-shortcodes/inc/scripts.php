<?php


/*-------------------------------------
    Loding Styles
-------------------------------------*/

function fus_styles() {

    global $fus_options;

	wp_register_style( 'gt-bootstrap', plugins_url('bootstrap/css/bootstrap.css', __FILE__) );
    if( $fus_options['style_one'] == 'bootstrap' ){
        wp_enqueue_style( 'gt-bootstrap' );
    }

    wp_register_style( 'gt-min-bootstrap', plugins_url('bootstrap/css/bootstrap.min.css', __FILE__) );
    if( $fus_options['style_one'] == 'bootstrap-min' ){
        wp_enqueue_style( 'gt-min-bootstrap' );
    }

	wp_register_style( 'gt-style', plugins_url('css/gt-shortcodes.css', __FILE__) );
    wp_enqueue_style( 'gt-style' );

    wp_register_style( 'gt-vid-style', 'http://vjs.zencdn.net/4.3.0/video-js.css' );
    if( isset($fus_options['gt_video_css']) ){
        wp_enqueue_style( 'gt-vid-style' );
    }

    wp_register_style( 'gt-font-awesome', 'http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css' );
    if( $fus_options['font_awesome'] == 'font-awesome' ){
        wp_enqueue_style( 'gt-font-awesome' );
    }
    wp_register_style( 'gt-font-awesome-min', 'http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css' );
    if( $fus_options['font_awesome'] == 'font-awesome-min' ){
        wp_enqueue_style( 'gt-font-awesome-min' );
    }

    wp_register_style( 'gt-animations', plugins_url('css/animate.css', __FILE__) );
    if( isset($fus_options['animations']) && $fus_options['animations'] == 'animations' ){
        wp_enqueue_style( 'gt-animations' );
    }
    wp_register_style( 'gt-animations-min', plugins_url('css/animate.min.css', __FILE__) );
    if( isset($fus_options['animations']) && $fus_options['animations'] == 'animations-min' ){
        wp_enqueue_style( 'gt-animations-min' );
    }
}

/*------------------------------------
    Loading Scripts
------------------------------------*/

function fus_js() {

    global $fus_options;
    
	wp_register_script( 'gt-bootstrap', plugins_url('js/bootstrap.js', __FILE__), array('jquery'), '', true );
    if( $fus_options['script_one'] == 'bootstrap-script' ){
        wp_enqueue_script( 'gt-bootstrap' );
    }
    wp_register_script( 'gt-min-bootstrap', plugins_url('js/bootstrap.min.js', __FILE__), array('jquery'), '', true );
    if( $fus_options['script_one'] == 'bootstrap-script-min' ){
        wp_enqueue_script( 'gt-min-bootstrap' );
    }

    wp_register_script( 'gt-bootstrap-switch', plugins_url('js/bootstrap-switch.js', __FILE__), array('jquery'), '', true );
    if( isset($fus_options['script_switch']) ){
        wp_enqueue_script( 'gt-bootstrap-switch' );
    }
    wp_register_script( 'gt-touch', plugins_url('js/jquery.ui.touch-punch.min.js', __FILE__), array('jquery'), '', true );
    if( isset($fus_options['script_touch']) ){
        wp_enqueue_script( 'gt-touch' );
    }
    wp_register_script( 'gt-video', 'http://vjs.zencdn.net/4.3.0/video.js' );
    if( isset($fus_options['gt_video']) ){
        wp_enqueue_script( 'gt-video' );
    }
    wp_register_script( 'gt-vid-yt', plugins_url('js/vjs.youtube.js', __FILE__), array('gt-video'), '', false );
    if( isset($fus_options['gt_vid_yt']) ){
        wp_enqueue_script( 'gt-vid-yt' );
    }
    wp_register_script( 'gt-vid-vm', plugins_url('js/vjs.vimeo.js', __FILE__), array('gt-video'), '', false );
    if( isset($fus_options['gt_vid_vm']) ){
        wp_enqueue_script( 'gt-vid-vm' );
    }
    wp_register_script( 'gt-lazy-load', plugins_url('js/jquery.lazyload.js', __FILE__), array('jquery'), '', true );
    if( isset($fus_options['lazy_load']) && $fus_options['lazy_load'] == 'lazy-load' ){
        wp_enqueue_script( 'gt-lazy-load' );
    }
    wp_register_script( 'gt-lazy-load-min', plugins_url('js/jquery.lazyload.js', __FILE__), array('jquery'), '', true );
    if( isset($fus_options['lazy_load']) && $fus_options['lazy_load'] == 'lazy-load-min' ){
        wp_enqueue_script( 'gt-lazy-load-min' );
    }

    wp_register_script( 'gt-progressbar', plugins_url('js/bootstrap-progressbar.js', __FILE__), array('jquery'), '', true );
    if( isset($fus_options['gt_progressbar']) && $fus_options['gt_progressbar'] == 'gt-progressbar' ){
        wp_enqueue_script( 'gt-progressbar' );
    }
    wp_register_script( 'gt-min-progressbar', plugins_url('js/bootstrap-progressbar.min.js', __FILE__), array('jquery'), '', true );
    if( isset($fus_options['gt_progressbar']) && $fus_options['gt_progressbar'] == 'gt-progressbar-min' ){
        wp_enqueue_script( 'gt-min-progressbar' );
    }

    wp_register_script( 'gt-anim-num-script', plugins_url('js/jquery.countTo.js', __FILE__),array('jquery'), '', true );
    if( isset($fus_options['gt_anim_num_script']) ){
        wp_enqueue_script( 'gt-anim-num-script' );
    }

    wp_register_script( 'gt-gmap', 'http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.7', array(), null, false );
    wp_register_script( 'gt-maplace', plugins_url('js/maplace.js', __FILE__), array('jquery'), null, false );
    if( isset($fus_options['gt_maplace']) && $fus_options['gt_maplace'] == 'gt-maplace' ){
        wp_enqueue_script( 'gt-gmap' );
        wp_enqueue_script( 'gt-maplace' );
    }
    wp_register_script( 'gt-min-maplace', plugins_url('js/maplace.min.js', __FILE__), array('jquery'), null, false );
    if( isset($fus_options['gt_maplace']) && $fus_options['gt_maplace'] == 'gt-maplace-min' ){
        wp_enqueue_script( 'gt-gmap' );
        wp_enqueue_script( 'gt-min-maplace' );
    }

    wp_register_script( 'gt-charts', plugins_url('js/Chart.js', __FILE__), array('jquery'), null, false );
    if( isset($fus_options['gt_charts']) && $fus_options['gt_charts'] == 'gt-charts' ){
        wp_enqueue_script( 'gt-charts' );
    }
    wp_register_script( 'gt-min-charts', plugins_url('js/Chart.min.js', __FILE__), array('jquery'), null, false );
    if( isset($fus_options['gt_charts']) && $fus_options['gt_charts'] == 'gt-charts-min' ){
        wp_enqueue_script( 'gt-min-charts' );
    }

    wp_register_script( 'gt-google-chart-pie', 'https://www.google.com/jsapi', array(), null, false );
    if( isset($fus_options['gt_google_pie_chart']) && $fus_options['gt_google_pie_chart'] == 'gt-google-pie-chart' ){
        wp_enqueue_script( 'gt-google-chart-pie' );
    }

    wp_register_script( 'gt-in-view', plugins_url('js/jquery.inview.js', __FILE__),array('jquery'), '', true );
    wp_enqueue_script( 'gt-in-view' );

    wp_register_script( 'gt-application', plugins_url('js/application.js', __FILE__), array('jquery'), '', false );
    wp_enqueue_script( 'gt-application' );
	
}

add_action( 'wp_enqueue_scripts', 'fus_js' );
add_action( 'wp_enqueue_scripts', 'fus_styles', '2' );


/*------------------------------------
   Pricing Table Style
------------------------------------*/

function fus_pricing_table_style () {  

    global $fus_options;

    wp_register_style( 'gt-pricing-tables', plugins_url('css/pricingtable.css', __FILE__) );
        if( isset($fus_options['pricing_tables']) ){
            wp_enqueue_style( 'gt-pricing-tables' );
        }
    }

add_action( 'wp_enqueue_scripts', 'fus_pricing_table_style', 100 );


/*------------------------------------
    html5 support for IE6 to IE8
------------------------------------*/

function fus_html5_shiv () {    
    echo '<!--[if lt IE 9]>';
    echo '<script src="'.plugins_url('js/html5shiv.js', __FILE__).'" type="text/javascript"></script>';
    echo '<![endif]-->';
}
if( isset($fus_options['html5shiv']) ){
    add_action('wp_head', 'fus_html5_shiv');
}

/*------------------------------------
    Charts html5 support lte IE8
------------------------------------*/

function fus_charts_html5_support () {    
    echo '<!--[if lt IE 8]>';
    echo '<script src="'.plugins_url('js/excanvas.js', __FILE__).'" type="text/javascript"></script>';
    echo '<![endif]-->';
}
if( isset($fus_options['gt_charts']) ){
    add_action('wp_head', 'fus_charts_html5_support');
}


/*------------------------------------
    Iconfont support for IE6 & IE7
------------------------------------*/

function fus_icon_font_ie7 () {    
    echo '<!--[if lt IE 8]>';
    echo '<script src="'.plugins_url('js/icon-font-ie7.js', __FILE__).'" type="text/javascript"></script>';
    echo '<![endif]-->';
}
if( isset($fus_options['icon_font_ie7']) ){
    add_action('wp_head', 'fus_icon_font_ie7');
}


/*------------------------------------
    Add buttons to TinyMCE
------------------------------------*/

add_action('init', 'gt_add_button');

function gt_add_button() {
    if(strstr($_SERVER['REQUEST_URI'], 'wp-admin/post-new.php') || strstr($_SERVER['REQUEST_URI'], 'wp-admin/post.php')) {
        if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
        {  
            add_filter('mce_external_plugins', 'gt_add_plugin');  
            add_filter('mce_buttons', 'gt_register_button');  
        }
    }
}    

function gt_register_button($buttons) {
   array_push($buttons, "fusbutton", "gtbutton");  
   return $buttons;
}  

function gt_add_plugin($plugin_array) {  
   global $wp_version;
    if ( $wp_version < 3.9 ) {
        $plugin_array['fusbutton'] = plugins_url( 'tinymce/customcodes.js', __FILE__ );
    }
    if ( $wp_version >= 3.9 ) {
        $plugin_array['gtbutton'] = plugins_url( 'tinymce/customcodes39.js', __FILE__ );
    }
   return $plugin_array;
}


/*------------------------------------
    Loading TinyMCE buttons CSS & Font Awesome
------------------------------------*/


add_action('admin_head', 'fus_admin_css');
function fus_admin_css() {
    echo '<link rel="stylesheet" type="text/css" href="'.plugins_url("css/admin_shortcodes.css", __FILE__).'">';
    echo '<link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">';
}


/*------------------------------------
    Loading ColorPicker
------------------------------------*/


global $wp_version;
if ( $wp_version < 3.9 ) {
    add_action( 'admin_enqueue_scripts', 'fus_cp' );
}
function fus_cp() {
    wp_enqueue_script( 'gt_color_picker', plugins_url('jscolor/jscolor.js' , __FILE__ ) );
}
if ( $wp_version >= 3.9 ) {
    add_action('admin_enqueue_scripts','cs_init_admin_color_scripts');
}
function cs_init_admin_color_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'wp-color-picker' );
}


/*------------------------------------------
    Adding Lazy Load Initializer Script
------------------------------------------*/

function gt_lazy_load_images () {

    global $fus_options;

    if( isset($fus_options['gt_lazy_load_delay']) && $fus_options['gt_lazy_load_delay'] != '' )
    {
        $fus_options['gt_lazy_load_delay'] = 'threshold : '.$fus_options['gt_lazy_load_delay'].',';
    }else{
        $fus_options['gt_lazy_load_delay'] = null;
    }

    if( isset($fus_options['gt_lazy_load_class']) && $fus_options['gt_lazy_load_class'] != '' )
    {
        $fus_options['gt_lazy_load_class'] = '.'.$fus_options['gt_lazy_load_class'];
    }else{
        $fus_options['gt_lazy_load_class'] = null;
    }

    if( isset($fus_options['lazy_load']) ){
        echo '<script type="text/javascript">
            jQuery(document).ready(function($) {
                $("img'.$fus_options['gt_lazy_load_class'].'").lazyload({
                    effect : "fadeIn",
                    '. $fus_options['gt_lazy_load_delay'] .'
                    failure_limit : 10
                });
            });

        </script>';
    }

}

if( isset($fus_options['lazy_load']) ){
    add_action('wp_footer', 'gt_lazy_load_images', 20);
}

?>