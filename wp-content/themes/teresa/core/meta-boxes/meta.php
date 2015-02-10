<?php


/**

@package teresa
@ Custom Meta Box

@ Contents
  
  1. For Hero Slider
*/

add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );

function cmb_sample_metaboxes( array $meta_boxes ){
	
	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	 
	 
	 $meta_boxes['hero_slider_metabox'] = array(
	 
	   'id'         => 'hero_slider_metabox',
		'title'      => __( 'Captions For This Slide', 'cmb' ),
		'pages'      => array( 'post', 'hero_slider' ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		// 'cmb_styles' => true, // Enqueue the CMB stylesheet on the frontend
		
		'fields'     => array(
		
		                 array(
				'name'       => __( 'Top Caption', 'cmb' ),
				'desc'       => __( 'Top Caption of this Slide ( Must be in One Line)', 'cmb' ),
				'id'         => $prefix . 'hero_slider_top_text',
				'type'       => 'text',
				'show_on_cb' => 'cmb_test_text_show_on_cb', // function should return a bool value
				// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
				// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
				// 'on_front'        => false, // Optionally designate a field to wp-admin only
				// 'repeatable'      => true,
			),
			
			
			array(
				'name'       => __( 'Bottom Caption', 'cmb' ),
				'desc'       => __( 'Bottom Caption of this Slide ( Must be in One Line)', 'cmb' ),
				'id'         => $prefix . 'hero_slider_bottom_text',
				'type'       => 'text',
				'show_on_cb' => 'cmb_test_text_show_on_cb', // function should return a bool value
				// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
				// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
				// 'on_front'        => false, // Optionally designate a field to wp-admin only
				// 'repeatable'      => true,
			),
		
		
		
		
		
		
		),
	 
	 
	 );
	 
	 $meta_boxes['trustees_info_metabox'] = array(
	 
	   'id'         => 'trustees_info_metabox',
		'title'      => __( 'Trustees info', 'cmb' ),
		'pages'      => array( 'post', 'our_trustees' ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		// 'cmb_styles' => true, // Enqueue the CMB stylesheet on the frontend
		
		'fields'     => array(
		
		                 array(
				'name'       => __( 'Name', 'cmb' ),
				'desc'       => __( 'Name of the Trustee', 'cmb' ),
				'id'         => $prefix . 'trustees_info_name_text',
				'type'       => 'text',
				'show_on_cb' => 'cmb_test_text_show_on_cb', // function should return a bool value
				// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
				// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
				// 'on_front'        => false, // Optionally designate a field to wp-admin only
				// 'repeatable'      => true,
			),
			
			
			array(
				'name'       => __( 'Designation', 'cmb' ),
				'desc'       => __( 'Designation of Trustee', 'cmb' ),
				'id'         => $prefix . 'trustees_info_desig_text',
				'type'       => 'text',
				'show_on_cb' => 'cmb_test_text_show_on_cb', // function should return a bool value
				// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
				// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
				// 'on_front'        => false, // Optionally designate a field to wp-admin only
				// 'repeatable'      => true,
			),
		
		
		array(
				'name'       => __( 'email A/c', 'cmb' ),
				'desc'       => __( 'email A/c of Trustee', 'cmb' ),
				'id'         => $prefix . 'trustees_info_email_text',
				'type'       => 'text',
				'show_on_cb' => 'cmb_test_text_show_on_cb', // function should return a bool value
				// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
				// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
				// 'on_front'        => false, // Optionally designate a field to wp-admin only
				// 'repeatable'      => true,
			),
			
		array(
				'name'       => __( 'Twitter A/c', 'cmb' ),
				'desc'       => __( 'Twitter A/c of Trustee', 'cmb' ),
				'id'         => $prefix . 'trustees_info_twit_text',
				'type'       => 'text',
				'show_on_cb' => 'cmb_test_text_show_on_cb', // function should return a bool value
				// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
				// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
				// 'on_front'        => false, // Optionally designate a field to wp-admin only
				// 'repeatable'      => true,
			),
			
		
		array(
				'name'       => __( 'Facebook A/c', 'cmb' ),
				'desc'       => __( 'Facebook A/c of Trustee', 'cmb' ),
				'id'         => $prefix . 'trustees_info_fb_text',
				'type'       => 'text',
				'show_on_cb' => 'cmb_test_text_show_on_cb', // function should return a bool value
				// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
				// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
				// 'on_front'        => false, // Optionally designate a field to wp-admin only
				// 'repeatable'      => true,
			),
		
		
		
		
		),
	 
	 
	 );
	 
	 
	return $meta_boxes; 
	
	
	}
	
add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once CORE_FILES. '/meta-boxes/init.php';

}
