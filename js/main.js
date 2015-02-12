var mainJs = (function () {
 
 		function scrollNav(){
	 		$(document).on('scroll', function(){
	 			var scrolltop = $(this).scrollTop();
	 			
	 			if(scrolltop >= 100){
		 			setTimeout(function(){
			 			$('.primary-nav').addClass('filled');
		 			}, 100);
	 			}
	 			
	 			if(scrolltop < 100){
		 			setTimeout(function(){
			 			$('.primary-nav').removeClass('filled');
		 			}, 100);
	 			}

	 		});
	 		
	 		$('.hm-hero--arrow-down').on('click', function(e){
	 			$('html, body').stop().animate({
		 			scrollTop: $('.site-container').offset().top
	 			},700);
	 			
	 			e.preventDefault();
 			});
 		}
        
       function init(){
	       scrollNav();
       }
 
 
        // Reveal public pointers to
        // private functions and properties
 
        return {
            init: init
        };
 
    })();