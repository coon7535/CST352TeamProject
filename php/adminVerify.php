<?php
	$host = "localhost"; //itcd4, if we were connecting to a remote computer, we'd use the IP address (domain) of the server.
	$dbname = "jcoonDB";
	$username = "jcoonDB";
	$password = "KssH2Y";
	
	// Establishing a connection with the SQL server
	$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
	// Setting Errorhandling to Exception
	$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
	
	$sql = "SELECT username, password FROM users";
	
	//The three lines below are always necessary in order to query an SQL database. They will not change.
	$stmt = $dbConn -> prepare ($sql); // Preparing the SQL statement and assigning it to a variable.
	$stmt -> execute(); // Execute the statement, replacing the named parameters.
	$records = $stmt->fetchAll(PDO::FETCH_ASSOC); // In a situation where you are only getting one result, you can use fetch instead of fetchAll. Tell PDOs to recieve only associative arrays and not index arrays.
	

	//print_r($records);

session_start();


	if ( $_POST['username'] == $records[0]['username'] && sha1($_POST['pwd']) == $records[0]['password'] ) { //hashing "secret" using sha1
		
		$_SESSION['authenticated'] = true;
		echo "true";
		
	} else {
		
		echo "false";
	}

//	if ($_POST['pwd'] == 'secret') {
//		
//		echo "true";
//		
//	} else {
//		
//		echo "false";
//	}
	
?>