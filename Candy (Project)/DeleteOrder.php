<?php
include_once "Connection.php";

$Id = $_GET['ID'];




$sqlOrder = "DELETE FROM orders WHERE IdOrder = '".$Id."'";




// print $sql;


if($conn->query($sqlOrder)){
	header("location:index.php?done=1");
}
else{
	header("location:index.php?done=0");
}



?>