<?php

include('connect.php');
  
       $results["aaData"] = array();
       $result = $db->prepare("SELECT * FROM `users`");
       $result->execute();
         
           for($i=0; $row = $result->fetch(); $i++){
       
			
			 $tmp = array();
             $tmp["userid"] = $row["userid"];
             $tmp["lname"] = $row["lname"];
			 $tmp["fname"] = $row["fname"];
			 $tmp["mname"] = $row["mname"];



    		array_push($results["aaData"], $tmp);
   
          }



$data[] =$results["aaData"];
$results["sEcho"]=1;
$results["iTotalRecords"]=count($data);
$results["iTotalDisplayRecords"]=count($data);
		
 
header('Content-Type: application/json');
echo json_encode($results);



?>