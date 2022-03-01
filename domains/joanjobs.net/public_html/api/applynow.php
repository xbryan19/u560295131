
<?php
include("connect.php");
$response = array();

//Fetching Values from URL
$jobid=$_POST['jobid'];
$accountid=$_POST['accountid'];

//Insert query

  $result = $db->prepare("insert into jobapplications (accountid,jobid) values (:a,:b)");
  $result->execute(array(':a'=>$accountid,':b'=>$jobid));

 
    if($result->rowCount() > 0){
       $response["error"] = false;
            $response["message"] = "Operation successful!";     
	}
  else
  {
           $response["error"] = true;
            $response["message"] = "Error!";
		   
  }
     
            echo json_encode($response);  

?>