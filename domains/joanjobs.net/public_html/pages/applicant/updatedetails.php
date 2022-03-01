<?php
session_start();
include("../connect.php");

$email=$_POST['email'];
$lname=$_POST['lname'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$pword=$_POST['pword'];
$bday=$_POST['bday'];
$id = $_SESSION['SESS_MEMBER_ID'];
 $sql="UPDATE `jobseekers` set email=:a,lname=:b,fname=:c,mname=:d,gender=:e,address=:f,birthday=:g,password=:h where accountid=:i";
 $q = $db->prepare($sql);
$q->execute(array(':a'=>$email,':b'=>$lname,':c'=>$fname,':d'=>$mname,':e'=>$gender,':f'=>$address,':g'=>$bday,':h'=>$pword,':i'=>$id));

if($q->rowCount()==1)
	echo "1";
else
	echo "0";

header("location: myprofile.php");  
    ?>