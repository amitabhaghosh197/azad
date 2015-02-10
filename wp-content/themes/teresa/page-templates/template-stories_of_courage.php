<?php

/**

//@package teresa

//Home Template

 Template Name: Template Teresa Stories Of Courage Page
 
*/



 get_header();
?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main page-content-area" role="main">
      <div class="container">
         <div class="row-fluid">
            <div class="span8">
			<?php  while ( have_posts() ) : the_post(); ?>
                <?php 
				 $content = the_content();
				 echo substr(strip_tags($content),0,233 ) ; ?>
                 <hr />
				<?php get_template_part( 'page-templates/contents/content', 'stories' ); ?>

				
			<?php endwhile; // end of the loop. ?>

		 </div><!-----/span8------------->
                 <div class="span4">
                 <?php get_sidebar(); ?>
                 </div><!------/span4----------->
            </div><!--------/row-fluid---------------->
            
       </div> <!----/container----------->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
