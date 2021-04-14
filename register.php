<?php
 	if($_SERVER["REQUEST_METHOD"]=="POST"){
 		$fullname=$_POST['fullname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
			
		$array_data = [
			'fullname' => $fullname,
			'email' => $email,
			'password' => $password
		];

		echo "Registered Successfully!!";

		file_put_contents($array_data['email'].'.json', json_encode($array_data));


 	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
</head>
<body>
	<style type="text/css">
		body{
			background: #C0C0C0;
			color: black;
		}
		.register{
			position: fixed;
			top: 100px;
			left: 40%;
		}
	</style>
	<div class="register">
		<form method="POST" action="register.php">
			<div class="form-group">
				<label for="fullname">Full Name<span style="color: red;">*</span></label>
				<input type="text" class="form-control" id="fullname" name="fullname" value="" required>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Email address<span style="color: red;">*</span></label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="" required>
			</div>
			<div class="form-group">
				<label for="password">Password<span style="color: red;">*</span></label>
			    <input type="password" class="form-control" id="password" name="password" value="" required>
			</div>
			<button type="submit" class="btn btn-primary">Register</button>
			<p>Already a user? <a href="login.php">Login Here</a></p>
		</form>
	</div>
</body>
</html>