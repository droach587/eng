<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js ie6"> <![endif]-->
<!--[if IE 7]>         <html class="no-js ie7"> <![endif]-->
<!--[if IE 8]>         <html class="no-js ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ENG | Expert Network Group</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<meta name="format-detection" content="telephone=no">
		
        <link rel="stylesheet" href="/css/styles.css">
        
        <script src="/js/vendor/modernizr-2.6.2.min.js"></script>
        
        <?php include_once('includes/google-analytics.php'); ?>

        
    </head>
    
    <body>
	    
		<?php $secondaryNav = true; $activeCat= "industries"; $activePage= "venture-capital"; include_once('includes/main-nav.php'); ?>
		
		<section class="hm-hero--standard">
			<a href="/" class="hero-back"><i class="fa fa-angle-left"></i> Back Home</a>
			<div class="hm-hero--center-container">
				<h1 class="section-hero--heading tri-flare">Venture Capital</h1>
			</div>
		</section>
		
		<section class="site-container standard-push">
			<div class="inner-container">
				<div class="content-wrapper">
					
					<h2 class="full-width section-subheading skinny text-center orange-copy no-margin">ENG helps venture investors discover and create new business models.</h2>
					<p class="text-center standard-p">Projects range from: exploring use-cases, estimating market size, understanding new technology, to competitive assessment.  Investors rely on ENG to expand their network into new areas.</p>
					<hr class="margin-top-20">
					
					<div class="full-width margin-top-20 text-center">
						<div class="full-width">
							<h4 class="section-secondary-subheading flat-bottom">In-House Venture Capital</h4>
							<p class="standard-p">ENG similarly supports the growing corporate venture capital trend.  Our services help venture managers create an ecosystem that is conducive toward investments that provide both strategic returns and financial returns.</p>
						</div>
					</div>
					
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
