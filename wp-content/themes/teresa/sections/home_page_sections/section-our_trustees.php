<?php

/*

@ Our Trustees


*/
$options = get_option('redux_demo');
?>


   <section>
      <div class="our-trusties-wrapper">
         <div class="container">
             <div class="row-fluid">
                 <div class="span12">
                 <h1><?php echo $options['opt-text-trustees-heading']; ?></h1>
                     <div class="our-trusties-inner-wrapper">
                         <div id="ourTrusties" class="flexslider">
                         
                            
                             <ul class="slides">
                             <?php
							 
							  global $post;
							  $trustees_args = array(
							                   
											   'post_type' => 'our_trustees',
											   'posts_per_page' => -1
										   
										   );
							 
							   $trustees_query = new WP_Query( $trustees_args );
							   
							   if( $trustees_query -> have_posts()) : while ( $trustees_query -> have_posts() ) : $trustees_query -> the_post();
							 ?>
                                 <li>
                                     <div class="photo-wrapper">
                                        
                                         <div class="photo-2" data-anijs="if: mouseover,  do: pulse animated">
                                         <a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title();?>">
                                         <?php if( has_post_thumbnail() ) : ?>
                                         
                                           <?php the_post_thumbnail('trustees_image');?>
                                              
                                              <?php else : ?>
                                              <?php echo '<img src="' . IMAGE_PATH . 'blank-img-slider.jpg ">' ?>
                                              
                                              <?php endif;  ?>
                                              </a>
                                         </div><!-------/photo-2----------------->
                                         <div class="flex-trusties-info">
                                         <?php 
										 $trustees_name = get_post_meta( $post-> ID , '_cmb_trustees_info_name_text', true);
										 $trustees_desig = get_post_meta( $post-> ID, '_cmb_trustees_info_desig_text',true);
										   ?>
                                         <p><?php echo substr(strip_tags( $trustees_name ),0 , 17);  ?></p>
                                               <p><?php echo substr( strip_tags( $trustees_desig ) , 0 , 10);  ?></p>
                                               </div><!-----/flex-trusties-info--------------->
                                     </div><!--------/photo-wrapper------------>
                                 </li>
                                 
                                 <?php endwhile; endif; wp_reset_query(); ?>
                                 
                             
                             </ul>
                         
                         
                         </div><!------/#ourTrusties------------------->
                     
                     
                     </div><!---------/our-trusties-inner-wrapper---------------------->            
                 </div><!------/span12----------------->
                 
             </div><!-------/row-fluid-------------->
         </div><!-------/container--------------->
      </div><!-----------/our-trusties-wrapper----------------------->

</section>

<!--------------END OF TRUSTIES------------------------------>   