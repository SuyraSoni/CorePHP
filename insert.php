<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('connection.php');
if(isset($_REQUEST['submit'])){
	$username = $_POST['user'];
	$password = $_POST['pass'];
	$address = $_POST['add']; 
	$sex = $_POST['gender'];
	$country = $_POST['country'];
	$education = $_POST['edu'];
	$education_list = implode(", ", $education);
	$file = $_FILES['file']['name'];
	echo $file;

	$sql = mysqli_query($conn, "INSERT INTO userdata (username, password, address, gender, state, course) VALUES ('$username', '$password', '$address', '$sex', '$country', '$education_list')");

	if($sql == true){
		echo "Data Inserted!";
	}
	else{
		echo "Error :: ".mysqli_connect_error($conn);
	}
}
?>

<form method="POST" enctype="multipart/form-data">
	UserName:<input type="text" name="user"></br></br>
	Password:<input type="password" name="pass"></br></br>
	Address:<textarea name="add" rows="4" cols="25"></textarea></br></br>
	Gender:<input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender" value="female">female</br></br>
	Country:<select name="country">
		<option value="-----">Select</option>
		<option value="a">A</option>
		<option value="b">B</option>
		<option value="c">C</option>
		<option value="d">D</option>
		<option value="e">E</option>
	</select></br></br>
	Education:<input type="checkbox" name="edu[]" value="diploma">Diploma
		<input type="checkbox" name="edu[]" value="bca">BCA
		<input type="checkbox" name="edu[]" value="b.tech">B.tech
		<input type="checkbox" name="edu[]" value="p.hd">P.Hd</br></br>
	File Upload:<input type="file" name="file"></br></br> 
	<input type="submit" name="submit" value="insert">
	
	<a href="http://localhost/corephp/insert.php"><input type="button" value="Insert Page"></a>
</form>