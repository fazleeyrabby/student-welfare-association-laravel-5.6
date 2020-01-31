


/*=========================================================
Template Name: Journal
Author Name: joyonto
Author URL:https://www.hamaronline.com
==========================================================*/

(function ($) {
	"use strict";

	/*==========================================
			laoding 
	==========================================*/
	  var prealoaderOption = $(window);
	    prealoaderOption.on("load", function () {
	        var preloader = jQuery('.preloader');
	        var preloaderArea = jQuery('.preloader-area');
	        preloader.fadeOut();
	        preloaderArea.delay(500).fadeOut('slow');
	    });

	 /*======================================================
            Google Map
======================================================*/
    var get_latitude = $('#google-map').data('latitude');
    var get_longitude = $('#google-map').data('longitude');

    function initialize_google_map() {
        var myLatlng = new google.maps.LatLng(get_latitude, get_longitude);
        var mapOptions = {
            zoom: 14,
            scrollwheel: false,
            center: myLatlng
        };
        var map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map
        });
    }
    $(document).ready(function(){
        $('.form').hide();
        $('#form1').show();
        $('.f-item:nth-child(1)').addClass('active');
        $('.f-item:nth-child(1) span').addClass('checked');
        $('#hero-gallery').lightSlider({
        gallery:true,
        item:1,
        pager:false,
        gallery:false,
        slideMargin: 0,
        speed:2000,
        pause:6000,
        mode: 'fade',
        auto:true,
        loop:true,
        onSliderLoad: function() {
        $('#hero-gallery').removeClass('cS-hidden');
        }
        });
    });

    setTimeout(function() {
    $('.alert').fadeOut('fast');
    }, 3000);

     $('.clients-says').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        smartSpeed: 1000,
        nav: true,
        dots : false,
        animateOut: 'fadeOut',
        navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
        responsive: {
            0: {
            items: 1
            },
            600: {
            items: 1
            },
            1000: {
            items: 1
            }
        }
    });
     // gallery
     $('.portfolio-item').isotope({
            itemSelector: '.item',
            layoutMode: 'fitRows'
         });
         $('.portfolio-menu ul li').click(function(){
            $('.portfolio-menu ul li').removeClass('active');
            $(this).addClass('active');
            
            var selector = $(this).attr('data-filter');
            $('.portfolio-item').isotope({
                filter:selector
            });
            return  false;
         });
         $(document).ready(function() {
         var popup_btn = $('.popup-btn');
         popup_btn.magnificPopup({
         type : 'image',
         gallery : {
            enabled : true
         }
         });
         });

     /*============================================
            add sticky class
==============================================*/
      $(window).on('scroll',function(){
        if($(this).scrollTop() >150){

            $('.menu-header').addClass('sticky');
        }
        else
        {
            $('.menu-header').removeClass('sticky');
        }

    });

      $(document).ready(function() {
    $(".dropdown-toggle").dropdown();
});
    google.maps.event.addDomListener(window, 'load', initialize_google_map);

}(jQuery));		
