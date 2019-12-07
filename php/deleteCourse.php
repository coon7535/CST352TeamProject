<?php

// include 'db.php';
	$host = "localhost";
	$dbname = "jcoonDB";
	$username = "jcoonDB";
	$password = "KssH2Y";

$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Setting Errorhandling to Exception
$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 


$id = $_GET['classID'];

$sql = 'DELETE FROM `classes` WHERE `classID` = '.$classID;

$stmt = $dbConn -> prepare ($sql);
$stmt->execute();

header("Location: ../admindashboard.php");


?>