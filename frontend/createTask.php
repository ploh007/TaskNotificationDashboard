<?php
	
	$hostName = "localhost";
	$dbName = "TASKNOTIFIERDB";
	$username = "root";
	$password = "ttZkm321";

	$taskName = $_POST['taskName'];
	$groupID = $_POST['groupID'];
	$dueDateTime = $_POST['dueDateTime'];
	$notes = $_POST['notes'];

	try {
		$conn = new PDO('mysql:host=localhost;dbname=TASKNOTIFIERDB', $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    

		$stmt = $conn->prepare('INSERT INTO tasks (task_NAME, task_DATETIME, task_NOTES, group_ID) VALUES(:taskName,:dueDateTime,:notes,:groupID)');
		$execStatus = $stmt->execute(array(
			':taskName' => $taskName,
			':groupID' => $groupID,
			':dueDateTime' => $dueDateTime,
			':notes' => $notes
		));

        echo json_encode($execStatus);
 	}
	catch(PDOException $e)
	{
		echo $e->getMessage(); 
		return false;
	}

?>