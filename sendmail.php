<?php
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$message = $_REQUEST['message'];

	mail("mat.longinow@outlook.com", "MyProgrammingJourney Form Results", "The following message was sent from $name: $message", "From: $name at $email");
	mail($email, "Thanks for your message!", "Hi $name,\r\n\r\nThank you for reaching out to me. I will review your message and respond shortly.\r\n\r\nHave a great day!\r\n\r\nMat Longinow\r\nCoder Extraordinaire");
	header("Location: http://www.myprogrammingjourney.com/thankyou.html");
?>
