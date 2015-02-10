<?php
/**
 * @package teresa
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
      
		<div class="entry-meta">
			<?php teresa_posted_on(); ?>
		</div><!-- .entry-meta -->
       
	</header><!-- .entry-header -->

<?php 
if(has_post_thumbnail()):
 ?>
 <div class="big-thumbnail">
 <?php the_post_thumbnail(); ?>
 
 </div><!--/big-thumbnail---------->
 <?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'teresa' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php teresa_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
