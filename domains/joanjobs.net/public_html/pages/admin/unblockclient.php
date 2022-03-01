<?php
session_start();
include("../connect.php");

$id=$_GET["accountid"];
$sql="UPDATE `employers` set `status`=1 where accountid=:id";
$q = $db->prepare($sql);
$q->execute(array(':id'=>$id));

if($q->rowCount()==1)
	echo "1";
else
	echo "0";

header("location: employerprofile.php?accountid=".$id);  
    ?>