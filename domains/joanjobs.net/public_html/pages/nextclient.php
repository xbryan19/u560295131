<?php

include("connect.php");







$a=$_POST['email'];

$b=$_POST['password'];
$c=$_POST['question'];
$d=$_POST['answer'];

	$sql = "SELECT * FROM secretclient WHERE email ='$a' AND question='$c' AND answer='$d' ";
	$query = $db->prepare($sql);
	$query->execute(array($a,$b));
	$row = $query->fetch();



	if ($query->rowCount() ==1){


 $sql="UPDATE `employers` set password=:a where email='$a' ";
 $q = $db->prepare($sql);
$q->execute(array(':a'=>$b  ));


     echo "<script>alert('changed password successful'); </script>";

}
else{
echo "<script>alert('changed password not successful');</script>";
}


     
    ?>





