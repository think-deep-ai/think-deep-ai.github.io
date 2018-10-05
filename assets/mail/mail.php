<?php
	$fname = $_POST['fname'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$recipient = "info@themehappy.com";
	$mailheader = "Name: $fname \r\n Email: $email \r\n  Subject: $subject \r\n Message: $message \r\n";
	$formcontent=" From: $fname \n";
	mail($recipient, $formcontent, $mailheader) or die("Error!");
	header("location: thank-you.html");
?>