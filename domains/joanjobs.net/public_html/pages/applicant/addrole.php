
<?php
include("../connect.php");
session_start();
//Fetching Values from URL
$title=$_POST['role'];


//Insert query

  $result = $db->prepare("insert into expertise (accountid,title) values (:a,:b)");
  $result->execute(array(':a'=>$_SESSION['SESS_MEMBER_ID'],':b'=>$title));


 $sql="UPDATE jobseekers set role=:a where accountid=:i";
 $q = $db->prepare($sql);
$q->execute(array(':a'=>$title,':i'=>$_SESSION['SESS_MEMBER_ID']));



	   
header("location: editroles.php?accountid=".$_SESSION['SESS_MEMBER_ID']);
?>