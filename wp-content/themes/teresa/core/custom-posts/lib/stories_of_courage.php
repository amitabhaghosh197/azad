<?php 
/**

@ teresa Stories Of Courage

@ Custom Posts


*/

add_action('init', 'stories_courage_register');

function stories_courage_register() 
{
	$labels = array(
		'name' => _x('Stories Of Courage', 'teresa'),
		'singular_name' => _x('stories of courage', 'teresa'),
		'add_new' => _x('Add New stories of courage', 'teresa'),
		'add_new_item' => __('Add New stories of courage', 'teresa'),
		'edit_item' => __('Edit stories of courage', 'teresa'),
		'new_item' => __('New stories of courage', 'teresa'),
		'view_item' => __('View stories of courage', 'teresa'),
		'search_items' => __('Search stories of courage', 'teresa'),
		'not_found' =>  __('No Stories Of Courage', 'teresa'),
		'not_found_in_trash' => __('No Stories Of Courage found in Trash', 'teresa'), 
		'parent_item_colon' => '',
		'menu_name'          => __( 'Stories Of Courage', 'teresa' ),
	);
	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'menu_position'=> 20,
		//'menu_icon' => IMAGE_PATH.('cd.png'),
		'menu_icon' => 'dashicons-book-alt',
		'supports' => array('title','thumbnail','editor','excerpt')
	);
	
	
	register_post_type( 'stories_courage' , $args );
	
	
	register_taxonomy("stories_courage-cat", 
		array("stories_courage"), 
		array(	
			"hierarchical" => true, 
			"label" => "Categories", 
			"singular_label" => "Categories", 
			"rewrite" => array( 'with_front' => false, 'slug' => 'stories_courage' ),
			"query_var" => true
	));  
}
//tags
add_action( 'init', 'create_tag_taxonomies_stories_courage', 0 );
function create_tag_taxonomies_stories_courage() 
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

  register_taxonomy('tag','stories_courage',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'stories_courage_tag' ),
  ));
}

?>