
<?php
include("../connect.php");
session_start();

//Fetching Values from URL
$id=$_GET['id'];

//Insert query

  $result = $db->prepare("delete from expertise where id=:a");
  $result->execute(array(':a'=>$id));

	   
header("location: editroles.php?accountid=".$_SESSION['SESS_MEMBER_ID']);
?>