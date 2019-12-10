<?php

include 'connection.php';

$id = $_GET['classID'];

$sql = 'DELETE FROM `classes` WHERE `classID` = '.$classID;

$stmt = $dbConn -> prepare ($sql);
$stmt->execute();

header("Location: ../admindashboard.php");


?>