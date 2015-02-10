<?php



?>
<?php 
			 
			 $options = get_option('redux_demo');
			 
			  ?>

<section>
      <div class="container">
         <div class="row-fluid">
               <div class="content-first-wrapper clearfix ">
                <h2 data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal"> <?php echo $options['opt-text-content-first-h2'];   ?> </h2>
                
                   <div class="content-first-inner-wrapper" >
                  
                   
                   <!---------------Preparing women drivers-------------------------->
                   <div class="span4">
                      <div class="featured-block">
                          <img src="<?php echo $options['opt-media-WOW-image']['url'];   ?>" alt="">
                        
                        </div><!-------/featured-block--------------->
                          <div class="content-block">
                           <h3><?php echo $options['opt-text-WOW-heading'];   ?></h3>
                          <p><?php echo $options['opt-editor-WOW-content'];   ?></p>
                          </div><!------/content-block--------------->

                      </div><!-----/span4--------------->
                        
                             <!-------------Programme strategies---------------------------->
                      <div class="span4" >
                        <div class="featured-block" >
                          <img src="<?php echo $options['opt-media-programe-image']['url']; ?>" alt="">
                        
                        </div><!-------/featured-block--------------->
                          <div class="content-block">
                           <h3><?php echo $options['opt-text-programe-imapact-heading'];   ?></h3>
                           <p><?php echo $options['opt-editor-programme-content'];   ?></p>
                           
                          </div><!------/content-block--------------->
                      </div><!-----/span4--------------->
                      
                      
                      
                        <!------------Stories of COURAGE--------------------------->
                        <div class="span4">
                             <div class="featured-block clearfix">
                             
                             <?php get_template_part('sections/courage','slide'); ?>
                        
                        </div><!-------/featured-block--------------->
                          <div class="content-block">
                           <h3><?php echo $options['opt-text-COURAGE-heading'];  ?></h3>
                           <p><?php echo $options['opt-editor-COURAGE-content'];  ?></p>
                          
                          </div><!------/content-block--------------->
                      </div><!-----/span4--------------->
                   
                   </div><!------/content-first-inner-wrapper----------------------> 
               </div><!-----/content-first-wrapper------------------------>
          </div><!-----/row-fluid----------------->
       </div><!-------/container----------------->
</section>
<!--------End of content-first portion---------------------------->