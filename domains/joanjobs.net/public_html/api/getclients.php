<?php

include("connect.php");
//error_reporting(0);

// array for JSON response
$response = array();
$response["clients"] = array();

       $result = $db->prepare("SELECT * FROM employers");
       $result->execute();


        // check for empty result
        if ($result->rowCount() > 0) {

            for($i=0; $row = $result->fetch(); $i++){
			 $tmp = array();
			 $tmp["accountid"] = $row["accountid"];
            $tmp["lname"] = ucfirst($row["lname"]);
			 $tmp["fname"] = ucfirst($row["fname"]);  $tmp["address"] = $row["address"];
			 $tmp["mname"] = ucfirst($row["mname"]);
			  $tmp["gender"] = ($row["gender"]==1)?"Male":"Female";
			 $tmp["birthday"] = $row["birthday"];
             $tmp["email"] = $row["email"];
			  $tmp["contact"] = $row["contact"];
			  $res = $db->prepare("SELECT count(*) as total FROM jobs where accountid=".$row["accountid"]);
              $res->execute();
			  $row2=$res->fetch();
			  
			  $tmp["post"] = $row2["total"];
			 
			 
			 
			 
        // push category to final json array
            array_push($response["clients"], $tmp);  
            $response["error"] = false;
            $response["message"] = "Found accounts!";
			} 
     
            echo json_encode($response);
        } else {
            // no account found
             $response["error"] = true;
             $response["message"] = "No accounts found";

            // echo no users JSON
            echo json_encode($response);
        
    }


?>