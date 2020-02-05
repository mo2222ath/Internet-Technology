<?php
include_once "Connection.php";

$IdCandy = $_GET['IDCC'];



$sqlCandy = "SELECT ID, Name, Type, Quantity, Price FROM candy";

$resultCC = $conn->query($sqlCandy);


foreach ($resultCC as $key) {
	if ($IdCandy == $key['ID']) {
		if ($key['Type'] == "Chocolate") {
			header("location:Chocolate.php?done=1");
		}elseif($key['Type'] == "Lollipops"){
			header("location:Lollipops.php?done=1");
		}else{
			header("location:SugarFree.php?done=1");
		}

	}
}





?>