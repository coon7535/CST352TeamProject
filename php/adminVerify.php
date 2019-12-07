<?php

session_start();

	if ( $_POST['username'] == "admin" &&
	     sha1($_POST['pwd']) == 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4') { //hashing "secret" using sha1
		
		$_SESSION['authenticated'] = true;
		echo "true";
		
	} else {
		
		echo "false";
	}

//	if ($_POST['pwd'] == 'secret') {
//		
//		echo "true";
//		
//	} else {
//		
//		echo "false";
//	}
	
?>