<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>

<?php
	//cheking if a user is logged in
	if (!isset($_SESSION['user_id'])){
		header('Location:index.php');
	}

	$user_list= '';

	//getting the list of users
	$query="SELECT * FROM user WHERE is_deleted=0 ORDER BY first_name";
	$users=mysqli_query($connection,$query);

	if($users){
		while($user=mysqli_fetch_assoc($users)){
			$user_list .="<tr>";
			$user_list .="<td>{$user['first_name']}</td>";
			$user_list .="<td>{$user['last_name']}</td>";
			$user_list .="<td>{$user['last_login']}</td>";
			$user_list .="<td><a href=\"modify-user.php?user_id={$user['id']}\">Edit</a></td>";
			$user_list .="<td><a href=\"delete-user.php?user_id={$user['id']}\">Delete</a></td>";



			$user_list .="</tr>";
		}
	}else{
		echo "Database query failed";
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

	<main>
		<h1>Users <span><a href="add-user.php">+Add New</a></span>	</h1>	
		<table class="masterlist"></table>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Last Login</th>
			<th>Edit</th>
			<th>Delete</th>

			<?php echo $user_list; ?>

		</tr>
		</table>

	</main>
</body>
</html>