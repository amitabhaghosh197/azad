<?php
/**

** teresa other custom functions setup

*/

define ('CSS_FILES', get_template_directory_uri() . '/core/layout-files/css' , true);
define ('JS_FILES', get_template_directory_uri() .'/core/layout-files/js' );
/**

@ Enqueue Styles

**/

	
function teresa_styling(){
	
	wp_enqueue_style( 'bootstrap_main',  CSS_FILES . '/bootstrap/bootstrap.min.css', '10', '2.3.2' , '' );
	wp_enqueue_style( 'main_stylesheet', CSS_FILES . '/main.css', '15',  '1.0.0' ,  '' );
	wp_enqueue_style( 'attribute_styles', CSS_FILES . '/attributes.css', '20',  '1.0.0' , '' );
	wp_enqueue_style( 'bootstrap_responsive', CSS_FILES . '/bootstrap/bootstrap-responsive.min.css', '25',  '2.3.2' , '' );
	wp_enqueue_style( 'theme_responsive', CSS_FILES . '/responsive.css', '30',  '1.0.0' , '' );
	wp_enqueue_style( 'ie_css', CSS_FILES . '/ie.css', '35',  '1.0.0' , '' );
	wp_enqueue_style( 'theme_animate_css', CSS_FILES . '/vendors/animate.css', '40',  '' , '' );
	wp_enqueue_style( 'font-awesome_css', get_template_directory_uri() . '/core/layout-files/fonts/font-awesome-4.2.0/css/font-awesome.min.css', '45',  '' , '' );
	}

add_action('wp_enqueue_scripts', 'teresa_styling');

/**

 @ Custom Style compatible top redux
*/
function teresa_custom_style(){
	
	require_once( get_template_directory() . '/style_custom.php' );
	
	}

add_action('wp_head' , 'teresa_custom_style');


/**
@ Google Font 

*/

function teresa_google_fonts()
	
	{
		
		wp_deregister_style('open-sans');
		wp_register_style('teresa-open-sans' , 'https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic', false);
		wp_register_style('teresa-meriweather' , 'http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900', false);
		wp_enqueue_style('teresa-open-sans');
		wp_enqueue_style('teresa-meriweather');
		
		}
	add_action('wp_enqueue_scripts', 'teresa_google_fonts', 5);
	
	
/**

@ Enqueue Scripts

*/

/*******************
   //jQuery Library
 *************/

		if (!is_admin()) add_action("wp_enqueue_scripts", "jquery_library", 11);
		function jquery_library() {
		   wp_deregister_script('jquery');
		   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", false, null);
		   wp_enqueue_script('jquery', '30');
		}
		
/******************

 // jQuery UI
 
*******************/

     function jQuery_ui_root(){
			  
			  if(!is_admin()){
				  
			wp_register_script('jquery_ui', "https://code.jquery.com/ui/1.11.2/jquery-ui.min.js", false, null);
		    wp_enqueue_script('jquery_ui', '35');
				  
			      }
			  
			  }
			add_action('wp_enqueue_scripts', 'jQuery_ui_root', 35); 
			
function teresa_scripts_enqueue(){
	
	     wp_enqueue_script( 'mordernizr-respond-js', JS_FILES . '/modernizr-2.6.2-respond-1.1.0.min.js', '40', '', false );
		 wp_enqueue_script( 'bootstrap-min-js', JS_FILES . '/bootstrap/bootstrap.min.js', '15', '2.3.2', true );
		 wp_enqueue_script( 'theme-js', JS_FILES . '/main.js', '20', '1.0.0', true );
		 wp_enqueue_script( 'jquery-easing-js', JS_FILES . '/vendors/jquery.easing.1.3.js', '25', '', true );
		 wp_enqueue_script( 'ani-animation-js', JS_FILES . '/vendors/anijs-min.js', '30', '', true );
		 wp_enqueue_script( 'ani-dom-helper-js', JS_FILES . '/vendors/anijs-helper-dom-min.js', '35', '', true );
		 wp_enqueue_script( 'ani-scrollReveal-js', JS_FILES . '/vendors/anijs-helper-scrollreveal-min.js', '40', '', true );
		 wp_enqueue_script( 'imagesLoaded-js', JS_FILES . '/vendors/imagesloaded.pkgd.js', '45', '', true );
		 wp_enqueue_script( 'flexslider-js', JS_FILES . '/vendors/jquery.flexslider.js', '50', '', true );
		 wp_enqueue_script( 'flexslider-manualDirection-js', JS_FILES . '/vendors/jquery.flexslider.manualDirectionControls.js', '55', '', true );
		 wp_enqueue_script( 'fitVids-js', JS_FILES . '/vendors/jquery.fitvids.js', '60', '', true );
		 wp_enqueue_script( 'placeHolder-js', JS_FILES . '/jquery.placeholder.js', '65', '', true );
	
	}
	
add_action('wp_enqueue_scripts' , 'teresa_scripts_enqueue');


/**
@ IE Specific Hack Files

*/

function teresa_ie_selectivizr(){
	  $selectivr_script = JS_FILES .'/selectivizr.js' ;
	  
	           echo '<!--[if (gte IE 6)&(lte IE 8)]> 
			   <script type="text/javascript" src="' .$selectivr_script. '"></script>
			    <![endif]--> ';
               
	
	 }

add_action('wp_head', 'teresa_ie_selectivizr');

function teresa_ie_main_js(){
	
	 $ie_main_js = JS_FILES .'/ie.js';
	 echo'<!--[if lte IE 9]>
    <script src="' . $ie_main_js . '"></script>
    <![endif]-->
   ';
	
	}

add_action('wp_footer', 'teresa_ie_main_js', '25');


/**=====================================

@ Redux Framework

========================================*/


if ( !class_exists( 'ReduxFramework' ) && file_exists( CORE_FILES . '/theme-options/ReduxCore/framework.php' ) ) {
    require_once( CORE_FILES . '/theme-options/ReduxCore/framework.php' );
}


if ( !isset( $redux_demo ) && file_exists( CORE_FILES . '/theme-options/options/config.php' ) ) {
    require_once(  CORE_FILES . '/theme-options/options/config.php' );
}


/*  ADD CUSTOM CSS IN REDUX FRAMEWORK  */
			
add_action('wp_head' , 'display_custom_css');

function display_custom_css()
	{?>
				
	<style>
	 <?php $options = get_option('redux_demo');  ?>
				  
	<?php echo $options['opt-ace-editor-css']; ?>
				  
	</style>
				  
				  
	<?php }

/**

@ The EXCERPT

*/
	
	
		class Excerpt {
	 
	// Default length (by WordPress)
	public static $length = 25;
	 
	// So you can call: my_excerpt('short');
	public static $types = array(
	'short' => 25,
	'regular' => 55,
	'long' => 100
	);
	 
	/**
	* Sets the length for the excerpt,
	* then it adds the WP filter
	* And automatically calls the_excerpt();
	*
	* @param string $new_length
	* @return void
	* @author Baylor Rae'
	*/
	public static function length($new_length = 25) {
	Excerpt::$length = $new_length;
	 
	add_filter('excerpt_length', 'Excerpt::new_length', 999);
	 
	Excerpt::output();
	}
	 
	// Tells WP the new length
	public static function new_length() {
	if( isset(Excerpt::$types[Excerpt::$length]) )
	return Excerpt::$types[Excerpt::$length];
	else
	return Excerpt::$length;
	}
	 
	// Echoes out the excerpt
	public static function output() {
	the_excerpt();
	}
	 
	}
	 
	// An alias to the class
	function custom_excerpt($length = 25) {
	Excerpt::length($length);
	}
	

/**

@Breadcrumbs


*/



function the_breadcrumb() {
    global $post;
    echo '<ul id="breadcrumbs">';
    if (!is_home() ) {
        $first_opt= '<li><a href="';
        $first_opt.= get_option('home');
        $first_opt.= '">';
        $first_opt.= 'Home';
        $first_opt.= '</a></li><li class="separator"> | </li>';
		//
		if(  $post->post_parent ){
			$first_opt = '';
			
			}elseif(is_page()){
				$first_opt = '';
				} else{
				echo $first_opt;
				
				}
        if (is_category() || is_single()) {
            echo '<li>';
            the_category(' </li><li class="separator"> | </li><li> ');
            if (is_single()) {
                echo '</li><li class="separator"> | </li><li>';
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
			
            if($post->post_parent){
                $anc = get_post_ancestors( $post->ID );
				$siblings = get_pages('child_of='.$post->post_parent.'&parent='.$post->post_parent);
    
                $title = get_the_title();
                foreach ( $anc as $ancestor ) {
          //$output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> <li class="separator">|</li>';
				$output = '';	
                }
				
				
				foreach ($siblings as $sibling){
        if ($post->ID == $sibling->ID){
            //$ID = $key;
        }
		$output .= '<li><a href="'.get_permalink($sibling).'" title="'.get_the_title($sibling).'">'.get_the_title($sibling).'</a></li> <li class="separator">|</li>';
				}
				
                echo $output;
            } else {
                echo '<li> '.get_the_title().'</li>';
            }
        }
    }
    elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
    elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
    elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
    elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
    elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
    echo '</ul>';
}

function child_pages_breadcrumb() { 

global $post; 

if ( is_page() && $post->post_parent )

	$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
else
	$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );

if ( count($childpages) != 0 ) {

	$string = '<ul class="child_pages_breadcrumb">' . $childpages . '</ul>';
}


echo $string;

}



/**

@ Admin Notice

*/

function teresa_admin_notice(){?>
	
    <div class="updated success">
        <p><?php _e( 'Please Merge to a Parent Page to get the effect of Breadcrumbs in Front End', 'teresa' ); ?></p>
    </div>
	
	<?php }
	
	add_action( 'admin_notices', 'teresa_admin_notice' );
	
function teresa_add_style_admin_head(){ ?>

	<style type="text/css">
	 .success{ background:#6ceea3 !important;}
	
	</style>
	
	<?php }

add_action('admin_head' , 'teresa_add_style_admin_head');


/* GET FEATURED IMAGE IN THE ADMIN DASHBOARD */

function teresa_get_featured_image($post_ID) {
    $post_thumbnail_id = get_post_thumbnail_id($post_ID);
    if ($post_thumbnail_id) {
        $post_thumbnail_img = wp_get_attachment_image_src($post_thumbnail_id, 'featured_preview');
        return $post_thumbnail_img[0];
    }
}

// ADD NEW COLUMN
function teresa_columns_head($defaults) {
    $defaults['featured_image'] = 'Featured Image';
    return $defaults;
}
 
// SHOW THE FEATURED IMAGE
function teresa_columns_content($column_name, $post_ID) {
    if ($column_name == 'featured_image') {
        $post_featured_image = teresa_get_featured_image($post_ID);
        if ($post_featured_image) {
            echo '<img src="' . $post_featured_image . '" />';
        }
    }
}

add_filter('manage_posts_columns', 'teresa_columns_head');
add_action('manage_posts_custom_column', 'teresa_columns_content', 10, 2);

// Hide admin-bar from frontend when logged in
add_action('admin_bar_init', 'my_admin_bar');

if(!function_exists('my_admin_bar')){
function my_admin_bar()
{
	remove_action('wp_head', '_admin_bar_bump_cb');
	add_action ('wp_head', '_admin_bar_new');
	remove_action( 'wp_footer', 'wp_admin_bar_render', 1000 );
	
	
	}

function _admin_bar_new(){ ?>
	
   <style type="text/css">
   html { margin-top: 0px !important; }
	* html body { margin-top: 0px !important; }
	@media screen and ( max-width: 782px ) {
		html { margin-top: 0px !important; }
		* html body { margin-top: 0px !important; }
	}
   
   
   </style>
	
	<?php
	}

}


	
	
