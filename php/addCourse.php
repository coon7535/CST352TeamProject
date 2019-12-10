<?php

// include 'db.php';
$host = "localhost";
$dbname = "jcoonDB";
$username = "jcoonDB";
$password = "KssH2Y";

$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Setting Errorhandling to Exception
$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 


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
	        <!-- Bulma -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

        <!-- Bulma Extra -->
        <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
        <script type="text/javascript" src="https://unpkg.com/bulma-modal-fx/dist/js/modal-fx.min.js"></script>

        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Custom CSS -->
        <link rel="stylesheet" href="../css/stylesheet_editCourse.css" type="text/css" />

        <!-- Custom JavaScript -->
        <script src="js/script_frontpage.js"></script>

        <!-- Underscore JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js" ></script>

</head>
<body>
	<section id="main" class="columns">
		<div class="column">

			<h1>Add Course</h1>


			<form>
				Class Name: <input class="input" type="text" name="className"><br>
				Class ID(e.g. CST352):<input class="input" type="text" name="classID"><br>
				Class Description:<br/> <textarea class="input" name="classDesc" cols='50' rows='7'></textarea><br>
				MLO it satisfies:<br><input class="input number" type="text" name="MLO_ID"><br>
				Units: <br><input class="input number" type="text" name="units"><br>
				<button class="button is-primary is-rounded" name="formSubmit">Submit</button>
				<a class="is-pulled-right" href="../admindashboard.php">Cancel editing</a>

			</form>

		</div>
	</section>
</body>
</html>