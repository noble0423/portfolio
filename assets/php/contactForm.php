<?php

	// Contact
	$to = 'ryan.noble82@gmail.com';

	if(isset($_POST['c_name']) && isset($_POST['c_email']) && isset($_POST['c_subject']) && isset($_POST['c_message'])){
		$name 		= $_POST['c_name'];
		$from    	= $_POST['c_email'];
		$message 	= $_POST['c_message'];
		$message   .= "\r\n" . "\r\n" . "Client's email address: {$from}";
		$subject	= "Website Inquiry - '"; 
		$subject   .= $_POST['c_subject'];
		$subject   .= "'";
		$headers	= "From: {$name} <no-reply@ryanmnoble.com>" . "\r\n";
		$headers   .= "Reply-To: {$from}" . "\r\n";


		if (mail($to, $subject, $message, $headers)) {
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