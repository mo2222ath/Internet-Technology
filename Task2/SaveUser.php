<?php

include "db.php";

$Name = $_POST['name'];
$password = $_POST['Password'];
$Email = $_POST['email'];
$Age = $_POST['age'];



$sql = "INSERT INTO `users`(`name`, `password`, `email`, `age`) VALUES ('".$Name."','".$password."','".$Email."','".$Age."')";

// echo $sql;

if($db->exec($sql)){
	print "Entered Successfully";
}
else{
	print "Entered Failed !!!";
}

?>