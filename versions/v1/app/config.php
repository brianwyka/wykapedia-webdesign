<?php

	$docRoot = $_SERVER['DOCUMENT_ROOT'];
	require_once($docRoot . '/__framework__/v1/app/lib/Config.php');
	$_CONFIG = new Config();
	require_once('lib/Application.php');
	Application::start($_CONFIG);
	require_once($docRoot . '/__framework__/v1/app/lib/Common.php');
	require_once($docRoot . '/__framework__/v1/app/lib/Date.php');
	require_once($docRoot . '/__framework__/v1/app/lib/Email.php');
	require_once($docRoot . '/__framework__/v1/app/lib/MySQL.php');
	require_once($docRoot . '/__framework__/v1/app/lib/SQL.php');
	require_once($docRoot . '/__framework__/v1/app/lib/Request.php');
	require_once($docRoot . '/__framework__/v1/app/lib/Response.php');
	require_once($docRoot . '/__framework__/v1/app/lib/String.php');
	
	MySQL::init($_CONFIG->getMySqlHost(), $_CONFIG->getMySqlUser(), $_CONFIG->getMySqlPass(), $_CONFIG->getMySqlDb());

?>