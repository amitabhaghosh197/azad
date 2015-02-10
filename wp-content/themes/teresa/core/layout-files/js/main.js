// JavaScript Document

var $ = jQuery.noConflict();

$(document).ready(function(){
	 
	 /*  === Photo Gallery Image Hover Action ===     */
	 
	$('.photo_gallery').hover(
	function(){
    
	$(this).children('.gallery-hover-box').toggle().addClass('animated zoomIn').siblings().animate({"opacity":"0.50"},500,'easeInQuad');
	},
	
	function(){
		
		$(this).children('.gallery-hover-box').toggle().removeClass('animated zoomIn').siblings().animate({"opacity":"1.0"});
		
		}
	
	
 );// gallery on hover
 

/*  === Post Navigation Toggle on Click ===     */

$('.post-navigation .screen-reader-text').bind('click', function(e){
	//alert('Clicked');
	$('.post-navigation .nav-links ').toggle();
	
	});//post-navigation
	
	/*$('.container').flowtype({
		
		fontRatio : 110
		
		}); // flowtype*/
		
/*==========For Uber Menu Toggle in Low Resolution===========================*/

	if( $(window).width() < 979){
		$('.navbar').removeClass('pull-right');
		}//remove class pull right
	
	
	/*==========For ScrollTop===========================*/
$('body').scrollToTop({skin: 'cycle'});

/*==========For Dropdowns===========================*/
$('.dropdown-toggle').dropdown();
$('.dropdown-menu ').hover(function(e){
		
	e.preventDefault();
	$('.dropdown').addClass('selected');
		
	 },
		function(){
		
	$('.dropdown').removeClass('selected');
		
	});
	 
	 /*********DAMIRA BUTTONS HOVER***************/
	 
$('.damira-buttons').hover(function(){
	$(this).animate( { "padding" : "5px 25px"}, { easing : 'linear', duration : 100 } );
	},
	function(){
	$(this).animate( { "padding" : "5px 20px"}, { easing : 'linear', duration : 100 } );	
	}
	);// damira-buttons hover function

$('.damira-bordered-with-white-hover-buttons').bind({mouseover:function(){
	$(this).stop(true).delay(200).addClass('animated pulse');
	
	},
	mouseout:function(){
		
	$(this).removeClass('animated pulse');	
		
		}
	
	});

$('.video').fitVids();

$('.tlt').textillate({ in : {effect : "flash", delayScale : 0.5, shuffle : true }},
                      { out : { effect : "flash", delayScale :0.5}});
					  
$('input, textarea').placeholder();	

					  
	}); //document .ready
	


	
	

$(window).load(function(){
	 
	           
	        $('#status').fadeOut(); // will first fade out the loading animation
			$('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
			$('body').delay(350).css({'overflow':'visible'});
			
			/*    End of Preloader       */
			

		

	var $newslider = $('#slider');
	
	
		$newslider.flexslider({
		animation: "slide",
        prevText: '',
        nextText: '',
		randomize: true
			});
		
		
		 //main slider
		
	var $courage = $('#courage');
	$courage.imagesLoaded( function(){
	  
	  $courage.flexslider({
		  
		   animation: "slide",
           animationLoop: true,
	       randomize: true,
           itemWidth: 210,
           itemMargin: 5,
        // minItems: 2,
           maxItems: 1,
	       directionNav: false
		  
		  });
	
	});// courage
	
$('#newsSlider').flexslider({
	  animation: "slide",
	  animationLoop: true,
      itemWidth: 335,
      itemMargin: -1, //hack for border-right. You can change this and see the result.
	  pauseOnHover: true,
	  maxItems: 3,
	  controlNav: false,
	  directionNav : false,
	  slideshowSpeed: 5000,           
      animationSpeed: 300,
	  prevText: '',
      nextText: '',
	  end: function(){
		$('#newsSlider .slides > li:last-child').css({"border-right" : "0px solid transparent"}, 3000, {easing : "linear"});
		
		} // hiding the border-right of active li last-child
	
	}).flexsliderManualDirectionControls(); //newsSlider
	
	
	$('#photoStream').flexslider({
		
		animation: "slide",
        animationLoop: true,
        itemWidth: 120,
        itemMargin: 5,
		prevText: '',
        nextText: '',
		//maxItems : 2,
		controlNav: false,
		directionNav : false,
		pauseOnHover: true
		
		}).flexsliderManualDirectionControls();//photostream
		
	
		
		            
					
						
		$('.photo-1').hover(function(){
			
			        var effect = "fade";
					var duration = 300;
			
			$(this).children('.flex-photoCaption').show(effect, duration);
			
			
			},
			
			function(){
				var effect = "fade";
					var duration = 300;
				
			$(this).children('.flex-photoCaption').hide(effect, duration);	
				
				
				}
			
			);//photo-1 hover
		
		
	$trusties = $('#ourTrusties');
	 	$trusties.flexslider({
			animation: "slide",
        animationLoop: true,
        itemWidth: 180,
        itemMargin: 5,
		prevText: '',
        nextText: '',
		controlNav: false,
		pauseOnHover: true,
		slideshowSpeed: 4000,          
        animationSpeed: 300
			
			
			});
	
	
		
	});	//window.load
	

Modernizr.addTest('ipad', function () {
return !!navigator.userAgent.match(/iPad/i);
});
 
Modernizr.addTest('iphone', function () {
return !!navigator.userAgent.match(/iPhone/i);
});
 
Modernizr.addTest('ipod', function () {
return !!navigator.userAgent.match(/iPod/i);
});
 
Modernizr.addTest('appleios', function () {
return (Modernizr.ipad || Modernizr.ipod || Modernizr.iphone);
});
 
/* CSS position:fixed
* Not supported in older IE browsers, nor on Apple's iOS devices.
* Actually the token example on the Modernizr docs. http://www.modernizr.com/docs/
*/
Modernizr.addTest('positionfixed', function () {
var test = document.createElement('div'),
control = test.cloneNode(false),
fake = false,
root = document.body || (function () {
fake = true;
return document.documentElement.appendChild(document.createElement('body'));
}());
 
var oldCssText = root.style.cssText;
root.style.cssText = 'padding:0;margin:0';
test.style.cssText = 'position:fixed;top:42px';
root.appendChild(test);
root.appendChild(control);
var ret = test.offsetTop !== control.offsetTop;
 
root.removeChild(test);
root.removeChild(control);
root.style.cssText = oldCssText;
if (fake) {
document.documentElement.removeChild(root);
}
/* Uh-oh. iOS would return a false positive here.
* If it's about to return true, we'll explicitly test for known iOS User Agent strings.
* "UA Sniffing is bad practice" you say. Agreeable, but sadly this feature has made it to
* Modernizr's list of undectables, so we're reduced to having to use this. */
return ret && !Modernizr.appleios;
}); 

	
	

/*
 * scrollToTop
 * https://github.com/amazingsurge/jquery-scrollToTop
 *
 * Copyright (c) 2014 amazingsurge
 * Licensed under the GPL license.
 */

(function(window, document, $, undefined) {
    'use strict';

    // Constructor
    var ScrollToTop = function(options) {
        this.$doc = $('body');
        this.options = $.extend(ScrollToTop.defaults, options);

        var namespace = this.options.namespace;

        if (this.options.skin === null) {
            this.options.skin = 'default';
        }

        this.classes = {
            skin: namespace + '_' + this.options.skin,
            trigger: namespace,
            animating: namespace + '_animating',
            show: namespace + '_show'
        };

        this.disabled = false;
        this.useMobile = false;
        this.isShow = false;

        var self = this;
        $.extend(self, {
            init: function() {
                self.transition = self.transition();
                self.build();


                if (self.options.target) {
                    if (typeof self.options.target === 'number') {
                        self.target = self.options.target;
                    } else if (typeof self.options.target === 'string') {
                        self.target = Math.floor($(self.options.target).offset().top);
                    }
                } else {
                    self.target = 0;
                }

                self.$trigger.on('click.scrollToTop', function() {
                    self.$doc.trigger('ScrollToTop::jump');
                    return false;
                });

                // bind events
                self.$doc.on('ScrollToTop::jump', function() {
                    if (self.disabled) {
                        return;
                    }

                    self.checkMobile();

                    var speed, easing;

                    if (self.useMobile) {
                        speed = self.options.mobile.speed;
                        easing = self.options.mobile.easing;
                    } else {
                        speed = self.options.speed;
                        easing = self.options.easing;
                    }

                    self.$doc.addClass(self.classes.animating);


                    if (self.transition.supported) {
                        var pos = $(window).scrollTop();

                        self.$doc.css({
                            'margin-top': -pos + self.target + 'px'
                        });
                        $(window).scrollTop(self.target);

                        self.insertRule('.duration_' + speed + '{' + self.transition.prefix + 'transition-duration: ' + speed + 'ms;}');

                        self.$doc.addClass('easing_' + easing + ' duration_' + speed).css({
                            'margin-top': ''
                        }).one(self.transition.end, function() {
                            self.$doc.removeClass(self.classes.animating + ' easing_' + easing + ' duration_' + speed);
                        });
                    } else {
                        $('html, body').stop(true, false).animate({
                            scrollTop: self.target
                        }, speed, function() {
                            self.$doc.removeClass(self.classes.animating);
                        });
                        return;
                    }
                })
                    .on('ScrollToTop::show', function() {
                        if (self.isShow) {
                            return;
                        }
                        self.isShow = true;

                        self.$trigger.addClass(self.classes.show);
                    })
                    .on('ScrollToTop::hide', function() {
                        if (!self.isShow) {
                            return;
                        }
                        self.isShow = false;
                        self.$trigger.removeClass(self.classes.show);
                    })
                    .on('ScrollToTop::disable', function() {
                        self.disabled = true;
                        self.$doc.trigger('ScrollToTop::hide');
                    })
                    .on('ScrollToTop::enable', function() {
                        self.disabled = false;
                        self.toggle();
                    });

                $(window).on('scroll', self._throttle(function() {
                    if (self.disabled) {
                        return;
                    }

                    self.toggle();
                }, self.options.throttle));

                if (self.options.mobile) {
                    $(window).on('resize', self._throttle(function() {
                        if (self.disabled) {
                            return;
                        }

                        self.checkMobile();
                    }, self.options.throttle));
                }

                self.toggle();
            },
            checkMobile: function() {
                var width = $(window).width();

                if (width < self.options.mobile.width) {
                    self.useMobile = true;
                } else {
                    self.useMobile = false;
                }
            },
            build: function() {
                if (self.options.trigger) {
                    self.$trigger = $(self.options.trigger);
                } else {
                    self.$trigger = $('<a href="#" class="' + self.classes.trigger + ' ' + self.classes.skin + '">' + self.options.text + '</a>').appendTo($('body'));
                }

                self.insertRule('.' + self.classes.show + '{' + self.transition.prefix + 'animation-duration: ' + self.options.animationSpeed + 'ms;' + self.transition.prefix + 'animation-name: ' + self.options.namespace + '_' + self.options.animation + ';}');

                if (self.options.mobile) {
                    self.insertRule('@media (max-width: ' + self.options.mobile.width + 'px){.' + self.classes.show + '{' + self.transition.prefix + 'animation-duration: ' + self.options.mobile.animationSpeed + 'ms !important;' + self.transition.prefix + 'animation-name: ' + self.options.namespace + '_' + self.options.mobile.animation + '  !important;}}');
                }
            },
            can: function() {
                var distance;
                if (self.useMobile) {
                    distance = self.options.mobile.distance;
                } else {
                    distance = self.options.distance;
                }
                if ($(window).scrollTop() > distance) {
                    return true;
                } else {
                    return false;
                }
            },
            toggle: function() {
                if (self.can()) {
                    self.$doc.trigger('ScrollToTop::show');
                } else {
                    self.$doc.trigger('ScrollToTop::hide');
                }
            },

            transition: function() {
                var e,
                    end,
                    prefix = '',
                    supported = false,
                    el = document.createElement("fakeelement"),
                    transitions = {
                        "WebkitTransition": "webkitTransitionEnd",
                        "MozTransition": "transitionend",
                        "OTransition": "oTransitionend",
                        "transition": "transitionend"
                    };
                for (e in transitions) {
                    if (el.style[e] !== undefined) {
                        end = transitions[e];
                        supported = true;
                        break;
                    }
                }
                if (/(WebKit)/i.test(window.navigator.userAgent)) {
                    prefix = '-webkit-';
                }
                return {
                    prefix: prefix,

                    end: end,
                    supported: supported
                };
            },
            insertRule: function(rule) {
                if (self.rules && self.rules[rule]) {
                    return;
                } else if (self.rules === undefined) {
                    self.rules = {};
                } else {
                    self.rules[rule] = true;
                }

                if (document.styleSheets && document.styleSheets.length) {
                    document.styleSheets[0].insertRule(rule, 0);
                } else {
                    var style = document.createElement('style');
                    style.innerHTML = rule;
                    document.head.appendChild(style);
                }
            },
            /**
             * _throttle
             * @description Borrowed from Underscore.js
             */
            _throttle: function(func, wait) {
                var _now = Date.now || function() {
                    return new Date().getTime();
                };
                var context, args, result;
                var timeout = null;
                var previous = 0;
                var later = function() {
                    previous = _now();
                    timeout = null;
                    result = func.apply(context, args);
                    context = args = null;
                };
                return function() {
                    var now = _now();
                    var remaining = wait - (now - previous);
                    context = this;
                    args = arguments;
                    if (remaining <= 0) {
                        clearTimeout(timeout);
                        timeout = null;
                        previous = now;
                        result = func.apply(context, args);
                        context = args = null;
                    } else if (!timeout) {
                        timeout = setTimeout(later, remaining);
                    }
                    return result;
                };
            }
        });

        this.init();
    };

    // Default options
    ScrollToTop.defaults = {
        distance: 200,
        speed: 1000,
        easing: 'linear',
        animation: 'fade', // fade, slide, none
        animationSpeed: 500,

        mobile: {
            width: 768,
            distance: 100,
            speed: 1000,
            easing: 'easeInOutElastic',
            animation: 'slide',
            animationSpeed: 200
        },

        trigger: null, // Set a custom triggering element. Can be an HTML string or jQuery object
        target: null, // Set a custom target element for scrolling to. Can be element or number
        text: 'Scroll To Top', // Text for element, can contain HTML

        skin: null,
        throttle: 250,

        namespace: 'scrollToTop'
    };

    ScrollToTop.prototype = {
        constructor: ScrollToTop,
        jump: function() {
            this.$doc.trigger('ScrollToTop::jump');
        },
        disable: function() {
            this.$doc.trigger('ScrollToTop::disable');
        },
        enable: function() {
            this.$doc.trigger('ScrollToTop::enable');
        },
        destroy: function() {
            this.$trigger.remove();
            this.$doc.data('ScrollToTop', null);
            this.$doc.off('ScrollToTop::enable')
                .off('ScrollToTop::disable')
                .off('ScrollToTop::jump')
                .off('ScrollToTop::show')
                .off('ScrollToTop::hide');
        }
    };

    $.fn.scrollToTop = function(options) {
        if (typeof options === 'string') {
            var method = options;
            var method_arguments = arguments.length > 1 ? Array.prototype.slice.call(arguments, 1) : undefined;

            return this.each(function() {
                var api = $.data(this, 'scrollToTop');

                if (api && typeof api[method] === 'function') {
                    api[method].apply(api, method_arguments);
                }
            });
        } else {
            return this.each(function() {
                var api = $.data(this, 'scrollToTop');
                if (!api) {
                    api = new ScrollToTop(options);
                    $.data(this, 'scrollToTop', api);
                }
            });
        }
    };
}(window, document, jQuery));

	
	
	
	
	
	