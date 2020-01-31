(function($){

	"use strict";
	  
	$(document).ready(function () {
		bookyourtravel.init();
	});
	
	$(window).on('load', function() {
		bookyourtravel.load();
	});
	
	var bookyourtravel = {
	
		init: function () {
			
			//MAIN SEARCH 
			$('.main-search input[name=radio]').change(function() {
				var showForm = $(this).val();
				$('.form').hide();
				$("#"+showForm).show();
			}); 
			
			$('.form').hide();
			$('.form:first').show();
			$('.f-item:first').addClass("active");
			$('.f-item:first span').addClass("checked");
			
			$('.f-item .radio').click(function() {
				$('.f-item').removeClass("active");
				$(this).parent().addClass("active");
			});	
			
			//SEARCH WIDGET
			$('.refine-search-results dt').each(function() {
			var tis = $(this), state = false, answer = tis.next('.refine-search-results dd').hide().css('height','auto').slideUp();
			tis.click(function() {
				state = !state;
				answer.slideToggle(state);
				tis.toggleClass('active',state);
				});
			});
			
			// MOBILE MENU
			$('#nav').slimmenu({
				resizeWidth: '1040',
				collapserTitle: 'Main Menu',
				animSpeed: 'medium',
				easingEffect: null,
				indentChildren: false,
				childrenIndenter: '&nbsp;',
				expandIcon:'<i class="material-icons">keyboard_arrow_right</i>',
				collapseIcon:'<i class="material-icons">expand_less</i>'
			});
			
			// CUSTOM FORM ELEMENTS
			$('input[type=radio], input[type=checkbox],input[type=number], select').uniform();
			
			//UI FORM ELEMENTS
			var spinner = $('.spinner input').spinner({ min: 0 });
			
			$('.datepicker-wrap input').datepicker({
				showOn: 'button',
				buttonImage: 'images/ico/calendar.png',
				buttonImageOnly: true
			});
			
			$( '#slider' ).slider({
				range: "min",
				value:1,
				min: 0,
				max: 10,
				step: 1
			});
			
			//SCROLL TO TOP BUTTON
			$('.scroll-to-top').click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 800);
				return false;
			});
			
			//HEADER RIBBON NAVIGATION
			$('.ribbon li').hide();
			$('.ribbon li.active').show();
			$('.ribbon li a').click(function() {
				$('.ribbon li').hide();
				if ($(this).parent().parent().hasClass('open'))
					$(this).parent().parent().removeClass('open');
				else {
					$('.ribbon ul').removeClass('open');
					$(this).parent().parent().addClass('open');
				}
				$(this).parent().siblings().each(function() {
					$(this).removeClass('active');
				});
				$(this).parent().attr('class', 'active'); 
				$('.ribbon li.active').show();
				$('.ribbon ul.open li').show();
				return true;
			});
			
			//TABS
			$('.tab-content').hide().first().show();
			$('.inner-nav li:first').addClass("active");

			$('.inner-nav a').on('click', function (e) {
				e.preventDefault();
				$(this).closest('li').addClass("active").siblings().removeClass("active");
				$($(this).attr('href')).show().siblings('.tab-content').hide();
				var currentTab = $(this).attr("href");
				if (currentTab == "#location")
				initialize();
			});

			var hash = $.trim( window.location.hash );
			if (hash) $('.inner-nav a[href$="'+hash+'"]').trigger('click');
			
			
			//ROOM TYPES MORE BUTTON
			$('.more-information').slideUp();
			$('.more-info').click(function() {
				var moreinformation = $(this).closest('li').find('.more-information');
				var txt = moreinformation.is(':visible') ? '+ more info' : ' - less info';
				$(this).text(txt);
				moreinformation.stop(true, true).slideToggle('slow');
			});
					
			
			//LOGIN & REGISTER LIGHTBOX
			$('.close').click(function() {
				$('.lightbox').hide();
			});
			
			//MY ACCOUNT EDIT FIELDS
			$('.edit_field').hide();
			$('.edit').on('click', function (e) {
				e.preventDefault(); 
				$($(this).attr('href')).toggle('slow', function(){});
			});
			$('.edit_field a,.edit_field input[type=submit]').click(function() {
				$('.edit_field').hide(400);
			});
			
			//CONTACT FORM
			$('#contactform').submit(function(){
				var action = $(this).attr('action');
				$("#message").show(400,function() {
					$('#message').hide();
					
					$('#submit')
						.after('<img src="images/ajax-loader.gif" class="loader" />')
						.attr('disabled','disabled');
					
					$.post(action, { 
						name: $('#name').val(),
						email: $('#email').val(),
						phone: $('#phone').val(),
						//subject: $('#subject').val(),
						comments: $('#comments').val()
						//verify: $('#verify').val()
					},
					function(data){
						document.getElementById('message').innerHTML = data;
						$('#message').slideDown('slow');
						$('#contactform img.loader').fadeOut('slow',function(){$(this).remove()});
						$('#submit').removeAttr('disabled'); 
						//if(data.match('success') != null) $('#contactform').slideUp(3000);
						
					});
				});
				return false; 
			});
			
			// PRELOADER
			$('.loading').fadeOut();
		},
		load: function () {
			// UNIFY HEIGHT
			var maxHeight = 0;
				
			$('.deals article .details').each(function(){
			 	if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
			});
			$('.deals article .details').height(maxHeight);	
		}
	}

})(jQuery);
