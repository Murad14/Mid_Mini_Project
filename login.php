<?php

    if(isset($_GET['msg'])){
        echo $_GET['msg'];
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
