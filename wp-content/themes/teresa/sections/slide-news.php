<?php
/**

@teresa
@ content NEWS

*/

?>

<div id="newsSlider" class="flexslider">
                  
                  <span class="direction"> <a class="previous prev disabled" href="#"></a>  <a class="next" href="#"></a></span>
                     <ul class="slides">
                         
                         <?php
						   
						   global $post;
						   $news_args = array(
						   'post_type' => 'latest_news',
						   'posts_per_page' => '-1',
						   'order' => 'ASC'
						   
						    );
						   
						   $news_query = new WP_Query( $news_args );
						   if($news_query -> have_posts()) : while( $news_query -> have_posts() ) : $news_query -> the_post();
						   
						   ?>
                        <li>
                        
                          <div class="inner-news-blocks">
                          
                          
                            <span class="date-year"><?php the_time('l j F Y'); ?></span>
                            <h5><?php the_title();  ?></h5>
                            <p><?php echo wp_trim_words(get_the_content(), 15, '[..]');  ?> </p>
                        <span class="small-more"><a href="<?php echo the_permalink();  ?>"><i class="fa fa-long-arrow-right "></i></a></span>
                           </div><!-----/inner-news-blocks--------------------->
                        </li>
                        
                        <?php  endwhile;  ?>
                        <?php  endif; ?>
                       
                     </ul>
                    <?php  wp_reset_query(); ?>
                  </div> <!------/#newsSlider .flexslider----------------------->