<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$name = $_POST['name'];
	    $email = $_POST['email'];
	    $message = $_POST['message'];
		$header = 'From: messageSender@gmail.com';	
		$body = "From: $name\nEmail: $email\n\nMessage:\n $message";
		
		$to = 'messageReciever@gmail.com';
		$subject = 'this is the subject in your email';
	
		//SENDS THE MESSAGE
		if ( mail($to, $subject, $body, $header) )
		{
			echo '<script type="text/javascript">alert("Your message has been sent!");</script>';
			echo "<script>setTimeout(\"location.href = 'http://www.github.com/natekong';\",1500);</script>";
		}
		else
		{
			echo '<script type="text/javascript">alert("Oops, something went wrong, please try again");</script>';
			echo "<script>setTimeout(\"location.href = 'http://www.google.com';\",1500);</script>";
		}
	}
?>