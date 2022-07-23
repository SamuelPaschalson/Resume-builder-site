"use strict";
jQuery(document).ready(function () {
	/* PRELOADER*/
	jQuery(window).on('load', function() {
	  jQuery(".preloader-outer").delay(300).fadeOut();
	  jQuery(".loader").delay(300).fadeOut("slow");
	});
    hb_navbar();
    // FIXED Message bar Start
    function hb_navbar(){			
		$(window).scroll(function () {			
			var $pscroll = $(window).scrollTop();			
			if ($(window).width() > 1199 ) {
				if($pscroll > 76){
					jQuery('body').addClass('hb-fixedheader');
				}else{
					jQuery('body').removeClass('hb-fixedheader');
				}
		    }			
		});
	}

	var rating_data = 0;
	$('#add_review').click(function () {
		$('#review_modal').modal('show');
	});

	$(document).on('mouseenter', '.submit_star', function () {
		var rating = $(this).data('rating');

		for (var count = 1; count <= rating; count++) {

			$('#submit_star_'+count).addClass('text-warning');
			// const element = array[count];
			
		}
	});
  
	$(function() {
		jQuery('.hb-like').on('click', function(){
		   $(this).toggleClass('hb-liked');
		});
	});
	
	// active class toggle on hover
	setTimeout(function(){
		jQuery('.hb-seller-tag, .hb-skills > li').hover(function() {
			var hb_className = jQuery(this).attr('class');
			var hb_hoverClassName = hb_className.split(' ')[0]
			var hb_ActiveClass = hb_hoverClassName + '-active';
			jQuery('.' + hb_hoverClassName).removeClass(hb_ActiveClass)
			jQuery(this).addClass(hb_ActiveClass);
		});
	}, 0);
	
	var hb_selector_id = {
		'#category'  : {allowClear: true},
		'#languages'  : {allowClear: true},
		'#tags'  : {allowClear: true},
		'#country'  : {allowClear: true},
		'#sort'  : {allowClear: true, minimumResultsForSearch: Infinity},
		'#selectv1'  : {allowClear: true, minimumResultsForSearch: Infinity},
		'#selectv2'  : {allowClear: true, minimumResultsForSearch: Infinity},
		'#selectv3'  : {allowClear: true, minimumResultsForSearch: Infinity},
		'#selectv4'  : {allowClear: true, minimumResultsForSearch: Infinity},
		'#selectv5'  : {allowClear: true, minimumResultsForSearch: Infinity},
		'#selectv6'  : {allowClear: true, minimumResultsForSearch: Infinity},
		'#selectv7'  : {allowClear: true, minimumResultsForSearch: Infinity},
		'#selectv8'  : {allowClear: true, minimumResultsForSearch: Infinity},
		'#selectv9'  : {allowClear: true, minimumResultsForSearch: Infinity},
		'#hb-selection1': { allowClear: true, minimumResultsForSearch: Infinity},
		'#hb-selection2': { allowClear: true, minimumResultsForSearch: Infinity},
		'#hb-selection3': { allowClear: true, minimumResultsForSearch: Infinity},
		'#hb-selection4': { allowClear: true, minimumResultsForSearch: Infinity},
		'#hb-selection5': { allowClear: true, minimumResultsForSearch: Infinity},
		'#hb-selection6': { allowClear: true, minimumResultsForSearch: Infinity},
	}
	for (var hb_selector in hb_selector_id) {
		jQuery(hb_selector).select2(hb_selector_id[hb_selector]);
	}
	
	// Banner Select2
	var hh_location = document.getElementById("hb-location");
	if (hh_location !== null) {
		$('#hb-location').select2({
		allowClear: true,
		}).data('select2').$dropdown.addClass('hb-slectcontainer');
	}
  
	var hh_select = document.getElementById("hb-select");
	if (hh_select !== null) {
		$('#hb-select').select2({
		  allowClear: true,
		}).data('select2').$dropdown.addClass('hb-slectcontainer');;
	}
  
    $('#hb-location , #hb-select').on('select2:open', function (e) {
        $('.select2-results__options').mCustomScrollbar('destroy');
        setTimeout(function () {
            $('.select2-results__options').mCustomScrollbar();
        }, 0);
    });
    

    var particle2 = document.getElementById("particlesv2");
    if (particle2 !== null) {
      particlesJS("particlesv2", {
        particles: {
          number: {
            value: 20,
          },
          color: {
            value: ["#9b4deb"],
          },
          line_linked: {
            enable: false,
          },
          size: {
            value: 50,
            random: true,
          },

        },
      });
    }
	
	// Partciles NewsLetter
	var newsparticlesv2 = document.getElementById("newsparticlesv2");
	if (newsparticlesv2 !== null) {
		particlesJS("newsparticlesv2", {
		  particles: {
			number: {
			  value: 10,
			},
			color: {
			  value: ["#43739f","#3f8579","#88753a","#d16461","#58468c","#63d594","#854a79"],
			},
			line_linked: {
			  enable: false,
			},
			size: {
			  value: 5,
			  random: true,
			},
		  },
		  
		});
	}
	
   // Tippy Start
   let te_tippy = document.querySelector(".tippy");
   if (te_tippy !== null) {
     tippy(".tippy", {
       content: "Ad to compare",
       animation: "scale",
     });
   }
   
	jQuery('.hb-ourteamslider').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		arrows: false,
		autoplay: true,
		loop:false,
		dots: true,
		responsive: [
		  {
			breakpoint: 1024,
			settings: {
			  slidesToShow: 3,
			  slidesToScroll: 3,
			}
		  },
		  {
			breakpoint: 767,
			settings: {
			  slidesToShow: 2,
			  slidesToScroll: 2
			}
		  },
		  {
			breakpoint: 480,
			settings: {
			  slidesToShow: 1,
			  slidesToScroll: 1
			}
		  }
		]
	});
	
	jQuery('.hb-mediagallery-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		autoplay: true,
		loop:false,
	});
	
	$('.hb-slider-for').slick({
		slide: '.hb-slider-for figure',
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		dots: false,
		autoplay: true,
		asNavFor: '.hb-slider-nav',
		centerMode: true,
		autoplay: true,
		loop:false,
	});
	
	$('.hb-slider-nav').slick({
		slide: '.hb-sliderarea',
		fade: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		asNavFor: '.hb-slider-for',
		dots: false,
		arrows: false,
		centerMode: false,
		variableWidth: false,
		focusOnSelect: true,
		autoplay: true,
		loop:false,
		customPaging: function(slider, i) {      
		  return '<div class="custom-slick-dots" id=' + i + "></div>";
		}
	});

	
	// Slider Animation Start
	$('.hb-slider-nav').on('beforeChange', function(e, slick, currentSlide, nextSlide) {
	  var hb_sliderElements = $('div.hb-sliderarea[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
	  startAnimations(hb_sliderElements);    
	});
	
	function startAnimations(elements) {
	  var hb_animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
	  elements.each(function() {
		  var $this = $(this);
		  var hb_animationDelay = $this.data('delay');
		  var hb_animationType = 'animated ' + $this.data('animation');
		  $this.css({
			  'animation-delay': hb_animationDelay,
			  '-webkit-animation-delay': hb_animationDelay
		  });
		  $this.addClass(hb_animationType).one(hb_animationEndEvents, function() {
			  $this.removeClass(hb_animationType);
		  });
	  });
	}
	
	/* MOBILE MENU*/
	function collapseMenu(){
		if ($(window).width() < 1200) {
			jQuery('.menu-item-has-children a').on('click', function() {
				jQuery(this).parent('li').toggleClass('hb-open-menu');
				jQuery(this).next().slideToggle(300);
			});
		}
	}
	collapseMenu();

	// Slider Animation End
	var hb_blogcommentsholdervthree = document.querySelector(".hb-blogcommentsholdervthree");
	if (hb_blogcommentsholdervthree !== null) {
		hb_blogcommentsholdervthree = {
		  collapsedHeight: 163,
		  moreLink: '<a href="javascript:void(0);" class="hb-readmorebtn">06 more comments</a>',
		  lessLink: '<a href="javascript:void(0);" class="hb-readmorebtn">Show Less</a>',
		};
		$('.hb-blogcommentsholdervthree').readmore(hb_blogcommentsholdervthree);
	}
  
	$(window).load(function() {
	var $status = $('.hb-sliderchild > span');
	  var $slickElement = $('.hb-slider-nav');
	  $('.hb-slider-nav').on('afterChange', function (event, slick, currentSlide, nextSlide) {   
		var i = (currentSlide ? currentSlide : 0) + 1;
			  $status.text(i + " " + 'of'+ " " + slick.slideCount);
	  });
	});
  
    // Counter styling
    var lo_counter = document.querySelector('.hb-stats h3 ')
    if( lo_counter !== null){
      var counted = 0;
      jQuery(window).scroll(function() {
		var oTop = jQuery('.hb-stats h3 ').offset().top - window.innerHeight;
		if (counted == 0 && jQuery(window).scrollTop() > oTop) {
			jQuery('.hb-stats h3 span').each(function() {
				var $this = jQuery(this),
				countTo = $this.attr('data-count');
				jQuery({
				countNum: $this.text()
				}).animate({
				  countNum: countTo
				},
				{
				  duration: 2000,
				  easing: 'swing',
				  step: function() {
					$this.text(seprateComma(Math.floor(this.countNum)));
				  },
				  complete: function() {
					$this.text(seprateComma(this.countNum));
				  }
				});
			});
			counted = 1;
		}

		function seprateComma(val) {
			while (/(\d+)(\d{3})/.test(val.toString())) {
			  val = val.toString().replace(/(\d+)(\d{3})/, '$1' + ',' + '$2');
			}
			return val;
		}
    });
    }

	// on click saved
	jQuery('.hb-heartv2').on('click', function(){
		var $saved = $(this);
		$saved.find('.ti-heart,a').toggleClass("hb-saved");
		$(this).children('a').text(function(i, text){
			return text === "Save" ? "Saved" : "Save";
		})
	});
	
	//close tags
	jQuery('.ti-close').on('click', function(){
	  $(this).closest('.hb-seller-tags').remove();
	});
	
	// VenoBox Video Popup
	let hb_playvideo = document.querySelector("#hb-playvideo");
	if (hb_playvideo !== null) {
		$('#hb-playvideo').venobox({
		  bgcolor: '#000',
		  spinner : 'cube-grid',
		  infinigall: true
		});
	}
	
    //countdown
    (function($) {
      var hb_countDown = new Date(2022, 8, 12, 12, 12);
      var hb_days = $('.days');
      var hb_hours = $('.hours');
      var hb_minutes = $('.minutes');
      var hb_seconds = $('.seconds');
      setDate();
      function setDate(){
          var now = new Date();
          if( hb_countDown < now ){
             hb_days.html('<span>Days</span><h3>0</h3>');
             hb_hours.html('<span>Hours</span><h3>0</h3>');
             hb_minutes.html('<span>Minutes</span><h3>0</h3>');
             hb_seconds.html('<span>Seconds</span><h3>0</h3>');
          }else{
              var s = -now.getTimezoneOffset()*60 + (hb_countDown.getTime() - now.getTime())/1000;
              var d = Math.floor(s/86400);
              hb_days.html('<h3>'+d+'</h3><span>Day'+(d>1?'s':''),'</span>');
              s -= d*86400;
              var h = Math.floor(s/3600);
              hb_hours.html('<h3>'+h+'</h3><span>Hour'+(h>1?'s':''),'</span>');
              s -= h*3600;
              var m = Math.floor(s/60);
              hb_minutes.html('<h3>'+m+'</h3><span>Minutes'+(m>1?'s':''),'</span>');
              s = Math.floor(s-m*60);
              hb_seconds.html('<h3>'+s+'</h3><span>Seconds'+(s>1?'':''),'</span>');
              setTimeout(setDate, 1000);
          }
      }
	})(jQuery); 

	//navbar 
	jQuery('.hb-headerinputbtn').on('click', function(){
		jQuery(this).closest('.hb-headerwrap').addClass('hb-headerinputopen')
	});
	
	jQuery('.hb-headerinput > a').on('click', function(){
		jQuery(this).closest('.hb-headerinputopen').removeClass('hb-headerinputopen')
	});
	
	var hb_sliderRangeMin = document.getElementById("slider-range-min");
	if (hb_sliderRangeMin !== null) {
		$( function() {
		  $( "#slider-range-min" ).slider({
			range: true,
			min: 0,
			max: 10000,
			values: [ 75, 4000 ],
			slide: function( event, ui ) {
			  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
			}
		  });
		  
		  $( "#amount" ).val( "$" + $( "#slider-range-min" ).slider( "values", 0 ) +
			" - $" + $( "#slider-range-min" ).slider( "values", 1 ) );
		} );
	}


	//toogle active class on form banner
	jQuery(document).on('click', '.hb-searchform:first-child', function(event) {
		jQuery('.hb-searchform').removeClass('active');
		jQuery(this).addClass('active');
		event.preventDefault();
	});
	
	jQuery(document).on('click', 'body', function(e) {
		if (!$(e.target).is('.hb-formsearch')) {
			$('.hb-formsearch .collapse').collapse('hide');	    
		}
	});
	
	jQuery(document).on('click', '.hb-searchform', function(e) {
		e.stopPropagation()
	});
	
	jQuery('.hb-populartags a').on('click', function(e){
		//console.log(e.target)
	})
});



