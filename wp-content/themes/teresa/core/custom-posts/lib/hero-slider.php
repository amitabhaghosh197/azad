<?php 
/**

@ teresa HERO SLIDER ( The Top Slider )
@ Custom Posts

*/


add_action('init', 'hero_slider_register');

function hero_slider_register() 
{
	$labels = array(
		'name' => _x('Top Full Screen Slider', 'teresa'),
		'singular_name' => _x('top full screen slider', 'teresa'),
		'add_new' => _x('Add New top full screen slider', 'teresa'),
		'add_new_item' => __('Add New top full screen slider', 'teresa'),
		'edit_item' => __('Edit top full screen slider', 'teresa'),
		'new_item' => __('New top full screen slider', 'teresa'),
		'view_item' => __('View top full screen slider', 'teresa'),
		'search_items' => __('Search Top Full Screen Slider', 'teresa'),
		'not_found' =>  __('No Top Full Screen Slider', 'teresa'),
		'not_found_in_trash' => __('No Top Full Screen Slider found in Trash', 'teresa'), 
		'parent_item_colon' => '',
		'menu_name'          => __( 'Top Full Screen Slider', 'teresa' ),
	);
	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'menu_position'=> 10,
		//'menu_icon' => IMAGE_PATH.('cd.png'),
		'menu_icon' => 'dashicons-images-alt',
		'supports' => array('title','thumbnail','page-attributes')
	);
	
	
	register_post_type( 'hero_slider' , $args );
	
	
	register_taxonomy("hero_slider-cat", 
		array("hero_slider"), 
		array(	
			"hierarchical" => true, 
			"label" => "Categories", 
			"singular_label" => "Categories", 
			"rewrite" => array( 'with_front' => false, 'slug' => 'hero_slider' ),
			"query_var" => true
	));  
}
//tags
add_action( 'init', 'create_tag_taxonomies_hero_slider', 0 );
function create_tag_taxonomies_hero_slider() 
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

  register_taxonomy('tag','hero_slider',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'hero_slider_tag' ),
  ));
}




?>