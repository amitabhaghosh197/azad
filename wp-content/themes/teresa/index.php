<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package teresa
 */

get_header(); ?>

	<div id="primary" class="content-area page-content-area">
		<main id="main" class="site-main " role="main">
        <div class="container">
         <div class="row-fluid">
            <div class="span8">

		<?php 
		global $new_query;
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		
		$new_query = new WP_Query( array('post_type' => 'post', 'posts_per_page' => 2, 'paged' => $paged));
		if ($new_query->have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( $new_query->have_posts() ) : $new_query->the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile;
			wp_reset_postdata(); ?>

			<?php 
			 if ($new_query ) :
	        wp_reset_query(); 
	        wp_pagenavi(array( 'query' => $new_query)  ); 
			
			endif;
			//teresa_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
          </div><!-----/span8------------->
                 <div class="span4">
                 <?php get_sidebar(); ?>
                 </div><!------/span4----------->
            </div><!--------/row-fluid---------------->
            
       </div> <!----/container----------->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
