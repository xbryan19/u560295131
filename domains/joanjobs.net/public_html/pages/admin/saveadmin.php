<?php

include("../connect.php");

$email=$_POST['email'];
$lname=$_POST['lname'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$pword=$_POST['pword'];


 $sql="INSERT INTO `users` (email,lname,fname,mname,password) VALUES(:a,:b,:c,:d,:h)";
 $q = $db->prepare($sql);
$q->execute(array(':a'=>$email,':b'=>$lname,':c'=>$fname,':d'=>$mname,':h'=>$pword));

if($q->rowCount()==1)
	echo "1";
else
	echo "0";

 header("location: home.php"); 
    ?>