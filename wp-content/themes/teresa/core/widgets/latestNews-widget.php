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
  

add_action("widgets_init", "teresa_latest_news_widgets");

function teresa_latest_news_widgets() {
register_widget("teresa_News_Widget");
}





class teresa_News_Widget extends WP_Widget {

	
function teresa_News_Widget() {
		$widget_ops = array('classname' => 'latest-news-class', 'description' => __('Teresa Latest News widget displays the Latest News Slider', 'teresa'));
		//$control_ops = array('width' => 400, 'height' => 350);
		parent::__construct('latestNews_widget', __('Teresa Latest News-- <h2>Latest News</h2>', 'teresa'), $widget_ops);
	}

	 function widget( $args, $instance ) {
		extract($args);
		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
		echo $before_widget;
		if ( ! empty( $title ) ) {
			echo $before_title . $title . $after_title;
		} ?>
        <div id="newsSlider" class="flexslider">
                  
                  <span class="direction"> <a class="previous prev disabled" href="#"></a>  <a class="next" href="#"></a></span>
                     <ul class="slides">
			<?php
			
			global $post;
			$wid_news_args = array(
			'post_type' => 'latest_news',
			'posts_per_page' => '-1',
			'order' => 'ASC'
						   
			 );
			 
			 $wid_news_query = new WP_Query($wid_news_args);
			 if($wid_news_query -> have_posts()) :   while( $wid_news_query -> have_posts()) : $wid_news_query -> the_post();
			
			  ?>
              
               <li>
                      
                          <div class="inner-news-blocks">
                          
                          
                            <span class="date-year"><?php the_time('l j F Y'); ?></span>
                            <h5><?php the_title();  ?></h5>
                            <p><?php echo wp_trim_words(get_the_content(), 15, '[..]');  ?> </p>
                        <span class="small-more"><a href="<?php echo the_permalink();  ?>"><i class="fa fa-long-arrow-right "></i></a></span>
                           </div><!-----/inner-news-blocks--------------------->
                           
                        
                     
                        </li>
                        
                      
              <?php endwhile; endif; ?>
             </ul>
                    <?php  wp_reset_query(); ?>
                  </div> <!------/#newsSlider .flexslider----------------------->  
              
              
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


