<?php
	session_start();
	
	function createAccount(){
		include "../connection.php";
		$username = $_GET['username'];
		$password = $_GET['password'];
		
		$sql = "INSERT INTO users (username, password) 
				VALUES ('$username','$password')"; //This SQL statement inserts the data submitted in the form into the database. 
	
		$stmt = $dbConn -> prepare ($sql); // Preparing the SQL statement and assigning it to a variable.
		$stmt -> execute(); // Execute the statement, replacing the named parameters.
		//$records = $stmt->fetchAll(PDO::FETCH_ASSOC); // In a situation where you are only getting one result, you can use fetch instead of fetchAll. Tell PDOs to recieve only associative arrays and not index arrays.
		
	}
	
	function checkAccountExisits(){
		include "../connection.php";
		$username = $_GET['username'];
		$password = $_GET['password'];
		$sql = "SELECT username FROM users WHERE 1";
		
		$stmt = $dbConn -> prepare ($sql); // Preparing the SQL statement and assigning it to a variable.
		$stmt -> execute(); // Execute the statement, replacing the named parameters.
		$records = $stmt->fetchAll(PDO::FETCH_ASSOC); // In a situation where you are only getting one result, you can use fetch instead of fetchAll. Tell PDOs to recieve only associative arrays and not index arrays.
		
		for ($i=0; $i < count($records); $i++){
			if ($records[$i]['username'] == $username){
				echo "Username not available!";
				$usernameAvailable = false;
			}
			else {
				$usernameAvailable = true;
			}
		}	
		
		if ($usernameAvailable == true){
			createAccount();
		}
		//print_r($records);
		
	}
	checkAccountExisits();
	


	
	
	
	
	//if ($_GET['username'] == "admin" && $_GET['password'] == 'admin'){
		//$_SESSION['authenticated'] == true;
	//	echo "true";
	//}
	//else {
	//	echo "false";
	//}
?>