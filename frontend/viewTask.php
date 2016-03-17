<?php
	
	
	$hostName = "localhost";
	$dbName = "TASKNOTIFIERDB";
	$username = "root";
	$password = "ttZkm321";

	$data = array();

	try {
		$conn = new PDO('mysql:host=localhost;dbname=TASKNOTIFIERDB', $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     

		$stmt = $conn->prepare('SELECT t.task_ID, t.task_NAME, g.group_NAME, t.task_DATETIME, t.task_NOTES FROM tasks t, groups g WHERE t.group_ID = g.group_ID ORDER BY t.task_DATETIME ASC');
	    $stmt->execute();
	 	
	    while($row = $stmt->fetch()) {
	        array_push($data, $row);
	    }

        echo json_encode($data);
 	}
	catch(PDOException $e)
	{
		echo $e->getMessage(); 
		return false;
	}

?>