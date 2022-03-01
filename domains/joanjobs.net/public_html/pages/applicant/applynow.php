
<?php
include("../connect.php");
session_start();
//Fetching Values from URL
$jobid=$_GET['jobid'];
$accountid=$_GET['accountid'];
//Insert query

  $result = $db->prepare("insert into jobapplications (accountid,jobid) values (:a,:b)");
  $result->execute(array(':a'=>$accountid,':b'=>$jobid));

	   
header("location: jobdetails.php?jobid=".$jobid);
?>