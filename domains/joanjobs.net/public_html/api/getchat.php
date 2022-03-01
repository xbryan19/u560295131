<?php
include("connect.php");
   $results["chat"] = array();
   $myid = $_POST['myid'];
			$fid = $_POST['fid'];

	    //    $myid = "b@yahoo.com";
		//	$fid = "rose@yahoo.com";

					// update status
		            $up = $db->prepare("UPDATE `chat` SET  `status` = '0' WHERE `to`='$myid' && `from`='$fid'");
		         	$up->execute();
				
				
					$qurGet = $db->prepare("select * from chat where (`to`='$myid' && `from`='$fid') or (`to`='$fid' && `from`='$myid') ");
					$qurGet->execute();
					
					while($row = $qurGet->fetch()){
						$tmp = array();
						//$json = array('status' => 1, 'msg' => $row['msg'],  'time' => $row['time']);
						$tmp["msg"] = $row["msg"];
			            $tmp["dateposted"] = $row["time"];
						$tmp["id"] = $row["id"];
						$tmp["from"] = $row["from"];$tmp["to"] = $row["to"];
    		            array_push($results["chat"], $tmp);
					   
					}
					$results["status"] = 1;
                    $json =$results;
					
							echo json_encode($results);
					
				
					
?>					