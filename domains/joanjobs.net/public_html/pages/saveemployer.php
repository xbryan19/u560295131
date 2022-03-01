<?php
session_start();
include("connect.php");


$code = $_POST['code'];

if(password_verify($code, $_SESSION['hash'])) {
    $_SESSION['pword'] = password_hash($_SESSION['pword'], PASSWORD_DEFAULT);
    $query = "INSERT INTO employers (email,lname,fname,mname,gender,address,birthday,contact,password,education,civilstatus,verified) VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i,:j,:k,1)";
	$sql = $db->prepare($query);
	
    $sql->bindParam(':a', $_SESSION['email'], PDO::PARAM_STR);
    $sql->bindParam(':b', $_SESSION['lname'], PDO::PARAM_STR);
    $sql->bindParam(':c', $_SESSION['fname'], PDO::PARAM_STR);
    $sql->bindParam(':d', $_SESSION['mname'], PDO::PARAM_STR);
    $sql->bindParam(':e', $_SESSION['gender'], PDO::PARAM_STR);
    $sql->bindParam(':f', $_SESSION['address'], PDO::PARAM_STR);
    $sql->bindParam(':g', $_SESSION['bday'], PDO::PARAM_STR);
    $sql->bindParam(':h', $_SESSION['phone'], PDO::PARAM_STR);
    $sql->bindParam(':i', $_SESSION['pword'], PDO::PARAM_STR);
    $sql->bindParam(':j', $_SESSION['edu'], PDO::PARAM_STR);
    $sql->bindParam(':k', $_SESSION['civil'], PDO::PARAM_STR);
	$sql->execute();
	
	/* secret_client parameter*/
	$sa = "INSERT INTO secret_client (question,answer,email) VALUES (:que,:ans,:em)";
	$sql1 = $db->prepare($sa);
	
	$sql1->bindParam(':que', $_SESSION['question'], PDO::PARAM_STR);
	$sql1->bindParam(':ans', $_SESSION['answer'], PDO::PARAM_STR);
	$sql1->bindParam(':em', $_SESSION['email'], PDO::PARAM_STR);
    $sql1->execute();
	
    $q = $sql->rowCount();
    $r = $sql1->rowCount();
    if($q == 1 && $r == 1){
        echo "<script type = \"text/javascript\">
            alert(\"Register Successful.................\");
            window.location = (\"index.php\")
            </script>";
    }else{
        echo "0";
    }
}else{
    echo "<script type = \"text/javascript\">
									alert(\"Invalid Code!\");
									window.location = (\"newaccount.php\")
									</script>";
}
?>

    

    




	


	
