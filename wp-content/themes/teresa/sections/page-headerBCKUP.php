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
             $parent_title = get_the_title($post->post_parent);
			 if($post->post_parent) : ?>
   <h1 > <a class="parent-page-h1" href="<?php  echo get_permalink($post->post_parent) ;?>" title="<?php  echo $parent_title; ?>"><?php echo $parent_title ;  ?></a></h1>
    <?php elseif(!is_page_template('page-templates/template-blog.php') && !is_page() && !is_single() && !is_category() && !is_404()  ) : ?>
    <h1 class="parent-page-h1"><?php echo 'Blog' ;   ?></h1>
    
	<?php else: ?>
     <h1 class="parent-page-h1"><?php the_title(); ?></h1>
		<?php endif; ?>	 
			 
  
       </div><!----/span7-------------> 
       <div class="span5">
       <?php if($post->post_parent) : ?>
       <h1 class="current-page-title"><i class="fa fa-angle-double-right"></i><?php the_title(); ?></h1>
      <?php endif;  ?>
       </div><!-------/span5------------> 
       </div><!------/span12------------> 
      
          <div class="span12">
          <?php child_pages_breadcrumb(); ?>
         
          </div><!--------/span12------------------>
        
                   </div><!--------/row-fluid-------------------->
               </div><!-----/container--------------->
            </div><!------/page-header-wrapper------------------->
        </section>
        <!----End of Page Header-------------------------------->