<?php
	$db_name = "customers";
	$username = "root";
	$password = "root";
	$host = "localhost";

	mysql_connect($host, $username, $password) or die (mysql_error());
	//echo("Connected to mySQL Database");

	mysql_select_db($db_name) or die(mysql_error());
	//echo("connected to customers");

?>