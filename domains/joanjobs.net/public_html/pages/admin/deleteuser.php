<?php

include("../connect.php");

$sid=$_GET['id'];

$sql="DELETE from `users` where userid=:id";
$q = $db->prepare($sql);
$q->execute(array(':id'=>$sid));

header("location: useradmin.php");
  
    ?>