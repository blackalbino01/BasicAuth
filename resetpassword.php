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
		.newpassword{
			position: fixed;
			top: 200px;
			left: 40%;
		}
	</style>
	<div class="newpassword">
		<form class="login-form" action="resetpasswordaction.php" method="post">
			<h2 class="form-title">New password</h2>
			<div class="form-group">
				<label>New password</label>
				<input type="password" name="new_pass">
			</div>
			<div class="form-group">
				<label>Confirm new password</label>
				<input type="password" name="new_pass_c">
			</div>
			<div class="form-group">
				<button type="submit" name="new_password" class="login-btn">Submit</button>
			</div>
		</form>
	</div>
</body>
</html>