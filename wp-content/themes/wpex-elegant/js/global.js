( function($) {
    'use strict';
	
	$( document ).ready( function() {	
		// Main menu superfish
		$( 'ul.sf-menu' ).superfish( {
			delay     : 200,
			animation : {
				opacity :'show',
				height  :'show'
			},
			speed     : 'fast',
			cssArrows : false,
			disableHI : true
		} );
		
		// Mobile Menu
		$( '#navigation-toggle' ).sidr( {
			name   : 'sidr-main',
			source : '#sidr-close, #site-navigation, .site-navigation2',
			side   : 'left'
		} );
		$( '.sidr-class-toggle-sidr-close' ).click( function() {
			$.sidr( 'close', 'sidr-main' );
			return false;
		} );
		
		// Close the menu on window change
		$( window ).resize( function() {
			$.sidr( 'close', 'sidr-main' );
		} );
		
		// Prettyphoto => for desktops only
		if ( $( window ).width() > 767 ) {
		
			// PrettyPhoto Without gallery
			$( '.wpex-lightbox' ).prettyPhoto( {
				theme              : 'darky_square',
				allow_resize       : true,
				counter_separator_label: ' of ',
				show_title         : false,
				social_tools       : false,
				wmode              : 'opaque'
			} );
		
			//PrettyPhoto With Gallery
			$( "a[rel^='wpexLightboxGallery']" ).prettyPhoto( {
				show_title         : false,
				social_tools       : false,
				autoplay_slideshow : false,
				overlay_gallery    : true,
				wmode              : 'opaque'
			} );
		
		}

	} ); // End doc ready

	$( window ).load( function() {
		// Homepage FlexSlider Height Resize
		var sliderheight = $(window).height() - (114 + 32); /*menu height+margins*/
		$('#homepage-slider, .slide, .single').css({'height': sliderheight + 'px'});
		if ( $( ".content_single" ).length ) {
			var minheight = $('.content_single')[0].scrollHeight;
			$('.content_single, .single').css({'height':minheight+ 'px'});
			if($(window).width()<750 ){
				$('.image_single').css({'height':450+ 'px'});
				$('.content_single').css({'height' :'auto', 'margin-bottom':'-10px'});
			}
		}
		//Content single inner div positioning
		$(function() {
			if($(window).width()>767 ){
			    $('.content_single_inner').css({
			        'position' : 'absolute',
			        'top' : '45%',
			        'margin-top' : -$('.content_single_inner').outerHeight()/2
			    });
			}
		});
		// Homepage FlexSlider
		$( '#homepage-slider' ).flexslider( {
			animation         : 'slide',
			slideshow         : true,
			smoothHeight      : true,
			controlNav        : false,
			directionNav      : false,
			//prevText          : '<span class="fa fa-angle-left"></span>',
			//nextText          : '<span class="fa fa-angle-right"></span>',
			controlsContainer : ".flexslider-container"
		} );

		// Post FlexSlider
		$( 'div.post-slider' ).flexslider( {
			animation         : 'slide',
			slideshow         : true,
			smoothHeight      : true,
			controlNav        : 'false',
			directionNav      : true,
			prevText          : '<span class="fa fa-angle-left"></span>',
			nextText          : '<span class="fa fa-angle-right"></span>',
			controlsContainer : ".flexslider-container"
		} );

		//Carousel
		$('#carousel').carouFredSel({
			responsive: true,
			width: '100%',
			scroll: 1,
			items: {
				width: 400,
				height: '50%',	//	optionally resize item-height
				visible: {
					min: 3,
					max: 3
				}
			}
		});
		 
		
		
	} ); // End on window load

	$( window ).resize( function() {
		// Homepage FlexSlider Height Resize
		var sliderheight = $(window).height() - (114 + 32); /*menu height+margins*/
		$('#homepage-slider, .slide, .single').css({'height': sliderheight + 'px'});
		if ( $( ".content_single" ).length ) {
			var minheight = $('.content_single')[0].scrollHeight;
			$('.content_single, .single').css({'height':minheight+ 'px'});
			if($(window).width()<750 ){
				$('.image_single').css({'height':450+ 'px'});
				$('.content_single').css({'height' :'auto', 'margin-bottom':'-10px'});
			}
		}
		//Content single inner div positioning
		$(function() {
			if($(window).width()>767 ){
			    $('.content_single_inner').css({
			        'position' : 'absolute',
			        'top' : '45%',
			        'margin-top' : -$('.content_single_inner').outerHeight()/2
			    });
			}else{
			    $('.content_single_inner').css({
			        'position' : 'relative',
			        'top' : '0',
			        'margin-top' : 72 /*css margin*/
			    });
			}
		});

	} ); // End on window resize

	

	
} ) ( jQuery );