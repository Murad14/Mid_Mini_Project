<?php

	session_start();

	if(isset($_POST['submit'])){
        $name       = $_POST['name'];
        $email 		= $_POST['email'];
		$uname 		= $_POST['userName'];
        $password 	= $_POST['password'];
        $cpassword  = $_POST['confirmPassword'];
		$gender     = $_POST['gender'];
		$dob		= $_POST['dob'];

        if($password!=$cpassword){

                echo "pass not matched";
        }
        else{
			$_SESSION['name'] 		= $name;
			$_SESSION['email'] 	= $email;
            $_SESSION['userName'] 		= $uname;
            $_SESSION['password']= $password;
			$_SESSION['gender']= $gender;
			$_SESSION['dob']= $dob;

            echo "done!";
            header('location: login.php');
		}

	}
?>


<html>
	<head>
		<title>Registration</title>
	</head>
	<body>
<fieldset width="100%">
    <legend><b>REGISTRATION</b></legend>
	<form method="post">
		<br/>
		<table width="70%" cellpadding="0" cellspacing="0">
			<tr>
				<td>ID</td>
				<td>:</td>
				<td><input name="name" type="text"></td>
				<td></td>
			</tr>
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="password" type="password"></td>
				<td></td>
			</tr>
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Confirm Password</td>
				<td>:</td>
				<td><input name="confirmPassword" type="password"></td>
				<td></td>
			</tr>
			<tr><td colspan="4"><hr/></td></tr>
      <tr>
        <td>Name</td>
        <td>:</td>
        <td><input name="text" type="name"></td>
        <td></td>
      </tr>
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Date of Birth</legend>
						<input name="dob" type="text" size="2" />/
						<input name="dob" type="text" size="2" />/
						<input name="dob" type="text" size="4" />
						<font size="2"><i>(dd/mm/yyyy)</i></font>
					</fieldset>
				</td>
				<td></td>
			</tr>
		</table>
		<hr/>
		<input type="submit" name="submit" value="Submit">
		<input type="reset">
	</form>
</fieldset>

	</body>
</html>
