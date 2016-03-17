<?php
	

	// Initiate Session and connect to backend database and retrieve tasks
	session_start();

	$_SESSION["databaseUser"] = "root";
	$_SESSION["databasePass"] = "";
	$_SESSION["databaseHost"] = "localhost";
	$_SESSION["databaseName"] = "tasknotsys";


	// Conduct POST for data from AJAX Request
	$displayTables = $_POST["displayTables"];

	// Connect to database
	$mysqli = new mysqli($_SESSION["databaseHost"], $_SESSION["databaseUser"], $_SESSION["databasePass"], $_SESSION["databaseName"]);
	if ($mysqli->connect_errno) {
	    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
	} else {
		echo "Connection to database successful";
	}

	$res = $mysqli->query("SELECT 'choices to please everybody.' AS _msg FROM DUAL");

	// $res = $mysqli->query("SELECT 'choices to please everybody.' AS _msg FROM DUAL");
	// $row = $res->fetch_assoc();
	// echo $row['_msg'];

?>