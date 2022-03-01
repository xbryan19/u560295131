<?php
// Connection


include("../connect.php");
$json = '';

if(isset($_GET["rq"])):
	switch($_GET["rq"]):
		case 'new':
			$msg = $_POST['msg'];
			$myid = $_POST['mid'];
			$fid = $_POST['fid'];
			if(empty($msg)){
				//$json = array('status' => 0, 'msg'=> 'Enter your message!.');
			}else{
				
				$qur =  $db->prepare('insert into chat set `to`="'.$fid.'", `from`="'.$myid.'", `msg`="'.$msg.'", `status`="1"');
                $qur->execute();
				
				
				if($qur->rowCount()==1){
					$qurGet = $db->prepare("select * from chat where id='".$db->lastInsertId()."'");
					$qurGet->execute();
					
					while($row = $qurGet->fetch()){
						$json = array('to'=>$row['to'],'from'=>$row['from'],'status' => 1, 'msg' => $row['msg'], 'lid' => $db->lastInsertId(), 'time' => $row['time']);
					}
				}else{
					$json = array('status' => 0, 'msg'=> 'Unable to process request.');
				}
			}
		break;
		case 'exist':
		       $results["chat"] = array();
			$myid = $_POST['mid'];
			$fid = $_POST['fid'];

					// update status
		            $up = $db->prepare("UPDATE `chat` SET  `status` = '0' WHERE `to`='$myid' && `from`='$fid'");
		         	$up->execute();
				
				
					$qurGet = $db->prepare("select * from chat where (`to`='$myid' && `from`='$fid') or (`to`='$fid' && `from`='$myid') ");
					$qurGet->execute();
					
					while($row = $qurGet->fetch()){
						$tmp = array();
						//$json = array('status' => 1, 'msg' => $row['msg'],  'time' => $row['time']);
						$tmp["msg"] = $row["msg"];
			            $tmp["time"] = $row["time"];
						$tmp["id"] = $row["id"];
						$tmp["from"] = $row["from"];
    		            array_push($results["chat"], $tmp);
					   
					}
					$results["status"] = 1;
                    $json =$results;
		break;
		case 'msg':
			$myid = $_POST['mid'];
			$fid = $_POST['fid'];
			$lid = $_POST['lid'];
			if(empty($myid)){

			}else{
				//print_r($_POST);
				$qur = $db->prepare("select * from chat where `to`='$myid' && `from`='$fid' && `status`=1");
				$qur->execute();
				
				if($qur->rowCount() > 0){
					$json = array('status' => 1);
				}else{
					$json = array('status' => 0);
				}
			}
		break;
		case 'NewMsg':
			$myid = $_POST['mid'];
			$fid = $_POST['fid'];

			$qur = $db->prepare("select * from chat where `to`='$myid' && `from`='$fid' && `status`=1 order by id desc limit 1");
			$qur->execute();
			
			while($rw = $qur->fetch()){
				$json = array('status' => 1, 'msg' => '<div>'.$rw['msg'].'</div>', 'lid' => $rw['id'], 'time'=> $rw['time']);
			}
			// update status
			$up = $db->prepare("UPDATE `chat` SET  `status` = '0' WHERE `to`='$myid' && `from`='$fid'");
			$up->execute();
			
		break;
	endswitch;
endif;


//header('Content-type: application/json');
echo json_encode($json);
?>