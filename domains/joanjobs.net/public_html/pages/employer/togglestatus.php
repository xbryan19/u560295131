<?php

include("connect.php");

$status=$_GET['status'];
$jobid=$_GET['jobid'];


 $sql="update `jobs` set `status`=:status where jobid=:jobid";
 $q = $db->prepare($sql);
$q->execute(array(':status'=>$status,':jobid'=>$jobid));

if($q->rowCount()==1)
	echo "1";
else
	echo "0";

 header("location: jobdetails.php?jobid=".$jobid); 
    ?>