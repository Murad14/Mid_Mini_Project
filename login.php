<?php
	session_start();

	if(isset($_POST['submit'])){

		$uname 		= $_POST['userName'];
		$password 	= $_POST['password'];

    if(isset($_SESSION['userName']) && isset($_SESSION['password'])){

			if($uname == $_SESSION['userName'] && $password == $_SESSION['password']){
					$_SESSION['status'] = "OK";
					header('location: homekkk.php');
				}else{
          echo "don't have any account!";
				}
    }
    else{
      echo "failed";
    }


  }




?>

<html>
	<head>
		<title>LOGIN</title>
	</head>
	<body>
        <legend><b>LOGIN</b></legend>
        <form method="post">
            <table>
                <tr>
                    <td>User Id</td>
                    <td>:</td>
                    <td><input name="userName" type="text"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input name="password" type="password"></td>
                </tr>
            </table>
            <hr />
            <input name="remember" type="checkbox">Remember Me
            <br/><br/>
            <input name="submit" type="submit" value="Submit">
            <a href="register.php">Register</a>
        </form>
    </fieldset>
	</body>
</html>
