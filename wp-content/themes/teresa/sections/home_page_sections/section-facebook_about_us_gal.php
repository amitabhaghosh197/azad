<?php

/**

@ Facebook, About Us, Gallery Section

*/
$options = get_option('redux_demo');
?>


<section>

  <div class="about-us-gallery-figure-wrapper">
    
        <div class="container">
            <div class="row-fluid">
                 <!-----------Facebook Widget------------------------>
                <div class="span5">
                <div class="facebook-post">
                 <h1><?php echo $options['opt-text-fb-heading'];   ?></h1>
                <div id="facebookWrapper">
               <?php echo $options['opt-editor-fab-block'];   ?>
</div><!-----/facebookWrapper---------------------->
</div><!-------/facebook-post----------------------------->
                </div><!------/span4------------>
              
                 <!-----------About-us----------------------------->
              <div class="span7">
                <div class="about-us-wrapper clearfix">  
                  <h1><?php echo $options['opt-text-about-us-heading']; ?></h1>
                  <div class="span12">
                        <div class="span5 about-us-featured-image">
                        
                         <img src="<?php echo $options['opt-media-about-us-image']['url']  ?>" >
                        </div> <!-------/span5 about-us-featured-image-------------------->
                             
                             <div class="span7 about-us-content">
                               <p><?php echo $options['opt-editor-about-us-content'];  ?></p>
                                   <span class="damira-buttons"> <a href="" >Read More </a> </span>



                             </div><!-------/span7 about-us-content------------------>
                             </div> <!------/span12--------------->
                  </div><!----about-us-wrapper--------------------->
                     
                      <div class="span12">
                      
                       <div class="photostream-wrapper">
                       
                       <h1 class="photostream-header"><?php echo $options['opt-text-gallery-heading'];  ?></h1>
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
                       
                       </div><!------/photostream-wrapper------------------------>
                      
                      </div><!------------/span12-------------------->
              </div><!------/span7---------->
                   
                      
                   
            
            </div><!------/row-fluid------------------>
        </div><!------/container-------------------->
  </div><!--------/about-us-gallery-figure-wrapper---------------------->


</section>
<!-----------------END OF FACEBOOK, ABOUT US, FIGURES------------------------------------------------->   