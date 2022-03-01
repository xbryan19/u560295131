<?php 
	include ('connect.php');

	$a = $_POST['email'];
	$b = $_POST['password'];

	$sql = "SELECT * FROM jobseekers WHERE email = ?";
	$query = $db->prepare($sql);
	$query->execute(array($a));
	$row = $query->fetch();
	
	if (($query->rowCount() > 0 )&&(password_verify($b, $row["password"]))){
		if($row["status"]==1){
		session_start();
		$_SESSION['SESS_MEMBER_ID'] = $row['accountid'];
		$_SESSION['SESS_email'] = $row['email'];
		  {
	    $sql="INSERT INTO `logs` (name,category,status) VALUES(:a,'Applicant','log in')";
        $q = $db->prepare($sql);
        $q->execute(array(':a'=>$a));
					}
		echo 1;}
	    else 
		{echo 200;}

	}else{
		echo 0;
	}

?>
