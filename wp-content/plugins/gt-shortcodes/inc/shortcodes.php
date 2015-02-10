<?php


/*-----------------------------------------------
	All the shortcodes are assembled here
-----------------------------------------------*/



/*--------------------------------------------------------------------------------
 ** Accordion Shortcode **
/*--------------------------------------------------------------------------------*/

if (!function_exists('fus_accordions')) {
	function fus_accordions( $fus_atts, $fus_content = null ) {
	   extract(shortcode_atts(array(
	   	  'id' => 'acc',
	      'count' => '3',
	      'title' => 'Accordion 1|Accordion 2|Accordion 3',
	      'accids' => '1|2|3',
	      'keep_open' => '',
	      'toggle_icon' => 'none',
	      'background' => '#FFFFFF',
	      'head_text_color' => '#9F9FA0',
	      'border_size' => '2',
	      'border_style' => 'solid',
	      'border_radius' => '4',
	      'border_color' => '#EEF0EF',
	      'content_bg' => '#FFFFFF',
	      'content_text_color' => '',
	      'hstyle' => '',
	   ), $fus_atts));

	   $title = explode('|', $title);
	   $accids = explode('|', $accids);
	   if($fus_content==null){
	   	$fus_content = " | | | | | | | | | | | | | | ";
	   }
	   $fus_content = explode('|', $fus_content);

	   $toggle_icon_1 = null;
	   $toggle_icon_2 = null;

	   if($toggle_icon=="angle"){
	   		$toggle_icon_1 = "106";
	   		$toggle_icon_2 = "107";
	   }elseif($toggle_icon=="angledouble"){
	   		$toggle_icon_1 = "102";
	   		$toggle_icon_2 = "103";
	   }elseif($toggle_icon=="arrow"){
	   		$toggle_icon_1 = "062";
	   		$toggle_icon_2 = "063";
	   }elseif($toggle_icon=="arrowcircle"){
	   		$toggle_icon_1 = "13a";
	   		$toggle_icon_2 = "139";
	   }elseif($toggle_icon=="caret"){
	   		$toggle_icon_1 = "0d8";
	   		$toggle_icon_2 = "0d7";
	   }elseif($toggle_icon=="caretsquare"){
	   		$toggle_icon_1 = "150";
	   		$toggle_icon_2 = "151";
	   }elseif($toggle_icon=="chevron"){
	   		$toggle_icon_1 = "077";
	   		$toggle_icon_2 = "078";
	   }elseif($toggle_icon=="chevroncircle"){
	   		$toggle_icon_1 = "139";
	   		$toggle_icon_2 = "13a";
	   }elseif($toggle_icon=="expandcollapse"){
	   		$toggle_icon_1 = "117";
	   		$toggle_icon_2 = "116";
	   }elseif($toggle_icon=="hand"){
	   		$toggle_icon_1 = "0a6";
	   		$toggle_icon_2 = "0a7";
	   }elseif($toggle_icon=="longarrow"){
	   		$toggle_icon_1 = "176";
	   		$toggle_icon_2 = "175";
	   }elseif($toggle_icon=="plusminus"){
	   		$toggle_icon_1 = "068";
	   		$toggle_icon_2 = "067";
	   }elseif($toggle_icon=="plusminussquare"){
	   		$toggle_icon_1 = "146";
	   		$toggle_icon_2 = "0fe";
	   }elseif($toggle_icon=="plusminuscircle"){
	   		$toggle_icon_1 = "056";
	   		$toggle_icon_2 = "055";
	   }elseif($toggle_icon=="toggle"){
	   		$toggle_icon_1 = "151";
	   		$toggle_icon_2 = "150";
	   }

	   if($toggle_icon!='none'){
	   		$toggle = '<style type="text/css" media="screen">#'.$id.' .accordion-heading .accordion-toggle:after {
    content: "\f'.$toggle_icon_1.'";         
}
#'.$id.' .accordion-heading .accordion-toggle.collapsed:after {
    content: "\f'.$toggle_icon_2.'";</style>';
		}else{
	   		$toggle = null;
		}

	   if(!$head_text_color==null){
	   		$indicator_style = '<style type="text/css" media="screen">#'.$id.' .accordion-heading .accordion-toggle:after {color: '.$head_text_color.';}</style>';
		}else{
			$indicator_style = null;
		}

	   	$output = $toggle.$indicator_style.'<div class="accordion" id="'. esc_attr( $id ) .'">';

	   	if(!$border_radius==null){
			$bradius = '-webkit-border-radius:'. $border_radius .'px;-moz-border-radius:'. $border_radius .'px;border-radius:'. $border_radius .'px;';
		} else {
			$bradius = '-webkit-border-radius:0px;-moz-border-radius:0px;border-radius:0px;';
		}

		if(!$border_size==null){
			$border = 'border:'. esc_attr( $border_size ) .'px '. esc_attr( $border_style ).' '. esc_attr( $border_color ) . '!important;';
		}else{
			$border = null;
		}

		$keep_open = esc_attr( $keep_open ) - 1;

		for ( $i=0; $i<$count; $i++ ) {
			if($i==$keep_open){
					$output .= '<div class="accordion-group" style="'. esc_attr( $border ) . esc_attr( $bradius ) .'">
							    <div class="accordion-heading" style="background:'. esc_attr( $background ) .'!important;'. esc_attr( $hstyle ).'">
							      <a class="accordion-toggle" data-toggle="collapse" data-parent="#'. esc_attr( $id ) .'" href="#'. esc_attr( $accids[$i] ).'" style="color:'. esc_attr( $head_text_color ) .'!important;">
							      	'. $title[$i] .'
							      </a>
							    </div>
							    <div id="'. esc_attr( $accids[$i] ).'" class="accordion-body collapse in">
							      <div class="accordion-inner" style="border-top-color:'.$border_color.';background:'.$content_bg.';color:'.$content_text_color.';">
							        '. do_shortcode( $fus_content[$i] ) .'
							      </div>
							    </div>
							  </div>';
				}else{
					$output .= '<div class="accordion-group" style="'. esc_attr( $border ) . esc_attr( $bradius ) .'">
							    <div class="accordion-heading" style="background:'. esc_attr( $background ) .'!important;'. esc_attr( $hstyle ).'">
							      <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#'. esc_attr( $id ) .'" href="#'. esc_attr( $accids[$i] ).'" style="color:'. esc_attr( $head_text_color ) .'!important;">
							      	'. $title[$i] .'
							      </a>
							    </div>
							    <div id="'. esc_attr( $accids[$i] ).'" class="accordion-body collapse">
							      <div class="accordion-inner" style="border-top-color:'.$border_color.';background:'.$content_bg.';color:'.$content_text_color.';">
							        '. do_shortcode( $fus_content[$i] ) .'
							      </div>
							    </div>
							  </div>';
				}
			}
			
		$output .= '</div>';

		return $output;
          	
	}

	add_shortcode( 'gtaccordion', 'fus_accordions' );
}



/*--------------------------------------------------------------------------------
 ** Alert Shortcode **
/*--------------------------------------------------------------------------------*/

if (!function_exists('fus_alert')) {
	function fus_alert($fus_atts, $fus_content = null ) {
	   extract(shortcode_atts(array(
	      'title' => 'Alert!',
	      'title_color' => '',
	      'content' => '',
	      'content_color' => '',
	      'close_button' => 'yes',
	      'icon' => 'cross',
	      'type' => '',
	      'background' => '',
	      'border_size'	=> '2',
		  'border_style' =>	'',
		  'border_color' =>	'',
		  'border_radius' => '',
	      'dstyle' => ' ',
	      'hstyle' => ' ',
	      'pstyle' => ' '
	   ), $fus_atts));

	   if(!$title_color==NULL)
	   {
	   		$title_color = 'color:'. esc_attr( $title_color ) .'!important;';
	   	}else{
	   		$title_color = null;
	   	}
	   if(!$title==NULL)
	   {
	   		$title = '<h3 style="'. $title_color . esc_attr( $hstyle ) .'">'. esc_attr( $title ) .'</h3>';
	   }
	   if(!$content_color==NULL)
	   {
	   		$content_color = 'color:'. esc_attr( $content_color ) .'!important;';
	   	}else{
	   		$content_color = null;
	   	}
	   if(!$content==NULL)
	   {
	   		$content = '<p style="'. $content_color . $pstyle .'">'. $content .'</p>';
	   }
	   if(!$type==NULL)
	   {
	   		$type = ' alert-'.$type;
	   }
	   if(!$background==NULL)
	   {
	   		$background = 'background:'. $background . '!important;';
	   }
	   if($close_button=="yes")
	    {
	    	$button = '<button type="button" class="close fui-'. esc_attr( $icon ) .'" data-dismiss="alert"></button>';
	    }else{
	    	$button = NULL;
	    }
	    $border = 'border:'. esc_attr( $border_size ) .'px '. esc_attr( $border_style ).' '. esc_attr( $border_color ) . ' !important;';
		if(!$border_radius==NULL)
		{
			$border_radius = 'border-radius:'. esc_attr( $border_radius ) .'px !important;-webkit-border-radius:'. esc_attr( $border_radius ) .'px !important;-moz-border-radius:'. esc_attr( $border_radius ) .'px !important;';
		}


	return '<div class="alert'. esc_attr( $type ) .'" style="'. esc_attr ( $background ) . esc_attr( $dstyle ) . $border . $border_radius . 'overflow:auto;">'. $button . $title . $content . do_shortcode($fus_content) .'</div>';
	}
	add_shortcode( 'gtalert', 'fus_alert' );
}



/*--------------------------------------------------------------------------------
 ** Animation Shortcode **
/*--------------------------------------------------------------------------------*/

if (!function_exists('gtsc_animations')) {
	function gtsc_animations( $gt_atts, $gt_content = null) {
	   extract(shortcode_atts(array(
	   	  'event' => '',
	   	  'type' => 'flash',
	   	  'duration' => '',
	   	  'count' => '',
	   	  'direction' => 'normal',
	   	  'timing' => 'linear',
	   	  'mode' => 'both',
	   	  'delay' => '',
	   	  'style' => ''
	   ), $gt_atts));

	   $visible = null;

	   	if($event=="scroll"){
	   		$visible = "visibility:hidden;";
	   	}

	   	if(!$duration==null){
	   		$duration = "-webkit-animation-duration: ".$duration."s;-moz-animation-duration: ".$duration."s;-o-animation-duration: ".$duration."s;animation-duration: ".$duration."s;";
	   	}else{
	   		$duration = null;
	   	}

	   	if(!$count==null){
	   		$count = "-webkit-animation-iteration-count: ".$count.";-moz-animation-iteration-count: ".$count.";-o-animation-iteration-count: ".$count.";animation-iteration-count: ".$count.";";
	   	}

	   	if(!$direction==null){
	   		$direction = "-webkit-animation-direction: ".$direction.";-moz-animation-direction: ".$direction.";-o-animation-direction: ".$direction.";animation-direction: ".$direction.";";
	   	}else{
	   		$direction = null;
	   	}

	   	if(!$timing==null){
	   		$timing = "-webkit-animation-timing-function: ".$timing.";-moz-animation-timing-function: ".$timing.";-o-animation-timing-function: ".$timing.";animation-timing-function: ".$timing.";";
	   	}else{
	   		$timing = null;
	   	}

	   	if(!$mode==null){
	   		$mode = "-webkit-animation-fill-mode: ".$mode.";-moz-animation-fill-mode: ".$mode.";-o-animation-fill-mode: ".$mode.";animation-fill-mode: ".$mode.";";
	   	}else{
	   		$mode = null;
	   	}

	   	if(!$delay==null){
	   		$delay = "-webkit-animation-delay: ".$delay."s;-moz-animation-delay: ".$delay."s;-o-animation-delay: ".$delay."s;animation-delay: ".$delay."s;";
	   	}else{
	   		$delay = null;
	   	}

	   	$style = $duration . $count . $direction . $timing . $mode . $delay . $style;

	   	if($event == "pageload"){
	   		$output = '<div class="gt-animation animated ' . esc_attr( $type ) .'" style="'. esc_attr( $style ) .'">'.do_shortcode($gt_content).'</div>';
	   	} elseif($event == "scroll"){
	   		$output = '<div class="gt-animation '. esc_attr( $type ) .'" style="'. esc_attr( $visible ) . esc_attr( $style ) .'">'.do_shortcode($gt_content).'</div>';
	   	} elseif($event == "click"){
	   		$output = '<div class="gt-click-animation '. esc_attr( $type ) .'" style="'. esc_attr( $style ) .'">'.do_shortcode($gt_content).'</div>';
	   	} elseif($event == "hover"){
	   		$output = '<div class="gt-hover-animation '. esc_attr( $type ) .'" style="'. esc_attr( $style ) .'">'.do_shortcode($gt_content).'</div>';
	   	} else {
	   		$output = '';
	   	}

		return $output;
          	
	}

	add_shortcode( 'gtanimation', 'gtsc_animations' );
}



/*--------------------------------------------------------------------------------
 ** Animated Numbers Shortcode **
/*--------------------------------------------------------------------------------*/

if (!function_exists('gt_animated_numbers')) {
	function gt_animated_numbers($gt_atts) {
	   extract(shortcode_atts(array(
	   	  'event' => 'pageload',
	      'start_from' => '0',
	      'end_to' => '',
	      'format' => '',
	      'decimal_pos' => '',
	      'speed' => '5000',
	      'color' => '#444444',
	      'font_size' => '24',
	      'font_weight' => 'bold',
	      'font_style' => 'oblique',
	      'style' => ''
	   ), $gt_atts));

	   $decimal_attr = null;
	   $class = null;
	   $event_class = null;

	   if($event=='pageload'){
	   		$event_class = 'gtan-load';
	   }

	   if($event=='inview'){
	   		$event_class = 'gtan-inview';
	   }

	   if($format=='decimal'){
	   		$decimal_attr = ' data-decimals="'. esc_attr ( $decimal_pos ) .'" ';
	   }

	   if($format=='comma'){
	   		$class = ' gtan-comma';
	   }

	   $style = 'style="color:'. esc_attr ( $color ) .';font-size:'. esc_attr ( $font_size ) .'px;font-weight:'. esc_attr ( $font_weight ) .';font-style:'. esc_attr ( $font_style ) .';'. esc_attr ( $style ) .'"';

	return '<span class="gtan '. $event_class . $class .'" data-from="'. esc_attr ( $start_from ) .'" data-to="'. esc_attr ( $end_to ) .'" data-speed="'. esc_attr ( $speed ) .'" '. $decimal_attr . $style.'></span>';
	}
	add_shortcode( 'gt_animated_number', 'gt_animated_numbers' );
}


/*--------------------------------------------------------------------------------
 ** Banner Ads (Responsive) Shortcode **
/*--------------------------------------------------------------------------------*/

if (!function_exists('gt_banners')) {
	function gt_banners( $gt_atts) {
	   extract(shortcode_atts(array(
	   	  'size' 		=> '',
	   	  'max_width' 	=> '',
	   	  'max_height' 	=> '',
	   	  'image_src' 	=> '',
	   	  'alt' 		=> 'Advertisement',
	   	  'lazy_load' 	=> '',
	   	  'link' 		=> '',
	   	  'link_target' => '_self',
	   	  'link_title' 	=> 'advert',
	   	  'placeholder_text' => '',
	   	  'placeholder_image_color' => 'EEF0EF',
	   	  'placeholder_image_text_color' => '999999',
	   	  'placeholder_image_format' => '.gif',
	   	  'border_size' => '0',
	      'border_style' => 'solid',
	      'border_radius' => '0',
	      'border_color' => '#EEF0EF',
	      'style' 		=> ''
	   ), $gt_atts));

	   $width='width=100% ';
	   $height=' height=100%';

	   $placeholder_custom_text = '&text='.preg_replace('/ /', '+',  $placeholder_text);

	   if($image_src==null && $size=='custom'){
	    	$src = 'src="http://placehold.it/'.$max_width.'x'.$max_height.'/'. $placeholder_image_color . '/' . $placeholder_image_text_color . $placeholder_image_format .$placeholder_custom_text .'"';
	    }elseif($image_src==null && $size!=='custom'){
	    	$src = 'src="http://placehold.it/' . $size . '/'. $placeholder_image_color . '/' . $placeholder_image_text_color . '/' . $placeholder_image_format . $placeholder_custom_text .'"';
	    }

	    if(!$alt==null){
	    	$alt = ' alt="' . $alt . '"';
	    }else{
	    	$alt = null;
	    }

	   switch($size) {
	   		case '468x60':
	   			$max_width = '468';
	   			$max_height = '60';
	   			break;
	   		case '728x90':
	   			$max_width = '728';
	   			$max_height = '90';
	   			break;
	   		case '336x280':
	   			$max_width = '336';
	   			$max_height = '280';
	   			break;
	   		case '300x250':
	   			$max_width = '300';
	   			$max_height = '250';
	   			break;
	   		case '250x250':
	   			$max_width = '250';
	   			$max_height = '250';
	   			break;
	   		case '160x600':
	   			$max_width = '160';
	   			$max_height = '600';
	   			break;
	   		case '120x600':
	   			$max_width = '120';
	   			$max_height = '600';
	   			break;
	   		case '120x240':
	   			$max_width = '120';
	   			$max_height = '240';
	   			break;
	   		case '240x400':
	   			$max_width = '240';
	   			$max_height = '400';
	   			break;
	   		case '234x60':
	   			$max_width = '234';
	   			$max_height = '60';
	   			break;
	   		case '180x150':
	   			$max_width = '180';
	   			$max_height = '150';
	   			break;
	   		case '125x125':
	   			$max_width = '125';
	   			$max_height = '125';
	   			break;
	   		case '120x90':
	   			$max_width = '120';
	   			$max_height = '90';
	   			break;
	   		case '120x60':
	   			$max_width = '120';
	   			$max_height = '60';
	   			break;
	   		case '88x31':
	   			$max_width = '88';
	   			$max_height = '31';
	   			break;
	   		case 'custom':
	   			$max_width= esc_attr( $max_width );
	   			$max_height= esc_attr( $max_height );
	   			break;
	   }

	   global $fus_options;
	   
	   if(!$fus_options['gt_lazy_load_class']==null && $lazy_load=='yes'){
	   		$class = 'class="'. esc_attr( $fus_options['gt_lazy_load_class'] ) .'" ';
	 		$src = 'src="'. esc_attr( $fus_options['gt_lazy_load_placeholder'] ) .'" ';
	 		$data = ' data-original="'. esc_attr( $image_src ) .'"';
	 		if($image_src==null && $size=='custom'){
		    	$data = ' data-original="http://placehold.it/'.$max_width.'x'.$max_height.'"';
		    }elseif($image_src==null && $size!=='custom'){
		    	$data = ' data-original="http://placehold.it/' . $size . '"';
		    }
		}else{
			$class=null;
			$data = null;
		}

		if(!$link_target==null){
	    	$link_target = ' target="' . $link_target . '"';
	    }else{
	    	$link_target = null;
	    }

	    if(!$link_title==null){
	    	$link_title = ' title="' . $link_title . '"';
	    }else{
	    	$link_title = null;
	    }

		if(!$link==null){
			$link_front = '<a ' . $link_target . ' href="' . $link . '" ' . $link_title . '>';
			$link_tail = '</a>';
		}else{
			$link_front = null;
			$link_tail = null;
		}

		if(!$image_src == null){
			$src = 'src="'. $image_src .'" ';
		}

	   $output = $link_front . '<img '.$class. $alt . $src . $data . $width . $height .' style="max-width:'. $max_width .'px!important;max-height:'. $max_height .'px!important;border:'. $border_size .'px '. $border_style .' '. $border_color .';border-radius:' . $border_radius .'px;'. esc_attr( $style ).'" />' . $link_tail;

		return $output;
          	
	}

	add_shortcode( 'gtbanner', 'gt_banners' );
}



/*--------------------------------------------------------------------------------
 ** Blockquote Shortcode **
/*--------------------------------------------------------------------------------*/

if (!function_exists('gt_blockquotes')) {
	function gt_blockquotes($gt_atts,$gt_content = null ) {
	   extract(shortcode_atts(array(
	   	  'type' => 'left',
	   	  'quote_text_size' => '18',
	   	  'quote_text_style' => 'italic',
	   	  'quote_text_color' => '#999999',
	   	  'source' => '',
	   	  'source_text_size' => '12',
	   	  'source_text_color' => '#999999',
	      'background' => '#FFFFFF',
	      'border_size' => '5',
	      'border_style' => 'solid',
	      'border_color' => '#EEEEEE',
	      'border_radius' => '0'
	   ), $gt_atts));

	   if(!$source == NULL){
	   		$source = '<small style="font-size:'.esc_attr($source_text_size).'px;color:'.esc_attr($source_text_color).';">'.esc_attr($source).'</small>';
	   }else{
	   		$source = null;
	   }
	   if($type == 'right'){
	   		$type = ' pull-right';
	   		$border = 'border-right:'.esc_attr($border_size).'px '.esc_attr($border_style).' '.esc_attr($border_color).';';
	   }else{
	   		$type = null;
	   		$border = 'border-left:'.esc_attr($border_size).'px '.esc_attr($border_style).' '.esc_attr($border_color).';';
	   }
	   if(!$border_radius == NULL){
	   		$border_radius = 'border-radius:'.esc_attr($border_radius).'px;-webkit-border-radius:'.esc_attr($border_radius).'px;-moz-border-radius:'.esc_attr($border_radius).';';
	   }else{
	   		$border_radius = null;
	   }
	   $style = ' style="background:'.esc_attr($background).';'.$border.$border_radius.'"';

	return '<blockquote class="gt-bq'.esc_attr($type).'" '.$style.'>
  				<p style="font-size:'.esc_attr($quote_text_size).'px;font-style:'.esc_attr($quote_text_style).';color:'.$quote_text_color.' !important;">'.do_shortcode($gt_content).'</p>
  				'.$source.'
			</blockquote>';
	}
	add_shortcode( 'gtblockquote', 'gt_blockquotes' );
}



/*--------------------------------------------------------------------------------
 ** Button Shortcode **
/*--------------------------------------------------------------------------------*/

if (!function_exists('fus_buttons')) {
	function fus_buttons($fus_atts, $fus_content = null ) {
	   extract(shortcode_atts(array(
	   	  'class' => '',
	      'tag' => 'a',
	      'backtotop' => 'no',
	      'link' => '',
	      'target' => '_self',
	      'size' => '',
	      'type' => '',
	      'block' => '',
	      'embossed' => '',
	      'disabled' => '',
	      'background' => '',
	      'animation' => 'yes',
	      'border_size' => '0',
	      'border_style' => 'none',
	      'border_color' => '',
	      'border_radius' => '0',
	      'style' => 'color:#fff;font-weight:normal;'
	   ), $fus_atts));

		$ref = NULL;

		if($backtotop=="yes"){
	   		$link = "javascript:void(0)";
	   		$backtotop_class = " gt-backtotop";
	   }else{
	   		$backtotop_class = null;
	   }
	   if(!$link==NULL){
	   		$ref = 'href="'.esc_attr( $link ).'" ';
	   }
	   if(!$target==NULL){
	   		$target = 'target="'.esc_attr( $target ).'" ';
	   }
	   if(!$size==NULL){
	   		$size = ' btn-'.$size;
	   }
	   if(!$type==NULL){
	   		$type = ' btn-'.$type;
	   }
	   if($block=='yes'){
	   		$block = ' btn-block';
	   }
	   if($embossed=='yes'){
	   		$embossed = ' btn-embossed';
	   }
	   if($disabled=='yes'){
	   		$disabled = ' disabled';
	   }
	   if(!$background==NULL)
	   {
	   		$background = 'background:'. $background . '!important;';
	   }
	   if($animation=='yes')
	   {
	   		$animation = ' gt-btn-anim';
	   }
	   $border = 'border:'. esc_attr( $border_size ) .'px '. esc_attr( $border_style ).' '. esc_attr( $border_color ) . ' !important;';
	   if(!$border_size==NULL)
		{
		   $border_size = 'border-width:'.$border_size.'px !important;';
		}else{
			$border_size = null;
		}
		 if(!$border_style==NULL)
		{
		   $border_style = 'border-style:'.$border_style.' !important;';
		}else{
			$border_style = null;
		}
		if(!$border_color==NULL)
		{
		   $border_color = 'border-color:'.$border_color.' !important;';
		}else{
			$border_color = null;
		}
		if(!$border_radius==NULL)
		{
		   $border_radius = 'border-radius:0px !important;-webkit-border-radius: 0px;-moz-border-radius: 0px;';
		}else{
			$border_radius = 'border-radius:'. esc_attr( $border_radius ) .'px !important;-webkit-border-radius:'. esc_attr( $border_radius ) .'px !important;-moz-border-radius:'. esc_attr( $border_radius ) .'px !important;';
		}

	return '<'.$tag.' '. $target . $ref . 'class="btn'. esc_attr( $size ) . esc_attr( $type ) . esc_attr( $embossed ) . esc_attr( $disabled ) . esc_attr( $block ) . esc_attr( $backtotop_class ) . esc_attr( $animation )  .' '. esc_attr( $class ) . '" style="'. esc_attr ( $background ) . esc_attr( $border_size ) . esc_attr( $border_style ) . esc_attr( $border_color ) . esc_attr( $border_radius ) . esc_attr( $style ) .'">'.do_shortcode($fus_content).'</'.$tag.'>';
	}
	add_shortcode( 'gtbutton', 'fus_buttons' );
}



/*--------------------------------------------------------------------------------
 ** Carousel Shortcode **
/*--------------------------------------------------------------------------------*/

if (!function_exists('fus_carousel')) {
	function fus_carousel($fus_atts) {
	extract(shortcode_atts(array(
		'id' => 'myCarousel',
	    'slides' => '3',
	    'images' => '#,#,#',
	    'links' => '#,#,#',
	    'alts' => 'Slide1,Slide2,Slide3',
	    'titles' => 'Title1,Title2,Title3',
	    'descs' => 'Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec.',
	    'style' => ' '
	), $fus_atts));

	    $images = explode(',',$images);
	    $links = explode(',',$links);
	    $alts = explode(',',$alts);
	    $titles = explode(',',$titles);
	    $descs = explode(',',$descs);

	    $output = '
	    <div id="'. esc_attr( $id ) .'" class="carousel slide" style="'. esc_attr( $style ).'">
            <ol class="carousel-indicators" style="list-style:decimal outside;">';
        

        for ($i=0; $i<$slides; $i++) {
        	if($i==0)
        	$output .= '<li data-target="#'. esc_attr( $id ) .'" data-slide-to="'.  esc_attr( $i ) .'" class="active"></li>';
        	else
        	$output .= '<li data-target="#'. esc_attr( $id ) .'" data-slide-to="'.  esc_attr( $i ) .'"></li>';
        }
        
              
        $output .= '</ol>
            <div class="carousel-inner">';

	   for ($j=0; $j<$slides; $j++) {
	   		if($j==0) {
	   			$output .= '<div class="active item">
                <a href="'.$links[$j].'" title="'. esc_attr( $alts[$j] ) .'"><img width="100%" height="100%" src="'. esc_attr( $images[$j] ) .'" alt="'. esc_attr( $alts[$j] ) .'"></a>
                <div class="carousel-caption">
                  <a href="'.$links[$j].'" title="'. esc_attr( $alts[$j] ) .'"><h4>'. esc_attr( $titles[$j] ) .'</h4></a>
                  <p>'. esc_attr( $descs[$j] ) .'</p>
                </div>
              </div>';
	   		} else {
	   		$output .= '<div class="item">
                <a href="'.$links[$j].'" title="'. esc_attr( $alts[$j] ) .'"><img width="100%" height="100%" src="'. esc_attr( $images[$j] ) .'" alt="'. esc_attr( $alts[$j] ) .'"></a>
                <div class="carousel-caption">
                  <a href="'.$links[$j].'" title="'. esc_attr( $alts[$j] ) .'"><h4>'. esc_attr( $titles[$j] ) .'</h4></a>
                  <p>'. esc_attr( $descs[$j] ) .'</p>
                </div>
              </div>';
          }
	   }

	   $output .= '</div>
            <a class="carousel-control left" href="#'. esc_attr( $id ) .'" data-slide="prev" style="text-decoration:none;">&lsaquo;</a>
            <a class="carousel-control right" href="#'. esc_attr( $id ) .'" data-slide="next" style="text-decoration:none;">&rsaquo;</a>
          </div>';

	    return $output;
	
	}

	add_shortcode( 'gtcarousel', 'fus_carousel' );
}



/*--------------------------------------------------------------------------------
 ** Charts Shortcode **
/*--------------------------------------------------------------------------------*/

if (!function_exists('gt_charts')) {
	function gt_charts($fus_atts, $fus_content = null ) {
	   extract(shortcode_atts(array(
	   		'width' => '960',
	   		'height' => '400',
	   		'type' => 'line',
	   		'labels' => 'January,February,March,April,May,June,July',
	   		'animation_event' => 'pagescroll',
	   		'animation_type' => 'easeOutQuart',
	   		'animation_delay' => '300',
	    	'style' => ''
	   ), $fus_atts));

	    $labels = explode(",",$labels);
	    $label_value = '';
	    foreach ($labels as $key => $label) {
	   		$label_value .= '"'.$label.'",';
	    }

	   	$prefix = 'gt-chart-';
		$chart_id = uniqid($prefix);
	   	$type = ucfirst($type);

	   	if( $type=="Line" || $type=="Bar" || $type=="Radar"){
	   		$var_data = 'var data = {
	   			labels : ['.$label_value.'],
				datasets : [
					'.do_shortcode($fus_content).'
				]}';
	   	}else{
	   		$var_data = 'var data = [
					'.do_shortcode($fus_content).'
				]';
	   	}

	   	$var_options = 'var options = {
	   		animationEasing : "'.$animation_type.'"
	   	}';

	   	if( $type == "Doughnut" ){
	   		$var_options = 'var options = {
		   		animationEasing : "'.$animation_type.'",
		   		scaleShowLabels: true
		   	}';
	   	}
	   
	   	$output = '<canvas id="'.$chart_id.'" class="gt-canvas" width="'.$width.'" height="'.$height.'" style="max-width:'.$width.'px;'.$style.'"></canvas>';

	   	if( $animation_delay == '' ){
	   		$animation_delay = 0;
	   	}

	   	if( $animation_event == 'pagescroll' ){
	   		$output .= '<script type="text/javascript"> 
	   		jQuery(document).ready(function($) { 
	   			var graphInitDelay = "'.$animation_delay.'";
	   			$("#'.$chart_id.'").on("inview",function(){
					var $this = $(this);
					$this.removeClass("hidden").off("inview");
					setTimeout(generateChart,graphInitDelay);
				});
				// get selector by context
				var ctx = document.getElementById("'.$chart_id.'").getContext("2d");
				// pointing parent container to make chart js inherit its width
				var container = $(document.getElementById("'.$chart_id.'")).parent();

				// enable resizing matter
				$(window).resize( generateChart );

				// this function produce the responsive Chart JS
				function generateChart(){
					// make chart width fit with its container
					var ww = $(document.getElementById("'.$chart_id.'")).attr("width", $(container).width() );
					// Initiate new chart or Redraw
					'.$var_data.'
		   			'.$var_options.'
					new Chart(ctx).'.$type.'(data, options);
				};
			}); </script>';
		}else{
			$output .= '<script type="text/javascript">
			jQuery(document).ready(function($) { 
				// get selector by context
				var ctx = document.getElementById("'.$chart_id.'").getContext("2d");
				// pointing parent container to make chart js inherit its width
				var container = $(document.getElementById("'.$chart_id.'")).parent();

				// enable resizing matter
				$(window).resize( generateChart );

				// this function produce the responsive Chart JS
				function generateChart(){
					// make chart width fit with its container
					var ww = $(document.getElementById("'.$chart_id.'")).attr("width", $(container).width() );
					// Initiate new chart or Redraw
					'.$var_data.'
		   			'.$var_options.'
					new Chart(ctx).'.$type.'(data, options);
				};
				generateChart();
			});
		   	</script>';
		}

	   	$output = preg_replace( '%<p>&nbsp;\s*</p>%', '', $output ); // Remove all instances of "<p>&nbsp;</p>" to avoid extra lines.
			$Old     = array( '<br />', '<br>' );
			$New     = array( '','' );
			$output = str_replace( $Old, $New, $output );

		return $output;
	}
	add_shortcode( 'gt_chart', 'gt_charts' );
}

if (!function_exists('gt_charts_data')) {
	function hex2rgba($color, $opacity = false) {

		$default = 'rgb(0,0,0)';

		//Return default if no color provided
		if(empty($color))
	          return $default; 

		//Sanitize $color if "#" is provided 
	        if ($color[0] == '#' ) {
	        	$color = substr( $color, 1 );
	        }

	        //Check if color has 6 or 3 characters and get values
	        if (strlen($color) == 6) {
	                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
	        } elseif ( strlen( $color ) == 3 ) {
	                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
	        } else {
	                return $default;
	        }

	        //Convert hexadec to rgb
	        $rgb =  array_map('hexdec', $hex);

	        //Check if opacity is set(rgba or rgb)
	        if($opacity){
	        	if(abs($opacity) > 1)
	        		$opacity = 1.0;
	        	$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
	        } else {
	        	$output = 'rgb('.implode(",",$rgb).')';
	        }

	        //Return rgb(a) color string
	        return $output;
	}
	function gt_charts_data($fus_atts) {
	   extract(shortcode_atts(array(
	   		'data' => '65,59,90,81,56,55,40',
	   		'fill_color' => '#d0dce0',
	   		'stroke_color' => '#dcdcdc'
	   ), $fus_atts));

		$fill_rgba = hex2rgba($fill_color, 0.5);
		$stroke_rgba = hex2rgba($stroke_color, 1);

	   	$output = '{
			fillColor : "'.$fill_rgba.'",
			strokeColor : "'.$stroke_rgba.'",
			pointColor : "'.$stroke_rgba.'",
			pointStrokeColor : "#fff",
			data : ['.$data.']
		},';

		$output = preg_replace( '%<p>&nbsp;\s*</p>%', '', $output ); // Remove all instances of "<p>&nbsp;</p>" to avoid extra lines.
			$Old     = array( '<br />', '<br>' );
			$New     = array( '','' );
			$output = str_replace( $Old, $New, $output );

		return $output;
	}
	add_shortcode( 'gt_chart_data', 'gt_charts_data' );
}

if (!function_exists('gt_circular_charts_data')) {
	function gt_circular_charts_data($fus_atts) {
	   extract(shortcode_atts(array(
	   		'value' => '60',
	   		'color' => '#d0dce0'
	   ), $fus_atts));

	   	$output = '{
			value : '.$value.',
			color : "'.$color.'"
		},';

		$output = preg_replace( '%<p>&nbsp;\s*</p>%', '', $output ); // Remove all instances of "<p>&nbsp;</p>" to avoid extra lines.
			$Old     = array( '<br />', '<br>' );
			$New     = array( '','' );
			$output = str_replace( $Old, $New, $output );

		return $output;
	}
	add_shortcode( 'gt_circular_chart_data', 'gt_circular_charts_data' );
}



/*--------------------------------------------------------------------------------
 ** Code Block Shortcode **
/*--------------------------------------------------------------------------------*/

if (!function_exists('gt_code')) {
	function gt_codes($gt_atts, $gt_content = null ) {
	   extract(shortcode_atts(array(
	   		'type' => 'code',
	   		'scroll' => 'no',
	   		'height' => '340',
	   		'text_color' => '',
	   		'background' => '',
	   		'style' => ''
	   ), $gt_atts));

	   if( $scroll == 'no' ){
	   		$scroll = null;
	   		$height = null;
	   }else{
	   		$scroll = ' class="pre-scrollable"';
	   		$height = 'height:'.$height.'px!important;';
	   }

	return '<' . $type . $scroll . ' style="'. $height .'color:'.$text_color.'!important;background:'.$background.'!important;'.$style.'">'.do_shortcode($gt_content).'</' . $type . '>';
	}
	add_shortcode( 'gtcode', 'gt_codes' );
}



/*--------------------------------------------------------------------------------
 ** Columns Shortcode **
/*--------------------------------------------------------------------------------*/

if (!function_exists('gt_columns')) {
	function gt_columns($gt_atts, $gt_content = null ) {
	   extract(shortcode_atts(array(
	   		'count' => '3',
	   		'size' => '0',
	   		'style' => ''
	   ), $gt_atts));

	return '<div class="span'.$size.'" style="'.$style.'">'.do_shortcode($gt_content).'</div>';
	}
	add_shortcode( 'gtcolumn', 'gt_columns' );
}



/*--------------------------------------------------------------------------------
 ** Font Awesome Shortcode **
/*--------------------------------------------------------------------------------*/

if (!function_exists('gt_font_awesome')) {
	function gt_font_awesome($fus_atts) {
	   extract(shortcode_atts(array(
	      'type' => 'adjust',
	      'link' => '',
	      'title' => 'Icon',
	      'size' => '16',
	      'color' => '#444444',
	      'border' => 'no',
	      'border_size' => '2',
	      'border_color' => '#EEEEEE',
	      'pull' => 'none',
	      'spin' => 'no',
	      'rotate' => 'normal',
	      'flip' => '',
	      'style' => ' '
	   ), $fus_atts));

	   if(!$link==NULL) {
	   	$flink = '<a href="'.esc_attr( $link ).'" title="'.esc_attr( $title ).'">';
	   	$blink = '</a>';
	   } else {
	   	$flink = NULL;
	   	$blink = NULL;
	   }

	   if($border=='yes'){
	   	$border = ' fa-border';
	   	$border_style = 'border: solid '.esc_attr( $border_size ).'px '.esc_attr( $border_color ).';';
	   } else {
	   	$border = NULL;
	   	$border_style = NULL;
	   }

	   if($pull=='left'){
	   	$pull = ' pull-left';
	   } elseif ($pull=='right') {
	   	$pull = ' pull-right';
	   } else {
	   	$pull = NULL;
	   }

	   if($spin=='yes'){
	   	$spin = ' fa-spin';
	   } else {
	   	$spin = NULL;
	   }

	   if($rotate=='90'){
	   	$rotate = ' fa-rotate-'.esc_attr( $rotate );
	   } elseif($rotate=='180'){
	   	$rotate = ' fa-rotate-'.esc_attr( $rotate );
	   } elseif($rotate=='270'){
	   	$rotate = ' fa-rotate-'.esc_attr( $rotate );
	   } else {
	   	$rotate = NULL;
	   }

	   if($flip=='horizontal'){
	   	$flip = ' fa-flip-'.esc_attr( $flip );
	   } elseif($flip=='vertical'){
	   	$flip = ' fa-flip-'.esc_attr( $flip );
	   } else {
	   	$flip = NULL;
	   }

	return $flink.'<i class="fa fa-'.$type.$spin.$rotate.$flip.$pull.$border.'" title="'.esc_attr( $title ).'" style="'.$border_style.'font-size:'.esc_attr( $size ).'px;color:'.$color.';'.esc_attr( $style ).'"></i>'.$blink;
	}

	add_shortcode( 'gtfa', 'gt_font_awesome' );
}



/*--------------------------------------------------------------------------------
 ** Glyph Shortcode **
/*--------------------------------------------------------------------------------*/

if (!function_exists('fus_glyphs')) {
	function fus_glyphs($fus_atts) {
	   extract(shortcode_atts(array(
	      'type' => 'info',
	      'link' => '',
	      'title' => 'icon',
	      'size' => '16',
	      'color' => '#34495E',
	      'style' => ''
	   ), $fus_atts));
	   $glyph_link = '<a href="'. esc_attr( $link ) .'" title="'. esc_attr( $title ) .'">';
	   $glyph_link_end = '</a>';
	   if(!$link){
	   		$glyph_link = NULL;
	   		$glyph_link_end = NULL;
	   }
	return $glyph_link.'<span class="fui-'. esc_attr( $type ) .'" style="font-size:'. esc_attr( $size ) .'px;color:'. esc_attr( $color ) .';'. esc_attr( $style ) .'"></span>'.$glyph_link_end;
	}
	add_shortcode( 'gtglyph', 'fus_glyphs' );
}


/*--------------------------------------------------------------------------------
 ** Google Charts Shortcode **
/*--------------------------------------------------------------------------------*/

if (!function_exists('fus_google_pie_charts')) {
	function fus_google_pie_charts($fus_atts,$fus_content) {
	   extract(shortcode_atts(array(
	   	  'id' => 'gchart',
	   	  'font_size' => '16',
	   	  'font_name' => 'Arial',
	      'legend_align' => 'automatic',
	      'legend_position' => 'left',
	      'legend_font_size' => '14',
	      'legend_color' => 'black',
	      'legend_bold' => 'false',
	      'legend_italic' => 'false',
	      'pie_hole' => '0',
	      'pie_slice_border_color' => 'white',
	      'pie_slice_text' => 'percentage',
	      'tooltip_text' => 'both',
	      'tooltip_color' => 'black',
	      'tooltip_font_size' => '12',
	      'title' => 'How Much Pizza I Ate Last Night',
	      'title_font_size' => '18',
	      'title_color' => 'black',
	      'title_bold' => 'true',
	      'title_italic' => 'false',
	      'shape' => 'normal',
	      'width' => '800',
	      'height' => '600',
	      'background' => 'white',
	      'border_size' => '0',
	      'border_color' => 'black',
	      'opacity' => '1',
	      'animation_event' => 'PageScroll',
	      'animation_type' => 'bounceIn',
	      'colors' => '"#e0440e", "#e6693e", "#ec8f6e", "#f3b49f", "#f6c7b6"',
	      'style' => ''
	   ), $fus_atts));

    $prefix = 'gt-gchart-';
	$uniqid = rand(99,99999);
	$id = $prefix.$uniqid;

	if ($shape == "3D"){
		$shape = 'true';
	}else{
		$shape = 'false';
	}
	   
	$output = '<script type="text/javascript">

		      google.load("visualization", "1.0", {"packages":["corechart"]});
		      google.setOnLoadCallback(drawChart);

		      function drawChart() {
		        var data = new google.visualization.DataTable();
		        data.addColumn("string", "Topping");
		        data.addColumn("number", "Slices");
		        data.addRows(['.do_shortcode($fus_content).']);
		        var options = {
		        				"fontSize":'.$font_size.',
		        				"fontName":"'.$font_name.'",
		        				"legend":
		        						{
		        							alignment:"'.$legend_align.'",
		        							position:"'.$legend_position.'",
		        							textStyle:
		        								{
	        										color:"'.$legend_color.'",
	        										fontSize:'.$legend_font_size.',
	        										bold:'.$legend_bold.',
	        										italic:'.$legend_italic.'
		        								}
		        						},
		        				"pieHole":'.$pie_hole.',
		        				"pieSliceBorderColor":"'.$pie_slice_border_color.'",
		        				"pieSliceText":"'.$pie_slice_text.'",
		        			    "title":"'.$title.'",
		        			    "titleTextStyle":
		        			    				{
		        			    					color:"'.$title_color.'",
	        										fontSize:'.$title_font_size.',
	        										bold:'.$title_bold.',
	        										italic:'.$title_italic.'
		        			    				},
		        			    "is3D":'.$shape.',
		                        "width":'.$width.',
		                        "height":'.$height.',
		                        "backgroundColor":
		                       					{
		                       						stroke:"'.$border_color.'",
		                       						strokeWidth:'.$border_size.',
		                       						fill:"'.$background.'"
		                       					},
		                   	    "colors": ['.$colors.'],
		                   	    "tooltip": {
		                   	    				text:"'.$tooltip_text.'",
		                   	    				textStyle:
		        								{
	        										color:"'.$tooltip_color.'",
	        										fontSize:'.$tooltip_font_size.',
		        								},
		        								trigger:"focus"
		                   	    			}
		        };

		        var chart = new google.visualization.PieChart(document.getElementById("'.$id.'"));
		        chart.draw(data, options);';

	if( $animation_event == 'PageScroll' ){
		$opacity = '0';
		$output .= 'jQuery(document).ready(function($){
						$("#'.$id.'").bind("inview", function(e, isInView, visiblePartX, visiblePartY) {
						  var elem = $(this);

						  if (elem.data("inviewtimer")) {
						    clearTimeout(elem.data("inviewtimer"));
						    elem.removeData("inviewtimer");
						  }

						  if (isInView) {
						    elem.data("inviewtimer", setTimeout(function() {
						      if (visiblePartY == "top") {
						        elem.data("seenTop", true);
						      } else if (visiblePartY == "bottom") {
						        elem.data("seenBottom", true);
						      } else {
						        elem.data("seenTop", true);
						        elem.data("seenBottom", true);
						      }

						      if (elem.data("seenTop") && elem.data("seenBottom")) {
						        elem.unbind("inview");
						        elem.css("opacity","1");
						        elem.addClass("'.$animation_type.' animated");
						      }
						    }, 100));
						  }
						});
				});';
	}else{
		$output .= 'jQuery(document).ready(function($){
						$("#'.$id.'").addClass("'.$animation_type.' animated");});';
	}

    $output .= '}</script><div id="'.$id.'" style="opacity:'.$opacity.';"></div>';

    return $output;

	}
	add_shortcode( 'gt_google_pie_chart', 'fus_google_pie_charts' );
}

if (!function_exists('fus_google_pie_charts_data')) {
	function fus_google_pie_charts_data($fus_atts) {
	   extract(shortcode_atts(array(
	   	  'label' => 'Mushrooms',
	   	  'weight' => '5'
	   ), $fus_atts));
	   
	$output = '["'.$label.'", '.$weight.'],';

    return $output;

	}
	add_shortcode( 'gt_google_pie_chart_data', 'fus_google_pie_charts_data' );
}



/*--------------------------------------------------------------------------------
 ** Google Maps Shortcode **
/*--------------------------------------------------------------------------------*/

if (!function_exists('gt_gmaps')) {
	function gt_gmaps($fus_atts) {
	   extract(shortcode_atts(array(
	   		'width' => '',
	   		'height' => '300',
		   	'lat' => '48.856614',
		   	'long' => '2.352222',
		   	'zoom' => '2',
		   	'type' => 'hybrid',
		   	'html' => 'A romantic destination.',
		   	'icon' => '',
		   	'map_style' => '',
		   	'style_name' => '',
		   	'color' => '#EFEFEF',
		    'style' => ''
	   ), $fus_atts));

		    $prefix = 'gt-map-';
			$map_id = uniqid($prefix);

			if($width!=null){
				$width = $width.'px';
			}else{
				$width = '100%';
			}

			switch ($map_style) {
				case 'custom':
			        $map_style = '"'.$style_name.'": [{
							featureType: "all",
							stylers: [
									{ hue: "'.$color.'" },
									{ saturation: -20 }
							]
						}]';
			    break;
			    case 'turquoise':
			        $map_style = '"Turquoise": [{
							stylers: [
									{ hue: "#1abc9c" },
									{ saturation: -20 }
							]
						}]';
			    break;
			    case 'emerald':
			        $map_style = '"Emerald": [{
							stylers: [
									{ hue: "#2ecc71" },
									{ saturation: -20 }
							]
						}]';
			    break;
			    case 'peter-river':
			        $map_style = '"Peter River": [{
							stylers: [
									{ hue: "#3498db" },
									{ saturation: -20 }
							]
						}]';
			    break;
			    case 'amethyst':
			        $map_style = '"Amethyst": [{
							stylers: [
									{ hue: "#9b59b6" },
									{ saturation: -20 }
							]
						}]';
			    break;
			    case 'green-sea':
			        $map_style = '"Green Sea": [{
							stylers: [
									{ hue: "#16a085" },
									{ saturation: -20 }
							]
						}]';
			    break;
			    case 'nephritis':
			        $map_style = '"Nephritis": [{
							stylers: [
									{ hue: "#27ae60" },
									{ saturation: -20 }
							]
						}]';
			    break;
			    case 'wisteria':
			        $map_style = '"Wisteria": [{
							stylers: [
									{ hue: "#8e44ad" },
									{ saturation: -20 }
							]
						}]';
			    break;
			    case 'midnight':
			        $map_style = '"Midnight": [{
							stylers: [
									{ hue: "#2c3e50" },
									{ saturation: -20 }
							]
						}]';
			    break;
			    case 'sunflower':
			        $map_style = '"Sun Flower": [{
							stylers: [
									{ hue: "#f1c40f" },
									{ saturation: -20 }
							]
						}]';
			    break;
			    case 'carrot':
			        $map_style = '"Carrot": [{
							stylers: [
									{ hue: "#e67e22" },
									{ saturation: -20 }
							]
						}]';
			    break;
			    case 'orange':
			        $map_style = '"Orange": [{
							stylers: [
									{ hue: "#f39c12" },
									{ saturation: -20 }
							]
						}]';
			    break;
			    case 'pumpkin':
			        $map_style = '"Pumpkin": [{
							stylers: [
									{ hue: "#d35400" },
									{ saturation: -20 }
							]
						}]';
			    break;
			    case 'pomegranate':
			        $map_style = '"Pomegranate": [{
							stylers: [
									{ hue: "#c0392b" },
									{ saturation: -20 }
							]
						}]';
			    break;
			    case 'silver':
			        $map_style = '"Silver": [{
							stylers: [
									{ hue: "#bdc3c7" },
									{ saturation: -80 }
							]
						}]';
			    break;
			    case 'night':
			        $map_style = '"Night": [{
							featureType: "all",
							stylers: [
								{ invert_lightness: "true" }
							]
						}]';
			    break;
			    case 'greyscale':
			    	$map_style = '"Greyscale": [{              
							featureType: "all",
							stylers: [
								{ saturation: -100 },
								{ gamma: 0.50 }
							]
						}]';
			    break;
			    default:
			    	$map_style = '';
			    break;
			}

			if( $type == 'roadmap' ){
				$main_map_style = ',
					styles: {
						'.$map_style.'
					}';
			}else{
				$main_map_style = '';
			}
	   
			$output = '<style>
			  #'.$map_id.' .gm-style img { max-width: none!important; }
			  #'.$map_id.' .gm-style label { width: auto!important; display: inline!important; }
			</style>';

			$output .= '<div id="'.$map_id.'" style="width: '.$width.'; height: '.$height.'px; position: relative; background-color: rgb(229, 227, 223); overflow: hidden; -webkit-transform: translateZ(0);"></div>';

			$output .= '<script type="text/javascript">
 				//dropdown example
				var LocsA = [
					{
							lat: '.$lat.',
							lon: '.$long.',
							html: "'.$html.'",
							icon: "'.$icon.'"
					}
				];
				new Maplace({
					locations: LocsA,
					map_div: "#'.$map_id.'",
					map_options: {
						mapTypeId: google.maps.MapTypeId.'.strtoupper($type).',
						zoom: '.$zoom.'
					}'.$main_map_style.'
				}).Load();
			</script>';

			return $output;

	}
	add_shortcode( 'gtgmap', 'gt_gmaps' );
}



/*--------------------------------------------------------------------------------
 ** Highlight Shortcode **
/*--------------------------------------------------------------------------------*/

if (!function_exists('gt_highlighter')) {
	function gt_highlighter($gt_atts,$gt_content = null ) {
	   extract(shortcode_atts(array(
	   	  'color' => '#FFFFFF',
	      'background' => '#FFF2B3'
	   ), $gt_atts));

	   $color = esc_attr($color);
	   $background = esc_attr($background);

	return '<span style="color:'.$color.';background:'.$background.';">'.do_shortcode($gt_content).'</span>';
	}
	add_shortcode( 'gthighlight', 'gt_highlighter' );
}



/*--------------------------------------------------------------------------------
 ** Horizontal Rules Shortcode **
/*--------------------------------------------------------------------------------*/

if (!function_exists('gt_horizontals')) {
	function gt_horizontals($gt_atts, $gt_content = null ) {
	   extract(shortcode_atts(array(
	   		'type' => 'solid',
	   		'color' => '#A2A2A2',
	   		'backtotop' => 'no',
	   		'size' => '1',
	   		'align' => 'left',
	   		'margin' => '20'
	   ), $gt_atts));

	   if($backtotop == 'yes'){
	   		$link = '<a class="gt-backtotop" href="javascript:void(0)">'.do_shortcode($gt_content).'</a>';
	   		$nolink = null;
	   }else{
	   		$link = null;
	   		$nolink = do_shortcode($gt_content);
	   }

	   if($type=='shadow'){
	   		$custom_size = $size + 1;
	   		$horizontal = '<span class="gt-hr-inner" style="height: '.$size.'px;border: 0;box-shadow: inset 0 '.$size.'px '.$size.'px -'.$custom_size.'px rgba(0,0,0,0.5);"></span>';
	   }elseif($type=='gradient'){
	   		$horizontal = '<span class="gt-hr-inner" style="border: 0;height: '.$size.'px;background-image:-webkit-linear-gradient(left, rgba(0,0,0,0), '.$color.', rgba(0,0,0,0));background-image:-moz-linear-gradient(left, rgba(0,0,0,0), '.$color.', rgba(0,0,0,0));background-image:-ms-linear-gradient(left, rgba(0,0,0,0), '.$color.', rgba(0,0,0,0));background-image:-o-linear-gradient(left, rgba(0,0,0,0), '.$color.', rgba(0,0,0,0)); "></span>';
	   }else{
	   		$horizontal = '<span class="gt-hr-inner" style="border-top-width:'.$size.'px;border-top-style:'.esc_attr($type).';border-color:'.$color.';"></span>';
	   }
	   	

	return '<div class="gt-hr">
				<span class="gt-hr-text gt-hr-text-'.esc_attr($align).'" style="margin:'.esc_attr($margin).'px 0;">'.$link.$nolink.'</span>
				'.$horizontal.'
			</div>';
	}
	add_shortcode( 'gthr', 'gt_horizontals' );
}



/*--------------------------------------------------------------------------------
 ** Label Shortcode **
/*--------------------------------------------------------------------------------*/

if (!function_exists('fus_labels')) {
	function fus_labels($fus_atts, $fus_content = null ) {
	   extract(shortcode_atts(array(
	      'size' => '',
	      'type' => '',
	      'background' => '',
	      'style' => 'color:#ffffff;'
	   ), $fus_atts));

	   $label_size = 'label-'.$size.' ';
	   if(!$size){
	   	$label_size = NULL;
	   }

	   $label_type = 'label-'.$type;
	   if(!$type){
	   	$label_type = NULL;
	   }

	   if(!$background==NULL)
	   {
	   		$background = 'background:'. $background . '!important;';
	   }

	return '<span class="label '. esc_attr( $label_size ) . esc_attr( $label_type ) .'" style="'. esc_attr ( $background ) . esc_attr( $style ) .'">'.do_shortcode($fus_content).'</span>';
	}
	add_shortcode( 'gtlabel', 'fus_labels' );
}




/*--------------------------------------------------------------------------------
 ** Icon List Shortcode **
/*--------------------------------------------------------------------------------*/

if (!function_exists('fus_icon_list')) {
	function fus_icon_list($fus_atts,$fus_content) {
	    extract(shortcode_atts(array(
	      	'border' =>	'true'
	    ), $fus_atts));

	if( $border == 'true' ){
		$border = 'gt-icon-list-bordered';
	}else{
		$border = 'gt-icon-list';	
	}

	$output = 

	'<ul class="' . $border . '">' . do_shortcode($fus_content) . '</ul>';	

    return $output;

	}
	add_shortcode( 'gt_icon_list', 'fus_icon_list' );
}

if (!function_exists('fus_icon_list_data')) {
	function fus_icon_list_data($fus_atts,$fus_content) {
	   extract(shortcode_atts(array(
	   	  'icon' 	=>	'angle-right',
	   	  'position'	=>	'left',
	   	  'size'	=>	'14',
	   	  'color'	=>	'#333'
	   ), $fus_atts));
	   
	$output = '<li><i class="fa-' . $icon . ' pull-' . $position . '" style="font-size:' . $size . 'px;color:' . $color . ';"></i><div class="gt-icon-list-content">' . do_shortcode($fus_content) . '</div></li>';			
						
    return $output;

	}
	add_shortcode( 'gt_icon_list_item', 'fus_icon_list_data' );
}




/*--------------------------------------------------------------------------------
 ** Image Lazy Load Shortcode **
/*--------------------------------------------------------------------------------*/

if (!function_exists('fus_lazy_loads')) {
	function fus_lazy_loads( $fus_atts) {
	   extract(shortcode_atts(array(
	   	  'original' => '',
	   	  'width' => '',
	   	  'height' => '',
	   	  'alt' => '',
	      'style' => '',
	   ), $fus_atts));

	   if(!$width==null){
	   	$width='width='. esc_attr( $width ) .'px; ';
	   }else{
	   	$width=null;
	   }

	   if(!$height==null){
	   	$height=' height='. esc_attr( $height ) .'px;';
	   }else{
	   	$height=null;
	   }

	   global $fus_options;
	   
	   if(!$fus_options['gt_lazy_load_class']==null){
	   		$class = 'class="'. esc_attr( $fus_options['gt_lazy_load_class'] ) .'" ';
	 		$src = 'src="'. esc_attr( $fus_options['gt_lazy_load_placeholder'] ) .'" ';
		}else{
			$class=null;
			$src=null;
		}

	   $output = '<img '.$class.' alt="'.$alt.'" '.$src.'data-original="'. esc_attr( $original ) .'" '.$width.$height.' style="'. esc_attr( $style ).'" />';

		return $output;
          	
	}

	add_shortcode( 'gtlazy', 'fus_lazy_loads' );
}



/*--------------------------------------------------------------------------------
 ** Popover Shortcode **
/*--------------------------------------------------------------------------------*/

if (!function_exists('fus_popover')) {
	function fus_popover( $fus_atts, $fus_content = null ) {
	   extract(shortcode_atts(array(
	      'class' => 'default',
	      'position' => 'top',
	      'title' => 'Popover',
	      'content' => 'Content is here..',
	      'background' => '',
	      'style' => 'color:white;'
	   ), $fus_atts));

	   if($class){
	   		$popover_class = 'btn-'. esc_attr( $class );
	   } else {
	   		$popover_class = NULL;
	   }

	   if(!$background==NULL){
	   	$background = 'background:'. $background .';';
	   }

	return '<a href="#" class="btn '.$popover_class.'" data-toggle="popover" data-placement="'. esc_attr( $position ) .'" data-content="'. esc_attr( $content ) .'" title="" data-original-title="'. esc_attr( $title ) .'" style="'. esc_attr( $background ) . esc_attr( $style ) .'">'.$fus_content.'</a>';
	
	}

	add_shortcode( 'gtpopover', 'fus_popover' );
}



/*--------------------------------------------------------------------------------
 ** Pricing Table Shortcode **
/*--------------------------------------------------------------------------------*/

if (!function_exists('gt_pricingtable')) {
	function gt_pricingtable( $gt_atts, $gt_content = null ) {
	   extract(shortcode_atts(array(
	   	  'id' => 'pt1',
	      'cols' => '3',
	      'featured' => '1',
	      'bg' => '#FFFFFF',
	      'feat_bg' => '#FFFFFF',
	      'price_row' => 'yes',
	      'price_row_pos' => '2',
	      'head_bg' => '',
	      'feat_head_bg' => '',
	      'feat_amt_bg' => '#F7F7F7',
	      'price_bg' => '#F7F7F7',
	      'border_size' => '2',
	      'border_color' => '#EBECE8',
	      'border_radius' => '6',
	      'feat_border_size' => '2',
	      'feat_border_color' => '#EBECE8',
	   ), $gt_atts));

	   $class = NULL;

	   if($cols=='1'||$cols=='2'||$cols=='3'||$cols=='4'||$cols=='6'){
	   	$span = 12 / $cols ;
	   }

	   if($cols=='5'){
	   	$span = 2;
	   	$class = ' fivecolumns';
	   }

	   if($cols=='7'){
	   	$span = 2;
	   	$class = ' sevencolumns';
	   }

		 $gt_content = explode('||',$gt_content);
		 foreach ($gt_content as $key => $con){ 
			$gt_content[$key] = explode("|", $con); 
		} 

		$row_count = count($gt_content[$key]);

		$output = '<style type="text/css">
		#'.$id.' .price-table {background: '.$bg.';border: '.$border_size.'px solid '.$border_color.' !important;border-radius: '.$border_radius.'px;}
		#'.$id.' .featured {background: '.$feat_bg.';border: '.$feat_border_size.'px solid '.$feat_border_color.' !important;}
		#'.$id.' .price-table .head{background:'.$head_bg.'!important;}
		#'.$id.' .price-table.featured .head{background:'.$feat_head_bg.'!important;}
		#'.$id.' .price-table.featured .price{background:'.$feat_amt_bg.'!important;}
		#'.$id.' .price-table .price{background:'.$price_bg.'!important;}
		#'.$id.' .price-table li a,p{margin:0!important;}
		</style>';

	    $output .= '<div id="'.$id.'" class="row-fluid'.$class.'">';

	    $price_row_pos = $price_row_pos - 1;

        for ($i=0; $i<$cols; $i++) {
        	
        	if($i==$featured) {
        		$output .= '<div class="span'.$span.'"><ul style="list-style:none;" class="unstyled price-table featured">';
        	} elseif($i==$featured && $i==0) {
        		$output .= '<div class="span'.$span.'" style="margin-left:0;"><ul style="list-style:none;" class="unstyled price-table">';
        	} elseif($i==0) {
        		$output .= '<div class="span'.$span.'"><ul style="list-style:none;" class="unstyled price-table">';
        	} else {
        		$output .= '<div class="span'.$span.'"><ul style="list-style:none;" class="unstyled price-table">';
        	}
        	
        	for ($j=0; $j<$row_count; $j++) {
		   		
		   		if ($j==0 && !$head_bg=NULL) {
		   			$output .= '<li style="margin:0;" class="head">'.$gt_content[$i][$j].'</li>';
	         	} elseif ($price_row=='yes' && $j==$price_row_pos) {
		   			$output .= '<li style="margin:0;" class="price">'.$gt_content[$i][$j].'</li>';
	         	} else {
	         		$output .= '<li style="margin:0;">'.$gt_content[$i][$j].'</li>';
	         	}

		   }
		   $output .= '</ul></div>';
        }

	   $output .= '</div>';

	    return $output;

	}

	add_shortcode( 'gtptable', 'gt_pricingtable' );
}



/*--------------------------------------------------------------------------------
 ** Progress Bar Shortcode **
/*--------------------------------------------------------------------------------*/

if (!function_exists('fus_progress')) {
	function fus_progress( $fus_atts ) {
	   extract(shortcode_atts(array(
	   	  'id' => 'gtpb',
	   	  'size' => 'medium',
	   	  'type' => 'left',
	   	  'background_color' => '#EBEDEF',
	   	  'stripes' => 'none',
	   	  'border_radius' => '2',
	   	  'delay' => '300',
	   	  'text' => 'no',
	   	  'text_align' => 'left',
	   	  'percent' => 'percentage',
	   	  'custom_text' => '',
	   	  'animation_trigger' => 'pagescroll',
	   	  'animation_duration' => '2',
	   	  'animation_type' => 'ease',
	   	  'secondary_text' => '',
	   	  'secondary_text_align' => 'left',
	   	  'secondary_text_color' => '#FFFFFF',
	      'class1' => '',
	      'class2' => '',
	      'class3' => '',
	      'class4' => '',
	      'class5' => '',
	      'class6' => '',
	      'class7' => '',
	      'class8' => '',
	      'class9' => '',
	      'class10' => '',
	      'width1' => '40',
	      'width2' => '',
	      'width3' => '',
	      'width4' => '',
	      'width5' => '',
	      'width6' => '',
	      'width7' => '',
	      'width8' => '',
	      'width9' => '',
	      'width10' => '',
	      'color1' => '',
	      'color2' => '',
	      'color3' => '',
	      'color4' => '',
	      'color5' => '',
	      'color6' => '',
	      'color7' => '',
	      'color8' => '',
	      'color9' => '',
	      'color10' => '',
	      'text1' => '',
	      'text2' => '',
	      'text3' => '',
	      'text4' => '',
	      'text5' => '',
	      'text6' => '',
	      'text7' => '',
	      'text8' => '',
	      'text9' => '',
	      'text10' => ''

	   ), $fus_atts));

		$delay = '{transition_delay: "'. $delay .'",';
		$display_text = null;
		$text_align = 'text-align:'.$text_align.';';
		$size = 'bar-'.$size;

		if($type=='left'){
			$fc = 'first-child';
			$lc = 'last-child';
			$type = null;
		}elseif($type=='right'){
			$fc = 'last-child';
			$lc = 'first-child';
			$type = 'right ';
		}

		if($stripes=='animated'){
			$stripes = ' progress-striped active';
		}elseif($stripes=='fixed'){
			$stripes = ' progress-striped';
		}else{
			$stripes = null;
		}

		if($text=='no'){
			$display_text = 'display_text: "none"';
		}elseif($text=='yes'){
			$display_text = 'display_text: "fill"';
		}

		if($percent=='percentage'){
			$use_percent = ',use_percentage: true}';
		}elseif($percent=='amount'){
			$use_percent = ',use_percentage: false}';
		}

		if($percent=='percentage' && !$custom_text==NULL){
			$use_percent = null;
			$custom_text = ',percent_format: function(p) {return p + "'. $custom_text.'";}}';
		}

		if($percent=='amount' && !$custom_text==NULL){
			$use_percent = null;
			$custom_text = ',amount_format: function(p) {return p + "'. $custom_text.'";}}';
		}

		$output = '<style type="text/css" media="screen">
			#'. esc_attr($id) .'.progress{
				background: ' . $background_color . ';
			}
			#'. esc_attr($id) .'.progress>:' . $fc . ' {
			  border-top-left-radius:'. $border_radius .'px;
			  border-bottom-left-radius: '. $border_radius .'px;
			}
			#'. esc_attr($id) .'.progress>:' . $lc . ' {
			  border-top-right-radius:'. $border_radius .'px;
			  border-bottom-right-radius: '. $border_radius .'px;
			}
			#'. esc_attr($id) .' {
				-webkit-border-radius:' .$border_radius. 'px;-moz-border-radius:' .$border_radius. 'px;border-radius:' .$border_radius. 'px;
			}
			#'. esc_attr($id) .' .bar {
			    -webkit-transition: width '. esc_attr($animation_duration) .'s '. esc_attr($animation_type) .';
			    -moz-transition: width '. esc_attr($animation_duration) .'s '. esc_attr($animation_type) .';
			    -ms-transition: width '. esc_attr($animation_duration) .'s '. esc_attr($animation_type) .';
			    -o-transition: width '. esc_attr($animation_duration) .'s '. esc_attr($animation_type) .';
			    transition: width '. esc_attr($animation_duration) .'s '. esc_attr($animation_type) .';
			}
			</style>';
		

	   if(!$class1==NULL){
	   	$class1 = ' bar-'.$class1;
	   }
	   if(!$class2==NULL){
	   	$class2 = ' bar-'.$class2;
	   }
	   if(!$class3==NULL){
	   	$class3 = ' bar-'.$class3;
	   }
	   if(!$class4==NULL){
	   	$class4 = ' bar-'.$class4;
	   }
	   if(!$class5==NULL){
	   	$class5 = ' bar-'.$class5;
	   }
	   if(!$class6==NULL){
	   	$class6 = ' bar-'.$class6;
	   }
	   if(!$class7==NULL){
	   	$class7 = ' bar-'.$class7;
	   }
	   if(!$class8==NULL){
	   	$class8 = ' bar-'.$class8;
	   }
	   if(!$class9==NULL){
	   	$class9 = ' bar-'.$class9;
	   }
	   if(!$class10==NULL){
	   	$class10 = ' bar-'.$class10;
	   }

	   if(!$color1==NULL){
	   	$color1 = 'background-color:'.$color1.';';
	   }
	   if(!$color2==NULL){
	   	$color2 = 'background-color:'.$color2.';';
	   }
	   if(!$color3==NULL){
	   	$color3 = 'background-color:'.$color3.';';
	   }
	   if(!$color4==NULL){
	   	$color4 = 'background-color:'.$color4.';';
	   }
	   if(!$color5==NULL){
	   	$color5 = 'background-color:'.$color5.';';
	   }
	   if(!$color6==NULL){
	   	$color6 = 'background-color:'.$color6.';';
	   }
	   if(!$color7==NULL){
	   	$color7 = 'background-color:'.$color7.';';
	   }
	   if(!$color8==NULL){
	   	$color8 = 'background-color:'.$color8.';';
	   }
	   if(!$color9==NULL){
	   	$color9 = 'background-color:'.$color9.';';
	   }
	   if(!$color10==NULL){
	   	$color10 = 'background-color:'.$color10.';';
	   }

	   if(!$width1==NULL){
	   	$bar1 = '<div class="bar'. esc_attr( $class1 ) .'" aria-valuetransitiongoal="'. esc_attr( $width1 ) .'" style="'. $color1 . $text_align .'"><span style="margin:0 10px;">'. esc_attr( $text1 ) .'</span></div>';
	   }else{
	   	$bar1 = null;
	   }

	   if(!$width2==NULL){
	   	$bar2 = '<div class="bar'. esc_attr( $class2 ) .'" aria-valuetransitiongoal="'. esc_attr( $width2 ) .'" style="'. $color2 . $text_align .'"><span style="margin:0 10px;">'. esc_attr( $text2 ) .'</span></div>';
	   }else{
	   	$bar2 = null;
	   }

	   if(!$width3==NULL){
	   	$bar3 = '<div class="bar'. esc_attr( $class3 ) .'" aria-valuetransitiongoal="'. esc_attr( $width3 ) .'" style="'. $color3 . $text_align .'"><span style="margin:0 10px;">'. esc_attr( $text3 ) .'</span></div>';
	   }else{
	   	$bar3 = null;
	   }

	   if(!$width4==NULL){
	   	$bar4 = '<div class="bar'. esc_attr( $class4 ) .'" aria-valuetransitiongoal="'. esc_attr( $width4 ) .'" style="'. $color4 . $text_align .'"><span style="margin:0 10px;">'. esc_attr( $text4 ) .'</span></div>';
	   }else{
	   	$bar4 = null;
	   }

	   if(!$width5==NULL){
	   	$bar5 = '<div class="bar'. esc_attr( $class5 ) .'" aria-valuetransitiongoal="'. esc_attr( $width5 ) .'" style="'. $color5 . $text_align .'"><span style="margin:0 10px;">'. esc_attr( $text5 ) .'</span></div>';
	   }else{
	   	$bar5 = null;
	   }

	   if(!$width6==NULL){
	   	$bar6 = '<div class="bar'. esc_attr( $class6 ) .'" aria-valuetransitiongoal="'. esc_attr( $width6 ) .'" style="'. $color6 . $text_align .'"><span style="margin:0 10px;">'. esc_attr( $text6 ) .'</span></div>';
	   }else{
	   	$bar6 = null;
	   }

	   if(!$width7==NULL){
	   	$bar7 = '<div class="bar'. esc_attr( $class7 ) .'" aria-valuetransitiongoal="'. esc_attr( $width7 ) .'" style="'. $color7 . $text_align .'"><span style="margin:0 10px;">'. esc_attr( $text7 ) .'</span></div>';
	   }else{
	   	$bar7 = null;
	   }

	   if(!$width8==NULL){
	   	$bar8 = '<div class="bar'. esc_attr( $class8 ) .'" aria-valuetransitiongoal="'. esc_attr( $width8 ) .'" style="'. $color8 . $text_align .'"><span style="margin:0 10px;">'. esc_attr( $text8 ) .'</span></div>';
	   }else{
	   	$bar8 = null;
	   }

	   if(!$width9==NULL){
	   	$bar9 = '<div class="bar'. esc_attr( $class9 ) .'" aria-valuetransitiongoal="'. esc_attr( $width9 ) .'" style="'. $color9 . $text_align .'"><span style="margin:0 10px;">'. esc_attr( $text9 ) .'</span></div>';
	   }else{
	   	$bar9 = null;
	   }

	   if(!$width10==NULL){
	   	$bar10 = '<div class="bar'. esc_attr( $class10 ) .'" aria-valuetransitiongoal="'. esc_attr( $width10 ) .'" style="'. $color10 . $text_align .'"><span style="margin:0 10px;">'. esc_attr( $text10 ) .'</span></div>';
	   }else{
	   	$bar10 = null;
	   }

	   if($animation_trigger=='pagescroll'){
	   		$script = '<script type="text/javascript">jQuery(document).ready(function($) {
								$(".progress .bar span").hide();
								$("#'. esc_attr($id) .'").bind("inview", function(event, isInView, visiblePartX, visiblePartY) {
								  if (isInView) {
								    // element is now visible in the viewport
								    $("#'. esc_attr($id) .' .bar").progressbar('.$delay.$display_text.',refresh_speed: 100,done: function(current_percentage) {
                						$("#'. esc_attr($id) .' .bar span").show("slow");
            						}'.$use_percent.$custom_text.');
								  }
								});
								});</script>';
	   }else{
	   		$script = 
'<script type="text/javascript">jQuery(document).ready(function($) {
	$(window).load(function () {
		$(".progress .bar span").hide();
            $("#'. esc_attr($id) .' .bar").progressbar(
                '.$delay.$display_text.',
                refresh_speed: 100,
                done: function(current_percentage) {
                	$("#'. esc_attr($id) .' .bar span").show("slow");
				}'
				.$use_percent.$custom_text.');
            });
	});
</script>';
	   }

	$secondary_text_align = 'text-align:' . $secondary_text_align . ';';

	   if( !$secondary_text == '' )
	   {
	   		$secondary_text = '<span style="margin:0 10px;color:' . $secondary_text_color . ';' . $secondary_text_align . '">' . $secondary_text . '</span>';
	   }

	return $output . '<div id="'. esc_attr($id) .'" class="progress '. $type . esc_attr($size) . $stripes .'">'. $secondary_text . $bar1 . $bar2 . $bar3 . $bar4 . $bar5 . $bar6 . $bar7 . $bar8 . $bar9 . $bar10 .'</div>'.$script;
	
	}               

	add_shortcode( 'gtprogress', 'fus_progress' );
}



/*--------------------------------------------------------------------------------
 ** QR Codes Shortcode **
/*--------------------------------------------------------------------------------*/

if (!function_exists('gtsc_qrcodes')) {
	function gtsc_qrcodes( $gt_atts) {
	   extract(shortcode_atts(array(
	   	  'type' => 'url',
	   	  'url' => '',
	   	  'fname' => '',
	   	  'lname' => '',
	   	  'number' => '',
	   	  'email' => '',
	   	  'website' => '',
	   	  'company_name' => '',
	   	  'company_title' => '',
	   	  'street' => '',
	   	  'city' => '',
	   	  'state' => '',
	   	  'country' => '',
	   	  'zip' => '',
	   	  'content' => '',
	   	  'phone_number' => '',
	   	  'sms_number' => '',
	   	  'sms_text' => '',
	   	  'size' => '150',
	   	  'alt' => 'Scan the QR Code',
	   	  'style' => ''
	   ), $gt_atts));

	   	if(!$url==null){
	   		$url = urlencode(strip_tags(trim($url)));
	   	}

	   	if(!$fname==null){
	   		$fname = urlencode(strip_tags(trim($fname)));
	   	}

	   	if(!$lname==null){
	   		$lname = urlencode(strip_tags(trim($lname)));
	   	}

	   	if(!$number==null){
	   		$number = urlencode(strip_tags(trim($number)));
	   	}

	   	if(!$email==null){
	   		$email = urlencode(strip_tags(trim($email)));
	   	}

	   	if(!$website==null){
	   		$website = urlencode(strip_tags(trim($website)));
	   	}

	   	if(!$company_name==null){
	   		$company_name = urlencode(strip_tags(trim($company_name)));
	   	}

	   	if(!$company_title==null){
	   		$company_title = urlencode(strip_tags(trim($company_title)));
	   	}

	   	if(!$street==null){
	   		$street = urlencode(strip_tags(trim($street)));
	   	}

	   	if(!$city==null){
	   		$city = urlencode(strip_tags(trim($city)));
	   	}

	   	if(!$state==null){
	   		$state = urlencode(strip_tags(trim($state)));
	   	}

	   	if(!$country==null){
	   		$country = urlencode(strip_tags(trim($country)));
	   	}

	   	if(!$zip==null){
	   		$zip = urlencode(strip_tags(trim($zip)));
	   	}

	   	if(!$content==null){
	   		$content = urlencode(strip_tags(trim($content)));
	   	}

	   	if(!$phone_number==null){
	   		$phone_number = urlencode(strip_tags(trim($phone_number)));
	   	}

	   	if(!$sms_number==null){
	   		$sms_number = urlencode(strip_tags(trim($sms_number)));
	   	}

	   	if(!$sms_text==null){
	   		$sms_text = urlencode(strip_tags(trim($sms_text)));
	   	}

	   	if($type=="current_page"){
	   		$url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '';
	   		$url = urlencode($url);
	   	}

	   	if($type=="bc"){
	   		$data = "BEGIN:VCARD%0AVERSION:2.1%0AN:".$lname.";".$fname."%0AFN:".$fname."+".$lname."%0ATEL;WORK;VOICE:".$number."%0AEMAIL;WORK;INTERNET:".$email."%0AURL:".$website."%0AORG:".$company_name."%0ATITLE:".$company_title."%0AADR;WORK:;;".$street.";".$city.";".$state.";".$zip.";".$country."%0AEND:VCARD";
	   	}

	   	if($type=="url" && !$url==null || $type=="current_page"){
	   		$output = '<img id="gt_qr_code" src="https://chart.googleapis.com/chart?chs=' . esc_attr( $size ) . 'x' . esc_attr( $size ) . '&cht=qr&chld=H|1&chl=' . $url .'" alt="' . esc_attr( $alt ) . '" />';
	   	} elseif($type=="bc") {
	   		$output = '<img id="gt_qr_code" src="https://chart.googleapis.com/chart?chs=' . esc_attr( $size ) . 'x' . esc_attr( $size ) . '&cht=qr&chld=H|1&chl=' . $data .'" alt="' . esc_attr( $alt ) . '" />';
	   	} elseif($type=="content" && !$content==null) {
	   		$output = '<img id="gt_qr_code" src="https://chart.googleapis.com/chart?chs=' . esc_attr( $size ) . 'x' . esc_attr( $size ) . '&cht=qr&chld=H|1&chl=' . $content .'" alt="' . esc_attr( $alt ) . '" />';
	   	} elseif($type=="phone" && !$phone_number==null){
	   		$output = '<img id="gt_qr_code" src="https://chart.googleapis.com/chart?chs=' . esc_attr( $size ) . 'x' . esc_attr( $size ) . '&cht=qr&chld=H|1&chl=tel%3A' . $phone_number .'" alt="' . esc_attr( $alt ) . '" />';
	   	} elseif($type=="sms" && ( !$sms_number==null || !$sms_text==null )){
	   		$output = '<img id="gt_qr_code" src="https://chart.googleapis.com/chart?chs=' . esc_attr( $size ) . 'x' . esc_attr( $size ) . '&cht=qr&chld=H|1&chl=SMSTO%3A' . $sms_number .'%3A'. $sms_text .'" alt="' . esc_attr( $alt ) . '" />';
	   	} else {
	   		$output = NULL;
	   	}
	   	

		return $output;
          	
	}

	add_shortcode( 'gtqrcode', 'gtsc_qrcodes' );
}



/*--------------------------------------------------------------------------------
 ** Row Shortcode **
/*--------------------------------------------------------------------------------*/

if (!function_exists('gt_rows')) {
	function gt_rows($gt_atts, $gt_content = null ) {
	   extract(shortcode_atts(array(
	   		'' => ''
	   ), $gt_atts));

	return '<div class="row-fluid">'.do_shortcode($gt_content).'</div>';
	}
	add_shortcode( 'gtrow', 'gt_rows' );
}



/*--------------------------------------------------------------------------------
 ** Switch Shortcode **
/*--------------------------------------------------------------------------------*/

if (!function_exists('fus_switches')) {
	function fus_switches($fus_atts) {
	   extract(shortcode_atts(array(
	      'type' => '',
	      'default' => 'off',
	      'active' => 'yes',
	      'onicon' => '',
	      'officon' => '',
	      'style' => '-webkit-box-sizing: content-box;-moz-box-sizing: content-box;-ms-box-sizing: content-box;-o-box-sizing: content-box;box-sizing: content-box;'
	   ), $fus_atts));

	   if($type == 'square'){
	   		$switch_type = ' switch-square';
	   } else {
	   		$switch_type = NULL;
	   }

	   if($default == 'on'){
	   		$switch_default = 'checked';
	   } else {
	   		$switch_default = NULL;
	   }

	   if($active == 'yes'){
	   		$switch_active = '';
	   } else {
	   		$switch_active = ' deactivate';
	   }

	   if($onicon && $officon) {
	   		$switch_icon = ' data-on-label="<i class=\'fui-'. esc_attr( $onicon ).'\'></i>" data-off-label="<i class=\'fui-'. esc_attr( $officon ).'\'></i>"';
	   } else {
	   		$switch_icon = NULL;
	   }
	   

	return '<div class="switch'. esc_attr( $switch_type ).' has-switch'. esc_attr( $switch_active ) .'" style="'. esc_attr( $style ) .'"'. $switch_icon .'>
					<input type="checkbox" '. esc_attr( $switch_default ).' data-toggle="switch">
			</div>';
	}
	add_shortcode( 'gtswitch', 'fus_switches' );
}



/*--------------------------------------------------------------------------------
 ** Tab Shortcode **
/*--------------------------------------------------------------------------------*/

if (!function_exists('fus_tabs')) {
	function fus_tabs( $fus_atts, $fus_content = null ) {
	   extract(shortcode_atts(array(
	   	  'id' => 't1',
	      'count' => '3',
	      'type' => '',
	      'title' => 'Tab 1|Tab 2|Tab 3',
	      'tabids' => '1,2,3',
	      'open_tab' => '1',
	      'transition_duration' => '0.25',
	      'transition_timing' => 'ease-in-out',
	      'head_bg_active' => '#FFFFFF',
	      'head_bg' => '#FFFFFF',
	      'head_text_color_active' => '#555555',
	      'head_text_color' => '#9F9F9F',
	      'content_bg' => '#FFFFFF',
	      'content_text_color' => '#555555',
	      'border_size' => '2',
	      'border_style' => 'solid',
	      'border_radius' => '6',
	      'border_color' => '#E1E4E7',
	      'style' => ''
	   ), $fus_atts));

	   $title = explode('|', $title);
	   $tabids = explode(',', $tabids);
	   
	   $fus_content = explode('|', $fus_content);

	   $left = null;
	   $right = null;

	   if( $type=="left" ) {
	   		$left = '<div id="'.$id.'" class="tabbable tabs-left" style="'.$style.'">';
	   } elseif( $type=="right" ) {
	   		$right = '<div id="'.$id.'" class="tabbable tabs-right" style="'.$style.'">';
	   }

	   if($type == 'left'){
	   		$output = '<style type="text/css" media="screen"> #'.$id.' > .nav-tabs > li.active > a,#'.$id.' > .nav-tabs > li.active > a:hover { border-width: '.$border_size.'px;border-style:'.$border_style.';border-color: '.$border_color.';-webkit-border-radius: '.$border_radius.'px;-moz-border-radius: '.$border_radius.'px;border-radius: '.$border_radius.'px; }  
	   			#'.$id.' > .nav-tabs > li.active > a { background-color:'.$head_bg_active.'!important;color:'.$head_text_color_active.'!important;border: '.$border_size.'px '.$border_style.' '.$border_color.'!important; }
	   			#'.$id.' > .nav-tabs > li > a { color:'.$head_text_color.'!important;border: '.$border_size.'px '.$border_style.' '.$border_color.'; }
	   			#'.$id.' > .nav-tabs { border-color: transparent;border-right-width: '.$border_size.'px;border-width: '.$border_size.'px;border-style:'.$border_style.';margin-right:0px;-webkit-border-radius: '.$border_radius.'px;-moz-border-radius: '.$border_radius.'px;border-radius: '.$border_radius.'px; }
	   			#'.$id.' .tab-content .tab-pane { border: 0px; } 
	   			#'.$id.' .tab-content { -webkit-border-radius: '.$border_radius.'px!important;-moz-border-radius: '.$border_radius.'px!important;border-radius: '.$border_radius.'px!important; }
	   			#'.$id.' > .nav-tabs > li { background-color: '.$head_bg.'; }
	   			#'.$id.' .tab-content .tab-pane { border: 0px; } 
	   			#'.$id.' .fade { -webkit-transition: opacity '.$transition_duration.'s '.$transition_timing.';-moz-transition: opacity '.$transition_duration.'s '.$transition_timing.';-o-transition: opacity '.$transition_duration.'s '.$transition_timing.';transition: opacity '.$transition_duration.'s '.$transition_timing.';} </style>';
	   }elseif($type == 'right'){
	   		$output = '<style type="text/css" media="screen"> #'.$id.' > .nav-tabs > li.active > a,#'.$id.' > .nav-tabs > li.active > a:hover { border-width: '.$border_size.'px;border-style:'.$border_style.';border-color: '.$border_color.';-webkit-border-radius: '.$border_radius.'px;-moz-border-radius: '.$border_radius.'px;border-radius: '.$border_radius.'px; }  
	   			#'.$id.' > .nav-tabs > li.active > a { background-color:'.$head_bg_active.'!important;color:'.$head_text_color_active.'!important;border: '.$border_size.'px '.$border_style.' '.$border_color.'!important; }
	   			#'.$id.' > .nav-tabs > li > a { color:'.$head_text_color.'!important;border: '.$border_size.'px '.$border_style.' '.$border_color.'; }
	   			#'.$id.' > .nav-tabs { border-color: transparent;border-right-width: '.$border_size.'px;border-width: '.$border_size.'px;border-style:'.$border_style.';margin-left:0px;-webkit-border-radius: '.$border_radius.'px;-moz-border-radius: '.$border_radius.'px;border-radius: '.$border_radius.'px; }
	   			#'.$id.' .tab-content .tab-pane { border: 0px; } 
	   			#'.$id.' .tab-content { -webkit-border-radius: '.$border_radius.'px!important;-moz-border-radius: '.$border_radius.'px!important;border-radius: '.$border_radius.'px!important; }
	   			#'.$id.' > .nav-tabs > li { background-color: '.$head_bg.'; }
	   			#'.$id.' .tab-content .tab-pane { border: 0px; } 
	   			#'.$id.' .fade { -webkit-transition: opacity '.$transition_duration.'s '.$transition_timing.';-moz-transition: opacity '.$transition_duration.'s '.$transition_timing.';-o-transition: opacity '.$transition_duration.'s '.$transition_timing.';transition: opacity '.$transition_duration.'s '.$transition_timing.';} </style>';
	   }else{
	   		$output = '<style type="text/css" media="screen"> #'.$id.'.nav-append-content > li.active:first-child:before { background-color: '.$content_bg.';border-left: '.$border_size.'px '.$border_style.' '.$border_color.'; } 
	   		#'.$id.' > li > a { background-color:'.$head_bg.'!important;color:'.$head_text_color.';border:0px;-webkit-border-radius: '.$border_radius.'px '.$border_radius.'px 0 0;-moz-border-radius: '.$border_radius.'px '.$border_radius.'px 0 0;border-radius: '.$border_radius.'px '.$border_radius.'px 0 0;border-style:'.$border_style.'!important; } 
	   		#'.$id.' > li.active > a,#'.$id.' > li.active > a:hover,#'.$id.' > li.active > a:focus { background-color:'.$head_bg_active.'!important;color:'.$head_text_color_active.';border: '.$border_size.'px '.$border_style.' '.$border_color.';border-bottom-color: '.$content_bg.'!important;}
	   		#'.$id.'-content .fade { -webkit-transition: opacity '.$transition_duration.'s '.$transition_timing.';-moz-transition: opacity '.$transition_duration.'s '.$transition_timing.';-o-transition: opacity '.$transition_duration.'s '.$transition_timing.';transition: opacity '.$transition_duration.'s '.$transition_timing.';} </style>';
	   }

	   if($type == 'left' || $type == 'right'){
	   		$output .= $left.$right.'<ul class="nav nav-tabs nav-append-content" style="list-style:none;">';
	   } else{
	   		$output .= '<ul id="'.$id.'" class="nav nav-tabs nav-append-content" style="list-style:none;'.$style.'">';
	   }

		$open_tab = $open_tab - 1;

		for ( $i=0; $i<$count; $i++ ) {
			if ($i==$open_tab) {
				$output .= '<li style="margin:0 0 -'.$border_size.'px 0;" class="active"><a href="#'. esc_attr( $id ) .'-tab'. esc_attr( $tabids[$i] ) .'" style="text-decoration:none;">'.$title[$i].'</a></li>';
			}
			else {
				$output .= '<li style="margin:0 0 -'.$border_size.'px 0;"><a href="#'. esc_attr( $id ) .'-tab'. esc_attr( $tabids[$i] ) .'" style="text-decoration:none;">'.$title[$i].'</a></li>';
			}
		}

		$output .= '</ul>';

		if($type == 'left' || $type == 'right'){
	   		$output .= '<div class="tab-content" style="color:'.$content_text_color.';">';
	   }else{
	   		$output .= '<div id="'.$id.'-content" class="tab-content" style="background-color:'.$content_bg.';border: '.$border_size.'px '.$border_style.' '.$border_color.';-webkit-border-radius: '.$border_radius.'px;-moz-border-radius: '.$border_radius.'px;border-radius: '.$border_radius.'px;">';
	   }

		foreach ($fus_content as $key => $cont) {
			reset($fus_content);
			if($key === $open_tab){
				$output .= '<div class="tab-pane fade active in" id="'. esc_attr( $id ) .'-tab'. esc_attr( $tabids[$key] ) .'" style="color:'.$content_text_color.'">'. do_shortcode( $cont ) .'</div>';
			} else {
				$output .= '<div class="tab-pane fade" id="'. esc_attr( $id ) .'-tab'. esc_attr( $tabids[$key] ) .'" style="color:'.$content_text_color.';">'. do_shortcode( $cont ) .'</div>';
			}
		}
			
		$output .= '</div>';

		if($type == 'left' || $type == 'right'){
			$output .= '</div>';
		}

		return $output;
          	
	}

	add_shortcode( 'gttab', 'fus_tabs' );
}



/*--------------------------------------------------------------------------------
 ** Table Shortcode **
/*--------------------------------------------------------------------------------*/

if (!function_exists('fus_tables')) {
	function fus_tables($fus_atts,$fus_content=null) {
	extract(shortcode_atts(array(
	    'type' => 'table-striped',
	    'cols' => 'none',
	    'background' => '',
	    'style' => ' ',
	    'background1' => '',
	    'thstyle' => ' ',
	    'background2' => '',
	    'tdstyle' => 'padding:8px 25px;'
	), $fus_atts));

		if( !$background == NULL ){
			$background = 'background:'. $background .' !important;';
		}

		if( !$background1 == NULL ){
			$background1 = 'background:'. $background1 .' !important;';
		}

		if( !$background2 == NULL ){
			$background2 = 'background:'. $background2 .' !important;';
		}

	   	$cols = explode(',',$cols);
	    $fus_content = explode('|',do_shortcode($fus_content));
	    $total = count($cols);
	    $output = '<table class="table '. esc_attr( $type ) .'" style="'. esc_attr( $background ) . esc_attr( $style ) .'"><tbody><tr>';
	    foreach($cols as $col):
	        $output .= '<th style="'. esc_attr( $background1 ) . esc_attr( $thstyle ) .'">'.$col.'</th>';
	    endforeach;
	    $output .= '</tr><tr>';
	    $counter = 1;
	    foreach($fus_content as $datum):
	        $output .= '<td style="'. esc_attr( $background2 ) . esc_attr( $tdstyle ) .'">'.$datum.'</td>';
	        if($counter%$total==0):
	            $output .= '</tr>';
	        endif;
	        $counter++;
	    endforeach;
	        $output .= '</table>';
	    return $output;
	
	}

	add_shortcode( 'gttable', 'fus_tables' );
}



/*--------------------------------------------------------------------------------
 ** Tooltip Shortcode **
/*--------------------------------------------------------------------------------*/

if (!function_exists('fus_tooltip')) {
	function fus_tooltip( $fus_atts, $fus_content = null ) {
	   extract(shortcode_atts(array(
	      'type' => 'light',
	      'position' => 'top',
	      'content' => 'Tooltip',
	      'style' => 'display:table;'
	   ), $fus_atts));
	   
	   if($type == 'light'){
	   		$tooltip_type = ' data-tooltip-style="light"';
	   } else {
	   		$tooltip_type = NULL;
	   }

	return '<p data-toggle="tooltip"'.$tooltip_type.' data-placement="'. esc_attr( $position ) .'" title data-original-title="'. esc_attr( $content ) .'" style="'. esc_attr( $style ) .'">'.do_shortcode($fus_content).'</p>';
	}

	add_shortcode( 'gttooltip', 'fus_tooltip' );
}



/*----------------------------------------------------------------------
 ** Video Shortcode **
/*----------------------------------------------------------------------*/

if (!function_exists('fus_video')) {
	function fus_video($atts) {
	   extract(shortcode_atts(array(
	   		'id' => 'my_video_1',
	   	  'preload' => 'auto',
	      'width' => '620',
	      'height' => '349',
	      'poster' => 'http://www.videojs.com/img/poster.jpg',
	      'src1' => 'http://clips.vorwaerts-gmbh.de/VfE_html5.mp4',
	      'type1' => 'video/mp4',
	      'src2' => 'http://clips.vorwaerts-gmbh.de/VfE.webm',
	      'type2' => 'video/webm',
	      'src3' => 'http://clips.vorwaerts-gmbh.de/VfE.ogg',
	      'type3' => 'video/ogg',
	      'youtube' => '',
	      'ytcontrol' => 'false',
	      'vimeo' => ''
	   ), $atts));

	if( $youtube != NULL && $vimeo == NULL ) {
	return '<video id="'. esc_attr( $id ) .'" src="" class="video-js vjs-default-skin" controls
			preload="'. esc_attr( $preload ) .'" width="'. esc_attr( $width ) .'" height="'. esc_attr( $height ) .'" data-setup=\'{ "techOrder": ["youtube"], "src": "'. $youtube .'", "ytcontrols": '.$ytcontrol.' }\'>
			</video>';
	} elseif( $youtube == NULL && $vimeo != NULL ) {
		return '<video id="'. esc_attr( $id ) .'" src="" class="video-js vjs-default-skin" controls
			preload="'. esc_attr( $preload ) .'" width="'. esc_attr( $width ) .'" height="'. esc_attr( $height ) .'" data-setup=\'{ "techOrder": ["vimeo"], "src": "'. $vimeo .'", "loop": false, "autoplay": false }\'>
			</video>';
	} else {
		return '<video id="'. esc_attr( $id ) .'" class="video-js vjs-default-skin" controls
			preload="'. esc_attr( $preload ) .'" width="'. esc_attr( $width ) .'" height="'. esc_attr( $height ) .'" poster="'. esc_attr( $poster ) .'" data-setup="">
			<source src="'. esc_attr( $src1 ) .'" type="'. esc_attr( $type1 ) .'">
			<source src="'. esc_attr( $src2 ) .'" type="'. esc_attr( $type2 ) .'">
			<source src="'. esc_attr( $src3 ) .'" type="'. esc_attr( $type3 ) .'">
			</video>';
	}
	
	}
	add_shortcode( 'gtvideo', 'fus_video' );
}



/*----------------------------------------------------------------------
 ** Visibility Shortcode **
/*----------------------------------------------------------------------*/

if (!function_exists('gt_responsive_utility')) {
	function gt_responsive_utility($atts,$gt_content=null) {
	   extract(shortcode_atts(array(
	   	  'type' => 'visible-phone'
	   ), $atts));

	   return '<div class="'.$type.'">'.do_shortcode($gt_content).'</div>';
	
	}
	add_shortcode( 'gtvisibility', 'gt_responsive_utility' );
}


?>