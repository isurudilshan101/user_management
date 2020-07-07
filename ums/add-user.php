<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php require_once('inc/functions.php'); ?> 
<?php 

	$errors=array();

	if(isset($_POST['submit'])){
		//checking required fields

		if(empty(trim($_POST['first_name']))){
			$errors[]='First Name is required';
		}

		if(empty(trim($_POST['last_name']))){
			$errors[]='Last Name is required';
		}

		if(empty(trim($_POST['email']))){
			$errors[]='Email is required';
		}

		if(empty(trim($_POST['password']))){
			$errors[]='Password is required';
		}
	}

 ?>



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

		<?php 

		if(!empty($errors)){
			echo '<div class="errmsg">';
			echo '<b>There ware errors on your form.</b>';
			foreach ($errors as $error) {
				echo $error;
			}
			echo '</div>';
		}


		 ?>
		
		<form action="add-user.php" method="post" class="userform">
			<p>
				<label for="">First Name:</label>
				<input type="text" name="first_name" >
			</p>

			<p>
				<label for="">Last Name:</label>
				<input type="text" name="last_name" >
			</p>

			<p>
				<label for="">Email Address:</label>
				<input type="Email" name="email" >
			</p>

			<p>
				<label for="">New Password:</label>
				<input type="password" name="password" >
			</p>

			<p>
				<label for="">&nbsp;</label>
				<button type="submit" name="submit">Save</button>
			</p>
			
		</form>


	</main>
</body>
</html>