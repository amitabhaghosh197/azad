<?php

/**********************************************************************************

    @ Register all shortcodes

**********************************************************************************/

function register_teresa_shortcodes(){

      /* Full Column */
add_shortcode('full_col', 'full_col_shortcode');	

    /* One Sixth Column */
add_shortcode('one_sixth_col', 'one_sixth_col_shortcode');	

   /* Two Sixth Column */
add_shortcode('two_sixth_col', 'two_sixth_col_shortcode');	

  /* Three Sixth Column */
add_shortcode('three_sixth_col', 'three_sixth_col_shortcode');		
	
	/* Four Sixth Column */
add_shortcode('four_sixth_col', 'four_sixth_col_shortcode');
	
	/* Five Sixth Column */
add_shortcode('five_sixth_col', 'five_sixth_col_shortcode');

    /* One Fourth Column */
add_shortcode('one_fourth_col', 'one_fourth_col_shortcode');

   /* Two Fourth Column */
add_shortcode('two_fourth_col', 'two_fourth_col_shortcode');

     /* Three Fourth Column */
add_shortcode('three_fourth_col', 'three_fourth_col_shortcode');	
	
	 /* One Third Column */
add_shortcode('one_third_col', 'one_third_col_shortcode');	

    /* Two Third Column */
add_shortcode('two_third_col', 'two_third_col_shortcode');

   /* One Half Column */
add_shortcode('one_half_col', 'one_half_col_shortcode');		

      /* Teresa Container Wrapper*/
	  
add_shortcode('teresa_container_wrapper', 'teresa_container_wrapper_shortcode');

    /* Teresa Full Width Section  */
	  
add_shortcode('teresa_full_width_section', 'teresa_full_width_section_shortcode');

   /* Teresa Vertical Gap  */
	  
add_shortcode('teresa_vertical_gap', 'teresa_vertical_gap_shortcode');

   /* Damira Buttons  */
	  
    add_shortcode('teresa_damira_buttons', 'teresa_damira_buttons_shortcode');
	add_shortcode('teresa_stories_courage_slider', 'teresa_stories_courage_slider_shortcodes');
	}



	
add_action('init', 'register_teresa_shortcodes');	