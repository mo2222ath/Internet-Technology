<?php

if (isset($_POST["submit"])) {

	include_once "../Connection.php";
	session_start();

	$username = $_POST['username'];
	$password = $_POST['pass'];

	$sqlUser = "INSERT INTO user (UserName, Password) VALUES ('".$username."','".$password."')";



	if($conn->query($sqlUser)){
		$_SESSION['username'] = $username;
		header("location:../index.php?done=1");
	}
	else{
		header("location:SignUp.php.php?done=0");
	}

}else{
	header("location:SignUp.php.php?done=0");
}




?>

