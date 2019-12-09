<?php
	$host = "localhost"; //itcd4, if we were connecting to a remote computer, we'd use the IP address (domain) of the server.
	$dbname = "jcoonDB";
	$username = "jcoonDB";
	$password = "KssH2Y";
	
	// Establishing a connection with the SQL server
	$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
	// Setting Errorhandling to Exception
	$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	global $dbConn;
	$sql = 'SELECT * FROM classes WHERE 1 AND classID = "'. $_GET['classID'] .'"';
	
	$stmt = $dbConn -> prepare ($sql); // Preparing the SQUL statement and assigning it to a variable.
	$stmt -> execute(); // Execute the statement, replacing the named parameters.
	$records = $stmt->fetchAll(PDO::FETCH_ASSOC); // Tell PDOs to recieve only associative arrays and not index arrays.

	//print_r($records); //print_r() is a function in PHP that allows you to print the entire contents of an array.

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		
		<!-- Bulma -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
	</head>
	
	<body>

		<div class="container">
		<br>
			<div class="box">
			<h3 class="subtitle has-text-black has-text-centered">Class Information</h3>
			
				 	<div class="row">
				 		<div class="col has-text-right">Name: </div>
				 		<div class="col has-text-left"><?= $records[0]['className'] ?></div>
				 	</div>
				 	<br>
				 	<div class="row">
				 		<div class="col has-text-right">ID: </div>
				 		<div class="col has-text-left"><?= $records[0]['classID'] ?></div>
				 	</div>
				 	<br>
					
					<div class="row">
				 		<div class="col has-text-right">Units: </div>
				 		<div class="col has-text-left"><?= $records[0]['units'] ?></div>
				 	</div>
				 	<br>
				 	
				 	<div class="row">
				 		<div class="col has-text-right">Description: </div>
				 		<div class="col has-text-left"><?= $records[0]['classDesc'] ?></div>
				 	</div>
				 	<br>
		     </div>
		<br>
     	</div>
     	
     	<div class="has-text-centered"><a href="listmlos.php">Back to MLOs</a></div>
	</body>
</html>