<?php
/* Database config */
// $db_host		= 'localhost';
// $db_user		= 'u560295131_joanjobs';
// $db_pass		= 'Batstateu1';
// $db_database	= 'u560295131_joanjobs'; 
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= 'admin';
$db_database	= 'joan'; 
/* End config */

$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>