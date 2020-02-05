<?php

include_once('../Connection.php');
session_start();

$username = $_POST['username'];
$password = $_POST['pass'];


print $username."     " . $password;

$sqlUser = "SELECT * FROM user where UserName = '".$username."'";



$resultUser = $conn->query($sqlUser);




foreach ($resultUser as $key ) {
	// print $key['UserName'] . " " . $key['Password'] ;
	$flag = true;
	if($key['UserName'] == $username ) 
	{
		if ($key['Password'] == $password ) {
			$flag = true;
			$_SESSION['username'] = $username;
			header("location:../index.php");

		}else
		{
			header("location:login.php?pass_Wrong=Pass");
		}
	}else{
		$flag = false;
	}

}

if (!$flag) {
	header("location:login.php?pass_Wrong=Pass");
}



?>