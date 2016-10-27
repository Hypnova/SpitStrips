<?php 
	$to = "saksham.a@hotmail.ca";
	$name = $_POST["name"];
	$message = $_POST["content"];
	$email =$_POST["email"];
	$headers = "From: " . $email;
	mail($to, $name, $message, $headers);
	header('Location: ../home/index.html');
	
?>