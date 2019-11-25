<?php
include 'db.php';
  
   if (isset($_GET["formSubmit"])) {
	 //echo "the form was submitted";
	 $className = $_GET["className"];
	 $classID = $_GET["classID"];
	 $classDesc = $_GET["classDesc"];
	 $MLO_ID = $_GET["MLO_ID"];
	 $units = $_GET["units"];
	 $sql = "UPDATE classes SET 
	 		className = '$className', classID = '$classID', classDesc = '$classDesc', MLO_ID = '$MLO_ID', units = '$units'
	 		WHERE className = $className";
			$stmt = $dbConn -> prepare ($sql);
			if(!$stmt){
       			echo "Submit prepare failed: (". $dbConn->errno.") ".$dbConn->error."<br>";
    }
			$stmt->execute();

  header("Location: admindashboard.php");

   }
  
  function getClassInfo(){
  	global $dbConn;
		
	$sql = 'SELECT * FROM classes WHERE classID ="' . $_GET["classID"] . '"';
	$stmt = $dbConn -> prepare ($sql);
	    if(!$stmt){
       echo "Prepare failed: (". $dbConn->errno.") ".$dbConn->error."<br>";
    }
	$stmt->execute();
	$records = $stmt->fetch(PDO::FETCH_ASSOC);
	// print_r($records);
	return $records;
  }
  
  $classInfo = getClassInfo();

  
?>

<!DOCTYPE html>

<html>
<head>
	<title>Update Author</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
	
	<header class="jumbotron">
		<h1> Updating Author</h1>
	</header>
	<div class="body">
	
	 <form>
      	Class Name: <input type="text" name="className" value="<?= $classInfo[0]["className"] ?>"><br>
      	Class Description:<br/> <textarea name="classDesc" cols='50' rows='7'><?= $classInfo[0]["classDesc"] ?></textarea><br>
      	MLO it satisfies: <input type="text" name="MLO_ID" value="<?= $classInfo[0]["MLO_ID"] ?>"><br>
      	Units: <input type="text" name="units" value="<?= $classInfo[0]["units"] ?>"><br>
      	<input type="hidden" name="classID" value="<?= $classInfo[0]["classID"] ?>">
      	
      	<button class="btn btn-success" name="formSubmit">Submit</button><br><br>
      	<a href="../admindashboard.php">Cancel editing</a>

      </form>
  </div>
</body>
</html>

