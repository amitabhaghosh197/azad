// JavaScript Document

	
	$(function(){
		
		 /*****Main Menu Hover**********************/
		$('.main-menu > li ').hover(function(){
		
		$(this) .children() .stop(true , true).animate({ 'background-color' : '#eeeeee'}, 500);
		$(this) .children(':last-child > a').stop(true, true).animate({'background-color' : '#02c9d8'}, 500);
		}, //mouseover
		function(){
		$(this).not('.main-menu > li:first-child') .children() .stop(true , true).animate({ 'background-color' : '#61284b'}, 500);
		$(this) .children(':last-child > a').stop(true, true).animate({'background-color' : '#02c9d8'});
			}//mouseout
		
		); //hover
		
		
		
		}); // $ function
	
	
	
	
	