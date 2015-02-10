<?php 
/**

@ teresa Our Trustees

@ Custom Posts


*/

add_action('init', 'our_trustees_register');

function our_trustees_register() 
{
	$labels = array(
		'name' => _x('Our Trustees', 'teresa'),
		'singular_name' => _x('our trustees', 'teresa'),
		'add_new' => _x('Add Trustees', 'teresa'),
		'add_new_item' => __('Add New Trustee', 'teresa'),
		'edit_item' => __('Edit trustee', 'teresa'),
		'new_item' => __('New trustee', 'teresa'),
		'view_item' => __('View trustee', 'teresa'),
		'search_items' => __('Search trustee', 'teresa'),
		'not_found' =>  __('No Trustee', 'teresa'),
		'not_found_in_trash' => __('No Trustee in Trash', 'teresa'), 
		'parent_item_colon' => '',
		'menu_name'          => __( 'Our Trustees', 'teresa' ),
	);
	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'menu_position'=> 115,
		'menu_icon' => 'dashicons-groups',
		'supports' => array('title','thumbnail','editor','excerpt')
	);
	
	
	register_post_type( 'our_trustees' , $args );
	
	
	register_taxonomy("our_trustees-cat", 
		array("our_trustees"), 
		array(	
			"hierarchical" => true, 
			"label" => "Categories", 
			"singular_label" => "Categories", 
			"rewrite" => array( 'with_front' => false, 'slug' => 'our_trustees' ),
			"query_var" => true
	));  
}
//tags
add_action( 'init', 'create_tag_taxonomies_our_trustees', 0 );
function create_tag_taxonomies_our_trustees() 
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Tags', 'teresa' ),
    'singular_name' => _x( 'Tag', 'teresa' ),
    'search_items' =>  __( 'Search Tags', 'teresa' ),
    'popular_items' => __( 'Popular Tags', 'teresa' ),
    'all_items' => __( 'All Tags', 'teresa' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Tag' ), 
    'update_item' => __( 'Update Tag' ),
    'add_new_item' => __( 'Add New Tag' ),
    'new_item_name' => __( 'New Tag Name' ),
    'separate_items_with_commas' => __( 'Separate tags with commas' ),
    'add_or_remove_items' => __( 'Add or remove tags' ),
    'choose_from_most_used' => __( 'Choose from the most used tags' ),
    'menu_name' => __( 'Tags' ),
  ); 

  register_taxonomy('tag','our_trustees',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'our_trustees_tag' ),
  ));
}


?>