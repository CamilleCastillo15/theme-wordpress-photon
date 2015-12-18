jQuery(document).ready(function(){
	
	/* HEADER */
	
	/* CLIP - PATH FIREFOX */
	
	jQuery(window).bind("load", function() {
	
		jQuery("#photo_ampli a img").css("clip-path", "url('#hexagon-clip')");
		
	});
	
	/* MENU FLOTTANT */
	
	var positionElementInPage = jQuery('#menu_haut').offset().top;
		jQuery(window).scroll(
			function() {
				if (jQuery(window).scrollTop() >= positionElementInPage) {
					// fixed
					jQuery('#menu_haut').addClass("floatable");
				} else {
					// relative
					jQuery('#menu_haut').removeClass("floatable");
				}
			}
		);
		
	/* SMOOTH SCROLL EFFECT */
	
	jQuery('.scrollTo').click( function() { // Au clic sur un élément
			var page = jQuery(this).attr('href'); // Page cible
			var speed = 750; // Durée de l'animation (en ms)
			
	jQuery('html, body').animate( { scrollTop: jQuery(page).offset().top }, speed ); // Go
			return false;
		});
	
	jQuery( "#head .ampli").append("<span id='infos_projet'></span>");
    jQuery("#notre_projet_textes").appendTo("#infos_projet");
	
	jQuery(".su-custom-gallery .su-custom-gallery-slide[data-index='0'] .view-first").append("<span id='zoom'></span>");
	
	jQuery( "#lire_plus_logo").wrap('<ul id="inline-popups"><li><a href="#test-popup" data-effect="mfp-zoom-in"></a></li></ul>');
	
	jQuery(".su-custom-gallery-title-hover").hover(function(){

		jQuery(this).children("span").fadeIn(600);

	},function(){

		jQuery(this).children("span").fadeOut(200);

	}); 
	
	// Inline popups
			jQuery('#inline-popups').magnificPopup({
			  delegate: 'a',
			  removalDelay: 500, //delay removal by X to allow out-animation
			  callbacks: {
				beforeOpen: function() {
				   this.st.mainClass = this.st.el.attr('data-effect');
				}
			  },
			  midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
			}); 

	/* PHOTOS GALLERIES */
	
	/* CLIP - PATH FIREFOX */
		
		jQuery(window).bind("load", function() {
		
			jQuery("#photo .su-custom-gallery-slide[data-index='0'] img").css("clip-path", "url('#clipTriangle')");
			jQuery("#photo .su-custom-gallery-slide[data-index='2'] img").css("clip-path", "url('#clipTriangle')");
			jQuery("#photo .su-custom-gallery-slide[data-index='4'] img").css("clip-path", "url('#clipTriangle')");
			jQuery("#photo .su-custom-gallery-slide[data-index='5'] img").css("clip-path", "url('#clipTriangle')");
			
			jQuery("#photo .su-custom-gallery-slide[data-index='0']").hover(function() {
			  jQuery(this).css("clip-path", "url('#clipTriangle')");
			});
			
			jQuery("#photo .su-custom-gallery-slide[data-index='2']").hover(function() {
			  jQuery(this).css("clip-path", "url('#clipTriangle')");
			});
			
			jQuery("#photo .su-custom-gallery-slide[data-index='4']").hover(function() {
			  jQuery(this).css("clip-path", "url('#clipTriangle')");
			});
			
			jQuery("#photo .su-custom-gallery-slide[data-index='5']").hover(function() {
			  jQuery(this).css("clip-path", "url('#clipTriangle')");
			});
			
			jQuery("#photo .su-custom-gallery-slide[data-index='1']").css("clip-path", "url('#clipTriangle2')");
			jQuery("#photo .su-custom-gallery-slide[data-index='3']").css("clip-path", "url('#clipTriangle2')");
			jQuery("#photo .su-custom-gallery-slide[data-index='6']").css("clip-path", "url('#clipTriangle2')");
			
			jQuery("#photo .su-custom-gallery-slide[data-index='1']").hover(function() {
			  jQuery(this).css("clip-path", "url('#clipTriangle2')");
			});
			
			jQuery("#photo .su-custom-gallery-slide[data-index='3']").hover(function() {
			  jQuery(this).css("clip-path", "url('#clipTriangle2')");
			});
			
			jQuery("#photo .su-custom-gallery-slide[data-index='3']").hover(function() {
			  jQuery(this).css("clip-path", "url('#clipTriangle2')");
			});
		});
	
	/* HOVER ZOOM PHOTOS */
	
	jQuery( "#photos .su-custom-gallery-slide img" ).each(function() {
	  jQuery( this ).wrapAll( '<div class="view view-first">');
	});
	
	jQuery( "#photos .su-custom-gallery-slide img").each(function() {
	  jQuery( this ).after( '<div class="mask">  </div>');
	});
	
	jQuery( "#photos .su-custom-gallery-slide span").remove();
	
		//jQuery("#photo").append("<div class='su-custom-gallery-slide' data-index='6'><ul id='inline-popups_3'><li><a href='#test-popup_8' data-effect='mfp-zoom-in'> Plus de photos > </a></li></ul></div>");
		jQuery("#photo").append("<div class='su-custom-gallery-slide' data-index='6'><ul id='inline-popups_3'><li><a href='wp-content/themes/photon_v2/ajax-pages/gallerie_extent.php' class='ajax-popup-link' id='test_ajax' data-effect='mfp-zoom-in'> Plus de photos > </a></li></ul></div>" );
		
		jQuery('.ajax-popup-link').magnificPopup({ type: 'ajax',});
		
		jQuery(window).bind("load", function() {	

		jQuery(".su-custom-gallery .su-custom-gallery-slide[data-index='0'] .view-first").append("<span id='zoom'></span>");
		jQuery(".su-custom-gallery .su-custom-gallery-slide[data-index='2'] .view-first").append("<span id='zoom'></span>");
		jQuery(".su-custom-gallery .su-custom-gallery-slide[data-index='4'] .view-first").append("<span id='zoom'></span>");
		jQuery(".su-custom-gallery .su-custom-gallery-slide[data-index='5'] .view-first").append("<span id='zoom'></span>");
		
		jQuery(".su-custom-gallery .su-custom-gallery-slide[data-index='1'] .view-first").append("<span id='zoom_2'></span>");
		jQuery(".su-custom-gallery .su-custom-gallery-slide[data-index='3'] .view-first").append("<span id='zoom_2'></span>");
		
		//jQuery(".su-custom-gallery .su-custom-gallery-slide[data-index='5'] .view-first").insertAfter("<div class='su-custom-gallery-slide' data-index='6'></div>");
		//jQuery(".su-custom-gallery-slide[data-index='6']").append("<ul id='inline-popups_3'><li><a href='#test-popup_8' data-effect='mfp-zoom-in'> Plus de photos > </a></li></ul></div>");
		
		//jQuery( "#photos .su-custom-gallery-slide img").attr("clip-path", "url('#clip-svg-demo')");
	});
	
		//jQuery(".su-custom-gallery-slide[data-index='6']").append("<ul id='inline-popups_3'><li><a href='#test-popup_8' data-effect='mfp-zoom-in'> Plus de photos > </a></li></ul></div>");
	
		// Inline popups
			jQuery('#inline-popups_3').magnificPopup({
			  delegate: 'a',
			  removalDelay: 500, //delay removal by X to allow out-animation
			  callbacks: {
				beforeOpen: function() {
				   this.st.mainClass = this.st.el.attr('data-effect');
				}
			  },
			  midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
			});
	
	jQuery(".su-custom-gallery .su-custom-gallery-slide .view-first").hover(function(){

		jQuery(this).children("span").fadeIn(600);

	},function(){

		jQuery(this).children("span").fadeOut(200);

	});
	
	/* AVIS */ 
	
	jQuery(window).bind("load", function() {
	
		jQuery("#comment").removeProp("cols");
		jQuery("#comment").attr("cols", "35");
	});
	
	// Inline popups
			jQuery('.inline-popups_2').magnificPopup({
			  delegate: 'a',
			  removalDelay: 500, //delay removal by X to allow out-animation
			  callbacks: {
				beforeOpen: function() {
				   this.st.mainClass = this.st.el.attr('data-effect');
				}
			  },
			  midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
			});
			
		/* SLIDER AVIS D*/
		
				jQuery('.controls .next').click(function(event){ event.preventDefault(); });
				jQuery('.controls .prev').click(function(event){ event.preventDefault(); });
				
				var next_slide = function() {
					if (jQuery('.slider div[class=current]').next('div').length != 0) {
					jQuery('.slider div[class=current]').next('div').addClass('current');
					jQuery('.slider div[class=current]').prev('div').removeClass('current');
				  } else {
					jQuery('.slider div[class=current]').removeClass('current');
					jQuery('.slider div:first-child').addClass('current');
				  }
				  // Set Remaining Time back to 5 secs (in ms)
				  clearTimeout(timeout);
				  timeout = setTimeout(next_slide, 5000);
				};

				// Initial Timer: 5 secs (in ms)
				timeout = setTimeout(next_slide, 5000);

				// Selects Next Slide (see Next Slide Function)
				jQuery('.slider div').click(next_slide);
				jQuery('.controls .next').click(next_slide);

				// Selects Previous Slide
				jQuery('.controls .prev').click(function(){
				  if (jQuery('.slider div[class=current]').prev('div').length != 0) {
					jQuery('.slider div[class=current]').prev('div').addClass('current');
					jQuery('.slider div[class=current]').next('div').removeClass('current');
				  } else {
					jQuery('.slider div[class=current]').removeClass('current');
					jQuery('.slider div:last-child').addClass('current');
				  }
				});
				
		/* SLIDER AVIS G */
		
				jQuery('.controls .next').click(function(event){ event.preventDefault(); });
				jQuery('.controls .prev').click(function(event){ event.preventDefault(); });
				
				var next_slide = function() {
					if (jQuery('.slider_2 div[class=current]').next('div').length != 0) {
					jQuery('.slider_2 div[class=current]').next('div').addClass('current');
					jQuery('.slider_2 div[class=current]').prev('div').removeClass('current');
				  } else {
					jQuery('.slider_2 div[class=current]').removeClass('current');
					jQuery('.slider_2 div:first-child').addClass('current');
				  }
				  // Set Remaining Time back to 5 secs (in ms)
				  clearTimeout(timeout);
				  timeout = setTimeout(next_slide, 5000);
				};

				// Initial Timer: 5 secs (in ms)
				timeout = setTimeout(next_slide, 5000);

				// Selects Next Slide (see Next Slide Function)
				jQuery('.slider_2 div').click(next_slide);
				jQuery('.controls .next').click(next_slide);

				// Selects Previous Slide
				jQuery('.controls .prev').click(function(){
				  if (jQuery('.slider_2 div[class=current]').prev('div').length != 0) {
					jQuery('.slider_2 div[class=current]').prev('div').addClass('current');
					jQuery('.slider_2 div[class=current]').next('div').removeClass('current');
				  } else {
					jQuery('.slider_2 div[class=current]').removeClass('current');
					jQuery('.slider_2 div:last-child').addClass('current');
				  }
				});
	
	/* MUSIC PLAYER */ 
	
	jQuery(window).bind("load", function() {
		
		jQuery( ".wp-playlist-item:nth-child(1)").wrap( '<div id="icone_1_player" class="icones_int_player"></div>');
		jQuery( ".wp-playlist-item:nth-child(2)").wrap( '<div id="icone_2_player" class="icones_int_player"></div>');
		jQuery( ".wp-playlist-item:nth-child(3)").wrap( '<div id="icone_3_player" class="icones_int_player"></div>');
		jQuery( ".wp-playlist-item:nth-child(4)").wrap( '<div id="icone_4_player" class="icones_int_player"></div>');
		
		
		jQuery(".wp-playlist-current-item img").remove();
		
		jQuery( ".post-30 > #musique").removeAttr("id");
		
		 jQuery( ".wp-playlist-current-item").remove();
		 
		  jQuery( "#mep_0" ).insertAfter( jQuery( "#icone_4_player" ) );
		 
			jQuery(".icones_int_player").children(".wp-playlist-caption").contents().filter(function(){
				return this.nodeType === 3;
			  }).remove();
			  
			  jQuery(".icones_int_player").children(".wp-playlist-caption")
			  
			  	jQuery(".wp-playlist-item-title").appendTo("#mep_0");
				jQuery("#mep_0").children(".wp-playlist-item-title").css("visibility", "hidden") ; 
		 
		 jQuery(".wp-playlist-item").click(function() {
			
			jQuery("#mep_0").children(".wp-playlist-item-title").css("visibility", "hidden") ; 
			
				jQuery(".icones_int_player:nth-child(1)").css('background', 'url(wp-content/themes/photon_v2/images/player_1_v3.png) no-repeat');

				jQuery(".icones_int_player:nth-child(2)").css('background', 'url(wp-content/themes/photon_v2/images/player_2_v3.png) no-repeat');

				jQuery(".icones_int_player:nth-child(3)").css('background', 'url(wp-content/themes/photon_v2/images/player_3_v3.png) no-repeat');

				jQuery(".icones_int_player:nth-child(4)").css('background', 'url(wp-content/themes/photon_v2/images/player_4_v3.png) no-repeat');
			
			//jQuery(this).children(".wp-playlist-caption").css("visibility", "initial") ; 
			
			var index = jQuery(this).index(".wp-playlist-item");
			console.log(index);
			
			if(jQuery(this).index(".wp-playlist-item") == 0) {
				jQuery(this).parent().css('background', 'url(wp-content/themes/photon_v2/images/selected_1.png) no-repeat');
				jQuery("#mep_0").children(".wp-playlist-item-title:nth-child(2)").css("visibility", "initial") ; 
			}
			
			if(jQuery(this).index(".wp-playlist-item") == 1) {
				jQuery(this).parent().css('background', 'url(wp-content/themes/photon_v2/images/selected_2.png) no-repeat');
				jQuery("#mep_0").children(".wp-playlist-item-title:nth-child(3)").css("visibility", "initial") ; 
			}
			
			if(jQuery(this).index(".wp-playlist-item") == 2) {
				jQuery(this).parent().css('background', 'url(wp-content/themes/photon_v2/images/selected_3.png) no-repeat');
				jQuery("#mep_0").children(".wp-playlist-item-title:nth-child(4)").css("visibility", "initial") ; 
			}
			
			if(jQuery(this).index(".wp-playlist-item") == 3) {
				jQuery(this).parent().css('background', 'url(wp-content/themes/photon_v2/images/selected_4.png) no-repeat');
				jQuery("#mep_0").children(".wp-playlist-item-title:last-child").css("visibility", "initial") ; 
			}
		
		});
	});
	
});