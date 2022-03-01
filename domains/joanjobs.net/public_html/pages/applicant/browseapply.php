<?php


include('../connect.php');
  
       $results["aaData"] = array();
       $result = $db->prepare("SELECT * FROM `jobcontracts` WHERE accountid=:accountid  ");
   $result->bindParam(':accountid', $session_id);
       $result->execute();
         
           for($i=0; $row = $result->fetch(); $i++){
       
			
			 $tmp = array();
             $tmp["accountid"] = $row["accountid"];
             $tmp["elname"] = $row["elname"];
			 $tmp["efname"] = $row["efname"];

			 

    		array_push($results["aaData"], $tmp);
   
          }



$data[] =$results["aaData"];
$results["sEcho"]=1;
$results["iTotalRecords"]=count($data);
$results["iTotalDisplayRecords"]=count($data);
		
 
header('Content-Type: application/json');
echo json_encode($results);



?>