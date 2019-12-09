<?php
	error_reporting(E_ALL & ~E_NOTICE);
            
	include("php/db.php");
			
	$sql = "SELECT *
			FROM classes
			WHERE 1";
	
	if (!empty($_GET['numUnits'])){ //the empty() function determines if the data in the array is populated or not.
		$sql = $sql . " AND units = " . $_GET['numUnits'];
	}
	
	
	$result = $dbConn->query($sql);
	
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
						
			$tableRow = '"<tr><td><a>' . $row["className"] . '</a></td><td>' . $row["units"] . '</td></tr>"';
						
			echo '$("#mlo' . $row["MLO_ID"] . '").append(' . $tableRow .');';
	
		}
	} 
	else {
		echo "Error loading content from database";
	}
	
	$dbConn->close();			
?>
					
