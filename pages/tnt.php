<?php
    $_current = array(
        'url' => 'http://pages.teamintraining.org/ma/mtklmjr16/BWyka',
        'title' => 'Mt Kilimanjaro',
        'year' => '2017',
        'combined_years' => '2011, 2012, 2014, 2015, and 2016'
    );
?>


<div class="contain-to-grid banner-contain-to-grid tnt-banner">
    <div class="row">
        <div class="large-4 medium-4 small-12 columns">
            <img data-interchange="[/img/logo_purple.png, (default)], [/img/logo_purple.png, (small)], [/img/logo_purple, (medium)], [/img/logo_purple.png, (large)]"
                class="img-center" src="/img/logo_purple.png" alt="wykaPedia Web Design" />
            <noscript><img class="img-center" src="/img/logo.png" alt="wykaPedia Web Design" /></noscript>
        </div>
        <div class="large-8 medium-8 small-12 columns banner-text small-only-text-center">
            <h2>wykaPedia <span style="color:#563965">go</span><span style="color:#764E8C">es</span> <strong class="theme">PURPLE</strong></h2>
            <h4 class="subheader">In Support of Leukemia &amp; Lymphoma Society</h4>
            <p>
            	<strong>Fundraising Page:</strong>
                <a class="theme" href="<?php echo $_current['url']; ?>"><?php echo $_current['title']; ?> <?php echo $_current['year']; ?></a>
            </p>
        </div>
    </div>
</div>

<div class="contain-to-grid content-contain-to-grid">

	<div class="row">
    	<div class="large-8 medium-8 small-12 small-only-text-center columns">
	        <h2>
            	We are proud to announce that all proceeds will be donated to 
                Leukemia &amp; Lymphoma Society through a program called 
                <span class="theme">Team in Training</span>
            </h2>
        </div>
        <div class="large-4 medium-4 small-12 columns">
        	<a href="http://www.teamintraining.org">
                <img src="http://www.teamintraining.org/assets/images/logo_tnt_white_ko.png" 
                    class="tnt img-center" alt="Team in Training" />
            </a>
        </div>
    </div>
	
    <div class="row hr-dotted"></div>
    
	<div class="row">
    	<div class="large-12 small-only-text-center columns">
        	<p>Help us reach our goal for the <?php echo $_current['year']; ?> season! We would ultimately like to contibute 
            our <strong>combined total</strong> from <?php echo $_current['combined_years']; ?>!</p>
        </div>
        <div class="large-12 small-only-text-center columns">
            
            <?php
			
				function getValue($xpath, $type) {
					$nodes = $xpath->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' $type ')]");
					if ($nodes->length == 1) {
						return $nodes->item(0)->nodeValue;
					}
					return '$0.00';
				}
				
				function getFloat($value) {
					$value = str_replace(",", "", substr($value, 1));
					$floatValue = floatval($value);
					return $floatValue;
				}
				
				$html = file_get_contents($_current['url']);
				$fundraisingPage = new DOMDocument();
				$fundraisingPage->loadHTML($html);
				$xpath = new DomXPath($fundraisingPage);
				$raisedVal = getValue($xpath, 'raisedVal');
				$goalVal = getValue($xpath, 'goalVal');
                //$raisedVal = '$0.00';
                //$goalVal = '$3,800.00';

				$progress = ((getFloat($raisedVal) / getFloat($goalVal)) * 100);
                //$progress = 0;
                if ($progress > 100) {
                    $progress = 100;
                }
				
			?>
            
            <div class="panel">
	            <h3><?php echo $_current['title']; ?> <small><?php echo $_current['year']; ?> Fundraising Progress</small></h3>
                <h2 class="theme"><?php echo $raisedVal; ?> / <?php echo $goalVal; ?></h2>
                <div class="progress">
                    <span class="meter theme" style="width: <?php echo $progress; ?>%"></span>
                </div>
            </div>
            
            <h4 class="subheader">Where do I donate, you might ask?</h4>
            <a href="<?php echo $_current['url']; ?>" class="button expand">RIGHT HERE</a>
            
        </div>
    </div>

    <div class="row hr-dotted"></div>

	<div class="row">
    	<div class="large-12 small-only-text-center columns">
        	<h3>Past Contributions</h3>
        </div>
    </div>
    
    <div class="row">
		<div class="large-4 medium-4 small-12 columns">
        	<div class="panel">
                <h3>Grand Canyon <small>2016</small></h3>
                <h2 class="theme">$1,200.00</h2>
                <a href="http://pages.teamintraining.org/ctwhv/CanyonS16/bwykaz" 
                	class="button expand" target="_blank">Fundraising Page</a>
            </div>
        </div>
    	<div class="large-4 medium-4 small-12 columns">
        	<div class="panel">
                <h3>Yosemite <small>2015</small></h3>
                <h2 class="theme">$1,000.00</h2>
                <a href="http://pages.teamintraining.org/ctwhv/Yosemit15/brianwyka" 
                	class="button expand" target="_blank">Fundraising Page</a>
			</div>
        </div>
    	<div class="large-4 medium-4 small-12 columns">
        	<div class="panel">
                <h3>Yosemite <small>2014</small></h3>
                <h2 class="theme">$1,200.00</h2>
                <a href="http://pages.teamintraining.org/ct/Yosemit14/wykaman" 
                	class="button expand" target="_blank">Fundraising Page</a>
			</div>
        </div>
    </div>
    <div class="row">
		<div class="large-4 medium-4 small-12 columns">
        	<div class="panel">
                <h3>Zion <small>2012</small></h3>
                <h2 class="theme">$1,800.00</h2>
                <a href="http://pages.teamintraining.org/vtnt/zionpark12/brianwyka" 
                	class="button expand" target="_blank">Fundraising Page</a>
            </div>
        </div>
    	<div class="large-4 medium-4 small-12 columns">
        	<div class="panel">
       			<h3>Grand Canyon <small>2011</small></h3>
                <h2 class="theme">$200.00</h2>
            	<a href="http://pages.teamintraining.org/ct/CanyonS11/bwyka1" 
                	class="button expand" target="_blank">Fundraising Page</a>
			</div>
        </div>
        <div class="large-4 medium-4 small-12 columns">
            
        </div>
    </div>

</div>