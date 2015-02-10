<?php 
/**

@ teresa Photo Gallery

@ Custom Posts


*/

add_action('init', 'photo_gallery_register');

function photo_gallery_register() 
{
	$labels = array(
		'name' => _x('Photo Gallery', 'teresa'),
		'singular_name' => _x('photo gallery', 'teresa'),
		'add_new' => _x('Add New photo gallery', 'teresa'),
		'add_new_item' => __('Add New latest news', 'teresa'),
		'edit_item' => __('Edit photo gallery', 'teresa'),
		'new_item' => __('New photo gallery', 'teresa'),
		'view_item' => __('View photo gallery', 'teresa'),
		'search_items' => __('Search photo gallery', 'teresa'),
		'not_found' =>  __('No Photo Gallery', 'teresa'),
		'not_found_in_trash' => __('No Photo Gallery found in Trash', 'teresa'), 
		'parent_item_colon' => '',
		'menu_name'          => __( 'Photo Gallery', 'teresa' ),
	);
	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'menu_position'=> 110,
		'menu_icon' => 'dashicons-format-gallery',
		'supports' => array('title','thumbnail','editor','excerpt')
	);
	
	
	register_post_type( 'photo_gallery' , $args );
	
	
	register_taxonomy("photo_gallery-cat", 
		array("photo_gallery"), 
		array(	
			"hierarchical" => true, 
			"label" => "Categories", 
			"singular_label" => "Categories", 
			"rewrite" => array( 'with_front' => false, 'slug' => 'photo_gallery' ),
			"query_var" => true
	));  
}
//tags
add_action( 'init', 'create_tag_taxonomies_photo_gallery', 0 );
function create_tag_taxonomies_photo_gallery() 
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

  register_taxonomy('tag','photo_gallery',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'photo_gallery_tag' ),
  ));
}

?>