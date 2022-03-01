<?php

include("connect.php");
//error_reporting(0);

// array for JSON response
$response = array();
$response["applicants"] = array();

       $result = $db->prepare("SELECT * FROM jobseekers");
       $result->execute();


        // check for empty result
        if ($result->rowCount() > 0) {

            for($i=0; $row = $result->fetch(); $i++){
			 $tmp = array();
			 $tmp["accountid"] = $row["accountid"];
             $tmp["lname"] = ucfirst($row["lname"]);
			  $tmp["address"] = $row["address"];
			 $tmp["fname"] = ucfirst($row["fname"]);
			 $tmp["mname"] = ucfirst($row["mname"]);
			  $tmp["contact"] = $row["contact"];
			   $tmp["payrate"] = $row["payrate"];
              if($row["payrate"]=="")
			   $tmp["payrate"] = "None Specified";
	

			   $tmp["birthday"] = $row["birthday"];
			  $tmp["gender"] = ($row["gender"]==1)?"Male":"Female";
			  $tmp["email"] = $row["email"];
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
			$tmp["roles"] = $expertise;
			  if($expertise=="")
			   $tmp["roles"] = "None";
	
             
        // push category to final json array
            array_push($response["applicants"], $tmp);  
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