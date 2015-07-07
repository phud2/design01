<!doctype html>
	
	<html>
		<head> 
			<meta name="viewport" content="width=device-width, initial-scale=1">
			
			<title> FAQs </title>
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="css/flipclock.css">
			<link rel="stylesheet" href="css/headhesive.css">
			<link rel="stylesheet" href="css/home.css">
            <link rel="stylesheet" href="css/fiber-optic-internet.css" >	
            <link rel="stylesheet" href="css/faqs.css">		
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/cssReset.css">
            
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
			<script src="js/main.js"></script>
			<script src="js/flipclock.js"></script>
			<script src="js/clock.js"></script>
			<script src="js/headhesive.js"></script>
			<script src="js/faqsAccordion.js"></script>
			<script src="js/nav-mobile-menu.js"></script>
			<script src="js/jquery.velocity.min.js"></script>
			<script src="js/number-pb.js"></script>
			<script>
			  $(function() {

			    $("#start").on('click', function(){
			        // setup
			        var fiberOpticBar = $('#fiberOptic .number-pb').NumberProgressBar({
			          style: 'fiberOptic'
			        })
			        var fiberOpticBarStart = function() {
			          fiberOpticBar.reach(100, {
			            duration: 2000,
			          });
			        }

			        var userBar = $('#user .number-pb').NumberProgressBar({
			          style: 'user'
			        })
			        var userStart = function() {
			          userBar.reach(100, {
			            duration: 20000,
			          });
			        }

			        // start
			        fiberOpticBarStart();
			        userStart();
			    });

			  });
			</script>
		</head>
		<body>
			<div class="main-wrapper">
				<header>				
					<?php
						include "header.php";
					?>
                   	<div class="hero hero-background hero-faqs-bkgrd">
                    	<div class="hero-content-wrapper">
							<div class="hero-header-vertical-middle">
                                <h1 class="hero-header-title text-center">What is Fiber Internet</h1>
                                <div class="smaller-leading">
                                    <p class="hero-header-sub-header text-center">It's cutting-edge and faster than anything else out there.</p> 
                                    <p class="hero-header-sub-header text-center">How can I get it?</p>
                                </div>
							</div>
                        </div>
                    </div>
<!-- Top of page banners -->
					<!-- call to action banner with clock -->
					<div class="header-banner-wrapper clear-fix">
						<div class="call-to-action">
							<div class="header-banner-left">
								<p>Hurry!</p>
								<p>Call Now!</p>
								<p class="header-emp-text">Only</p>
							</div>	
							<div class="header-banner-middle">
								<div class="clock"></div>
								<div class="message"></div>
							</div>
							<div class="header-banner-right">
								<p class="header-emp-text">Until were closed!</p>
								<p class="header-phone">1.800.123.4567</p>
							</div>
						</div>
					</div>
					<!-- end call to action banner with clock -->		
					<!-- Mobile banner -->
					<div class="call-now-top">
						<div class="call-now-left">
							<p class="mobile-call-now">Call Now!!</p>
						</div>
						<div class="call-now-right">
							<p class="mobile-call-number">1.800.123.1234</p>
						</div>
					</div>	
					<!-- End mobile banner -->
<!-- End top of page banners -->					
				</header>
<!-- top section that has the menu -->		
				<a id="showHere"></a>
				<div id="anchor-top"></div>
				<div class="content section-one">					
					<h6 class="header-font article-header">FAQs</h6>
					<h3 class="article-header sub-header">Here's your guide to navigating fiber Internet</h3>
			
					<div class="centered">
						<div class="faqs-menu-container">
							<div class="faqs-twocol-left">
								<img src="images/faqs-compass.jpg">
							</div>
							
							<div class="accordion faqs-twocol-right">
								<ul class="faqs-menu">
									<li class="faqs-accordion-header click-one current" data-tab="tab-1">
										<div class="accordion-icon"><i class="fa fa-info-circle fa-2x"></i></div>
										<h2><strong>What is fiber internet?</strong></h2>
									</li>
									<li class="faqs-accordion-header click-two float-clear" data-tab="tab-2">
										<div class="accordion-icon"><i class="fa fa-question-circle fa-2x"></i></div>
										<h2><strong>Is DSL fiber internet?</strong></h2>
									</li>
									<li class="faqs-accordion-header click-three float-clear" data-tab="tab-3">
										<div class="accordion-icon"><i class="fa fa-fighter-jet fa-2x"></i></div>
										<h2><strong>How fast is fiber internet?</strong></h2> 
									</li>
									<li class="faqs-accordion-header click-four float-clear" data-tab="tab-4">
										<div class="accordion-icon"><i class="fa fa-phone fa-2x"></i></div>
										<h2><strong>How do I get fiber internet?</strong></h2> 
									</li>
									<li class="faqs-accordion-header click-five float-clear" data-tab="tab-5">
										<div class="accordion-icon"><i class="fa fa-home fa-2x"></i></div>
										<h2><strong>What is fiber to the home?</strong></h2> 
									</li>
								</ul>
							</div>
						</div>
						<!--/.article-container-->
					</div>
					<!--/.centered-->               
                </div>
                <!--/.content-->
<!-- section 1 -->
                <div id="tab-1" class="faqs-content">
                	<span class="anchor"></span>
                	<a href="#anchor-top" class="close center-horizontally-parent">+</a>
					<h2 class="header-font article-header">What is fiber Internet?</h2>   
	                    <p>It's the most advanced means of data delivery for Internet, digital phone and TV. Pulses of light travel through optical fibers made of hair-thin strands of flexible glass. Fiber sends data quicker than copper can. This makes it a popular upgrade from aging networks.</p>

	                    <div class="faqs-section-wrapper">
	                    	<div class="left faqs-section-left">
	                      		<img src="images/faqs-fiber.png">
	                  		</div>
	                      	<div class="right faqs-section-right">
	                      		<div class="faqs-description">
		                            <p>Degradation and signal interference aren't concerns with fiber networks. 
		                            You can't say the same for cable.</p>

		                            <p>Fiber Internet reaches speeds several times faster than DSL or cable. It's delivered on
		                             a dedicated line. That 
		                            ensures consistent speeds of as much as 100 times faster than standard broadband. Users can stream, download, and play
		                             online games without buffering.</p>
	                         	</div>
	                         	<!--/.faqs-description-->
	                      	</div>
	                      	<!--/.faqs-section-one-right-->
	                    </div>  
	                 	<!--/.section-one-faqs-wrapper-->
				</div>
				<!--/.faqs-content-->
<!-- section 2 -->
				<div id="tab-2" class="faqs-content">
					<span class="anchor"></span>
					<a href="#anchor-top" class="close center-horizontally-parent">+</a>
					<h2 class="header-font article-header">Is DSL fiber Internet?</h2>

                	<div class="faqs-section-wrapper">
                      	<div class="left faqs-section-left">
	                      	<img src="images/faqs-dsl.png">
	                  	</div>
	                  	<div class="right faqs-section-right">
	                      		<div class="faqs-description">
		                            <p>No. DSL, or Digital Subscriber Line, uses copper wire in phone lines for Internet 
                            access. DSL's speed consistency depends on distance between home and provider. A signal becomes weaker and travels slower over greater distances.</p>

		                            <p>A smaller, lighter-weight cable in fiber Internet is more efficient than DSL copper.
                             Glass fibers don't generate electricity, reducing interference. Fiber optic signals travel separate from the electrical grid. A power outage won't interrupt your fiber Internet connection.</p>
	                         	</div>
	                         	<!--/.faqs-description-->
	                      </div>
	                      <!--/.faqs-section-one-right-->
                    </div> 
               		<!--/.faqs-section-wrapper-->
				</div>
				<!--/.faqs-content-->
<!-- section 3 -->
				<div id="tab-3" class="faqs-content">
					<span class="anchor"></span>
					<a href="#anchor-top" class="close center-horizontally-parent">+</a>
					<h2 class="header-font article-header">How fast is fiber Internet?</h2>
					<p>Fiber Internet blows away standard broadband for speed. Fiber Internet providers cite speeds of 1 Gigabit per second (1,000Mbps). Cable connections typically range from 3 to 24Mbps.</p>

                     <div class="faqs-section-wrapper">
                     	<section id="fiberOptic">
					      <h4 class="title">Fiber</h4>
					      <article>
					        <div class="number-pb">
					          <div class="number-pb-shown dream"></div>
					          <div class="number-pb-num">up to 1000 Mpbs</div>
					        </div>
					      </article>
					    </section>

					    <section id="user">
					      <h4 class="title">Everyone Else</h4>
					      <article>
					        <div class="number-pb">
					          <div class="number-pb-shown sun"></div>
					          <div class="number-pb-num">10 Mpbs</div>
					        </div>
					      </article>
					    </section>
					    <div class="button-container">
					    <button id="start">Start Race</button>
                     	</div>
						<p class="race-call-out">Call now to get your head start<span class="in-text-800"> 1800.123.1234<span></p>
                     </div>
                     <!--/.faqs-section-wrapper-->
                </div>
<!-- section 4 -->
				<div id="tab-4" class="faqs-content">
					<span class="anchor"></span>
					<a href="#anchor-top" class="close center-horizontally-parent">+</a>
					<h2 class="header-font article-header">How do I get fiber Internet?</h2>

					 <p class="center">Check fiber Internet providers' websites. Fiber neighborhoods are concise. Providers need only your address to check. </p>

                    <div class="faqs-section-wrapper">
	                    <div class="left faqs-section-four-left">
	                      <div class="faqs-description">
	                            <p>You can also learn which areas providers will expand coverage. Sign up for notifications
	                             if your town isn't in current or planned coverage. Implementation is often demand-based. Track local news for 
	                             carriers' interest to expand their fiber footprint.</p>

	                            <p>Consider bundle packages, too. They combine Internet with digital phone and TV 
	                            service, or both. Or call us. We'll check your address for availability of fiber-optic networks.</p>                                                         
	                      </div>
	                      <!--faqs-description-->
	                    </div>
	                    <!--faqs-section-four-left-->
	                    <div class="right faqs-section-four-right">
		                	<img src="images/faqs-hdigf.png">
		                </div>
		                <!--faqs-section-four-right-->
	            	</div>
	            	<!--faqs-section-wrapper-->
				</div>
				<!--/.faqs-content-->
<!-- section 5 -->
				<div id="tab-5" class="faqs-content">
					<span class="anchor"></span>
					<a href="#anchor-top" class="close center-horizontally-parent">+</a>
					<div class="width-most center text-center mobile">
                        <i class="fa fa-home font-210 "></i>
                    </div>
                    <h2 class="header-font article-header">What is fiber to the home?</h2>
					
					<p>Fiber to the home (FTTH) means a direct optical fiber connection to a home or business. FTTH doesn't need the infrastructure used in cable or DSL connections. It delivers data on a much faster network for Internet, TV and phone services. Cable and DSL providers struggle to extend speeds on existing infrastructure. However, fiber Internet operates on a future-ready network.</p>

					<p class="add-margin-twenty">Fiber-optic networks can improve efficiency and speed without upgrades in structure. Consumers have shifted from PC-based Internet activity to usage that reaches across enabled devices. Smart homes and Smart TVs also connect to the Internet, and need more bandwidth.</p>
            	</div>
<!-- content end -->			
				<footer>
					<?php
						include "footer.php";
					?>		
				</footer>
			</div>
			<!--/.main-wrapper-->		
		</body>
	</html>