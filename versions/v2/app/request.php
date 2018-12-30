<?php

	require_once('config.php');
	
	$request = new Request();
	$acceptableQueries = array(
		'submit_request'
	);
	$request->setAcceptableQueries($acceptableQueries);
	$acceptableKeys = array(
		'first_name', 'last_name', 'phone_number', 
		'email_address', 'comments'
	);
	$request->setAcceptableKeys($acceptableKeys);
	$textareas = array('comments');
	$request->setTextareas($textareas);
	$request->validateInput();
	
	if (!ArrayUtil::contains($request->getQuery(), $request->getAcceptableQueries())) {
		Session::kill();
		Application::stop();
		exit;
	}
	
	$request->setArgs($_POST);	
	unset($_POST);
	$args = $request->getArgs();
	
	$error = new Error('REQUEST');
	$success = FALSE;
	
	switch ($request->getQuery()):
	
		case 'submit_request':
			$insert = SQL::insert('requests', array(
				'first_name' => $args['first_name'],
				'last_name' => $args['last_name'],
				'phone_number' => $args['phone_number'],
				'email_address' => $args['email_address'],
				'comments' => $args['comments'],
				'date_requested' => Date::getDateTime(),
				'ip_address' => $_SERVER['REMOTE_ADDR']
			));
			if ($insert) {
				$to = 'brian.wyka@gmail.com';
				$subject = 'wykapedia Web Design Request';
				$message = '<p><b>Name: </b>' . $args['first_name']
						 . Common::SPACE . $args['last_name'] . '</p>'
						 . '<p><b>Phone: </b>' . $args['phone_number'] . '</p>'
						 . '<p><b>Email: </b>' . $args['email_address'] . '</p>'
						 . '<p><b>Comments: </b></p><p>' 
						 . String::outputToEmail($args['comments']) . '</p>';
				$from = Common::DOUBLE_QUOTE . $args['first_name']
					  . Common::SPACE . $args['last_name']
					  . '" <' . $args['email_address'] . '>';
				$email = new Email($to, $subject, $message, $from);
				$success = $email->send();
				if ($success) {
					$successMessage = 'You should receive an email within '
									. '2 business days regarding this request...';
					echo Response::alertSuccess('Request', $successMessage);
				} else {
					echo Response::alertFailure('Please try again...');
					$error->setMessage('Request could not be emailed...');
				}
			} else {				
				$error->setMessage('Request could not be processed...');
			}
			break;
	
	endswitch;
	
	if (!$success) {
		echo Response::alertFailure('Please try again...');
		$error->report();
	}
	
?>