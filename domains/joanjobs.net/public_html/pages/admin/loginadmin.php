<?php 
	include ('../connect.php');

	$a = $_POST['email'];
	$b = $_POST['password'];

	$sql = "SELECT * FROM users WHERE email = ? AND password = ?";
	$query = $db->prepare($sql);
	$query->execute(array($a,$b));
	$row = $query->fetch();

	if ($query->rowCount() > 0){
		session_start();
		$_SESSION['SESS_ADMIN_ID'] = $row['userid'];
		echo 1;
	}else{
		echo 0;
	}

?>
