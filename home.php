<?php
	session_start();

	if(isset($_SESSION['status'])){
		if($_SESSION['status'] == "OK"){

?>

<html>
	<head>
		<title>Welcome</title>
	</head>
	<body>
        <h1>Welcome Anne!</h1>
        <a href="profile.php">Profile</a>
        <br>
        <a href="change_password.php">Change Password</a>
        <br>
        <a href="logout.php">Logout</a>
	</body>
</html>

<?php
}else{
		header('location: login.php');
		}
	}else{
		header('location: login.php');
	}
?>