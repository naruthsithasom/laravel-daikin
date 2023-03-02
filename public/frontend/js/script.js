
// menu
$(window).on('load', function () {
    var mmH = $('.wrap_menu').outerHeight(true)
    $('body').eq(0).css('padding-top', mmH);

    // menu sticky
  $(window).scroll(function() {
    if ($(this).scrollTop() > 25){  
        $('.wrap_menu').addClass("sticky");
    }
    else{
        $('.wrap_menu').removeClass("sticky");
    }
  });

});

$( document ).ready(function() {

    $('.menu-popup-btn').click(function(event) {
        //alert('dssd');
        if ($(".menu-popup").is(":hidden")) {
            $('.menu-popup').fadeIn().find('.menu-popup-main > li > a').addClass('active');
            $("body").addClass("menuopened");
            $(".submenu").fadeOut();
        }
        event.stopPropagation();
    });
    $('.menu-popup-hassub').click(function(event) {
        if ($(this).children('.menu-popup-submenu').is(":hidden")) {
            $('.menu-popup-main > li > a').removeClass('active');
            $('.menu-popup-submenu').fadeOut().find('li > a').removeClass('active');
            $(this).children('.menu-popup-submenu').fadeIn().find('li > a').addClass('active');
            $('.menu-popup-back').fadeIn();
        }
        event.stopPropagation();
    });

    $('.menu-popup-back').click(function(event) {
        $('.menu-popup-submenu').fadeOut().find('li > a').removeClass('active');
        $('.menu-popup-main > li > a').addClass('active');
        $('.menu-popup-back').fadeOut();
    });

    $('.menu-popup-close').click(function(event) {
        $('.menu-popup-submenu').fadeOut().find('li> a').removeClass('active');
        $('.menu-popup').fadeOut().find('.menu-popup-main > li > a').removeClass('active');
        $("body").removeClass("menuopened");
        $('.menu-popup-back').fadeOut();
    });
        

    
    $('.wrap_btn_menu').click(function(event) {
		if (!$(".mainmenu").hasClass("open")) {
            //$(this).addClass("active");
            $('.mainmenu').addClass('open');
            $("body").addClass("menuopened");
		  } else {
            $('.mainmenu').removeClass('open'); 
            //$(this).removeClass("active");
            $("body").removeClass("menuopened");
		  }
		  event.stopPropagation();
	});

   
    
     $('.close_menu').click(function(event) {
        $('.mainmenu').removeClass('open');
        $(this).removeClass("active");
        $("body").removeClass("menuopened");
    });
    
  var previousScroll = 0;
      $(window).scroll(function(event){
        var scroll = $(this).scrollTop();
        if (scroll > previousScroll){
            $('.wrap_menu').addClass('hide');
        } else {
            $('.wrap_menu').removeClass('hide');
        }
        previousScroll = scroll;
      });
      $('.wrap_menu').removeClass('hide');

     $( '.hassub' ).click(function (event) {
	  if (  $(this).children( ".submenu" ).is( ":hidden" ) ) {
		  	$('.submenu').hide();
            $(this).children('.submenu').slideDown();
	  } else {
          $('.submenu').slideUp();
	  }
	  //event.stopPropagation();
	});


  $( '.submenu_white.submenu > ul > li' ).click(function (event) {
    $('.submenu_white.submenu').removeClass('loading');
	    if (  $(this).children( "ul" ).is( ":hidden" ) ) {
		  	$(this).siblings('li').find('ul').hide();
           
            $('.submenu_white.submenu > ul > li').removeClass('active');
            $(this).addClass('active');
            $(this).children('ul').fadeIn();
	  } else {
      if (Modernizr.mq('(max-width: 991px)')) {
        $(this).children('ul').hide();
      }
	  }
	  event.stopPropagation();
	});

  if (Modernizr.mq('(max-width: 991px)')) {
    $('.mainmenu ul li > .submenu_white.submenu > ul > li').removeClass('active');
  }
    
     $( ".submenu" )
      .mouseenter(function() {
        $('.submenu').clearQueue();
        //event.stopPropagation();
      })
      .mouseleave(function() {
        $('.submenu').delay( 2000 ).hide('fade', 1000);
      });
    
      $('.submenu_white.submenu').removeClass('loading');


//padding container
var ctnoffset = $('.container').eq(0).offset().left;
$('.box-hilightnews').css('padding-left', ctnoffset );  
$('.bg-homenews').css('padding-right', ctnoffset );  
});

// owl
$(document).ready(function() {
    $('.owl-bannerslide').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 8000,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        nav: false,
        dots: true,
        navText: ['&nbsp;', '&nbsp;'],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    $('.owl-homeproduct').owlCarousel({
        loop: true,
        margin: 40,
        autoplay: true,
        autoplayTimeout: 8000,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        nav: false,
        dots: true,
        navText: ['&nbsp;', '&nbsp;'],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1000: {
                items: 2
            }
        }
    });
    $('.owl-hihlightnews').owlCarousel({
        loop: true,
        margin: 40,
        autoplay: true,
        autoplayTimeout: 8000,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        nav: false,
        dots: true,
        navText: ['&nbsp;', '&nbsp;'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2,
                margin: 20,
            },
            1000: {
                items: 1
            }
        }
    });
    $('.owl-news').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 8000,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        nav: false,
        dots: true,
        navText: ['&nbsp;', '&nbsp;'],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
});

// wow
$( document ).ready(function() {
    wow = new WOW(
        {
    animateClass: 'animated',
    offset: 100
        }
    );
        wow.init();    
});

//vdo
$(document).ready(function(){

	var isIOS = /iPad|iPhone|iPod/.test(navigator.platform);
	
	 if (isIOS) {
	
	 var canvasVideo = new CanvasVideoPlayer({
	  videoSelector: '.video',
	  canvasSelector: '.canvas',
	  timelineSelector: false,
	  autoplay: true,
	  makeLoop: true,
	  pauseOnClick: false,
	  audio: false
	 });
		
		var canvasVideom = new CanvasVideoPlayer({
	  videoSelector: '.videomobile',
	  canvasSelector: '.canvasmobile',
	  timelineSelector: false,
	  autoplay: true,
	  makeLoop: true,
	  pauseOnClick: false,
	  audio: false
	 });
	 
	}else {
	 
	 // Use HTML5 video
	 document.querySelectorAll('.canvas')[0].style.display = 'none';
		document.querySelectorAll('.canvasmobile')[0].style.display = 'none';
	 
	} 
   }); 
  


//mousehover change pichure
$(document).ready(function(){
    $('.bg-homefac img:first-child').addClass('active');

$(".btn-menufac > a").mouseenter(function() {
    var imgno = $(this).index();
    $(this).parents('.container').siblings('.bg-homefac').find('img').removeClass('active');
    $(this).parents('.container').siblings('.bg-homefac').find('img').eq(imgno).addClass('active');
  })
  .mouseleave(function() {
    $(this).parents('.container').siblings('.bg-homefac').find('img').removeClass('active');
    $(this).parents('.container').siblings('.bg-homefac').find('img').eq(0).addClass('active');
  });
});

  //slick - recent slide
  $(document).ready(function() {
    var $slider = $('.slider');
    var $progressBar = $('.progress');
    var $progressBarLabel = $( '.slider__label' );
    
    $slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {   
      var calc = ( (nextSlide+1) / (slick.slideCount) ) * 100;
      
      $progressBar
        .css('background-size', calc + '% 100%')
        .attr('aria-valuenow', calc );
      
      $progressBarLabel.text( calc + '% completed' );
    });
    
    $slider.slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      speed: 1000,
      autoplay: true,
      prevArrow: '<div class="icon-recent iconprev"><i class="bi bi-arrow-left-circle"></i></div>',
      nextArrow: '<div class="icon-recent iconnext"><i class="bi bi-arrow-right-circle"></i></div>',
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
          }
        },
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1
          }
        }
      ]

    });  
  });



