<?php
	require_once('app/config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<!--START DOCUMENT HEAD-->
	<head>

		<title><?php echo $_CONFIG->getSiteTitle(); ?></title>

		<!--START META TAGS-->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta http-equiv="keywords" content="<?php echo implode(',', $_CONFIG->getMetaKeywords()); ?>" />
		<meta http-equiv="description" content="<?php echo $_CONFIG->getMetaDescription(); ?>" />
		<!--END META TAGS-->

		<!--START CSS SHEET AND FAVICON LINKS-->
		<link rel="stylesheet" type="text/css" href="/__framework__/v1/pub/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="/__framework__/v1/pub/css/global.css" />	
		<link rel="stylesheet" type="text/css" href="pub/css/global.css" />
		<!--[if IE 8]><link rel="stylesheet" type="text/css" href="/__framework__/v1/pub/css/ie_fix/8.css" /><![endif]-->
		<!--[if IE 7]><link rel="stylesheet" type="text/css" href="/__framework__/v1/pub/css/ie_fix/7.css" /><![endif]-->
		<!--[if IE 6]><link rel="stylesheet" type="text/css" href="/__framework__/v1/pub/css/ie_fix/6.css" /><![endif]-->
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
		<!--END CSS SHEET AND FAVICON LINKS-->

		<!--START SCRIPT INCLUDES-->
		<script type="text/javascript" src="/__framework__/v1/pub/js/framework.js"></script>
		<script type="text/javascript" src="pub/js/common.js"></script>
		<!--END SCRIPT INCLUDES-->

	</head>
	<!--END DOCUMENT HEAD-->

	<!--START DOCUMENT BODY-->
	<body>
	
		<div id="canvas"></div>

		<div id="page_wrap">
			<div id="page">

				<div id="header_wrap">
					<div id="header">
						<ul id="menu">
							<li><a href="#home" id="menu_home" class="on">Home</a></li>
							<li><a href="#examples" id="menu_examples">Examples</a></li>
							<li><a href="#portfolio" id="menu_portfolio">Portfolio</a></li>
							<li><a href="#request" id="menu_request">Request</a></li>
							<li><a href="#contact" id="menu_contact">Contact</a></li>
							<li><a href="pub/images/wallpaper.jpg">Wallpaper</a></li>
						</ul>
					</div>
				</div>
				
				<div id="feature_wrap">                
					<div id="feature">
						<div class="menu">
							<ul id="sub_menu_home" class="on">
								<li><a href="#home/about" id="menu_home_about">about</a></li>
								<li><a href="#home/services" id="menu_home_services">services</a></li>
							</ul>
							<ul id="sub_menu_examples" class="off">
								<li><a href="#examples/html" id="menu_examples_html">html</a></li>
								<li><a href="#examples/css" id="menu_examples_css">css</a></li>
								<li><a href="#examples/javascript" id="menu_examples_javascript">javascript</a></li>
								<li><a href="#examples/php" id="menu_examples_php">php</a></li>
							</ul>
							<ul id="sub_menu_portfolio" class="off">
								<li><a href="#portfolio/clients" id="menu_portfolio_clients">clients</a></li>
								<li><a href="#portfolio/personal_pages" id="menu_portfolio_personal_pages">personal pages</a></li>
							</ul>
							<ul id="sub_menu_request" class="off">
								<li><a href="#request/packages" id="menu_request_packages">packages</a></li>
								<li><a href="#request/submit" id="menu_request_submit">submit</a></li>
							</ul>
							<ul id="sub_menu_contact" class="off">
								<li><a href="#contact/info" id="menu_contact_info">info</a></li>
							</ul>
						</div>
						<div id="audio_button">
							<a href="pub/audio/wykaPedia.mp3" target="hidden">
								<img src="pub/images/audio_button.png" alt="Play" title="Play" />
							</a>
							<iframe id="hidden" name="hidden" frameborder="0" width="0" height="0" scrolling="no"></iframe>
						</div>
					</div>                
				</div>

				<div id="content_wrap">
					<div id="content" class="home">
					
					</div>
				</div>
				
				<div id="w3">
					<a href="http://validator.w3.org/check?uri=referer" target="_blank">
						<img src="http://www.w3.org/Icons/valid-xhtml10-blue" alt="Valid XHTML 1.0 Transitional" title="Valid XHTML 1.0 Transitional" /> 
					</a>
					<a href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fwww.wykapedia.org%2Fwebdesign%2Fversions%2Fv1%2Fpub%2Fcss%2Fglobal.css" target="_blank">
						<img src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS" title="Valid CSS" /> 
					</a>
				</div>

				<div id="footer_wrap">
					<div id="footer">
						
					</div>
				</div>

			</div>
		</div>

	</body>
	<!--END DOCUMENT BODY-->

</html>
