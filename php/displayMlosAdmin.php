<?php
	error_reporting(E_ALL & ~E_NOTICE);
            
	include("php/db.php");
			
	$sql = "SELECT *
			FROM mlos
			ORDER BY mlo_number ASC";
			
	$result = $dbConn->query($sql);
	
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo '<section class="hero">
               	<div class="hero-body">
                 <div class="container">
                  <div id="mloTitle" class="title is-size-4">' . $row["mlo_number"] . ": " . $row["mlo_name"] . '</div>
                  <div class="subtitle">' . $row["mlo_desc"] . '</div>
                  <table  class="table is-striped">
                   <thead>
                    <tr>
                	 <th>Course</th>
    				 <th>Units</th>
                    </tr>
				   </thead>
				   <tbody id="mlo' . $row["mlo_id"] . '">
				    
				   </tbody>
                  </table>
                  <button class="button is-info">Add new Course</button>
                 </div>
                </div>
               </section>
               <hr />';
		}
	} 
	else {
		echo "Error loading content from database";
	}
	
	$dbConn->close();			
?>
					