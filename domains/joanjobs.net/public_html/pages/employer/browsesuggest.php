<?php

include('../connect.php');
  
       $results["aaData"] = array();
       $result = $db->prepare("SELECT * FROM `jobseekers`");
       $result->execute();
         
           for($i=0; $row = $result->fetch(); $i++){
       
			
			 $tmp = array();
          
           $tmp["roleid"] = $row["roleid"];
			
			  $tmp["role"] = $row["role"];
			 
			 $res_exp = $db->prepare("SELECT * FROM `jobs` where role=:role");
			 $res_exp->execute(array(':role'=>$row["role"]));
			              $expertise="";
						  $cnt=0;
			              for($i2=0; $row2 = $res_exp->fetch(); $i2++){ 
						        if($cnt==0)
			                    {$expertise = $row2["role"];$cnt++;}
							    else
								$expertise.=", ".$row2["role"];
								
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