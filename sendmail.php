<?php
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$message = $_REQUEST['message'];

	mail("mat.longinow@outlook.com", "MyProgrammingJourney Form Results", $message, "From: $name at $email");
	// header("Location: http://www.myprogrammingjourney.com/thankyou.html");
?>
