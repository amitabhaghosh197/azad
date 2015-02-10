<?php

/**
@ Package teresa

@ Template Hero Slider


*/

?>



   <section>
            <div class="page-header-wrapper clearfix">

               <div class="container">

                  <div class="row-fluid">

                  <div class="span12">

                <div class="span7">

             <?php 

			 global $post;

             //$parent_title = get_the_title($post->post_parent);

			 if(is_page() && $post->post_parent && !is_404() ) : ?>

   <h1 > <a class="parent-page-h1" href="<?php  echo get_permalink($post->post_parent) ;?>" title="<?php  echo get_the_title($post->post_parent); ?>"><?php echo get_the_title($post->post_parent) ;  ?></a></h1>

    <?php elseif(!is_page_template('page-templates/template-blog.php') && !is_page() && !is_single() && !is_category() && !is_404() && !is_archive() ) : ?>

    <h1 class="parent-page-h1"><?php echo 'Blog' ;   ?></h1>

    <?php elseif(is_404()) : ?>
  <h1 class="parent-page-h1"><?php _e('WE ARE EXTREMELY SORRY TO BRING YOU HERE','teresa') ;   ?></h1>
   
   <?php elseif(is_archive()) : ?>
  <h1 class="parent-page-h1"><?php _e('Hi! This our Archive','teresa') ;   ?></h1>
  
  <?php elseif(is_category()) : ?>
  <h1 class="parent-page-h1"><?php _e('Categories','teresa') ;   ?></h1>
  
	<?php else: ?>

     <h1 class="parent-page-h1"><?php the_title(); ?></h1>

		<?php endif; ?>	 

       </div><!----/span7-------------> 

       <div class="span5">

       <?php if( is_page() && $post->post_parent && !is_404() ) : ?>

       <h1 class="current-page-title"><i class="fa fa-angle-double-right"></i><?php the_title(); ?></h1>

      <?php endif;  ?>

       </div><!-------/span5------------> 

       </div><!------/span12------------> 
  
   <?php if(!is_404()): ?>
          <div class="span12">
          <?php 
		  //If is Single Post then show NAV NXT Breadcrumbs else theme Breadcrumbs
		   
		  if(is_single()){ ?>
          <?php //Nav Nxt  ?>
          <div class="navnxt-breadcrumbs">
			 <?php   
			  
			 if(function_exists('bcn_display'))  {
               bcn_display();
                 } ?>
				 
			 </div> <!------/navnxt-breadcrumbs---------------------->
			  <?php } else{
				  
				 child_pages_breadcrumb(); 
				  }
		  
		  ?>
          </div><!--------/span12------------------>
<?php endif; ?>
                   </div><!--------/row-fluid-------------------->

               </div><!-----/container--------------->

            </div><!------/page-header-wrapper------------------->

        </section>

        <!----End of Page Header-------------------------------->