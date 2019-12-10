<?php
	include 'connection.php';
  
   	if (isset($_GET["formSubmit"])) {
   		global $dbConn;
		//echo "the form was submitted";
   		echo "Hello.";
		$className = $_GET["className"];
		$classID = $_GET["classID"];
		$classDesc = $_GET["classDesc"];
		$MLO_ID = $_GET["MLO_ID"];
		$units = $_GET["units"];
		$sql = "UPDATE classes SET 
			classID = '$classID', className = '$className', classDesc = '$classDesc', MLO_ID = '$MLO_ID', units = '$units'
	 		WHERE classID = '$classID'";
		$stmt = $dbConn -> prepare ($sql);
		$stmt->execute();
		header("Location: ../admindashboard.php");
   	}
  
  	function getClassInfo(){
  		global $dbConn;		
		$sql = 'SELECT * FROM classes WHERE classID = "' . $_GET["classID"] . '"';
		$stmt = $dbConn -> prepare ($sql);
		$stmt->execute();
		$records = $stmt->fetchAll(PDO::FETCH_ASSOC);
		// print_r($records);
		return $records;
  	}
  
  $classInfo = getClassInfo();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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

        <title>Frontpage</title>
	</head>
	<body>
        <div class="container">
            <section id="header" class="header columns is-vcentered">
                <div class="column is-half">
                    <div class="is-size-4 has-text-dark">
                        Final Project
                    </div>
                </div>
                <div class="column is-half">
                    <button id="loginButtonModal" class="button modal-button is-rounded is-primary is-pulled-right"
                    data-target="#login_modal" aria-haspopup="true">Admin Login</button>
                </div>
            </section>

            <section id="main" class="columns">
                <div class="column">
                	<div class="subtitle">
                        <h1>Edit Course</h1>
                    </div>
                    <form>
				      	Class Name: <br><input class="input" type="text" name="className" placeholder="Class name:" value="<?= $classInfo[0]["className"] ?>"><br>
				      	<br/>
                        Class ID(e.g. CST352):<br> <input class="input" type="text" name="classID" value="<?= $classInfo[0]["classID"] ?>"><br>
				      	Class Description:<br> <textarea class="textarea" name="classDesc" cols='50' rows='7'><?= $classInfo[0]["classDesc"] ?></textarea><br>
				      	MLO it satisfies:<br> <input class="input number" type="text" name="MLO_ID" placeholder="MLO:" value="<?= $classInfo[0]["MLO_ID"] ?>"><br>
				      	Units:<br> <input class="input number" type="text" name="units" placeholder="Units:" value="<?= $classInfo[0]["units"] ?>"><br>
			
				      	
				      	<button class="button is-rounded is-primary" name="formSubmit">Submit</button>
				      	<a href="../admindashboard.php">Cancel editing</a>
				
				      </form>
                </div>
            </section>

            <section id="footer" class="columns is-vcentered has-text-grey">
                <div class="column has-text-left is-one-third">
                    <div class="display is-size-6">
                        CST352 - Web Scripting
                    </div>
                </div>
                <div class="column has-text-centered is-one-third">
                    <div class="display is-size-6">
                        Herman | Cody | Leann | Joshua
                    </div>
                </div>
                <div class="column has-text-right is-one-third">
                </div>
            </section>

            <!-- end of content -->
        </div>
	</body>
</html>
