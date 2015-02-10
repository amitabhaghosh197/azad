<?php

/**

@ Get Involved Section

*/
$options = get_option('redux_demo');
?>


<section>
  <div class="get-involved-wrapper clearfix">
    <div class="get-involved-img-wrapper "></div> <!--------/get-involved-img-wrapper--------------------->
    
        <div class="container" >
            <div class="row-fluid">
                <div class="span6">
                 <div class="get-involved-content" data-anijs="if: scroll, on: window, do: fadeInLeft animated, before: scrollReveal" >
                    <h1 class="" id="inVold" ><?php echo $options['opt-text-get-involved-heading']; ?></h1>
                  
                  <ul >
                 
                  <?php echo $options['opt-editor-get-involved-li'];  ?>
                   
                  
                  </ul>
                   
                  <div class="span8" >
                   <span class="damira-bordered-with-white-hover-buttons pull-right hidden-phone ">
                    <a href="<?php echo $options['opt-text-get-involved-learnmore'];  ?>" > Learn More</a>
                   </span>
                   
                   </div> <!------/span8-------------->
                   
                   <span class="damira-bordered-with-white-hover-buttons  hidden-desktop hidden-tablet " >
                    <a href="<?php echo $options['opt-text-get-involved-learnmore'];  ?>" > Learn More</a>
                   </span>
                   
                 </div> <!------/get-involved-content------------------->
                
                </div><!-----/span6---------->
            
             <!--------------VIDEO WRAPPER--------------------------------->
            <div class="span6">
            <div class="video-wrapper get-involved-content"  data-anijs="if: scroll, on: window, do: fadeInRight animated, before: scrollReveal" >
            <div class="offset1 video">
           <iframe src=" <?php echo $options['opt-text-get-involved-video'];  ?>" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
           </div> <!------offset1 video---------------->
           </div> <!---------/video-wrapper--------------->
            </div><!--------/span6-------------->
            
            </div><!-----/row-fluid-------------->
        </div><!-------/container------------------->
  </div> <!-----/get-involved-wrapper------------------------------->

</section>

     <!------------END OF GET INVOLVED SECTION--------------------------------------->