<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js ie6"> <![endif]-->
<!--[if IE 7]>         <html class="no-js ie7"> <![endif]-->
<!--[if IE 8]>         <html class="no-js ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ENG ||| Life Sciences | Expert Network Group, LLC</title>
        <meta name="description" content="ENG connects you with experts throughout the healthcare ecosystem.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<meta name="format-detection" content="telephone=no">
		
        <link rel="stylesheet" href="/css/styles.css">
        
        <script src="/js/vendor/modernizr-2.6.2.min.js"></script>
        
        <?php include_once('includes/google-analytics.php'); ?>

        
    </head>
    
    <body>
	    
		<?php $secondaryNav = true; $activeCat= "industries"; $activePage= "life-sciences"; include_once('includes/main-nav.php'); ?>
		
		<section class="hm-hero--standard">
			<a href="/" class="hero-back"><i class="fa fa-angle-left"></i> Back Home</a>
			<div class="hm-hero--center-container">
				<h1 class="section-hero--heading tri-flare">Life Sciences</h1>
			</div>
		</section>
		
		<section class="site-container standard-push">
			<div class="inner-container">
				<div class="content-wrapper">

					<h2 class="full-width section-subheading skinny text-center orange-copy no-margin">ENG connects you with experts throughout the healthcare ecosystem. </h2>
					<p class="text-center standard-p"> We are here to help support your decision-making in product development, marketing, and reimbursement. Insights from hospital executives, doctors, reimbursement experts, and scientists can help you assess opportunities and formulate effective strategies.</p>
					
				</div>
			</div>
			<div id="contact" class="full-width">
				<?php include_once('includes/main-contact.php'); ?>
			</div>
			<?php include_once('includes/main-footer.php'); ?>
		</section>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="/js/vendor/jquery.flexslider-min.js"></script>
        <script src="/js/vendor/jquery.fancybox.js"></script>
        <script src="/js/main.js"></script>
        
        <script>
        	$(document).ready(function(){
        		mainJs.init({});	
        		$(".fancybox").fancybox({});
        		$('.flexslider').flexslider();
        	});
        </script>

    </body>
</html>
