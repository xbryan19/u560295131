<?php
include("connect.php");

$toid =  $_POST['to'];
$fromid =  $_POST['from'];
$rate =  $_POST['rate'];
$comment =  $_POST['comment'];
/*
$toid =  1;
$fromid = 1;
$rate =  4;
$comment = "bad bad";*/

$response = array();

$sql = 'INSERT INTO employersrating (rating,comment,byclient,toapplicant) values (:a,:b,:c,:d)';

$query = $db ->prepare($sql);
$query->execute(array(':a' => $rate,':b' => $comment,':c' => $fromid,':d'=>$toid));
    if ($query->rowCount() > 0) {
            $response["error"] = false;
            $response["message"] = "Message created successfully!";

        } else {

            $response["error"] = true;
            $response["message"] = "Failed to create message!";

        }
	
    echo json_encode($response);

	?>