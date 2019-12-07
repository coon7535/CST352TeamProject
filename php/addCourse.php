<?php

// include 'db.php';
	$host = "localhost";
	$dbname = "jcoonDB";
	$username = "jcoonDB";
	$password = "KssH2Y";

$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Setting Errorhandling to Exception
$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

  function displayMLOs() {
	global $dbConn;	
	$sql = "SELECT DISTINCT MLO_ID
	FROM `classes` ORDER BY MLO_ID ASC";
	$stmt = $dbConn -> prepare ($sql);
	$stmt->execute();
	$records = $stmt->fetchAll(PDO::FETCH_ASSOC);
		for ($i=0; $i < sizeof($records); $i++) {
			echo "<option> ".$records[$i]['MLO_ID']."</option>";
		}	
	}

   if (isset($_GET["formSubmit"])) {
   	global $dbConn;
	 //echo "the form was submitted";
   	echo "Hello.";
	 $className = $_GET["className"];
	 $classID = $_GET["classID"];
	 $classDesc = $_GET["classDesc"];
	 $MLO_ID = $_GET["MLO_ID"];
	 $units = $_GET["units"];
	 echo $className, $classID, $classDesc, $MLO_ID, $units;
	 $sql = "INSERT INTO classes 
	       (className, classID, classDesc, MLO_ID, units) 
	VALUES ('$className', '$classID', '$classDesc', '$MLO_ID', '$units')";
			$stmt = $dbConn -> prepare ($sql);
			$stmt->execute();

  header("Location: ../admindashboard.php");
   }
	

?>

<!DOCTYPE html>

<html>
<head>
	<title>Add Class</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
	
	<header class="jumbotron">
		<h1>Add New Class</h1>
	</header>
	<div class="body">
	
	 <form>
      	Class Name: <input type="text" name="className"><br>
      	Class Description:<br/> <textarea name="classDesc" cols='50' rows='7'></textarea><br>
      	MLO it satisfies:
      	<select>
      		<?php displayMLOs() ?>
      	</select>
      	<br>
      	Units:
      	<input type="text" name="units"><br>
      	<input type="hidden" name="classID">
      	
      	<button class="btn btn-success" name="formSubmit">Submit</button><br><br>
      	<a href="../admindashboard.php">Cancel editing</a>

      </form>
  </div>
</body>
</html>
