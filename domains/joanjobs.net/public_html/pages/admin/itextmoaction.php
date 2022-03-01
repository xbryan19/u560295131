<?php

require_once 'itextmo.php';

$num=$_POST['number'];
$message=$_POST['message'];




$send = itext();
$send->sendMsg($num,$message,'TR-DONMI871558_QXSCA');




header("location: home.php"); 
?>
