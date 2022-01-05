<?php

if(isset($_REQUEST["submit"])){
	//echo "Hello". $_POST['user'];
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	echo "Username:".$user." , "."Password:".$pass;
}
?>

<form method="post">
	Username::<input type="text" name="user"></br>
	Password::<input type="password" name="pass"></br>
	<input type="submit" value="Submit" name="submit">
</form>