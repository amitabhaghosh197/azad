<?php
/**
 * The template for displaying all single posts.
 *
 * @package teresa
 */

get_header(); ?>

	<div id="primary" class="content-area page-content-area">
		<main id="main" class="site-main" role="main">
   <div class="container">
         <div class="row-fluid">
            <div class="span8">
            
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'post_type_single' ); ?>

			<?php teresa_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

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