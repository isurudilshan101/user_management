<?php require_once('inc/connection.php'); ?>
<?php 

// check for form submission
if(isset($_POST['submit'])){

$errors=array();
// check if the username and password has been entered
	if(!isset($_POST['email']) || strlen(trim($_POST['email']))<1){
		$errors[]="User name is missing/Invalid;";
	}

	if(!isset($_POST['password']) || strlen(trim($_POST['password']))<1){
		$errors[]='Password is missing/Invalid';
	}
//check if there are any errors in the form
if(empty($errors)){
//save username and passwword into variables
	$email=mysqli_real_escape_string($connection,$_POST['email']);

	$password=mysqli_real_escape_string($connection,$_POST['password']);
	$hashed_password=sha1($password);


//prepare database query
	$query="SELECT * FROM user WHERE email='{$email}' AND password='{$hashed_password}' LIMIT 1";

	$result_set=mysqli_query($connection,$query);

	if($result_set){
		//query succesful
		if(mysqli_num_rows($result_set)==1){
			//valid user found
			//redirect to users.php
			header('Location:users.php');

		}else{
			$errors[]='Invalid Username / Password';
		}

	}else{
		$errors[]='database query failed';
	}

//check if the user is valid



//if not, display the error 
}	



} 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Log In - User Management System</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<div class="login">
		
		<form action="index.php" method="post"></form>
		<fieldset>
			<legend><h1>Log In</h1></legend>

			<?php>
				if(isset($errors) && !empty($errors)){
					echo '<p class="error">Invalid Username / Password</p>';
				}

			?>
			


			<p>
				<label for="">Username:</label>
				<input type="text" name="email" id="" placeholder="Email Address">

			</p>

			<p>
				<label for="">Password</label>
				<input type="password" name="password" id="" placeholder="Password">
			</p>

			<button type="submit" name="submit">Log In</button>
		</fieldset>

	</div> <!--login-->


</body>
</html>
<?php mysqli_close($connection); ?>