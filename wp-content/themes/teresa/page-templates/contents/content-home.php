<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package teresa
 */
?>
           <?php 
			 
			 $options = get_option('redux_demo');
			 
			  ?>
              
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  
	
    <?php 
	//if switch-on in Theme Options then Show 1st Content else Page content.
	
	if($options['switch-on-content-livelihood'] == true):
	
	get_template_part('sections/home_page_sections/content', 'livelihoods');
	
	else:
	the_content();
	endif;
	 ?>
     
     
     <?php 
	//if switch-on in Theme Options then Show 2nd Content else Page content.
	
	if($options['switch-on-section-news'] == true):
	
	get_template_part('sections/home_page_sections/section', 'news');
	endif;
	 ?>


  <?php 
	//if switch-on in Theme Options then Show 2nd Content else Page content.
	
	if($options['switch-on-section-get-involved'] == true):
	
	get_template_part('sections/home_page_sections/section', 'getinvolved');
	endif;
	 ?>
     
     <?php 
	//if switch-on in Theme Options then Show  else Page content.
	
	if($options['switch-on-about-fb-gal'] == true):
	
	get_template_part('sections/home_page_sections/section', 'facebook_about_us_gal');
	endif;
	 ?>
     
     <?php 
	//if switch-on in Theme Options then Show  else Page content.
	
	if($options['switch-on-our-trustees'] == true):
	
	get_template_part('sections/home_page_sections/section', 'our_trustees');
	endif;
	 ?>

</article><!-- #post-## -->
