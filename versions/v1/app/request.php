<?php

	require_once('config.php');
	
	$request = new Request();
	$acceptableQueries = array(
		'submit_request'
	);
	$request->setAcceptableQueries($acceptableQueries);
	$acceptableKeys = array(
		'first_name', 'last_name', 
		'email_address', 'comments'
	);
	$request->setAcceptableKeys($acceptableKeys);
	$textareas = array('comments');
	$request->setTextareas($textareas);
	$request->validateInput();
	
	if (!in_array($request->getQuery(), $request->getAcceptableQueries())) {
		exit;
	}
	
	$request->setArgs($_POST);	
	unset($_POST);
	$args = $request->getArgs();
	
	switch ($request->getQuery()):
	
		case 'submit_request':
			$success = SQL::insert('request', array(
				'first_name' => $args['first_name'],
				'last_name' => $args['last_name'],
				'email_address' => $args['email_address'],
				'comments' => $args['comments'],
				'date' => Date::getDateTime(),
				'ip_address' => $_SERVER['REMOTE_ADDR']
			));
			if ($success) {
				$to = '"Brian Wyka" <brian.wyka@gmail.com>';
				$subject = 'wykapedia Web Design Request';
				$message = '<p><b>Name: </b>' . $args['first_name'] . Common::SPACE . $args['last_name'] . '</p>'
						 . '<p><b>Email: </b>' . $args['email_address'] . '</p>'
						 . '<p><b>Comments: </b></p><p>' . nl2br($args['comments']) . '</p>';
				$from = Common::DOUBLE_QUOTE . $args['first_name'] . Common::SPACE . $args['last_name'] . '" <' . $args['email_address'] . '>';
				$email = new Email($to, $subject, $message, $from);
				$email->send();
				echo Response::encodeJs('Page.requestResponse()');
			} else {
				echo Response::alertFailure('Please try again...');
			}
			break;
	
	endswitch;
	
?>