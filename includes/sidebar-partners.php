			<aside>
				<p class="heading-4">Partners</p>
				<?php
				// Get the current folder to makr menu items as complete
				//$dir = $_SERVER['SCRIPT_NAME']; // Get Full path to file
				//$folder = parse_url($dir, PHP_URL_PATH); // Parse the value
				//$arr = explode("/",$folder); // Explode full path into fragmented folders
				//$ct = count($arr); // Get number of items in the array
				//$cfld = $arr[$ct-2]; // Isolate the required folder name
				?>

				<ul class="side-nav">
					<li><a<?php if ( $cfld == 'prir-firms' ): ?> class="active"<?php endif; ?> href="<?php echo $root; ?>/partners/prir-firms/">PR/IR Firms</a></li>
					<li><a<?php if ( $cfld == 'stockbrokers' ): ?> class="active"<?php endif; ?> href="<?php echo $root; ?>/partners/stockbrokers/">StockBrokers</a></li>
				</ul>
			</aside>		