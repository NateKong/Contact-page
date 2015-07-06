<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$name = $_POST['name'];
	    $email = $_POST['email'];
	    $message = $_POST['message'];
		$header = 'From: natewkong@gmail.com';	
		$body = "From: $name\nEmail: $email\n\nMessage:\n $message";
		
		$to = 'natewkong@gmail.com';
		$subject = 'Nathanwkong.com website';
	
		//SENDS THE MESSAGE
		if ( mail($to, $subject, $body, $header) )
		{
			echo '<script type="text/javascript">alert("Your message has been sent!");</script>';
			echo "<script>setTimeout(\"location.href = 'http://www.nathanwkong.com';\",1500);</script>";
		}
		else
		{
			echo '<script type="text/javascript">alert("Oops, something went wrong, please try again");</script>';
			echo "<script>setTimeout(\"location.href = 'http://www.nathanwkong.com/contactme';\",1500);</script>";
		}
	}
?>