<?php
include("connect.php");

	/*$msg = "type ko c julie";
	$myid = "rose@yahoo.com";
	$fid = "b@yahoo.com";*/
	$msg = $_POST['message'];
	$myid = $_POST['from'];
	$fid = $_POST['to'];
			if(empty($msg)){
				//$json = array('status' => 0, 'msg'=> 'Enter your message!.');
					$results["error"] = "false";
						$results["msg"] = "Record inserted";
			}else{
				
				$qur =  $db->prepare('insert into chat set `to`="'.$fid.'", `from`="'.$myid.'", `msg`="'.$msg.'", `status`="1"');
                $qur->execute();
				if($qur->rowCount()==1){
					$results["error"] = "false";
						$results["msg"] = "Record inserted";
				}else{	$results["error"] = "true";
						$results["msg"] = "Something went wrong";}
			}
			
		         
                    $json = $results;
					echo json_encode($results);
					
?>