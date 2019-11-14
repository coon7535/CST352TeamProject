<?php
	//Connects to the database
	include_once 'db.php';
	
	
	
	$username = $_POST["name_input_username_reg"];
	$password = $_POST["name_input_password_reg"];
	
	$sqlsearch = "SELECT * FROM login WHERE username = '" . $username . "'";
	
	$sql = "INSERT INTO login (username, password)
			VALUES ('" . $username . "', '" . $password . "')";
	
	mysqli_query($dbConn, $sql);	
	header("Location: ../index.php?register=success");
	
	
	
?>