jQuery(document).ready(function($){
    
	//Select languages
	var cl_lang = false;
	$('.header-btns .lang-select').click(function(){
		if(!cl_lang){
			cl_lang = true;
			$('.header-btns .lang').css({'display':'flex'});
		}else{
			cl_lang = false;
			$('.header-btns .lang').css({'display':'none'});
		}
	});
	
	//Open and close mobile menu
	$('#mobile').click(function(e){
		e.preventDefault();
		$('header .content-header > .menu,#event-header > .menu').slideToggle(300);
		$(this).toggleClass('active');
	});
	
    //Main slider code
    var mainSlider = new Swiper('#slider .swiper-container',{
        slidesPerView: 5,
//         direction: 'horizontal',
        loop: true,
        spaceBetween: 20,
//         centeredSlides: true,
        speed: 2000,
        autoplay: {
    		delay: 3000,
    		disableOnInteraction: false,
    	},
        breakpoints: {
            1024: {
              slidesPerView: 4,
            },
            768: {
              slidesPerView: 3,
            },
            640: {
              slidesPerView: 1,
              spaceBetween: 20,
            },
            320: {
              slidesPerView: 1,
              spaceBetween: 10,
            }
        },
        observer: true, 
        observeParents: true,
    });
    
    //Play and stop video course
    var video_cl = false;
    $('#main-course .video-context .video .start').click(function(){
        $('#course-video').get(0).play();
        $(this).css({'display':'none'});
        $('#course-video').attr('controls','');
    });
    $('#course-video').on('pause', function () {
        $(this).removeAttr('controls');
        $('#main-course .video-context .video .start').css({'display':'flex'});
    });
	
	//Play and stop video event
    var video_ev = false;
    $('#event-info .event-video .start').click(function(){
        $('#event-video').get(0).play();
        $(this).css({'display':'none'});
        $('#event-video').attr('controls','');
    });
    $('#event-video').on('pause', function () {
        $(this).removeAttr('controls');
        $('#event-info .event-video .start').css({'display':'flex'});
    });
    
    //Comment slider course single page
    var commetnSlider = new Swiper('#main-course .comment-slider .swiper-container',{
        slidesPerView: 1,
        direction: 'horizontal',
        loop: true,
        spaceBetween: 40,
        // centeredSlides: true,
        speed: 1000,
        autoplay: {
    		delay: 4000,
    		disableOnInteraction: true,
    	},
        pagination: {
          el: '#main-course .comment-slider .swiper-pagination',
    		clickable: true,
        },
        navigation: {
          nextEl: "#main-course .comment-slider .swiper-button-next",
          prevEl: "#main-course .comment-slider .swiper-button-prev",
        },
        breakpoints: {
            1024: {
              slidesPerView: 1,
            },
            768: {
              slidesPerView: 1,
            },
            640: {
              slidesPerView: 1,
              spaceBetween: 20,
            },
            320: {
              slidesPerView: 1,
              spaceBetween: 10,
            }
        },
        observer: true, 
        observeParents: true,
    });
	
	//Gallery slider course single page
	var gallerySlider = new Swiper('#main-course .gallery-image .swiper-container',{
        slidesPerView: 4,
        direction: 'horizontal',
        loop: true,
        spaceBetween: 40,
        // centeredSlides: true,
        speed: 1000,
        autoplay: {
    		delay: 3500,
    		disableOnInteraction: false,
    	},
        navigation: {
          nextEl: "#main-course .gallery-image .swiper-button-next",
          prevEl: "#main-course .gallery-image .swiper-button-prev",
        },
        breakpoints: {
            1024: {
              slidesPerView: 4,
            },
            768: {
              slidesPerView: 3,
            },
            640: {
              slidesPerView: 1,
              spaceBetween: 20,
            },
            320: {
              slidesPerView: 1,
              spaceBetween: 10,
            }
        },
        observer: true, 
        observeParents: true,
    });
	
    //Main slider course archive page
	var archiveSlider = new Swiper('#course-slider .swiper-container',{
        effect: 'coverflow',
        grabCursor: true,
        loop: true,
        centeredSlides: false,
        slidesPerView: 3,
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
        autoplay: {
            delay: 4000,
        },
        speed: 1000,
        breakpoints: {
            1024: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 2,
            },
            640: {
                slidesPerView: 1,
                  spaceBetween: 20,
				effect: 'fade',
            },
            320: {
                slidesPerView: 1,
                  spaceBetween: 10,
				effect: 'fade',
            }
        },
    });
	
	//Main slider event archive page
    var eventSlider = new Swiper('#event-slider .swiper-container',{
        slidesPerView: 1,
        direction: 'horizontal',
        loop: true,
        spaceBetween: 40,
        // centeredSlides: true,
        speed: 1000,
        autoplay: {
    		delay: 4000,
    		disableOnInteraction: true,
    	},
        breakpoints: {
            1024: {
              slidesPerView: 1,
            },
            768: {
              slidesPerView: 1,
            },
            640: {
              slidesPerView: 1,
              spaceBetween: 20,
            },
            320: {
              slidesPerView: 1,
              spaceBetween: 10,
            }
        },
		navigation: {
          nextEl: "#event-slider .swiper-button-next",
          prevEl: "#event-slider .swiper-button-prev",
        },
        observer: true, 
        observeParents: true,
    });
	
	//Faq open and close box about us page
	$('#about-us .faq .q .q-title').click(function(){
        $(this).closest('.q').siblings().removeClass('active').find('.q-content').slideUp(400);
        $(this).closest('.q').toggleClass('active').find('.q-content').slideToggle(400);
    });
	
	//Faq open and close box event page
	$('#event-faq .q .q-title').click(function(){
        $(this).closest('.q').siblings().removeClass('active').find('.q-content').slideUp(400);
        $(this).closest('.q').toggleClass('active').find('.q-content').slideToggle(400);
    });
	
	//Show more content event
	var show_cl = false;
	$('#event-info .bottom .cta .more').click(function(){
		var parent = $(this).closest('#event-info');
		if(!show_cl){
			show_cl = true;
			$(parent).find('.main-content').addClass('active');
			$(this).text('Read Less');
		}else{
			show_cl = false;
			$(parent).find('.main-content').removeClass('active');
			$(this).text('Read More');
		}
	});
	
	//Set points to post
	$('#comment-post .content .comment-form .left .points .star').hover(function(){
		var img = $(this).attr('data-image');
		var point = $(this).attr('data-point');
		$('#comment-post .content .comment-form .left img').attr('src',img);
	});
	
	$('#comment-post .content .comment-form .left .points .star').click(function(){
		$('#comment-post .content .comment-form .left .points .star').removeClass('active');
		var point = $(this).attr('data-point');
		var img = $(this).attr('data-image');
		$("#comment-post .content .comment-form .left .points .star").filter(function(){ 
			return $(this).attr('data-point') <= point }
		).addClass('active');
		$('#comment-post .content .comment-form .left img').attr('src',img);
		$('#comment-post .comment-form #comment_rate').val(point);
	});
	
	//Archive sticky post slider code
    var stickySlider = new Swiper('#pin-posts .swiper-container',{
		loop: true,
        slidesPerView: 1,
        effect: 'fade',
        // centeredSlides: true,
        speed: 800,
        autoplay: {
    		delay: 4500,
    		disableOnInteraction: false,
    	},
		navigation: {
          nextEl: "#pin-posts .content .swiper-button-next",
          prevEl: "#pin-posts .content .swiper-button-prev",
        },
        observer: true, 
        observeParents: true,
		on: {
            init: function() {
                var bg = $("#pin-posts .swiper-slide-active .img-box img").attr("src");
                $("#pin-posts .background").css({
                    'background-image': 'url(' + bg + ')'
                });
            },
            slideChange: function() {
                var bg = $("#pin-posts .swiper-slide-next .img-box img").attr("src");
                $("#pin-posts .background").css({
                    'background-image': 'url(' + bg + ')'
                });
            },
        },
    });
    
    
    //Timer of special offer
    $("#archive-course .special-offer .date-offer").each(function(index){
        if($(this).length > 0){
            var dates = $(this).attr('data-time');
            var countDownDate = new Array();
            countDownDate['time'] = new Date(dates).getTime();
            var x = setInterval(function() {
                  // Get today's date and time
                  var now = new Date().getTime();
                    
                  // Find the distance between now and the count down date
                  var distance = parseFloat(countDownDate['time']) - parseFloat(now);
                  // Time calculations for days, hours, minutes and seconds
                  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                  // Output the result in an element with id="demo"
                  $("#archive-course .special-offer .date-offer ul").html("<li><span class='number'>"+days+"</span><span class='title'>DAYS</span></li><li><span class='number'>"+hours+"</span><span class='title'>HOURS</span></li><li><span class='number'>"+minutes+"</span><span class='title'>MINUTES</span></li><li><span class='number'>"+seconds+"</span><span class='title'>SECOND</span></li>");
                  if (distance < 0) {
                    clearInterval(x);
                    $("#archive-course .special-offer .date-offer ul").css({'opacity':'0.2','filter':'blur(5px)'});
                  }
                }, 1000);
              
        }
    });
    
    //Timer of Event
    $("#event-title .timer").each(function(index){
        if($(this).length > 0){
            var dates = $(this).attr('data-time');
            var countDownDate = new Array();
            countDownDate['time'] = new Date(dates).getTime();
            var x = setInterval(function() {
                  // Get today's date and time
                  var now = new Date().getTime();
                    
                  // Find the distance between now and the count down date
                  var distance = parseFloat(countDownDate['time']) - parseFloat(now);
                  // Time calculations for days, hours, minutes and seconds
                  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                  // Output the result in an element with id="demo"
                  $("#event-title .timer ul").html("<li><span class='value'>"+days+"</span><span class='name'>DAYS</span></li><li><span class='value'>"+hours+"</span><span class='name'>HOURS</span></li><li><span class='value'>"+minutes+"</span><span class='name'>MINUTES</span></li><li><span class='value'>"+seconds+"</span><span class='name'>SECOND</span></li>");
                  if (distance < 0) {
                    clearInterval(x);
                    $("#event-title .timer ul").css({'opacity':'0.2','filter':'blur(5px)'});
                  }
                }, 1000);
              
        }
    });
    
    
    //Gallery course 
    $('#main-course .gallery-image .swiper-slide .image').click(function(){
        var data_image = $(this).attr('data-image');
		$('#main-course .gallery-image .box').css({'display':'flex'});
        $('#main-course .gallery-image .box').append('<img src="'+data_image+'">');
        
    });
    $('#main-course .gallery-image .box .close').click(function(){
        $(this).closest('.box').find('img').remove();
		$(this).closest('.box').css({'display':'none'});
    });

    //Select museum event
    $('#event-museum .event-slider .right ul li').click(function(){
		var id = $(this).attr('data-id');
		$('#event-museum .event-slider .right ul li').removeClass('active');
		$(this).addClass('active');
		$('#event-museum .event-slider .left .slide').removeClass('active');
		$('#event-museum .event-slider .left .slide[data-id='+id+']').addClass('active');
	});
    
    
    
});