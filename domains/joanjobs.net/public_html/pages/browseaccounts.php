<?php

include('connect.php');
  
       $results["aaData"] = array();
       $result = $db->prepare("SELECT * FROM `jobseekers`");
       $result->execute();
         
           for($i=0; $row = $result->fetch(); $i++){
       
			
			 $tmp = array();
             $tmp["accountid"] = $row["accountid"];
             $tmp["lname"] = $row["lname"];
			 $tmp["fname"] = $row["fname"];
			 $tmp["contact"] = $row["contact"];
			 $tmp["email"] = $row["email"];
			 $tmp["birthday"] = $row["birthday"];
			 
			 $res_exp = $db->prepare("SELECT * FROM `expertise` where accountid=:accountid");
			 $res_exp->execute(array(':accountid'=>$row["accountid"]));
			              $expertise="";
						  $cnt=0;
			              for($i2=0; $row2 = $res_exp->fetch(); $i2++){ 
						        if($cnt==0)
			                    {$expertise = $row2["title"];$cnt++;}
							    else
								$expertise.=", ".$row2["title"];
								
                          }
			$tmp["expertise"] = $expertise;
    		array_push($results["aaData"], $tmp);
   
          }



$data[] =$results["aaData"];
$results["sEcho"]=1;
$results["iTotalRecords"]=count($data);
$results["iTotalDisplayRecords"]=count($data);
		
 
header('Content-Type: application/json');
echo json_encode($results);



?>