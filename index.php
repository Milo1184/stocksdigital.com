<?php include('includes/head.php'); ?>
	<?php include('includes/header.php'); ?>
	<script type="text/javascript">
		var onloadCallback = function() {
			grecaptcha.render('RecaptchaField2', {'sitekey' : '6LczJhYUAAAAAPCMU683tszFblgljZZyjDzLTgjf', 'callback' : recaptchaCallbackfooter});
		};
	</script>
	
	<main id="home">
		<div class="banner">
			<!--<img src="images/home-page/banner.jpg" alt="Stocks Digital" title="Stocks Digital">-->
			
			<div class="panel" itemscope itemtype="http://schema.org/Organization">
				<!—Don’t display in UI-->
				<p itemprop="name" style="display: none;">StocksDigital</p>
				
				<h1 itemprop="description">Effortlessly Attract, Grow And Engage A Long-term Investor Audience.</h1>
				<p>Your Story, Online, Everywhere, All The Time. Digital Investor Engagement At The Click Of A Button.</p>
                <a href="pricing/" class="icon-pricing icon-rollover">See Pricing</a>
                <a href="#services" class="icon-services icon-rollover">See Services</a>
                
				<!—Don’t display in UI-->
				<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" style="display: none;">
					<span itemprop="streetAddress">530 Little Collins Street</span>, 
					<span itemprop="addressLocality">Melbourne</span>, 
					<span itemprop="addressRegion">Victoria</span>
					<span itemprop="addressCountry">Australia</span>
					<span itemprop="postalCode">3141</span>
				</div>
                
                <!—Don’t display in UI-->
				<span itemscope itemtype="http://schema.org/GeoCoordinates" style="display:none">
					<meta itemprop="latitude" content="-37.816879" />
    				<meta itemprop="longitude" content="144.957096" />
				</span>
				
				<div class="clear"></div>
			</div>
		<!-- div.banner ENDS -->
		</div>
		
		<section class="why-stocks">
			<div class="wrap">
				<div class="panel">
					<h2>The World Of Online Investor Engagement Is Ever Changing</h2>
					<p>Is your company harnessing the full power of the internet to attract, inform and retain a long term investor audience?</p>
					<p>StocksDigital offers a full digital investor engagement strategy to promote your company’s content to over 6 million potential investors.</p>
					<p>StocksDigital is ASIC compliant and authorised under an Australian Financial Services License.</p>
				<!-- div.panel ENDS -->
				</div>
				
				<img src="images/home-page/why-stocks.png" alt="People and Buildings" title="The World Of Online Investor Engagement Is Ever Changing">
				<div class="clear"></div>
			<!-- div.wrap ENDS -->
			</div>
		</section>
		
		<section class="benefits">
			<img src="images/home-page/benefits.jpg" alt="The Benefits" title="The Benefits of Stocks Digital">
			
			<div class="wrap">
			<div class="panel">
				<h2>The Benefits</h2>

				<ul>
					<li>Use one vendor to handle your complete digital strategy.</li>
					<li>Attract and acquire a sustained long-term investor audience.</li>
					<li>Distribute a consistent company message through varied digital content.</li>
					<li>Use advanced digital advertising to drive positive investor action.</li>
					<li>All with minimal effort from the company.</li>
				</ul>
			</div>
			<!-- div.wrap ENDS -->
			</div>
		</section>
		
		<section class="services">
			<div class="wrap">
				<h2 id="services">Our Services</h2>
				
				<div class="three-columns">
					<article itemscope itemtype="http://schema.org/Service" class="column service">
						<a class="icon" itemprop="url" href="<?php echo $root; ?>/services/research-coverage/"><img itemprop="logo" src="images/services/research-development.png" alt="Research Coverage" title="Research Coverage" width="75" height="52"></a>
						<h4 itemprop="name"><a itemprop="url" href="<?php echo $root; ?>/services/research-coverage/">Research Coverage</a></h4>
						<p itemprop="description">Online investor publication where complex concepts about your company are explained clearly in an entertaining, engaging way</p>
					</article>
					
					<article itemscope itemtype="http://schema.org/Service" class="column service">
						<a class="icon" itemprop="url" href="<?php echo $root; ?>/services/investor-news-services/"><img itemprop="logo" alt="Investor News Services" title="Investor News Services" src="images/services/news-service.png" width="57" height="60"></a>
						<h4 itemprop="name"><a itemprop="url" href="<?php echo $root; ?>/services/investor-news-services/">News Service</a></h4>
						<p itemprop="description">Coverage of company on third party news sources</p>
					</article>
					
					<article itemscope itemtype="http://schema.org/Service" class="column service">
						<a itemprop="url" class="icon icon-mb" href="<?php echo $root; ?>/services/marketing-bursts/"><img itemprop="logo" src="images/services/marketing-bursts.png" width="82" height="52" alt="Marketing Bursts" title="Marketing Burst"></a>
						<h4 itemprop="name"><a itemprop="url" href="<?php echo $root; ?>/services/marketing-bursts/">Marketing Bursts</a></h4>
						<p itemprop="description">Immediate promotion of near term potential price catalysts</p>
					</article>
					
					<article itemscope itemtype="http://schema.org/Service" class="column service">
						<a itemprop="url" class="icon icon-cw" href="<?php echo $root; ?>/services/company-website-content-and-management/"><img itemprop="logo" src="images/services/company-website.png" alt="Company Website" title="" width="66" height="53"></a>
						<h4 itemprop="name"><a itemprop="url" href="<?php echo $root; ?>/services/company-website-content-and-management/">Company Website</a></h4>
						<p itemprop="description">Complete transformation and management of your web-site, it’s content and your digital presence</p>
					</article>
					
					<article itemscope itemtype="http://schema.org/Service" class="column service">
						<a itemprop="url" class="icon icon-ml" href="<?php echo $root; ?>/services/investor-mailing-list-database/"><img itemprop="logo" src="images/services/mailing-list.png" alt="" title="" height="38" width="58"></a>
						<h4 itemprop="name"><a itemprop="url" href="<?php echo $root; ?>/services/investor-mailing-list-database/">Mailing Lists</a></h4>
						<p itemprop="description">Management and growth of your company’s email database of investors</p>
					</article>
					
					<article itemscope itemtype="http://schema.org/Service" class="column service">
						<a itemprop="url" class="icon icon-sm" href="<?php echo $root; ?>/services/social-media/"><img itemprop="logo" src="images/services/social-media.png" alt="" title="" height="71" width="71"></a>
						<h4 itemprop="name"><a itemprop="url" href="<?php echo $root; ?>/services/social-media/">Social Media</a></h4>
						<p itemprop="description">Set up and ongoing management of all company social media platforms</p>
					</article>
					
					<article itemscope itemtype="http://schema.org/Service" class="column service">
						<a itemprop="url" class="icon icon-www" href="<?php echo $root; ?>/services/icat-digital-advertising/"><img itemprop="logo" src="images/services/digital-advertising.png" alt="" title="" height="19" width="88"></a>
						<h4 itemprop="name"><a itemprop="url" href="<?php echo $root; ?>/services/icat-digital-advertising/">Digital Advertising</a></h4>
						<p>Searches for and locate potential investors on the internet and constantly advertises your company content to them</p>
					</article>
					
					<article itemscope itemtype="http://schema.org/Service" class="column service">
						<a itemprop="url" class="icon icon-rm" href="<?php echo $root; ?>/services/reporting-metrics/"><img itemprop="logo" src="images/services/reporting-metrics.png" alt="" title="" height="74" width="75"></a>
						<h4 itemprop="name"><a itemprop="url" href="<?php echo $root; ?>/services/reporting-metrics/">Reporting Metrics</a></h4>
						<p itemprop="description">Comprehensive monthly report on service reach and effectiveness</p>
					</article>
				</div>
			<!-- div.wrap ENDS -->
			</div>
		</section>
		
		<section class="featured-resources">
			<div class="wrap">
				<h2>Featured Resources</h2>
				
				<ul class="three-columns">
					<li class="column" itemscope itemtype="http://schema.org/Book">
						<a itemprop="url" href="9-expert-tips-ebook/"><img itemprop="image" src="images/e-books/1.jpg" alt="9 Expert Tips to engage Investors online" title="9 Expert Tips to engage Investors online"></a>
						<a itemprop="name" href="9-expert-tips-ebook/" class="button-1">Get the tips</a>
					</li>
					
					<li class="column" itemscope itemtype="http://schema.org/Book">
						<a itemprop="url" href="prir-cheatsheet/"><img itemprop="image" src="images/e-books/2.jpg" alt="For PR & IR Firms" title="What you (and your clients) need to know about digital investor engagement"></a>
						<a itemprop="name" href="prir-cheatsheet/" class="button-1">Get the guide</a>
					</li>
					
					<li class="column" itemscope itemtype="http://schema.org/Book">
						<a itemprop="url" href="why-use-licenced-operators-for-digital-promotion/"><img itemprop="image" src="images/e-books/3.jpg" alt="12 Questions" title="12 Questions to ask when using digital advertising to attract investors"></a>
						<a itemprop="name" href="why-use-licenced-operators-for-digital-promotion/" class="button-1">Get the ebook</a>
					</li>
				</ul>
			<!-- div.wrap ENDS -->
			</div>
		</section>
		
		<section class="our-clients">
			<div class="wrap">
				<h2>Our Clients</h2>
				
				<ul class="eleven-columns">
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-88-energy.jpg" alt="88 Energy" title="88 Energy">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-boss-resources.jpg" alt="Boss Resources" title="Boss Resources">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-birimian.jpg" alt="Birimian Gold" title="Birimian Gold">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-blackham.jpg" alt="Blackham" title="Blackham">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-archer.jpg" alt="Archer" title="Archer">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-consolidated-zinc.jpg" alt="Consolidated Zinc" title="Consolidated Zinc">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-cradle.jpg" alt="Cradle Resources Ltd" title="Cradle Resources Ltd">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-european-metals.jpg" alt="European Metals" title="European Metals">
					</li>					
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-lithium.jpg" alt="Lithium Australia" title="Lithium Australia">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-orinoco.jpg" alt="Orinoco Gold Ltd" title="Orinoco Gold Ltd">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-altech-chemicals.jpg" alt="Altech Chemicals" title="Altech Chemicals">
					</li>					
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-pacific-american-coal.jpg" alt="Pacific American Coal" title="Pacific American Coal">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-geopacific-resources.jpg" alt="Geopacific Resources" title="Geopacific Resources">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-potash-west.jpg" alt="Potash West" title="Potash West">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-image-resources.jpg" alt="Image Resources" title="Image Resources">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-stgeorge-mining.jpg" alt="Stgeorge Mining" title="Stgeorge Mining">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-nsl-consolidated.jpg" alt="NSL Consolidated" title="NSL Consolidated">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-otto-energy.jpg" alt="Otto Energy" title="Otto Energy">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-mustang-resources.jpg" alt="Mustang Resources" title="Mustang Resources">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-buxton-resources.jpg" alt="Mustang Resources" title="Mustang Resources">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-core-exploration.jpg" alt="Core Exploration" title="Core Exploration">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-newzulu.jpg" alt="Newzulu" title="Newzulu">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-realenergy.jpg" alt="Real Energy" title="Real Energy">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-mrg.jpg" alt="MRG" title="MRG">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-western-mining-network.jpg" alt="Western Mining Network" title="Western Mining Network">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-apollo-minerals.jpg" alt="Apollo Minerals" title="Apollo Minerals">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-hammer-metals.jpg" alt="Hammer Metals" title="Hammer Metals">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-mec-resources.jpg" alt="MEC Resources" title="MEC Resources">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-american-patriot.jpg" alt="American Patriot" title="American Patriot">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-transerv-energy.jpg" alt="Transerv Energy" title="Transerv Energy	">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-austin-exploration.jpg" alt="Austin Exploration" title="Austin Exploration">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-pilotenergy.jpg" alt="Pilot Energy" title="Pilot Energy">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-skyfii.jpg" alt="Skyfii" title="Skyfii">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-segue-resources.jpg" alt="Segue Resources" title="Segue Resources">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-puravida-energy.jpg" alt="Puravida Energy" title="Puravida Energy">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-actinogen.jpg" alt="Actinogen Medical" title="Actinogen Medical">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-rey-resources.jpg" alt="Rey Resources" title="Rey Resources">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-caeneus.jpg" alt="Caeneus Minerals" title="Caeneus Minerals">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-kabuni.jpg" alt="Kabuni" title="Kabuni">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-swala-energy.jpg" alt="Swala Energy" title="Swala Energy">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-gameday-mouthguards.jpg" alt="Gameday Mouthguards" title="Gameday Mouthguards">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-armadale-capital.jpg" alt="Armadale Capital" title="Armadale Capital">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-volt-resources.jpg" alt="Volt Resources" title="Volt Resources">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-kneo-media.jpg" alt="Kneo Media" title="Kneo Media">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-shark-mitigation-systems.jpg" alt="Shark Mitigation Systems" title="Shark Mitigation Systems">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-dimerix.jpg" alt="Dimerix" title="Dimerix">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-prospect-resources.jpg" alt="Prospect Resources" title="Prospect Resources">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-rumble-resources.jpg" alt="Rumble Resources" title="Rumble Resources">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-redmountain-mining.jpg" alt="Redmountain Mining" title="Redmountain Mining">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-kairos-minerals.jpg" alt="Kairos Minerals" title="Kairos Minerals">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-connexion.jpg" alt="Connexion" title="Connexion">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-big-unlimited.jpg" alt="Big Unlimited" title="Big Unlimited">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-taruga-gold.jpg" alt="Taruga Gold" title="Taruga Gold">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-xtv.jpg" alt="xtv" title="xtv	">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-mgc-pharma.jpg" alt="MGC Pharma" title="MGC Pharma">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-mmj-phytotech.jpg" alt="MMJ Phytotech" title="MMJ Phytotech">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-activistic.jpg" alt="Activistic" title="Activistic">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-invigor-group.jpg" alt="Invigor Group" title="Invigor Group">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-stargroup.jpg" alt="Stargroup" title="Stargroup">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-carnavle-resources.jpg" alt="Carnavle Resources" title="Carnavle Resources">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-milestone-sports.jpg" alt="Milestone Sports" title="Milestone Sports">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-navarre-minerals.jpg" alt="Navarre Resources" title="Navarre Resources">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-dyesol.jpg" alt="Dyesol" title="Dyesol">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-tv2u.jpg" alt="tv2u" title="tv2u">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-velpic.jpg" alt="Velpic" title="Velpic">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-weebit.jpg" alt="Weebit" title="Weebit">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-zyber.jpg" alt="Zyber" title="Zyber">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-megastar-millionaire.jpg" alt="Megastar Millionaire" title="Megastar Millionaire">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-xped.jpg" alt="xped" title="xped">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-anaeco.jpg" alt="Anae Co" title="Anae Co">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-applabs.jpg" alt="applabs" title="applabs">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-crowdmobile.jpg" alt="CrowdMobile" title="CrowdMobile">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-esportshero-tournament-platform.jpg" alt="Esportshero Tournament Platform" title="Esportshero Tournament Platform">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-collaborate.jpg" alt="Collaborate" title="Collaborate">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-college-net.jpg" alt="college.net" title="college.net">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-shoply.jpg" alt="Shoply" title="Shoply">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-ardiden.jpg" alt="Ardiden" title="Ardiden">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-antilles.jpg" alt="Antilles Oil & Gas" title="Antilles Oil & Gas">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-datetix.jpg" alt="Datetix" title="Datetix">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-iot-group.jpg" alt="IOT Group" title="IOT Group">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-xtek.jpg" alt="Xtek Ltd" title="Xtek Ltd">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-ypb.jpg" alt="YPB" title="YPB">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-ziptel.jpg" alt="ZipTel" title="ZipTel">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-creso-pharma.jpg" alt="Creso Pharma" title="Creso Pharma">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-cellmid.jpg" alt="Cellmid" title="Cellmid">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-fastbrick.jpg" alt="Fastbrick" title="Fastbrick">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-gruden.jpg" alt="Gruden" title="Gruden">
					</li>
					<li class="column">
						<span></span>
						<img src="images/clientlogo/clientlogo-whiterhino.jpg" alt="Whiterhino" title="Whiterhino">
					</li>
				</ul>
			<!-- div.wrap ENDS -->
			</div>
		</section>
	</main>

	<img style="display:none;" src="http://stocksdigital.force.com/t/sd-lead-score-1/" width="1" height="1">
<?php include('includes/footer.php'); ?>