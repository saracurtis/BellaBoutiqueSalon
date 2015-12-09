<?php

	include 'signup.php';
	$firstname = $_REQUEST['firstname'];
	$lastname = $_REQUEST['lastname'];
	$email = $_REQUEST['email'];
	$username= $_REQUEST['username'];
	$password = $_REQUEST['password'];

	echo($firstname . ' ' . $lastname . ' ' . $email . ' ' $username . ' ' . $password);

?>