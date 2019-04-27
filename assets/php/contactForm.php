<?php

	// // Contact
	// $to = 'ryan.noble82@gmail.com';
	// // $subject = 'Subject here...';

	// if(isset($_POST['c_name']) && isset($_POST['c_email']) && isset($_POST['c_subject']) && isset($_POST['c_message'])){
	// 	$name    = $_POST['c_name'];
	// 	$from    = $_POST['c_email'];
	// 	$subject = $_POST['c_subject'];
	// 	$message = $_POST['c_message'];


	// 	if (mail($to, $subject, $message, $from)) {
	// 		$result = array(
	// 			'message' => 'Thanks for contacting me!',
	// 			'sendstatus' => 1
	// 			);
	// 		echo json_encode($result);
	// 	} else {
	// 		$result = array(
	// 			'message' => 'Sorry, something is wrong',
	// 			'sendstatus' => 1
	// 			);
	// 		echo json_encode($result);
	// 	}
	// }

	// Contact
	$to = 'ryan.noble82@gmail.com';
	// $subject = 'Subject here...';

	// if(isset($_POST['c_name']) && isset($_POST['c_email']) && isset($_POST['c_subject']) && isset($_POST['c_message'])){
		$name    = $_POST['c_name'];
		$from    = $_POST['c_email'];
		$subject = $_POST['c_subject'];
		$message = $_POST['c_message'];
		
		mail($to, $subject, $message, $from);
		// if (mail($to, $subject, $message, $from)) {
		// 	$result = array(
		// 		'message' => 'Thanks for contacting me!',
		// 		'sendstatus' => 1
		// 		);
		// 	echo json_encode($result);
		// } else {
		// 	$result = array(
		// 		'message' => 'Sorry, something is wrong',
		// 		'sendstatus' => 1
		// 		);
		// 	echo json_encode($result);
		// }
	// }
?>