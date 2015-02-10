<?php
/**

@teresa Shortcodes

*/


include_once(CORE_FILES . '/shortcodes/shortcode_actions.php');
/***

1. Bootstrap shortcodes

*/




/*  Filter unnecessary <br/> & <p> inside the shortcodes  */

function shortcode_remove_filter( $content ) {
	global $shortcode_tags;

	if ( empty( $shortcode_tags ) || !is_array( $shortcode_tags ) ) {
		return $content;
	}

	$tagregexp = join( '|', array_map( 'preg_quote', array_keys( $shortcode_tags ) ) );

	$pattern =
		  '/'
		. '<p>'                              // Opening paragraph
		. '\\s*+'                            // Optional leading whitespace
		. '('                                // 1: The shortcode
		.     '\\['                          // Opening bracket
		.     "($tagregexp)"                 // 2: Shortcode name
		.     '(?![\\w-])'                   // Not followed by word character or hyphen
		                                     // Unroll the loop: Inside the opening shortcode tag
		.     '[^\\]\\/]*'                   // Not a closing bracket or forward slash
		.     '(?:'
		.         '\\/(?!\\])'               // A forward slash not followed by a closing bracket
		.         '[^\\]\\/]*'               // Not a closing bracket or forward slash
		.     ')*?'
		.     '(?:'
		.         '\\/\\]'                   // Self closing tag and closing bracket
		.     '|'
		.         '\\]'                      // Closing bracket
		.         '(?:'                      // Unroll the loop: Optionally, anything between the opening and closing shortcode tags
		.             '[^\\[]*+'             // Not an opening bracket
		.             '(?:'
		.                 '\\[(?!\\/\\2\\])' // An opening bracket not followed by the closing shortcode tag
		.                 '[^\\[]*+'         // Not an opening bracket
		.             ')*+'
		.             '\\[\\/\\2\\]'         // Closing shortcode tag
		.         ')?'
		.     ')'
		. ')'
		. '\\s*+'                            // optional trailing whitespace
		. '<\\/p>'                           // closing paragraph
		. '/s';

	return preg_replace( $pattern, '$1', $content );
}
remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'wpautop' , 99);
add_filter( 'the_content', 'shortcode_remove_filter',100 );




/******************************************************************************************************************************************
*******************************************************************************************************************************************

@@@@@@@@@@@@@@@@@@@@@@@@@ BOOTSTRAP COLUMNS SHORTCODES


*****************************************************************************************************************************************
***********************************************************************************************************************/

 
	/*    Full Col         */

function full_col_shortcode( $atts, $content = null){
	
	$return_content = '<div class="span12">' . do_shortcode( $content ) .'</div>';
	
	return $return_content;
	
	}
	

	/*    One Sixth         */

function one_sixth_col_shortcode( $atts, $content = null){
	
	$return_content = '<div class="span2">' . do_shortcode( $content ) .'</div>';
	
	return $return_content;
	}
	

	/*    Three Sixth         */

function two_sixth_col_shortcode( $atts, $content = null){
	
	$return_content = '<div class="span4">' . do_shortcode( $content ) .'</div>';
	
	return $return_content;
	}
	

	/*    Three Sixth         */

function three_sixth_col_shortcode( $atts, $content = null){
	
	$return_content = '<div class="span6">' . do_shortcode( $content ) .'</div>';
	
	return $return_content;
	}
	


         /*    Four Sixth         */

function four_sixth_col_shortcode( $atts, $content = null){
	
	$return_content = '<div class="span8">' . do_shortcode( $content ) .'</div>';
	
	return $return_content;
	}
	

      /*    Five Sixth         */

function five_sixth_col_shortcode( $atts, $content = null){
	
	$return_content = '<div class="span10">' . do_shortcode( $content ) .'</div>';
	
	return $return_content;
	}
	

      /*    One Fourth         */

function one_fourth_col_shortcode( $atts, $content = null){
	
	$return_content = '<div class="span3">' . do_shortcode( $content ) .'</div>';
	
	return $return_content;
	}

 /*    Two Fourth         */

function two_fourth_col_shortcode( $atts, $content = null){
	
	$return_content = '<div class="span6">' . do_shortcode( $content ) .'</div>';
	
	return $return_content;
	}
	
	
	 /*    Three Fourth         */

function three_fourth_col_shortcode( $atts, $content = null){
	
	$return_content = '<div class="span9">' . do_shortcode( $content ) .'</div>';
	
	return $return_content;
	}
	

  /*    One Third         */

function one_third_col_shortcode( $atts, $content = null){
	
	$return_content = '<div class="span4">' . do_shortcode( $content ) .'</div>';
	
	return $return_content;
	}
	

   /*    Two Third         */

function two_third_col_shortcode( $atts, $content = null){
	
	$return_content = '<div class="span6">' . do_shortcode( $content ) .'</div>';
	
	return $return_content;
	}
	
	
	  /*    One Half         */

function one_half_col_shortcode( $atts, $content = null){
	
	$return_content = '<div class="span6">' . do_shortcode( $content ) .'</div>';
	
	return $return_content;
	
	}
	
	/*     Teresa Inner Wrapper                     */

function teresa_container_wrapper_shortcode( $atts, $content = null){
	   extract( shortcode_atts( array( 'background' => ''), $atts));
	
	   $return_content = '<div class= "container" style="background-color : ' . $background . ';">';
	   $return_content .= ' <div class="row-fluid">';
	   $return_content .=  do_shortcode ($content) ;
	   $return_content .=  '</div>' ;
	   $return_content .=  '</div>' ;
	   return $return_content;
	
	}
	
	
	/*       Teresa Full Width Section                     */

function teresa_full_width_section_shortcode( $atts, $content = null){
	   extract( shortcode_atts( array( 
	                                   'background' => '#fff',
									   'paddingtop' => '',
									   'paddingbottom' => '',
									   'paddingright' => '',    
									   'paddingleft' => ''
									  
									          ), $atts));
	
	   $return_content = '<div class= "teresa-full-width-wrapper clearfix"  style="background : '. $background .'; padding-top: '. $paddingtop .'px ; padding-bottom: ' . $paddingbottom .'px ; padding-right :'. $paddingright .'px ; padding-left : '. $paddingleft .'px ;  ">';
	                             
	   $return_content .=  do_shortcode ($content) ;
	   $return_content .=  '</div>' ;
	   return $return_content;
	
	}

function teresa_vertical_gap_shortcode( $atts, $content = null){
	
	  extract( shortcode_atts( array( 'height' => ''), $atts));
	  
	  $return_content = '<div class="teresa_vertical_gap" style="height : ' . $height . 'px !important;">';
	  $return_content .=  do_shortcode ($content) ;
	   $return_content .=  '</div>' ;
	   return $return_content;
	
	}
	

function teresa_damira_buttons_shortcode( $atts, $content = null){
	
	  extract( shortcode_atts( array( 
	  
	  'link' => '',
	  
	  ), $atts));
	  
	  $return_content = '<span class="damira-buttons"> <a href="';
	  $return_content .= $link ;
	  $return_content .= '">';
	  $return_content .= $content;
	   $return_content .=  '</a> </span>' ;
	   return $return_content;
	
	}
	

function teresa_stories_courage_slider_shortcodes( $atts, $content = null){
	                    //add_image_size('courage_image', 99, 140, true);
						extract( shortcode_atts( array( 'title' => '',), $atts));
						
						   $return_content = '<h3>'. $title .'</h3>';
						   $return_content .= '<div class="span4 clearfix"  >';
	                       $return_content .= '<div class="featured-block "  >';
	                       $return_content .= '<div id="courage" class="flexslider" >';
                          
                           $return_content .= '<ul class="slides">';
                           
                              
						   global $posts;
						   
						   $courage_args = array(
						      'post_type' => 'stories_courage',
							  'posts_per_page' => '-1',
							  'order' => 'ASC'
						   
						   
						   );
						   
						   $the_courage_query = new WP_Query( $courage_args );
						   if( $the_courage_query -> have_posts()) : while( $the_courage_query -> have_posts() ) : $the_courage_query ->the_post(); 
						   
						  
                           
                           $return_content .= '<li>';
                           $return_content .= '<div class="courage-wrapper clearfix" >';
                           
                           $return_content .= '<div class="img-box">';
                           $return_content .=' <a href=" '. get_permalink() . '" rel="bookmark">'; 
							 if(has_post_thumbnail($the_courage_query ->post->ID)) {
								 
							 $return_content .=  get_the_post_thumbnail($the_courage_query ->post->ID, 'courage_image') ;
							 }else{
							
							 $return_content .= '<img src="' . IMAGE_PATH . 'blank-img-slider.jpg ">' ;
							 }
							 $return_content .= '</a>';
                             $return_content .=' </div>';
                          
                           
                           
                          $return_content .=' <div class="courage-content" >';
                           $return_content .= '<p> '. wp_trim_words(get_the_content(),25, '[...]') .'</p>'; 
                           
                           $return_content .='<span class="pull-right courage-more">';
						   $return_content .= '<a rel="bookmark" href="'. get_permalink(). '">';
						   $return_content .= '<i class="fa fa-long-arrow-right "></i>';
						   $return_content .= '</a>';
						   $return_content .= '</span>';
                           
                           $return_content .='</div>';
                           $return_content .='</div>'; 
						  
                           $return_content .= '</li>';
                          
                           endwhile;
                          endif; 
                           wp_reset_query();
                           
                           
                          $return_content .='</ul>';
                          
                          $return_content .='</div>';
						  $return_content .='</div>';
						  $return_content .='</div>';
						  
                          return $return_content;
                          
                          
	
	}