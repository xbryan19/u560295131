<?php

include("../connect.php");

$author =$_POST['accountid'];
$title=$_POST['jtitle'];
$desc=$_POST['jdesc'];
$payrate=$_POST['jrate'];
$role=$_POST['role'];
$name=$_POST['jname'];
$xdate=$_POST['xdate'];

var_dump($payrate);

 $sql="INSERT INTO `jobs` (jobtitle,description,accountid,payrate,role,xdate) VALUES(:a,:b,:c,:d,:e,:f)";
 $q = $db->prepare($sql);
$q->execute(array(':a'=>$title,':b'=>$desc,':c'=>$author,':d'=>$payrate,':e'=>$role,':f'=>$xdate));

$sql="UPDATE `jobseekers` set jobtitle=:a,description=:b,name=:c  where role=:d";
 $q = $db->prepare($sql);
$q->execute(array(':a'=>$title,':b'=>$desc,':c'=>$name,':d'=>$role));


header("location: myjobpost.php?accountid=".$accountid);


  
    ?>