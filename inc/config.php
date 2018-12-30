<?php
	
	$path = $_GET['path'];
	$path = trim($path);
	$path = str_replace('-', '_', $path);
	$path = strtolower($path);
	if (substr($path, -1) === "/") {
		$path = substr($path, 0, (strlen($path) - 1));
	}
	
	if ($path == "") {
		$path = "home";
	}
	
	$_URL = "http://$_SERVER[HTTP_HOST]/";
	$_PATH = $path;
	
	if (strpos($_PATH, '/') > 0) {
		$_PAGE = substr($_PATH, strrpos($_PATH, '/') + 1);
	} else {
		$_PAGE = $_PATH;
	}
	
	if ($_PATH == 'home') {
		$_CANONICAL = $_URL;
	} else {
		$_CANONICAL = $_URL . $_PATH;
		if ((substr($_CANONICAL, -1) != "/")) {
			$_CANONICAL .= "/";
		}
	}
	
	$_TITLES = array(
		'home' => 'Home',
		'services' => 'Services',
		'portfolio' => 'Portfolio',
		'contact' => 'Contact Us',
		'tnt' => 'Proceeds - LLS'
	);
	
	$_DESCRIPTIONS = array(
		'home' => 'My name is Brian Wyka, and I am the founder of wykaPedia Web Design.  wykaPedia is a freelance web design and development service',
		'services' => 'wykaPedia\'s packages include, but are not limited to, design, redesign, and development.',
		'portfolio' => 'Here are some examples of work that we have done for our clients',
		'contact' => 'Get in touch with us to talk about your next website',
		'tnt' => 'All proceeds are currently being donated to Leukemia &amp; Lymphoma society through a program called Team in Training'
	);
	
	$_TITLE = $_TITLES[$_PAGE];
	$_KEYWORDS = 'wykapedia,wykapedia web,wykapedia web design,web design,brian wyka,brian wykapedia,wykapedia web development,wykapedia design';
	$_DESCRIPTION = $_DESCRIPTIONS[$_PAGE];
	
	unset($_GET['path']);
	
?>