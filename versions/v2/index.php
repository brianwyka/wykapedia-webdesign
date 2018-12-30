<?php require_once('app/config.php'); ?>
<?php if (MOBILE_BROWSER): ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php else: ?>
<!DOCTYPE html>
<html>
<?php endif; ?>
	
	<!--Begin HEAD of document-->
	<head>
	
		<!--Begin Metadata-->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta http-equiv="keywords" content="<?php echo ArrayUtil::toString($_CONFIG->getMetaKeywords()); ?>" />
		<meta http-equiv="description" content="<?php echo $_CONFIG->getMetaDescription(); ?>" />
		<!--End Metadata-->
	
		<!--Document Title-->
		<title><?php echo $_CONFIG->getSiteTitle(); ?></title>
		
		<!--Document Base-->
		<base href="http://www.wykapedia.org/webdesign/" />
		
		<!--Document Favicon-->
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
		
		<!--Begin StyleSheet Links-->
		<link rel="stylesheet" type="text/css" href="/__framework__/v2/pub/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="/__framework__/v2/pub/css/default.css" />
		<link rel="stylesheet" type="text/css" href="/__framework__/v1/pub/css/form.css" />
		<link rel="stylesheet" type="text/css" href="pub/css/global.css" />
		<?php if (MOBILE_BROWSER): ?>
		<link rel="stylesheet" type="text/css" href="pub/css/mobile.css" />
		<?php endif; ?>
		<!--[if IE 8]>
		<link rel="stylesheet" type="text/css" href="/__framework__/v1/pub/css/ie_fix/8.css" />
		<link rel="stylesheet" type="text/css" href="pub/css/ie_fix/8.css" />
		<![endif]-->
		<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="/__framework__/v1/pub/css/ie_fix/7.css" />
		<link rel="stylesheet" type="text/css" href="pub/css/ie_fix/7.css" />
		<![endif]-->
		<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="/__framework__/v1/pub/css/ie_fix/6.css" />
		<link rel="stylesheet" type="text/css" href="pub/css/ie_fix/6.css" />
		<![endif]-->
		<!--End StyleSheet Links-->
		
		<!--Begin Script Includes-->
		<script type="text/javascript" src="/__framework__/v2/pub/js/thirdparty/jquery.min.js"></script>
		<script type="text/javascript" src="/__framework__/v2/pub/js/thirdparty/plugins/jquery.hashchange.js"></script>
		<script type="text/javascript" src="/__framework__/v2/pub/js/thirdparty/plugins/jquery.cycle.js"></script>
		<?php /*<script type="text/javascript" src="http://apps.lls.org/Apps360//swfobject.js"></script>*/ ?>
		<script type="text/javascript" src="pub/js/common.js"></script>
		<!--End Script Includes-->
	
	</head>
	<!--End HEAD of document-->
	
	<!--Begin BODY of document-->
	<body>
	
		<div id="canvas"></div>
	
		<div id="outter-page-wrap">
			<div id="outter-page">			
				<div id="inner-page-wrap">
					<div id="inner-page">
					
						<div id="header-wrap">
							<div id="header">
								<img src="pub/images/logo.png" alt="wykaPedia" title="wykaPedia" />
							</div>
						</div>
						
                        <?php /*
						<div id="tnt-lls-wrap">
							<div id="tnt-lls">
								<div class="note">
									All proceeds until I reach my fundraising goal will go to LLS !!!
								</div>
								<div class="fundraising">
								<?php
									libxml_use_internal_errors(true);
									$fundraisingPage = file_get_contents('http://pages.teamintraining.org/ct/Yosemit14/wykaman');
									$dom = new DOMDocument();
									$dom->loadHTML($fundraisingPage);
									$xpath = new DOMXpath($dom);
									$raised = $xpath->query('//span[@class="raisedVal"]');
									$goal = $xpath->query('//span[@class="goalVal"]');
									if ($raised->length == 1 && $goal->length == 1) {
										echo $raised->item(0)->nodeValue . ' / ' . $goal->item(0)->nodeValue;
									}
								?>
								</div>
								<div class="donate-now">
									<a target="_blank" href="https://donate.lls.org/tnt/donate?programGroupName=TNT&fundraiserPageID=1724121&participantFirstName=Brian&participantLastName=Wyka&displayName=Brian%20Wyka&fundraiserPageURL=http://pages.teamintraining.org/ct/Yosemit14/wykaman">
										Donate Now &raquo;
									</a>
								</div>
							</div>
						</div>*/ ?>
						
						<div id="splash-wrap">
							<div id="splash">
								<?php foreach ($_PAGES as $key => $value): ?>
								<div>
									<p><?php echo ucfirst($value); ?></p>
								</div>
								<?php endforeach; ?>
								<div>
									<p>Oops!</p>
								</div>
							</div>
						</div>
						
						<div id="nav-wrap">
							<div id="nav">
								<ul>
									<?php foreach ($_PAGES as $key => $value): ?>
									<li>
										<a href="#<?php echo $key; ?>" id="nav-<?php echo $key; ?>" 
											class="nav-link"><?php echo ucfirst($key); ?></a>
									</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
						
						<div id="content-wrap">
							<div id="content">
								<!-- CONTENT LOADED BY AJAX -->
								<!--[if lt IE 6]>
								<div class="panel">
									<h2>Your browser is no longer supported!!!</h2>
									<p>
										Download the latest version of either:
									</p>
									<div class="sub-panel">
										<div class="browser-icon-wrap">
											<div class="browser-icon">
												<a href="http://www.google.com/chrome/intl/en/make/download.html?brand=CHKZ">
													<img src="pub/images/browsers/google_chrome.jpg" 
														alt="Google Chrome" title="Google Chrome" />
												</a>
											</div>
										</div>
										<div class="browser-icon-wrap">
											<div class="browser-icon">
												<a href="http://www.mozilla.com/en-US/firefox/new/">
													<img src="pub/images/browsers/mozilla_firefox.jpg" 
														alt="Mozilla Firefox" title="Mozilla Firefox" />
												</a>
											</div>
										</div>
										<div class="browser-icon-wrap">
											<div class="browser-icon">
												<a href="http://windows.microsoft.com/en-US/internet-explorer/downloads/ie">
													<img src="pub/images/browsers/microsoft_internet_explorer.jpg" 
														alt="MS Internet Explorer" title="MS Internet Explorer" />
												</a>
											</div>
										</div>
										<div class="browser-icon-wrap">
											<div class="browser-icon">
												<a href="http://www.apple.com/safari/download/">
													<img src="pub/images/browsers/apple_safari.jpg" 
														alt="Apple Safari" title="Apple Safari" />
												</a>
											</div>
										</div>
										<div class="clear clear-left"></div>
									</div>
								</div>								
								<![endif]-->
							</div>
						</div>
						
						<div id="footer-wrap">
							<div id="footer">
								its da only way!<br />
								&copy; 2009-<?php echo Date::format(Date::getDateTime(), 'Y'); ?> 
								wykaPedia Webdesign &amp; Development
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		
		<iframe id="hidden-iframe" name="hidden-iframe" width="0" height="0" frameborder="0" scrolling="no"></iframe>
	
	</body>
	<!--End BODY of document-->	
	
</html>