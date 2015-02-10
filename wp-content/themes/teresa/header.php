<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package teresa
 */
?>
<!DOCTYPE html>
 <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php $options = get_option('redux_demo');
      $key_words = $options['opt-text-keyword'];
 if($options['switch-on-theme-seo'] ==true) :
 echo '<meta name="keywords" content=" ' . $key_words .'" >';
 endif;
    ?>

<?php $options = get_option('redux_demo');
      $description = $options['opt-text-description'];
 if($options['switch-on-theme-seo'] ==true) :
 echo '<meta name="description" content=" ' . $description .'" >';
 endif;
    ?>
    

<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" type="image/x-icon" href="<?php
   $options = get_option('redux_demo');
   $favicon = $options['opt-media-favicon']['url'];
   echo $favicon;
  ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   
<div id="preloader">
	<div id="status"><div class="spinner"></div> <!----/spinner for preloader image---------------></div> <!-----/status------------------->
   </div> <!------/preloader-------------->
   <!-- End of Preloader -->
  
<div id="page" class="hfeed site">
	

	<header id="masthead" role="banner">
		   <div class="container">
       <div class="row-fluid">
            <div class="span4">
             <div class="logo">
             
             <?php 
			 
			 $options = get_option('redux_demo');
			 $logo_image = $options['opt-media-header-logo']['url']; ?>
             
             <?php if( $logo_image  ) : ?>
                
                <a href="<?php echo esc_url( home_url());  ?>"><img src="<?php echo esc_url( $logo_image );  ?>" alt="<?php echo bloginfo('name'); ?>"></a>
             
             <?php else : ?>
             
              <a href="<?php echo esc_url( home_url());  ?>"><h1> <?php echo bloginfo('name'); ?> </h1></a>
              <h4> <?php echo bloginfo( 'description' );  ?></h4>
             <?php endif; ?>
              
             </div><!-----------/logo------------------>
            </div><!-------/span4------------------->
            
        <div class="span8">
          <div class="header-right-wrapper">
          
               <div class="header-right-top clearfix">
                 <div class="span5 pull-right">
                 <?php get_search_form();   ?>
                 </div> <!----/span3 pull-right------------------>
               </div><!---------/header-right-top-------------->
               
                <nav class="uber-classes clearfix">
                 <div class="navbar pull-right">
                   <?php if( function_exists('ubermenu') && $options['switch-on-uber-menu']==true) : ?>
                   <?php ubermenu( 'main' , array( 'theme_location' => 'primary' ) ); ?>
                   <?php  else : ?>
                   <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                   <i class="fa fa-bars"></i>
                   </a>
                 
                     <div class="nav-collapse">
                          <?php 
				if(has_nav_menu('primary')){
				wp_nav_menu( array(
				 'theme_location'  => 'primary',
					  'menu'       => '',
					  'depth'      => 2,
					  'container'  => '',
				 'container_class' => '', //This is the class of div inside which the ul lies
					  'menu_class' => 'main-menu ',   // This is the class defined for the ul
					 'fallback_cb' => 'wp_page_menu',
					//Process nav menu using our custom nav walker
						  'walker' => new wp_bootstrap_navwalker()
                                     )
                                      );
									 }
							?>
                     </div><!-----/nav-collapse---------------->
                     <?php  endif; ?>
                 </div><!-------/navbar------------------->
                
                </nav>
                
                <!-------/end of navigation------------------------>
          </div><!-----/header-right-wrapper--------------------->
        
        </div><!--------/span8---------------------->
       </div><!--------/row-fluid--------------------->
     </div> <!-----/container------------>
	</header><!-- #masthead -->
      
      
      <?php 
	  if(is_page_template('page-templates/template-home.php') && is_front_page()) :
	  
	  get_template_part('sections/header', 'slider'); ?>
      
      <?php else : ?>
      
      <?php get_template_part('sections/page', 'header'); ?>
      
      <?php endif; ?>
      
	<div id="content" class="site-content">
