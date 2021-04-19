
<!DOCTYPE html>
<html>
<head>
	<title>Password Reset</title>
</head>
<body>
	<style type="text/css">
		body{
			background: #C0C0C0;
			color: black;
		}
		.passwordreset{
			position: fixed;
			top: 200px;
			left: 40%;
		}
	</style>
	<div class="passwordreset">
		<form class="login-form" action="resetpasswordaction.php" method="post">
			<h2 class="form-title">Reset password</h2>
			<div class="form-group">
				<label>Your email address</label>
				<input type="email" name="email">
			</div>
			<div class="form-group">
				<button type="submit" name="reset-password" class="login-btn">Submit</button>
			</div>
		</form>
	</div>
</body>
</html>
