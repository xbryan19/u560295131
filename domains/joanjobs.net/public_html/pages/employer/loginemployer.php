<?php 
	include ('connect.php');

	$a = $_POST['email'];
	$b = $_POST['password'];
	
	
	

	$sql = "SELECT * FROM employers	 WHERE email = ? AND password = ?";

	$query = $db->prepare($sql);
	$query->execute(array($a,$b));
	$row = $query->fetch();

	if ($query->rowCount() > 0){

		if($row["status"]==1){
		session_start();
	    $_SESSION['SESS_CLIENT_ID'] = $row['accountid'];
	    $_SESSION['SESS_email'] = $row['email'];
	    {
	    $sql="INSERT INTO `logs` (name,category,status) VALUES(:a,'Client','log in')";
 $q = $db->prepare($sql);
$q->execute(array(':a'=>$a));
					}
		echo 1;}




	    else 

		{echo 200;}
	
					}else{
		echo 0;
	}

?>
