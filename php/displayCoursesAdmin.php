<?php
	error_reporting(E_ALL & ~E_NOTICE);
            
	include("php/db.php");
			
	$sql = "SELECT *
			FROM classes";
	
	$result = $dbConn->query($sql);
	
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
						
			$tableRow = '"<tr><td><a href=\"#\">' . $row["className"] . ": " . $row["className"] . '</a></td><td>' . $row["units"] . '</td><td><a href=\"#\">Edit</a></td><td><a href=\"#\">Delete</a></td></tr>"';
						
			echo '$("#mlo' . $row["MLO_ID"] . '").append(' . $tableRow .');';
	
		}
	} 
	else {
		echo "Error loading content from database";
	}
	
	$dbConn->close();			
?>
					
