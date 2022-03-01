<?php
$accountid=$_GET["accountid"];
include('connect.php');
  
       $results["aaData"] = array();
       $result = $db->prepare("SELECT * FROM `jobs` where accountid=:accountid");
	   $result->bindParam(':accountid', $accountid);
       $result->execute();
         
           for($i=0; $row = $result->fetch(); $i++){
       
			
			 $tmp = array();
             $tmp["jobid"] = $row["jobid"];
             $tmp["jobtitle"] = $row["jobtitle"];
			 $tmp["description"] = $row["description"];
			 $tmp["accountid"] = $row["accountid"];
			 $tmp["dateposted"] = $row["dateposted"];
			 
    		array_push($results["aaData"], $tmp);
   
          }



$data[] =$results["aaData"];
$results["sEcho"]=1;
$results["iTotalRecords"]=count($data);
$results["iTotalDisplayRecords"]=count($data);
		
 
header('Content-Type: application/json');
echo json_encode($results);



?>