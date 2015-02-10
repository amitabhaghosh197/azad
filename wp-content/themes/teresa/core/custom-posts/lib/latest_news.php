<?php 
/**

@ teresa Latest News

@ Custom Posts


*/


add_action('init', 'latest_news_register');

function latest_news_register() 
{
	$labels = array(
		'name' => _x('Latest News', 'teresa'),
		'singular_name' => _x('latest news', 'teresa'),
		'add_new' => _x('Add New latest news', 'teresa'),
		'add_new_item' => __('Add New latest news', 'teresa'),
		'edit_item' => __('Edit latest news', 'teresa'),
		'new_item' => __('New latest news', 'teresa'),
		'view_item' => __('View latest news', 'teresa'),
		'search_items' => __('Search latest news', 'teresa'),
		'not_found' =>  __('No Latest News', 'teresa'),
		'not_found_in_trash' => __('No Latest News found in Trash', 'teresa'), 
		'parent_item_colon' => '',
		'menu_name'          => __( 'Latest News', 'teresa' ),
	);
	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'menu_position'=> 100,
		'menu_icon' => 'dashicons-pressthis',
		'supports' => array('title','thumbnail','editor','excerpt')
	);
	
	
	register_post_type( 'latest_news' , $args );
	
	
	register_taxonomy("latest_news-cat", 
		array("latest_news"), 
		array(	
			"hierarchical" => true, 
			"label" => "Categories", 
			"singular_label" => "Categories", 
			"rewrite" => array( 'with_front' => false, 'slug' => 'latest_news' ),
			"query_var" => true
	));  
}
//tags
add_action( 'init', 'create_tag_taxonomies_latest_news', 0 );
function create_tag_taxonomies_latest_news() 
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

  register_taxonomy('tag','latest_news',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'latest_news_tag' ),
  ));
}
?>