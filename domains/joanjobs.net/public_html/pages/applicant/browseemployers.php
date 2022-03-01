
<?php

include('../connect.php');
  
       $results["aaData"] = array();
       $result = $db->prepare("SELECT * FROM `employers` where verified='1'");
       $result->execute();
         
           for($i=0; $row = $result->fetch(); $i++){
       
			
			 $tmp = array();
             $tmp["accountid"] = $row["accountid"];
             $tmp["lname"] = $row["lname"];
			 $tmp["fname"] = $row["fname"];
			 $tmp["contact"] = $row["contact"];
        $tmp["address"] = $row["address"];
			 

    		array_push($results["aaData"], $tmp);
   
          }



$data[] =$results["aaData"];
$results["sEcho"]=1;
$results["iTotalRecords"]=count($data);
$results["iTotalDisplayRecords"]=count($data);
		
 
header('Content-Type: application/json');
echo json_encode($results);



?>