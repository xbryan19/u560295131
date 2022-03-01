
<?php
include("../connect.php");
session_start();
//Fetching Values from URL
$jobid=$_GET['jobid'];
$accountid=$_GET['accountid'];
//Insert query

  $result = $db->prepare("delete from jobapplications  where accountid=:a and jobid=:b");
  $result->execute(array(':a'=>$accountid,':b'=>$jobid));

	   
header("location: jobdetails.php?jobid=".$jobid);
?>