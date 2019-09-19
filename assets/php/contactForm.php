<?php

	// Contact
	$to = 'ryan.noble82@gmail.com';

	if(isset($_POST['c_name']) && isset($_POST['c_email']) && isset($_POST['c_subject']) && isset($_POST['c_message'])){
		$name 		= $_POST['c_name'];
		$from    	= $_POST['c_email'];

		$message	= "
					<html>
					<head>
					<title>HTML EMAIL</title>
					</head>
					<body>
					<h4>The following message was sent from the Contact Form on your Portfolio Website:</h4>
					<p>
					";
		$message   .= $_POST['c_message'];
		$message   .= "
					</p>
					<br>
					<p><u>Customer Name: </u> {$name}<br>
					*** Hitting <i>'reply'</i> will send a reply email to the following address: {$from}</p>
					</body>
					</html>
					";

		$subject	= "Website Inquiry - '"; 
		$subject   .= $_POST['c_subject'];
		$subject   .= "'";

		$headers 	= "MIME-Version: 1.0" . "\r\n";
		$headers   .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers   .= "From: {$name} <no-reply@ryanmnoble.com>" . "\r\n";
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