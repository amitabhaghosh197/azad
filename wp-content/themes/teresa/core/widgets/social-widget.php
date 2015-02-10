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
  

add_action("widgets_init", "teresa_custom_widgets");

function teresa_custom_widgets() {
register_widget("teresa_Social_Widget");
}





class teresa_Social_Widget extends WP_Widget {

	
function teresa_Social_Widget() {
		$widget_ops = array('classname' => 'social-widget-class', 'description' => __('Teresa Social widget displays the Facebook, Twitter, Google Plus, Pinterest, Linkedin, Vimeo links. These links will automatically fetch the URLS as mentioned in the Theme Options Social &amp; Contact Tab', 'teresa'));
		//$control_ops = array('width' => 400, 'height' => 350);
		parent::__construct('social_widget', __('Teresa Social-- <h2>Your Social Network</h2>', 'teresa'), $widget_ops);
	}

	 function widget( $args, $instance ) {
		extract($args);
		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
		echo $before_widget;
		if ( ! empty( $title ) ) {
			echo $before_title . $title . $after_title;
		} ?>
			<?php
			global $redux_demo;
            $options = get_option('redux_demo');
			 echo '<div class="footer-socials">';
			 echo '<ul class="footer-social-block">';
			 if( !empty( $options['opt-text-url-facebook'])):
			 echo '<li class="facebook"><a href="'. $options['opt-text-url-facebook'].'"><i class="fa fa-facebook"></i></a></li>';
			 endif;
			 if( !empty( $options['opt-text-url-twitter'] ) ) :
			 echo '<li class="twitter"><a href="'. $options['opt-text-url-twitter'].'"><i class="fa fa-twitter"></i></a></li>';
			 endif;
			 if( !empty($options['opt-text-url-google'] ) ) :
			 echo '<li class="google"><a href="'. $options['opt-text-url-google'].'"><i class="fa fa-google-plus"></i></a></li>';
			 endif;
			 if( !empty( $options['opt-text-url-pinterest'] ) ) :
			 echo '<li class="pinterest"><a href="'. $options['opt-text-url-pinterest'].'"><i class="fa fa-pinterest"></i></a></li>';
			 endif;
			 if( !empty( $options['opt-text-url-linkedin'] ) ) :
			 echo '<li class="linkedin"><a href="'. $options['opt-text-url-linkedin'].'"><i class="fa fa-linkedin"></i></a></li>';
			 endif;
			 if( !empty( $options['opt-text-url-vimeo'] ) ) :
			 echo '<li class="vimeo"><a href="'. $options['opt-text-url-vimeo'].'"><i class="fa fa-vimeo-square"></i></a></li>';
			 endif;
			 echo'</ul>';
			 echo '</div>';
			 
			 
			  ?>
		<?php
		echo $after_widget;
	}

function update( $new_instance, $old_instance ) {

$instance = $old_instance;
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
		
	}

	 function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'social_widget' => '' ) );
		$title = strip_tags($instance['title']);
		
?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>


		
<?php
	}
}


