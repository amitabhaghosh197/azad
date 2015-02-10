<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package teresa
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content stories-page-wrapper span12 clearfix">
		
        <?php 
		 global $post;
		 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		 $news_args = array(
		        
				'post_type' => 'latest_news',
							  'posts_per_page' => 2,
							  'order' => 'DESC',
							  'paged' => $paged
						   
		 
		     );
		
		 $news_queries = new WP_Query( $news_args );
		 
		 if( $news_queries-> have_posts()) : while( $news_queries-> have_posts()) : $news_queries-> the_post();
		?>
       <div class="stories-page-content-blocks clearfix">
        <div class="image-box">
          <a href="<?php the_permalink() ?>" rel="bookmark">  
           <?php if(has_post_thumbnail()) :
				the_post_thumbnail( 'courage_thumb' );
					else:
					 echo  '<img src="' . IMAGE_PATH . 'blank-img-slider.jpg " class="no-image">' ;
					endif; ?> 
                    </a>
        
        
        </div><!------/span2------------->
        
         <div class="stories-content-box">
             <p><?php  echo wp_trim_words(get_the_content(),40, '[...]');  ?></p>
                  <span class="damira-buttons"><a rel="bookmark" href="<?php echo the_permalink(); ?>" title="<?php the_title_attribute( array( 'post'=>$post->ID ) ); ?>">Read More</a></span>
                   </div><!-----------/span10 courage-content---------------->
   </div>
        <?php endwhile; ?>
        <?php endif; ?>
         	
	</div><!-- .entry-content -->
 <?php 
     if ($news_queries) :
	  wp_reset_query(); 
	  wp_pagenavi( array( 'query' => $news_queries) ); 
	  wp_reset_postdata(); 
	  endif; 
	  ?>
	
</article><!-- #post-## -->
