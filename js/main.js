var mainJs = (function () {
	
		function jumpnav(){
			
			$('.jumpnav li a').on('click', function(e){
				
				var target = $(this).attr('href');
				
				$('html, body').stop().animate({
					scrollTop : $(target).offset().top - 80
				}, 500);
				
				e.preventDefault();
				
			});
			
		}
	
		function contactCondition(){
			
			$('.form-select-option').on('change',function(){
				
				if($('.hidden-select-items').hasClass('hidden')){
					$('.hidden-select-items').removeClass('hidden');
				}
				
			});
			
		}
	
		function successNav(){
			
			$('.success-stories-nav a').on('click', function(e){
				
				if($(this).hasClass('.slide-next')){
					$('.flexslider').flexslider('prev');
				}else{
					$('.flexslider').flexslider('prev');
				}
				
				e.preventDefault();
			});
		}
	
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
	       successNav();
	       contactCondition();
	       jumpnav();
	       
	       $('.fb-close').on('click', function(e){
			   	$.fancybox.close();
			   	
			   	$('html, body').stop().animate({
				   	scrollTop: $('.contact-section').offset().top
			   	},200);
			   	
			   	$('.primary-contact-form input#name-form-input').focus();
			   	
			   	e.preventDefault();
	       });
       }
 
 
        // Reveal public pointers to
        // private functions and properties
 
        return {
            init: init
        };
 
    })();