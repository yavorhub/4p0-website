<?php
	function sendMail()
	{
		if (isset($_POST['submit'])) {
			$to = "a.steinmetz@4p0.ch"; // this is your Email address
			$from = $_POST['email']; // this is the sender's Email address
			$name = $_POST['name'];
			$subject = "FourP0 website ";
			$subject2 = "Copy of your form submission - FourP0 website ";
			$message = "Received message from FourP0 website!\n\nname: " . $name . "\n\ncompany: " . "\n\nmessage: " . $_POST['message'];
			$message2 = "Hello, your message was sent to FourP0 website!\n\nname: " . $name . "\n\nmessage: " . $_POST['message'];
			
			$headers = "From: " . $from;
			$headers2 = "From: " . $to;
			mail($to, $subject, $message, $headers);
			mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
			return 0;
		}
	}
	$result = sendMail();
	echo $result;
?>