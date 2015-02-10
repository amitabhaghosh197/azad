<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package teresa
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main page-content-area" role="main">
       <div class="container">
         <div class="row-fluid">
            <div class="span8">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

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
