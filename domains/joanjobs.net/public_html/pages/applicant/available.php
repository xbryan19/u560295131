
<?php
include("../connect.php");
session_start();
//Fetching Values from URL

$accountid=$_GET['accountid'];
//Insert query
 $sql="UPDATE availability set avail=:a where accountid=:i";
 $q = $db->prepare($sql);
$q->execute(array(':a'=>'Available',':i'=>$accountid));

 $sql="UPDATE jobseekers set avail=:a where accountid=:i";
 $q = $db->prepare($sql);
$q->execute(array(':a'=>'Available',':i'=>$accountid));


	   
header("location: myprofile.php?accountid=".$accountid);
?>