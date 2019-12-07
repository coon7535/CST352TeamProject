<?php
	error_reporting(E_ALL & ~E_NOTICE);
            
	include("php/db.php");
			
	$sql = "SELECT *
			FROM classes";
	
	$result = $dbConn->query($sql);
	
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
				
		$tableRow = "<div class='class'>" . $row["className"] . " [ <a className = '" . $row["className"] . "' href='php/editCourse.php?classID=". $row["classID"] . "'> Update </a>][ <a  className = '" .$row["className"] . "' href='php/editCourse.php?classID=".$row["classID"] ."'> Delete </a>]" . "</div>";
			// $tableRow = '"<tr><td><a href=\"#\">' . $row["className"] . ": " . $row["className"] . '</a></td><td>' . $row["units"] . '</td><td><a href=\"#\">Edit</a></td><td><a href=\"#\">Delete</a></td></tr>"';
						
			echo '$("#mlo' . $row["MLO_ID"] . '").append("' . $tableRow .'");';
	
		}
	} 
	else {
		echo "Error loading content from database";
	}
	
	$dbConn->close();			
?>
					
