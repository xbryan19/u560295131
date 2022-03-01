<?php

include("connect.php");

$response = array();
$response["stats"] = array();
$tmp = array();

       $result = $db->prepare("SELECT count(*) as total FROM `jobs`");
       $result->execute();
	   $row = $result->fetch();
 
		$tmp["jobs"] = $row["total"];

       $result = $db->prepare("SELECT count(*) as total FROM `jobs` where status=1");
       $result->execute();
	   $row = $result->fetch();
	  $tmp["jobopen"] = $row["total"];
 
       $result = $db->prepare("SELECT count(*) as total FROM `jobs` where status<>1");
       $result->execute();
	   $row = $result->fetch();
	  $tmp["jobclose"] = $row["total"];

       $result = $db->prepare("SELECT count(*) as total FROM `jobseekers`");
       $result->execute();
	   $row = $result->fetch();
	  $tmp["applicants"] = $row["total"];
   
       $result = $db->prepare("SELECT count(*) as total FROM `employers`");
       $result->execute();
	   $row = $result->fetch();
	  $tmp["employers"] = $row["total"];
	
	            $response["error"] = false;
            $response["message"] = "Found data!";

			
        array_push($response["stats"], $tmp);  

     
            echo json_encode($response);



	
?> 