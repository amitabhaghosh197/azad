<?php

/**

@ teresa Widgets
@ Social Widget

@Contents 
 1. Facebook,
 2. Twitter,
 3. Google Plus,
 4. Pinterest,
 6. Linkedin,
 7. Vimeo

**/
  

add_action("widgets_init", "teresa_photo_stream_widgets");

function teresa_photo_stream_widgets() {
register_widget("teresa_Photo_stream_Widget");
}





class teresa_Photo_stream_Widget extends WP_Widget {

	
function teresa_Photo_stream_Widget() {
		$widget_ops = array('classname' => 'photo-stream-widget-class', 'description' => __('Teresa Photo Stream widget displays the Photo Gallery Slider', 'teresa'));
		//$control_ops = array('width' => 400, 'height' => 350);
		parent::__construct('photo_Stream_widget', __('Teresa -- <h2>Photo Stream</h2>', 'teresa'), $widget_ops);
	}

	 function widget( $args, $instance ) {
		extract($args);
		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
		echo $before_widget;
		if ( ! empty( $title ) ) {
			echo $before_title . $title . $after_title;
		} ?>
        <div class="photostream-inner">
                               <div id="photoStream" class="flexslider">
                               
                                  <span class="direction"> <a class="previous prev disabled" href="#"></a>
    <a class="next" href="#"></a></span>
                                  <ul class="slides">
                                  <?php 
								        
										global $post;
										$cat_name= get_cat_ID('photo_gallery-cat');
										$photo_args = array(
										              
													   'post_type' => 'photo_gallery',
													   'posts_per_page' => -1,
													   //'category' => 'photo_gallery',
													   //'post_status' =>'publish',
													   'cat'=>$cat_name,
													   'order'  => 'ASC',
													   //'offset' => 1
										   
										   );
										   
										 //$photo_querys = new WP_Query( $photo_args );
										$photo_querys = get_posts( $photo_args );
										 //if ($photo_querys -> have_posts()) : while ( $photo_querys -> have_posts()) : $photo_querys -> the_post();
										 
										?>
                                       
                                        <?php foreach($photo_querys as $post)  : setup_postdata($post); ?>
                                       
                                           
                                      
                                        <li>
                                   
                                      
                                          <div class="photo-1">
                                         
                                         <?php  
										   echo the_post_thumbnail('gallery_image');
										   
										 ?>
                                          <span class="flex-photoCaption"><a href="<?php echo get_permalink(); ?>"> <i class="fa fa-search"></i></a></span>
                                          </div>
                                        
                                        
                                        </li>
                                        
                                        <?php  endforeach; ?>
                                        
                                        <?php  //endwhile;   ?>
                                         <?php  //endif;   ?>
                                        
                                         <?php wp_reset_postdata();  ?>
                                        
                                      </ul>
                               
                               </div><!----photoStream------------------>  
                          
                          </div><!---------/photostream-inner------------------->
              
              
		<?php
		echo $after_widget;
	}

function update( $new_instance, $old_instance ) {

$instance = $old_instance;
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
		
	}

	 function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'latestNews_widget' => '' ) );
		$title = strip_tags($instance['title']);
		
?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>


		
<?php
	}
}


