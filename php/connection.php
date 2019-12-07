<?php
	$host = "localhost"; //itcd4, if we were connecting to a remote computer, we'd use the IP address (domain) of the server.
	$dbname = "jcoonDB";
	$username = "jcoonDB";
	$password = "KssH2Y";
	
	// Establishing a connection with the SQL server
	$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
	// Setting Errorhandling to Exception
	$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
?>