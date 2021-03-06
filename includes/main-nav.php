<?php 
	function checkActive($element, $activeTarget){
		if($element === $activeTarget){
			echo 'active';
		}else{
			return false;
		}
	}
	
	if(!isset($activePage) || empty($activePage)){
		$activePage = false;
	}
?>

<!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<?php if(isset($secondaryNav) && !empty($secondaryNav)): ?>
	<nav class="primary-nav">
		<div class="full-width primary-nav--container">
			<a class="primary-nav--brand-logo" href="/">
				<img src="/img/eng-logo-lg.png" width="100" height="auto">
			</a>
			<a class="primary-nav--mobile-toggle">
				<i class="fa fa-bars"></i>
			</a>
			<ul class="primary-nav--center-menu jumpnav">
				<li><a href="/#casestudies">Case Studies</li>
				<li class="<?php checkActive('industries', $activeCat); ?>">
					<a href="/our-clients">Our Clients  <i class="fa fa-caret-down"></i></a>
					<ul>
						<li class="<?php checkActive('hedgefunds', $activePage); ?>"><a href="/our-clients/hedge-funds">Hedge Funds</a></li>
						<li class="<?php checkActive('corporations', $activePage); ?>"><a href="/our-clients/corporations">Corporations</a></li>
						<li class="<?php checkActive('private-equity', $activePage); ?>"><a href="/our-clients/private-equity">Private Equity</a></li>	
						<li class="<?php checkActive('venture-capital', $activePage); ?>"><a href="/our-clients/venture-capital">Venture Capital</a></li>
						<li class="<?php checkActive('professional-service-firms', $activePage); ?>"><a href="/our-clients/professional-service-firms">Professional <br> Service Firms</a></li>
						<li class="<?php checkActive('investment-banking', $activePage); ?>"><a href="/our-clients/investment-banking">Investment <br>Banking</a></li>	
						<li class="<?php checkActive('law', $activePage); ?>"><a href="/our-clients/law">Law</a></li>
						<li class="<?php checkActive('life-sciences', $activePage); ?>"><a href="/our-clients/life-sciences">Life Sciences</a></li>
						<li class="<?php checkActive('start-ups', $activePage); ?>"><a href="/our-clients/start-ups">Start Ups</a></li>							
					</ul>
				</li>
				<li class="<?php checkActive('compliance', $activeCat); ?>"><a href="/compliance">Compliance</a></li>
				<li>
					<a href="#contact">For Clients <i class="fa fa-caret-down"></i></a>
					<ul>
						<li class="jumpnav"><a href="#contact">Become an <br>ENG client</a></li>
						<li><a href="https://clients.eng-llc.com/">Client Login</a></li>							
					</ul>
				</li>
				<li class="<?php checkActive('experts', $activeCat); ?>">
					<a href="/experts">For Experts <i class="fa fa-caret-down"></i></a>
					<ul>
						<li><a href="https://experts.eng-llc.com/register">Become an <br>ENG Expert</a></li>
						<li><a href="https://experts.eng-llc.com/">Expert Login</a></li>					
						<li><a href="/experts#faqs">FAQs</a></li>		
					</ul>
				</li>
				<li class="jumpnav"><a href="#contact">Contact</a></li>
			</ul>
			<ul class="primary-nav--right-menu hidden">
			</ul>
		</div>
	</nav>
<?php else: ?>
<nav class="primary-nav">
	<div class="full-width primary-nav--container">
		<a class="primary-nav--brand-logo" href="/">
			<img src="/img/eng-logo-lg.png" width="100" height="auto">
		</a>
		<a class="primary-nav--mobile-toggle">
			<i class="fa fa-bars"></i>
		</a>
		<ul class="primary-nav--center-menu jumpnav">
			<li><a href="#overview">Overview</a></li>
			<li><a href="#difference">ENG Difference</a></li>
			<li><a href="#casestudies">Case Studies</a></li>
			<li><a href="/compliance">Compliance</a></li>
			<li>
				<a href="#contact">For Clients <i class="fa fa-caret-down"></i></a>
				<ul>
					<li class="jumpnav"><a href="#contact">Become an <br>ENG client</a></li>
					<li><a href="https://clients.eng-llc.com/">Client Login</a></li>						
				</ul>
			</li>
			<li>
				<a href="/experts">For Experts <i class="fa fa-caret-down"></i></a>
				<ul>
					<li><a href="https://experts.eng-llc.com/register">Become an <br>ENG Expert</a></li>
					<li><a href="https://experts.eng-llc.com/">Expert Login</a></li>
					<li><a href="/experts#faqs">FAQs</a></li>							
				</ul>
			</li>
		</ul>
		<ul class="primary-nav--right-menu hidden">
		</ul>
	</div>
</nav>
<?php endif; ?>