<?php

include("connect.php");
//error_reporting(0);
$userid = $_POST['userid'];
// $userid = 1;
// array for JSON response
$response = array();
$response["rating"] = array();

       $result = $db->prepare("SELECT * FROM `jobs` where accountid=:accountid order by dateposted");
       $result->execute(array(":accountid"=>$userid));


        // check for empty result
        if ($result->rowCount() > 0) {

            for($i=0; $row = $result->fetch(); $i++){
	       	 $tmp = array();
             $tmp["jobid"] = $row["jobid"];
             $tmp["jobtitle"] = $row["jobtitle"];
			 $tmp["description"] = $row["description"];
			  $tmp["accountid"] = $row["accountid"];
			 $tmp["dateposted"] = $row["dateposted"];
			  $tmp["status"] = $row["status"];
			  
			    $res = $db->prepare("SELECT * FROM employers where accountid=".$row["accountid"]);
              $res->execute();
			  $row2=$res->fetch();
			  
			  $tmp["fullname"] = $row2["fname"]." ".$row2["mname"]." ". $row2["lname"];
			  
			  
             
        // push category to final json array
            array_push($response["jobs"], $tmp);  
            $response["error"] = false;
            $response["message"] = "Found posts!";
			} 
     
            echo json_encode($response);
        } else {
            // no account found
             $response["error"] = true;
             $response["message"] = "No post found";

            // echo no users JSON
            echo json_encode($response);
        
    }


?>