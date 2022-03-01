<?php 

session_start();

include ('../connect.php');
	$a=$_SESSION['SESS_email'];


   $sql="INSERT INTO `logs` (name,category,status) VALUES(:a,'Client','log out')";
 $q = $db->prepare($sql);
$q->execute(array(':a'=>$a));
session_destroy();

session_destroy();

header('location: ../index.php');


?>
