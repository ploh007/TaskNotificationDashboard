/*
* Class to initiate connection with database using PDO Extension 
*/

<?php

// Check for validity of username
if(!(trim($_POST['username']) == "")  || !(empty($_POST['username'])} {

}	

// Check for valididty of password
if(!(trim($_POST['username']) == "")  || !(empty($_POST['username'])} {

}

function Login()
{
    if(empty()
    {
        $this->HandleError("UserName is empty!");
        return false;
    }
     
    if(empty($_POST['password']))
    {
        $this->HandleError("Password is empty!");
        return false;
    }
     
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
     
    if(!$this->CheckLoginInDB($username,$password))
    {
        return false;
    }
     
    session_start();
     
    $_SESSION[$this->GetLoginSessionVar()] = $username;
     
    return true;
}



$id = 5;

try {
    $conn = new PDO('mysql:host='.$hostName';dbname='.$dbName, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
     
    $stmt = $conn->prepare('SELECT * FROM myTable WHERE id = :id');
    $stmt->execute(array('id' => $id));
 
    while($row = $stmt->fetch()) {
        print_r($row);
    }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

?>