<?php
	
	function __autoload($className) {
		if (!class_exists($className)) {
			$docRoot = $_SERVER['DOCUMENT_ROOT'] . '/';
			$classPath = $docRoot . '__framework__/v1/app/lib/' . $className . '.php';
			if (file_exists($classPath)) {
				require_once($classPath);
			}
		}
	}
	
	require_once('lib/Application.php');
	require_once('mobile_browser_detect.php');
	
	Session::init();
	
	Application::start();
	$_CONFIG = Session::getConfig();
	
	MySQL::init(
		$_CONFIG->getMySqlHost(), $_CONFIG->getMySqlUser(), 
		$_CONFIG->getMySqlPass(), $_CONFIG->getMySqlDb()
	);
	
	$_PAGES = array(
		'home' => 'Welcome!', 
		'services' => 'What you will get', 
		'examples' => 'Behind the scenes', 
		'portfolio' => 'Take a look at these', 
		'contact' => 'Let\'s do business'
	);

?>