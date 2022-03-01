<?php
include("connect.php");

$title =  $_POST['title'];
$desc =  $_POST['desc'];
$id =  $_POST['userid'];
$pay =  $_POST['payrate'];
/*
$email = 'email';
$password = 'password'; 
$password = sha1($password);
$lname =  'lname';
$fname =  'fname';
$mname =  'mname';
$address ='address';*/

$response = array();

$sql = 'INSERT INTO jobs SET jobtitle =:title,accountid=:id,description =:desc,payrate=:payrate';

$query = $db ->prepare($sql);
$query->execute(array(':title' => $title,':id' => $id,':desc' => $desc,':payrate' => $pay));
    if ($query->rowCount() > 0) {
            $response["error"] = false;
            $response["message"] = "Post created successfully!";

        } else {

            $response["error"] = true;
            $response["message"] = "Failed to create post!";

        }
	
    echo json_encode($response);

	?>