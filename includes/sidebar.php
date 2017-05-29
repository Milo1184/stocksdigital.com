			<aside>
				<p class="heading-4">Services</p>
				<?php
				// Get the current folder to makr menu items as complete
				$dir = $_SERVER['SCRIPT_NAME']; // Get Full path to file
				$folder = parse_url($dir, PHP_URL_PATH); // Parse the value
				$arr = explode("/",$folder); // Explode full path into fragmented folders
				$ct = count($arr); // Get number of items in the array
				$cfld = $arr[$ct-2]; // Isolate the required folder name
				?>

				<ul class="side-nav">
					<li><a<?php if ( $cfld == 'research-coverage' ): ?> class="active"<?php endif; ?> href="<?php echo $root; ?>/services/research-coverage/">Research Coverage</a></li>
					<li><a<?php if ( $cfld == 'investor-news-services' ): ?> class="active"<?php endif; ?> href="<?php echo $root; ?>/services/investor-news-services/">Investor News Services</a></li>
					<li><a<?php if ( $cfld == 'marketing-bursts' ): ?> class="active"<?php endif; ?> href="<?php echo $root; ?>/services/marketing-bursts/">Marketing Bursts</a></li>
					<li><a<?php if ( $cfld == 'company-website-content-and-management' ): ?> class="active"<?php endif; ?> href="<?php echo $root; ?>/services/company-website-content-and-management/">Company Website</a></li>
					<li><a<?php if ( $cfld == 'investor-mailing-list-database' ): ?> class="active"<?php endif; ?> href="<?php echo $root; ?>/services/investor-mailing-list-database/">Investor Mailing List</a></li>
					<li><a<?php if ( $cfld == 'social-media' ): ?> class="active"<?php endif; ?> href="<?php echo $root; ?>/services/social-media/">Social Media</a></li>
					<li><a<?php if ( $cfld == 'icat-digital-advertising' ): ?> class="active"<?php endif; ?> href="<?php echo $root; ?>/services/icat-digital-advertising/">Digital Advertising</a></li>
					<li><a<?php if ( $cfld == 'reporting-metrics' ): ?> class="active"<?php endif; ?> href="<?php echo $root; ?>/services/reporting-metrics/">Reporting &amp; Metrics</a></li>
				</ul>
			</aside>