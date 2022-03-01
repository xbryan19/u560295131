<?php
session_start();
include("../connect.php");

$email=$_POST['email'];
$lname=$_POST['lname'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];

$pword=$_POST['pword'];

$id = $_SESSION['SESS_ADMIN_ID'];
 $sql="UPDATE `users` set email=:a,lname=:b,fname=:c,mname=:d,password=:h where userid=:i";
 $q = $db->prepare($sql);
$q->execute(array(':a'=>$email,':b'=>$lname,':c'=>$fname,':d'=>$mname,':h'=>$pword,':i'=>$id));

if($q->rowCount()==1)
	echo "1";
else
	echo "0";

header("location: home.php");  
    ?>