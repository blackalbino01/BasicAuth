<?php

	if($_SERVER["REQUEST_METHOD"]=="POST"){

		$email=$_POST['email'];
		$password=$_POST['password'];


		if(file_exists($email.'.json')){

			$data = json_decode(file_get_contents($email.'.json'), true);

			if ($data["email"] == $email && $data["password"] == $password) {

				session_start();
				$_SESSION['login'] = "1";
				header ("Location: welcome.php");
			}
		}
			
		else {
			echo"<p style=\"color:red; left:520px; position:relative; top:140px; font-weight:800;font-size:30px;\">Login failed</p>";
			session_start();
			$_SESSION['login'] = '';
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<style type="text/css">
		body{
			background: #C0C0C0;
			color: black;
		}
		.login{
			position: fixed;
			top: 200px;
			left: 40%;
		}
	</style>
	<div class="login">
		<form method="POST" action="login.php">
			<div class="form-group">
				<label for="exampleInputEmail1">Email<span style="color: red;">*</span></label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php print($email) ?>" name="email"  required>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password<span style="color: red;">*</span></label>
				<input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
			</div>
			<button type="submit" class="btn btn-primary">login</button>
			<p><a href="email.php">Forgot your password?</a></p>
		</form>
	</div>
</body>
</html>
