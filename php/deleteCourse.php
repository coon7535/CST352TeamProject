<?php

    session_start();  //starts or resumes the use of session variables
    if (!isset($_SESSION['authenticated'])) {
        header("Location: ../frontpage.php"); //redirecting to login screen
};

include 'connection.php';

$id = $_GET['classID'];

$sql = 'DELETE FROM classes WHERE classID = "' . $id . '"';

$stmt = $dbConn -> prepare ($sql);
$stmt->execute();

header("Location: ../admindashboard.php");

?>