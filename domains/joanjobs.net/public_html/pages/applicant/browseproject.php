<?php
session_start();

$id=$_SESSION['SESS_MEMBER_ID'];
include('connect.php');
  
       $results["aaData"] = array();
       $result = $db->prepare("SELECT * FROM `project` where accountid=:accountid");
     $result->bindParam(':accountid', $id);
       $result->execute();
         
           for($i=0; $row = $result->fetch(); $i++){
       
      
       $tmp = array();
             $tmp["feature"] = $row["name"];
             $tmp["expected"] = $row["expected"];
       $tmp["actual"] = $row["actual"];
          $tmp["status"] = $row["status"];
              $tmp["id"] = $row["id"];
   
        array_push($results["aaData"], $tmp);
   
          }



$data[] =$results["aaData"];
$results["sEcho"]=1;
$results["iTotalRecords"]=count($data);
$results["iTotalDisplayRecords"]=count($data);
    
 
header('Content-Type: application/json');
echo json_encode($results);



?>