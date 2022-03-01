<?php
include("connect.php");
  $results["respondents"] = array();
			//$myid = $_POST['mid'];
			//$fid = $_POST['fid'];
      $myid = "b@yahoo.com";			
	  $emails=array();			
					$qurGet = $db->prepare("select distinct `from` from chat where (`to`='$myid') ");
					$qurGet->execute();
					
					while($row = $qurGet->fetch()){
						$tmp = array();
						//$json = array('status' => 1, 'msg' => $row['msg'],  'time' => $row['time']);
						//$tmp["msg"] = $row["msg"];
			           // $tmp["time"] = $row["time"];
						//$tmp["id"] = $row["id"];
						$tmp["from"] = $row["from"];
						
						$res = $db->prepare("SELECT * FROM employers where accountid=".$row["accountid"]);
                        $res->execute();
			            $row2=$res->fetch();
			  
			           $tmp["fullname"] = $row2["fname"]." ".$row2["mname"]." ". $row2["lname"];
			  
						$tmp[]
						if(!in_array($tmp["from"],$emails))
						{
						array_push($emails, $tmp["from"]);	
    		            array_push($results["respondents"], $tmp);
						}
					   
					}
					
					$qurGet = $db->prepare("select distinct `to` from chat where (`from`='$myid') ");
					$qurGet->execute();
					
					while($row = $qurGet->fetch()){
						$tmp = array();
						//$json = array('status' => 1, 'msg' => $row['msg'],  'time' => $row['time']);
						//$tmp["msg"] = $row["msg"];
			            //$tmp["time"] = $row["time"];
						//$tmp["id"] = $row["id"];
						$tmp["to"] = $row["to"];
						if(!in_array($tmp["to"],$emails))
						{
						array_push($emails, $tmp["to"]);	
    		            array_push($results["respondents"], $tmp);
						}
					   
					}
					
					
					
					$results["status"] = 1;
                    $json =$results;
					echo json_encode($results);
					
				
					
?>					