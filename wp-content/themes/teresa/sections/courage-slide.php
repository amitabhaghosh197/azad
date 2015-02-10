<?php

/**

@package teresa
@ Courage Slider

*/
?>
<?php  


 ?>

<div id="courage" class="flexslider">
                          
                           <ul class="slides">
                           
                             <?php  
						   global $posts;
						  // $courage_cat = get_query_var('stories_courage-cat');
						   $courage_args = array(
						      'post_type' => 'stories_courage',
							  'posts_per_page' => '6',
							  'order' => 'ASC'
						   
						   
						   );
						   
						   $the_courage_query = new WP_Query( $courage_args );
						   if( $the_courage_query -> have_posts()) : while( $the_courage_query -> have_posts() ) : $the_courage_query ->the_post(); 
						   
						   ?>
                           
                           <li>
                           <div class="courage-wrapper">
                           
                         <div class="img-box">
                            <a href="<?php the_permalink() ?>" rel="bookmark">   <?php
							 if(has_post_thumbnail()) :
							 the_post_thumbnail( 'courage_image' );
							else:
							
							 echo  '<img src="' . IMAGE_PATH . 'blank-img-slider.jpg ">' ;
							 endif;
							  ?></a>
                              </div> <!--------/img-box------------------->
                           
                           
                           
                           <div class="courage-content">
                           <p><?php  echo wp_trim_words(get_the_content(),25, '[...]');  ?></p>
                           
                           <span class="pull-right courage-more"><a rel="bookmark" href="<?php echo the_permalink(); ?>"><i class="fa fa-long-arrow-right "></i></a></span>
                           
                           </div><!-----------/courage-content---------------->
                           </div> <!-------/courage-wrapper------------------>
                           </li>
                          
                          <?php endwhile; ?>
                          <?php endif; ?>
                           
                           
                           
                           </ul>
                          
                          </div> <!---------/courage flexslider----------------------------->