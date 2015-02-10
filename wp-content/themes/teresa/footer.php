<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package teresa
 */
 $options = get_option('redux_demo');
?>

	</div><!-- #content -->

	<footer>
   
    <div class="footer-wrapper">
        <div class="container">
            <div class="row-fluid">
                   <div class="footer-top-wrapper span12">
                   <!--------------Footer-left------------------------>
                <div class="span6">
                    <div class="footer-left-wrapper">
                       <?php if( $options['switch-on-footer-left'] == true) : ?>
                            
                        <h4><?php echo $options['opt-text-footer-left-heading'];  ?></h4>
                            <div class="footer-left-wrapper-content">
                            
                             <p><?php  echo $options['opt-textarea-html-footer-left']; ?></p>
                            </div> <!------/footer-left-wrapper-content/------------------------->
                                 
                                 <div class="footer-logo">
                                 
                                  <img src="<?php echo $options['opt-media-footer-logo']['url'] ?>">
                                 </div><!--------/footer-logo------------->
                      <?php  else : ?>
                      
                      <?php  dynamic_sidebar('sidebar-footer1');?>
                      
                      <?php endif; ?>
                    </div><!---------/footer-left-wrapper--------------------->
                </div><!-----------/span6---------------->
                        
                        <!-------------Footer Middle------------------------>
                      <div class="span3">
                         <div class="footer-middle-wrapper">
                            <?php if( $options['switch-on-footer-center'] == true) :  ?>
                             <h4><?php  echo $options['opt-text-footer-center-heading']; ?></h4>
                                <div class="footer-middle-wrapper-content">
                                    <p><?php echo $options['opt-textarea-html-footer-center'];?></p>
                                
                                </div><!--------/footer-middle-wrapper-content-------------------->
                             
                             <div class="subscription-form">
                             
                             <?php echo do_shortcode('[wysija_form id="1"]'); ?>
                             
                             </div><!------/subscription-form--------------------------->
                             
                             <?php else : ?>
                             <?php dynamic_sidebar('sidebar-footer2'); ?>
                             <?php  endif; ?>
                             
                         </div> <!--------/footer-middle-wrapper--------------------> 
                      </div><!--------/span3--------------------->
                           
                           <!-----------Footer Right-------------------------->
                            <div class="span3">
                                <div class="footer-right-wrapper">
                                <?php  if( $options['switch-on-footer-right'] == true ) : ?>
                                     <h4><?php echo $options['opt-text-footer-right-heading'];  ?></h4>
                                     
                                        <div class="footer-right-inner-wrapper">
                                              <div class="footer-socials">
                                              
                                            <ul class="footer-social-block">
                                             <?php  if( !empty($options['opt-text-url-facebook'])) : ?>
                                              <li class="facebook"><a href="<?php echo $options['opt-text-url-facebook'];  ?>" ><i class="fa fa-facebook"></i></a></li>
                                              <?php endif;  ?>
                                                <?php  if( !empty( $options['opt-text-url-twitter'])) : ?>
                                              <li class="twitter"><a href="<?php  echo $options[ 'opt-text-url-twitter' ]; ?>" ><i class="fa fa-twitter"></i></a></li>
                                              <?php endif;  ?>
                                               <?php if( !empty( $options['opt-text-url-google'])) : ?>
                                              <li class="google"><a href=" <?php echo $options['opt-text-url-google']; ?>" ><i class="fa fa-google-plus"></i></a></li>
                                              <?php  endif;  ?>
                                              <?php  if( !empty( $options[ 'opt-text-url-pinterest' ])) : ?>
                                              <li class="pinterest"><a href="<?php echo $options[ 'opt-text-url-pinterest' ]; ?>" ><i class="fa fa-pinterest"></i></a></li>
                                              <?php endif; ?>
                                              <?php if( !empty( $options[ 'opt-text-url-linkedin' ])) : ?>
                                              <li class="linkedin"><a href="<?php echo $options[ 'opt-text-url-linkedin' ]; ?>" ><i class="fa fa-linkedin"></i></a></li>
                                              <?php endif; ?>
                                              <?php if( !empty ( $options[ 'opt-text-url-vimeo' ])) : ?>
                                               <li class="vimeo"><a href=" <?php echo $options[ 'opt-text-url-vimeo' ]; ?> " ><i class="fa fa-vimeo-square"></i></a></li>
                                               <?php  endif; ?>
                                            </ul>
                                             
                                              </div><!--------footer-socials---------------------->
                                              
                                            <div class="footer-contact">
                                            
                                             <h4><a href="<?php echo $options['opt-text-url-contact']; ?>">Contact Us</a></h4>
                                            </div>
                                        </div><!--------/footer-right-inner-wrapper------------------->
                                       <?php  else :  ?>
                                       
                                       <?php  dynamic_sidebar('sidebar-footer3');   ?>
                                       <?php  endif;  ?>
                                </div><!---------/footer-right-wrapper----------------------->
                            
                            </div><!-------/span3---------------->
                            
                        </div><!--------/footer-top-wrapper------------------------->
                     
                     <div class="footer-bottom-wrapper span12 ">
                     
                      <div class="span5">
                         <div class="footer-copyright-wrapper">
                         
                         <p><?php echo $options['opt-textarea-html-footer-copyright']; ?></p>
                         
                         </div> <!-------/footer-copyright-wrapper------------------->
                      
                              <div class="designer-info">
                              
                              <p> Designed &amp; Developed By : <a href="http://damiracle.com">Da Miracle</a></p>
                              </div>
                      </div> <!-----/span6--------->
                     
                           <div class="span7">
                             
                             <div class="footer-links-wrapper">
                               <?php
							     if( has_nav_menu('footer') ) :
								    wp_nav_menu(
									   array(
									    'theme_location' => 'footer',
										'menu'       => '',
										'depth'      => 0,
										'container'  => '',
										'container_class' => '', //This is the class of div inside which the ul lies
										'menu_class' => 'footer-menus',   // This is the class defined for the ul
										'fallback_cb' => 'wp_page_menu',
										//Process nav menu using our custom nav walker
										'walker' => new wp_bootstrap_navwalker()
									   
									   )
									
									);
								 
								 
							   ?> 
                               <?php endif; ?>
                                <!--<ul class="footer-menus">
                                  
                                  <li><a href="">Donate</a></li>
                                   <li><a href="">FAQ</a></li>
                                   <li><a href="">Media</a></li>
                                   <li><a href="">Gallery</a></li>
                                   <li><a href="">Trustees</a></li>
                                   <li><a href="">Upcoming Events</a></li>
                                   <li><a href="">Feedback</a></li>
                                </ul>-->
                             
                             
                             </div><!--------/footer-links-wrapper-------------------->
                           
                           </div><!-------/span6------------->
                     </div><!----------/footer-bottom-wrapper------------------->   
                        
            </div><!------row-fluid-------------------->
        </div><!-------/container------------------------->
    </div><!---------/footer-wrapper----------------->
        
         

</footer>
  
     <!------------------End of Footer-------------------------------------------->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
