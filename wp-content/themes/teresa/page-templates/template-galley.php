<?php

/**

//@package teresa

//Gallery Page Template

 Template Name: Template Teresa Photo Gallery
 
*/



 get_header();
?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main page-content-area clearfix" role="main">
      <div class="container">
         <div class="row-fluid">
            <div class="span12">
           
			<?php  while (  have_posts() ) : the_post(); ?>
                <?php 
				 $content = the_content();
				 echo substr(strip_tags($content),0,233 ) ; ?>
                
				<?php get_template_part( 'page-templates/contents/content', 'gallery' ); ?>

				
			<?php endwhile; // end of the loop. ?>

		 </div><!-----/span12------------->
                
            </div><!--------/row-fluid---------------->
            
       </div> <!----/container----------->
      
		</main><!-- #main -->
       
	</div><!-- #primary -->

<?php get_footer(); ?>
