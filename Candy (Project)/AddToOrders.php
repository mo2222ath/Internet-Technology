<?php
include_once "Connection.php";

$IdCandy = $_GET['IDOr'];



$sqlOrder = "INSERT INTO orders(OrderQuantity, CandyId) VALUES (1,'".$IdCandy."')";



// print $sql;


if($conn->query($sqlOrder)){
	header("location:index.php?done=1");
}
else{
	header("location:index.php?done=0");
}



?>