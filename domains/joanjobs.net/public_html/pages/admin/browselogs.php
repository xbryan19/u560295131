<?php

include('../connect.php');
  
       $results["aaData"] = array();
       $result = $db->prepare("SELECT * FROM `logs` order by date_time");
       $result->execute();
         
           for($i=0; $row = $result->fetch(); $i++){
       
			
			 $tmp = array();
             $tmp["logid"] = $row["logid"];
             $tmp["name"] = $row["name"];
              $tmp["date_time"] = $row["date_time"];
			 $tmp["category"] = $row["category"];
			 $tmp["status"] = $row["status"];
			
			 
    		array_push($results["aaData"], $tmp);
   
          }



$data[] =$results["aaData"];
$results["sEcho"]=1;
$results["iTotalRecords"]=count($data);
$results["iTotalDisplayRecords"]=count($data);
		
 
header('Content-Type: application/json');
echo json_encode($results);



?>