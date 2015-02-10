<?php
/**
 * The template used for displaying Gallery Page Content
 *
 * @package teresa
 */
?>

<?php


function teresa_gallery_post_class( $classes ) {
	global $wp_query;
	if( ! $wp_query->is_main_query() )
		return $classes;
		
	$classes[] = 'one-third';
	if( 0 == $wp_query->current_post || 0 == $wp_query->current_post % 3 )
		$classes[] = 'first';
	return $classes;
}
add_filter( 'post_class', 'teresa_gallery_post_class' );
?>

 <?php 
								        
	global $post;
	$cat_name= get_cat_ID('photo_gallery-cat');
	$photo_args = array(
										              
				'post_type' => 'photo_gallery',
		   'posts_per_page' => -1,
		 		       'cat'=> $cat_name,
				   'order'  => 'ASC',
										   );
										   
		$photo_querys = get_posts( $photo_args );
										 
										?>
                                        
 <?php foreach($photo_querys as $post)  : setup_postdata($post); ?>
 
<div id="gal-img" <?php post_class(); ?>>
                                          
      <?php  
		echo the_post_thumbnail('gallery_full');
										   
		?>
                                      
       <div class="gallery-title"><h3><?php  $title = get_the_title();
	   echo wp_trim_words( $title, 3,'...'); ?></h3></div>                             
         <div class="gallery-hover-box">
		     <div class="hover-content">
                <p>
				 <?php 
                 
				 echo wp_trim_words(get_the_content(),10, '[...]');
                  ?>
                  </p>
                 
                  <div class="gallery-redirect-url"><a href="<?php echo get_the_permalink(); ?>" target="_blank"><i class="fa fa-external-link"></i></a></div>
             </div><!----/hover-content---------->
          </div> <!-----/gallery-hover-box------------>          

</div><!-- #post-## -->

 <?php  endforeach; ?>

 
 <?php wp_reset_postdata();  ?>