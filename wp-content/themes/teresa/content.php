<?php
/**
 * @package teresa
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 <div class="stories-page-wrapper">
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php teresa_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content ">
		<?php 
				 $content = the_content();
				 echo substr(strip_tags($content),0,233 ) ; ?>
                 <hr />

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
    </div><!------/stories-page-wrapper---------------->
</article><!-- #post-## -->