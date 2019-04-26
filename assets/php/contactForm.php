<?php

	// Contact
	$to = 'ryan.noble82@gmail.com';
	// $subject = 'Subject here...';

	if(isset($_POST['c_name']) && isset($_POST['c_email']) && isset($_POST['c_subject']) && isset($_POST['c_message'])){
		$name    = $_POST['c_name'];
		$from    = $_POST['c_email'];
		$subject = $_POST['c_subject'];
		$message = $_POST['c_message'];
		$headers = 'From: Jack Sparrow <jsparrow@blackpearl.com>' . PHP_EOL .
    		'Reply-To: Jack Sparrow <jsparrow@blackpearl.com>' . PHP_EOL .
			'X-Mailer: PHP/' . phpversion();
		
		// $headers = "MIME-Version: 1.0" . "\r\n"; 
		// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
		// $headers .= 'From: testuser@example.com' . "\r\n"; 
		// $headers .= 'Return-Path: testuser@example.com' . "\r\n"; 

		if (mail($to, $subject, $message, $from, $headers)) {
		// if (mail($to, $subject, $message, $from, $headers, "-f testuser@example.com")) {
			$result = array(
				'message' => 'Thanks for contacting me!',
				'sendstatus' => 1
				);
			echo json_encode($result);
		} else {
			$result = array(
				'message' => 'Sorry, something is wrong',
				'sendstatus' => 1
				);
			echo json_encode($result);
		}
	}

?>