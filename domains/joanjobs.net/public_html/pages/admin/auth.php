<?php
	include '../connect.php';

	//Start session
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_ADMIN_ID']) || (trim($_SESSION['SESS_ADMIN_ID']) == '')) {
		header("location: index.php");
		exit();
	}

	$session_id  = $_SESSION['SESS_ADMIN_ID'];

	$query = $db->prepare("SELECT * FROM users WHERE userid = ?");
	$query->execute(array($session_id));
	$row = $query->fetch();

	$session_admin_name = $row['fname']." ".$row['mname'] ." ". $row['lname'];
	$_SESSION['PWD'] = $row['password'];
    $_SESSION['EMAIL'] = $row['email'];
	

	
?>