var mainJs = (function () {
	
		function facilitiesDrawers(){
			
			$('.facilities-graph > li').on('click', function(e){
				
				$(this).toggleClass('open');
				$(this).find('.fa-plus').toggleClass('fa-minus');
				
				e.preventDefault();
			});
			
		}
	
		function marketModals(){
			
			$('.market-graph li a').on('click', function(e){
				
				var targetModal = $(this).attr('data-graph');
				
				$('.market-modals').removeClass('hidden');
				$('.market-modals '+targetModal).removeClass('hidden');
				
				e.preventDefault();
			});
			
			$(document).on('click', '.market-modal-close', function(e){
				$('.market-modals, .market-modal-element').addClass('hidden');
				e.preventDefault();
			});
			
		}
 
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
	       marketModals();
	       facilitiesDrawers();
       }
 
 
        // Reveal public pointers to
        // private functions and properties
 
        return {
            init: init
        };
 
    })();