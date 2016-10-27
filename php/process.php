<?php 
	$to = "contact@spitstrips.com";
	$name = $_POST["name"];
	$message = $_POST["content"];
	$headers = "From: spitstrips@spitstrips.com";
	mail($to, $name, $message, $headers);
	header('Location: ../home/index.html');
	
?>