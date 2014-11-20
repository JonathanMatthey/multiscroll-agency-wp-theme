/*-----------------------------------------------------------------------------------*/
/*	CUSTOM FUNCTIONS
/*-----------------------------------------------------------------------------------*/
jQuery.fn.slideFadeToggle  = function(speed, easing, callback) {
        return this.animate({opacity: 'toggle', height: 'toggle'}, speed, easing, callback);
};
jQuery.fn.setAllToMaxHeight = function(){
	return this.css({ 'height' : '' }).height( Math.max.apply(this, jQuery.map( this , function(e){ return jQuery(e).height() }) ) );
}
/*-----------------------------------------------------------------------------------*/
/*	JS TO CALL ON DOC READY
/*-----------------------------------------------------------------------------------*/
jQuery(document).ready(function($){

	jQuery('.fancybox-media').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}
	});

	/**
	 * WordPress Fixes
	 */
	jQuery('p:empty, .client-logo-row:empty').remove();
	jQuery(".fitvids").fitVids();
	jQuery('.aq-block-aq_column_block').wrapInner('<div class="inner-pad" />').wrapInner('<div class="valign" />').wrapInner('<div class="equal-height" />');
	jQuery('.works-filter li a').each(function(){
		var $selector = jQuery(this).attr('data-filter');
		if(!( jQuery($selector).length > 0 ))
			$(this).remove();
	});

    //Detecting viewport dimension
     var vH = jQuery(window).height(),
     	 vW = jQuery(window).width(),
     	 cW = jQuery('.container').width(),
     	 fH = jQuery('.sticky-foot').height();

	jQuery('.fullheight').css('height',vH);
	jQuery('#intro, .fullheight, .text-anim-container, .pace-running').css('height',vH);
	jQuery('.foot-pad').css('margin-bottom',fH);

    /**
     * Main navigation submenus
     */
    jQuery('.main-nav-menu > li > a').click(function(){
    	if( jQuery(this).parent().find('ul').length == 0 )
    		return true;

        jQuery('.main-nav-menu > li > ul').slideUp('fast');
        jQuery(this).parent().find('ul').slideDown('slow');
        return false;
    });

    /**
     * The services page builder block
     */
    if( !device.tablet() && !device.mobile() ) {

		/* Activate mouse-hover if non-mobile device is detected*/
	    jQuery('.service-carousel-item').mouseenter(function(){
	        var serviceTarget = jQuery(this).find('a').attr('data-service-details-expand');
	        jQuery('.service-details').hide();
	        jQuery('#service-details-'+serviceTarget).fadeIn();
	        jQuery('.triangle-arrow-up').removeClass('active-service');
	        jQuery(this).find('.triangle-arrow-up').addClass('active-service');
	        return false;
	    });

	     jQuery('.service-carousel-item a').click(function(){
	        return false;
	    });

	    jQuery('.service-carousel-item').eq(0).trigger('mouseenter');

	} else {

		/* Dectivate mouse click to touch effect if mobile device is detected (bg image is displayed)*/
	    jQuery('.service-carousel-item a').click(function(){
	        var serviceTarget = jQuery(this).attr('data-service-details-expand');
	        jQuery('.service-details').hide();
	        jQuery('#service-details-'+serviceTarget).fadeIn(2000);
	        jQuery('.triangle-arrow-up').removeClass('active-service');
	        jQuery(this).find('.triangle-arrow-up').addClass('active-service');
	        return false;
	    });

	}

	/**
	 * Fire up the lightbox
	 * The lightbox plugin is Venobox
	 */
	jQuery('.venobox, .image-lightbox-link').venobox({
		numeratio: true
	});

    /**
     * Mobile Menu (multi level)
     */
    jQuery('ul.slimmenu').slimmenu({
        resizeWidth: '1200',
        collapserTitle: 'menu',
        easingEffect:'easeInOutQuint',
        animSpeed:'medium',
    });

	/**
	 * Parallax
	 */
	if( !device.tablet() && !device.mobile() ) {

		/* Activate Parallax effect if non-mobile device is detected*/
	  	jQuery('.parallax, .page-head').parallax("50%", 0.4);

	} else {

		/* Dectivate Parallax effect if mobile device is detected (bg image is displayed)*/
		jQuery('.parallax, page-head').addClass('no-parallax');

	}
	/**
	 * Top Header Nav
	 */

	jQuery('.top-header h3').mouseenter(function(e){
		e.preventDefault();
		$(this).parent().addClass('open').parent().addClass('open');
	});

	jQuery('.top-header > article').mouseleave(function(e){
		e.preventDefault();
		$(this).removeClass('open');
		$('.top-header').removeClass('open');
	});

	jQuery('.top-header a').click(function(e){
		$('.top-header').removeClass('open').find('.open').removeClass('open');
	});

	/**
	 * Hiding Nav
	 */
	// var vWidth = jQuery(window).width();

	// jQuery('#toggle-menu').click(function(){
	// 	jQuery(this).toggleClass('toggle-menu-visible').toggleClass('toggle-menu-hidden');
	// 	var hidden = jQuery('.main-nav');

	// 	if( script_data.header_animation == 'left' ){
	// 		if (hidden.hasClass('visible')){
	// 			hidden.animate({"left":'-'+vWidth*1.2}, 1000).removeClass('visible');
	// 		} else {
	// 			hidden.animate({"left":"0px"}, 1000).addClass('visible');
	// 		}
	// 	} else if( script_data.header_animation == 'right' ){
	// 		if (hidden.hasClass('visible')){
	// 		    hidden.animate({"right":'-'+vWidth*1.2}, 1000).removeClass('visible');
	// 		} else {
	// 		    hidden.animate({"right":"0px"}, 1000).addClass('visible');
	// 		}
	// 	} else {
	// 		if (hidden.hasClass('visible')){
	// 		    hidden.animate({"opacity":0}, 1000, function(){
	// 		    	jQuery(this).removeClass('visible');
	// 		    });
	// 		} else {
	// 		    hidden.animate({"opacity":1}, 1000).addClass('visible');
	// 		}
	// 	}

	// });

	 /**
	  * Owl Carousel
	  */
	jQuery("#portfolio-carousel").owlCarousel({
		navigation : true,
		pagination: false,
		responsive: true,
		items: 1,
		touchDrag: true,
		navigationText: ['<img src="' + script_data.image_path + 'bxslider/prev.png" alt="prev" />','<img src="' + script_data.image_path + 'bxslider/next.png" alt="next" />'],
		mouseDrag: true,
		autoPlay: false,
		autoHeight: true,
	});

	jQuery("#testimonial-carousel").owlCarousel({
		navigation : false,
		pagination: true,
		responsive: true,
		items: 1,
		touchDrag: true,
		navigationText: false,
		mouseDrag: true,
		itemsDesktop: [3000,1],
		itemsDesktopSmall: [1440,1],
		itemsTablet:[1024,1],
		itemsTabletSmall: [600,1],
		itemsMobile: [360,1],
		autoPlay: false,
		autoHeight: true,
	});


	jQuery("#service-carousel").owlCarousel({
		navigation : true,
		navigationText: ['<img src="' + script_data.image_path + 'bxslider/prev_black.png" alt="prev" />','<img src="' + script_data.image_path + 'bxslider/next_black.png" alt="next" />'],
		pagination: false,
		responsive: true,
		items: 4,
		itemsDesktop: [3000,4],
		itemsDesktopSmall: [1440,4],
		itemsTablet:[1024,4],
		itemsTabletSmall: [600,3],
		itemsMobile: [360,1],
		autoPlay: false,
		autoHeight: true,
	});


	jQuery("#awards-carousel").owlCarousel({
		navigation : false,
		pagination: true,
		responsive: true,
		items: 4,
		itemsDesktop: [3000,4],
		itemsDesktopSmall: [1440,4],
		itemsTablet:[1024,4],
		itemsTabletSmall: [600,3],
		itemsMobile: [360,1],
		autoPlay: false,
		autoHeight: true,
	});

	/**
	 * Split Scroll
	 */
	if( jQuery('#myContainer').length > 0 ){

		var tooltipsArray = ['One', 'Two', 'Three', 'Four', 'Five', 'Six'];

		if( jQuery('#myContainer').hasClass('split-home-panel') ){
			tooltipsArray = [];
			jQuery('#myContainer .ms-left .ms-section').each(function(){
				tooltipsArray.push( jQuery(this).find('h1.white').text() );
			});
		}

		jQuery('#myContainer').multiscroll({
	    	menu: '#menu',
	    	navigation: true,
	    	navigationTooltips: tooltipsArray,
	    	loopBottom: true,
	    	loopTop: true,
	    	anchors: ['home','about','expertise', 'people', 'opportunities', 'contact', 'clients','case-studies','news','awards','tbd'],
        afterLoad: function(anchorLink, index){
        	console.log(anchorLink,index);
      		$(".top-header").removeClass('left-section right-section');
        	if( index < 5 ){
      			$(".top-header").addClass('left-section');
        	} else {
        		$(".top-header").addClass('right-section');
        	}
        }
	    });
		jQuery('.ms-section').mouseenter(function(){
		    jQuery(this).find('.ms-overlay').fadeIn(1000);
		});
		jQuery('.ms-section').mouseleave(function(){
		    jQuery('.ms-overlay').fadeOut(500);
		});
	}

});
/*-----------------------------------------------------------------------------------*/
/*	JS TO CALL ON WINDOW LOAD
/*-----------------------------------------------------------------------------------*/
jQuery(window).load(function(){

	if( jQuery('body').hasClass('header-open') ){
		setTimeout(function(){
			jQuery('#toggle-menu').trigger('click');
		}, 1000);
	}

	//EqualHeights triggering
	jQuery('.equal-height').setAllToMaxHeight();
	jQuery('.about-content-inner').setAllToMaxHeight();
	jQuery('.service-item').setAllToMaxHeight();
	jQuery('.team-info, .team-thumb').setAllToMaxHeight();
	jQuery('.contact-content-inner').setAllToMaxHeight();
	jQuery('.footer-column').setAllToMaxHeight();
	jQuery('.about-content').setAllToMaxHeight();

	/**
	 * Works isotope
	 */
	var $worksContainer = jQuery('.works-container');

	if( $worksContainer.length > 0 ){
		$worksContainer.imagesLoaded( function(){
		   $worksContainer.isotope({
		     itemSelector: '.works-item'
		   });
		});

		jQuery('.works-filter li a').click(function(){
			var selector = jQuery(this).attr('data-filter');
			jQuery('.works-filter li a').removeClass('active');
			jQuery(this).addClass('active');
		    $worksContainer.isotope({ filter: selector });
		    return false;
		});

		jQuery(window).resize(function() {
		   $worksContainer.isotope({
		     itemSelector: '.works-item'
		   });
		});
	}

	/**
	* Blog isotope
	*/
	var $container = jQuery('.news-container');

	if( $container.length > 0 ){

		$container.imagesLoaded(function(){
			$container.isotope({
				itemSelector : '.news-item',
				isAnimated: true,
				resizable: false,
				masonry: { columnWidth: $container.width() / 12 }
			});
		});

		// window resize and layout regenerate
		jQuery(window).resize(function(){
			$container.isotope({
				itemSelector : '.news-item',
				isAnimated: true,
				resizable: false,
				masonry: { columnWidth: $container.width() / 12 }
			});
		});

	}

	/**
	 * Equal heights sections
	 */
    jQuery(window).resize(function() {
        jQuery('.equal-height').setAllToMaxHeight();
        jQuery('.about-content-inner').setAllToMaxHeight();
        jQuery('.service-item').setAllToMaxHeight();
        jQuery('.team-info, .team-thumb').setAllToMaxHeight();
        jQuery('.contact-content-inner').setAllToMaxHeight();
        jQuery('.footer-column').setAllToMaxHeight();
        jQuery('.about-content').setAllToMaxHeight();
    });

	jQuery(window).trigger('resize');
});