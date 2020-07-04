<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>

<?php
	//cheking if a user is logged in
	if (!isset($_SESSION['user_id'])){
		header('Location:index.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<header>
		<div class="appname">User management System</div>
		<div class="loggedin">Welcome <?php echo $_SESSION['first_name']; ?>! <a href="logout.php">Log Out</a></div>
	</header>
</body>
</html>