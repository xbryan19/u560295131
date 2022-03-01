<?php
include("connect.php");

$id = $_POST['id'];
$status = $_POST['status'];



if($status=="1")
	$status="2";
else
	$status="1";
$response = array();

 $sql="update `jobs` set `status`=:status where jobid=:jobid";
 $query = $db->prepare($sql);
 $query->execute(array(':status'=>$status,':jobid'=>$id));

    if ($query->rowCount() > 0) {
            $response["error"] = false;
            $response["message"] = "Job status updated!";

        } else {

            $response["error"] = true;
            $response["message"] = "Failed to update status!".$id."-".$status;

        }
	
    echo json_encode($response);

	?>