<?php require_once('inc/connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Log In - User Management System</title>
</head>
<body>

	<div class="login">
		
		<form action="index.php" method="post"></form>
		<fieldset>
			<legend><h1>Log In</h1></legend>
			<p>
				<label for="">Username:</label>
				<input type="text" name="email" id="" placeholder="Email Address">

			</p>

			<p>
				<label for="">Password</label>
				<input type="Password" name="" id="" placeholder="Password">
			</p>
		</fieldset>

	</div> <!--login-->


</body>
</html>
<?php mysqli_close($connection); ?>