<?php 

function connect_db(){
		static $connection;

		if (!isset($connection)) {
			
			$connection = mysqli_connect('localhost','root','','joandb');
		
		}

		if ($connection===false) {
			
			return mysqli_connect_error();
		}
		return $connection;
}
		function test_input($data){

			$data = htmlentities($data);
			$data = stripslashes($data);
			$data = trim($data);
			return $data;

		}


 ?>