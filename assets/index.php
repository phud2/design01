<!doctype html>
	
	<html>
		<head> 
			<meta name="viewport" content="width=device-width, initial-scale=1">
		
			<title> Home </title>
			<link rel="stylesheet" href="css/cssReset.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="css/flipclock.css">
			<link rel="stylesheet" href="css/headhesive.css">
			<link rel="stylesheet" href="css/home.css">
			<link rel="stylesheet" href="owl-carousel/owl.carousel.css">
			<link rel="stylesheet" href="owl-carousel/owl.theme.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
			<script src="js/flipclock.js"></script>
			<script src="owl-carousel/owl.carousel.js"></script>
			<script src="js/owlCarousel.js"></script>
			<script src="js/headhesive.js"></script>
			<script src="js/home.js"></script>
			<script src="js/main.js"></script>
			<script src="js/clock.js"></script>
			 <script src="js/accordion.js"></script>
			<script src="js/show-hide.js"></script>
			<script src="js/nav-mobile-menu.js"></script>
			<script src="covervid-gh-pages/covervid.js"></script>
			
		</head>
		<body>
<!-- wrapper for page contents for consistent margin -->
			<div class="main-wrapper">
				<header>
					<div class="home-header-wrapper">
							<?php
								include "header.php";
							?>	
						<!-- hero background and content -->
						<div class="hero">
							<!-- hero video wrapper -->
							<div class="covervid-wrapper">
								<video class="covervid-video" autoplay loop poster="img/home-landscape-typing.png">
									<source src="video/typing-hands.webm" type="video/webm">
									<source src="video/typing-hands.mp4" type="video/mp4">
								</video>
							</div>
							<!-- end hero video wrapper -->
							<!-- hero background image wrapper -->
							<div class="home-hero-bkgrd"> 
								<!-- hero content -->
								<div class="home-hero center">
									<!-- mobile hero content -->
									<div class="logo">
										<img class="logo-img" src="images/logo.png" alt="Fiber Internet Logo - Blue arrows wrap to make a circle">
										<p>Fiber Internet</p>
									</div>
									<!-- end mobile hero content -->
									<h1> The fabric of instant internet </h1>
									<h6 class="hero-sub-header"> Faster broadband speed, a new world of possibilities </h6>
									<!-- hero "scroll down" button -->
									<div class="button-move">
										<a href="#content-after-hero" class="button button-hero"></a>
										<p class="button-text">Scroll Down</p>
									</div>
									<!-- end hero scroll down button -->
								</div>
								<!-- end hero content -->
							</div>
							<!-- end hero background image wrapper -->
						</div>
						<!-- end hero background and content -->
					</div>
                </header>
				<!-- top of page action banners -->
				<div class="top-banners">
					<!-- call to action banner with clock -->
					<div class="header-banner-wrapper">
						<div class="call-to-action clear-fix">
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
								<p class="header-emp-text">Until we're closed!</p>
								<p class="header-phone">1.800.123.4567</p>
							</div>
						</div>
					</div>
					<!-- end call to action banner with clock -->	
					<!-- mobile action banner -->
					<div class="call-now-top">
						<div class="call-now-left">
							<p class="mobile-call-now">Call Now!!</p>
						</div>
						<div class="call-now-right">
							<p class="mobile-call-number">1.800.123.1234</p>
						</div>
					</div>
					<!-- end mobile action banner -->
				</div>
				<!-- end top of page action banners -->
				<span id="content-after-hero">
				</span><a id="showHere"></a>
<!-- First section after hero image and banner. -->				
				<div class="content section-one section-one-home">
					<h2 class="header-font">Fiber Internet and TV</h2>
					<!--  wrapper to center and contain contents of section 1 -->
					<div class="centered">						
						<p>Fiber Internet makes it possible to stream, download, play games online and more. It&#39;s also a viable replacement for cable TV. Many carriers offer a Double Play bundle with Internet and Digital TV. Some also have a Triple Play option that includes Digital Phone.</p>
						<!--  video container -->
						<div class="video-container">
							<!-- video containter text -->
							<div class="video-text">
								<!-- vertically align text wrapper -->
								<div>
									<h3 class="article-sub-header why-hd">Why HD?</h3>
									<p>HD, or high definition TV, delivers smooth, vibrant picture and sound. Movies, sporting events and images in online gaming come through with unmatched clarity.</p>
								</div>
								<!-- end vertical align video text -->
							</div>
							<!-- end video text -->
							<!-- wrappers for videos -->
							<div class="video-wrapper">
								<!--  video in the left column -->
								<div class="video-left">
									<h3 class="sub-header video-headers"> Fiber </h3>
									<video class="placeholder-video" controls autoplay muted loop>
										  <source src="video/hd.mp4" type="video/mp4">
										Your browser does not support the video tag.
									</video>
									 <img src="images/hd.png" class="placeholder-image" alt="non hd video">
								</div>
								<!-- End video in the left column -->
								<!--  video in the right column -->					
								<div class="video-right"> 
									<h3 class="sub-header video-headers"> General </h3>
									<video class="placeholder-video" controls autoplay muted loop>
										  <source src="video/notHD.mp4" type="video/mp4">
										Your browser does not support the video tag.
									</video>
									<img src="images/notHD.png" class="placeholder-image" alt="non hd video">
								</div>
								<!-- End video in the right column -->
							</div>
							<!-- End wrapper for videos -->
						</div>
						<!-- End video container -->
						<!--  section 1 content under video -->
						<div> 
							
							<div class="home-article-call-out">
								<p>Call <span class="in-text-800">1800.123.1234</span> to find fiber internet in your area.  Our customer service experts are here to assist you with faster internet.</p>
							</div>								
						</div>	
						<!-- End section 1 content under video -->
					</div>
					<!-- End section 1 content wrapper -->
				</div>
<!-- End section 1 -->
<!--  section 2 -->
				<div class="section-two-wrapper">
					<!--  wrapper to center and contain contents of section 2 -->
					<div class="centered section-two">
						<h3 class="article-header sub-header">What's The Difference Between Cable and Fiber?</h3>
						<!--  carousel for section 2 -->
						<div id="carousel-home-two" class="owl-carousel">
							<div class="carousel-p1">
								<p>For decades, copper wires have carried communications networks. DSL providers used these networks to deliver Internet service.</p>
							</div>
							<div class="carousel-p2">
								<p>Cable and DSL Internet were instant hits. Speeds of as fast as 8Mbps represented a quantum leap from dial-up capacity. But web-user profiles evolved from home-based PCs to households with several web-enabled devices. As many users streamed as did surf.</p> 
							</div>
							<div class="carousel-p3">
								<p>Cable's promised speeds fell short of demand.</p>
								<p>Enter fiber optics, and Gigabit Internet.</p>
							</div>
						</div>
						<!-- End carousel for section 2 -->
					</div>
					<!-- End section section 2 wrapper -->
				</div>
<!-- End sectoin 2 -->
<!-- Section 3 -->
				<div class="content section-three">
					<!-- section 3 top wrapper -->
					<div class="centered">
						<h6 class="article-header sub-header">What can you do with that kind of speed?</h6>
						<div class="section-three-article-top">
							<p>Global connections and real-time social media activity rely on instant speed. The sheer volume of data transmission also has other benefits.</p>
						</div>
						<div class="horizontal-line"></div>
					</div>
					<!-- End section three top wrapper -->
					<!-- section three four column wrapper -->
					<div class="centered desktop-content">
						<!-- column one -->
						<div class="four-col">
							<div class="text-center icon">
                            	<i class="fa fa-wifi fa-3x"></i>
							</div>
                            <h6 class="article-header sub-sub-header">Data Savings</h6>
							<p>Connect enabled devices-like your smartphone or tablet-to home Wi-Fi to reduce mobile data usage</p>
						</div>
						<!-- end column one -->
						<!-- column two -->
						<div class="four-col">
							<div class="text-center icon">
                            	<i class="fa fa-cloud-download fa-3x"></i>
							</div>
							<h6 class="article-header sub-sub-header">Symmetrical Speed</h6>
							<p>For some fiber providers, a gig is good for upload and download</p>
						</div>
						<!-- end column two -->
						<!-- column three -->
						<div class="four-col">
							<div class="text-center icon">
                            	<i class="fa fa-users fa-3x"></i>
							</div>
							<h6 class="article-header sub-sub-header">Simultaneous Use</h6>
							<p>Everyone in the house can stream music, movies, and more, at once</p>
						</div>
						<!-- end column three -->
						<!-- column four -->
						<div class="four-col">	
							<div class="text-center icon">
                            	<i class="fa fa-clock-o fa-3x"></i>
							</div>
							<h6 class="article-header sub-sub-header">Heavy Demand</h6>
							<p>A gig is enough to support households connected around the clock</p>
						</div>
						<!-- end column four -->
					</div>
					<!-- end section three four column wrapper -->
					<!-- section three mobile version in an accordion -->
					<div class="accordion centered mobile-content">
						<!-- accordion item one -->
						<div class="accordion-header clear-fix">
							<div class="accordion-control text-center icon">
                            	<i class="fa fa-wifi fa-2x"></i>
							</div>
                            <h6>Data Savings</h6>
						</div>
						<div class="accordion-description float-clear">
							<p>Connect enabled devices-like your smartphone or tablet-to home Wi-Fi to reduce mobile data usage</p>
						</div>
						<!-- end accordion item one -->
						<!-- accordion item two -->
						<div class="accordion-header clear-fix float-clear">
							<div class="accordion-control text-center icon">
                            	<i class="fa fa-cloud-download fa-2x"></i>
							</div>
							<h6>Symmetrical Speed</h6>
						</div>
						<div class="accordion-description clear-fix float-clear">
							<p>For some fiber providers, a gig is good for upload and download</p>
						</div>
						<!-- end accordion item two -->
						<!-- accordion item three -->
						<div class="accordion-header clear-fix float-clear">
							<div class="accordion-control text-center icon">
                            	<i class="fa fa-users fa-2x"></i>
							</div>
							<h6>Simultaneous Use</h6>
						</div>
						<div class="accordion-description float-clear">
							<p>Everyone in the house can stream music, movies, and more, at once</p>
						</div>
						<!-- end accordion item three -->
						<!-- accordion item four -->
						<div class="accordion-header clear-fix float-clear">	
							<div class="accordion-control text-center icon">
                            	<i class="fa fa-clock-o fa-2x"></i>
							</div>
							<h6>Heavy Demand</h6>
						</div>
						<div class="accordion-description float-clear">
							<p>A gig is enough to support households connected around the clock</p>
						</div>
						<!-- end accordion item four -->
					</div>
					<!-- end mobile accordion -->
				</div>
<!-- End section 3 -->
<!--  section 4 -->
				<div class="content section-four">
					<!-- section four table wrapper -->
					<div class="center largest-call-action">
						<!-- section four content wrapper --> 
						<div class="call-wrapper">
							<p class="call-font">HURRY AND CALL US TODAY!</p>
							<!-- section four second row wrapper -->
							<div>
								<div class="circle-wrapper">	
									<img src='images/phone-icon-temp.png' alt='Blue gradient circle with a white old fashioned phone receiver in the middle of the circle.'>
								</div>
								<p class="call-number"><span class="stronger">1800</span>.123.4567</p>
							</div>
							<!-- end section four second row wrapper -->
						</div>
						<!-- end section four content wrapper -->
					</div>
					<!-- end section four table wrapper -->
				</div>
<!-- End Section 4 -->				
<!--  section 5 -->
				<div class="content section-five">
					<div class="centered">
						<h6 class="article-header sub-header">How does fiber match up with cable on these key metrics?</h6>	
					</div>
					<!-- show/hide content content wrapper -->
					<div class="centered">
						<!-- buttons to switch between content -->
						<div class="comparison-buttons">
							<!-- buttons container -->
							<div class="comparison-buttons-wrapper">
								<div class="button-cable">
									<p class=" first-button">Cable</p>
								</div>
								<div class="button-fiber">								
									<p class=" second-button">Fiber</p>
								</div>
							</div>
							<!-- end buttons container -->
						</div>
						<!-- end buttons to switch between content -->
						<!-- comparison content wrapper...uses show/hide.js controlled with the buttons above to switch content -->
						<div class="comparison-content">
							<!-- First section of content -->
							<div class="two-column-wrapper show-first">
								<!-- two columns of equal width -->
								<div class="left-equal">
									<i class="fa fa-bolt fa-5x"></i>
									<h5>Speed</h5>
									<p>Top speeds are decent, but under ideal conditions only. Latency, delays experienced during data processing, is common. Subscribers share a cable connection among hundreds of neighbors. This means your speed during peak times will drop if many users access the network at once.</p>
								</div>
								<div class="right-equal">
									<i class="fa fa-shield fa-5x"></i>
									<h5>Dependability</h5>
									<p>Cable is reliable, unless you live far from your provider office. Your distance from the source will impact the likelihood of diminished speeds.</p>
								</div>
								<!-- end two columns of equal width -->
							</div>
							<!-- end first section of content -->
							<!-- second section of content -->
							<div class="two-column-wrapper show-second">
								<!-- two columns of equal width -->
								<div class="left-equal">
									<i class="fa fa-bolt fa-5x"></i>
									<h5>Speed</h5>
									<p>Fiber-optics networks send data over long distances with maintained speed. A dedicated line means neighboring traffic has no impact on speed. Neighboring use or bandwidth required won't compromise network performance.</p>
								</div>
								<div class="right-equal">
									<i class="fa fa-shield fa-5x"></i>
									<h5>Dependability</h5>
									<p>Fiber Internet isn't reliant on electrical power. The network isn't subject to interference common for cable connections.</p>
								</div>
								<!-- end two columns of equal width -->
							</div>
							<!-- end second section of content -->
						</div>
						<!-- end comparison content wrapper -->
					</div>
					<!-- end show/hide content wrapper -->
				</div>
<!-- content end -->			
				<footer>
					<?php
						include "footer.php";
					?>		
				</footer>
			</div>	
<!-- end page wrapper -->			
		</body>
	</html>