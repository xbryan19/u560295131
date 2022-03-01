<?php
	include '../connect.php';

	//Start session
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) {
		header("location: index.php");
		exit();
	}

	$session_id  = $_SESSION['SESS_MEMBER_ID'];

	$query = $db->prepare("SELECT * FROM jobseekers WHERE accountid = ?");
	$query->execute(array($session_id));
	$row = $query->fetch();

	$session_applicant_name = $row['fname']." ".$row['mname'] ." ". $row['lname'];
	$_SESSION['PWD'] = $row['password'];
    $_SESSION['EMAIL'] = $row['email'];
	$_SESSION['VERIFIED'] = $row['verified'];
	
	if($_SESSION['VERIFIED']==0 ) {
		header("location: index.php");
		exit();
	}
	
?>