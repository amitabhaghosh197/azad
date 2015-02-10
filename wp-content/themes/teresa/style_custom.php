<?php 
/**

@ teresa Few Custom Styles


*/
  
  global $redux_demo;
  $options = get_option('redux_demo'); 
  

 ?>
 <style type="text/css">
 
 ::-moz-selection { background : <?php echo $options['opt-color-theme-color'];  ?>; color : #fff; }
::selection { background : <?php echo $options['opt-color-theme-color'];  ?>; color : #fff; }

h1{ font-family : <?php echo $options['opt-typography-h1']['font-family'];  ?>;
    color :  <?php echo $options['opt-typography-h1']['color'];  ?>;
	font-size : <?php echo $options['opt-typography-h1']['font-size'];  ?>;
	line-height : <?php echo $options['opt-typography-h1']['line-height'];  ?>;
    }

h2{
	 font-family : <?php echo $options['opt-typography-h2']['font-family'];  ?>;
	 font-size : <?php echo $options['opt-typography-h2']['font-size'];  ?>; 
	 line-height : <?php echo $options['opt-typography-h2']['line-height'];  ?>;
	    }

 .get-involved-img-wrapper{
	 /**********ONLY THE GET INVOLVED BACKGROUND IMAGE [ It is not shown in ie 8]*********************************************/
	       background-color : <?php echo $options['opt-color-theme-color'];  ?>;
	       background-image : url("<?php echo $options['opt-media-get-involved-bg']['url'] ;  ?>");
	      background-repeat : no-repeat;
	  background-blend-mode : screen;
	    background-position : 50% 50%;
	        background-size : cover;
	   -moz-background-size : cover;
	-webkit-background-size : cover;
	                opacity : 0.15;
               -moz-opacity : 0.15;
            -webkit-opacity : 0.15;
	         -khtml-opacity : 0.15;
	                 filter : alpha(opacity=15);
	             -ms-filter :"progid:DXImageTransform.Microsoft.Alpha(Opacity=15)";
	                   zoom : 1;
	               position : absolute;
	                 height : 100%;
	                  width : 100%;
	                    top : 0;
	
  
	}
	
.footer-wrapper{
	   background : <?php echo $options['opt-color-footer'];  ?>;
	   margin : 0;
	  
	}

.ubermenu-skin-none {
  background: <?php echo $options['opt-color-theme-color'];  ?>;
}
	
nav .main-menu > li{
	
	background : <?php echo $options['opt-color-theme-color'];  ?>;
	}
	</style>