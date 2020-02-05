<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- jQuery library -->
	<script src="js/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</head>
<body>

	<div id='Submit'>
		<div class="Form">
            <form action="SaveUser.php" method="post">
				<div class='panel panel-primary'>
						<div class='panel-heading'>Add User</div>
						<div class='panel-body'>
					        <span >User name :</span> <br>
	                		<input id='UserName' type='text' name='name' class='form-control' ><br>
	                		<span >Password:</span> <br>
	                		<input id='Password' type='Password' name='Password' class='form-control' ><br>
	                		<span >Confirm Password:</span> <br>
	                		<input id='ConfirmPassword' type='Password' name='ConfirmPassword' class='form-control' ><br>
	                		<span >Email :</span> <br>
	                		<input id='email' type='email' name='email' class='form-control' ><br>
	                		<span >Age:</span> <br>
	                		<input id='age' type="text" name='age' class='form-control' ><br>

						</div>
						<div class='panel-footer'>
							<button onclick='SubmitUser()' class='btn btn-info'><i class='fa fa-save'></i> Submit</button>
						</div>
				</div>
			</form>
		</div>
	</div>

</body>
</html>

<script type="text/javascript">
	

	function SubmitUser(){
		var Password = document.getElementById("Password").value;
		var ConfirmPassword = document.getElementById("ConfirmPassword").value;
		var Age = document.getElementById("age").value;

		if(Password != ConfirmPassword){
			alert("The Passwords are not the same!!!");
		}

		if(!Number.isInteger(Age)){
			alert("Wrong age !!");
		}

	}


</script>