<?php

/**

//@package teresa

//Home Template

 Template Name: Template Teresa Home Page
 
*/



 get_header();
?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php  while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'page-templates/contents/content', 'home' ); ?>

				
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
