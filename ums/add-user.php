<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php require_once('inc/functions.php'); ?>



<!DOCTYPE html>
<html>
<head>
	<title>Add New User</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<header>
		<div class="appname">User management System</div>
		<div class="loggedin">Welcome <?php echo $_SESSION['first_name']; ?>! <a href="logout.php">Log Out</a></div>
	</header>

	<main>
		<h1>Add New User<span><a href="users.php"> < Back to User List</a></span>	</h1>	
		
		<form action="add-user.php" method="post" class="userform">
			<p>
				<label for="">Fiest Name:</label>
				<input type="text" name="first_name">
			</p>

			<p>
				<label for="">Last Name:</label>
				<input type="text" name="last_name">
			</p>

			<p>
				<label for="">Email Address:</label>
				<input type="Email" name="email">
			</p>

			<p>
				<label for="">New Password</label>
				<input type="password" name="password">
			</p>

			<p>
				<label for="">&nbsp;</label>
			</p>
			
		</form>


	</main>
</body>
</html>