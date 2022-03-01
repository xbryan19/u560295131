<?php
include("connect.php");
  $results["rating"] = array();
			$id = $_POST['userid'];
			//$fid = $_POST['fid'];
    //$id =1;			
	
					$qurGet = $db->prepare("select * from employersrating where (`toclient`=$id) ");
					$qurGet->execute();
					
					while($row = $qurGet->fetch()){
						$tmp = array();
						//$json = array('status' => 1, 'msg' => $row['msg'],  'time' => $row['time']);
						$tmp["rating"] = $row["rating"];
			           $tmp["comment"] = $row["comment"];    $tmp["dateposted"] = $row["dateposted"];
						$tmp["to"] = $row["toclient"];$tmp["from"] = $row["byapplicant"];	
						$tmp["byid"] = $row["byapplicant"];	
						
						$res = $db->prepare("SELECT * FROM `jobseekers` where accountid='".$tmp["byid"]."'");
                        $res->execute();
			            $row2=$res->fetch();
			  
			           $tmp["fullname"] = $row2["fname"]." ".$row2["mname"]." ". $row2["lname"];
			           $tmp["lname"] = ucfirst($row2["lname"]);
		            	 $tmp["fname"] = ucfirst($row2["fname"]);
		            	 $tmp["mname"] = ucfirst($row2["mname"]);
						 

							            array_push($results["rating"], $tmp);
					
					   
					}
					

					
					
					
					$results["status"] = 1;
                    $json =$results;
					echo json_encode($results);
					
				
					
?>					