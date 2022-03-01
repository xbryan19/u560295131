<?php
include("connect.php");

$id = $_POST['id'];
$email = $_POST['email'];
$password = $_POST['password']; 
$lname =  $_POST['lname'];
$fname =  $_POST['fname'];
$mname =  $_POST['mname'];
$address =  $_POST['address'];
$bday =  $_POST['bday'];
$contact =  $_POST['contact'];
$gender =  $_POST['gender'];
/*
$email = 'email';
$password = 'password'; 
$password = sha1($password);
$lname =  'lname';
$fname =  'fname';
$mname =  'mname';
$address ='address';*/

$response = array();

$sql = 'UPDATE employers SET contact=:contact,birthday =:bday,gender =:gender,lname =:lastname,fname =:firstname,mname =:middlename,email =:email,password =:password,address=:address where accountid=:id';

$query = $db ->prepare($sql);
$query->execute(array(':lastname' => $lname,':firstname' => $fname,':middlename' => $mname,':email' => $email,':address' => $address,
     ':password' => $password,':gender' => $gender,':bday' => $bday,':id' => $id,':contact' => $contact));
    if ($query->rowCount() > 0) {
            $response["error"] = false;
            $response["message"] = "Account created successfully!";

        } else {

            $response["error"] = true;
            $response["message"] = "Failed to update account!";

        }
	
    echo json_encode($response);

	?>