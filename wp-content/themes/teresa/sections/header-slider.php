<?php

/**

@ Package teresa
@ Template Hero Slider


*/


?>

   <section>
         
          <div class="row-fluid">
            <div class="main-slider-wrapper clearfix">
               
                <div id="slider" class="flexslider" >
                    
                   
					
					
                    
                       <ul class="slides">
                         <?php
					
					$cat = get_query_var('hero_slider-cat');
			
					$args = array(	
						'post_type'=> 'hero_slider',
						'posts_per_page' => -1,
						'order'    => 'ASC'
						
					); 
				
				$the_query = new WP_Query( $args );
				if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					
                         
                         <li><?php  the_post_thumbnail('hero_slides'); ?>  
                         
                           <?php 
						    global $post;
							$first_caption = get_post_meta( $post -> ID , '_cmb_hero_slider_top_text', true);
							$second_caption = get_post_meta( $post -> ID, '_cmb_hero_slider_bottom_text', true);
						   
						     ?>
                          <div class="flex-caption"><h4 color = "white"><?php echo substr( strip_tags( $first_caption ), 0, 35);   ?></h4> <h2 color = "turquoise"> <?php echo substr( strip_tags( $second_caption ), 0, 55); ?></h2></div>
                         </li>
                         
                         <?php endwhile; ?>
				         <?php endif; ?>
                       
                       
                       </ul>
    
     </div><!-----/slider--------->
              
            </div><!------/main-slider-wrapper------------------->
          
          </div><!--------/row-fluid-------------------->
        </section>
        <!----End of Main Slider-------------------------------->