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
				$('.market-modals '+targetModal).removeClass('hidden').addClass('visible-market-modal');
				
				e.preventDefault();
			});
			
			$(document).on('click', '.market-modal-close', function(e){
				$('.market-modals, .market-modal-element').addClass('hidden');
				$('.visible-market-modal').removeClass('visible-market-modal');
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
	       
	       
		   $('.market-modal-link').on('click', function(e){
			   
			   $nextElement = ($('.visible-market-modal .market-modal-link.right').parent().next().length === 0)? false : $('.market-modal-link.right').parent().next();
			   $prevElement = ($('.visible-market-modal .market-modal-link.left').parent().prev().length === 0)? false : $('.market-modal-link.left').parent().prev();
			   
			   
			   if($(this).hasClass('right')){
				   if($nextElement != false){
					   $('.visible-market-modal').removeClass('visible-market-modal').addClass('hidden');
					   $nextElement.removeClass('hidden').addClass('visible-market-modal');
				   }else{
					    $('.visible-market-modal').removeClass('visible-market-modal').addClass('hidden');
					    $('.first-modal').removeClass('hidden').addClass('visible-market-modal');
				   }
			   }else{
				   if($prevElement != false){
					   $('.visible-market-modal').removeClass('visible-market-modal').addClass('hidden');
					   $prevElement.removeClass('hidden').addClass('visible-market-modal');
				   }else{
					   $('.visible-market-modal').removeClass('visible-market-modal').addClass('hidden'); 
					   $('.last-modal').removeClass('hidden').addClass('visible-market-modal');
				   }
			   }
			   
			   e.preventDefault();
		   });
		   
		   //Hide Market Modal
		   if($('.market-modal-element').length === 1){
			 $('.market-modal-link').addClass('hidden');  
		   }
       }
 
 
        // Reveal public pointers to
        // private functions and properties
 
        return {
            init: init
        };
 
    })();