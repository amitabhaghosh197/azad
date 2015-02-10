<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package teresa
 */

get_header(); ?>

	<div id="primary" class="content-area page-content-area">
		<main id="main" class="site-main" role="main">
   <div class="container">
         <div class="row-fluid">
            <div class="span8">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php teresa_paging_nav(); ?>

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
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
