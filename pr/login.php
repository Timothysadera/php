
<!DOCTYPE html>
<html>
	<head>
		<title>User registration</title>
		<link rel="stylesheet" type="text/css" href="mystyle.css"></link>
	</head>
<body>
	<div class="header">
	<h2>Login</h2>
	</div>
		
	<form method="post" action="login.php">
		<div class="input-group">
		<label>Username</label>
		<input type="text" name="username">
	</div>

		<div class="input-group">
		<label>Password</label>
		<input type="Password" name="Password">
	</div>
	 <div class="input-group">
	 	<button type="submit" name="login" class="btn">Login</button>
	 </div>
	 <p>
	 	Not yet a member? <a href="register.php">Sign up</a>
	 </p>
	</form>
</body>
</html>